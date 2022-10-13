<?php

$elementsPage = new BrickQodeAdminPage(
	"6",
	esc_html__( "Elements", 'brick' ),
	"fa fa-flag-o"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"elementsPage",
	$elementsPage
);

//Accordions and Toogles

$panel29 = new QodePanel(
	esc_html__( "Accordions and  Toggles", 'brick' ),
	"accordions_toogles_panel"
);
$elementsPage->addChild(
	"panel29",
	$panel29
);

$accordion_regular_subtitle = new QodeTitle(
	"accordion_regular_subtitle",
	esc_html__( "Accordion & Toggle Title", 'brick' )
);
$panel29->addChild(
	"accordion_regular_subtitle",
	$accordion_regular_subtitle
);

$group4 = new QodeGroup(
	esc_html__( "Title Style", 'brick' ),
	esc_html__( "Define Accordion & Toggle Title style", 'brick' )
);
$panel29->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow( true );
$group4->addChild(
	"row1",
	$row1
);

$accordion_regular_title_color = new QodeField(
	"colorsimple",
	"accordion_regular_title_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_regular_title_color",
	$accordion_regular_title_color
);

$accordion_regular_title_hover_color = new QodeField(
	"colorsimple",
	"accordion_regular_title_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_regular_title_hover_color",
	$accordion_regular_title_hover_color
);

$accordion_toogle_subtitle = new QodeTitle(
	"accordion_toogle_subtitle",
	esc_html__( "Accordion & Toggle Boxed Title", 'brick' )
);
$panel29->addChild(
	"accordion_toogle_subtitle",
	$accordion_toogle_subtitle
);

$group1 = new QodeGroup(
	esc_html__( "Title Style", 'brick' ),
	esc_html__( "Define Accordion & Toggle Boxed Title style", 'brick' )
);
$panel29->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow( true );
$group1->addChild(
	"row1",
	$row1
);

$accordion_toogle_title_color = new QodeField(
	"colorsimple",
	"accordion_toogle_title_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_toogle_title_color",
	$accordion_toogle_title_color
);

$accordion_toogle_title_hover_color = new QodeField(
	"colorsimple",
	"accordion_toogle_title_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_toogle_title_hover_color",
	$accordion_toogle_title_hover_color
);

$accordion_toogle_mark_subtitle = new QodeTitle(
	"accordion_toogle_mark_subtitle",
	esc_html__( "Accordion & Toggle Mark", 'brick' )
);
$panel29->addChild(
	"accordion_toogle_mark_subtitle",
	$accordion_toogle_mark_subtitle
);

$group2 = new QodeGroup(
	esc_html__( "Mark Style", 'brick' ),
	esc_html__( "Define mark style", 'brick' )
);
$panel29->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow( true );
$group2->addChild(
	"row1",
	$row1
);

$accordion_mark_icon_color = new QodeField(
	"colorsimple",
	"accordion_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_mark_icon_color",
	$accordion_mark_icon_color
);

$accordion_mark_icon_hover_color = new QodeField(
	"colorsimple",
	"accordion_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_mark_icon_hover_color",
	$accordion_mark_icon_hover_color
);

$accordion_mark_background_color = new QodeField(
	"colorsimple",
	"accordion_mark_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_mark_background_color",
	$accordion_mark_background_color
);

