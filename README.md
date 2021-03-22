# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apsg/da-gallery-fetcher.svg?style=flat-square)](https://packagist.org/packages/apsg/da-gallery-fetcher)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/apsg/da-gallery-fetcher/run-tests?label=tests)](https://github.com/apsg/da-gallery-fetcher/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/apsg/da-gallery-fetcher/Check%20&%20fix%20styling?label=code%20style)](https://github.com/apsg/da-gallery-fetcher/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/apsg/da-gallery-fetcher.svg?style=flat-square)](https://packagist.org/packages/apsg/da-gallery-fetcher)

**Note:** Run `./configure-skeleton` to get started, or manually replace  ```Gacek``` ```:author_username``` ```szymon@gackowski.edu.pl``` ```apsg``` ```da-gallery-fetcher``` ```:short_package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](.github/CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can also run `configure-skeleton.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-skeleton-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-skeleton-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require apsg/da-gallery-fetcher
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Apsg\Dafetcher\SkeletonServiceProvider" --tag=":short_package_name-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Apsg\Dafetcher\SkeletonServiceProvider" --tag=":short_package_name-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$skeleton = new Apsg\Dafetcher();
echo $skeleton->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Gacek](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
