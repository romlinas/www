<?php get_header(); ?>
	
	<div id="content">
		<div class="navigation_single">
			<span class="alignleft"><?php next_post_link('&laquo; %link') ?></span>
			<span class="alignright"><?php previous_post_link('%link &raquo;') ?></span> 		
		</div>		

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
		</div>

		<?php endwhile; ?>
		
		<?php if ( function_exists(similar_posts) ) { ?>
		
		<div class="related">			
			<h2>Статьи по теме</h2>		
			<?php similar_posts(); ?>
		</div>
		
		<?php } ?>
		
		<div id="comments">
			<?php comments_template(); ?>
		</div>
		
		<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>
	
	<?php get_footer(); ?>
