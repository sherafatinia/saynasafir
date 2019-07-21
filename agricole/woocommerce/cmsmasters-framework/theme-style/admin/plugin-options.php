<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Woocommerce Admin Options
 * Created by CMSMasters
 * 
 */


/* Filter for Options */
function agricole_woocommerce_meta_fields($custom_all_meta_fields) {
	
	$custom_all_meta_fields_new = array();
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'product') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'product') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'product') 
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_sidebar_id') {
				$custom_all_meta_field['std'] = 'sidebar_shop';
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	
	return $custom_all_meta_fields_new;
}


add_filter('get_custom_all_meta_fields_filter', 'agricole_woocommerce_meta_fields');
