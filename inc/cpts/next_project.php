<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Register Custom Post Type: Next Project
function create_next_project_post_type() {
    $labels = array(
        'name'                  => 'Next Projects',
        'singular_name'         => 'Next Project',
        'menu_name'             => 'Next Projects',
        'name_admin_bar'        => 'Next Project',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Next Project',
        'new_item'              => 'New Next Project',
        'edit_item'             => 'Edit Next Project',
        'view_item'             => 'View Next Project',
        'all_items'             => 'All Next Projects',
        'search_items'          => 'Search Next Projects',
        'parent_item_colon'     => 'Parent Next Projects:',
        'not_found'             => 'No next projects found.',
        'not_found_in_trash'    => 'No next projects found in Trash.',
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
        'rewrite'               => array('slug' => 'next-projects'), // Custom slug for the post type
    );
    
    register_post_type('next-project', $args);
}
add_action('init', 'create_next_project_post_type');

