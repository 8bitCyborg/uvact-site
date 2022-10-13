<?php

$contentbottomPage = new BrickQodeAdminPage(
	"16",
	esc_html__( "Content Bottom", 'brick' ),
	"fa fa-level-down"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Content Bottom", 'brick' ),
	$contentbottomPage
);

//Content Bottom Area

$panel1 = new QodePanel(
	esc_html__( "Content Bottom Area", 'brick' ),
	"content_bottom_area_panel"
);
$contentbottomPage->addChild(
	"panel1",
	$panel1
);

$enable_content_bottom_area = new QodeField(
	"yesno",
	"enable_content_bottom_area",
	"no",
	esc_html__( "Enable Content Bottom Area", 'brick' ),
	esc_html__( "This option will enable Content Bottom area on pages", 'brick' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_content_bottom_area_container"
	)
);
$panel1->addChild(
	"enable_content_bottom_area",
	$enable_content_bottom_area
);

$enable_content_bottom_area_container = new QodeContainer(
	"enable_content_bottom_area_container",
	"enable_content_bottom_area",
	"no"
);
$panel1->addChild(
	"enable_content_bottom_area_container",
	$enable_content_bottom_area_container
);

$custom_sidebars = brick_qode_get_custom_sidebars();

$content_bottom_sidebar_custom_display = new QodeField(
	"selectblank",
	"content_bottom_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'brick' ),
	esc_html__( "Choose a Content Bottom sidebar to display", 'brick' ),
	$custom_sidebars
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_sidebar_custom_display",
	$content_bottom_sidebar_custom_display
);

$content_bottom_in_grid = new QodeField(
	"yesno",
	"content_bottom_in_grid",
	"yes",
	esc_html__( "Display in Grid", 'brick' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'brick' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_in_grid",
	$content_bottom_in_grid
);

$content_bottom_background_color = new QodeField(
	"color",
	"content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for Content Bottom area", 'brick' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_background_color",
	$content_bottom_background_color
);