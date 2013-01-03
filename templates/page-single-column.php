<?php
/*
Template Name: Single Column
*/
?>
<?php
	get_header();
?>

<div id="main" class="container-fluid">
  <div id="content-wrapper" class="row-fluid">
    <section id="primary" class="span12">
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <article class="article-wrapper">
        <header class="entry-header"> <a href="<?php the_permalink(); ?>">
          <h1 class="entry-title">
             <?php the_title() ?>
          </h1>
          </a>
          <div class="entry-meta"></div>
          <?php if ( has_post_thumbnail() ) { ?>
          <div class="entry-featured">
            <?php the_post_thumbnail( 'crater-featured' ); ?>
          </div>
          <?php } ?>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
        <footer>
        </footer>
        </article>
        </div>
        <?php comments_template( '', true ); ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </section>
  </div>
</div>
<?php
  	get_footer();
  ?>