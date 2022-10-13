<?php

$qode_custom_sidebars = brick_qode_get_custom_sidebars();

$qodeGeneral = new BrickQodeMetaBox(
	"post",
	esc_html__( "General", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_general",
	$qodeGeneral
);

$qode_page_background_color = new QodeMetaField(
	"color",
	"qode_page_background_color",
	"",
	esc_html__( "Page Background Color", 'brick' ),
	esc_html__( "Choose the page background (body) color", 'brick' )
);
$qodeGeneral->addChild(
	"qode_page_background_color",
	$qode_page_background_color
);

$group1 = new QodeGroup(
	esc_html__( "Content Style", 'brick' ),
	esc_html__( "Define styles for Content area", 'brick' )
);
$qodeGeneral->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_content_top_padding = new QodeMetaField(
	"textsimple",
	"qode_content-top-padding",
	"",
	esc_html__( "Content Top Padding (px)", 'brick' ),
	esc_html__( "This option control content top padding.", 'brick' )
);
$row1->addChild(
	"qode_content-top-padding",
	$qode_content_top_padding
);

$qode_content_top_padding_mobile = new QodeMetaField(
	"selectblanksimple",
	"qode_content-top-padding-mobile",
	"",
	esc_html__( "Set this top padding for mobile header", 'brick' ),
	"",
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	)
);
$row1->addChild(
	"qode_content-top-padding-mobile",
	$qode_content_top_padding_mobile
);

$qode_show_animation = new QodeMetaField(
	"selectblank",
	"qode_show-animation",
	"",
	esc_html__( "Page Transition", 'brick' ),
	esc_html__( 'Choose a type of transition between loading pages.', 'brick' ),
	array(
		"no_animation" => esc_html__( "No Animation", 'brick' ),
		"updown" => esc_html__( "Up / Down", 'brick' ),
		"fade" => esc_html__( "Fade", 'brick' ),
		"updown_fade" => esc_html__( "Up/Down (In) / Fade (Out)", 'brick' ),
		"leftright" => esc_html__( "Left / Right", 'brick' )
	),
	array(),
	"enable_grid_elements",
	array( "yes" )
);
$qodeGeneral->addChild(
	"qode_show-animation",
	$qode_show_animation
);

$page_transitions_notice = new QodeNotice(
	esc_html__( "Page Transition", 'brick' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'brick' ),
	esc_html__( "AJAX Page transitions are disabled due to VC Grid Elements", 'brick' ),
	"enable_grid_elements",
	"no"
);
$qodeGeneral->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$qode_hide_featured_image = new QodeMetaField(
	"yesno",
	"qode_hide-featured-image",
	"no",
	esc_html__( "Hide Feature image", 'brick' ),
	esc_html__( "Do you want to hide feature image for this post?", 'brick' )
);
$qodeGeneral->addChild(
	"qode_hide-featured-image",
	$qode_hide_featured_image
);

$qode_revolution_slider = new QodeMetaField(
	"text",
	"qode_revolution-slider",
	"",
	esc_html__( "Layer Slider or Select Slider Shortcode", 'brick' ),
	esc_html__( "Copy and paste your shortcode located in Select Slider -> Slider", 'brick' )
);
$qodeGeneral->addChild(
	"qode_revolution-slider",
	$qode_revolution_slider
);

//Choose article type for blog masonry gallery template
$qodePostType = new BrickQodeMetaBox(
	'post',
	esc_html__( 'Post Size', 'brick' ),
	'qode_show-page-title',
	array( 'no' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	'qodePostType',
	$qodePostType
);

$qode_blog_masonry_gallery_article_size = new QodeMetaField(
	'select',
	'qode_blog_masonry_gallery_article_size',
	'square_small',
	esc_html__( 'Size', 'brick' ),
	esc_html__( 'Choose article size in blog list for blog masonry gallery template', 'brick' ),
	array(
		'square_big' => esc_html__( 'Square Big', 'brick' ),
		'square_small' => esc_html__( 'Square Small', 'brick' ),
		'rectangle_portrait' => esc_html__( 'Rectangle Portrait', 'brick' ),
		'rectangle_landscape' => esc_html__( 'Rectangle Landscape', 'brick' )
	)
);

$qodePostType->addChild(
	'qode_blog_masonry_gallery_article_size',
	$qode_blog_masonry_gallery_article_size
);

// Side Menu Area

$qodeLeftMenuArea = new BrickQodeMetaBox(
	"post",
	esc_html__( "Side Menu Area", 'brick' ),
	"vertical_area",
	array( "no" )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_left_menu",
	$qodeLeftMenuArea
);

$qode_page_vertical_area_transparency = new QodeMetaField(
	"selectblank",
	"qode_page_vertical_area_transparency",
	"",
	esc_html__( "Enable transparent side menu area", 'brick' ),
	esc_html__( "Enabling this option will make Left Menu background transparent ", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	)
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_transparency",
	$qode_page_vertical_area_transparency
);

$qode_page_vertical_area_background = new QodeMetaField(
	"color",
	"qode_page_vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'brick' ),
	esc_html__( "Choose a color for Left Menu background", 'brick' )
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_background",
	$qode_page_vertical_area_background
);

$qode_page_vertical_area_background_opacity = new QodeMetaField(
	"text",
	"qode_page_vertical_area_background_opacity",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'brick' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_background_opacity",
	$qode_page_vertical_area_background_opacity
);

$qode_page_vertical_area_background_image = new QodeMetaField(
	"image",
	"qode_page_vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'brick' ),
	esc_html__( "Choose an image for Left Menu background", 'brick' )
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_background_image",
	$qode_page_vertical_area_background_image
);

// Header

$qodeHeader = new BrickQodeMetaBox(
	"post",
	esc_html__( "Header", 'brick' ),
	"vertical_area",
	array( "yes" )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_header",
	$qodeHeader
);

$qode_header_style = new QodeMetaField(
	"selectblank",
	"qode_header-style",
	"",
	esc_html__( "Header Skin", 'brick' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'brick' ),
	array(
		"light" => esc_html__( "Light", 'brick' ),
		"dark" => esc_html__( "Dark", 'brick' )
	)
);
$qodeHeader->addChild(
	"qode_header-style",
	$qode_header_style
);

$qode_header_style_on_scroll = new QodeMetaField(
	"selectblank",
	"qode_header-style-on-scroll",
	"",
	esc_html__( "Enable Header Style on Scroll", 'brick' ),
	esc_html__( "Enabling this option, header will change style on scroll (depending on row settings) to make header elements (logo, main menu, side menu button) in that style", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	)
);
$qodeHeader->addChild(
	"qode_header-style-on-scroll",
	$qode_header_style_on_scroll
);

$qode_header_color_per_page = new QodeMetaField(
	"color",
	"qode_header_color_per_page",
	"",
	esc_html__( "Initial Header Background Color", 'brick' ),
	esc_html__( "Choose a background color for header area", 'brick' )
);
$qodeHeader->addChild(
	"qode_header_color_per_page",
	$qode_header_color_per_page
);

$qode_header_color_transparency_per_page = new QodeMetaField(
	"text",
	"qode_header_color_transparency_per_page",
	"",
	esc_html__( "Initial Header Transparency", 'brick' ),
	esc_html__( "Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qodeHeader->addChild(
	"qode_header_color_transparency_per_page",
	$qode_header_color_transparency_per_page
);

$qode_header_bottom_border_color = new QodeMetaField(
	"color",
	"qode_header_bottom_border_color",
	"",
	esc_html__( "Initial Header Bottom Border Color", 'brick' ),
	esc_html__( "Choose a bottom border color for header area", 'brick' )
);
$qodeHeader->addChild(
	"qode_header_bottom_border_color",
	$qode_header_bottom_border_color
);

$qode_page_scroll_amount_for_sticky = new QodeMetaField(
	"text",
	"qode_page_scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll amount for sticky header appearance (px)", 'brick' ),
	esc_html__( "Define scroll amount for sticky header appearance", 'brick' ),
	array(),
	array( "col_width" => 3 ),
	"header_bottom_appearance",
	array( "regular", "fixed", "fixed_hiding" )
);
$qodeHeader->addChild(
	"qode_page_scroll_amount_for_sticky",
	$qode_page_scroll_amount_for_sticky
);

$qode_page_hide_initial_sticky = new QodeMetaField(
	"selectblank",
	"qode_page_hide_initial_sticky",
	"",
	esc_html__( "Hide Sticky Header Initially", 'brick' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	)
);
$qodeHeader->addChild(
	"qode_page_hide_initial_sticky",
	$qode_page_hide_initial_sticky
);

// Title

$qodeTitle = new BrickQodeMetaBox(
	"post",
	esc_html__( "Title", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_title",
	$qodeTitle
);

$qode_show_page_title = new QodeMetaField(
	"selectblank",
	"qode_show-page-title",
	"",
	esc_html__( "Show Title Area", 'brick' ),
	esc_html__( "Disabling this option will turn off page title area", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_page_title_area_container, #qodef-meta-box-post_title_animations"
		),
		"show"       => array(
			""    => "#qodef_qode_page_title_area_container, #qodef-meta-box-post_title_animations",
			"yes" => "#qodef_qode_page_title_area_container, #qodef-meta-box-post_title_animations"
		)
	)
);
$qodeTitle->addChild(
	"qode_show-page-title",
	$qode_show_page_title
);

$qode_page_title_area_container = new QodeContainer(
	"qode_page_title_area_container",
	"qode_show-page-title",
	"no"
);
$qodeTitle->addChild(
	"qode_page_title_area_container",
	$qode_page_title_area_container
);

$qode_page_title_type = new QodeMetaField(
	"selectblank",
	"qode_page_title_type",
	"",
	esc_html__( "Title Type", 'brick' ),
	esc_html__( "Choose title type for this page.", 'brick' ),
	array(
		"standard_title" => esc_html__( "Standard", 'brick' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumbs", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#qodef_qode_title_standard_container" ),
		"show"       => array(
			"standard_title" => "#qodef_qode_title_standard_container",
			""               => "#qodef_qode_title_standard_container"
		)
	)
);
$qode_page_title_area_container->addChild(
	"qode_page_title_type",
	$qode_page_title_type
);

$qode_animate_page_title = new QodeMetaField(
	"selectblank",
	"qode_animate_page_title",
	"",
	esc_html__( "Animations", 'brick' ),
	esc_html__( "Choose an animation for Title Area", 'brick' ),
	array(
		"no" => esc_html__( "No animation", 'brick' ),
		"text_right_left" => esc_html__( "Text right to left", 'brick' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'brick' )
	)
);
$qode_page_title_area_container->addChild(
	"qode_animate_page_title",
	$qode_animate_page_title
);

$qode_page_page_title_vertical_aligment = new QodeMetaField(
	"selectblank",
	"qode_page_page_title_vertical_aligment",
	"",
	esc_html__( "Vertical Alignment", 'brick' ),
	esc_html__( "Specify Title vertical alignment", 'brick' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'brick' ),
		"window_top" => esc_html__( "From Window Top", 'brick' )
	)
);
$qode_page_title_area_container->addChild(
	"qode_page_page_title_vertical_aligment",
	$qode_page_page_title_vertical_aligment
);

