<?php

// theme support
function customtheme_support() {
    // Adds dynamic title tags
    add_theme_support('title-tag');
    // Add logo support
    add_theme_support('custom-logo');
    // Add post thumbnail support
    add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'customtheme_support');

// Register menu locations
function customtheme_menus() {
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action( 'init', 'customtheme_menus');

// Load CSS
function customtheme_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('custom-theme-style', get_template_directory_uri() . "/style.css", array('custom-theme-bootstrap'), $version, "all");
    wp_enqueue_style('custom-theme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style('custom-theme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action( 'wp_enqueue_scripts', 'customtheme_register_styles');

// Load JS
function customtheme_register_scripts() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('custom-theme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('custom-theme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('custom-theme-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
    wp_enqueue_script('custom-theme-main', get_template_directory_uri() .'/assets/js/main.js', array(), $version, true);
}

add_action( 'wp_enqueue_scripts', 'customtheme_register_scripts');

// register sidebar/widgets
function customtheme_widget_areas() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Widget Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Widget Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action( 'widgets_init', 'customtheme_widget_areas');

?>