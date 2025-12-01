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


/**
 * When selling images, only show a comment box during checkout.
 *
 * @param array $fields The approval form fields.
 * @param int $collection_id The collection post ID.
 * @param string $ident The identifier for the client.
 *
 * @return array The adjusted approval form fields.
 */
add_filter( 'picu_approval_fields', function( $fields, $collection_id, $ident ) {
	$ecommerce_active = get_post_meta( $collection_id, '_picu_collection_ecommerce', true );

	if ( $ecommerce_active ) {
		$fields = [
			[
				'type' => 'textarea',
				'name' => 'comment',
				'label' => 'Anything else you want us to know?',
				'placeholder' => 'Leave a comment…',
				'width' => 100,
				'required' => false,
				'value' => '',
				'options' => '',
				'validation' => '',
			]
		];
	}

	return $fields;
}, 11, 3 );