<?php

$sidebarPage = new BrickQodeAdminPage(
	"7",
	esc_html__( "Sidebar", 'brick' ),
	"fa fa-bars"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"sidebar",
	$sidebarPage
);

// Navigation Style

$panel1 = new QodePanel(
	esc_html__( "Widgets", 'brick' ),
	"widget_style"
);
$sidebarPage->addChild(
	"panel1",
	$panel1
);

$sidebar_background_color = new QodeField(
	"color",
	"sidebar_background_color",
	"",
	esc_html__( "Sidebar Background Color", 'brick' ),
	esc_html__( "Choose background color for sidebar", 'brick' )
);
$panel1->addChild(
	"sidebar_background_color",
	$sidebar_background_color
);

$group6 = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for sidebar", 'brick' )
);
$panel1->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow( true );
$group6->addChild(
	"row1",
	$row1
);
$sidebar_padding_top = new QodeField(
	"textsimple",
	"sidebar_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_padding_top",
	$sidebar_padding_top
);
$sidebar_padding_right = new QodeField(
	"textsimple",
	"sidebar_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_padding_right",
	$sidebar_padding_right
);
$sidebar_padding_bottom = new QodeField(
	"textsimple",
	"sidebar_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_padding_bottom",
	$sidebar_padding_bottom
);
$sidebar_padding_left = new QodeField(
	"textsimple",
	"sidebar_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_padding_left",
	$sidebar_padding_left
);

$sidebar_shadow_enable = new QodeField(
	'yesno',
	'sidebar_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Sidebar', 'brick' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_sidebar_shadow_container'
	)
);
$panel1->addChild(
	'sidebar_enable_box_shadow',
	$sidebar_shadow_enable
);

$sidebar_shadow_container = new QodeContainer(
	'sidebar_shadow_container',
	'sidebar_enable_box_shadow',
	'no'
);
$panel1->addChild(
	'sidebar_shadow_container',
	$sidebar_shadow_container
);

$sidebar_shadow_horizontal_offset = new QodeField(
	'text',
	'sidebar_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'brick' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_horizontal_offset',
	$sidebar_shadow_horizontal_offset
);

$sidebar_shadow_vertical_offset = new QodeField(
	'text',
	'sidebar_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'brick' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_vertical_offset',
	$sidebar_shadow_vertical_offset
);

$sidebar_shadow_blur = new QodeField(
	'text',
	'sidebar_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'brick' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_blur',
	$sidebar_shadow_blur
);

$sidebar_shadow_spread = new QodeField(
	'text',
	'sidebar_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'brick' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_spread',
	$sidebar_shadow_spread
);

$sidebar_shadow_color = new QodeField(
	'color',
	'sidebar_shadow_color',
	'',
	esc_html__( 'Color', 'brick' ),
	esc_html__( 'Choose color of shadow', 'brick' )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_color',
	$sidebar_shadow_color
);

$sidebar_alignment = new QodeField(
	"select",
	"sidebar_alignment",
	"",
	esc_html__( "Text Alignment", 'brick' ),
	esc_html__( "Choose text aligment", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$panel1->addChild(
	"sidebar_alignment",
	$sidebar_alignment
);

$widget_style = new QodeTitle(
	"widget_style",
	esc_html__( "Widget Style", 'brick' )
);
$panel1->addChild(
	"widget_style",
	$widget_style
);

$widget_background_color = new QodeField(
	"color",
	"widget_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose color for widget background", 'brick' )
);
$panel1->addChild(
	"widget_background_color",
	$widget_background_color
);

$widget_border_color = new QodeField(
	"color",
	"widget_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose a border color around widget", 'brick' )
);
$panel1->addChild(
	"widget_border_color",
	$widget_border_color
);

$group1 = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for widget", 'brick' )
);
$panel1->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow( true );
$group1->addChild(
	"row1",
	$row1
);
$widget_padding_top = new QodeField(
	"textsimple",
	"widget_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_padding_top",
	$widget_padding_top
);
$widget_padding_right = new QodeField(
	"textsimple",
	"widget_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_padding_right",
	$widget_padding_right
);
$widget_padding_bottom = new QodeField(
	"textsimple",
	"widget_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_padding_bottom",
	$widget_padding_bottom
);
$widget_padding_left = new QodeField(
	"textsimple",
	"widget_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_padding_left",
	$widget_padding_left
);

