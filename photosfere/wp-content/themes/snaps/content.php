<?php
/**
 * @package snaps
 * @since snaps 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="post-format-content">
		<a href="<?php the_permalink(); ?>" class="featured-image" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'snaps' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			<?php } else { ?>
				<img src="<?php bloginfo( 'template_directory' );  ?>/images/canvas.png" />
			<?php } ?>
		</a>

		<div class="content-wrap">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->