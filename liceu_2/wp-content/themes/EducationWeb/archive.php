<?php get_header(); ?>
<div class="outer" id="contentwrap">
	<div class="postcont">
		<div id="content">	

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Архив рубрики &#8216;<?php single_cat_title(); ?>&#8217;</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Записи с меткой &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архив для <?php the_time('F j, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архив для <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архив для <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Архив автора</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архив блога</h2>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="postdate"><img src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('F j, Y') ?> <img src="<?php bloginfo('template_url'); ?>/images/folder.png" /> <?php the_category(', ') ?> <img src="<?php bloginfo('template_url'); ?>/images/comments.png" /> <?php comments_popup_link('Нет комментариев &#187;', '1 комментарий &#187;', '% коммент. &#187;'); ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Правка', '', ''); } ?></div><h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка для <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(260,200), array("class" => "alignleft post_thumbnail")); } ?>
							<div class="entry">
								<?php the_content('Читать далее &raquo;'); ?>						</div>
						</div>

		<?php endwhile; ?>
		
		<div class="navigation">
			<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
		</div>
	<?php else :

		echo("<h2 class='pagetitle'>Ничего не найдено.</h2>");

	endif;
?>

		</div>
		</div>


<?php get_sidebars(); ?>
	</div>
<?php get_footer(); ?>
