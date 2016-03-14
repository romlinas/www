<?php get_header(); ?>
<p>	<?php $mySearch =& new WP_Query("s=$s & showposts=-1");	$num = $mySearch->post_count;	echo $num.' search results for '; the_search_query();?> in <?php  get_num_queries(); ?> <?php timer_stop(1); ?> секунды.</p>
<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post clearfix" id="post-<?php the_ID(); ?>">

<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="postmeta">
	<span class="author">Написал <?php the_author_link(); ?>  </span> - <span class="clock">  <?php the_time('M - j - Y'); ?></span>
</div>
<div class="entry">
<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>

</div>
<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

	<h1 class="title">Страница не найдена</h1>
	<p>По данному адресу ничего не найдено. Воспользуйтесь поиском.</p>

<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>