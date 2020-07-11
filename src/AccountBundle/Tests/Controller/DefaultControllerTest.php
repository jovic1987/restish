<?php

namespace AccountBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/v1/accounts');

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertCount(2, json_decode($response->getContent(), true)['items']);
    }
}