$qode_show_page_title_text = new QodeMetaField(
	"selectblank",
	"qode_show_page_title_text",
	"",
	esc_html__( "Show Title Text", 'brick' ),
	esc_html__( "Disabling this option will turn off page title text", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_title_text_container, #qodef_animation_page_page_title_container"
		),
		"show"       => array(
			""    => "#qodef_qode_title_text_container, #qodef_animation_page_page_title_container",
			"yes" => "#qodef_qode_title_text_container, #qodef_animation_page_page_title_container"
		)
	)
);
$qode_page_title_area_container->addChild(
	"qode_show_page_title_text",
	$qode_show_page_title_text
);

$qode_title_text_container = new QodeContainer(
	"qode_title_text_container",
	"qode_show_page_title_text",
	"no"
);
$qode_page_title_area_container->addChild(
	"qode_title_text_container",
	$qode_title_text_container
);

$qode_page_title_position = new QodeMetaField(
	"selectblank",
	"qode_page_title_position",
	"",
	esc_html__( "Title Text Alignment", 'brick' ),
	esc_html__( "Specify Title text alignment", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$qode_title_text_container->addChild(
	"qode_page_title_position",
	$qode_page_title_position
);

$group1 = new QodeGroup(
	esc_html__( "Title Text Style", 'brick' ),
	esc_html__( "Define styles for text in Title Area", 'brick' )
);
$qode_title_text_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_page_title_color = new QodeMetaField(
	"colorsimple",
	"qode_page-title-color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "ThisIsDescription", 'brick' )
);
$row1->addChild(
	"qode_page-title-color",
	$qode_page_title_color
);

$qode_title_text_shadow = new QodeMetaField(
	"selectblanksimple",
	"qode_title_text_shadow",
	"",
	esc_html__( "Text Shadow", 'brick' ),
	esc_html__( "ThisIsDescription", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "yes", 'brick' )
	)
);
$row1->addChild(
	"qode_title_text_shadow",
	$qode_title_text_shadow
);

$qode_title_standard_container = new QodeContainer(
	"qode_title_standard_container",
	"qode_page_title_type",
	"breadcrumbs_title"
);
$qode_page_title_area_container->addChild(
	"qode_title_standard_container",
	$qode_title_standard_container
);

$qode_title_like_separator = new QodeMetaField(
	"selectblank",
	"qode_title_like_separator",
	"",
	esc_html__( "Show Separator Around Title Text", 'brick' ),
	esc_html__( "Choose if you want title to look like separator with text", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#qodef_qode_title_like_separator_container",
			"no" => "#qodef_qode_title_like_separator_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_title_like_separator_container",
		)
	)
);
$qode_title_standard_container->addChild(
	"qode_title_like_separator",
	$qode_title_like_separator
);

$qode_title_like_separator_container = new QodeContainer(
	"qode_title_like_separator_container",
	"qode_title_like_separator",
	"",
	array( "", "no" )
);
$qode_title_standard_container->addChild(
	"qode_title_like_separator_container",
	$qode_title_like_separator_container
);

$group1 = new QodeGroup(
	esc_html__( "Line Styles", 'brick' ),
	esc_html__( "Choose style for separator line", 'brick' )
);
$qode_title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_like_separator_line_color = new QodeMetaField(
	"colorsimple",
	"qode_title_like_separator_line_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_like_separator_line_color",
	$qode_title_like_separator_line_color
);

