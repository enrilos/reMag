<?php

namespace Remag;

defined('ABSPATH') || exit;

require_once PLUGINPATH . '/actions.php';

class Engine
{
    public static function init()
    {
        \Remag\Actions::register();
    }
}
