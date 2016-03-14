<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<style type="text/css" media="screen">

		@import url( <?php bloginfo('stylesheet_url'); ?> );

	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>

</head>

<body>



<div id="main-nav">

	<div id="colors">

		<ul>

		<li class="red"><a href="<?php echo get_settings('home'); ?>">Journal</a></li>

		<li class="orange"><a href="#">Archives</a></li>

		<li class="yellow"><a href="#">About</a></li>

		<li class="green"><a href="#">Portfolio</a></li>

		<li class="blue"><a href="#">Links</a></li>

		</ul>

	</div>

	<div id="search-bar"><form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"><input class="search-input" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s"/> <input class="search-submit" type="submit" value="<?php _e('&raquo;'); ?>" /></form></div>

	<div id="box"><a href="http://wordpress.org" title="Powered by Wordpress" target="_blank">WordPress</a></div>

</div>



<div id="sub-nav">

<?php get_calendar(1); ?>

<?php get_sidebar(); ?>

</div>



<div id="content">



<div id="title">

<a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a>

</div>