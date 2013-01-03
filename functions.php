<?php 
// including files from functions folder
include_once('functions/crater-primary-menu.php');
include_once('functions/crater-comment-callback.php');
include_once('functions/crater-widget-areas.php');

//Setting content width;
if ( ! isset( $content_width ) ) $content_width = 1200;

//Enabling menu
register_nav_menu('primary', 'Primary Menu');

//Enable theme support
add_theme_support( 'automatic-feed-links' );

//Enable featured image
add_theme_support( 'post-thumbnails' );
add_image_size( 'crater-featured', 893, 298, true );

//Excerpts
function crater_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'crater_excerpt_length', 999 );
function crater_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'crater_excerpt_more');

//Registering scripts
function crater_register_scripts()
{
	wp_register_script( 'crater-plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '20121230', true );
	wp_register_script( 'crater-main', get_template_directory_uri() . '/js/main.js', array( 'crater-plugins' ), '20121230', true );
	wp_register_script( 'crater-bootstrap', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.js', array( 'jquery' ), '20121230', true );
	wp_enqueue_script( 'crater-plugins' );
	wp_enqueue_script( 'crater-main' );
	wp_enqueue_script( 'crater-bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'crater_register_scripts' );

//Registering styles
function crater_register_styles()
{
	wp_register_style( 'crater-normalize', get_template_directory_uri() . '/css/normalize.css', array( ), '20121230', 'screen' );
	wp_register_style( 'crater-main', get_template_directory_uri() . '/css/main.css', array('crater-normalize'), '20121230', 'screen' );
	wp_register_style( 'crater-bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.css', array('crater-main' ), '20121230', 'screen' );
	wp_register_style( 'crater-bootstrap-responsive', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap-responsive.css', array('crater-bootstrap' ), '20121230', 'screen' );
	wp_register_style( 'crater-style', get_template_directory_uri() . '/css/crater.css', array('crater-bootstrap-responsive' ), '20121230', 'screen' );
	wp_register_style( 'crater-style-responsive', get_template_directory_uri() . '/css/crater-responsive.css', array('crater-style' ), '20121230', 'screen' );
	wp_enqueue_style('crater-style-responsive');
}
add_action( 'wp_enqueue_scripts', 'crater_register_styles' );
?>