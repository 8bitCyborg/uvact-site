<?php

define( 'BRICK_QODE', true );
define( 'BRICK_ROOT', get_template_directory_uri() );
define( 'BRICK_ROOT_DIR', get_template_directory() );
define( 'BRICK_CSS_ROOT', BRICK_ROOT . '/css' );
define( 'BRICK_CSS_ROOT_DIR', BRICK_ROOT_DIR . '/css' );
define( 'BRICK_JS_ROOT', BRICK_ROOT . '/js' );
define( 'BRICK_JS_ROOT_DIR', BRICK_ROOT_DIR . '/js' );
define( 'BRICK_FRAMEWORK_ROOT', BRICK_ROOT . '/framework' );
define( 'BRICK_FRAMEWORK_ROOT_DIR', BRICK_ROOT_DIR . '/framework' );
define( 'BRICK_INCLUDES_ROOT', BRICK_ROOT . '/includes' );
define( 'BRICK_INCLUDES_ROOT_DIR', BRICK_ROOT_DIR . '/includes' );

include_once BRICK_FRAMEWORK_ROOT_DIR . '/qode-fallback-helper-functions.php';
include_once BRICK_FRAMEWORK_ROOT_DIR . '/qode-framework.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/qode-plugin-helper-functions.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/qode-dynamic-helper-functions.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/qode-body-classes.php';

if ( file_exists( BRICK_ROOT_DIR . '/export' ) && file_exists( BRICK_ROOT_DIR . '/export/qode-export.php' ) ) {
	include_once BRICK_ROOT_DIR . '/export/qode-export.php';
}

include_once BRICK_INCLUDES_ROOT_DIR . '/qode-breadcrumbs.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/nav_menu/qode-menu.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/sidebar/qode-custom-sidebar.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/header/qode-header-functions.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/title/qode-title-functions.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/qode-portfolio-functions.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/qode-loading-spinners.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/qode-options-helper-functions.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/sidebar/sidebar.php';
require_once BRICK_ROOT_DIR . '/plugins/class-tgm-plugin-activation.php';
include_once BRICK_ROOT_DIR . '/plugins/plugins-activation.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/qode-blog-functions.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/widgets/qode-call-to-action-widget.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/widgets/qode-sticky-sidebar.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/widgets/qode-latest-posts-widget.php';
include_once BRICK_INCLUDES_ROOT_DIR . '/widgets/qode-latest-posts-menu-widget.php';

//does woocommerce function exists?
if ( brick_qode_is_woocommerce_installed() ) {
	//include woocommerce configuration
	require_once BRICK_ROOT_DIR . '/woocommerce/woocommerce_configuration.php';
	//include cart dropdown widget
	include_once BRICK_INCLUDES_ROOT_DIR . '/widgets/qode-woocommerce-dropdown-cart.php';
}