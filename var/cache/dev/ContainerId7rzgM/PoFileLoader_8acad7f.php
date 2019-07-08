<?php

class PoFileLoader_8acad7f extends \Symfony\Component\Translation\Loader\PoFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8acad7f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8acad7f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8acad7f = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;

        return $this->valueHolder8acad7f->load($resource, $locale, $domain);
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

        $instance->initializer8acad7f = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder8acad7f) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\PoFileLoader');
            $this->valueHolder8acad7f = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__get', ['name' => $name], $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;

        if (isset(self::$publicProperties8acad7f[$name])) {
            return $this->valueHolder8acad7f->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;

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

        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__isset', array('name' => $name), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__unset', array('name' => $name), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__clone', array(), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;

        $this->valueHolder8acad7f = clone $this->valueHolder8acad7f;
    }

    public function __sleep()
    {
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__sleep', array(), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;

        return array('valueHolder8acad7f');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer8acad7f = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer8acad7f;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, 'initializeProxy', array(), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8acad7f;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8acad7f;
    }


}
