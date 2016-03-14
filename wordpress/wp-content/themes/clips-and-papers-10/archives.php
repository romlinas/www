<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<div class="post" id="post-<?php the_ID(); ?>">
	 <h2><?php the_title(); ?></h2>
	
	<div class="storycontent">
		<ul><?php wp_get_archives();?></ul>
	</div>


</div>


</div>



<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
