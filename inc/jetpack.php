<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package barron-test-1
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function barron_test_1_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'barron_test_1_jetpack_setup' );
