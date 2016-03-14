<!-- begin sidebar -->

<div id="menu">

	<img border="0" src="<?php bloginfo('template_directory'); ?>/images/home.gif">

<ul>


<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>


<!-- PAGES -->

	<h2><img border="0" src="<?php bloginfo('template_directory'); ?>/images/pages.gif"></h2>

	<?php wp_list_pages('title_li='); ?>


<!-- BLOGROLL -->
	

	
	<!-- <h2><img border="0" src="<?php bloginfo('template_directory'); ?>/images/blogroll.gif"></h2>-->





<!-- CATEGORIES -->
	
	<h2><img border="0" src="<?php bloginfo('template_directory'); ?>/images/categories.gif"></h2>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
 </li>


 <!-- SEARCH BAR -->

	
<h2><img border="0" src="<?php bloginfo('template_directory'); ?>/images/search.gif"></h2>
		
	<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div>
		<input type="text" name="s" id="s" size="15" /><br />
		<input type="submit" id ="submit" value="<?php _e('Search'); ?>" />
	</div>
	</form>


<!-- ARCHIVES -->
	
    <h2><img border="0" src="<?php bloginfo('template_directory'); ?>/images/archives.gif"></h2>
	<h2><?php _e(''); ?></h2>
 	<ul>
	<?php wp_get_archives('type=monthly'); ?>
 	</ul>


<?php endif; ?>

<!-- META -->

	<h2><img border="0" src="<?php bloginfo('template_directory'); ?>/images/meta.gif"></h2>
	
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); 		?>"><?php _e('RSS'); ?></a></li>
		<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all 		posts in RSS'); ?>"><?php _e('Comments RSS'); ?></a></li>
		<li><a href="http://www.wpthemescreator.com/" title="Wordpress Themes">Wordpress Themes</a>, <a href="http://www.seosue.com/www/microsoft.com">microsoft.com</a></li>
		<?php wp_meta(); ?>
	</ul>



	</li>


</ul>

</div>

<!-- end sidebar -->