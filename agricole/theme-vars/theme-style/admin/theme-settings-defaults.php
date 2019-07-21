<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('agricole_settings_general_defaults')) {

function agricole_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'agricole' . '_theme_layout' => 		'liquid', 
			'agricole' . '_logo_type' => 			'image', 
			'agricole' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'agricole' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'agricole' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Agricole', 
			'agricole' . '_logo_subtitle' => 		'', 
			'agricole' . '_logo_custom_color' => 	0, 
			'agricole' . '_logo_title_color' => 	'', 
			'agricole' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'agricole' . '_bg_col' => 			'#ffffff', 
			'agricole' . '_bg_img_enable' => 	0, 
			'agricole' . '_bg_img' => 			'', 
			'agricole' . '_bg_rep' => 			'no-repeat', 
			'agricole' . '_bg_pos' => 			'top center', 
			'agricole' . '_bg_att' => 			'scroll', 
			'agricole' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'agricole' . '_fixed_header' => 				1, 
			'agricole' . '_header_overlaps' => 				0, 
			'agricole' . '_header_top_line' => 				0, 
			'agricole' . '_header_top_height' => 			'40', 
			'agricole' . '_header_top_line_short_info' => 	'', 
			'agricole' . '_header_top_line_add_cont' => 	'social', 
			'agricole' . '_header_styles' => 				'default', 
			'agricole' . '_header_mid_height' => 			'135', 
			'agricole' . '_header_bot_height' => 			'68', 
			'agricole' . '_header_search' => 				0, 
			'agricole' . '_header_add_cont' => 				'social', 
			'agricole' . '_header_add_cont_cust_html' => 	'', 
			'agricole' . '_header_mid_button' => 			0, 
			'agricole' . '_header_mid_button_text' => 		'', 
			'agricole' . '_header_mid_button_link' => 		'' 
		), 
		'content' => array( 
			'agricole' . '_layout' => 					'r_sidebar', 
			'agricole' . '_archives_layout' => 			'r_sidebar', 
			'agricole' . '_search_layout' => 			'r_sidebar', 
			'agricole' . '_other_layout' => 			'r_sidebar', 
			'agricole' . '_heading_alignment' => 		'left', 
			'agricole' . '_heading_scheme' => 			'default', 
			'agricole' . '_heading_bg_image_enable' => 	0, 
			'agricole' . '_heading_bg_image' => 		'', 
			'agricole' . '_heading_bg_repeat' => 		'no-repeat', 
			'agricole' . '_heading_bg_attachment' => 	'scroll', 
			'agricole' . '_heading_bg_size' => 			'cover', 
			'agricole' . '_heading_bg_color' => 		'', 
			'agricole' . '_heading_height' => 			'180', 
			'agricole' . '_breadcrumbs' => 				1, 
			'agricole' . '_bottom_scheme' => 			'footer', 
			'agricole' . '_bottom_sidebar' => 			0, 
			'agricole' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'agricole' . '_footer_scheme' => 				'footer', 
			'agricole' . '_footer_type' => 					'small', 
			'agricole' . '_footer_additional_content' => 	'social', 
			'agricole' . '_footer_logo' => 					1, 
			'agricole' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'agricole' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'agricole' . '_footer_nav' => 					1, 
			'agricole' . '_footer_social' => 				1, 
			'agricole' . '_footer_html' => 					'', 
			'agricole' . '_footer_copyright' => 			'Agricole' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'agricole') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('agricole_settings_font_defaults')) {

function agricole_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'agricole' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'agricole' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'agricole' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'agricole' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'15', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'agricole' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'agricole' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'36', 
				'line_height' => 		'44', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'agricole' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'26', 
				'line_height' => 		'34', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'agricole' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'agricole' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'agricole' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'agricole' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'15', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'agricole' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'15', 
				'line_height' => 		'44', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'agricole' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'agricole' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'agricole' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Arimo:400,400i,700,700i', 
				'font_size' => 			'24', 
				'line_height' => 		'36', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'google' => array( 
			'agricole' . '_google_web_fonts' => array( 
				'Arimo:400,400i,700,700i|Arimo', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two',
			) 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#919191', 
		'#4f4f4f', 
		'#adaaaa', 
		'#342828', 
		'#ffffff', 
		'#f9f9fa', 
		'#d6d6d6', 
		'#fe2f41' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('agricole_color_schemes_defaults')) {

function agricole_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#6d6565', 
			'link' => 		'#4f4f4f', 
			'hover' => 		'#adaaaa', 
			'heading' => 	'#342828', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f9f9fa', 
			'border' => 	'#d6d6d6', 
			'secondary' => 	'#fe2f41' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#919191', 
			'mid_link' => 		'#4f4f4f', 
			'mid_hover' => 		'#8bd25a', 
			'mid_bg' => 		'#ffffff', 
			'mid_bg_scroll' => 	'#ffffff', 
			'mid_border' => 	'rgba(255,255,255,0)', 
			'bot_color' => 		'#919191', 
			'bot_link' => 		'#4f4f4f', 
			'bot_hover' => 		'#8bd25a', 
			'bot_bg' => 		'#ffffff', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'rgba(255,255,255,0)', 
			'overlaps_bg' =>	'rgba(255,255,255,0)'  
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#adaaaa', 
			'title_link_hover' => 		'#8bd25a', 
			'title_link_current' => 	'#342828', 
			'title_link_subtitle' => 	'#d6d6d6', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#adaaaa', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#d2d2d8', 
			'dropdown_link' => 			'#878383', 
			'dropdown_link_hover' => 	'#6cc331', 
			'dropdown_link_subtitle' => '#adaaaa', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.3)', 
			'link' => 					'rgba(255,255,255,0.6)', 
			'hover' => 					'#ffffff', 
			'bg' => 					'#1d2023', 
			'border' => 				'rgba(255,255,255,0.1)', 
			'title_link' => 			'rgba(255,255,255,0.6)', 
			'title_link_hover' => 		'#ffffff', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#2e3035', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'rgba(255,255,255,0.5)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'rgba(255,255,255,0.6)', 
			'link' => 		'#ffffff', 
			'hover' => 		'rgba(255,255,255,0.3)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#421d32', 
			'alternate' => 	'#421d32', 
			'border' => 	'rgba(255,255,255,0.2)', 
			'secondary' => 	'#f15039' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'rgba(255,255,255,0.35)', 
			'link' => 		'rgba(255,255,255,0.35)', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#262626', 
			'alternate' => 	'#ffffff', 
			'border' => 	'rgba(255,255,255,0.2)', 
			'secondary' => 	'#f15039' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'rgba(255,255,255,0.55)', 
			'link' => 		'#ffffff', 
			'hover' => 		'#f15039', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#313131', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4', 
			'secondary' => 	'#ffffff' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#ededed', 
			'link' => 		'rgba(255,255,255,0.7)', 
			'hover' => 		'rgba(255,255,255,0.9)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#fbfbfb', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4', 
			'secondary' => 	'#f15039' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('agricole_settings_element_defaults')) {

function agricole_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'agricole' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'agricole' . '_social_icons' => array( 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'agricole') . '|true||', 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'agricole') . '|true||', 
				'cmsmasters-icon-custom-instagram|#|' . esc_html__('Instagram', 'agricole') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'agricole' . '_ilightbox_skin' => 					'dark', 
			'agricole' . '_ilightbox_path' => 					'vertical', 
			'agricole' . '_ilightbox_infinite' => 				0, 
			'agricole' . '_ilightbox_aspect_ratio' => 			1, 
			'agricole' . '_ilightbox_mobile_optimizer' => 		1, 
			'agricole' . '_ilightbox_max_scale' => 				1, 
			'agricole' . '_ilightbox_min_scale' => 				0.2, 
			'agricole' . '_ilightbox_inner_toolbar' => 			0, 
			'agricole' . '_ilightbox_smart_recognition' => 		0, 
			'agricole' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'agricole' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'agricole' . '_ilightbox_controls_toolbar' => 		1, 
			'agricole' . '_ilightbox_controls_arrows' => 		0, 
			'agricole' . '_ilightbox_controls_fullscreen' => 	1, 
			'agricole' . '_ilightbox_controls_thumbnail' => 	1, 
			'agricole' . '_ilightbox_controls_keyboard' => 		1, 
			'agricole' . '_ilightbox_controls_mousewheel' => 	1, 
			'agricole' . '_ilightbox_controls_swipe' => 		1, 
			'agricole' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'agricole' . '_sitemap_nav' => 			1, 
			'agricole' . '_sitemap_categs' => 		1, 
			'agricole' . '_sitemap_tags' => 		1, 
			'agricole' . '_sitemap_month' => 		1, 
			'agricole' . '_sitemap_pj_categs' => 	1, 
			'agricole' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'agricole' . '_error_color' => 				'#313131', 
			'agricole' . '_error_bg_color' => 			'#ffffff', 
			'agricole' . '_error_bg_img_enable' => 		0, 
			'agricole' . '_error_bg_image' => 			'', 
			'agricole' . '_error_bg_rep' => 			'no-repeat', 
			'agricole' . '_error_bg_pos' => 			'top center', 
			'agricole' . '_error_bg_att' => 			'scroll', 
			'agricole' . '_error_bg_size' => 			'cover', 
			'agricole' . '_error_search' => 			1, 
			'agricole' . '_error_sitemap_button' =>		1, 
			'agricole' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'agricole' . '_custom_css' => 			'', 
			'agricole' . '_custom_js' => 			'', 
			'agricole' . '_gmap_api_key' => 		'', 
			'agricole' . '_api_key' => 				'', 
			'agricole' . '_api_secret' => 			'', 
			'agricole' . '_access_token' => 		'', 
			'agricole' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'agricole' . '_recaptcha_public_key' => 	'', 
			'agricole' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('agricole_settings_single_defaults')) {

function agricole_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'agricole' . '_blog_post_layout' => 		'r_sidebar', 
			'agricole' . '_blog_post_title' => 			1, 
			'agricole' . '_blog_post_date' => 			1, 
			'agricole' . '_blog_post_cat' => 			1, 
			'agricole' . '_blog_post_author' => 		1, 
			'agricole' . '_blog_post_comment' => 		1, 
			'agricole' . '_blog_post_tag' => 			1, 
			'agricole' . '_blog_post_like' => 			1, 
			'agricole' . '_blog_post_nav_box' => 		1, 
			'agricole' . '_blog_post_nav_order_cat' => 	0, 
			'agricole' . '_blog_post_share_box' => 		1, 
			'agricole' . '_blog_post_author_box' => 	1, 
			'agricole' . '_blog_more_posts_box' => 		'popular', 
			'agricole' . '_blog_more_posts_count' => 	'3', 
			'agricole' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'agricole' . '_portfolio_project_title' => 			1, 
			'agricole' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'agricole'), 
			'agricole' . '_portfolio_project_date' => 			1, 
			'agricole' . '_portfolio_project_cat' => 			1, 
			'agricole' . '_portfolio_project_author' => 		1, 
			'agricole' . '_portfolio_project_comment' => 		0, 
			'agricole' . '_portfolio_project_tag' => 			0, 
			'agricole' . '_portfolio_project_like' => 			1, 
			'agricole' . '_portfolio_project_link' => 			0, 
			'agricole' . '_portfolio_project_share_box' => 		1, 
			'agricole' . '_portfolio_project_nav_box' => 		1, 
			'agricole' . '_portfolio_project_nav_order_cat' => 	0, 
			'agricole' . '_portfolio_project_author_box' => 	1, 
			'agricole' . '_portfolio_more_projects_box' => 		'popular', 
			'agricole' . '_portfolio_more_projects_count' => 	'4', 
			'agricole' . '_portfolio_more_projects_pause' => 	'5', 
			'agricole' . '_portfolio_project_slug' => 			'project', 
			'agricole' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'agricole' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'agricole' . '_profile_post_title' => 			1, 
			'agricole' . '_profile_post_details_title' => 	esc_html__('Profile details', 'agricole'), 
			'agricole' . '_profile_post_cat' => 			1, 
			'agricole' . '_profile_post_comment' => 		1, 
			'agricole' . '_profile_post_like' => 			1, 
			'agricole' . '_profile_post_nav_box' => 		1, 
			'agricole' . '_profile_post_nav_order_cat' => 	0, 
			'agricole' . '_profile_post_share_box' => 		1, 
			'agricole' . '_profile_post_slug' => 			'profile', 
			'agricole' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('agricole_project_puzzle_proportion')) {

function agricole_project_puzzle_proportion() {
	return 0.7069;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('agricole_get_image_thumbnail_list')) {

function agricole_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		75, 
			'height' => 	75, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'agricole') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	366, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'agricole') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	410, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'agricole') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'agricole') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	575, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'agricole') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'agricole') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	770, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'agricole') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	820, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'agricole') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'agricole') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('agricole_project_labels')) {

function agricole_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'agricole'), 
		'singular_name' => 			esc_html__('Project', 'agricole'), 
		'menu_name' => 				esc_html__('Projects', 'agricole'), 
		'all_items' => 				esc_html__('All Projects', 'agricole'), 
		'add_new' => 				esc_html__('Add New', 'agricole'), 
		'add_new_item' => 			esc_html__('Add New Project', 'agricole'), 
		'edit_item' => 				esc_html__('Edit Project', 'agricole'), 
		'new_item' => 				esc_html__('New Project', 'agricole'), 
		'view_item' => 				esc_html__('View Project', 'agricole'), 
		'search_items' => 			esc_html__('Search Projects', 'agricole'), 
		'not_found' => 				esc_html__('No projects found', 'agricole'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'agricole') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'agricole_project_labels');


