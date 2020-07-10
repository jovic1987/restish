<?php

namespace AccountBundle\Entity;

/**
 * AccountEntity
 */
class AccountEntity
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $owner;

    /**
     * @var float
     */
    private $balance;

    /**
     * @var string
     */    
    private $currency;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}

