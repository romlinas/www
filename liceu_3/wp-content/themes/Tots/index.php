

<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">

				<h1><?php $comments_img_link= '<img src="' . get_stylesheet_directory_uri() . '/img/documents_16.png"  title="Title" alt="*" />';?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
					
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

			<p>Ой! Такой статьи то и нет</p>


	<?php endif; ?>
	<br />

			</div>

	<?php get_sidebar(); ?>
			
			<div class="clearer">&nbsp;</div>

	</div>

<?php get_footer(); ?>
