<?php

$contactform7page = new BrickQodeAdminPage(
	"17",
	esc_html__( "Contact Form 7", 'brick' ),
	"fa fa-envelope-o"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Contact Form 7", 'brick' ),
	$contactform7page
);

//Contact Form 7 Settings

$panel1 = new QodePanel(
	esc_html__( "Custom Style 1 Settings", 'brick' ),
	"contact_form_custom_style_1_panel"
);
$contactform7page->addChild(
	"panel1",
	$panel1
);

$group1 = new QodeGroup(
	esc_html__( "Form Elements' Background", 'brick' ),
	esc_html__( "Define background for form elements (input, textarea, select)", 'brick' )
);
$panel1->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$cf7_custom_style_1_element_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_element_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_background_color",
	$cf7_custom_style_1_element_background_color
);
$cf7_custom_style_1_element_focus_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_element_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_focus_background_color",
	$cf7_custom_style_1_element_focus_background_color
);
$cf7_custom_style_1_element_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_background_transparency",
	$cf7_custom_style_1_element_background_transparency
);
$cf7_custom_style_1_element_focus_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_focus_background_transparency",
	"",
	esc_html__( "Focus Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_focus_background_transparency",
	$cf7_custom_style_1_element_focus_background_transparency
);
$group2 = new QodeGroup(
	esc_html__( "Form Elements' Border", 'brick' ),
	esc_html__( "Define border style for form elements (text input fields, textarea, select)", 'brick' )
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
$cf7_custom_style_1_element_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_element_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_border_color",
	$cf7_custom_style_1_element_border_color
);
$cf7_custom_style_1_element_focus_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_element_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_focus_border_color",
	$cf7_custom_style_1_element_focus_border_color
);
$cf7_custom_style_1_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_border_transparency",
	$cf7_custom_style_1_border_transparency
);
$cf7_custom_style_1_focus_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_focus_border_transparency",
	"",
	esc_html__( "Focus Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_focus_border_transparency",
	$cf7_custom_style_1_focus_border_transparency
);
$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_element_border_width = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_element_border_width",
	$cf7_custom_style_1_element_border_width
);
$cf7_custom_style_1_element_border_radius = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_element_border_radius",
	$cf7_custom_style_1_element_border_radius
);
$cf7_custom_style_1_element_border_bottom = new QodeField(
	"yesnosimple",
	"cf7_custom_style_1_element_border_bottom",
	"no",
	esc_html__( "Show Only Border Bottom", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_element_border_bottom",
	$cf7_custom_style_1_element_border_bottom
);

$group3 = new QodeGroup(
	esc_html__( "Form Elements' Text Style", 'brick' ),
	esc_html__( "Define text style for form elements (text input fields, textarea, select)", 'brick' )
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
$cf7_custom_style_1_element_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_element_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_font_color",
	$cf7_custom_style_1_element_font_color
);
$cf7_custom_style_1_element_font_focus_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_element_font_focus_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_font_focus_color",
	$cf7_custom_style_1_element_font_focus_color
);
$cf7_custom_style_1_element_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_font_size",
	$cf7_custom_style_1_element_font_size
);
$cf7_custom_style_1_element_line_height = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_line_height",
	$cf7_custom_style_1_element_line_height
);
$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_element_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_1_element_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_element_font_family",
	$cf7_custom_style_1_element_font_family
);
$cf7_custom_style_1_element_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_element_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_1_element_font_style",
	$cf7_custom_style_1_element_font_style
);
$cf7_custom_style_1_element_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_element_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_1_element_font_weight",
	$cf7_custom_style_1_element_font_weight
);
$cf7_custom_style_1_element_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_element_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_1_element_text_transform",
	$cf7_custom_style_1_element_text_transform
);
$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$cf7_custom_style_1_element_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_element_letter_spacing",
	$cf7_custom_style_1_element_letter_spacing
);

