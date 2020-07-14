<?php


namespace PaymentBundle\Exception;


class InvalidBalanceException extends \RuntimeException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}