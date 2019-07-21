<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Content Composer Table Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));
	
	
echo '<div class="cmsmasters_table_wrap">' . 
	'<table class="cmsmasters_table' . 
	(($classes != '') ? ' ' . esc_attr($classes) : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
	'>' . 
		'<caption>' . esc_html($caption) . '</caption>' . 
		do_shortcode($content) . 
	'</table>' . 
'<div>';

