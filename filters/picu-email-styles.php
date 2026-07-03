<?php
/**
 * Override individual style values in picu email templates.
 *
 * $styles is an associative array built from the active email theme. Modify
 * individual keys to adjust colors, fonts, or layout without replacing the
 * entire theme. Available keys: max_width, background, background_content,
 * primary_color, border_line, text_color, font_size, font_size_button,
 * button_text, button_text_hover, button_background, button_background_hover,
 * button_text--secondary, button_text_hover--secondary,
 * button_background--secondary, button_background_hover--secondary, link_footer.
 *
 * @param array $styles The current email styles.
 * @return array The modified styles.
 */
add_filter( 'picu_email_styles', function( $styles ) {
	$styles['max_width']   = '700px';
	$styles['font_size']   = '18px';

	return $styles;
} );
