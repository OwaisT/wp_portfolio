<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Register Custom Post Type: React Project
function create_react_project_post_type() {
    $labels = array(
        'name'                  => 'React Projects',
        'singular_name'         => 'React Project',
        'menu_name'             => 'React Projects',
        'name_admin_bar'        => 'React Project',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New React Project',
        'new_item'              => 'New React Project',
        'edit_item'             => 'Edit React Project',
        'view_item'             => 'View React Project',
        'all_items'             => 'All React Projects',
        'search_items'          => 'Search React Projects',
        'parent_item_colon'     => 'Parent React Projects:',
        'not_found'             => 'No react projects found.',
        'not_found_in_trash'    => 'No react projects found in Trash.',
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
        'rewrite'               => array('slug' => 'react-projects'), // Custom slug for the post type
    );
    
    register_post_type('react-project', $args);
}
add_action('init', 'create_react_project_post_type');