$accordion_mark_background_hover_color = new QodeField(
	"colorsimple",
	"accordion_mark_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_mark_background_hover_color",
	$accordion_mark_background_hover_color
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$accordion_mark_border_color = new QodeField(
	"colorsimple",
	"accordion_mark_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"accordion_mark_border_color",
	$accordion_mark_border_color
);

$accordion_mark_border_hover_color = new QodeField(
	"colorsimple",
	"accordion_mark_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"accordion_mark_border_hover_color",
	$accordion_mark_border_hover_color
);

$accordion_mark_border_radius = new QodeField(
	"textsimple",
	"accordion_mark_border_radius",
	"",
	esc_html__( "Border Radius", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"accordion_mark_border_radius",
	$accordion_mark_border_radius
);

$accordion_toggle_boxed_subtitle = new QodeTitle(
	"accordion_toggle_boxed_subtitle",
	esc_html__( "Accordion & Toggle Boxed Style", 'brick' )
);
$panel29->addChild(
	"accordion_toggle_boxed_subtitle",
	$accordion_toggle_boxed_subtitle
);

$group3 = new QodeGroup(
	esc_html__( "Boxed Style", 'brick' ),
	esc_html__( "Define boxed style", 'brick' )
);
$panel29->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$accordion_toggle_boxed_background_color = new QodeField(
	"colorsimple",
	"accordion_toggle_boxed_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_color",
	$accordion_toggle_boxed_background_color
);

$accordion_toggle_boxed_background_hover_color = new QodeField(
	"colorsimple",
	"accordion_toggle_boxed_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_hover_color",
	$accordion_toggle_boxed_background_hover_color
);

$accordion_toggle_boxed_border_color = new QodeField(
	"colorsimple",
	"accordion_toggle_boxed_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_color",
	$accordion_toggle_boxed_border_color
);

$accordion_toggle_boxed_border_hover_color = new QodeField(
	"colorsimple",
	"accordion_toggle_boxed_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_hover_color",
	$accordion_toggle_boxed_border_hover_color
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$accordion_toggle_boxed_border_radius = new QodeField(
	"textsimple",
	"accordion_toggle_boxed_border_radius",
	"",
	esc_html__( "Border Radius", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"accordion_toggle_boxed_border_radius",
	$accordion_toggle_boxed_border_radius
);

//Back to top

$panel1 = new QodePanel(
	"esc_html__( 'Back to Top', 'brick' ) Link Button",
	"back_to_top_panel"
);
$elementsPage->addChild(
	"panel1",
	$panel1
);

$group1 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( 'Choose background for "Back to Top"', 'brick' )
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

$back_to_top_background_color = new QodeField(
	"colorsimple",
	"back_to_top_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_background_color",
	$back_to_top_background_color
);

$back_to_top_background_hover_color = new QodeField(
	"colorsimple",
	"back_to_top_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_background_hover_color",
	$back_to_top_background_hover_color
);

$back_to_top_background_transparency = new QodeField(
	"textsimple",
	"back_to_top_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_background_transparency",
	$back_to_top_background_transparency
);

$back_to_top_background_hover_transparency = new QodeField(
	"textsimple",
	"back_to_top_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_background_hover_transparency",
	$back_to_top_background_hover_transparency
);

$group2 = new QodeGroup(
	esc_html__( "Border", 'brick' ),
	esc_html__( "Choose Border style for Back to Top", 'brick' )
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

$back_to_top_border_color = new QodeField(
	"colorsimple",
	"back_to_top_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_border_color",
	$back_to_top_border_color
);

$back_to_top_border_hover_color = new QodeField(
	"colorsimple",
	"back_to_top_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_border_hover_color",
	$back_to_top_border_hover_color
);

$back_to_top_border_width = new QodeField(
	"textsimple",
	"back_to_top_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_border_width",
	$back_to_top_border_width
);

$back_to_top_border_radius = new QodeField(
	"textsimple",
	"back_to_top_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_border_radius",
	$back_to_top_border_radius
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_border_transparency = new QodeField(
	"textsimple",
	"back_to_top_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"back_to_top_border_transparency",
	$back_to_top_border_transparency
);

$back_to_top_border_hover_transparency = new QodeField(
	"textsimple",
	"back_to_top_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"back_to_top_border_hover_transparency",
	$back_to_top_border_hover_transparency
);

$group3 = new QodeGroup(
	esc_html__( "Button Size", 'brick' ),
	esc_html__( 'Choose Size for "Back to Top" button', 'brick' )
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

$back_to_top_height = new QodeField(
	"textsimple",
	"back_to_top_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_height",
	$back_to_top_height
);
$back_to_top_width = new QodeField(
	"textsimple",
	"back_to_top_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_width",
	$back_to_top_width
);

$group4 = new QodeGroup(
	esc_html__( "Button Position", 'brick' ),
	esc_html__( 'Define button alignment and margin bottom', 'brick' )
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

$back_to_top_position = new QodeField(
	"selectsimple",
	"back_to_top_position",
	"",
	esc_html__( "Button Alignment", 'brick' ),
	esc_html__( 'Choose alignment for "Back to Top" button', 'brick' ),
	array(
		"right" => esc_html__( "Right", 'brick' ),
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
	)
);
$row1->addChild(
	"back_to_top_position",
	$back_to_top_position
);

$back_to_top_button_margin_bottom = new QodeField(
	"textsimple",
	"back_to_top_button_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "Enter bottom margin", 'brick' )
);
$row1->addChild(
	"back_to_top_button_margin_bottom",
	$back_to_top_button_margin_bottom
);

$back_to_top_type = new QodeField(
	"select",
	"back_to_top_type",
	"arrow",
	esc_html__( "Button Text Type", 'brick' ),
	esc_html__( 'Choose "Back to Top" button type ', 'brick' ),
	array(
		"arrow" => esc_html__( "Arrow", 'brick' ),
		"text" => esc_html__( "Text", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"arrow" => "#qodef_back_to_top_type_text_container",
			"text"  => "#qodef_back_to_top_type_arrow_container"
		),
		"show"       => array(
			"arrow" => "#qodef_back_to_top_type_arrow_container",
			"text"  => "#qodef_back_to_top_type_text_container"
		)
	)
);
$panel1->addChild(
	"back_to_top_type",
	$back_to_top_type
);

$back_to_top_type_arrow_container = new QodeContainer(
	"back_to_top_type_arrow_container",
	"back_to_top_type",
	"text"
);
$panel1->addChild(
	"back_to_top_type_arrow_container",
	$back_to_top_type_arrow_container
);

$group1 = new QodeGroup(
	esc_html__( "Arrow Icon Style", 'brick' ),
	esc_html__( "Define style for arrow icon", 'brick' )
);
$back_to_top_type_arrow_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$show_back_button_icon = new QodeField(
	'selectsimple',
	'show_back_button_icon',
	'',
	esc_html__( 'Choose Icon', 'brick' ),
	esc_html__( 'Choose Icon', 'brick' ),
	brick_qode_get_options_value_by_name('arrows_up_type')
);
$row1->addChild(
	'show_back_button_icon',
	$show_back_button_icon
);

$back_to_top_arrow_size = new QodeField(
	"textsimple",
	"back_to_top_arrow_size",
	"14",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "Default value is 14	", 'brick' )
);
$row1->addChild(
	"back_to_top_arrow_size",
	$back_to_top_arrow_size
);

$back_to_top_arrow_color = new QodeField(
	"colorsimple",
	"back_to_top_arrow_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_arrow_color",
	$back_to_top_arrow_color
);

$back_to_top_arrow_hover_color = new QodeField(
	"colorsimple",
	"back_to_top_arrow_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_arrow_hover_color",
	$back_to_top_arrow_hover_color
);

$back_to_top_type_text_container = new QodeContainer(
	"back_to_top_type_text_container",
	"back_to_top_type",
	"arrow"
);
$panel1->addChild(
	"back_to_top_type_text_container",
	$back_to_top_type_text_container
);

$back_to_top_text = new QodeField(
	"text",
	"back_to_top_text",
	"",
	esc_html__( "Back to Top Text", 'brick' ),
	esc_html__( "Enter text for 'Back to Top' button", 'brick' )
);
$back_to_top_type_text_container->addChild(
	"back_to_top_text",
	$back_to_top_text
);

$group1 = new QodeGroup(
	esc_html__( "Button Text Color", 'brick' ),
	esc_html__( "Define Color for Text Type", 'brick' )
);
$back_to_top_type_text_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_text_color = new QodeField(
	"colorsimple",
	"back_to_top_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_text_color",
	$back_to_top_text_color
);

$back_to_top_text_hover_color = new QodeField(
	"colorsimple",
	"back_to_top_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_text_hover_color",
	$back_to_top_text_hover_color
);

$group2 = new QodeGroup(
	esc_html__( "Button Text Style", 'brick' ),
	esc_html__( "Define Style for Text Type", 'brick' )
);
$back_to_top_type_text_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_text_fontsize = new QodeField(
	"textsimple",
	"back_to_top_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_text_fontsize",
	$back_to_top_text_fontsize
);

$back_to_top_text_lineheight = new QodeField(
	"textsimple",
	"back_to_top_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_text_lineheight",
	$back_to_top_text_lineheight
);

$back_to_top_text_texttransform = new QodeField(
	"selectblanksimple",
	"back_to_top_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"back_to_top_text_texttransform",
	$back_to_top_text_texttransform
);

$back_to_top_text_fontfamily = new QodeField(
	"fontsimple",
	"back_to_top_text_fontfamily",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"back_to_top_text_fontfamily",
	$back_to_top_text_fontfamily
);

$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_text_fontstyle = new QodeField(
	"selectblanksimple",
	"back_to_top_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"back_to_top_text_fontstyle",
	$back_to_top_text_fontstyle
);

$back_to_top_text_fontweight = new QodeField(
	"selectblanksimple",
	"back_to_top_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"back_to_top_text_fontweight",
	$back_to_top_text_fontweight
);

$back_to_top_text_letterspacing = new QodeField(
	"textsimple",
	"back_to_top_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"back_to_top_text_letterspacing",
	$back_to_top_text_letterspacing
);

//Buttons

$panel2 = new QodePanel(
	esc_html__( "Buttons", 'brick' ),
	"buttons_panel"
);
$elementsPage->addChild(
	"panel2",
	$panel2
);

$button_default_section = new QodeTitle(
	"button_default_section",
	esc_html__( "Default Button", 'brick' )
);
$panel2->addChild(
	"button_default_section",
	$button_default_section
);

$group1 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style", 'brick' )
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
$button_title_google_fonts = new QodeField(
	"fontsimple",
	"button_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_title_google_fonts",
	$button_title_google_fonts
);

$button_title_fontsize = new QodeField(
	"textsimple",
	"button_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_title_fontsize",
	$button_title_fontsize
);

$button_title_fontstyle = new QodeField(
	"selectblanksimple",
	"button_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row1->addChild(
	"button_title_fontstyle",
	$button_title_fontstyle
);

$button_title_fontweight = new QodeField(
	"selectblanksimple",
	"button_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"button_title_fontweight",
	$button_title_fontweight
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$button_title_letter_spacing = new QodeField(
	"textsimple",
	"button_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"button_title_letter_spacing",
	$button_title_letter_spacing
);

$button_title_lineheight = new QodeField(
	"textsimple",
	"button_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"button_title_lineheight",
	$button_title_lineheight
);

$button_title_color = new QodeField(
	"colorsimple",
	"button_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"button_title_color",
	$button_title_color
);

$button_title_hovercolor = new QodeField(
	"colorsimple",
	"button_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"button_title_hovercolor",
	$button_title_hovercolor
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$button_title_texttransform = new QodeField(
	"selectblanksimple",
	"button_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"button_title_texttransform",
	$button_title_texttransform
);

$group2 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background", 'brick' )
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

$button_backgroundcolor = new QodeField(
	"colorsimple",
	"button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_backgroundcolor",
	$button_backgroundcolor
);

$button_backgroundcolor_hover = new QodeField(
	"colorsimple",
	"button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_backgroundcolor_hover",
	$button_backgroundcolor_hover
);

$group3 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define border style", 'brick' )
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

$button_border_color = new QodeField(
	"colorsimple",
	"button_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_border_color",
	$button_border_color
);

$button_border_hover_color = new QodeField(
	"colorsimple",
	"button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_border_hover_color",
	$button_border_hover_color
);

$button_border_width = new QodeField(
	"textsimple",
	"button_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_border_width",
	$button_border_width
);

$button_border_radius = new QodeField(
	"textsimple",
	"button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_border_radius",
	$button_border_radius
);

$button_padding = new QodeField(
	"text",
	"button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'brick' ),
	esc_html__( "Define padding", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"button_padding",
	$button_padding
);

$button_box_shadows = new QodeField(
	'yesno',
	'button_box_shadows',
	'no',
	esc_html__( 'Show Button Shadows', 'brick' ),
	esc_html__( 'Enabling this option will show button shadows', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_button_box_shadows_container'
	)
);
$panel2->addChild(
	'button_box_shadows',
	$button_box_shadows
);

$button_box_shadows_container = new QodeContainer(
	'button_box_shadows_container',
	'button_box_shadows',
	'no'
);
$panel2->addChild(
	'button_box_shadows_container',
	$button_box_shadows_container
);

$group4 = new QodeGroup(
	esc_html__( 'Button Shadows', 'brick' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'brick' )
);
$button_box_shadows_container->addChild(
	'group4',
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	'row1',
	$row1
);

$button_box_shadow_horizontal_shadow = new QodeField(
	'textsimple',
	'button_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'brick' )
);
$row1->addChild(
	'button_box_shadow_horizontal_shadow',
	$button_box_shadow_horizontal_shadow
);

$button_box_shadow_vertical_shadow = new QodeField(
	'textsimple',
	'button_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'brick' )
);
$row1->addChild(
	'button_box_shadow_vertical_shadow',
	$button_box_shadow_vertical_shadow
);

$button_box_shadow_blur_distance = new QodeField(
	'textsimple',
	'button_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'brick' )
);
$row1->addChild(
	'button_box_shadow_blur_distance',
	$button_box_shadow_blur_distance
);

$button_box_shadow_shadow_size = new QodeField(
	'textsimple',
	'button_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'brick' )
);
$row1->addChild(
	'button_box_shadow_shadow_size',
	$button_box_shadow_shadow_size
);

$row2 = new QodeRow( true );
$group4->addChild(
	'row2',
	$row2
);

$button_box_shadow_shadow_color = new QodeField(
	'colorsimple',
	'button_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'brick' )
);
$row2->addChild(
	'button_box_shadow_shadow_color',
	$button_box_shadow_shadow_color
);

$button_predefined_white_section = new QodeTitle(
	"button_predefined_white_section",
	esc_html__( "Predefined White Button", 'brick' )
);
$panel2->addChild(
	"button_predefined_white_section",
	$button_predefined_white_section
);

$group5 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style.", 'brick' )
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

$button_white_text_color = new QodeField(
	"colorsimple",
	"button_white_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_white_text_color",
	$button_white_text_color
);

$button_white_text_color_hover = new QodeField(
	"colorsimple",
	"button_white_text_color_hover",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_white_text_color_hover",
	$button_white_text_color_hover
);

$group6 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background", 'brick' )
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

$button_white_background_color = new QodeField(
	"colorsimple",
	"button_white_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_white_background_color",
	$button_white_background_color
);

$button_white_background_color_hover = new QodeField(
	"colorsimple",
	"button_white_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_white_background_color_hover",
	$button_white_background_color_hover
);

$group7 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define border style.", 'brick' )
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

$button_white_border_color = new QodeField(
	"colorsimple",
	"button_white_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_white_border_color",
	$button_white_border_color
);

$button_white_border_color_hover = new QodeField(
	"colorsimple",
	"button_white_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_white_border_color_hover",
	$button_white_border_color_hover
);

$button_predefined_solid_section = new QodeTitle(
	"button_predefined_solid_section",
	esc_html__( "Predefined Solid Button", 'brick' )
);
$panel2->addChild(
	"button_predefined_solid_section",
	$button_predefined_solid_section
);

$group20 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style.", 'brick' )
);
$panel2->addChild(
	"group20",
	$group20
);
$row1 = new QodeRow();
$group20->addChild(
	"row1",
	$row1
);

$button_solid_text_color = new QodeField(
	"colorsimple",
	"button_solid_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_solid_text_color",
	$button_solid_text_color
);

$button_solid_text_color_hover = new QodeField(
	"colorsimple",
	"button_solid_text_color_hover",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_solid_text_color_hover",
	$button_solid_text_color_hover
);

$group21 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background", 'brick' )
);
$panel2->addChild(
	"group21",
	$group21
);
$row1 = new QodeRow();
$group21->addChild(
	"row1",
	$row1
);

$button_solid_background_color = new QodeField(
	"colorsimple",
	"button_solid_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_solid_background_color",
	$button_solid_background_color
);

$button_solid_background_color_hover = new QodeField(
	"colorsimple",
	"button_solid_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_solid_background_color_hover",
	$button_solid_background_color_hover
);

$group22 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define border style.", 'brick' )
);
$panel2->addChild(
	"group22",
	$group22
);

$row1 = new QodeRow();
$group22->addChild(
	"row1",
	$row1
);

$button_solid_border_color = new QodeField(
	"colorsimple",
	"button_solid_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_solid_border_color",
	$button_solid_border_color
);

$button_solid_border_color_hover = new QodeField(
	"colorsimple",
	"button_solid_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"button_solid_border_color_hover",
	$button_solid_border_color_hover
);

$button_small_section = new QodeTitle(
	"button_small_section",
	esc_html__( "Small Button", 'brick' )
);
$panel2->addChild(
	"button_small_section",
	$button_small_section
);

$group14 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel2->addChild(
	"group14",
	$group14
);
$row1 = new QodeRow();
$group14->addChild(
	"row1",
	$row1
);

$small_button_fontsize = new QodeField(
	"textsimple",
	"small_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"small_button_fontsize",
	$small_button_fontsize
);

$small_button_fontweight = new QodeField(
	"selectblanksimple",
	"small_button_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"small_button_fontweight",
	$small_button_fontweight
);

$small_button_lineheight = new QodeField(
	"textsimple",
	"small_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"small_button_lineheight",
	$small_button_lineheight
);

$small_button_padding = new QodeField(
	"text",
	"small_button_padding",
	"",
	esc_html__( "Padding left/right (px) ", 'brick' ),
	esc_html__( "Define padding", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_padding",
	$small_button_padding
);

$small_button_border_radius = new QodeField(
	"text",
	"small_button_border_radius",
	"",
	esc_html__( "Border radius (px)", 'brick' ),
	esc_html__( "Define border", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_border_radius",
	$small_button_border_radius
);

$button_large_section = new QodeTitle(
	"button_large_section",
	esc_html__( "Large Button", 'brick' )
);
$panel2->addChild(
	"button_large_section",
	$button_large_section
);

$group17 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel2->addChild(
	"group17",
	$group17
);

$row1 = new QodeRow();
$group17->addChild(
	"row1",
	$row1
);

$large_button_fontsize = new QodeField(
	"textsimple",
	"large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"large_button_fontsize",
	$large_button_fontsize
);

$large_button_fontweight = new QodeField(
	"selectblanksimple",
	"large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"large_button_fontweight",
	$large_button_fontweight
);

$large_button_lineheight = new QodeField(
	"textsimple",
	"large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"large_button_lineheight",
	$large_button_lineheight
);

$large_button_padding = new QodeField(
	"text",
	"large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'brick' ),
	esc_html__( "Define padding", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_padding",
	$large_button_padding
);

$large_button_border_radius = new QodeField(
	"text",
	"large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "Define border", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_border_radius",
	$large_button_border_radius
);

$button_extra_large_section = new QodeTitle(
	"button_extra_large_section",
	esc_html__( "Extra Large Button", 'brick' )
);
$panel2->addChild(
	"button_extra_large_section",
	$button_extra_large_section
);

$group20 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel2->addChild(
	"group20",
	$group20
);
$row1 = new QodeRow();
$group20->addChild(
	"row1",
	$row1
);

$big_large_button_fontsize = new QodeField(
	"textsimple",
	"big_large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"big_large_button_fontsize",
	$big_large_button_fontsize
);

$big_large_button_fontweight = new QodeField(
	"selectblanksimple",
	"big_large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"big_large_button_fontweight",
	$big_large_button_fontweight
);

$big_large_button_lineheight = new QodeField(
	"textsimple",
	"big_large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"big_large_button_lineheight",
	$big_large_button_lineheight
);

$big_large_button_padding = new QodeField(
	"text",
	"big_large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'brick' ),
	esc_html__( "Define padding", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_padding",
	$big_large_button_padding
);

$big_large_button_border_radius = new QodeField(
	"text",
	"big_large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "Define padding", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_border_radius",
	$big_large_button_border_radius
);

//Blockquote

$panel3 = new QodePanel(
	esc_html__( "Blockquote", 'brick' ),
	"blockquote_panel"
);
$elementsPage->addChild(
	"panel3",
	$panel3
);

$group1 = new QodeGroup(
	esc_html__( "Blockquote Style", 'brick' ),
	esc_html__( "Define Blockquote style", 'brick' )
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

$blockquote_color = new QodeField(
	"colorsimple",
	"blockquote_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blockquote_font_color",
	$blockquote_color
);

$blockquote_font_size = new QodeField(
	"textsimple",
	"blockquote_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blockquote_font_size",
	$blockquote_font_size
);

$blockquote_line_height = new QodeField(
	"textsimple",
	"blockquote_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blockquote_line_height",
	$blockquote_line_height
);

$blockquote_text_transform = new QodeField(
	"selectblanksimple",
	"blockquote_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"blockquote_text_transform",
	$blockquote_text_transform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$blockquote_font_family = new QodeField(
	"fontsimple",
	"blockquote_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blockquote_font_family",
	$blockquote_font_family
);

$blockquote_font_style = new QodeField(
	"selectblanksimple",
	"blockquote_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blockquote_font_style",
	$blockquote_font_style
);

$blockquote_font_weight = new QodeField(
	"selectblanksimple",
	"blockquote_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blockquote_font_weight",
	$blockquote_font_weight
);

$blockquote_letter_spacing = new QodeField(
	"textsimple",
	"blockquote_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blockquote_letter_spacing",
	$blockquote_letter_spacing
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$blockquote_background_color = new QodeField(
	"colorsimple",
	"blockquote_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blockquote_background_color",
	$blockquote_background_color
);

$blockquote_border_color = new QodeField(
	"colorsimple",
	"blockquote_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blockquote_border_color",
	$blockquote_border_color
);

$blockquote_quote_icon_color = new QodeField(
	"colorsimple",
	"blockquote_quote_icon_color",
	"",
	esc_html__( "Quote Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blockquote_quote_icon_color",
	$blockquote_quote_icon_color
);

//Content Menu

$panel25 = new QodePanel(
	esc_html__( "Content Menu", 'brick' ),
	"content_menu_panel"
);
$elementsPage->addChild(
	"panel25",
	$panel25
);

$group1 = new QodeGroup(
	esc_html__( "Menu Icons Style", 'brick' ),
	esc_html__( "Define Icons style", 'brick' )
);
$panel25->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$content_menu_icon_color = new QodeField(
	"colorsimple",
	"content_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"content_menu_icon_color",
	$content_menu_icon_color
);
$content_menu_icon_hover_color = new QodeField(
	"colorsimple",
	"content_menu_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"content_menu_icon_hover_color",
	$content_menu_icon_hover_color
);
$content_menu_icon_size = new QodeField(
	"textsimple",
	"content_menu_icon_size",
	"",
	esc_html__( "Icon Size", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"content_menu_icon_size",
	$content_menu_icon_size
);

$group2 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define Text style", 'brick' )
);
$panel25->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$content_menu_text_color = new QodeField(
	"colorsimple",
	"content_menu_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"content_menu_text_color",
	$content_menu_text_color
);
$content_menu_text_hover_color = new QodeField(
	"colorsimple",
	"content_menu_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"content_menu_text_hover_color",
	$content_menu_text_hover_color
);
$content_menu_text_fontsize = new QodeField(
	"textsimple",
	"content_menu_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"content_menu_text_fontsize",
	$content_menu_text_fontsize
);
$content_menu_text_lineheight = new QodeField(
	"textsimple",
	"content_menu_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"content_menu_text_lineheight",
	$content_menu_text_lineheight
);
$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);
$content_menu_text_texttransform = new QodeField(
	"selectblanksimple",
	"content_menu_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"content_menu_text_texttransform",
	$content_menu_text_texttransform
);
$content_menu_text_google_fonts = new QodeField(
	"fontsimple",
	"content_menu_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"content_menu_text_google_fonts",
	$content_menu_text_google_fonts
);
$content_menu_text_fontstyle = new QodeField(
	"selectblanksimple",
	"content_menu_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"content_menu_text_fontstyle",
	$h1_fontstyle
);
$content_menu_text_fontweight = new QodeField(
	"selectblanksimple",
	"content_menu_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"content_menu_text_fontweight",
	$content_menu_text_fontweight
);
$row3 = new QodeRow();
$group2->addChild(
	"row3",
	$row3
);
$content_menu_text_letterspacing = new QodeField(
	"textsimple",
	"content_menu_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"content_menu_text_letterspacing",
	$content_menu_text_letterspacing
);

//Call to action

$panel31 = new QodePanel(
	esc_html__( "Call to Action", 'brick' ),
	"call_to_action_panel"
);
$elementsPage->addChild(
	"panel31",
	$panel31
);

$call_to_action_button_section = new QodeTitle(
	"call_to_action_button_section",
	esc_html__( "Button", 'brick' )
);
$panel31->addChild(
	"call_to_action_button_section",
	$call_to_action_button_section
);

$group1 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel31->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$cto_action_bttn_title_google_fonts = new QodeField(
	"fontsimple",
	"cto_action_bttn_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_title_google_fonts",
	$cto_action_bttn_title_google_fonts
);

$cto_action_bttn_title_fontsize = new QodeField(
	"textsimple",
	"cto_action_bttn_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_title_fontsize",
	$cto_action_bttn_title_fontsize
);

$cto_action_bttn_title_fontstyle = new QodeField(
	"selectblanksimple",
	"cto_action_bttn_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row1->addChild(
	"cto_action_bttn_title_fontstyle",
	$cto_action_bttn_title_fontstyle
);

$cto_action_bttn_title_fontweight = new QodeField(
	"selectblanksimple",
	"cto_action_bttn_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"cto_action_bttn_title_fontweight",
	$cto_action_bttn_title_fontweight
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$cto_action_bttn_title_letter_spacing = new QodeField(
	"textsimple",
	"cto_action_bttn_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cto_action_bttn_title_letter_spacing",
	$cto_action_bttn_title_letter_spacing
);

$cto_action_bttn_title_lineheight = new QodeField(
	"textsimple",
	"cto_action_bttn_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cto_action_bttn_title_lineheight",
	$cto_action_bttn_title_lineheight
);

$cto_action_bttn_title_color = new QodeField(
	"colorsimple",
	"cto_action_bttn_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cto_action_bttn_title_color",
	$cto_action_bttn_title_color
);

$cto_action_bttn_title_hovercolor = new QodeField(
	"colorsimple",
	"cto_action_bttn_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"cto_action_bttn_title_hovercolor",
	$cto_action_bttn_title_hovercolor
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$cto_action_bttn_title_texttransform = new QodeField(
	"selectblanksimple",
	"cto_action_bttn_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"cto_action_bttn_title_texttransform",
	$cto_action_bttn_title_texttransform
);

$group2 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background", 'brick' )
);
$panel31->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$cto_action_bttn_backgroundcolor = new QodeField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor",
	$cto_action_bttn_backgroundcolor
);

$cto_action_bttn_backgroundcolor_hover = new QodeField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor_hover",
	$cto_action_bttn_backgroundcolor_hover
);

$group3 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define border style", 'brick' )
);
$panel31->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$cto_action_bttn_border_color = new QodeField(
	"colorsimple",
	"cto_action_bttn_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_border_color",
	$cto_action_bttn_border_color
);

$cto_action_bttn_border_hover_color = new QodeField(
	"colorsimple",
	"cto_action_bttn_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_border_hover_color",
	$cto_action_bttn_border_hover_color
);

$cto_action_bttn_border_width = new QodeField(
	"textsimple",
	"cto_action_bttn_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_border_width",
	$cto_action_bttn_border_width
);

$cto_action_bttn_border_radius = new QodeField(
	"textsimple",
	"cto_action_bttn_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"cto_action_bttn_border_radius",
	$cto_action_bttn_border_radius
);

$cto_action_bttn_padding = new QodeField(
	"text",
	"cto_action_bttn_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'brick' ),
	esc_html__( "Define padding", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel31->addChild(
	"cto_action_bttn_padding",
	$cto_action_bttn_padding
);

//Counters

$panel4 = new QodePanel(
	esc_html__( "Counters", 'brick' ),
	"counters_panel"
);
$elementsPage->addChild(
	"panel4",
	$panel4
);

$group1 = new QodeGroup(
	esc_html__( "Counters Style", 'brick' ),
	esc_html__( "Define styles for Counters", 'brick' )
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

$counter_color = new QodeField(
	"colorsimple",
	"counter_color",
	"",
	esc_html__( "Numeral Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"counter_color",
	$counter_color
);

$counter_text_color = new QodeField(
	"colorsimple",
	"counter_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"counter_text_color",
	$counter_text_color
);

$counter_separator_color = new QodeField(
	"colorsimple",
	"counter_separator_color",
	"",
	esc_html__( "Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"counter_separator_color",
	$counter_separator_color
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$counters_font_family = new QodeField(
	"fontsimple",
	"counters_font_family",
	"-1",
	esc_html__( "Numeral Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"counters_font_family",
	$counters_font_family
);

$counters_font_size = new QodeField(
	"textsimple",
	"counters_font_size",
	"",
	esc_html__( "Numeral Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"counters_font_size",
	$counters_font_size
);

$counters_fontweight = new QodeField(
	"selectblanksimple",
	"counters_fontweight",
	"",
	esc_html__( "Numeral Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"counters_fontweight",
	$counters_fontweight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$counters_text_font_size = new QodeField(
	"textsimple",
	"counters_text_font_size",
	"",
	esc_html__( "Text Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"counters_text_font_size",
	$counters_text_font_size
);

$counters_text_fontweight = new QodeField(
	"selectblanksimple",
	"counters_text_fontweight",
	"",
	esc_html__( "Text Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"counters_text_fontweight",
	$counters_text_fontweight
);

$counters_text_texttransform = new QodeField(
	"selectblanksimple",
	"counters_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"counters_text_texttransform",
	$counters_text_texttransform
);

$counters_text_letterspacing = new QodeField(
	"textsimple",
	"counters_text_letterspacing",
	"",
	esc_html__( "Text Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"counters_text_letterspacing",
	$counters_text_letterspacing
);

$group2 = new QodeGroup(
	esc_html__( "Counters Title", 'brick' ),
	esc_html__( "Define Counter title style", 'brick' )
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

$counters_title_color = new QodeField(
	"colorsimple",
	"counters_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"counters_title_color",
	$counters_title_color
);

$counters_title_font_size = new QodeField(
	"textsimple",
	"counters_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"counters_title_font_size",
	$counters_title_font_size
);

$counters_title_line_height = new QodeField(
	"textsimple",
	"counters_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"counters_title_line_height",
	$counters_title_line_height
);

$counters_title_text_transform = new QodeField(
	"selectblanksimple",
	"counters_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"counters_title_text_transform",
	$counters_title_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$counters_title_font_family = new QodeField(
	"fontsimple",
	"counters_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"counters_title_font_family",
	$counters_title_font_family
);

$counters_title_font_style = new QodeField(
	"selectblanksimple",
	"counters_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"counters_title_font_style",
	$counters_title_font_style
);

$counters_title_font_weight = new QodeField(
	"selectblanksimple",
	"counters_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"counters_title_font_weight",
	$counters_title_font_weight
);

$counters_title_letter_spacing = new QodeField(
	"textsimple",
	"counters_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"counters_title_letter_spacing",
	$counters_title_letter_spacing
);

//Countdowns

$panel30 = new QodePanel(
	esc_html__( "Countdowns", 'brick' ),
	"coundowns_panel"
);
$elementsPage->addChild(
	"panel30",
	$panel30
);

$group1 = new QodeGroup(
	esc_html__( "Number Style", 'brick' ),
	esc_html__( "Define styles for countdowns number", 'brick' )
);
$panel30->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$countdown_number_color = new QodeField(
	"colorsimple",
	"countdown_number_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_number_color",
	$countdown_number_color
);

$countdown_number_font_size = new QodeField(
	"textsimple",
	"countdown_number_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_number_font_size",
	$countdown_number_font_size
);

$countdown_number_line_height = new QodeField(
	"textsimple",
	"countdown_number_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_number_line_height",
	$countdown_number_line_height
);

$countdown_number_font_family = new QodeField(
	"fontsimple",
	"countdown_number_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_number_font_family",
	$countdown_number_font_family
);

$row2 = new QodeRow();
$group1->addChild(
	"row2",
	$row2
);

$countdown_number_font_style = new QodeField(
	"selectblanksimple",
	"countdown_number_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"countdown_number_font_style",
	$countdown_number_font_style
);

$countdown_number_font_weight = new QodeField(
	"selectblanksimple",
	"countdown_number_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"countdown_number_font_weight",
	$countdown_number_font_weight
);

$countdown_number_letter_spacing = new QodeField(
	"textsimple",
	"countdown_number_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"countdown_number_letter_spacing",
	$countdown_number_letter_spacing
);

$group2 = new QodeGroup(
	esc_html__( "Labels Style", 'brick' ),
	esc_html__( "Define styles for countdowns labels", 'brick' )
);
$panel30->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$countdown_label_color = new QodeField(
	"colorsimple",
	"countdown_label_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_label_color",
	$countdown_label_color
);

$countdown_label_font_size = new QodeField(
	"textsimple",
	"countdown_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_label_font_size",
	$countdown_label_font_size
);

$countdown_label_line_height = new QodeField(
	"textsimple",
	"countdown_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_label_line_height",
	$countdown_label_line_height
);

$countdown_label_text_transform = new QodeField(
	"selectblanksimple",
	"countdown_label_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"countdown_label_text_transform",
	$countdown_label_text_transform
);

$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);

$countdown_label_font_family = new QodeField(
	"fontsimple",
	"countdown_label_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"countdown_label_font_family",
	$countdown_label_font_family
);

$countdown_label_font_style = new QodeField(
	"selectblanksimple",
	"countdown_label_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"countdown_label_font_style",
	$countdown_label_font_style
);

$countdown_label_font_weight = new QodeField(
	"selectblanksimple",
	"countdown_label_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"countdown_label_font_weight",
	$countdown_label_font_weight
);

$countdown_label_letter_spacing = new QodeField(
	"textsimple",
	"countdown_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"countdown_label_letter_spacing",
	$countdown_label_letter_spacing
);

$group3 = new QodeGroup(
	esc_html__( "Separator Style", 'brick' ),
	esc_html__( "Define styles for countdowns separator", 'brick' )
);
$panel30->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$countdown_separator_color = new QodeField(
	"colorsimple",
	"countdown_separator_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_separator_color",
	$countdown_separator_color
);

$countdown_separator_thickness = new QodeField(
	"textsimple",
	"countdown_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_separator_thickness",
	$countdown_separator_thickness
);

$countdown_separator_width = new QodeField(
	"textsimple",
	"countdown_separator_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_separator_width",
	$countdown_separator_width
);

$countdown_separator_margin_top = new QodeField(
	"textsimple",
	"countdown_separator_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"countdown_separator_margin_top",
	$countdown_separator_margin_top
);

$row2 = new QodeRow();
$group3->addChild(
	"row2",
	$row2
);

$countdown_separator_margin_bottom = new QodeField(
	"textsimple",
	"countdown_separator_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"countdown_separator_margin_bottom",
	$countdown_separator_margin_bottom
);

//Expandable Section

$panel5 = new QodePanel(
	esc_html__( "Expandable Section", 'brick' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel5",
	$panel5
);

$group1 = new QodeGroup(
	esc_html__( "Title Style", 'brick' ),
	esc_html__( "Define Expandable Section title style", 'brick' )
);
$panel5->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$expandable_label_color = new QodeField(
	"colorsimple",
	"expandable_label_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"expandable_label_color",
	$expandable_label_color
);

$expandable_label_font_size = new QodeField(
	"textsimple",
	"expandable_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"expandable_label_font_size",
	$expandable_label_font_size
);

$expandable_label_text_transform = new QodeField(
	"selectblanksimple",
	"expandable_label_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"expandable_label_text_transform",
	$expandable_label_text_transform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$expandable_label_font_family = new QodeField(
	"fontsimple",
	"expandable_label_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"expandable_label_font_family",
	$expandable_label_font_family
);

$expandable_label_font_weight = new QodeField(
	"selectblanksimple",
	"expandable_label_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"expandable_label_font_weight",
	$expandable_label_font_weight
);

$expandable_label_letter_spacing = new QodeField(
	"textsimple",
	"expandable_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"expandable_label_letter_spacing",
	$expandable_label_letter_spacing
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$expandable_background_color = new QodeField(
	"colorsimple",
	"expandable_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"expandable_background_color",
	$expandable_background_color
);

$expandable_label_hover_color = new QodeField(
	"colorsimple",
	"expandable_label_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"expandable_label_hover_color",
	$expandable_label_hover_color
);

//Full Screen Sections

$panel51 = new QodePanel(
	esc_html__( "Full Screen Sections", 'brick' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel51",
	$panel51
);
$full_screen_sections_on_small_screens = new QodeField(
	"yesno",
	"full_screen_sections_on_small_screens",
	"no",
	esc_html__( "Enable Full Screen Sections on Small Screens", 'brick' ),
	esc_html__( "Enabling this option will turn on Full Screen Sections on small screens", 'brick' )
);
$panel51->addChild(
	"full_screen_sections_on_small_screens",
	$full_screen_sections_on_small_screens
);

//Highlight

$panel17 = new QodePanel(
	esc_html__( "Highlight", 'brick' ),
	"highlight_panel"
);
$elementsPage->addChild(
	"panel17",
	$panel17
);
$highlight_color = new QodeField(
	"color",
	"highlight_color",
	"",
	esc_html__( "Highlight Color", 'brick' ),
	esc_html__( "Set color for Highlight", 'brick' )
);
$panel17->addChild(
	"highlight_color",
	$highlight_color
);

//Horizontal Progress Bars

$panel6 = new QodePanel(
	esc_html__( "Horizontal Progress Bars", 'brick' ),
	"horizontal_progress_bars_panel"
);
$elementsPage->addChild(
	"panel6",
	$panel6
);

$group1 = new QodeGroup(
	esc_html__( "Progress Bar Title Style", 'brick' ),
	esc_html__( "Define styles for Horizontal Progress Bars title", 'brick' )
);
$panel6->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_font_size = new QodeField(
	"textsimple",
	"progress_bar_horizontal_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_font_size",
	$progress_bar_horizontal_font_size
);

$progress_bar_horizontal_color = new QodeField(
	"colorsimple",
	"progress_bar_horizontal_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_color",
	$progress_bar_horizontal_color
);

$progress_bar_horizontal_line_height = new QodeField(
	"textsimple",
	"progress_bar_horizontal_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_line_height",
	$progress_bar_horizontal_line_height
);

$progress_bar_horizontal_font_family = new QodeField(
	"fontsimple",
	"progress_bar_horizontal_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_font_family",
	$progress_bar_horizontal_font_family
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_font_style = new QodeField(
	"selectblanksimple",
	"progress_bar_horizontal_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"progress_bar_horizontal_font_style",
	$progress_bar_horizontal_font_style
);

$progress_bar_horizontal_font_weight = new QodeField(
	"selectblanksimple",
	"progress_bar_horizontal_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"progress_bar_horizontal_font_weight",
	$progress_bar_horizontal_font_weight
);

$progress_bar_horizontal_letter_spacing = new QodeField(
	"textsimple",
	"progress_bar_horizontal_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"progress_bar_horizontal_letter_spacing",
	$progress_bar_horizontal_letter_spacing
);

$progress_bar_horizontal_text_transform = new QodeField(
	"selectblanksimple",
	"progress_bar_horizontal_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"progress_bar_horizontal_text_transform",
	$progress_bar_horizontal_text_transform
);

$group2 = new QodeGroup(
	esc_html__( "Progress Bar Percentage Style", 'brick' ),
	esc_html__( "Define styles for Horizontal Progress Bars percentage", 'brick' )
);
$panel6->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_percentage_font_size = new QodeField(
	"textsimple",
	"progress_bar_horizontal_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_size",
	$progress_bar_horizontal_percentage_font_size
);

$progress_bar_horizontal_percentage_color = new QodeField(
	"colorsimple",
	"progress_bar_horizontal_percentage_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_color",
	$progress_bar_horizontal_percentage_color
);

$progress_bar_horizontal_percentage_line_height = new QodeField(
	"textsimple",
	"progress_bar_horizontal_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_line_height",
	$progress_bar_horizontal_percentage_line_height
);

$progress_bar_horizontal_percentage_font_family = new QodeField(
	"fontsimple",
	"progress_bar_horizontal_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_family",
	$progress_bar_horizontal_percentage_font_family
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_percentage_font_style = new QodeField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_style",
	$progress_bar_horizontal_percentage_font_style
);

$progress_bar_horizontal_percentage_font_weight = new QodeField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_weight",
	$progress_bar_horizontal_percentage_font_weight
);

$progress_bar_horizontal_percentage_letter_spacing = new QodeField(
	"textsimple",
	"progress_bar_horizontal_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_letter_spacing",
	$progress_bar_horizontal_percentage_letter_spacing
);

$progress_bar_horizontal_percentage_text_transform = new QodeField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"progress_bar_horizontal_percentage_text_transform",
	$progress_bar_horizontal_percentage_text_transform
);
//Vertical Progress Bars

$panel73 = new QodePanel(
	esc_html__( "Vertical Progress Bars", 'brick' ),
	"vertical_progress_bars_panel"
);
$elementsPage->addChild(
	"panel73",
	$panel73
);

$group1 = new QodeGroup(
	esc_html__( "Progress Bar Title Style", 'brick' ),
	esc_html__( "Define styles for Vertical Progress Bars title", 'brick' )
);
$panel73->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_font_size = new QodeField(
	"textsimple",
	"progress_bar_vertical_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_font_size",
	$progress_bar_vertical_font_size
);

$progress_bar_vertical_color = new QodeField(
	"colorsimple",
	"progress_bar_vertical_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_color",
	$progress_bar_vertical_color
);

$progress_bar_vertical_line_height = new QodeField(
	"textsimple",
	"progress_bar_vertical_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_line_height",
	$progress_bar_vertical_line_height
);

$progress_bar_vertical_font_family = new QodeField(
	"fontsimple",
	"progress_bar_vertical_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_font_family",
	$progress_bar_vertical_font_family
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_font_style = new QodeField(
	"selectblanksimple",
	"progress_bar_vertical_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"progress_bar_vertical_font_style",
	$progress_bar_vertical_font_style
);

$progress_bar_vertical_font_weight = new QodeField(
	"selectblanksimple",
	"progress_bar_vertical_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"progress_bar_vertical_font_weight",
	$progress_bar_vertical_font_weight
);

$progress_bar_vertical_letter_spacing = new QodeField(
	"textsimple",
	"progress_bar_vertical_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"progress_bar_vertical_letter_spacing",
	$progress_bar_vertical_letter_spacing
);

$progress_bar_vertical_text_transform = new QodeField(
	"selectblanksimple",
	"progress_bar_vertical_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"progress_bar_vertical_text_transform",
	$progress_bar_vertical_text_transform
);

$group2 = new QodeGroup(
	esc_html__( "Progress Bar Percentage Style", 'brick' ),
	esc_html__( "Define styles for Vertical Progress Bars percentage", 'brick' )
);
$panel73->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_percentage_font_size = new QodeField(
	"textsimple",
	"progress_bar_vertical_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_size",
	$progress_bar_vertical_percentage_font_size
);

$progress_bar_vertical_percentage_color = new QodeField(
	"colorsimple",
	"progress_bar_vertical_percentage_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_color",
	$progress_bar_vertical_percentage_color
);

$progress_bar_vertical_percentage_line_height = new QodeField(
	"textsimple",
	"progress_bar_vertical_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_line_height",
	$progress_bar_vertical_percentage_line_height
);

$progress_bar_vertical_percentage_font_family = new QodeField(
	"fontsimple",
	"progress_bar_vertical_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_family",
	$progress_bar_vertical_percentage_font_family
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_percentage_font_style = new QodeField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_style",
	$progress_bar_vertical_percentage_font_style
);

$progress_bar_vertical_percentage_font_weight = new QodeField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_weight",
	$progress_bar_vertical_percentage_font_weight
);

$progress_bar_vertical_percentage_letter_spacing = new QodeField(
	"textsimple",
	"progress_bar_vertical_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_letter_spacing",
	$progress_bar_vertical_percentage_letter_spacing
);

$progress_bar_vertical_percentage_text_transform = new QodeField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"progress_bar_vertical_percentage_text_transform",
	$progress_bar_vertical_percentage_text_transform
);

//Icon

$panel19 = new QodePanel(
	esc_html__( "Icons", 'brick' ),
	"icons_panel"
);
$elementsPage->addChild(
	"panel19",
	$panel19
);

$group1 = new QodeGroup(
	esc_html__( "Normal Icons", 'brick' ),
	esc_html__( "Define Normal Icons style", 'brick' )
);
$panel19->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_color_normal = new QodeField(
	"colorsimple",
	"icon_color_normal",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_color_normal",
	$icon_color_normal
);

$icon_hover_color_normal = new QodeField(
	"colorsimple",
	"icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_hover_color_normal",
	$icon_hover_color_normal
);

$group2 = new QodeGroup(
	esc_html__( "Icons Circle/Square", 'brick' ),
	esc_html__( "Define circle/square Icons style", 'brick' )
);
$panel19->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_color = new QodeField(
	"colorsimple",
	"icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_color",
	$icon_color
);

$icon_hover_color = new QodeField(
	"colorsimple",
	"icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_hover_color",
	$icon_hover_color
);

$icon_background_color = new QodeField(
	"colorsimple",
	"icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_background_color",
	$icon_background_color
);

$icon_hover_background_color = new QodeField(
	"colorsimple",
	"icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_hover_background_color",
	$icon_hover_background_color
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_border_width = new QodeField(
	"textsimple",
	"icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"icon_border_width",
	$icon_border_width
);

$icon_border_color = new QodeField(
	"colorsimple",
	"icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"icon_border_color",
	$icon_border_color
);

$icon_hover_border_color = new QodeField(
	"colorsimple",
	"icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"icon_hover_border_color",
	$icon_hover_border_color
);

$icon_box_shadows = new QodeField(
	'yesno',
	'icon_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'brick' ),
	esc_html__( 'Enabling this option will show icon shadow', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_icon_box_shadows_container'
	)
);
$panel19->addChild(
	'icon_box_shadows',
	$icon_box_shadows
);

$icon_box_shadows_container = new QodeContainer(
	'icon_box_shadows_container',
	'icon_box_shadows',
	'no'
);
$panel19->addChild(
	'icon_box_shadows_container',
	$icon_box_shadows_container
);

$group3 = new QodeGroup(
	esc_html__( 'Icon Shadows', 'brick' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'brick' )
);
$icon_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new QodeRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_box_shadow_horizontal_shadow = new QodeField(
	'textsimple',
	'icon_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'brick' )
);
$row3->addChild(
	'icon_box_shadow_horizontal_shadow',
	$icon_box_shadow_horizontal_shadow
);

$icon_box_shadow_vertical_shadow = new QodeField(
	'textsimple',
	'icon_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'brick' )
);
$row3->addChild(
	'icon_box_shadow_vertical_shadow',
	$icon_box_shadow_vertical_shadow
);

$icon_box_shadow_blur_distance = new QodeField(
	'textsimple',
	'icon_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'brick' )
);
$row3->addChild(
	'icon_box_shadow_blur_distance',
	$icon_box_shadow_blur_distance
);

$icon_box_shadow_shadow_size = new QodeField(
	'textsimple',
	'icon_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'brick' )
);
$row3->addChild(
	'icon_box_shadow_shadow_size',
	$icon_box_shadow_shadow_size
);

$row4 = new QodeRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_box_shadow_shadow_color = new QodeField(
	'colorsimple',
	'icon_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'brick' )
);
$row4->addChild(
	'icon_box_shadow_shadow_color',
	$icon_box_shadow_shadow_color
);

$panel21 = new QodePanel(
	esc_html__( "Icon With Text", 'brick' ),
	"icon_with_text_panel"
);
$elementsPage->addChild(
	"panel21",
	$panel21
);

$group1 = new QodeGroup(
	esc_html__( "Normal Icons", 'brick' ),
	esc_html__( "Define Normal Icons style", 'brick' )
);
$panel21->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color_normal = new QodeField(
	"colorsimple",
	"icon_with_text_icon_color_normal",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_with_text_icon_color_normal",
	$icon_with_text_icon_color_normal
);

$icon_with_text_icon_hover_color_normal = new QodeField(
	"colorsimple",
	"icon_with_text_icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color_normal",
	$icon_with_text_icon_hover_color_normal
);

$group2 = new QodeGroup(
	esc_html__( "Icons Circle/Square", 'brick' ),
	esc_html__( "Define circle/square Icons style", 'brick' )
);
$panel21->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color = new QodeField(
	"colorsimple",
	"icon_with_text_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_with_text_icon_color",
	$icon_with_text_icon_color
);

$icon_with_text_icon_hover_color = new QodeField(
	"colorsimple",
	"icon_with_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color",
	$icon_with_text_icon_hover_color
);

$icon_with_text_icon_background_color = new QodeField(
	"colorsimple",
	"icon_with_text_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_with_text_icon_background_color",
	$icon_with_text_icon_background_color
);

$icon_with_text_icon_hover_background_color = new QodeField(
	"colorsimple",
	"icon_with_text_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"icon_with_text_icon_hover_background_color",
	$icon_with_text_icon_hover_background_color
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_with_text_icon_border_width = new QodeField(
	"textsimple",
	"icon_with_text_icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"icon_with_text_icon_border_width",
	$icon_with_text_icon_border_width
);

$icon_with_text_icon_border_color = new QodeField(
	"colorsimple",
	"icon_with_text_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"icon_with_text_icon_border_color",
	$icon_with_text_icon_border_color
);

$icon_with_text_icon_hover_border_color = new QodeField(
	"colorsimple",
	"icon_with_text_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"icon_with_text_icon_hover_border_color",
	$icon_with_text_icon_hover_border_color
);

$icon_with_text_box_shadows = new QodeField(
	'yesno',
	'icon_with_text_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'brick' ),
	esc_html__( 'Enabling this option will show icon shadow', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_icon_with_text_box_shadows_container'
	)
);
$panel21->addChild(
	'icon_with_text_box_shadows',
	$icon_with_text_box_shadows
);

$icon_with_text_box_shadows_container = new QodeContainer(
	'icon_with_text_box_shadows_container',
	'icon_with_text_box_shadows',
	'no'
);
$panel21->addChild(
	'icon_with_text_box_shadows_container',
	$icon_with_text_box_shadows_container
);

$group3 = new QodeGroup(
	esc_html__( 'Icon Shadows', 'brick' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'brick' )
);
$icon_with_text_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new QodeRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_with_text_box_shadow_horizontal_shadow = new QodeField(
	'textsimple',
	'icon_with_text_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'brick' )
);
$row3->addChild(
	'icon_with_text_box_shadow_horizontal_shadow',
	$icon_with_text_box_shadow_horizontal_shadow
);

$icon_with_text_box_shadow_vertical_shadow = new QodeField(
	'textsimple',
	'icon_with_text_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'brick' )
);
$row3->addChild(
	'icon_with_text_box_shadow_vertical_shadow',
	$icon_with_text_box_shadow_vertical_shadow
);

$icon_with_text_box_shadow_blur_distance = new QodeField(
	'textsimple',
	'icon_with_text_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'brick' )
);
$row3->addChild(
	'icon_with_text_box_shadow_blur_distance',
	$icon_with_text_box_shadow_blur_distance
);

$icon_with_text_box_shadow_shadow_size = new QodeField(
	'textsimple',
	'icon_with_text_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'brick' )
);
$row3->addChild(
	'icon_with_text_box_shadow_shadow_size',
	$icon_with_text_box_shadow_shadow_size
);

$row4 = new QodeRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_with_text_box_shadow_shadow_color = new QodeField(
	'colorsimple',
	'icon_with_text_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'brick' )
);
$row4->addChild(
	'icon_with_text_box_shadow_shadow_color',
	$icon_with_text_box_shadow_shadow_color
);

//Input Fields

$panel7 = new QodePanel(
	esc_html__( "Input Fields", 'brick' ),
	"input_fields_panel"
);
$elementsPage->addChild(
	"panel7",
	$panel7
);

$group1 = new QodeGroup(
	esc_html__( "Input Fields Style", 'brick' ),
	esc_html__( "Define styles for Input Fields", 'brick' )
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

$input_background_color = new QodeField(
	"colorsimple",
	"input_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"input_background_color",
	$input_background_color
);

$input_focus_background_color = new QodeField(
	"colorsimple",
	"input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"input_focus_background_color",
	$input_focus_background_color
);

$input_border_color = new QodeField(
	"colorsimple",
	"input_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"input_border_color",
	$input_border_color
);

$input_focus_border_color = new QodeField(
	"colorsimple",
	"input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"input_focus_border_color",
	$input_focus_border_color
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$input_text_color = new QodeField(
	"colorsimple",
	"input_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"input_text_color",
	$input_text_color
);

$input_focus_text_color = new QodeField(
	"colorsimple",
	"input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"input_focus_text_color",
	$input_focus_text_color
);

$input_text_font_size = new QodeField(
	"textsimple",
	"input_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"input_text_font_size",
	$input_text_font_size
);

$input_text_fontweight = new QodeField(
	"selectblanksimple",
	"input_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"input_text_fontweight",
	$input_text_fontweight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$input_text_text_transform = new QodeField(
	"selectblanksimple",
	"input_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"input_text_text_transform",
	$input_text_text_transform
);

$input_text_google_fonts = new QodeField(
	"fontsimple",
	"input_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"input_text_google_fonts",
	$input_text_google_fonts
);

$input_text_fontstyle = new QodeField(
	"selectblanksimple",
	"input_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"input_text_fontstyle",
	$input_text_fontstyle
);

$input_text_letter_spacing = new QodeField(
	"textsimple",
	"input_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"input_text_letter_spacing",
	$input_text_letter_spacing
);

//Interactive Banners

$panel71 = new QodePanel(
	esc_html__( "Interactive Banners", 'brick' ),
	"interactive_banners_panel"
);
$elementsPage->addChild(
	"panel71",
	$panel71
);

$group1 = new QodeGroup(
	esc_html__( "Interactive Banners Style", 'brick' ),
	esc_html__( "Define styles for Interactive Banners", 'brick' )
);
$panel71->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$interactive_banners_background_color = new QodeField(
	"colorsimple",
	"interactive_banners_background_color",
	"",
	esc_html__( "Image Overlay Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"interactive_banners_background_color",
	$interactive_banners_background_color
);

$interactive_banners_background_transparency = new QodeField(
	"textsimple",
	"interactive_banners_background_transparency",
	"",
	esc_html__( "Image Overlay Color Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"interactive_banners_background_transparency",
	$interactive_banners_background_transparency
);

$interactive_banners_hover_background_color = new QodeField(
	"colorsimple",
	"interactive_banners_hover_background_color",
	"",
	esc_html__( "Image Overlay Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"interactive_banners_hover_background_color",
	$interactive_banners_hover_background_color
);

$interactive_banners_hover_background_transparency = new QodeField(
	"textsimple",
	"interactive_banners_hover_background_transparency (0-1)",
	"",
	esc_html__( "Image Overlay Hover Color Transparency", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"interactive_banners_hover_background_transparency",
	$interactive_banners_hover_background_transparency
);

//Lists

$panel72 = new QodePanel(
	esc_html__( "Lists", 'brick' ),
	"lists"
);
$elementsPage->addChild(
	"panel72",
	$panel72
);

$group1 = new QodeGroup(
	esc_html__( "Unordered List Style", 'brick' ),
	esc_html__( "Define styles for Unordered Lists", 'brick' )
);
$panel72->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$list_item_color = new QodeField(
	"colorsimple",
	"list_item_color",
	"",
	esc_html__( "List Bullet Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"list_item_color",
	$list_item_color
);
$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$list_color = new QodeField(
	"colorsimple",
	"list_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"list_color",
	$list_color
);

$list_fontsize = new QodeField(
	"textsimple",
	"list_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"list_fontsize",
	$list_fontsize
);

$list_lineheight = new QodeField(
	"textsimple",
	"list_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"list_lineheight",
	$list_lineheight
);

$list_texttransform = new QodeField(
	"selectblanksimple",
	"list_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"list_texttransform",
	$list_texttransform
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);
$list_google_fonts = new QodeField(
	"fontsimple",
	"list_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"list_google_fonts",
	$list_google_fonts
);

$list_fontstyle = new QodeField(
	"selectblanksimple",
	"list_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"list_fontstyle",
	$list_fontstyle
);

$list_fontweight = new QodeField(
	"selectblanksimple",
	"list_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"list_fontweight",
	$list_fontweight
);

$list_letter_spacing = new QodeField(
	"textsimple",
	"list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"list_letter_spacing",
	$list_letter_spacing
);
$row4 = new QodeRow( true );
$group1->addChild(
	"row4",
	$row4
);
$list_bottom_margin = new QodeField(
	"textsimple",
	"list_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"list_bottom_margin",
	$list_bottom_margin
);

$group2 = new QodeGroup(
	esc_html__( "Ordered List Style", 'brick' ),
	esc_html__( "Define styles for Ordered lists", 'brick' )
);
$panel72->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$list_ordered_item_color = new QodeField(
	"colorsimple",
	"list_ordered_item_color",
	"",
	esc_html__( "List Number Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"list_ordered_item_color",
	$list_ordered_item_color
);
$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$list_ordered_color = new QodeField(
	"colorsimple",
	"list_ordered_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"list_ordered_color",
	$list_ordered_color
);

$list_ordered_fontsize = new QodeField(
	"textsimple",
	"list_ordered_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"list_ordered_fontsize",
	$list_ordered_fontsize
);

$list_ordered_lineheight = new QodeField(
	"textsimple",
	"list_ordered_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"list_ordered_lineheight",
	$list_ordered_lineheight
);

$list_ordered_texttransform = new QodeField(
	"selectblanksimple",
	"list_ordered_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"list_ordered_texttransform",
	$list_ordered_texttransform
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);
$list_ordered_google_fonts = new QodeField(
	"fontsimple",
	"list_ordered_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"list_ordered_google_fonts",
	$list_ordered_google_fonts
);

$list_ordered_fontstyle = new QodeField(
	"selectblanksimple",
	"list_ordered_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"list_ordered_fontstyle",
	$list_ordered_fontstyle
);

$list_ordered_fontweight = new QodeField(
	"selectblanksimple",
	"list_ordered_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"list_ordered_fontweight",
	$list_ordered_fontweight
);

$list_ordered_letter_spacing = new QodeField(
	"textsimple",
	"list_ordered_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"list_ordered_letter_spacing",
	$list_ordered_letter_spacing
);
$row4 = new QodeRow( true );
$group2->addChild(
	"row4",
	$row4
);
$list_ordered_bottom_margin = new QodeField(
	"textsimple",
	"list_ordered_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"list_ordered_bottom_margin",
	$list_ordered_bottom_margin
);

//Message Boxes

$panel8 = new QodePanel(
	esc_html__( "Message Boxes", 'brick' ),
	"message_boxes_panel"
);
$elementsPage->addChild(
	"panel8",
	$panel8
);

$group1 = new QodeGroup(
	esc_html__( "Message Box Style", 'brick' ),
	esc_html__( "Define Message Box Style", 'brick' )
);
$panel8->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$message_title_color = new QodeField(
	"colorsimple",
	"message_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"message_title_color",
	$message_title_color
);

$message_backgroundcolor = new QodeField(
	"colorsimple",
	"message_backgroundcolor",
	"",
	esc_html__( "Background color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"message_backgroundcolor",
	$message_backgroundcolor
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$message_title_google_fonts = new QodeField(
	"fontsimple",
	"message_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"message_title_google_fonts",
	$message_title_google_fonts
);

$message_title_fontsize = new QodeField(
	"textsimple",
	"message_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"message_title_fontsize",
	$message_title_fontsize
);

$message_title_lineheight = new QodeField(
	"textsimple",
	"message_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"message_title_lineheight",
	$message_title_lineheight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$message_title_fontstyle = new QodeField(
	"selectblanksimple",
	"message_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"message_title_fontstyle",
	$message_title_fontstyle
);

$message_title_fontweight = new QodeField(
	"selectblanksimple",
	"message_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"message_title_fontweight",
	$message_title_fontweight
);

$group2 = new QodeGroup(
	esc_html__( "Message Box Icon Style", 'brick' ),
	esc_html__( "Define styles for Message Box icons", 'brick' )
);
$panel8->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$message_icon_color = new QodeField(
	"colorsimple",
	"message_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"message_icon_color",
	$message_icon_color
);

$message_icon_fontsize = new QodeField(
	"textsimple",
	"message_icon_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"message_icon_fontsize",
	$message_icon_fontsize
);

//Pagination

$panel10 = new QodePanel(
	esc_html__( "Pagination", 'brick' ),
	"pagination_panel"
);
$elementsPage->addChild(
	"panel10",
	$panel10
);

$pagination_type = new QodeField(
	"select",
	"pagination_type",
	"",
	esc_html__( "Type", 'brick' ),
	esc_html__( "Choose pagination style", 'brick' ),
	array(
		"standard" => esc_html__( "Standard", 'brick' ),
		"arrows_on_sides" => esc_html__( "Arrows on Sides", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"standard"        => "",
			"arrows_on_sides" => "#qodef_pagination_standard_position_container"
		),
		"show"       => array(
			"standard"        => "#qodef_pagination_standard_position_container",
			"arrows_on_sides" => ""
		)
	)
);
$panel10->addChild(
	"pagination_type",
	$pagination_type
);

$pagination_standard_position_container = new QodeContainer(
	"pagination_standard_position_container",
	"pagination_type",
	"arrows_on_sides"
);
$panel10->addChild(
	"pagination_standard_position_container",
	$pagination_standard_position_container
);

$pagination_standard_position = new QodeField(
	"select",
	"pagination_standard_position",
	"",
	esc_html__( "Position", 'brick' ),
	esc_html__( "Choose position of pagination", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$pagination_standard_position_container->addChild(
	"pagination_standard_position",
	$pagination_standard_position
);

$group3 = new QodeGroup(
	esc_html__( "Navigation Style", 'brick' ),
	esc_html__( "Define Navigation styles", 'brick' )
);
$panel10->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$pagination_button_width = new QodeField(
	"textsimple",
	"pagination_button_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_button_width",
	$pagination_button_width
);

$pagination_button_height = new QodeField(
	"textsimple",
	"pagination_button_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_button_height",
	$pagination_button_height
);

$pagination_space_between_buttons = new QodeField(
	"textsimple",
	"pagination_space_between_buttons",
	"",
	esc_html__( "Space between buttons (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_space_between_buttons",
	$pagination_space_between_buttons
);

$pagination_button_background_color = new QodeField(
	"colorsimple",
	"pagination_button_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_button_background_color",
	$pagination_button_background_color
);

$row2 = new QodeRow();
$group3->addChild(
	"row2",
	$row2
);

$pagination_button_background_hover_color = new QodeField(
	"colorsimple",
	"pagination_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pagination_button_background_hover_color",
	$pagination_button_background_hover_color
);

$pagination_button_background_active_color = new QodeField(
	"colorsimple",
	"pagination_button_background_active_color",
	"",
	esc_html__( "Background Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pagination_button_background_active_color",
	$pagination_button_background_active_color
);

$pagination_button_border_color = new QodeField(
	"colorsimple",
	"pagination_button_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pagination_button_border_color",
	$pagination_button_border_color
);

$pagination_button_border_hover_color = new QodeField(
	"colorsimple",
	"pagination_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pagination_button_border_hover_color",
	$pagination_button_border_hover_color
);

$row3 = new QodeRow();
$group3->addChild(
	"row3",
	$row3
);

$pagination_button_border_active_color = new QodeField(
	"colorsimple",
	"pagination_button_border_active_color",
	"",
	esc_html__( "Border Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pagination_button_border_active_color",
	$pagination_button_border_active_color
);

$pagination_button_border_radius = new QodeField(
	"textsimple",
	"pagination_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pagination_button_border_radius",
	$pagination_button_border_radius
);

$pagination_button_border_width = new QodeField(
	"textsimple",
	"pagination_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pagination_button_border_width",
	$pagination_button_border_width
);

$group1 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text styles (this style will also be applied to Only Previous and Next type)", 'brick' )
);
$panel10->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$pagination_color = new QodeField(
	"colorsimple",
	"pagination_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_color",
	$pagination_color
);

$pagination_hover_color = new QodeField(
	"colorsimple",
	"pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_hover_color",
	$pagination_hover_color
);

$pagination_active_color = new QodeField(
	"colorsimple",
	"pagination_active_color",
	"",
	esc_html__( "Active Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_active_color",
	$pagination_active_color
);

$pagination_font_size = new QodeField(
	"textsimple",
	"pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_font_size",
	$pagination_font_size
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pagination_font_weight = new QodeField(
	"selectblanksimple",
	"pagination_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pagination_font_weight",
	$pagination_font_weight
);

$pagination_font_family = new QodeField(
	"fontsimple",
	"pagination_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pagination_font_family",
	$pagination_font_family
);

$pagination_font_style = new QodeField(
	"selectblanksimple",
	"pagination_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pagination_font_style",
	$pagination_font_style
);

$pagination_letter_spacing = new QodeField(
	"textsimple",
	"pagination_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pagination_letter_spacing",
	$pagination_letter_spacing
);

$group4 = new QodeGroup(
	esc_html__( "Icon Arrow Style", 'brick' ),
	esc_html__( "Define arrow styles (this style will also be applied to Only Previous and Next type)", 'brick' )
);
$panel10->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$pagination_arrow_size = new QodeField(
	"textsimple",
	"pagination_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pagination_arrow_size",
	$pagination_arrow_size
);

$pagination_arrows_type = new QodeField(
	"selectblanksimple",
	"pagination_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'brick' ),
	"",
	brick_qode_get_options_value_by_name('arrows_type')
);
$row1->addChild(
	"pagination_arrows_type",
	$pagination_arrows_type
);

$pagination_double_arrows_type = new QodeField(
	"selectblanksimple",
	"pagination_double_arrows_type",
	"",
	esc_html__( "First/Last Arrow Icon", 'brick' ),
	"",
	brick_qode_get_options_value_by_name('double_arrows_type')
);
$row1->addChild(
	"pagination_double_arrows_type",
	$pagination_double_arrows_type
);

$portfolio_pagination_section = new QodeTitle(
	"portfolio_pagination_section",
	esc_html__( "Portfolio Pagination", 'brick' )
);
$panel10->addChild(
	"portfolio_pagination_section",
	$portfolio_pagination_section
);

$group2 = new QodeGroup(
	esc_html__( "Portfolio Pagination Style", 'brick' ),
	esc_html__( "Define Pagination styles for portfolio single", 'brick' )
);
$panel10->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$portfolio_pagination_color = new QodeField(
	"colorsimple",
	"portfolio_pagination_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"portfolio_pagination_color",
	$portfolio_pagination_color
);

$portfolio_pagination_hover_color = new QodeField(
	"colorsimple",
	"portfolio_pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"portfolio_pagination_hover_color",
	$portfolio_pagination_hover_color
);

$portfolio_pagination_font_size = new QodeField(
	"textsimple",
	"portfolio_pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"portfolio_pagination_font_size",
	$portfolio_pagination_font_size
);

//Pie Charts

$panel11 = new QodePanel(
	esc_html__( "Pie Charts", 'brick' ),
	"pie_charts_panel"
);
$elementsPage->addChild(
	"panel11",
	$panel11
);

$pie_charts_margin_below_chart = new QodeField(
	"text",
	"pie_charts_margin_below_chart",
	"",
	esc_html__( "Margin Below Chart (px)", 'brick' ),
	esc_html__( "Set margin below pie chart", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel11->addChild(
	"pie_charts_margin_below_chart",
	$pie_charts_margin_below_chart
);

$group1 = new QodeGroup(
	esc_html__( "Pie Chart Percent Style", 'brick' ),
	esc_html__( "Define text style for Pie Charts percent number", 'brick' )
);
$panel11->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$pie_charts_fontsize = new QodeField(
	"textsimple",
	"pie_charts_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pie_charts_fontsize",
	$pie_charts_fontsize
);

$pie_charts_fontweight = new QodeField(
	"selectblanksimple",
	"pie_charts_fontweight",
	"",
	esc_html__( "Text Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"pie_charts_fontweight",
	$pie_charts_fontweight
);

//Pricing table

$panel12 = new QodePanel(
	esc_html__( "Pricing Table", 'brick' ),
	"pricing_table_panel"
);
$elementsPage->addChild(
	"panel12",
	$panel12
);

$group1 = new QodeGroup(
	esc_html__( "Pricing Tables Style", 'brick' ),
	esc_html__( "Define Pricing tables style", 'brick' )
);
$panel12->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$pricing_table_title_background_color = new QodeField(
	"colorsimple",
	"pricing_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_table_title_background_color",
	$pricing_table_title_background_color
);

$pricing_table_title_separator_color = new QodeField(
	"colorsimple",
	"pricing_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_table_title_separator_color",
	$pricing_table_title_separator_color
);

$pricing_table_title_separator_thickness = new QodeField(
	"textsimple",
	"pricing_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_table_title_separator_thickness",
	$pricing_table_title_separator_thickness
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pricing_table_title_top_padding = new QodeField(
	"textsimple",
	"pricing_table_title_top_padding",
	"",
	esc_html__( "Title Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_table_title_top_padding",
	$pricing_table_title_top_padding
);

$pricing_table_title_bottom_padding = new QodeField(
	"textsimple",
	"pricing_table_title_bottom_padding",
	"",
	esc_html__( "Title Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_table_title_bottom_padding",
	$pricing_table_title_bottom_padding
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$pricing_table_price_background_color = new QodeField(
	"colorsimple",
	"pricing_table_price_background_color",
	"",
	esc_html__( "Price Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_table_price_background_color",
	$pricing_table_price_background_color
);

$pricing_table_price_separator_color = new QodeField(
	"colorsimple",
	"pricing_table_price_separator_color",
	"",
	esc_html__( "Price Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_table_price_separator_color",
	$pricing_table_price_separator_color
);

$pricing_table_price_separator_thickness = new QodeField(
	"textsimple",
	"pricing_table_price_separator_thickness",
	"",
	esc_html__( "Price Separator Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_table_price_separator_thickness",
	$pricing_table_price_separator_thickness
);

$row4 = new QodeRow( true );
$group1->addChild(
	"row4",
	$row4
);

$pricing_table_price_top_padding = new QodeField(
	"textsimple",
	"pricing_table_price_top_padding",
	"",
	esc_html__( "Price Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"pricing_table_price_top_padding",
	$pricing_table_price_top_padding
);

$pricing_table_price_bottom_padding = new QodeField(
	"textsimple",
	"pricing_table_price_bottom_padding",
	"",
	esc_html__( "Price Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"pricing_table_price_bottom_padding",
	$pricing_table_price_bottom_padding
);

$row5 = new QodeRow( true );
$group1->addChild(
	"row5",
	$row5
);

$pricing_table_background_color = new QodeField(
	"colorsimple",
	"pricing_table_background_color",
	"",
	esc_html__( "Content Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"pricing_table_background_color",
	$pricing_table_background_color
);

$pricing_table_separator_color = new QodeField(
	"colorsimple",
	"pricing_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"pricing_table_separator_color",
	$pricing_table_separator_color
);

$pricing_table_separator_thickness = new QodeField(
	"textsimple",
	"pricing_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"pricing_table_separator_thickness",
	$pricing_table_separator_thickness
);

$row6 = new QodeRow( true );
$group1->addChild(
	"row6",
	$row6
);

$pricing_table_content_top_margin = new QodeField(
	"textsimple",
	"pricing_table_content_top_margin",
	"",
	esc_html__( "Content Top Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row6->addChild(
	"pricing_table_content_top_margin",
	$pricing_table_content_top_margin
);

$pricing_table_content_bottom_margin = new QodeField(
	"textsimple",
	"pricing_table_content_bottom_margin",
	"",
	esc_html__( "Content Bottom Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row6->addChild(
	"pricing_table_content_bottom_margin",
	$pricing_table_content_bottom_margin
);

$row7 = new QodeRow( true );
$group1->addChild(
	"row7",
	$row7
);

$pricing_table_button_holder_background_color = new QodeField(
	"colorsimple",
	"pricing_table_button_holder_background_color",
	"",
	esc_html__( "Button Holder Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row7->addChild(
	"pricing_table_button_holder_background_color",
	$pricing_table_button_holder_background_color
);

$pricing_table_button_top_padding = new QodeField(
	"textsimple",
	"pricing_table_button_top_padding",
	"",
	esc_html__( "Button Holder Padding Top(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row7->addChild(
	"pricing_table_button_top_padding",
	$pricing_table_button_top_padding
);

$pricing_table_button_bottom_padding = new QodeField(
	"textsimple",
	"pricing_table_button_bottom_padding",
	"",
	esc_html__( "Button Holder Padding Bottom(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row7->addChild(
	"pricing_table_button_bottom_padding",
	$pricing_table_button_bottom_padding
);

$group2 = new QodeGroup(
	esc_html__( "Pricing Tables Active Text", 'brick' ),
	esc_html__( "DefinePricing tables active text style.", 'brick' )
);
$panel12->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$pricing_tables_active_text_color = new QodeField(
	"colorsimple",
	"pricing_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_active_text_color",
	$pricing_tables_active_text_color
);

$pricing_tables_active_text_font_size = new QodeField(
	"textsimple",
	"pricing_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_active_text_font_size",
	$pricing_tables_active_text_font_size
);

$pricing_tables_active_text_line_height = new QodeField(
	"textsimple",
	"pricing_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_active_text_line_height",
	$pricing_tables_active_text_line_height
);

$pricing_tables_active_text_text_transform = new QodeField(
	"selectblanksimple",
	"pricing_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_tables_active_text_text_transform",
	$pricing_tables_active_text_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$pricing_tables_active_text_font_family = new QodeField(
	"fontsimple",
	"pricing_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_active_text_font_family",
	$pricing_tables_active_text_font_family
);

$pricing_tables_active_text_font_style = new QodeField(
	"selectblanksimple",
	"pricing_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_tables_active_text_font_style",
	$pricing_tables_active_text_font_style
);

$pricing_tables_active_text_font_weight = new QodeField(
	"selectblanksimple",
	"pricing_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_tables_active_text_font_weight",
	$pricing_tables_active_text_font_weight
);

$pricing_tables_active_text_letter_spacing = new QodeField(
	"textsimple",
	"pricing_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_active_text_letter_spacing",
	$pricing_tables_active_text_letter_spacing
);

$group3 = new QodeGroup(
	esc_html__( "Pricing Tables Title", 'brick' ),
	esc_html__( "Define Pricing tables title style", 'brick' )
);
$panel12->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$pricing_tables_title_color = new QodeField(
	"colorsimple",
	"pricing_tables_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_title_color",
	$pricing_tables_title_color
);

$pricing_tables_title_font_size = new QodeField(
	"textsimple",
	"pricing_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_title_font_size",
	$pricing_tables_title_font_size
);

$pricing_tables_title_line_height = new QodeField(
	"textsimple",
	"pricing_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_title_line_height",
	$pricing_tables_title_line_height
);

$pricing_tables_title_text_transform = new QodeField(
	"selectblanksimple",
	"pricing_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_tables_title_text_transform",
	$pricing_tables_title_text_transform
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$pricing_tables_title_font_family = new QodeField(
	"fontsimple",
	"pricing_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_title_font_family",
	$pricing_tables_title_font_family
);

$pricing_tables_title_font_style = new QodeField(
	"selectblanksimple",
	"pricing_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_tables_title_font_style",
	$pricing_tables_title_font_style
);

$pricing_tables_title_font_weight = new QodeField(
	"selectblanksimple",
	"pricing_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_tables_title_font_weight",
	$pricing_tables_title_font_weight
);

$pricing_tables_title_letter_spacing = new QodeField(
	"textsimple",
	"pricing_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_title_letter_spacing",
	$pricing_tables_title_letter_spacing
);

$group4 = new QodeGroup(
	esc_html__( "Pricing Tables Period", 'brick' ),
	esc_html__( "DefinePricing tables period style", 'brick' )
);
$panel12->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_tables_period_color = new QodeField(
	"colorsimple",
	"pricing_tables_period_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_period_color",
	$pricing_tables_period_color
);

$pricing_tables_period_font_size = new QodeField(
	"textsimple",
	"pricing_tables_period_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_period_font_size",
	$pricing_tables_period_font_size
);

$pricing_tables_period_line_height = new QodeField(
	"textsimple",
	"pricing_tables_period_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_period_line_height",
	$pricing_tables_period_line_height
);

$pricing_tables_period_text_transform = new QodeField(
	"selectblanksimple",
	"pricing_tables_period_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_tables_period_text_transform",
	$pricing_tables_period_text_transform
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_tables_period_font_family = new QodeField(
	"fontsimple",
	"pricing_tables_period_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_period_font_family",
	$pricing_tables_period_font_family
);

$pricing_tables_period_font_style = new QodeField(
	"selectblanksimple",
	"pricing_tables_period_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_tables_period_font_style",
	$pricing_tables_period_font_style
);

$pricing_tables_period_font_weight = new QodeField(
	"selectblanksimple",
	"pricing_tables_period_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_tables_period_font_weight",
	$pricing_tables_period_font_weight
);

$pricing_tables_period_letter_spacing = new QodeField(
	"textsimple",
	"pricing_tables_period_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_period_letter_spacing",
	$pricing_tables_period_letter_spacing
);

$group5 = new QodeGroup(
	esc_html__( "Pricing Tables Price", 'brick' ),
	esc_html__( "Define Pricing Tables price style", 'brick' )
);
$panel12->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_tables_price_color = new QodeField(
	"colorsimple",
	"pricing_tables_price_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_price_color",
	$pricing_tables_price_color
);

$pricing_tables_price_font_size = new QodeField(
	"textsimple",
	"pricing_tables_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_price_font_size",
	$pricing_tables_price_font_size
);

$pricing_tables_price_line_height = new QodeField(
	"textsimple",
	"pricing_tables_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_price_line_height",
	$pricing_tables_price_line_height
);

$pricing_tables_price_text_transform = new QodeField(
	"selectblanksimple",
	"pricing_tables_price_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_tables_price_text_transform",
	$pricing_tables_price_text_transform
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$pricing_tables_price_font_family = new QodeField(
	"fontsimple",
	"pricing_tables_price_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_price_font_family",
	$pricing_tables_price_font_family
);

$pricing_tables_price_font_style = new QodeField(
	"selectblanksimple",
	"pricing_tables_price_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_tables_price_font_style",
	$pricing_tables_price_font_style
);

$pricing_tables_price_font_weight = new QodeField(
	"selectblanksimple",
	"pricing_tables_price_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_tables_price_font_weight",
	$pricing_tables_price_font_weight
);

$pricing_tables_price_letter_spacing = new QodeField(
	"textsimple",
	"pricing_tables_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_price_letter_spacing",
	$pricing_tables_price_letter_spacing
);

$group6 = new QodeGroup(
	esc_html__( "Pricing Tables Currency", 'brick' ),
	esc_html__( "Define Pricing tables currency style.", 'brick' )
);
$panel12->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$pricing_tables_currency_color = new QodeField(
	"colorsimple",
	"pricing_tables_currency_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_currency_color",
	$pricing_tables_currency_color
);

$pricing_tables_currency_font_size = new QodeField(
	"textsimple",
	"pricing_tables_currency_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_currency_font_size",
	$pricing_tables_currency_font_size
);

$pricing_tables_currency_line_height = new QodeField(
	"textsimple",
	"pricing_tables_currency_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_currency_line_height",
	$pricing_tables_currency_line_height
);

$pricing_tables_currency_text_transform = new QodeField(
	"selectblanksimple",
	"pricing_tables_currency_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_tables_currency_text_transform",
	$pricing_tables_currency_text_transform
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$pricing_tables_currency_font_family = new QodeField(
	"fontsimple",
	"pricing_tables_currency_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_currency_font_family",
	$pricing_tables_currency_font_family
);

$pricing_tables_currency_font_style = new QodeField(
	"selectblanksimple",
	"pricing_tables_currency_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_tables_currency_font_style",
	$pricing_tables_currency_font_style
);

$pricing_tables_currency_font_weight = new QodeField(
	"selectblanksimple",
	"pricing_tables_currency_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_tables_currency_font_weight",
	$pricing_tables_currency_font_weight
);

$pricing_tables_currency_letter_spacing = new QodeField(
	"textsimple",
	"pricing_tables_currency_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_currency_letter_spacing",
	$pricing_tables_currency_letter_spacing
);

$group7 = new QodeGroup(
	esc_html__( "Pricing Tables Button", 'brick' ),
	esc_html__( "Define Pricing Tables button style.", 'brick' )
);
$panel12->addChild(
	"group7",
	$group7
);

$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);

$pricing_tables_button_color = new QodeField(
	"colorsimple",
	"pricing_tables_button_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_button_color",
	$pricing_tables_button_color
);

$pricing_tables_button_font_size = new QodeField(
	"textsimple",
	"pricing_tables_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_button_font_size",
	$pricing_tables_button_font_size
);

$pricing_tables_button_line_height = new QodeField(
	"textsimple",
	"pricing_tables_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_button_line_height",
	$pricing_tables_button_line_height
);

$pricing_tables_button_text_transform = new QodeField(
	"selectblanksimple",
	"pricing_tables_button_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_tables_button_text_transform",
	$pricing_tables_button_text_transform
);

$row2 = new QodeRow( true );
$group7->addChild(
	"row2",
	$row2
);

$pricing_tables_button_font_family = new QodeField(
	"fontsimple",
	"pricing_tables_button_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_button_font_family",
	$pricing_tables_button_font_family
);

$pricing_tables_button_font_style = new QodeField(
	"selectblanksimple",
	"pricing_tables_button_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_tables_button_font_style",
	$pricing_tables_button_font_style
);

$pricing_tables_button_font_weight = new QodeField(
	"selectblanksimple",
	"pricing_tables_button_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_tables_button_font_weight",
	$pricing_tables_button_font_weight
);

$pricing_tables_button_letter_spacing = new QodeField(
	"textsimple",
	"pricing_tables_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_button_letter_spacing",
	$pricing_tables_button_letter_spacing
);

$row3 = new QodeRow( true );
$group7->addChild(
	"row3",
	$row3
);
$pricing_tables_button_hovercolor = new QodeField(
	"colorsimple",
	"pricing_tables_button_hovercolor",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_tables_button_hovercolor",
	$pricing_tables_button_hovercolor
);

$pricing_tables_button_backgroundcolor = new QodeField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor",
	$pricing_tables_button_backgroundcolor
);

$pricing_tables_button_backgroundcolor_hover = new QodeField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor_hover",
	$pricing_tables_button_backgroundcolor_hover
);

$row4 = new QodeRow( true );
$group7->addChild(
	"row4",
	$row4
);

$pricing_tables_button_border_width = new QodeField(
	"textsimple",
	"pricing_tables_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"pricing_tables_button_border_width",
	$pricing_tables_button_border_width
);

$pricing_tables_button_border_radius = new QodeField(
	"textsimple",
	"pricing_tables_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"pricing_tables_button_border_radius",
	$pricing_tables_button_border_radius
);

$pricing_tables_button_border_color = new QodeField(
	"colorsimple",
	"pricing_tables_button_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"pricing_tables_button_border_color",
	$pricing_tables_button_border_color
);

$pricing_tables_button_border_hover_color = new QodeField(
	"colorsimple",
	"pricing_tables_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"pricing_tables_button_border_hover_color",
	$pricing_tables_button_border_hover_color
);

$group9 = new QodeGroup(
	esc_html__( "Pricing Tables Button Padding", 'brick' ),
	esc_html__( "Define Pricing Tables button padding (Takes effect only when pricing table button is set to size normal)", 'brick' )
);
$panel12->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow( true );
$group9->addChild(
	"row1",
	$row1
);

$pricing_table_button_left_padding = new QodeField(
	"textsimple",
	"pricing_table_button_left_padding",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_table_button_left_padding",
	$pricing_table_button_left_padding
);

$pricing_table_button_right_padding = new QodeField(
	"textsimple",
	"pricing_table_button_right_padding",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_table_button_right_padding",
	$pricing_table_button_right_padding
);

$group8 = new QodeGroup(
	esc_html__( "Pricing Tables Content", 'brick' ),
	esc_html__( "Define Pricing Tables content style", 'brick' )
);
$panel12->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$pricing_tables_content_color = new QodeField(
	"colorsimple",
	"pricing_tables_content_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_content_color",
	$pricing_tables_content_color
);

$pricing_tables_content_font_size = new QodeField(
	"textsimple",
	"pricing_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_content_font_size",
	$pricing_tables_content_font_size
);

$pricing_tables_content_line_height = new QodeField(
	"textsimple",
	"pricing_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_tables_content_line_height",
	$pricing_tables_content_line_height
);

$pricing_tables_content_text_transform = new QodeField(
	"selectblanksimple",
	"pricing_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_tables_content_text_transform",
	$pricing_tables_content_text_transform
);

$row2 = new QodeRow( true );
$group8->addChild(
	"row2",
	$row2
);

$pricing_tables_content_font_family = new QodeField(
	"fontsimple",
	"pricing_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_content_font_family",
	$pricing_tables_content_font_family
);

$pricing_tables_content_font_style = new QodeField(
	"selectblanksimple",
	"pricing_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_tables_content_font_style",
	$pricing_tables_content_font_style
);

$pricing_tables_content_font_weight = new QodeField(
	"selectblanksimple",
	"pricing_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_tables_content_font_weight",
	$pricing_tables_content_font_weight
);

$pricing_tables_content_letter_spacing = new QodeField(
	"textsimple",
	"pricing_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_tables_content_letter_spacing",
	$pricing_tables_content_letter_spacing
);

$row3 = new QodeRow( true );
$group8->addChild(
	"row3",
	$row3
);

$pricing_table_content_top_padding = new QodeField(
	"textsimple",
	"pricing_table_content_top_padding",
	"",
	esc_html__( "Content Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_table_content_top_padding",
	$pricing_table_content_top_padding
);

$pricing_table_content_bottom_padding = new QodeField(
	"textsimple",
	"pricing_table_content_bottom_padding",
	"",
	esc_html__( "Content Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_table_content_bottom_padding",
	$pricing_table_content_bottom_padding
);

//Pricing List Items

$panel27 = new QodePanel(
	esc_html__( "Pricing List Items", 'brick' ),
	"pricing_list_item_panel"
);
$elementsPage->addChild(
	"panel27",
	$panel27
);
$group5 = new QodeGroup(
	esc_html__( "Title Style", 'brick' ),
	esc_html__( "Choose title style for pricing list", 'brick' )
);
$panel27->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_list_title_color = new QodeField(
	"colorsimple",
	"pricing_list_title_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_title_color",
	$pricing_list_title_color
);

$pricing_list_title_fontsize = new QodeField(
	"textsimple",
	"pricing_list_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_title_fontsize",
	$pricing_list_title_fontsize
);

$pricing_list_title_lineheight = new QodeField(
	"textsimple",
	"pricing_list_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_title_lineheight",
	$pricing_list_title_lineheight
);

$pricing_list_title_texttransform = new QodeField(
	"selectblanksimple",
	"pricing_list_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_list_title_texttransform",
	$pricing_list_title_texttransform
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);
$pricing_list_title_google_fonts = new QodeField(
	"fontsimple",
	"pricing_list_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_list_title_google_fonts",
	$pricing_list_title_google_fonts
);

$pricing_list_title_fontstyle = new QodeField(
	"selectblanksimple",
	"pricing_list_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_list_title_fontstyle",
	$pricing_list_title_fontstyle
);

$pricing_list_title_fontweight = new QodeField(
	"selectblanksimple",
	"pricing_list_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_list_title_fontweight",
	$pricing_list_title_fontweight
);

$pricing_list_title_letterspacing = new QodeField(
	"textsimple",
	"pricing_list_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_list_title_letterspacing",
	$pricing_list_title_letterspacing
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$pricing_list_title_margin_bottom = new QodeField(
	"textsimple",
	"pricing_list_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"pricing_list_title_margin_bottom",
	$pricing_list_title_margin_bottom
);

$highlighted_item_section = new QodeTitle(
	"highlighted_item_section",
	esc_html__( "Highlighted Item", 'brick' )
);
$panel27->addChild(
	"highlighted_item_section",
	$highlighted_item_section
);

$group1 = new QodeGroup(
	esc_html__( "Background Style", 'brick' ),
	esc_html__( "Choose background & border color for highlighted item", 'brick' )
);
$panel27->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$pricing_list_highlighted_background_color = new QodeField(
	"colorsimple",
	"pricing_list_highlighted_background_color",
	"",
	esc_html__( "Background & Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_highlighted_background_color",
	$pricing_list_highlighted_background_color
);

$group2 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style for highlighted item", 'brick' )
);
$panel27->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$pricing_list_highlighted_text_color = new QodeField(
	"colorsimple",
	"pricing_list_highlighted_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_highlighted_text_color",
	$pricing_list_highlighted_text_color
);
$pricing_list_highlighted_text_fontsize = new QodeField(
	"textsimple",
	"pricing_list_highlighted_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_highlighted_text_fontsize",
	$pricing_list_highlighted_text_fontsize
);
$pricing_list_highlighted_text_lineheight = new QodeField(
	"textsimple",
	"pricing_list_highlighted_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_highlighted_text_lineheight",
	$pricing_list_highlighted_text_lineheight
);
$pricing_list_highlighted_text_texttransform = new QodeField(
	"selectblanksimple",
	"pricing_list_highlighted_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_list_highlighted_text_texttransform",
	$pricing_list_highlighted_text_texttransform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$pricing_list_highlighted_text_google_fonts = new QodeField(
	"fontsimple",
	"pricing_list_highlighted_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_list_highlighted_text_google_fonts",
	$pricing_list_highlighted_text_google_fonts
);
$pricing_list_highlighted_text_fontstyle = new QodeField(
	"selectblanksimple",
	"pricing_list_highlighted_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_list_highlighted_text_fontstyle",
	$pricing_list_highlighted_text_fontstyle
);
$pricing_list_highlighted_text_fontweight = new QodeField(
	"selectblanksimple",
	"pricing_list_highlighted_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_list_highlighted_text_fontweight",
	$pricing_list_highlighted_text_fontweight
);
$pricing_list_highlighted_text_letterspacing = new QodeField(
	"textsimple",
	"pricing_list_highlighted_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_list_highlighted_text_letterspacing",
	$pricing_list_highlighted_text_letterspacing
);

$new_item_section = new QodeTitle(
	"new_item_section",
	esc_html__( "New Item", 'brick' )
);
$panel27->addChild(
	"new_item_section",
	$new_item_section
);

$group3 = new QodeGroup(
	esc_html__( "Icon Style", 'brick' ),
	esc_html__( "Choose icon style for new item", 'brick' )
);
$panel27->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);
$pricing_list_new_background_color = new QodeField(
	"colorsimple",
	"pricing_list_new_background_color",
	"",
	esc_html__( "Icon Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_new_background_color",
	$pricing_list_new_background_color
);
$pricing_list_new_icon_size = new QodeField(
	"textsimple",
	"pricing_list_new_icon_size",
	"",
	esc_html__( "Icon Size", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_new_icon_size",
	$pricing_list_new_icon_size
);

$group4 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style for new item", 'brick' )
);
$panel27->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_list_new_text_color = new QodeField(
	"colorsimple",
	"pricing_list_new_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_new_text_color",
	$pricing_list_new_text_color
);
$pricing_list_new_text_fontsize = new QodeField(
	"textsimple",
	"pricing_list_new_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_new_text_fontsize",
	$pricing_list_new_text_fontsize
);
$pricing_list_new_text_lineheight = new QodeField(
	"textsimple",
	"pricing_list_new_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"pricing_list_new_text_lineheight",
	$pricing_list_new_text_lineheight
);
$pricing_list_new_text_texttransform = new QodeField(
	"selectblanksimple",
	"pricing_list_new_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"pricing_list_new_text_texttransform",
	$pricing_list_new_text_texttransform
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_list_new_text_google_fonts = new QodeField(
	"fontsimple",
	"pricing_list_new_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_list_new_text_google_fonts",
	$pricing_list_new_text_google_fonts
);
$pricing_list_new_text_fontstyle = new QodeField(
	"selectblanksimple",
	"pricing_list_new_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"pricing_list_new_text_fontstyle",
	$pricing_list_new_text_fontstyle
);
$pricing_list_new_text_fontweight = new QodeField(
	"selectblanksimple",
	"pricing_list_new_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"pricing_list_new_text_fontweight",
	$pricing_list_new_text_fontweight
);
$pricing_list_new_text_letterspacing = new QodeField(
	"textsimple",
	"pricing_list_new_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"pricing_list_new_text_letterspacing",
	$pricing_list_new_text_letterspacing
);

//Service table

$panel22 = new QodePanel(
	esc_html__( "Service Table", 'brick' ),
	"service_table_panel"
);
$elementsPage->addChild(
	"panel22",
	$panel22
);

$group1 = new QodeGroup(
	esc_html__( "Service Tables Style", 'brick' ),
	esc_html__( "Define Service tables style", 'brick' )
);
$panel22->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$service_table_title_background_color = new QodeField(
	"colorsimple",
	"service_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_table_title_background_color",
	$service_table_title_background_color
);

$service_table_title_separator_color = new QodeField(
	"colorsimple",
	"service_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_table_title_separator_color",
	$service_table_title_separator_color
);

$service_table_title_separator_thickness = new QodeField(
	"textsimple",
	"service_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_table_title_separator_thickness",
	$service_table_title_separator_thickness
);

$row2 = new QodeRow();
$group1->addChild(
	"row2",
	$row2
);

$service_table_title_padding_top = new QodeField(
	"textsimple",
	"service_table_title_padding_top",
	"",
	esc_html__( "Title Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_table_title_padding_top",
	$service_table_title_padding_top
);

$service_table_title_padding_bottom = new QodeField(
	"textsimple",
	"service_table_title_padding_bottom",
	"",
	esc_html__( "Title Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_table_title_padding_bottom",
	$service_table_title_padding_bottom
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$service_table_background_color = new QodeField(
	"colorsimple",
	"service_table_background_color",
	"",
	esc_html__( "Content Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"service_table_background_color",
	$service_table_background_color
);

$service_table_separator_color = new QodeField(
	"colorsimple",
	"service_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"service_table_separator_color",
	$service_table_separator_color
);

$service_table_separator_thickness = new QodeField(
	"textsimple",
	"service_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"service_table_separator_thickness",
	$service_table_separator_thickness
);

$row4 = new QodeRow();
$group1->addChild(
	"row4",
	$row4
);

$service_table_content_padding_top = new QodeField(
	"textsimple",
	"service_table_content_padding_top",
	"",
	esc_html__( "Content Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"service_table_content_padding_top",
	$service_table_content_padding_top
);

$service_table_content_padding_bottom = new QodeField(
	"textsimple",
	"service_table_content_padding_bottom",
	"",
	esc_html__( "Content Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"service_table_content_padding_bottom",
	$service_table_content_padding_bottom
);

$group2 = new QodeGroup(
	esc_html__( "Service Tables Active Text", 'brick' ),
	esc_html__( "DefineService tables active text style.", 'brick' )
);
$panel22->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$service_tables_active_text_color = new QodeField(
	"colorsimple",
	"service_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_active_text_color",
	$service_tables_active_text_color
);

$service_tables_active_text_font_size = new QodeField(
	"textsimple",
	"service_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_active_text_font_size",
	$service_tables_active_text_font_size
);

$service_tables_active_text_line_height = new QodeField(
	"textsimple",
	"service_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_active_text_line_height",
	$service_tables_active_text_line_height
);

$service_tables_active_text_text_transform = new QodeField(
	"selectblanksimple",
	"service_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"service_tables_active_text_text_transform",
	$service_tables_active_text_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$service_tables_active_text_font_family = new QodeField(
	"fontsimple",
	"service_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_tables_active_text_font_family",
	$service_tables_active_text_font_family
);

$service_tables_active_text_font_style = new QodeField(
	"selectblanksimple",
	"service_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"service_tables_active_text_font_style",
	$service_tables_active_text_font_style
);

$service_tables_active_text_font_weight = new QodeField(
	"selectblanksimple",
	"service_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"service_tables_active_text_font_weight",
	$service_tables_active_text_font_weight
);

$service_tables_active_text_letter_spacing = new QodeField(
	"textsimple",
	"service_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_tables_active_text_letter_spacing",
	$service_tables_active_text_letter_spacing
);

$group3 = new QodeGroup(
	esc_html__( "Service Tables Title", 'brick' ),
	esc_html__( "Define Service tables title style", 'brick' )
);
$panel22->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$service_tables_title_color = new QodeField(
	"colorsimple",
	"service_tables_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_title_color",
	$service_tables_title_color
);

$service_tables_title_font_size = new QodeField(
	"textsimple",
	"service_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_title_font_size",
	$service_tables_title_font_size
);

$service_tables_title_line_height = new QodeField(
	"textsimple",
	"service_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_title_line_height",
	$service_tables_title_line_height
);

$service_tables_title_text_transform = new QodeField(
	"selectblanksimple",
	"service_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"service_tables_title_text_transform",
	$service_tables_title_text_transform
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$service_tables_title_font_family = new QodeField(
	"fontsimple",
	"service_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_tables_title_font_family",
	$service_tables_title_font_family
);

$service_tables_title_font_style = new QodeField(
	"selectblanksimple",
	"service_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"service_tables_title_font_style",
	$service_tables_title_font_style
);

$service_tables_title_font_weight = new QodeField(
	"selectblanksimple",
	"service_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"service_tables_title_font_weight",
	$service_tables_title_font_weight
);

$service_tables_title_letter_spacing = new QodeField(
	"textsimple",
	"service_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_tables_title_letter_spacing",
	$service_tables_title_letter_spacing
);

$group4 = new QodeGroup(
	esc_html__( "Service Tables Content", 'brick' ),
	esc_html__( "Define Service tables content style", 'brick' )
);
$panel22->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$service_tables_content_color = new QodeField(
	"colorsimple",
	"service_tables_content_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_content_color",
	$service_tables_content_color
);

$service_tables_content_font_size = new QodeField(
	"textsimple",
	"service_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_content_font_size",
	$service_tables_content_font_size
);

$service_tables_content_line_height = new QodeField(
	"textsimple",
	"service_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"service_tables_content_line_height",
	$service_tables_content_line_height
);

$service_tables_content_text_transform = new QodeField(
	"selectblanksimple",
	"service_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"service_tables_content_text_transform",
	$service_tables_content_text_transform
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$service_tables_content_font_family = new QodeField(
	"fontsimple",
	"service_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_tables_content_font_family",
	$service_tables_content_font_family
);

$service_tables_content_font_style = new QodeField(
	"selectblanksimple",
	"service_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"service_tables_content_font_style",
	$service_tables_content_font_style
);

$service_tables_content_font_weight = new QodeField(
	"selectblanksimple",
	"service_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"service_tables_content_font_weight",
	$service_tables_content_font_weight
);

$service_tables_content_letter_spacing = new QodeField(
	"textsimple",
	"service_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"service_tables_content_letter_spacing",
	$service_tables_content_letter_spacing
);

//Separators

$panel13 = new QodePanel(
	esc_html__( "Separators", 'brick' ),
	"separators_panel"
);
$elementsPage->addChild(
	"panel13",
	$panel13
);

$group1 = new QodeGroup(
	esc_html__( "Normal", 'brick' ),
	esc_html__( 'Define styles for separator of type "Normal"', 'brick' )
);
$panel13->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$separator_color = new QodeField(
	"colorsimple",
	"separator_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separator_color",
	$separator_color
);

$separator_thickness = new QodeField(
	"textsimple",
	"separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separator_thickness",
	$separator_thickness
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separator_topmargin = new QodeField(
	"textsimple",
	"separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"separator_topmargin",
	$separator_topmargin
);

$separator_bottommargin = new QodeField(
	"textsimple",
	"separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"separator_bottommargin",
	$separator_bottommargin
);

$separator_type = new QodeField(
	"selectblanksimple",
	"separator_type",
	"",
	esc_html__( "Separator type", 'brick' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' )
	)
);
$row2->addChild(
	"separator_type",
	$separator_type
);

$group2 = new QodeGroup(
	esc_html__( "Small", 'brick' ),
	esc_html__( 'Define styles for separator of type "Small"', 'brick' )
);
$panel13->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$separator_small_color = new QodeField(
	"colorsimple",
	"separator_small_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separator_small_color",
	$separator_small_color
);

$separator_small_thickness = new QodeField(
	"textsimple",
	"separator_small_thickness",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separator_small_thickness",
	$separator_small_thickness
);

$separator_small_width = new QodeField(
	"textsimple",
	"separator_small_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separator_small_width",
	$separator_small_width
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$separator_small_topmargin = new QodeField(
	"textsimple",
	"separator_small_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"separator_small_topmargin",
	$separator_small_topmargin
);

$separator_small_bottommargin = new QodeField(
	"textsimple",
	"separator_small_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"separator_small_bottommargin",
	$separator_small_bottommargin
);

$separator_small_type = new QodeField(
	"selectsimple",
	"separator_small_type",
	"",
	esc_html__( "Separator type", 'brick' ),
	"",
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' )
	)
);
$row2->addChild(
	"separator_small_type",
	$separator_small_type
);

//Separators with text

$panel23 = new QodePanel(
	esc_html__( "Separators with Text", 'brick' ),
	"separators_with_text_panel"
);
$elementsPage->addChild(
	"panel23",
	$panel23
);

$group1 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( 'Define text styles for separator with text', 'brick' )
);
$panel23->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$separators_with_text_text_color = new QodeField(
	"colorsimple",
	"separators_with_text_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separators_with_text_text_color",
	$separators_with_text_text_color
);

$separators_with_text_text_hover_color = new QodeField(
	"colorsimple",
	"separators_with_text_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separators_with_text_text_hover_color",
	$separators_with_text_text_hover_color
);

$separators_with_text_text_fontsize = new QodeField(
	"textsimple",
	"separators_with_text_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separators_with_text_text_fontsize",
	$separators_with_text_text_fontsize
);

$separators_with_text_text_lineheight = new QodeField(
	"textsimple",
	"separators_with_text_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"separators_with_text_text_lineheight",
	$separators_with_text_text_lineheight
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separators_with_text_text_texttransform = new QodeField(
	"selectblanksimple",
	"separators_with_text_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"separators_with_text_text_texttransform",
	$separators_with_text_text_texttransform
);

$separators_with_text_text_google_fonts = new QodeField(
	"fontsimple",
	"separators_with_text_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"separators_with_text_text_google_fonts",
	$separators_with_text_text_google_fonts
);

$separators_with_text_text_fontstyle = new QodeField(
	"selectblanksimple",
	"separators_with_text_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"separators_with_text_text_fontstyle",
	$separators_with_text_text_fontstyle
);

$separators_with_text_text_fontweight = new QodeField(
	"selectblanksimple",
	"separators_with_text_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"separators_with_text_text_fontweight",
	$separators_with_text_text_fontweight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$separators_with_text_text_letterspacing = new QodeField(
	"textsimple",
	"separators_with_text_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"separators_with_text_text_letterspacing",
	$separators_with_text_text_letterspacing
);

$panel24 = new QodePanel(
	esc_html__( "Single Image", 'brick' ),
	"single_image_panel"
);
$elementsPage->addChild(
	"panel24",
	$panel24
);

$group1 = new QodeGroup(
	esc_html__( "Hover Style", 'brick' ),
	esc_html__( "Define hover style", 'brick' )
);
$panel24->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$single_image_hover_color = new QodeField(
	"colorsimple",
	"single_image_hover_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_image_hover_color",
	$single_image_hover_color
);

$single_image_hover_transparency = new QodeField(
	"textsimple",
	"single_image_hover_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_image_hover_transparency",
	$single_image_hover_transparency
);

//Slider Navigation Interface

$panel9 = new QodePanel(
	esc_html__( "Slider Navigation Interface", 'brick' ),
	"navigation_panel"
);
$elementsPage->addChild(
	"panel9",
	$panel9
);

$navigation_slider_horizontal_section = new QodeTitle(
	"navigation_slider_horizontal_section",
	esc_html__( "Select Slider", 'brick' )
);
$panel9->addChild(
	"navigation_slider_horizontal_section",
	$navigation_slider_horizontal_section
);

$group1 = new QodeGroup(
	esc_html__( "Navigation Button Size", 'brick' ),
	esc_html__( "Define navigation button size", 'brick' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$navigation_button_width = new QodeField(
	"textsimple",
	"navigation_button_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_button_width",
	$navigation_button_width
);

$navigation_button_height = new QodeField(
	"textsimple",
	"navigation_button_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_button_height",
	$navigation_button_height
);

$group9 = new QodeGroup(
	esc_html__( "Navigation Button Position", 'brick' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'brick' )
);
$panel9->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_position = new QodeField(
	"textsimple",
	"navigation_button_position",
	"",
	esc_html__( "Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_button_position",
	$navigation_button_position
);

$group2 = new QodeGroup(
	esc_html__( "Icon Arrow Style", 'brick' ),
	esc_html__( "Define arrow navigation style", 'brick' )
);
$panel9->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$navigation_arrow_size = new QodeField(
	"textsimple",
	"navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'brick' ),
	esc_html__( "Default value is 14    ", 'brick' )
);
$row1->addChild(
	"navigation_arrow_size",
	$navigation_arrow_size
);

$navigation_arrows_type = new QodeField(
	"selectblanksimple",
	"navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'brick' ),
	"",
	brick_qode_get_options_value_by_name('arrows_type')
);
$row1->addChild(
	"navigation_arrows_type",
	$navigation_arrows_type
);

$navigation_arrow_color = new QodeField(
	"colorsimple",
	"navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_arrow_color",
	$navigation_arrow_color
);

$navigation_arrow_transparency = new QodeField(
	"textsimple",
	"navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_arrow_transparency",
	$navigation_arrow_transparency
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$navigation_arrow_hover_color = new QodeField(
	"colorsimple",
	"navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"navigation_arrow_hover_color",
	$navigation_arrow_hover_color
);

$navigation_arrow_hover_transparency = new QodeField(
	"textsimple",
	"navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"navigation_arrow_hover_transparency",
	$navigation_arrow_hover_transparency
);

$navigation_number_group = new QodeGroup(
	esc_html__( 'Navigation Numbers Style', 'brick' ),
	esc_html__( 'Define navigation numbers style', 'brick' )
);
$panel9->addChild(
	'navigation_number_group',
	$navigation_number_group
);

$row1 = new QodeRow();
$navigation_number_group->addChild(
	'row1',
	$row1
);

$navigation_number_font_size = new QodeField(
	'textsimple',
	'navigation_number_font_size',
	'',
	esc_html__( 'Font Size (px)', 'brick' ),
	''
);
$row1->addChild(
	'navigation_number_font_size',
	$navigation_number_font_size
);

$navigation_number_letter_spacing = new QodeField(
	'textsimple',
	'navigation_number_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'brick' ),
	''
);
$row1->addChild(
	'navigation_number_letter_spacing',
	$navigation_number_letter_spacing
);

$navigation_number_line_height = new QodeField(
	'textsimple',
	'navigation_number_line_height',
	'',
	esc_html__( 'Line Height', 'brick' ),
	''
);
$row1->addChild(
	'navigation_number_line_height',
	$navigation_number_line_height
);

$navigation_number_font_font_family = new QodeField(
	'fontsimple',
	'navigation_number_font_font_family',
	'-1',
	esc_html__( 'Font Family', 'brick' ),
	''
);
$row1->addChild(
	'navigation_number_font_font_family',
	$navigation_number_font_font_family
);

$row2 = new QodeRow( true );
$navigation_number_group->addChild(
	'row2',
	$row2
);

$navigation_number_font_style = new QodeField(
	'selectsimple',
	'navigation_number_font_style',
	'',
	esc_html__( 'Font Style', 'brick' ),
	'',
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	'navigation_number_font_style',
	$navigation_number_font_style
);

$navigation_number_font_weight = new QodeField(
	'selectsimple',
	'navigation_number_font_weight',
	'',
	esc_html__( 'Font Weight', 'brick' ),
	'',
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	'navigation_number_font_weight',
	$navigation_number_font_weight
);

$row3 = new QodeRow( true );
$navigation_number_group->addChild(
	'row3',
	$row3
);

$navigation_number_color = new QodeField(
	'colorsimple',
	'navigation_number_color',
	'',
	esc_html__( 'Color', 'brick' ),
	''
);
$row3->addChild(
	'navigation_number_color',
	$navigation_number_color
);

$navigation_number_hover_color = new QodeField(
	'colorsimple',
	'navigation_number_hover_color',
	'',
	esc_html__( 'Hover Color', 'brick' ),
	''
);
$row3->addChild(
	'navigation_number_hover_color',
	$navigation_number_hover_color
);

$navigation_number_transparency = new QodeField(
	'textsimple',
	'navigation_number_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'brick' ),
	''
);
$row3->addChild(
	'navigation_number_transparency',
	$navigation_number_transparency
);

$navigation_number_hover_transparency = new QodeField(
	'textsimple',
	'navigation_number_hover_transparency',
	'',
	esc_html__( 'Hover Transparency (0=full - 1=opaque)', 'brick' ),
	''
);
$row3->addChild(
	'navigation_number_hover_transparency',
	$navigation_number_hover_transparency
);

$group3 = new QodeGroup(
	esc_html__( "Navigation Button Background", 'brick' ),
	esc_html__( "Define navigation button background", 'brick' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$navigation_background_color = new QodeField(
	"colorsimple",
	"navigation_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_background_color",
	$navigation_background_color
);

$navigation_background_transparency = new QodeField(
	"textsimple",
	"navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_background_transparency",
	$navigation_background_transparency
);

$navigation_background_hover_color = new QodeField(
	"colorsimple",
	"navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_background_hover_color",
	$navigation_background_hover_color
);

$navigation_background_hover_transparency = new QodeField(
	"textsimple",
	"navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_background_hover_transparency",
	$navigation_background_hover_transparency
);

$group4 = new QodeGroup(
	esc_html__( "Navigation Button Border", 'brick' ),
	esc_html__( "Define border style", 'brick' )
);
$panel9->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$navigation_border_width = new QodeField(
	"textsimple",
	"navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'brick' ),
	""
);
$row1->addChild(
	"navigation_border_width",
	$navigation_border_width
);

$navigation_border_radius = new QodeField(
	"textsimple",
	"navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_border_radius",
	$navigation_border_radius
);

$navigation_border_color = new QodeField(
	"colorsimple",
	"navigation_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_border_color",
	$navigation_border_color
);

$navigation_border_transparency = new QodeField(
	"textsimple",
	"navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_border_transparency",
	$navigation_border_transparency
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$navigation_border_hover_color = new QodeField(
	"colorsimple",
	"navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"navigation_border_hover_color",
	$navigation_border_hover_color
);

$navigation_border_hover_transparency = new QodeField(
	"textsimple",
	"navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"navigation_border_hover_transparency",
	$navigation_border_hover_transparency
);

$navigation_show_button_shadow = new QodeField(
	"yesno",
	"navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'brick' ),
	esc_html__( "Enabling this options will show button shadow", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"navigation_show_button_shadow",
	$navigation_show_button_shadow
);

$navigation_button_shadow_container = new QodeContainer(
	"navigation_button_shadow_container",
	"navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"navigation_button_shadow_container",
	$navigation_button_shadow_container
);

$group9 = new QodeGroup(
	esc_html__( "Button Shadow", 'brick' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'brick' )
);
$navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_shadow_color = new QodeField(
	"colorsimple",
	"navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose color for  box shadow", 'brick' )
);
$row1->addChild(
	"navigation_button_shadow_color",
	$navigation_button_shadow_color
);

$row2 = new QodeRow();
$group9->addChild(
	"row2",
	$row2
);

$navigation_button_h_shadow = new QodeField(
	"textsimple",
	"navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'brick' ),
	""
);
$row2->addChild(
	"navigation_button_h_shadow",
	$navigation_button_h_shadow
);

$navigation_button_v_shadow = new QodeField(
	"textsimple",
	"navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'brick' ),
	""
);
$row2->addChild(
	"navigation_button_v_shadow",
	$navigation_button_v_shadow
);

$navigation_button_blur = new QodeField(
	"textsimple",
	"navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'brick' ),
	""
);
$row2->addChild(
	"navigation_button_blur",
	$navigation_button_blur
);

$navigation_button_spread = new QodeField(
	"textsimple",
	"navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'brick' ),
	""
);
$row2->addChild(
	"navigation_button_spread",
	$navigation_button_spread
);

$navigation_carousels_slider = new QodeTitle(
	"navigation_carousels_slider",
	esc_html__( "Carousel Sliders", 'brick' )
);
$panel9->addChild(
	"navigation_carousels_slider",
	$navigation_carousels_slider
);

$group16 = new QodeGroup(
	esc_html__( "Navigation Button Size", 'brick' ),
	esc_html__( "Define navigation button size", 'brick' )
);
$panel9->addChild(
	"group16",
	$group16
);

$row1 = new QodeRow();
$group16->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_width = new QodeField(
	"textsimple",
	"carousel_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_button_width",
	$carousel_navigation_button_width
);

$carousel_navigation_button_height = new QodeField(
	"textsimple",
	"carousel_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_button_height",
	$carousel_navigation_button_height
);

$group17 = new QodeGroup(
	esc_html__( "Navigation Button Position", 'brick' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'brick' )
);
$panel9->addChild(
	"group17",
	$group17
);

$row1 = new QodeRow();
$group17->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_position = new QodeField(
	"textsimple",
	"carousel_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_button_position",
	$carousel_navigation_button_position
);

$group18 = new QodeGroup(
	esc_html__( "Icon Arrow Style", 'brick' ),
	esc_html__( "Define arrow navigation style", 'brick' )
);
$panel9->addChild(
	"group18",
	$group18
);
$row1 = new QodeRow();
$group18->addChild(
	"row1",
	$row1
);

$carousel_navigation_arrow_size = new QodeField(
	"textsimple",
	"carousel_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'brick' ),
	esc_html__( "Default value is 14    ", 'brick' )
);
$row1->addChild(
	"carousel_navigation_arrow_size",
	$carousel_navigation_arrow_size
);

$carousel_navigation_arrows_type = new QodeField(
	"selectblanksimple",
	"carousel_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'brick' ),
	"",
	brick_qode_get_options_value_by_name('arrows_type')
);
$row1->addChild(
	"carousel_navigation_arrows_type",
	$carousel_navigation_arrows_type
);

$carousel_navigation_arrow_color = new QodeField(
	"colorsimple",
	"carousel_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_arrow_color",
	$carousel_navigation_arrow_color
);

$carousel_navigation_arrow_transparency = new QodeField(
	"textsimple",
	"carousel_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_arrow_transparency",
	$carousel_navigation_arrow_transparency
);

$row2 = new QodeRow( true );
$group18->addChild(
	"row2",
	$row2
);

$carousel_navigation_arrow_hover_color = new QodeField(
	"colorsimple",
	"carousel_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_color",
	$carousel_navigation_arrow_hover_color
);

$carousel_navigation_arrow_hover_transparency = new QodeField(
	"textsimple",
	"carousel_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_transparency",
	$carousel_navigation_arrow_hover_transparency
);

$group19 = new QodeGroup(
	esc_html__( "Navigation Button Background", 'brick' ),
	esc_html__( "Define navigation button background", 'brick' )
);
$panel9->addChild(
	"group19",
	$group19
);

$row1 = new QodeRow();
$group19->addChild(
	"row1",
	$row1
);

$carousel_navigation_background_color = new QodeField(
	"colorsimple",
	"carousel_navigation_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_background_color",
	$carousel_navigation_background_color
);

$carousel_navigation_background_transparency = new QodeField(
	"textsimple",
	"carousel_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_background_transparency",
	$carousel_navigation_background_transparency
);

$carousel_navigation_background_hover_color = new QodeField(
	"colorsimple",
	"carousel_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_background_hover_color",
	$carousel_navigation_background_hover_color
);

$carousel_navigation_background_hover_transparency = new QodeField(
	"textsimple",
	"carousel_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_background_hover_transparency",
	$carousel_navigation_background_hover_transparency
);

$group10 = new QodeGroup(
	esc_html__( "Navigation Button Border", 'brick' ),
	esc_html__( "Define border style", 'brick' )
);
$panel9->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$carousel_navigation_border_width = new QodeField(
	"textsimple",
	"carousel_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'brick' ),
	""
);
$row1->addChild(
	"carousel_navigation_border_width",
	$carousel_navigation_border_width
);

$carousel_navigation_border_radius = new QodeField(
	"textsimple",
	"carousel_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_border_radius",
	$carousel_navigation_border_radius
);

$carousel_navigation_border_color = new QodeField(
	"colorsimple",
	"carousel_navigation_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_border_color",
	$carousel_navigation_border_color
);

$carousel_navigation_border_transparency = new QodeField(
	"textsimple",
	"carousel_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"carousel_navigation_border_transparency",
	$carousel_navigation_border_transparency
);

$row2 = new QodeRow( true );
$group10->addChild(
	"row2",
	$row2
);

$carousel_navigation_border_hover_color = new QodeField(
	"colorsimple",
	"carousel_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"carousel_navigation_border_hover_color",
	$carousel_navigation_border_hover_color
);

$carousel_navigation_border_hover_transparency = new QodeField(
	"textsimple",
	"carousel_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"carousel_navigation_border_hover_transparency",
	$carousel_navigation_border_hover_transparency
);

$carousel_navigation_show_button_shadow = new QodeField(
	"yesno",
	"carousel_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'brick' ),
	esc_html__( "Enabling this options will show button shadow", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_carousel_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"carousel_navigation_show_button_shadow",
	$carousel_navigation_show_button_shadow
);

$carousel_navigation_button_shadow_container = new QodeContainer(
	"carousel_navigation_button_shadow_container",
	"carousel_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"carousel_navigation_button_shadow_container",
	$carousel_navigation_button_shadow_container
);

$group9 = new QodeGroup(
	esc_html__( "Button Shadow", 'brick' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'brick' )
);
$carousel_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_shadow_color = new QodeField(
	"colorsimple",
	"carousel_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose color for  box shadow", 'brick' )
);
$row1->addChild(
	"carousel_navigation_button_shadow_color",
	$carousel_navigation_button_shadow_color
);

$row2 = new QodeRow();
$group9->addChild(
	"row2",
	$row2
);

$carousel_navigation_button_h_shadow = new QodeField(
	"textsimple",
	"carousel_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'brick' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_h_shadow",
	$carousel_navigation_button_h_shadow
);

$carousel_navigation_button_v_shadow = new QodeField(
	"textsimple",
	"carousel_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'brick' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_v_shadow",
	$carousel_navigation_button_v_shadow
);

$carousel_navigation_button_blur = new QodeField(
	"textsimple",
	"carousel_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'brick' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_blur",
	$carousel_navigation_button_blur
);

$carousel_navigation_button_spread = new QodeField(
	"textsimple",
	"carousel_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'brick' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_spread",
	$carousel_navigation_button_spread
);

$navigation_single_sliders_slider = new QodeTitle(
	"navigation_single_sliders_slider",
	esc_html__( "Flex Sliders", 'brick' )
);
$panel9->addChild(
	"navigation_single_sliders_slider",
	$navigation_single_sliders_slider
);

$group11 = new QodeGroup(
	esc_html__( "Navigation Button Size", 'brick' ),
	esc_html__( "Define navigation button size", 'brick' )
);
$panel9->addChild(
	"group11",
	$group11
);
$row1 = new QodeRow();
$group11->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_width = new QodeField(
	"textsimple",
	"single_slider_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_button_width",
	$single_slider_navigation_button_width
);

$single_slider_navigation_button_height = new QodeField(
	"textsimple",
	"single_slider_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_button_height",
	$single_slider_navigation_button_height
);

$group12 = new QodeGroup(
	esc_html__( "Navigation Button Position", 'brick' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'brick' )
);
$panel9->addChild(
	"group12",
	$group12
);

$row1 = new QodeRow();
$group12->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_position = new QodeField(
	"textsimple",
	"single_slider_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_button_position",
	$single_slider_navigation_button_position
);

$group13 = new QodeGroup(
	esc_html__( "Icon Arrow Style", 'brick' ),
	esc_html__( "Define arrow navigation style", 'brick' )
);
$panel9->addChild(
	"group13",
	$group13
);
$row1 = new QodeRow();
$group13->addChild(
	"row1",
	$row1
);

$single_slider_navigation_arrow_size = new QodeField(
	"textsimple",
	"single_slider_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'brick' ),
	esc_html__( "Default value is 14    ", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_arrow_size",
	$single_slider_navigation_arrow_size
);

$single_slider_navigation_arrows_type = new QodeField(
	"selectblanksimple",
	"single_slider_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'brick' ),
	"",
	brick_qode_get_options_value_by_name('arrows_type')
);
$row1->addChild(
	"single_slider_navigation_arrows_type",
	$single_slider_navigation_arrows_type
);

$single_slider_navigation_arrow_color = new QodeField(
	"colorsimple",
	"single_slider_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_arrow_color",
	$single_slider_navigation_arrow_color
);

$single_slider_navigation_arrow_transparency = new QodeField(
	"textsimple",
	"single_slider_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_arrow_transparency",
	$single_slider_navigation_arrow_transparency
);

$row2 = new QodeRow( true );
$group13->addChild(
	"row2",
	$row2
);

$single_slider_navigation_arrow_hover_color = new QodeField(
	"colorsimple",
	"single_slider_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_color",
	$single_slider_navigation_arrow_hover_color
);

$single_slider_navigation_arrow_hover_transparency = new QodeField(
	"textsimple",
	"single_slider_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_transparency",
	$single_slider_navigation_arrow_hover_transparency
);

$group14 = new QodeGroup(
	esc_html__( "Navigation Button Background", 'brick' ),
	esc_html__( "Define navigation button background", 'brick' )
);
$panel9->addChild(
	"group14",
	$group14
);

$row1 = new QodeRow();
$group14->addChild(
	"row1",
	$row1
);

$single_slider_navigation_background_color = new QodeField(
	"colorsimple",
	"single_slider_navigation_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_background_color",
	$single_slider_navigation_background_color
);

$single_slider_navigation_background_transparency = new QodeField(
	"textsimple",
	"single_slider_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_background_transparency",
	$single_slider_navigation_background_transparency
);

$single_slider_navigation_background_hover_color = new QodeField(
	"colorsimple",
	"single_slider_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_color",
	$single_slider_navigation_background_hover_color
);

$single_slider_navigation_background_hover_transparency = new QodeField(
	"textsimple",
	"single_slider_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_transparency",
	$single_slider_navigation_background_hover_transparency
);

$group15 = new QodeGroup(
	esc_html__( "Navigation Button Border", 'brick' ),
	esc_html__( "Define border style", 'brick' )
);
$panel9->addChild(
	"group15",
	$group15
);

$row1 = new QodeRow();
$group15->addChild(
	"row1",
	$row1
);

$single_slider_navigation_border_width = new QodeField(
	"textsimple",
	"single_slider_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'brick' ),
	""
);
$row1->addChild(
	"single_slider_navigation_border_width",
	$single_slider_navigation_border_width
);

$single_slider_navigation_border_radius = new QodeField(
	"textsimple",
	"single_slider_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_border_radius",
	$single_slider_navigation_border_radius
);

$single_slider_navigation_border_color = new QodeField(
	"colorsimple",
	"single_slider_navigation_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_border_color",
	$single_slider_navigation_border_color
);

$single_slider_navigation_border_transparency = new QodeField(
	"textsimple",
	"single_slider_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_border_transparency",
	$single_slider_navigation_border_transparency
);

$row2 = new QodeRow( true );
$group15->addChild(
	"row2",
	$row2
);

$single_slider_navigation_border_hover_color = new QodeField(
	"colorsimple",
	"single_slider_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_color",
	$single_slider_navigation_border_hover_color
);

$single_slider_navigation_border_hover_transparency = new QodeField(
	"textsimple",
	"single_slider_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_transparency",
	$single_slider_navigation_border_hover_transparency
);

$single_slider_navigation_show_button_shadow = new QodeField(
	"yesno",
	"single_slider_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'brick' ),
	esc_html__( "Enabling this options will show button shadow", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_single_slider_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"single_slider_navigation_show_button_shadow",
	$single_slider_navigation_show_button_shadow
);

$single_slider_navigation_button_shadow_container = new QodeContainer(
	"single_slider_navigation_button_shadow_container",
	"single_slider_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"single_slider_navigation_button_shadow_container",
	$single_slider_navigation_button_shadow_container
);

$group9 = new QodeGroup(
	esc_html__( "Button Shadow", 'brick' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'brick' )
);
$single_slider_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_shadow_color = new QodeField(
	"colorsimple",
	"single_slider_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose color for  box shadow", 'brick' )
);
$row1->addChild(
	"single_slider_navigation_button_shadow_color",
	$single_slider_navigation_button_shadow_color
);

$row2 = new QodeRow();
$group9->addChild(
	"row2",
	$row2
);

$single_slider_navigation_button_h_shadow = new QodeField(
	"textsimple",
	"single_slider_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'brick' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_h_shadow",
	$single_slider_navigation_button_h_shadow
);

$single_slider_navigation_button_v_shadow = new QodeField(
	"textsimple",
	"single_slider_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'brick' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_v_shadow",
	$single_slider_navigation_button_v_shadow
);

$single_slider_navigation_button_blur = new QodeField(
	"textsimple",
	"single_slider_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'brick' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_blur",
	$single_slider_navigation_button_blur
);

$single_slider_navigation_button_spread = new QodeField(
	"textsimple",
	"single_slider_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'brick' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_spread",
	$single_slider_navigation_button_spread
);

$slider_circle_navigation = new QodeTitle(
	"slider_circle_navigation",
	esc_html__( "Bullet Navigation", 'brick' )
);
$panel9->addChild(
	"slider_circle_navigation",
	$slider_circle_navigation
);

$group8 = new QodeGroup(
	esc_html__( "Navigation Controls", 'brick' ),
	esc_html__( "Define navigation controls style", 'brick' )
);
$panel9->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$navigation_control_color = new QodeField(
	"colorsimple",
	"navigation_control_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_control_color",
	$navigation_control_color
);

$navigation_control_active_color = new QodeField(
	"colorsimple",
	"navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_control_active_color",
	$navigation_control_active_color
);

$navigation_control_size = new QodeField(
	"textsimple",
	"navigation_control_size",
	"",
	esc_html__( "Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_control_size",
	$navigation_control_size
);

$navigation_control_active_size = new QodeField(
	"textsimple",
	"navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"navigation_control_active_size",
	$navigation_control_active_size
);

$row2 = new QodeRow();
$group8->addChild(
	"row2",
	$row2
);

$navigation_control_border_color = new QodeField(
	"colorsimple",
	"navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"navigation_control_border_color",
	$navigation_control_border_color
);

$navigation_control_active_border_color = new QodeField(
	"colorsimple",
	"navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"navigation_control_active_border_color",
	$navigation_control_active_border_color
);

$navigation_control_border_radius = new QodeField(
	"textsimple",
	"navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"navigation_control_border_radius",
	$navigation_control_border_radius
);

$navigation_slider_vertical_section = new QodeTitle(
	"navigation_slider_vertical_section",
	esc_html__( "Vertical Sliders (Full Screen Section Template)", 'brick' )
);
$panel9->addChild(
	"navigation_slider_vertical_section",
	$navigation_slider_vertical_section
);

$group6 = new QodeGroup(
	esc_html__( "Navigation Button Size", 'brick' ),
	esc_html__( "Define navigation button size", 'brick' )
);
$panel9->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$fs_navigation_button_width = new QodeField(
	"textsimple",
	"fs_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_button_width",
	$fs_navigation_button_width
);

$fs_navigation_button_height = new QodeField(
	"textsimple",
	"fs_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_button_height",
	$fs_navigation_button_height
);

$group5 = new QodeGroup(
	esc_html__( "Icon Arrow Style", 'brick' ),
	esc_html__( "Define arrow navigation style", 'brick' )
);
$panel9->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$fs_navigation_arrow_size = new QodeField(
	"textsimple",
	"fs_navigation_arrow_size",
	"",
	esc_html__( "Icon Arrow Size (px)", 'brick' ),
	esc_html__( "Define size for arrow navigation icons", 'brick' )
);
$row1->addChild(
	"fs_navigation_arrow_size",
	$fs_navigation_arrow_size
);

$fs_navigation_arrow_color = new QodeField(
	"colorsimple",
	"fs_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_arrow_color",
	$fs_navigation_arrow_color
);

$fs_navigation_arrow_hover_color = new QodeField(
	"colorsimple",
	"fs_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_arrow_hover_color",
	$fs_navigation_arrow_hover_color
);

$group7 = new QodeGroup(
	esc_html__( "Navigation Button Background", 'brick' ),
	esc_html__( "Define navigation button background", 'brick' )
);
$panel9->addChild(
	"group7",
	$group7
);

$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);

$fs_navigation_background_color = new QodeField(
	"colorsimple",
	"fs_navigation_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_background_color",
	$fs_navigation_background_color
);

$fs_navigation_background_transparency = new QodeField(
	"textsimple",
	"fs_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_background_transparency",
	$fs_navigation_background_transparency
);

$fs_navigation_background_hover_color = new QodeField(
	"colorsimple",
	"fs_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_background_hover_color",
	$fs_navigation_background_hover_color
);

$fs_navigation_background_hover_transparency = new QodeField(
	"textsimple",
	"fs_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"fs_navigation_background_hover_transparency",
	$fs_navigation_background_hover_transparency
);

//Social Icon

$panel14 = new QodePanel(
	esc_html__( "Social Icon", 'brick' ),
	"social_icon_panel"
);
$elementsPage->addChild(
	"panel14",
	$panel14
);

$group1 = new QodeGroup(
	esc_html__( "Normal Icons", 'brick' ),
	esc_html__( "Define Normal Social Icons style", 'brick' )
);
$panel14->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$social_color = new QodeField(
	"colorsimple",
	"social_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_color",
	$social_color
);

$social_hover_color = new QodeField(
	"colorsimple",
	"social_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_hover_color",
	$social_hover_color
);

$group2 = new QodeGroup(
	esc_html__( "Social Circle/Square Icon", 'brick' ),
	esc_html__( "Define Social circle/square Icons style", 'brick' )
);
$panel14->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$social_icon_color = new QodeField(
	"colorsimple",
	"social_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_icon_color",
	$social_icon_color
);

$social_icon_hover_color = new QodeField(
	"colorsimple",
	"social_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_icon_hover_color",
	$social_icon_hover_color
);

$social_icon_background_color = new QodeField(
	"colorsimple",
	"social_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_icon_background_color",
	$social_icon_background_color
);

$social_icon_hover_background_color = new QodeField(
	"colorsimple",
	"social_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_icon_hover_background_color",
	$social_icon_hover_background_color
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$social_icon_border_color = new QodeField(
	"colorsimple",
	"social_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"social_icon_border_color",
	$social_icon_border_color
);

$social_icon_hover_border_color = new QodeField(
	"colorsimple",
	"social_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"social_icon_hover_border_color",
	$social_icon_hover_border_color
);

$social_icon_box_shadows = new QodeField(
	'yesno',
	'social_icon_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'brick' ),
	esc_html__( 'Enabling this option will show icon shadow', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_social_icon_box_shadows_container'
	)
);
$panel14->addChild(
	'social_icon_box_shadows',
	$social_icon_box_shadows
);

$social_icon_box_shadows_container = new QodeContainer(
	'social_icon_box_shadows_container',
	'social_icon_box_shadows',
	'no'
);
$panel14->addChild(
	'social_icon_box_shadows_container',
	$social_icon_box_shadows_container
);

$group3 = new QodeGroup(
	esc_html__( 'Icon Shadows', 'brick' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'brick' )
);
$social_icon_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new QodeRow();
$group3->addChild(
	'row3',
	$row3
);

$social_icon_box_shadow_horizontal_shadow = new QodeField(
	'textsimple',
	'social_icon_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'brick' )
);
$row3->addChild(
	'social_icon_box_shadow_horizontal_shadow',
	$social_icon_box_shadow_horizontal_shadow
);

$social_icon_box_shadow_vertical_shadow = new QodeField(
	'textsimple',
	'social_icon_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'brick' )
);
$row3->addChild(
	'social_icon_box_shadow_vertical_shadow',
	$social_icon_box_shadow_vertical_shadow
);

$social_icon_box_shadow_blur_distance = new QodeField(
	'textsimple',
	'social_icon_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'brick' )
);
$row3->addChild(
	'social_icon_box_shadow_blur_distance',
	$social_icon_box_shadow_blur_distance
);

$social_icon_box_shadow_shadow_size = new QodeField(
	'textsimple',
	'social_icon_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'brick' )
);
$row3->addChild(
	'social_icon_box_shadow_shadow_size',
	$social_icon_box_shadow_shadow_size
);

$row4 = new QodeRow( true );
$group3->addChild(
	'row4',
	$row4
);

$social_icon_box_shadow_shadow_color = new QodeField(
	'colorsimple',
	'social_icon_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'brick' )
);
$row4->addChild(
	'social_icon_box_shadow_shadow_color',
	$social_icon_box_shadow_shadow_color
);

// Social Share List Icon

$panel26 = new QodePanel(
	esc_html__( "Social Share List", 'brick' ),
	"social_share_list_icon_panel"
);
$elementsPage->addChild(
	"panel26",
	$panel26
);

$group1 = new QodeGroup(
	esc_html__( "Icons", 'brick' ),
	esc_html__( "Define Social Icons style for Social Share List", 'brick' )
);
$panel26->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$social_share_list_icon_size = new QodeField(
	"textsimple",
	"social_share_list_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_share_list_icon_size",
	$social_share_list_icon_size
);

$social_share_list_icon_margin_right = new QodeField(
	"textsimple",
	"social_share_list_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_share_list_icon_margin_right",
	$social_share_list_icon_margin_right
);

$social_share_list_icon_color = new QodeField(
	"colorsimple",
	"social_share_list_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_share_list_icon_color",
	$social_share_list_icon_color
);

$social_share_list_icon_hover_color = new QodeField(
	"colorsimple",
	"social_share_list_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"social_share_list_icon_hover_color",
	$social_share_list_icon_hover_color
);

$social_share_list_icons_type = new QodeField(
	'select',
	'social_share_list_icons_type',
	'circle',
	esc_html__( 'Icons Type', 'brick' ),
	esc_html__( 'Choose type of social share list icons', 'brick' ),
	array(
		'circle' => esc_html__( 'Circle', 'brick' ),
		'normal' => esc_html__( 'Normal', 'brick' )
	)
);
$panel26->addChild(
	'social_share_list_icons_type',
	$social_share_list_icons_type
);

//Tabs Panel

$panel15 = new QodePanel(
	esc_html__( "Tabs", 'brick' ),
	"tabs_panel"
);
$elementsPage->addChild(
	"panel15",
	$panel15
);

$tabs_navigation_subtitle = new QodeTitle(
	"tabs_navigation_subtitle",
	esc_html__( "Tabs Navigation (with Text)", 'brick' )
);
$panel15->addChild(
	"tabs_navigation_subtitle",
	$tabs_navigation_subtitle
);

$group1 = new QodeGroup(
	esc_html__( "Tabs Navigation Text Style", 'brick' ),
	esc_html__( "Define Tabs text style", 'brick' )
);
$panel15->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$tab_text_color = new QodeField(
	"colorsimple",
	"tab_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_text_color",
	$tab_text_color
);

$tab_active_text_color = new QodeField(
	"colorsimple",
	"tab_active_text_color",
	"",
	esc_html__( "Text Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_active_text_color",
	$tab_active_text_color
);

$tab_text_size = new QodeField(
	"textsimple",
	"tab_text_size",
	"",
	esc_html__( "Text Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_text_size",
	$tab_text_size
);

$tab_nav_font_family = new QodeField(
	"fontsimple",
	"tab_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_nav_font_family",
	$tab_nav_font_family
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tab_text_transform = new QodeField(
	"selectblanksimple",
	"tab_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"tab_text_transform",
	$tab_text_transform
);

$tab_letter_spacing = new QodeField(
	"textsimple",
	"tab_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"tab_letter_spacing",
	$tab_letter_spacing
);

$tab_font_weight = new QodeField(
	"selectblanksimple",
	"tab_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"tab_font_weight",
	$tab_font_weight
);

$tab_font_style = new QodeField(
	"selectblanksimple",
	"tab_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"tab_font_style",
	$tab_font_style
);

$tabs_navigation_icon_subtitle = new QodeTitle(
	"tabs_navigation_icon_subtitle",
	esc_html__( "Tabs Navigation (with Icon)", 'brick' )
);
$panel15->addChild(
	"tabs_navigation_icon_subtitle",
	$tabs_navigation_icon_subtitle
);

$group2 = new QodeGroup(
	esc_html__( "Tabs Navigation Icon Style", 'brick' ),
	esc_html__( "Define icon style", 'brick' )
);
$panel15->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$tabs_icon_size = new QodeField(
	"textsimple",
	"tabs_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_icon_size",
	$tabs_icon_size
);

$tab_icon_color = new QodeField(
	"colorsimple",
	"tab_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_icon_color",
	$tab_icon_color
);

$tab_icon_hover_color = new QodeField(
	"colorsimple",
	"tab_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_icon_hover_color",
	$tab_icon_hover_color
);

$tabs_navigation_type_with_lines_subtitle = new QodeTitle(
	"tabs_navigation_type_with_lines_subtitle",
	esc_html__( "Tabs Navigation (With Lines)", 'brick' )
);
$panel15->addChild(
	"tabs_navigation_type_with_lines_subtitle",
	$tabs_navigation_type_with_lines_subtitle
);

$group3 = new QodeGroup(
	esc_html__( "Tabs Navigation Style", 'brick' ),
	esc_html__( "Define tab style", 'brick' )
);
$panel15->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$tabs_icon_width = new QodeField(
	"textsimple",
	"tabs_icon_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_icon_width",
	$tabs_icon_width
);

$tabs_icon_height = new QodeField(
	"textsimple",
	"tabs_icon_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_icon_height",
	$tabs_icon_height
);

$tabs_icon_shape_border_width = new QodeField(
	"textsimple",
	"tabs_icon_shape_border_width",
	"",
	esc_html__( "Spike Length (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_icon_shape_border_width",
	$tabs_icon_shape_border_width
);

$tabs_default_subtitle = new QodeTitle(
	"tabs_default_subtitle",
	esc_html__( "Default Tabs Style", 'brick' )
);
$panel15->addChild(
	"tabs_default_subtitle",
	$tabs_default_subtitle
);

$tabs_default_show_separator = new QodeField(
	"yesno",
	"tabs_default_show_separator",
	"no",
	esc_html__( "Show Right Separator", 'brick' ),
	esc_html__( "Enabling this option will show right separator", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_default_tabs_right_separator_container"
	)
);
$panel15->addChild(
	"tabs_default_show_separator",
	$tabs_default_show_separator
);

$default_tabs_right_separator_container = new QodeContainer(
	"default_tabs_right_separator_container",
	"tabs_default_show_separator",
	"no"
);
$panel15->addChild(
	"default_tabs_right_separator_container",
	$default_tabs_right_separator_container
);

$tabs_default_right_separator_color = new QodeField(
	"color",
	"tabs_default_right_separator_color",
	"",
	esc_html__( "Separator Color", 'brick' ),
	esc_html__( "Choose right separator color", 'brick' )
);
$default_tabs_right_separator_container->addChild(
	"tabs_default_right_separator_color",
	$tabs_default_right_separator_color
);

$group_default_tabs = new QodeGroup(
	esc_html__( "Tabs Navigation Style", 'brick' ),
	esc_html__( "Define tab navigation style", 'brick' )
);
$panel15->addChild(
	"group_default_tabs",
	$group_default_tabs
);

$row1 = new QodeRow( true );
$group_default_tabs->addChild(
	"row1",
	$row1
);

$tabs_default_padding_left = new QodeField(
	"textsimple",
	"tabs_default_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_default_padding_left",
	$tabs_default_padding_left
);

$tabs_default_padding_right = new QodeField(
	"textsimple",
	"tabs_default_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_default_padding_right",
	$tabs_default_padding_right
);

$row2 = new QodeRow( true );
$group_default_tabs->addChild(
	"row2",
	$row2
);

$tabs_default_text_color = new QodeField(
	"colorsimple",
	"tabs_default_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"tabs_default_text_color",
	$tabs_default_text_color
);

$tabs_default_active_text_color = new QodeField(
	"colorsimple",
	"tabs_default_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"tabs_default_active_text_color",
	$tabs_default_active_text_color
);

$tabs_navigation_boxed_subtitle = new QodeTitle(
	"tabs_navigation_boxed_subtitle",
	esc_html__( "Tabs Navigation (With Borders)", 'brick' )
);
$panel15->addChild(
	"tabs_navigation_boxed_subtitle",
	$tabs_navigation_boxed_subtitle
);

$group4 = new QodeGroup(
	esc_html__( "Tabs Navigation Size", 'brick' ),
	esc_html__( "Define tab size style", 'brick' )
);
$panel15->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow( true );
$group4->addChild(
	"row1",
	$row1
);

$tabs_with_borders_height = new QodeField(
	"textsimple",
	"tabs_with_borders_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_with_borders_height",
	$tabs_with_borders_height
);

$tabs_with_borders_padding_left = new QodeField(
	"textsimple",
	"tabs_with_borders_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_with_borders_padding_left",
	$tabs_with_borders_padding_left
);

$tabs_with_borders_padding_right = new QodeField(
	"textsimple",
	"tabs_with_borders_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_with_borders_padding_right",
	$tabs_with_borders_padding_right
);

$horizontal_tabs_border_arround_element_no_space = new QodeTitle(
	"horizontal_tabs_border_arround_element_no_space",
	esc_html__( "Horizontal Tabs - Border Around Tabs (Without Space)", 'brick' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_element_no_space",
	$horizontal_tabs_border_arround_element_no_space
);

$group5 = new QodeGroup(
	esc_html__( "Tab Styles", 'brick' ),
	esc_html__( "Define tab style", 'brick' )
);
$panel15->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow( true );
$group5->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_background_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color",
	$tab_bae_hor_no_marg_background_color
);

$tab_bae_hor_no_marg_background_color_hover = new QodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color_hover",
	"",
	esc_html__( "Background Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color_hover",
	$tab_bae_hor_no_marg_background_color_hover
);

$tab_bae_hor_no_marg_border_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_color",
	$tab_bae_hor_no_marg_border_color
);

$tab_bae_hor_no_marg_border_hover_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_hover_color",
	$tab_bae_hor_no_marg_border_hover_color
);
$group6 = new QodeGroup(
	esc_html__( "Text Styles", 'brick' ),
	esc_html__( "Define text styles", 'brick' )
);
$panel15->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow( true );
$group6->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_text_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_text_color",
	$tab_bae_hor_no_marg_text_color
);

$tab_bae_hor_no_marg_active_text_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_active_text_color",
	$tab_bae_hor_no_marg_active_text_color
);

$hor_tabs_border_arround_element_with_space = new QodeTitle(
	"hor_tabs_border_arround_element_with_space",
	esc_html__( "Horizontal Tabs -  Border Around Tabs (With Space)", 'brick' )
);
$panel15->addChild(
	"hor_tabs_border_arround_element_with_space",
	$hor_tabs_border_arround_element_with_space
);

$group7 = new QodeGroup(
	esc_html__( "Tab Styles", 'brick' ),
	esc_html__( "Define tab style", 'brick' )
);
$panel15->addChild(
	"group7",
	$group7
);

$row1 = new QodeRow( true );
$group7->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_background_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_marg_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_color",
	$tab_bae_hor_marg_background_color
);

$tab_bae_hor_marg_background_hover_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_marg_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_hover_color",
	$tab_bae_hor_marg_background_hover_color
);

$tab_bae_hor_marg_border_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_marg_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_color",
	$tab_bae_hor_marg_border_color
);

$tab_bae_hor_marg_border_hover_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_marg_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_hover_color",
	$tab_bae_hor_marg_border_hover_color
);

$group8 = new QodeGroup(
	esc_html__( "Text Styles", 'brick' ),
	esc_html__( "Define text styles", 'brick' )
);
$panel15->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow( true );
$group8->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_text_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_marg_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_marg_text_color",
	$tab_bae_hor_marg_text_color
);

$tab_bae_hor_marg_active_text_color = new QodeField(
	"colorsimple",
	"tab_bae_hor_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bae_hor_marg_active_text_color",
	$tab_bae_hor_marg_active_text_color
);

$horizontal_tabs_border_arround_active_tab = new QodeTitle(
	"horizontal_tabs_border_arround_active_tab",
	esc_html__( "Horizontal Tabs -  Border Around Active Tab", 'brick' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_active_tab",
	$horizontal_tabs_border_arround_active_tab
);

$group9 = new QodeGroup(
	esc_html__( "Tab Styles", 'brick' ),
	esc_html__( "Define tab style", 'brick' )
);
$panel15->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow( true );
$group9->addChild(
	"row1",
	$row1
);

$tab_bord_active_background_color = new QodeField(
	"colorsimple",
	"tab_bord_active_background_color",
	"",
	esc_html__( "Background Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bord_active_background_color",
	$tab_bord_active_background_color
);

$tab_bord_active_background_color_hover = new QodeField(
	"colorsimple",
	"tab_bord_active_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bord_active_background_color_hover",
	$tab_bord_active_background_color_hover
);

$tab_bord_active_border_hover_color = new QodeField(
	"colorsimple",
	"tab_bord_active_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bord_active_border_hover_color",
	$tab_bord_active_border_hover_color
);

$tab_bord_active_active_tab_border_hover_color = new QodeField(
	"colorsimple",
	"tab_bord_active_active_tab_border_hover_color",
	"",
	esc_html__( "Border Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bord_active_active_tab_border_hover_color",
	$tab_bord_active_active_tab_border_hover_color
);

$group10 = new QodeGroup(
	esc_html__( "Text Styles", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel15->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow( true );
$group10->addChild(
	"row1",
	$row1
);

$tab_bord_active_text_color = new QodeField(
	"colorsimple",
	"tab_bord_active_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bord_active_text_color",
	$tab_bord_active_text_color
);

$tab_bord_active_active_text_color = new QodeField(
	"colorsimple",
	"tab_bord_active_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tab_bord_active_active_text_color",
	$tab_bord_active_active_text_color
);

$vertical_tabs_border_arround_element = new QodeTitle(
	"vertical_tabs_border_arround_element",
	esc_html__( "Vertical Tabs -  Border Around Tabs(Without Space)", 'brick' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_element",
	$vertical_tabs_border_arround_element
);

$group11 = new QodeGroup(
	esc_html__( "Tab Styles", 'brick' ),
	esc_html__( "Define tab style", 'brick' )
);
$panel15->addChild(
	"group11",
	$group11
);

$row1 = new QodeRow( true );
$group11->addChild(
	"row1",
	$row1
);

$ver_tab_bae_background_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_background_color",
	$ver_tab_bae_background_color
);

$ver_tab_bae_background_color_hover = new QodeField(
	"colorsimple",
	"ver_tab_bae_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_background_color_hover",
	$ver_tab_bae_background_color_hover
);

$ver_tab_bae_border_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_border_color",
	$ver_tab_bae_border_color
);

$ver_tab_bae_border_color_hover = new QodeField(
	"colorsimple",
	"ver_tab_bae_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_border_color_hover",
	$ver_tab_bae_border_color_hover
);

$group12 = new QodeGroup(
	esc_html__( "Text Styles", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel15->addChild(
	"group12",
	$group12
);

$row1 = new QodeRow( true );
$group12->addChild(
	"row1",
	$row1
);

$ver_tab_bae_text_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_text_color",
	$ver_tab_bae_text_color
);

$ver_tab_bae_active_text_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_active_text_color",
	$ver_tab_bae_active_text_color
);

$ver_tab_bae_with_space = new QodeTitle(
	"ver_tab_bae_with_space",
	esc_html__( "Vertical Tabs -  Border Around Tabs(With Space)", 'brick' )
);
$panel15->addChild(
	"ver_tab_bae_with_space",
	$ver_tab_bae_with_space
);

$group_vert_tabs_with_space = new QodeGroup(
	esc_html__( "Tab Styles", 'brick' ),
	esc_html__( "Define tab style", 'brick' )
);
$panel15->addChild(
	"group_vert_tabs_with_space",
	$group_vert_tabs_with_space
);

$row1 = new QodeRow( true );
$group_vert_tabs_with_space->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_background_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color",
	$ver_tab_bae_with_space_background_color
);

$ver_tab_bae_with_space_background_color_hover = new QodeField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color_hover",
	$ver_tab_bae_with_space_background_color_hover
);

$ver_tab_bae_with_space_border_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color",
	$ver_tab_bae_with_space_border_color
);

$ver_tab_bae_with_space_border_color_hover = new QodeField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color_hover",
	$ver_tab_bae_with_space_border_color_hover
);

$group_vert_tabs_with_space_text = new QodeGroup(
	esc_html__( "Text Styles", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel15->addChild(
	"group_vert_tabs_with_space_text",
	$group_vert_tabs_with_space_text
);

$row1 = new QodeRow( true );
$group_vert_tabs_with_space_text->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_text_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_with_space_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_with_space_text_color",
	$ver_tab_bae_with_space_text_color
);

$ver_tab_bae_with_space_active_text_color = new QodeField(
	"colorsimple",
	"ver_tab_bae_with_space_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bae_with_space_active_text_color",
	$ver_tab_bae_with_space_active_text_color
);

$vertical_tabs_border_arround_active_tab = new QodeTitle(
	"vertical_tabs_border_arround_active_tab",
	esc_html__( "Vertical Tabs -  Border Around Active Tab", 'brick' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_active_tab",
	$vertical_tabs_border_arround_active_tab
);

$group13 = new QodeGroup(
	esc_html__( "Tab Styles", 'brick' ),
	esc_html__( "Define tab style", 'brick' )
);
$panel15->addChild(
	"group13",
	$group13
);

$row1 = new QodeRow( true );
$group13->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_background_color = new QodeField(
	"colorsimple",
	"ver_tab_bord_act_background_color",
	"",
	esc_html__( "Background Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color",
	$ver_tab_bord_act_background_color
);

$ver_tab_bord_act_background_color_hover = new QodeField(
	"colorsimple",
	"ver_tab_bord_act_background_color_hover",
	"",
	esc_html__( "Background HoverColor", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color_hover",
	$ver_tab_bord_act_background_color_hover
);

$ver_tab_bord_act_border_color = new QodeField(
	"colorsimple",
	"ver_tab_bord_act_border_color",
	"",
	esc_html__( "Border Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color",
	$ver_tab_bord_act_border_color
);

$ver_tab_bord_act_border_color_hover = new QodeField(
	"colorsimple",
	"ver_tab_bord_act_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color_hover",
	$ver_tab_bord_act_border_color_hover
);

$group14 = new QodeGroup(
	esc_html__( "Text Styles", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$panel15->addChild(
	"group14",
	$group14
);

$row1 = new QodeRow( true );
$group14->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_text_color = new QodeField(
	"colorsimple",
	"ver_tab_bord_act_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bord_act_text_color",
	$ver_tab_bord_act_text_color
);

$ver_tab_bord_act_active_text_color = new QodeField(
	"colorsimple",
	"ver_tab_bord_act_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"ver_tab_bord_act_active_text_color",
	$ver_tab_bord_act_active_text_color
);

$tabs_content_horizontal_subtitle = new QodeTitle(
	"tabs_content_horizontal_subtitle",
	esc_html__( "Horizontal Tabs Content", 'brick' )
);
$panel15->addChild(
	"tabs_content_horizontal_subtitle",
	$tabs_content_horizontal_subtitle
);

$group15 = new QodeGroup(
	esc_html__( "Tabs Content Styles", 'brick' ),
	esc_html__( "Define tab content style", 'brick' )
);
$panel15->addChild(
	"group15",
	$group15
);

$row1 = new QodeRow( true );
$group15->addChild(
	"row1",
	$row1
);

$tabs_content_text_size = new QodeField(
	"textsimple",
	"tabs_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'brick' ),
	esc_html__( "Enter size for text in tab containers", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_content_text_size",
	$tabs_content_text_size
);

$tabs_content_background_color = new QodeField(
	"colorsimple",
	"tabs_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'brick' ),
	esc_html__( "Choose color for tab background", 'brick' )
);
$row1->addChild(
	"tabs_content_background_color",
	$tabs_content_background_color
);

$group16 = new QodeGroup(
	esc_html__( "Content Padding", 'brick' ),
	esc_html__( "Define tab content padding", 'brick' )
);
$panel15->addChild(
	"group16",
	$group16
);

$row1 = new QodeRow( true );
$group16->addChild(
	"row1",
	$row1
);

$tabs_content_padding_left = new QodeField(
	"textsimple",
	"tabs_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_content_padding_left",
	$tabs_content_padding_left
);

$tabs_content_padding_right = new QodeField(
	"textsimple",
	"tabs_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_content_padding_right",
	$tabs_content_padding_right
);

$tabs_content_padding_top = new QodeField(
	"textsimple",
	"tabs_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_content_padding_top",
	$tabs_content_padding_top
);

$tabs_content_padding_bottom = new QodeField(
	"textsimple",
	"tabs_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_content_padding_bottom",
	$tabs_content_padding_bottom
);

$tabs_vertical_content_subtitle = new QodeTitle(
	"tabs_vertical_content_subtitle",
	esc_html__( "Vertical Tabs Content", 'brick' )
);
$panel15->addChild(
	"tabs_vertical_content_subtitle",
	$tabs_vertical_content_subtitle
);

$group17 = new QodeGroup(
	esc_html__( "Tabs Content Styles", 'brick' ),
	esc_html__( "Define tab content style", 'brick' )
);
$panel15->addChild(
	"group17",
	$group17
);

$row1 = new QodeRow( true );
$group17->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_text_size = new QodeField(
	"textsimple",
	"tabs_vertical_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'brick' ),
	esc_html__( "Enter size for text in tab containers", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_vertical_content_text_size",
	$tabs_vertical_content_text_size
);

$tabs_vertical_content_background_color = new QodeField(
	"colorsimple",
	"tabs_vertical_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'brick' ),
	esc_html__( "Choose color for tab background", 'brick' )
);
$row1->addChild(
	"tabs_vertical_content_background_color",
	$tabs_vertical_content_background_color
);

$group18 = new QodeGroup(
	esc_html__( "Content Padding", 'brick' ),
	esc_html__( "Define tab content padding", 'brick' )
);
$panel15->addChild(
	"group18",
	$group18
);

$row1 = new QodeRow( true );
$group18->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_padding_left = new QodeField(
	"textsimple",
	"tabs_vertical_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_vertical_content_padding_left",
	$tabs_vertical_content_padding_left
);

$tabs_vertical_content_padding_right = new QodeField(
	"textsimple",
	"tabs_vertical_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_vertical_content_padding_right",
	$tabs_vertical_content_padding_right
);

$tabs_vertical_content_padding_top = new QodeField(
	"textsimple",
	"tabs_vertical_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_vertical_content_padding_top",
	$tabs_vertical_content_padding_top
);

$tabs_vertical_content_padding_bottom = new QodeField(
	"textsimple",
	"tabs_vertical_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tabs_vertical_content_padding_bottom",
	$tabs_vertical_content_padding_bottom
);

//Tags

$panel18 = new QodePanel(
	esc_html__( "Tags", 'brick' ),
	"tags_panel"
);
$elementsPage->addChild(
	"panel18",
	$panel18
);

$group1 = new QodeGroup(
	esc_html__( "Tags Style", 'brick' ),
	esc_html__( "Define Tags style", 'brick' )
);
$panel18->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$tags_color = new QodeField(
	"colorsimple",
	"tags_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tags_color",
	$tags_color
);

$tags_font_size = new QodeField(
	"textsimple",
	"tags_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tags_font_size",
	$tags_font_size
);

$tags_line_height = new QodeField(
	"textsimple",
	"tags_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"tags_line_height",
	$tags_line_height
);

$tags_text_transform = new QodeField(
	"selectblanksimple",
	"tags_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"tags_text_transform",
	$tags_text_transform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tags_font_family = new QodeField(
	"fontsimple",
	"tags_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"tags_font_family",
	$tags_font_family
);

$tags_font_style = new QodeField(
	"selectblanksimple",
	"tags_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"tags_font_style",
	$tags_font_style
);

$tags_font_weight = new QodeField(
	"selectblanksimple",
	"tags_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"tags_font_weight",
	$tags_font_weight
);

$tags_letter_spacing = new QodeField(
	"textsimple",
	"tags_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"tags_letter_spacing",
	$tags_letter_spacing
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$tags_hover_color = new QodeField(
	"colorsimple",
	"tags_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"tags_hover_color",
	$tags_hover_color
);

$tags_background_color = new QodeField(
	"colorsimple",
	"tags_background_color",
	"",
	esc_html__( "Background color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"tags_background_color",
	$tags_background_color
);

$tags_background_hover_color = new QodeField(
	"colorsimple",
	"tags_background_hover_color",
	"",
	esc_html__( "Hover background color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"tags_background_hover_color",
	$tags_background_hover_color
);

$tags_border_radius = new QodeField(
	"textsimple",
	"tags_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"tags_border_radius",
	$tags_border_radius
);

$row4 = new QodeRow( true );
$group1->addChild(
	"row4",
	$row4
);

$tags_border_color = new QodeField(
	"colorsimple",
	"tags_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"tags_border_color",
	$tags_border_color
);

$tags_border_hover_color = new QodeField(
	"colorsimple",
	"tags_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"tags_border_hover_color",
	$tags_border_hover_color
);

$tags_border_width = new QodeField(
	"textsimple",
	"tags_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"tags_border_width",
	$tags_border_width
);

//Team

$panel20 = new QodePanel(
	esc_html__( "Team", 'brick' ),
	"team_panel"
);
$elementsPage->addChild(
	"panel20",
	$panel20
);

$group1 = new QodeGroup(
	esc_html__( "Team Image Hover Color Overlay", 'brick' ),
	esc_html__( "Choose team image hover color overlay", 'brick' )
);
$panel20->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$team_hover_color = new QodeField(
	"colorsimple",
	"team_hover_color",
	"",
	"",
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_hover_color",
	$team_hover_color
);

$group2 = new QodeGroup(
	esc_html__( "Team Member Name", 'brick' ),
	esc_html__( "Define styles for team member name", 'brick' )
);
$panel20->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$team_color = new QodeField(
	"colorsimple",
	"team_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_color",
	$team_color
);

$team_font_size = new QodeField(
	"textsimple",
	"team_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_font_size",
	$team_font_size
);

$team_line_height = new QodeField(
	"textsimple",
	"team_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_line_height",
	$team_line_height
);

$team_text_transform = new QodeField(
	"selectblanksimple",
	"team_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"team_text_transform",
	$team_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$team_font_family = new QodeField(
	"fontsimple",
	"team_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_font_family",
	$team_font_family
);

$team_font_style = new QodeField(
	"selectblanksimple",
	"team_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"team_font_style",
	$team_font_style
);

$team_font_weight = new QodeField(
	"selectblanksimple",
	"team_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"team_font_weight",
	$team_font_weight
);

$team_letter_spacing = new QodeField(
	"textsimple",
	"team_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_letter_spacing",
	$team_letter_spacing
);

$group5 = new QodeGroup(
	esc_html__( "Team Member Position", 'brick' ),
	esc_html__( "Define styles for team member position", 'brick' )
);
$panel20->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$team_position_color = new QodeField(
	"colorsimple",
	"team_position_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_position_color",
	$team_position_color
);

$team_position_font_size = new QodeField(
	"textsimple",
	"team_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_position_font_size",
	$team_position_font_size
);

$team_position_line_height = new QodeField(
	"textsimple",
	"team_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_position_line_height",
	$team_position_line_height
);

$team_position_text_transform = new QodeField(
	"selectblanksimple",
	"team_position_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"team_position_text_transform",
	$team_position_text_transform
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$team_position_font_family = new QodeField(
	"fontsimple",
	"team_position_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_position_font_family",
	$team_position_font_family
);

$team_position_font_style = new QodeField(
	"selectblanksimple",
	"team_position_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"team_position_font_style",
	$team_position_font_style
);

$team_position_font_weight = new QodeField(
	"selectblanksimple",
	"team_position_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"team_position_font_weight",
	$team_position_font_weight
);

$team_position_letter_spacing = new QodeField(
	"textsimple",
	"team_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_position_letter_spacing",
	$team_position_letter_spacing
);

$group6 = new QodeGroup(
	esc_html__( "Team Member Description", 'brick' ),
	esc_html__( "Define styles for team member description", 'brick' )
);
$panel20->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$team_description_color = new QodeField(
	"colorsimple",
	"team_description_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_description_color",
	$team_description_color
);

$team_description_font_size = new QodeField(
	"textsimple",
	"team_description_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_description_font_size",
	$team_description_font_size
);

$team_description_line_height = new QodeField(
	"textsimple",
	"team_description_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_description_line_height",
	$team_description_line_height
);

$team_description_text_transform = new QodeField(
	"selectblanksimple",
	"team_description_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"team_description_text_transform",
	$team_description_text_transform
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$team_description_font_family = new QodeField(
	"fontsimple",
	"team_description_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_description_font_family",
	$team_description_font_family
);

$team_description_font_style = new QodeField(
	"selectblanksimple",
	"team_description_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"team_description_font_style",
	$team_description_font_style
);

$team_description_font_weight = new QodeField(
	"selectblanksimple",
	"team_description_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"team_description_font_weight",
	$team_description_font_weight
);

$team_description_letter_spacing = new QodeField(
	"textsimple",
	"team_description_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_description_letter_spacing",
	$team_description_letter_spacing
);

$group3 = new QodeGroup(
	esc_html__( "Social Icons", 'brick' ),
	esc_html__( "Define Social Icons style", 'brick' )
);
$panel20->addChild(
	"group3",
	$group3
);
$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$team_icon_color = new QodeField(
	"colorsimple",
	"team_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_icon_color",
	$team_icon_color
);

$team_icon_hover_color = new QodeField(
	"colorsimple",
	"team_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_icon_hover_color",
	$team_icon_hover_color
);

$team_icon_background_color = new QodeField(
	"colorsimple",
	"team_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_icon_background_color",
	$team_icon_background_color
);

$team_icon_hover_background_color = new QodeField(
	"colorsimple",
	"team_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_icon_hover_background_color",
	$team_icon_hover_background_color
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$team_icon_border_color = new QodeField(
	"colorsimple",
	"team_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_icon_border_color",
	$team_icon_border_color
);

$team_icon_hover_border_color = new QodeField(
	"colorsimple",
	"team_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_icon_hover_border_color",
	$team_icon_hover_border_color
);

$team_icon_size = new QodeField(
	"textsimple",
	"team_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_icon_size",
	$team_icon_size
);

$team_icon_shape_size = new QodeField(
	"textsimple",
	"team_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_icon_shape_size",
	$team_icon_shape_size
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$team_icon_space = new QodeField(
	"textsimple",
	"team_icon_space",
	"",
	esc_html__( "Space between Icons (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"team_icon_space",
	$team_icon_space
);

$main_info_below_image_subtitle = new QodeTitle(
	"main_info_below_image_subtitle",
	esc_html__( "Main Info Below Image - Type", 'brick' )
);
$panel20->addChild(
	"main_info_below_image_subtitle",
	$main_info_below_image_subtitle
);

$group4 = new QodeGroup(
	esc_html__( "Share Icon", 'brick' ),
	esc_html__( "Define Share Icon style. This applies only if Between Image and Info is selected for Social Style", 'brick' )
);
$panel20->addChild(
	"group4",
	$group4
);
$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$team_share_icon_color = new QodeField(
	"colorsimple",
	"team_share_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_share_icon_color",
	$team_share_icon_color
);

$team_share_icon_hover_color = new QodeField(
	"colorsimple",
	"team_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_share_icon_hover_color",
	$team_share_icon_hover_color
);

$team_share_icon_background_color = new QodeField(
	"colorsimple",
	"team_share_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_share_icon_background_color",
	$team_share_icon_background_color
);

$team_share_icon_hover_background_color = new QodeField(
	"colorsimple",
	"team_share_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"team_share_icon_hover_background_color",
	$team_share_icon_hover_background_color
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$team_share_icon_border_color = new QodeField(
	"colorsimple",
	"team_share_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_share_icon_border_color",
	$team_share_icon_border_color
);

$team_share_icon_hover_border_color = new QodeField(
	"colorsimple",
	"team_share_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_share_icon_hover_border_color",
	$team_share_icon_hover_border_color
);

$team_share_icon_size = new QodeField(
	"textsimple",
	"team_share_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_share_icon_size",
	$team_share_icon_size
);

$team_share_icon_shape_size = new QodeField(
	"textsimple",
	"team_share_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"team_share_icon_shape_size",
	$team_share_icon_shape_size
);

//Testimonials

$panel16 = new QodePanel(
	esc_html__( "Testimonials", 'brick' ),
	"testimonials_panel"
);
$elementsPage->addChild(
	"panel16",
	$panel16
);

$group4 = new QodeGroup(
	esc_html__( "Testimonials Title", 'brick' ),
	esc_html__( "Define Testimonials title style", 'brick' )
);
$panel16->addChild(
	"group4",
	$group4
);
$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$testimonials_title_color = new QodeField(
	"colorsimple",
	"testimonials_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_title_color",
	$testimonials_title_color
);

$testimonials_title_font_size = new QodeField(
	"textsimple",
	"testimonials_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_title_font_size",
	$testimonials_title_font_size
);

$testimonials_title_line_height = new QodeField(
	"textsimple",
	"testimonials_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_title_line_height",
	$testimonials_title_line_height
);

$testimonials_title_text_transform = new QodeField(
	"selectblanksimple",
	"testimonials_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"testimonials_title_text_transform",
	$testimonials_title_text_transform
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$testimonials_title_font_family = new QodeField(
	"fontsimple",
	"testimonials_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_title_font_family",
	$testimonials_title_font_family
);

$testimonials_title_font_style = new QodeField(
	"selectblanksimple",
	"testimonials_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"testimonials_title_font_style",
	$testimonials_title_font_style
);

$testimonials_title_font_weight = new QodeField(
	"selectblanksimple",
	"testimonials_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"testimonials_title_font_weight",
	$testimonials_title_font_weight
);

$testimonials_title_letter_spacing = new QodeField(
	"textsimple",
	"testimonials_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_title_letter_spacing",
	$testimonials_title_letter_spacing
);

$group1 = new QodeGroup(
	esc_html__( "Testimonials Text", 'brick' ),
	esc_html__( "Define Testimonials text style", 'brick' )
);
$panel16->addChild(
	"group1",
	$group1
);
$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$testimonials_text_color = new QodeField(
	"colorsimple",
	"testimonials_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_text_color",
	$testimonials_text_color
);

$testimonials_text_font_size = new QodeField(
	"textsimple",
	"testimonials_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_text_font_size",
	$testimonials_text_font_size
);

$testimonials_text_line_height = new QodeField(
	"textsimple",
	"testimonials_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_text_line_height",
	$testimonials_text_line_height
);

$testimonials_text_text_transform = new QodeField(
	"selectblanksimple",
	"testimonials_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"testimonials_text_text_transform",
	$testimonials_text_text_transform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$testimonials_text_font_family = new QodeField(
	"fontsimple",
	"testimonials_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_text_font_family",
	$testimonials_text_font_family
);

$testimonials_text_font_style = new QodeField(
	"selectblanksimple",
	"testimonials_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"testimonials_text_font_style",
	$testimonials_text_font_style
);

$testimonials_text_font_weight = new QodeField(
	"selectblanksimple",
	"testimonials_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"testimonials_text_font_weight",
	$testimonials_text_font_weight
);

$testimonials_text_letter_spacing = new QodeField(
	"textsimple",
	"testimonials_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_text_letter_spacing",
	$testimonials_text_letter_spacing
);

$group2 = new QodeGroup(
	esc_html__( "Testimonials Author Style", 'brick' ),
	esc_html__( "Define Testimonials author style", 'brick' )
);
$panel16->addChild(
	"group2",
	$group2
);
$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$testimonials_author_color = new QodeField(
	"colorsimple",
	"testimonials_author_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_author_color",
	$testimonials_author_color
);

$testimonials_author_font_size = new QodeField(
	"textsimple",
	"testimonials_author_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_author_font_size",
	$testimonials_author_font_size
);

$testimonials_author_line_height = new QodeField(
	"textsimple",
	"testimonials_author_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_author_line_height",
	$testimonials_author_line_height
);

$testimonials_author_text_transform = new QodeField(
	"selectblanksimple",
	"testimonials_author_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"testimonials_author_text_transform",
	$testimonials_author_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$testimonials_author_font_family = new QodeField(
	"fontsimple",
	"testimonials_author_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_author_font_family",
	$testimonials_author_font_family
);

$testimonials_author_font_style = new QodeField(
	"selectblanksimple",
	"testimonials_author_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"testimonials_author_font_style",
	$testimonials_author_font_style
);

$testimonials_author_font_weight = new QodeField(
	"selectblanksimple",
	"testimonials_author_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"testimonials_author_font_weight",
	$testimonials_author_font_weight
);

$testimonials_author_letter_spacing = new QodeField(
	"textsimple",
	"testimonials_author_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_author_letter_spacing",
	$testimonials_author_letter_spacing
);

$group6 = new QodeGroup(
	esc_html__( "Testimonials Job Position Style", 'brick' ),
	esc_html__( "Define testimonials job position author style", 'brick' )
);
$panel16->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$testimonials_author_job_position_color = new QodeField(
	"colorsimple",
	"testimonials_author_job_position_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_author_job_position_color",
	$testimonials_author_job_position_color
);

$testimonials_author_job_position_font_size = new QodeField(
	"textsimple",
	"testimonials_author_job_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_author_job_position_font_size",
	$testimonials_author_job_position_font_size
);

$testimonials_author_job_position_line_height = new QodeField(
	"textsimple",
	"testimonials_author_job_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_author_job_position_line_height",
	$testimonials_author_job_position_line_height
);

$testimonials_author_job_position_text_transform = new QodeField(
	"selectblanksimple",
	"testimonials_author_job_position_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"testimonials_author_job_position_text_transform",
	$testimonials_author_job_position_text_transform
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$testimonials_author_job_position_font_family = new QodeField(
	"fontsimple",
	"testimonials_author_job_position_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_author_job_position_font_family",
	$testimonials_author_job_position_font_family
);

$testimonials_author_job_position_font_style = new QodeField(
	"selectblanksimple",
	"testimonials_author_job_position_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"testimonials_author_job_position_font_style",
	$testimonials_author_job_position_font_style
);

$testimonials_author_job_position_font_weight = new QodeField(
	"selectblanksimple",
	"testimonials_author_job_position_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"testimonials_author_job_position_font_weight",
	$testimonials_author_job_position_font_weight
);

$testimonials_author_job_position_letter_spacing = new QodeField(
	"textsimple",
	"testimonials_author_job_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_author_job_position_letter_spacing",
	$testimonials_author_job_position_letter_spacing
);

$group3 = new QodeGroup(
	esc_html__( "Testimonials Navigation", 'brick' ),
	esc_html__( "Define Testimonials navigation style", 'brick' )
);
$panel16->addChild(
	"group3",
	$group3
);
$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$testimonials_navigation_width = new QodeField(
	"textsimple",
	"testimonials_navigation_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_navigation_width",
	$testimonials_navigation_width
);

$testimonials_navigation_height = new QodeField(
	"textsimple",
	"testimonials_navigation_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_navigation_height",
	$testimonials_navigation_height
);

$testimonials_navigation_active_width = new QodeField(
	"textsimple",
	"testimonials_navigation_active_width",
	"",
	esc_html__( "Active Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_navigation_active_width",
	$testimonials_navigation_active_width
);

$testimonials_navigation_active_height = new QodeField(
	"textsimple",
	"testimonials_navigation_active_height",
	"",
	esc_html__( "Active Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_navigation_active_height",
	$testimonials_navigation_active_height
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$testimonials_navigation_color = new QodeField(
	"colorsimple",
	"testimonials_navigation_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_navigation_color",
	$testimonials_navigation_color
);

$testimonials_navigation_color_transparency = new QodeField(
	"textsimple",
	"testimonials_navigation_color_transparency",
	"",
	esc_html__( "Color Transparency", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_navigation_color_transparency",
	$testimonials_navigation_color_transparency
);

$testimonials_navigation_active_color = new QodeField(
	"colorsimple",
	"testimonials_navigation_active_color",
	"",
	esc_html__( "Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_navigation_active_color",
	$testimonials_navigation_active_color
);

$testimonials_navigation_active_color_transparency = new QodeField(
	"textsimple",
	"testimonials_navigation_active_color_transparency",
	"",
	esc_html__( "Active Color Transparency", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_navigation_active_color_transparency",
	$testimonials_navigation_active_color_transparency
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$testimonials_navigation_border_radius = new QodeField(
	"textsimple",
	"testimonials_navigation_border_radius",
	"",
	esc_html__( "Border radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_navigation_border_radius",
	$testimonials_navigation_border_radius
);

$testimonials_navigation_border_width = new QodeField(
	"textsimple",
	"testimonials_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_navigation_border_width",
	$testimonials_navigation_border_width
);

$testimonials_navigation_border_color = new QodeField(
	"colorsimple",
	"testimonials_navigation_border_color",
	"",
	esc_html__( "Border color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_navigation_border_color",
	$testimonials_navigation_border_color
);

$testimonials_navigation_border_transparency = new QodeField(
	"textsimple",
	"testimonials_navigation_border_transparency",
	"",
	esc_html__( "Border Color Transparency", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_navigation_border_transparency",
	$testimonials_navigation_border_transparency
);

$row4 = new QodeRow();
$group3->addChild(
	"row4",
	$row4
);

$testimonials_navigation_active_border_color = new QodeField(
	"colorsimple",
	"testimonials_navigation_active_border_color",
	"",
	esc_html__( "Active Border color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"testimonials_navigation_active_border_color",
	$testimonials_navigation_active_border_color
);

$testimonials_navigation_active_border_transparency = new QodeField(
	"textsimple",
	"testimonials_navigation_active_border_transparency",
	"",
	esc_html__( "Active Border Color Transparency", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"testimonials_navigation_active_border_transparency",
	$testimonials_navigation_active_border_transparency
);

$group_testimonials_image = new QodeGroup(
	esc_html__( "Testimonials Image Style", 'brick' ),
	esc_html__( "Define Testimonials Image Style", 'brick' )
);
$panel16->addChild(
	"group_testimonials_image",
	$group_testimonials_image
);

$row1 = new QodeRow( true );
$group_testimonials_image->addChild(
	"row1",
	$row1
);

$testimonials_image_border_radius = new QodeField(
	"textsimple",
	"testimonials_image_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_image_border_radius",
	$testimonials_image_border_radius
);

$group5 = new QodeGroup(
	esc_html__( "Testimonials Arrows Style", 'brick' ),
	esc_html__( "Define Testimonials Arrows Style", 'brick' )
);
$panel16->addChild(
	"group5",
	$group5
);
$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$testimonials_arrows_button_width = new QodeField(
	"textsimple",
	"testimonials_arrows_button_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_arrows_button_width",
	$testimonials_arrows_button_width
);

$testimonials_arrows_button_height = new QodeField(
	"textsimple",
	"testimonials_arrows_button_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_arrows_button_height",
	$testimonials_arrows_button_height
);

$testimonials_arrows_type = new QodeField(
	"selectblanksimple",
	"testimonials_arrows_type",
	"",
	esc_html__( "Arrow Type", 'brick' ),
	"",
	brick_qode_get_options_value_by_name('arrows_type')
);
$row1->addChild(
	"testimonials_arrows_type",
	$testimonials_arrows_type
);

$testimonials_arrows_color = new QodeField(
	"colorsimple",
	"testimonials_arrows_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"testimonials_arrows_color",
	$testimonials_arrows_color
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$testimonials_arrows_color_transparency = new QodeField(
	"textsimple",
	"testimonials_arrows_color_transparency",
	"",
	esc_html__( "Background Transparency (0=full - 1=opaque)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_arrows_color_transparency",
	$testimonials_arrows_color_transparency
);

$testimonials_arrows_active_color = new QodeField(
	"colorsimple",
	"testimonials_arrows_active_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_arrows_active_color",
	$testimonials_arrows_active_color
);

$testimonials_arrows_active_color_transparency = new QodeField(
	"textsimple",
	"testimonials_arrows_active_color_transparency",
	"",
	esc_html__( "Background Hover Transparency (0=full - 1=opaque)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_arrows_active_color_transparency",
	$testimonials_arrows_active_color_transparency
);

$testimonials_arrows_border_radius = new QodeField(
	"textsimple",
	"testimonials_arrows_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"testimonials_arrows_border_radius",
	$testimonials_arrows_border_radius
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$testimonials_arrows_border_width = new QodeField(
	"textsimple",
	"testimonials_arrows_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_arrows_border_width",
	$testimonials_arrows_border_width
);

$testimonials_arrows_border_color = new QodeField(
	"colorsimple",
	"testimonials_arrows_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_arrows_border_color",
	$testimonials_arrows_border_color
);

$testimonials_arrows_border_transparency = new QodeField(
	"textsimple",
	"testimonials_arrows_border_transparency",
	"",
	esc_html__( "Border Transparency (0=full - 1=opaque)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_arrows_border_transparency",
	$testimonials_arrows_border_transparency
);

$testimonials_arrows_border_hover_color = new QodeField(
	"colorsimple",
	"testimonials_arrows_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"testimonials_arrows_border_hover_color",
	$testimonials_arrows_border_hover_color
);

$row4 = new QodeRow( true );
$group5->addChild(
	"row4",
	$row4
);

$testimonials_arrows_border_hover_transparency = new QodeField(
	"textsimple",
	"testimonials_arrows_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0=full - 1=opaque)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"testimonials_arrows_border_hover_transparency",
	$testimonials_arrows_border_hover_transparency
);

$testimonials_arrows_icon_color = new QodeField(
	"colorsimple",
	"testimonials_arrows_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"testimonials_arrows_icon_color",
	$testimonials_arrows_icon_color
);

$testimonials_arrows_transparency = new QodeField(
	"textsimple",
	"testimonials_arrows_transparency",
	"",
	esc_html__( "Icon Transparency (0=full - 1=opaque)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"testimonials_arrows_transparency",
	$testimonials_arrows_transparency
);

$testimonials_arrows_icon_hover_color = new QodeField(
	"colorsimple",
	"testimonials_arrows_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"testimonials_arrows_icon_hover_color",
	$testimonials_arrows_icon_hover_color
);

$row5 = new QodeRow( true );
$group5->addChild(
	"row5",
	$row5
);

$testimonials_arrows_hover_transparency = new QodeField(
	"textsimple",
	"testimonials_arrows_hover_transparency",
	"",
	esc_html__( "Icon Hover Transparency (0=full - 1=opaque)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"testimonials_arrows_hover_transparency",
	$testimonials_arrows_hover_transparency
);

$testimonials_arrows_size = new QodeField(
	"textsimple",
	"testimonials_arrows_size",
	"",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row5->addChild(
	"testimonials_arrows_size",
	$testimonials_arrows_size
);

//Widget - Latest Posts Slider

$panel32 = new QodePanel(
	esc_html__( "Widget - Latest Posts Slider", 'brick' ),
	"menu_latest_post"
);
$elementsPage->addChild(
	"panel32",
	$panel32
);

$group1 = new QodeGroup(
	esc_html__( "Title style", 'brick' ),
	esc_html__( "Latest Posts Slider title style", 'brick' )
);
$panel32->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_title_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_title_color",
	"",
	esc_html__( "Title Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_title_color",
	$menu_latest_post_widget_title_color
);

$menu_latest_post_widget_title_hover_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_title_hover_color",
	$menu_latest_post_widget_title_hover_color
);

$menu_latest_post_widget_title_font_size = new QodeField(
	"textsimple",
	"menu_latest_post_widget_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_title_font_size",
	$menu_latest_post_widget_title_font_size
);

$menu_latest_post_widget_title_line_height = new QodeField(
	"textsimple",
	"menu_latest_post_widget_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_title_line_height",
	$menu_latest_post_widget_title_line_height
);

$row2 = new QodeRow();
$group1->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_title_text_transform = new QodeField(
	"selectblanksimple",
	"menu_latest_post_widget_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"menu_latest_post_widget_title_text_transform",
	$menu_latest_post_widget_title_text_transform
);

$menu_latest_post_widget_title_font_family = new QodeField(
	"fontsimple",
	"menu_latest_post_widget_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"menu_latest_post_widget_title_font_family",
	$menu_latest_post_widget_title_font_family
);

$menu_latest_post_widget_title_font_style = new QodeField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"menu_latest_post_widget_title_font_style",
	$menu_latest_post_widget_title_font_style
);

$menu_latest_post_widget_title_font_weight = new QodeField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"menu_latest_post_widget_title_font_weight",
	$menu_latest_post_widget_title_font_weight
);

$row3 = new QodeRow();
$group1->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_title_letter_spacing = new QodeField(
	"textsimple",
	"menu_latest_post_widget_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"menu_latest_post_widget_title_letter_spacing",
	$menu_latest_post_widget_title_letter_spacing
);

$group2 = new QodeGroup(
	esc_html__( "Post Info style", 'brick' ),
	esc_html__( "Latest Posts Slider post info style", 'brick' )
);
$panel32->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_post_info_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_post_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_color",
	$menu_latest_post_widget_post_info_color
);

$menu_latest_post_widget_post_info_link_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_color",
	$menu_latest_post_widget_post_info_link_color
);

$menu_latest_post_widget_post_info_link_hover_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_hover_color",
	$menu_latest_post_widget_post_info_link_hover_color
);

$menu_latest_post_widget_post_info_font_size = new QodeField(
	"textsimple",
	"menu_latest_post_widget_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_font_size",
	$menu_latest_post_widget_post_info_font_size
);

$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_post_info_line_height = new QodeField(
	"textsimple",
	"menu_latest_post_widget_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_line_height",
	$menu_latest_post_widget_post_info_line_height
);

$menu_latest_post_widget_post_info_text_transform = new QodeField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"menu_latest_post_widget_post_info_text_transform",
	$menu_latest_post_widget_post_info_text_transform
);

$menu_latest_post_widget_post_info_font_family = new QodeField(
	"fontsimple",
	"menu_latest_post_widget_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_family",
	$menu_latest_post_widget_post_info_font_family
);

$menu_latest_post_widget_post_info_font_style = new QodeField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_style",
	$menu_latest_post_widget_post_info_font_style
);

$row3 = new QodeRow();
$group2->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_post_info_font_weight = new QodeField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"menu_latest_post_widget_post_info_font_weight",
	$menu_latest_post_widget_post_info_font_weight
);

$menu_latest_post_widget_post_info_letter_spacing = new QodeField(
	"textsimple",
	"menu_latest_post_widget_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"menu_latest_post_widget_post_info_letter_spacing",
	$menu_latest_post_widget_post_info_letter_spacing
);

$group3 = new QodeGroup(
	esc_html__( "Spacing", 'brick' ),
	esc_html__( "Define spacing for Latest Posts Slider widget", 'brick' )
);
$panel32->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_thumb_margin_bttm = new QodeField(
	"textsimple",
	"menu_latest_post_widget_thumb_margin_bttm",
	"",
	esc_html__( "Margin Under Image (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_thumb_margin_bttm",
	$menu_latest_post_widget_thumb_margin_bttm
);

$menu_latest_post_widget_title_margin_bttm = new QodeField(
	"textsimple",
	"menu_latest_post_widget_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_title_margin_bttm",
	$menu_latest_post_widget_title_margin_bttm
);

$menu_latest_post_widget_navigation = new QodeTitle(
	"menu_latest_post_widget_navigation",
	esc_html__( "Navigation Buttons Style", 'brick' )
);
$panel32->addChild(
	"menu_latest_post_widget_navigation",
	$menu_latest_post_widget_navigation
);

$group4 = new QodeGroup(
	esc_html__( "Navigation Arrow Button Size", 'brick' ),
	esc_html__( "Define arrow size", 'brick' )
);
$panel32->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_width = new QodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_width",
	$menu_latest_post_widget_arrow_width
);

$menu_latest_post_widget_arrow_height = new QodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_height",
	$menu_latest_post_widget_arrow_height
);

$menu_latest_post_widget_arrow_size = new QodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_size",
	$menu_latest_post_widget_arrow_size
);

$group5 = new QodeGroup(
	esc_html__( "Navigation Arrow Color", 'brick' ),
	esc_html__( "Define coloring for navigation arrows", 'brick' )
);
$panel32->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_arrow_color",
	"",
	esc_html__( "Arrow Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_color",
	$menu_latest_post_widget_arrow_color
);

$menu_latest_post_widget_arrow_transparency = new QodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_transparency",
	$menu_latest_post_widget_arrow_transparency
);

$menu_latest_post_widget_arrow_hover_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_color",
	$menu_latest_post_widget_arrow_hover_color
);

$menu_latest_post_widget_arrow_hover_transparency = new QodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_transparency",
	$menu_latest_post_widget_arrow_hover_transparency
);

$group6 = new QodeGroup(
	esc_html__( "Navigation Button Background", 'brick' ),
	esc_html__( "Define navigation button background", 'brick' )
);
$panel32->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_background_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_background_color",
	$menu_latest_post_widget_background_color
);

$menu_latest_post_widget_background_transparency = new QodeField(
	"textsimple",
	"menu_latest_post_widget_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_background_transparency",
	$menu_latest_post_widget_background_transparency
);

$menu_latest_post_widget_background_hover_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_color",
	$menu_latest_post_widget_background_hover_color
);

$menu_latest_post_widget_background_hover_transparency = new QodeField(
	"textsimple",
	"menu_latest_post_widget_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_transparency",
	$menu_latest_post_widget_background_hover_transparency
);

$group7 = new QodeGroup(
	esc_html__( "Navigation Button Border", 'brick' ),
	esc_html__( "Define border style", 'brick' )
);
$panel32->addChild(
	"group7",
	$group7
);

$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_border_width = new QodeField(
	"textsimple",
	"menu_latest_post_widget_border_width",
	"",
	esc_html__( "Border width (px)", 'brick' ),
	""
);
$row1->addChild(
	"menu_latest_post_widget_border_width",
	$menu_latest_post_widget_border_width
);

$menu_latest_post_widget_border_radius = new QodeField(
	"textsimple",
	"menu_latest_post_widget_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_border_radius",
	$menu_latest_post_widget_border_radius
);

$menu_latest_post_widget_border_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_border_color",
	$menu_latest_post_widget_border_color
);

$menu_latest_post_widget_border_transparency = new QodeField(
	"textsimple",
	"menu_latest_post_widget_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"menu_latest_post_widget_border_transparency",
	$menu_latest_post_widget_border_transparency
);

$row2 = new QodeRow();
$group7->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_border_hover_color = new QodeField(
	"colorsimple",
	"menu_latest_post_widget_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_color",
	$menu_latest_post_widget_border_hover_color
);

$menu_latest_post_widget_border_hover_transparency = new QodeField(
	"textsimple",
	"menu_latest_post_widget_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_transparency",
	$menu_latest_post_widget_border_hover_transparency
);

$menu_latest_post_widget_position = new QodeField(
	"text",
	"menu_latest_post_widget_position",
	"",
	esc_html__( "Navigation Buttons Position from Middle (px)", 'brick' ),
	esc_html__( "Move navigation arrows down(positive value), or up (negative value) from the middle", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"menu_latest_post_widget_position",
	$menu_latest_post_widget_position
);