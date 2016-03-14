<?php get_header(); ?>

		<div id="content">
		<?php include (TEMPLATEPATH . '/topads.php'); ?>
		<div id="after_ad"></div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="in_post" id="post-<?php the_ID(); ?>">
				<div class="post_title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="meta_inf">
					<div class="meta_date">
						<?php the_time('d-m-Y') ?>
					</div>
					
				</div>
			</div>
				<div class="in_entry">
					<?php the_content(''); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags('<p>Метки: ', ', ', '</p>'); ?>
					<?php edit_post_link('Править','',''); ?>
					<?php comments_template(); ?>
				</div>
				<div class="post-bottom">
			<div class="post_ctg">
				Рубрика: <?php the_category(', ') ?>
			</div>
			</div>
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
				<div class="post-bottom">
			</div></div>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
		<?php include (TEMPLATEPATH . '/rightads.php'); ?>

<?php get_footer(); ?>