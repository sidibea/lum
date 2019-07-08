<?php

class FormatMoneyHelper_87e5733 extends \Sylius\Bundle\MoneyBundle\Templating\Helper\FormatMoneyHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder87e5733 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer87e5733 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87e5733 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function formatAmount(int $amount, string $currencyCode, string $localeCode) : string
    {
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, 'formatAmount', array('amount' => $amount, 'currencyCode' => $currencyCode, 'localeCode' => $localeCode), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        return $this->valueHolder87e5733->formatAmount($amount, $currencyCode, $localeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getName() : string
    {
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, 'getName', array(), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        return $this->valueHolder87e5733->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharset($charset)
    {
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, 'setCharset', array('charset' => $charset), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        return $this->valueHolder87e5733->setCharset($charset);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharset()
    {
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, 'getCharset', array(), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        return $this->valueHolder87e5733->getCharset();
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

        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\FormatMoneyHelper $instance) {
            unset($instance->moneyFormatter);
        }, $instance, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\FormatMoneyHelper')->__invoke($instance);

        $instance->initializer87e5733 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Sylius\Bundle\MoneyBundle\Formatter\MoneyFormatterInterface $moneyFormatter)
    {
        static $reflection;

        if (! $this->valueHolder87e5733) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\FormatMoneyHelper');
            $this->valueHolder87e5733 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\FormatMoneyHelper $instance) {
            unset($instance->moneyFormatter);
        }, $this, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\FormatMoneyHelper')->__invoke($this);

        }

        $this->valueHolder87e5733->__construct($moneyFormatter);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, '__get', ['name' => $name], $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        if (isset(self::$publicProperties87e5733[$name])) {
            return $this->valueHolder87e5733->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e5733;

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

        $targetObject = $this->valueHolder87e5733;
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
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e5733;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder87e5733;
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
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, '__isset', array('name' => $name), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e5733;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder87e5733;
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
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, '__unset', array('name' => $name), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e5733;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder87e5733;
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
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, '__clone', array(), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        $this->valueHolder87e5733 = clone $this->valueHolder87e5733;
    }

    public function __sleep()
    {
        $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, '__sleep', array(), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;

        return array('valueHolder87e5733');
    }

    public function __wakeup()
    {
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\FormatMoneyHelper $instance) {
            unset($instance->moneyFormatter);
        }, $this, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\FormatMoneyHelper')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer87e5733 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer87e5733;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer87e5733 && ($this->initializer87e5733->__invoke($valueHolder87e5733, $this, 'initializeProxy', array(), $this->initializer87e5733) || 1) && $this->valueHolder87e5733 = $valueHolder87e5733;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87e5733;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87e5733;
    }


}
