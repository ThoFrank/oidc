<?php

namespace OCA\OIDCIdentityProvider\Command\Clients;

use OCA\OIDCIdentityProvider\Db\Client;
use OCA\OIDCIdentityProvider\Db\ClientMapper;

use OCP\AppFramework\Services\IAppConfig;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OIDCCreate extends Command {
  /** @var IAppConfig */
  private $appconf;
  /** @var ClientMapper */
  private $mapper;

  public function __construct(
    IAppConfig $appconf,
    ClientMapper $mapper
  ) {
      parent::__construct();
      $this->appconf = $appconf;
      $this->mapper = $mapper;
  }

  protected function configure(): void {
    $this
      ->setName('oidc:create')
      ->setDescription('Create oidc client')
      ->addArgument(
        'name',
        InputArgument::REQUIRED, 
        'The name of the client'
      )
      ->addArgument(
        'redirect_uris',
        InputArgument::REQUIRED | InputArgument::IS_ARRAY, 
        'An array of redirect uris'
      )
      ->addOption(
        'algorithm', 
        'a', 
        InputOption::VALUE_REQUIRED, 
        'The signing algorithm to use', 
        'RSA256'
      )
      ->addOption(
        'type', 
        't', 
        InputOption::VALUE_REQUIRED, 
        'The type of the client', 
        'confidential'
      );
  }

  protected function execute(InputInterface $input, OutputInterface $output): int {
      try {
          // create new client
          $client = new Client(
            $input->getArgument('name'),
            $input->getArgument('redirect_uris'),
            $input->getOption('algorithm'),
            $input->getOption('type')
          );
          // insert new client into database
          $client = $this->mapper->insert($client);
          // print client as pretty json
          $output->writeln(json_encode($client, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
          return Command::SUCCESS;
      } catch (\Exception $e) {
          // handle any errors and output a message
          $output->writeln("<error>Error: {$e->getMessage()}</error>");
          return Command::FAILURE;
      }
  }

}
