<?php
/**
 * @cmsmasters_package 	Agricole
 * @cmsmasters_version 	1.0.0
 */


global $product;


// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

?>
<li <?php wc_product_class(); ?>>
	<article class="cmsmasters_product">
		<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10
		 */
		remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
		
		do_action( 'woocommerce_before_shop_loop_item' );
		?>
		<figure class="cmsmasters_product_img">
			<a href="<?php the_permalink(); ?>">
				<?php woocommerce_template_loop_product_thumbnail(); ?>
			</a>
			<div class="cmsmasters_product_sale_wrap">
			<?php 
				woocommerce_show_product_loop_sale_flash();
				
				$availability = $product->get_availability();

				if (esc_attr($availability['class']) == 'out-of-stock') {
					echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
				}
			?>
			</div>
		</figure>
		<div class="cmsmasters_product_inner">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
			
			do_action( 'woocommerce_before_shop_loop_item_title' );
			
			
			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
			
			do_action( 'woocommerce_shop_loop_item_title' );
			
			agricole_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
			?>
			<header class="cmsmasters_product_header entry-header">
				<h3 class="cmsmasters_product_title entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
			</header>
			<?php 
			if (get_the_terms($product->get_id(), 'product_cat')) {
				echo '<div class="cmsmasters_product_cat entry-meta">' . 
					agricole_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
				'</div>';
			}
			?>
			<div class="cmsmasters_product_info_wrap">
				<div class="cmsmasters_product_info">
				<?php
					woocommerce_template_loop_price();
					
					
					/**
					 * Hook: woocommerce_after_shop_loop_item_title.
					 *
					 * @hooked woocommerce_template_loop_rating - 5
					 * @hooked woocommerce_template_loop_price - 10
					 */
					remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
					remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
					
					do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
				</div>
				<?php
				echo '<div class="cmsmasters_product_add_wrap">' . 
					'<div class="cmsmasters_product_add_inner">';
						agricole_woocommerce_add_to_cart_button();
					echo '</div>' . 
				'</div>';
				?>
			</div>
		</div>
		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
		
		do_action( 'woocommerce_after_shop_loop_item' );
		?>
	</article>
</li>