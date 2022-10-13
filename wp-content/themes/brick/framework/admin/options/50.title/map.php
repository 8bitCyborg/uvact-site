<?php

$titlePage = new BrickQodeAdminPage(
	"4",
	esc_html__( "Title", 'brick' ),
	"fa fa-list-alt"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"title",
	$titlePage
);

$panel8 = new QodePanel(
	esc_html__( "Title", 'brick' ),
	"title_panel"
);
$titlePage->addChild(
	"panel8",
	$panel8
);

$show_page_title = new QodeField(
	"yesno",
	"show_page_title",
	"yes",
	esc_html__( "Enable Page Title Area", 'brick' ),
	esc_html__( "This option will enable Title Area", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_title_container"
	)
);
$panel8->addChild(
	"show_page_title",
	$show_page_title
);

$enable_title_container = new QodeContainer(
	"enable_title_container",
	"show_page_title",
	"no"
);
$panel8->addChild(
	"enable_title_container",
	$enable_title_container
);

$title_type = new QodeField(
	"select",
	"title_type",
	"standard_title",
	esc_html__( "Title Type", 'brick' ),
	esc_html__( "Choose title type", 'brick' ),
	array(
		"standard_title" => esc_html__( "Standard", 'brick' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumb", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#qodef_title_standard_container" ),
		"show"       => array( "standard_title" => "#qodef_title_standard_container" )
	)
);
$enable_title_container->addChild(
	"title_type",
	$title_type
);

$animate_title_area = new QodeField(
	"select",
	"animate_title_area",
	"no",
	esc_html__( "Animations", 'brick' ),
	esc_html__( "Choose an animation for Title Area", 'brick' ),
	array(
		"no" => esc_html__( "No animation", 'brick' ),
		"text_right_left" => esc_html__( "Text right to left", 'brick' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'brick' )
	)
);
$enable_title_container->addChild(
	"animate_title_area",
	$animate_title_area
);

$page_title_vertical_aligment = new QodeField(
	"select",
	"page_title_vertical_aligment",
	"header_bottom",
	esc_html__( "Vertical Alignment", 'brick' ),
	esc_html__( "Specify Title vertical alignment", 'brick' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'brick' ),
		"window_top" => esc_html__( "From Window Top", 'brick' )
	)
);
$enable_title_container->addChild(
	"page_title_vertical_aligment",
	$page_title_vertical_aligment
);

$show_page_title_text = new QodeField(
	"yesno",
	"show_page_title_text",
	"yes",
	esc_html__( "Enable Page Title Text", 'brick' ),
	esc_html__( "This option will enable Title Text", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_title_text_container, #qodef_animation_page_title_contaier"
	)
);
$enable_title_container->addChild(
	"show_page_title_text",
	$show_page_title_text
);

$enable_title_text_container = new QodeContainer(
	"enable_title_text_container",
	"show_page_title_text",
	"no"
);
$enable_title_container->addChild(
	"enable_title_text_container",
	$enable_title_text_container
);

