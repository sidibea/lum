<?php

class EntityRepository_afc836c extends \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderafc836c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerafc836c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesafc836c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function add(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'add', array('resource' => $resource), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        $this->valueHolderafc836c->add($resource);
return;
    }

    /**
     * {@inheritDoc}
     */
    public function remove(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'remove', array('resource' => $resource), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        $this->valueHolderafc836c->remove($resource);
return;
    }

    /**
     * {@inheritDoc}
     */
    public function createPaginator(array $criteria = [], array $sorting = []) : iterable
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'createPaginator', array('criteria' => $criteria, 'sorting' => $sorting), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->createPaginator($criteria, $sorting);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'clear', array(), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'findAll', array(), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'count', array('criteria' => $criteria), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'getClassName', array(), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'matching', array('criteria' => $criteria), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return $this->valueHolderafc836c->matching($criteria);
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

        unset($instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializerafc836c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolderafc836c) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository');
            $this->valueHolderafc836c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderafc836c->__construct($em, $class);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, '__get', ['name' => $name], $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        if (isset(self::$publicPropertiesafc836c[$name])) {
            return $this->valueHolderafc836c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafc836c;

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

        $targetObject = $this->valueHolderafc836c;
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
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafc836c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderafc836c;
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
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, '__isset', array('name' => $name), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafc836c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderafc836c;
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
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, '__unset', array('name' => $name), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafc836c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderafc836c;
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
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, '__clone', array(), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        $this->valueHolderafc836c = clone $this->valueHolderafc836c;
    }

    public function __sleep()
    {
        $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, '__sleep', array(), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;

        return array('valueHolderafc836c');
    }

    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerafc836c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerafc836c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerafc836c && ($this->initializerafc836c->__invoke($valueHolderafc836c, $this, 'initializeProxy', array(), $this->initializerafc836c) || 1) && $this->valueHolderafc836c = $valueHolderafc836c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderafc836c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderafc836c;
    }


}
