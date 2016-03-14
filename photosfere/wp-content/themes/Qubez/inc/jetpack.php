<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package fabthemes
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function fabthemes_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'type' => 'click',
		'container' => 'main',
		'wrapper' => false,
		'render'    => 'fabthemes_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function fabthemes_jetpack_setup
add_action( 'after_setup_theme', 'fabthemes_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function fabthemes_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function fabthemes_infinite_scroll_render
