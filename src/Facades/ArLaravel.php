<?php

namespace AlazziAz\ArLaravel\Facades;

use ArPHP\I18N\Arabic;
use Illuminate\Support\Facades\Facade;

/**
 * @see \AlazziAz\ArLaravel\ArLaravel
 *
 * @method static string adjustContent(string $text)
 * @method static string isArabic(string $text)
 */
class ArLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {

        return new \AlazziAz\ArLaravel\ArLaravel(new Arabic());
    }
}
