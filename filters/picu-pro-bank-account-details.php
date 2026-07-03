<?php
/**
 * Append custom content to the bank account details block.
 *
 * Fires in two contexts:
 *   'invoice' — the HTML invoice page shown to the client
 *   'email'   — the order-received email sent to the client
 *
 * $details already contains the bank details entered in the picu Pro settings
 * (formatted as HTML). Append to it or replace it entirely.
 *
 * @param string $details   The current bank account details HTML.
 * @param int    $_order_id The order post ID (unused in this example).
 * @param string $context   Either 'invoice' or 'email'.
 * @return string The modified bank account details HTML.
 */
add_filter( 'picu_pro_bank_account_details', function( $details, $_order_id, $context ) {
	if ( $context == 'invoice' ) {
		return $details . '<div style="width: 100%;"><p>Scan the QR code below to pay via mobile banking:</p><img style="max-width: 160px;" src="' . plugins_url( '../', __FILE__ ) . 'assets/qr-code.png" /></div>';
	}

	return $details;
}, 10, 3 );
