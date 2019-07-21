<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.1
 * 
 * Gutenberg Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/module-colors.php');
require_once(get_template_directory() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/module-fonts.php');


/* Register CSS Styles and Scripts */
function agricole_gutenberg_support() {
	$colors = cmsmasters_color_picker_palettes();
	
	$color_palette = array();
	
	
	foreach ($colors as $color) {
		$color_palette[] = array(
			'color' => $color,
		);
	}
	
	
	add_theme_support('editor-color-palette', $color_palette);
}

add_action('after_setup_theme', 'agricole_gutenberg_support');


/* Enqueue Block Editor Styles */
function agricole_gutenberg_editor_styles() {
	wp_deregister_style('wp-block-library-theme');
	wp_register_style('wp-block-library-theme', '');
	
    wp_enqueue_style('agricole-gutenberg-editor-style', get_theme_file_uri( '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/editor-style.css' ), false, '1.0', 'all');
	
	
	if (is_rtl()) {
		wp_enqueue_style('agricole-gutenberg-editor-style-rtl', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/module-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	// Scripts
	wp_enqueue_script('agricole-gutenberg-editor-options-script', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/editor-options.js', array('jquery'), '1.0.0', true);
	
	
	$gutenberg_module_styles = agricole_gutenberg_module_colors('', true);
	$gutenberg_module_styles .= agricole_gutenberg_module_fonts('', true);
	
	wp_add_inline_style('agricole-gutenberg-editor-style', $gutenberg_module_styles);
}

add_action('enqueue_block_editor_assets', 'agricole_gutenberg_editor_styles');


/* Enqueue Frontend Styles */
function agricole_gutenberg_frontend_styles() {
	wp_enqueue_style('agricole-gutenberg-frontend-style', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/frontend-style.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('agricole-gutenberg-frontend-rtl', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/module-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'agricole_gutenberg_frontend_styles');

