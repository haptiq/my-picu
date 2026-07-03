<?php
/**
 * Disable random slug generation for picu collections.
 *
 * By default picu appends a random string to each collection URL to make it
 * unguessable. Return false here if you prefer plain, predictable slugs.
 */
add_filter( 'picu_collection_do_random_slug', '__return_false' );
