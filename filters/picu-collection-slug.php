<?php
/**
 * Set a custom base slug for picu collection URLs.
 *
 * By default picu uses "picu-collection" as the URL base. Return a custom
 * string here to use something else, e.g. "galleries" or "proofing".
 * Flush permalinks (Settings → Permalinks → Save) after changing this.
 *
 * @return string The desired URL slug.
 */
function my_picu_collection_slug() {
	return 'my-defined-slug';
}

add_filter( 'picu_collection_slug', 'my_picu_collection_slug' );
