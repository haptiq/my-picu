<?php
/**
 * Adjust the approval form by adding various fields.
 */
add_filter( 'picu_approval_fields', function( $fields, $post_id, $ident) {
	// A text field
	$fields[] = [
		'label' => 'Name',
		'name' => 'name',
		'type' => 'text',
		'placeholder' => 'Max Mustermann…',
		'width' => 100,
		'required' => true,
		'value' => '',
		'validation' => '',
	];

	// A select field
	$fields[] = [
		'label' => 'Country',
		'name' => 'country',
		'type' => 'select',
		'options' => [
			'DE|Germany',
			'CH|Switzerland'
		],
		'width' => 50,
		'required' => false,
		'value' => '',
		'validation' => '',
	];

	return $fields;
}, 10, 3 );