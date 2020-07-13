<?php

namespace ApiBundle\Tests\Command;

use FOS\OAuthServerBundle\Entity\ClientManager;
use ApiBundle\Command\ClientCommand;
use PHPUnit\Framework\TestCase;

class ClientCommandTest extends TestCase
{
    /**
     * @var ClientCommand
     */
    private $command;

    /**
     * @var ClientManager
     */
    private $manager;

    private $input;

    private $output;

    private $client;

    public function setUp(): void
    {
        $this->manager = $this->createMock(ClientManager::class);
        $this->client = $this->createMock(\FOS\OAuthServerBundle\Model\Client::class);
        $this->input = $this->createMock(\Symfony\Component\Console\Input\InputInterface::class);
        $this->output = $this->createMock(\Symfony\Component\Console\Output\OutputInterface::class);
        $this->command = new ClientCommand($this->manager);
    }

    public function tearDown(): void
    {
        $this->command = null;
        $this->input = null;
        $this->output = null;
        $this->manager = null;
        $this->client = null;
    }

    public function testCommandIsConfigured()
    {
        $this->assertEquals('oauth-server:client:create', $this->command->getName());
        $this->assertEquals(
            'Creates a new api client',
            $this->command->getDescription()
        );
    }

    public function testCommandISExecuted()
    {
        $this->manager
            ->expects($this->once())
            ->method('createClient')
            ->willReturn($this->client);

        $this->input
            ->expects($this->once())
            ->method('getOptions')
            ->willReturn([
                'redirect-uri' => ['www.example.com'],
                'grant-type' => ['password']
            ]);

        $this->client
            ->expects($this->once())
            ->method('setRedirectUris')
            ->with(['www.example.com']);

        $this->client
            ->expects($this->once())
            ->method('setAllowedGrantTypes')
            ->with(['password']);

        $this->manager
            ->expects($this->once())
            ->method('updateClient')
            ->with($this->client);

        $this->client
            ->expects($this->once())
            ->method('getPublicId')
            ->willReturn('123abc');

        $this->client
            ->expects($this->once())
            ->method('getSecret')
            ->willReturn('6666abc');

        $this->command->run($this->input, $this->output);
    }
}