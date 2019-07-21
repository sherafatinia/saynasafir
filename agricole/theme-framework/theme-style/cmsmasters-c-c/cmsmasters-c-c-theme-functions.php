<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function agricole_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('agricole-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('agricole-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			/* Client */
			'client_field_logo_overlay_title' => 			esc_attr__('Logo Overlay', 'agricole'), 
			'client_field_logo_overlay_descr' => 			esc_attr__('Choose this client logo overlay', 'agricole'), 
			/* Pricing Table */
			'pricing_offer_field_best_offer_bd_title' => 	esc_attr__('Best Offer Border Color', 'agricole'), 
			'pricing_offer_field_best_offer_bd_descr' => 	esc_attr__('Choose border color for this pricing table best offer', 'agricole') 
		));
	}
}

add_action('admin_enqueue_scripts', 'agricole_theme_register_c_c_scripts');


// Counters Shortcode Attributes Filter
add_filter('cmsmasters_client_atts_filter', 'cmsmasters_client_atts');

function cmsmasters_client_atts() {
	return array( 
		'shortcode_id' => 	'', 
		'logo' => 			'', 
		'logo_overlay' => 	'', 
		'link' => 			'', 
		'target' => 		'blank', 
		'classes' => 		'' 
	);
}


// Posts Slider Shortcode Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'count' => 					'', 
		'pause' => 					'', 
		'speed' => 					'', 
		'blog_metadata' => 			'', 
		'portfolio_metadata' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}
