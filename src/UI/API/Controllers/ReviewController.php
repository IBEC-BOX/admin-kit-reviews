<?php

declare(strict_types=1);

namespace AdminKit\Reviews\UI\API\Controllers;

use AdminKit\Reviews\Models\Review;
use AdminKit\Reviews\UI\API\Data\ReviewData;
use Spatie\LaravelData\DataCollection;

class ReviewController extends Controller
{
    public function index(): DataCollection
    {
        $reviews = Review::query()
            ->latest()
            ->get();

        return ReviewData::collection($reviews);
    }
}
