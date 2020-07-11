<?php


namespace AccountBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Account extends Constraint
{
    public $message = "Account '%name%' does not exist.";

    public function validatedBy()
    {
        return 'account';
    }
}