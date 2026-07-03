<?php
/**
 * Prevent clients from seeing the invoice link entirely.
 *
 * Return false to hide the invoice link for all orders. This is the simple
 * "always off" alternative. For conditional logic — e.g. show the invoice
 * only for bank-transfer orders — see picu-pro-display-client-invoice.php
 * instead. Do not enable both files at the same time.
 *
 * @param bool $_allow_access Whether to show the invoice link to the client (unused — always returns false).
 * @param int  $_order_id    The order post ID (unused in this example).
 * @return bool
 */
function my_picu_disable_display_client_invoice( $_allow_access, $_order_id ) {
	return false;
}

add_filter( 'picu_pro_display_client_invoice', 'my_picu_disable_display_client_invoice', 10, 2 );
