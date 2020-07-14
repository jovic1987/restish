<?php

namespace PaymentBundle\Tests\Entity;

use PaymentBundle\Entity\PaymentEntity;
use PHPUnit\Framework\TestCase;

class PaymentEntityTest extends TestCase
{
    /**
     * @var PaymentEntity
     */
    private $entity;

    public function setUp(): void
    {
        $this->entity = new PaymentEntity('bob','10','alice','outgoing');
    }

    public function tearDown(): void
    {
        $this->entity = null;
    }

    public function testGetAccount()
    {
        $this->assertEquals('bob', $this->entity->getAccount());
    }

    public function testGetToAccount()
    {
        $this->assertEquals('alice', $this->entity->getToAccount());
    }

    public function testGetAmount()
    {
        $this->assertEquals('10', $this->entity->getAmount());
    }

    public function testGetDirection()
    {
        $this->assertEquals('outgoing', $this->entity->getDirection());
    }
}