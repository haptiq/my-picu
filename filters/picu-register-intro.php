<?php
/**
 * Customize the intro text on the client registration modal.
 *
 * Shown above the name/email fields before a client starts selecting images.
 * The default asks the client to enter their name (and optionally email).
 * Return a custom string to match your studio's tone of voice.
 *
 * @param string $_intro The current intro text (unused — this example replaces it entirely).
 * @return string The modified intro text.
 */
add_filter( 'picu_register_intro', function( $_intro ) {
	return 'Please enter your name so we know who is making the selection.';
} );
