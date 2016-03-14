<?php get_header(); ?>
<div id="page-top"></div>
<div id="page-body">
	<div id="content">

	<div class="navigation">
		<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
		<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	</div>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <div class="post" id="post-<?php the_ID(); ?>">
			
			<div class="post-head">
			  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			  <div><small class="date"><?php the_time('F j, Y - g:i a') ?></small> <small class="comment"><span class="comment-icon"> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span></small></div>
            </div>	
			<div style="clear:both"></div>
			
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', ' &nbsp; '); ?> Posted <span class="category-icon"><?php the_category(', ') ?></span> | <?php edit_post_link('Edit', '', ' | '); ?>  </p>
			</div>
			</div>
	
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
	<?php get_sidebar(); ?>
<div style="clear:both"></div>
</div>
<?php get_footer(); ?>
