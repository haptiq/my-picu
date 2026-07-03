<?php
/**
 * Inject custom CSS into the collection page.
 *
 * The returned string is wrapped in a <style> tag and output in <head>.
 * Use this to tweak the collection layout or typography without modifying
 * theme files.
 *
 * @param string $styles The current custom styles (empty by default).
 * @return string The modified custom styles.
 */
add_filter( 'picu_custom_styles', function( $styles ) {
	$styles .= '.picu-header { background-color: #1a1a1a; color: #ffffff; }';
	return $styles;
} );
