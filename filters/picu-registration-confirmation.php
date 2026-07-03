<?php
/**
 * Customize the confirmation message shown after a client registers.
 *
 * Displayed after the client submits their name/email on the registration
 * modal. The default tells them to check their inbox for an access link.
 * Return custom HTML to tailor the message to your workflow.
 *
 * @param string $_output The current confirmation HTML (unused — this example replaces it entirely).
 * @return string The modified confirmation HTML.
 */
add_filter( 'picu_registration_confirmation', function( $_output ) {
	return '<h1>You\'re all set!</h1><p>We\'ve sent your access link to your email address. Please check your inbox.</p>';
} );
