<?php

namespace Remag\Controllers;

defined('ABSPATH') || exit;

use WP_REST_Response;

require_once REMAGPATH . 'includes/controllers/RemagController.php';

class TestController extends RemagController
{
    public function __construct()
    {
        $this->register_routes();
    }

    public function register_routes()
    {
        register_rest_route(parent::REST_NAMESPACE, '/author', [
            [
                'methods' => 'GET',
                'callback' => function ($request) {
                    return new WP_REST_Response(['records' => ['a', 'b', 'c', 'd']], 200);
                },
                'permission_callback' => '__return_true'
            ],
            [
                'methods' => 'POST',
                'callback' => function ($request) {
                    return new WP_REST_Response(['msg' => 'You\'ve made a POST request'], 200);
                },
                'permission_callback' => '__return_true'
            ]
        ]);

        register_rest_route(parent::REST_NAMESPACE, '/author/(\w+)', [
            'methods' => 'GET',
            'callback' => function ($request) {
                return new WP_REST_Response(['records' => 'Some word'], 200);
            },
            'permission_callback' => '__return_true'
        ]);
    }
}
