<?php

class IniFileLoader_d75c726 extends \Symfony\Component\Translation\Loader\IniFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd75c726 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd75c726 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd75c726 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;

        return $this->valueHolderd75c726->load($resource, $locale, $domain);
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

        $instance->initializerd75c726 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderd75c726) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\IniFileLoader');
            $this->valueHolderd75c726 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, '__get', ['name' => $name], $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;

        if (isset(self::$publicPropertiesd75c726[$name])) {
            return $this->valueHolderd75c726->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75c726;

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

        $targetObject = $this->valueHolderd75c726;
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
        $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75c726;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd75c726;
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
        $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, '__isset', array('name' => $name), $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75c726;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd75c726;
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
        $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, '__unset', array('name' => $name), $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75c726;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd75c726;
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
        $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, '__clone', array(), $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;

        $this->valueHolderd75c726 = clone $this->valueHolderd75c726;
    }

    public function __sleep()
    {
        $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, '__sleep', array(), $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;

        return array('valueHolderd75c726');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerd75c726 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd75c726;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd75c726 && ($this->initializerd75c726->__invoke($valueHolderd75c726, $this, 'initializeProxy', array(), $this->initializerd75c726) || 1) && $this->valueHolderd75c726 = $valueHolderd75c726;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd75c726;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd75c726;
    }


}
