<?php
/*
Plugin Name:		Scroll Up
Description:		Adds a simple back to top button to your site.
Plugin URI:			https://profiles.wordpress.org/specialk
Contributors:		Stephen Osborn
Author:				Stephen Osborn
Author URI:			https://sco.j-bent.com/
Donate link:		https://j-bent.com/
Tags:				Scroll Up, Back To Top
Version:			1.0
Stable tag:			1.0
Requires at least:	4.5
Tested up to		4.9
Text Domain:		ScrollUp
Domain Path:		/languages
License:			GPL v2 or later
License URI:		https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';

}

// include dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';



// default plugin options
function scrollup_options_default() {

	return array(
		'button_size'    	=> 'medium',
		'button_location'	=> 'bottom-right',
		'button_speed'   	=> '1.5',
		'button_type' 		=> 'Ghost',
		'button_text'  		=> 'Back to top',
		'button_scheme'  	=> 'default',
		// 'button_disable' 	=> false,
	);

}




