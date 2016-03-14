<?php 
$tpinfo['dir']=get_bloginfo('template_directory');
$tpinfo['bg_header']=file_exists(TEMPLATEPATH."/images/bg_header_new.jpg")? "bg_header_new.jpg":"bg_header.jpg";
function tp_header(){
	global $tpinfo;
	echo '<style type="text/css">';
	echo "#header {background:url('{$tpinfo['dir']}/images/{$tpinfo['bg_header']}') no-repeat center top;}";
	echo '#content{float:left;}';
	echo '#sidebar {float:right;}';
	echo '</style>';
}

add_action('wp_head', 'tp_header'); 

/*********************************************************************************************/
	
function theme_credit(){
	$theme_name = get_current_theme();
	echo '<a href="http://wp-templates.ru/">wp темы</a>';
}
function tp_footer(){
	ob_start();
	include TEMPLATEPATH."/footer.php";
}
add_action('get_footer','tp_footer');?>
