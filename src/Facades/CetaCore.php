<?php

namespace Sixincode\CetaCore\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sixincode\CetaCore\CetaCore
 */
class CetaCore extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sixincode\CetaCore\CetaCore::class;
    }
}
