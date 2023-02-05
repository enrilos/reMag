<?php

namespace Remag\Hooks;

class PostHooks
{
    public static function register()
    {
        add_action('post_updated', [self::class, 'save'], 10, 3);
    }

    public static function save($id, $post, $update)
    {
    }
}
