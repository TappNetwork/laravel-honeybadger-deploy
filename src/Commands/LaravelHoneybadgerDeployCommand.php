<?php

namespace Tapp\LaravelHoneybadgerDeploy\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class LaravelHoneybadgerDeployCommand extends Command
{
    public $signature = 'honeybadger:deploy {--sha=} {--local_user=forge} {--environment=production}';

    public $description = 'Post deployment to Honeybadger';

    public function handle(): int
    {
        if (! config('honeybadger.api_key')) {
            $this->error('HONEYBADGER_API_KEY not set');
            return self::FAILURE;
        }

        Http::get('https://api.honeybadger.io/v1/deploys', [
            'api_key' => config('honeybadger-deploy.api_key'),
            'deploy' => [
                'environment' => $this->option('environment'),
                'local_username' => $this->option('local_user'),
                'revision' => $this->option('sha'),
            ],
        ]);

        return self::SUCCESS;
    }
}
