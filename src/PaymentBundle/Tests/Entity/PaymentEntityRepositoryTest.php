<?php

namespace PaymentBundle\Tests\Entity;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use PaymentBundle\Entity\PaymentEntity;
use PaymentBundle\Entity\PaymentEntityRepository;
use PHPUnit\Framework\TestCase;

class PaymentEntityRepositoryTest extends TestCase
{
    /**
     * @var PaymentEntityRepository
     */
    private $repository;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var \Doctrine\ORM\Mapping\ClassMetadata
     */
    private $_class;

    /**
     * @var Query
     */
    private $query;

    /**
     * @var PaymentEntity
     */
    private $payment;

    protected function setUp(): void
    {
        $this->em = $this->createMock(EntityManager::class);
        $this->_class = $this->createMock(\Doctrine\ORM\Mapping\ClassMetadata::class);
        $this->query = $this->createMock(AbstractQuery::class);
        $this->payment = $this->createMock(PaymentEntity::class);

        $this->repository = new PaymentEntityRepository($this->em, $this->_class);
    }

    protected function tearDown(): void
    {
        $this->em = null;
        $this->_class = null;
        $this->payment = null;
        $this->query = null;
        $this->repository = null;
    }

    public function testFindAllOrderByIdDesc()
    {
        $this->em
            ->expects($this->once())
            ->method('createQuery')
            ->with('SELECT p FROM  p ORDER BY p.id DESC')
            ->willReturn($this->query);

        $this->query
            ->expects($this->exactly(2))
            ->method('getResult')
            ->willReturn([$this->payment]);

        $result = $this->repository->findAllOrderByIdDesc();

        $this->assertEquals($result, [$this->payment]);

    }

    public function testFindAllOrderByBalanceDescReturnsEmptyArray()
    {
        $this->em
            ->expects($this->once())
            ->method('createQuery')
            ->with('SELECT p FROM  p ORDER BY p.id DESC')
            ->willReturn($this->query);

        $this->query
            ->expects($this->once())
            ->method('getResult')
            ->willReturn(false);

        $result = $this->repository->findAllOrderByIdDesc();

        $this->assertEmpty($result);
    }

    public function testCreate()
    {
        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($this->payment);

        $this->em
            ->expects($this->once())
            ->method('flush');

        $this->repository->create($this->payment);
    }
}