$sidebar_widget_enable_box_shadow = new QodeField(
	'yesno',
	'sidebar_widget_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Widgets', 'brick' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_sidebar_widget_shadow_container'
	)
);
$panel1->addChild(
	'sidebar_widget_enable_box_shadow',
	$sidebar_widget_enable_box_shadow
);

$sidebar_widget_shadow_container = new QodeContainer(
	'sidebar_widget_shadow_container',
	'sidebar_widget_enable_box_shadow',
	'no'
);
$panel1->addChild(
	'sidebar_widget_shadow_container',
	$sidebar_widget_shadow_container
);

$sidebar_widget_shadow_horizontal_offset = new QodeField(
	'text',
	'sidebar_widget_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'brick' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_horizontal_offset',
	$sidebar_widget_shadow_horizontal_offset
);

$sidebar_widget_shadow_vertical_offset = new QodeField(
	'text',
	'sidebar_widget_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'brick' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_vertical_offset',
	$sidebar_widget_shadow_vertical_offset
);

$sidebar_widget_shadow_blur = new QodeField(
	'text',
	'sidebar_widget_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'brick' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_blur',
	$sidebar_widget_shadow_blur
);

$sidebar_widget_shadow_spread = new QodeField(
	'text',
	'sidebar_widget_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'brick' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_spread',
	$sidebar_widget_shadow_spread
);

$sidebar_widget_shadow_color = new QodeField(
	'color',
	'sidebar_widget_shadow_color',
	'',
	esc_html__( 'Color', 'brick' ),
	esc_html__( 'Choose color of shadow', 'brick' )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_color',
	$sidebar_widget_shadow_color
);

$widget_title = new QodeTitle(
	"widget_title",
	esc_html__( "Widget Title", 'brick' )
);
$panel1->addChild(
	"widget_title",
	$widget_title
);

$group2 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define styles for widgets title", 'brick' )
);
$panel1->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$sidebar_title_color = new QodeField(
	"colorsimple",
	"sidebar_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_color",
	$sidebar_title_color
);

$sidebar_title_font_size = new QodeField(
	"textsimple",
	"sidebar_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_font_size",
	$sidebar_title_font_size
);

$sidebar_title_line_height = new QodeField(
	"textsimple",
	"sidebar_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_line_height",
	$sidebar_title_line_height
);

$sidebar_title_text_transform = new QodeField(
	"selectblanksimple",
	"sidebar_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"sidebar_title_text_transform",
	$sidebar_title_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidebar_title_font_family = new QodeField(
	"fontsimple",
	"sidebar_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_title_font_family",
	$sidebar_title_font_family
);

$sidebar_title_font_style = new QodeField(
	"selectblanksimple",
	"sidebar_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"sidebar_title_font_style",
	$sidebar_title_font_style
);

$sidebar_title_font_weight = new QodeField(
	"selectblanksimple",
	"sidebar_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"sidebar_title_font_weight",
	$sidebar_title_font_weight
);

$sidebar_title_letter_spacing = new QodeField(
	"textsimple",
	"sidebar_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_title_letter_spacing",
	$sidebar_title_letter_spacing
);

$sidebar_title_background = new QodeField(
	"color",
	"sidebar_title_background",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose color for background", 'brick' )
);
$panel1->addChild(
	"sidebar_title_background",
	$sidebar_title_background
);

$sidebar_title_border_color = new QodeField(
	"color",
	"sidebar_title_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose color for border", 'brick' )
);
$panel1->addChild(
	"sidebar_title_border_color",
	$sidebar_title_border_color
);

$group8 = new QodeGroup(
	esc_html__( "Padding for Title", 'brick' ),
	esc_html__( "Define padding for title", 'brick' )
);
$panel1->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$sidebar_title_padding_top = new QodeField(
	"textsimple",
	"sidebar_title_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_padding_top",
	$sidebar_title_padding_top
);