$group9 = new QodeGroup(
	esc_html__( "Form Elements' Labels Style", 'brick' ),
	esc_html__( "Define labels style for form elements (text input fields, textarea, select)", 'brick' )
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
$cf7_custom_style_1_label_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_label_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_label_font_color",
	$cf7_custom_style_1_label_font_color
);
$cf7_custom_style_1_label_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_1_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_label_font_size",
	$cf7_custom_style_1_label_font_size
);
$cf7_custom_style_1_label_line_height = new QodeField(
	"textsimple",
	"cf7_custom_style_1_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_label_line_height",
	$cf7_custom_style_1_label_line_height
);
$cf7_custom_style_1_label_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_1_label_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_label_font_family",
	$cf7_custom_style_1_label_font_family
);
$row2 = new QodeRow( true );
$group9->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_label_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_label_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_1_label_font_style",
	$cf7_custom_style_1_label_font_style
);
$cf7_custom_style_1_label_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_label_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_1_label_font_weight",
	$cf7_custom_style_1_label_font_weight
);
$cf7_custom_style_1_label_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_label_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_1_label_text_transform",
	$cf7_custom_style_1_label_text_transform
);
$cf7_custom_style_1_label_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_1_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_label_letter_spacing",
	$cf7_custom_style_1_label_letter_spacing
);
$group4 = new QodeGroup(
	esc_html__( "Form Elements' Padding", 'brick' ),
	esc_html__( "Define padding for form elements (text input fields, textarea, select)", 'brick' )
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
$cf7_custom_style_1_element_padding_top = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_top",
	$cf7_custom_style_1_element_padding_top
);
$cf7_custom_style_1_element_padding_right = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_right",
	$cf7_custom_style_1_element_padding_right
);
$cf7_custom_style_1_element_padding_bottom = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_bottom",
	$cf7_custom_style_1_element_padding_bottom
);
$cf7_custom_style_1_element_padding_left = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_left",
	$cf7_custom_style_1_element_padding_left
);

$group5 = new QodeGroup(
	esc_html__( "Form Elements' Margin", 'brick' ),
	esc_html__( "Define margin for form elements (text input fields, textarea, select)", 'brick' )
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
$cf7_custom_style_1_element_margin_top = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_margin_top",
	$cf7_custom_style_1_element_margin_top
);
$cf7_custom_style_1_element_margin_bottom = new QodeField(
	"textsimple",
	"cf7_custom_style_1_element_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_element_margin_bottom",
	$cf7_custom_style_1_element_margin_bottom
);

$cf7_custom_style_1_element_textarea_height = new QodeField(
	"text",
	"cf7_custom_style_1_element_textarea_height",
	"",
	esc_html__( "Textarea Height (px)", 'brick' ),
	esc_html__( "Enter height for textarea form element", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"cf7_custom_style_1_element_textarea_height",
	$cf7_custom_style_1_element_textarea_height
);

$group6 = new QodeGroup(
	esc_html__( "Button Background", 'brick' ),
	esc_html__( "Define background for button", 'brick' )
);
$panel1->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);
$cf7_custom_style_1_button_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_button_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_background_color",
	$cf7_custom_style_1_button_background_color
);
$cf7_custom_style_1_button_hover_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_button_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_background_color",
	$cf7_custom_style_1_button_hover_background_color
);
$cf7_custom_style_1_button_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_background_transparency",
	$cf7_custom_style_1_button_background_transparency
);
$cf7_custom_style_1_button_hover_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_hover_background_transparency",
	"",
	esc_html__( "Hover Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_background_transparency",
	$cf7_custom_style_1_button_hover_background_transparency
);
$group7 = new QodeGroup(
	esc_html__( "Button Border", 'brick' ),
	esc_html__( "Define border style for button", 'brick' )
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
$cf7_custom_style_1_button_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_button_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_border_color",
	$cf7_custom_style_1_button_border_color
);
$cf7_custom_style_1_button_hover_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_button_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_border_color",
	$cf7_custom_style_1_button_hover_border_color
);
$cf7_custom_style_1_button_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_border_transparency",
	$cf7_custom_style_1_button_border_transparency
);
$cf7_custom_style_1_button_hover_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_hover_border_transparency",
	"",
	esc_html__( "Hover Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_border_transparency",
	$cf7_custom_style_1_button_hover_border_transparency
);
$row2 = new QodeRow();
$group7->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_button_border_width = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_button_border_width",
	$cf7_custom_style_1_button_border_width
);
$cf7_custom_style_1_button_border_radius = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_button_border_radius",
	$cf7_custom_style_1_button_border_radius
);
$group8 = new QodeGroup(
	esc_html__( "Button Text Style", 'brick' ),
	esc_html__( "Define text style for button", 'brick' )
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
$cf7_custom_style_1_button_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_button_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_color",
	$cf7_custom_style_1_button_font_color
);
$cf7_custom_style_1_button_font_hover_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_1_button_font_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_hover_color",
	$cf7_custom_style_1_button_font_hover_color
);
$cf7_custom_style_1_button_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_size",
	$cf7_custom_style_1_button_font_size
);
$cf7_custom_style_1_button_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_1_button_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_family",
	$cf7_custom_style_1_button_font_family
);
$row2 = new QodeRow( true );
$group8->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_button_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_button_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_1_button_font_style",
	$cf7_custom_style_1_button_font_style
);
$cf7_custom_style_1_button_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_button_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_1_button_font_weight",
	$cf7_custom_style_1_button_font_weight
);
$cf7_custom_style_1_button_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_1_button_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_1_button_text_transform",
	$cf7_custom_style_1_button_text_transform
);
$cf7_custom_style_1_button_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_1_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_1_button_letter_spacing",
	$cf7_custom_style_1_button_letter_spacing
);

