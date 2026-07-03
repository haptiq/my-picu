<?php
/**
 * Add custom fields to the approval form.
 *
 * Fires when picu renders the approval form. Each field is an array describing
 * the input. Supported types: text, textarea, select.
 *
 * @param array  $fields           The current form fields.
 * @param int    $_collection_id   The collection post ID (unused in this example).
 * @param string $_ident           The client identifier token (unused in this example).
 * @return array The modified form fields.
 */
add_filter( 'picu_approval_fields', function( $fields, $_collection_id, $_ident ) {
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
 * When selling images, replace all approval fields with just a comment box.
 *
 * Runs at priority 11, after the fields above have been added, and replaces
 * the entire field list when ecommerce is active on the collection. This
 * keeps the checkout form minimal.
 *
 * @param array  $fields        The current form fields.
 * @param int    $collection_id The collection post ID.
 * @param string $_ident        The client identifier token (unused in this example).
 * @return array The modified form fields.
 */
add_filter( 'picu_approval_fields', function( $fields, $collection_id, $_ident ) {
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
