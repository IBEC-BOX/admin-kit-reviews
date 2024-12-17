<?php

namespace AdminKit\Reviews\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Reviews\Database\Factories\ReviewFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

/**
 * @property-read string $text
 * @property-read string $author
 * @property-read string $bio
 * @property-read string $photo
 */
class Review extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_reviews';

    protected $fillable = [
        'text',
        'author',
        'bio',
    ];

    protected $translatable = [
        'text',
        'author',
        'bio',
    ];

    public function photo(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getFirstMediaUrl()
        );
    }

    protected static function newFactory(): ReviewFactory
    {
        return new ReviewFactory;
    }
}
