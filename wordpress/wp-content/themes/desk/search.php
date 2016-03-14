<?php 
/* @package WordPress
 * @subpackage Desk
 */
?>
<?php
get_header();
?>
<div id="post">
	<?php if ( have_posts() ) : ?>
				<h2 class="page-title"><?php printf( __( 'Результаты поиска :%s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				
				?><?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="posthead">
		

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="dater">
				<?php the_time('l, d M Y'); ?></div>
		
			</div>
			
			
			<div class="entry">
				<?php the_content('Читать полностью &raquo;'); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Страницы:', 'desk' ), 'after' => '</div>' ) ); ?>
			</div>
	<p class="postmetadata"><?php if (get_option('desk_hidetags') == '') { the_tags('<span class="tags">Метки: ', ', ', '</span><br />'); } ?>
	<span class="cats">Posted in <?php the_category(', ') ?></span> | <?php edit_post_link('Править', '', ' | '); ?>
	<span class="comments"><?php comments_popup_link('Ваш отзыв &#187;', '1 отзыв &#187;', 'Отзывов (%) &#187;'); ?>
	</span></p>
		
		</div>
<?php endwhile; ?>

<?php endif; ?>

<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Ничего не найдено', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'К сожалению, по вашему запросу ничего не найдено.', 'twentyten' ); ?></p>
						
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?></div>
<?php get_sidebar(); ?><?php get_footer(); ?>