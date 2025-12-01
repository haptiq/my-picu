<?php

function my_picu_disable_display_client_invoice( $allow_access, $order_id ) {
	return false;
}

add_filter( 'picu_pro_display_client_invoice', 'my_picu_disable_display_client_invoice', 10, 2 );