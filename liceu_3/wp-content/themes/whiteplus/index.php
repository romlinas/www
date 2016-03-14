<?php get_header(); ?>
	
	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">

			<h2>
				<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
			</h2>
			
			<div class="meta">				
				<p><?php the_time('l, d M Y'); ?>, <?php the_time('G:i'); ?> | Рубрика: <?php the_category(', '); ?> <br />
				Метки: <?php the_tags('',', ',''); ?></p>
			</div>
			
			<div class="entry">
				<?php the_content();?>
				<?php wp_link_pages();?>
				<?php edit_post_link('Править','<p>','</p>');?>
			</div>
			
			<div class="comentarii">
				<?php comments_popup_link('Отзывов нет', 'Один отзыв', 'Отзывов: %', 'comments-link', 'Комментарии закрыты'); ?>
			</div>

		</div>

		<?php endwhile; ?>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { posts_nav_link(); } ?>
		</div>
		
		<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
