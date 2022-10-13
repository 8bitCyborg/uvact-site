<?php

$loading_image = "";
if ( brick_qode_options()->getOptionValue( 'loading_image' ) ) {
	$loading_image = brick_qode_options()->getOptionValue( 'loading_image' );
}

if ( brick_qode_options()->getOptionValue( 'loading_animation' ) == "on" ) { ?>
	<div class="ajax_loader">
		<div class="ajax_loader_1">
			<?php if ( ! empty( $loading_image ) ) { ?>
				<div class="ajax_loader_2"><img src="<?php echo esc_url( $loading_image ); ?>" alt="<?php esc_attr_e( 'Preloader image', 'brick' ); ?>"/></div>
			<?php } else {
				brick_qode_loading_spinners();
			} ?>
		</div>
	</div>
<?php }