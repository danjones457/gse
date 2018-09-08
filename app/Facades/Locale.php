<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Locale extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return 'locale';
    }
}
