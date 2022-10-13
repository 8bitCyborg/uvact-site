<?php

//load post-post-types
require_once BRICK_CORE_MODULES_PATH . '/post-types/post-type-interface.php';
require_once BRICK_CORE_MODULES_PATH . '/shortcodes/shortcode-interface.php';

require_once BRICK_CORE_MODULES_PATH . '/post-types/portfolio/portfolio-register.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/portfolio/shortcodes/portfolio-list.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/portfolio/shortcodes/portfolio-slider.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/testimonials/testimonials-register.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/testimonials/shortcodes/testimonials.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/carousels/carousel-register.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/carousels/shortcodes/carousel.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/slider/slider-register.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/slider/tax-custom-fields.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/slider/shortcodes/slider.php';
require_once BRICK_CORE_MODULES_PATH . '/post-types/post-types-register.php'; //this has to be loaded last

//load shortcodes inteface
include_once BRICK_CORE_MODULES_PATH . '/shortcodes/shortcodes.php';
require_once BRICK_CORE_MODULES_PATH . '/shortcodes/shortcode-loader.php';

include_once BRICK_CORE_MODULES_PATH . '/qode-like.php';
include_once BRICK_CORE_MODULES_PATH . '/qode-seo.php';
include_once BRICK_CORE_MODULES_PATH . '/widgets/helper.php';

add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'call_to_action_widget', 'do_shortcode' );

if ( ! function_exists( 'brick_qode_include_meta_boxes' ) ) {
	function brick_qode_include_meta_boxes() {
		if ( class_exists( 'WP_Block_Type' ) && defined( 'BRICK_QODE' )  ) {
			add_action( 'admin_head', 'brick_qode_meta_box_add' );
		} else {
			add_action( 'add_meta_boxes', 'brick_qode_meta_box_add' );
		}
	}
	
	add_action( 'after_setup_theme', 'brick_qode_include_meta_boxes' );
}

if ( ! function_exists( 'brick_qode_create_meta_box_handler' ) ) {
	function brick_qode_create_meta_box_handler( $box, $key ) {
		
		add_meta_box(
			'qodef-meta-box-' . $key,
			$box->title,
			'brick_qode_render_meta_box',
			$box->scope,
			'advanced',
			'high',
			array( 'box' => $box )
		);
	}
}

if ( ! function_exists( 'brick_qode_core_get_carousel_slider_array' ) ) {
	/**
	 * Function that returns associative array of carousels,
	 * where key is term slug and value is term name
	 * @return array
	 */
	function brick_qode_core_get_carousel_slider_array() {
		$carousels_array = array();
		$terms           = get_terms( 'carousels_category' );
		
		if ( is_array( $terms ) && count( $terms ) ) {
			$carousels_array[''] = '';
			foreach ( $terms as $term ) {
				$carousels_array[ $term->slug ] = $term->name;
			}
		}
		
		return $carousels_array;
	}
}

if ( ! function_exists( 'brick_qode_core_get_carousel_slider_array_vc' ) ) {
	/**
	 * Function that returns array of carousels formatted for Visual Composer
	 *
	 * @return array array of carousels where key is term title and value is term slug
	 *
	 * @see brick_qode_core_get_carousel_slider_array
	 */
	function brick_qode_core_get_carousel_slider_array_vc() {
		return array_flip( brick_qode_core_get_carousel_slider_array() );
	}
}

if ( ! function_exists( 'brick_qode_maintenance_mode' ) ) {
	/**
	 * Function that redirects user to desired landing page if maintenance mode is turned on in options
	 */
	function brick_qode_maintenance_mode() {
		$global_options = brick_qode_return_global_options();
		
		$protocol = is_ssl() ? "https://" : "http://";
		if ( isset( $global_options['qode_maintenance_mode'] ) && $global_options['qode_maintenance_mode'] == 'yes' && isset( $global_options['qode_maintenance_page'] ) && $global_options['qode_maintenance_page'] != "" && ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) && ! is_admin() && ! is_user_logged_in() && $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] != get_permalink( $global_options['qode_maintenance_page'] ) ) {
			wp_redirect( get_permalink( esc_url( $global_options['qode_maintenance_page'] ) ) );
			exit;
		}
	}
}

if ( ! function_exists( 'brick_qode_initial_maintenance' ) ) {
	/**
	 * Function that initalize maintenance function
	 */
	function brick_qode_initial_maintenance() {
		$global_options = brick_qode_return_global_options();
		
		if ( isset( $global_options['qode_maintenance_mode'] ) && $global_options['qode_maintenance_mode'] == 'yes' ) {
			add_action( 'init', 'brick_qode_maintenance_mode', 2 );
		}
	}
	
	add_action( 'init', 'brick_qode_initial_maintenance', 1 );
}