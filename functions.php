<?php

// Load stylesheets
function load_css() {
    wp_enqueue_style( 'local-fonts', get_template_directory_uri() . '/assets/fonts/local-fonts.css', array(), null );
    wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.min.css', [], false, 'all');
    wp_enqueue_style('reset');
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', [], false, 'all');
    wp_enqueue_style('style');
    wp_register_style('style-secondary', get_template_directory_uri() . '/assets/css/style-secondary.css', [], false, 'all');
    wp_enqueue_style('style-secondary');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js() {
    wp_register_script('script.js', get_template_directory_uri() . '/assets/js/script.js', [], false, true);
    wp_enqueue_script('script.js');
    wp_register_script('jquery.js', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), false, true);
    wp_enqueue_script('jquery.js');
    wp_register_script('table1.js', get_template_directory_uri() . '/assets/js/table1.js', array('jquery'), false, true);
    wp_enqueue_script('table1.js');
}
add_action('wp_enqueue_scripts', 'load_js');

function enqueue_custom_scripts() {
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Custom image sizes
add_image_size('blog-large', 800, 600, true);
add_image_size('blog-small', 300, 200, true);

// Creating a menu
function register_menus() {
    register_nav_menus(
        array(
            'top-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
            'footer-menu-services' => 'Footer Menu Services'
        )
    );
}
add_action('init', 'register_menus');

// Adding svgs
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');


function add_event_post_type() {
    $args = [
        'labels' => [
            'name' => 'FAQ',
            'singular_name' => 'FAQ'
        ],
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'rewrite' => ['slug' => 'faq']
    ];

    register_post_type('FAQ', $args);
}
add_action('init', 'add_event_post_type');

function get_permalink_by_title($page_title) {
    $page = get_page_by_title($page_title);

    if ($page) {
        return get_permalink($page->ID);
    }

    return '';
}

function custom_excerpt_length($length) {
    return 30; 
}
add_filter('excerpt_length', 'custom_excerpt_length');