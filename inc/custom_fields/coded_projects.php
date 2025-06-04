<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Custom Fields for Coded Projects
// First add meta boxes for all the cpts
// Add meta boxes to react projects post type
function add_react_project_meta_boxes() {
    add_meta_box('git_link', __('Git link', 'textdomain'), 'render_react_git_link_meta_box', 'react-project', 'normal', 'high');
    add_meta_box('short_desc_meta', __('Short Description', 'textdomain'), 'render_react_short_desc_meta_box', 'react-project', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_react_project_meta_boxes');

// Add meta boxes to next projects post type
function add_next_project_meta_boxes() {
    add_meta_box('git_link', __('Git link', 'textdomain'), 'render_next_git_link_meta_box', 'next-project', 'normal', 'high');
    add_meta_box('short_desc_meta', __('Short Description', 'textdomain'), 'render_next_short_desc_meta_box', 'next-project', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_next_project_meta_boxes');

// Add meta boxes to python projects post type
function add_python_project_meta_boxes() {
    add_meta_box('git_link', __('Git link', 'textdomain'), 'render_python_git_link_meta_box', 'python-project', 'normal', 'high');
    add_meta_box('short_desc_meta', __('Short Description', 'textdomain'), 'render_python_short_desc_meta_box', 'python-project', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_python_project_meta_boxes');

// Include meta box renderers
require_once get_stylesheet_directory() . '/inc/custom-fields/meta-box-renderers/react_projects.php';
require_once get_stylesheet_directory() . '/inc/custom-fields/meta-box-renderers/next_projects.php';
require_once get_stylesheet_directory() . '/inc/custom-fields/meta-box-renderers/python_projects.php';

// Save all meta box data
function save_coded_projects_meta_box_data($post_id) {
    // Save react_git_link
    if (isset($_POST['react_git_link'])) {
        update_post_meta($post_id, '_react_git_link', intval($_POST['react_git_link']));
    }
    // Save react_short_desc
    if (isset($_POST['react_short_desc'])) {
        // Add line breaks manually if not saved
        $react_short_desc = $_POST['react_short_desc'];
        // Ensure line breaks are correctly preserved in the database
        $react_short_desc = nl2br($react_short_desc);  // Convert new lines to <br> tags
        // Save the description ts with <br> tags, allowing TinyMCE to preserve them
        update_post_meta($post_id, '_react_short_desc', wp_kses_post($react_short_desc));
    }

    // Save next_git_link
    if (isset($_POST['next_git_link'])) {
        update_post_meta($post_id, '_next_git_link', intval($_POST['next_git_link']));
    }
    // Save next_short_desc
    if (isset($_POST['next_short_desc'])) {
        // Add line breaks manually if not saved
        $next_short_desc = $_POST['next_short_desc'];
        // Ensure line breaks are correctly preserved in the database
        $next_short_desc = nl2br($next_short_desc);  // Convert new lines to <br> tags
        // Save the description ts with <br> tags, allowing TinyMCE to preserve them
        update_post_meta($post_id, '_next_short_desc', wp_kses_post($next_short_desc));
    }

    // Save python_git_link
    if (isset($_POST['python_git_link'])) {
        update_post_meta($post_id, '_python_git_link', intval($_POST['python_git_link']));
    }
    // Save python_short_desc
    if (isset($_POST['python_short_desc'])) {
        // Add line breaks manually if not saved
        $python_short_desc = $_POST['python_short_desc'];
        // Ensure line breaks are correctly preserved in the database
        $python_short_desc = nl2br($python_short_desc);  // Convert new lines to <br> tags
        // Save the description ts with <br> tags, allowing TinyMCE to preserve them
        update_post_meta($post_id, '_python_short_desc', wp_kses_post($python_short_desc));
    }

}
add_action('save_post', 'save_coded_projects_meta_box_data');

// Register Meta Fields for coded projects (React, Next, Python) Post Types
function register_coded_projects_meta_fields() {
    // Register _react_git_link meta field for 'react-project' post type
    register_meta('post', '_react_git_link', array(
        'show_in_rest' => true, // Make the meta field accessible in the REST API
        'single' => true, // Store as a single value
        'type' => 'string', // Meta field type
        'object_subtype' => 'react-project', // Specify the post type
    ));
    // Register _react_short_desc meta field for 'testimonial' post type
    register_meta('post', '_react_short_desc', array(
        'show_in_rest' => true, // Make the meta field accessible in the REST API
        'single' => true, // Store as a single value
        'type' => 'string', // Meta field type
        'object_subtype' => 'react-project', // Specify the post type
    ));

    // Register _next_git_link meta field for 'next-project' post type
    register_meta('post', '_next_git_link', array(
        'show_in_rest' => true, // Make the meta field accessible in the REST API
        'single' => true, // Store as a single value
        'type' => 'string', // Meta field type
        'object_subtype' => 'next-project', // Specify the post type
    ));
    // Register _next_short_desc meta field for 'testimonial' post type
    register_meta('post', '_next_short_desc', array(
        'show_in_rest' => true, // Make the meta field accessible in the REST API
        'single' => true, // Store as a single value
        'type' => 'string', // Meta field type
        'object_subtype' => 'next-project', // Specify the post type
    ));

    // Register _python_git_link meta field for 'python-project' post type
    register_meta('post', '_python_git_link', array(
        'show_in_rest' => true, // Make the meta field accessible in the REST API
        'single' => true, // Store as a single value
        'type' => 'string', // Meta field type
        'object_subtype' => 'python-project', // Specify the post type
    ));
    // Register _python_short_desc meta field for 'testimonial' post type
    register_meta('post', '_python_short_desc', array(
        'show_in_rest' => true, // Make the meta field accessible in the REST API
        'single' => true, // Store as a single value
        'type' => 'string', // Meta field type
        'object_subtype' => 'python-project', // Specify the post type
    ));
}
add_action('init', 'register_testimonial_meta_fields');
