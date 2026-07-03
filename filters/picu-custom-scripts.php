<?php
/**
 * Inject custom JavaScript into the collection page.
 *
 * The returned string is output directly before the closing </body> tag.
 * Return a <script> tag or plain JS wrapped in one.
 *
 * @param string $scripts The current custom scripts (empty by default).
 * @return string The modified custom scripts.
 */
add_filter( 'picu_custom_scripts', function( $scripts ) {
	$scripts .= '<script>console.log("picu collection loaded");</script>';
	return $scripts;
} );
