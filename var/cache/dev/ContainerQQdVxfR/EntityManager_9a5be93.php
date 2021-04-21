<?php

namespace ContainerQQdVxfR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderff63f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer341e6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4d767 = [
        
    ];

    public function getConnection()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getConnection', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getMetadataFactory', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getExpressionBuilder', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'beginTransaction', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getCache', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'transactional', array('func' => $func), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->transactional($func);
    }

    public function commit()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'commit', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->commit();
    }

    public function rollback()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'rollback', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getClassMetadata', array('className' => $className), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'createQuery', array('dql' => $dql), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'createNamedQuery', array('name' => $name), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'createQueryBuilder', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'flush', array('entity' => $entity), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'clear', array('entityName' => $entityName), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->clear($entityName);
    }

    public function close()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'close', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->close();
    }

    public function persist($entity)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'persist', array('entity' => $entity), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'remove', array('entity' => $entity), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'refresh', array('entity' => $entity), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'detach', array('entity' => $entity), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'merge', array('entity' => $entity), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'contains', array('entity' => $entity), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getEventManager', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getConfiguration', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'isOpen', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getUnitOfWork', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getProxyFactory', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'initializeObject', array('obj' => $obj), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'getFilters', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'isFiltersStateClean', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'hasFilters', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return $this->valueHolderff63f->hasFilters();
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

        $instance->initializer341e6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderff63f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderff63f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderff63f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, '__get', ['name' => $name], $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        if (isset(self::$publicProperties4d767[$name])) {
            return $this->valueHolderff63f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff63f;

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

        $targetObject = $this->valueHolderff63f;
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
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff63f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderff63f;
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
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, '__isset', array('name' => $name), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff63f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderff63f;
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
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, '__unset', array('name' => $name), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff63f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderff63f;
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
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, '__clone', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        $this->valueHolderff63f = clone $this->valueHolderff63f;
    }

    public function __sleep()
    {
        $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, '__sleep', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;

        return array('valueHolderff63f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer341e6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer341e6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer341e6 && ($this->initializer341e6->__invoke($valueHolderff63f, $this, 'initializeProxy', array(), $this->initializer341e6) || 1) && $this->valueHolderff63f = $valueHolderff63f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderff63f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderff63f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
