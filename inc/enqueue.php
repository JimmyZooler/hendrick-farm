<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
         wp_enqueue_style( 'magnific-styles', get_stylesheet_directory_uri() . '/src/css/magnific-popup.css', array() );
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '2.5' );
//		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/src/js/jquery.min.js');
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
        wp_enqueue_script( 'waypoint-scripts', get_template_directory_uri() . '/src/js/jquery.waypoints.min.js', array('jquery'), $the_theme->get( 'Version' ), true );
        wp_enqueue_script( 'modernizr-scripts', get_template_directory_uri() . '/src/js/modernizr-custom.js', array('jquery'), $the_theme->get( 'Version' ), true );
        wp_enqueue_script( 'touch-scripts', get_template_directory_uri() . '/src/js/detect-touch.js', array(), $the_theme->get( 'Version' ), true );
        wp_enqueue_style( 'animate-styles', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
        wp_enqueue_script( 'salvattore-scripts', get_stylesheet_directory_uri() . '/src/js/salvattore.min.js', array(), false, true );
        wp_enqueue_script( 'magnific-scripts', get_stylesheet_directory_uri() . '/src/js/jquery.magnific-popup.js', array(), false, true );
        wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/src/js/scripts.js', array('jquery'), '1.8', true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
