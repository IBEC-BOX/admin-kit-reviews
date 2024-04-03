<?php

declare(strict_types=1);

namespace AdminKit\Reviews\UI\API\Controllers;

use AdminKit\Reviews\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function show(int $id)
    {
        return Review::findOrFail($id);
    }
}
