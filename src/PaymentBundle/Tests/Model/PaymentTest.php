<?php

namespace PaymentBundle\Tests\Model;

use PaymentBundle\Model\Payment;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    public function testGetters()
    {
        $model = new Payment('bob', '10.02', 'alice');

        $this->assertEquals('bob', $model->getAccount());
        $this->assertEquals('10.02', $model->getAmount());
        $this->assertEquals('alice', $model->getToAccount());
    }
}