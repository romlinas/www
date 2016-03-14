		<div class="sidenav" id="sidebar">

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>		
		
			<h2>Рубрики</h2>

			<ul>
			
				<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>

			</ul>

			<h2>Архив</h2>

			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>

			<h2><?php _e('Ссылки'); ?></h2>

			<ul>
				<?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
			</ul>

			<h2>Поиск</h2>

			<ul>

				<li>

				<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">

					<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="17" /> <input type="submit" id="sidebarsubmit" value="Поиск" style="font-size: 10px;" />

				</form>

				</li> 

			</ul>			
			
			<h2><?php _e('Прочее'); ?></h2>

			<ul>

				<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Синдикация сайта через RSS'); ?>"><?php _e('RSS'); ?></a></li>

				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('Последние комментарии ко всем публикациям через RSS'); ?>"><?php _e('Комментарии RSS'); ?></a></li>
				<li><a href="http://validator.w3.org/check/referer" title="Эта страница соответствует XHTML 1.0 Transitional">Правильный XHTML</a></li>


				<?php wp_meta(); ?>

			</ul>		
			
<?php endif; ?>
			
		</div>
