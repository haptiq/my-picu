<?php
/**
 * Set the separator character between filenames in the selection copy list.
 *
 * Defaults to a space. Return a custom string to use a different separator,
 * e.g. ", " (comma-space) or "\n" (newline) for one filename per line.
 *
 * @param string $_separator The current separator (unused — this example replaces it entirely).
 * @return string The modified separator.
 */
add_filter( 'picu_filename_separator', function( $_separator ) {
	return ', ';
} );
