<?php
/**
 * Customize the HTML shown on the password-protected collection page.
 *
 * Defaults to an h1 with "This collection is password protected." Followed by
 * the password form rendered by WordPress. Return custom HTML to replace it,
 * e.g. to add a logo, a message from the photographer, or styled instructions.
 *
 * @param string $_content       The current password box HTML (unused — this example replaces it entirely).
 * @param int    $_collection_id The collection ID (unused in this example).
 * @return string The modified password box HTML.
 */
add_filter( 'picu_password_box_content', function( $_content, $_collection_id ) {
	return '<h1>Your gallery is ready.</h1><p>Enter the password you received to start viewing your images.</p>';
}, 10, 2 );
