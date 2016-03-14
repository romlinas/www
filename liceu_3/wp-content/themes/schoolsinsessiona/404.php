<?php get_header(); ?>



	<div id="grey-top-bar"></div>



	<div class="post">

		<h2><?php _e('Not Found'); ?></h2>

		<p><?php _e('Sorry, but the page you requested cannot be found.'); ?></p>

	</div>



	<div class="post">

		<h2><?php _e('Search'); ?></h2>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	</div>



<?php get_footer(); ?>