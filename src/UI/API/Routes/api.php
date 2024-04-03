<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Reviews\UI\API\Controllers\ReviewController;

Route::get('/reviews', [ReviewController::class, 'index']);
