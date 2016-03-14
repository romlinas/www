<?php
$matrix_theme_options = matrix_theme_options();
global $post;
preg_match('/\[PVGM[^\]]*](.*)/uis', $post->post_content , $matches);		
if ($matrix_theme_options['home_portfolio_enable'] && (isset($matches[0]) || $matrix_theme_options['portfolio_shortcode']!="")) {
    ?>
    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">
        <!-- Start Recent Projects Carousel -->
        <?php 
		if(isset($matches[0])){
			echo do_shortcode($matches[0]);
		}elseif($matrix_theme_options['portfolio_shortcode']!=""){
			echo do_shortcode($matrix_theme_options['portfolio_shortcode']);
		}			?>

        <!-- End Recent Projects Carousel -->
    </div>
    <!-- End Portfolio Section -->
<?php } ?>