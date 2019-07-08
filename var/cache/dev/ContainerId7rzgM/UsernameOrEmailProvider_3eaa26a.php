<?php

class UsernameOrEmailProvider_3eaa26a extends \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3eaa26a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3eaa26a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3eaa26a = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function loadUserByUsername($username) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, 'loadUserByUsername', array('username' => $username), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        return $this->valueHolder3eaa26a->loadUserByUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, 'refreshUser', array('user' => $user), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        return $this->valueHolder3eaa26a->refreshUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsClass($class) : bool
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, 'supportsClass', array('class' => $class), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        return $this->valueHolder3eaa26a->supportsClass($class);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        unset($instance->supportedUserClass, $instance->userRepository, $instance->canonicalizer);

        $instance->initializer3eaa26a = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(string $supportedUserClass, \Sylius\Component\User\Repository\UserRepositoryInterface $userRepository, \Sylius\Component\User\Canonicalizer\CanonicalizerInterface $canonicalizer)
    {
        static $reflection;

        if (! $this->valueHolder3eaa26a) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');
            $this->valueHolder3eaa26a = $reflection->newInstanceWithoutConstructor();
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);

        }

        $this->valueHolder3eaa26a->__construct($supportedUserClass, $userRepository, $canonicalizer);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, '__get', ['name' => $name], $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        if (isset(self::$publicProperties3eaa26a[$name])) {
            return $this->valueHolder3eaa26a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eaa26a;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder3eaa26a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eaa26a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3eaa26a;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, '__isset', array('name' => $name), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eaa26a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3eaa26a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, '__unset', array('name' => $name), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eaa26a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3eaa26a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, '__clone', array(), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        $this->valueHolder3eaa26a = clone $this->valueHolder3eaa26a;
    }

    public function __sleep()
    {
        $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, '__sleep', array(), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;

        return array('valueHolder3eaa26a');
    }

    public function __wakeup()
    {
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer3eaa26a = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3eaa26a;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3eaa26a && ($this->initializer3eaa26a->__invoke($valueHolder3eaa26a, $this, 'initializeProxy', array(), $this->initializer3eaa26a) || 1) && $this->valueHolder3eaa26a = $valueHolder3eaa26a;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3eaa26a;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3eaa26a;
    }


}
