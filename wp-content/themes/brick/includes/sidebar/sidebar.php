<?php

if ( ! function_exists( 'brick_qode_register_sidebars' ) ) {
	/**
	 * Function that registers theme's sidebars
	 */
	function brick_qode_register_sidebars() {
		$centered_logo = false;
		if ( brick_qode_options()->getOptionValue( 'center_logo_image' ) == "yes" ) {
			$centered_logo = true;
		}
		
		if ( brick_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_hiding" ) {
			$centered_logo = true;
		}
		
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'brick' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Default Sidebar area. In order to display this area you need to enable sidebar layout through global theme options or on page meta box options.', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar Page', 'brick' ),
			'id'            => 'sidebar_page',
			'description'   => esc_html__( 'Default Sidebar area for Pages. In order to display this area you need to enable sidebar layout through global theme options or on page meta box options.', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Top Left', 'brick' ),
			'id'            => 'header_left',
			'description'   => esc_html__( 'Widgets added here will appear on the left side in top header area', 'brick' ),
			'before_widget' => '<div class="header-widget %2$s header-left-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Top Right', 'brick' ),
			'id'            => 'header_right',
			'description'   => esc_html__( 'Widgets added here will appear on the right side in top header area', 'brick' ),
			'before_widget' => '<div class="header-widget %2$s header-right-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		if ( $centered_logo ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Header Left From Logo', 'brick' ),
				'id'            => 'header_left_from_logo',
				'description'   => esc_html__( 'Widgets added here will appear on the left side of logo area', 'brick' ),
				'before_widget' => '<div class="header-widget %2$s header-left-from-logo-widget"><div class="header-left-from-logo-widget-inner"><div class="header-left-from-logo-widget-inner2">',
				'after_widget'  => '</div></div></div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
			
			register_sidebar( array(
				'name'          => esc_html__( 'Header Right From Logo', 'brick' ),
				'id'            => 'header_right_from_logo',
				'description'   => esc_html__( 'Widgets added here will appear on the right side of logo area', 'brick' ),
				'before_widget' => '<div class="header-widget %2$s header-right-from-logo-widget"><div class="header-right-from-logo-widget-inner"><div class="header-right-from-logo-widget-inner2">',
				'after_widget'  => '</div></div></div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
		
		if ( brick_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "stick_with_left_right_menu" ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Header Bottom Left', 'brick' ),
				'id'            => 'header_bottom_left',
				'description'   => esc_html__( 'Widgets added here will appear on the left side in menu header area', 'brick' ),
				'before_widget' => '<div class="header_bottom_widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Bottom Right', 'brick' ),
			'id'            => 'header_bottom_right',
			'description'   => esc_html__( 'Widgets added here will appear on the right side in menu header area', 'brick' ),
			'before_widget' => '<div class="header_bottom_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Bottom Center', 'brick' ),
			'id'            => 'header_bottom_center',
			'description'   => esc_html__( 'This widget area is used only for content of Header Bottom when header type is set to Fixed Header Top', 'brick' ),
			'before_widget' => '<div class="header_bottom_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Fixed Right', 'brick' ),
			'id'            => 'header_fixed_right',
			'description'   => esc_html__( 'This widget area is used only with "sticky with menu on bottom" menu type', 'brick' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Fullscreen Menu Bottom', 'brick' ),
			'id'            => 'fullscreen_menu',
			'description'   => esc_html__( 'This widget area is rendered below fullscreen menu', 'brick' ),
			'before_widget' => '<div class="header-widget %2$s fullscreen-menu-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Fullscreen Menu Top', 'brick' ),
			'id'            => 'fullscreen_above_menu',
			'description'   => esc_html__( 'This widget area is rendered above fullscreen menu', 'brick' ),
			'before_widget' => '<div class="header-above-menu-widget %2$s fullscreen-above-menu-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Left Menu Area', 'brick' ),
			'id'            => 'vertical_menu_area',
			'description'   => esc_html__( 'Widgets added here will appear inside Left Menu Area', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Side Area', 'brick' ),
			'id'            => 'sidearea',
			'description'   => esc_html__( 'Widgets added here will appear inside Side Area', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 1', 'brick' ),
			'id'            => 'footer_column_1',
			'description'   => esc_html__( 'Widgets added here will appear in the first column of top footer area', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 2', 'brick' ),
			'id'            => 'footer_column_2',
			'description'   => esc_html__( 'Widgets added here will appear in the second column of top footer area', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 3', 'brick' ),
			'id'            => 'footer_column_3',
			'description'   => esc_html__( 'Widgets added here will appear in the third column of top footer area', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 4', 'brick' ),
			'id'            => 'footer_column_4',
			'description'   => esc_html__( 'Widgets added here will appear in the fourth column of top footer area', 'brick' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Text', 'brick' ),
			'id'            => 'footer_text',
			'description'   => esc_html__( 'Widgets added here will appear in the footer bottom text area', 'brick' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Bottom Left', 'brick' ),
			'id'            => 'footer_bottom_left',
			'description'   => esc_html__( 'Widgets added here will appear in the left side of footer bottom area', 'brick' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Bottom Right', 'brick' ),
			'id'            => 'footer_bottom_right',
			'description'   => esc_html__( 'Widgets added here will appear in the right side of footer bottom area', 'brick' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		if ( brick_qode_is_woocommerce_installed() ) {
			register_sidebar( array(
				'name'          => esc_html__( 'WooCommerce Dropdown Widget Area', 'brick' ),
				'id'            => 'woocommerce_dropdown',
				'description'   => esc_html__( 'This widget area should be used only for WooCommerce dropdown cart widget', 'brick' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
	}
	
	add_action( 'widgets_init', 'brick_qode_register_sidebars' );
}

if ( ! function_exists( 'brick_qode_add_support_custom_sidebar' ) ) {
	/**
	 * Function that adds theme support for custom sidebars. It also creates qode_sidebar object
	 */
	function brick_qode_add_support_custom_sidebar() {
		add_theme_support( 'BrickQodeSidebar' );
		
		if ( get_theme_support( 'BrickQodeSidebar' ) ) {
			new BrickQodeSidebar();
		}
	}
	
	add_action( 'after_setup_theme', 'brick_qode_add_support_custom_sidebar' );
}