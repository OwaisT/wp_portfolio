<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

function render_python_git_link_meta_box($post) {
    // Retrieve the existing value of the custom field (if it exists)
    $python_git_link = get_post_meta($post->ID, '_python_git_link', true);
    
    // Add a nonce field for security
    wp_nonce_field('python_git_link_meta_box_action', 'python_git_link_meta_box_nonce');
    
    ?>
    <label for="python_git_link_field">Git Link:</label>
    <input type="url" name="python_git_link_field" id="python_git_link_field" value="<?php echo esc_attr($python_git_link); ?>" style="width: 100%;"/>
    <?php
}

function render_python_short_desc_meta_box($post) {
    // Retrieve the existing value of the custom field (if it exists)
    $python_short_desc = get_post_meta($post->ID, '_python_short_desc', true);

    // Add a nonce field for security
    wp_nonce_field('python_short_desc_meta_box_action', 'python_short_desc_meta_box_nonce');

    // Output the TinyMCE editor
    wp_editor($python_short_desc, 'python_short_desc', array(
        'textarea_name' => 'python_short_desc',
        'media_buttons' => true,
        'textarea_rows' => 10,
    ));
}