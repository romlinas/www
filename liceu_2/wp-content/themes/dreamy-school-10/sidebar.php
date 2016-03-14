<div id="sidebar">
    <div id="sidebar1"> 
	  <div id="sidebar1-top"></div>
  	    <ul>
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		
		<li><h2 class="subscribe-rss"><a href="?feed=rss2" class="rss-feed-a">Subscribe RSS</a></h2></li>
        		
		<li><h2 class="subscribe-rss">Search</h2><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
		
		<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>    	
	    
		<li class="archives"><h2>Archives</h2> 
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul> 
		</li>	
		
		<li><h2><?php _e('Recent Posts'); ?></h2>
		    <ul><?php get_archives('postbypost', '4', 'custom', '<li>', '</li>'); ?></ul>
		</li>
		
		<?php if (function_exists('get_recent_comments')) { ?>
        <li><h2><?php _e('Recent Comments:'); ?></h2>
              <ul>
              <?php get_recent_comments(); ?>
              </ul>
        </li>
        <?php } ?>   
		
		<?php endif; ?>
		<li><h2>Meta</h2>
			<ul>
	<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
	<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
	<li><a href="http://www.wpthemescreator.com/" title="Wordpress Themes">Wordpress Themes</a>, <a href="http://www.seosue.com/www/appspot.com">appspot.com</a></li>
	<?php wp_meta(); ?>
	</ul>
		</li>
        </ul>
	  <div id="sidebar1-bot"></div>
	</div>
	</div>
</div>