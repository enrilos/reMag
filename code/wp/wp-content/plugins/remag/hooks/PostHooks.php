<?php

namespace Remag\Hooks;

class PostHooks
{
    public static function register()
    {
        add_action('post_updated', 'Remag\Hooks\PostHooks::postSave', 10, 3);
    }

    public static function postSave($id, $post, $update)
    {
        var_dump('here', $id);
        die;
    }
}
