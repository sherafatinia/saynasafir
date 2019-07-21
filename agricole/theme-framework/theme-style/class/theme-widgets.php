<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Custom Theme Widgets
 * Created by CMSMasters
 * 
 */


/**
 * Contact Information Widget Class
 */
class WP_Widget_Custom_Contact_Info extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_contact_info_entries', 
			'description' => 	esc_html__('Your contact information', 'agricole') 
		);
		
		$control_ops = array( 
			'width' => 	600 
		);
		
		parent::__construct('custom-contact-info', esc_attr__('Contact Information', 'agricole'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Contact Information', 'agricole') : $instance['title'], $instance, $this->id_base);
        $name = isset($instance['name']) ? esc_html($instance['name']) : '';
        $url = isset($instance['url']) ? $instance['url'] : '';
        $email = isset($instance['email']) ? sanitize_email($instance['email']) : '';
        $phone = isset($instance['phone']) ? esc_html($instance['phone']) : '';
        $address = isset($instance['address']) ? esc_html($instance['address']) : '';
        $city = isset($instance['city']) ? esc_html($instance['city']) : '';
        $state = isset($instance['state']) ? esc_html($instance['state']) : '';
        $zip = isset($instance['zip']) ? esc_html($instance['zip']) : '';
        $country = isset($instance['country']) ? esc_html($instance['country']) : '';
        $time = isset($instance['time']) ? esc_html($instance['time']) : '';
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}
		
		if ($address != '') { 
			echo '<span class="street-address contact_widget_address">' . 
				'<span class="widget_custom_contact_info_title">' . 
					esc_html('Address:', 'agricole') . 
				'</span>' . 
				'<span class="widget_custom_contact_info_desc">' . 
					esc_html($address) . 
				'</span>' . 
			'</span>';
		}
		
		if ($city != '') { 
			echo '<span class="locality contact_widget_city">' . 
				'<span class="widget_custom_contact_info_title">' . 
					esc_html('City:', 'agricole') . 
				'</span>' . 
				'<span class="widget_custom_contact_info_desc">' . 
					esc_html($city) . 
				'</span>' . 
			'</span>';
		}
		
		if ($state != '') { 
			echo '<span class="region contact_widget_state">' . 
				'<span class="widget_custom_contact_info_title">' . 
					esc_html('State:', 'agricole') . 
				'</span>' . 
				'<span class="widget_custom_contact_info_desc">' . 
					esc_html($state) . 
				'</span>' . 
			'</span>';
		}
		
		if ($zip != '') { 
			echo '<span class="postal-code contact_widget_zip">' . 
				'<span class="widget_custom_contact_info_title">' . 
					esc_html('Zip:', 'agricole') . 
				'</span>' . 
				'<span class="widget_custom_contact_info_desc">' . 
					esc_html($zip) . 
				'</span>' . 
			'</span>';
		}
		
		if ($country != '') { 
			echo '<span class="country-name contact_widget_country">' . 
				'<span class="widget_custom_contact_info_title">' . 
					esc_html('Country:', 'agricole') . 
				'</span>' . 
				'<span class="widget_custom_contact_info_desc">' . 
					esc_html($country) . 
				'</span>' . 
			'</span>';
		}
		
		if ($time != '') { 
            echo '<span class="contact_widget_time cmsmasters_theme_icon_time">' . 
				'<span class="time">' . 
					'<span class="widget_custom_contact_info_title">' . 
						esc_html('Time:', 'agricole') . 
					'</span>' . 
					'<span class="widget_custom_contact_info_desc">' . 
						esc_html($time) . 
					'</span>' . 
				'</span>' . 
			'</span>';
		}
		
		if ($name != '') { 
            echo '<span class="contact_widget_name cmsmasters_theme_icon_person">' . 
				'<span class="fn contact_widget_name_inner">' . 
					'<span class="widget_custom_contact_info_title">' . 
						esc_html('Name:', 'agricole') . 
					'</span>' . 
					'<span class="widget_custom_contact_info_desc">' . 
						esc_html($name) . 
					'</span>' . 
				'</span>' . 
			'</span>';
		}
		
        if ($url != '') { 
            echo '<span class="contact_widget_url cmsmasters_theme_icon_user_website">' . 
				'<span class="widget_custom_contact_info_title">' . 
					esc_html('Website:', 'agricole') . 
				'</span>' . 
				'<span class="widget_custom_contact_info_desc">' . 
					'<a class="url" href="' . esc_url($url) . '">' . 
						esc_html($url) . 
					'</a>' . 
				'</span>' . 
			'</span>';
		}
		
        if ($email != '') { 
            echo '<span class="contact_widget_email cmsmasters_theme_icon_user_mail">' . 
				'<span class="widget_custom_contact_info_title">' . 
					esc_html('Email:', 'agricole') . 
				'</span>' . 
				'<span class="widget_custom_contact_info_desc">' . 
					'<a class="email" href="mailto:' . antispambot($email, 1) . '">' . 
						antispambot($email) . 
					'</a>' . 
				'</span>' . 
			'</span>';
		}
		
		if ($phone != '') { 
            echo '<span class="contact_widget_phone cmsmasters_theme_icon_user_phone">' . 
				'<span class="tel">' . 
					'<span class="widget_custom_contact_info_title">' . 
						esc_html('Phone:', 'agricole') . 
					'</span>' . 
					'<span class="widget_custom_contact_info_desc">' . 
						esc_html($phone) . 
					'</span>' . 
				'</span>' . 
			'</span>';
		}
		
        echo wp_kses_post($after_widget);
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['name'] = strip_tags($new_instance['name']);
        $instance['url'] = strip_tags($new_instance['url']);
        $instance['email'] = strip_tags($new_instance['email']);
        $instance['phone'] = strip_tags($new_instance['phone']);
        $instance['address'] = strip_tags($new_instance['address']);
        $instance['city'] = strip_tags($new_instance['city']);
        $instance['state'] = strip_tags($new_instance['state']);
        $instance['zip'] = strip_tags($new_instance['zip']);
        $instance['country'] = strip_tags($new_instance['country']);
        $instance['time'] = strip_tags($new_instance['time']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $name = isset($instance['name']) ? esc_attr($instance['name']) : '';
        $url = isset($instance['url']) ? esc_attr($instance['url']) : '';
        $email = isset($instance['email']) ? esc_attr($instance['email']) : '';
        $phone = isset($instance['phone']) ? esc_attr($instance['phone']) : '';
        $address = isset($instance['address']) ? esc_attr($instance['address']) : '';
        $city = isset($instance['city']) ? esc_attr($instance['city']) : '';
        $state = isset($instance['state']) ? esc_attr($instance['state']) : '';
        $zip = isset($instance['zip']) ? esc_attr($instance['zip']) : '';
        $country = isset($instance['country']) ? esc_attr($instance['country']) : '';
        $time = isset($instance['time']) ? esc_attr($instance['time']) : '';
        ?>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('name')); ?>"><?php esc_html_e('Name', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('name')); ?>" name="<?php echo esc_attr($this->get_field_name('name')); ?>" type="text" value="<?php echo esc_attr($name); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('url')); ?>"><?php esc_html_e('Website', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('url')); ?>" name="<?php echo esc_attr($this->get_field_name('url')); ?>" type="text" value="<?php echo esc_attr($url); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($address); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('city')); ?>"><?php esc_html_e('City', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('city')); ?>" name="<?php echo esc_attr($this->get_field_name('city')); ?>" type="text" value="<?php echo esc_attr($city); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('state')); ?>"><?php esc_html_e('State', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('state')); ?>" name="<?php echo esc_attr($this->get_field_name('state')); ?>" type="text" value="<?php echo esc_attr($state); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('zip')); ?>"><?php esc_html_e('Zip', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('zip')); ?>" name="<?php echo esc_attr($this->get_field_name('zip')); ?>" type="text" value="<?php echo esc_attr($zip); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('country')); ?>"><?php esc_html_e('Country', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('country')); ?>" name="<?php echo esc_attr($this->get_field_name('country')); ?>" type="text" value="<?php echo esc_attr($country); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('time')); ?>"><?php esc_html_e('Time', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('time')); ?>" name="<?php echo esc_attr($this->get_field_name('time')); ?>" type="text" value="<?php echo esc_attr($time); ?>" />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Latest Projects Widget Class
 */
