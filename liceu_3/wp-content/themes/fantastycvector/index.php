<?php get_header(); ?>

	<div class="main">		
		
		<div class="content">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
<div class="floater">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					
				<div class="descr"><?php the_time('j F Y') ?>, <?php the_author() ?></div>
				</div>

				<div class="entry">

					<?php the_content('Читать полностью &raquo;'); ?>

				</div>

				<p class="info">В рубриках: <?php the_category(', ') ?> | <?php edit_post_link('Править','',' |'); ?> <?php comments_popup_link('Комментировать &raquo;', '1 комментарий &raquo;', 'Комментариев (%) &raquo;'); ?></p>

			</div>

			<?php comments_template(); ?>

		<?php endwhile; ?>

			<p align="center"><?php next_posts_link('&laquo; Раньше') ?> <?php previous_posts_link('Позже &raquo;') ?></p>

	<?php else : ?>

			<h2 align="center">Не найдено</h2>

			<p align="center">К сожалению, вы запросили то, чего здесь нет.</p>

	<?php endif; ?>
			</div>

	<?php get_sidebar(); ?>
			
			<div class="clearer"><span></span></div>

	</div>

<?php get_footer(); ?>
