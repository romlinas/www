<? // LEFT SIDEBAR ?>

<div id="leftsidebar">

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>	



<ul>


<li><h2>Недавно</h2>
				<ul>
<?php
						// I love zinruss studio
						query_posts('showposts=8');
					?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink() ?>"> <span><?php the_time('d.m.y') ?> - </span><?php the_title() ?></a></li>
					<?php endwhile; endif; ?>
				
				</ul>
			</li> 



<div class="ad200">
<script type="text/javascript"><!--
google_ad_client = "pub-";
google_ad_width = 200;
google_ad_height = 200;
google_ad_format = "200x200_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "1a150f";
google_color_bg = "1a150f";
google_color_link = "eeeeee";
google_color_text = "9e9e9e";
google_color_url = "9e9e9e";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

   

			<li><h2>Навигация</h2>
				<ul>
				<?php wp_list_pages('title_li='); ?>
				</ul>
			</li>



			<li><h2>Рубрики</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
			</li>

<div class="ad200">
<script type="text/javascript"><!--
google_ad_client = "pub-";
google_ad_width = 200;
google_ad_height = 200;
google_ad_format = "200x200_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "1a150f";
google_color_bg = "1a150f";
google_color_link = "eeeeee";
google_color_text = "9e9e9e";
google_color_url = "9e9e9e";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div> 
			
		       

<?php endif; ?>
        
		</ul>
</div>
<? // END LEFT SIDEBAR ?>



<? // RIGHT SIDEBAR ?>	
<div id="rightsidebar">

<ul>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>	
			
			<li><h2><?php _e('Архивы'); ?></h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
			
<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>						
			<?php get_links_list(); ?>
				
			<li><h2><?php _e('Прочее'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://wordpress.org/" title="Разработано на WordPress, платформе, которая вдохновляет.">WordPress</a></li>
				<?php wp_meta(); ?>
				</ul>
			</li>



<?php } ?>



<?php endif; ?>
		</ul>
		
	</div>
<? // END RIGHT SIDEBAR ?>