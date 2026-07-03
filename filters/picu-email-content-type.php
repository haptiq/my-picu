<?php
/**
 * Override the content type of a picu email.
 *
 * Defaults to 'text/html'. Return 'text/plain' to send a specific email
 * as plain text instead, useful for simple notification emails where HTML
 * styling is unnecessary.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param string $content_type   The current content type.
 * @param string $mail_context   Identifier for which email is being sent.
 * @param int    $_collection_id The collection post ID (unused in this example).
 * @return string The modified content type.
 */
add_filter( 'picu_email_content_type', function( $content_type, $mail_context, $_collection_id ) {
	if ( $mail_context === 'photographer_collection_approved' ) {
		return 'text/plain';
	}

	return $content_type;
}, 10, 3 );
