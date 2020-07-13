<?php


namespace AccountBundle\Validator\Constraints;

use AccountBundle\Entity\AccountEntity;
use AccountBundle\Entity\AccountEntityRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AccountValidator extends ConstraintValidator
{
    /**
     * @var AccountEntityRepository
     */
    private $repository;

    /**
     * AccountValidator constructor.
     * @param AccountEntityRepository $repository
     */
    public function __construct(AccountEntityRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param mixed $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        $account = $this->repository->findOneBy(['id' => $value]);
        if (!$account instanceof AccountEntity) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('%name%', $value)
                ->addViolation();
        }
    }
}