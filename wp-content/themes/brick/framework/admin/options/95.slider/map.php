<?php

$sliderPage = new BrickQodeAdminPage(
	"10",
	esc_html__( "Select Slider", 'brick' ),
	"fa fa-arrows-h"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"slider",
	$sliderPage
);

// General Style

$panel3 = new QodePanel(
	esc_html__( "General Style", 'brick' ),
	"navigation_control_style"
);
$sliderPage->addChild(
	"panel3",
	$panel3
);

$qs_slider_height_mobile = new QodeField(
	"text",
	"qs_slider_height_mobile",
	"",
	esc_html__( "Slider Height For Mobile Devices (px)", 'brick' ),
	esc_html__( "Define slider height for mobile devices", 'brick' )
);
$panel3->addChild(
	"qs_slider_height_mobile",
	$qs_slider_height_mobile
);

$qs_slider_preloader_background = new QodeField(
	"color",
	"qs_slider_preloader_background",
	"",
	esc_html__( "Slider Preloader Background Color", 'brick' ),
	esc_html__( "Define background color for slider preloader", 'brick' )
);
$panel3->addChild(
	"qs_slider_preloader_background",
	$qs_slider_preloader_background
);

// Navigation Control Style

$panel2 = new QodePanel(
	esc_html__( "Navigation Bullets Style", 'brick' ),
	"navigation_control_style"
);
$sliderPage->addChild(
	"panel2",
	$panel2
);

$qs_navigation_control_color = new QodeField(
	"color",
	"qs_navigation_control_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose color for navigation bullets controls", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"qs_navigation_control_color",
	$qs_navigation_control_color
);

$qs_navigation_control_size = new QodeField(
	"text",
	"qs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'brick' ),
	esc_html__( "Define size for navigation bullets controls (w=h in px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"qs_navigation_control_size",
	$qs_navigation_control_size
);

$qs_navigation_control_border_radius = new QodeField(
	"text",
	"qs_navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "Define border radius for navigation bullets controls", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"qs_navigation_control_border_radius",
	$qs_navigation_control_border_radius
);

// Custom cursor navigation style

$panel4 = new QodePanel(
	esc_html__( "Custom Cursor Navigation Style", 'brick' ),
	"navigation_custom_cursor_style"
);
$sliderPage->addChild(
	"panel4",
	$panel4
);

$qs_enable_navigation_custom_cursor = new QodeField(
	"yesno",
	"qs_enable_navigation_custom_cursor",
	"no",
	esc_html__( "Enable Custom Cursor for Navigation", 'brick' ),
	esc_html__( "Enabling this option will display custom cursors for slider navigation", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_container"
	)
);
$panel4->addChild(
	"qs_enable_navigation_custom_cursor",
	$qs_enable_navigation_custom_cursor
);

$qs_enable_navigation_custom_cursor_container = new QodeContainer(
	"qs_enable_navigation_custom_cursor_container",
	"qs_enable_navigation_custom_cursor",
	"no"
);
$panel4->addChild(
	"qs_enable_navigation_custom_cursor_container",
	$qs_enable_navigation_custom_cursor_container
);

$cursor_image_left_right_area_size = new QodeField(
	"text",
	"cursor_image_left_right_area_size",
	"",
	esc_html__( "Clickable Left/Right Area Size (%)", 'brick' ),
	esc_html__( "Define size of clickable left/right slider area in relation to slider width (default value is 8%)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_right_area_size",
	$cursor_image_left_right_area_size
);

$cursor_image_left_normal = new QodeField(
	"image",
	"cursor_image_left_normal",
	"",
	esc_html__( "Cursor Image 'Left' - Normal", 'brick' ),
	esc_html__( "Choose a default cursor 'Left' image to display ", 'brick' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_normal",
	$cursor_image_left_normal
);

$cursor_image_right_normal = new QodeField(
	"image",
	"cursor_image_right_normal",
	"",
	esc_html__( "Cursor Image 'Right' - Normal", 'brick' ),
	esc_html__( "Choose a default cursor 'Right' image to display ", 'brick' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_normal",
	$cursor_image_right_normal
);

$cursor_image_left_light = new QodeField(
	"image",
	"cursor_image_left_light",
	"",
	esc_html__( "Cursor Image 'Left' - Light", 'brick' ),
	esc_html__( "Choose a cursor 'Left' light image to display ", 'brick' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_light",
	$cursor_image_left_light
);

$cursor_image_right_light = new QodeField(
	"image",
	"cursor_image_right_light",
	"",
	esc_html__( "Cursor Image 'Right' - Light", 'brick' ),
	esc_html__( "Choose a cursor 'Right' light image to display ", 'brick' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_light",
	$cursor_image_right_light
);

$cursor_image_left_dark = new QodeField(
	"image",
	"cursor_image_left_dark",
	"",
	esc_html__( "Cursor Image 'Left' - Dark", 'brick' ),
	esc_html__( "Choose a cursor 'Left' dark image to display ", 'brick' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_dark",
	$cursor_image_left_dark
);

$cursor_image_right_dark = new QodeField(
	"image",
	"cursor_image_right_dark",
	"",
	esc_html__( "Cursor Image 'Right' - Dark", 'brick' ),
	esc_html__( "Choose a cursor 'Right' dark image to display ", 'brick' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_dark",
	$cursor_image_right_dark
);

$qs_enable_navigation_custom_cursor_grab = new QodeField(
	"yesno",
	"qs_enable_navigation_custom_cursor_grab",
	"no",
	esc_html__( "Enable Custom Cursor for 'Grab' Arrow", 'brick' ),
	esc_html__( "Enabling this option will display custom cursor for slider 'Grab' arrow", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_grab_container"
	)
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab",
	$qs_enable_navigation_custom_cursor_grab
);

$qs_enable_navigation_custom_cursor_grab_container = new QodeContainer(
	"qs_enable_navigation_custom_cursor_grab_container",
	"qs_enable_navigation_custom_cursor_grab",
	"no"
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab_container",
	$qs_enable_navigation_custom_cursor_grab_container
);

$cursor_image_grab_normal = new QodeField(
	"image",
	"cursor_image_grab_normal",
	"",
	esc_html__( "Cursor Image 'Grab' - Normal", 'brick' ),
	esc_html__( "Choose a default cursor 'Grab' image to display", 'brick' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_normal",
	$cursor_image_grab_normal
);

$cursor_image_grab_light = new QodeField(
	"image",
	"cursor_image_grab_light",
	"",
	esc_html__( "Cursor Image 'Grab' - Light", 'brick' ),
	esc_html__( "Choose a cursor 'Grab' light image to display", 'brick' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_light",
	$cursor_image_grab_light
);

$cursor_image_grab_dark = new QodeField(
	"image",
	"cursor_image_grab_dark",
	"",
	esc_html__( "Cursor Image 'Grab' - Dark", 'brick' ),
	esc_html__( "Choose a cursor 'Grab' dark image to display", 'brick' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_dark",
	$cursor_image_grab_dark
);
				
				
				
				
				
	