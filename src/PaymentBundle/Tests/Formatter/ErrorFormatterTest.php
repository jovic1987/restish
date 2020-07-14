<?php

namespace PaymentBundle\Tests\Formatter;

use AccountBundle\Validator\Constraints\Account;
use PaymentBundle\Formatter\ErrorFormatter;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationList;

class ErrorFormatterTest extends TestCase
{
    /**
     * @var ConstraintViolation
     */
    private $constraint;

    /**
     * @var ErrorFormatter
     */
    private $formatter;

    public function setUp(): void
    {
        $this->constraint = $this->createMock(ConstraintViolation::class);
        $this->constraint
            ->expects($this->once())
            ->method('getMessage')
            ->willReturn('Some error message.');

        $errors = new ConstraintViolationList([$this->constraint]);

        $this->formatter = new ErrorFormatter($errors);
    }

    public function tearDown(): void
    {
        $this->formatter  = null;
        $this->constraint = null;
    }

    public function testFormat()
    {
        $this->assertEquals(
            $this->formatter->format(),
            [
                'errors' => [
                    'Some error message.'
                ]
            ]
        );
    }
}