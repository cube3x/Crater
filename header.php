<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title( '', true); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
<link href="<?php bloginfo('template_url'); ?>/inc/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo('template_url'); ?>/inc/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/crater.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/crater-responsive.css" rel="stylesheet" media="screen">
<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]--> 

<!-- Add your site or application content here -->
<nav class="navbar">
  <div class="navbar-inner zeroBorderRadius">
    <div class="container-fluid">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="nav-collapse collapse">
        <?php wp_nav_menu( array(
			'menu' => 'Primary Menu',
			'menu_class' => 'nav',
			'depth' => 2,
			'walker' => new primary_menu_walker()
			)); ?>
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
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <div>
        <input type="text" value="" name="s" id="s" class="input-medium search-query" autocomplete="off"/>
        <button type="submit" id="searchsubmit" class="cr-button cr-button-blue cr-button-search"><i class="icon-search icon-white"></i></button>
      </div>
    </form>
  </div>
</header>
