<?php

namespace Sixincode\SixCore\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sixincode\SixCore\SixCore
 */
class SixCore extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sixincode\SixCore\SixCore::class;
    }
}
