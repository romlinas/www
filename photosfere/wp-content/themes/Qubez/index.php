<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="container"> <div class="row"> 

	<div class="col-md-12">
		<div class="welcome-section sub-header">
			<h2>
				<?php echo ft_of_get_option('fabthemes_welcome','Welcome to my Website'); ?>
			</h2>
		</div>
	</div>

	<div class="col-md-12">
		<div id="primary" class="content-area">
			
			<main id="main" class="site-main row" role="main">
			
				<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php $is_infinite = class_exists( 'Jetpack') && Jetpack::is_module_active( 'infinite-scroll' ); ?>

				<?php 
				if ($is_infinite) {  
					  // Show custom infinite scroll pagination markup
					} else { ?>
					  	<div class="paginate col-md-12"> 
							<?php paginate_numeric_posts_nav(); ?>
						</div>
					<?php }	?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
				
			</main><!-- #main -->
			
		</div><!-- #primary -->
	</div>
</div></div>
<?php get_footer(); ?>
