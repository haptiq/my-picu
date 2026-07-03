<?php
/**
 * Set the default message body pre-filled in the proofing email compose box.
 *
 * Shown when sending a new collection to a client for selection. The default
 * is a generic "please select your photos" message. Return a custom string
 * to match your studio's tone of voice.
 *
 * Note: HTML entities like &#10; represent newlines in the textarea.
 *
 * @param string $_message  The current default message (unused — this example replaces it entirely).
 * @param string $user_name The collection author's display name, used as the sign-off.
 * @return string The modified default message.
 */
add_filter( 'picu_client_mail_message', function( $_message, $user_name ) {
	return 'Dear Client,&#10;&#10;Your gallery is ready! Please take your time browsing the images and send us your selection whenever you\'re ready.&#10;&#10;Thank you,&#10;' . $user_name;
}, 10, 2 );
