<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Compiler\ResolveChildDefinitionsPass;
use Symfony\Component\DependencyInjection\Compiler\ResolveClassPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\Messenger\Command\ConsumeMessagesCommand;
use Symfony\Component\Messenger\Command\DebugCommand;
use Symfony\Component\Messenger\DataCollector\MessengerDataCollector;
use Symfony\Component\Messenger\DependencyInjection\MessengerPass;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Handler\HandlersLocator;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\Handler\MessageSubscriberInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Middleware\HandleMessageMiddleware;
use Symfony\Component\Messenger\Middleware\MiddlewareInterface;
use Symfony\Component\Messenger\Middleware\StackInterface;
use Symfony\Component\Messenger\Tests\Fixtures\DummyCommand;
use Symfony\Component\Messenger\Tests\Fixtures\DummyCommandHandler;
use Symfony\Component\Messenger\Tests\Fixtures\DummyMessage;
use Symfony\Component\Messenger\Tests\Fixtures\DummyQuery;
use Symfony\Component\Messenger\Tests\Fixtures\DummyQueryHandler;
use Symfony\Component\Messenger\Tests\Fixtures\MultipleBusesMessage;
use Symfony\Component\Messenger\Tests\Fixtures\MultipleBusesMessageHandler;
use Symfony\Component\Messenger\Tests\Fixtures\SecondMessage;
use Symfony\Component\Messenger\Transport\AmqpExt\AmqpReceiver;
use Symfony\Component\Messenger\Transport\Receiver\ReceiverInterface;

class MessengerPassTest extends TestCase
{
    public function testProcess()
    {
        $container = $this->getContainerBuilder($busId = 'message_bus');
        $container
            ->register(DummyHandler::class, DummyHandler::class)
            ->addTag('messenger.message_handler')
        ;
        $container
            ->register(MissingArgumentTypeHandler::class, MissingArgumentTypeHandler::class)
            ->addTag('messenger.message_handler', array('handles' => SecondMessage::class))
        ;
        $container
            ->register(DummyReceiver::class, DummyReceiver::class)
            ->addTag('messenger.receiver')
        ;

        (new MessengerPass())->process($container);

        $this->assertFalse($container->hasDefinition('messenger.middleware.debug.logging'));

        $handlersLocatorDefinition = $container->getDefinition($busId.'.messenger.handlers_locator');
        $this->assertSame(HandlersLocator::class, $handlersLocatorDefinition->getClass());
        $this->assertEquals(
            array(
                DummyMessage::class => new Reference("messenger.handlers.$busId.".DummyMessage::class),
                SecondMessage::class => new Reference("messenger.handlers.$busId.".SecondMessage::class),
            ),
            $handlersLocatorDefinition->getArgument(0)
        );

        $this->assertEquals(
            array(DummyReceiver::class => new Reference(DummyReceiver::class)),
            $container->getDefinition('messenger.receiver_locator')->getArgument(0)
        );
    }

