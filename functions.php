<?php
// Theme Setup
function portfolio_theme_setup() {
    // Enable featured images
    add_theme_support('post-thumbnails');

    // Enable title tag support
    add_theme_support('title-tag');

    // Enable custom logo
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'portfolio-theme'),
        'footer'  => __('Footer Menu', 'portfolio-theme'),
    ));
}
add_action('after_setup_theme', 'portfolio_theme_setup');

// Enqueue Styles & Scripts
function portfolio_enqueue_styles() {
    // Enqueue the main theme stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue additional custom styles
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), time(), 'all'); // Forces browser to reload latest CSS

    // Enqueue JavaScript
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles');





?>
