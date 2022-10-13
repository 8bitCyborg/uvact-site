<?php

$verticalSplitSliderPage = new BrickQodeAdminPage(
	"11",
	esc_html__( "Vertical Split Slider", 'brick' ),
	"fa fa-arrows-v"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"verticalSplitSlider",
	$verticalSplitSliderPage
);

// General Style

$panel10 = new QodePanel(
	esc_html__( "General Style", 'brick' ),
	"general_style"
);
$verticalSplitSliderPage->addChild(
	"panel10",
	$panel10
);

$vss_navigation_color = new QodeField(
	"color",
	"vss_navigation_color",
	"",
	esc_html__( "Navigation Color", 'brick' ),
	esc_html__( "Define color for navigation dots", 'brick' )
);
$panel10->addChild(
	"vss_navigation_color",
	$vss_navigation_color
);

$vss_navigation_size = new QodeField(
	"text",
	"vss_navigation_size",
	"",
	esc_html__( "Navigation Size (px)", 'brick' ),
	esc_html__( "Define size for navigation dots", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$panel10->addChild(
	"vss_navigation_size",
	$vss_navigation_size
);

$vss_navigation_spacing_from_edge = new QodeField(
	"text",
	"vss_navigation_spacing_from_edge",
	"",
	esc_html__( "Navigation Position (px)", 'brick' ),
	esc_html__( "Define position of navigation from right/left edge of slider", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$panel10->addChild(
	"vss_navigation_spacing_from_edge",
	$vss_navigation_spacing_from_edge
);

$vss_left_panel_size = new QodeField(
	"text",
	"vss_left_panel_size",
	"",
	esc_html__( "Left Slide Panel size (%)", 'brick' ),
	esc_html__( "Define size for left slide panel. Note that sum of left and right slide panel should be 100.", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$panel10->addChild(
	"vss_left_panel_size",
	$vss_left_panel_size
);

$vss_right_panel_size = new QodeField(
	"text",
	"vss_right_panel_size",
	"",
	esc_html__( "Right Slide Panel size (%)", 'brick' ),
	esc_html__( "Define size for right slide panel. Note that sum of left and right slide panel should be 100.", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$panel10->addChild(
	"vss_right_panel_size",
	$vss_right_panel_size
);

