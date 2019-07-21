<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Instagram Feed Content Composer Shortcodes
 * Created by CMSMasters
 * 
 */


function agricole_instagram_feed_shortcodes($shortcodes) {
	$shortcodes[] = 'cmsmasters_instagram_feed';
	
	
	return $shortcodes;
}

add_filter('cmsmasters_custom_shortcodes_filter', 'agricole_instagram_feed_shortcodes');


/**
 * Instagram Feed
 */
function cmsmasters_instagram_feed($atts, $content = null) {
	extract(shortcode_atts(array( 
		'shortcode_id' => 	'', 
		'id' => 			'' 
	), $atts));
	
	
	$out = do_shortcode('[instagram-feed id="' . $id . '"]');
	
	
	return $out;
}

