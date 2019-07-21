<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Post Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = agricole_get_global_options();

$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);


list($cmsmasters_layout) = agricole_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'post-thumbnail';
}


$cmsmasters_post_format = get_post_format();


$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);

?>
<!-- Start Post Single Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	
	if (
		$cmsmasters_post_title != 'false' || 
		$cmsmasters_option['agricole' . '_blog_post_cat'] || 
		$cmsmasters_option['agricole' . '_blog_post_date'] || 
		$cmsmasters_option['agricole' . '_blog_post_author'] 
	) {
		echo '<div class="cmsmasters_post_top">';
		
		if ($cmsmasters_post_title != 'false') {
			agricole_post_title_nolink(get_the_ID(), 'h2');
		}
		
		
		if (
			$cmsmasters_option['agricole' . '_blog_post_cat'] || 
			$cmsmasters_option['agricole' . '_blog_post_date'] || 
			$cmsmasters_option['agricole' . '_blog_post_author'] 
		) {
			echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
				agricole_get_post_category(get_the_ID(), 'category', 'post');
				
				agricole_get_post_date('post');
				
				agricole_get_post_author('post');
			
			echo '</div>';
		}
		
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_format == 'image') {
		$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
		
		agricole_post_type_image(get_the_ID(), $cmsmasters_post_image_link, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'gallery') {
		$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
		
		agricole_post_type_slider(get_the_ID(), $cmsmasters_post_images, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'video') {
		$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
		$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
		$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
		
		agricole_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
		$cmsmasters_post_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
		
		if ($cmsmasters_post_image_show != 'true') {
			agricole_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'cmsmasters_open_post_img', false, false, false, true, false);
		}
	} elseif ($cmsmasters_post_format == 'audio') {
		$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
		
		agricole_post_type_audio($cmsmasters_post_audio_links);
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'agricole') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['agricole' . '_blog_post_tag'] || 
		$cmsmasters_option['agricole' . '_blog_post_like'] || 
		$cmsmasters_option['agricole' . '_blog_post_comment'] 
	) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
			
			agricole_get_post_tags();
			
			
			if (
				$cmsmasters_option['agricole' . '_blog_post_date'] || 
				$cmsmasters_option['agricole' . '_blog_post_author'] 
			) {
				echo '<div class="cmsmasters_post_meta_info entry-meta">';
					
					agricole_get_post_comments('post');
					
					agricole_get_post_likes('post');
					
				echo '</div>';
			}
			
		echo '</footer>';
	}
	?>
</article>
<!-- Finish Post Single Article -->
<?php 

if ($cmsmasters_post_sharing_box == 'true') {
	agricole_sharing_box(esc_html__('Like this post?', 'agricole'), 'h2');
}


if ($cmsmasters_option['agricole' . '_blog_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['agricole' . '_blog_post_nav_order_cat']) ? $cmsmasters_option['agricole' . '_blog_post_nav_order_cat'] : false);
	
	agricole_prev_next_posts($order_cat, 'category');
}


if ($cmsmasters_post_author_box == 'true') {
	agricole_author_box(esc_html__('About author', 'agricole'), 'h2', 'h4');
}


if (get_the_tags()) {
	$tgsarray = array();
	
	foreach (get_the_tags() as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_post_more_posts != 'hide') {
	agricole_related( 
		'h2', 
		esc_html__('More posts', 'agricole'), 
		esc_html__('No posts found', 'agricole'), 
		$cmsmasters_post_more_posts, 
		$tgsarray, 
		$cmsmasters_option['agricole' . '_blog_more_posts_count'], 
		$cmsmasters_option['agricole' . '_blog_more_posts_pause'], 
		'post' 
	);
}


echo agricole_get_pings(get_the_ID(), 'h2');


comments_template();

