<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">

				<h1><?php $comments_img_link= '<img src="' . get_stylesheet_directory_uri() . '/img/documents_16.png"  title="Title" alt="*" />';?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
					
				<div class="alignlefttt">Автор: <?php the_author() ?>  <?php edit_post_link('Редактировать'); ?></div>
			<div class="alignrighttt"><?php the_time('F jS, Y') ?></div>

				<div class="entry">

					<?php the_content('Читать полностью &raquo;'); ?>

				</div>

			</div>

		<?php endwhile; ?>

	<?php else : ?>

			<h2 align="center">Не найдено</h2>

			<p align="center">Oops! Article Not Found</p>

	<?php endif; ?>
			</div>

	<?php get_sidebar(); ?>
			
			<div class="clearer">&nbsp;</div>

	</div>

<?php get_footer(); ?>