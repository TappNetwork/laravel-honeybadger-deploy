<?php

test('command requires api key', function () {
    $this->artisan('honeybadger:deploy')->assertExitCode(1);
});

test('command works', function () {
    $this->app->config->set('honeybadger.api_key', 1234);
    $this->artisan('honeybadger:deploy')->assertExitCode(0);
});

test('command can pass sha', function () {
    $this->app->config->set('honeybadger.api_key', 1234);
    $this->artisan('honeybadger:deploy --sha=1234')->assertExitCode(0);
});

test('command can pass user', function () {
    $this->app->config->set('honeybadger.api_key', 1234);
    $this->artisan('honeybadger:deploy --sha=1234 --local_user=user123')->assertExitCode(0);
});
