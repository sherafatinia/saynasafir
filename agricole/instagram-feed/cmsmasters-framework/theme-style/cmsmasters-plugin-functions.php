<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Instagram Feed Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer')) {
	require_once(get_template_directory() . '/instagram-feed/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-plugin-functions.php');
	
	require_once(get_template_directory() . '/instagram-feed/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-plugin-shortcodes.php');
}

