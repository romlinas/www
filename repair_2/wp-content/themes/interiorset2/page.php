<?php get_header(); ?>

		<div id="content">
		<?php include (TEMPLATEPATH . '/topads.php'); ?>
		
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-top">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="post-entry">
					<?php the_content(''); ?>
					<?php edit_post_link('Править', '<p>', '</p>'); ?>
				</div>
				<div class="post-bottom"></div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<div class="post">
				<div class="post-top">
					<h2>Не найдено</h2>
				</div>
				<div class="post-entry">
					<p>К сожалению, по вашему запросу ничего не найдено.</p>
				</div>
				<div class="post-bottom"></div>
			</div>
			<?php endif; ?>
		
		</div>
		<?php get_sidebar(); ?>
<?php include (TEMPLATEPATH . '/rightads.php'); ?>

<?php get_footer(); ?>