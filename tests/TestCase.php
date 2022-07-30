<?php

namespace AlazziAz\ar-laravel\Tests;

use AlazziAz\ar-laravel\Facades\ar-laravel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use AlazziAz\ar-laravel\ar-laravelServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AlazziAz\\ar-laravel\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ar-laravelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        ar-laravel::
        /*
        $migration = include __DIR__.'/../database/migrations/create_ar-laravel_table.php.stub';
        $migration->up();
        */
    }
}
