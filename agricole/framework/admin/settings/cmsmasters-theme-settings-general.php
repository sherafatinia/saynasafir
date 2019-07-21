<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function agricole_options_general_tabs() {
	$cmsmasters_option = agricole_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'agricole');
	
	if ($cmsmasters_option['agricole' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'agricole');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'agricole');
	}
	
	$tabs['header'] = esc_attr__('Header', 'agricole');
	$tabs['content'] = esc_attr__('Content', 'agricole');
	$tabs['footer'] = esc_attr__('Footer', 'agricole');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function agricole_options_general_sections() {
	$tab = agricole_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'agricole');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'agricole');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'agricole');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'agricole');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'agricole');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'agricole');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function agricole_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = agricole_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = agricole_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'agricole') . '|liquid', 
				esc_html__('Boxed', 'agricole') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'agricole') . '|image', 
				esc_html__('Text', 'agricole') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'agricole'), 
			'desc' => esc_html__('Choose your website logo image.', 'agricole'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['agricole' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'agricole'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'agricole'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['agricole' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'agricole'), 
			'desc' => esc_html__('enable', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'agricole'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['agricole' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'agricole' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'agricole'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['agricole' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'agricole' . '_bg_col', 
			'title' => esc_html__('Background Color', 'agricole'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['agricole' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'agricole' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'agricole' . '_bg_img', 
			'title' => esc_html__('Background Image', 'agricole'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'agricole'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['agricole' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'agricole' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'agricole') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'agricole') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'agricole') . '|repeat-y', 
				esc_html__('Repeat', 'agricole') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'agricole' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'agricole'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['agricole' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'agricole') . '|top left', 
				esc_html__('Top Center', 'agricole') . '|top center', 
				esc_html__('Top Right', 'agricole') . '|top right', 
				esc_html__('Center Left', 'agricole') . '|center left', 
				esc_html__('Center Center', 'agricole') . '|center center', 
				esc_html__('Center Right', 'agricole') . '|center right', 
				esc_html__('Bottom Left', 'agricole') . '|bottom left', 
				esc_html__('Bottom Center', 'agricole') . '|bottom center', 
				esc_html__('Bottom Right', 'agricole') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'agricole' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'agricole') . '|scroll', 
				esc_html__('Fixed', 'agricole') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'agricole' . '_bg_size', 
			'title' => esc_html__('Background Size', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'agricole') . '|auto', 
				esc_html__('Cover', 'agricole') . '|cover', 
				esc_html__('Contain', 'agricole') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'agricole' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'agricole'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => agricole_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'agricole'), 
			'desc' => esc_html__('enable', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'agricole'), 
			'desc' => esc_html__('enable', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'agricole'), 
			'desc' => esc_html__('pixels', 'agricole'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['agricole' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'agricole'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'agricole') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['agricole' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'agricole') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'agricole') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'agricole') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'agricole') . '|default', 
				esc_html__('Compact Style Left Navigation', 'agricole') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'agricole') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'agricole') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'agricole'), 
			'desc' => esc_html__('pixels', 'agricole'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['agricole' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'agricole'), 
			'desc' => esc_html__('pixels', 'agricole'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['agricole' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_search', 
			'title' => esc_html__('Header Search', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'agricole') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'agricole') . '|social', 
				esc_html__('Header Custom HTML', 'agricole') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'agricole' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'agricole'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'agricole') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['agricole' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'agricole'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'agricole'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['agricole' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'agricole'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'agricole'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['agricole' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'agricole'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'agricole'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['agricole' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'agricole'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'agricole'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['agricole' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'agricole') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'agricole') . '|left', 
				esc_html__('Right', 'agricole') . '|right', 
				esc_html__('Center', 'agricole') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'agricole'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['agricole' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'agricole'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'agricole'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['agricole' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'agricole') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'agricole') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'agricole') . '|repeat-y', 
				esc_html__('Repeat', 'agricole') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'agricole') . '|scroll', 
				esc_html__('Fixed', 'agricole') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'agricole') . '|auto', 
				esc_html__('Cover', 'agricole') . '|cover', 
				esc_html__('Contain', 'agricole') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'agricole'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['agricole' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'agricole'), 
			'desc' => esc_html__('pixels', 'agricole'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['agricole' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'agricole'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['agricole' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'agricole'), 
			'desc' => esc_html__('show', 'agricole') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'agricole' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'agricole'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['agricole' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'agricole'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['agricole' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'agricole') . '|default', 
				esc_html__('Small', 'agricole') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'agricole') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'agricole') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'agricole') . '|social', 
				esc_html__('Custom HTML', 'agricole') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'agricole'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'agricole'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['agricole' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'agricole'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'agricole'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['agricole' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'agricole'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'agricole') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['agricole' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'agricole' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

