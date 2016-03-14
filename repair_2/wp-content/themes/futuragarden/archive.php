<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">Рубрика &laquo;<?php echo single_cat_title(); ?>&raquo;</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('d M Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('F Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Результаты поиска</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Страница автора</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архив сайта</h2>

		<?php } ?>


		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Раньше') ?></div>
			<div class="alignright"><?php posts_nav_link('','Позже &raquo;','') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				
				
				<div class="entry">
                                        <div class="spacer"></div>
					<?php the_excerpt('Читать полностью &raquo;') ?>
				</div>
		<small><?php the_time('l, d M Y') ?></small>
				<p class="postmetadata">Рубрика: <?php the_category(', ') ?> <strong>|</strong> <?php edit_post_link('Править','','<strong>|</strong>'); ?>  <?php comments_popup_link('Отзывов нет &#187;', '1 отзыв &#187;', 'Отзывов: % &#187;'); ?></p> 
				
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
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
		
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>