$cf7_custom_style_1_button_height = new QodeField(
	"text",
	"cf7_custom_style_1_button_height",
	"",
	esc_html__( "Button Height (px)", 'brick' ),
	esc_html__( "Enter button height in px ", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"cf7_custom_style_1_button_height",
	$cf7_custom_style_1_button_height
);

$cf7_custom_style_1_button_padding = new QodeField(
	"text",
	"cf7_custom_style_1_button_padding",
	"",
	esc_html__( "Button Padding (px)", 'brick' ),
	esc_html__( "Enter value for button left and right padding in px ", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"cf7_custom_style_1_button_padding",
	$cf7_custom_style_1_button_padding
);

$cf7_custom_style_1_error_validation_messages_color = new QodeField(
	"color",
	"cf7_custom_style_1_error_validation_messages_color",
	"",
	esc_html__( "Validation Error Text Color", 'brick' ),
	esc_html__( "Choose color for error form validation text messages", 'brick' )
);
$panel1->addChild(
	"cf7_custom_style_1_error_validation_messages_color",
	$cf7_custom_style_1_error_validation_messages_color
);

$panel2 = new QodePanel(
	esc_html__( "Custom Style 2 Settings", 'brick' ),
	"contact_form_custom_style_2_panel"
);
$contactform7page->addChild(
	"panel2",
	$panel2
);

$group1 = new QodeGroup(
	esc_html__( "Form Elements' Background", 'brick' ),
	esc_html__( "Define background for form elements (input, textarea, select)", 'brick' )
);
$panel2->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_element_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_element_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_background_color",
	$cf7_custom_style_2_element_background_color
);
$cf7_custom_style_2_element_focus_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_element_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_focus_background_color",
	$cf7_custom_style_2_element_focus_background_color
);
$cf7_custom_style_2_element_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_background_transparency",
	$cf7_custom_style_2_element_background_transparency
);
$cf7_custom_style_2_element_focus_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_focus_background_transparency",
	"",
	esc_html__( "Focus Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_focus_background_transparency",
	$cf7_custom_style_2_element_focus_background_transparency
);
$group2 = new QodeGroup(
	esc_html__( "Form Elements' Border", 'brick' ),
	esc_html__( "Define border style for form elements (text input fields, textarea, select)", 'brick' )
);
$panel2->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_element_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_element_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_border_color",
	$cf7_custom_style_2_element_border_color
);
$cf7_custom_style_2_element_focus_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_element_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_focus_border_color",
	$cf7_custom_style_2_element_focus_border_color
);
$cf7_custom_style_2_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_border_transparency",
	$cf7_custom_style_2_border_transparency
);
$cf7_custom_style_2_focus_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_focus_border_transparency",
	"",
	esc_html__( "Focus Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_focus_border_transparency",
	$cf7_custom_style_2_focus_border_transparency
);

