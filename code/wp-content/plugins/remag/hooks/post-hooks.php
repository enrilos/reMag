<?php

namespace Remag\Hooks;

class PostHooks
{
    public static function register()
    {
        add_action('post_updated', 'Remag\Hooks\PostHooks::save', 10, 3);
    }

    public static function save($id, $post, $update)
    {
        var_dump('here123', $id);
        die;
    }
}
