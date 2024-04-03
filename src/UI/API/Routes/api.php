<?php

use AdminKit\Reviews\UI\API\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/reviews', [ReviewController::class, 'index']);
