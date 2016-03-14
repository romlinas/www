<?php get_header(); ?>

	<div class="main">		
		
		<div class="content">

	<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>Архив рубрики &laquo;<?php echo single_cat_title(); ?>&raquo;</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Архив за <?php the_time('j F Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Архив <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Архив за <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Архив автора</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Архив блога</h2>

		<?php } ?>


			<div class="left"><?php next_posts_link('&laquo; Раньше') ?></div>
			<div class="right"><?php previous_posts_link('Позже &raquo;') ?></div>
			<div class="clearer"><span></span></div>

		<?php while (have_posts()) : the_post(); ?>
			<div class="post">

				<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="descr"><?php the_time('l, j F Y') ?> | <?php the_category(', ') ?> | <?php edit_post_link('Править', '', ' | '); ?>  <?php comments_popup_link('Комментировать &#187;', '1 комментарий &#187;', 'Комментариев (%) &#187;'); ?></div>

			</div>

		<?php endwhile; ?>

			<div class="left"><?php next_posts_link('&laquo; Раньше') ?></div>
			<div class="right"><?php previous_posts_link('Позже &raquo;') ?></div>
			<div class="clearer"><span></span></div>

	<?php else : ?>

			<h2 class="center">Не найдено</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

		</div>

	<?php get_sidebar(); ?>
		
		<div class="clearer"><span></span></div>

	</div>

<?php get_footer(); ?>
