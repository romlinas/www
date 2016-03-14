<?php get_header(); ?>



	<?php if (have_posts()) : ?>



	<div id="grey-top-bar"></div>



		<div class="post">



		<?php $post = $posts[0]; // Thanks Kubrick for this code ?>

		<?php if (is_category()) { ?>				

		<h2><?php _e('Archive for '); echo single_cat_title(); ?></h2>

 	  	<?php } elseif (is_day()) { ?>

		<h2><?php _e('Archive for '); the_time('F j, Y'); ?></h2>

	 	<?php } elseif (is_month()) { ?>

		<h2><?php _e('Archive for '); the_time('F, Y'); ?></h2>

		<?php } elseif (is_year()) { ?>

		<h2><?php _e('Archive for '); the_time('Y'); ?></h2>

		<?php } elseif (is_author()) { ?>

		<h2><?php _e('Author Archive'); ?></h2>

		<?php } ?>



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

		<p><?php _e('Sorry, but the page you requested cannot be found.'); ?></p>

		</div>

		<div class="post">

		<h2><?php _e('Search'); ?></h2>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		</div>





	<?php endif; ?>





<?php get_footer(); ?>