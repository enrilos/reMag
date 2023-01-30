<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once PLUGINPATH . 'includes/Hooks.php';

class Engine
{
    public static function init()
    {
        \Remag\Hooks::register();
    }
}
