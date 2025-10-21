# Passwordless Authentication for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/seeders/filament-passwordless.svg?style=flat-square)](https://packagist.org/packages/seeders/filament-passwordless)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/seeders/filament-passwordless/run-tests.yml?branch=main&style=flat-square&label=tests)](https://github.com/seeders/filament-passwordless/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/seeders/filament-passwordless/fix-php-code-style-issues.yml?branch=main&style=flat-square&label=code%20style)](https://github.com/seeders/filament-passwordless/actions?query=workflow%3A%22Fix+PHP+code+style+issues%22+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/seeders/filament-passwordless.svg?style=flat-square)](https://packagist.org/packages/seeders/filament-passwordless)



Filament Passwordless is a package for [Filament v4](https://filamentphp.com/) that allows users to login without a password.

## Requirements

- PHP 8.2+
- Laravel 11.28+
- Filament 4.0+

## Installation

You can install the package via composer:

```bash
composer require seeders-group/filament-passwordless
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-passwordless-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-passwordless-views"
```

## Usage

Register the plugin in your Filament panel provider (the default filename is `app/Providers/Filament/AdminPanelProvider.php`):

```php
use Seeders\FilamentPasswordless\FilamentPasswordlessPlugin;

// ...

    return $panel
        ->plugin(FilamentPasswordlessPlugin::make())
// ...
```

Note that you can remove any existing call to `->login()` in the panel's configuration because it will be provided by this plugin.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Jesse Hendriks](https://github.com/jessehendriks)
- [Brady Renting](https://github.com/bradyrenting) (Original author)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
