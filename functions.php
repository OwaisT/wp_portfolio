<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Get child theme
function wp_portfolio_theme_styles() {
    // Get the parent theme handle if it exists
    $parent_style = 'parent-style'; 

    // Load the parent theme styles
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

    // Load the child theme styles, ensuring it loads after the parent
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), filemtime(get_stylesheet_directory() . '/style.css'));

}
add_action('wp_enqueue_scripts', 'orbweber_theme_styles');

require_once get_stylesheet_directory() . '/anims/import-anims.php';
require_once get_stylesheet_directory() . '/inc/assemble-for-import.php';
