<?php
// including files from functions folder
include_once('functions/crater-primary-menu.php');
include_once('functions/crater-comment-callback.php');
include_once('functions/crater-widget-areas.php');
?>

<?php
//Enabling menu
register_nav_menu('primary', 'Primary Menu');
?>

<?php
//Enable featured image
add_theme_support( 'post-thumbnails' );
add_image_size( 'crater-featured', 893, 298, true );
?>

<?php
//Excerpts
function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>