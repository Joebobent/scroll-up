<?php // Scroll Up - Settings Register


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// register plugin settings
function scrollup_register_settings() {

	/*

	register_setting(
		string   $option_group,
		string   $option_name,
		callable $sanitize_callback
	);

	*/

	register_setting(
		'scrollup_options',
		'scrollup_options',
		'scrollup_callback_validate_options'
	);

	/*

	add_settings_section(
		string   $id,
		string   $title,
		callable $callback,
		string   $page
	);

	*/

	add_settings_section(
		'scrollup_section_general',
		'Set General Options',
		'scrollup_callback_section_general',
		'scrollup'
	);

	add_settings_section(
		'scrollup_section_styles',
		'Customize Styles',
		'scrollup_callback_section_styles',
		'scrollup'
	);


	/*

	add_settings_field(
    	string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

	add_settings_field(
		'button_size',
		'Button Size',
		'scrollup_callback_field_radio_size',
		'scrollup',
		'scrollup_section_general',
		[ 'id' => 'button_size', 'label' => 'Size of the button.' ]
	);

	add_settings_field(
		'button_location',
		'Button Location',
		'scrollup_callback_field_select_location',
		'scrollup',
		'scrollup_section_general',
		[ 'id' => 'button_location', 'label' => 'Location of button.' ]
	);

	add_settings_field(
		'button_speed',
		'Button Speed',
		'scrollup_callback_field_text',
		'scrollup',
		'scrollup_section_general',
		[ 'id' => 'button_speed', 'label' => 'Speed at which page scrolls to top. (1 = 100ms)' ]
	);

	add_settings_field(
		'button_type',
		'Type of button',
		'scrollup_callback_field_radio_type',
		'scrollup',
		'scrollup_section_styles',
		[ 'id' => 'button_type', 'label' => 'Button style type.' ]
	);

	add_settings_field(
		'button_text',
		'Button Text',
		'scrollup_callback_field_text',
		'scrollup',
		'scrollup_section_styles',
		[ 'id' => 'button_text', 'label' => 'Text under button.' ]
	);

	add_settings_field(
		'button_scheme',
		'Button Scheme',
		'scrollup_callback_field_select_scheme',
		'scrollup',
		'scrollup_section_styles',
		[ 'id' => 'button_scheme', 'label' => 'Color scheme of button' ]
	);


}
add_action( 'admin_init', 'scrollup_register_settings' );
