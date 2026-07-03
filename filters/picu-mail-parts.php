<?php
/**
 * Customize the email sent to the client after a successful order.
 *
 * $mail_parts is an array of content blocks. Each block has a 'type' key
 * ('text', 'button', etc.) and a 'text' or 'content' key with the HTML.
 * Reset the array and rebuild it to replace the default email content entirely.
 *
 * Available $mail_context values include: 'client_order_received',
 * 'photographer_order_received', 'client_collection_sent', and others.
 *
 * @param array  $mail_parts    The email content blocks.
 * @param string $mail_context  Identifier for which email is being sent.
 * @param int    $collection_id The collection post ID.
 * @return array The modified email content blocks.
 */
function my_picu_change_email_content( $mail_parts, $mail_context, $collection_id ) {
	if ( $mail_context == 'client_order_received' && class_exists( 'Picu_Emails' ) ) {
		$picu_mail = new Picu_Emails( $collection_id );

		// Reset mail parts and replace with custom content.
		$mail_parts = [];
		$mail_parts[0] = [
			'type' => 'text',
			'text' => $picu_mail->text_to_html( "Thank you for your order!\nYour order number is $collection_id.\nI will be in touch soon with the Tax Invoice and Download link." )
		];
	}

	return $mail_parts;
}

add_filter( 'picu_mail_parts', 'my_picu_change_email_content', 10, 3 );
