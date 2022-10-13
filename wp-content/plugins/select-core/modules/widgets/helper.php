<?php

if ( ! function_exists( 'brick_core_register_widgets' ) ) {
	function brick_core_register_widgets() {
		$widgets = array(
			'BrickQodeCallToAction',
			'BrickQodeLatestPostsMenu',
			'BrickQodeLatestPosts',
			'BrickQodeStickySidebar'
		);
		
		if ( brick_qode_is_woocommerce_installed() ) {
			$widgets[] = 'BrickQodeWooCommerceDropDownCart';
		}
		
		foreach ( $widgets as $widget ) {
			register_widget( $widget );
		}
	}
	
	add_action( 'widgets_init', 'brick_core_register_widgets' );
}