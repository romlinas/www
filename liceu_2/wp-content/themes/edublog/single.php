<?php get_header(); ?>


<div id="content"><a name="content"></a>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="date"><span><?php the_author_posts_link() ?></span>  under <?php the_category(', '); ?></div>	
</div>

<div class="cover">
<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				
</div>

</div>

<div class="spostinfo">
			
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>


</div>
<?php comments_template(); ?>
	<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry,  YOU are looking for something that ISN'T HERE. </p>

<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>