$sidebar_title_padding_right = new QodeField(
	"textsimple",
	"sidebar_title_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_padding_right",
	$sidebar_title_padding_right
);

$sidebar_title_padding_bottom = new QodeField(
	"textsimple",
	"sidebar_title_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_padding_bottom",
	$sidebar_title_padding_bottom
);

$sidebar_title_padding_left = new QodeField(
	"textsimple",
	"sidebar_title_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_padding_left",
	$sidebar_title_padding_left
);

$group4 = new QodeGroup(
	esc_html__( "Separator", 'brick' ),
	esc_html__( "Define styles for title separator", 'brick' )
);
$panel1->addChild(
	"group4",
	$group4
);
$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);
$sidebar_title_border_bottom_color = new QodeField(
	"colorsimple",
	"sidebar_title_border_bottom_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_border_bottom_color",
	$sidebar_title_border_bottom_color
);

$sidebar_title_border_bottom_width = new QodeField(
	"textsimple",
	"sidebar_title_border_bottom_width",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_border_bottom_width",
	$sidebar_title_border_bottom_width
);

$sidebar_title_border_bottom_padding_bottom = new QodeField(
	"textsimple",
	"sidebar_title_border_bottom_padding_bottom",
	"",
	esc_html__( "Top Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_border_bottom_padding_bottom",
	$sidebar_title_border_bottom_padding_bottom
);

$sidebar_title_border_bottom_margin_bottom = new QodeField(
	"textsimple",
	"sidebar_title_border_bottom_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_title_border_bottom_margin_bottom",
	$sidebar_title_border_bottom_margin_bottom
);

$widget_text = new QodeTitle(
	"widget_text",
	esc_html__( "Widget Text", 'brick' )
);
$panel1->addChild(
	"widget_text",
	$widget_text
);

$group7 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define styles for widgets text", 'brick' )
);
$panel1->addChild(
	"group7",
	$group7
);
$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);
$sidebar_text_color = new QodeField(
	"colorsimple",
	"sidebar_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_text_color",
	$sidebar_text_color
);

$sidebar_text_font_size = new QodeField(
	"textsimple",
	"sidebar_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_text_font_size",
	$sidebar_text_font_size
);

$sidebar_text_line_height = new QodeField(
	"textsimple",
	"sidebar_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_text_line_height",
	$sidebar_text_line_height
);

$sidebar_text_text_transform = new QodeField(
	"selectblanksimple",
	"sidebar_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"sidebar_text_text_transform",
	$sidebar_text_text_transform
);

$row2 = new QodeRow( true );
$group7->addChild(
	"row2",
	$row2
);
$sidebar_text_font_family = new QodeField(
	"fontsimple",
	"sidebar_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_text_font_family",
	$sidebar_text_font_family
);

$sidebar_text_font_style = new QodeField(
	"selectblanksimple",
	"sidebar_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"sidebar_text_font_style",
	$sidebar_text_font_style
);

$sidebar_text_font_weight = new QodeField(
	"selectblanksimple",
	"sidebar_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"sidebar_text_font_weight",
	$sidebar_text_font_weight
);

$sidebar_text_letter_spacing = new QodeField(
	"textsimple",
	"sidebar_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_text_letter_spacing",
	$sidebar_text_letter_spacing
);

$widget_link = new QodeTitle(
	"widget_link",
	esc_html__( "Widget Link", 'brick' )
);
$panel1->addChild(
	"widget_link",
	$widget_link
);

$group3 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define styles for widget links", 'brick' )
);
$panel1->addChild(
	"group3",
	$group3
);
$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);
$sidebar_link_color = new QodeField(
	"colorsimple",
	"sidebar_link_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_link_color",
	$sidebar_link_color
);

$sidebar_link_hover_color = new QodeField(
	"colorsimple",
	"sidebar_link_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_link_hover_color",
	$sidebar_link_hover_color
);

$sidebar_link_font_size = new QodeField(
	"textsimple",
	"sidebar_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_link_font_size",
	$sidebar_link_font_size
);

