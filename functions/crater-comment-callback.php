<?php
// Default comment template
function crater_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
  <article id="comment-<?php comment_ID(); ?>">
    <header>
      <div class="comment-gravatar"> <?php echo get_avatar( $comment, 60 ); ?> </div>
      <section class="comment-meta"> <cite class="author-name"> <?php echo get_comment_author_link() ?> </cite>
        <time><?php echo get_comment_date('M d, Y') ?></time>
      </section>
    </header>
    <section class="comment-content"> <?php comment_text(); ?> </section>
    <?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>
			<?php endif; ?>
    <footer class="comment-footer">
	<?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?> </footer>
  </article>
</li>
<?php
}
?>