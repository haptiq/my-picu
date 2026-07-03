<?php
/**
 * Set whether the email share method is pre-selected when sending a collection.
 *
 * Defaults to true (email is pre-selected). Return false to pre-select the
 * link share method instead.
 *
 * @param bool $_is_email Whether email is pre-selected (unused — this example replaces it entirely).
 * @return bool Whether email should be the pre-selected share method.
 */
add_filter( 'picu_default_share_method_is_email', function( $_is_email ) {
	return false;
} );
