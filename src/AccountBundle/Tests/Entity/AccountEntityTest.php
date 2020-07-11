<?php

namespace AccountBundle\Tests\Entity;

use AccountBundle\Entity\AccountEntity;
use PHPUnit\Framework\TestCase;

class AccountEntityTest extends TestCase
{
    /**
     * @var AccountEntity
     */
    private $entity;

    public function setUp(): void
    {
        $this->entity = new AccountEntity('bob','bob the owner','0.02','EUR');
    }

    public function tearDown(): void
    {
        $this->entity = null;
    }

    public function testGetId()
    {
        $this->assertEquals('bob', $this->entity->getId());
    }

    public function testGetOwner()
    {
        $this->assertEquals('bob the owner', $this->entity->getOwner());
    }

    public function testGetBalance()
    {
        $this->assertEquals('0.02', $this->entity->getBalance());
    }

    public function testGetCurrency()
    {
        $this->assertEquals('EUR', $this->entity->getCurrency());
    }
}