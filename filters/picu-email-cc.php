<?php
/**
 * Add a CC address to picu emails.
 *
 * Empty by default. Return an email address to CC it on every picu email,
 * or limit it to a specific mail context.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param string $cc_address     The current CC address (empty by default).
 * @param string $mail_context   Identifier for which email is being sent.
 * @param int    $_collection_id The collection post ID (unused in this example).
 * @return string The CC email address.
 */
add_filter( 'picu_email_cc', function( $cc_address, $mail_context, $_collection_id ) {
	if ( $mail_context === 'photographer_collection_approved' ) {
		return 'studio@example.com';
	}

	return $cc_address;
}, 10, 3 );
