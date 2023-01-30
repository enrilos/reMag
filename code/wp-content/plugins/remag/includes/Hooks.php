<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once PLUGINPATH . 'includes/hooks/PostHooks.php';
require_once PLUGINPATH . 'includes/Routes.php';

class Hooks
{
    public static function register()
    {
        Routes::register();
        Hooks\PostHooks::register();
    }
}
