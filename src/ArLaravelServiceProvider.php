<?php

namespace AlazziAz\ArLaravel;

use ArPHP\I18N\Arabic;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class ArLaravelServiceProvider extends PackageServiceProvider
{
    public function registeringPackage()
    {


        $this->app->singleton('arabic', function () {
            return new Arabic();
        });
        $this->app->singleton('arLaravel', function () {
            return new ArLaravel($this->app->make('arabic'));
        });


    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ar-laravel')
            ->hasConfigFile();
    }
}