$qode_title_like_separator_line_width = new QodeMetaField(
	"textsimple",
	"qode_title_like_separator_line_width",
	"",
	esc_html__( "Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_like_separator_line_width",
	$qode_title_like_separator_line_width
);

$qode_title_like_separator_line_thickness = new QodeMetaField(
	"textsimple",
	"qode_title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_like_separator_line_thickness",
	$qode_title_like_separator_line_thickness
);

$qode_title_like_separator_line_style = new QodeMetaField(
	"selectsimple",
	"qode_title_like_separator_line_style",
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
	"qode_title_like_separator_line_style",
	$qode_title_like_separator_line_style
);

$qode_title_like_separator_margins = new QodeMetaField(
	"text",
	"qode_title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'brick' ),
	esc_html__( "Define left/right margins for title from separator", 'brick' )
);
$qode_title_like_separator_container->addChild(
	"qode_title_like_separator_margins",
	$qode_title_like_separator_margins
);

$qode_title_like_separator_line_dots = new QodeMetaField(
	"selectblank",
	"qode_title_like_separator_line_dots",
	"",
	esc_html__( "Dots on The End of Lines", 'brick' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "no" => "#qodef_qode_title_like_separator_dots_container" ),
		"show"       => array(
			"yes" => "#qodef_qode_title_like_separator_dots_container",
			""    => "#qodef_qode_title_like_separator_dots_container"
		)
	)
);
$qode_title_like_separator_container->addChild(
	"qode_title_like_separator_line_dots",
	$qode_title_like_separator_line_dots
);

$qode_title_like_separator_dots_container = new QodeContainer(
	"qode_title_like_separator_dots_container",
	"qode_title_like_separator_line_dots",
	"no"
);
$qode_title_like_separator_container->addChild(
	"qode_title_like_separator_dots_container",
	$qode_title_like_separator_dots_container
);

$group1 = new QodeGroup(
	esc_html__( "Dots Style", 'brick' ),
	esc_html__( "Choose style for dots", 'brick' )
);
$qode_title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_like_separator_dots_size = new QodeMetaField(
	"textsimple",
	"qode_title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_like_separator_dots_size",
	$qode_title_like_separator_dots_size
);

$qode_title_like_separator_dots_color = new QodeMetaField(
	"colorsimple",
	"qode_title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_like_separator_dots_color",
	$qode_title_like_separator_dots_color
);

//Subtitle like separator with text
$qode_subtitle_like_separator = new QodeMetaField(
	"selectblank",
	"qode_subtitle_like_separator",
	"",
	esc_html__( "Show Separator Around Subtitle Text", 'brick' ),
	esc_html__( "Choose if you want title to look like separator with text", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_subtitle_like_separator_container",
			""   => "#qodef_qode_subtitle_like_separator_container"
		),
		"show"       => array( "yes" => "#qodef_qode_subtitle_like_separator_container" )
	)
);
$qode_title_standard_container->addChild(
	"qode_subtitle_like_separator",
	$qode_subtitle_like_separator
);

$qode_subtitle_like_separator_container = new QodeContainer(
	"qode_subtitle_like_separator_container",
	"qode_subtitle_like_separator",
	"",
	array( 'no', '' )
);
$qode_title_standard_container->addChild(
	"qode_subtitle_like_separator_container",
	$qode_subtitle_like_separator_container
);

$group1 = new QodeGroup(
	esc_html__( "Line Styles", 'brick' ),
	esc_html__( "Choose style for separator line", 'brick' )
);
$qode_subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_subtitle_like_separator_line_color = new QodeMetaField(
	"colorsimple",
	"qode_subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_subtitle_like_separator_line_color",
	$qode_subtitle_like_separator_line_color
);

$qode_subtitle_like_separator_line_width = new QodeMetaField(
	"textsimple",
	"qode_subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_subtitle_like_separator_line_width",
	$qode_subtitle_like_separator_line_width
);

$qode_subtitle_like_separator_line_thickness = new QodeMetaField(
	"textsimple",
	"qode_subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_subtitle_like_separator_line_thickness",
	$qode_subtitle_like_separator_line_thickness
);

$qode_subtitle_like_separator_line_style = new QodeMetaField(
	"selectsimple",
	"qode_subtitle_like_separator_line_style",
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
	"qode_subtitle_like_separator_line_style",
	$qode_subtitle_like_separator_line_style
);

$qode_page_title_background_color = new QodeMetaField(
	"color",
	"qode_page-title-background-color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for Title Area", 'brick' )
);
$qode_page_title_area_container->addChild(
	"qode_page-title-background-color",
	$qode_page_title_background_color
);

$qode_show_page_title_image = new QodeMetaField(
	"yesno",
	"qode_show-page-title-image",
	"no",
	esc_html__( "Don't Show Background Image", 'brick' ),
	esc_html__( "Enable this option to hide background image in Title Area", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_qode_background_image_container",
		"dependence_show_on_yes" => ""
	)
);
$qode_page_title_area_container->addChild(
	"qode_show-page-title-image",
	$qode_show_page_title_image
);

$qode_background_image_container = new QodeContainer(
	"qode_background_image_container",
	"qode_show-page-title-image",
	"yes"
);
$qode_page_title_area_container->addChild(
	"qode_background_image_container",
	$qode_background_image_container
);

$qode_title_image = new QodeMetaField(
	"image",
	"qode_title-image",
	"",
	esc_html__( "Background Image", 'brick' ),
	esc_html__( "Choose a background image for Title Area", 'brick' )
);
$qode_background_image_container->addChild(
	"qode_title-image",
	$qode_title_image
);

$qode_title_overlay_image = new QodeMetaField(
	"image",
	"qode_title-overlay-image",
	"",
	esc_html__( "Pattern Overlay Image", 'brick' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'brick' )
);
$qode_background_image_container->addChild(
	"qode_title-overlay-image",
	$qode_title_overlay_image
);

$qode_responsive_title_image = new QodeMetaField(
	"selectblank",
	"qode_responsive-title-image",
	"",
	esc_html__( "Responsive Background Image", 'brick' ),
	esc_html__( "Do you want to make Title background image responsive?", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"yes" => "#qodef_qode_responsive_title_image_container, #qodef_qode_title-height"
		),
		"show"       => array(
			""   => "#qodef_qode_responsive_title_image_container, #qodef_qode_title-height",
			"no" => "#qodef_qode_responsive_title_image_container, #qodef_qode_title-height"
		)
	)
);
$qode_background_image_container->addChild(
	"qode_responsive-title-image",
	$qode_responsive_title_image
);

$qode_responsive_title_image_container = new QodeContainer(
	"qode_responsive_title_image_container",
	"qode_responsive-title-image",
	"yes"
);
$qode_background_image_container->addChild(
	"qode_responsive_title_image_container",
	$qode_responsive_title_image_container
);

$qode_fixed_title_image = new QodeMetaField(
	"selectblank",
	"qode_fixed-title-image",
	"",
	esc_html__( "Parallax Background Image", 'brick' ),
	esc_html__( "Do you want background image to have parallax effect?", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'brick' )
	)
);
$qode_responsive_title_image_container->addChild(
	"qode_fixed-title-image",
	$qode_fixed_title_image
);

//Separator

$qode_title_separator = new QodeMetaField(
	"selectblank",
	"qode_title_separator",
	"",
	esc_html__( "Show Title Separator", 'brick' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_title_separator_container",
			""   => "#qodef_qode_title_separator_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_title_separator_container"
		)
	)
);
$qode_title_standard_container->addChild(
	"qode_title_separator",
	$qode_title_separator
);

$qode_title_separator_container = new QodeContainer(
	"qode_title_separator_container",
	"qode_title_separator",
	"",
	array( 'no', '' )
);
$qode_title_standard_container->addChild(
	"qode_title_separator_container",
	$qode_title_separator_container
);

