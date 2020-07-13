<?php

namespace PaymentBundle\Model;

/**
 * Payment
 */
class Payment
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
    private $to_account;

    /**
     * Payment constructor.
     * @param string $account
     * @param float $amount
     * @param string $toAccount
     */
    public function __construct($account, $amount, $toAccount)
    {
        $this->account = $account;
        $this->amount = $amount;
        $this->to_account = $toAccount;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Get toAccount
     *
     * @return string 
     */
    public function getToAccount(): string
    {
        return $this->to_account;
    }
}
