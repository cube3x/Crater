<?php 
 // Custom widget Area Start
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary') ) : ?>

<aside class="widget">
  <h3 class="widget-title">Recent Posts</h3>
  <ul>
<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>
</aside>
<aside class="widget">
  <h3 class="widget-title">Calendar</h3>
  <?php get_calendar(); ?>
</aside>
<?php endif;
// Custom widget Area End
?>