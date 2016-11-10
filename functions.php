<?php

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

/**
 * Proper way to enqueue scripts and styles
 */
function wp_styles_and_scripts() {
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Lato:400,400i,900' );
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
    wp_enqueue_script( 'pace', get_template_directory_uri() . '/js/pace.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_styles_and_scripts' );

/**
 * Navigation
 */
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

/**
 * Remove Admin bar from logged in user
 */

add_filter('show_admin_bar', '__return_false');