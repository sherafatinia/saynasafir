<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */

/* General Options */
function agricole_single_options_meta_fields($custom_all_meta_fields) {
	$cmsmasters_option = agricole_get_global_options();
	
	
	$custom_all_meta_fields_new = array();
	
	
	foreach ($custom_all_meta_fields as $custom_all_meta_field) {
		if (
			(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
			(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
			(isset($_GET['post']) && get_post_type($_GET['post']) == 'project') 
		) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_text') {	
				$custom_all_meta_field['std'] = esc_html__('Read More...', 'agricole');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		} else {
			$custom_all_meta_fields_new[] = $custom_all_meta_field;
		}
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'agricole_single_options_meta_fields');
