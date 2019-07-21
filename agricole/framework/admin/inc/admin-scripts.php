<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function agricole_admin_register($hook) {
	global $pagenow;
	
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '1.1.0', true);
	
	
	wp_enqueue_style('agricole-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('agricole-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('agricole-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('agricole-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('agricole-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'agricole'), 
		'insert' => 				esc_attr__('Insert image', 'agricole'), 
		'remove' => 				esc_attr__('Remove', 'agricole'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'agricole') 
	));
	
	
	wp_enqueue_script('agricole-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('agricole-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'agricole'), 
		'insert' => 				esc_attr__('Insert', 'agricole'), 
		'deselect' => 				esc_attr__('Deselect', 'agricole'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'agricole'), 
		'find_icons' => 			esc_attr__('Find icons', 'agricole'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'agricole'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'agricole'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'agricole') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'term.php' || 
		$hook == 'edit-tags.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('agricole-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('agricole-icons-custom', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('agricole-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('agricole-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('agricole-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('agricole-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('agricole-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'agricole_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

