<?php
/**
 * Disable random slug generation for picu collections.
 */
add_filter( 'picu_collection_do_random_slug', '__return_false' );