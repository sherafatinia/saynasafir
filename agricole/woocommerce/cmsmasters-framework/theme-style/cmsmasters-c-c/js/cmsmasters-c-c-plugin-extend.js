/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * WooCommerce Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Products
 */
cmsmastersShortcodes.cmsmasters_products = {
	title : 	cmsmasters_woocommerce_shortcodes.products_title, 
	icon : 		'admin-icon-shop', 
	pair : 		false, 
	content : 	false, 
	visual : 	false, 
	multiple : 	false, 
	def : 		'', 
	fields : { 
		// Shortcode ID
		shortcode_id : { 
			type : 		'hidden', 
			title : 	'', 
			descr : 	'', 
			def : 		'', 
			required : 	true, 
			width : 	'full' 
		}, 
		// Products Shortcode Choise
		products_shortcode : { 
			type : 		'radio', 
			title : 	cmsmasters_woocommerce_shortcodes.products_shortcode_title, 
			descr : 	cmsmasters_woocommerce_shortcodes.products_shortcode_descr, 
			def : 		'recent_products', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'recent_products' : 		cmsmasters_woocommerce_shortcodes.choice_recent_products, 
						'featured_products' : 		cmsmasters_woocommerce_shortcodes.choice_featured_products, 
						'sale_products' : 			cmsmasters_woocommerce_shortcodes.choice_sale_products, 
						'best_selling_products' : 	cmsmasters_woocommerce_shortcodes.choice_best_selling_products, 
						'top_rated_products' : 		cmsmasters_woocommerce_shortcodes.choice_top_rated_products 
			} 
		}, 
		// Order By
		orderby : { 
			type : 		'select', 
			title : 	cmsmasters_shortcodes.orderby_title, 
			descr : 	cmsmasters_woocommerce_shortcodes.products_field_orderby_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_woocommerce_shortcodes.products_field_orderby_descr_note + ' ' + cmsmasters_woocommerce_shortcodes.choice_best_selling_products + ' and ' + cmsmasters_woocommerce_shortcodes.choice_top_rated_products + "</span>", 
			def : 		'date', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'date' : 		cmsmasters_shortcodes.choice_date, 
						'name' : 		cmsmasters_shortcodes.name, 
						'id' : 			cmsmasters_shortcodes.choice_id 
			} 
		}, 
		// Order
		order : { 
			type : 		'radio', 
			title : 	cmsmasters_shortcodes.order_title, 
			descr : 	cmsmasters_shortcodes.order_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_woocommerce_shortcodes.products_field_orderby_descr_note + ' ' + cmsmasters_woocommerce_shortcodes.choice_best_selling_products + ' and ' + cmsmasters_woocommerce_shortcodes.choice_top_rated_products + "</span>",  
			def : 		'DESC', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'ASC' : 	cmsmasters_shortcodes.choice_asc, 
						'DESC' : 	cmsmasters_shortcodes.choice_desc
			} 
		}, 
		// Products Number
		count : { 
			type : 		'input', 
			title : 	cmsmasters_woocommerce_shortcodes.products_field_prod_number_title, 
			descr : 	cmsmasters_woocommerce_shortcodes.products_field_prod_number_descr, 
			def : 		'10', 
			required : 	true, 
			width : 	'number', 
			min : 		'1' 
		}, 
		// Columns Count
		columns : { 
			type : 		'select', 
			title : 	cmsmasters_shortcodes.columns_count, 
			descr : 	cmsmasters_woocommerce_shortcodes.products_field_col_count_descr, 
			def : 		'4', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'1' : 	'1', 
						'2' : 	'2', 
						'3' : 	'3', 
						'4' : 	'4' 
			} 
		}, 
		// Rating
		rating : { 
			type : 		'checkbox', 
			title : 	cmsmasters_woocommerce_shortcodes.products_shortcode_rating_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'true' : 	cmsmasters_shortcodes.choice_show 
			} 
		}, 
		// Additional Classes
		classes : { 
			type : 		'input', 
			title : 	cmsmasters_shortcodes.classes_title, 
			descr : 	cmsmasters_shortcodes.classes_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		} 
	} 
};



/**
 * Selected Products
 */
cmsmastersShortcodes.cmsmasters_selected_products = {
	title : 	cmsmasters_woocommerce_shortcodes.selected_products_title, 
	icon : 		'admin-icon-product', 
	pair : 		false, 
	content : 	false, 
	visual : 	false, 
	multiple : 	false, 
	def : 		'', 
	fields : { 
		// Shortcode ID
		shortcode_id : { 
			type : 		'hidden', 
			title : 	'', 
			descr : 	'', 
			def : 		'', 
			required : 	true, 
			width : 	'full' 
		}, 
		// Order By
		orderby : { 
			type : 		'select', 
			title : 	cmsmasters_shortcodes.orderby_title, 
			descr : 	cmsmasters_woocommerce_shortcodes.products_field_orderby_descr, 
			def : 		'date', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'date' : 		cmsmasters_shortcodes.choice_date, 
						'name' : 		cmsmasters_shortcodes.name, 
						'id' : 			cmsmasters_shortcodes.choice_id 
			} 
		}, 
		// Order
		order : { 
			type : 		'radio', 
			title : 	cmsmasters_shortcodes.order_title, 
			descr : 	cmsmasters_shortcodes.order_descr, 
			def : 		'DESC', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'ASC' : 	cmsmasters_shortcodes.choice_asc, 
						'DESC' : 	cmsmasters_shortcodes.choice_desc
			} 
		}, 
		// IDs
		ids : { 
			type : 		'select_multiple', 
			title : 	cmsmasters_woocommerce_shortcodes.selected_products_field_ids, 
			descr : 	cmsmasters_woocommerce_shortcodes.selected_products_field_ids_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_woocommerce_shortcodes.selected_products_field_ids_descr_note + "</span>", 
			def : 		'', 
			required : 	true, 
			width : 	'half', 
			choises : 	cmsmasters_woocommerce_shortcodes.product_ids 
		}, 
		// Columns Count
		columns : { 
			type : 		'select', 
			title : 	cmsmasters_shortcodes.columns_count, 
			descr : 	cmsmasters_woocommerce_shortcodes.products_field_col_count_descr, 
			def : 		'4', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'1' : 	'1', 
						'2' : 	'2', 
						'3' : 	'3', 
						'4' : 	'4' 
			} 
		}, 
		// Rating
		rating : { 
			type : 		'checkbox', 
			title : 	cmsmasters_woocommerce_shortcodes.products_shortcode_rating_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'true' : 	cmsmasters_shortcodes.choice_show 
			} 
		}, 
		// Additional Classes
		classes : { 
			type : 		'input', 
			title : 	cmsmasters_shortcodes.classes_title, 
			descr : 	cmsmasters_shortcodes.classes_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		} 
	} 
};

