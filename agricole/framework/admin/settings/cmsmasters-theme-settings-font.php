<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function agricole_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'agricole');
	$tabs['link'] = esc_attr__('Links', 'agricole');
	$tabs['nav'] = esc_attr__('Navigation', 'agricole');
	$tabs['heading'] = esc_attr__('Heading', 'agricole');
	$tabs['other'] = esc_attr__('Other', 'agricole');
	$tabs['google'] = esc_attr__('Google Fonts', 'agricole');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function agricole_options_font_sections() {
	$tab = agricole_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'agricole');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'agricole');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'agricole');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'agricole');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'agricole');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'agricole');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function agricole_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = agricole_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = agricole_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'agricole' . '_link_font', 
			'title' => esc_html__('Links Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'agricole' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'agricole'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['agricole' . '_link_hover_decoration'], 
			'choices' => agricole_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'agricole' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'agricole' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'agricole' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'agricole' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'agricole' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'agricole' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'agricole' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'agricole' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'agricole' . '_button_font', 
			'title' => esc_html__('Button Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'agricole' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'agricole' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'agricole' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'agricole'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['agricole' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'agricole' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'agricole'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['agricole' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'agricole' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'agricole'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'agricole') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'agricole') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'agricole') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'agricole') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'agricole') . '|' . 'greek', 
				esc_html__('Greek Extended', 'agricole') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'agricole') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'agricole') . '|' . 'japanese', 
				esc_html__('Korean', 'agricole') . '|' . 'korean', 
				esc_html__('Thai', 'agricole') . '|' . 'thai', 
				esc_html__('Bengali', 'agricole') . '|' . 'bengali', 
				esc_html__('Devanagari', 'agricole') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'agricole') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'agricole') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'agricole') . '|' . 'hebrew', 
				esc_html__('Kannada', 'agricole') . '|' . 'kannada', 
				esc_html__('Khmer', 'agricole') . '|' . 'khmer', 
				esc_html__('Malayalam', 'agricole') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'agricole') . '|' . 'myanmar', 
				esc_html__('Oriya', 'agricole') . '|' . 'oriya', 
				esc_html__('Sinhala', 'agricole') . '|' . 'sinhala', 
				esc_html__('Tamil', 'agricole') . '|' . 'tamil', 
				esc_html__('Telugu', 'agricole') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

