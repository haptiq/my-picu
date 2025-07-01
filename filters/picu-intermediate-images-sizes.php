<?php
/**
 * Disable generation of image sizes.
 */
function my_picu_disable_custom_image_sizes( $sizes, $context ) {
	return [];
}

add_filter( 'picu_intermediate_image_sizes', 'my_picu_disable_custom_image_sizes', 10, 2 );
