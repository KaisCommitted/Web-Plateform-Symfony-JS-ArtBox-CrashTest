<?php

namespace Container0xYFKXN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderad554 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9e88f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4ec83 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getConnection', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getMetadataFactory', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getExpressionBuilder', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'beginTransaction', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getCache', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'transactional', array('func' => $func), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->transactional($func);
    }

    public function commit()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'commit', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->commit();
    }

    public function rollback()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'rollback', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getClassMetadata', array('className' => $className), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'createQuery', array('dql' => $dql), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'createNamedQuery', array('name' => $name), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'createQueryBuilder', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'flush', array('entity' => $entity), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'clear', array('entityName' => $entityName), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->clear($entityName);
    }

    public function close()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'close', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->close();
    }

    public function persist($entity)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'persist', array('entity' => $entity), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'remove', array('entity' => $entity), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'refresh', array('entity' => $entity), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'detach', array('entity' => $entity), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'merge', array('entity' => $entity), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'contains', array('entity' => $entity), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getEventManager', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getConfiguration', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'isOpen', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getUnitOfWork', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getProxyFactory', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'initializeObject', array('obj' => $obj), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'getFilters', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'isFiltersStateClean', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'hasFilters', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return $this->valueHolderad554->hasFilters();
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

        $instance->initializer9e88f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderad554) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderad554 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderad554->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, '__get', ['name' => $name], $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        if (isset(self::$publicProperties4ec83[$name])) {
            return $this->valueHolderad554->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad554;

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

        $targetObject = $this->valueHolderad554;
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
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad554;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderad554;
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
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, '__isset', array('name' => $name), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad554;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderad554;
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
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, '__unset', array('name' => $name), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad554;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderad554;
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
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, '__clone', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        $this->valueHolderad554 = clone $this->valueHolderad554;
    }

    public function __sleep()
    {
        $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, '__sleep', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;

        return array('valueHolderad554');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9e88f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9e88f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9e88f && ($this->initializer9e88f->__invoke($valueHolderad554, $this, 'initializeProxy', array(), $this->initializer9e88f) || 1) && $this->valueHolderad554 = $valueHolderad554;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderad554;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderad554;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
