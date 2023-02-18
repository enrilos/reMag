<?php

namespace Remag;

defined('ABSPATH') || exit;

use Remag\Controllers\TestController;

require_once REMAGPATH . 'includes/controllers/TestController.php';

class Routes
{
    public static function register()
    {
        new TestController();
    }
}
