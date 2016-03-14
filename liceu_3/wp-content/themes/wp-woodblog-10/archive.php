<?php get_header(); ?>


<div id="left">

  <?php if (have_posts()) : ?>
  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
  <?php 
	if (is_category()) { ?>
  <h2 class='archives'>Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
  <?php }
	 
	elseif (is_day()) { ?>
  <h2 class='archives'>Archive for
    <?php the_time('F jS, Y'); ?>
  </h2>
  <?php }
	
	elseif (is_month()) { ?>
  <h2 class='archives'>Archive for
    <?php the_time('F, Y'); ?>
  </h2>
  <?php } 
	
	elseif (is_year()) { ?>
  <h2 class='archives'>Archive for
    <?php the_time('Y'); ?>
  </h2>
  <?php } 
	
	elseif (is_author()) { ?>
  <h2 class='archives'>Author Archive</h2>
  <?php }
	 
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2>Blog Archives</h2>
    <?php } ?>

		<?php while (have_posts()) : the_post(); ?>		

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<ol>
					<li>Posted by <?php the_author() ?> in <?php the_category(', ') ?> |</li>
					<li><?php the_time('F jS, Y') ?> |</li>
					<li><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments'), 'commentslink', __('Comments off')); ?></li>
					<li><?php edit_post_link(__('Edit'), '  |'); ?></li>
				</ol><br class="clear"/>

				<?php if (is_search()) { ?>
					<?php the_excerpt() ?>
				<?php } else { ?>
					<?php the_content(__('Read the rest of this entry &raquo;')); ?>

			</div>
				<?php } ?>

  <?php endwhile; else: ?>
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?>
			<span id="prev"><?php next_posts_link('&laquo; Previous Page'); ?></span>
			<span id="next"><?php previous_posts_link('Next Page &raquo;'); ?></span>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
