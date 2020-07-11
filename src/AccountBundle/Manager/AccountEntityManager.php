<?php

namespace AccountBundle\Manager;

use AccountBundle\Entity\AccountEntityRepository;

class AccountEntityManager
{
    /**
     * @var AccountEntityRepository
     */
    private $repository;

    /**
     * AccountEntityManager constructor.
     *
     * @param AccountEntityRepository $repository
     */
    public function __construct(AccountEntityRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return the list of all accounts ordered by balance DESC
     *
     * @return array
     */
    public function getAllAccounts()
    {
        return $this->repository->findAllOrderByBalanceDesc();
    }
}