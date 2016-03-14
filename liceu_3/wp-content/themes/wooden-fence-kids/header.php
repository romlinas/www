<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset');global $tpinfo;?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS-лента <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=yearly&format=link'); ?>
	<title><?php wp_title('&raquo; ',true,'right'); ?><?php bloginfo('name'); ?><?php echo ($paged>1)? " - Page $paged":"";?></title>
	<?php if(is_singular()){ wp_enqueue_script('comment-reply');}?>
	<?php wp_enqueue_script('jquery');?>
	<?php wp_head(); ?>
	<script type='text/javascript' src='<?php bloginfo("template_directory");?>/templatelite.js'></script>
	<script type="text/javascript"><!-- 
		document.write('<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/opacity.css" type="text/css" media="screen" />');
	--></script>
	<!--[if IE]>
		<style type="text/css">
		.post_top{
			background:none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/bg_post_top.png', sizingMethod='scale');
		}
		.post_mid{
			background:none;
			width:644px;
			border:none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/bg_post_repeat.png', sizingMethod='scale');
		}
		.post_btm{
			background:none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/bg_post_btm.png', sizingMethod='scale');
		}
		</style>
	<![endif]-->
</head>
<body>
<div id="bg_top"><div id="bg_btm">
	<div id="base">
		<div id="header">
			<?php if($tpinfo['bg_header']=="bg_header.jpg"){?>
				<?php $tmp=(is_single() || is_page())? "div":"h1";?>
				<<?php echo $tmp;?>  id="blogtitle"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></<?php echo $tmp;?>>
				<div id="subtitle"><?php bloginfo('description');?></div>
			<?php }?>
			<a href="<?php bloginfo('url'); ?>/" title="Главная"><img src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" alt="Главная" class="home"/></a>
		</div>
		<div id="container">