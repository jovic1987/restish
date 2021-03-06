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
     * @var integer
     */
    private $id;

    /**
     * PaymentEntity constructor.
     * @param string $account
     * @param float $amount
     * @param string $toAccount
     * @param string $direction
     */
    public function __construct(string $account, float $amount, string $toAccount, string $direction)
    {
        $this->account = $account;
        $this->amount = $amount;
        $this->toAccount = $toAccount;
        $this->direction = $direction;
    }

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
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
        return $this->toAccount;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
}
