<?php
/**
 * Customize the filename of the generated selection text file.
 *
 * The default is "selection-{collection-title}.txt". Return a custom filename
 * to change the name of the downloaded file. The extension determines the
 * file format picu uses, so keep it consistent with the file content.
 *
 * @param string $_file_name    The current filename (unused — this example replaces it entirely).
 * @param int    $_collection_id The collection ID (unused in this example).
 * @return string The modified filename.
 */
add_filter( 'picu_proof_file_name', function( $_file_name, $_collection_id ) {
	return 'my-selection.txt';
}, 10, 2 );
