<?php
/**
 * Add a BCC address to picu emails.
 *
 * Empty by default. Return an email address to silently copy all outgoing
 * picu emails for record-keeping, or limit it to a specific mail context.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param string $_bcc_address   The current BCC address — empty by default (unused — this example replaces it entirely).
 * @param string $_mail_context  Identifier for which email is being sent (unused in this example).
 * @param int    $_collection_id The collection post ID (unused in this example).
 * @return string The BCC email address.
 */
add_filter( 'picu_email_bcc', function( $_bcc_address, $_mail_context, $_collection_id ) {
	return 'archive@example.com';
}, 10, 3 );
