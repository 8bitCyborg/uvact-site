<?php

add_action( 'after_setup_theme', 'brick_qode_meta_boxes_map_init', 1 );
function brick_qode_meta_boxes_map_init() {
	global $brick_qode_framework;
	
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/page/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/portfolio/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/slides/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/testimonials/map.php";
	require_once BRICK_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/carousels/map.php";
}