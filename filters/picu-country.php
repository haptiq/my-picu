<?php
/**
 * Translate or rename a single country by its ISO code.
 *
 * Called whenever picu resolves a country code to a display name. Return a
 * custom string for a specific code to override the built-in name, e.g. to
 * use a different spelling or a translated label.
 *
 * @param string $country The current country name.
 * @param string $code    The ISO 3166-1 alpha-2 country code (e.g. 'US', 'DE').
 * @return string The modified country name.
 */
add_filter( 'picu_country', function( $country, $code ) {
	if ( $code === 'US' ) {
		return 'United States of America';
	}
	return $country;
}, 10, 2 );
