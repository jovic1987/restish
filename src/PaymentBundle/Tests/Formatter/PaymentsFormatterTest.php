<?php

namespace PaymentBundle\Tests\Formatter;

use PaymentBundle\Entity\PaymentEntity;
use PaymentBundle\Formatter\PaymentsFormatter;
use PHPUnit\Framework\TestCase;

class PaymentsFormatterTest extends TestCase
{
    /**
     * @var PaymentsFormatter
     */
    private $formatter;

    public function setUp(): void
    {
        $this->formatter = new PaymentsFormatter([new PaymentEntity('bob', '100', 'alice', 'incoming')]);
    }

    public function tearDown(): void
    {
        $this->formatter = null;
    }

    public function testFormat()
    {
        $result = $this->formatter->format();

        $this->assertEquals(
            $result,
            [
                'code'   => 200,
                'status' => 'OK',
                'items'  => [
                    [
                        'account'    => 'bob',
                        'amount'     => '100',
                        'to_account' => 'alice',
                        'direction'  => 'incoming'
                    ]
                ]
            ]
        );
    }
}