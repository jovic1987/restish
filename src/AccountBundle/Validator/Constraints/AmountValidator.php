<?php

namespace AccountBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AmountValidator extends ConstraintValidator
{
    /**
     * @param mixed $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if (!is_numeric($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('%amount%', $value)
                ->addViolation();
        }
    }
}