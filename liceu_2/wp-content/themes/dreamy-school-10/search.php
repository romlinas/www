<?php get_header(); ?>
<div id="page-top"></div>
<div id="page-body">
	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				
				<div class="post-head">
			        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			        <div><small class="date"><?php the_time('F j, Y - g:i a') ?></small> <small class="comment"><span class="comment-icon"> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span></small></div>
                </div>
                <div style="clear:both"></div>
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', ' &nbsp; '); ?> Posted <span class="category-icon"><?php the_category(', ') ?></span> | <?php edit_post_link('Edit', '', ' '); ?> </p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<div style="clear:both"></div>
</div>
<?php get_footer(); ?>