$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_element_border_width = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_element_border_width",
	$cf7_custom_style_2_element_border_width
);
$cf7_custom_style_2_element_border_radius = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_element_border_radius",
	$cf7_custom_style_2_element_border_radius
);
$cf7_custom_style_2_element_border_bottom = new QodeField(
	"yesnosimple",
	"cf7_custom_style_2_element_border_bottom",
	"no",
	esc_html__( "Show Only Border Bottom", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_element_border_bottom",
	$cf7_custom_style_2_element_border_bottom
);
$group3 = new QodeGroup(
	esc_html__( "Form Elements' Text Style", 'brick' ),
	esc_html__( "Define text style for form elements (text input fields, textarea, select)", 'brick' )
);
$panel2->addChild(
	"group3",
	$group3
);
$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_element_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_element_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_font_color",
	$cf7_custom_style_2_element_font_color
);
$cf7_custom_style_2_element_font_focus_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_element_font_focus_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_font_focus_color",
	$cf7_custom_style_2_element_font_focus_color
);
$cf7_custom_style_2_element_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_font_size",
	$cf7_custom_style_2_element_font_size
);
$cf7_custom_style_2_element_line_height = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_line_height",
	$cf7_custom_style_2_element_line_height
);
$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_element_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_2_element_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_element_font_family",
	$cf7_custom_style_2_element_font_family
);
$cf7_custom_style_2_element_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_element_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_2_element_font_style",
	$cf7_custom_style_2_element_font_style
);
$cf7_custom_style_2_element_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_element_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_2_element_font_weight",
	$cf7_custom_style_2_element_font_weight
);
$cf7_custom_style_2_element_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_element_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_2_element_text_transform",
	$cf7_custom_style_2_element_text_transform
);
$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$cf7_custom_style_2_element_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"cf7_custom_style_2_element_letter_spacing",
	$cf7_custom_style_2_element_letter_spacing
);
$group9 = new QodeGroup(
	esc_html__( "Form Elements' Labels Style", 'brick' ),
	esc_html__( "Define labels style for form elements (text input fields, textarea, select)", 'brick' )
);
$panel2->addChild(
	"group9",
	$group9
);
$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_label_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_label_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_label_font_color",
	$cf7_custom_style_2_label_font_color
);
$cf7_custom_style_2_label_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_2_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_label_font_size",
	$cf7_custom_style_2_label_font_size
);
$cf7_custom_style_2_label_line_height = new QodeField(
	"textsimple",
	"cf7_custom_style_2_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_label_line_height",
	$cf7_custom_style_2_label_line_height
);
$cf7_custom_style_2_label_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_2_label_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_label_font_family",
	$cf7_custom_style_2_label_font_family
);
$row2 = new QodeRow( true );
$group9->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_label_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_label_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_2_label_font_style",
	$cf7_custom_style_2_label_font_style
);
$cf7_custom_style_2_label_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_label_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_2_label_font_weight",
	$cf7_custom_style_2_label_font_weight
);
$cf7_custom_style_2_label_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_label_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_2_label_text_transform",
	$cf7_custom_style_2_label_text_transform
);
$cf7_custom_style_2_label_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_2_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_label_letter_spacing",
	$cf7_custom_style_2_label_letter_spacing
);
$group4 = new QodeGroup(
	esc_html__( "Form Elements' Padding", 'brick' ),
	esc_html__( "Define padding for form elements (text input fields, textarea, select)", 'brick' )
);
$panel2->addChild(
	"group4",
	$group4
);
$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_element_padding_top = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_top",
	$cf7_custom_style_2_element_padding_top
);
$cf7_custom_style_2_element_padding_right = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_right",
	$cf7_custom_style_2_element_padding_right
);
$cf7_custom_style_2_element_padding_bottom = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_bottom",
	$cf7_custom_style_2_element_padding_bottom
);
$cf7_custom_style_2_element_padding_left = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_left",
	$cf7_custom_style_2_element_padding_left
);
$group5 = new QodeGroup(
	esc_html__( "Form Elements' Margin", 'brick' ),
	esc_html__( "Define margin for form elements (text input fields, textarea, select)", 'brick' )
);
$panel2->addChild(
	"group5",
	$group5
);
$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_element_margin_top = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_margin_top",
	$cf7_custom_style_2_element_margin_top
);
$cf7_custom_style_2_element_margin_bottom = new QodeField(
	"textsimple",
	"cf7_custom_style_2_element_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_element_margin_bottom",
	$cf7_custom_style_2_element_margin_bottom
);
$cf7_custom_style_2_element_textarea_height = new QodeField(
	"text",
	"cf7_custom_style_2_element_textarea_height",
	"",
	esc_html__( "Textarea Height (px)", 'brick' ),
	esc_html__( "Enter height for textarea form element", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"cf7_custom_style_2_element_textarea_height",
	$cf7_custom_style_2_element_textarea_height
);

$group6 = new QodeGroup(
	esc_html__( "Button Background", 'brick' ),
	esc_html__( "Define background for button", 'brick' )
);
$panel2->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_button_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_button_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_background_color",
	$cf7_custom_style_2_button_background_color
);
$cf7_custom_style_2_button_hover_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_button_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_background_color",
	$cf7_custom_style_2_button_hover_background_color
);
$cf7_custom_style_2_button_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_background_transparency",
	$cf7_custom_style_2_button_background_transparency
);
$cf7_custom_style_2_button_hover_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_hover_background_transparency",
	"",
	esc_html__( "Hover Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_background_transparency",
	$cf7_custom_style_2_button_hover_background_transparency
);
$group7 = new QodeGroup(
	esc_html__( "Button Border", 'brick' ),
	esc_html__( "Define border style for button", 'brick' )
);
$panel2->addChild(
	"group7",
	$group7
);
$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_button_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_button_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_border_color",
	$cf7_custom_style_2_button_border_color
);
$cf7_custom_style_2_button_hover_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_button_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_border_color",
	$cf7_custom_style_2_button_hover_border_color
);
$cf7_custom_style_2_button_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_border_transparency",
	$cf7_custom_style_2_button_border_transparency
);
$cf7_custom_style_2_button_hover_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_hover_border_transparency",
	"",
	esc_html__( "Hover Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_border_transparency",
	$cf7_custom_style_2_button_hover_border_transparency
);

