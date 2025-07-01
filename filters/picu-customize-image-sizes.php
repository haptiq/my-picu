<?php
/**
 * Do not generate large picu thumbnail.
 *
 * The following sizes are available: picu-large, picu-medium, picu-small, picu-thumbnail
 */
function my_picu_customize_images_sizes( $sizes ) {
	unset( $sizes['picu-large'] );
	return $sizes;
}

add_filter( 'picu_intermediate_image_sizes', 'my_picu_customize_images_sizes', 11, 3 );