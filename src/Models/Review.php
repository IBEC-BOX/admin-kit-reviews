<?php

namespace AdminKit\Reviews\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Reviews\Database\Factories\ReviewFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Review extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_reviews';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): ReviewFactory
    {
        return new ReviewFactory();
    }
}
