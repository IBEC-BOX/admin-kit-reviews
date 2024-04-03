<?php

namespace AdminKit\Reviews\Tests;

use AdminKit\Reviews\ReviewsServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AdminKit\\Reviews\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ReviewsServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_admin-kit-reviews_table.php.stub';
        $migration->up();
        */
    }
}
