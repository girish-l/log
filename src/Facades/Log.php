<?php

namespace Girishl\Log\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Girishl\Log\Log
 */
class Log extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Girishl\Log\Log::class;
    }
}