$qode_title_separator_format = new QodeMetaField(
	"select",
	"qode_title_separator_format",
	"",
	esc_html__( "Format", 'brick' ),
	esc_html__( "Choose a format (type) of separator", 'brick' ),
	array(
		""                 => "",
		"normal" => esc_html__( "Normal", 'brick' ),
		"with_icon" => esc_html__( "With Icon", 'brick' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                 => "#qodef_qode_separator_with_icon_container, #qodef_qode_separator_with_custom_icon_container",
			"normal"           => "#qodef_qode_separator_with_icon_container, #qodef_qode_separator_with_custom_icon_container",
			"with_custom_icon" => "#qodef_qode_separator_with_icon_container",
			"with_icon"        => "#qodef_qode_separator_with_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#qodef_qode_separator_with_icon_container",
			"with_custom_icon" => "#qodef_qode_separator_with_custom_icon_container"
		)
	)
);

$qode_title_separator_container->addChild(
	"qode_title_separator_format",
	$qode_title_separator_format
);

$qode_separator_with_icon_container = new QodeContainer(
	"qode_separator_with_icon_container",
	"qode_title_separator_format",
	"normal",
	array( "normal", "with_custom_icon", "" )
);
$qode_title_separator_container->addChild(
	"qode_separator_with_icon_container",
	$qode_separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array     = array();
$separator_icon_pack_show_array     = array();
$separator_icon_pack_hide_array[""] = "";

//do we have some collection added in collections array?
if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = brick_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( brick_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#qodef_qode_separator_icon_' . $dep_collection_object->param . '_container';
		$separator_icon_pack_hide_array[""]                    .= '#qodef_qode_separator_icon_' . $dep_collection_object->param . '_container,';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_qode_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		
	}
	
	$separator_icon_pack_hide_array[""] = rtrim(
		$separator_icon_pack_hide_array[""],
		','
	);
	
}

$qode_separator_icon_pack = new QodeMetaField(
	"selectblank",
	"qode_separator_icon_pack",
	"",
	esc_html__( "Separator Icon Pack", 'brick' ),
	esc_html__( "Choose icon pack for separator", 'brick' ),
	brick_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$qode_separator_with_icon_container->addChild(
	"qode_separator_icon_pack",
	$qode_separator_icon_pack
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
		
		$separator_icon_hide_values    = $icon_collections_keys;
		$separator_icon_hide_values[]  = "";
		$qode_separator_icon_container = new QodeContainer(
			"qode_separator_icon_" . $collection_object->param . "_container",
			"qode_separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$qode_separator_icon           = new QodeMetaField(
			"select",
			"qode_separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'brick' ),
			esc_html__( "Choose Separator Icon", 'brick' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$qode_separator_icon_container->addChild(
			"qode_separator_icon_" . $collection_object->param,
			$qode_separator_icon
		);
		
		$qode_separator_with_icon_container->addChild(
			"qode_separator_icon_" . $collection_object->param . "_container",
			$qode_separator_icon_container
		);
	}
	
}

$group1 = new QodeGroup(
	esc_html__( "Icon Style", 'brick' ),
	esc_html__( "Choose icon style", 'brick' )
);
$qode_separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_color = new QodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color of icon for Title separator", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_color",
	$qode_title_separator_icon_color
);

$qode_title_separator_icon_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_hover_color",
	$qode_title_separator_icon_hover_color
);

$qode_title_separator_icon_custom_size = new QodeMetaField(
	"textsimple",
	"qode_title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'brick' ),
	esc_html__( "Choose size of icon", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_custom_size",
	$qode_title_separator_icon_custom_size
);

$group2 = new QodeGroup(
	esc_html__( "Icon Position and Margin", 'brick' ),
	esc_html__( "Choose icon position and left(right) margin", 'brick' )
);
$qode_separator_with_icon_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_position = new QodeMetaField(
	"selectsimple",
	"qode_title_separator_icon_position",
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
	"qode_title_separator_icon_position",
	$qode_title_separator_icon_position
);

$qode_title_separator_icon_margins = new QodeMetaField(
	"textsimple",
	"qode_title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'brick' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_margins",
	$qode_title_separator_icon_margins
);

$qode_title_separator_icon_type = new QodeMetaField(
	"selectblank",
	"qode_title_separator_icon_type",
	"",
	esc_html__( "Icon Type", 'brick' ),
	esc_html__( "Choose icon type", 'brick' ),
	array(
		"normal" => esc_html__( "Normal", 'brick' ),
		"circle" => esc_html__( "Circle", 'brick' ),
		"square" => esc_html__( "Square", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal" => "#qodef_qode_title_separator_types_container",
			""       => "#qodef_qode_title_separator_types_container"
		),
		"show"       => array(
			"circle" => "#qodef_qode_title_separator_types_container",
			"square" => "#qodef_qode_title_separator_types_container"
		)
	)
);
$qode_separator_with_icon_container->addChild(
	"qode_title_separator_icon_type",
	$qode_title_separator_icon_type
);

$qode_title_separator_types_container = new QodeContainer(
	"qode_title_separator_types_container",
	"qode_title_separator_icon_type",
	"",
	array( "", "normal" )
);
$qode_separator_with_icon_container->addChild(
	"qode_title_separator_types_container",
	$qode_title_separator_types_container
);

$group1 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define border style for icon", 'brick' )
);
$qode_title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_border_radius = new QodeMetaField(
	"textsimple",
	"qode_title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "Enter border radius for icon", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_border_radius",
	$qode_title_separator_icon_border_radius
);

$qode_title_separator_icon_border_width = new QodeMetaField(
	"textsimple",
	"qode_title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "Enter border width for icon", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_border_width",
	$qode_title_separator_icon_border_width
);

$qode_title_separator_icon_border_color = new QodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Enter border color for icon", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_border_color",
	$qode_title_separator_icon_border_color
);

$qode_title_separator_icon_border_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "Enter border color for icon", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_border_hover_color",
	$qode_title_separator_icon_border_hover_color
);

$group2 = new QodeGroup(
	esc_html__( "Additional Icon Style", 'brick' ),
	esc_html__( "Choose adition icon styling", 'brick' )
);
$qode_title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_shape_size = new QodeMetaField(
	"textsimple",
	"qode_title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_shape_size",
	$qode_title_separator_icon_shape_size
);

$qode_title_separator_icon_background_color = new QodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_background_color",
	$qode_title_separator_icon_background_color
);

$qode_title_separator_icon_background_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_separator_icon_background_hover_color",
	$qode_title_separator_icon_background_hover_color
);

$qode_separator_with_custom_icon_container = new QodeContainer(
	"qode_separator_with_custom_icon_container",
	"qode_title_separator_format",
	"normal",
	array( "normal", "with_icon", "" )
);
$qode_title_separator_container->addChild(
	"qode_separator_with_custom_icon_container",
	$qode_separator_with_custom_icon_container
);

$qode_separator_custom_icon = new QodeMetaField(
	"image",
	"qode_separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'brick' ),
	esc_html__( "Choose custom icon for separator", 'brick' )
);
$qode_separator_with_custom_icon_container->addChild(
	"qode_separator_custom_icon",
	$qode_separator_custom_icon
);

