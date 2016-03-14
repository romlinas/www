	<div class="sidebar">
		<ul>			
			<li class="rss">
				<a href="<?php bloginfo('rss_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss_feed.png" alt="RSS-лента" title="Подписка на RSS" /></a>
			</li>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar 1") ) : ?>

			<?php wp_list_pages('title_li=<h2>Страницы</h2>' ); ?>
			
			<?php wp_list_bookmarks(); ?>			
			
			<li><h2>Архивы</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>	
			
			<?php endif; ?>
			
		</ul>		

	</div>
	
	<div class="sidebar">
		<ul>
			<li id="search_id">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
					<div id="search">
						<input type="text" value="" name="s" id="s" class="text" />
						<input type="image" id="searchsubmit" src="<?php bloginfo('template_url');?>/images/search_s.png" value="Search" alt="Search" class="button" />
					</div>
				</form>
			</li>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar 2") ) : ?>

			<li><h2>Календарь</h2>
				<div id="calendar">
					<?php get_calendar(); ?>				
				</div>
			</li>
			
			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
			
			<li id="meta-links"><h2>Meta</h2>
				<ul>
					<li><a href="<?php bloginfo('rss2_url')?>">Публикации RSS</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url')?>">Комментарии RSS</a></li>
					<?php wp_register() ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta()?>
				</ul>
			</li>
			
			<?php endif; ?>
			
		</ul>		

	</div>