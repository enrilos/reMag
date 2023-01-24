<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once PLUGINPATH . '/includes/hooks/post-hooks.php';

class Hooks
{
    public static function register()
    {
        self::register_hooks();
    }

    private static function register_hooks()
    {
        \Remag\Hooks\PostHooks::register();
    }
}
