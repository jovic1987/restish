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

    public function __construct(string $id, string $owner, string $balance, string $currency)
    {
        $this->id = $id;
        $this->owner = $owner;
        $this->balance = $balance;
        $this->currency = $currency;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}

