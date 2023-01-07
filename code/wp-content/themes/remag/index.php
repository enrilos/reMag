<?php http_response_code(200); http_response_code(); ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>reMag</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
            if (is_404()) {
                $front_page_id = get_option('page_on_front');
                $front_page_post = get_post($front_page_id);
                global $post;
                $post = $front_page_post;

                global $wp_the_query, $wp_query;
                $wp_the_query = new WP_Query(['post_type' => 'page']);
                $wp_the_query->is_singular = true;
                $wp_query = $wp_the_query;
            }

            wp_head();
        ?>
</head>

<body>
    <div id="root"></div>
</body>

</html>