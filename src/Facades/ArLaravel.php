<?php

namespace AlazziAz\ArLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlazziAz\ArLaravel\ArLaravel
 *
 *
 */
class ArLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'arLaravel';
    }
}
