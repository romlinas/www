<?php get_header(); ?>
		<div id="left">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<ol>
					<li>Posted by <?php the_author() ?> in <?php the_category(', ') ?> |</li>
					<li><?php the_time('F jS, Y') ?> |</li>
					<li><a href="#comments">Comments</a></li>
					<li><?php edit_post_link(__('Edit'), '  |'); ?></li>
				</ol><br class="clear"/>

					<?php the_content(__('Read the rest of this entry &raquo;')); ?>

			<?php comments_template(); ?>
			</div>
<?php endwhile; else: ?>
			<h2><?php _e('Error 404 - Not Found'); ?></h2>
<?php endif; ?>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
