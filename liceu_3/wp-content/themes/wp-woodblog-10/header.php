<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<title>
		<?php wp_title(''); ?><?php if ( !( is_404() ) && ( is_single() ) or ( is_page() ) or ( is_archive() ) ) { ?><?php _e(' &laquo; '); ?><?php } ?><?php bloginfo('name'); ?>
	</title>
<?php wp_head(); ?>
</head>
<body>
<div id="container">
	<div id="ruler"></div>
	<div id="wrap">
	<!-- HEAD ELEMENTS -->
	<h1 id="logo"><a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?> <?php bloginfo('description'); ?>"></a></h1>
	<div id="head">
		<ul>
			<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<li><a href="about">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div><br class="clear"/>
	<div id="head2"></div>
	<!-- END HEAD ELEMENTS -->

	<!-- CONTENT ELEMENTS -->
	<div id="cont">