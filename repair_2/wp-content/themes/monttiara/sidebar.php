
<!-- begin sidebar -->
<div id='menu-left'>
	

		<ul>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</ul>





<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
        
<div class="ad200">
<script type="text/javascript"><!--
google_ad_client = "pub-";
google_ad_width = 200;
google_ad_height = 200;
google_ad_format = "200x200_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "313131";
google_color_bg = "313131";
google_color_link = "fdfef6";
google_color_text = "c3c3c3";
google_color_url = "c3c3c3";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<ul>
	<?php wp_list_pages('title_li=<h2>Навигация</h2>'); ?>
</ul>
<h2><?php _e('Рубрики'); ?></h2>
<ul>
 <li id="categories">
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
 </li>
 <li id="archives"><h2><?php _e('Архивы'); ?></h2>

 	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
 	</ul>
 </li>
	<?php get_links_list(); ?>

</ul>

<div class="ad200">
<script type="text/javascript"><!--
google_ad_client = "pub-";
google_ad_width = 200;
google_ad_height = 200;
google_ad_format = "200x200_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "313131";
google_color_bg = "313131";
google_color_link = "fdfef6";
google_color_text = "c3c3c3";
google_color_url = "c3c3c3";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>


<ul>
 <li id="meta"><h2><?php _e('Прочее'); ?></h2>

 	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Синдикация через RSS'); ?>"><?php _e('RSS'); ?></a></li>
		<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('RSS-лента комментариев'); ?>"><?php _e('Комментарии RSS'); ?></a></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('Эта страница соответствует XHTML 1.0 Transitional'); ?>"><?php _e('Валидный XHTML'); ?></a></li>
		<?php wp_meta(); ?>
	</ul>
 </li>
</ul>

<?php endif; ?>
</div>
<!-- end sidebar -->