$page_title_position = new QodeField(
	"select",
	"page_title_position",
	"left",
	esc_html__( "Title Text Alignment", 'brick' ),
	esc_html__( "Specify Title text alignment", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$enable_title_text_container->addChild(
	"page_title_position",
	$page_title_position
);

$title_text_shadow = new QodeField(
	"yesno",
	"title_text_shadow",
	"no",
	esc_html__( "Title Text Shadow", 'brick' ),
	esc_html__( "Enabling this option will give Title text a shadow", 'brick' )
);
$enable_title_text_container->addChild(
	"title_text_shadow",
	$title_text_shadow
);

$title_standard_container = new QodeContainer(
	"title_standard_container",
	"title_type",
	"breadcrumbs_title"
);
$enable_title_container->addChild(
	"title_standard_container",
	$title_standard_container
);

//Title like separator with text
$title_like_separator = new QodeField(
	"yesno",
	"title_like_separator",
	"no",
	esc_html__( "Separator Around Title Text", 'brick' ),
	esc_html__( "Enable separator around title", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_title_like_separator_container"
	)
);
$title_standard_container->addChild(
	"title_like_separator",
	$title_like_separator
);

$title_like_separator_container = new QodeContainer(
	"title_like_separator_container",
	"title_like_separator",
	"no"
);
$title_standard_container->addChild(
	"title_like_separator_container",
	$title_like_separator_container
);

$group1 = new QodeGroup(
	esc_html__( "Line Styles", 'brick' ),
	esc_html__( "Choose style for separator line", 'brick' )
);
$title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_line_color = new QodeField(
	"colorsimple",
	"title_like_separator_line_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_like_separator_line_color",
	$title_like_separator_line_color
);

$title_like_separator_line_width = new QodeField(
	"textsimple",
	"title_like_separator_line_width",
	"",
	esc_html__( "Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_like_separator_line_width",
	$title_like_separator_line_width
);

$title_like_separator_line_thickness = new QodeField(
	"textsimple",
	"title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_like_separator_line_thickness",
	$title_like_separator_line_thickness
);

$title_like_separator_line_style = new QodeField(
	"selectsimple",
	"title_like_separator_line_style",
	"",
	esc_html__( "Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' )
	)
);
$row1->addChild(
	"title_like_separator_line_style",
	$title_like_separator_line_style
);

$title_like_separator_margins = new QodeField(
	"text",
	"title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'brick' ),
	esc_html__( "Define left/right margins for title from separator", 'brick' )
);
$title_like_separator_container->addChild(
	"title_like_separator_margins",
	$title_like_separator_margins
);

$title_like_separator_line_dots = new QodeField(
	"yesno",
	"title_like_separator_line_dots",
	"no",
	esc_html__( "Dots on The End of Lines", 'brick' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_title_like_separator_dots_container"
	)
);
$title_like_separator_container->addChild(
	"title_like_separator_line_dots",
	$title_like_separator_line_dots
);

$title_like_separator_dots_container = new QodeContainer(
	"title_like_separator_dots_container",
	"title_like_separator_line_dots",
	"no"
);
$title_like_separator_container->addChild(
	"title_like_separator_dots_container",
	$title_like_separator_dots_container
);

$group1 = new QodeGroup(
	esc_html__( "Dots Style", 'brick' ),
	esc_html__( "Choose style for dots", 'brick' )
);
$title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_dots_size = new QodeField(
	"textsimple",
	"title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_like_separator_dots_size",
	$title_like_separator_dots_size
);

$title_like_separator_dots_color = new QodeField(
	"colorsimple",
	"title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_like_separator_dots_color",
	$title_like_separator_dots_color
);

//Subtitle like separator with text
$subtitle_like_separator = new QodeField(
	"yesno",
	"subtitle_like_separator",
	"no",
	esc_html__( "Separator Around Subtitle Text", 'brick' ),
	esc_html__( "Enable separator around subtitle", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_subtitle_like_separator_container"
	)
);
$title_standard_container->addChild(
	"subtitle_like_separator",
	$subtitle_like_separator
);

$subtitle_like_separator_container = new QodeContainer(
	"subtitle_like_separator_container",
	"subtitle_like_separator",
	"no"
);
$title_standard_container->addChild(
	"subtitle_like_separator_container",
	$subtitle_like_separator_container
);

$group1 = new QodeGroup(
	esc_html__( "Line Styles", 'brick' ),
	esc_html__( "Choose style for separator line", 'brick' )
);
$subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$subtitle_like_separator_line_color = new QodeField(
	"colorsimple",
	"subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"subtitle_like_separator_line_color",
	$subtitle_like_separator_line_color
);

$subtitle_like_separator_line_width = new QodeField(
	"textsimple",
	"subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"subtitle_like_separator_line_width",
	$subtitle_like_separator_line_width
);

$subtitle_like_separator_line_thickness = new QodeField(
	"textsimple",
	"subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"subtitle_like_separator_line_thickness",
	$subtitle_like_separator_line_thickness
);

$subtitle_like_separator_line_style = new QodeField(
	"selectsimple",
	"subtitle_like_separator_line_style",
	"",
	esc_html__( "Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' )
	)
);
$row1->addChild(
	"subtitle_like_separator_line_style",
	$subtitle_like_separator_line_style
);

$subtitle_like_separator_margins = new QodeField(
	"text",
	"subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subtitle", 'brick' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'brick' )
);
$subtitle_like_separator_container->addChild(
	"subtitle_like_separator_margins",
	$subtitle_like_separator_margins
);

$title_background_color = new QodeField(
	"color",
	"title_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a background color for Title Area", 'brick' )
);
$enable_title_container->addChild(
	"title_background_color",
	$title_background_color
);

$title_image = new QodeField(
	"image",
	"title_image",
	"",
	esc_html__( "Background Image", 'brick' ),
	esc_html__( "Choose an Image for Title Area", 'brick' )
);
$enable_title_container->addChild(
	"title_image",
	$title_image
);

$responsive_title_image = new QodeField(
	"yesno",
	"responsive_title_image",
	"no",
	esc_html__( "Background Responsive Image", 'brick' ),
	esc_html__( "Enabling this option will make Title background image responsive", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_responsive_title_image_container",
		"dependence_show_on_yes" => ""
	)
);
$enable_title_container->addChild(
	"responsive_title_image",
	$responsive_title_image
);

$responsive_title_image_container = new QodeContainer(
	"responsive_title_image_container",
	"responsive_title_image",
	"yes"
);
$enable_title_container->addChild(
	"responsive_title_image_container",
	$responsive_title_image_container
);
$fixed_title_image = new QodeField(
	"select",
	"fixed_title_image",
	"no",
	esc_html__( "Parallax Title Image", 'brick' ),
	esc_html__( "Enabling this option will make Title image parallax", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'brick' )
	)
);
$responsive_title_image_container->addChild(
	"fixed_title_image",
	$fixed_title_image
);
$title_height = new QodeField(
	"text",
	"title_height",
	"",
	esc_html__( "Title Height (px)", 'brick' ),
	esc_html__( "Set a height for Title Area in pixels", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$responsive_title_image_container->addChild(
	"title_height",
	$title_height
);

$title_overlay_image = new QodeField(
	"image",
	"title_overlay_image",
	"",
	esc_html__( "Pattern Overlay Image", 'brick' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'brick' )
);
$enable_title_container->addChild(
	"title_overlay_image",
	$title_overlay_image
);

$title_separator = new QodeField(
	"yesno",
	"title_separator",
	"no",
	esc_html__( "Show Title Separator", 'brick' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_title_separator_container, #qodef_animation_page_title_separator_container"
	)
);
$title_standard_container->addChild(
	"title_separator",
	$title_separator
);

$title_separator_container = new QodeContainer(
	"title_separator_container",
	"title_separator",
	"no"
);
$title_standard_container->addChild(
	"title_separator_container",
	$title_separator_container
);

$title_separator_format = new QodeField(
	"select",
	"title_separator_format",
	"normal",
	esc_html__( "Format", 'brick' ),
	esc_html__( "Choose a format (type) of separator", 'brick' ),
	array(
		"normal" => esc_html__( "Normal", 'brick' ),
		"with_icon" => esc_html__( "With Icon", 'brick' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal"           => "#qodef_separator_with_icon_container, #qodef_separator_custom_icon_container, #qodef_separator_all_icons_container",
			"with_custom_icon" => "#qodef_separator_with_icon_container",
			"with_icon"        => "#qodef_separator_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#qodef_separator_with_icon_container, #qodef_separator_all_icons_container",
			"with_custom_icon" => "#qodef_separator_custom_icon_container, #qodef_separator_all_icons_container"
		)
	)
);

$title_separator_container->addChild(
	"title_separator_format",
	$title_separator_format
);

$separator_all_icons_container = new QodeContainer(
	"separator_all_icons_container",
	"title_separator_format",
	"normal"
);
$title_separator_container->addChild(
	"separator_all_icons_container",
	$separator_all_icons_container
);

$group1 = new QodeGroup(
	esc_html__( "Icon Position and Margins", 'brick' ),
	esc_html__( "Choose icon position and set left(right) margin", 'brick' )
);
$separator_all_icons_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_position = new QodeField(
	"selectsimple",
	"title_separator_icon_position",
	"",
	esc_html__( "Icon Position", 'brick' ),
	esc_html__( "Choose a position for an icon", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$row1->addChild(
	"title_separator_icon_position",
	$title_separator_icon_position
);

$title_separator_icon_margins = new QodeField(
	"textsimple",
	"title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'brick' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'brick' )
);
$row1->addChild(
	"title_separator_icon_margins",
	$title_separator_icon_margins
);

$separator_with_icon_container = new QodeContainer(
	"separator_with_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_custom_icon" )
);
$title_separator_container->addChild(
	"separator_with_icon_container",
	$separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array = array();
$separator_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = brick_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( brick_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#qodef_separator_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$separator_icon_pack = new QodeField(
	"select",
	"separator_icon_pack",
	"font_awesome",
	esc_html__( "Separator Icon Pack", 'brick' ),
	esc_html__( "Choose icon pack for separator", 'brick' ),
	brick_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$separator_with_icon_container->addChild(
	"separator_icon_pack",
	$separator_icon_pack
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
		
		$separator_icon_hide_values = $icon_collections_keys;
		$separator_icon_container   = new QodeContainer(
			"separator_icon_" . $collection_object->param . "_container",
			"separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$separator_icon             = new QodeField(
			"select",
			"separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'brick' ),
			esc_html__( "Choose Separator Icon", 'brick' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$separator_icon_container->addChild(
			"separator_icon_" . $collection_object->param,
			$separator_icon
		);
		
		$separator_with_icon_container->addChild(
			"separator_icon_" . $collection_object->param . "_container",
			$separator_icon_container
		);
	}
	
}

$group1 = new QodeGroup(
	esc_html__( "Icon Style", 'brick' ),
	esc_html__( "Choose icon style", 'brick' )
);
$separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_color = new QodeField(
	"colorsimple",
	"title_separator_icon_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color of icon for Title separator", 'brick' )
);
$row1->addChild(
	"title_separator_icon_color",
	$title_separator_icon_color
);

$title_separator_icon_hover_color = new QodeField(
	"colorsimple",
	"title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'brick' )
);
$row1->addChild(
	"title_separator_icon_hover_color",
	$title_separator_icon_hover_color
);

$title_separator_icon_custom_size = new QodeField(
	"textsimple",
	"title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'brick' ),
	esc_html__( "Choose size of icon", 'brick' )
);
$row1->addChild(
	"title_separator_icon_custom_size",
	$title_separator_icon_custom_size
);

$title_separator_icon_type = new QodeField(
	"select",
	"title_separator_icon_type",
	"normal",
	esc_html__( "Icon Type", 'brick' ),
	esc_html__( "Choose icon type", 'brick' ),
	array(
		"normal" => esc_html__( "Normal", 'brick' ),
		"circle" => esc_html__( "Circle", 'brick' ),
		"square" => esc_html__( "Square", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "normal" => "#qodef_title_separator_types_container" ),
		"show"       => array(
			"circle" => "#qodef_title_separator_types_container",
			"square" => "#qodef_title_separator_types_container"
		)
	)
);
$separator_with_icon_container->addChild(
	"title_separator_icon_type",
	$title_separator_icon_type
);

$title_separator_types_container = new QodeContainer(
	"title_separator_types_container",
	"title_separator_icon_type",
	"normal"
);
$separator_with_icon_container->addChild(
	"title_separator_types_container",
	$title_separator_types_container
);

$group1 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define border style for icon", 'brick' )
);
$title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_border_radius = new QodeField(
	"textsimple",
	"title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "Enter border radius for icon", 'brick' )
);
$row1->addChild(
	"title_separator_icon_border_radius",
	$title_separator_icon_border_radius
);

$title_separator_icon_border_width = new QodeField(
	"textsimple",
	"title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "Enter border width for icon", 'brick' )
);
$row1->addChild(
	"title_separator_icon_border_width",
	$title_separator_icon_border_width
);

$title_separator_icon_border_color = new QodeField(
	"colorsimple",
	"title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Enter border color for icon", 'brick' )
);
$row1->addChild(
	"title_separator_icon_border_color",
	$title_separator_icon_border_color
);

$title_separator_icon_border_hover_color = new QodeField(
	"colorsimple",
	"title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "Enter border color for icon", 'brick' )
);
$row1->addChild(
	"title_separator_icon_border_hover_color",
	$title_separator_icon_border_hover_color
);

$group2 = new QodeGroup(
	esc_html__( "Additional Icon Style", 'brick' ),
	esc_html__( "Choose adition icon styling", 'brick' )
);
$title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_icon_shape_size = new QodeField(
	"textsimple",
	"title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_separator_icon_shape_size",
	$title_separator_icon_shape_size
);

$title_separator_icon_background_color = new QodeField(
	"colorsimple",
	"title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_separator_icon_background_color",
	$title_separator_icon_background_color
);

$title_separator_icon_background_hover_color = new QodeField(
	"colorsimple",
	"title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_separator_icon_background_hover_color",
	$title_separator_icon_background_hover_color
);

$separator_custom_icon_container = new QodeContainer(
	"separator_custom_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_icon" )
);
$title_separator_container->addChild(
	"separator_custom_icon_container",
	$separator_custom_icon_container
);

$separator_custom_icon = new QodeField(
	"image",
	"separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'brick' ),
	esc_html__( "Choose custom icon for separator", 'brick' )
);
$separator_custom_icon_container->addChild(
	"separator_custom_icon",
	$separator_custom_icon
);

$title_separator_type = new QodeField(
	"select",
	"title_separator_type",
	"",
	esc_html__( "Type", 'brick' ),
	esc_html__( "Choose a Title separator line style", 'brick' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' )
	)
);
$title_separator_container->addChild(
	"title_separator_type",
	$title_separator_type
);

$title_separator_position = new QodeField(
	"select",
	"title_separator_position",
	"",
	esc_html__( "Position", 'brick' ),
	esc_html__( "Choose a Title separator position", 'brick' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'brick' ),
		"below" => esc_html__( "Below Title", 'brick' )
	)
);
$title_separator_container->addChild(
	"title_separator_position",
	$title_separator_position
);

$title_separator_color = new QodeField(
	"color",
	"title_separator_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color for Title separator", 'brick' )
);
$title_separator_container->addChild(
	"title_separator_color",
	$title_separator_color
);

