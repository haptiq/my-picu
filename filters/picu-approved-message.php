<?php
/**
 * Override the message shown to the client after they approve a collection.
 *
 * This example only changes the message when the collection uses ecommerce,
 * leaving the default thank-you message in place for regular approvals.
 *
 * Note: the filter does not receive the collection ID, so get_the_ID() is used
 * instead. This works because the filter fires inside the collection template.
 *
 * @param string $message The current approval message (HTML).
 * @return string The modified approval message.
 */
function my_picu_approved_message( $message ) {
	$collection_id = get_the_ID();

	if ( ! empty( $collection_id ) ) {
		$uses_ecommerce = get_post_meta( $collection_id, '_picu_collection_ecommerce', true ) == 1;

		if ( $uses_ecommerce ) {
			$message = '<h1>Thank you for your purchase</h1><p>We will be in touch regarding your images shortly.</p>';
		}
	}

	return $message;
}

add_filter( 'picu_approved_message', 'my_picu_approved_message', 11 );
