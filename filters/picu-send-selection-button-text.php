<?php
/**
 * Customize the text on the "Send selection" button in the status bar.
 *
 * Defaults to "Send<span> selection</span>…" — the <span> wrapping " selection"
 * is hidden on smaller screens, so only "Send…" shows on mobile. Keep that
 * pattern in mind if you want your text to be responsive too.
 *
 * @param string $_button_text The current button text (unused — this example replaces it entirely).
 * @return string The modified button text.
 */
add_filter( 'picu_send_selection_button_text', function( $_button_text ) {
	return 'Submit<span> my picks</span>…';
} );
