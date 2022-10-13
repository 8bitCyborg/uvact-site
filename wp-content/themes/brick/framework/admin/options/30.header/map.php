<?php

$headerandfooterPage = new BrickQodeAdminPage(
	"2",
	esc_html__( "Header", 'brick' ),
	"fa fa-header"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"headerandfooter",
	$headerandfooterPage
);

// Header Position

$panel6 = new QodePanel(
	esc_html__( "Header Position", 'brick' ),
	"header_position"
);
$headerandfooterPage->addChild(
	"panel6",
	$panel6
);
$vertical_area = new QodeField(
	"yesno",
	"vertical_area",
	"no",
	esc_html__( "Switch to Side Menu", 'brick' ),
	esc_html__( "Enabling this option will switch to a Side Menu area (default is Top Menu)", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_header_panel,#qodef_top_menu_panel,#qodef_header_top_panel,#qodef_enable_search_panel,#qodef_enable_side_area_panel,#qodef_enable_popup_menu_panel",
		"dependence_show_on_yes" => "#qodef_vertical_areas_panel"
	)
);
$panel6->addChild(
	"vertical_area",
	$vertical_area
);

// Header

$panel5 = new QodePanel(
	esc_html__( "Header", 'brick' ),
	"header_panel",
	"vertical_area",
	"yes"
);
$headerandfooterPage->addChild(
	"panel5",
	$panel5
);

$header_in_grid = new QodeField(
	"yesno",
	"header_in_grid",
	"yes",
	esc_html__( "Header in Grid", 'brick' ),
	esc_html__( "Enabling this option will display header content in grid", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_header_padding_container",
		"dependence_show_on_yes" => "#qodef_header_in_grid_container"
	)
);
$panel5->addChild(
	"header_in_grid",
	$header_in_grid
);

$header_bottom_appearance = new QodeField(
	"select",
	"header_bottom_appearance",
	"fixed",
	esc_html__( "Header Type", 'brick' ),
	esc_html__( "Choose the header layout & behavior", 'brick' ),
	array(
		"regular" => esc_html__( "Regular", 'brick' ),
		"fixed" => esc_html__( "Fixed", 'brick' ),
		"fixed fixed_minimal" => esc_html__( "Fixed Minimal", 'brick' ),
		"fixed_hiding" => esc_html__( "Fixed Advanced", 'brick' ),
		"fixed_top_header" => esc_html__( "Fixed Header Top", 'brick' ),
		"stick" => esc_html__( "Sticky", 'brick' ),
		"stick menu_bottom" => esc_html__( "Sticky Expanded", 'brick' ),
		"stick_with_left_right_menu" => esc_html__( "Sticky Divided", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"regular"                    => "#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"fixed"                      => "#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"fixed_hiding"               => "#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_menu_items_position_container",
			"stick menu_bottom"          => "#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"stick_with_left_right_menu" => "#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container",
			"stick"                      => "#qodef_menu_background_color_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"fixed_top_header"           => "#qodef_header_height_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_top_area_scroll_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container,#enable_border_for_sticky_container",
			"fixed fixed_minimal"        => "#qodef_menu_position_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
		),
		"show"       => array(
			"regular"                    => "#qodef_header_height_container,#qodef_menu_position_container,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed"                      => "#qodef_header_height_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick"                      => "#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick menu_bottom"          => "#qodef_header_height_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick_with_left_right_menu" => "#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_menu_items_position_container,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed_hiding"               => "#qodef_header_height_container,#qodef_menu_background_color_container,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed_top_header"           => "",
			"fixed fixed_minimal"        => "#qodef_header_height_container,#qodef_header_height_scroll,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container"
		)
	)
);

$panel5->addChild(
	"header_bottom_appearance",
	$header_bottom_appearance
);

$scroll_amount_for_sticky_container = new QodeContainer(
	"scroll_amount_for_sticky_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$panel5->addChild(
	"scroll_amount_for_sticky_container",
	$scroll_amount_for_sticky_container
);

$scroll_amount_for_sticky = new QodeField(
	"text",
	"scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll Amount for Sticky (px)", 'brick' ),
	esc_html__( "Enter scroll amount (in pixels) for Sticky Menu to appear", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$scroll_amount_for_sticky_container->addChild(
	"scroll_amount_for_sticky",
	$scroll_amount_for_sticky
);

$hide_initial_sticky = new QodeField(
	"yesno",
	"hide_initial_sticky",
	"no",
	esc_html__( "Hide Header Initially", 'brick' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'brick' )
);
$scroll_amount_for_sticky_container->addChild(
	"hide_initial_sticky",
	$hide_initial_sticky
);

$menu_items_position_container = new QodeContainer(
	"menu_items_position_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick",
		"stick menu_bottom"
	)
);
$panel5->addChild(
	"menu_items_position_container",
	$menu_items_position_container
);

$menu_items_position = new QodeField(
	"select",
	"menu_items_position",
	"",
	esc_html__( "Menu Items Position", 'brick' ),
	esc_html__( "Choose whether you would like the menu items to start from center of screen and extend outwards, or from the edges of the grid and extend inward", 'brick' ),
	array(
		"from_center" => esc_html__( "From Center", 'brick' ),
		"from_edges" => esc_html__( "From Edges of Grid", 'brick' )
	)
);
$menu_items_position_container->addChild(
	"menu_items_position",
	$menu_items_position
);

