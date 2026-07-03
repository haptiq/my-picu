<?php
/**
 * Control whether sent emails are saved to the collection history.
 *
 * Defaults to true. Return false to disable email history logging,
 * e.g. for privacy reasons or to reduce database overhead.
 *
 * @param bool $_save Whether to save email history (unused — this example replaces it entirely).
 * @return bool Whether to save sent emails to the collection history.
 */
add_filter( 'picu_save_email_history', function( $_save ) {
	return false;
} );
