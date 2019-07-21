<?php
/**
 * @cmsmasters_package 	Agricole
 * @cmsmasters_version 	1.0.0
 */


// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
$thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );


echo '<div class="images cmsmasters_product_images">';
	if (method_exists($product, 'get_available_variations')) {
		$cmsmasters_product_variable_items = $product->get_available_variations();
		
		
		echo '<div class="dn">';
		foreach ($cmsmasters_product_variable_items as $cmsmasters_product_variable_item) {
			if ($cmsmasters_product_variable_item['image']['full_src'] != '' && $cmsmasters_product_variable_item['image']['full_src'] != $full_size_image[0]) {
				echo '<a href="' . esc_url($cmsmasters_product_variable_item['image']['full_src']) . '" itemprop="image" title="' . esc_attr($cmsmasters_product_variable_item['image']['title']) . '" rel="ilightbox[cmsmasters_product_gallery]"></a>';
			}
		}
		echo '</div>';
	}
	
	
	if ($product->get_image_id()) {
		$attachment_id     = $post_thumbnail_id;
		$main_image        = true;
		$flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
		$image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size );
		$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
		$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
		$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
		$image             = wp_get_attachment_image( $attachment_id, $image_size, false, array(
			'title'                   => get_post_field( 'post_title', $attachment_id ),
			'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
			'data-src'                => $full_src[0],
			'data-large_image'        => $full_src[0],
			'data-large_image_width'  => $full_src[1],
			'data-large_image_height' => $full_src[2],
			'class'                   => $main_image ? 'wp-post-image' : '',
		) );
		
		$html = '<div data-thumb="' . esc_url( $thumbnail_src[0] ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_src[0] ) . '" class="cmsmasters_product_image" rel="ilightbox[cmsmasters_product_gallery]">' . $image . '</a></div>';
	} else {
		$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
		$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'agricole' ) );
		$html .= '</div>';
	}
	
	echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
	
	do_action('woocommerce_product_thumbnails');

echo '</div>';

