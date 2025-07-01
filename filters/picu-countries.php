<?php
/**
 * Add US states to country selector
 */
function insertAfterKey( $array, $key, $newItems ) {
	$keys = array_keys( $array );
	$index = array_search( $key, $keys );

	if ( $index === false ) {
		// Key not found, append to end
		return array_merge( $array, $newItems );
	}

	$position = $index + 1;
	$before = array_slice( $array, 0, $position, true );
	$after = array_slice( $array, $position, null, true );

	return $before + $newItems + $after;
}

function my_picu_add_us_states_to_country_list( $countries ) {
	$original_countries = $countries;

	$countries = [];
	$countries['_group_us_states'] = 'US States';
	$countries['us_al'] = 'Alabama';
	$countries['us_ak'] = 'Alaska';
	$countries['us_az'] = 'Arizona';
	$countries['us_ar'] = 'Arkansas';
	$countries['us_ca'] = 'California';
	$countries['us_co'] = 'Colorado';
	$countries['us_ct'] = 'Connecticut';
	$countries['us_de'] = 'Delaware';
	$countries['us_fl'] = 'Florida';
	$countries['us_ga'] = 'Georgia';
	$countries['us_hi'] = 'Hawaii';
	$countries['us_id'] = 'Idaho';
	$countries['us_il'] = 'Illinois';
	$countries['us_in'] = 'Indiana';
	$countries['us_ia'] = 'Iowa';
	$countries['us_ks'] = 'Kansas';
	$countries['us_ky'] = 'Kentucky';
	$countries['us_la'] = 'Louisiana';
	$countries['us_me'] = 'Maine';
	$countries['us_md'] = 'Maryland';
	$countries['us_ma'] = 'Massachusetts';
	$countries['us_mi'] = 'Michigan';
	$countries['us_mn'] = 'Minnesota';
	$countries['us_ms'] = 'Mississippi';
	$countries['us_mo'] = 'Missouri';
	$countries['us_mt'] = 'Montana';
	$countries['us_ne'] = 'Nebraska';
	$countries['us_nv'] = 'Nevada';
	$countries['us_nh'] = 'New Hampshire';
	$countries['us_nj'] = 'New Jersey';
	$countries['us_nm'] = 'New Mexico';
	$countries['us_ny'] = 'New York';
	$countries['us_nc'] = 'North Carolina';
	$countries['us_nd'] = 'North Dakota';
	$countries['us_oh'] = 'Ohio';
	$countries['us_ok'] = 'Oklahoma';
	$countries['us_or'] = 'Oregon';
	$countries['us_pa'] = 'Pennsylvania';
	$countries['us_ri'] = 'Rhode Island';
	$countries['us_sc'] = 'South Carolina';
	$countries['us_sd'] = 'South Dakota';
	$countries['us_tn'] = 'Tennessee';
	$countries['us_tx'] = 'Texas';
	$countries['us_ut'] = 'Utah';
	$countries['us_vt'] = 'Vermont';
	$countries['us_va'] = 'Virginia';
	$countries['us_wa'] = 'Washington';
	$countries['us_wv'] = 'West Virginia';
	$countries['us_wi'] = 'Wisconsin';
	$countries['us_wy'] = 'Wyoming';

	// US Territories
	$countries['us_dc'] = 'District of Columbia';
	$countries['us_pr'] = 'Puerto Rico';
	$countries['us_vi'] = 'U.S. Virgin Islands';
	$countries['us_gu'] = 'Guam';
	$countries['us_as'] = 'American Samoa';
	$countries['us_mp'] = 'Northern Mariana Islands';

	// Minor Outlying Islands
	$countries['us_um'] = 'U.S. Minor Outlying Islands';

	$countries['_group_end_us_states'] = '';

	return insertAfterKey( $original_countries, 'us', $countries );

	return $countries;
}

add_filter( 'picu_countries', 'my_picu_add_us_states_to_country_list' );