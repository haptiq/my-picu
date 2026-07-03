<?php
/**
 * Customize the filename used when copying approved image filenames.
 *
 * This example appends the original file extension to the filename, e.g.
 * "IMG_1234" becomes "IMG_1234.jpg".
 *
 * @param string $filename      The current filename (without extension by default).
 * @param int    $attachment_id The attachment post ID.
 * @return string The modified filename.
 */
function my_picu_approved_filename( $filename, $attachment_id ) {
	$file_url = wp_get_attachment_url( $attachment_id );
	$file_extension = pathinfo( $file_url, PATHINFO_EXTENSION );

	return $filename . '.' . $file_extension;
}

add_filter( 'picu_approved_filename', 'my_picu_approved_filename', 10, 2 );
