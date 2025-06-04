<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

function render_next_git_link_meta_box($post) {
    // Retrieve the existing value of the custom field (if it exists)
    $next_git_link = get_post_meta($post->ID, '_next_git_link', true);
    
    // Add a nonce field for security
    wp_nonce_field('next_git_link_meta_box_action', 'next_git_link_meta_box_nonce');
    
    ?>
    <label for="next_git_link_field">Git Link:</label>
    <input type="url" name="next_git_link_field" id="next_git_link_field" value="<?php echo esc_attr($next_git_link); ?>" style="width: 100%;"/>
    <?php
}

function render_next_short_desc_meta_box($post) {
    // Retrieve the existing value of the custom field (if it exists)
    $next_short_desc = get_post_meta($post->ID, '_next_short_desc', true);

    // Add a nonce field for security
    wp_nonce_field('next_short_desc_meta_box_action', 'next_short_desc_meta_box_nonce');

    // Output the TinyMCE editor
    wp_editor($next_short_desc, 'next_short_desc', array(
        'textarea_name' => 'next_short_desc',
        'media_buttons' => true,
        'textarea_rows' => 10,
    ));
}