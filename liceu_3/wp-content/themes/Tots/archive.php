<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Архив &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Архив &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архив <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архив <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архив <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Архив автора</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архив блога</h2>
 	  <?php } ?>
			<div class="post" id="post-<?php the_ID(); ?>">

				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
					
				<div class="alignlefttt">Опубликовано в <?php the_category(', ') ?>&nbsp;  Автор: <?php the_author() ?>  <?php edit_post_link('Редактировать'); ?></div>
			<div class="alignrighttt"><?php the_time('F jS, Y') ?></div>

				<div class="entry">

					<?php the_content('Читать полностью &raquo;'); ?>

				</div>

				<p class="info"><?php comments_popup_link('Нет отзывов &raquo;', '1 Отзыв &raquo;', '% Отзыва &raquo;'); ?></p>

			</div>

			<?php comments_template(); ?>

		<?php endwhile; ?>

			<p align="center"><?php next_posts_link('&laquo; Предыдущие записи') ?> <?php previous_posts_link('Следующие записи &raquo;') ?></p>

	<?php else : ?>

			<h1>Ничего не найдено</h1>

			<p>Ой, Статья не найдена</p>

	<?php endif; ?>
			</div>

	<?php get_sidebar(); ?>
			
			<div class="clearer">&nbsp;</div>

	</div>

<?php get_footer(); ?>
