<?php

namespace AccountBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Amount extends Constraint
{
    /**
     * @var string
     */
    public $message = "Amount '%amount%' is not numeric value.";

    /**
     * @return string
     */
    public function validatedBy(): string
    {
        return 'amount';
    }
}