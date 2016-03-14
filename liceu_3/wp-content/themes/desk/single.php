<?php 
/* @package WordPress
 * @subpackage Desk
 */
?>
<?php
get_header();
?>
<div id="post">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="posthead">
			<h2><?php the_title(); ?>
			</h2><p class="postauthor">Автор: <?php the_author_posts_link(); ?></p>
			<div class="dater">
				<?php the_time('l, d M Y'); ?></div>
		</div>
		<div class="entry">
			<?php the_post_thumbnail('medium', array('class' => 'alignright')); ?>
			<?php the_content(''); ?></div>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Страницы:', 'desk' ), 'after' => '</div>' ) ); ?>

			<div class="clear"></div>
	</div>
	<p class="postmetadata"><?php if (get_option('desk_hidetags') == '') { the_tags('<span class="tags">Метки: ', ', ', '</span><br />'); } ?>
	<span class="cats">Рубрика: <?php the_category(', ') ?></span> | <?php edit_post_link('Править', '', ' | '); ?>
	<span class="comments"><?php comments_popup_link('Отзывов нет &#187;', '1 отзыв &#187;', 'Отзывов (%) &#187;'); ?>
	</span></p>
	
			<?php comments_template(); ?>
	<?php endwhile; ?><?php else : ?>
	<h4 class="center">Не найдено</h4>
	<p class="center">К сожалению, по вашему запросу ничего не найдено.</p>
	<?php endif; ?>

	</div>
<?php get_sidebar(); ?><?php get_footer(); ?>