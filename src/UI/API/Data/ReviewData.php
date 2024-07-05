<?php

namespace AdminKit\Reviews\UI\API\Data;

use AdminKit\Reviews\Models\Review;
use Spatie\LaravelData\Concerns\WithDeprecatedCollectionMethod;
use Spatie\LaravelData\Data;

class ReviewData extends Data
{
    use WithDeprecatedCollectionMethod;

    public function __construct(
        public string $text,
        public string $author,
        public string $bio,
        public string $photo,
    ) {}

    public static function fromModel(Review $review): ReviewData
    {
        return new self(
            text: $review->text,
            author: $review->author,
            bio: $review->bio,
            photo: $review->photo
        );
    }
}
