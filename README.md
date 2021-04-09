# deviantArt Gallery fetcher

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apsg/da-gallery-fetcher.svg?style=flat-square)](https://packagist.org/packages/apsg/da-gallery-fetcher)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/apsg/da-gallery-fetcher/run-tests?label=tests)](https://github.com/apsg/da-gallery-fetcher/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/apsg/da-gallery-fetcher/Check%20&%20fix%20styling?label=code%20style)](https://github.com/apsg/da-gallery-fetcher/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/apsg/da-gallery-fetcher.svg?style=flat-square)](https://packagist.org/packages/apsg/da-gallery-fetcher)

deviantArt gallery fetcher for Laravel. Use dA as data source and create awesome stuff (like a gallery!).

## Installation

You can install the package via composer:

```bash
composer require apsg/da-gallery-fetcher
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Apsg\Dafetcher\DafetcherServiceProvider" --tag="dafetcher-config"
```

This is the contents of the published config file:

```php
return [
    'username' => env('DA_USERNAME'),
    'cache'    => true,

    'oauth' => [
        'token_url' => 'https://www.deviantart.com/oauth2/token',
        'client_id' => env('DA_CLIENT_ID'),
        'secret'    => env('DA_SECRET'),
    ],
];
```

The `DA_USERNAME` variable is the default name of user you want to fetch the gallery (in most cases: your username).

Other variables (client ID and secret) can be obtained by registering your own OAUTH app here: 

https://www.deviantart.com/developers/apps

## Usage

```php
$dafetcher = new Apsg\Dafetcher();
$collection = $dafetcher->fetch();
```

To change user just use fluent syntax:

```php 
$collection = $dafetcher->forUser('other-user')->fetch();
```

#### Disable cache

To disable cache permanently just set the config's variable `cache` to false.

To disable temporarily just use helper:

```php 
$dafetcher = new Apsg\Dafetcher();
$freshResults = $dafetcher->noCache()->fetch(); 
```

### DTOs

To fetch data and automatically transform it using DTOs:

```php
$transformedResults = $dafetcher->fetchTransformed();
```


See [Full DTO's capabilities.](https://github.com/apsg/da-gallery-fetcher/blob/master/src/DTO/Image.php)


## Testing

```bash
composer test
```

## Credits

- [Szymon Gackowski](https://github.com/apsg)

It uses great oauth2 subscriber for guzzle:
https://github.com/kamermans/guzzle-oauth2-subscriber

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
