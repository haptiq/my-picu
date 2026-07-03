<?php
/**
 * Customize the warning message shown above the approve button.
 *
 * The default warns the client that they cannot change their selection after
 * approving. Return a custom HTML string to replace it, e.g. to include
 * your own legal notice or terms of service.
 *
 * @param string $_warning The current warning HTML (unused — this example replaces it entirely).
 * @return string The modified warning HTML.
 */
add_filter( 'picu_approval_warning', function( $_warning ) {
	return '<p><strong>By approving you agree to our <a href="https://example.com/terms">Terms and Conditions</a>.</strong></p>';
} );
