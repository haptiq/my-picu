<?php
/**
 * Plugin Name: My picu
 * Plugin URI: https://picu.io/
 * Description: Helper plugin that contains actions and filters to adjust picu beyond existing settings.
 * Author: Haptiq
 * Author URI: https://picu.io/
 * Version: 1.0.0
 */


/**
 * In the following uncomment the filters/actions you want to use.
 */


/**
 * Filters
 */
// require_once( __DIR__ . '/filters/picu-approval-button-text.php' );

// require_once( __DIR__ . '/filters/picu-approval-fields.php' );

// require_once( __DIR__ . '/filters/picu-approval-heading.php' );

// require_once( __DIR__ . '/filters/picu-approval-warning.php' );

// require_once( __DIR__ . '/filters/picu-email-attachments.php' );

// require_once( __DIR__ . '/filters/picu-email-bcc.php' );

// require_once( __DIR__ . '/filters/picu-email-cc.php' );

// require_once( __DIR__ . '/filters/picu-email-content-type.php' );

// require_once( __DIR__ . '/filters/picu-email-from-address.php' );

// require_once( __DIR__ . '/filters/picu-email-from-name.php' );

// require_once( __DIR__ . '/filters/picu-email-headers.php' );

// require_once( __DIR__ . '/filters/picu-email-styles.php' );

// require_once( __DIR__ . '/filters/picu-email-subject.php' );

// require_once( __DIR__ . '/filters/picu-approved-filename.php' );

// require_once( __DIR__ . '/filters/picu-approved-message.php' );

// require_once( __DIR__ . '/filters/picu-capability.php' );

// require_once( __DIR__ . '/filters/picu-collection-do-random-slug.php' );

// require_once( __DIR__ . '/filters/picu-collection-slug.php' );

// require_once( __DIR__ . '/filters/picu-countries.php' );

// require_once( __DIR__ . '/filters/picu-customize-image-sizes.php' );

// require_once( __DIR__ . '/filters/picu-intermediate-images-sizes.php' );

// require_once( __DIR__ . '/filters/picu-large-image-size.php' );

// require_once( __DIR__ . '/filters/picu-mail-parts.php' );

// require_once( __DIR__ . '/filters/picu-pro-bank-account-details.php' );

// require_once( __DIR__ . '/filters/picu-pro-client-invoice-access.php' );

// require_once( __DIR__ . '/filters/picu-pro-currencies.php' );

// require_once( __DIR__ . '/filters/picu-pro-display-client-invoice.php' );

// require_once( __DIR__ . '/filters/picu-pro-order-status-notification.php' );

// require_once( __DIR__ . '/filters/picu-send-selection-button-text.php' );


/**
 * Actions
 */
// require_once( __DIR__ . '/actions/picu-before-collection-images.php' );


/**
 * Misc
 */
require_once( __DIR__ . '/misc/recipients-csv.php' );


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
