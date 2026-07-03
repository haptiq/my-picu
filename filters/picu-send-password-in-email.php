<?php
/**
 * Control whether the collection password is included in the client email.
 *
 * Defaults to true. Return false to omit the password from the email,
 * e.g. when you share it separately for added security.
 *
 * @param bool $_send_password Whether to include the password (unused — this example replaces it entirely).
 * @return bool Whether to include the password in the email.
 */
add_filter( 'picu_send_password_in_email', function( $_send_password ) {
	return false;
} );
