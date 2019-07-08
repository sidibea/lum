<?php

class PhpFileLoader_e63c58d extends \Symfony\Component\Translation\Loader\PhpFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere63c58d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere63c58d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese63c58d = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;

        return $this->valueHoldere63c58d->load($resource, $locale, $domain);
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

        $instance->initializere63c58d = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere63c58d) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\PhpFileLoader');
            $this->valueHoldere63c58d = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, '__get', ['name' => $name], $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;

        if (isset(self::$publicPropertiese63c58d[$name])) {
            return $this->valueHoldere63c58d->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere63c58d;

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

        $targetObject = $this->valueHoldere63c58d;
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
        $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere63c58d;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere63c58d;
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
        $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, '__isset', array('name' => $name), $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere63c58d;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere63c58d;
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
        $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, '__unset', array('name' => $name), $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere63c58d;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere63c58d;
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
        $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, '__clone', array(), $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;

        $this->valueHoldere63c58d = clone $this->valueHoldere63c58d;
    }

    public function __sleep()
    {
        $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, '__sleep', array(), $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;

        return array('valueHoldere63c58d');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializere63c58d = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere63c58d;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere63c58d && ($this->initializere63c58d->__invoke($valueHoldere63c58d, $this, 'initializeProxy', array(), $this->initializere63c58d) || 1) && $this->valueHoldere63c58d = $valueHoldere63c58d;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere63c58d;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere63c58d;
    }


}
