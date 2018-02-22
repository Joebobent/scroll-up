<?php // Scroll Up Admin Menu

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add sub-level administrative menu
function scrollup_add_sublevel_menu() {

	add_submenu_page(
		'options-general.php',
		'Scroll Up Settings',
		'Scroll Up',
		'manage_options',
		'scrollup',
		'scrollup_display_settings_page'
	);

}
add_action( 'admin_menu', 'scrollup_add_sublevel_menu');
