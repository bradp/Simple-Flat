<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package simpleflat
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function simpleflat_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'false',
	) );
}
add_action( 'after_setup_theme', 'simpleflat_jetpack_setup' );
