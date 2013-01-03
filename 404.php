<?php
	get_header();
?>

<div id="main" class="container-fluid">
  <div id="content-wrapper" class="row-fluid">
    <section id="primary" class="span7">
      <h3>Page Not Found</h3>
      Search for your page:
      <?php get_search_form( true ); ?>
      <h3 class="widget-title">Recent Posts</h3>
      <ul>
        <?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
      </ul>
    </section>
    <section id="secondary" class="span5 widget-area">
      <?php get_sidebar(); ?>
    </section>
  </div>
</div>
<?php
  	get_footer();
  ?>