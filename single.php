<?php
	get_header();
?>

<div id="main" class="container-fluid">
  <div id="content-wrapper" class="row-fluid">
    <section id="primary" class="span7">
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <article class="article-wrapper">
        <header class="entry-header"> <a href="<?php the_permalink(); ?>">
          <h1 class="entry-title">
             <?php the_title() ?>
          </h1>
          </a>
          <div class="entry-meta"> <span class="entry-author">
            <?php the_author(); ?>
            </span><span class="separator">&#8226;</span>
            <?php the_time('F d, Y') ?>
            <span class="separator">&#8226;</span> <span class="entry-category">
            <?php the_category(' ') ?>
            </span> </div>
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
        <span class="entry-tags">
            <?php the_tags('Tags: ',' ') ?>
            </span>
        </footer>
        </article>
        </div>
        <?php comments_template( '', true ); ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </section>
    <section id="secondary" class="span5 widget-area">
      <?php get_sidebar(); ?>
    </section>
  </div>
</div>
<?php
  	get_footer();
  ?>