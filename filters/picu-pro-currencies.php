<?php
/**
 * Add a custom currency to the list of currencies available in picu Pro.
 *
 * Fires when picu Pro builds the currency list shown in the e-commerce
 * settings. This example adds the Bolivian Boliviano (BOB).
 *
 * Requires picu Pro.
 *
 * @param array $currencies The current list of currencies, keyed by ISO code.
 * @return array The modified list of currencies.
 */
add_filter( 'picu_pro_currencies', function( $currencies ) {
	$currencies['BOB'] = [
		'name'            => 'Boliviano',
		'symbol'          => 'Bs.',
		'countries_using' => ['Bolivia'],
	];
	return $currencies;
} );
