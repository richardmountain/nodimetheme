<?php
	
	/**
	 * [nodime_enqueue_styles description]
	 * @return [type] [description]
	 */
	function nodime_enqueue_styles() {
		wp_enqueue_style( 'nodime-style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'nodime_enqueue_styles' );

	/**
	 * [nodime_remove_parent_styles description]
	 * @return [type] [description]
	 */
	function nodime_remove_parent_styles() {

		// Removing parent styles
	       wp_dequeue_style( '_tk-bootstrap-wp' );
	    wp_deregister_style( '_tk-bootstrap-wp' );
	       wp_dequeue_style( '_tk-bootstrap' );
	    wp_deregister_style( '_tk-bootstrap' );
	       wp_dequeue_style( '_tk-style' );
	    wp_deregister_style( '_tk-style' );	    	    
	}
	add_action( 'wp_print_styles', 'nodime_remove_parent_styles', 100 );

	/**
	 * [is_blog description]
	 * @return boolean [description]
	 */
	function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
	}

	if ( ! function_exists( 'nodime_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function nodime_posted_on() {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$time_string = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			$time_string
		);

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ){
			$time_string_update = '<time class="updated" datetime="%1$s">%2$s</time>';
			$time_string_update = sprintf( $time_string_update,
				esc_attr( get_the_modified_date( 'c' ) ),
				esc_html( get_the_modified_date() )
			);
			$time_string_update = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
				esc_url( get_permalink() ),
				esc_attr( get_the_time() ),
				$time_string_update
			);
			$time_string .= __(', updated on ', '_tk') . $time_string_update;
		}

		printf( __( '<span class="posted-on">%1$s</span>', '_tk' ),	$time_string );
	}
	endif;

?>