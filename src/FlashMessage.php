<?php

namespace GTK\FlashMessage;

use Illuminate\Support\Facades\Facade;

class FlashMessage extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flash';
    }
}