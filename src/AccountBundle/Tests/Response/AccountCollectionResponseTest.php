<?php

namespace AccountBundle\Tests\Response;

use AccountBundle\Entity\AccountEntity;
use AccountBundle\Response\AccountCollectionResponse;
use PHPUnit\Framework\TestCase;

class AccountCollectionResponseTest extends TestCase
{
    private $response;

    public function setUp(): void
    {
        $this->response = new AccountCollectionResponse([new AccountEntity('bob', 'bob', '1.01', 'EUR')]);
    }

    public function tearDown(): void
    {
        $this->response = null;
    }

    public function testToJson()
    {
        $this->assertInstanceOf('Symfony\Component\HttpFoundation\JsonResponse', $this->response->toJson());
    }
}