<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/SerializerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ArrayTransformerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Serializer.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/AbstractCollection.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/CollectionInterface.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/MapInterface.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/AbstractMap.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/SortableInterface.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/Map.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/EventDispatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/EventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Construction/ObjectConstructorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Construction/UnserializeObjectConstructor.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ContextFactory/SerializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ContextFactory/DeserializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';

$a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'hateoas.event_subscriber.json' => array('services', 'hateoas.event_subscriber.json', 'getHateoas_EventSubscriber_JsonService.php', true),
    'hateoas.event_subscriber.xml' => array('services', 'hateoas.event_subscriber.xml', 'getHateoas_EventSubscriber_XmlService.php', true),
    'jms_serializer.doctrine_proxy_subscriber' => array('services', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService.php', true),
    'jms_serializer.stopwatch_subscriber' => array('services', 'jms_serializer.stopwatch_subscriber', 'getJmsSerializer_StopwatchSubscriberService.php', true),
)));
$a->setListeners(array('serializer.post_serialize' => array(0 => array(0 => array(0 => 'hateoas.event_subscriber.xml', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'xml'), 1 => array(0 => array(0 => 'hateoas.event_subscriber.json', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 2 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL)), 'serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL))));

$this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer(($this->privates['jms_serializer.metadata_factory'] ?? $this->load('getJmsSerializer_MetadataFactoryService.php')), ($this->services['fos_rest.serializer.jms_handler_registry'] ?? $this->load('getFosRest_Serializer_JmsHandlerRegistryService.php')), ($this->privates['jms_serializer.unserialize_object_constructor'] ?? $this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor()), new \PhpCollection\Map(array('json' => ($this->services['jms_serializer.json_serialization_visitor'] ?? $this->load('getJmsSerializer_JsonSerializationVisitorService.php')), 'xml' => ($this->services['jms_serializer.xml_serialization_visitor'] ?? $this->load('getJmsSerializer_XmlSerializationVisitorService.php')), 'yml' => ($this->services['jms_serializer.yaml_serialization_visitor'] ?? $this->load('getJmsSerializer_YamlSerializationVisitorService.php')))), new \PhpCollection\Map(array('json' => ($this->services['jms_serializer.json_deserialization_visitor'] ?? $this->load('getJmsSerializer_JsonDeserializationVisitorService.php')), 'xml' => ($this->services['jms_serializer.xml_deserialization_visitor'] ?? $this->load('getJmsSerializer_XmlDeserializationVisitorService.php')))), $a, NULL, ($this->privates['jms_serializer.expression_evaluator'] ?? $this->load('getJmsSerializer_ExpressionEvaluatorService.php')));

$instance->setSerializationContextFactory(($this->services['jms_serializer.serialization_context_factory'] ?? $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()));
$instance->setDeserializationContextFactory(($this->services['jms_serializer.deserialization_context_factory'] ?? $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()));

return $instance;