$row2 = new QodeRow();
$group7->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_button_border_width = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_button_border_width",
	$cf7_custom_style_2_button_border_width
);
$cf7_custom_style_2_button_border_radius = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_button_border_radius",
	$cf7_custom_style_2_button_border_radius
);
$group8 = new QodeGroup(
	esc_html__( "Button Text Style", 'brick' ),
	esc_html__( "Define text style for button", 'brick' )
);
$panel2->addChild(
	"group8",
	$group8
);
$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_button_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_button_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_color",
	$cf7_custom_style_2_button_font_color
);
$cf7_custom_style_2_button_font_hover_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_2_button_font_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_hover_color",
	$cf7_custom_style_2_button_font_hover_color
);
$cf7_custom_style_2_button_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_size",
	$cf7_custom_style_2_button_font_size
);
$cf7_custom_style_2_button_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_2_button_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_family",
	$cf7_custom_style_2_button_font_family
);
$row2 = new QodeRow( true );
$group8->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_button_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_button_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_2_button_font_style",
	$cf7_custom_style_2_button_font_style
);
$cf7_custom_style_2_button_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_button_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_2_button_font_weight",
	$cf7_custom_style_2_button_font_weight
);
$cf7_custom_style_2_button_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_2_button_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_2_button_text_transform",
	$cf7_custom_style_2_button_text_transform
);
$cf7_custom_style_2_button_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_2_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_2_button_letter_spacing",
	$cf7_custom_style_2_button_letter_spacing
);

