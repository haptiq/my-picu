<?php
/**
 * Define custom filenames when copying approved image names
 *
 * This example adds the extension to the filename
 */
function my_picu_approved_filename( $filename, $attachment_id ) {
	// Get the file URL
	$file_url = wp_get_attachment_url( $attachment_id );

	// Get the file extension
	$file_extension = pathinfo( $file_url, PATHINFO_EXTENSION );

	// Add the extension to the filename
	$filename = $filename . '.' . $file_extension;

	// Return the filename
	return $filename;
}

add_filter( 'picu_approved_filename', 'my_picu_approved_filename', 10, 2 );