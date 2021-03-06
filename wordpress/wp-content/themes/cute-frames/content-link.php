<?php
/**
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="inner">
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'cuteFrames' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cuteFrames' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a>
			<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'cuteFrames' ), __( '1 Thought', 'cuteFrames' ), __( '% Thoughts', 'cuteFrames' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'cuteFrames' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
		</div><!-- .inner -->
	</article><!-- #post -->
