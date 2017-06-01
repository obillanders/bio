<?php

namespace Tests\AppBundle\Manager;


use AppBundle\Manager\BaseEntityManager;
use AppBundle\Model\EntityManagerBatchResult;
use AppBundle\Model\EntityManagerResult;
use AppBundle\Service\ManagerTools;
use AppBundle\Service\ResultFactory;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class EntityMock
{
    static public $identifier = 'id';
    private $id;
    private $isDelete;

    public function __construct($id, $isDelete = false)
    {
        $this->id = $id;
        $this->isDelete = $isDelete;
    }


    public function getId() {
        return $this->id;
    }

    public function isToDelete()
    {
        return $this->isDelete;
    }
}

class EntityManagerImpl extends BaseEntityManager
{
    public function getEntityManager()
    {
        return $this->getObjectManager();
    }
}

class BaseEntityManagerTest extends \PHPUnit_Framework_TestCase
{
    protected $managerToolsMock;
    protected $emMock;
    protected $entity;

    public function setUp()
    {
        $classMetadataMock = \Phake::mock(ClassMetadataInfo::class);
        \Phake::when($classMetadataMock)
              ->getSingleIdentifierFieldName()
              ->thenReturn(EntityMock::$identifier);

        $this->emMock = \Phake::mock(EntityManager::class);
        \Phake::when($this->emMock)
              ->getClassMetadata(EntityMock::class)
              ->thenReturn($classMetadataMock);
        \Phake::when($this->emMock)
            ->merge
            ->thenReturnCallback(function ($entity){ return $entity; });
        $connMock = \Phake::mock(Connection::class);
        \Phake::when($connMock)
            ->beginTransaction
            ->thenReturn(null);
        \Phake::when($this->emMock)
            ->getConnection
            ->thenReturn($connMock);

        $mangerRegistryMock = \Phake::mock(RegistryInterface::class);
        \Phake::when($mangerRegistryMock)
            ->getManagerForClass(EntityMock::class)
            ->thenReturn($this->emMock);

        $this->managerToolsMock = \Phake::mock(ManagerTools::class);
        \Phake::when($this->managerToolsMock)
            ->getRegistry
            ->thenReturn($mangerRegistryMock);
    }

    public function testCanInit()
    {
        $entityManager = new EntityManagerImpl(EntityMock::class, $this->managerToolsMock);

        $this->assertInstanceOf(BaseEntityManager::class, $entityManager);
    }

    private function mockValidator()
    {
        $validatorMock = \Phake::mock(ValidatorInterface::class);
        \Phake::when($this->managerToolsMock)
              ->getValidator()
              ->thenReturn($validatorMock);
        \Phake::when($validatorMock)
              ->validate($this->entity, null, 'Default')
              ->thenReturn(array());

        return $validatorMock;
    }

    private function mockResultFactory()
    {
        $resultFactoryMock = \Phake::mock(ResultFactory::class);
        \Phake::when($this->managerToolsMock)
              ->getResultFactory()
              ->thenReturn($resultFactoryMock);

        $resultMock = \Phake::mock(EntityManagerResult::class);
        \Phake::when($resultFactoryMock)
              ->createEntityResult($this->emMock, \Phake::ignoreRemaining())
              ->thenReturn($resultMock);

        \Phake::when($resultFactoryMock)
              ->createDeleteEntityResult($this->emMock, \Phake::ignoreRemaining())
              ->thenReturn($resultMock);

        $batchResultMock = \Phake::mock(EntityManagerBatchResult::class);
        \Phake::when($resultFactoryMock)
              ->createBatchResult
              ->thenReturn($batchResultMock);

        return $resultFactoryMock;
    }


    public function testSave()
    {
        $entity = new EntityMock(1);
        $validatorMock = $this->mockValidator();
        $resultFactoryMock = $this->mockResultFactory();

        $entityManager = new EntityManagerImpl(EntityMock::class, $this->managerToolsMock);

        $result = $entityManager->save($entity);

        $this->assertInstanceOf(EntityManagerResult::class, $result);

        \Phake::verify($validatorMock)->validate($entity, null, array('Default'));
        \Phake::verify($resultFactoryMock, \Phake::times(0))->createEntityResult($this->emMock, $entity, array("error1", "error2"));
        \Phake::verify($this->emMock)->merge($entity);
        \Phake::verify($resultFactoryMock)->createEntityResult($this->emMock, $entity);
    }

    public function testDelete()
    {
        $entity = new EntityMock(1);
        $resultFactoryMock = $this->mockResultFactory();

        $entityManager = new EntityManagerImpl(EntityMock::class, $this->managerToolsMock);

        $result = $entityManager->delete($entity);

        $this->assertInstanceOf(EntityManagerResult::class, $result);

        \Phake::verify($this->emMock)->merge($entity);
        \Phake::verify($resultFactoryMock)->createDeleteEntityResult($this->emMock, $entity);
    }

    /**
     * @dataProvider entitiesProvider
     */
    /*public function testBatch(array $entitiesSaved, array $entitiesDeleted)
    {
        $entities = array_merge($entitiesSaved, $entitiesDeleted);
        $validatorMock = $this->mockValidator();
        $resultFactoryMock = $this->mockResultFactory();

        $entityManager = \Phake::partialMock(EntityManagerImpl::class, EntityMock::class, $this->managerToolsMock);

        $batchResult = $entityManager->batch($entities);

        $this->assertInstanceOf(EntityManagerBatchResult::class, $batchResult);

        \Phake::verify($resultFactoryMock)->createBatchResult(\Phake::ignoreRemaining());

        foreach ($entitiesSaved as $entitySaved) {
            \Phake::verify($entityManager)->save($entitySaved, 'Default', false);
        }
        foreach ($entitiesDeleted as $entityDeleted) {
            \Phake::verify($entityManager)->delete($entityDeleted, false);
        }
    }*/

    public function entitiesProvider()
    {
        return [
            [[new EntityMock(1), new EntityMock(2)], [new EntityMock(3, true), new EntityMock(4, true)]],
            [[new EntityMock(2)], [new EntityMock(1, true)]],
        ];
    }
}
