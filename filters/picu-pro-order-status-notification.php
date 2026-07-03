<?php
/**
 * Customize the order status message shown to the client when visiting the collection.
 *
 * Fires whenever picu renders the order status block on the collection page.
 * Return a custom HTML string for any status you want to override; return the
 * unchanged $message for all other statuses.
 *
 * Known $status values: `pending`, `processing`, `completed`, `refunded`
 *
 * @param string $message  The current status message HTML.
 * @param int    $order_id The order post ID.
 * @return string The modified status message HTML.
 */
add_filter( 'picu_pro_order_status_notification', function( $message, $order_id ) {
	$status = get_post_status( $order_id );

	if ( $status === 'pending' ) {
		$message = '<span class="order-status__message">We are still waiting for you to send over the payment!</span>';
	}

	return $message;
}, 10, 2 );
