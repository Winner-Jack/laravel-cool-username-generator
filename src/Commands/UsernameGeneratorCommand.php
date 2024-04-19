<?php

namespace WinnerJack\UsernameGenerator\Commands;

use Illuminate\Console\Command;

class UsernameGeneratorCommand extends Command
{
    public $signature = 'laravel-cool-username-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
