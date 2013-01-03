<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title( '', true); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]--> 

<!-- Add your site or application content here -->
<nav class="navbar">
  <div class="navbar-inner zeroBorderRadius">
    <div class="container-fluid">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="nav-collapse collapse">
      <?php
if ( has_nav_menu( 'primary' ) ) {
     ?>
     
        <?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class' => 'nav',
			'depth' => 2,
			'walker' => new crater_primary_menu_walker()
			)); ?>
            <?php
} 
else {
	?>
    <ul class="nav"><li><a href="<?php bloginfo('url'); ?>">Home</a></li>

</ul>
    <?php
}
?>
      </div>
    </div>
  </div>
</nav>
<div class="container-fluid">
<header class="site-header">
  <hgroup class="site-logo-wrapper"> <a href="<?php bloginfo('url'); ?>">
    <h1 class="site-title zeroMargin">
      <?php bloginfo('name'); ?>
    </h1>
    </a>
    <h2 class="site-description zeroMargin">
      <?php bloginfo('description'); ?>
    </h2>
  </hgroup>
  <div class="search-banner">
    <?php get_search_form( true ); ?>
  </div>
</header>