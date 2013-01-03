<footer class="site-footer">
    <div class="row-fluid footer-text">
      <div class="span12">
      Copyright &copy; 2013 <?php bloginfo('name'); ?>. All Rights Reserved.
      </div>
    </div>
  </footer>
</div>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php
	wp_footer();
?>
</body>
</html>