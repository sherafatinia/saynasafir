<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * WooCommerce Content Composer Shortcodes
 * Created by CMSMasters
 * 
 */


function agricole_woocommerce_shortcodes($shortcodes) {
	$shortcodes[] = 'cmsmasters_products';
	
	$shortcodes[] = 'cmsmasters_selected_products';
	
	
	return $shortcodes;
}

add_filter('cmsmasters_custom_shortcodes_filter', 'agricole_woocommerce_shortcodes');


/**
 * Products
 */
function cmsmasters_products($atts, $content = null) {
	extract(shortcode_atts(array( 
		'shortcode_id' => 			'', 
		'products_shortcode' => 	'recent_products', 
		'orderby' => 				'date', 
		'order' => 					'DESC', 
		'count' => 					'10', 
		'columns' => 				'4', 
		'rating' => 				'', 
		'classes' => 				'' 
	), $atts));
	
	
    $out = '<div class="cmsmasters_products_shortcode' . ' cmsmasters_' . $products_shortcode . 
	(($classes != '') ? ' ' . $classes : '') . 
	(($rating != '') ? ' show_rating' : '') . 
	'">';
	
	
	if (!is_admin()) {
		$out .= do_shortcode('[' . $products_shortcode . ' ' . (($products_shortcode != 'best_selling_products' && $products_shortcode != 'top_rated_products') ? 'orderby="' . $orderby . '" order="' . $order . '" ' : '') . 'limit="' . $count . '" columns="' . $columns . '"]');
	}
	
	
	$out .= '</div>';
	
	
	return $out;
}



/**
 * Selected Products
 */
function cmsmasters_selected_products($atts, $content = null) {
	extract(shortcode_atts(array( 
		'shortcode_id' => 			'', 
		'orderby' => 				'date', 
		'order' => 					'DESC', 
		'ids' => 					'', 
		'columns' => 				'4', 
		'rating' => 				'', 
		'classes' => 				'' 
	), $atts));
	
	
    $out = '<div class="cmsmasters_selected_products_shortcode' . 
	(($classes != '') ? ' ' . $classes : '') . 
	(($rating != '') ? ' show_rating' : '') . 
	'">';
	
	
	if (!is_admin()) {
		$out .= do_shortcode('[products orderby="' . $orderby . '" order="' . $order . '" columns="' . $columns . '" ids="' . $ids . '"]');
	}
	
	
	$out .= '</div>';
	
	
	return $out;
}

