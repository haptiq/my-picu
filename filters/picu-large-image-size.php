<?php
/**
 * Override the dimensions of the picu-large image size.
 *
 * picu generates a `picu-large` thumbnail for each uploaded photo. Return a
 * custom width and height array here to change those dimensions. This example
 * sets an effectively unlimited size (10000×10000) to keep the originals.
 *
 * Note: changing this only affects newly uploaded images. Re-upload or
 * regenerate thumbnails for existing photos.
 *
 * @param array $_sizes The current image size dimensions (unused — this example replaces them entirely).
 * @return array Associative array with 'width' and 'height' keys (in pixels).
 */
function my_picu_large_image_size( $_sizes ) {
	return array(
		'width' => 10000,
		'height' => 10000
	);
}

add_filter( 'picu_large_image_size', 'my_picu_large_image_size' );
