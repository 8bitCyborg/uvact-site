<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$classes = array();
if ( brick_qode_options()->getOptionValue( 'woo_products_list_type' ) ) {
	$classes[] = brick_qode_options()->getOptionValue( 'woo_products_list_type' );
} else {
	$classes[] = 'type1';
}

if ( brick_qode_options()->getOptionValue( 'woo_products_hover_list_type' ) ) {
	$classes[] = brick_qode_options()->getOptionValue( 'woo_products_hover_list_type' );
} else {
	$classes[] = 'hover_type1';
}

if ( brick_qode_options()->getOptionValue( 'woo_products_disable_space_between_products' ) ) {
	$classes[] = 'article_no_space';
}

?>
<ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?> clearfix <?php echo esc_attr( implode( ' ', $classes ) ); ?>">