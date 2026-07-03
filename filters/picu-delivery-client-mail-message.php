<?php
/**
 * Set the default message body pre-filled in the delivery email compose box.
 *
 * Shown when sending a delivery collection to a client. The default is a
 * generic "your images are ready to download" message. Return a custom string
 * to match your studio's tone of voice.
 *
 * Note: HTML entities like &#10; represent newlines in the textarea.
 *
 * @param string $_message  The current default message (unused — this example replaces it entirely).
 * @param string $user_name The collection author's display name, used as the sign-off.
 * @return string The modified default message.
 */
add_filter( 'picu_delivery_client_mail_message', function( $_message, $user_name ) {
	return 'Dear Client,&#10;&#10;Your edited images are ready for download! Simply follow the link below to access them.&#10;&#10;Thank you for choosing us,&#10;' . $user_name;
}, 10, 2 );
