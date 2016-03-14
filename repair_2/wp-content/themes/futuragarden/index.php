<?php get_header(); ?>

	<div id="content" class="narrowcolumn">


	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="entry">
					<?php the_content('Читать полностью &raquo;'); ?>
                                        <div class="spacer"></div>
<small ><?php the_time('d M Y') ?> <?php the_author() ?> | <?php edit_post_link('Править','','<strong> | </strong>'); ?>  <?php comments_popup_link('Ваш отзыв &#187;', '1 отзыв &#187;', 'Отзывов: % &#187;'); ?></small>

				</div>
<br class="kosong"/>
				
				<!--
				<?php trackback_rdf(); ?>
				-->
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Раньше') ?></div>
			<div class="alignright"><?php posts_nav_link('','Позже &raquo;','') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Не найдено</h2>
		<p class="center"><?php _e("К сожалению, по вашему запросу ничего не найдено."); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>