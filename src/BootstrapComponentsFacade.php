<?php

namespace Appstract\BootstrapComponents;

use Illuminate\Support\Facades\Facade;

class BootstrapComponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BootstrapComponentsClass::class;
    }
}
