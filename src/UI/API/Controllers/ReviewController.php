<?php

declare(strict_types=1);

namespace AdminKit\Reviews\UI\API\Controllers;

use AdminKit\Reviews\Models\Review;
use Spatie\LaravelData\DataCollection;
use AdminKit\Reviews\UI\API\Data\ReviewData;

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
