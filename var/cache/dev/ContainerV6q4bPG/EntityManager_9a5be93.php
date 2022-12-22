<?php

namespace ContainerV6q4bPG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb674c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5e25 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0b74c = [
        
    ];

    public function getConnection()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getConnection', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getMetadataFactory', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getExpressionBuilder', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'beginTransaction', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getCache', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'transactional', array('func' => $func), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'commit', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->commit();
    }

    public function rollback()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'rollback', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'createQuery', array('dql' => $dql), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'createQueryBuilder', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'flush', array('entity' => $entity), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'clear', array('entityName' => $entityName), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'close', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->close();
    }

    public function persist($entity)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'persist', array('entity' => $entity), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'remove', array('entity' => $entity), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'refresh', array('entity' => $entity), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'detach', array('entity' => $entity), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'merge', array('entity' => $entity), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'contains', array('entity' => $entity), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getEventManager', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getConfiguration', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'isOpen', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getUnitOfWork', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getProxyFactory', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'getFilters', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'isFiltersStateClean', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'hasFilters', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return $this->valueHolderb674c->hasFilters();
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb5e25 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb674c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb674c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb674c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, '__get', ['name' => $name], $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        if (isset(self::$publicProperties0b74c[$name])) {
            return $this->valueHolderb674c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb674c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb674c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb674c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb674c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, '__isset', array('name' => $name), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb674c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb674c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, '__unset', array('name' => $name), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb674c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb674c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, '__clone', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        $this->valueHolderb674c = clone $this->valueHolderb674c;
    }

    public function __sleep()
    {
        $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, '__sleep', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;

        return array('valueHolderb674c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5e25 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5e25;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5e25 && ($this->initializerb5e25->__invoke($valueHolderb674c, $this, 'initializeProxy', array(), $this->initializerb5e25) || 1) && $this->valueHolderb674c = $valueHolderb674c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb674c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb674c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
