<?php get_header(); ?>

	<?php if (have_posts()) : ?>



	<div id="grey-top-bar"></div>



		<div class="post">

		<h2><?php _e('Search Results'); ?></h2>

		</div>



		<?php while (have_posts()) : the_post(); ?>



		<div class="post">

			<div class="postitle">

			<h2 class="postheader" id="post-<?php the_ID(); ?>"><?php the_time('n.j.Y') ?> | <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

			</div>

			<div class="postmeta"> 

			<b>Filed Under:</b> <?php the_category(', ') ?>  <?php edit_post_link(__('Edit'), '| ', ''); ?>

			</div>

			<?php the_content("...continue reading this entry."); ?>

				<!--

				<?php trackback_rdf(); ?>

				-->

		</div>



		<?php endwhile; ?>



		<div class="postnavigation"><?php posts_nav_link('', __('previous page'), __('next page')); ?></div>



	<?php else : ?>



	<div id="grey-top-bar"></div>



		<div class="post">

		<h2><?php _e('Not Found'); ?></h2>

		<p><?php _e('Sorry, but no posts matched your criteria.'); ?></p>

		</div>



		<div class="post">

		<h2><?php _e('Search'); ?></h2>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		</div>



	<?php endif; ?>



<?php get_footer(); ?>