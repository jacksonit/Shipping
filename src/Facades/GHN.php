<?php

namespace Jacksonit\Shipping\Facades;

use Illuminate\Support\Facades\Facade;

class GHN extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'GHN';
    }
}