<?php
/**
 * @package 	WordPress
 * @subpackage 	Agricole Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function agricole_child_enqueue_styles() {
    wp_enqueue_style('agricole-child-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'agricole_child_enqueue_styles', 11);

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 40 );
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 40;
  return $cols;
}
?>