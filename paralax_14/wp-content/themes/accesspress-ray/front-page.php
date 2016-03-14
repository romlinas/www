<?php
/**
 * The front page file.
 * @package AccessPress Ray
 */

get_header(); ?>

	<?php 
		global $accesspress_ray_options;
		$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
		$accesspress_ray_template_design = $accesspress_ray_settings['accesspress_ray_template_design'];

		if ( 'page' == get_option( 'show_on_front' ) ) {
		    include( get_page_template() );
		} else {			
			if( $accesspress_ray_template_design == 'style1_template' ) {
				get_template_part( 'index', 'two' );
			} else {
				get_template_part( 'index', 'one' );
			}
		}		
	?>
	
<?php 
	if( $accesspress_ray_template_design == 'style1_template' ) {
		get_footer('two');
	}else{
		get_footer();
	}
?>