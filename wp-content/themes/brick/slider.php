<?php
$brick_slider_shortcode = get_post_meta( brick_qode_get_page_id(), "qode_revolution-slider", true );

if ( ! empty( $brick_slider_shortcode ) ) { ?>
	<div class="q_slider">
		<div class="q_slider_inner">
			<?php echo do_shortcode( wp_kses_post( $brick_slider_shortcode ) ); // XSS OK ?>
		</div>
	</div>
<?php } ?>