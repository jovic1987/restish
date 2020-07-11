<?php

namespace AccountBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Amount extends Constraint
{
    public $message = "Amount '%amount%' is not numeric value.";

    public function validatedBy()
    {
        return 'amount';
    }
}