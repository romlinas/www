<?php get_header(); ?>
<div id="page-body">
	<div id="content">

	<?php if (have_posts()) : ?>  

		<?php while (have_posts()) : the_post(); ?>
	 	<br /><br />		<div class="post-head">
			    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			    <div><small class="date"><?php the_time('F j, Y - g:i a') ?></small> <small class="comment"><span class="comment-icon"> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span></small></div>
            </div>
			<div style="clear:both"></div>	
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', ' &nbsp; '); ?> Posted in <span class="category-icon"><?php the_category(', ') ?></span> </p>
			</div>
 		<?php endwhile; ?>
    
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>
	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<div style="clear:both"></div>
</div>
<?php get_footer(); ?> 
