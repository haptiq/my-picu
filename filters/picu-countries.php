<?php
/**
 * Add US States to the country list.
 */
function my_picu_add_us_states_to_country_list( $countries ) {
	// US States
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

	// Use this if you want to only show the US States:
	$countries = $us_states;

	// Use this if you want to insert the US States after the US and keep the other countries:
	// $countries = my_picu_insert_after_key( $countries, 'us', $us_states );

	return $countries;
}

add_filter( 'picu_countries', 'my_picu_add_us_states_to_country_list' );


/**
 * Add Canadian Provinces and Territories to the country list.
 */
function my_picu_add_canadian_provinces_to_country_list( $countries ) {
	// Canadian Provinces and Territories
	$canadian_provinces = [
		// Provinces
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

	// Use this if you want to only show the Canadian Provinces and Territories:
	$countries = $canadian_provinces;

	// Use this if you want to insert the Canadian Provinces after Canada and keep the other countries:
	// $countries = my_picu_insert_after_key( $countries, 'ca', $canadian_provinces );

	return $countries;
}

// add_filter( 'picu_countries', 'my_picu_add_canadian_provinces_to_country_list' );