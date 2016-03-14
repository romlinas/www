
		<div id="right">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
			<h3 id="cat">Categories</h3>
			<ul>
				<?php wp_list_cats('sort_column=id&hide_empty=0&optioncount=0&hierarchical=1'); ?>
			</ul>

			<h3 id="arch">Archives</h3>
			<ul>
				<?php wp_get_archives(); ?>
			</ul>

			<h3 id="blog">Blogroll</h3>
			<ul>
				<?php wp_list_bookmarks(); ?>

	
			</ul>
<?php endif; ?>
			<h3 id="meta">Meta</h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="http://www.seosue.com/www/mp3raid.com">mp3raid.com</a></li>
				<?php wp_meta(); ?>	
			</ul>
		</div><br class="clear"/>