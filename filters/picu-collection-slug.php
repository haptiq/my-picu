<?php
/**
 * Define a custom collection base slug.
 */
function my_picu_collection_slug() {
	return 'my-defined-slug';
}

add_filter( 'picu_collection_slug', 'my_picu_collection_slug' );