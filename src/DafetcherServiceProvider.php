<?php
namespace Apsg\Dafetcher;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Apsg\Dafetcher\Commands\SkeletonCommand;

class DafetcherServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dafetcher')
            ->hasConfigFile()
            ->hasCommand(SkeletonCommand::class);
    }
}
