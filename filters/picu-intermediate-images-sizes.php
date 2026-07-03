<?php
/**
 * Disable all picu intermediate image size generation entirely.
 *
 * Return an empty array to prevent picu from creating any custom image sizes
 * when a photo is uploaded to a collection. Use this if you handle image
 * resizing yourself or want to keep only the original file.
 *
 * To remove only specific sizes instead, see picu-customize-image-sizes.php.
 *
 * @param array  $_sizes   The image sizes picu will generate (unused — this example disables all of them).
 * @param string $_context Either 'proofing' or 'delivery' (unused).
 * @return array An empty array disables all custom size generation.
 */
function my_picu_disable_custom_image_sizes( $_sizes, $_context ) {
	return [];
}

add_filter( 'picu_intermediate_image_sizes', 'my_picu_disable_custom_image_sizes', 10, 2 );