$qode_title_separator_type = new QodeMetaField(
	"select",
	"qode_title_separator_type",
	"",
	esc_html__( "Type", 'brick' ),
	esc_html__( "Choose a Title separator line style", 'brick' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' )
	)
);
$qode_title_separator_container->addChild(
	"qode_title_separator_type",
	$qode_title_separator_type
);

$qode_title_separator_position = new QodeMetaField(
	"select",
	"qode_title_separator_position",
	"",
	esc_html__( "Position", 'brick' ),
	esc_html__( "Choose a Title separator position", 'brick' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'brick' ),
		"below" => esc_html__( "Below Title", 'brick' )
	)
);
$qode_title_separator_container->addChild(
	"qode_title_separator_position",
	$qode_title_separator_position
);

$qode_title_separator_color = new QodeMetaField(
	"color",
	"qode_title_separator_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color for Title separator", 'brick' )
);
$qode_title_separator_container->addChild(
	"qode_title_separator_color",
	$qode_title_separator_color
);

$group1 = new QodeGroup(
	esc_html__( "Size", 'brick' ),
	esc_html__( 'Define size for Title separator', 'brick' )
);
$qode_title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_separator_thickness = new QodeMetaField(
	"textsimple",
	"qode_title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_separator_thickness",
	$qode_title_separator_thickness
);

$qode_title_separator_width = new QodeMetaField(
	"textsimple",
	"qode_title_separator_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_separator_width",
	$qode_title_separator_width
);

$group2 = new QodeGroup(
	esc_html__( "Margin", 'brick' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'brick' )
);
$qode_title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qode_title_separator_topmargin = new QodeMetaField(
	"textsimple",
	"qode_title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_separator_topmargin",
	$qode_title_separator_topmargin
);

$qode_title_separator_bottommargin = new QodeMetaField(
	"textsimple",
	"qode_title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_title_separator_bottommargin",
	$qode_title_separator_bottommargin
);

$qode_title_graphics = new QodeMetaField(
	"image",
	"qode_title-graphics",
	"",
	esc_html__( "Title Graphics", 'brick' ),
	esc_html__( "Choose a graphic for Title Area, appearing above title", 'brick' )
);
$qode_title_standard_container->addChild(
	"qode_title-graphics",
	$qode_title_graphics
);

$qode_title_height = new QodeMetaField(
	"text",
	"qode_title-height",
	"",
	esc_html__( "Title Height (px)", 'brick' ),
	esc_html__( "Set a height for Title Area in pixels", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qode_page_title_area_container->addChild(
	"qode_title-height",
	$qode_title_height
);

$qode_enable_breadcrumbs = new QodeMetaField(
	"selectblank",
	"qode_enable_breadcrumbs",
	"",
	esc_html__( "Enable Breadcrumbs", 'brick' ),
	esc_html__( "Do you want to display breadcrumbs in title area?", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#qodef_animation_page_page_title_breadcrumbs_container",
			"no" => "#qodef_animation_page_page_title_breadcrumbs_container"
		),
		"show"       => array(
			"yes" => "#qodef_animation_page_page_title_breadcrumbs_container"
		)
	)
);
$qode_page_title_area_container->addChild(
	"qode_enable_breadcrumbs",
	$qode_enable_breadcrumbs
);

$qode_page_breadcrumbs_color = new QodeMetaField(
	"color",
	"qode_page_breadcrumbs_color",
	"",
	esc_html__( "Breadcrumbs Color", 'brick' ),
	esc_html__( "Choose a color for breadcrumbs text ", 'brick' )
);
$qode_page_title_area_container->addChild(
	"qode_page_breadcrumbs_color",
	$qode_page_breadcrumbs_color
);

$qode_page_subtitle = new QodeMetaField(
	"text",
	"qode_page_subtitle",
	"",
	esc_html__( "Subtitle Text", 'brick' ),
	esc_html__( "Enter your subtitle text", 'brick' )
);
$qode_page_title_area_container->addChild(
	"qode_page_subtitle",
	$qode_page_subtitle
);

$qode_page_subtitle_position = new QodeMetaField(
	"selectblank",
	"qode_page_subtitle_position",
	"",
	esc_html__( "Subtitle Position", 'brick' ),
	esc_html__( "Choose a Subtitle position", 'brick' ),
	array(
		"below_title" => esc_html__( "Below Title", 'brick' ),
		"above_title" => esc_html__( "Above Title", 'brick' )
	)
);
$qode_page_title_area_container->addChild(
	"qode_page_subtitle_position",
	$qode_page_subtitle_position
);

$qode_page_subtitle_color = new QodeMetaField(
	"color",
	"qode_page_subtitle_color",
	"",
	esc_html__( "Subtitle Text Color", 'brick' ),
	esc_html__( "Choose a color for subtitle text", 'brick' )
);
$qode_page_title_area_container->addChild(
	"qode_page_subtitle_color",
	$qode_page_subtitle_color
);

$qode_title_content_style = new QodeGroup(
	esc_html__( "Title Content Style", 'brick' ),
	esc_html__( "Define style for title area content", 'brick' )
);
$qode_page_title_area_container->addChild(
	"qode_title_content_style",
	$qode_title_content_style
);

$row1 = new QodeRow();
$qode_title_content_style->addChild(
	"row1",
	$row1
);

$qode_title_area_content_background_color = new QodeMetaField(
	"colorsimple",
	"qode_title_area_content_background_color",
	"",
	esc_html__( "Title Area Content Background Color", 'brick' ),
	esc_html__( "Choose a background color for Title Area Content", 'brick' )
);
$row1->addChild(
	"qode_title_area_content_background_color",
	$qode_title_area_content_background_color
);

$qode_title_area_content_opacity = new QodeMetaField(
	"textsimple",
	"qode_title_area_content_opacity",
	"",
	esc_html__( "Title Area Content Background Color Opacity", 'brick' ),
	esc_html__( "Choose a transparency for the content area background color (0 = fully transparent, 1 = opaque)", 'brick' )
);
$row1->addChild(
	"qode_title_area_content_opacity",
	$qode_title_area_content_opacity
);

$qode_title_style = new QodeGroup(
	esc_html__( "Title Style", 'brick' ),
	esc_html__( "Define style for title", 'brick' )
);
$qode_page_title_area_container->addChild(
	"qode_title_style",
	$qode_title_style
);

$row1 = new QodeRow();
$qode_title_style->addChild(
	"row1",
	$row1
);

$qode_title_background_color = new QodeMetaField(
	"colorsimple",
	"qode_title_background_color",
	"",
	esc_html__( "Title Background Color", 'brick' ),
	esc_html__( "Choose a background color for Title", 'brick' )
);
$row1->addChild(
	"qode_title_background_color",
	$qode_title_background_color
);

$qode_title_opacity = new QodeMetaField(
	"textsimple",
	"qode_title_opacity",
	"",
	esc_html__( "Title Background Color Opacity", 'brick' ),
	esc_html__( "Choose a transparency for the title background color (0 = fully transparent, 1 = opaque)", 'brick' )
);
$row1->addChild(
	"qode_title_opacity",
	$qode_title_opacity
);

$title_padding_group = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for title (When using separator around title, only right margin is counted for left/right margin)", 'brick' )
);
$qode_page_title_area_container->addChild(
	"title_padding_group",
	$title_padding_group
);

$row1 = new QodeRow( true );
$title_padding_group->addChild(
	"row1",
	$row1
);

$qode_title_top_padding = new QodeMetaField(
	"textsimple",
	"qode_title_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_title_top_padding",
	$qode_title_top_padding
);

