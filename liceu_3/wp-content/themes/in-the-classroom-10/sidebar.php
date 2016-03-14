		<!-- Sidebar -->
		<div class="sidebar">
		
			<h3>Pages</h3>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
			
			<h3>Archives</h3>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
			
			<?php endif; ?>

			<h3>Meta</h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="http://www.seosue.com/www/zynga.com">zynga.com</a></li>
				<?php wp_meta(); ?>
			</ul>
		
		</div>
		<!-- Sidebar -->