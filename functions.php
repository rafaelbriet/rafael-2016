<?php

/***** Enqueue scripts and styles *****/
function rafaelbriet_enque_scripts() {
    wp_enqueue_style('core-style', get_stylesheet_uri());

    if (is_front_page()) {
        wp_enqueue_script('contact-script', get_template_directory_uri() . '/assets/scripts/mail.js', array(), '1.0.0', true);
    }

    if (is_singular() && comments_open() && get_option( 'thread_comments' )) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action('wp_enqueue_scripts', 'rafaelbriet_enque_scripts');

/***** Registering the menu *****/
function rafaelbriet_menu() {
    register_nav_menu('header-menu', __('Header menu'));
}

add_action('init', 'rafaelbriet_menu');

/***** Post thumbnails and images sizes *****/
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1920, 750, true);

/***** Post formats *****/
add_theme_support('post-formats', array(
    'aside',
    'gallery',
    'image',
    'status',
    'video',
    'audio',
));