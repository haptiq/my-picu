<?php
/**
 * Add a "Download Recipients as CSV" button to the picu collection edit screen.
 *
 * Clicking the button generates a CSV with two columns — Client Name and
 * Collection URL — for all existing recipients on the current collection.
 */
add_action( 'admin_footer', function() {
	$screen = get_current_screen();
	if ( $screen && $screen->post_type === 'picu_collection' ) {
		?>
		<script>
		window.copyRecipientsCSV = ( e ) => {
			e.preventDefault();
			const csv = '"Client Name","Collection URL"\n' + Array.from(
				document.querySelectorAll( '.recipient:not(.recipient--new) .recipient__email, .recipient:not(.recipient--new) .recipient__actions a[href*="?ident="]' )
			).reduce( ( acc, el, i, arr ) => i % 2 === 0 ? acc + `"${el.textContent}","${arr[i+1].href}"\n` : acc, '' );
			const blob = new Blob( [csv], { type: 'text/csv' } );
			const url = URL.createObjectURL( blob );
			const a = document.createElement( 'a' );
			a.href = url;
			a.download = 'clients.csv';
			a.click();
			URL.revokeObjectURL( url );
		};
		document.querySelector( '.js-picu-add-client' )?.insertAdjacentHTML(
			'beforebegin',
			'<button class="button" onclick="copyRecipientsCSV(event)" style="margin-left:auto;margin-right:10px">Download Recipients as CSV</button>'
		);
		</script>
		<?php
	}
} );