$qode_title_right_padding = new QodeMetaField(
	"textsimple",
	"qode_title_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_title_right_padding",
	$qode_title_right_padding
);

$qode_title_bottom_padding = new QodeMetaField(
	"textsimple",
	"qode_title_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_title_bottom_padding",
	$qode_title_bottom_padding
);

$qode_title_left_padding = new QodeMetaField(
	"textsimple",
	"qode_title_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_title_left_padding",
	$qode_title_left_padding
);

$qode_subtitle_style = new QodeGroup(
	esc_html__( "Subtitle Style", 'brick' ),
	esc_html__( "Define style for subtitle", 'brick' )
);
$qode_page_title_area_container->addChild(
	"qode_subtitle_style",
	$qode_subtitle_style
);

$row1 = new QodeRow();
$qode_subtitle_style->addChild(
	"row1",
	$row1
);

$qode_subtitle_background_color = new QodeMetaField(
	"colorsimple",
	"qode_subtitle_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'brick' ),
	esc_html__( "Choose a background color for Subtitle", 'brick' )
);
$row1->addChild(
	"qode_subtitle_background_color",
	$qode_subtitle_background_color
);

$qode_subtitle_opacity = new QodeMetaField(
	"textsimple",
	"qode_subtitle_opacity",
	"",
	esc_html__( "Subtitle Background Color Opacity", 'brick' ),
	esc_html__( "Choose a transparency for the subtitle background color (0 = fully transparent, 1 = opaque)", 'brick' )
);
$row1->addChild(
	"qode_subtitle_opacity",
	$qode_subtitle_opacity
);

$subtitle_padding_group = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for subtitle (When using separator around subtitle, only right margin is counted for left/right margin)", 'brick' )
);
$qode_page_title_area_container->addChild(
	"subtitle_padding_group",
	$subtitle_padding_group
);
$row1 = new QodeRow( true );
$subtitle_padding_group->addChild(
	"row1",
	$row1
);

$qode_subtitle_top_padding = new QodeMetaField(
	"textsimple",
	"qode_subtitle_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_subtitle_top_padding",
	$qode_subtitle_top_padding
);

$qode_subtitle_right_padding = new QodeMetaField(
	"textsimple",
	"qode_subtitle_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_subtitle_right_padding",
	$qode_subtitle_right_padding
);

$qode_subtitle_bottom_padding = new QodeMetaField(
	"textsimple",
	"qode_subtitle_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_subtitle_bottom_padding",
	$qode_subtitle_bottom_padding
);

$qode_subtitle_left_padding = new QodeMetaField(
	"textsimple",
	"qode_subtitle_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description.", 'brick' )
);
$row1->addChild(
	"qode_subtitle_left_padding",
	$qode_subtitle_left_padding
);

//Post Title Animations
$qodeTitleAnimations = new BrickQodeMetaBox(
	'post',
	esc_html__( 'Title Animations', 'brick' ),
	'qode_show-page-title',
	array( 'no' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	'post_title_animations',
	$qodeTitleAnimations
);

//Whole title content animation
$page_page_title_whole_content_animations = new QodeMetaField(
	'selectblank',
	'page_page_title_whole_content_animations',
	'',
	esc_html__( 'Enable Whole Title Content Animation', 'brick' ),
	esc_html__( 'This option will enable whole title content animation', 'brick' ),
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_whole_content_animations_container',
			'no' => '#qodef_page_page_title_whole_content_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_whole_content_animations_container'
		)
	)
);
$qodeTitleAnimations->addChild(
	'page_page_title_whole_content_animations',
	$page_page_title_whole_content_animations
);

$page_page_title_whole_content_animations_container = new QodeContainer(
	'page_page_title_whole_content_animations_container',
	'page_page_title_whole_content_animations',
	'',
	array( '', 'no' )
);
$qodeTitleAnimations->addChild(
	'page_page_title_whole_content_animations_container',
	$page_page_title_whole_content_animations_container
);

$page_page_title_whole_content_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_start',
	$page_page_title_whole_content_animations_data_start
);

$row1 = new QodeRow();
$page_page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_whole_content_data_start = new QodeMetaField(
	'textsimple',
	'page_page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_page_title_whole_content_data_start',
	$page_page_title_whole_content_data_start
);

$page_page_title_whole_content_start_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_page_title_whole_content_start_custom_style',
	$page_page_title_whole_content_start_custom_style
);

$page_page_title_whole_content_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_end',
	$page_page_title_whole_content_animations_data_end
);

$row2 = new QodeRow();
$page_page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_whole_content_data_end = new QodeMetaField(
	'textsimple',
	'page_page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_page_title_whole_content_data_end',
	$page_page_title_whole_content_data_end
);

$page_page_title_whole_content_end_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_page_title_whole_content_end_custom_style',
	$page_page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_page_title_container = new QodeContainerNoStyle(
	'animation_page_page_title_container',
	'qode_show_page_title_text',
	'no'
);
$qodeTitleAnimations->addChild(
	'animation_page_page_title_container',
	$animation_page_page_title_container
);

$page_page_title_animations = new QodeMetaField(
	'selectblank',
	'page_page_title_animations',
	'',
	esc_html__( 'Enable Page Title Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'brick' ),
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_animations_container',
			'no' => '#qodef_page_page_title_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_animations_container'
		)
	)
);

$animation_page_page_title_container->addChild(
	'page_page_title_animations',
	$page_page_title_animations
);

$page_page_title_animations_container = new QodeContainer(
	'page_page_title_animations_container',
	'page_page_title_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_container->addChild(
	'page_page_title_animations_container',
	$page_page_title_animations_container
);

$page_page_title_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_start',
	$page_page_title_animations_data_start
);

$row1 = new QodeRow();
$page_page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_data_start = new QodeMetaField(
	'textsimple',
	'page_page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_page_title_data_start',
	$page_page_title_data_start
);

$page_page_title_start_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_page_title_start_custom_style',
	$page_page_title_start_custom_style
);

$page_page_title_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_end',
	$page_page_title_animations_data_end
);

$row2 = new QodeRow();
$page_page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_data_end = new QodeMetaField(
	'textsimple',
	'page_page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_page_title_data_end',
	$page_page_title_data_end
);

$page_page_title_end_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_page_title_end_custom_style',
	$page_page_title_end_custom_style
);

//Title Separator Animations
$page_page_title_separator_animations = new QodeMetaField(
	'selectblank',
	'page_page_title_separator_animations',
	'',
	esc_html__( 'Enable Page Separator Title Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'brick' ),
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_separator_animations_container',
			'no' => '#qodef_page_page_title_separator_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_separator_animations_container'
		)
	)
);
$qodeTitleAnimations->addChild(
	'page_page_title_separator_animations',
	$page_page_title_separator_animations
);

$page_page_title_separator_animations_container = new QodeContainer(
	'page_page_title_separator_animations_container',
	'page_page_title_separator_animations',
	'',
	array( 'no', '' )
);
$qodeTitleAnimations->addChild(
	'page_page_title_separator_animations_container',
	$page_page_title_separator_animations_container
);

$page_page_title_separator_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_start',
	$page_page_title_separator_animations_data_start
);

$row1 = new QodeRow();
$page_page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_separator_data_start = new QodeMetaField(
	'textsimple',
	'page_page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_page_title_separator_data_start',
	$page_page_title_separator_data_start
);

$page_page_title_separator_start_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_page_title_separator_start_custom_style',
	$page_page_title_separator_start_custom_style
);

