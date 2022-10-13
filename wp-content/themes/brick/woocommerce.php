<?php
/*
Template Name: WooCommerce
*/

get_header();

$brick_sidebar = brick_qode_get_sidebar_layout(false);
?>
<?php if ( brick_qode_options()->getOptionValue( 'woo_products_enable_full_width_template' ) == "yes" && ! is_singular( 'product' ) ) { ?>
	<div class="full_width" <?php brick_qode_inline_page_background_style(); ?>>
<?php } else { ?>
	<div class="container" <?php brick_qode_inline_page_background_style(); ?>>
<?php } ?>
	<?php if ( brick_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
		<div class="overlapping_content"><div class="overlapping_content_inner">
	<?php } ?>
	<?php if ( brick_qode_options()->getOptionValue( 'woo_products_enable_full_width_template' ) == "yes" && ! is_singular( 'product' ) ){ ?>
		<div class="full_width_inner" <?php brick_qode_inline_page_padding_style(); ?>>
	<?php } else{ ?>
		<div class="container_inner default_template_holder clearfix" <?php brick_qode_inline_page_padding_style(); ?>>
	<?php } ?>
		<?php if ( ! is_singular( 'product' ) ) { ?>
			<?php if ( ( $brick_sidebar == "default" ) || ( $brick_sidebar == "" ) ) : ?>
				<?php brick_qode_woocommerce_content(); ?>
			<?php elseif ( $brick_sidebar == "1" || $brick_sidebar == "2" ): ?>
				<?php brick_qode_set_number_of_columns_woo_product_list(); ?>
				<?php if ( $brick_sidebar == "1" ) : ?>
					<div class="two_columns_66_33 grid2 woocommerce_with_sidebar clearfix">
						<div class="column1">
				<?php elseif ( $brick_sidebar == "2" ) : ?>
					<div class="two_columns_75_25 grid2 woocommerce_with_sidebar clearfix">
						<div class="column1 content_left_from_sidebar">
				<?php endif; ?>
							<div class="column_inner">
								<?php brick_qode_woocommerce_content(); ?>
							</div>
						</div>
						<div class="column2"><?php get_sidebar(); ?></div>
					</div>
			<?php elseif ( $brick_sidebar == "3" || $brick_sidebar == "4" ): ?>
				<?php brick_qode_set_number_of_columns_woo_product_list(); ?>
				<?php if ( $brick_sidebar == "3" ) : ?>
					<div class="two_columns_33_66 grid2 woocommerce_with_sidebar clearfix">
						<div class="column1"><?php get_sidebar(); ?></div>
						<div class="column2">
				<?php elseif ( $brick_sidebar == "4" ) : ?>
					<div class="two_columns_25_75 grid2 woocommerce_with_sidebar clearfix">
						<div class="column1"><?php get_sidebar(); ?></div>
						<div class="column2 content_right_from_sidebar">
				<?php endif; ?>
							<div class="column_inner">
								<?php brick_qode_woocommerce_content(); ?>
							</div>
						</div>
					</div>
			<?php endif; ?>
		<?php } else {
			brick_qode_woocommerce_content();
		} ?>
		</div>
	<?php if ( brick_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
		</div></div>
	<?php } ?>
</div>
<?php get_footer(); ?>