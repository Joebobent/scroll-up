<?php // Scroll Up - Core Functionality


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}





// Make sure jQuery is Enqueued
function scrollup_enqueue_jquery() {

	// Check if jQuery is already loaded
	if( wp_script_is('jquery') ) {

		// jQuery is loaded, do nothing
	    return;

	} else {

		// Load jQuery
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);

	}

}
add_action('wp_enqueue_scripts', 'scrollup_enqueue_jquery');


// Enque Styles and JS
function scrollup_scripts() {

	wp_enqueue_style( 'scrollup', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/scrollup.css', array(), null, 'screen' );
	wp_enqueue_script( 'scrollup', plugin_dir_url( dirname( __FILE__ ) ) . 'public/js/scrollup.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'scrollup_scripts' );


// Initialize top of page anchor element
function scrollup_create_anchor() {

	// Initialize array from settings page
	$options = get_option( 'scrollup_options', scrollup_options_default() );

	if ( isset( $options['button_speed'] ) && ! empty( $options['button_speed'] ) ) {
		$button_speed = esc_attr( $options['button_speed'] );
	}

	if ( isset( $options['button_size'] ) && ! empty( $options['button_size'] ) ) {
		$button_size = esc_attr( $options['button_size'] );
	}

	if ( isset( $options['button_type'] ) && ! empty( $options['button_type'] ) ) {
		$button_type = esc_attr( $options['button_type'] );
	}

	if ( isset( $options['button_scheme'] ) && ! empty( $options['button_scheme'] ) ) {
		$button_scheme = esc_attr( $options['button_scheme'] );
	}

	if ( isset( $options['button_location'] ) && ! empty( $options['button_location'] ) ) {
		$button_location = esc_attr( $options['button_location'] );
	}

	if ( isset( $options['button_text'] ) && ! empty( $options['button_text'] ) ) {
		$button_text = esc_attr( $options['button_text'] );
	} else {
		$button_text = '';
	}


	// Create Anchor & Button
	echo "<div id='scrollup-anchor' data-scrollup-speed='$button_speed'>";

	echo "<a href='#scrollup-anchor' class='scrollup-button $button_size $button_type $button_scheme $button_location '>$button_text</a>";

	echo "</div>";
}
// Hook element before header loads
add_action( 'get_header', 'scrollup_create_anchor' );




