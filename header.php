<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php the_title(); ?> &raquo; <?php bloginfo('name'); ?></title>
	
	<meta name="description" content="<?php if (have_posts()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; endif; ?>" />
	
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed (<?php bloginfo('language'); ?>)" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--Stylesheets-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wp.css" type="text/css" media="screen" charset="utf-8" />

	<?php wp_head(); ?>
	
	<!--Scripts--> 
	<?php // NOTE: We are enqueing jQuery from Google CDN in the functions.php. If it doesn't load we grab the local version ?>
	<script type="text/javascript">!window.jQuery && document.write('<script src="scripts/jquery-1.6.2.min.js"><\/script>')</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.browser.addEnvClass.js"></script>

</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="header">
			<div class="holder">
				<?php
				 	/* load main menu */
					wp_nav_menu( 
						array(
							'menu' 				=>	'main_menu',
							'menu_class'		=>	'main-nav',
							'theme_location'	=>	'main_menu'
						)); ?>
				<h1 class="logo"><a href="http://www.central.edu" title="Central College - Pella, Iowa">Central College Dining - Pella, lowa</a></h1>
				<?php
				 	/* load top menu */
					wp_nav_menu( 
						array(
							'menu' 				=>	'top_menu',
							'menu_class'		=>	'nav',
							'theme_location'	=>	'top_menu'
						)); ?>
				<?php //get_template_part('inc/theme/spoon-fork'); ?>
			</div>
		</div> <!-- end header -->
		<div class="intro">
			<div class="centring">
				<?php get_template_part('inc/theme/header-intro'); ?>
			</div>
		</div> <!-- end .intro -->
		<div id="main">
			<div class="m1">