$cf7_custom_style_2_button_height = new QodeField(
	"text",
	"cf7_custom_style_2_button_height",
	"",
	esc_html__( "Button Height (px)", 'brick' ),
	esc_html__( "Enter button height in px ", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"cf7_custom_style_2_button_height",
	$cf7_custom_style_2_button_height
);

$cf7_custom_style_2_button_padding = new QodeField(
	"text",
	"cf7_custom_style_2_button_padding",
	"",
	esc_html__( "Button Padding (px)", 'brick' ),
	esc_html__( "Enter value for button left and right padding in px ", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"cf7_custom_style_2_button_padding",
	$cf7_custom_style_2_button_padding
);

$cf7_custom_style_2_error_validation_messages_color = new QodeField(
	"color",
	"cf7_custom_style_2_error_validation_messages_color",
	"",
	esc_html__( "Validation Error Text Color", 'brick' ),
	esc_html__( "Choose color for error form validation text messages", 'brick' )
);
$panel2->addChild(
	"cf7_custom_style_2_error_validation_messages_color",
	$cf7_custom_style_2_error_validation_messages_color
);

$panel3 = new QodePanel(
	esc_html__( "Custom Style 3 Settings", 'brick' ),
	"contact_form_custom_style_3_panel"
);
$contactform7page->addChild(
	"panel3",
	$panel3
);

$group1 = new QodeGroup(
	esc_html__( "Form Elements' Background", 'brick' ),
	esc_html__( "Define background for form elements (input, textarea, select)", 'brick' )
);
$panel3->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_element_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_background_color",
	$cf7_custom_style_3_element_background_color
);
$cf7_custom_style_3_element_focus_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_element_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_focus_background_color",
	$cf7_custom_style_3_element_focus_background_color
);
$cf7_custom_style_3_element_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_background_transparency",
	$cf7_custom_style_3_element_background_transparency
);
$cf7_custom_style_3_element_focus_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_focus_background_transparency",
	"",
	esc_html__( "Focus Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_focus_background_transparency",
	$cf7_custom_style_3_element_focus_background_transparency
);
$group2 = new QodeGroup(
	esc_html__( "Form Elements' Border", 'brick' ),
	esc_html__( "Define border style for form elements (text input fields, textarea, select)", 'brick' )
);
$panel3->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_element_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_border_color",
	$cf7_custom_style_3_element_border_color
);
$cf7_custom_style_3_element_focus_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_element_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_focus_border_color",
	$cf7_custom_style_3_element_focus_border_color
);
$cf7_custom_style_3_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_border_transparency",
	$cf7_custom_style_3_border_transparency
);
$cf7_custom_style_3_focus_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_focus_border_transparency",
	"",
	esc_html__( "Focus Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_focus_border_transparency",
	$cf7_custom_style_3_focus_border_transparency
);

$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_element_border_width = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_element_border_width",
	$cf7_custom_style_3_element_border_width
);
$cf7_custom_style_3_element_border_radius = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_element_border_radius",
	$cf7_custom_style_3_element_border_radius
);
$cf7_custom_style_3_element_border_bottom = new QodeField(
	"yesnosimple",
	"cf7_custom_style_3_element_border_bottom",
	"no",
	esc_html__( "Show Only Border Bottom", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_element_border_bottom",
	$cf7_custom_style_3_element_border_bottom
);
$group3 = new QodeGroup(
	esc_html__( "Form Elements' Text Style", 'brick' ),
	esc_html__( "Define text style for form elements (text input fields, textarea, select)", 'brick' )
);
$panel3->addChild(
	"group3",
	$group3
);
$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_element_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_font_color",
	$cf7_custom_style_3_element_font_color
);
$cf7_custom_style_3_element_font_focus_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_element_font_focus_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_font_focus_color",
	$cf7_custom_style_3_element_font_focus_color
);
$cf7_custom_style_3_element_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_font_size",
	$cf7_custom_style_3_element_font_size
);
$cf7_custom_style_3_element_line_height = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_line_height",
	$cf7_custom_style_3_element_line_height
);
$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_element_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_3_element_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_element_font_family",
	$cf7_custom_style_3_element_font_family
);
$cf7_custom_style_3_element_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_element_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_3_element_font_style",
	$cf7_custom_style_3_element_font_style
);
$cf7_custom_style_3_element_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_element_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_3_element_font_weight",
	$cf7_custom_style_3_element_font_weight
);
$cf7_custom_style_3_element_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_element_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_3_element_text_transform",
	$cf7_custom_style_3_element_text_transform
);
$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$cf7_custom_style_3_element_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_element_letter_spacing",
	$cf7_custom_style_3_element_letter_spacing
);

