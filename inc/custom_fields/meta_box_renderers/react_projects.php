<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

function render_react_git_link_meta_box($post) {
    // Retrieve the existing value of the custom field (if it exists)
    $react_git_link = get_post_meta($post->ID, '_react_git_link', true);
    
    // Add a nonce field for security
    wp_nonce_field('react_git_link_meta_box_action', 'react_git_link_meta_box_nonce');
    
    ?>
    <label for="react_git_link_field">Git Link:</label>
    <input type="url" name="react_git_link_field" id="react_git_link_field" value="<?php echo esc_attr($react_git_link); ?>" style="width: 100%;"/>
    <?php
}

function render_react_short_desc_meta_box($post) {
    // Retrieve the existing value of the custom field (if it exists)
    $react_short_desc = get_post_meta($post->ID, '_react_short_desc', true);

    // Add a nonce field for security
    wp_nonce_field('react_short_desc_meta_box_action', 'react_short_desc_meta_box_nonce');

    // Output the TinyMCE editor
    wp_editor($react_short_desc, 'react_short_desc', array(
        'textarea_name' => 'react_short_desc',
        'media_buttons' => true,
        'textarea_rows' => 10,
    ));
}