<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archiv <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!--das nicht loeschen, plugins brauchen dies wie zb wpseo das ich empfehle-->
<?php wp_head(); ?>
</head>

<body marginheight="0" marginwidth="0" leftmargin="0" topmargin="0">
<!--blogname als link-->
<div align="center">
	<div id="head1"></div>
	<div id="head2">
		<div id="head_container">
			<div class="title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
			<div class="slogan"><?php bloginfo('description'); ?></div>
		</div>
	</div>
