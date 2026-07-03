<?php
/**
 * Add US States to the country list.
 *
 * The two functions below are independent alternatives — enable only one
 * at a time. Both replace (or extend) the same list, so registering both
 * hooks would conflict.
 *
 * Within each function there are two approaches:
 *   1. Replace the entire list with just the states/provinces.
 *   2. Insert them after the parent country entry using my_picu_insert_after_key()
 *      (defined in my-picu.php), keeping all other countries intact.
 * Uncomment the approach you want and comment out the other.
 *
 * @param array $countries Key-value pairs of country code => country name.
 * @return array The modified countries list.
 */
function my_picu_add_us_states_to_country_list( $countries ) {
	$us_states = [
		'us_al' => 'Alabama',
		'us_ak' => 'Alaska',
		'us_as' => 'American Samoa',
		'us_az' => 'Arizona',
		'us_ar' => 'Arkansas',
		'us_ca' => 'California',
		'us_co' => 'Colorado',
		'us_ct' => 'Connecticut',
		'us_de' => 'Delaware',
		'us_dc' => 'District of Columbia',
		'us_fl' => 'Florida',
		'us_ga' => 'Georgia',
		'us_gu' => 'Guam',
		'us_hi' => 'Hawaii',
		'us_id' => 'Idaho',
		'us_il' => 'Illinois',
		'us_in' => 'Indiana',
		'us_ia' => 'Iowa',
		'us_ks' => 'Kansas',
		'us_ky' => 'Kentucky',
		'us_la' => 'Louisiana',
		'us_me' => 'Maine',
		'us_md' => 'Maryland',
		'us_ma' => 'Massachusetts',
		'us_mi' => 'Michigan',
		'us_mn' => 'Minnesota',
		'us_ms' => 'Mississippi',
		'us_mo' => 'Missouri',
		'us_mt' => 'Montana',
		'us_ne' => 'Nebraska',
		'us_nv' => 'Nevada',
		'us_nh' => 'New Hampshire',
		'us_nj' => 'New Jersey',
		'us_nm' => 'New Mexico',
		'us_ny' => 'New York',
		'us_nc' => 'North Carolina',
		'us_nd' => 'North Dakota',
		'us_mp' => 'Northern Mariana Islands',
		'us_oh' => 'Ohio',
		'us_ok' => 'Oklahoma',
		'us_or' => 'Oregon',
		'us_pa' => 'Pennsylvania',
		'us_pr' => 'Puerto Rico',
		'us_ri' => 'Rhode Island',
		'us_sc' => 'South Carolina',
		'us_sd' => 'South Dakota',
		'us_tn' => 'Tennessee',
		'us_tx' => 'Texas',
		'us_vi' => 'U.S. Virgin Islands',
		'us_um' => 'U.S. Minor Outlying Islands',
		'us_ut' => 'Utah',
		'us_vt' => 'Vermont',
		'us_va' => 'Virginia',
		'us_wa' => 'Washington',
		'us_wv' => 'West Virginia',
		'us_wi' => 'Wisconsin',
		'us_wy' => 'Wyoming'
	];

	// Option 1: Replace the entire list with just US States.
	$countries = $us_states;

	// Option 2: Insert US States after the "United States" entry, keeping all other countries.
	// $countries = my_picu_insert_after_key( $countries, 'us', $us_states );

	return $countries;
}

add_filter( 'picu_countries', 'my_picu_add_us_states_to_country_list' );


/**
 * Alternative: Add Canadian Provinces and Territories to the country list.
 *
 * This is an alternative to the US States function above. Enable this one
 * (and disable the other) by swapping which add_filter call is commented out.
 *
 * @param array $countries Key-value pairs of country code => country name.
 * @return array The modified countries list.
 */
function my_picu_add_canadian_provinces_to_country_list( $countries ) {
	$canadian_provinces = [
		'ca_ab' => 'Alberta',
		'ca_bc' => 'British Columbia',
		'ca_mb' => 'Manitoba',
		'ca_nb' => 'New Brunswick',
		'ca_nl' => 'Newfoundland and Labrador',
		'ca_ns' => 'Nova Scotia',
		'ca_nt' => 'Northwest Territories',
		'ca_nu' => 'Nunavut',
		'ca_on' => 'Ontario',
		'ca_pe' => 'Prince Edward Island',
		'ca_qc' => 'Quebec',
		'ca_sk' => 'Saskatchewan',
		'ca_yt' => 'Yukon'
	];

	// Option 1: Replace the entire list with just Canadian Provinces and Territories.
	$countries = $canadian_provinces;

	// Option 2: Insert them after the "Canada" entry, keeping all other countries.
	// $countries = my_picu_insert_after_key( $countries, 'ca', $canadian_provinces );

	return $countries;
}

// add_filter( 'picu_countries', 'my_picu_add_canadian_provinces_to_country_list' );
