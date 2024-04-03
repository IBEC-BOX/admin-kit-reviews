<?php

namespace AdminKit\Reviews;

use Filament\Contracts\Plugin;
use Filament\Panel;
use AdminKit\Reviews\UI\Filament\Resources\ReviewResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-reviews';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            ReviewResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
