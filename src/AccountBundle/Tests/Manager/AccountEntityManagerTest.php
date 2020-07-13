<?php

namespace AccountBundle\Tests\Manager;

use AccountBundle\Entity\AccountEntity;
use AccountBundle\Entity\AccountEntityRepository;
use AccountBundle\Manager\AccountEntityManager;
use PHPUnit\Framework\TestCase;

class AccountEntityManagerTest extends TestCase
{
    /**
     * @var AccountEntityManager
     */
    private $manager;

    /**
     * @var AccountEntityRepository;
     */
    private $repository;

    public function setUp(): void
    {
        $this->repository = $this->createMock(AccountEntityRepository::class);

        $this->manager = new AccountEntityManager($this->repository);
    }

    public function tearDown(): void
    {
        $this->manager = null;
        $this->repository = null;
    }

    public function testGetAllAccounts()
    {
        $account = $this->createMock(AccountEntity::class);

        $this->repository
            ->expects($this->once())
            ->method('findAllOrderByBalanceDesc')
            ->willReturn([$account]);

        $result = $this->manager->getAllAccounts();

        $this->assertNotEmpty($result);
        $this->assertContainsOnlyInstancesOf(AccountEntity::class, $result);
    }
}