<?php
/**
 * Change the capability required to access picu in the WordPress admin.
 *
 * By default picu requires `manage_options` (admins only). Return a different
 * capability here to open it up to other roles, e.g. `edit_posts` for editors.
 *
 * @return string A WordPress capability string.
 */
function my_picu_custom_capability() {
	return 'edit_posts';
}

add_filter( 'picu_capability', 'my_picu_custom_capability' );
