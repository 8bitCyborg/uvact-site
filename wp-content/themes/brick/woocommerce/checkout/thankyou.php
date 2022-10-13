<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="woocommerce-order">

	<?php if ( $order ) : ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'brick' ); ?></p>

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions"><?php
            if ( is_user_logged_in() )
                esc_html_e( 'Please attempt your purchase again or go to your account page.', 'brick' );
            else
                esc_html_e( 'Please attempt your purchase again.', 'brick' );
        ?></p>

        <p class="woocommerce-thankyou-order-failed-actions">
            <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'brick' ) ?></a>
            <?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>" class="button pay"><?php esc_html_e( 'My Account', 'brick' ); ?></a>
            <?php endif; ?>
        </p>

    <?php else : ?>

        <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'brick' ), $order ); ?></p>

        <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details clearfix">
            <li class="woocommerce-order-overview__order order">
                <span><?php esc_html_e( 'Order:', 'brick' ); ?></span>
                <p><?php echo esc_html($order->get_order_number()); ?></p>
            </li>
            <li class="woocommerce-order-overview__date date">
                <span><?php esc_html_e( 'Date:', 'brick' ); ?></span>
                <p><?php echo wc_format_datetime( $order->get_date_created() ); ?></p>
            </li>
            <li class="woocommerce-order-overview__total total">
                <span><?php esc_html_e( 'Total:', 'brick' ); ?></span>
                <p>
					<?php echo wp_kses($order->get_formatted_order_total(), array(
						'span' => array(
							'class' => true,
							'id' => true,
							'title' => true
						)
					)); ?>
				</p>
            </li>
            <?php if ( $order->get_payment_method_title() ) : ?>
            <li class="woocommerce-order-overview__payment-method method">
                <span><?php esc_html_e( 'Payment method:', 'brick' ); ?></span>
                <p><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></p>
            </li>
            <?php endif; ?>
        </ul>

    <?php endif; ?>

    <div class="order-details-wrapper">
        <?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
    </div>

<?php else : ?>

    <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'brick' ), null ); ?></p>

<?php endif; ?>