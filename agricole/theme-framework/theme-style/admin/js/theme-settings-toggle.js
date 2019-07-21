/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Theme Admin Settings Toggles Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	"use strict";
	
	/* General 'Header' Tab Fields Load */
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').parents('tr').show();
		
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').is(':checked')) {
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_text').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_link').parents('tr').show();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_text').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_link').parents('tr').hide();
		}
	} else {
		$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').parents('tr').hide();
	}
	
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
	}
	
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() !== 'cust_html') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
	}
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
	}
	
	
	/* General 'Header' Tab Fields Change */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () {
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			
			$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').parents('tr').show();
			
			if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').is(':checked')) {
				$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_text').parents('tr').show();
				$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_link').parents('tr').show();
			} else {
				$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_text').parents('tr').hide();
				$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_link').parents('tr').hide();
			}	
		} else {
			$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').parents('tr').hide();
		}
	} );
	
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () { 
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		} else if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
		} else {
			if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() === 'cust_html') {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			} else {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
			}
		}
	} );
	
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').on('change', function () {
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_mid_button"]').is(':checked')) {
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_text').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_link').parents('tr').show();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_text').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_button_link').parents('tr').hide();
		}		
	});
} )(jQuery);

