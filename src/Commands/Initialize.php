<?php

namespace PHLAK\CodingStandards\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Initialize extends Command
{
    public const CONFIG_FILE_STUB = __DIR__ . '/../../stubs/.php-cs-fixer.dist.php';
    public const CONFIG_FILE_NAME = '.php-cs-fixer.dist.php';

    /** @iniheritdoc */
    protected static $defaultName = 'init';

    /** @inheritdoc */
    protected static $defaultDescription = 'Initialize the coding standards configuration';

    /** @inheritdoc */
    protected function configure(): void
    {
        // ...
    }

    /** @inheritdoc */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (! copy(self::CONFIG_FILE_STUB, self::CONFIG_FILE_NAME)) {
            $output->writeln('<error>Failed to initialze coding standards configuration</error>');

            return self::FAILURE;
        }

        $output->writeln(sprintf('Initialized coding standards configuration in %s', getcwd()));

        return self::SUCCESS;
    }
}
