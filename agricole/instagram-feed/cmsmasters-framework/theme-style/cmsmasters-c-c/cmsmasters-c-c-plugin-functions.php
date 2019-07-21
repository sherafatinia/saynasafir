<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Instagram Feed Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function agricole_instagram_feed_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('agricole-instagram-feed-extend', get_template_directory_uri() . '/instagram-feed/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('agricole-instagram-feed-extend', 'cmsmasters_instagram_feed_shortcodes', array( 
			'instagram_feed_title' =>        		esc_attr__('Instagram Feed', 'agricole'), 
			'id_instagram_feed_title' =>      		esc_attr__('User Id', 'agricole'), 
			'id_instagram_feed_descr' =>       		esc_attr__('There may be several ids', 'agricole') 
		));
	}
}

add_action('admin_enqueue_scripts', 'agricole_instagram_feed_register_c_c_scripts');

