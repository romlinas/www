<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="container"> <div class="row">

	<div class="col-md-12">
		<div class="welcome-section sub-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'fabthemes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</div>
	</div>

	<div class="col-md-12">
	<section id="primary" class="content-area">
		<main id="no-ajax-main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<div class="post-container-block clearfix">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			<div class="navigation">
				<?php posts_nav_link( '', '', '' ); ?>
			</div>

			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	</div>
</div></div>
<?php get_footer(); ?>
