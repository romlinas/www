
<?php get_header(); ?>
<!-- container start -->
	<div id="container" class="clearfix">
		<?php get_sidebars(); ?>
<!-- content start -->
		<div id="content" class="clearfix">
		<?php if(have_posts()) : ?>
                <div class="post_path">Вы здесь: <a href="<?php bloginfo('url'); ?>">Главная</a> &gt;<?php
		// If this is a category archive
		if (is_category()) {
			printf( __('Архив категории &#8216;<span>%1$s</span>&#8217; ', 'ezwpthemes'), single_cat_title('', false) );
		// If this is a tag archive
		} elseif (is_tag()) {
			printf( __('Записи с меткой &#8216;<span>%1$s</span>&#8217;', 'ezwpthemes'), single_tag_title('', false) );
		// If this is a daily archive
		} elseif (is_day()) {
			printf( __('Архив за месяц <span>%1$s</span>', 'ezwpthemes'), get_the_time(__('F jS, Y', 'ezwpthemes')) );
		// If this is a monthly archive
		} elseif (is_month()) {
			printf( __('Архив за год <span>%1$s</span>', 'ezwpthemes'), get_the_time(__('F, Y', 'ezwpthemes')) );
		// If this is a yearly archive
		} elseif (is_year()) {
			printf( __('Архив автора <span>%1$s</span>', 'ezwpthemes'), get_the_time(__('Y', 'ezwpthemes')) );
		// If this is an author archive
		} elseif (is_author()) {
			_e('Архив автора', 'ezwpthemes');
		// If this is a paged archive
		} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
			_e('Архив блога', 'ezwpthemes');
		}
		?></div>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post">
<div class="post_bottom">
				<div class="post_header_bg"><h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></div>
                <div class="postmetadata">Опубликовано в <?php the_category(', ') ?>  <?php the_time('F jS, Y') ?></div>
                <div class="entry"><?php the_excerpt(); ?></div>
				<div class="endline"></div>
				<?php the_tags('<p class="tags"><strong>Теги:</strong> ', ', ', '</p>'); ?>
				<div class="bookmark"><?php include(TEMPLATEPATH . '/bookmark.php'); ?></div>
<div class="read_comments"><a href="<?php comments_link(); ?>">Читать комментарии <span>(<?php comments_number('0','1','%'); ?>)</span></a></div>
                <?php if ( $user_ID ) : ?>
					<div class="edit_post"><?php edit_post_link(__('Редактировать запись')); ?> (Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>)</div>
				<?php endif; ?>
			</div>
			</div>
			<?php endwhile; ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="wp-pagenavi">
					<div class="alignleft"><?php next_posts_link('&laquo; Старые записи') ?></div>
					<div class="alignright"><?php previous_posts_link('Новые записи &raquo;') ?></div>
					</div>
					<?php } ?>
		<?php else : ?>
		<div class="notfound"><p>Ничего не найдено!</p><p>Попробуйте позже!</p></div>
		<?php endif; ?>
		</div>
<!-- content end -->
	</div>
<!-- container end -->
<?php get_footer(); ?>