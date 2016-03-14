<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Архив сайта <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css" />
	<![endif]-->
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie6.css" />
	<![endif]-->
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
<div id="content-container">
<div id="page-bottom">
	<div id="header">
		<div id="header-title">
		<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="header-subtitle"><?php bloginfo('description'); ?></div>
		</div>
		
		<div id="navlist">
			<ul>
				<?php if (is_home()) { ?>
				<li class="current_page_item"><a href="<?php echo get_option('home'); ?>/">Главная</a></li>
				<?php } else { ?>
				<li><a href="<?php echo get_option('home'); ?>/">Главная</a></li>
				<?php } ?>
				<?php wp_list_pages('title_li=&depth=-1'); ?>
			</ul>
		</div>
		<div id="menu_search_box" >
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<input type="text" value="Введите запрос..." onfocus="if (this.value == 'Введите запрос...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Введите запрос...';}" name="s" id="s" />
				<input type="submit" id="submit" value="" />
			</form>
		</div>
		
	</div>
	<div id="contents">