if (!function_exists('agricole_pj_categs_labels')) {

function agricole_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'agricole'), 
		'singular_name' => 			esc_html__('Project Category', 'agricole') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'agricole_pj_categs_labels');


if (!function_exists('agricole_pj_tags_labels')) {

function agricole_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'agricole'), 
		'singular_name' => 			esc_html__('Project Tag', 'agricole') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'agricole_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('agricole_profile_labels')) {

function agricole_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'agricole'), 
		'singular_name' => 			esc_html__('Profiles', 'agricole'), 
		'menu_name' => 				esc_html__('Profiles', 'agricole'), 
		'all_items' => 				esc_html__('All Profiles', 'agricole'), 
		'add_new' => 				esc_html__('Add New', 'agricole'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'agricole'), 
		'edit_item' => 				esc_html__('Edit Profile', 'agricole'), 
		'new_item' => 				esc_html__('New Profile', 'agricole'), 
		'view_item' => 				esc_html__('View Profile', 'agricole'), 
		'search_items' => 			esc_html__('Search Profiles', 'agricole'), 
		'not_found' => 				esc_html__('No Profiles found', 'agricole'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'agricole') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'agricole_profile_labels');


if (!function_exists('agricole_pl_categs_labels')) {

function agricole_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'agricole'), 
		'singular_name' => 			esc_html__('Profile Category', 'agricole') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'agricole_pl_categs_labels');

