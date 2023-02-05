<?php

namespace Remag;

defined('ABSPATH') || exit;

class Routes
{
    /**
     * register
     *
     * @return void
    */
    public static function register()
    {
        self::register_api_routes();
    }

    /**
     * register_api_routes
     *
     * @return void
    */
    private static function register_api_routes()
    {
        register_rest_route( 'remag/v1', '/author', [
            'methods' => 'GET',
            'callback' => function($request) {var_dump('rest'); die;},
        ]);
    }
}