<?php get_header(); ?>

	<div class="main">		
		
		<div class="content">
	
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
			
			<div class="post" id="post-<?php the_ID(); ?>">

				<h1><?php the_title(); ?></h1>
					
					<div class="entry">

					<?php the_content('Читать полностью &raquo;'); ?>

					</div>

			</div>		

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