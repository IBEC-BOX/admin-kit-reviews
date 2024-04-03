<?php

namespace AdminKit\Reviews;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AdminKit\Reviews\Commands\ReviewsCommand;
use AdminKit\Reviews\Providers\RouteServiceProvider;

class ReviewsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-reviews')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigration('create_admin_kit_reviews_table')
            ->hasCommand(ReviewsCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
