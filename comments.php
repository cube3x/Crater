<?php
if ( post_password_required() )
	return;
?>

<div id="comments" class="comment-area">
  <ol class="commentlist">
    <?php wp_list_comments(array(
		'style' => 'ol',
		'avatar_size' => 60,
		'type' => 'comment',
		'callback' => 'crater_comment',
		'max_depth' => 3
		)); ?>
  </ol>
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
  <nav id="comment-nav-below" class="navigation-comments" role="navigation">
    <div class="nav-previous">
      <?php previous_comments_link('&laquo; Older Comments'); ?>
    </div>
    <div class="nav-next">
      <?php next_comments_link('Newer Comments &raquo;'); ?>
    </div>
  </nav>
  <?php endif; // check for comment navigation ?>
  <?php if ( comments_open() ) : ?>
  <?php comment_form(); ?>
  <?php else : // comments are closed ?>
  <!-- If comments are closed. -->
  <p class="nocomments">Comments are closed.</p>
  <?php endif; ?>
</div>
