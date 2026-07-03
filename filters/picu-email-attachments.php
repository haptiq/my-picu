<?php
/**
 * Attach files to picu emails.
 *
 * $attachments is an array of absolute file paths on the server (same format
 * as wp_mail). This example attaches a PDF terms document to every delivery
 * email sent to clients.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param array  $attachments    The current attachments (file paths).
 * @param string $mail_context   Identifier for which email is being sent.
 * @param int    $_collection_id The collection post ID (unused in this example).
 * @return array The modified attachments array.
 */
add_filter( 'picu_email_attachments', function( $attachments, $mail_context, $_collection_id ) {
	if ( $mail_context === 'client_delivery_new' ) {
		$attachments[] = WP_CONTENT_DIR . '/uploads/terms-and-conditions.pdf';
	}

	return $attachments;
}, 10, 3 );
