<?php

namespace Remag;

defined('ABSPATH') || exit;

class Routes
{
    public static function register()
    {
        add_action('rest_api_init', 'Remag\Routes::register_api_routes');
    }

    public static function register_api_routes()
    {
        register_rest_route( 'remag/v1', '/author', [
            'methods' => 'GET',
            'callback' => function($request) {var_dump('rest', $request); die;},
        ]);
    }
}