$group1 = new QodeGroup(
	esc_html__( "Size", 'brick' ),
	esc_html__( 'Define size for Title separator', 'brick' )
);
$title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_thickness = new QodeField(
	"textsimple",
	"title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_separator_thickness",
	$title_separator_thickness
);

$title_separator_width = new QodeField(
	"textsimple",
	"title_separator_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_separator_width",
	$title_separator_width
);

$group2 = new QodeGroup(
	esc_html__( "Margin", 'brick' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'brick' )
);
$title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_topmargin = new QodeField(
	"textsimple",
	"title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_separator_topmargin",
	$title_separator_topmargin
);

$title_separator_bottommargin = new QodeField(
	"textsimple",
	"title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"title_separator_bottommargin",
	$title_separator_bottommargin
);

$border_bottom_title_area = new QodeField(
	"yesno",
	"border_bottom_title_area",
	"no",
	esc_html__( "Bottom Border", 'brick' ),
	esc_html__( "Enabling this option will display bottom border on Title Area", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_border_bottom_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_bottom_title_area",
	$border_bottom_title_area
);

$border_bottom_title_area_container = new QodeContainer(
	"border_bottom_title_area_container",
	"border_bottom_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_bottom_title_area_container",
	$border_bottom_title_area_container
);

$enable_title_border_grid = new QodeField(
	"yesno",
	"enable_title_border_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'brick' ),
	esc_html__( "This option will show title bottom border in grid", 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => ''
	)
);
$border_bottom_title_area_container->addChild(
	"enable_title_border_grid",
	$enable_title_border_grid
);

$border_bottom_title_area_width = new QodeField(
	"text",
	"border_bottom_title_area_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'brick' ),
	esc_html__( "Choose a width for Title Area bottom border Note: If width has not been set, border bottom will not be displayed", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_width",
	$border_bottom_title_area_width
);
$border_bottom_title_area_color = new QodeField(
	"color",
	"border_bottom_title_area_color",
	"",
	esc_html__( "Bottom Border Color", 'brick' ),
	esc_html__( "Choose a color for Title Area bottom border", 'brick' )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_color",
	$border_bottom_title_area_color
);

$enable_breadcrumbs = new QodeField(
	"yesno",
	"enable_breadcrumbs",
	"no",
	esc_html__( "Enable Breadcrumbs", 'brick' ),
	esc_html__( "This option will display Breadcrumbs in Title Area", 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_animation_page_title_breadcrumbs_container'
	)
);
$enable_title_container->addChild(
	"enable_breadcrumbs",
	$enable_breadcrumbs
);

$title_graphics = new QodeField(
	"image",
	"title_graphics",
	"",
	esc_html__( "Graphics", 'brick' ),
	esc_html__( "Choose graphics", 'brick' )
);
$title_standard_container->addChild(
	"title_graphics",
	$title_graphics
);

$group1 = new QodeGroup(
	esc_html__( "Title Area Content Style", 'brick' ),
	esc_html__( 'Define style for Title Area Content', 'brick' )
);
$enable_title_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_content_background_color = new QodeField(
	"colorsimple",
	"title_content_background_color",
	"",
	esc_html__( "Title Content Background Color", 'brick' ),
	esc_html__( "Background color for title content", 'brick' )
);
$row1->addChild(
	"title_content_background_color",
	$title_content_background_color
);

$title_content_background_opacity = new QodeField(
	"textsimple",
	"title_content_background_opacity",
	"",
	esc_html__( "Title Content Background Opacity", 'brick' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'brick' )
);
$row1->addChild(
	"title_content_background_opacity",
	$title_content_background_opacity
);

$group2 = new QodeGroup(
	esc_html__( "Title Style", 'brick' ),
	esc_html__( 'Define style for Title', 'brick' )
);
$enable_title_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$title_span_background_color = new QodeField(
	"colorsimple",
	"title_span_background_color",
	"",
	esc_html__( "Title Background Color", 'brick' ),
	esc_html__( "Background color for title", 'brick' )
);
$row1->addChild(
	"title_span_background_color",
	$title_span_background_color
);

$title_span_background_opacity = new QodeField(
	"textsimple",
	"title_span_background_opacity",
	"",
	esc_html__( "Title Background Opacity", 'brick' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'brick' )
);
$row1->addChild(
	"title_span_background_opacity",
	$title_span_background_opacity
);

$group3 = new QodeGroup(
	esc_html__( "Title Padding", 'brick' ),
	esc_html__( 'Define padding for Title', 'brick' )
);
$enable_title_container->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$title_span_top_padding = new QodeField(
	"textsimple",
	"title_span_top_padding",
	"",
	esc_html__( "Top Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"title_span_top_padding",
	$title_span_top_padding
);

$title_span_right_padding = new QodeField(
	"textsimple",
	"title_span_right_padding",
	"",
	esc_html__( "Right Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"title_span_right_padding",
	$title_span_right_padding
);

$title_span_bottom_padding = new QodeField(
	"textsimple",
	"title_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"title_span_bottom_padding",
	$title_span_bottom_padding
);

$title_span_left_padding = new QodeField(
	"textsimple",
	"title_span_left_padding",
	"",
	esc_html__( "Left Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"title_span_left_padding",
	$title_span_left_padding
);

$subtitle_position = new QodeField(
	"select",
	"subtitle_position",
	"below_title",
	esc_html__( "Subtitle Position", 'brick' ),
	esc_html__( "Choose a Subtitle position", 'brick' ),
	array(
		"below_title" => esc_html__( "Below Title", 'brick' ),
		"above_title" => esc_html__( "Above Title", 'brick' ),
		"next_to_title" => esc_html__( "Next to Title", 'brick' )
	)
);
$enable_title_container->addChild(
	"subtitle_position",
	$subtitle_position
);

$group4 = new QodeGroup(
	esc_html__( "Subtitle Style", 'brick' ),
	esc_html__( 'Define style for subtitle', 'brick' )
);
$enable_title_container->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$subtitle_span_background_color = new QodeField(
	"colorsimple",
	"subtitle_span_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'brick' ),
	esc_html__( "Background color for subtitle", 'brick' )
);
$row1->addChild(
	"subtitle_span_background_color",
	$subtitle_span_background_color
);

$subtitle_span_background_opacity = new QodeField(
	"textsimple",
	"subtitle_span_background_opacity",
	"",
	esc_html__( "Subtitle Background Opacity", 'brick' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'brick' )
);
$row1->addChild(
	"subtitle_span_background_opacity",
	$subtitle_span_background_opacity
);

$group5 = new QodeGroup(
	esc_html__( "Subtitle Padding", 'brick' ),
	esc_html__( 'Define padding for subtitle', 'brick' )
);
$enable_title_container->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$subtitle_span_top_padding = new QodeField(
	"textsimple",
	"subtitle_span_top_padding",
	"",
	esc_html__( "Top Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"subtitle_span_top_padding",
	$subtitle_span_top_padding
);

$subtitle_span_right_padding = new QodeField(
	"textsimple",
	"subtitle_span_right_padding",
	"",
	esc_html__( "Right Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"subtitle_span_right_padding",
	$subtitle_span_right_padding
);

$subtitle_span_bottom_padding = new QodeField(
	"textsimple",
	"subtitle_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"subtitle_span_bottom_padding",
	$subtitle_span_bottom_padding
);

$subtitle_span_left_padding = new QodeField(
	"textsimple",
	"subtitle_span_left_padding",
	"",
	esc_html__( "Left Padding", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"subtitle_span_left_padding",
	$subtitle_span_left_padding
);

$panel9 = new QodePanel(
	esc_html__( 'Title Animations', 'brick' ),
	'title_animations'
);
$titlePage->addChild(
	'panel9',
	$panel9
);

//Whole title content animation
$page_title_whole_content_animations = new QodeField(
	'yesno',
	'page_title_whole_content_animations',
	'no',
	esc_html__( 'Enable Whole Title Content Animation', 'brick' ),
	esc_html__( 'This option will enable whole title content animation', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_whole_content_animations_container'
	)
);
$panel9->addChild(
	'page_title_whole_content_animations',
	$page_title_whole_content_animations
);

$page_title_whole_content_animations_container = new QodeContainer(
	'page_title_whole_content_animations_container',
	'page_title_whole_content_animations',
	'no'
);
$panel9->addChild(
	'page_title_whole_content_animations_container',
	$page_title_whole_content_animations_container
);

$page_title_whole_content_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_start',
	$page_title_whole_content_animations_data_start
);

$row1 = new QodeRow();
$page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_whole_content_data_start = new QodeField(
	'textsimple',
	'page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_title_whole_content_data_start',
	$page_title_whole_content_data_start
);

$page_title_whole_content_start_custom_style = new QodeField(
	'textareasimple',
	'page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_title_whole_content_start_custom_style',
	$page_title_whole_content_start_custom_style
);

$page_title_whole_content_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_end',
	$page_title_whole_content_animations_data_end
);

$row2 = new QodeRow();
$page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_whole_content_data_end = new QodeField(
	'textsimple',
	'page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_title_whole_content_data_end',
	$page_title_whole_content_data_end
);

$page_title_whole_content_end_custom_style = new QodeField(
	'textareasimple',
	'page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_title_whole_content_end_custom_style',
	$page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_title_contaier = new QodeContainerNoStyle(
	'animation_page_title_contaier',
	'show_page_title_text',
	'no'
);
$panel9->addChild(
	'animation_page_title_contaier',
	$animation_page_title_contaier
);

$page_title_animations = new QodeField(
	'yesno',
	'page_title_animations',
	'no',
	esc_html__( 'Enable Page Title Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_animations_container'
	)
);
$animation_page_title_contaier->addChild(
	'page_title_animations',
	$page_title_animations
);

$page_title_animations_container = new QodeContainer(
	'page_title_animations_container',
	'page_title_animations',
	'no'
);
$animation_page_title_contaier->addChild(
	'page_title_animations_container',
	$page_title_animations_container
);

$page_title_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_start',
	$page_title_animations_data_start
);

$row1 = new QodeRow();
$page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_data_start = new QodeField(
	'textsimple',
	'page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_title_data_start',
	$page_title_data_start
);

$page_title_start_custom_style = new QodeField(
	'textareasimple',
	'page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_title_start_custom_style',
	$page_title_start_custom_style
);

$page_title_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_end',
	$page_title_animations_data_end
);

$row2 = new QodeRow();
$page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_data_end = new QodeField(
	'textsimple',
	'page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_title_data_end',
	$page_title_data_end
);

$page_title_end_custom_style = new QodeField(
	'textareasimple',
	'page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_title_end_custom_style',
	$page_title_end_custom_style
);

//Title Separator Animations
$animation_page_title_separator_container = new QodeContainerNoStyle(
	'animation_page_title_separator_container',
	'title_separator',
	'no'
);
$panel9->addChild(
	'animation_page_title_separator_container',
	$animation_page_title_separator_container
);

$page_title_separator_animations = new QodeField(
	'yesno',
	'page_title_separator_animations',
	'no',
	esc_html__( 'Enable Page Separator Title Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_separator_animations_container'
	)
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations',
	$page_title_separator_animations
);

$page_title_separator_animations_container = new QodeContainer(
	'page_title_separator_animations_container',
	'page_title_separator_animations',
	'no'
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations_container',
	$page_title_separator_animations_container
);

$page_title_separator_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_start',
	$page_title_separator_animations_data_start
);

$row1 = new QodeRow();
$page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_separator_data_start = new QodeField(
	'textsimple',
	'page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_title_separator_data_start',
	$page_title_separator_data_start
);

$page_title_separator_start_custom_style = new QodeField(
	'textareasimple',
	'page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_title_separator_start_custom_style',
	$page_title_separator_start_custom_style
);

$page_title_separator_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_end',
	$page_title_separator_animations_data_end
);

$row2 = new QodeRow();
$page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_separator_data_end = new QodeField(
	'textsimple',
	'page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_title_separator_data_end',
	$page_title_separator_data_end
);

$page_title_separator_end_custom_style = new QodeField(
	'textareasimple',
	'page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_title_separator_end_custom_style',
	$page_title_separator_end_custom_style
);

//Subtitle Animations
$page_subtitle_animations = new QodeField(
	'yesno',
	'page_subtitle_animations',
	'no',
	esc_html__( 'Enable Page Subtitle Animations', 'brick' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_subtitle_animations_container'
	)
);
$panel9->addChild(
	'page_subtitle_animations',
	$page_subtitle_animations
);

$page_subtitle_animations_container = new QodeContainer(
	'page_subtitle_animations_container',
	'page_subtitle_animations',
	'no'
);
$panel9->addChild(
	'page_subtitle_animations_container',
	$page_subtitle_animations_container
);

$page_subtitle_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_start',
	$page_subtitle_animations_data_start
);

$row1 = new QodeRow();
$page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_subtitle_data_start = new QodeField(
	'textsimple',
	'page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_subtitle_data_start',
	$page_subtitle_data_start
);

$page_subtitle_start_custom_style = new QodeField(
	'textareasimple',
	'page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_subtitle_start_custom_style',
	$page_subtitle_start_custom_style
);

$page_subtitle_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_end',
	$page_subtitle_animations_data_end
);

$row2 = new QodeRow();
$page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_subtitle_data_end = new QodeField(
	'textsimple',
	'page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_subtitle_data_end',
	$page_subtitle_data_end
);

$page_subtitle_end_custom_style = new QodeField(
	'textareasimple',
	'page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_subtitle_end_custom_style',
	$page_subtitle_end_custom_style
);

//Graphic Animations
$page_title_graphic_animations = new QodeField(
	'yesno',
	'page_title_graphic_animations',
	'no',
	esc_html__( 'Enable Page Title Graphic Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_graphic_animations_container'
	)
);
$panel9->addChild(
	'page_title_graphic_animations',
	$page_title_graphic_animations
);

$page_title_graphic_animations_container = new QodeContainer(
	'page_title_graphic_animations_container',
	'page_title_graphic_animations',
	'no'
);
$panel9->addChild(
	'page_title_graphic_animations_container',
	$page_title_graphic_animations_container
);

$page_title_graphic_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_title_graphic_animations_container->addChild(
	'page_title_graphic_animations_data_start',
	$page_title_graphic_animations_data_start
);

$row1 = new QodeRow();
$page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_graphic_data_start = new QodeField(
	'textsimple',
	'page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_title_graphic_data_start',
	$page_title_graphic_data_start
);

$page_title_graphic_start_custom_style = new QodeField(
	'textareasimple',
	'page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_title_graphic_start_custom_style',
	$page_title_graphic_start_custom_style
);

$page_title_graphic_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_title_graphic_animations_container->addChild(
	'$page_title_graphic_animations_data_end',
	$page_title_graphic_animations_data_end
);

$row2 = new QodeRow();
$page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_graphic_data_end = new QodeField(
	'textsimple',
	'page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_title_graphic_data_end',
	$page_title_graphic_data_end
);

$page_title_graphic_end_custom_style = new QodeField(
	'textareasimple',
	'page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_title_graphic_end_custom_style',
	$page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_title_breadcrumbs_container = new QodeContainerNoStyle(
	'animation_page_title_breadcrumbs_container',
	'enable_breadcrumbs',
	'no'
);
$panel9->addChild(
	'animation_page_title_breadcrumbs_container',
	$animation_page_title_breadcrumbs_container
);

$page_title_breadcrumbs_animations = new QodeField(
	'yesno',
	'page_title_breadcrumbs_animations',
	'no',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_breadcrumbs_animations_container'
	)
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations',
	$page_title_breadcrumbs_animations
);

$page_title_breadcrumbs_animations_container = new QodeContainer(
	'page_title_breadcrumbs_animations_container',
	'page_title_breadcrumbs_animations',
	'no'
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations_container',
	$page_title_breadcrumbs_animations_container
);

$page_title_breadcrumbs_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_start',
	$page_title_breadcrumbs_animations_data_start
);

$row1 = new QodeRow();
$page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_breadcrumbs_data_start = new QodeField(
	'textsimple',
	'page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_title_breadcrumbs_data_start',
	$page_title_breadcrumbs_data_start
);

$page_title_breadcrumbs_start_custom_style = new QodeField(
	'textareasimple',
	'page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_title_breadcrumbs_start_custom_style',
	$page_title_breadcrumbs_start_custom_style
);

$page_title_breadcrumbs_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_end',
	$page_title_breadcrumbs_animations_data_end
);

$row2 = new QodeRow();
$page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_breadcrumbs_data_end = new QodeField(
	'textsimple',
	'page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_title_breadcrumbs_data_end',
	$page_title_breadcrumbs_data_end
);

$page_title_breadcrumbs_end_custom_style = new QodeField(
	'textareasimple',
	'page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_title_breadcrumbs_end_custom_style',
	$page_title_breadcrumbs_end_custom_style
);