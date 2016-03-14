<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	 <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="meta"><?php _e("Опубликовано"); ?> <?php the_author() ?> | <?php the_category(',') ?> | <?php the_time('l, d M Y'); ?> <?php the_time() ?> <?php edit_post_link(__('Править')); ?></div>
	
	<div class="storycontent">
		<?php the_content(__('(далее...)')); ?>
	</div>
	
	<div class="feedback">
            <?php wp_link_pages(); ?>
            <?php comments_popup_link(__('Отзывов (0)'), __('Отзывов (1)'), __('Отзывов (%)')); ?>
	</div>


</div>



<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('К сожалению, по вашему запросу ничего не найдено.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Назад'), __('Вперед &raquo;')); ?>


<?php get_footer(); ?>
