<?php
	get_header();
?>

<div id="main" class="container-fluid">
  <div id="content-wrapper" class="row-fluid">
    <section id="primary" class="span7">
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <article class="article-wrapper">
        <header class="entry-header"> <a href="<?php the_permalink(); ?>">
          <h1 class="entry-title">
            <?php the_title(); ?>
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
          <?php the_excerpt(); ?>
        </div>
        <footer class="article-footer"> <a href="<?php the_permalink(); ?>" class="cr-button cr-button-blue">Read More</a> </footer>
      </article>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
      <div class="navigation">
        <div class="alignleft">
          <?php next_posts_link('&laquo; Older Entries') ?>
        </div>
        <div class="alignright">
          <?php previous_posts_link('Newer Entries &raquo;') ?>
        </div>
      </div>
      <?php } ?>
    </section>
    <section id="secondary" class="span5 widget-area">
      <?php get_sidebar(); ?>
    </section>
  </div>
</div>
<?php
  	get_footer();
  ?>
