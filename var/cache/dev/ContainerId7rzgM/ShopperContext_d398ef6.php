<?php

class ShopperContext_d398ef6 extends \Sylius\Component\Core\Context\ShopperContext implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd398ef6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd398ef6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd398ef6 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getChannel() : \Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, 'getChannel', array(), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        return $this->valueHolderd398ef6->getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyCode() : string
    {
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, 'getCurrencyCode', array(), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        return $this->valueHolderd398ef6->getCurrencyCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocaleCode() : string
    {
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, 'getLocaleCode', array(), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        return $this->valueHolderd398ef6->getLocaleCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer() : ?\Sylius\Component\Customer\Model\CustomerInterface
    {
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, 'getCustomer', array(), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        return $this->valueHolderd398ef6->getCustomer();
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

        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $instance, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($instance);

        $instance->initializerd398ef6 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Sylius\Component\Channel\Context\ChannelContextInterface $channelContext, \Sylius\Component\Currency\Context\CurrencyContextInterface $currencyContext, \Sylius\Component\Locale\Context\LocaleContextInterface $localeContext, \Sylius\Component\Customer\Context\CustomerContextInterface $customerContext)
    {
        static $reflection;

        if (! $this->valueHolderd398ef6) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Component\\Core\\Context\\ShopperContext');
            $this->valueHolderd398ef6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $this, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($this);

        }

        $this->valueHolderd398ef6->__construct($channelContext, $currencyContext, $localeContext, $customerContext);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, '__get', ['name' => $name], $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        if (isset(self::$publicPropertiesd398ef6[$name])) {
            return $this->valueHolderd398ef6->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd398ef6;

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

        $targetObject = $this->valueHolderd398ef6;
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
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd398ef6;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd398ef6;
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
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, '__isset', array('name' => $name), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd398ef6;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd398ef6;
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
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, '__unset', array('name' => $name), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd398ef6;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd398ef6;
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
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, '__clone', array(), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        $this->valueHolderd398ef6 = clone $this->valueHolderd398ef6;
    }

    public function __sleep()
    {
        $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, '__sleep', array(), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;

        return array('valueHolderd398ef6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $this, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerd398ef6 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd398ef6;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd398ef6 && ($this->initializerd398ef6->__invoke($valueHolderd398ef6, $this, 'initializeProxy', array(), $this->initializerd398ef6) || 1) && $this->valueHolderd398ef6 = $valueHolderd398ef6;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd398ef6;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd398ef6;
    }


}
