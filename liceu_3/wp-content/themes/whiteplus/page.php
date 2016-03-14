<?php get_header(); ?>
	
	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">

			<h2>
				<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
			</h2>
			
			<div class="entry">
				<?php the_content();?>
				<?php wp_link_pages();?>
				<?php edit_post_link('Править','<p>','</p>');?>
			</div>
			
		</div>

		<?php endwhile; ?>

		<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>
	
	<?php get_footer(); ?>
