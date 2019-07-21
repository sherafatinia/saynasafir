<?php
/**
 * @cmsmasters_package 	Agricole
 * @cmsmasters_version 	1.0.0
 */


get_header();


remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

do_action( 'woocommerce_before_main_content' );

	while ( have_posts() ) : the_post();

		wc_get_template_part( 'content', 'single-product' );

	endwhile; // end of the loop.

do_action( 'woocommerce_after_main_content' );


do_action('woocommerce_sidebar');


get_footer();

