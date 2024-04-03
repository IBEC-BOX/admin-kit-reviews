<?php

namespace AdminKit\Reviews\UI\Filament\Resources\ReviewResource\Pages;

use AdminKit\Reviews\UI\Filament\Resources\ReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReview extends ListRecords
{
    protected static string $resource = ReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
