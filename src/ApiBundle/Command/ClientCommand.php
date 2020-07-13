<?php

namespace ApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use FOS\OAuthServerBundle\Entity\ClientManager;

class ClientCommand extends ContainerAwareCommand
{
    /**
     * Generate new api client.
     */
    protected function configure()
    {
        $this
            ->setName('oauth-server:client:create')
            ->setDescription('Creates a new api client')
            ->addOption(
                'redirect-uri',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Sets redirect uri for client. Use this option multiple times to set multiple redirect URIs.',
                null
            )
            ->addOption(
                'grant-type',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Sets allowed grant type for client. Use this option multiple times to set multiple grant types..',
                null
            )
            ->setHelp(<<<EOT
The <info>%command.name%</info>command creates a new client.
<info>php %command.full_name% [--redirect-uri=...] [--grant-type=...] name</info>
EOT
            );
    }

    /**
     * @var ClientManager
     */
    private $manager;

    public function __construct(ClientManager $manager)
    {
        parent::__construct();

        $this->manager = $manager;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->manager->createClient();

        $options = $input->getOptions();

        $client->setRedirectUris($options['redirect-uri']);
        $client->setAllowedGrantTypes($options['grant-type']);

        $this->manager->updateClient($client);

        $output->writeln(
            sprintf(
                'Added a new client with id <info>%s</info> and secret <info>%s</info>',
                $client->getPublicId(),
                $client->getSecret()
            )
        );
    }
}
