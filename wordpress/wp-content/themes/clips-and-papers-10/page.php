<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<div class="post" id="post-<?php the_ID(); ?>">
	 <h2><?php the_title(); ?></h2>
	
	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	<div class="meta"><?php edit_post_link(__('Edit This')); ?> <a href="<?php the_permalink() ?>" rel="bookmark">Permalink</a>
<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
</div>


</div>
<?php if ( comments_open() ) : ?>
	<?php comments_template(); ?>
<?php endif; ?>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
