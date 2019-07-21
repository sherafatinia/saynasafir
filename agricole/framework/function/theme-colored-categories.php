<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Colored Categories
 * Created by CMSMasters
 * 
 */


/* Add Category Color */
function agricole_add_category_color() {
	wp_register_script('agricole-settings-js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('agricole-settings-js', 'cmsmasters_setting', array( 
		'palettes' => implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('agricole-settings-js');
	
	?>
	<div class="form-field">
		<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'agricole'); ?></label>
		<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
	</div>
	<?php
}



/* Edit Category Color */
function agricole_edit_category_color($term) {
	wp_register_script('agricole-settings-js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('agricole-settings-js', 'cmsmasters_setting', array( 
		'palettes' => 			implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('agricole-settings-js');
	
	
	$term_meta = get_term_meta($term->term_id, 'cmsmasters_cat_color', true);
	
	?>
	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'agricole'); ?></label>
		</th>
		<td>
			<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="<?php echo (esc_attr($term_meta) ? esc_attr($term_meta) : ''); ?>" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
		</td>
	</tr>
	<?php 
}



/* Save Category Color */
function agricole_save_category_color($term_id) {
	if (isset($_POST['term_meta'])) {
		$term_meta = get_term_meta($term_id, 'cmsmasters_cat_color', true);
		
		$cat_keys = array_keys($_POST['term_meta']);
		
		$new_term_meta = '';
		
		
		foreach ($cat_keys as $key) {
			if ($key == 'cmsmasters_cat_color') {
				$new_term_meta = $_POST['term_meta'][$key];
			}
		}
		
		
		if ($new_term_meta != '') {
			if ($term_meta && $term_meta != '') {
				update_term_meta($term_id, 'cmsmasters_cat_color', $new_term_meta);
			} else {
				add_term_meta($term_id, 'cmsmasters_cat_color', $new_term_meta, true);
			}
		}
	}
}



/* Category Color Actions */
add_action('category' . '_add_form_fields', 'agricole_add_category_color', 10, 2);
add_action('pj-categs' . '_add_form_fields', 'agricole_add_category_color', 10, 2);
add_action('pl-categs' . '_add_form_fields', 'agricole_add_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_add_form_fields', 'agricole_add_category_color', 10, 2);
}

if (CMSMASTERS_TRIBE_EVENTS) {
	add_action('tribe_events_cat' . '_add_form_fields', 'agricole_add_category_color', 10, 2);
}

if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	add_action('cp-categs' . '_add_form_fields', 'agricole_add_category_color', 10, 2);
}

if (CMSMASTERS_SERMONS && class_exists('Cmsmasters_Sermons')) {
	add_action('srm-categs' . '_add_form_fields', 'agricole_add_category_color', 10, 2);
}

if (CMSMASTERS_TIMETABLE) {
	add_action('events_category' . '_add_form_fields', 'agricole_add_category_color', 10, 2);
}


add_action('category' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);
add_action('pj-categs' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);
add_action('pl-categs' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);
}

if (CMSMASTERS_TRIBE_EVENTS) {
	add_action('tribe_events_cat' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);
}

if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	add_action('cp-categs' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);
}

if (CMSMASTERS_SERMONS && class_exists('Cmsmasters_Sermons')) {
	add_action('srm-categs' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);
}

if (CMSMASTERS_TIMETABLE) {
	add_action('events_category' . '_edit_form_fields', 'agricole_edit_category_color', 10, 2);
}


add_action('edited_' . 'category', 'agricole_save_category_color', 10, 2);  
add_action('create_' . 'category', 'agricole_save_category_color', 10, 2);
add_action('edited_' . 'pj-categs', 'agricole_save_category_color', 10, 2);  
add_action('create_' . 'pj-categs', 'agricole_save_category_color', 10, 2);
add_action('edited_' . 'pl-categs', 'agricole_save_category_color', 10, 2);  
add_action('create_' . 'pl-categs', 'agricole_save_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('edited_' . 'product_cat', 'agricole_save_category_color', 10, 2);
	add_action('create_' . 'product_cat', 'agricole_save_category_color', 10, 2);
}

if (CMSMASTERS_TRIBE_EVENTS) {
	add_action('edited_' . 'tribe_events_cat', 'agricole_save_category_color', 10, 2);
	add_action('create_' . 'tribe_events_cat', 'agricole_save_category_color', 10, 2);
}

if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	add_action('edited_' . 'cp-categs', 'agricole_save_category_color', 10, 2);
	add_action('create_' . 'cp-categs', 'agricole_save_category_color', 10, 2);
}

if (CMSMASTERS_SERMONS && class_exists('Cmsmasters_Sermons')) {
	add_action('edited_' . 'srm-categs', 'agricole_save_category_color', 10, 2);
	add_action('create_' . 'srm-categs', 'agricole_save_category_color', 10, 2);
}

if (CMSMASTERS_TIMETABLE) {
	add_action('edited_' . 'events_category', 'agricole_save_category_color', 10, 2);
	add_action('create_' . 'events_category', 'agricole_save_category_color', 10, 2);
}



/* Colored Categories Args */
function agricole_colored_categories_args() {
	$args = array( 
		'hide_empty' => false 
	);
	
	$args['taxonomy'] = array('category');
	
	
	if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer') && CMSMASTERS_PROJECT_COMPATIBLE) {
		$args['taxonomy'][] = 'pj-categs';
	}
	
	if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer') && CMSMASTERS_PROFILE_COMPATIBLE) {
		$args['taxonomy'][] = 'pl-categs';
	}
	
	if (CMSMASTERS_WOOCOMMERCE) {
		$args['taxonomy'][] = 'product_cat';
	}
	
	if (CMSMASTERS_TRIBE_EVENTS) {
		$args['taxonomy'][] = 'tribe_events_cat';
	}
	
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$args['taxonomy'][] = 'cp-categs';
	}
	
	if (CMSMASTERS_SERMONS && class_exists('Cmsmasters_Sermons')) {
		$args['taxonomy'][] = 'srm-categs';
	}
	
	if (CMSMASTERS_TIMETABLE) {
		$args['taxonomy'][] = 'events_category';
	}
	
	
	return $args;
}