$page_page_title_separator_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_end',
	$page_page_title_separator_animations_data_end
);

$row2 = new QodeRow();
$page_page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_separator_data_end = new QodeMetaField(
	'textsimple',
	'page_page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_page_title_separator_data_end',
	$page_page_title_separator_data_end
);

$page_page_title_separator_end_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_page_title_separator_end_custom_style',
	$page_page_title_separator_end_custom_style
);

//Subtitle Animations
$page_page_subtitle_animations = new QodeMetaField(
	'selectblank',
	'page_page_subtitle_animations',
	'',
	esc_html__( 'Enable Page Subtitle Animations', 'brick' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'brick' ),
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_subtitle_animations_container',
			'no' => '#qodef_page_page_subtitle_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_subtitle_animations_container'
		)
	)
);
$qodeTitleAnimations->addChild(
	'page_page_subtitle_animations',
	$page_page_subtitle_animations
);

$page_page_subtitle_animations_container = new QodeContainer(
	'page_page_subtitle_animations_container',
	'page_page_subtitle_animations',
	'',
	array( '', 'no' )
);
$qodeTitleAnimations->addChild(
	'page_page_subtitle_animations_container',
	$page_page_subtitle_animations_container
);

$page_page_subtitle_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_start',
	$page_page_subtitle_animations_data_start
);

$row1 = new QodeRow();
$page_page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_subtitle_data_start = new QodeMetaField(
	'textsimple',
	'page_page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_page_subtitle_data_start',
	$page_page_subtitle_data_start
);

$page_page_subtitle_start_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_page_subtitle_start_custom_style',
	$page_page_subtitle_start_custom_style
);

$page_page_subtitle_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_end',
	$page_page_subtitle_animations_data_end
);

$row2 = new QodeRow();
$page_page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_subtitle_data_end = new QodeMetaField(
	'textsimple',
	'page_page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_page_subtitle_data_end',
	$page_page_subtitle_data_end
);

$page_page_subtitle_end_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_page_subtitle_end_custom_style',
	$page_page_subtitle_end_custom_style
);

//Graphic Animations
$page_page_title_graphic_animations = new QodeMetaField(
	'selectblank',
	'page_page_title_graphic_animations',
	'',
	esc_html__( 'Enable Page Title Graphic Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'brick' ),
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_graphic_animations_container',
			'no' => '#qodef_page_page_title_graphic_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_graphic_animations_container'
		)
	)
);
$qodeTitleAnimations->addChild(
	'page_page_title_graphic_animations',
	$page_page_title_graphic_animations
);

$page_page_title_graphic_animations_container = new QodeContainer(
	'page_page_title_graphic_animations_container',
	'page_page_title_graphic_animations',
	'',
	array( '', 'no' )
);
$qodeTitleAnimations->addChild(
	'page_page_title_graphic_animations_container',
	$page_page_title_graphic_animations_container
);

$page_page_title_graphic_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_start',
	$page_page_title_graphic_animations_data_start
);

$row1 = new QodeRow();
$page_page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_graphic_data_start = new QodeMetaField(
	'textsimple',
	'page_page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_page_title_graphic_data_start',
	$page_page_title_graphic_data_start
);

$page_page_title_graphic_start_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_page_title_graphic_start_custom_style',
	$page_page_title_graphic_start_custom_style
);

$page_page_title_graphic_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_end',
	$page_page_title_graphic_animations_data_end
);

$row2 = new QodeRow();
$page_page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_graphic_data_end = new QodeMetaField(
	'textsimple',
	'page_page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_page_title_graphic_data_end',
	$page_page_title_graphic_data_end
);

$page_page_title_graphic_end_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_page_title_graphic_end_custom_style',
	$page_page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_page_title_breadcrumbs_container = new QodeContainerNoStyle(
	'animation_page_page_title_breadcrumbs_container',
	'qode_enable_breadcrumbs',
	'no'
);
$qodeTitleAnimations->addChild(
	'animation_page_page_title_breadcrumbs_container',
	$animation_page_page_title_breadcrumbs_container
);

$page_page_title_breadcrumbs_animations = new QodeMetaField(
	'selectblank',
	'page_page_title_breadcrumbs_animations',
	'',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'brick' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'brick' ),
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_breadcrumbs_animations_container',
			'no' => '#qodef_page_page_title_breadcrumbs_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_breadcrumbs_animations_container'
		)
	)
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations',
	$page_page_title_breadcrumbs_animations
);

$page_page_title_breadcrumbs_animations_container = new QodeContainer(
	'page_page_title_breadcrumbs_animations_container',
	'page_page_title_breadcrumbs_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations_container',
	$page_page_title_breadcrumbs_animations_container
);

$page_page_title_breadcrumbs_animations_data_start = new QodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'brick' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'brick' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_start',
	$page_page_title_breadcrumbs_animations_data_start
);

$row1 = new QodeRow();
$page_page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_breadcrumbs_data_start = new QodeMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_data_start',
	$page_page_title_breadcrumbs_data_start
);

$page_page_title_breadcrumbs_start_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_start_custom_style',
	$page_page_title_breadcrumbs_start_custom_style
);

$page_page_title_breadcrumbs_animations_data_end = new QodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'brick' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'brick' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_end',
	$page_page_title_breadcrumbs_animations_data_end
);

$row2 = new QodeRow();
$page_page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_breadcrumbs_data_end = new QodeMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'brick' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_data_end',
	$page_page_title_breadcrumbs_data_end
);

$page_page_title_breadcrumbs_end_custom_style = new QodeMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'brick' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_end_custom_style',
	$page_page_title_breadcrumbs_end_custom_style
);

// Content Bottom

$qodeContentBottom = new BrickQodeMetaBox(
	"post",
	esc_html__( "Content Bottom", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_content_bottom_page",
	$qodeContentBottom
);

$qode_enable_content_bottom_area = new QodeMetaField(
	"selectblank",
	"qode_enable_content_bottom_area",
	"",
	esc_html__( "Show Content Bottom Area", 'brick' ),
	esc_html__( "Do you want to show content bottom area?", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_enable_content_bottom_area_container",
			""   => "#qodef_qode_enable_content_bottom_area_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_enable_content_bottom_area_container"
		)
	)
);
$qodeContentBottom->addChild(
	"qode_enable_content_bottom_area",
	$qode_enable_content_bottom_area
);

$qode_enable_content_bottom_area_container = new QodeContainer(
	"qode_enable_content_bottom_area_container",
	"qode_enable_content_bottom_area",
	"no",
	array( "", "no" )
);
$qodeContentBottom->addChild(
	"qode_enable_content_bottom_area_container",
	$qode_enable_content_bottom_area_container
);

$qode_content_bottom_background_color = new QodeMetaField(
	"color",
	"qode_content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose a color for content bottom area", 'brick' )
);
$qode_enable_content_bottom_area_container->addChild(
	"qode_content_bottom_background_color",
	$qode_content_bottom_background_color
);

$qode_choose_content_bottom_sidebar = new QodeMetaField(
	"selectblank",
	"qode_choose_content_bottom_sidebar",
	"",
	esc_html__( "Custom Widget", 'brick' ),
	esc_html__( "Choose Custom Widget area to display", 'brick' ),
	$qode_custom_sidebars
);
$qode_enable_content_bottom_area_container->addChild(
	"qode_choose_content_bottom_sidebar",
	$qode_choose_content_bottom_sidebar
);

