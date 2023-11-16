<?php

namespace Tapp\LaravelHoneybadgerDeploy\Commands;

use Illuminate\Console\Command;

class LaravelHoneybadgerDeployCommand extends Command
{
    public $signature = 'laravel-honeybadger-deploy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
