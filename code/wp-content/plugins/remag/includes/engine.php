<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once PLUGINPATH . '/includes/hooks.php';

class Engine
{
    public static function init()
    {
        \Remag\Hooks::register();
    }
}
