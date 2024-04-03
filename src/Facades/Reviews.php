<?php

namespace AdminKit\Reviews\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Reviews\Reviews
 */
class Reviews extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Reviews\Reviews::class;
    }
}
