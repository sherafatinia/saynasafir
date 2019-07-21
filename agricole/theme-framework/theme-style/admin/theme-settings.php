<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function agricole_theme_options_general_fields($options, $tab) {
	$defaults = agricole_settings_general_defaults();
	
	if ($tab == 'header') {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_mid_button', 
			'title' => esc_html__('Header Button', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_header_mid_button'] 
		);
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_mid_button_text', 
			'title' => esc_html__('Header Button Text', 'agricole'), 
			'desc' => '', 
			'type' => 'text',
			'std' => $defaults[$tab]['agricole' . '_header_mid_button_text'],
			'class' => ''
		);
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_mid_button_link', 
			'title' => esc_html__('Header Button Link', 'agricole'), 
			'desc' =>  '', 
			'type' => 'text',
			'std' => $defaults[$tab]['agricole' . '_header_mid_button_link'],
			'class' => ''
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'agricole_theme_options_general_fields', 10, 2);



/* Color Settings */
function agricole_theme_options_color_fields($options, $tab) {
	$defaults = agricole_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'agricole' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'agricole'), 
			'desc' => esc_html__('Secondary color for some elements', 'agricole'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	if ($tab == 'header') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'agricole' . '_' . $tab . '_overlaps_bg', 
			'title' => esc_html__('Header Background Color for Overlap', 'agricole'), 
			'desc' => esc_html__('(if header overlaps content)', 'agricole'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['overlaps_bg'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'agricole_theme_options_color_fields', 10, 2);



