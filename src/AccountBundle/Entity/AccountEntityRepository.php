<?php

namespace AccountBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AccountEntityRepository extends EntityRepository
{
    /**
     * Find and return all persisted account records ordered by balance DESC
     *
     * @return array
     */
    public function findAllOrderByBalanceDesc()
    {
        $dql = sprintf(
            'SELECT a FROM %s a ORDER BY a.balance DESC',
            $this->getClassName()
        );
        $query = $this->getEntityManager()->createQuery($dql);

        return $query->getResult();
    }
}
