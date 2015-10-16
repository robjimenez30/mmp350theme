<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package MMP350
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function blah_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'blah_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function blah_jetpack_setup
add_action( 'after_setup_theme', 'blah_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function blah_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function blah_infinite_scroll_render
