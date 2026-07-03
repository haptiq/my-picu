<?php
/**
 * Override the sender name on picu emails.
 *
 * By default picu uses the name set under picu → Settings → From Name,
 * falling back to the site name. Return a custom string here to override it,
 * optionally varying it per mail context.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param string $_from_name     The current sender name (unused — this example replaces it entirely).
 * @param string $_mail_context  Identifier for which email is being sent (unused in this example).
 * @param int    $_collection_id The collection post ID (unused in this example).
 * @return string The modified sender name.
 */
add_filter( 'picu_email_from_name', function( $_from_name, $_mail_context, $_collection_id ) {
	return 'Jane Smith Photography';
}, 10, 3 );