$sidebar_link_line_height = new QodeField(
	"textsimple",
	"sidebar_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_link_line_height",
	$sidebar_link_line_height
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$sidebar_link_text_transform = new QodeField(
	"selectblanksimple",
	"sidebar_link_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"sidebar_link_text_transform",
	$sidebar_link_text_transform
);

$sidebar_link_font_family = new QodeField(
	"fontsimple",
	"sidebar_link_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_link_font_family",
	$sidebar_link_font_family
);

$sidebar_link_font_style = new QodeField(
	"selectblanksimple",
	"sidebar_link_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"sidebar_link_font_style",
	$sidebar_link_font_style
);

$sidebar_link_font_weight = new QodeField(
	"selectblanksimple",
	"sidebar_link_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"sidebar_link_font_weight",
	$sidebar_link_font_weight
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$sidebar_link_letter_spacing = new QodeField(
	"textsimple",
	"sidebar_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"sidebar_link_letter_spacing",
	$sidebar_link_letter_spacing
);

$group9 = new QodeGroup(
	esc_html__( "Separator Style", 'brick' ),
	esc_html__( "Choose style for separator between links", 'brick' )
);
$panel1->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$sidebar_link_separator_color = new QodeField(
	"colorsimple",
	"sidebar_link_separator_color",
	"",
	esc_html__( "Separator between links color", 'brick' ),
	esc_html__( "Choose color for separator between color", 'brick' )
);
$row1->addChild(
	"sidebar_link_separator_color",
	$sidebar_link_separator_color
);

$sidebar_link_separator_type = new QodeField(
	"selectblanksimple",
	"sidebar_link_separator_type",
	"",
	esc_html__( "Separator between links style", 'brick' ),
	esc_html__( "Choose style for separator", 'brick' ),
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' )
	)
);
$row1->addChild(
	"sidebar_link_separator_type",
	$sidebar_link_separator_type
);

$widget_elements = new QodeTitle(
	"widget_elements",
	esc_html__( "Widget Elements", 'brick' )
);
$panel1->addChild(
	"widget_elements",
	$widget_elements
);

$group5 = new QodeGroup(
	esc_html__( "Search", 'brick' ),
	esc_html__( "Define styles for search in widget", 'brick' )
);
$panel1->addChild(
	"group5",
	$group5
);
$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$sidebar_search_height = new QodeField(
	"textsimple",
	"sidebar_search_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_search_height",
	$sidebar_search_height
);

$sidebar_search_border_color = new QodeField(
	"colorsimple",
	"sidebar_search_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_search_border_color",
	$sidebar_search_border_color
);

$sidebar_search_loupe_color = new QodeField(
	"colorsimple",
	"sidebar_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_search_loupe_color",
	$sidebar_search_loupe_color
);

$sidebar_search_loupe_background_color = new QodeField(
	"colorsimple",
	"sidebar_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_search_loupe_background_color",
	$sidebar_search_loupe_background_color
);

$row2 = new QodeRow();
$group5->addChild(
	"row2",
	$row2
);
$sidebar_search_text_color = new QodeField(
	"colorsimple",
	"sidebar_search_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_search_text_color",
	$sidebar_search_text_color
);

$sidebar_search_focus_text_color = new QodeField(
	"colorsimple",
	"sidebar_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_search_focus_text_color",
	$sidebar_search_focus_text_color
);

$sidebar_search_text_font_size = new QodeField(
	"textsimple",
	"sidebar_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_search_text_font_size",
	$sidebar_search_text_font_size
);

$sidebar_search_text_line_height = new QodeField(
	"textsimple",
	"sidebar_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_search_text_line_height",
	$sidebar_search_text_line_height
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$sidebar_search_text_text_transform = new QodeField(
	"selectblanksimple",
	"sidebar_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"sidebar_search_text_text_transform",
	$sidebar_search_text_text_transform
);

$sidebar_search_text_font_family = new QodeField(
	"fontsimple",
	"sidebar_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"sidebar_search_text_font_family",
	$sidebar_search_text_font_family
);

$sidebar_search_text_font_style = new QodeField(
	"selectblanksimple",
	"sidebar_search_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"sidebar_search_text_font_style",
	$sidebar_search_text_font_style
);

$sidebar_search_text_font_weight = new QodeField(
	"selectblanksimple",
	"sidebar_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"sidebar_search_text_font_weight",
	$sidebar_search_text_font_weight
);

$row4 = new QodeRow( true );
$group5->addChild(
	"row4",
	$row4
);

$sidebar_search_text_letter_spacing = new QodeField(
	"textsimple",
	"sidebar_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"sidebar_search_text_letter_spacing",
	$sidebar_search_text_letter_spacing
);

$sidebar_search_border_around = new QodeField(
	"selectsimple",
	"sidebar_search_border_around",
	"",
	esc_html__( "Border Around", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"around_everything" => esc_html__( "Around Everything", 'brick' ),
		"around_search_text" => esc_html__( "Around Search Text", 'brick' )
	)
);
$row4->addChild(
	"sidebar_search_border_around",
	$sidebar_search_border_around
);

$widget_blog_list = new QodeTitle(
	"widget_blog_list",
	esc_html__( "Widget - Select Blog", 'brick' )
);
$panel1->addChild(
	"widget_blog_list",
	$widget_blog_list
);

$group10 = new QodeGroup(
	esc_html__( "Blog List Title", 'brick' ),
	esc_html__( "Define Blog List title style", 'brick' )
);
$panel1->addChild(
	"group10",
	$group10
);
$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_color = new QodeField(
	"colorsimple",
	"widget_blog_list_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_title_color",
	$widget_blog_list_title_color
);

$widget_blog_list_title_hover_color = new QodeField(
	"colorsimple",
	"widget_blog_list_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_title_hover_color",
	$widget_blog_list_title_hover_color
);

$widget_blog_list_title_font_size = new QodeField(
	"textsimple",
	"widget_blog_list_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_title_font_size",
	$widget_blog_list_title_font_size
);

$widget_blog_list_title_line_height = new QodeField(
	"textsimple",
	"widget_blog_list_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_title_line_height",
	$widget_blog_list_title_line_height
);

$row2 = new QodeRow( true );
$group10->addChild(
	"row2",
	$row2
);

$widget_blog_list_title_text_transform = new QodeField(
	"selectblanksimple",
	"widget_blog_list_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"widget_blog_list_title_text_transform",
	$widget_blog_list_title_text_transform
);

$widget_blog_list_title_font_family = new QodeField(
	"fontsimple",
	"widget_blog_list_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"widget_blog_list_title_font_family",
	$widget_blog_list_title_font_family
);

$widget_blog_list_title_font_style = new QodeField(
	"selectblanksimple",
	"widget_blog_list_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"widget_blog_list_title_font_style",
	$widget_blog_list_title_font_style
);

$widget_blog_list_title_font_weight = new QodeField(
	"selectblanksimple",
	"widget_blog_list_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"widget_blog_list_title_font_weight",
	$widget_blog_list_title_font_weight
);

$row3 = new QodeRow( true );
$group10->addChild(
	"row3",
	$row3
);

$widget_blog_list_title_letter_spacing = new QodeField(
	"textsimple",
	"widget_blog_list_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"widget_blog_list_title_letter_spacing",
	$widget_blog_list_title_letter_spacing
);

$group11 = new QodeGroup(
	esc_html__( "Blog List Post Info", 'brick' ),
	esc_html__( "Define blog list post info style", 'brick' )
);
$panel1->addChild(
	"group11",
	$group11
);
$row1 = new QodeRow();
$group11->addChild(
	"row1",
	$row1
);

$widget_blog_list_post_info_color = new QodeField(
	"colorsimple",
	"widget_blog_list_post_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_post_info_color",
	$widget_blog_list_post_info_color
);

$widget_blog_list_post_info_link_color = new QodeField(
	"colorsimple",
	"widget_blog_list_post_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_color",
	$widget_blog_list_post_info_link_color
);

$widget_blog_list_post_info_link_hover_color = new QodeField(
	"colorsimple",
	"widget_blog_list_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_hover_color",
	$widget_blog_list_post_info_link_hover_color
);

$widget_blog_list_post_info_font_size = new QodeField(
	"textsimple",
	"widget_blog_list_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_post_info_font_size",
	$widget_blog_list_post_info_font_size
);

$row2 = new QodeRow( true );
$group11->addChild(
	"row2",
	$row2
);

$widget_blog_list_post_info_line_height = new QodeField(
	"textsimple",
	"widget_blog_list_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"widget_blog_list_post_info_line_height",
	$widget_blog_list_post_info_line_height
);

$widget_blog_list_post_info_text_transform = new QodeField(
	"selectblanksimple",
	"widget_blog_list_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"widget_blog_list_post_info_text_transform",
	$widget_blog_list_post_info_text_transform
);

$widget_blog_list_post_info_font_family = new QodeField(
	"fontsimple",
	"widget_blog_list_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"widget_blog_list_post_info_font_family",
	$widget_blog_list_post_info_font_family
);

$widget_blog_list_post_info_font_style = new QodeField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"widget_blog_list_post_info_font_style",
	$widget_blog_list_post_info_font_style
);

$row3 = new QodeRow( true );
$group11->addChild(
	"row3",
	$row3
);

$widget_blog_list_post_info_font_weight = new QodeField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"widget_blog_list_post_info_font_weight",
	$widget_blog_list_post_info_font_weight
);

