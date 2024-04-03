<?php

namespace AdminKit\Reviews\UI\API\Data;

use Spatie\LaravelData\Data;
use AdminKit\Reviews\Models\Review;

class ReviewData extends Data
{
    public function __construct(
        public string $text,
        public string $author,
        public string $bio,
        public string $photo,
    )
    {
    }

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
