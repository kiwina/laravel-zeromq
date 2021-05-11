<?php


namespace Kiwina\ZeroMQ\Facades;

use Illuminate\Support\Facades\Facade;

class ZeroMQ extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'zeromq';
    }
}
