<?php get_header(); ?>
	
	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2>
				<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
			</h2>
			
			<div class="meta">				
				<p><?php the_time('d M Y'); ?> - <?php the_time('G:i'); ?> | Метки: <?php the_tags('',', ',''); ?></p>	
			</div>
			
			<div class="entry">
				<?php the_excerpt();?>
				<?php wp_link_pages();?>
				<?php edit_post_link('Править','<p>','</p>');?>
			</div>
			
			<div class="comm">
				<?php comments_popup_link('Ваш отзыв', 'Один отзыв', 'Отзывов: %', 'comments-link', 'Комментарии закрыты'); ?>
			</div>
		</div>

		<?php endwhile; ?>

		<div class="navigatie">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { posts_nav_link(); } ?>  		
		</div>

		
		<?php endif; ?>

	</div> <!--sfarsit de content-->

	<?php get_sidebar(); ?>
	
	<?php get_footer(); ?>
