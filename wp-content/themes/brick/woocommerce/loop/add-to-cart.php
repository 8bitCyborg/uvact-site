<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
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

global $product;

$type = "type1";
if ( brick_qode_options()->getOptionValue( 'woo_products_list_type' ) ) {
	$type = brick_qode_options()->getOptionValue( 'woo_products_list_type' );
}

if ( ! $product->is_in_stock() ) : ?>
   <div class="product_image_overlay"></div><span class="onsale out-of-stock-button"><span><?php echo apply_filters( 'out_of_stock_add_to_cart_text', esc_html__( 'Out of stock', 'brick' ) ); ?></span></span>
<?php else :
	echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
		sprintf( '<div class="product_image_overlay"></div><div class="add-to-cart-button-outer"><div class="add-to-cart-button-inner"><div class="add-to-cart-button-inner2"><a class="product_link_over" href="'.get_permalink($product->get_id()).'"></a><a href="%s" data-quantity="%s" class="qbutton add-to-cart-button %s" %s>%s</a></div></div></div>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
			esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
			isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
			esc_html( $product->add_to_cart_text() )
		),
		$product, $args );
endif; ?>