class WP_Widget_Custom_Latest_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_latest_projects_entries', 
			'description' => 	esc_attr__('Latest projects from your portfolio', 'agricole') 
		);
		
		parent::__construct('custom-latest-projects', esc_attr__('Latest Projects', 'agricole'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Latest Projects', 'agricole') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => 		$number, 
			'post_status' => 			'publish', 
			'ignore_sticky_posts' => 	1, 
			'post_type' => 				'project' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 	'pj-categs', 
                    'field' => 		'slug', 
                    'terms' => 		$type 
                )
            );
		}
		
        $lp = new WP_Query($queryArgs);
		
        if ($lp->have_posts()) { 
			echo wp_kses_post($before_widget);
			
			
			if ($title) { 
				echo wp_kses_post($before_title . esc_html($title) . $after_title);
			}
			
			
			echo '<div' . 
				' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
				' class="cmsmasters_owl_slider owl-carousel widget_custom_projects_entries_slides"' . 
				' data-auto-play="' . ($autoplay ? '5000' : 'false') . '"' . 
			'>';
			
            while ($lp->have_posts()) : $lp->the_post();
				
				$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

				$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

				$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);
				
				echo '<div class="cmsmasters_owl_slider_item cmsmasters_slider_project">' . 
					'<div class="cmsmasters_slider_project_outer">' . 
						'<div class="cmsmasters_slider_project_img_wrap">';
							
							agricole_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
							
							agricole_slider_post_heading(get_the_ID(), 'project', 'h4', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target);
							
						echo '</div>';
						
						echo '<div class="cmsmasters_slider_project_inner">';
							
							echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
								
								agricole_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
								
							echo '</div>';
							
							
							agricole_slider_post_exc_cont('project');
							
							
							echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
								
								agricole_slider_post_like('project');
								
								agricole_get_slider_post_comments('project');
								
							echo '</footer>';
							
						echo '</div>' . 
					'</div>' . 
				'</div>';
				
			endwhile;
			
			echo '</div>' . 
			wp_kses_post($after_widget);
        }
		
		wp_reset_postdata();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
		
		$instance['autoplay'] = 0;
		
		if ($new_instance['autoplay']) {
			$instance['autoplay'] = 1;
		}
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' => false 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('type')); ?>"><?php esc_html_e('Show Only from Projects Type', 'agricole'); ?>:<br />
                <select id="<?php echo esc_attr($this->get_field_id('type')); ?>" name="<?php echo esc_attr($this->get_field_name('type')); ?>" class="widefat">
                    <option value=""><?php esc_html_e('Show all projects', 'agricole'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . esc_attr($pj_categ->slug) . '" selected="selected">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							} else {
								echo '<option value="' . esc_attr($pj_categ->slug) . '">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of latest projects you'd like to display", 'agricole'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'agricole'); ?> 3</small><br />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Autoplay', 'agricole'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Popular Projects Widget Class
 */
class WP_Widget_Custom_Popular_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_popular_projects_entries', 
			'description' => 	esc_attr__('Popular projects from your portfolio', 'agricole') 
		);
		
		parent::__construct('custom-popular-projects', esc_attr__('Popular Projects', 'agricole'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Popular Projects', 'agricole') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => 		$number, 
			'post_status' => 			'publish', 
			'ignore_sticky_posts' => 	1, 
			'post_type' => 				'project', 
			'order' => 					'DESC', 
			'orderby' => 				'meta_value_num', 
			'meta_key' => 				'cmsmasters_likes' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 	'pj-categs', 
                    'field' => 		'slug', 
                    'terms' => 		array($type) 
                )
            );
		}
		
        $pp = new WP_Query($queryArgs);
		
        if ($pp->have_posts()) { 
			echo wp_kses_post($before_widget);
			
			
			if ($title) { 
				echo wp_kses_post($before_title . esc_html($title) . $after_title);
			}
			
			
			echo '<div' . 
				' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
				' class="cmsmasters_owl_slider owl-carousel widget_custom_projects_entries_slides"' . 
				' data-auto-play="' . ($autoplay ? '5000' : 'false') . '"' . 
			'>';
			
            while ($pp->have_posts()) : $pp->the_post();
				
				$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

				$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

				$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);
				
				echo '<div class="cmsmasters_owl_slider_item cmsmasters_slider_project">' . 
					'<div class="cmsmasters_slider_project_outer">' . 
						'<div class="cmsmasters_slider_project_img_wrap">';
							
							agricole_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
							
							agricole_slider_post_heading(get_the_ID(), 'project', 'h4', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target);
							
						echo '</div>';
						
						echo '<div class="cmsmasters_slider_project_inner">';
							
							echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
								
								agricole_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
								
							echo '</div>';
							
							
							agricole_slider_post_exc_cont('project');
							
							
							echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
								
								agricole_slider_post_like('project');
								
								agricole_get_slider_post_comments('project');
								
							echo '</footer>';
							
						echo '</div>' . 
					'</div>' . 
				'</div>';
				
			endwhile;
			
			echo '</div>' . 
			wp_kses_post($after_widget);
        }
		
		wp_reset_postdata();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
		
		$instance['autoplay'] = 0;
		
		if ($new_instance['autoplay']) {
			$instance['autoplay'] = 1;
		}
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' => false 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('type')); ?>"><?php esc_html_e('Show Only from Projects Type', 'agricole'); ?>:<br />
                <select id="<?php echo esc_attr($this->get_field_id('type')); ?>" name="<?php echo esc_attr($this->get_field_name('type')); ?>" class="widefat">
                    <option value=""><?php esc_html_e('Show all projects', 'agricole'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . esc_attr($pj_categ->slug) . '" selected="selected">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							} else {
								echo '<option value="' . esc_attr($pj_categ->slug) . '">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of popular projects you'd like to display", 'agricole'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'agricole'); ?> 3</small><br />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Autoplay', 'agricole'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Posts Tabs Widget Class
 */
class WP_Widget_Custom_Posts_Tabs extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_posts_tabs_entries', 
			'description' => 	esc_attr__('Latest, popular posts & recent comments', 'agricole') 
		);
		
		parent::__construct('custom-posts-tabs', esc_attr__('Posts Tabs', 'agricole'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$latest = isset($instance['latest']) ? $instance['latest'] : true;
		$popular = isset($instance['popular']) ? $instance['popular'] : true;
		$recent = isset($instance['recent']) ? $instance['recent'] : true;
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}

		if ($latest) {
            $latest_query = new WP_Query(array( 
                'posts_per_page' =>         $number, 
                'post_status' =>             'publish', 
                'ignore_sticky_posts' =>     1, 
                'post_type' =>                 'post' 
            ));
            
            
            $latest = $latest_query->have_posts() ? true : false;
		}
		
		if ($popular) {
			$popular_query = new WP_Query(array( 
				'posts_per_page' => 		$number, 
				'post_status' => 			'publish', 
				'ignore_sticky_posts' => 	1, 
				'post_type' => 				'post', 
				'order' => 					'DESC', 
				'orderby' => 				'meta_value_num', 
				'meta_key' => 				'cmsmasters_likes' 
			));


			$popular = $popular_query->have_posts() ? true : false;
		}

		if ($recent) {
			$rcomments = get_comments(array( 
				'number' => 	$number, 
				'post_type' => 	'post', 
				'status' => 	'approve' 
			));

			$recent = ($rcomments && !empty($rcomments)) ? true : false;
		}
		
		echo '<div class="cmsmasters_tabs tabs_mode_tab lpr">' . 
				'<ul class="cmsmasters_tabs_list">';
		
		if ($latest) {
			echo '<li class="cmsmasters_tabs_list_item current_tab">' . 
				'<a href="#"><span>' . esc_html__('Latest', 'agricole') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($popular) {
			echo '<li class="cmsmasters_tabs_list_item' . ((!$latest) ? ' current_tab' : '') . '">' . 
				'<a href="#"><span>' . esc_html__('Popular', 'agricole') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($recent) {
			echo '<li class="cmsmasters_tabs_list_item' . ((!$latest && !$popular) ? ' current_tab' : '') . '">' . 
				'<a href="#"><span>' . esc_html__('Comments', 'agricole') . '</span></a>' . 
			'</li>'; 
		}
		
		if (!$latest && !$popular && !$recent) {
			echo '<li class="cmsmasters_tabs_list_item">' . 
				'<a href="#"><span>' . esc_html__('Latest', 'agricole') . '</span></a>' . 
			'</li>'; 
		}
		
		echo '</ul>' . 
		'<div class="cmsmasters_tabs_wrap">';
		
		$pt_format = get_post_format();
		
		$widget_icon = 'cmsmasters_theme_icon_image';
		
		if ($latest) {
			echo '<div class="cmsmasters_tab tab_latest">' . 
				'<ul>';
			
			while ($latest_query->have_posts()) : $latest_query->the_post();
				
				$attachments = get_children(array(
					'post_type' => 			'attachment', 
					'post_mime_type' => 	'image', 
					'post_parent' => 		get_the_ID(), 
					'orderby' => 			'menu_order', 
					'order' => 				'ASC' 
				));
				
				
				echo '<li>';
				
				if ($pt_format == 'image' || $pt_format == 'gallery') {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						agricole_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
						if (isset($att_counter)) {
							unset($att_counter);
						}
						
						foreach ($attachments as $attachment) { 
							if (!isset($att_counter) && $att_counter = true) { 
								agricole_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, $attachment->ID);
							}
						}
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				} else {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						agricole_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				}
				
					echo '<div class="cmsmasters_lpr_tabs_cont">' . 
						'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title(get_the_ID(), false) . '">' . cmsmasters_title(get_the_ID(), false) . '</a>' . 
						'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
							esc_html(get_the_date()) . 
						'</abbr>' . 
					'</div>' . 
				'</li>';
			endwhile;
			
			wp_reset_postdata();

			echo '</ul>' . 
			'</div>';
		}
		
		if ($popular) {
			echo '<div class="cmsmasters_tab tab_popular">' . 
				'<ul>';
			
			while ($popular_query->have_posts()) : $popular_query->the_post();
				$pt_format = get_post_format();
				
				$attachments = get_children(array(
					'post_type' => 			'attachment', 
					'post_mime_type' => 	'image', 
					'post_parent' => 		get_the_ID(), 
					'orderby' => 			'menu_order', 
					'order' => 				'ASC' 
				));
				
				echo '<li>';
				
				if ($pt_format == 'image' || $pt_format == 'gallery') {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						agricole_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
						if (isset($att_counter)) {
							unset($att_counter);
						}
						
						foreach ($attachments as $attachment) { 
							if (!isset($att_counter) && $att_counter = true) { 
								agricole_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, $attachment->ID);
							}
						}
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				} else {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						agricole_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				}
				
					echo '<div class="cmsmasters_lpr_tabs_cont">' . 
						'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title(get_the_ID(), false) . '">' . cmsmasters_title(get_the_ID(), false) . '</a>' . 
						'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
							esc_html(get_the_date()) . 
						'</abbr>' . 
					'</div>' . 
				'</li>';
			endwhile;

			wp_reset_postdata();
			
			echo '</ul>' . 
			'</div>';
		}
		
		if ($recent) {
			echo '<div class="cmsmasters_tab tab_comments">' . 
				'<ul>';
			
			foreach ($rcomments as $comment) {
				$comment_post_ID = $comment->comment_post_ID;
				$comment_author = $comment->comment_author;
				$comment_author_url = $comment->comment_author_url;
				$comment_date = mysql2date('U', $comment->comment_date, false);
				$comment_content = $comment->comment_content;
				$comment_array = explode(' ', $comment_content);
				
				if (sizeof($comment_array) > 10) {
					$new_comment_content = '';
					
					for ($i = 0; $i < 10; $i++) {
						$new_comment_content .= $comment_array[$i] . ' ';
					}
					
					$new_comment_content = trim($new_comment_content) . '...';
				} else {
					$new_comment_content = $comment_content;
				}
				
				echo '<li>' . 
					$comment_author  . 
					' <span class="color_2">' . esc_html__('on', 'agricole') . '</span> <a href="' . get_permalink($comment_post_ID) . '#comments" rel="bookmark">' . cmsmasters_title($comment_post_ID, false) . '</a>' . 
					'<small>' . 
						'<abbr class="published" title="' . esc_attr(get_the_time('d-m-Y')) . '">' . human_time_diff($comment_date, current_time('timestamp')) . ' ' . esc_html__('ago', 'agricole') . '</abbr>' . 
					'</small>' . 
					'<p>' . esc_html($new_comment_content) . '</p>' . 
				'</li>';
			}
			
			echo '</ul>' . 
			'</div>';
		}
		
		echo '</div>' . 
			'</div>' .
		wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance = array( 
			'latest' => 0, 
			'popular' => 0, 
			'recent' => 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		if ($new_instance['latest'] == '' && $instance['popular'] == '' && $instance['recent'] == '') {
			$instance['latest'] = 1;
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$instance = wp_parse_args((array) $instance, array( 
			'latest' => true, 
			'popular' => true, 
			'recent' => true 
		) );
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['latest'], true); ?> id="<?php echo esc_attr($this->get_field_id('latest')); ?>" name="<?php echo esc_attr($this->get_field_name('latest')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('latest')); ?>"><?php esc_html_e('Latest Posts', 'agricole'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['popular'], true); ?> id="<?php echo esc_attr($this->get_field_id('popular')); ?>" name="<?php echo esc_attr($this->get_field_name('popular')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('popular')); ?>"><?php esc_html_e('Popular Posts', 'agricole'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['recent'], true); ?> id="<?php echo esc_attr($this->get_field_id('recent')); ?>" name="<?php echo esc_attr($this->get_field_name('recent')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('recent')); ?>"><?php esc_html_e('Recent Comments', 'agricole'); ?></label>
		</p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of recent comments, popular and latest posts you'd like to display", 'agricole'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'agricole'); ?> 3</small><br />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Twitter Widget Class
 */
class WP_Widget_Custom_Twitter extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_twitter_entries', 
			'description' => 	esc_attr__('Your Twitter account latest tweets', 'agricole') 
		);
		
		parent::__construct('custom-twitter', esc_attr__('Twitter', 'agricole'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Twitter', 'agricole') : $instance['title'], $instance, $this->id_base);
		$user = isset($instance['user']) ? $instance['user'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
		
		$uid = uniqid();
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 20) {
            $number = 20;
        }
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}
		
		if ($user != '') {
			$tweets = cmsmasters_get_tweets($user, $number);
			
			if ($tweets != '') {
				echo '<ul class="tweet_list">' . "\n";
				
				foreach ($tweets as $t) {
					echo '<li>' . "\n" . 
						'<span class="tweet_time cmsmasters_theme_icon_user_twitter">' . human_time_diff($t['time'], current_time('timestamp')) . ' ' . esc_html__('ago', 'agricole') . '</span>' . "\n" . 
						'<span class="tweet_text">' . "\n" . $t['text'] . '</span>' . "\n" . 
					'</li>' . "\n";
				}
			} else {
				echo '<div class="cmsmasters_notice cmsmasters_notice_error cmsmasters_theme_icon_cancel">' . "\n" . 
					'<div class="notice_content">' . "\n" . 
						'<p>' . esc_html__('Please add your Twitter API keys', 'agricole') . ', ' . '<a target="_blank" href="http://cmsmasters.net/twitter-functionality/">' . esc_html__('read more how', 'agricole') . '</a></p>' . "\n" . 
					'</div>' . "\n" . 
				'</div>' . "\n";
			}
		}
		
		echo '</ul>' . "\n" . 
		wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['user'] = strip_tags($new_instance['user']);
        $instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $user = isset($instance['user']) ? esc_attr($instance['user']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('user')); ?>"><?php esc_html_e('Twitter Username', 'agricole'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('user')); ?>" name="<?php echo esc_attr($this->get_field_name('user')); ?>" type="text" value="<?php echo esc_attr($user); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of latest tweets you'd like to display", 'agricole'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'agricole'); ?> 3</small><br />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}

function agricole_theme_add_custom_widgets($widgets) {
	$widgets[] = 'WP_Widget_Custom_Contact_Info';
	
	$widgets[] = 'WP_Widget_Custom_Posts_Tabs';

	$widgets[] = 'WP_Widget_Custom_Twitter';
	
	return $widgets;
}

add_filter('cmsmasters_custom_widgets_filter', 'agricole_theme_add_custom_widgets');
