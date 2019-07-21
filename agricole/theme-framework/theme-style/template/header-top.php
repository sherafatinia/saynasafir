<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Header Top Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = agricole_get_global_options();


if ($cmsmasters_option['agricole' . '_header_top_line']) {
	echo '<div class="header_top" data-height="' . esc_attr($cmsmasters_option['agricole' . '_header_top_height']) . '">' . 
		'<div class="header_top_outer">' . 
			'<div class="header_top_inner">';
				do_action('cmsmasters_before_header_top', $cmsmasters_option);
				
				
				if (
					$cmsmasters_option['agricole' . '_header_top_line_add_cont'] == 'social' && 
					isset($cmsmasters_option['agricole' . '_social_icons'])
				) {
					agricole_social_icons();
				} elseif (
					$cmsmasters_option['agricole' . '_header_top_line_add_cont'] == 'nav' && 
					has_nav_menu('top_line')
				) {
					echo '<div class="top_nav_wrap">' . 
						'<a class="responsive_top_nav" href="' . esc_js("javascript:void(0)") . '">' . 
							'<span></span>' . 
						'</a>' . 
						'<nav>';
					
					
					wp_nav_menu(array( 
						'theme_location' => 	'top_line', 
						'menu_id' => 			'top_line_nav', 
						'menu_class' => 		'top_line_nav', 
						'link_before' => 		'<span class="nav_item_wrap">', 
						'link_after' => 		'</span>' 
					));
					
					
					echo '</nav>' . 
					'</div>';
				}
				
				
				if ($cmsmasters_option['agricole' . '_header_top_line_short_info'] !== '') {
					echo '<div class="header_top_meta">' . 
						'<div class="meta_wrap">' . 
							stripslashes($cmsmasters_option['agricole' . '_header_top_line_short_info']) . 
						'</div>' . 
					'</div>';
				} 
				
				
				do_action('cmsmasters_after_header_top', $cmsmasters_option);
			echo '</div>' . 
		'</div>' . 
		'<div class="header_top_but closed">' . 
			'<span class="cmsmasters_theme_icon_slide_bottom"></span>' . 
		'</div>' . 
	'</div>';
}