$widget_blog_list_post_info_letter_spacing = new QodeField(
	"textsimple",
	"widget_blog_list_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"widget_blog_list_post_info_letter_spacing",
	$widget_blog_list_post_info_letter_spacing
);

$group12 = new QodeGroup(
	esc_html__( "Blog List Date Style", 'brick' ),
	esc_html__( "Define blog list date style", 'brick' )
);
$panel1->addChild(
	"group12",
	$group12
);
$row1 = new QodeRow();
$group12->addChild(
	"row1",
	$row1
);

$widget_blog_list_date_color = new QodeField(
	"colorsimple",
	"widget_blog_list_date_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_date_color",
	$widget_blog_list_date_color
);

$widget_blog_list_date_font_size = new QodeField(
	"textsimple",
	"widget_blog_list_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_date_font_size",
	$widget_blog_list_date_font_size
);

$widget_blog_list_date_line_height = new QodeField(
	"textsimple",
	"widget_blog_list_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_date_line_height",
	$widget_blog_list_date_line_height
);

$widget_blog_list_date_text_transform = new QodeField(
	"selectblanksimple",
	"widget_blog_list_date_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"widget_blog_list_date_text_transform",
	$widget_blog_list_date_text_transform
);

$row2 = new QodeRow( true );
$group12->addChild(
	"row2",
	$row2
);

