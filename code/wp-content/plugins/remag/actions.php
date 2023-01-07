<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once PLUGINPATH . './hooks/post-hooks.php';

class Actions
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
