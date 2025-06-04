<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Register Custom Post Type: Python Project
function create_python_project_post_type() {
    $labels = array(
        'name'                  => 'Python Projects',
        'singular_name'         => 'Python Project',
        'menu_name'             => 'Python Projects',
        'name_admin_bar'        => 'Python Project',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Python Project',
        'new_item'              => 'New Python Project',
        'edit_item'             => 'Edit Python Project',
        'view_item'             => 'View Python Project',
        'all_items'             => 'All Python Projects',
        'search_items'          => 'Search Python Projects',
        'parent_item_colon'     => 'Parent Python Projects:',
        'not_found'             => 'No python projects found.',
        'not_found_in_trash'    => 'No python projects found in Trash.',
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
        'rewrite'               => array('slug' => 'python-projects'), // Custom slug for the post type
    );
    
    register_post_type('python-project', $args);
}
add_action('init', 'create_python_project_post_type');

