<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
  
<?php } else { // No sidebar ?>
  
<?php } ?>

</style>

<?php wp_head(); ?>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tablo" >
  <tr>
    <td colspan="3" class="banner">
      
      <div id="masthead">
    
<div id="banner_text">
<h1><?php bloginfo('name'); ?></h1>
<br />
<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
</div>
<br /><br />

    <p><?php bloginfo('description'); ?></p>
    </div></td>
</tr>
  <tr>
  <td>&nbsp;</td>
    <td width="960">
    

  
  <div id="content" class="clearfix">
