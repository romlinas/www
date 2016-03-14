<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="Description" content="http://www.wpthemescreator.com/">
<!-- Please only download our themes from http://www.wpthemescreator.com/ or from our theme distributor http://www.wpthemesfree.com/ Otherwise your comps will be open to malicious scripts and infections. - Don't pay to anyone for our themes, our themes are free! - Contact if any assistance needed... -->


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]> <link rel="stylesheet" href="wp-content/themes/cutecritters/ie_hacks.css" type="text/css" media="screen" /> <![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>

<div id="body_wrap">
<div id="header">
	<div id="headerimg">  
	   	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	    <div id="menu-bar"> 
		   <ul>
		 	  <li class="pagenav-home"><ul><li <?php /* If this is the frontpage */ if ( is_home()) { ?> class="current_page_item" <?php } ?>><a href=".">Home</a></li></ul></li>
  			  <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
			</ul>
	    </div> 
   </div>	
</div>

<div id="page">
