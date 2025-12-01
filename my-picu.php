<?php
/**
 * Plugin Name: My picu
 * Plugin URI: https://picu.io/
 * Description: Helper plugin that contains actions and filters to adjust picu beyond existing settings.
 * Author: Haptiq
 * Author URI: https://picu.io/
 */


/**
 * In the following uncomment the filters you want to use.
 */


/**
 * Actions
 */
// require_once( __DIR__ . '/actions/picu-before-collection-images.php' );


/**
 * Filters
 */
// require_once( __DIR__ . '/filters/picu-approval-fields.php' );

// require_once( __DIR__ . '/filters/picu-approved-filename.php' );

// require_once( __DIR__ . '/filters/picu-collection-do-random-slug.php' );

// require_once( __DIR__ . '/filters/picu-collection-slug.php' );

// require_once( __DIR__ . '/filters/picu-countries.php' );

// require_once( __DIR__ . '/filters/picu-customize-image-sizes.php' );

// require_once( __DIR__ . '/filters/picu-intermediate-images-sizes.php' );

// require_once( __DIR__ . '/filters/picu-large-image-size.php' );


/**
 * Helper function to insert array items after a specific key.
 *
 * @since 0.0.1
 *
 * @param array $array The original array.
 * @param string $key The array key after which to insert new items.
 * @param array $new_items The array items to insert.
 * @return array The array with the inserts.
 */
function my_picu_insert_after_key( $array, $key, $new_items ) {
	$keys = array_keys( $array );
	$index = array_search( $key, $keys );

	if ( $index === false ) {
		// Append to the end if the key is not found
		return array_merge( $array, $new_items );
	}

	$position = $index + 1;
	$before = array_slice( $array, 0, $position, true );
	$after = array_slice( $array, $position, null, true );

	return $before + $new_items + $after;
}