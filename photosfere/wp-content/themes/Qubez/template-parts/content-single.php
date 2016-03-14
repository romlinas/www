<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
	$thumb = get_post_thumbnail_id();
	$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
	$image = aq_resize( $img_url, 1280, 768, true,true,true ); //resize & crop the image
	?>
	<?php if($image) : ?>
			<img class="post-thumb" src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
	<?php endif; ?>	

	<div class="content-block">

	<header class="entry-header">


		<div class="entry-meta">
			<span><i class="fa fa-user"></i>  <?php _e('Posted by ','fabthemes');?> <?php the_author(); ?> </span>
			<span> <i class="fa fa-clock-o"></i> <?php the_time('l, F jS, Y') ?> </span>
			<span> <i class="fa fa-tag"></i> <?php fabthemes_entry_footer(); ?></span><br>
			<span> <i class="fa fa-comment"></i> <?php comments_number( 'no responses', 'one response', '% responses' ); ?>  </span>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fabthemes' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->