$group9 = new QodeGroup(
	esc_html__( "Form Elements' Labels Style", 'brick' ),
	esc_html__( "Define labels style for form elements (text input fields, textarea, select)", 'brick' )
);
$panel3->addChild(
	"group9",
	$group9
);
$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_label_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_label_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_label_font_color",
	$cf7_custom_style_3_label_font_color
);
$cf7_custom_style_3_label_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_3_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_label_font_size",
	$cf7_custom_style_3_label_font_size
);
$cf7_custom_style_3_label_line_height = new QodeField(
	"textsimple",
	"cf7_custom_style_3_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_label_line_height",
	$cf7_custom_style_3_label_line_height
);
$cf7_custom_style_3_label_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_3_label_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_label_font_family",
	$cf7_custom_style_3_label_font_family
);
$row2 = new QodeRow( true );
$group9->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_label_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_label_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_3_label_font_style",
	$cf7_custom_style_3_label_font_style
);
$cf7_custom_style_3_label_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_label_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_3_label_font_weight",
	$cf7_custom_style_3_label_font_weight
);
$cf7_custom_style_3_label_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_label_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_3_label_text_transform",
	$cf7_custom_style_3_label_text_transform
);
$cf7_custom_style_3_label_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_3_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_label_letter_spacing",
	$cf7_custom_style_3_label_letter_spacing
);

$group4 = new QodeGroup(
	esc_html__( "Form Elements' Padding", 'brick' ),
	esc_html__( "Define padding for form elements (text input fields, textarea, select)", 'brick' )
);
$panel3->addChild(
	"group4",
	$group4
);
$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_padding_top = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_top",
	$cf7_custom_style_3_element_padding_top
);
$cf7_custom_style_3_element_padding_right = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_right",
	$cf7_custom_style_3_element_padding_right
);
$cf7_custom_style_3_element_padding_bottom = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_bottom",
	$cf7_custom_style_3_element_padding_bottom
);
$cf7_custom_style_3_element_padding_left = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_left",
	$cf7_custom_style_3_element_padding_left
);

$group5 = new QodeGroup(
	esc_html__( "Form Elements' Margin", 'brick' ),
	esc_html__( "Define margin for form elements (text input fields, textarea, select)", 'brick' )
);
$panel3->addChild(
	"group5",
	$group5
);
$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_margin_top = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_margin_top",
	$cf7_custom_style_3_element_margin_top
);
$cf7_custom_style_3_element_margin_bottom = new QodeField(
	"textsimple",
	"cf7_custom_style_3_element_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_element_margin_bottom",
	$cf7_custom_style_3_element_margin_bottom
);

