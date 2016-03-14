<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<div class="post" id="post-<?php the_ID(); ?>">
	 <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
		<?php wp_link_pages(); ?>
	</div>
	
	<div class="storydate"> <?php the_time(get_option('date_format')); ?> @ <?php the_time() ?>  </div>
	<div class="feedback">
<?php the_category(',') ?> | <?php if ( function_exists('the_tags')) the_tags('', ', ', ' | ');?> <?php edit_post_link(__('Edit This')); ?><br/>
            <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
	</div>

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>

<?php get_footer(); ?>
