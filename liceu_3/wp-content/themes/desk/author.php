<?php 
/* @package WordPress
 * @subpackage Desk
 */
?>
<?php
get_header();
?>


<div id="post">

<?php
	if ( have_posts() )
		the_post();
// If a user has filled out their description, show a bio on their entries.
if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( '', 72 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description" class="entry">
							<h2><?php printf( __( '%s', '' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
						</div><!-- #author-description	-->
					</div><!-- #entry-author-info -->
					
					
<?php endif; ?>
<h2 class="page-title author clear"><?php printf( __( 'Все публикации автора', '' ), "<span class='vcard'>" . get_the_author() . "</span>" ); ?></h2>
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
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
	<span class="cats">Posted in <?php the_category(', ') ?></span> | <?php edit_post_link('Править', '', ' | '); ?>
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