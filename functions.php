<?php

// Enable title tag
add_theme_support('title-tag');

// Load css & js
function add_theme_scripts()
{
    // css
    wp_enqueue_style('custom-style', get_stylesheet_uri());
    // js
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// Add custom menu
function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'header-primary-menu' => __('Primary', 'custom-menu'),
            'footer-primary-menu' => __('Footer Primary Menu', 'custom-menu'),
            'footer-secondary-menu' => __('Footer Secondary Menu', 'custom-menu'),
        )
    );
}
add_action('init', 'wpb_custom_new_menu');
