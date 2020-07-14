<?php


namespace AccountBundle\Exception;


class AccountNotFoundException extends \RuntimeException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 404);
    }
}