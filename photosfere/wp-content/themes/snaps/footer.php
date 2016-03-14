<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package snaps
 * @since snaps 1.0
 */
?>

	</div><!-- #main .site-main -->

	<?php get_sidebar(); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'snaps_credits' ); ?>
			Тема от <a href="http://graphpaperpress.com/" rel="designer">Graph Paper Press</a>, перевел <a href="http://wp-templates.ru/">WP-Templates.ru</a>, поддержка <a href="http://searchtimes.ru/">форум wp</a>.
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>