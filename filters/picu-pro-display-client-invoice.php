<?php
/**
 * Conditionally show the invoice link to clients based on payment method.
 *
 * This example only shows the invoice when the order was paid by bank transfer.
 * For a simpler "always hide" approach, see picu-pro-client-invoice-access.php
 * instead. Do not enable both files at the same time.
 *
 * @param bool $use_invoice Whether to show the invoice link to the client.
 * @param int  $order_id    The order post ID.
 * @return bool
 */
add_filter( 'picu_pro_display_client_invoice', function( $use_invoice, $order_id ) {
	$use_invoice = false;

	$payment_method = get_post_meta( $order_id, '_picu_payment_provider', true );
	if ( $payment_method == 'bank-transfer' ) {
		$use_invoice = true;
	}

	return $use_invoice;
}, 10, 2 );
