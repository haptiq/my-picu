<?php
/**
 * Customize the heading shown on the approval modal.
 *
 * Defaults to "Approve Collection". Return a custom string to replace it,
 * e.g. to use different terminology or a translated phrase.
 *
 * @param string $_heading The current heading text (unused — this example replaces it entirely).
 * @return string The modified heading text.
 */
add_filter( 'picu_approval_heading', function( $_heading ) {
	return 'Confirm your selection';
} );
