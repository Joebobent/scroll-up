<?php // Scroll Up - Settings Callbacks


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// callback: general section
function scrollup_callback_section_general() {

	echo '<p>These settings enable you to customize the general options.</p>';

}


// callback: styles section
function scrollup_callback_section_styles() {

	echo '<p>These settings enable you to customize the styles.</p>';

}


// callback: text field
function scrollup_callback_field_text( $args ) {

	$options = get_option( 'scrollup_options', scrollup_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	echo '<input id="scrollup_options_'. $id .'" name="scrollup_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="scrollup_options_'. $id .'">'. $label .'</label>';

}


// callback: radio field
function scrollup_callback_field_radio_size( $args ) {

	$options = get_option( 'scrollup_options', scrollup_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	$radio_options = array(

		'small'  	=> 'Small',
		'medium' 	=> 'Medium',
		'large' 	=> 'Large'

	);

	foreach ( $radio_options as $value => $label ) {

		$checked = checked( $selected_option === $value, true, false );

		echo '<label><input name="scrollup_options['. $id .']" type="radio" value="'. $value .'"'. $checked .'> ';
		echo '<span>'. $label .'</span></label><br />';

	}
}

// callback: radio field
function scrollup_callback_field_radio_type( $args ) {

	$options = get_option( 'scrollup_options', scrollup_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	$radio_options = array(

		'ghost'  	=> 'Ghost (transparent)',
		'solid' 	=> 'Solid'

	);

	foreach ( $radio_options as $value => $label ) {

		$checked = checked( $selected_option === $value, true, false );

		echo '<label><input name="scrollup_options['. $id .']" type="radio" value="'. $value .'"'. $checked .'> ';
		echo '<span>'. $label .'</span></label><br />';

	}
}


// callback: textarea field
// function scrollup_callback_field_textarea( $args ) {

// 	$options = get_option( 'scrollup_options', scrollup_options_default() );

// 	$id    = isset( $args['id'] )    ? $args['id']    : '';
// 	$label = isset( $args['label'] ) ? $args['label'] : '';

// 	$allowed_tags = wp_kses_allowed_html( 'post' );

// 	$value = isset( $options[$id] ) ? wp_kses( stripslashes_deep( $options[$id] ), $allowed_tags ) : '';

// 	echo '<textarea id="scrollup_options_'. $id .'" name="scrollup_options['. $id .']" rows="5" cols="50">'. $value .'</textarea><br />';
// 	echo '<label for="scrollup_options_'. $id .'">'. $label .'</label>';


// }


// callback: checkbox field
function scrollup_callback_field_checkbox( $args ) {

	$options = get_option( 'scrollup_options', scrollup_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$checked = isset( $options[$id] ) ? checked( $options[$id], 1, false ) : '';

	echo '<input id="scrollup_options_'. $id .'" name="scrollup_options['. $id .']" type="checkbox" value="1"'. $checked .'> ';
	echo '<label for="scrollup_options_'. $id .'">'. $label .'</label>';

}


// callback: select field
function scrollup_callback_field_select_location( $args ) {

	$options = get_option( 'scrollup_options', scrollup_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	$select_options = array(

		'bottom-right'	=> 'Bottom Right',
		'bottom-left'  	=> 'Bottom Left',
		'top-right'   	=> 'Top Right',
		'top-left'  	=> 'Top Left'

	);

	echo '<select id="scrollup_options_'. $id .'" name="scrollup_options['. $id .']">';

	foreach ( $select_options as $value => $option ) {

		$selected = selected( $selected_option === $value, true, false );

		echo '<option value="'. $value .'"'. $selected .'>'. $option .'</option>';

	}

	echo '</select> <label for="scrollup_options_'. $id .'">'. $label .'</label>';

}


// callback: select field
function scrollup_callback_field_select_scheme( $args ) {

	$options = get_option( 'scrollup_options', scrollup_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	$select_options = array(

		'dark'   	=> 'Dark',
		'light'     => 'Light',
		'blue'      => 'Ocean Blue',
		'red'   	=> 'Sunrise',
		'brown'    	=> 'Diamond Back',

	);

	echo '<select id="scrollup_options_'. $id .'" name="scrollup_options['. $id .']">';

	foreach ( $select_options as $value => $option ) {

		$selected = selected( $selected_option === $value, true, false );

		echo '<option value="'. $value .'"'. $selected .'>'. $option .'</option>';

	}

	echo '</select> <label for="scrollup_options_'. $id .'">'. $label .'</label>';

}
