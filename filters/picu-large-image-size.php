<?php

function my_picu_large_image_size( $sizes ) {
	return array(
		'width' => 10000,
		'height' => 10000
	);
}

// add_filter( 'picu_large_image_size', 'my_picu_large_image_size' );