<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once PLUGINPATH . 'includes/hooks/PostHooks.php';
require_once PLUGINPATH . 'includes/Routes.php';

class Hooks
{
    /**
     * register
     *
     * @return void
    */
    public static function register()
    {
        Hooks\PostHooks::register();

        add_action('rest_api_init', [Routes::class, 'register']);
    }
}