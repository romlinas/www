<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */
?>

	</div><!-- #main -->
	
	<?php get_sidebar('colophon'); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'cuteFrames_credits' ); ?>
			Тема от <a href="http://regretless.com/" rel="designer">Ying Zhang</a>, перевел <a href="http://wp-templates.ru/">WP-Templates.ru</a>, <a href="http://lenadubinina.com/">LenaDubinina.com</a>.
		</div><!-- .site-info -->
		<?php printf( __( '%1$s', 'cuteFrames' ), '<a id="top" href="#top">Наверх</a>' ); ?>
	</footer><!-- .site-footer .site-footer -->
	<div class="footer-bottom"></div>
</div><!-- #page .hfeed .site -->



<?php wp_footer(); ?>

</body>
</html>