    public function testProcessHandlersByBus()
    {
        $container = $this->getContainerBuilder($commandBusId = 'command_bus');
        $container->register($queryBusId = 'query_bus', MessageBusInterface::class)->setArgument(0, array())->addTag('messenger.bus');
        $container->register('messenger.middleware.handle_message', HandleMessageMiddleware::class)
            ->addArgument(null)
            ->setAbstract(true)
        ;

        $middlewareHandlers = array(array('id' => 'handle_message'));

        $container->setParameter($commandBusId.'.middleware', $middlewareHandlers);
        $container->setParameter($queryBusId.'.middleware', $middlewareHandlers);

        $container->register(DummyCommandHandler::class)->addTag('messenger.message_handler', array('bus' => $commandBusId));
        $container->register(DummyQueryHandler::class)->addTag('messenger.message_handler', array('bus' => $queryBusId));
        $container->register(MultipleBusesMessageHandler::class)
            ->addTag('messenger.message_handler', array('bus' => $commandBusId))
            ->addTag('messenger.message_handler', array('bus' => $queryBusId))
        ;

        (new ResolveClassPass())->process($container);
        (new MessengerPass())->process($container);

        $commandBusHandlersLocatorDefinition = $container->getDefinition($commandBusId.'.messenger.handlers_locator');
        $this->assertSame(HandlersLocator::class, $commandBusHandlersLocatorDefinition->getClass());
        $this->assertEquals(
            array(
                MultipleBusesMessage::class => new Reference("messenger.handlers.$commandBusId.".MultipleBusesMessage::class),
                DummyCommand::class => new Reference("messenger.handlers.$commandBusId.".DummyCommand::class),
            ),
            $commandBusHandlersLocatorDefinition->getArgument(0)
        );

        $queryBusHandlersLocatorDefinition = $container->getDefinition($queryBusId.'.messenger.handlers_locator');
        $this->assertSame(HandlersLocator::class, $queryBusHandlersLocatorDefinition->getClass());
        $this->assertEquals(
            array(
                DummyQuery::class => new Reference("messenger.handlers.$queryBusId.".DummyQuery::class),
                MultipleBusesMessage::class => new Reference("messenger.handlers.$queryBusId.".MultipleBusesMessage::class),
            ),
            $queryBusHandlersLocatorDefinition->getArgument(0)
        );
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\Fixtures\DummyCommandHandler": bus "unknown_bus" specified on the tag "messenger.message_handler" does not exist (known ones are: command_bus).
     */
    public function testProcessTagWithUnknownBus()
    {
        $container = $this->getContainerBuilder($commandBusId = 'command_bus');

        $container->register(DummyCommandHandler::class)->addTag('messenger.message_handler', array('bus' => 'unknown_bus'));

        (new ResolveClassPass())->process($container);
        (new MessengerPass())->process($container);
    }

    public function testGetClassesFromTheHandlerSubscriberInterface()
    {
        $container = $this->getContainerBuilder($busId = 'message_bus');
        $container
            ->register(HandlerWithMultipleMessages::class, HandlerWithMultipleMessages::class)
            ->addTag('messenger.message_handler')
        ;
        $container
            ->register(PrioritizedHandler::class, PrioritizedHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);

        $handlersMapping = $container->getDefinition($busId.'.messenger.handlers_locator')->getArgument(0);

        $this->assertArrayHasKey(DummyMessage::class, $handlersMapping);
        $this->assertEquals(new Reference("messenger.handlers.$busId.".DummyMessage::class), $handlersMapping[DummyMessage::class]);

        $this->assertArrayHasKey(SecondMessage::class, $handlersMapping);
        $handlersDefinition = $container->getDefinition($handlersMapping[SecondMessage::class]);

        $this->assertSame(RewindableGenerator::class, $handlersDefinition->getClass());
        $this->assertEquals(array(new Reference(PrioritizedHandler::class), new Reference(HandlerWithMultipleMessages::class)), $handlersDefinition->getArgument(0)[0]);
    }

    public function testGetClassesAndMethodsAndPrioritiesFromTheSubscriber()
    {
        $container = $this->getContainerBuilder($busId = 'message_bus');
        $container
            ->register(HandlerMappingMethods::class, HandlerMappingMethods::class)
            ->addTag('messenger.message_handler')
        ;
        $container
            ->register(PrioritizedHandler::class, PrioritizedHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);

        $handlersMapping = $container->getDefinition($busId.'.messenger.handlers_locator')->getArgument(0);

        $this->assertArrayHasKey(DummyMessage::class, $handlersMapping);
        $this->assertArrayHasKey(SecondMessage::class, $handlersMapping);

        $dummyHandlerReference = $container->getDefinition($handlersMapping[DummyMessage::class])->getArgument(0)[0][0];
        $dummyHandlerDefinition = $container->getDefinition($dummyHandlerReference);
        $this->assertSame('callable', $dummyHandlerDefinition->getClass());
        $this->assertEquals(array(new Reference(HandlerMappingMethods::class), 'dummyMethod'), $dummyHandlerDefinition->getArgument(0));
        $this->assertSame(array('Closure', 'fromCallable'), $dummyHandlerDefinition->getFactory());

        $secondHandlerReference = $container->getDefinition($handlersMapping[SecondMessage::class])->getArgument(0)[0][1];
        $secondHandlerDefinition = $container->getDefinition($secondHandlerReference);
        $this->assertSame(PrioritizedHandler::class, $secondHandlerDefinition->getClass());
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid service "NonExistentHandlerClass": class "NonExistentHandlerClass" does not exist.
     */
    public function testThrowsExceptionIfTheHandlerClassDoesNotExist()
    {
        $container = $this->getContainerBuilder();
        $container->register('message_bus', MessageBusInterface::class)->addTag('messenger.bus');
        $container
            ->register('NonExistentHandlerClass', 'NonExistentHandlerClass')
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\HandlerMappingWithNonExistentMethod": method "Symfony\Component\Messenger\Tests\DependencyInjection\HandlerMappingWithNonExistentMethod::dummyMethod()" does not exist.
     */
    public function testThrowsExceptionIfTheHandlerMethodDoesNotExist()
    {
        $container = $this->getContainerBuilder();
        $container->register('message_bus', MessageBusInterface::class)->addTag('messenger.bus');
        $container
            ->register(HandlerMappingWithNonExistentMethod::class, HandlerMappingWithNonExistentMethod::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    public function testItRegistersReceivers()
    {
        $container = $this->getContainerBuilder();
        $container->register('message_bus', MessageBusInterface::class)->addTag('messenger.bus');
        $container->register(AmqpReceiver::class, AmqpReceiver::class)->addTag('messenger.receiver', array('alias' => 'amqp'));

        (new MessengerPass())->process($container);

        $this->assertEquals(array('amqp' => new Reference(AmqpReceiver::class), AmqpReceiver::class => new Reference(AmqpReceiver::class)), $container->getDefinition('messenger.receiver_locator')->getArgument(0));
    }

    public function testItRegistersReceiversWithoutTagName()
    {
        $container = $this->getContainerBuilder();
        $container->register('message_bus', MessageBusInterface::class)->addTag('messenger.bus');
        $container->register(AmqpReceiver::class, AmqpReceiver::class)->addTag('messenger.receiver');

        (new MessengerPass())->process($container);

        $this->assertEquals(array(AmqpReceiver::class => new Reference(AmqpReceiver::class)), $container->getDefinition('messenger.receiver_locator')->getArgument(0));
    }

    public function testItRegistersMultipleReceiversAndSetsTheReceiverNamesOnTheCommand()
    {
        $container = $this->getContainerBuilder();
        $container->register('console.command.messenger_consume_messages', ConsumeMessagesCommand::class)->setArguments(array(
            null,
            new Reference('messenger.receiver_locator'),
            null,
            null,
            null,
        ));

        $container->register(AmqpReceiver::class, AmqpReceiver::class)->addTag('messenger.receiver', array('alias' => 'amqp'));
        $container->register(DummyReceiver::class, DummyReceiver::class)->addTag('messenger.receiver', array('alias' => 'dummy'));

        (new MessengerPass())->process($container);

        $this->assertSame(array('amqp', 'dummy'), $container->getDefinition('console.command.messenger_consume_messages')->getArgument(3));
        $this->assertSame(array('message_bus'), $container->getDefinition('console.command.messenger_consume_messages')->getArgument(4));
    }

    public function testItShouldNotThrowIfGeneratorIsReturnedInsteadOfArray()
    {
        $container = $this->getContainerBuilder($busId = 'message_bus');
        $container
            ->register(HandlerWithGenerators::class, HandlerWithGenerators::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);

        $handlersMapping = $container->getDefinition($busId.'.messenger.handlers_locator')->getArgument(0);

        $this->assertArrayHasKey(DummyMessage::class, $handlersMapping);
        $firstReference = $container->getDefinition($handlersMapping[DummyMessage::class])->getArgument(0)[0][0];
        $this->assertEquals(array(new Reference(HandlerWithGenerators::class), 'dummyMethod'), $container->getDefinition($firstReference)->getArgument(0));

        $this->assertArrayHasKey(SecondMessage::class, $handlersMapping);
        $secondReference = $container->getDefinition($handlersMapping[SecondMessage::class])->getArgument(0)[0][0];
        $this->assertEquals(array(new Reference(HandlerWithGenerators::class), 'secondMessage'), $container->getDefinition($secondReference)->getArgument(0));
    }

    public function testItRegistersHandlersOnDifferentBuses()
    {
        $container = $this->getContainerBuilder($eventsBusId = 'event_bus');
        $container->register($commandsBusId = 'command_bus', MessageBusInterface::class)->addTag('messenger.bus')->setArgument(0, array());

        $container
            ->register(HandlerOnSpecificBuses::class, HandlerOnSpecificBuses::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);

        $eventsHandlerMapping = $container->getDefinition($eventsBusId.'.messenger.handlers_locator')->getArgument(0);

        $this->assertEquals(array(DummyMessage::class), array_keys($eventsHandlerMapping));
        $firstReference = $container->getDefinition($eventsHandlerMapping[DummyMessage::class])->getArgument(0)[0][0];
        $this->assertEquals(array(new Reference(HandlerOnSpecificBuses::class), 'dummyMethodForEvents'), $container->getDefinition($firstReference)->getArgument(0));

        $commandsHandlerMapping = $container->getDefinition($commandsBusId.'.messenger.handlers_locator')->getArgument(0);

        $this->assertEquals(array(DummyMessage::class), array_keys($commandsHandlerMapping));
        $firstReference = $container->getDefinition($commandsHandlerMapping[DummyMessage::class])->getArgument(0)[0][0];
        $this->assertEquals(array(new Reference(HandlerOnSpecificBuses::class), 'dummyMethodForCommands'), $container->getDefinition($firstReference)->getArgument(0));
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid configuration returned by method "Symfony\Component\Messenger\Tests\DependencyInjection\HandlerOnUndefinedBus::getHandledMessages()" for message "Symfony\Component\Messenger\Tests\Fixtures\DummyMessage": bus "some_undefined_bus" does not exist.
     */
    public function testItThrowsAnExceptionOnUnknownBus()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(HandlerOnUndefinedBus::class, HandlerOnUndefinedBus::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessageHandler": class or interface "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessage" used as argument type in method "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessageHandler::__invoke()" not found.
     */
    public function testUndefinedMessageClassForHandler()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(UndefinedMessageHandler::class, UndefinedMessageHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessageHandlerViaHandlerInterface": class or interface "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessage" used as argument type in method "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessageHandlerViaHandlerInterface::__invoke()" not found.
     */
    public function testUndefinedMessageClassForHandlerImplementingMessageHandlerInterface()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(UndefinedMessageHandlerViaHandlerInterface::class, UndefinedMessageHandlerViaHandlerInterface::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessageHandlerViaSubscriberInterface": class or interface "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessage" returned by method "Symfony\Component\Messenger\Tests\DependencyInjection\UndefinedMessageHandlerViaSubscriberInterface::getHandledMessages()" not found.
     */
    public function testUndefinedMessageClassForHandlerImplementingMessageSubscriberInterface()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(UndefinedMessageHandlerViaSubscriberInterface::class, UndefinedMessageHandlerViaSubscriberInterface::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\NotInvokableHandler": class "Symfony\Component\Messenger\Tests\DependencyInjection\NotInvokableHandler" must have an "__invoke()" method.
     */
    public function testNotInvokableHandler()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(NotInvokableHandler::class, NotInvokableHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\MissingArgumentHandler": method "Symfony\Component\Messenger\Tests\DependencyInjection\MissingArgumentHandler::__invoke()" must have exactly one argument corresponding to the message it handles.
     */
    public function testMissingArgumentHandler()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(MissingArgumentHandler::class, MissingArgumentHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\MissingArgumentTypeHandler": argument "$message" of method "Symfony\Component\Messenger\Tests\DependencyInjection\MissingArgumentTypeHandler::__invoke()" must have a type-hint corresponding to the message class it handles.
     */
    public function testMissingArgumentTypeHandler()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(MissingArgumentTypeHandler::class, MissingArgumentTypeHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\BuiltinArgumentTypeHandler": type-hint of argument "$message" in method "Symfony\Component\Messenger\Tests\DependencyInjection\BuiltinArgumentTypeHandler::__invoke()" must be a class , "string" given.
     */
    public function testBuiltinArgumentTypeHandler()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(BuiltinArgumentTypeHandler::class, BuiltinArgumentTypeHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid handler service "Symfony\Component\Messenger\Tests\DependencyInjection\HandleNoMessageHandler": method "Symfony\Component\Messenger\Tests\DependencyInjection\HandleNoMessageHandler::getHandledMessages()" must return one or more messages.
     */
    public function testNeedsToHandleAtLeastOneMessage()
    {
        $container = $this->getContainerBuilder();
        $container
            ->register(HandleNoMessageHandler::class, HandleNoMessageHandler::class)
            ->addTag('messenger.message_handler')
        ;

        (new MessengerPass())->process($container);
    }

    public function testRegistersTraceableBusesToCollector()
    {
        $dataCollector = $this->getMockBuilder(MessengerDataCollector::class)->getMock();

        $container = $this->getContainerBuilder($fooBusId = 'messenger.bus.foo');
        $container->register('data_collector.messenger', $dataCollector);
        $container->setParameter('kernel.debug', true);

        (new MessengerPass())->process($container);

        $this->assertTrue($container->hasDefinition($debuggedFooBusId = 'debug.traced.'.$fooBusId));
        $this->assertSame(array($fooBusId, null, 0), $container->getDefinition($debuggedFooBusId)->getDecoratedService());
        $this->assertEquals(array(array('registerBus', array($fooBusId, new Reference($debuggedFooBusId)))), $container->getDefinition('data_collector.messenger')->getMethodCalls());
    }

    public function testRegistersMiddlewareFromServices()
    {
        $container = $this->getContainerBuilder($fooBusId = 'messenger.bus.foo');
        $container->register('middleware_with_factory', UselessMiddleware::class)->addArgument('some_default')->setAbstract(true);
        $container->register('middleware_with_factory_using_default', UselessMiddleware::class)->addArgument('some_default')->setAbstract(true);
        $container->register(UselessMiddleware::class, UselessMiddleware::class);

        $container->setParameter($middlewareParameter = $fooBusId.'.middleware', array(
            array('id' => UselessMiddleware::class),
            array('id' => 'middleware_with_factory', 'arguments' => array('index_0' => 'foo', 'bar')),
            array('id' => 'middleware_with_factory_using_default'),
        ));

        (new MessengerPass())->process($container);
        (new ResolveChildDefinitionsPass())->process($container);

        $this->assertTrue($container->hasDefinition($factoryChildMiddlewareId = $fooBusId.'.middleware.middleware_with_factory'));
        $this->assertEquals(
            array('foo', 'bar'),
            $container->getDefinition($factoryChildMiddlewareId)->getArguments(),
            'parent default argument is overridden, and next ones appended'
        );

        $this->assertTrue($container->hasDefinition($factoryWithDefaultChildMiddlewareId = $fooBusId.'.middleware.middleware_with_factory_using_default'));
        $this->assertEquals(
            array('some_default'),
            $container->getDefinition($factoryWithDefaultChildMiddlewareId)->getArguments(),
            'parent default argument is used'
        );

        $this->assertEquals(array(
            new Reference(UselessMiddleware::class),
            new Reference($factoryChildMiddlewareId),
            new Reference($factoryWithDefaultChildMiddlewareId),
        ), $container->getDefinition($fooBusId)->getArgument(0)->getValues());
        $this->assertFalse($container->hasParameter($middlewareParameter));
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid middleware: service "not_defined_middleware" not found.
     */
    public function testCannotRegistersAnUndefinedMiddleware()
    {
        $container = $this->getContainerBuilder($fooBusId = 'messenger.bus.foo');
        $container->setParameter($middlewareParameter = $fooBusId.'.middleware', array(
            array('id' => 'not_defined_middleware', 'arguments' => array()),
        ));

        (new MessengerPass())->process($container);
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage Invalid middleware factory "not_an_abstract_definition": a middleware factory must be an abstract definition.
     */
    public function testMiddlewareFactoryDefinitionMustBeAbstract()
    {
        $container = $this->getContainerBuilder($fooBusId = 'messenger.bus.foo');
        $container->register('not_an_abstract_definition', UselessMiddleware::class);
        $container->setParameter($middlewareParameter = $fooBusId.'.middleware', array(
            array('id' => 'not_an_abstract_definition', 'arguments' => array('foo')),
        ));

        (new MessengerPass())->process($container);
    }

    public function testItRegistersTheDebugCommand()
    {
        $container = $this->getContainerBuilder($commandBusId = 'command_bus');
        $container->register($queryBusId = 'query_bus', MessageBusInterface::class)->setArgument(0, array())->addTag('messenger.bus');
        $container->register($emptyBus = 'empty_bus', MessageBusInterface::class)->setArgument(0, array())->addTag('messenger.bus');
        $container->register('messenger.middleware.handle_message', HandleMessageMiddleware::class)
            ->addArgument(null)
            ->setAbstract(true)
        ;

        $container->register('console.command.messenger_debug', DebugCommand::class)->addArgument(array());

        $middlewareHandlers = array(array('id' => 'handle_message'));

        $container->setParameter($commandBusId.'.middleware', $middlewareHandlers);
        $container->setParameter($queryBusId.'.middleware', $middlewareHandlers);

        $container->register(DummyCommandHandler::class)->addTag('messenger.message_handler', array('bus' => $commandBusId));
        $container->register(DummyQueryHandler::class)->addTag('messenger.message_handler', array('bus' => $queryBusId));
        $container->register(MultipleBusesMessageHandler::class)
            ->addTag('messenger.message_handler', array('bus' => $commandBusId))
            ->addTag('messenger.message_handler', array('bus' => $queryBusId))
        ;

        (new ResolveClassPass())->process($container);
        (new MessengerPass())->process($container);

        $this->assertEquals(array(
            $commandBusId => array(
                DummyCommand::class => array(DummyCommandHandler::class),
                MultipleBusesMessage::class => array(MultipleBusesMessageHandler::class),
            ),
            $queryBusId => array(
                DummyQuery::class => array(DummyQueryHandler::class),
                MultipleBusesMessage::class => array(MultipleBusesMessageHandler::class),
            ),
            $emptyBus => array(),
        ), $container->getDefinition('console.command.messenger_debug')->getArgument(0));
    }

    private function getContainerBuilder(string $busId = 'message_bus'): ContainerBuilder
    {
        $container = new ContainerBuilder();
        $container->setParameter('kernel.debug', true);

        $container->register($busId, MessageBusInterface::class)->addTag('messenger.bus')->setArgument(0, array());
        if ('message_bus' !== $busId) {
            $container->setAlias('message_bus', $busId);
        }

        $container->register('messenger.receiver_locator', ServiceLocator::class)
            ->addArgument(new Reference('service_container'))
        ;

        return $container;
    }
}

class DummyHandler
{
    public function __invoke(DummyMessage $message): void
    {
    }
}

class DummyReceiver implements ReceiverInterface
{
    public function receive(callable $handler): void
    {
        for ($i = 0; $i < 3; ++$i) {
            $handler(new Envelope(new DummyMessage("Dummy $i")));
        }
    }

    public function stop(): void
    {
    }
}

class InvalidReceiver
{
}

class InvalidSender
{
}

class UndefinedMessageHandler
{
    public function __invoke(UndefinedMessage $message)
    {
    }
}

class UndefinedMessageHandlerViaHandlerInterface implements MessageHandlerInterface
{
    public function __invoke(UndefinedMessage $message)
    {
    }
}

class UndefinedMessageHandlerViaSubscriberInterface implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        return array(UndefinedMessage::class);
    }

    public function __invoke()
    {
    }
}

class NotInvokableHandler
{
}

class MissingArgumentHandler
{
    public function __invoke()
    {
    }
}

class MissingArgumentTypeHandler
{
    public function __invoke($message)
    {
    }
}

class BuiltinArgumentTypeHandler
{
    public function __invoke(string $message)
    {
    }
}

class HandlerWithMultipleMessages implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        return array(
            DummyMessage::class,
            SecondMessage::class,
        );
    }

    public function __invoke()
    {
    }
}

class PrioritizedHandler implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        yield SecondMessage::class => array('priority' => 10);
    }

    public function __invoke()
    {
    }
}

class HandlerMappingMethods implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        yield DummyMessage::class => 'dummyMethod';
        yield SecondMessage::class => array('method' => 'secondMessage', 'priority' => 20);
    }

    public function dummyMethod()
    {
    }

    public function secondMessage()
    {
    }
}

class HandlerMappingWithNonExistentMethod implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        return array(
            DummyMessage::class => 'dummyMethod',
        );
    }
}

class HandleNoMessageHandler implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        return array();
    }

    public function __invoke()
    {
    }
}

class HandlerWithGenerators implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        yield DummyMessage::class => 'dummyMethod';
        yield SecondMessage::class => 'secondMessage';
    }

    public function dummyMethod()
    {
    }

    public function secondMessage()
    {
    }
}

class HandlerOnSpecificBuses implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        yield DummyMessage::class => array('method' => 'dummyMethodForEvents', 'bus' => 'event_bus');
        yield DummyMessage::class => array('method' => 'dummyMethodForCommands', 'bus' => 'command_bus');
    }

    public function dummyMethodForEvents()
    {
    }

    public function dummyMethodForCommands()
    {
    }
}

class HandlerOnUndefinedBus implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        yield DummyMessage::class => array('method' => 'dummyMethodForSomeBus', 'bus' => 'some_undefined_bus');
    }

    public function dummyMethodForSomeBus()
    {
    }
}

class UselessMiddleware implements MiddlewareInterface
{
    public function handle(Envelope $message, StackInterface $stack): Envelope
    {
        return $stack->next()->handle($message, $stack);
    }
}
