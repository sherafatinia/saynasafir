<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.2
 * 
 * @cmsmasters_package 	Agricole
 * @cmsmasters_version 	1.0.1
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


include(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/templates/content-widget-product.php');