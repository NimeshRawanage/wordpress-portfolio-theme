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

// Register Custom Post Type: Portfolio
function portfolio_custom_post_type() {
    $labels = array(
        'name'               => 'Portfolio',
        'singular_name'      => 'Project',
        'menu_name'          => 'Portfolio',
        'name_admin_bar'     => 'Portfolio',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Project',
        'new_item'           => 'New Project',
        'edit_item'          => 'Edit Project',
        'view_item'          => 'View Project',
        'all_items'          => 'All Projects',
        'search_items'       => 'Search Portfolio',
        'not_found'          => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'show_in_rest'       => true, // Enables Gutenberg editor support
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'portfolio_custom_post_type');





?>
