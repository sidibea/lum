<?php

class QtFileLoader_b0bf5a8 extends \Symfony\Component\Translation\Loader\QtFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderb0bf5a8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb0bf5a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0bf5a8 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;

        return $this->valueHolderb0bf5a8->load($resource, $locale, $domain);
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

        $instance->initializerb0bf5a8 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderb0bf5a8) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\QtFileLoader');
            $this->valueHolderb0bf5a8 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, '__get', ['name' => $name], $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;

        if (isset(self::$publicPropertiesb0bf5a8[$name])) {
            return $this->valueHolderb0bf5a8->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0bf5a8;

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

        $targetObject = $this->valueHolderb0bf5a8;
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
        $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0bf5a8;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderb0bf5a8;
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
        $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, '__isset', array('name' => $name), $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0bf5a8;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb0bf5a8;
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
        $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, '__unset', array('name' => $name), $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0bf5a8;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb0bf5a8;
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
        $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, '__clone', array(), $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;

        $this->valueHolderb0bf5a8 = clone $this->valueHolderb0bf5a8;
    }

    public function __sleep()
    {
        $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, '__sleep', array(), $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;

        return array('valueHolderb0bf5a8');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerb0bf5a8 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerb0bf5a8;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerb0bf5a8 && ($this->initializerb0bf5a8->__invoke($valueHolderb0bf5a8, $this, 'initializeProxy', array(), $this->initializerb0bf5a8) || 1) && $this->valueHolderb0bf5a8 = $valueHolderb0bf5a8;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb0bf5a8;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb0bf5a8;
    }


}
