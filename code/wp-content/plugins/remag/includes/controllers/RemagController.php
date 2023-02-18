<?php

namespace Remag\Controllers;

defined('ABSPATH') || exit;

use WP_REST_Controller;

class RemagController extends WP_REST_Controller
{
    protected const REST_NAMESPACE = 'remag/v1';
}