$widget_blog_list_date_font_family = new QodeField(
	"fontsimple",
	"widget_blog_list_date_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"widget_blog_list_date_font_family",
	$widget_blog_list_date_font_family
);

$widget_blog_list_date_font_style = new QodeField(
	"selectblanksimple",
	"widget_blog_list_date_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"widget_blog_list_date_font_style",
	$widget_blog_list_date_font_style
);

$widget_blog_list_date_font_weight = new QodeField(
	"selectblanksimple",
	"widget_blog_list_date_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"widget_blog_list_date_font_weight",
	$widget_blog_list_date_font_weight
);

$widget_blog_list_date_letter_spacing = new QodeField(
	"textsimple",
	"widget_blog_list_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"widget_blog_list_date_letter_spacing",
	$widget_blog_list_date_letter_spacing
);

$group31 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Define blog list spacing", 'brick' )
);
$panel1->addChild(
	"group31",
	$group31
);

$row1 = new QodeRow( true );
$group31->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_margin_bttm = new QodeField(
	"textsimple",
	"widget_blog_list_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_title_margin_bttm",
	$widget_blog_list_title_margin_bttm
);

$widget_blog_list_post_info_margin_bttm = new QodeField(
	"textsimple",
	"widget_blog_list_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_post_info_margin_bttm",
	$widget_blog_list_post_info_margin_bttm
);

$widget_blog_list_read_more_margin_top = new QodeField(
	"textsimple",
	"widget_blog_list_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"widget_blog_list_read_more_margin_top",
	$widget_blog_list_read_more_margin_top
);  