<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Blog Site Template">
        <meta name="author" content="https://durandev.net/">    
        <?php
            wp_head();
        ?>
    </head> 
    <body>
        <?php echo get_bloginfo('name'); ?>
        <?php
            if(function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
        ?>
        <img style="height: 25px; width: 25px;" src="<?php echo $logo[0] ?>" alt="logo" >
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="nav">%3$s</ul>'
                )
            );
        ?>
        <?php single_post_title(); ?>