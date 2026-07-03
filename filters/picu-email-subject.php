<?php
/**
 * Customize the subject line of picu emails.
 *
 * By default the subject is the collection title. This example prepends a
 * label so the client can find the email more easily in their inbox.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param string $subject        The current email subject.
 * @param string $mail_context   Identifier for which email is being sent.
 * @param int    $_collection_id The collection post ID (unused in this example).
 * @return string The modified subject line.
 */
add_filter( 'picu_email_subject', function( $subject, $mail_context, $_collection_id ) {
	if ( $mail_context === 'client_collection_new' ) {
		return 'Your photos are ready for review: ' . $subject;
	}

	return $subject;
}, 10, 3 );
