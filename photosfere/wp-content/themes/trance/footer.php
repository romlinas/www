<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package trance
 */
?>

	</div><!-- #content -->
	
	<div id="footer-wrapper">
	<div id="footer-sidebar" class="widget-area clear container" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php 
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-2'); 
		?> </div> <?php	
		}
			
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-3'); 
		?> </div> <?php	
		}

		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-4'); 
		?> </div> <?php	
		}
		
		if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-5'); 
		?> </div> <?php	
		}
		?>	 		
	</div><!-- #footer-sidebar -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="http://wp-templates.ru/" title="Шаблоны WordPress">WordPress</a>
			<span class="sep"> | </span>
			<a href="http://builderbody.ru/kak-nakachat-popu-doma-bystro-i-pravilno-programma-trenirovok/" title="Как накачать попу дома быстро и правильно: программа тренировок">накачать попу</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
