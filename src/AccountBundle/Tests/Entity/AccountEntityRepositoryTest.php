<?php

namespace AccountBundle\Tests\Entity;

use AccountBundle\Entity\AccountEntity;
use AccountBundle\Entity\AccountEntityRepository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use PHPUnit\Framework\TestCase;

class AccountEntityRepositoryTest extends TestCase
{
    /**
     * @var AccountEntityRepository
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
     * @var AccountEntity
     */
    private $account;

    protected function setUp(): void
    {
        $this->em = $this->createMock(EntityManager::class);
        $this->_class = $this->createMock(\Doctrine\ORM\Mapping\ClassMetadata::class);
        $this->query = $this->createMock(AbstractQuery::class);
        $this->account = $this->createMock(AccountEntity::class);

        $this->repository = new AccountEntityRepository($this->em, $this->_class);
    }

    protected function tearDown(): void
    {
        $this->em = null;
        $this->_class = null;
        $this->account = null;
        $this->query = null;
        $this->repository = null;
    }

    public function testFindAllOrderByBalanceDesc()
    {
        $this->em
            ->expects($this->once())
            ->method('createQuery')
            ->with('SELECT a FROM  a ORDER BY a.balance DESC')
            ->willReturn($this->query);

        $this->query
            ->expects($this->exactly(2))
            ->method('getResult')
            ->willReturn([$this->account]);

        $result = $this->repository->findAllOrderByBalanceDesc();

        $this->assertEquals($result, [$this->account]);

    }

    public function testFindAllOrderByBalanceDescReturnsEmptyArray()
    {
        $this->em
            ->expects($this->once())
            ->method('createQuery')
            ->with('SELECT a FROM  a ORDER BY a.balance DESC')
            ->willReturn($this->query);

        $this->query
            ->expects($this->once())
            ->method('getResult')
            ->willReturn(false);

        $result = $this->repository->findAllOrderByBalanceDesc();

        $this->assertEmpty($result);
    }
}