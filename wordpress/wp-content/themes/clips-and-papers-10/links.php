<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<div class="post" id="post-<?php the_ID(); ?>">
	 <h2><?php the_title(); ?></h2>
	
	<div class="storycontent">
		<?php wp_get_links();?>
	</div>


</div>


</div>



<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
