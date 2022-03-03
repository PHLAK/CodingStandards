<?php

namespace PHLAK\CodingStandards\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

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
        $this->setAliases(['initialize']);
        $this->addArgument('path', InputArgument::OPTIONAL, 'The path to initialize', getcwd());
    }

    /** @inheritdoc */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (! is_string($input->getArgument('path'))) {
            $output->writeln('<fg=yellow>Path must be a string</>');

            return self::FAILURE;
        }

        if (file_exists(self::CONFIG_FILE_NAME)) {
            /** @var QuestionHelper $helper */
            $helper = $this->getHelper('question');
            $question = new ConfirmationQuestion('<question>Configuration file already exists. Overwrite?</question> (y|N) ', false);

            if (! $helper->ask($input, $output, $question)) {
                $output->writeln('<fg=yellow>Aborted!</>');

                return self::SUCCESS;
            }
        }

        if (! copy(self::CONFIG_FILE_STUB, (string) $input->getArgument('path') . '/' . self::CONFIG_FILE_NAME)) {
            $output->writeln('<error>Failed to initialze coding standards configuration</error>');

            return self::FAILURE;
        }

        $output->writeln(sprintf('<info>Initialized coding standards configuration in %s</info>', (string) $input->getArgument('path')));

        return self::SUCCESS;
    }
}
