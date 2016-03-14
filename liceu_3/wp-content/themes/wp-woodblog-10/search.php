<?php get_header(); ?>
		<div id="left">

  <?php if (have_posts()) : ?>	

			<div class="post" id="post-<?php the_ID(); ?>">
			<h2>Search results</h2>
			<?php while (have_posts()) : the_post(); ?>
    <p><strong> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong>, posted on <?php the_time('F dS, Y ');?> </p>

  <?php endwhile; else: ?>
<div class="post">
  <h2><?php _e('Sorry, no posts matched your criteria.'); ?></h2>


  <?php endif; ?>
		</div>

			<span id="prev"><?php next_posts_link('&laquo; Previous Page'); ?></span>
			<span id="next"><?php previous_posts_link('Next Page &raquo;'); ?></span>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
