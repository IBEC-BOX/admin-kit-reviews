<?php

namespace AdminKit\Reviews\UI\Filament\Resources\ReviewResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\Reviews\UI\Filament\Resources\ReviewResource;

class EditReview extends EditRecord
{
    protected static string $resource = ReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
