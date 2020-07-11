<?php

namespace PaymentBundle\Entity;

/**
 * PaymentEntity
 */
class PaymentEntity
{
    /**
     * @var string
     */
    private $account;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $toAccount;

    /**
     * @var string
     */
    private $direction;

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get toAccount
     *
     * @return string 
     */
    public function getToAccount()
    {
        return $this->toAccount;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }
}
