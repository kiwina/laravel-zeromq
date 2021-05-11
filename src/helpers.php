<?php



use Kiwina\ZeroMQ\Manager;

if (! function_exists('zeromq')) {
    /**
     * Get ZeroMQ connection manager.
     *
     * @return \Kiwina\ZeroMQ\Manager
     */
    function zeromq(): Manager
    {
        return app('zeromq');
    }
}
