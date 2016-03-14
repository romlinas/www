<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	 <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="meta"><?php _e("Posted under"); ?> <?php the_category(',') ?> <?php _e("by")?> <?php the_author() ?> <?php _e("on");?> <?php the_time('l j F Y'); ?> <?php _e("at");?> <?php the_time() ?> <?php edit_post_link(__('Edit This')); ?></div>
	
	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	
	<div class="feedback">
            <?php wp_link_pages(); ?>
            <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
	</div>

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>

<?php get_footer(); ?>
