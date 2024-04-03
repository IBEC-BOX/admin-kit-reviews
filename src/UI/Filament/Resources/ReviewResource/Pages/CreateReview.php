<?php

namespace AdminKit\Reviews\UI\Filament\Resources\ReviewResource\Pages;

use AdminKit\Reviews\UI\Filament\Resources\ReviewResource;
use Filament\Resources\Pages\CreateRecord;

class CreateReview extends CreateRecord
{
    protected static string $resource = ReviewResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return ReviewResource::getUrl();
    }
}
