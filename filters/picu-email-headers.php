<?php
/**
 * Add or modify raw headers on picu emails.
 *
 * $headers already contains the From and Content-Type headers built by picu.
 * Append additional headers as newline-separated strings. This example adds
 * a Reply-To header so client replies go to a different address than the sender.
 *
 * Known $mail_context values: 'client_collection_new', 'client_delivery_new',
 * 'photographer_collection_approved', 'photographer_collection_expired',
 * 'client_reminder'.
 *
 * @param string $headers         The current email headers.
 * @param string $_mail_context   Identifier for which email is being sent (unused in this example).
 * @param int    $_collection_id  The collection post ID (unused in this example).
 * @param string $_ident          The client identifier token (unused in this example).
 * @return string The modified headers.
 */
add_filter( 'picu_email_headers', function( $headers, $_mail_context, $_collection_id, $_ident ) {
	$headers .= "Reply-To: Jane Smith <hello@example.com>\r\n";

	return $headers;
}, 10, 4 );
