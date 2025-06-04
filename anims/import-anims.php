<?php

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

function enqueue_gsap() {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_gsap');

function enqueue_global_anims_js() {
    wp_enqueue_script('global-anims-js', get_stylesheet_directory_uri() . '/anims/global-anims.js', array('gsap', 'scrolltrigger'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_global_anims_js');
