<?php
/**
 * Prevent picu from generating a specific intermediate image size.
 *
 * This example removes the `picu-large` size. Available sizes are:
 * picu-large, picu-medium, picu-small, picu-thumbnail.
 *
 * Runs at priority 11, after picu has built the default sizes list at priority 10,
 * so the unset is guaranteed to take effect.
 *
 * @param array  $sizes    The image sizes picu will generate (keyed by size name).
 * @param string $_context Either 'proofing' or 'delivery' (unused — remove a size regardless of context).
 * @return array The modified sizes array.
 */
function my_picu_customize_images_sizes( $sizes, $_context ) {
	unset( $sizes['picu-large'] );
	return $sizes;
}

add_filter( 'picu_intermediate_image_sizes', 'my_picu_customize_images_sizes', 11, 2 );
