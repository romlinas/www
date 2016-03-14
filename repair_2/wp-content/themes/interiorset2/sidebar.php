		<div id="sidebar">
			<div class="clear">
			
			</div>
			<div id="rss" ><a href="<?php bloginfo('rss2_url'); ?>">Подписка</a></div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
			<div class="sidebar_container">
				<h2>Страницы</h2>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
				<div class="sidebar_bottom"></div>
			</div>
			<div class="sidebar_container">
				<h2>Рубрики</h2>
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
				<div class="sidebar_bottom"></div>
			</div>
			<div class="sidebar_container">
				<h2>Архивы</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				<div class="sidebar_bottom"></div>
			</div>
			<div class="sidebar_container">
				<h2>Ссылки</h2>
				<ul>
					<?php wp_list_bookmarks('categorize=0&title_li='); ?>
				</ul>
				<div class="sidebar_bottom"></div>
			</div>
			<?php endif; ?>
		
		</div>