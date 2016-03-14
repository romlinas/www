<?php 
/* @package WordPress
 * @subpackage Desk
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>


<!-- leave this for stats please -->
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet" type="text/css" />
<?php
if (get_option('desk_custom_css') != ''){
?><!-- Here is the custom css -->
<style type="text/css" media="screen"> 
<?php echo stripcslashes(get_option('desk_custom_css')); ?>
</style>
<?php } ?>


<?php if (is_numeric(get_option('desk_headerfontsize'))){?> 
<style type="text/css">
#header h1, #header h1 a{
	font-size: <?php echo(get_option('desk_headerfontsize')); ?>px;
}
</style>
<?php } ?>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
<?php if (get_option('desk_header_code') != ''){ echo stripslashes(get_option('desk_header_code')); }?>	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div id="container">
<div id="navdiv">


		
					<?php 
			$margs = array(
			'depth' => '2',
			'menu_class' => 'nav',
			'container_id' => 'navdiv2');
	
		
			wp_nav_menu($margs);
			?>

	<?php if (get_option('desk_hiderss') == '') { ?>
	<div id="rss">
	
		<a href="<?php 
		if (get_option('desk_feed_url') == ''){
		bloginfo('rss_url'); } else {
		echo stripslashes(get_option('desk_feed_url'));
		}
		?>" title="rss feed"><img alt="feed icon" height="28" src="<?php bloginfo('template_url'); ?>/images/feed-icon.png" width="28" /></a>
	</div><!-- /rss --> <?php } ?>
	<div class="clear"></div><!-- /clear -->
<!-- /navwrap -->
</div><!-- /navdiv -->

<div class="push"></div>

<div id="wrapper">
	<div id="header">
		<h1><a href="<?php echo home_url();  ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</div>
	<div id="content">
