# A small command to notify HoneyBadger.io of deployments

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tapp/laravel-honeybadger-deploy.svg?style=flat-square)](https://packagist.org/packages/tapp/laravel-honeybadger-deploy)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/tapp/laravel-honeybadger-deploy/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/tapp/laravel-honeybadger-deploy/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/tapp/laravel-honeybadger-deploy/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/tapp/laravel-honeybadger-deploy/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tapp/laravel-honeybadger-deploy.svg?style=flat-square)](https://packagist.org/packages/tapp/laravel-honeybadger-deploy)

Track Honeybadger.io deployments with a artisan command.
https://docs.honeybadger.io/api/reporting-deployments/#sending-deployment-notifications-manually

## Installation

You can install the package via composer:

```bash
composer require tapp/laravel-honeybadger-deploy
```

## Usage

```bash
php artisan honeybadger:deploy {?environment=} {?revision=sha} {?local_username=forge}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Steve Williamson](https://github.com/Tapp)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
