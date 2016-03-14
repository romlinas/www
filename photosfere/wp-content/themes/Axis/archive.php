<?php get_header(); ?>
<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post clearfix" id="post-<?php the_ID(); ?>">
<div class="comm"><?php comments_popup_link('0', '1', '%'); ?></div>
<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="postmeta">
	<span class="author">Написал <?php the_author_link(); ?>  </span> - <span class="clock">  <?php the_time('M - j - Y'); ?></span>
</div>

<div class="entry">
<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=250&amp;w=620&amp;zc=1" alt=""/></a>
<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>
<div class="singleinfo">
<span class="categori">Категории: <?php the_category(', '); ?> </span>
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