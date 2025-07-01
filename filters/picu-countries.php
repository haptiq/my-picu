<?php
/**
 * Add US States to the country list.
 */
function my_picu_add_countries_to_country_list( $countries ) {
	// US States
	$us_states = [
		'us_al' => 'Alabama',
		'us_ak' => 'Alaska',
		'us_az' => 'Arizona',
		'us_ar' => 'Arkansas',
		'us_ca' => 'California',
		'us_co' => 'Colorado',
		'us_ct' => 'Connecticut',
		'us_de' => 'Delaware',
		'us_fl' => 'Florida',
		'us_ga' => 'Georgia',
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
		'us_oh' => 'Ohio',
		'us_ok' => 'Oklahoma',
		'us_or' => 'Oregon',
		'us_pa' => 'Pennsylvania',
		'us_ri' => 'Rhode Island',
		'us_sc' => 'South Carolina',
		'us_sd' => 'South Dakota',
		'us_tn' => 'Tennessee',
		'us_tx' => 'Texas',
		'us_ut' => 'Utah',
		'us_vt' => 'Vermont',
		'us_va' => 'Virginia',
		'us_wa' => 'Washington',
		'us_wv' => 'West Virginia',
		'us_wi' => 'Wisconsin',
		'us_wy' => 'Wyoming',
		
		// US Territories
		'us_dc' => 'District of Columbia',
		'us_pr' => 'Puerto Rico',
		'us_vi' => 'U.S. Virgin Islands',
		'us_gu' => 'Guam',
		'us_as' => 'American Samoa',
		'us_mp' => 'Northern Mariana Islands',
		
		// Minor Outlying Islands
		'us_um' => 'U.S. Minor Outlying Islands'
	];

	// Use this if you want to only show the US States:
	$countries = $us_states;

	// Use this if you want to insert the US States after the US and keep the other countries:
	// $countries = my_picu_insert_after_key( $countries, 'us', $us_states );

	return $countries;
}

add_filter( 'picu_countries', 'my_picu_add_countries_to_country_list' );