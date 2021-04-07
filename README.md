# deviantArt Gallery fetcher

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apsg/da-gallery-fetcher.svg?style=flat-square)](https://packagist.org/packages/apsg/da-gallery-fetcher)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/apsg/da-gallery-fetcher/run-tests?label=tests)](https://github.com/apsg/da-gallery-fetcher/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/apsg/da-gallery-fetcher/Check%20&%20fix%20styling?label=code%20style)](https://github.com/apsg/da-gallery-fetcher/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/apsg/da-gallery-fetcher.svg?style=flat-square)](https://packagist.org/packages/apsg/da-gallery-fetcher)

replace  ```Szymon Gackowski``` ```apsg``` ```szymon@gackowski.edu.pl``` ```apsg``` ```da-gallery-fetcher``` ```dafetcher``` ```deviantArt Gallery fetcher```
with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md)
, [CONTRIBUTING.md](.github/CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then
delete this line. You can also run `configure-da-gallery-fetcher.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-da-gallery-fetcher-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-da-gallery-fetcher-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can
support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.
You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards
on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require apsg/da-gallery-fetcher
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Apsg\Dafetcher\DafetcherServiceProvider" --tag="dafetcher-migrations"
php artisan migrate
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

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Szymon Gackowski](https://github.com/apsg)

It uses great oauth2 subscriber for guzzle:
https://github.com/kamermans/guzzle-oauth2-subscriber

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