$cf7_custom_style_3_element_textarea_height = new QodeField(
	"text",
	"cf7_custom_style_3_element_textarea_height",
	"",
	esc_html__( "Textarea Height (px)", 'brick' ),
	esc_html__( "Enter height for textarea form element", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel3->addChild(
	"cf7_custom_style_3_element_textarea_height",
	$cf7_custom_style_3_element_textarea_height
);

$group6 = new QodeGroup(
	esc_html__( "Button Background", 'brick' ),
	esc_html__( "Define background for button", 'brick' )
);
$panel3->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_button_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_button_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_background_color",
	$cf7_custom_style_3_button_background_color
);
$cf7_custom_style_3_button_hover_background_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_button_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_background_color",
	$cf7_custom_style_3_button_hover_background_color
);
$cf7_custom_style_3_button_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_background_transparency",
	$cf7_custom_style_3_button_background_transparency
);
$cf7_custom_style_3_button_hover_background_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_hover_background_transparency",
	"",
	esc_html__( "Hover Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_background_transparency",
	$cf7_custom_style_3_button_hover_background_transparency
);
$group7 = new QodeGroup(
	esc_html__( "Button Border", 'brick' ),
	esc_html__( "Define border style for button", 'brick' )
);
$panel3->addChild(
	"group7",
	$group7
);
$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_button_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_button_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_border_color",
	$cf7_custom_style_3_button_border_color
);
$cf7_custom_style_3_button_hover_border_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_button_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_border_color",
	$cf7_custom_style_3_button_hover_border_color
);
$cf7_custom_style_3_button_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_border_transparency",
	$cf7_custom_style_3_button_border_transparency
);
$cf7_custom_style_3_button_hover_border_transparency = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_hover_border_transparency",
	"",
	esc_html__( "Hover Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_border_transparency",
	$cf7_custom_style_3_button_hover_border_transparency
);
$row2 = new QodeRow();
$group7->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_button_border_width = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_button_border_width",
	$cf7_custom_style_3_button_border_width
);
$cf7_custom_style_3_button_border_radius = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_button_border_radius",
	$cf7_custom_style_3_button_border_radius
);
$group8 = new QodeGroup(
	esc_html__( "Button Text Style", 'brick' ),
	esc_html__( "Define text style for button", 'brick' )
);
$panel3->addChild(
	"group8",
	$group8
);
$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_button_font_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_button_font_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_color",
	$cf7_custom_style_3_button_font_color
);
$cf7_custom_style_3_button_font_hover_color = new QodeField(
	"colorsimple",
	"cf7_custom_style_3_button_font_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_hover_color",
	$cf7_custom_style_3_button_font_hover_color
);
$cf7_custom_style_3_button_font_size = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_size",
	$cf7_custom_style_3_button_font_size
);
$cf7_custom_style_3_button_font_family = new QodeField(
	"fontsimple",
	"cf7_custom_style_3_button_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_family",
	$cf7_custom_style_3_button_font_family
);
$row2 = new QodeRow( true );
$group8->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_button_font_style = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_button_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"cf7_custom_style_3_button_font_style",
	$cf7_custom_style_3_button_font_style
);
$cf7_custom_style_3_button_font_weight = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_button_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"cf7_custom_style_3_button_font_weight",
	$cf7_custom_style_3_button_font_weight
);
$cf7_custom_style_3_button_text_transform = new QodeField(
	"selectblanksimple",
	"cf7_custom_style_3_button_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"cf7_custom_style_3_button_text_transform",
	$cf7_custom_style_3_button_text_transform
);
$cf7_custom_style_3_button_letter_spacing = new QodeField(
	"textsimple",
	"cf7_custom_style_3_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cf7_custom_style_3_button_letter_spacing",
	$cf7_custom_style_3_button_letter_spacing
);

$cf7_custom_style_3_button_height = new QodeField(
	"text",
	"cf7_custom_style_3_button_height",
	"",
	esc_html__( "Button Height (px)", 'brick' ),
	esc_html__( "Enter button height in px ", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel3->addChild(
	"cf7_custom_style_3_button_height",
	$cf7_custom_style_3_button_height
);

$cf7_custom_style_3_button_padding = new QodeField(
	"text",
	"cf7_custom_style_3_button_padding",
	"",
	esc_html__( "Button Padding (px)", 'brick' ),
	esc_html__( "Enter value for button left and right padding in px ", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel3->addChild(
	"cf7_custom_style_3_button_padding",
	$cf7_custom_style_3_button_padding
);

$cf7_custom_style_3_error_validation_messages_color = new QodeField(
	"color",
	"cf7_custom_style_3_error_validation_messages_color",
	"",
	esc_html__( "Validation Error Text Color", 'brick' ),
	esc_html__( "Choose color for error form validation text messages", 'brick' )
);
$panel3->addChild(
	"cf7_custom_style_3_error_validation_messages_color",
	$cf7_custom_style_3_error_validation_messages_color
);
