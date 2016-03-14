<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

?>
<div class="col-sm-6 col-md-4">
<article id="post-<?php the_ID(); ?>" <?php post_class('grid'); ?>>

		<figure class="effect-smart">
			<a href="<?php the_permalink(); ?>"> 
				<?php 
				$thumb = get_post_thumbnail_id();
				$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
				$image = aq_resize( $img_url, 768, 768, true,true,true ); //resize & crop the image
				?>
				<?php if($image) : ?>
						<img class="post-thumb" src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
				<?php else: ?>
						<img class="post-thumb" src="<?php echo get_template_directory_uri().'/img/blank.png'?>" alt="<?php the_title(); ?>" />
				<?php endif; ?>		

			<figcaption>
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<p><?php echo excerpt(20); ?></p>
			</figcaption>	
			</a>		
		</figure>
</article><!-- #post-## -->
</div>
