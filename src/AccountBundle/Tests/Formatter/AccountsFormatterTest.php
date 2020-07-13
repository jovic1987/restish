<?php

namespace AccountBundle\Tests\Formatter;

use AccountBundle\Entity\AccountEntity;
use AccountBundle\Formatter\AccountsFormatter;
use PHPUnit\Framework\TestCase;

class AccountsFormatterTest extends TestCase
{
    /**
     * @var AccountsFormatter
     */
    private $formatter;

    public function setUp(): void
    {
        $this->formatter = new AccountsFormatter([new AccountEntity('bob', 'bob', '1.01', 'EUR')]);
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
                        'id'       => 'bob',
                        'owner'    => 'bob',
                        'balance'  => '1.01',
                        'currency' => 'EUR'
                    ]
                ]
            ]
        );
    }
}