<?php

namespace AlazziAz\ArLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlazziAz\ArLaravel\ArLaravel
 * @method static \ArPHP\I18N\Arabic getArabic()
 * @method static string adjustContent($html)
 * @method static bool isArabic($text)
 */
class ArLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'arLaravel';
    }
}
