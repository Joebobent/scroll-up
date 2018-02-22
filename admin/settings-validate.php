<?php // Scroll Up - Validate Settings


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// callback: validate options
function scrollup_callback_validate_options( $input ) {

	// Sanitize button speed
	if ( isset( $input['button_speed'] ) ) {

		$input['button_speed'] = sanitize_text_field( $input['button_speed'] );

	}

	// button size
	$radio_options_size = array(

		'small'  	=> 'Small',
		'medium' 	=> 'Medium',
		'large' 	=> 'Large'

	);
	if ( ! isset( $input['button_size'] ) ) {
		$input['button_size'] = null;
	}

	if ( ! array_key_exists( $input['button_size'], $radio_options_size ) ) {
		$input['button_size'] = null;
	}

	// button type
	$radio_options_type = array(

		'ghost'  	=> 'Ghost (transparent)',
		'solid' 	=> 'Solid'

	);
	if ( ! isset( $input['button_type'] ) ) {
		$input['button_type'] = null;
	}

	if ( ! array_key_exists( $input['button_type'], $radio_options_type ) ) {
		$input['button_type'] = null;
	}

	// custom message
	// if ( isset( $input['scrollup_message'] ) ) {

	// 	$input['scrollup_message'] = wp_kses_post( $input['scrollup_message'] );

	// }

	// button text
	if ( isset( $input['button_text'] ) ) {

		$input['button_text'] = sanitize_text_field( $input['button_text'] );

	}

	// disable button
	// if ( ! isset( $input['button_disable'] ) ) {

	// 	$input['button_disable'] = null;

	// }

	// $input['button_disable'] = ($input['button_disable'] == 1 ? 1 : 0);

	// button scheme
	$select_options = array(

		'dark'   	=> 'Dark',
		'light'     => 'Light',
		'blue'      => 'Ocean Blue',
		'red'   	=> 'Sunrise',
		'brown'    	=> 'Diamond Back',

	);

	if ( ! isset( $input['button_scheme'] ) ) {

		$input['button_scheme'] = null;

	}

	if ( ! array_key_exists( $input['button_scheme'], $select_options ) ) {

		$input['button_scheme'] = null;

	}

	return $input;

}
