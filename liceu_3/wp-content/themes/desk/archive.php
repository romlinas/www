<?php 
/* @package WordPress
 * @subpackage Desk
 */
?>
<?php
get_header();
?>
<div id="post">
	<?php if(have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Рубрика «<?php single_cat_title(); ?>»</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Метка «<?php single_tag_title(); ?>»</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('d M Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('F Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Архив автора</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архив сайта</h2>
 	  <?php } ?>	
	
	<?php while(have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="posthead">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="dater">
				<a href="<?php the_permalink(); ?>"><?php the_time('l, d M Y'); ?></a></div>
		</div>
		<div class="entry">
			<?php the_post_thumbnail(array(120,120), array('class' => 'alignright')); ?>
			<?php the_content('Читать полностью &raquo;'); ?></div>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Страницы:', 'desk' ), 'after' => '</div>' ) ); ?>

			<div class="clear"></div>
	</div>
	<p class="postmetadata"><?php if (get_option('desk_hidetags') == '') { the_tags('<span class="tags">Метки: ', ', ', '</span><br />'); } ?>
	<span class="cats">Рубрика: <?php the_category(', ') ?></span> | <?php edit_post_link('Править', '', ' | '); ?>
	<span class="comments"><?php comments_popup_link('Ваш отзыв &#187;', '1 отзыв &#187;', 'Отзывов (%) &#187;'); ?>
	</span></p>
	<?php endwhile; ?>
	<div class="pnavigation">
		<p class="alignleft"><?php next_posts_link('&laquo; Предыдущая страница') ?>
		</p>
		<p class="alignright"><?php previous_posts_link('Следующая страница &raquo;') ?>
		</p>
	</div>
	<?php else : ?>
	<h4 class="center">Не найдено</h4>
	<p class="center">К сожалению, по вашему запросу ничего не найдено.</p>
	<?php endif; ?></div>
<?php get_sidebar(); ?><?php get_footer(); ?>