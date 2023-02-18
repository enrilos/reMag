<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once REMAGPATH . 'includes/Hooks.php';

class Engine
{
    public static function init()
    {
        Hooks::register();
    }
}