$scroll_amount_for_fixed_hiding_container = new QodeContainer(
	"scroll_amount_for_fixed_hiding_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$panel5->addChild(
	"scroll_amount_for_fixed_hiding_container",
	$scroll_amount_for_fixed_hiding_container
);
$scroll_amount_for_fixed_hiding = new QodeField(
	"text",
	"scroll_amount_for_fixed_hiding",
	"",
	esc_html__( "Scroll Amount (px)", 'brick' ),
	esc_html__( "Enter scroll amount (in pixels) for menu to hide", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$scroll_amount_for_fixed_hiding_container->addChild(
	"scroll_amount_for_fixed_hiding",
	$scroll_amount_for_fixed_hiding
);

$menu_position_container = new QodeContainer(
	"menu_position_container",
	"header_bottom_appearance",
	"",
	array(
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_hiding",
		"fixed_top_header"
	)
);
$panel5->addChild(
	"menu_position_container",
	$menu_position_container
);

$menu_position = new QodeField(
	"select",
	"menu_position",
	"",
	esc_html__( "Menu Position", 'brick' ),
	esc_html__( "Choose a menu position (default is right alignment)", 'brick' ),
	array(
		"-1" => esc_html__( "Right", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"left" => esc_html__( "Left", 'brick' )
	)
);
$menu_position_container->addChild(
	"menu_position",
	$menu_position
);

$center_logo_image = new QodeField(
	"yesno",
	"center_logo_image",
	"no",
	esc_html__( "Center Logo", 'brick' ),
	esc_html__( "Enabling this option will center logo and position it above menu", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_center_logo_image_container"
	)
);
$menu_position_container->addChild(
	"center_logo_image",
	$center_logo_image
);

$center_logo_image_container = new QodeContainer(
	"center_logo_image_container",
	"center_logo_image",
	"no"
);
$menu_position_container->addChild(
	"center_logo_image_container",
	$center_logo_image_container
);

$enable_border_top_bottom_menu = new QodeField(
	"yesno",
	"enable_border_top_bottom_menu",
	"no",
	esc_html__( "Enable Top/Bottom Border in Menu", 'brick' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_border_container"
	)
);
$center_logo_image_container->addChild(
	"enable_border_top_bottom_menu",
	$enable_border_top_bottom_menu
);

$menu_border_container = new QodeContainer(
	"menu_border_container",
	"enable_border_top_bottom_menu",
	"no"
);
$center_logo_image_container->addChild(
	"menu_border_container",
	$menu_border_container
);

$color_border_top_bottom_menu = new QodeField(
	"color",
	"color_border_top_bottom_menu",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose a color for the top/bottom border in menu.", 'brick' )
);
$menu_border_container->addChild(
	"color_border_top_bottom_menu",
	$color_border_top_bottom_menu
);

$disable_text_shadow_for_sticky_container = new QodeContainer(
	"disable_text_shadow_for_sticky_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"disable_text_shadow_for_sticky_container",
	$disable_text_shadow_for_sticky_container
);

$disable_text_shadow_for_sticky = new QodeField(
	"yesno",
	"disable_text_shadow_for_sticky",
	"yes",
	esc_html__( "Disable Text Shadow For Scrolled Header", 'brick' ),
	esc_html__( "Enabling this option will display text shadow for scrolled/sticky header", 'brick' )
);
$disable_text_shadow_for_sticky_container->addChild(
	"disable_text_shadow_for_sticky",
	$disable_text_shadow_for_sticky
);

$enable_border_for_sticky_container = new QodeContainer(
	"enable_border_for_sticky_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"enable_border_for_sticky_container",
	$enable_border_for_sticky_container
);

$enable_border_for_sticky = new QodeField(
	"yesno",
	"enable_border_for_sticky",
	"no",
	esc_html__( "Enable Border For Scrolled Header", 'brick' ),
	esc_html__( "Enabling this option will display border for scrolled/sticky header", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_border_bottom_color_for_sticky_container"
	)
);
$enable_border_for_sticky_container->addChild(
	"enable_border_for_sticky",
	$enable_border_for_sticky
);

$enable_border_bottom_color_for_sticky_container = new QodeContainer(
	"enable_border_bottom_color_for_sticky_container",
	"enable_border_for_sticky",
	"no"
);
$panel5->addChild(
	"enable_border_color_for_sticky_container",
	$enable_border_bottom_color_for_sticky_container
);

$group1 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Choose style for border for scrolled/sticky header", 'brick' )
);
$enable_border_bottom_color_for_sticky_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$border_bottom_color_for_sticky = new QodeField(
	"colorsimple",
	"border_bottom_color_for_sticky",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"border_bottom_color_for_sticky",
	$border_bottom_color_for_sticky
);

$border_bottom_width_for_sticky = new QodeField(
	"textsimple",
	"border_bottom_width_for_sticky",
	"",
	esc_html__( "Border Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"border_bottom_width_for_sticky",
	$border_bottom_width_for_sticky
);

$header_height_container = new QodeContainerNoStyle(
	"header_height_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"header_height_container",
	$header_height_container
);

$group1 = new QodeGroup(
	esc_html__( "Header Height", 'brick' ),
	esc_html__( "Enter header height in pixels", 'brick' )
);
$header_height_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$header_height = new QodeField(
	"textsimple",
	"header_height",
	"",
	esc_html__( "Initial (px)", 'brick' ),
	esc_html__( "Initial header (px)", 'brick' )
);
$row1->addChild(
	"header_height",
	$header_height
);

$header_height_scroll = new QodeField(
	"textsimple",
	"header_height_scroll",
	"",
	esc_html__( "After Scroll (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_hiding",
		"fixed_top_header"
	)
);
$row1->addChild(
	"header_height_scroll",
	$header_height_scroll
);

$header_height_sticky = new QodeField(
	"textsimple",
	"header_height_sticky",
	"",
	esc_html__( "After Scroll (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_height_sticky",
	$header_height_sticky
);

$header_height_scroll_hidden = new QodeField(
	"textsimple",
	"header_height_scroll_hidden",
	"",
	esc_html__( "After Scroll (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_height_scroll_hidden",
	$header_height_scroll_hidden
);

$header_padding_container = new QodeContainer(
	"header_padding_container",
	"header_in_grid",
	"yes"
);
$panel5->addChild(
	"header_padding_container",
	$header_padding_container
);

$header_left_padding = new QodeField(
	"text",
	"header_left_padding",
	"",
	esc_html__( "Header Left Padding", 'brick' ),
	esc_html__( "Set left padding for header bottom appearance (default value is 45px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_padding_container->addChild(
	"header_left_padding",
	$header_left_padding
);

$header_right_padding = new QodeField(
	"text",
	"header_right_padding",
	"",
	esc_html__( "Header Right Padding", 'brick' ),
	esc_html__( "Set right padding for header bottom appearance (default value is 45px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_padding_container->addChild(
	"header_right_padding",
	$header_right_padding
);

$header_style = new QodeField(
	"select",
	"header_style",
	"",
	esc_html__( "Header Skin", 'brick' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'brick' ),
	array(
		"-1"    => "",
		"light" => esc_html__( "Light", 'brick' ),
		"dark" => esc_html__( "Dark", 'brick' )
	)
);
$panel5->addChild(
	"header_style",
	$header_style
);

$enable_header_style_on_scroll = new QodeField(
	"yesno",
	"enable_header_style_on_scroll",
	"no",
	esc_html__( "Enable Header Style on Scroll", 'brick' ),
	esc_html__( "Enabling this option, header will change style depending on row settings for dark/light style", 'brick' )
);
$panel5->addChild(
	"enable_header_style_on_scroll",
	$enable_header_style_on_scroll
);

$group2 = new QodeGroup(
	esc_html__( "Header Background Color", 'brick' ),
	esc_html__( "Choose a background color for header area", 'brick' )
);
$panel5->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$header_background_color = new QodeField(
	"colorsimple",
	"header_background_color",
	"",
	esc_html__( "Initial", 'brick' ),
	""
);
$row1->addChild(
	"header_background_color",
	$header_background_color
);

$header_background_color_scroll = new QodeField(
	"colorsimple",
	"header_background_color_scroll",
	"",
	esc_html__( "After Scroll", 'brick' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header"
	)
);
$row1->addChild(
	"header_background_color_scroll",
	$header_background_color_scroll
);

$header_background_color_sticky = new QodeField(
	"colorsimple",
	"header_background_color_sticky",
	"",
	esc_html__( "After Scroll", 'brick' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_background_color_sticky",
	$header_background_color_sticky
);

$group3 = new QodeGroup(
	esc_html__( "Header Transparency", 'brick' ),
	esc_html__( "Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)", 'brick' )
);
$panel5->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$header_background_transparency_initial = new QodeField(
	"textsimple",
	"header_background_transparency_initial",
	"",
	esc_html__( "Initial", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_background_transparency_initial",
	$header_background_transparency_initial
);

$header_background_transparency_scroll = new QodeField(
	"textsimple",
	"header_background_transparency_scroll",
	"",
	esc_html__( "After Scroll", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header"
	)
);
$row1->addChild(
	"header_background_transparency_scroll",
	$header_background_transparency_scroll
);

$header_background_transparency_sticky = new QodeField(
	"textsimple",
	"header_background_transparency_sticky",
	"",
	esc_html__( "After Scroll", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_background_transparency_sticky",
	$header_background_transparency_sticky
);

$header_in_grid_container = new QodeContainerNoStyle(
	'header_in_grid_container',
	'header_in_grid',
	'no'
);
$panel5->addChild(
	'header_in_grid_container',
	$header_in_grid_container
);

$group6 = new QodeGroup(
	esc_html__( 'Header Grid Content Background Color', 'brick' ),
	esc_html__( 'Choose a background color for header grid content area', 'brick' )
);
$header_in_grid_container->addChild(
	'group6',
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	'row1',
	$row1
);

$header_grid_background_color = new QodeField(
	"colorsimple",
	"header_grid_background_color",
	"",
	esc_html__( "Initial", 'brick' ),
	""
);
$row1->addChild(
	"header_grid_background_color",
	$header_grid_background_color
);

$header_grid_background_color_scroll = new QodeField(
	"colorsimple",
	"header_grid_background_color_scroll",
	"",
	esc_html__( "After Scroll", 'brick' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header"
	)
);
$row1->addChild(
	"header_grid_background_color_scroll",
	$header_grid_background_color_scroll
);

$header_grid_background_color_sticky = new QodeField(
	"colorsimple",
	"header_grid_background_color_sticky",
	"",
	esc_html__( "After Scroll", 'brick' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_grid_background_color_sticky",
	$header_grid_background_color_sticky
);

$group7 = new QodeGroup(
	esc_html__( 'Header Grid Content Transparency', 'brick' ),
	esc_html__( 'Choose a transparency for the header background color (0 = fully transparent, 1 = opaque', 'brick' )
);
$header_in_grid_container->addChild(
	'group7',
	$group7
);

$row2 = new QodeRow();
$group7->addChild(
	"row2",
	$row2
);

$header_grid_background_transparency_initial = new QodeField(
	"textsimple",
	"header_grid_background_transparency_initial",
	"",
	esc_html__( "Initial", 'brick' ),
	""
);
$row2->addChild(
	"header_grid_background_transparency_initial",
	$header_grid_background_transparency_initial
);

$header_grid_background_transparency_scroll = new QodeField(
	"textsimple",
	"header_grid_background_transparency_scroll",
	"",
	esc_html__( "After Scroll", 'brick' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header"
	)
);
$row2->addChild(
	"header_grid_background_transparency_scroll",
	$header_grid_background_transparency_scroll
);

$header_grid_background_transparency_sticky = new QodeField(
	"textsimple",
	"header_grid_background_transparency_sticky",
	"",
	esc_html__( "After Scroll", 'brick' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row2->addChild(
	"header_grid_background_transparency_sticky",
	$header_grid_background_transparency_sticky
);

$group8 = new QodeGroup(
	esc_html__( 'Header in Grid Padding', 'brick' ),
	esc_html__( 'Left and right padding for header in grid', 'brick' )
);
$header_in_grid_container->addChild(
	'group8',
	$group8
);

$row3 = new QodeRow();
$group8->addChild(
	'row3',
	$row3
);

$header_in_grid_padding_left = new QodeField(
	'textsimple',
	'header_in_grid_padding_left',
	'',
	esc_html__( 'Left (px)', 'brick' ),
	''
);
$row3->addChild(
	'header_in_grid_padding_left',
	$header_in_grid_padding_left
);

$header_in_grid_padding_right = new QodeField(
	'textsimple',
	'header_in_grid_padding_right',
	'',
	esc_html__( 'Right (px)', 'brick' ),
	''
);
$row3->addChild(
	'header_in_grid_padding_right',
	$header_in_grid_padding_right
);

$enable_header_top_border = new QodeField(
	"yesno",
	"enable_header_top_border",
	"no",
	esc_html__( "Enable Header Top Border", 'brick' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_header_top_border_container"
	)
);
$panel5->addChild(
	"enable_header_top_border",
	$enable_header_top_border
);

$header_top_border_container = new QodeContainer(
	"header_top_border_container",
	"enable_header_top_border",
	"no"
);
$panel5->addChild(
	"header_top_border_container",
	$header_top_border_container
);

$header_top_border_width = new QodeField(
	"text",
	"header_top_border_width",
	"",
	esc_html__( "Header Top Border Width (px)", 'brick' ),
	esc_html__( "Choose a width for the header top border. Note: If width has not been set, border top will not be displayed", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_border_container->addChild(
	"header_top_border_width",
	$header_top_border_width
);

$header_top_border_color = new QodeField(
	"color",
	"header_top_border_color",
	"",
	esc_html__( "Header Top Border Color", 'brick' ),
	esc_html__( "Choose a color for the header top border. ", 'brick' )
);
$header_top_border_container->addChild(
	"header_top_border_color",
	$header_top_border_color
);

$header_top_border_transparency = new QodeField(
	"text",
	"header_top_border_transparency",
	"",
	esc_html__( "Header Top Border Transparency", 'brick' ),
	esc_html__( "Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header top Border Color is filled", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_border_container->addChild(
	"header_top_border_transparency",
	$header_top_border_transparency
);

$enable_header_bottom_border = new QodeField(
	"yesno",
	"enable_header_bottom_border",
	"no",
	esc_html__( "Enable Header Bottom Border", 'brick' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_header_bottom_border_container"
	)
);
$panel5->addChild(
	"enable_header_bottom_border",
	$enable_header_bottom_border
);

$header_bottom_border_container = new QodeContainer(
	"header_bottom_border_container",
	"enable_header_bottom_border",
	"no"
);
$panel5->addChild(
	"header_bottom_border_container",
	$header_bottom_border_container
);

$header_bottom_border_width = new QodeField(
	"text",
	"header_bottom_border_width",
	"",
	esc_html__( "Header Bottom Border Width (px)", 'brick' ),
	esc_html__( "Choose a width for the header bottom  border. Note: If width has not been set, border bottom will not be displayed", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_bottom_border_container->addChild(
	"header_bottom_border_width",
	$header_bottom_border_width
);

$header_bottom_border_color = new QodeField(
	"color",
	"header_bottom_border_color",
	"",
	esc_html__( "Header Bottom Border Color", 'brick' ),
	esc_html__( "Choose a color for the header bottom border.", 'brick' )
);
$header_bottom_border_container->addChild(
	"header_bottom_border_color",
	$header_bottom_border_color
);

$header_botom_border_transparency = new QodeField(
	"text",
	"header_botom_border_transparency",
	"",
	esc_html__( "Header Bottom Border Transparency", 'brick' ),
	esc_html__( "Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header Bottom Border Color is filled", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_bottom_border_container->addChild(
	"header_botom_border_transparency",
	$header_botom_border_transparency
);

$header_botom_border_in_grid = new QodeField(
	"yesno",
	"header_botom_border_in_grid",
	"no",
	esc_html__( "Enable Header Bottom Border in Grid", 'brick' ),
	esc_html__( "Enabling this option will set header border bottom width in grid", 'brick' )
);
$header_bottom_border_container->addChild(
	"header_botom_border_in_grid",
	$header_botom_border_in_grid
);

// Menu

$panel4 = new QodePanel(
	esc_html__( "Top Menu", 'brick' ),
	"top_menu_panel",
	"vertical_area",
	"yes"
);
$headerandfooterPage->addChild(
	"panel4",
	$panel4
);

$menu_background_color_container = new QodeContainer(
	"menu_background_color_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"stick",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$panel4->addChild(
	"menu_background_color_container",
	$menu_background_color_container
);

$menu_background_color = new QodeField(
	"color",
	"menu_background_color",
	"",
	esc_html__( "Background Color of 1st Level Menu", 'brick' ),
	esc_html__( "Choose a color for the menu background (works only for Fixed Advanced and Sticky Expanded header types)", 'brick' )
);
$menu_background_color_container->addChild(
	"menu_background_color",
	$menu_background_color
);

$enable_menu_top_bottom_border = new QodeField(
	"yesno",
	"enable_menu_top_bottom_border",
	"no",
	esc_html__( "Enable Top/Bottom Borders in 1st Level Menu", 'brick' ),
	esc_html__( "Enabling this option will display top and bottom borders around 1st level menu (works only for Fixed Advanced and Sticky Expanded header types)", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_top_bottom_border_container"
	)
);
$menu_background_color_container->addChild(
	"enable_menu_top_bottom_border",
	$enable_menu_top_bottom_border
);
$menu_top_bottom_border_container = new QodeContainer(
	"menu_top_bottom_border_container",
	"enable_menu_top_bottom_border",
	"no"
);
$menu_background_color_container->addChild(
	"menu_top_bottom_border_container",
	$menu_top_bottom_border_container
);
$color_menu_top_bottom_border = new QodeField(
	"color",
	"color_menu_top_bottom_border",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose a color for the top/bottom border in 1st level menu.", 'brick' )
);
$menu_top_bottom_border_container->addChild(
	"color_menu_top_bottom_border",
	$color_menu_top_bottom_border
);

$enable_menu_wide_background = new QodeField(
	"yesno",
	"enable_menu_wide_background",
	"no",
	esc_html__( "Enable wide background in 1st Level Menu", 'brick' ),
	esc_html__( "Enabling this option will show wide background or borders in 1st level menu (works only for Fixed Advanced and Sticky Expanded header types)", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => ""
	)
);
$menu_background_color_container->addChild(
	"enable_menu_wide_background",
	$enable_menu_wide_background
);

$menu_item_icon_position = new QodeField(
	"select",
	"menu_item_icon_position",
	"left",
	esc_html__( "Icon Position in 1st Level Menu", 'brick' ),
	esc_html__( "Choose position of icon selected in Appearance->Menu->Menu Structure", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"top" => esc_html__( "Top", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"left" => "#qodef_menu_item_icon_position_container"
		),
		"show"       => array(
			"top" => "#qodef_menu_item_icon_position_container"
		)
	)
);
$panel4->addChild(
	"menu_item_icon_position",
	$menu_item_icon_position
);

$menu_item_icon_position_container = new QodeContainer(
	"menu_item_icon_position_container",
	"menu_item_icon_position",
	"left"
);
$panel4->addChild(
	"menu_item_icon_position_container",
	$menu_item_icon_position_container
);

$menu_item_icon_size = new QodeField(
	"text",
	"menu_item_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "Enter icon size in pixels", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_icon_position_container->addChild(
	"menu_item_icon_size",
	$menu_item_icon_size
);

$menu_item_style = new QodeField(
	"select",
	"menu_item_style",
	"small_item",
	esc_html__( "Item Height in 1st Level Menu", 'brick' ),
	esc_html__( "Choose menu item height", 'brick' ),
	array(
		"small_item" => esc_html__( "Small", 'brick' ),
		"large_item" => esc_html__( "Big", 'brick' )
	)
);
$panel4->addChild(
	"menu_item_style",
	$menu_item_style
);

$enable_manu_item_border = new QodeField(
	"yesno",
	"enable_manu_item_border",
	"no",
	esc_html__( "Enable 1st Level Menu Item Borders", 'brick' ),
	esc_html__( "Enabling this option will display border around menu items", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_item_border_container"
	)
);
$panel4->addChild(
	"enable_manu_item_border",
	$enable_manu_item_border
);

$menu_item_border_container = new QodeContainer(
	"menu_item_border_container",
	"",
	"no"
);
$panel4->addChild(
	"menu_item_border_container",
	$menu_item_border_container
);

$menu_item_border_style = new QodeField(
	"select",
	"menu_item_border_style",
	"",
	esc_html__( "Menu Item Border", 'brick' ),
	esc_html__( "Visible only if border width and one of the border color fields are filled.", 'brick' ),
	array(
		"all_borders" => esc_html__( "All Borders", 'brick' ),
		"top_bottom_borders" => esc_html__( "Top/Bottom Borders", 'brick' ),
		"right_border" => esc_html__( "Right Border", 'brick' ),
		"bottom_border" => esc_html__( "Bottom Border", 'brick' ),
		"bottom_border_double" => esc_html__( "Bottom Double Borders", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"bottom_border_double" => "#qodef_menu_item_border_width_container"
		),
		"show"       => array(
			"all_borders"        => "#qodef_menu_item_border_width_container",
			"top_bottom_borders" => "#qodef_menu_item_border_width_container",
			"right_border"       => "#qodef_menu_item_border_width_container",
			"bottom_border"      => "#qodef_menu_item_border_width_container"
		)
	)
);
$menu_item_border_container->addChild(
	"menu_item_border_style",
	$menu_item_border_style
);

$menu_item_border_width_container = new QodeContainer(
	"menu_item_border_width_container",
	"menu_item_border_style",
	"bottom_border_double"
);
$menu_item_border_container->addChild(
	"menu_item_border_width_container",
	$menu_item_border_width_container
);
$menu_item_border_width = new QodeField(
	"text",
	"menu_item_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "Enter border width (in pixels) ", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_border_width_container->addChild(
	"menu_item_border_width",
	$menu_item_border_width
);

$menu_item_border_radius = new QodeField(
	"text",
	"menu_item_border_radius",
	"",
	esc_html__( "Border Radius", 'brick' ),
	esc_html__( "Enter border radius (px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_border_width_container->addChild(
	"menu_item_border_radius",
	$menu_item_border_radius
);

$menu_item_border_style_style = new QodeField(
	"select",
	"menu_item_border_style_style",
	"solid",
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Choose border style", 'brick' ),
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' )
	)
);
$menu_item_border_width_container->addChild(
	"menu_item_border_style_style",
	$menu_item_border_style_style
);
$group1 = new QodeGroup(
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose a color for border", 'brick' )
);
$menu_item_border_container->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$menu_item_border_color = new QodeField(
	"colorsimple",
	"menu_item_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose border color", 'brick' )
);
$row1->addChild(
	"menu_item_border_color",
	$menu_item_border_color
);
$menu_item_hover_border_color = new QodeField(
	"colorsimple",
	"menu_item_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "Choose border color on menu item hover", 'brick' )
);
$row1->addChild(
	"menu_item_hover_border_color",
	$menu_item_hover_border_color
);
$menu_item_active_border_color = new QodeField(
	"colorsimple",
	"menu_item_active_border_color",
	"",
	esc_html__( "Border Active Color", 'brick' ),
	esc_html__( "Choose border color on active menu item", 'brick' )
);
$row1->addChild(
	"menu_item_active_border_color",
	$menu_item_active_border_color
);

$enable_menu_item_separators = new QodeField(
	"yesno",
	"enable_menu_item_separators",
	"no",
	esc_html__( "Enable 1st Level Menu Item Separators", 'brick' ),
	esc_html__( "Enabling this option will display separators between menu items", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_item_separators_container"
	)
);
$panel4->addChild(
	"enable_menu_item_separators",
	$enable_menu_item_separators
);
$menu_item_separators_container = new QodeContainer(
	"menu_item_separators_container",
	"enable_menu_item_separators",
	"no"
);
$panel4->addChild(
	"menu_item_separators_container",
	$menu_item_separators_container
);
$group1 = new QodeGroup(
	esc_html__( "Menu Item Separators Style", 'brick' ),
	""
);
$menu_item_separators_container->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$menu_item_separators_color = new QodeField(
	"colorsimple",
	"menu_item_separators_color",
	"",
	esc_html__( "Separators Color", 'brick' ),
	esc_html__( "Enter separators color", 'brick' )
);
$row1->addChild(
	"menu_item_separators_color",
	$menu_item_separators_color
);

$enable_menu_item_text_decoration = new QodeField(
	"yesno",
	"enable_menu_item_text_decoration",
	"no",
	esc_html__( "Enable 1st Level Menu Item Text Decoration", 'brick' ),
	esc_html__( "Enable this option and choose a text decoration for menu items in first level", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_item_text_decoration_container"
	)
);
$panel4->addChild(
	"enable_menu_item_text_decoration",
	$enable_menu_item_text_decoration
);

$menu_item_text_decoration_container = new QodeContainer(
	"menu_item_text_decoration_container",
	"enable_menu_item_text_decoration",
	"no"
);
$panel4->addChild(
	"menu_item_text_decoration_container",
	$menu_item_text_decoration_container
);

$group1 = new QodeGroup(
	esc_html__( "Menu Item Text Decoration", 'brick' ),
	""
);
$menu_item_text_decoration_container->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$menu_item_text_decoration_style = new QodeField(
	"selectsimple",
	"menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'brick' ),
	esc_html__( "Choose text decoration type for hover menu items", 'brick' ),
	array(
		"none" => esc_html__( "None", 'brick' ),
		"underline" => esc_html__( "Underline", 'brick' ),
		"line-through" => esc_html__( "Line-through", 'brick' ),
		"overline" => esc_html__( "Overline", 'brick' )
	)
);
$row1->addChild(
	"menu_item_text_decoration_style",
	$menu_item_text_decoration_style
);

$menu_item_active_text_decoration_style = new QodeField(
	"selectsimple",
	"menu_item_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'brick' ),
	esc_html__( "Choose text decoration type for active menu items", 'brick' ),
	array(
		"none" => esc_html__( "None", 'brick' ),
		"underline" => esc_html__( "Underline", 'brick' ),
		"line-through" => esc_html__( "Line-through", 'brick' ),
		"overline" => esc_html__( "Overline", 'brick' )
	)
);
$row1->addChild(
	"menu_item_active_text_decoration_style",
	$menu_item_active_text_decoration_style
);

$group1 = new QodeGroup(
	esc_html__( "Main Dropdown Menu", 'brick' ),
	esc_html__( "Choose a color and transparency for the main menu background (0 = fully transparent, 1 = opaque)", 'brick' )
);
$panel4->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$dropdown_background_color = new QodeField(
	"colorsimple",
	"dropdown_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"dropdown_background_color",
	$dropdown_background_color
);

$dropdown_background_transparency = new QodeField(
	"textsimple",
	"dropdown_background_transparency",
	"",
	esc_html__( "Transparency", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"dropdown_background_transparency",
	$dropdown_background_transparency
);

$dropdown_separator_color = new QodeField(
	"colorsimple",
	"dropdown_separator_color",
	"",
	esc_html__( "Item Bottom Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"dropdown_separator_color",
	$dropdown_separator_color
);

$dropdown_vertical_separator_color = new QodeField(
	"colorsimple",
	"dropdown_vertical_separator_color",
	"",
	esc_html__( "Item Vertical Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"dropdown_vertical_separator_color",
	$dropdown_vertical_separator_color
);

$row2 = new QodeRow();
$group1->addChild(
	"row2",
	$row2
);

$enable_dropdown_separator_full_width = new QodeField(
	"yesnosimple",
	"enable_dropdown_separator_full_width",
	"no",
	esc_html__( "Item Separator Full Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"enable_dropdown_separator_full_width",
	$enable_dropdown_separator_full_width
);

$group2 = new QodeGroup(
	esc_html__( "Main Dropdown Menu Padding", 'brick' ),
	esc_html__( "Choose a top/bottom padding for dropdown menu", 'brick' )
);
$panel4->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$dropdown_top_padding = new QodeField(
	"textsimple",
	"dropdown_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"dropdown_top_padding",
	$dropdown_top_padding
);

$dropdown_bottom_padding = new QodeField(
	"textsimple",
	"dropdown_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"dropdown_bottom_padding",
	$dropdown_bottom_padding
);

$menu_dropdown_appearance = new QodeField(
	"select",
	"menu_dropdown_appearance",
	"default",
	esc_html__( "Main Dropdown Menu Appearance", 'brick' ),
	esc_html__( "Choose appearance for dropdown menu", 'brick' ),
	array(
		"default" => esc_html__( "Default", 'brick' ),
		"slide_from_bottom" => esc_html__( "Slide From Bottom", 'brick' ),
		"slide_from_top" => esc_html__( "Slide From Top", 'brick' ),
		"animate_height" => esc_html__( "Animate Height", 'brick' )
	)
);
$panel4->addChild(
	"menu_dropdown_appearance",
	$menu_dropdown_appearance
);

$dropdown_top_position = new QodeField(
	"text",
	"dropdown_top_position",
	"",
	esc_html__( "Dropdown position", 'brick' ),
	esc_html__( "Enter value in percentage of entire header height", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel4->addChild(
	"dropdown_top_position",
	$dropdown_top_position
);

$enable_dropdown_menu_item_icon = new QodeField(
	"yesno",
	"enable_dropdown_menu_item_icon",
	"no",
	esc_html__( "Enable Arrow Icon for Dropdown Menu", 'brick' ),
	esc_html__( "Enabling this option will display an arrow icon for 1st level menu items which have a dropdown menu", 'brick' )
);
$panel4->addChild(
	"enable_dropdown_menu_item_icon",
	$enable_dropdown_menu_item_icon
);

$enable_dropdown_top_separator = new QodeField(
	"yesno",
	"enable_dropdown_top_separator",
	"no",
	esc_html__( "Enable Dropdown Top Separator", 'brick' ),
	esc_html__( "Enabling this option will display top separator for second level in dropdown menu", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_disable_dropdown_top_separator_container"
	)
);
$panel4->addChild(
	"enable_dropdown_top_separator",
	$enable_dropdown_top_separator
);

$disable_dropdown_top_separator_container = new QodeContainer(
	"disable_dropdown_top_separator_container",
	"enable_dropdown_top_separator",
	"no"
);
$panel4->addChild(
	"disable_dropdown_top_separator_container",
	$disable_dropdown_top_separator_container
);

$dropdown_top_separator_color = new QodeField(
	"color",
	"dropdown_top_separator_color",
	"",
	esc_html__( "Dropdown Top Separator Color", 'brick' ),
	esc_html__( "Choose color for top separator", 'brick' )
);
$disable_dropdown_top_separator_container->addChild(
	"dropdown_top_separator_color",
	$dropdown_top_separator_color
);

$dropdown_border_around = new QodeField(
	"yesno",
	"dropdown_border_around",
	"yes",
	esc_html__( "Enable Dropdown Menu Border", 'brick' ),
	esc_html__( "Enabling this option will display border around dropdown menu", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_dropdown_border_around_container"
	)
);
$panel4->addChild(
	"dropdown_border_around",
	$dropdown_border_around
);

$dropdown_border_around_container = new QodeContainer(
	"dropdown_border_around_container",
	"dropdown_border_around",
	"no"
);
$panel4->addChild(
	"dropdown_border_around_container",
	$dropdown_border_around_container
);

$dropdown_border_around_color = new QodeField(
	"color",
	"dropdown_border_around_color",
	"",
	esc_html__( "Dropdown Border Color", 'brick' ),
	esc_html__( "Choose a color for border around dropdown menu", 'brick' )
);
$dropdown_border_around_container->addChild(
	"dropdown_border_around_color",
	$dropdown_border_around_color
);

$enable_wide_manu_background = new QodeField(
	"yesno",
	"enable_wide_manu_background",
	"no",
	esc_html__( "Enable Full Width Background for Wide Dropdown Type", 'brick' ),
	esc_html__( "Enabling this option will show full width background  for wide dropdown type", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => ""
	)
);
$panel4->addChild(
	"enable_wide_manu_background",
	$enable_wide_manu_background
);

$panel3 = new QodePanel(
	esc_html__( "Select Search", 'brick' ),
	"enable_search_panel",
	"vertical_area",
	"yes"
);
$headerandfooterPage->addChild(
	"panel3",
	$panel3
);

$enable_search = new QodeField(
	"yesno",
	"enable_search",
	"no",
	esc_html__( "Enable Select Search Bar", 'brick' ),
	"This option enables Select Search functionality (search icon will appear next to main navigation)
        ",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_search_container"
	)
);
$panel3->addChild(
	"enable_search",
	$enable_search
);

$enable_search_container = new QodeContainer(
	"enable_search_container",
	"enable_search",
	"no"
);
$panel3->addChild(
	"enable_search_container",
	$enable_search_container
);

$search_type = new QodeField(
	"select",
	"search_type",
	"search_slides_from_header_bottom",
	esc_html__( "Select Search Type", 'brick' ),
	esc_html__( "Choose a type of Select search bar (Note: Slide From Header Bottom search type doesn't work with transparent header)", 'brick' ),
	array(
		"search_slides_from_header_bottom" => esc_html__( "Slide From Header Bottom", 'brick' ),
		"search_covers_header" => esc_html__( "Search Covers Header", 'brick' ),
		"fullscreen_search" => esc_html__( "Fullscreen Search", 'brick' ),
		"search_slides_from_window_top" => esc_html__( "Slide from Window Top", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"search_covers_header"             => "#qodef_search_height_container,#qodef_search_animation_container",
			"fullscreen_search"                => "#qodef_search_height_container,#qodef_search_cover_header_container",
			"search_slides_from_header_bottom" => "#qodef_search_animation_container,#qodef_search_cover_header_container",
			"search_slides_from_window_top"    => "#qodef_search_animation_container,#qodef_search_cover_header_container,#qodef_search_height_container"
		),
		"show"       => array(
			"search_slides_from_header_bottom" => "#qodef_search_height_container",
			"fullscreen_search"                => "#qodef_search_animation_container",
			"search_covers_header"             => "#qodef_search_cover_header_container",
			"search_slides_from_window_top"    => ""
		)
	)
);
$enable_search_container->addChild(
	"search_type",
	$search_type
);

$search_icon_pack = new QodeField(
	"select",
	"search_icon_pack",
	"font_awesome",
	esc_html__( "Search Icon Pack", 'brick' ),
	"Choose
                        icon pack for search icon",
	brick_qode_icon_collections()->getIconCollectionsExclude( 'linea_icons' )
);

$enable_search_container->addChild(
	"search_icon_pack",
	$search_icon_pack
);

$search_height_container = new QodeContainer(
	"search_height_container",
	"search_type",
	"search_slides_from_header_bottom",
	array(
		"search_covers_header",
		"fullscreen_search",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_height_container",
	$search_height_container
);

$search_height = new QodeField(
	"text",
	"search_height",
	"",
	esc_html__( "Search bar height", 'brick' ),
	esc_html__( "Set search bar height (in pixels)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$search_height_container->addChild(
	"search_height",
	$search_height
);

$search_animation_container = new QodeContainer(
	"search_animation_container",
	"search_type",
	"search_slides_from_header_bottom",
	array(
		"search_covers_header",
		"search_slides_from_header_bottom",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_animation_container",
	$search_animation_container
);

$search_animation = new QodeField(
	"select",
	"search_animation",
	"fade",
	esc_html__( "Fullscreen Search Overlay Animation", 'brick' ),
	esc_html__( "Choose animation for fullscreen search overlay", 'brick' ),
	array(
		"fade" => esc_html__( "Fade", 'brick' ),
		"from_circle" => esc_html__( "Circle appear", 'brick' )
	)
);
$search_animation_container->addChild(
	"search_animation",
	$search_animation
);

$search_cover_header_container = new QodeContainer(
	"search_cover_header_container",
	"search_type",
	"search_slides_from_header_bottom",
	array(
		"fullscreen_search",
		"search_slides_from_header_bottom",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_cover_header_container",
	$search_cover_header_container
);

$search_cover_only_bottom_yesno = new QodeField(
	"yesno",
	"search_cover_only_bottom_yesno",
	"no",
	esc_html__( "Cover Only Header Bottom", 'brick' ),
	esc_html__( "Enable this option to make search cover only header bottom", 'brick' )
);
$search_cover_header_container->addChild(
	"search_cover_only_bottom_yesno",
	$search_cover_only_bottom_yesno
);

$search_background_color = new QodeField(
	"color",
	"search_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for Select search bar", 'brick' )
);
$enable_search_container->addChild(
	"search_background_color",
	$search_background_color
);

$group8 = new QodeGroup(
	esc_html__( "Icon Background Style", 'brick' ),
	esc_html__( "Define background style for icon", 'brick' )
);
$enable_search_container->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$search_icon_background_color = new QodeField(
	"colorsimple",
	"search_icon_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for Select search icon", 'brick' )
);
$row1->addChild(
	"search_icon_background_color",
	$search_icon_background_color
);

$search_icon_background_hover_color = new QodeField(
	"colorsimple",
	"search_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "Choose a background hover color for Select search icon", 'brick' )
);
$row1->addChild(
	"search_icon_background_hover_color",
	$search_icon_background_hover_color
);

$search_icon_background_full_height = new QodeField(
	"yesnosimple",
	"search_icon_background_full_height",
	"no",
	esc_html__( "Icon Background Full Height", 'brick' ),
	esc_html__( "Enabling this option will make seacrh icon background to go full height", 'brick' )
);
$row1->addChild(
	"search_icon_background_full_height",
	$search_icon_background_full_height
);

$group1 = new QodeGroup(
	esc_html__( "Search Input Text", 'brick' ),
	esc_html__( "Define Style for Search text", 'brick' )
);
$enable_search_container->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$search_text_color = new QodeField(
	"colorsimple",
	"search_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_text_color",
	$search_text_color
);
$search_text_disabled_color = new QodeField(
	"colorsimple",
	"search_text_disabled_color",
	"",
	esc_html__( "Disabled Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_text_disabled_color",
	$search_text_disabled_color
);
$search_text_fontsize = new QodeField(
	"textsimple",
	"search_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_text_fontsize",
	$search_text_fontsize
);
$search_text_texttransform = new QodeField(
	"selectblanksimple",
	"search_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"search_text_texttransform",
	$search_text_texttransform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$search_text_google_fonts = new QodeField(
	"fontsimple",
	"search_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"search_text_google_fonts",
	$search_text_google_fonts
);
$search_text_fontstyle = new QodeField(
	"selectblanksimple",
	"search_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"search_text_fontstyle",
	$search_text_fontstyle
);
$search_text_fontweight = new QodeField(
	"selectblanksimple",
	"search_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"search_text_fontweight",
	$search_text_fontweight
);
$search_text_letterspacing = new QodeField(
	"textsimple",
	"search_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"search_text_letterspacing",
	$search_text_letterspacing
);

$group5 = new QodeGroup(
	esc_html__( "Search Label Text", 'brick' ),
	esc_html__( "Define Style for Search label text", 'brick' )
);
$enable_search_container->addChild(
	"group5",
	$group5
);
$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);
$search_label_text_color = new QodeField(
	"colorsimple",
	"search_label_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_label_text_color",
	$search_label_text_color
);
$search_label_text_fontsize = new QodeField(
	"textsimple",
	"search_label_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_label_text_fontsize",
	$search_label_text_fontsize
);
$search_label_text_texttransform = new QodeField(
	"selectblanksimple",
	"search_label_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"search_label_text_texttransform",
	$search_label_text_texttransform
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);
$search_label_text_google_fonts = new QodeField(
	"fontsimple",
	"search_label_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"search_label_text_google_fonts",
	$search_label_text_google_fonts
);
$search_label_text_fontstyle = new QodeField(
	"selectblanksimple",
	"search_label_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"search_label_text_fontstyle",
	$search_label_text_fontstyle
);
$search_label_text_fontweight = new QodeField(
	"selectblanksimple",
	"search_label_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"search_label_text_fontweight",
	$search_label_text_fontweight
);
$search_label_text_letterspacing = new QodeField(
	"textsimple",
	"search_label_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"search_label_text_letterspacing",
	$search_label_text_letterspacing
);

$group7 = new QodeGroup(
	esc_html__( "Initial Search Icon", 'brick' ),
	esc_html__( "Define size for Search icon in header", 'brick' )
);
$enable_search_container->addChild(
	"group7",
	$group7
);
$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);
$header_search_icon_size = new QodeField(
	"textsimple",
	"header_search_icon_size",
	"",
	esc_html__( "Icon Size", 'brick' ),
	esc_html__( "Set size for icon (ix pixels)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"header_search_icon_size",
	$header_search_icon_size
);

$group2 = new QodeGroup(
	esc_html__( "Search Icon", 'brick' ),
	esc_html__( "Define Style for Search icon", 'brick' )
);
$enable_search_container->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$search_icon_color = new QodeField(
	"colorsimple",
	"search_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for Select search bar", 'brick' )
);
$row1->addChild(
	"search_icon_color",
	$search_icon_color
);
$search_icon_hover_color = new QodeField(
	"colorsimple",
	"search_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose icon hover color for Select search bar", 'brick' )
);
$row1->addChild(
	"search_icon_hover_color",
	$search_icon_hover_color
);
$search_icon_disabled_color = new QodeField(
	"colorsimple",
	"search_icon_disabled_color",
	"",
	esc_html__( "Icon Disabled Color", 'brick' ),
	esc_html__( "Choose icon disabled color for Select search bar", 'brick' )
);
$row1->addChild(
	"search_icon_disabled_color",
	$search_icon_disabled_color
);
$search_icon_size = new QodeField(
	"textsimple",
	"search_icon_size",
	"",
	esc_html__( "Icon Size", 'brick' ),
	esc_html__( "Set size for icon (ix pixels)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"search_icon_size",
	$search_icon_size
);

$group3 = new QodeGroup(
	esc_html__( "Search Bottom Border", 'brick' ),
	esc_html__( "Define style for Search text input bottom border (for Fullscreen search type)", 'brick' )
);
$enable_search_container->addChild(
	"group3",
	$group3
);
$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);
$search_border_color = new QodeField(
	"colorsimple",
	"search_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose border color for search text input", 'brick' )
);
$row1->addChild(
	"search_border_color",
	$search_border_color
);
$search_border_focus_color = new QodeField(
	"colorsimple",
	"search_border_focus_color",
	"",
	esc_html__( "Border Focus Color", 'brick' ),
	esc_html__( "Choose focus color for search text input", 'brick' )
);
$row1->addChild(
	"search_border_focus_color",
	$search_border_focus_color
);
$group4 = new QodeGroup(
	esc_html__( "Search Close", 'brick' ),
	esc_html__( "Define style for Search close icon (for Fullscreen search type)", 'brick' )
);
$enable_search_container->addChild(
	"group4",
	$group4
);
$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);
$search_close_color = new QodeField(
	"colorsimple",
	"search_close_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose color for search close icon", 'brick' )
);
$row1->addChild(
	"search_close_color",
	$search_close_color
);
$search_close_hover_color = new QodeField(
	"colorsimple",
	"search_close_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose hover color for search close icon", 'brick' )
);
$row1->addChild(
	"search_close_hover_color",
	$search_close_hover_color
);
$search_close_back_color = new QodeField(
	"colorsimple",
	"search_close_back_color",
	"",
	esc_html__( "Icon Background Color", 'brick' ),
	esc_html__( "Choose color for search close icon", 'brick' )
);
$row1->addChild(
	"search_close_back_color",
	$search_close_back_color
);
$search_close_back_hover_color = new QodeField(
	"colorsimple",
	"search_close_back_hover_color",
	"",
	esc_html__( "Icon Background Hover Color", 'brick' ),
	esc_html__( "Choose hover color for search close icon", 'brick' )
);
$row1->addChild(
	"search_close_back_hover_color",
	$search_close_back_hover_color
);
$row2 = new QodeRow();
$group4->addChild(
	"row2",
	$row2
);
$search_close_size = new QodeField(
	"textsimple",
	"search_close_size",
	"",
	esc_html__( "Icon Size", 'brick' ),
	esc_html__( "Choose size for search close icon", 'brick' )
);
$row2->addChild(
	"search_close_size",
	$search_close_size
);

$group6 = new QodeGroup(
	esc_html__( "Search Spacing", 'brick' ),
	esc_html__( "Define padding and margins for Search icon", 'brick' )
);
$enable_search_container->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$search_padding_left = new QodeField(
	"textsimple",
	"search_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_padding_left",
	$search_padding_left
);

$search_padding_right = new QodeField(
	"textsimple",
	"search_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_padding_right",
	$search_padding_right
);

$search_margin_left = new QodeField(
	"textsimple",
	"search_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_margin_left",
	$search_margin_left
);

$search_margin_right = new QodeField(
	"textsimple",
	"search_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"search_margin_right",
	$search_margin_right
);

$panel11 = new QodePanel(
	esc_html__( "Side Area", 'brick' ),
	"enable_side_area_panel",
	"vertical_area",
	"yes"
);
$headerandfooterPage->addChild(
	"panel11",
	$panel11
);

$enable_side_area = new QodeField(
	"yesno",
	"enable_side_area",
	"yes",
	esc_html__( "Enable Side Area", 'brick' ),
	esc_html__( "This option enables a side area to be opened from main menu navigation", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_side_area_container"
	)
);
$panel11->addChild(
	"enable_side_area",
	$enable_side_area
);

$enable_side_area_container = new QodeContainer(
	"enable_side_area_container",
	"enable_side_area",
	"no"
);
$panel11->addChild(
	"enable_side_area_container",
	$enable_side_area_container
);

$side_area_type = new QodeField(
	"select",
	"side_area_type",
	"side_menu_slide_from_right",
	esc_html__( "Side Area Type", 'brick' ),
	esc_html__( "Choose a type of Side Area", 'brick' ),
	array(
		"side_menu_slide_from_right" => esc_html__( "Slide from Right Over Content", 'brick' ),
		"side_menu_slide_with_content" => esc_html__( "Slide from Right With Content", 'brick' ),
		"side_area_uncovered_from_content" => esc_html__( "Side Area Uncovered from Content", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"side_menu_slide_from_right"       => "#qodef_side_area_slide_with_content_container",
			"side_menu_slide_with_content"     => "#qodef_side_area_width_container",
			"side_area_uncovered_from_content" => "#qodef_side_area_width_container,#qodef_side_area_slide_with_content_container"
		),
		"show"       => array(
			"side_menu_slide_from_right"       => "#qodef_side_area_width_container",
			"side_menu_slide_with_content"     => "#qodef_side_area_slide_with_content_container",
			"side_area_uncovered_from_content" => ""
		)
	)
);

$enable_side_area_container->addChild(
	"side_area_type",
	$side_area_type
);

$side_area_width_container = new QodeContainer(
	"side_area_width_container",
	"side_area_type",
	"side_menu_slide_from_right",
	array(
		"side_menu_slide_with_content",
		"side_area_uncovered_from_content"
	)
);
$enable_side_area_container->addChild(
	"side_area_width_container",
	$side_area_width_container
);

$side_area_width = new QodeField(
	"text",
	"side_area_width",
	"",
	esc_html__( "Side Area Width", 'brick' ),
	esc_html__( "Enter a width for Side Area (in percentages, enter more than 30)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_width",
	$side_area_width
);

$side_area_content_overlay_color = new QodeField(
	"color",
	"side_area_content_overlay_color",
	"",
	esc_html__( "Content Overlay Background Color", 'brick' ),
	esc_html__( "Choose a background color for a content overlay", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_content_overlay_color",
	$side_area_content_overlay_color
);

$side_area_content_overlay_opacity = new QodeField(
	"text",
	"side_area_content_overlay_opacity",
	"",
	esc_html__( "Content Overlay Background Transparency", 'brick' ),
	esc_html__( "Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_content_overlay_opacity",
	$side_area_content_overlay_opacity
);

$side_area_slide_with_content_container = new QodeContainer(
	"side_area_slide_with_content_container",
	"side_area_type",
	"side_menu_slide_from_right",
	array(
		"side_menu_slide_from_right",
		"side_area_uncovered_from_content"
	)
);
$enable_side_area_container->addChild(
	"side_area_slide_with_content_container",
	$side_area_slide_with_content_container
);

$side_area_slide_with_content_width = new QodeField(
	"select",
	"side_area_slide_with_content_width",
	"width_470",
	esc_html__( "Side Area Width", 'brick' ),
	esc_html__( "Choose width for Side Area", 'brick' ),
	array(
		"width_270" => esc_html__( "270px", 'brick' ),
		"width_370" => esc_html__( "370px", 'brick' ),
		"width_470" => esc_html__( "470px", 'brick' )
	)
);
$side_area_slide_with_content_container->addChild(
	"side_area_slide_with_content_width",
	$side_area_slide_with_content_width
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$side_area_icon_pack_hide_array = array();
$side_area_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$side_area_icon_collections_params = brick_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( brick_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$side_area_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$side_area_icon_pack_show_array[ $dep_collection_key ] = '#qodef_side_area_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $side_area_icon_collections_params as $side_area_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $side_area_icon_collections_param !== $dep_collection_object->param ) {
				$side_area_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_side_area_icon_' . $side_area_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$side_area_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$side_area_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$side_area_button_icon_pack = new QodeField(
	"select",
	"side_area_button_icon_pack",
	"font_awesome",
	esc_html__( "Side Area Button Icon Pack", 'brick' ),
	esc_html__( "Choose icon pack for side area button", 'brick' ),
	brick_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $side_area_icon_pack_hide_array,
		"show"       => $side_area_icon_pack_show_array
	)
);

$enable_side_area_container->addChild(
	"side_area_button_icon_pack",
	$side_area_button_icon_pack
);

if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	//foreach icon collection we need to generate separate container that will have dependency set
	//it will have one field inside with icons dropdown
	foreach ( brick_qode_icon_collections()->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
		$icon_collections_keys = brick_qode_icon_collections()->getIconCollectionsKeys();
		
		//unset current one, because it doesn't have to be included in dependency that hides icon container
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$side_area_icon_hide_values = $icon_collections_keys;
		$side_area_icon_container   = new QodeContainer(
			"side_area_icon_" . $collection_object->param . "_container",
			"side_area_button_icon_pack",
			"",
			$side_area_icon_hide_values
		);
		$side_area_button_icon      = new QodeField(
			"select",
			"side_area_icon_" . $collection_object->param,
			"fa-bars",
			esc_html__( "Side Area Icon", 'brick' ),
			esc_html__( "Choose Side Area Icon", 'brick' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$side_area_icon_container->addChild(
			"side_area_icon_" . $collection_object->param,
			$side_area_button_icon
		);
		
		$enable_side_area_container->addChild(
			"side_area_icon_" . $collection_object->param . "_container",
			$side_area_icon_container
		);
	}
	
}

$group6 = new QodeGroup(
	esc_html__( "Side Area Icon Spacing", 'brick' ),
	esc_html__( "Define padding and margin for side area icon", 'brick' )
);
$enable_side_area_container->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$side_area_icon_padding_left = new QodeField(
	"textsimple",
	"side_area_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_icon_padding_left",
	$side_area_icon_padding_left
);

$side_area_icon_padding_right = new QodeField(
	"textsimple",
	"side_area_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_icon_padding_right",
	$side_area_icon_padding_right
);

$side_area_icon_margin_left = new QodeField(
	"textsimple",
	"side_area_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_icon_margin_left",
	$side_area_icon_margin_left
);

$side_area_icon_margin_right = new QodeField(
	"textsimple",
	"side_area_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_icon_margin_right",
	$side_area_icon_margin_right
);

$side_area_icon_border_yesno = new QodeField(
	"yesno",
	"side_area_icon_border_yesno",
	"no",
	esc_html__( "Icon Border", 'brick' ),
	esc_html__( "Enable border around icon", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_side_area_icon_border_container"
	)
);
$enable_side_area_container->addChild(
	"side_area_icon_border_yesno",
	$side_area_icon_border_yesno
);

$side_area_icon_border_container = new QodeContainer(
	"side_area_icon_border_container",
	"side_area_icon_border_yesno",
	"no"
);
$enable_side_area_container->addChild(
	"side_area_icon_border_container",
	$side_area_icon_border_container
);

$group1 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define styling for border around icon", 'brick' )
);
$side_area_icon_border_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$side_area_icon_border_color = new QodeField(
	"colorsimple",
	"side_area_icon_border_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_icon_border_color",
	$side_area_icon_border_color
);

$side_area_icon_border_hover_color = new QodeField(
	"colorsimple",
	"side_area_icon_border_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_icon_border_hover_color",
	$side_area_icon_border_hover_color
);

$row2 = new QodeRow();
$group1->addChild(
	"row2",
	$row2
);

$side_area_icon_border_width = new QodeField(
	"textsimple",
	"side_area_icon_border_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"side_area_icon_border_width",
	$side_area_icon_border_width
);

$side_area_icon_border_radius = new QodeField(
	"textsimple",
	"side_area_icon_border_radius",
	"",
	esc_html__( "Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"side_area_icon_border_radius",
	$side_area_icon_border_radius
);

$side_area_icon_border_style = new QodeField(
	"selectsimple",
	"side_area_icon_border_style",
	"",
	esc_html__( "Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' )
	)
);
$row2->addChild(
	"side_area_icon_border_style",
	$side_area_icon_border_style
);

$side_area_aligment = new QodeField(
	"selectblank",
	"side_area_aligment",
	"",
	esc_html__( "Text Aligment", 'brick' ),
	esc_html__( "Choose text aligment for side area", 'brick' ),
	array(
		"center" => esc_html__( "Center", 'brick' ),
		"left" => esc_html__( "Left", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	
	)
);

$enable_side_area_container->addChild(
	"side_area_aligment",
	$side_area_aligment
);

$side_area_title = new QodeField(
	"text",
	"side_area_title",
	"",
	esc_html__( "Side Area Title", 'brick' ),
	esc_html__( "Enter a title to appear in Side Area", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$enable_side_area_container->addChild(
	"side_area_title",
	$side_area_title
);

$side_area_background_color = new QodeField(
	"color",
	"side_area_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for Side Area", 'brick' )
);
$enable_side_area_container->addChild(
	"side_area_background_color",
	$side_area_background_color
);

$group5 = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for Side Area", 'brick' )
);
$enable_side_area_container->addChild(
	"group5",
	$group5
);
$row1 = new QodeRow( true );
$group5->addChild(
	"row1",
	$row1
);
$side_area_padding_top = new QodeField(
	"textsimple",
	"side_area_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_padding_top",
	$side_area_padding_top
);
$side_area_padding_right = new QodeField(
	"textsimple",
	"side_area_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_padding_right",
	$side_area_padding_right
);
$side_area_padding_bottom = new QodeField(
	"textsimple",
	"side_area_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_padding_bottom",
	$side_area_padding_bottom
);
$side_area_padding_left = new QodeField(
	"textsimple",
	"side_area_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_padding_left",
	$side_area_padding_left
);

$side_area_close_icon = new QodeField(
	"select",
	"side_area_close_icon",
	"light",
	esc_html__( "Close Icon Style", 'brick' ),
	esc_html__( "Choose a type of close icon", 'brick' ),
	array(
		"light" => esc_html__( "Light", 'brick' ),
		"dark" => esc_html__( "Dark", 'brick' )
	)
);

$enable_side_area_container->addChild(
	"side_area_close_icon",
	$side_area_close_icon
);

$side_area_close_icon_size = new QodeField(
	"text",
	"side_area_close_icon_size",
	"",
	esc_html__( "Close Icon Size (px)", 'brick' ),
	esc_html__( "Define close icon size", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$enable_side_area_container->addChild(
	"side_area_close_icon_size",
	$side_area_close_icon_size
);

$group1 = new QodeGroup(
	esc_html__( "Title", 'brick' ),
	esc_html__( "Define Style for Side Area title", 'brick' )
);
$enable_side_area_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$side_area_title_color = new QodeField(
	"colorsimple",
	"side_area_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_title_color",
	$side_area_title_color
);
$side_area_title_fontsize = new QodeField(
	"textsimple",
	"side_area_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_title_fontsize",
	$side_area_title_fontsize
);
$side_area_title_lineheight = new QodeField(
	"textsimple",
	"side_area_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_title_lineheight",
	$side_area_title_lineheight
);
$side_area_title_texttransform = new QodeField(
	"selectblanksimple",
	"side_area_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"side_area_title_texttransform",
	$side_area_title_texttransform
);
$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$side_area_title_google_fonts = new QodeField(
	"fontsimple",
	"side_area_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"side_area_title_google_fonts",
	$side_area_title_google_fonts
);
$side_area_title_fontstyle = new QodeField(
	"selectblanksimple",
	"side_area_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"side_area_title_fontstyle",
	$side_area_title_fontstyle
);
$side_area_title_fontweight = new QodeField(
	"selectblanksimple",
	"side_area_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"side_area_title_fontweight",
	$side_area_title_fontweight
);
$side_area_title_letterspacing = new QodeField(
	"textsimple",
	"side_area_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"side_area_title_letterspacing",
	$side_area_title_letterspacing
);

$group3 = new QodeGroup(
	esc_html__( "Text", 'brick' ),
	esc_html__( "Define Style for Side Area text", 'brick' )
);
$enable_side_area_container->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);
$side_area_text_color = new QodeField(
	"colorsimple",
	"side_area_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_text_color",
	$side_area_text_color
);
$side_area_text_fontsize = new QodeField(
	"textsimple",
	"side_area_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_text_fontsize",
	$side_area_text_fontsize
);
$side_area_text_lineheight = new QodeField(
	"textsimple",
	"side_area_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"side_area_text_lineheight",
	$side_area_text_lineheight
);
$side_area_text_texttransform = new QodeField(
	"selectblanksimple",
	"side_area_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"side_area_text_texttransform",
	$side_area_text_texttransform
);
$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$side_area_text_google_fonts = new QodeField(
	"fontsimple",
	"side_area_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"side_area_text_google_fonts",
	$side_area_text_google_fonts
);
$side_area_text_fontstyle = new QodeField(
	"selectblanksimple",
	"side_area_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"side_area_text_fontstyle",
	$side_area_text_fontstyle
);
$side_area_text_fontweight = new QodeField(
	"selectblanksimple",
	"side_area_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"side_area_text_fontweight",
	$side_area_text_fontweight
);
$side_area_text_letterspacing = new QodeField(
	"textsimple",
	"side_area_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"side_area_text_letterspacing",
	$side_area_text_letterspacing
);

$group2 = new QodeGroup(
	esc_html__( "Link Style", 'brick' ),
	esc_html__( "Define styles for side area widget links", 'brick' )
);
$enable_side_area_container->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$sidearea_link_color = new QodeField(
	"colorsimple",
	"sidearea_link_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidearea_link_color",
	$sidearea_link_color
);

$sidearea_link_font_size = new QodeField(
	"textsimple",
	"sidearea_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidearea_link_font_size",
	$sidearea_link_font_size
);

$sidearea_link_line_height = new QodeField(
	"textsimple",
	"sidearea_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidearea_link_line_height",
	$sidearea_link_line_height
);

$sidearea_link_text_transform = new QodeField(
	"selectblanksimple",
	"sidearea_link_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"sidearea_link_text_transform",
	$sidearea_link_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidearea_link_font_family = new QodeField(
	"fontsimple",
	"sidearea_link_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidearea_link_font_family",
	$sidearea_link_font_family
);

$sidearea_link_font_style = new QodeField(
	"selectblanksimple",
	"sidearea_link_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"sidearea_link_font_style",
	$sidearea_link_font_style
);

$sidearea_link_font_weight = new QodeField(
	"selectblanksimple",
	"sidearea_link_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"sidearea_link_font_weight",
	$sidearea_link_font_weight
);

$sidearea_link_letter_spacing = new QodeField(
	"textsimple",
	"sidearea_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidearea_link_letter_spacing",
	$sidearea_link_letter_spacing
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);
$sidearea_link_hover_color = new QodeField(
	"colorsimple",
	"sidearea_link_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"sidearea_link_hover_color",
	$sidearea_link_hover_color
);

$side_area_enable_bottom_border = new QodeField(
	"yesno",
	"side_area_enable_bottom_border",
	"no",
	esc_html__( "Border Bottom on Elements", 'brick' ),
	esc_html__( "Enable border bottom on elements in side area", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_side_area_bottom_border_container"
	)
);
$enable_side_area_container->addChild(
	"side_area_enable_bottom_border",
	$side_area_enable_bottom_border
);

$side_area_bottom_border_container = new QodeContainer(
	"side_area_bottom_border_container",
	"side_area_enable_bottom_border",
	"no"
);
$enable_side_area_container->addChild(
	"side_area_bottom_border_container",
	$side_area_bottom_border_container
);

$side_area_bottom_border_color = new QodeField(
	"color",
	"side_area_bottom_border_color",
	"",
	esc_html__( "Choose Color for Border Bottom", 'brick' ),
	esc_html__( "Choose color for border bottom on elements in sidearea", 'brick' )
);
$side_area_bottom_border_container->addChild(
	"side_area_bottom_border_color",
	$side_area_bottom_border_color
);

// Fullscreen Menu

$panel12 = new QodePanel(
	esc_html__( "Fullscreen Menu", 'brick' ),
	"enable_popup_menu_panel",
	"vertical_area",
	"yes"
);
$headerandfooterPage->addChild(
	"panel12",
	$panel12
);

$enable_popup_menu = new QodeField(
	"yesno",
	"enable_popup_menu",
	"no",
	esc_html__( "Enable Fullscreen Menu", 'brick' ),
	esc_html__( "This option enables a fullscreen menu to be opened from main menu navigation", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_popup_menu_container"
	)
);
$panel12->addChild(
	"enable_popup_menu",
	$enable_popup_menu
);

$enable_popup_menu_container = new QodeContainer(
	"enable_popup_menu_container",
	"enable_popup_menu",
	"no"
);
$panel12->addChild(
	"enable_popup_menu_container",
	$enable_popup_menu_container
);

$popup_menu_animation_style = new QodeField(
	"select",
	"popup_menu_animation_style",
	"appear_from_bottom",
	esc_html__( "Fullscreen Menu Overlay Animation", 'brick' ),
	esc_html__( "Choose animation type for fullscreen menu overlay", 'brick' ),
	array(
		'fade_push_text_right' => esc_html__( 'Fade Push Text Right', 'brick' ),
		'fade_push_text_top' => esc_html__( 'Fade Push Text Top', 'brick' ),
		'fade_text_scaledown' => esc_html__( 'Fade Text Scaledown', 'brick' )
	)
);
$enable_popup_menu_container->addChild(
	"popup_menu_animation_style",
	$popup_menu_animation_style
);

$logo_image_popup = new QodeField(
	"image",
	"logo_image_popup",
	"",
	esc_html__( "Logo in Fullscreen Menu Overlay", 'brick' ),
	esc_html__( "Place logo in top left corner of fullscreen menu overlay", 'brick' )
);
$enable_popup_menu_container->addChild(
	"logo_image_popup",
	$logo_image_popup
);

$popup_in_grid = new QodeField(
	"yesno",
	"popup_in_grid",
	"no",
	esc_html__( "Fullscreen Menu in Grid", 'brick' ),
	esc_html__( "Enabling this option will put fullscreen menu content in grid", 'brick' )
);
$enable_popup_menu_container->addChild(
	"popup_in_grid",
	$popup_in_grid
);

$popup_alignment = new QodeField(
	"selectblank",
	"popup_alignment",
	"",
	esc_html__( "Fullscreen Menu Alignment", 'brick' ),
	esc_html__( "Choose alignment for fullscreen menu content", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$enable_popup_menu_container->addChild(
	"popup_alignment",
	$popup_alignment
);

$group4 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Select a background color and transparency for Fullscreen Menu (0 = fully transparent, 1 = opaque)", 'brick' )
);
$enable_popup_menu_container->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow( true );
$group4->addChild(
	"row1",
	$row1
);

$popup_menu_background_color = new QodeField(
	"colorsimple",
	"popup_menu_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_background_color",
	$popup_menu_background_color
);
$popup_menu_background_transparency = new QodeField(
	"textsimple",
	"popup_menu_background_transparency",
	"",
	esc_html__( "Transparency (values:0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_background_transparency",
	$popup_menu_background_transparency
);

$background_image_popup = new QodeField(
	"image",
	"background_image_popup",
	"",
	esc_html__( "Background Image", 'brick' ),
	esc_html__( "Choose a background image for Fullscreen Menu background", 'brick' )
);
$enable_popup_menu_container->addChild(
	"background_image_popup",
	$background_image_popup
);

$pattern_image_popup = new QodeField(
	"image",
	"pattern_image_popup",
	"",
	esc_html__( "Pattern Background Image", 'brick' ),
	esc_html__( "Choose a pattern image for Fullscreen Menu background", 'brick' )
);
$enable_popup_menu_container->addChild(
	"pattern_image_popup",
	$pattern_image_popup
);

$group1 = new QodeGroup(
	"1st Level Style",
	esc_html__( "Define styles for 1st level in Fullscreen Menu", 'brick' )
);
$enable_popup_menu_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$popup_menu_color = new QodeField(
	"colorsimple",
	"popup_menu_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_color",
	$popup_menu_color
);
$popup_menu_hover_color = new QodeField(
	"colorsimple",
	"popup_menu_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_hover_color",
	$popup_menu_hover_color
);
$popup_menu_active_color = new QodeField(
	"colorsimple",
	"popup_menu_active_color",
	"",
	esc_html__( "Active Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_active_color",
	$popup_menu_active_color
);

$row4 = new QodeRow();
$group1->addChild(
	"row4",
	$row4
);
$popup_menu_hover_background_color = new QodeField(
	"colorsimple",
	"popup_menu_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"popup_menu_hover_background_color",
	$popup_menu_hover_background_color
);
$popup_menu_active_background_color = new QodeField(
	"colorsimple",
	"popup_menu_active_background_color",
	"",
	esc_html__( "Background Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"popup_menu_active_background_color",
	$popup_menu_active_background_color
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$popup_menu_google_fonts = new QodeField(
	"fontsimple",
	"popup_menu_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_google_fonts",
	$popup_menu_google_fonts
);
$popup_menu_fontsize = new QodeField(
	"textsimple",
	"popup_menu_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_fontsize",
	$popup_menu_fontsize
);
$popup_menu_lineheight = new QodeField(
	"textsimple",
	"popup_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_lineheight",
	$popup_menu_lineheight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$popup_menu_fontstyle = new QodeField(
	"selectblanksimple",
	"popup_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"popup_menu_fontstyle",
	$popup_menu_fontstyle
);
$popup_menu_fontweight = new QodeField(
	"selectblanksimple",
	"popup_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"popup_menu_fontweight",
	$popup_menu_fontweight
);
$popup_menu_letterspacing = new QodeField(
	"textsimple",
	"popup_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"popup_menu_letterspacing",
	$popup_menu_letterspacing
);
$popup_menu_texttransform = new QodeField(
	"selectblanksimple",
	"popup_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"popup_menu_texttransform",
	$popup_menu_texttransform
);

$group2 = new QodeGroup(
	"2nd Level Style",
	esc_html__( "Define styles for 2nd level in Fullscreen Menu", 'brick' )
);
$enable_popup_menu_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$popup_menu_color_2nd = new QodeField(
	"colorsimple",
	"popup_menu_color_2nd",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_color_2nd",
	$popup_menu_color_2nd
);
$popup_menu_hover_color_2nd = new QodeField(
	"colorsimple",
	"popup_menu_hover_color_2nd",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_hover_color_2nd",
	$popup_menu_hover_color_2nd
);
$popup_menu_hover_background_color_2nd = new QodeField(
	"colorsimple",
	"popup_menu_hover_background_color_2nd",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_hover_background_color_2nd",
	$popup_menu_hover_background_color_2nd
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$popup_menu_google_fonts_2nd = new QodeField(
	"fontsimple",
	"popup_menu_google_fonts_2nd",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_google_fonts_2nd",
	$popup_menu_google_fonts_2nd
);
$popup_menu_fontsize_2nd = new QodeField(
	"textsimple",
	"popup_menu_fontsize_2nd",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_fontsize_2nd",
	$popup_menu_fontsize_2nd
);
$popup_menu_lineheight_2nd = new QodeField(
	"textsimple",
	"popup_menu_lineheight_2nd",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_lineheight_2nd",
	$popup_menu_lineheight_2nd
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$popup_menu_fontstyle_2nd = new QodeField(
	"selectblanksimple",
	"popup_menu_fontstyle_2nd",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"popup_menu_fontstyle_2nd",
	$popup_menu_fontstyle_2nd
);
$popup_menu_fontweight_2nd = new QodeField(
	"selectblanksimple",
	"popup_menu_fontweight_2nd",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"popup_menu_fontweight_2nd",
	$popup_menu_fontweight_2nd
);
$popup_menu_letterspacing_2nd = new QodeField(
	"textsimple",
	"popup_menu_letterspacing_2nd",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"popup_menu_letterspacing_2nd",
	$popup_menu_letterspacing_2nd
);
$popup_menu_texttransform_2nd = new QodeField(
	"selectblanksimple",
	"popup_menu_texttransform_2nd",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"popup_menu_texttransform_2nd",
	$popup_menu_texttransform_2nd
);

$group3 = new QodeGroup(
	"3rd Level Style",
	esc_html__( "Define styles for 3rd level in Fullscreen Menu", 'brick' )
);
$enable_popup_menu_container->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$popup_menu_3rd_color = new QodeField(
	"colorsimple",
	"popup_menu_3rd_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_3rd_color",
	$popup_menu_3rd_color
);
$popup_menu_3rd_hover_color = new QodeField(
	"colorsimple",
	"popup_menu_3rd_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_3rd_hover_color",
	$popup_menu_3rd_hover_color
);
$popup_menu_3rd_hover_background_color = new QodeField(
	"colorsimple",
	"popup_menu_3rd_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_3rd_hover_background_color",
	$popup_menu_3rd_hover_background_color
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$popup_menu_3rd_google_fonts = new QodeField(
	"fontsimple",
	"popup_menu_3rd_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_3rd_google_fonts",
	$popup_menu_3rd_google_fonts
);
$popup_menu_3rd_fontsize = new QodeField(
	"textsimple",
	"popup_menu_3rd_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_3rd_fontsize",
	$popup_menu_3rd_fontsize
);
$popup_menu_3rd_lineheight = new QodeField(
	"textsimple",
	"popup_menu_3rd_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$popup_menu_3rd_lineheight = new QodeField(
	"textsimple",
	"popup_menu_3rd_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"popup_menu_3rd_lineheight",
	$popup_menu_3rd_lineheight
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$popup_menu_3rd_fontstyle = new QodeField(
	"selectblanksimple",
	"popup_menu_3rd_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"popup_menu_3rd_fontstyle",
	$popup_menu_3rd_fontstyle
);
$popup_menu_3rd_fontweight = new QodeField(
	"selectblanksimple",
	"popup_menu_3rd_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"popup_menu_3rd_fontweight",
	$popup_menu_3rd_fontweight
);
$popup_menu_3rd_letterspacing = new QodeField(
	"textsimple",
	"popup_menu_3rd_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"popup_menu_3rd_letterspacing",
	$popup_menu_3rd_letterspacing
);
$popup_menu_3rd_texttransform = new QodeField(
	"selectblanksimple",
	"popup_menu_3rd_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"popup_menu_3rd_texttransform",
	$popup_menu_3rd_texttransform
);

$group5 = new QodeGroup(
	esc_html__( "Full Screen Menu Icon Spacing", 'brick' ),
	esc_html__( "Define padding and margin for full screen menu icon", 'brick' )
);
$enable_popup_menu_container->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$popup_menu_icon_padding_left = new QodeField(
	"textsimple",
	"popup_menu_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_icon_padding_left",
	$popup_menu_icon_padding_left
);

$popup_menu_icon_padding_right = new QodeField(
	"textsimple",
	"popup_menu_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_icon_padding_right",
	$popup_menu_icon_padding_right
);

$popup_menu_icon_margin_left = new QodeField(
	"textsimple",
	"popup_menu_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_icon_margin_left",
	$popup_menu_icon_margin_left
);

$popup_menu_icon_margin_right = new QodeField(
	"textsimple",
	"popup_menu_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"popup_menu_icon_margin_right",
	$popup_menu_icon_margin_right
);

$panel2 = new QodePanel(
	esc_html__( "Header Top", 'brick' ),
	"header_top_panel",
	"vertical_area",
	"yes"
);
$headerandfooterPage->addChild(
	"panel2",
	$panel2
);

$header_top_area = new QodeField(
	"yesno",
	"header_top_area",
	"no",
	esc_html__( "Show Header Top Area", 'brick' ),
	"Enabling this option will show Header Top area (this setting applies to Header Left and Header Right widgets)
    ",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_header_top_area_container"
	)
);
$panel2->addChild(
	"header_top_area",
	$header_top_area
);

$header_top_area_container = new QodeContainer(
	"header_top_area_container",
	"header_top_area",
	"no"
);
$panel2->addChild(
	"header_top_area_container",
	$header_top_area_container
);

$header_top_area_scroll_container = new QodeContainer(
	"header_top_area_scroll_container",
	"header_bottom_appearance",
	"fixed_top_header",
	array( "fixed_top_header" )
);
$header_top_area_container->addChild(
	"header_top_area_scroll_container",
	$header_top_area_scroll_container
);

$header_top_area_scroll = new QodeField(
	"yesno",
	"header_top_area_scroll",
	"no",
	esc_html__( "Hide on Scroll", 'brick' ),
	esc_html__( "Enabling this option will hide Header Top on scroll (if Fixed, Sticky or Sticky Expanded menu is chosen)", 'brick' )
);
$header_top_area_scroll_container->addChild(
	"header_top_area_scroll",
	$header_top_area_scroll
);

$header_top_height = new QodeField(
	"text",
	"header_top_height",
	"",
	esc_html__( "Header Top Height", 'brick' ),
	esc_html__( "Enter height for header top", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"header_top_height",
	$header_top_height
);

$header_top_background_color = new QodeField(
	"color",
	"header_top_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for Header Top area", 'brick' )
);
$header_top_area_container->addChild(
	"header_top_background_color",
	$header_top_background_color
);

$header_top_transparency = new QodeField(
	"text",
	"header_top_transparency",
	"",
	esc_html__( "Header Top Transparency", 'brick' ),
	esc_html__( "Choose a transparency for the Header Top background color (0 = fully transparent, 1 = opaque)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"header_top_transparency",
	$header_top_transparency
);

$top_header_border_color = new QodeField(
	"color",
	"top_header_border_color",
	"",
	esc_html__( "Border Bottom Color", 'brick' ),
	esc_html__( "Set a color for the bottom border of the Header Top Area.", 'brick' )
);
$header_top_area_container->addChild(
	"top_header_border_color",
	$top_header_border_color
);

$top_header_border_weight = new QodeField(
	"text",
	"top_header_border_weight",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "Set a border width for the bottom border of the Header Top Area.", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"top_header_border_weight",
	$top_header_border_weight
);

$widget_elements_header_top = new QodeTitle(
	"widget_elements_header_top",
	esc_html__( "Widget Elements", 'brick' )
);
$header_top_area_container->addChild(
	"widget_elements_header_top",
	$widget_elements_header_top
);

$group9 = new QodeGroup(
	esc_html__( "Search", 'brick' ),
	esc_html__( "Define styles for search in widget", 'brick' )
);
$header_top_area_container->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$header_top_search_height = new QodeField(
	"textsimple",
	"header_top_search_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_top_search_height",
	$header_top_search_height
);

$header_top_search_border_color = new QodeField(
	"colorsimple",
	"header_top_search_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_top_search_border_color",
	$header_top_search_border_color
);

$header_top_search_loupe_color = new QodeField(
	"colorsimple",
	"header_top_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_top_search_loupe_color",
	$header_top_search_loupe_color
);

$header_top_search_loupe_background_color = new QodeField(
	"colorsimple",
	"header_top_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_top_search_loupe_background_color",
	$header_top_search_loupe_background_color
);

$row2 = new QodeRow();
$group9->addChild(
	"row2",
	$row2
);

$header_top_search_text_color = new QodeField(
	"colorsimple",
	"header_top_search_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"header_top_search_text_color",
	$header_top_search_text_color
);

$header_top_search_focus_text_color = new QodeField(
	"colorsimple",
	"header_top_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"header_top_search_focus_text_color",
	$header_top_search_focus_text_color
);

$header_top_search_text_font_size = new QodeField(
	"textsimple",
	"header_top_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"header_top_search_text_font_size",
	$header_top_search_text_font_size
);

$header_top_search_text_line_height = new QodeField(
	"textsimple",
	"header_top_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"header_top_search_text_line_height",
	$header_top_search_text_line_height
);

$row3 = new QodeRow( true );
$group9->addChild(
	"row3",
	$row3
);

$header_top_search_text_text_transform = new QodeField(
	"selectblanksimple",
	"header_top_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"header_top_search_text_text_transform",
	$header_top_search_text_text_transform
);

$header_top_search_text_font_family = new QodeField(
	"fontsimple",
	"header_top_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"header_top_search_text_font_family",
	$header_top_search_text_font_family
);

$header_top_search_text_font_style = new QodeField(
	"selectblanksimple",
	"header_top_search_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"header_top_search_text_font_style",
	$header_top_search_text_font_style
);

$header_top_search_text_font_weight = new QodeField(
	"selectblanksimple",
	"header_top_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"header_top_search_text_font_weight",
	$header_top_search_text_font_weight
);

$row4 = new QodeRow( true );
$group9->addChild(
	"row4",
	$row4
);

$header_top_search_text_letter_spacing = new QodeField(
	"textsimple",
	"header_top_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"header_top_search_text_letter_spacing",
	$header_top_search_text_letter_spacing
);

$header_top_search_border_around = new QodeField(
	"selectsimple",
	"header_top_search_border_around",
	"",
	esc_html__( "Border Around", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"around_everything" => esc_html__( "Around Everything", 'brick' ),
		"around_search_text" => esc_html__( "Around Search Text", 'brick' )
	)
);
$row4->addChild(
	"header_top_search_border_around",
	$header_top_search_border_around
);

$row5 = new QodeRow( true );
$group9->addChild(
	"row5",
	$row5
);

$header_top_search_width = new QodeField(
	"textsimple",
	"header_top_search_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"header_top_search_text_font_size",
	$header_top_search_width
);

$header_top_search_margin_left = new QodeField(
	"textsimple",
	"header_top_search_margin_left",
	"",
	esc_html__( "Left Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"header_top_search_margin_left",
	$header_top_search_margin_left
);

$header_top_search_margin_right = new QodeField(
	"textsimple",
	"header_top_search_margin_right",
	"",
	esc_html__( "Right Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"header_top_search_margin_right",
	$header_top_search_margin_right
);

$panel7 = new QodePanel(
	esc_html__( "Side Menu Area", 'brick' ),
	"vertical_areas_panel",
	"vertical_area",
	"no"
);
$headerandfooterPage->addChild(
	"panel7",
	$panel7
);

$vertical_area_type = new QodeField(
	"select",
	"vertical_area_type",
	"left",
	esc_html__( "Side Menu Area Type", 'brick' ),
	esc_html__( "Specify menu type", 'brick' ),
	array(
		"" => esc_html__( "Always Opened (Default)", 'brick' ),
		"hidden" => esc_html__( "Initially Hidden", 'brick' ),
		"hidden_with_icons" => esc_html__( "Initially Hidden With Visible Icons", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                  => "#qodef_vertical_area_hidden_button_color_container",
			"hidden"            => "",
			"hidden_with_icons" => "#qodef_enable_vertical_menu_item_left_border_container"
		),
		"show"       => array(
			""                  => "#qodef_enable_vertical_menu_item_left_border_container",
			"hidden"            => "#qodef_vertical_area_hidden_button_color_container, #qodef_enable_vertical_menu_item_left_border_container",
			"hidden_with_icons" => "#qodef_vertical_area_hidden_button_color_container"
		)
	)
);
$panel7->addChild(
	"vertical_area_type",
	$vertical_area_type
);

$vertical_area_hidden_button_color_container = new QodeContainer(
	"vertical_area_hidden_button_color_container",
	"vertical_area_type",
	""
);
$panel7->addChild(
	"vertical_area_hidden_button_color_container",
	$vertical_area_hidden_button_color_container
);

$vertical_area_hidden_button_color = new QodeField(
	"color",
	"vertical_area_hidden_button_color",
	"",
	esc_html__( "Button Color", 'brick' ),
	esc_html__( "Choose a color for button that opens/closes Hidden Side Menu Area", 'brick' )
);
$vertical_area_hidden_button_color_container->addChild(
	"vertical_area_hidden_button_color",
	$vertical_area_hidden_button_color
);

$vertical_area_width = new QodeField(
	"select",
	"vertical_area_width",
	"width_290",
	esc_html__( "Side Menu Area Width", 'brick' ),
	esc_html__( "Choose width for side menu area.", 'brick' ),
	array(
		"width_290" => esc_html__( "290px", 'brick' ),
		"width_350" => esc_html__( "350px", 'brick' ),
		"width_400" => esc_html__( "400px", 'brick' )
	)
);
$panel7->addChild(
	"vertical_area_width",
	$vertical_area_width
);

$vertical_area_position = new QodeField(
	"select",
	"vertical_area_position",
	"left",
	esc_html__( "Side Menu Area Position", 'brick' ),
	esc_html__( "Choose side menu position relative to browser screen", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$panel7->addChild(
	"vertical_area_position",
	$vertical_area_position
);

$vertical_area_dropdown_showing = new QodeField(
	"select",
	"vertical_area_dropdown_showing",
	"hover",
	esc_html__( "Submenu Opening Behaviour", 'brick' ),
	esc_html__( "Specify 2nd and 3rd level menu opening style", 'brick' ),
	array(
		"hover" => esc_html__( "On Hover", 'brick' ),
		"click" => esc_html__( "On Click", 'brick' ),
		"side" => esc_html__( "Slide In", 'brick' ),
		"to_content" => esc_html__( "Float", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"hover"      => "#qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container",
			"click"      => "#qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container",
			"side"       => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container, #qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container",
			"to_content" => ""
		),
		"show"       => array(
			"hover"      => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container",
			"click"      => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container",
			"side"       => "",
			"to_content" => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container, #qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container"
		)
	)
);
$panel7->addChild(
	"vertical_area_dropdown_showing",
	$vertical_area_dropdown_showing
);

$vertical_area_background = new QodeField(
	"color",
	"vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'brick' ),
	esc_html__( "Choose a color for Side Menu Area background", 'brick' )
);
$panel7->addChild(
	"vertical_area_background",
	$vertical_area_background
);

$vertical_area_transparency_container = new QodeContainer(
	"vertical_area_transparency_container",
	"vertical_area_dropdown_showing",
	"side"
);
$panel7->addChild(
	"vertical_area_transparency_container",
	$vertical_area_transparency_container
);

$vertical_area_background_transparency = new QodeField(
	"text",
	"vertical_area_background_transparency",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'brick' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$vertical_area_transparency_container->addChild(
	"vertical_area_background_transparency",
	$vertical_area_background_transparency
);

$vertical_area_background_container = new QodeContainer(
	"vertical_area_background_container",
	"vertical_area_dropdown_showing",
	"side"
);
$vertical_area_transparency_container->addChild(
	"vertical_area_background_container",
	$vertical_area_background_container
);

$vertical_area_background_image = new QodeField(
	"image",
	"vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'brick' ),
	esc_html__( "Choose an image for Side Menu background", 'brick' )
);
$vertical_area_background_container->addChild(
	"vertical_area_background_image",
	$vertical_area_background_image
);

$vertical_area_transparency = new QodeField(
	"yesno",
	"vertical_area_transparency",
	"no",
	esc_html__( "Enable Fully Transparent Side Menu Area Over Select Slider", 'brick' ),
	esc_html__( "Enabling this option will make Side Menu Area background over Select Slider fully transparent", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_area_transparency_fonts_container"
	)
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency",
	$vertical_area_transparency
);

$vertical_area_transparency_fonts_container = new QodeContainer(
	"vertical_area_transparency_fonts_container",
	"vertical_area_transparency",
	"no"
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency_fonts_container",
	$vertical_area_transparency_fonts_container
);

$group1 = new QodeGroup(
	"1st Level Transparent Menu Style",
	esc_html__( "Define styles for 1st level in Transparent Side Menu", 'brick' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_transparent_menu_color = new QodeField(
	"colorsimple",
	"vertical_transparent_menu_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_transparent_menu_color",
	$vertical_transparent_menu_color
);
$vertical_transparent_menu_hovercolor = new QodeField(
	"colorsimple",
	"vertical_transparent_menu_hovercolor",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_transparent_menu_hovercolor",
	$vertical_transparent_menu_hovercolor
);
$vertical_transparent_menu_activecolor = new QodeField(
	"colorsimple",
	"vertical_transparent_menu_activecolor",
	"",
	esc_html__( "Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_transparent_menu_activecolor",
	$vertical_transparent_menu_activecolor
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$vertical_transparent_menu_google_fonts = new QodeField(
	"fontsimple",
	"vertical_transparent_menu_google_fonts",
	"-1",
	esc_html__( "Font family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_menu_google_fonts",
	$vertical_transparent_menu_google_fonts
);
$vertical_transparent_menu_fontsize = new QodeField(
	"textsimple",
	"vertical_transparent_menu_fontsize",
	"",
	esc_html__( "Font size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_menu_fontsize",
	$vertical_transparent_menu_fontsize
);
$vertical_transparent_menu_lineheight = new QodeField(
	"textsimple",
	"vertical_transparent_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_menu_lineheight",
	$vertical_transparent_menu_lineheight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$vertical_transparent_menu_fontstyle = new QodeField(
	"selectblanksimple",
	"vertical_transparent_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"vertical_transparent_menu_fontstyle",
	$vertical_transparent_menu_fontstyle
);
$vertical_transparent_menu_fontweight = new QodeField(
	"selectblanksimple",
	"vertical_transparent_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"vertical_transparent_menu_fontweight",
	$vertical_transparent_menu_fontweight
);
$vertical_transparent_menu_letterspacing = new QodeField(
	"textsimple",
	"vertical_transparent_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"vertical_transparent_menu_letterspacing",
	$vertical_transparent_menu_letterspacing
);
$vertical_transparent_menu_texttransform = new QodeField(
	"selectblanksimple",
	"vertical_transparent_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"vertical_transparent_menu_texttransform",
	$vertical_transparent_menu_texttransform
);

$group2 = new QodeGroup(
	"2nd Level Transparent Menu Style",
	esc_html__( "Define styles for 2nd level in Transparent Side Menu", 'brick' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$vertical_transparent_dropdown_color = new QodeField(
	"colorsimple",
	"vertical_transparent_dropdown_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_transparent_dropdown_color",
	$vertical_transparent_dropdown_color
);
$vertical_transparent_dropdown_hovercolor = new QodeField(
	"colorsimple",
	"vertical_transparent_dropdown_hovercolor",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_transparent_dropdown_hovercolor",
	$vertical_transparent_dropdown_hovercolor
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$vertical_transparent_dropdown_google_fonts = new QodeField(
	"fontsimple",
	"vertical_transparent_dropdown_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_dropdown_google_fonts",
	$vertical_transparent_dropdown_google_fonts
);
$vertical_transparent_dropdown_fontsize = new QodeField(
	"textsimple",
	"vertical_transparent_dropdown_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_dropdown_fontsize",
	$vertical_transparent_dropdown_fontsize
);
$vertical_transparent_dropdown_lineheight = new QodeField(
	"textsimple",
	"vertical_transparent_dropdown_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_dropdown_lineheight",
	$vertical_transparent_dropdown_lineheight
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$vertical_transparent_dropdown_fontstyle = new QodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"vertical_transparent_dropdown_fontstyle",
	$vertical_transparent_dropdown_fontstyle
);
$vertical_transparent_dropdown_fontweight = new QodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"vertical_transparent_dropdown_fontweight",
	$vertical_transparent_dropdown_fontweight
);
$vertical_transparent_dropdown_letterspacing = new QodeField(
	"textsimple",
	"vertical_transparent_dropdown_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"vertical_transparent_dropdown_letterspacing",
	$vertical_transparent_dropdown_letterspacing
);
$vertical_transparent_dropdown_texttransform = new QodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"vertical_transparent_dropdown_texttransform",
	$vertical_transparent_dropdown_texttransform
);

$group3 = new QodeGroup(
	"3rd Level Transparent Menu Style",
	esc_html__( "Define styles for 3rd level in Transparent Side Menu", 'brick' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$vertical_transparent_dropdown_color_thirdlvl = new QodeField(
	"colorsimple",
	"vertical_transparent_dropdown_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_transparent_dropdown_color_thirdlvl",
	$vertical_transparent_dropdown_color_thirdlvl
);
$vertical_transparent_dropdown_hovercolor_thirdlvl = new QodeField(
	"colorsimple",
	"vertical_transparent_dropdown_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_transparent_dropdown_hovercolor_thirdlvl",
	$vertical_transparent_dropdown_hovercolor_thirdlvl
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$vertical_transparent_dropdown_google_fonts_thirdlvl = new QodeField(
	"fontsimple",
	"vertical_transparent_dropdown_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_dropdown_google_fonts_thirdlvl",
	$vertical_transparent_dropdown_google_fonts_thirdlvl
);
$vertical_transparent_dropdown_fontsize_thirdlvl = new QodeField(
	"textsimple",
	"vertical_transparent_dropdown_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_dropdown_fontsize_thirdlvl",
	$vertical_transparent_dropdown_fontsize_thirdlvl
);
$vertical_transparent_dropdown_lineheight_thirdlvl = new QodeField(
	"textsimple",
	"vertical_transparent_dropdown_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_transparent_dropdown_lineheight_thirdlvl",
	$vertical_transparent_dropdown_lineheight_thirdlvl
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$vertical_transparent_dropdown_fontstyle_thirdlvl = new QodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"vertical_transparent_dropdown_fontstyle_thirdlvl",
	$vertical_transparent_dropdown_fontstyle_thirdlvl
);
$vertical_transparent_dropdown_fontweight_thirdlvl = new QodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"vertical_transparent_dropdown_fontweight_thirdlvl",
	$vertical_transparent_dropdown_fontweight_thirdlvl
);
$vertical_transparent_dropdown_letterspacing_thirdlvl = new QodeField(
	"textsimple",
	"vertical_transparent_dropdown_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"vertical_transparent_dropdown_letterspacing_thirdlvl",
	$vertical_transparent_dropdown_letterspacing_thirdlvl
);
$vertical_transparent_dropdown_texttransform_thirdlvl = new QodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"vertical_transparent_dropdown_texttransform_thirdlvl",
	$vertical_transparent_dropdown_texttransform_thirdlvl
);

#qodef_vertical_area_dropdown_background_container

$vertical_area_dropdown_background_container = new QodeContainer(
	"vertical_area_dropdown_background_container",
	"vertical_area_dropdown_showing",
	"side",
	array( "side", "hover", "click" )
);
$panel7->addChild(
	"vertical_area_dropdown_background_container",
	$vertical_area_dropdown_background_container
);

$group1 = new QodeGroup(
	esc_html__( "Dropdown Menu Background", 'brick' ),
	esc_html__( "Choose Background for dropdown menu", 'brick' )
);
$vertical_area_dropdown_background_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_area_dropdown_menu_bckg_color = new QodeField(
	"colorsimple",
	"vertical_area_dropdown_menu_bckg_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_area_dropdown_menu_bckg_color",
	$vertical_area_dropdown_menu_bckg_color
);

$vertical_area_dropdown_menu_bckg_opacity = new QodeField(
	"textsimple",
	"vertical_area_dropdown_menu_bckg_opacity",
	"",
	esc_html__( "Opacity (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_area_dropdown_menu_bckg_opacity",
	$vertical_area_dropdown_menu_bckg_opacity
);

$vertical_area_padding = new QodeField(
	"text",
	"vertical_area_padding",
	"",
	esc_html__( "Side Menu Area Padding", 'brick' ),
	esc_html__( "Set padding for Side Menu Area in pixels (default value is 20px 40px 20px 40px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_padding",
	$vertical_area_padding
);

$vertical_area_navigation_top_margin = new QodeField(
	"text",
	"vertical_area_navigation_top_margin",
	"",
	esc_html__( "Navigation Top Margin", 'brick' ),
	esc_html__( "Set the space between logo and navigation in pixels (default value is 40px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_navigation_top_margin",
	$vertical_area_navigation_top_margin
);

$vertical_area_text_color = new QodeField(
	"color",
	"vertical_area_text_color",
	"",
	esc_html__( "Side Menu Area Text Color (for Widgets)", 'brick' ),
	esc_html__( "Choose a text color for widgets in Side Menu", 'brick' )
);
$panel7->addChild(
	"vertical_area_text_color",
	$vertical_area_text_color
);

$vertical_area_alignment = new QodeField(
	"selectblank",
	"vertical_area_alignment",
	"",
	esc_html__( "Side Menu Area Aligment", 'brick' ),
	esc_html__( "Specify alignment for logo, menu and widgets.", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$panel7->addChild(
	"vertical_area_alignment",
	$vertical_area_alignment
);

$vertical_menu_submenu_sign = new QodeField(
	"yesno",
	"vertical_menu_submenu_sign",
	"yes",
	esc_html__( "Enable Plus Sign", 'brick' ),
	esc_html__( "Enable dropdown plus sign", 'brick' )
);
$panel7->addChild(
	"vertical_menu_submenu_sign",
	$vertical_menu_submenu_sign
);

$vertical_menu_first_level = new QodeTitle(
	"vertical_menu_first_level",
	esc_html__( "First Level Menu", 'brick' )
);
$panel7->addChild(
	"vertical_menu_first_level",
	$vertical_menu_first_level
);

$vertical_area_menu_items_padding = new QodeField(
	"text",
	"vertical_area_menu_items_padding",
	"",
	esc_html__( "Menu Items Top/Bottom Padding", 'brick' ),
	esc_html__( "Enter padding for top and bottom of menu items in menu first level (px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_menu_items_padding",
	$vertical_area_menu_items_padding
);

$full_width_vertical_menu_items = new QodeField(
	"yesno",
	"full_width_vertical_menu_items",
	"no",
	esc_html__( "Full Width Menu Items", 'brick' ),
	esc_html__( "Enabling this option will set menu item area to full width of vertical menu", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_vertical_menu_separators_width_container",
		"dependence_show_on_yes" => "#qodef_vertical_menu_top_bottom_separators_container"
	)
);
$panel7->addChild(
	"full_width_vertical_menu_items",
	$full_width_vertical_menu_items
);

$enable_vertical_menu_separators = new QodeField(
	"yesno",
	"enable_vertical_menu_separators",
	"no",
	esc_html__( "Enable Menu Item Separators", 'brick' ),
	esc_html__( "Enabling this option will display menu item separators", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_separators_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_separators",
	$enable_vertical_menu_separators
);

$vertical_menu_separators_container = new QodeContainer(
	"vertical_menu_separators_container",
	"enable_vertical_menu_separators",
	"no"
);
$panel7->addChild(
	"vertical_menu_separators_container",
	$vertical_menu_separators_container
);

$vertical_menu_separators_width_container = new QodeContainer(
	"vertical_menu_separators_width_container",
	"full_width_vertical_menu_items",
	"yes"
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_separators_width_container",
	$vertical_menu_separators_width_container
);

$vertical_menu_separators_width = new QodeField(
	"text",
	"vertical_menu_separators_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "Enter width for the separators", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$vertical_menu_separators_width_container->addChild(
	"vertical_menu_separators_width",
	$vertical_menu_separators_width
);

$vertical_menu_separators_color = new QodeField(
	"color",
	"vertical_menu_separators_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color for the menu item separators.", 'brick' )
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_separators_color",
	$vertical_menu_separators_color
);

$vertical_menu_top_bottom_separators_container = new QodeContainer(
	"vertical_menu_top_bottom_separators_container",
	"full_width_vertical_menu_items",
	"no"
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_top_bottom_separators_container",
	$vertical_menu_top_bottom_separators_container
);

$enable_vertical_menutop_bottom_separators = new QodeField(
	"yesno",
	"enable_vertical_menutop_bottom_separators",
	"no",
	esc_html__( "Enable Menu Top and Bottom Separators", 'brick' ),
	esc_html__( "Enabling this option will display separators at top and bottom of menu also", 'brick' )
);
$vertical_menu_top_bottom_separators_container->addChild(
	"enable_vertical_menutop_bottom_separators",
	$enable_vertical_menutop_bottom_separators
);

$enable_vertical_menu_items_background = new QodeField(
	"yesno",
	"enable_vertical_menu_items_background",
	"no",
	esc_html__( "Enable Background for 1st Level Menu Items", 'brick' ),
	esc_html__( "Enable this option and choose background color for items in first level menu", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_items_background_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_items_background",
	$enable_vertical_menu_items_background
);

$vertical_menu_items_background_container = new QodeContainer(
	"vertical_menu_items_background_container",
	"enable_vertical_menu_items_background",
	"no"
);
$panel7->addChild(
	"vertical_menu_items_background_container",
	$vertical_menu_items_background_container
);

$vertical_menu_items_background_color = new QodeField(
	"color",
	"vertical_menu_items_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for the menu items", 'brick' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_background_color",
	$vertical_menu_items_background_color
);

$vertical_menu_items_hover_background_color = new QodeField(
	"color",
	"vertical_menu_items_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "Choose a background color for the hover menu items", 'brick' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_hover_background_color",
	$vertical_menu_items_hover_background_color
);

$vertical_menu_items_active_background_color = new QodeField(
	"color",
	"vertical_menu_items_active_background_color",
	"",
	esc_html__( "Active Background Color", 'brick' ),
	esc_html__( "Choose a background color for the active menu items", 'brick' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_active_background_color",
	$vertical_menu_items_active_background_color
);

$enable_vertical_menu_item_left_border_container = new QodeContainer(
	"enable_vertical_menu_item_left_border_container",
	"vertical_area_type",
	"hidden_with_icons"
);
$panel7->addChild(
	"enable_vertical_menu_item_left_border_container",
	$enable_vertical_menu_item_left_border_container
);

$enable_vertical_menu_item_left_border = new QodeField(
	"yesno",
	"enable_vertical_menu_item_left_border",
	"no",
	esc_html__( "Enable Left Border for 1st Level Menu Items", 'brick' ),
	esc_html__( "Enabling this option will display left border in first level menu items", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_item_left_border_container"
	)
);
$enable_vertical_menu_item_left_border_container->addChild(
	"enable_vertical_menu_item_left_border",
	$enable_vertical_menu_item_left_border
);

$vertical_menu_item_left_border_container = new QodeContainer(
	"vertical_menu_item_left_border_container",
	"enable_vertical_menu_item_left_border",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_left_border_container",
	$vertical_menu_item_left_border_container
);

$vertical_menu_item_left_border_width = new QodeField(
	"text",
	"vertical_menu_item_left_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "Enter width for the menu item border", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_width",
	$vertical_menu_item_left_border_width
);

$vertical_menu_item_left_border_color = new QodeField(
	"color",
	"vertical_menu_item_left_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose a color for the menu item border", 'brick' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_color",
	$vertical_menu_item_left_border_color
);

$vertical_menu_item_left_border_hover_color = new QodeField(
	"color",
	"vertical_menu_item_left_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "Choose a hover color for the menu item border", 'brick' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_hover_color",
	$vertical_menu_item_left_border_hover_color
);

$vertical_menu_item_left_border_active_color = new QodeField(
	"color",
	"vertical_menu_item_left_border_active_color",
	"",
	esc_html__( "Border Active Color", 'brick' ),
	esc_html__( "Choose a color for the active menu item border", 'brick' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_active_color",
	$vertical_menu_item_left_border_active_color
);

$enable_vertical_menu_item_text_decoration = new QodeField(
	"yesno",
	"enable_vertical_menu_item_text_decoration",
	"no",
	esc_html__( "Enable 1st Level Menu Item Text Decoration", 'brick' ),
	esc_html__( "Enable this option and choose a text decoration for menu items in first level", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_item_text_decoration_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_item_text_decoration",
	$enable_vertical_menu_item_text_decoration
);

$vertical_menu_item_text_decoration_container = new QodeContainer(
	"vertical_menu_item_text_decoration_container",
	"enable_vertical_menu_item_text_decoration",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_text_decoration_container",
	$vertical_menu_item_text_decoration_container
);

$group1 = new QodeGroup(
	esc_html__( "Menu Item Text Decoration", 'brick' ),
	""
);
$vertical_menu_item_text_decoration_container->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_item_text_decoration_style = new QodeField(
	"selectsimple",
	"vertical_menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'brick' ),
	esc_html__( "Choose text decoration type for hover menu items", 'brick' ),
	array(
		"none" => esc_html__( "None", 'brick' ),
		"underline" => esc_html__( "Underline", 'brick' ),
		"line-through" => esc_html__( "Line-through", 'brick' ),
		"overline" => esc_html__( "Overline", 'brick' )
	)
);
$row1->addChild(
	"vertical_menu_item_text_decoration_style",
	$vertical_menu_item_text_decoration_style
);

$vertical_menu_item_active_text_decoration_style = new QodeField(
	"selectsimple",
	"vertical_menu_item_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'brick' ),
	esc_html__( "Choose text decoration type for active menu items", 'brick' ),
	array(
		"none" => esc_html__( "None", 'brick' ),
		"underline" => esc_html__( "Underline", 'brick' ),
		"line-through" => esc_html__( "Line-through", 'brick' ),
		"overline" => esc_html__( "Overline", 'brick' )
	)
);
$row1->addChild(
	"vertical_menu_item_active_text_decoration_style",
	$vertical_menu_item_active_text_decoration_style
);

$enable_vertical_menu_item_border = new QodeField(
	"yesno",
	"enable_vertical_menu_item_border",
	"no",
	esc_html__( "Enable Hover Borders for 1st Level Menu Items", 'brick' ),
	esc_html__( "Enabling this option will show borders on hover around item text in first level menu. In order to work, you need to set border width and color.", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_item_border_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_item_border",
	$enable_vertical_menu_item_border
);

$vertical_menu_item_border_container = new QodeContainer(
	"vertical_menu_item_border_container",
	"enable_vertical_menu_item_border",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_border_container",
	$vertical_menu_item_border_container
);

$group1 = new QodeGroup(
	esc_html__( "Hover Border Style", 'brick' ),
	""
);
$vertical_menu_item_border_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_item_border_width = new QodeField(
	"textsimple",
	"vertical_menu_item_border_width",
	"",
	esc_html__( "Border Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_menu_item_border_width",
	$vertical_menu_item_border_width
);

$vertical_menu_item_border_hover = new QodeField(
	"colorsimple",
	"vertical_menu_item_border_hover",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_menu_item_border_hover",
	$vertical_menu_item_border_hover
);

$vertical_menu_item_border_active = new QodeField(
	"colorsimple",
	"vertical_menu_item_border_active",
	"",
	esc_html__( "Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_menu_item_border_active",
	$vertical_menu_item_border_active
);

$vertical_menu_dropdown = new QodeTitle(
	"vertical_menu_dropdown",
	esc_html__( "Second Level Menu", 'brick' )
);
$panel7->addChild(
	"vertical_menu_dropdown",
	$vertical_menu_dropdown
);

$vertical_menu_dropdown_top_padding = new QodeField(
	"text",
	"vertical_menu_dropdown_top_padding",
	"",
	esc_html__( "Dropdown Top Padding", 'brick' ),
	esc_html__( "Enter top padding for dropdown (in pixels)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dropdown_top_padding",
	$vertical_menu_dropdown_top_padding
);

$vertical_menu_dropdown_bottom_padding = new QodeField(
	"text",
	"vertical_menu_dropdown_bottom_padding",
	"",
	esc_html__( "Dropdown Bottom Padding", 'brick' ),
	esc_html__( "Enter bottom padding for dropdown (in pixels)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dropdown_bottom_padding",
	$vertical_menu_dropdown_bottom_padding
);

$vertical_menu_dd_item_padding_top_bttm = new QodeField(
	"text",
	"vertical_menu_dd_item_padding_top_bttm",
	"",
	esc_html__( "Dropdown Menu Items Top/Bottom Padding", 'brick' ),
	esc_html__( "Enter padding for top and bottom of menu items in submenu dropdown (px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dd_item_padding_top_bttm",
	$vertical_menu_dd_item_padding_top_bttm
);

$vertical_menu_dropdown_plus_color = new QodeField(
	"color",
	"vertical_menu_dropdown_plus_color",
	"",
	esc_html__( "Dropdown 'Plus' Icon Color", 'brick' ),
	esc_html__( "Choose a color for dropdown 'plus' icon", 'brick' )
);
$panel7->addChild(
	"vertical_menu_dropdown_plus_color",
	$vertical_menu_dropdown_plus_color
);

$vertical_menu_dd_separator_container = new QodeContainer(
	"vertical_menu_dd_separator_container",
	"vertical_area_dropdown_showing",
	"hover",
	array( "hover", "side", "click" )
);
$panel7->addChild(
	"vertical_menu_dd_separator_container",
	$vertical_menu_dd_separator_container
);

$vertical_dropdown_separators_yesno = new QodeField(
	"yesno",
	"vertical_dropdown_separators_yesno",
	"no",
	esc_html__( "Enable Dropdown Menu Item Separators", 'brick' ),
	esc_html__( "Enabling this option will display dropdown menu item separators", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_dropdown_separators_container"
	)
);
$vertical_menu_dd_separator_container->addChild(
	"vertical_dropdown_separators_yesno",
	$vertical_dropdown_separators_yesno
);

$vertical_dropdown_separators_container = new QodeContainer(
	"vertical_dropdown_separators_container",
	"vertical_dropdown_separators_yesno",
	"no"
);
$vertical_menu_dd_separator_container->addChild(
	"vertical_dropdown_separators_container",
	$vertical_dropdown_separators_container
);

$vertical_dropdown_separators_color = new QodeField(
	"color",
	"vertical_dropdown_separators_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color for the menu item separators.", 'brick' )
);
$vertical_dropdown_separators_container->addChild(
	"vertical_dropdown_separators_color",
	$vertical_dropdown_separators_color
);

$enable_vertical_top_bottom_dropdown_separators = new QodeField(
	"yesno",
	"enable_vertical_top_bottom_dropdown_separators",
	"no",
	esc_html__( "Enable Menu Top and Bottom Separators", 'brick' ),
	esc_html__( "Enabling this option will display separators at top and bottom of menu also", 'brick' )
);
$vertical_dropdown_separators_container->addChild(
	"enable_vertical_top_bottom_dropdown_separators",
	$enable_vertical_top_bottom_dropdown_separators
);

$vertical_menu_text_icons = new QodeTitle(
	"vertical_menu_text_icons",
	esc_html__( "Menu Text and Icons", 'brick' )
);
$panel7->addChild(
	"vertical_menu_text_icons",
	$vertical_menu_text_icons
);

$group1 = new QodeGroup(
	"1st Level Menu Style",
	esc_html__( "Define styles for 1st level in Side Menu", 'brick' )
);
$panel7->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_color = new QodeField(
	"colorsimple",
	"vertical_menu_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_menu_color",
	$vertical_menu_color
);
$vertical_menu_hovercolor = new QodeField(
	"colorsimple",
	"vertical_menu_hovercolor",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_menu_hovercolor",
	$vertical_menu_hovercolor
);
$vertical_menu_activecolor = new QodeField(
	"colorsimple",
	"vertical_menu_activecolor",
	"",
	esc_html__( "Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_menu_activecolor",
	$vertical_menu_activecolor
);

$row4 = new QodeRow();
$group1->addChild(
	"row4",
	$row4
);

$vertical_menu_icon_color = new QodeField(
	"colorsimple",
	"vertical_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_menu_icon_color",
	$vertical_menu_icon_color
);
$vertical_menu_icon_hovercolor = new QodeField(
	"colorsimple",
	"vertical_menu_icon_hovercolor",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_menu_icon_hovercolor",
	$vertical_menu_icon_hovercolor
);
$vertical_menu_icon_activecolor = new QodeField(
	"colorsimple",
	"vertical_menu_icon_activecolor",
	"",
	esc_html__( "Icon Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_menu_icon_activecolor",
	$vertical_menu_icon_activecolor
);
$vertical_menu_icon_margin = new QodeField(
	"textsimple",
	"vertical_menu_icon_margin",
	"",
	esc_html__( "Space between text and icon (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_menu_icon_margin",
	$vertical_menu_icon_margin
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$vertical_menu_google_fonts = new QodeField(
	"fontsimple",
	"vertical_menu_google_fonts",
	"-1",
	esc_html__( "Font family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_menu_google_fonts",
	$vertical_menu_google_fonts
);
$vertical_menu_fontsize = new QodeField(
	"textsimple",
	"vertical_menu_fontsize",
	"",
	esc_html__( "Font size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_menu_fontsize",
	$vertical_menu_fontsize
);
$vertical_menu_icon_fontsize = new QodeField(
	"textsimple",
	"vertical_menu_icon_fontsize",
	"",
	esc_html__( "Icon font size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_menu_icon_fontsize",
	$vertical_menu_icon_fontsize
);
$vertical_menu_lineheight = new QodeField(
	"textsimple",
	"vertical_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_menu_lineheight",
	$vertical_menu_lineheight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$vertical_menu_fontstyle = new QodeField(
	"selectblanksimple",
	"vertical_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"vertical_menu_fontstyle",
	$vertical_menu_fontstyle
);
$vertical_menu_fontweight = new QodeField(
	"selectblanksimple",
	"vertical_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"vertical_menu_fontweight",
	$vertical_menu_fontweight
);
$vertical_menu_letterspacing = new QodeField(
	"textsimple",
	"vertical_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"vertical_menu_letterspacing",
	$vertical_menu_letterspacing
);
$vertical_menu_texttransform = new QodeField(
	"selectblanksimple",
	"vertical_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"vertical_menu_texttransform",
	$vertical_menu_texttransform
);

$group2 = new QodeGroup(
	"2nd Level Menu Style",
	esc_html__( "Define styles for 2nd level in Side Menu", 'brick' )
);
$panel7->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$vertical_dropdown_color = new QodeField(
	"colorsimple",
	"vertical_dropdown_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_dropdown_color",
	$vertical_dropdown_color
);
$vertical_dropdown_hovercolor = new QodeField(
	"colorsimple",
	"vertical_dropdown_hovercolor",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_dropdown_hovercolor",
	$vertical_dropdown_hovercolor
);

$row4 = new QodeRow();
$group2->addChild(
	"row4",
	$row4
);
$vertical_dropdown_icon_color = new QodeField(
	"colorsimple",
	"vertical_dropdown_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_dropdown_icon_color",
	$vertical_dropdown_icon_color
);
$vertical_dropdown_icon_hovercolor = new QodeField(
	"colorsimple",
	"vertical_dropdown_icon_hovercolor",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_dropdown_icon_hovercolor",
	$vertical_dropdown_icon_hovercolor
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$vertical_dropdown_google_fonts = new QodeField(
	"fontsimple",
	"vertical_dropdown_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_google_fonts",
	$vertical_dropdown_google_fonts
);
$vertical_dropdown_fontsize = new QodeField(
	"textsimple",
	"vertical_dropdown_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_fontsize",
	$vertical_dropdown_fontsize
);
$vertical_dropdown_icon_fontsize = new QodeField(
	"textsimple",
	"vertical_dropdown_icon_fontsize",
	"",
	esc_html__( "Icon font size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_icon_fontsize",
	$vertical_dropdown_icon_fontsize
);
$vertical_dropdown_lineheight = new QodeField(
	"textsimple",
	"vertical_dropdown_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_lineheight",
	$vertical_dropdown_lineheight
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$vertical_dropdown_fontstyle = new QodeField(
	"selectblanksimple",
	"vertical_dropdown_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"vertical_dropdown_fontstyle",
	$vertical_dropdown_fontstyle
);
$vertical_dropdown_fontweight = new QodeField(
	"selectblanksimple",
	"vertical_dropdown_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"vertical_dropdown_fontweight",
	$vertical_dropdown_fontweight
);
$vertical_dropdown_letterspacing = new QodeField(
	"textsimple",
	"vertical_dropdown_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"vertical_dropdown_letterspacing",
	$vertical_dropdown_letterspacing
);
$vertical_dropdown_texttransform = new QodeField(
	"selectblanksimple",
	"vertical_dropdown_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"vertical_dropdown_texttransform",
	$vertical_dropdown_texttransform
);

$group3 = new QodeGroup(
	"3rd Level Menu Style",
	esc_html__( "Define styles for 3rd level in Side Menu", 'brick' )
);
$panel7->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$vertical_dropdown_color_thirdlvl = new QodeField(
	"colorsimple",
	"vertical_dropdown_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_dropdown_color_thirdlvl",
	$vertical_dropdown_color_thirdlvl
);
$vertical_dropdown_hovercolor_thirdlvl = new QodeField(
	"colorsimple",
	"vertical_dropdown_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"vertical_dropdown_hovercolor_thirdlvl",
	$vertical_dropdown_hovercolor_thirdlvl
);

$row4 = new QodeRow();
$group3->addChild(
	"row4",
	$row4
);
$vertical_dropdown_icon_color_thirdlvl = new QodeField(
	"colorsimple",
	"vertical_dropdown_icon_color_thirdlvl",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_dropdown_icon_color_thirdlvl",
	$vertical_dropdown_icon_color_thirdlvl
);
$vertical_dropdown_icon_hovercolor_thirdlvl = new QodeField(
	"colorsimple",
	"vertical_dropdown_icon_hovercolor_thirdlvl",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"vertical_dropdown_icon_hovercolor_thirdlvl",
	$vertical_dropdown_icon_hovercolor_thirdlvl
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$vertical_dropdown_google_fonts_thirdlvl = new QodeField(
	"fontsimple",
	"vertical_dropdown_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_google_fonts_thirdlvl",
	$vertical_dropdown_google_fonts_thirdlvl
);
$vertical_dropdown_fontsize_thirdlvl = new QodeField(
	"textsimple",
	"vertical_dropdown_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_fontsize_thirdlvl",
	$vertical_dropdown_fontsize_thirdlvl
);
$vertical_dropdown_icon_fontsize_thirdlvl = new QodeField(
	"textsimple",
	"vertical_dropdown_icon_fontsize_thirdlvl",
	"",
	esc_html__( "Icon font size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_icon_fontsize_thirdlvl",
	$vertical_dropdown_icon_fontsize_thirdlvl
);
$vertical_dropdown_lineheight_thirdlvl = new QodeField(
	"textsimple",
	"vertical_dropdown_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"vertical_dropdown_lineheight_thirdlvl",
	$vertical_dropdown_lineheight_thirdlvl
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$vertical_dropdown_fontstyle_thirdlvl = new QodeField(
	"selectblanksimple",
	"vertical_dropdown_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"vertical_dropdown_fontstyle_thirdlvl",
	$vertical_dropdown_fontstyle_thirdlvl
);
$vertical_dropdown_fontweight_thirdlvl = new QodeField(
	"selectblanksimple",
	"vertical_dropdown_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"vertical_dropdown_fontweight_thirdlvl",
	$vertical_dropdown_fontweight_thirdlvl
);
$vertical_dropdown_letterspacing_thirdlvl = new QodeField(
	"textsimple",
	"vertical_dropdown_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"vertical_dropdown_letterspacing_thirdlvl",
	$vertical_dropdown_letterspacing_thirdlvl
);
$vertical_dropdown_texttransform_thirdlvl = new QodeField(
	"selectblanksimple",
	"vertical_dropdown_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"vertical_dropdown_texttransform_thirdlvl",
	$vertical_dropdown_texttransform_thirdlvl
);

//Mobile menu	

$panel8 = new QodePanel(
	esc_html__( "Mobile Header", 'brick' ),
	"mobile_menu_panel"
);
$headerandfooterPage->addChild(
	"panel8",
	$panel8
);

$header_height_mobile = new QodeField(
	"text",
	"header_height_mobile",
	"",
	esc_html__( "Mobile Header Height", 'brick' ),
	esc_html__( "Enter height for mobile header in pixels", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"header_height_mobile",
	$header_height_mobile
);

$mobile_separator_color = new QodeField(
	"color",
	"mobile_separator_color",
	"",
	esc_html__( "Mobile Menu Item Separator Color", 'brick' ),
	esc_html__( "Choose color for mobile menu horizontal separators", 'brick' )
);
$panel8->addChild(
	"mobile_separator_color",
	$mobile_separator_color
);

$mobile_background_color = new QodeField(
	"color",
	"mobile_background_color",
	"",
	esc_html__( "Mobile Header & Menu Background Color", 'brick' ),
	esc_html__( "Choose color for mobile header&menu background", 'brick' )
);
$panel8->addChild(
	"mobile_background_color",
	$mobile_background_color
);

$logo_mobile_header_height = new QodeField(
	"text",
	"logo_mobile_header_height",
	"",
	esc_html__( "Logo Height For Mobile Header (px)", 'brick' ),
	esc_html__( "Define logo height for screen size smaller than 1000px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"logo_mobile_header_height",
	$logo_mobile_header_height
);

$logo_mobile_height = new QodeField(
	"text",
	"logo_mobile_height",
	"",
	esc_html__( "Logo Height For Mobile Devices (px)", 'brick' ),
	esc_html__( "Define logo height for screen size smaller than 480px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"logo_mobile_height",
	$logo_mobile_height
);

// Header Button Icons

$panel9 = new QodePanel(
	esc_html__( "Header Button Icons", 'brick' ),
	"header_buttons_panel"
);
$headerandfooterPage->addChild(
	"panel9",
	$panel9
);

$header_icon_pack = new QodeField(
	'select',
	'header_icon_pack',
	'font_awesome',
	esc_html__( 'Header Icons Icon Pack', 'brick' ),
	'Choose
	 Icon Pack',
	brick_qode_icon_collections()->getIconCollectionsExclude( array( 'linea_icons', 'simple_line_icons' ) )
);
$panel9->addChild(
	'header_icon_pack',
	$header_icon_pack
);

$group1 = new QodeGroup(
	esc_html__( "Header Icons Style", 'brick' ),
	esc_html__( "Define styles for header icons (Search Icon, Fullscreen Menu Icon and Side Area Icon)", 'brick' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow( true );
$group1->addChild(
	"row1",
	$row1
);

$header_buttons_color = new QodeField(
	"colorsimple",
	"header_buttons_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color for Header icons", 'brick' )
);
$row1->addChild(
	"header_buttons_color",
	$header_buttons_color
);

$header_buttons_hover_color = new QodeField(
	"colorsimple",
	"header_buttons_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "Choose a hover color for Header icons", 'brick' )
);
$row1->addChild(
	"header_buttons_hover_color",
	$header_buttons_hover_color
);

$header_buttons_font_size = new QodeField(
	"text",
	"header_buttons_font_size",
	"",
	esc_html__( "Side Area Icon/ Search Icon Size", 'brick' ),
	esc_html__( "Choose a size for Side Area / Search icons (px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel9->addChild(
	"header_buttons_font_size",
	$header_buttons_font_size
);

$header_buttons_size = new QodeField(
	"select",
	"header_buttons_size",
	"normal",
	esc_html__( "Side Menu Icon / Fullscreen Menu Icon Size", 'brick' ),
	esc_html__( "Choose predefined size for Side Area / Fullscreen Menu icons", 'brick' ),
	array(
		"normal" => esc_html__( "Normal", 'brick' ),
		"medium" => esc_html__( "Medium", 'brick' ),
		"large" => esc_html__( "Large", 'brick' )
	)
);
$panel9->addChild(
	"header_buttons_size",
	$header_buttons_size
);

$group3 = new QodeGroup(
	esc_html__( "Mobile Header Icons Color", 'brick' ),
	esc_html__( "Choose color for mobile header icons (search icon, fullscreen menu icon and side area icon)", 'brick' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$mobile_button_color = new QodeField(
	"colorsimple",
	"mobile_button_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose a color for mobile menu icon", 'brick' )
);
$row1->addChild(
	"mobile_button_color",
	$mobile_button_color
);

$mobile_button_color_hover = new QodeField(
	"colorsimple",
	"mobile_button_color_hover",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose a hover color for mobile menu icon", 'brick' )
);
$row1->addChild(
	"mobile_button_color_hover",
	$mobile_button_color_hover
);

$group2 = new QodeGroup(
	esc_html__( "Fullscreen Menu Icon Background", 'brick' ),
	esc_html__( "Define background for fullscreen menu icon in header", 'brick' )
);
$panel9->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow( true );
$group2->addChild(
	"row1",
	$row1
);

$header_buttons_fullscreen_button_background = new QodeField(
	"colorsimple",
	"header_buttons_fullscreen_button_background",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for Fullscreen Menu icon", 'brick' )
);
$row1->addChild(
	"header_buttons_fullscreen_button_background",
	$header_buttons_fullscreen_button_background
);

$header_buttons_fullscreen_button_background_hover = new QodeField(
	"colorsimple",
	"header_buttons_fullscreen_button_background_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "Choose a background hover color for Fullscreen Menu icon", 'brick' )
);
$row1->addChild(
	"header_buttons_fullscreen_button_background_hover",
	$header_buttons_fullscreen_button_background_hover
); 

	
