<?php get_header(); ?>
		<div id="left">

		<?php while (have_posts()) : the_post(); ?>		

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<ol>
					<li>Posted by <?php the_author() ?> in <?php the_category(', ') ?> |</li>
					<li><?php the_time('F jS, Y') ?> </li>
					<li><?php edit_post_link(__('Edit'), '  |'); ?></li>
				</ol><br class="clear"/>

				<?php if (is_search()) { ?>
					<?php the_excerpt() ?>
				<?php } else { ?>
					<?php the_content(__('Read the rest of this entry &raquo;')); ?>

			</div>
				<?php } ?>
		<?php endwhile; ?>

			<span id="prev"><?php next_posts_link('&laquo; Previous Page'); ?></span>
			<span id="next"><?php previous_posts_link('Next Page &raquo;'); ?></span>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
