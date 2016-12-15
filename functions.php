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
    wp_enqueue_script( 'jquery-2', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
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

/**
 * Remove jQuery that comes with WP
 */
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}


/**
 * Add featured image support
 */
add_theme_support('post-thumbnails');