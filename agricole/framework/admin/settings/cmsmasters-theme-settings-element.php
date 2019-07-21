<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function agricole_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'agricole');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'agricole');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'agricole');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'agricole');
	$tabs['error'] = esc_attr__('404', 'agricole');
	$tabs['code'] = esc_attr__('Custom Codes', 'agricole');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'agricole');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function agricole_options_element_sections() {
	$tab = agricole_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'agricole');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'agricole');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'agricole');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'agricole');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'agricole');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'agricole');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'agricole');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function agricole_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = agricole_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = agricole_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'agricole' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'agricole'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['agricole' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'agricole' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'agricole'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['agricole' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'agricole'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'agricole') . '|dark', 
				esc_html__('Light', 'agricole') . '|light', 
				esc_html__('Mac', 'agricole') . '|mac', 
				esc_html__('Metro Black', 'agricole') . '|metro-black', 
				esc_html__('Metro White', 'agricole') . '|metro-white', 
				esc_html__('Parade', 'agricole') . '|parade', 
				esc_html__('Smooth', 'agricole') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'agricole'), 
			'desc' => esc_html__('Sets path for switching windows', 'agricole'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'agricole') . '|vertical', 
				esc_html__('Horizontal', 'agricole') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'agricole'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'agricole'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'agricole'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'agricole'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'agricole'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'agricole'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'agricole'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'agricole'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'agricole'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'agricole'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'agricole'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'agricole'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'agricole') . '|center', 
				esc_html__('Fit', 'agricole') . '|fit', 
				esc_html__('Fill', 'agricole') . '|fill', 
				esc_html__('Stretch', 'agricole') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'agricole'), 
			'desc' => esc_html__('Sets buttons be available or not', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'agricole'), 
			'desc' => esc_html__('Enable the arrow buttons', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'agricole'), 
			'desc' => esc_html__('Sets the fullscreen button', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'agricole'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'agricole'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'agricole'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'agricole'), 
			'desc' => esc_html__('Sets the swipe navigation', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'agricole' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'agricole'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'agricole' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'agricole' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'agricole' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'agricole' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'agricole' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'agricole' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_color', 
			'title' => esc_html__('Text Color', 'agricole'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['agricole' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'agricole'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['agricole' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'agricole'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'agricole'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['agricole' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'agricole') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'agricole') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'agricole') . '|repeat-y', 
				esc_html__('Repeat', 'agricole') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'agricole'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['agricole' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'agricole') . '|scroll', 
				esc_html__('Fixed', 'agricole') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'agricole'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['agricole' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'agricole') . '|auto', 
				esc_html__('Cover', 'agricole') . '|cover', 
				esc_html__('Contain', 'agricole') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_search', 
			'title' => esc_html__('Search Line', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'agricole'), 
			'desc' => esc_html__('show', 'agricole'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['agricole' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'agricole' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'agricole' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'agricole'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['agricole' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'agricole' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'agricole'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['agricole' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'agricole' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'agricole' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'agricole' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'agricole' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'agricole' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'agricole' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'agricole' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'agricole'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['agricole' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

