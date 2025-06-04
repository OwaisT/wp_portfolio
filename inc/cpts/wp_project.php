<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Register Custom Post Type: WP Project
function create_wp_project_post_type() {
    $labels = array(
        'name'                  => 'WP Projects',
        'singular_name'         => 'WP Project',
        'menu_name'             => 'WP Projects',
        'name_admin_bar'        => 'WP Project',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New WP Project',
        'new_item'              => 'New WP Project',
        'edit_item'             => 'Edit WP Project',
        'view_item'             => 'View WP Project',
        'all_items'             => 'All WP Projects',
        'search_items'          => 'Search WP Projects',
        'parent_item_colon'     => 'Parent WP Projects:',
        'not_found'             => 'No wp projects found.',
        'not_found_in_trash'    => 'No wp projects found in Trash.',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
    );
    
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'menu_icon'             => 'dashicons-portfolio', // Icon for the admin menu
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest'          => true, // Enable Gutenberg editor
        'rewrite'               => array('slug' => 'wp-projects'), // Custom slug for the post type
    );
    
    register_post_type('wp-project', $args);
}
add_action('init', 'create_wp_project_post_type');

