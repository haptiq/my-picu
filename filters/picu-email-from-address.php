<?php
/**
 * Override the sender address on picu emails.
 *
 * By default picu uses the address set under picu → Settings → From Email,
 * falling back to no-reply@yourdomain.com. Return a custom email address here,
 * optionally varying it per mail context.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param string $_from_address  The current sender address (unused — this example replaces it entirely).
 * @param string $_mail_context  Identifier for which email is being sent (unused in this example).
 * @param int    $_collection_id The collection post ID (unused in this example).
 * @return string The modified sender address.
 */
add_filter( 'picu_email_from_address', function( $_from_address, $_mail_context, $_collection_id ) {
	return 'hello@example.com';
}, 10, 3 );
