<?php

class CurrencyHelper_dd0a15b extends \Sylius\Bundle\CurrencyBundle\Templating\Helper\CurrencyHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderdd0a15b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd0a15b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd0a15b = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function convertCurrencyCodeToSymbol(string $code) : string
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'convertCurrencyCodeToSymbol', array('code' => $code), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        return $this->valueHolderdd0a15b->convertCurrencyCodeToSymbol($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getName() : string
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'getName', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        return $this->valueHolderdd0a15b->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharset($charset)
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'setCharset', array('charset' => $charset), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        return $this->valueHolderdd0a15b->setCharset($charset);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharset()
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'getCharset', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        return $this->valueHolderdd0a15b->getCharset();
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

        unset($instance->charset);

        $instance->initializerdd0a15b = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderdd0a15b) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');
            $this->valueHolderdd0a15b = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__get', ['name' => $name], $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        if (isset(self::$publicPropertiesdd0a15b[$name])) {
            return $this->valueHolderdd0a15b->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;

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

        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__isset', array('name' => $name), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__unset', array('name' => $name), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__clone', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        $this->valueHolderdd0a15b = clone $this->valueHolderdd0a15b;
    }

    public function __sleep()
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__sleep', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;

        return array('valueHolderdd0a15b');
    }

    public function __wakeup()
    {
        unset($this->charset);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerdd0a15b = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerdd0a15b;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'initializeProxy', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd0a15b;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd0a15b;
    }


}
