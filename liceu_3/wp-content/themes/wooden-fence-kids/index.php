<?php get_header(); ?>
<div id="content">
<?php 
	if(is_home()||is_front_page()) echo '<div class="spacer">&nbsp;</div>';
	if (have_posts()) :
		$post = $posts[0]; // Hack. Set $post so that the_date() works.
		if(is_category()){
			echo '<h3 class="archivetitle">Архив категории &raquo;'.single_cat_title('',FALSE).' &laquo;</h3>';
		}elseif(is_day()){
			echo '<h3 class="archivetitle">Архив за &raquo; '.get_the_time('j F Y').'&laquo;</h3>';
		}elseif(is_month()){
			echo '<h3 class="archivetitle">Архив за &raquo; '.get_the_time('F, Y').' &laquo;</h3>';
		}elseif(is_year()){
			echo '<h3 class="archivetitle">Архив за &raquo; '.get_the_time('Y').' &laquo;</h3>';
		} elseif(is_search()){
			echo '<h3 class="archivetitle">Результаты поиска</h3>';
		}elseif(is_author()){
			echo '<h3 class="archivetitle">Архив автора</h3>';
		}elseif(isset($_GET['paged']) && !empty($_GET['paged'])){ // If this is a paged archive
			echo '<h3 class="archivetitle">Архив блога</h3>';
		}elseif(is_tag()){
			echo '<h3 class="archivetitle">Архив меток &raquo; '.single_tag_title('',FALSE).' &laquo; </h3>';
		}
		
		while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post_top"></div>
				<div class="post_mid">
					<div class="iehack"></div>	
					<div class="entry">
						<h2 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="post_author"><?php the_time('d M Y');?>, автор: <?php the_author_posts_link('nickname'); ?> <?php edit_post_link(' Редактировать ',' &bull; &raquo;','&laquo;'); ?></div>
						<?php 
							if (is_search()){
								the_excerpt();
							}else{
								the_content('далее...'); 
							}
						?>
						<div class="clear"></div>
						<div class="info">
							<span class="category">Категория: <?php the_category(', ') ?></span>
							<?php the_tags('&nbsp;<span class="tags">Метки: ', ', ', '</span>'); ?>
							&nbsp;<span class="bubble"><?php comments_popup_link('Оставить комментарий','Комментариев (1)', 'Комментариев (%)', '','Комментарии отключены'); ?></span>
						</div>
					</div>
				</div>
				<div class="post_btm"></div>
			</div>
<?php 
		endwhile; 
?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Предыдущие записи') ?></div>
			<div class="alignright"><?php previous_posts_link('Следующие записи &raquo;') ?></div>
		</div>
<?php 
	else : ?>
		<h3 class="archivetitle">Не найдено</h3>
		<p class="sorry">"Извините, ничего не нашлось. Воспользуйтесь навигацией или поиском, чтобы найти необходимую вам информацию. Попробуйте что-нибудь еще...</p>
<?php
	endif;
	?>
	<a href="<?php bloginfo('rss2_url'); ?>" title="RSS-лента" class="rss"></a>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>		

