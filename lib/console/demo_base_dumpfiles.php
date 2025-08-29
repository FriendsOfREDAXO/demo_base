<?php

declare(strict_types=1);

namespace FriendsOfRedaxo\DemoBase;

use rex_console_command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

final class rex_command_demo_base_dumpfiles extends rex_console_command
{
    protected function configure(): void
    {
        $this->setDescription('Dumps the Base-Demo-MediaFiles to backups/demo_base.tar.gz');
        $this->addOption('yes', 'y', InputOption::VALUE_NONE, 'Overwrite existing file backups/demo_base.tar.gz?');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = $this->getStyle($input, $output);

        $skipConfirmation = true === $input->getOption('yes');

        $io->title('Base-Demo - Dump MediaFiles');

        if (!$input->isInteractive() && !$skipConfirmation) {
            return 1;
        }

        if (!$skipConfirmation && !$io->confirm('Current file backups/demo_base.tar.gz will be overwritten. Would you like to proceed?')) {
            return 1;
        }

        $io->writeln('Run dump Base-Demo-MediaFiles ...');

        $errors = rex_demo_base::dump_files();

        if ([] !== $errors) {
            $io->error($this->decodeMessage("Failed to dump Base-Demo-MediaFiles:\n- " . implode("\n- ", $errors)));
            return 1;
        }

        $io->success('Successfully dumped Base-Demo-MediaFiles!');
        return 0;
    }
}