$qode_content_bottom_sidebar_in_grid = new QodeMetaField(
	"selectblank",
	"qode_content_bottom_sidebar_in_grid",
	"",
	esc_html__( "Display in Grid", 'brick' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	)
);
$qode_enable_content_bottom_area_container->addChild(
	"qode_content_bottom_sidebar_in_grid",
	$qode_content_bottom_sidebar_in_grid
);

// Side Bar Area

$qodeSideBar = new BrickQodeMetaBox(
	"post",
	esc_html__( "Sidebar", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_side_bar",
	$qodeSideBar
);

$qode_show_sidebar = new QodeMetaField(
	"select",
	"qode_show-sidebar",
	"default",
	esc_html__( "Layout", 'brick' ),
	esc_html__( "Choose the sidebar layout", 'brick' ),
	array(
		"default" => esc_html__( "Default", 'brick' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'brick' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'brick' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'brick' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'brick' ),
	)
);
$qodeSideBar->addChild(
	"qode_show-sidebar",
	$qode_show_sidebar
);

$qode_choose_sidebar = new QodeMetaField(
	"selectblank",
	"qode_choose-sidebar",
	"default",
	esc_html__( "Choose Widget Area in Sidebar", 'brick' ),
	esc_html__( "Choose Custom Widget area to display in Sidebar", 'brick' ),
	$qode_custom_sidebars
);
$qodeSideBar->addChild(
	"qode_choose-sidebar",
	$qode_choose_sidebar
);

// Footer

$qodeFooter = new BrickQodeMetaBox(
	"post",
	esc_html__( "Footer", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_footer",
	$qodeFooter
);

$qode_footer_disable = new QodeMetaField(
	"yesno",
	"qode_footer-disable",
	"no",
	esc_html__( "Disable Footer for this Page", 'brick' ),
	esc_html__( "Enabling this option will hide footer on your page", 'brick' )
);
$qodeFooter->addChild(
	"qode_footer-disable",
	$qode_footer_disable
);

// SEO

$qodeSeo = new BrickQodeMetaBox(
	"post",
	esc_html__( "SEO", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post_seo",
	$qodeSeo
);

$seo_title = new QodeMetaField(
	"text",
	"seo_title",
	"",
	esc_html__( "SEO Title", 'brick' ),
	esc_html__( "Enter custom Title for this page", 'brick' )
);
$qodeSeo->addChild(
	"seo_title",
	$seo_title
);

$seo_keywords = new QodeMetaField(
	"text",
	"seo_keywords",
	"",
	esc_html__( "SEO Keywords", 'brick' ),
	esc_html__( "Enter the list of keywords separated by commas", 'brick' )
);
$qodeSeo->addChild(
	"seo_keywords",
	$seo_keywords
);

$seo_description = new QodeMetaField(
	"textarea",
	"seo_description",
	"",
	esc_html__( "SEO Description", 'brick' ),
	esc_html__( "Enter meta description for this page", 'brick' )
);
$qodeSeo->addChild(
	"seo_description",
	$seo_description
);

// Link Post Format

$qodeLinkPostFormat = new BrickQodeMetaBox(
	"post",
	esc_html__( "Link Post Format", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post-format-link",
	$qodeLinkPostFormat
);

$title_link = new QodeMetaField(
	"text",
	"title_link",
	"",
	esc_html__( "Link", 'brick' ),
	esc_html__( "Enter link", 'brick' )
);
$qodeLinkPostFormat->addChild(
	"title_link",
	$title_link
);

// Quote Post Format

$qodeQuotePostFormat = new BrickQodeMetaBox(
	"post",
	esc_html__( "Quote Post Format", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post-format-quote",
	$qodeQuotePostFormat
);

$quote_format = new QodeMetaField(
	"text",
	"quote_format",
	"",
	esc_html__( "Quote", 'brick' ),
	esc_html__( "Enter Quote", 'brick' )
);
$qodeQuotePostFormat->addChild(
	"quote_format",
	$quote_format
);

// Audio Post Format

$qodeAudioPostFormat = new BrickQodeMetaBox(
	"post",
	esc_html__( "Audio Post Format", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post-format-audio",
	$qodeAudioPostFormat
);

$audio_link = new QodeMetaField(
	"text",
	"audio_link",
	"",
	esc_html__( "Link", 'brick' ),
	esc_html__( "Enter audion link", 'brick' )
);
$qodeAudioPostFormat->addChild(
	"audio_link",
	$audio_link
);

// Video Post Format

$qodeVideoPostFormat = new BrickQodeMetaBox(
	"post",
	esc_html__( "Video Post Format", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"post-format-video",
	$qodeVideoPostFormat
);

$video_format_choose = new QodeMetaField(
	"select",
	"video_format_choose",
	"youtube",
	esc_html__( "Video Type", 'brick' ),
	esc_html__( "Choose video type", 'brick' ),
	array(
		"youtube" => esc_html__( "Youtube", 'brick' ),
		"vimeo" => esc_html__( "Vimeo", 'brick' ),
		"self" => esc_html__( "Self Hosted", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"youtube" => "#qodef_video_self_hosted_container",
			"vimeo"   => "#qodef_video_self_hosted_container",
			"self"    => "#qodef_video_y_and_v_container"
		),
		"show"       => array(
			"youtube" => "#qodef_video_y_and_v_container",
			"vimeo"   => "#qodef_video_y_and_v_container",
			"self"    => "#qodef_video_self_hosted_container"
		)
	)
);
$qodeVideoPostFormat->addChild(
	"video_format_choose",
	$video_format_choose
);

$video_y_and_v_container = new QodeContainer(
	"video_y_and_v_container",
	"video_format_choose",
	"self"
);
$qodeVideoPostFormat->addChild(
	"video_y_and_v_container",
	$video_y_and_v_container
);

$video_self_hosted_container = new QodeContainer(
	"video_self_hosted_container",
	"video_format_choose",
	"",
	array( "youtube", "vimeo" )
);
$qodeVideoPostFormat->addChild(
	"video_self_hosted_container",
	$video_self_hosted_container
);

$video_format_link = new QodeMetaField(
	"text",
	"video_format_link",
	"",
	esc_html__( "Video ID", 'brick' ),
	esc_html__( "Enter Video ID", 'brick' )
);
$video_y_and_v_container->addChild(
	"video_format_link",
	$video_format_link
);

$video_format_image = new QodeMetaField(
	"image",
	"video_format_image",
	"",
	esc_html__( "Video Image", 'brick' ),
	esc_html__( "Upload video image", 'brick' )
);
$video_self_hosted_container->addChild(
	"video_format_image",
	$video_format_image
);

$video_format_webm = new QodeMetaField(
	"text",
	"video_format_webm",
	"",
	esc_html__( "Video webm", 'brick' ),
	esc_html__( "Enter video URL", 'brick' )
);
$video_self_hosted_container->addChild(
	"video_format_webm",
	$video_format_webm
);

$video_format_mp4 = new QodeMetaField(
	"text",
	"video_format_mp4",
	"",
	esc_html__( "Video mp4", 'brick' ),
	esc_html__( "Enter video URL", 'brick' )
);
$video_self_hosted_container->addChild(
	"video_format_mp4",
	$video_format_mp4
);

$video_format_ogv = new QodeMetaField(
	"text",
	"video_format_ogv",
	"",
	esc_html__( "Video ogv", 'brick' ),
	esc_html__( "Enter video URL", 'brick' )
);
$video_self_hosted_container->addChild(
	"video_format_ogv",
	$video_format_ogv
);