<?php

namespace Tapp\LaravelHoneybadgerDeploy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tapp\LaravelHoneybadgerDeploy\Commands\LaravelHoneybadgerDeployCommand;

class LaravelHoneybadgerDeployServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-honeybadger-deploy')
            ->hasCommand(LaravelHoneybadgerDeployCommand::class);
    }
}
