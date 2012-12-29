<?php
//Register Primary Sidebar
if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'Primary'),
   'id' => 'primarysidebar',
   'description' => 'Primary Widget Area',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );
?>