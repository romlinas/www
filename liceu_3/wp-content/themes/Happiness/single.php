<?php get_header(); ?>
<!-- container start -->
	<div id="container" class="clearfix">
		<?php get_sidebars(); ?>
<!-- content start -->
		<div id="content" class="clearfix">
		<?php if(have_posts()) : ?>
			<div class="post_path">Вы просматриваете: <a href="<?php bloginfo('url'); ?>">Главная</a> &gt; <?php the_category(', '); ?> &gt; <?php the_title(); ?></div>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <div class="postmetadata">Опубиковано в <?php the_category(', ') ?> | <?php the_time('F j, Y') ?></div>
                <div class="entry"><?php the_content(); ?></div>
				<div class="endline"></div>
				<?php wp_link_pages(array('before' => '<p class="tags"><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags('<p class="tags">Метки: ', ', ', '</p>'); ?>
                <?php if ( $user_ID ) : ?>
					<div class="edit_post"><?php edit_post_link('Правка'); ?> (Вы вошли, как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>)</div>
				<?php endif; ?>
				<div class="bookmark"><?php include(TEMPLATEPATH . '/bookmark.php'); ?></div>
				<?php 
					if (function_exists('wp_list_comments')) {
						comments_template('/comments.php', true);
					}
					else {
						comments_template('/comments-old.php');
					}
				?>
			</div>
			<?php endwhile; ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="wp-pagenavi">
					<div class="alignleft"><?php next_posts_link('&laquo; Предыдущие') ?></div>
					<div class="alignright"><?php previous_posts_link('Следующие &raquo;') ?></div>
					</div>
					<?php } ?>
		<?php else : ?>
		<div class="notfound"><p>Ничего не найдено!</p><p>Вернитесь назад.</p></div>
		<?php endif; ?>
		</div>
<!-- content end -->
	</div>
<!-- container end -->
<?php get_footer(); ?>