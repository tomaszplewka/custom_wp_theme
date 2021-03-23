<?php

// Theme setup
function awesometheme_setup()
{
    // Get theme version and assign to constant
    $theme = wp_get_theme();
    define('THEME_VERSION', $theme->Version);
    // Load text domain
    load_theme_textdomain('awesometheme', get_template_directory() . '/languages');
    // Enable title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'awesometheme_setup');

// Load css & js
function awesometheme_scripts()
{
    // css
    wp_enqueue_style('awesometheme-style', get_template_directory_uri() . '/dist/css/bundle.css', array(), THEME_VERSION, 'all');
    // js
    wp_enqueue_script('awesometheme-script', get_template_directory_uri() . '/dist/js/bundle.js', array(), THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'awesometheme_scripts');

// Add custom menu
function awesometheme_menu()
{
    register_nav_menus(
        array(
            'header-primary-menu' => __('Primary', 'awesometheme'),
            'footer-primary-menu' => __('Footer Primary Menu', 'awesometheme'),
            'footer-secondary-menu' => __('Footer Secondary Menu', 'awesometheme'),
        )
    );
}
add_action('init', 'awesometheme_menu');

// DND prefetch
function wp_dns_prefetch()
{
    echo '<meta http-equiv="x-dns-prefetch-control" content="on">';
    echo '<link rel="dns-prefetch" href="https://use.typekit.net/nem8qyo.css" />';
    echo '<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />';
}
// add_action('wp_head', 'wp_dns_prefetch', 0);
