<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



	<div id="grey-top-bar"></div>



		<div class="post">

		<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>

		<?php the_content("... continue reading this entry."); ?>



		<?php edit_post_link(__('Edit'), '<p>| ', ' |</p>'); ?>

		</div>



		<div class="postnavigation">

		<?php wp_link_pages(); ?>

		</div>



	<?php endwhile; endif; ?>



<?php get_footer(); ?>



