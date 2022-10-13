<?php

add_action( 'after_setup_theme', 'brick_qode_admin_map_init', 0 );
function brick_qode_admin_map_init() {
	global $brick_qode_framework;
	
	do_action( 'brick_qode_action_before_options_map' );
	
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/10.general/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/20.logo/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/30.header/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/40.footer/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/50.title/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/60.fonts/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/70.elements/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/75.sidebar/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/80.blog/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/90.portfolio/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/95.slider/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/96.verticalsplitslider/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/100.social/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/110.error404/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/130.parallax/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/140.contentbottom/map.php";
	if ( brick_qode_visual_composer_installed() && version_compare( brick_qode_get_vc_version(), '4.4.2' ) >= 0 ) {
		require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/144.visualcomposer/map.php";
	} else {
		$brick_qode_framework->qodeOptions->addOption( "enable_grid_elements", "no" );
	}
	if ( brick_qode_contact_form_7_installed() ) {
		require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/145.contactform7/map.php";
	}
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/146.maintenance/map.php";
	if ( brick_qode_is_woocommerce_installed() ) {
		require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/150.woocommerce/map.php";
	}
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/options/160.reset/map.php";
}