<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="container"> <div class="row">

	<div class="col-md-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="post-container-block">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fabthemes' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fabthemes' ); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

</div></div>

<?php get_footer(); ?>
