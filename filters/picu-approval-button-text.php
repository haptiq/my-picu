<?php
/**
 * Customize the text on the approve button.
 *
 * Defaults to "approve selection". Return a custom string to use different
 * wording, e.g. to match your brand voice or a translated phrase.
 *
 * @param string $_button_text The current button text (unused — this example replaces it entirely).
 * @return string The modified button text.
 */
add_filter( 'picu_approval_button_text', function( $_button_text ) {
	return 'Confirm my selection';
} );
