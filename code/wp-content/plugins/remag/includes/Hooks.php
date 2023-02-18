<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once REMAGPATH . 'includes/hooks/PostHooks.php';
require_once REMAGPATH . 'includes/Routes.php';

class Hooks
{
    public static function register()
    {
        Hooks\PostHooks::register();

        add_action('rest_api_init', [Routes::class, 'register']);
    }
}
