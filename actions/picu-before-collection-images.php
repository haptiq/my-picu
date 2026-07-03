<?php
/**
 * Display custom content above the collection image grid.
 *
 * This example injects a full-width banner fixed to the top of the page.
 * The body margin-top compensates for the banner height so no images are
 * hidden behind it.
 */
function my_picu_collection_display_before_images() {
	echo '<style>body { margin-top: 56px; }</style><div class="pink" style="position: absolute; top: 0; left: 0; padding: 1rem; width: 100vw; height: 56px; background-color: #f0f; color: #fff;">Custom content…</div>';
}

add_action( 'picu_before_collection_images', 'my_picu_collection_display_before_images' );
