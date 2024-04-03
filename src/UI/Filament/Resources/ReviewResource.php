<?php

namespace AdminKit\Reviews\UI\Filament\Resources;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use AdminKit\Reviews\Models\Review;
use AdminKit\Reviews\UI\Filament\Resources\ReviewResource\Pages;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('admin-kit-reviews::reviews.resource.author'))->schema([
                    Forms\Components\SpatieMediaLibraryFileUpload::make('photo')
                        ->label(__('admin-kit-reviews::reviews.resource.photo'))
                        ->image()
                        ->optimize('webp')
                        ->resize(30),
                    TranslatableTabs::make(fn ($locale) => Forms\Components\Tabs\Tab::make($locale)->schema([
                        Forms\Components\TextInput::make("author.$locale")
                            ->label(__('admin-kit-reviews::reviews.resource.name'))
                            ->required($locale === app()->getLocale()),
                        Forms\Components\TextInput::make("bio.$locale")
                            ->label(__('admin-kit-reviews::reviews.resource.bio'))
                            ->required($locale === app()->getLocale())
                            ->placeholder(__('admin-kit-reviews::reviews.resource.bio_placeholder')),
                    ])),
                ]),
                TranslatableTabs::make(fn ($locale) => Forms\Components\Tabs\Tab::make($locale)->schema([
                    Forms\Components\Textarea::make("text.$locale")
                        ->label(__('admin-kit-reviews::reviews.resource.text'))
                        ->required($locale === app()->getLocale())
                        ->rows(5)
                        ->maxLength(303),
                ])),
            ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin-kit-reviews::reviews.resource.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('author')
                    ->label(__('admin-kit-reviews::reviews.resource.name')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-reviews::reviews.resource.created_at')),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReview::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-reviews::reviews.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-reviews::reviews.resource.plural_label');
    }
}
