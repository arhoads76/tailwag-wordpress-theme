<?php

function fancy_tailwind_assets() {
    wp_enqueue_style(
        'fancy_tailwind-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'fancy_tailwind_assets' );

// Add theme supports
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

// Register menus
register_nav_menus( array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu',
    'organization' => 'Organization Menu',
    'animals' => 'Our Animals Menu',
) );
