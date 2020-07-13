<?php

namespace AccountBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Account extends Constraint
{
    /**
     * @var string
     */
    public $message = "Account '%name%' does not exist.";

    /**
     * @return string
     */
    public function validatedBy(): string
    {
        return 'account';
    }
}