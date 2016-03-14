<!--include header.php-->
<?php get_header(); ?>
<!--page.php-->
	<!--loop startet-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!--artikel titel-->
		<?php the_title(); ?>

			<!--artikel beginnt -->
				<?php the_content(''); ?>

	<!--anzahl der seiten, wenn der artikel mehrere seiten hat-->
				<?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	      				
			<!--loop endet hier und auch ein artikel ist zu ende-->
	  <?php endwhile; endif; ?>

	<!--artikel editieren-->
         <?php edit_post_link('Beitrag bearbeiten.', '<p>', '</p>'); ?>
	

<!--include sidebar-->
<?php get_sidebar(); ?>
<!--include footer-->
<?php get_footer(); ?>
