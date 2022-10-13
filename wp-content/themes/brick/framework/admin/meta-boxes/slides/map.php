<?php

$qode_blog_categories = array();
$categories           = get_categories();
foreach ( $categories as $category ) {
	$qode_blog_categories[ $category->term_id ] = $category->name;
}

//Slide Type

$qodeSlideType = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Background Type", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_type",
	$qodeSlideType
);

$qode_slide_background_type = new QodeMetaField(
	"imagevideo",
	"qode_slide-background-type",
	"image",
	esc_html__( "Slide Background Type", 'brick' ),
	esc_html__( "Do you want to upload an image or video?", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef-meta-box-slides_video_settings",
		"dependence_show_on_yes" => "#qodef-meta-box-slides_image_settings"
	)
);
$qodeSlideType->addChild(
	"qode_slide-background-type",
	$qode_slide_background_type
);

//Slide Image

$qodeSlideImageSettings = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Background Image", 'brick' ),
	"qode_slide-background-type",
	array( "video" )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_image_settings",
	$qodeSlideImageSettings
);

$qode_slide_image = new QodeMetaField(
	"image",
	"qode_slide-image",
	"",
	esc_html__( "Slide Image", 'brick' ),
	esc_html__( "Choose background image", 'brick' )
);
$qodeSlideImageSettings->addChild(
	"qode_title-image",
	$qode_slide_image
);

$qode_slide_overlay_image = new QodeMetaField(
	"image",
	"qode_slide-overlay-image",
	"",
	esc_html__( "Overlay Image", 'brick' ),
	esc_html__( "Choose overlay image (pattern) for background image", 'brick' )
);
$qodeSlideImageSettings->addChild(
	"qode_slide-overlay-image",
	$qode_slide_overlay_image
);

//Slide Video

$qodeSlideVideoSettings = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Background Video", 'brick' ),
	"qode_slide-background-type",
	array( "image" )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_video_settings",
	$qodeSlideVideoSettings
);

$qode_slide_video_webm = new QodeMetaField(
	"text",
	"qode_slide-video-webm",
	"",
	esc_html__( "Video - webm", 'brick' ),
	esc_html__( "Path to the webm file that you have previously uploaded in Media Section", 'brick' )
);
$qodeSlideVideoSettings->addChild(
	"qode_slide-video-webm",
	$qode_slide_video_webm
);

$qode_slide_video_mp4 = new QodeMetaField(
	"text",
	"qode_slide-video-mp4",
	"",
	esc_html__( "Video - mp4", 'brick' ),
	esc_html__( "Path to the mp4 file that you have previously uploaded in Media Section", 'brick' )
);
$qodeSlideVideoSettings->addChild(
	"qode_slide-video-mp4",
	$qode_slide_video_mp4
);

$qode_slide_video_ogv = new QodeMetaField(
	"text",
	"qode_slide-video-ogv",
	"",
	esc_html__( "Video - ogv", 'brick' ),
	esc_html__( "Path to the ogv file that you have previously uploaded in Media Section", 'brick' )
);
$qodeSlideVideoSettings->addChild(
	"qode_slide-video-ogv",
	$qode_slide_video_ogv
);

$qode_slide_video_image = new QodeMetaField(
	"image",
	"qode_slide-video-image",
	"",
	esc_html__( "Video Preview Image", 'brick' ),
	esc_html__( "Choose background image that will be visible until video is loaded. This image will be shown on touch devices too.", 'brick' )
);
$qodeSlideVideoSettings->addChild(
	"qode_slide-video-image",
	$qode_slide_video_image
);

$qode_slide_video_overlay = new QodeMetaField(
	"yesempty",
	"qode_slide-video-overlay",
	"",
	esc_html__( "Video Overlay Image", 'brick' ),
	esc_html__( "Do you want to have a overlay image on video? ", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide-video-overlay_container"
	)
);
$qodeSlideVideoSettings->addChild(
	"qode_slide-video-overlay",
	$qode_slide_video_overlay
);

$qode_slide_video_overlay_container = new QodeContainer(
	"qode_slide-video-overlay_container",
	"qode_slide-video-overlay",
	""
);
$qodeSlideVideoSettings->addChild(
	"qode_slide_video_overlay_container",
	$qode_slide_video_overlay_container
);

$qode_slide_video_overlay_image = new QodeMetaField(
	"image",
	"qode_slide-video-overlay-image",
	"",
	esc_html__( "Overlay Image", 'brick' ),
	esc_html__( "Choose overlay image (pattern) for background video", 'brick' )
);
$qode_slide_video_overlay_container->addChild(
	"qode_slide-video-overlay-image",
	$qode_slide_video_overlay_image
);

//Slide General

$qodeSlideGeneral = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide General", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_layout",
	$qodeSlideGeneral
);

$section_title_1 = new QodeTitle(
	'section_title_1',
	esc_html__( 'Slide Text Content', 'brick' )
);
$qodeSlideGeneral->addChild(
	'section_title_1',
	$section_title_1
);

$qode_slide_hide_title = new QodeMetaField(
	"yesempty",
	"qode_slide-hide-title",
	"",
	esc_html__( "Hide Slide Title", 'brick' ),
	esc_html__( "Do you want to hide slide title?", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef-meta-box-slides_title, #qodef_qode_slide_hide_title_container, #qodef_qode_slide_scroll_title_container",
		"dependence_show_on_yes" => ""
	)
);
$qodeSlideGeneral->addChild(
	"qode_slide-hide-title",
	$qode_slide_hide_title
);

$qode_slide_hide_title_container = new QodeContainer(
	'qode_slide_hide_title_container',
	'qode_slide-hide-title',
	'yes'
);
$qodeSlideGeneral->addChild(
	'qode_slide_hide_title_container',
	$qode_slide_hide_title_container
);

$title_link_group = new QodeGroup(
	esc_html__( "Title Link", 'brick' ),
	esc_html__( "Define styles for title", 'brick' )
);
$qode_slide_hide_title_container->addChild(
	"title_link_group",
	$title_link_group
);
$row1 = new QodeRow();
$title_link_group->addChild(
	"row1",
	$row1
);

$title_link = new QodeMetaField(
	"textsimple",
	"qode_slide-title-link",
	"",
	esc_html__( "Link", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-title-link",
	$title_link
);
$title_target = new QodeMetaField(
	"selectsimple",
	"qode_slide-title-target",
	"_self",
	esc_html__( "Target", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"_self" => esc_html__( "Self", 'brick' ),
		"_blank" => esc_html__( "Blank", 'brick' )
	)
);
$row1->addChild(
	"qode_slide-title-target",
	$title_target
);

$qode_slide_subtitle = new QodeMetaField(
	"text",
	"qode_slide-subtitle",
	"",
	esc_html__( "Subtitle Text", 'brick' ),
	esc_html__( "Enter text for subtitle", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide-subtitle",
	$qode_slide_subtitle
);

$qode_slide_text = new QodeMetaField(
	"text",
	"qode_slide-text",
	"",
	esc_html__( "Body Text", 'brick' ),
	esc_html__( "Enter slide body text", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide-text",
	$qode_slide_text
);

$button1_label = new QodeMetaField(
	"text",
	"qode_slide-button-label",
	"",
	esc_html__( "Button 1 Text", 'brick' ),
	" Enter text to be displayed on button 1"
);
$qodeSlideGeneral->addChild(
	"qode_slide-button-label",
	$button1_label
);

$button1_group1 = new QodeGroup(
	esc_html__( "Button 1 Link", 'brick' ),
	""
);
$qodeSlideGeneral->addChild(
	"button1_group1",
	$button1_group1
);

$row1 = new QodeRow();
$button1_group1->addChild(
	"row1",
	$row1
);

$button1_link = new QodeMetaField(
	"textsimple",
	"qode_slide-button-link",
	"",
	esc_html__( "Link", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button-link",
	$button1_link
);
$button1_target = new QodeMetaField(
	"selectsimple",
	"qode_slide-button-target",
	"_self",
	esc_html__( "Target", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"_self" => esc_html__( "Self", 'brick' ),
		"_blank" => esc_html__( "Blank", 'brick' )
	)
);
$row1->addChild(
	"qode_slide-button-target",
	$button1_target
);

$button2_label = new QodeMetaField(
	"text",
	"qode_slide-button-label2",
	"",
	esc_html__( "Button 2 Text", 'brick' ),
	" Enter text to be displayed on button 2"
);
$qodeSlideGeneral->addChild(
	"qode_slide-button-label2",
	$button2_label
);

$button2_group1 = new QodeGroup(
	esc_html__( "Button 2 Link", 'brick' ),
	""
);
$qodeSlideGeneral->addChild(
	"button2_group1",
	$button2_group1
);
$row1 = new QodeRow();
$button2_group1->addChild(
	"row1",
	$row1
);

$button2_link = new QodeMetaField(
	"textsimple",
	"qode_slide-button-link2",
	"",
	esc_html__( "Link", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button-link2",
	$button2_link
);
$button2_target = new QodeMetaField(
	"selectsimple",
	"qode_slide-button-target2",
	"_self",
	esc_html__( "Target", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"_self" => esc_html__( "Self", 'brick' ),
		"_blank" => esc_html__( "Blank", 'brick' )
	)
);
$row1->addChild(
	"qode_slide-button-target",
	$button2_target
);

$section_title_2 = new QodeTitle(
	'section_title_2',
	esc_html__( 'Slide Graphics', 'brick' )
);
$qodeSlideGeneral->addChild(
	'section_title_2',
	$section_title_2
);

$qode_slide_graphic = new QodeMetaField(
	"image",
	"qode_slide-thumbnail",
	"",
	esc_html__( "Slide Graphic", 'brick' ),
	esc_html__( "Choose slide graphic", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide-thumbnail",
	$qode_slide_graphic
);

$qode_slide_graphic_link = new QodeMetaField(
	"text",
	"qode_slide-thumbnail-link",
	"",
	esc_html__( "Graphic Link", 'brick' ),
	esc_html__( "Enter URL to link slide graphic", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide-thumbnail-link",
	$qode_slide_graphic_link
);

$qode_slide_svg_source = new QodeMetaField(
	"textarea",
	"qode_slide_svg_source",
	"",
	esc_html__( "SVG Source code", 'brick' ),
	esc_html__( "Paste SVG Source code. (Note: all CSS styling for SVG you may put in Options > General > Custom SVG CSS)", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide_svg_source",
	$qode_slide_svg_source
);

$qode_slide_svg_link = new QodeMetaField(
	"text",
	"qode_slide-svg-link",
	"",
	esc_html__( "SVG Link", 'brick' ),
	esc_html__( "Enter URL to link SVG", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide-svg-link",
	$qode_slide_svg_link
);

$section_title_3 = new QodeTitle(
	'section_title_3',
	esc_html__( 'General Styling', 'brick' )
);
$qodeSlideGeneral->addChild(
	'section_title_3',
	$section_title_3
);

$qode_slide_header_style = new QodeMetaField(
	"selectblank",
	"qode_slide-header-style",
	"",
	esc_html__( "Header Style", 'brick' ),
	esc_html__( "Header style will be applied when this slide is in focus", 'brick' ),
	array(
		"light" => esc_html__( "Light", 'brick' ),
		"dark" => esc_html__( "Dark", 'brick' )
	)
);
$qodeSlideGeneral->addChild(
	"qode_slide-header-style",
	$qode_slide_header_style
);

$qode_slide_content_background = new QodeMetaField(
	"color",
	"qode_slide-content-background-color",
	"",
	esc_html__( "Slide Content Background Color", 'brick' ),
	esc_html__( "Choose background color for slide content", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide-content-background-color",
	$qode_slide_content_background
);
/*
	$qode_slide_navigation_color = new QodeMetaField("color","qode_slide-navigation-color","",esc_html__( "Navigation Color","Navigation color will be applied when this slide is in focus", 'brick' ));
	$qodeSlideGeneral->addChild("qode_slide-navigation-color",$qode_slide_navigation_color);
*/

$qode_slide_hide_shadow = new QodeMetaField(
	"yesempty",
	"qode_slide-hide-shadow",
	"",
	esc_html__( "Show Slide Text Shadow", 'brick' ),
	esc_html__( "Do you want to show text shadow?", 'brick' )
);
$qodeSlideGeneral->addChild(
	"qode_slide-hide-shadow",
	$qode_slide_hide_shadow
);

$qodeSlideBehaviour = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Behaviours", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_behaviour",
	$qodeSlideBehaviour
);

$qode_slide_scroll_to_section = new QodeMetaField(
	"text",
	"qode_slide-anchor-button",
	"",
	esc_html__( "Scroll to Section", 'brick' ),
	esc_html__( "An arrow will appear to take viewers to the next section of the page. Enter the section anchor here, for example, '#contact'", 'brick' )
);
$qodeSlideBehaviour->addChild(
	"qode_slide-anchor-button",
	$qode_slide_scroll_to_section
);

$section_title_1 = new QodeTitle(
	'section_title_1',
	esc_html__( 'SVG Line Drawing Animation', 'brick' )
);
$qodeSlideBehaviour->addChild(
	'section_title_1',
	$section_title_1
);

$qode_slide_svg_drawing = new QodeMetaField(
	"yesno",
	"qode_slide_svg_drawing",
	"no",
	esc_html__( "SVG Drawing Animation", 'brick' ),
	esc_html__( "Enable SVG drawing animation", 'brick' ),
	array(),
	array(
		"dependence"             => "true",
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_drawing_container"
	)
);
$qodeSlideBehaviour->addChild(
	"qode_slide_svg_drawing",
	$qode_slide_svg_drawing
);

$qode_slide_svg_drawing_container = new QodeContainer(
	"qode_slide_svg_drawing_container",
	"qode_slide_svg_drawing",
	"no"
);
$qodeSlideBehaviour->addChild(
	"qode_slide_svg_drawing_container",
	$qode_slide_svg_drawing_container
);

$qode_slide_svg_frame_rate = new QodeMetaField(
	"text",
	"qode_slide_svg_frame_rate",
	"",
	esc_html__( "SVG Frame Rate", 'brick' ),
	esc_html__( "FPS (frames per second) value, defines speed of drawing", 'brick' )
);
$qode_slide_svg_drawing_container->addChild(
	"qode_slide_svg_frame_rate",
	$qode_slide_svg_frame_rate
);

$section_title_2 = new QodeTitle(
	'section_title_2',
	esc_html__( 'Slide Image Animation', 'brick' )
);
$qodeSlideBehaviour->addChild(
	'section_title_2',
	$section_title_2
);

$qode_enable_image_animation = new QodeMetaField(
	"yesno",
	"qode_enable_image_animation",
	"no",
	esc_html__( "Enable Image Animation", 'brick' ),
	esc_html__( "Enabling this option will turn on a motion animation on the slide image", 'brick' ),
	array(),
	array(
		"dependence"             => "true",
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_enable_image_animation_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_enable_image_animation',
	$qode_enable_image_animation
);

$qode_enable_image_animation_container = new QodeContainer(
	"qode_enable_image_animation_container",
	"qode_enable_image_animation",
	"no"
);
$qodeSlideBehaviour->addChild(
	"qode_enable_image_animation_container",
	$qode_enable_image_animation_container
);

$qode_enable_image_animation_type = new QodeMetaField(
	"select",
	"qode_enable_image_animation_type",
	"zoom_center",
	esc_html__( "Animation Type", 'brick' ),
	"",
	array(
		"zoom_center" => esc_html__( "Zoom In Center", 'brick' ),
		"zoom_top_left" => esc_html__( "Zoom In to Top Left", 'brick' ),
		"zoom_top_right" => esc_html__( "Zoom In to Top Right", 'brick' ),
		"zoom_bottom_left" => esc_html__( "Zoom In to Bottom Left", 'brick' ),
		"zoom_bottom_right" => esc_html__( "Zoom In to Bottom Right", 'brick' )
	)
);
$qode_enable_image_animation_container->addChild(
	"qode_enable_image_animation_type",
	$qode_enable_image_animation_type
);

$section_title_3 = new QodeTitle(
	'section_title_3',
	esc_html__( 'Slide Content Entry Animations', 'brick' )
);
$qodeSlideBehaviour->addChild(
	'section_title_3',
	$section_title_3
);

$qode_slide_thumbnail_animation = new QodeMetaField(
	"select",
	"qode_slide-thumbnail-animation",
	"flip",
	esc_html__( "Graphic Entry Animation", 'brick' ),
	esc_html__( "Choose entry animation for graphic", 'brick' ),
	array(
		"flip" => esc_html__( "Flip", 'brick' ),
		"fade" => esc_html__( "Fade In", 'brick' ),
		"from_bottom" => esc_html__( "From Bottom", 'brick' ),
		"from_top" => esc_html__( "From Top", 'brick' ),
		"from_left" => esc_html__( "From Left", 'brick' ),
		"from_right" => esc_html__( "From Right", 'brick' ),
		"clip_anim_hor" => esc_html__( "Clip Animation Horizontal", 'brick' ),
		"clip_anim_ver" => esc_html__( "Clip Animation Vertical", 'brick' ),
		"clip_anim_puzzle" => esc_html__( "Clip Animation Puzzle", 'brick' ),
		"without_animation" => esc_html__( "No Animation", 'brick' )
	)
);
$qodeSlideBehaviour->addChild(
	"qode_slide-thumbnail-animation",
	$qode_slide_thumbnail_animation
);

$qode_slide_content_animation = new QodeMetaField(
	"select",
	"qode_slide-content-animation",
	"all_at_once",
	esc_html__( "Content Entry Animation", 'brick' ),
	esc_html__( "Choose entry animation for whole slide content group (title, subtitle, text, button)", 'brick' ),
	array(
		"all_at_once" => esc_html__( "All At Once", 'brick' ),
		"one_by_one" => esc_html__( "One By One", 'brick' ),
		"without_animation" => esc_html__( "No Animation", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"all_at_once"       => "",
			"one_by_one"        => "",
			"without_animation" => "#qodef_qode_slide_content_animation_container"
		),
		"show"       => array(
			"all_at_once"       => "#qodef_qode_slide_content_animation_container",
			"one_by_one"        => "#qodef_qode_slide_content_animation_container",
			"without_animation" => ""
		)
	)
);
$qodeSlideBehaviour->addChild(
	"qode_slide-content-animation",
	$qode_slide_content_animation
);

$qode_slide_content_animation_container = new QodeContainer(
	"qode_slide_content_animation_container",
	"qode_slide-content-animation",
	"without_animation"
);
$qodeSlideBehaviour->addChild(
	"qode_slide_content_animation_container",
	$qode_slide_content_animation_container
);

$qode_slide_content_animation_direction = new QodeMetaField(
	"select",
	"qode_slide-content-animation-direction",
	"from_bottom",
	esc_html__( "Animation Direction", 'brick' ),
	"",
	array(
		"from_bottom" => esc_html__( "From Bottom", 'brick' ),
		"from_top" => esc_html__( "From Top", 'brick' ),
		"from_left" => esc_html__( "From Left", 'brick' ),
		"from_right" => esc_html__( "From Right", 'brick' ),
		"fade" => esc_html__( "Fade In", 'brick' )
	
	)
);
$qode_slide_content_animation_container->addChild(
	"qode_slide-content-animation-direction",
	$qode_slide_content_animation_direction
);

$section_title_4 = new QodeTitle(
	'section_title_4',
	esc_html__( 'Slide Content Animations Controlled by Scrolling', 'brick' )
);
$qodeSlideBehaviour->addChild(
	'section_title_4',
	$section_title_4
);

$qode_slide_general_animation = new QodeMetaField(
	"yesno",
	"qode_slide_general_animation",
	"no",
	esc_html__( "Animate Whole Slide Content Group at Once on Scroll", 'brick' ),
	esc_html__( "All parts of slide content will animate on scroll as group", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_general_animation_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_slide_general_animation',
	$qode_slide_general_animation
);

$qode_slide_general_animation_container = new QodeContainer(
	'qode_slide_general_animation_container',
	'qode_slide_general_animation',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_general_animation_container',
	$qode_slide_general_animation_container
);

$qode_slide_content_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are starting properties for the scrolling animation of the slide content group", 'brick' )
);
$qode_slide_general_animation_container->addChild(
	"qode_slide_content_animation_data_start",
	$qode_slide_content_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_content_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	"",
	array(),
	array( "col_width" => 1 )
);
$row1->addChild(
	"qode_slide_data_start",
	$qode_slide_data_start
);

$qode_slide_data_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	"",
	array(),
	array( "col_width" => 4 )
);
$row1->addChild(
	"qode_slide_data_start_custom_style",
	$qode_slide_data_start_custom_style
);

$qode_slide_content_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are ending properties for the scrolling animation of the slide content group", 'brick' )
);
$qode_slide_general_animation_container->addChild(
	"qode_slide_content_animation_data_end",
	$qode_slide_content_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_content_animation_data_end->addChild(
	'row2',
	$row2
);

$qode_slide_data_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_end",
	$qode_slide_data_end
);

$qode_slide_data_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_end_custom_style",
	$qode_slide_data_end_custom_style
);

//Title scroll animation
$qode_slide_scroll_title_container = new QodeContainerNoStyle(
	'qode_slide_scroll_title_container',
	'qode_slide-hide-title',
	'yes'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_scroll_title_container',
	$qode_slide_scroll_title_container
);

$qode_slide_title_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_title_animation_scroll",
	"no",
	esc_html__( "Animate Title on Scroll", 'brick' ),
	esc_html__( "Enable title text to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_title_animation_scroll_container"
	)
);
$qode_slide_scroll_title_container->addChild(
	'qode_slide_title_animation_scroll',
	$qode_slide_title_animation_scroll
);

$qode_slide_title_animation_scroll_container = new QodeContainer(
	'qode_slide_title_animation_scroll_container',
	'qode_slide_title_animation_scroll',
	'no'
);
$qode_slide_scroll_title_container->addChild(
	'qode_slide_title_animation_scroll_container',
	$qode_slide_title_animation_scroll_container
);

$qode_slide_title_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_title_animation_scroll_container->addChild(
	"qode_slide_title_animation_data_start",
	$qode_slide_title_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_title_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_title_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_title_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_title_start",
	$qode_slide_data_title_start
);

$qode_slide_data_title_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_title_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_title_start_custom_style",
	$qode_slide_data_title_start_custom_style
);

$qode_slide_title_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_title_animation_scroll_container->addChild(
	"qode_slide_title_animation_data_end",
	$qode_slide_title_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_title_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_title_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_title_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_title_end",
	$qode_slide_data_title_end
);

$qode_slide_data_title_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_title_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_title_end_custom_style",
	$qode_slide_data_title_end_custom_style
);

//Subtitle scroll animation
$qode_slide_subtitle_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_subtitle_animation_scroll",
	"no",
	esc_html__( "Animate Subtitle on Scroll", 'brick' ),
	esc_html__( "Enable subtitle text to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_subtitle_animation_scroll_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_slide_subtitle_animation_scroll',
	$qode_slide_subtitle_animation_scroll
);

$qode_slide_subtitle_animation_scroll_container = new QodeContainer(
	'qode_slide_subtitle_animation_scroll_container',
	'qode_slide_subtitle_animation_scroll',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_subtitle_animation_scroll_container',
	$qode_slide_subtitle_animation_scroll_container
);

$qode_slide_subtitle_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_subtitle_animation_scroll_container->addChild(
	"qode_slide_subtitle_animation_data_start",
	$qode_slide_subtitle_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_subtitle_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_subtitle_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_subtitle_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_subtitle_start",
	$qode_slide_data_subtitle_start
);

$qode_slide_data_subtitle_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_subtitle_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_subtitle_start_custom_style",
	$qode_slide_data_subtitle_start_custom_style
);

$qode_slide_subtitle_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_subtitle_animation_scroll_container->addChild(
	"qode_slide_subtitle_animation_data_end",
	$qode_slide_subtitle_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_subtitle_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_subtitle_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_subtitle_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_subtitle_end",
	$qode_slide_data_subtitle_end
);

$qode_slide_data_subtitle_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_subtitle_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_subtitle_end_custom_style",
	$qode_slide_data_subtitle_end_custom_style
);

//Graphics scroll animation
$qode_slide_graphic_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_graphic_animation_scroll",
	"no",
	esc_html__( "Animate Graphic on Scroll", 'brick' ),
	esc_html__( "Enable graphic to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_graphic_animation_scroll_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_slide_graphic_animation_scroll',
	$qode_slide_graphic_animation_scroll
);

$qode_slide_graphic_animation_scroll_container = new QodeContainer(
	'qode_slide_graphic_animation_scroll_container',
	'qode_slide_graphic_animation_scroll',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_graphic_animation_scroll_container',
	$qode_slide_graphic_animation_scroll_container
);

$qode_slide_graphics_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_graphic_animation_scroll_container->addChild(
	"qode_slide_graphics_animation_data_start",
	$qode_slide_graphics_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_graphics_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_graphics_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_graphics_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_graphics_start",
	$qode_slide_data_graphics_start
);

$qode_slide_data_graphics_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_graphics_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_graphics_start_custom_style",
	$qode_slide_data_graphics_start_custom_style
);

$qode_slide_graphics_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_graphic_animation_scroll_container->addChild(
	"qode_slide_graphics_animation_data_end",
	$qode_slide_graphics_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_graphics_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_graphics_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_graphics_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_graphics_end",
	$qode_slide_data_graphics_end
);

$qode_slide_data_graphics_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_graphics_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_graphics_end_custom_style",
	$qode_slide_data_graphics_end_custom_style
);

//Text scroll animation
$qode_slide_text_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_text_animation_scroll",
	"no",
	esc_html__( "Animate Text on Scroll", 'brick' ),
	esc_html__( "Enable text to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_text_animation_scroll_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_slide_text_animation_scroll',
	$qode_slide_text_animation_scroll
);

$qode_slide_text_animation_scroll_container = new QodeContainer(
	'qode_slide_text_animation_scroll_container',
	'qode_slide_text_animation_scroll',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_text_animation_scroll_container',
	$qode_slide_text_animation_scroll_container
);

$qode_slide_text_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_text_animation_scroll_container->addChild(
	"qode_slide_text_animation_data_start",
	$qode_slide_text_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_text_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_text_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_text_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_text_start",
	$qode_slide_data_text_start
);

$qode_slide_data_text_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_text_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_data_text_start_custom_style",
	$qode_slide_data_text_start_custom_style
);

$qode_slide_text_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_text_animation_scroll_container->addChild(
	"qode_slide_text_animation_data_end",
	$qode_slide_text_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_text_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_text_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_text_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_text_end",
	$qode_slide_data_text_end
);

$qode_slide_data_text_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_text_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' ),
	""
);
$row2->addChild(
	"qode_slide_data_text_end_custom_style",
	$qode_slide_data_text_end_custom_style
);

//Button 1 scroll animation
$qode_slide_button1_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_button1_animation_scroll",
	"no",
	esc_html__( "Animate Button 1 on Scroll", 'brick' ),
	esc_html__( "Enable button 1 to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button1_animation_scroll_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_slide_button1_animation_scroll',
	$qode_slide_button1_animation_scroll
);

$qode_slide_button1_animation_scroll_container = new QodeContainer(
	'qode_slide_button1_animation_scroll_container',
	'qode_slide_button1_animation_scroll',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_button1_animation_scroll_container',
	$qode_slide_button1_animation_scroll_container
);

$qode_slide_button_1_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_button1_animation_scroll_container->addChild(
	"qode_slide_button_1_animation_data_start",
	$qode_slide_button_1_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_button_1_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_button_1_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_button_1_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row1->addChild(
	"qode_slide_data_button_1_start",
	$qode_slide_data_button_1_start
);

$qode_slide_data_button_1_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_button_1_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row1->addChild(
	"qode_slide_data_button_1_start_custom_style",
	$qode_slide_data_button_1_start_custom_style
);

$qode_slide_button_1_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_button1_animation_scroll_container->addChild(
	"qode_slide_button_1_animation_data_end",
	$qode_slide_button_1_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_button_1_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_button_1_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_button_1_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row2->addChild(
	"qode_slide_data_button_1_end",
	$qode_slide_data_button_1_end
);

$qode_slide_data_button_1_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_button_1_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row2->addChild(
	"qode_slide_data_button_1_end_custom_style",
	$qode_slide_data_button_1_end_custom_style
);

//Button 2 scroll animation
$qode_slide_button2_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_button2_animation_scroll",
	"no",
	esc_html__( "Animate Button 2 on Scroll", 'brick' ),
	esc_html__( "Enable button 2 to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button2_animation_scroll_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_slide_button2_animation_scroll',
	$qode_slide_button2_animation_scroll
);

$qode_slide_button2_animation_scroll_container = new QodeContainer(
	'qode_slide_button2_animation_scroll_container',
	'qode_slide_button2_animation_scroll',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_button2_animation_scroll_container',
	$qode_slide_button2_animation_scroll_container
);

$qode_slide_button_2_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_button2_animation_scroll_container->addChild(
	"qode_slide_button_2_animation_data_start",
	$qode_slide_button_2_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_button_2_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_button_2_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_button_2_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row1->addChild(
	"qode_slide_data_button_2_start",
	$qode_slide_data_button_2_start
);

$qode_slide_data_button_2_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_button_2_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row1->addChild(
	"qode_slide_data_button_2_start_custom_style",
	$qode_slide_data_button_2_start_custom_style
);

$qode_slide_button_2_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_button2_animation_scroll_container->addChild(
	"qode_slide_button_2_animation_data_end",
	$qode_slide_button_2_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_button_2_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_button_2_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_button_2_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row2->addChild(
	"qode_slide_data_button_2_end",
	$qode_slide_data_button_2_end
);

$qode_slide_data_button_2_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_button_2_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row2->addChild(
	"qode_slide_data_button_2_end_custom_style",
	$qode_slide_data_button_2_end_custom_style
);

$qode_slide_scroll_separator_container = new QodeContainerNoStyle(
	'qode_slide_scroll_separator_container',
	'qode_slide-separator-title',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_scroll_separator_container',
	$qode_slide_scroll_separator_container
);

//Separator Top scroll animation
$qode_slide_separator_top_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_separator_top_animation_scroll",
	"no",
	esc_html__( "Animate Separator Top on Scroll", 'brick' ),
	esc_html__( "Enable separator top to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_separator_top_animation_scroll_container"
	)
);
$qode_slide_scroll_separator_container->addChild(
	'qode_slide_separator_top_animation_scroll',
	$qode_slide_separator_top_animation_scroll
);

$qode_slide_separator_top_animation_scroll_container = new QodeContainer(
	'qode_slide_separator_top_animation_scroll_container',
	'qode_slide_separator_top_animation_scroll',
	'no'
);
$qode_slide_scroll_separator_container->addChild(
	'qode_slide_separator_top_animation_scroll_container',
	$qode_slide_separator_top_animation_scroll_container
);

$qode_slide_separator_top_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_separator_top_animation_scroll_container->addChild(
	"qode_slide_separator_top_animation_data_start",
	$qode_slide_separator_top_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_separator_top_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_separator_top_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_separator_top_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row1->addChild(
	"qode_slide_data_separator_top_start",
	$qode_slide_data_separator_top_start
);

$qode_slide_data_separator_top_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_separator_top_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row1->addChild(
	"qode_slide_data_separator_top_start_custom_style",
	$qode_slide_data_separator_top_start_custom_style
);

$qode_slide_separator_top_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_separator_top_animation_scroll_container->addChild(
	"qode_slide_separator_top_animation_data_end",
	$qode_slide_separator_top_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_separator_top_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_separator_top_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_separator_top_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row2->addChild(
	"qode_slide_data_separator_top_end",
	$qode_slide_data_separator_top_end
);

$qode_slide_data_separator_top_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_separator_top_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row2->addChild(
	"qode_slide_data_separator_top_end_custom_style",
	$qode_slide_data_separator_top_end_custom_style
);

//Separator Bottom scroll animation
$qode_slide_separator_bottom_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_separator_bottom_animation_scroll",
	"no",
	esc_html__( "Animate Separator Bottom on Scroll", 'brick' ),
	esc_html__( "Enable separator bottom to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_separator_bottom_animation_scroll_container"
	)
);
$qode_slide_scroll_separator_container->addChild(
	'qode_slide_separator_bottom_animation_scroll',
	$qode_slide_separator_bottom_animation_scroll
);

$qode_slide_separator_bottom_animation_scroll_container = new QodeContainer(
	'qode_slide_separator_bottom_animation_scroll_container',
	'qode_slide_separator_bottom_animation_scroll',
	'no'
);
$qode_slide_scroll_separator_container->addChild(
	'qode_slide_separator_bottom_animation_scroll_container',
	$qode_slide_separator_bottom_animation_scroll_container
);

$qode_slide_separator_bottom_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_separator_bottom_animation_scroll_container->addChild(
	"qode_slide_separator_bottom_animation_data_start",
	$qode_slide_separator_bottom_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_separator_bottom_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_separator_bottom_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_separator_bottom_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row1->addChild(
	"qode_slide_data_separator_bottom_start",
	$qode_slide_data_separator_bottom_start
);

$qode_slide_data_separator_bottom_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_separator_bottom_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row1->addChild(
	"qode_slide_data_separator_bottom_start_custom_style",
	$qode_slide_data_separator_bottom_start_custom_style
);

$qode_slide_separator_bottom_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_separator_bottom_animation_scroll_container->addChild(
	"qode_slide_separator_bottom_animation_data_end",
	$qode_slide_separator_bottom_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_separator_bottom_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_separator_bottom_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_separator_bottom_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row2->addChild(
	"qode_slide_data_separator_bottom_end",
	$qode_slide_data_separator_bottom_end
);

$qode_slide_data_separator_bottom_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_separator_bottom_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row2->addChild(
	"qode_slide_data_separator_bottom_end_custom_style",
	$qode_slide_data_separator_bottom_end_custom_style
);

//SVG scroll animation
$qode_slide_svg_animation_scroll = new QodeMetaField(
	"yesno",
	"qode_slide_svg_animation_scroll",
	"no",
	esc_html__( "Animate SVG on Scroll", 'brick' ),
	esc_html__( "Enable SVG to animate separately", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_animation_scroll_container"
	)
);
$qodeSlideBehaviour->addChild(
	'qode_slide_svg_animation_scroll',
	$qode_slide_svg_animation_scroll
);

$qode_slide_svg_animation_scroll_container = new QodeContainer(
	'qode_slide_svg_animation_scroll_container',
	'qode_slide_svg_animation_scroll',
	'no'
);
$qodeSlideBehaviour->addChild(
	'qode_slide_svg_animation_scroll_container',
	$qode_slide_svg_animation_scroll_container
);

$qode_slide_svg_animation_data_start = new QodeGroup(
	esc_html__( "Scrolling Animation Start Point", 'brick' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'brick' )
);
$qode_slide_svg_animation_scroll_container->addChild(
	"qode_slide_svg_animation_data_start",
	$qode_slide_svg_animation_data_start
);

$row1 = new QodeRow();
$qode_slide_svg_animation_data_start->addChild(
	"row1",
	$row1
);

$qode_slide_data_svg_start = new QodeMetaField(
	"textsimple",
	"qode_slide_data_svg_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row1->addChild(
	"qode_slide_data_svg_start",
	$qode_slide_data_svg_start
);

$qode_slide_data_svg_start_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_svg_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row1->addChild(
	"qode_slide_data_svg_start_custom_style",
	$qode_slide_data_svg_start_custom_style
);

$qode_slide_svg_animation_data_end = new QodeGroup(
	esc_html__( "Scrolling Animation End Point", 'brick' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'brick' )
);
$qode_slide_svg_animation_scroll_container->addChild(
	"qode_slide_svg_animation_data_end",
	$qode_slide_svg_animation_data_end
);

$row2 = new QodeRow();
$qode_slide_svg_animation_data_end->addChild(
	"row2",
	$row2
);

$qode_slide_data_svg_end = new QodeMetaField(
	"textsimple",
	"qode_slide_data_svg_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'brick' )
);
$row2->addChild(
	"qode_slide_data_svg_end",
	$qode_slide_data_svg_end
);

$qode_slide_data_svg_end_custom_style = new QodeMetaField(
	"textareasimple",
	"qode_slide_data_svg_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'brick' )
);
$row2->addChild(
	"qode_slide_data_svg_end_custom_style",
	$qode_slide_data_svg_end_custom_style
);

//Slide Title

$qodeSlideTitle = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Title Style", 'brick' ),
	"qode_slide-hide-title",
	array( "yes" )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_title",
	$qodeSlideTitle
);

$title_text_group = new QodeGroup(
	esc_html__( "Title Text Style", 'brick' ),
	esc_html__( "Define styles for title text", 'brick' )
);
$qodeSlideTitle->addChild(
	"title_text_group",
	$title_text_group
);
$row1 = new QodeRow();
$title_text_group->addChild(
	"row1",
	$row1
);
$title_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-title-color",
	"",
	esc_html__( "Font Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-title-color",
	$title_color
);
$title_fontsize = new QodeMetaField(
	"textsimple",
	"qode_slide-title-font-size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-title-font-size",
	$title_fontsize
);
$title_lineheight = new QodeMetaField(
	"textsimple",
	"qode_slide-title-line-height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-title-line-height",
	$title_lineheight
);
$title_letterspacing = new QodeMetaField(
	"textsimple",
	"qode_slide-title-letter-spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-title-letter-spacing",
	$title_letterspacing
);

$row2 = new QodeRow( true );
$title_text_group->addChild(
	"row2",
	$row2
);
$title_google_fonts = new QodeMetaField(
	"fontsimple",
	"qode_slide-title-font-family",
	"",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-title-font-family",
	$title_google_fonts
);
$title_fontstyle = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-title-font-style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"qode_slide-title-font-style",
	$title_fontstyle
);
$title_fontweight = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-title-font-weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"qode_slide-title-font-weight",
	$title_fontweight
);
$title_texttransform = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-title-text-transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"qode_slide-title-text-transform",
	$title_texttransform
);

$title_background_group = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background for title", 'brick' )
);
$qodeSlideTitle->addChild(
	"title_background_group",
	$title_background_group
);
$row1 = new QodeRow();
$title_background_group->addChild(
	"row1",
	$row1
);
$title_background_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-title-background-color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-title-background-color",
	$title_background_color
);
$title_background_color_transparency = new QodeMetaField(
	"textsimple",
	"qode_slide-title-bg-color-transparency",
	"",
	esc_html__( "Background Color Transparency (values 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-title-bg-color-transparency",
	$title_background_color_transparency
);

$title_margin_group = new QodeGroup(
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "Enter value for title bottom margin (default value is 14)", 'brick' )
);
$qodeSlideTitle->addChild(
	"title_margin_group",
	$title_margin_group
);
$row1 = new QodeRow();
$title_margin_group->addChild(
	"row1",
	$row1
);
$title_margin_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide_title_margin_bottom",
	"",
	"",
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_title_margin_bottom",
	$title_margin_bottom
);

$title_padding_group = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for title", 'brick' )
);
$qodeSlideTitle->addChild(
	"title_padding_group",
	$title_padding_group
);
$row1 = new QodeRow();
$title_padding_group->addChild(
	"row1",
	$row1
);
$title_padding_top = new QodeMetaField(
	"textsimple",
	"qode_slide_title_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_title_padding_top",
	$title_padding_top
);
$title_padding_right = new QodeMetaField(
	"textsimple",
	"qode_slide_title_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_title_padding_right",
	$title_padding_right
);
$title_padding_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide_title_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_title_padding_bottom",
	$title_padding_bottom
);
$title_padding_left = new QodeMetaField(
	"textsimple",
	"qode_slide_title_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_title_padding_left",
	$title_padding_left
);

$qode_slide_title_border = new QodeMetaField(
	'yesno',
	'qode_slide_title_border',
	'no',
	esc_html__( 'Border', 'brick' ),
	esc_html__( 'Do you want to have a title border?', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_title_border_container'
	)
);
$qodeSlideTitle->addChild(
	'qode_slide_title_border',
	$qode_slide_title_border
);

$title_border_container = new QodeContainer(
	'title_border_container',
	'qode_slide_title_border',
	'no'
);
$qodeSlideTitle->addChild(
	'title_border_container',
	$title_border_container
);

$title_border_group = new QodeGroup(
	esc_html__( "Title Border", 'brick' ),
	esc_html__( "Define border for title", 'brick' )
);
$title_border_container->addChild(
	"title_border_group",
	$title_border_group
);
$row1 = new QodeRow();
$title_border_group->addChild(
	"row1",
	$row1
);
$title_border_thickness = new QodeMetaField(
	"textsimple",
	"qode_slide_title_border_thickness",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	""
);
$row1->addChild(
	"title_border_thickness",
	$title_border_thickness
);
$title_border_style = new QodeMetaField(
	"selectsimple",
	"qode_slide_title_border_style",
	"",
	esc_html__( "Style", 'brick' ),
	"",
	array(
		"solid" => esc_html__( "solid", 'brick' ),
		"dashed" => esc_html__( "dashed", 'brick' ),
		"dotted" => esc_html__( "dotted", 'brick' ),
		"double" => esc_html__( "double", 'brick' ),
		"groove" => esc_html__( "groove", 'brick' ),
		"ridge" => esc_html__( "ridge", 'brick' ),
		"inset" => esc_html__( "inset", 'brick' ),
		"outset" => esc_html__( "outset", 'brick' )
	)
);
$row1->addChild(
	"title_border_style",
	$title_border_style
);
$title_border_color = new QodeMetaField(
	"colorsimple",
	"qode_slider_title_border_color",
	"",
	esc_html__( "Color", 'brick' ),
	""
);
$row1->addChild(
	"qode_slider_title_border_color",
	$title_border_color
);

$qode_slide_title_separator = new QodeMetaField(
	"yesno",
	"qode_slide-separator-title",
	"no",
	esc_html__( "Title Separator", 'brick' ),
	esc_html__( "Do you want to have a title separator?", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_title_separator_container, #qodef_qode_slide_scroll_separator_container"
	)
);
$qodeSlideTitle->addChild(
	"qode_slide-separator-title",
	$qode_slide_title_separator
);

$qode_slide_title_separator_container = new QodeContainer(
	"qode_slide_title_separator_container",
	"qode_slide-separator-title",
	"no"
);
$qodeSlideTitle->addChild(
	"qode_slide_title_separator_container",
	$qode_slide_title_separator_container
);

//Separator with or without icon
$qode_slide_title_separator_type = new QodeMetaField(
	'select',
	'qode_slide_title_separator_type',
	'',
	esc_html__( 'Separator Type', 'brick' ),
	'',
	array(
		'without_icon' => esc_html__( 'Without Icon', 'brick' ),
		'with_icon' => esc_html__( 'With Icon', 'brick' ),
		'with_custom_icon' => esc_html__( 'With Custom Icon', 'brick' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			'without_icon'     => '#qodef_qode_slide_title_separator_with_icon_container, #qodef_qode_slide_title_separator_with_custom_icon_container',
			'with_icon'        => '#qodef_qode_slide_title_separator_without_icon_container, #qodef_qode_slide_title_separator_with_custom_icon_container',
			'with_custom_icon' => '#qodef_qode_slide_title_separator_with_icon_container, #qodef_qode_slide_title_separator_without_icon_container'
		),
		'show'       => array(
			'without_icon'     => '#qodef_qode_slide_title_separator_without_icon_container',
			'with_icon'        => '#qodef_qode_slide_title_separator_with_icon_container',
			'with_custom_icon' => '#qodef_qode_slide_title_separator_with_custom_icon_container'
		)
	)
);
$qode_slide_title_separator_container->addChild(
	'qode_slide_title_separator_type',
	$qode_slide_title_separator_type
);

//Separator without Icon Container
$qode_slide_title_separator_without_icon_container = new QodeContainer(
	'qode_slide_title_separator_without_icon_container',
	'qode_slide_title_separator_type',
	'',
	array( 'with_icon', 'with_custom_icon' )
);
$qode_slide_title_separator_container->addChild(
	'qode_slide_title_separator_without_icon_container',
	$qode_slide_title_separator_without_icon_container
);

$qode_slide_title_separator_align_container = new QodeContainerNoStyle(
	'qode_slide_title_separator_align_container',
	'qode_slide-title-separator-position',
	'left_right'
);
$qode_slide_title_separator_without_icon_container->addChild(
	'qode_slide_title_separator_align_container',
	$qode_slide_title_separator_align_container
);

$qode_slide_title_separator_align = new QodeMetaField(
	"select",
	"qode_slide-title-separator-align",
	"both",
	esc_html__( "Alignment", 'brick' ),
	esc_html__( "Choose alignment of slider separator", 'brick' ),
	array(
		"none" => esc_html__( "Center", 'brick' ),
		"left" => esc_html__( "Left", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$qode_slide_title_separator_align_container->addChild(
	"qode_slide-title-separator-align",
	$qode_slide_title_separator_align
);

$qode_slide_separator_color_group = new QodeGroup(
	esc_html__( "Separator Color", 'brick' ),
	esc_html__( "Define color for slider separator", 'brick' )
);
$qode_slide_title_separator_without_icon_container->addChild(
	"qode_slide_separator_color_group",
	$qode_slide_separator_color_group
);

$row1 = new QodeRow();
$qode_slide_separator_color_group->addChild(
	"row1",
	$row1
);

$qode_slide_title_separator_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-separator-color",
	"",
	esc_html__( "Separator Color", 'brick' ),
	esc_html__( "Choose a color for the separator", 'brick' )
);
$row1->addChild(
	"qode_slide-separator-color",
	$qode_slide_title_separator_color
);

$qode_slide_title_separator_transparency = new QodeMetaField(
	"textsimple",
	"qode_slide-separator-transparency",
	"",
	esc_html__( "Separator transparency (values 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-separator-transparency",
	$qode_slide_title_separator_transparency
);

$qode_slide_separator_border_group = new QodeGroup(
	esc_html__( "Separator Border", 'brick' ),
	esc_html__( "Define border for slider separator", 'brick' )
);
$qode_slide_title_separator_without_icon_container->addChild(
	"qode_slide_separator_border_group",
	$qode_slide_separator_border_group
);

$row1 = new QodeRow();
$qode_slide_separator_border_group->addChild(
	"row1",
	$row1
);

$qode_slide_separator_border_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-separator-border-color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "Choose a color for the separator", 'brick' )
);
$row1->addChild(
	"qode_slide-separator-border-color",
	$qode_slide_separator_border_color
);

$qode_slide_separator_border_width = new QodeMetaField(
	"textsimple",
	"qode_slide-separator-border-width",
	"",
	esc_html__( "Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-separator-border-width",
	$qode_slide_separator_border_width
);

$qode_slide_separator_border_style = new QodeMetaField(
	'selectsimple',
	'qode_slide-separator-border-style',
	'solid',
	esc_html__( 'Style', 'brick' ),
	'',
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' ),
		"transparent" => esc_html__( "Transparent", 'brick' )
	)
);
$row1->addChild(
	"qode_slide-separator-border-style",
	$qode_slide_separator_border_style
);

$qode_slide_separator_size_group = new QodeGroup(
	esc_html__( "Separator Size", 'brick' ),
	esc_html__( "Define size for slider separator", 'brick' )
);
$qode_slide_title_separator_without_icon_container->addChild(
	"qode_slide_separator_size_group",
	$qode_slide_separator_size_group
);

$row1 = new QodeRow();
$qode_slide_separator_size_group->addChild(
	"row1",
	$row1
);

$qode_slide_title_separator_width = new QodeMetaField(
	"textsimple",
	"qode_slide-separator-width",
	"",
	esc_html__( "Separator Width (%)", 'brick' ),
	esc_html__( "Enter value from 0% to 100%. Enter just number.", 'brick' )
);
$row1->addChild(
	"qode_slide-separator-width",
	$qode_slide_title_separator_width
);

$qode_slide_title_separator_thickness = new QodeMetaField(
	"textsimple",
	"qode_slide-separator-thickness",
	"",
	esc_html__( "Separator Thickness (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-separator-thickness",
	$qode_slide_title_separator_thickness
);

//Separator with icon container
$qode_slide_title_separator_with_icon_container = new QodeContainer(
	'qode_slide_title_separator_with_icon_container',
	'qode_slide_title_separator_type',
	'',
	array( 'without_icon', 'with_custom_icon' )
);
$qode_slide_title_separator_container->addChild(
	'qode_slide_title_separator_with_icon_container',
	$qode_slide_title_separator_with_icon_container
);

$qode_slide_separator_icon_hide_array = array();
$qode_slide_separator_icon_show_array = array();

if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	
	$qode_slide_separator_icon_collections_params = brick_qode_icon_collections()->getIconCollectionsParams();
	
	foreach ( brick_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$qode_slide_separator_icon_hide_array[ $dep_collection_key ] = '';
		
		$qode_slide_separator_icon_show_array[ $dep_collection_key ] = '#qodef_qode_slide_title_separator_with_icon_' . $dep_collection_object->param . '_container';
		
		foreach ( $qode_slide_separator_icon_collections_params as $qode_slide_separator_icon_collections_param ) {
			
			if ( $qode_slide_separator_icon_collections_param !== $dep_collection_object->param ) {
				$qode_slide_separator_icon_hide_array[ $dep_collection_key ] .= '#qodef_qode_slide_title_separator_with_icon_' . $qode_slide_separator_icon_collections_param . '_container,';
			}
			
		}
		
		$qode_slide_separator_icon_hide_array[ $dep_collection_key ] = rtrim(
			$qode_slide_separator_icon_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$qode_slide_title_separator_with_icon_icon_pack = new QodeMetaField(
	'select',
	'qode_slide_title_separator_with_icon_icon_pack',
	'font_awesome',
	esc_html__( 'Icon Package', 'brick' ),
	esc_html__( 'Choose Icon Package', 'brick' ),
	brick_qode_icon_collections()->getIconCollections(),
	array(
		'dependence' => true,
		'hide'       => $qode_slide_separator_icon_hide_array,
		'show'       => $qode_slide_separator_icon_show_array
	)
);
$qode_slide_title_separator_with_icon_container->addChild(
	'qode_slide_title_separator_with_icon_icon_pack',
	$qode_slide_title_separator_with_icon_icon_pack
);

if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	
	foreach ( brick_qode_icon_collections()->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		$icon_collections_keys = brick_qode_icon_collections()->getIconCollectionsKeys();
		
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$qode_slide_title_separator_icon_hide_values = $icon_collections_keys;
		
		$qode_slide_title_separator_with_icon_icon_pack_container = new QodeContainer(
			'qode_slide_title_separator_with_icon_' . $collection_object->param . '_container',
			'qode_slide_title_separator_with_icon_icon_pack',
			'',
			$qode_slide_title_separator_icon_hide_values
		);
		$qode_slide_title_separator_with_icon_container->addChild(
			'qode_slide_title_separator_with_icon_' . $collection_object->param . '_container',
			$qode_slide_title_separator_with_icon_icon_pack_container
		);
		
		$qode_slide_title_separator_with_icon_icon_type = new QodeMetaField(
			'select',
			'qode_slide_title_separator_with_icon_' . $collection_object->param,
			'',
			$collection_object->title,
			esc_html__( 'Icon Package', 'brick' ),
			$icons_array
		);
		$qode_slide_title_separator_with_icon_icon_pack_container->addChild(
			'qode_slide_title_separator_with_icon_' . $collection_object->param,
			$qode_slide_title_separator_with_icon_icon_type
		);
		
	}
	
}

$qode_slide_title_separator_with_icon_separator_size_group = new QodeGroup(
	esc_html__( 'Separator Size and Style', 'brick' ),
	esc_html__( 'Define size, color and margins', 'brick' )
);
$qode_slide_title_separator_with_icon_container->addChild(
	'qode_slide_title_separator_with_icon_separator_size_group',
	$qode_slide_title_separator_with_icon_separator_size_group
);

$row1 = new QodeRow();
$qode_slide_title_separator_with_icon_separator_size_group->addChild(
	'row1',
	$row1
);

$qode_slide_title_separator_with_icon_line_style = new QodeMetaField(
	'selectsimple',
	'qode_slide_title_separator_with_icon_line_style',
	'normal',
	esc_html__( 'Separator Line Style', 'brick' ),
	'',
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' ),
		"transparent" => esc_html__( "Transparent", 'brick' )
	)
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_line_style',
	$qode_slide_title_separator_with_icon_line_style
);

$qode_slide_title_separator_with_icon_separator_width = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_separator_width',
	'',
	esc_html__( 'Width (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_separator_width',
	$qode_slide_title_separator_with_icon_separator_width
);

$qode_slide_title_separator_with_icon_separator_margin_top = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_separator_margin_top',
	'',
	esc_html__( 'Top Margin (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_separator_margin_top',
	$qode_slide_title_separator_with_icon_separator_margin_top
);

$qode_slide_title_separator_with_icon_separator_margin_bottom = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_separator_margin_bottom',
	'',
	esc_html__( 'Bottom Margin (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_separator_margin_bottom',
	$qode_slide_title_separator_with_icon_separator_margin_bottom
);

$row2 = new QodeRow( true );
$qode_slide_title_separator_with_icon_separator_size_group->addChild(
	'row2',
	$row2
);

$qode_slide_title_separator_with_icon_separator_thickness = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_separator_thickness',
	'',
	esc_html__( 'Thickness (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_icon_separator_thickness',
	$qode_slide_title_separator_with_icon_separator_thickness
);

$qode_slide_title_separator_with_icon_separator_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_icon_separator_color',
	'',
	esc_html__( 'Separator Color', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_icon_separator_color',
	$qode_slide_title_separator_with_icon_separator_color
);

$qode_slide_title_separator_with_icon_icon_size_group = new QodeGroup(
	esc_html__( 'Icon Position and Size', 'brick' ),
	esc_html__( 'Define icon position, size and type', 'brick' )
);
$qode_slide_title_separator_with_icon_container->addChild(
	'qode_slide_title_separator_with_icon_icon_size_group',
	$qode_slide_title_separator_with_icon_icon_size_group
);

$row1 = new QodeRow();
$qode_slide_title_separator_with_icon_icon_size_group->addChild(
	'row1',
	$row1
);

$qode_slide_title_separator_with_icon_icon_type = new QodeMetaField(
	'selectsimple',
	'qode_slide_title_separator_with_icon_icon_type',
	'normal',
	esc_html__( 'Icon Type', 'brick' ),
	'',
	array(
		'normal' => esc_html__( 'Normal', 'brick' ),
		'circle' => esc_html__( 'Circle', 'brick' ),
		'square' => esc_html__( 'Square', 'brick' )
	)
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_icon_type',
	$qode_slide_title_separator_with_icon_icon_type
);

$qode_slide_title_separator_with_icon_icon_postition = new QodeMetaField(
	'selectsimple',
	'qode_slide_title_separator_with_icon_icon_postition',
	'normal',
	esc_html__( 'Icon Position', 'brick' ),
	'',
	array(
		'center' => esc_html__( 'Center', 'brick' ),
		'left' => esc_html__( 'Left', 'brick' ),
		'right' => esc_html__( 'Right', 'brick' )
	)
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_icon_postition',
	$qode_slide_title_separator_with_icon_icon_postition
);

$qode_slide_title_separator_with_icon_icon_custom_size = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_icon_custom_size',
	'',
	esc_html__( 'Icon Custom Size (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_icon_custom_size',
	$qode_slide_title_separator_with_icon_icon_custom_size
);

$qode_slide_title_separator_with_icon_icon_shape_size = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_icon_shape_size',
	'',
	esc_html__( 'Icon Shape Size (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_icon_icon_shape_size',
	$qode_slide_title_separator_with_icon_icon_shape_size
);

$row2 = new QodeRow( true );
$qode_slide_title_separator_with_icon_icon_size_group->addChild(
	'row2',
	$row2
);

$qode_slide_title_separator_with_icon_icon_margin = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_icon_margin',
	'',
	esc_html__( 'Icon Margin (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_icon_icon_margin',
	$qode_slide_title_separator_with_icon_icon_margin
);

$qode_slide_title_separator_with_icon_icon_border_radius = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_icon_border_radius',
	'',
	esc_html__( 'Icon Border Radius (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_icon_icon_border_radius',
	$qode_slide_title_separator_with_icon_icon_border_radius
);

$qode_slide_title_separator_with_icon_icon_border_width = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_icon_icon_border_width',
	'',
	esc_html__( 'Icon Border Width (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_icon_icon_border_width',
	$qode_slide_title_separator_with_icon_icon_border_width
);

$qode_slide_title_separator_with_icon_icon_colour_group = new QodeGroup(
	esc_html__( 'Icon Color', 'brick' ),
	esc_html__( 'Define icon, icon background and icon hover colors', 'brick' )
);
$qode_slide_title_separator_with_icon_container->addChild(
	'qode_slide_title_separator_with_icon_icon_colour_group',
	$qode_slide_title_separator_with_icon_icon_colour_group
);

$row3 = new QodeRow();
$qode_slide_title_separator_with_icon_icon_colour_group->addChild(
	'row3',
	$row3
);

$qode_slide_title_separator_with_icon_icon_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_icon_icon_color',
	'',
	esc_html__( 'Icon Color', 'brick' ),
	''
);
$row3->addChild(
	'qode_slide_title_separator_with_icon_icon_color',
	$qode_slide_title_separator_with_icon_icon_color
);

$qode_slide_title_separator_with_icon_icon_border_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_icon_icon_border_color',
	'',
	esc_html__( 'Icon Border Color', 'brick' ),
	''
);
$row3->addChild(
	'qode_slide_title_separator_with_icon_icon_border_color',
	$qode_slide_title_separator_with_icon_icon_border_color
);

$qode_slide_title_separator_with_icon_icon_background_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_icon_icon_background_color',
	'',
	esc_html__( 'Icon Background Color', 'brick' ),
	''
);
$row3->addChild(
	'qode_slide_title_separator_with_icon_icon_background_color',
	$qode_slide_title_separator_with_icon_icon_background_color
);

$qode_slide_title_separator_with_icon_icon_hover_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_icon_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'brick' ),
	''
);
$row3->addChild(
	'qode_slide_title_separator_with_icon_icon_hover_color',
	$qode_slide_title_separator_with_icon_icon_hover_color
);

$row4 = new QodeRow( true );
$qode_slide_title_separator_with_icon_icon_colour_group->addChild(
	'row4',
	$row4
);

$qode_slide_title_separator_with_icon_icon_hover_border_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_icon_icon_hover_border_color',
	'',
	esc_html__( 'Icon Hover Border Color', 'brick' ),
	''
);
$row4->addChild(
	'qode_slide_title_separator_with_icon_icon_hover_border_color',
	$qode_slide_title_separator_with_icon_icon_hover_border_color
);

$qode_slide_title_separator_with_icon_icon_hover_background_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_icon_icon_hover_background_color',
	'',
	esc_html__( 'Icon Hover Background Color', 'brick' ),
	''
);
$row4->addChild(
	'qode_slide_title_separator_with_icon_icon_hover_background_color',
	$qode_slide_title_separator_with_icon_icon_hover_background_color
);

//Separator with custom icon container
$qode_slide_title_separator_with_custom_icon_container = new QodeContainer(
	'qode_slide_title_separator_with_custom_icon_container',
	'qode_slide_title_separator_type',
	'',
	array( 'without_icon', 'with_icon' )
);
$qode_slide_title_separator_container->addChild(
	'qode_slide_title_separator_with_custom_icon_container',
	$qode_slide_title_separator_with_custom_icon_container
);

$qode_slide_title_separator_with_custom_icon_custom_icon = new QodeMetaField(
	'image',
	'qode_slide_title_separator_with_custom_icon_custom_icon',
	'',
	esc_html__( 'Custom Icon', 'brick' ),
	''
);
$qode_slide_title_separator_with_custom_icon_container->addChild(
	'qode_slide_title_separator_with_custom_icon_custom_icon',
	$qode_slide_title_separator_with_custom_icon_custom_icon
);

$qode_slide_title_separator_with_custom_icon_separator_style_group = new QodeGroup(
	esc_html__( 'Style', 'brick' ),
	''
);
$qode_slide_title_separator_with_custom_icon_container->addChild(
	'qode_slide_title_separator_with_custom_icon_separator_style_group',
	$qode_slide_title_separator_with_custom_icon_separator_style_group
);

$row1 = new QodeRow();
$qode_slide_title_separator_with_custom_icon_separator_style_group->addChild(
	'row1',
	$row1
);

$qode_slide_title_separator_with_custom_icon_line_style = new QodeMetaField(
	'selectsimple',
	'qode_slide_title_separator_with_custom_icon_line_style',
	'normal',
	esc_html__( 'Separator Line Style', 'brick' ),
	'',
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' ),
		"transparent" => esc_html__( "Transparent", 'brick' )
	)
);
$row1->addChild(
	'qode_slide_title_separator_with_custom_icon_line_style',
	$qode_slide_title_separator_with_custom_icon_line_style
);

$qode_slide_title_separator_with_custom_icon_separator_width = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_custom_icon_separator_width',
	'',
	esc_html__( 'Width (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_custom_icon_separator_width',
	$qode_slide_title_separator_with_custom_icon_separator_width
);

$qode_slide_title_separator_with_custom_icon_separator_margin_top = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_custom_icon_separator_margin_top',
	'',
	esc_html__( 'Top Margin (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_custom_icon_separator_margin_top',
	$qode_slide_title_separator_with_custom_icon_separator_margin_top
);

$qode_slide_title_separator_with_custom_icon_separator_margin_bottom = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_custom_icon_separator_margin_bottom',
	'',
	esc_html__( 'Bottom Margin (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_slide_title_separator_with_custom_icon_separator_margin_bottom',
	$qode_slide_title_separator_with_custom_icon_separator_margin_bottom
);

$row2 = new QodeRow( true );
$qode_slide_title_separator_with_custom_icon_separator_style_group->addChild(
	'row2',
	$row2
);

$qode_slide_title_separator_with_custom_icon_separator_thickness = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_custom_icon_separator_thickness',
	'',
	esc_html__( 'Thickness (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_custom_icon_separator_thickness',
	$qode_slide_title_separator_with_custom_icon_separator_thickness
);

$qode_slide_title_separator_with_custom_icon_separator_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_title_separator_with_custom_icon_separator_color',
	'',
	esc_html__( 'Separator Color', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_custom_icon_separator_color',
	$qode_slide_title_separator_with_custom_icon_separator_color
);

$qode_slide_title_separator_with_custom_icon_icon_postition = new QodeMetaField(
	'selectsimple',
	'qode_slide_title_separator_with_custom_icon_icon_postition',
	'normal',
	esc_html__( 'Icon Position', 'brick' ),
	'',
	array(
		'center' => esc_html__( 'Center', 'brick' ),
		'left' => esc_html__( 'Left', 'brick' ),
		'right' => esc_html__( 'Right', 'brick' )
	)
);
$row2->addChild(
	'qode_slide_title_separator_with_custom_icon_icon_postition',
	$qode_slide_title_separator_with_custom_icon_icon_postition
);

$qode_slide_title_separator_with_custom_icon_icon_margin = new QodeMetaField(
	'textsimple',
	'qode_slide_title_separator_with_custom_icon_icon_margin',
	'',
	esc_html__( 'Icon Margin (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_title_separator_with_custom_icon_icon_margin',
	$qode_slide_title_separator_with_custom_icon_icon_margin
);

//Separator Position Without Icon
$qode_slide_title_separator_position = new QodeMetaField(
	"select",
	"qode_slide-title-separator-position",
	"both",
	esc_html__( "Position", 'brick' ),
	esc_html__( "Choose position of slider separator", 'brick' ),
	array(
		"both" => esc_html__( "Top and Bottom", 'brick' ),
		"left_right" => esc_html__( "Left and Right", 'brick' ),
		"top" => esc_html__( "Top", 'brick' ),
		"bottom" => esc_html__( "Bottom", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"both"       => "#qodef_qode_slide_left_right_separator_container",
			"left_right" => "#qodef_qode_slide_top_separator_container, #qodef_qode_slide_bottom_separator_container, #qodef_qode_slide_title_separator_align_container",
			"top"        => "#qodef_qode_slide_bottom_separator_container, #qodef_qode_slide_left_right_separator_container",
			"bottom"     => "#qodef_qode_slide_top_separator_container, #qodef_qode_slide_left_right_separator_container"
		),
		"show"       => array(
			"both"       => "#qodef_qode_slide_top_separator_container,#qodef_qode_slide_bottom_separator_container, #qodef_qode_slide_title_separator_align_container",
			"top"        => "#qodef_qode_slide_top_separator_container, #qodef_qode_slide_title_separator_align_container",
			"bottom"     => "#qodef_qode_slide_bottom_separator_container, #qodef_qode_slide_title_separator_align_container",
			"left_right" => "#qodef_qode_slide_left_right_separator_container"
		)
	)
);
$qode_slide_title_separator_without_icon_container->addChild(
	"qode_slide-title-separator-position",
	$qode_slide_title_separator_position
);

$qode_slide_top_separator_container = new QodeContainer(
	"qode_slide_top_separator_container",
	"qode_slide-title-separator-position",
	"",
	array( "bottom", "left_right" )
);
$qode_slide_title_separator_without_icon_container->addChild(
	"qode_slide_top_separator_container",
	$qode_slide_top_separator_container
);

$group1 = new QodeGroup(
	esc_html__( "Top Separator Margins", 'brick' ),
	esc_html__( "Enter top separator margins", 'brick' )
);
$qode_slide_top_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_slide_top_separator_margin_top = new QodeMetaField(
	"textsimple",
	"qode_slide-top-separator-margin-top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-top-separator-margin-top",
	$qode_slide_top_separator_margin_top
);

$qode_slide_top_separator_margin_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide-top-separator-margin-bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-top-separator-margin-bottom",
	$qode_slide_top_separator_margin_bottom
);

$qode_slide_bottom_separator_container = new QodeContainer(
	"qode_slide_bottom_separator_container",
	"qode_slide-title-separator-position",
	"",
	array( "top", "left_right" )
);
$qode_slide_title_separator_without_icon_container->addChild(
	"qode_slide_bottom_separator_container",
	$qode_slide_bottom_separator_container
);

$group2 = new QodeGroup(
	esc_html__( "Bottom Separator Margins", 'brick' ),
	esc_html__( "Enter bottom separator margins", 'brick' )
);
$qode_slide_bottom_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qode_slide_bottom_separator_margin_top = new QodeMetaField(
	"textsimple",
	"qode_slide-bottom-separator-margin-top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-bottom-separator-margin-top",
	$qode_slide_bottom_separator_margin_top
);

$qode_slide_bottom_separator_margin_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide-bottom-separator-margin-bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-bottom-separator-margin-bottom",
	$qode_slide_bottom_separator_margin_bottom
);

$qode_slide_left_right_separator_container = new QodeContainer(
	"qode_slide_left_right_separator_container",
	"qode_slide-title-separator-position",
	"",
	array( "top", "bottom", "both" )
);
$qode_slide_title_separator_without_icon_container->addChild(
	'qode_slide_left_right_separator_container',
	$qode_slide_left_right_separator_container
);

$qode_slide_left_right_separator_style = new QodeMetaField(
	'select',
	'qode_slide_left_right_separator_style',
	'solid',
	esc_html__( 'Line Style', 'brick' ),
	esc_html__( 'Separator Line Style', 'brick' ),
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' )
	)
);
$qode_slide_left_right_separator_container->addChild(
	'qode_slide_left_right_separator_style',
	$qode_slide_left_right_separator_style
);

$group3 = new QodeGroup(
	esc_html__( 'Left/Right Separator Margins', 'brick' ),
	esc_html__( 'Enter left and right separator margins', 'brick' )
);
$qode_slide_left_right_separator_container->addChild(
	'group3',
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	'row1',
	$row1
);

$qode_slide_left_separator_margin_right = new QodeMetaField(
	"textsimple",
	"qode_slide_left_separator_margin_right",
	"",
	esc_html__( "Left Separator Margin Right (px)", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_left_separator_margin_right",
	$qode_slide_left_separator_margin_right
);

$qode_slide_right_separator_margin_left = new QodeMetaField(
	"textsimple",
	"qode_slide_right_separator_margin_left",
	"",
	esc_html__( "Right Separator Margin Right (px)", 'brick' ),
	""
);
$row1->addChild(
	"qode_slide_right_separator_margin_left",
	$qode_slide_right_separator_margin_left
);

$group4 = new QodeGroup(
	esc_html__( 'Dots on Line End', 'brick' ),
	esc_html__( 'Add dots on line end', 'brick' )
);
$qode_slide_left_right_separator_container->addChild(
	'group4',
	$group4
);

$row2 = new QodeRow();
$group4->addChild(
	'row2',
	$row2
);

$qode_slide_left_right_separator_linedots = new QodeMetaField(
	'selectsimple',
	'qode_slide_left_right_separator_linedots',
	'no',
	esc_html__( 'Dots on line end', 'brick' ),
	'',
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' ),
	)
);
$row2->addChild(
	'qode_slide_left_right_separator_linedots',
	$qode_slide_left_right_separator_linedots
);

$qode_slide_left_right_separator_line_dots_size = new QodeMetaField(
	'textsimple',
	'qode_slide_left_right_separator_line_dots_size',
	'',
	esc_html__( 'Dots Size (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_left_right_separator_line_dots_size',
	$qode_slide_left_right_separator_line_dots_size
);

$qode_slide_left_right_separator_dots_color = new QodeMetaField(
	'colorsimple',
	'qode_slide_left_right_separator_dots_color',
	'',
	esc_html__( 'Dots Color', 'brick' ),
	''
);
$row2->addChild(
	'qode_slide_left_right_separator_dots_color',
	$qode_slide_left_right_separator_dots_color
);

//Separator Position With Icon
$qode_slide_title_separator_with_icon_position = new QodeMetaField(
	"select",
	"qode_slide_title_separator_with_icon_position",
	"both",
	esc_html__( "Position", 'brick' ),
	esc_html__( "Choose position of slider separator", 'brick' ),
	array(
		"top" => esc_html__( "Top", 'brick' ),
		"bottom" => esc_html__( "Bottom", 'brick' )
	)
);
$qode_slide_title_separator_with_icon_container->addChild(
	"qode_slide_title_separator_with_icon_position",
	$qode_slide_title_separator_with_icon_position
);

//Separator Position With Custom Icon
$qode_slide_title_separator_with_custom_icon_position = new QodeMetaField(
	"select",
	"qode_slide_title_separator_with_custom_icon_position",
	"both",
	esc_html__( "Position", 'brick' ),
	esc_html__( "Choose position of slider separator", 'brick' ),
	array(
		"top" => esc_html__( "Top", 'brick' ),
		"bottom" => esc_html__( "Bottom", 'brick' )
	)
);
$qode_slide_title_separator_with_custom_icon_container->addChild(
	'qode_slide_title_separator_with_custom_icon_position',
	$qode_slide_title_separator_with_custom_icon_position
);

//Slide Subtitle

$qodeSlideSubtitle = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Subtitle Style", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_subtitle",
	$qodeSlideSubtitle
);

$subtitle_text_group = new QodeGroup(
	esc_html__( "Subtitle Text Style", 'brick' ),
	esc_html__( "Define styles for subtitle text", 'brick' )
);
$qodeSlideSubtitle->addChild(
	"subtitle_text_group",
	$subtitle_text_group
);
$row1 = new QodeRow();
$subtitle_text_group->addChild(
	"row1",
	$row1
);
$subtitle_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-subtitle-color",
	"",
	esc_html__( "Font Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-subtitle-color",
	$subtitle_color
);
$subtitle_fontsize = new QodeMetaField(
	"textsimple",
	"qode_slide-subtitle-font-size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-subtitle-font-size",
	$subtitle_fontsize
);
$subtitle_lineheight = new QodeMetaField(
	"textsimple",
	"qode_slide-subtitle-line-height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-subtitle-line-height",
	$subtitle_lineheight
);
$subtitle_letterspacing = new QodeMetaField(
	"textsimple",
	"qode_slide-subtitle-letter-spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-subtitle-letter-spacing",
	$subtitle_letterspacing
);

$row2 = new QodeRow( true );
$subtitle_text_group->addChild(
	"row2",
	$row2
);
$subtitle_google_fonts = new QodeMetaField(
	"fontsimple",
	"qode_slide-subtitle-font-family",
	"",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-subtitle-font-family",
	$subtitle_google_fonts
);
$subtitle_fontstyle = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-subtitle-font-style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"qode_slide-subtitle-font-style",
	$subtitle_fontstyle
);
$subtitle_fontweight = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-subtitle-font-weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"qode_slide-subtitle-font-weight",
	$subtitle_fontweight
);
$subtitle_transform = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-subtitle-text-transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"qode_slide-subtitle-text-transform",
	$subtitle_transform
);

$subtitle_background_group = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background for subtitle", 'brick' )
);
$qodeSlideSubtitle->addChild(
	"subtitle_background_group",
	$subtitle_background_group
);
$row1 = new QodeRow( true );
$subtitle_background_group->addChild(
	"row1",
	$row1
);
$subtitle_background_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-subtitle-background-color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-subtitle-background-color",
	$subtitle_background_color
);
$subtitle_background_color_transparency = new QodeMetaField(
	"textsimple",
	"qode_slide-subtitle-bg-color-transparency",
	"",
	esc_html__( "Background Color Transparency (values: 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-subtitle-bg-color-transparency",
	$subtitle_background_color_transparency
);

$subtitle_margin_group = new QodeGroup(
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "Enter value for subtitle bottom margin (default value is 14)", 'brick' )
);
$qodeSlideSubtitle->addChild(
	"subtitle_margin_group",
	$subtitle_margin_group
);
$row1 = new QodeRow( true );
$subtitle_margin_group->addChild(
	"row1",
	$row1
);
$subtitle_margin_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide_subtitle_margin_bottom",
	"",
	"",
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_subtitle_margin_bottom",
	$subtitle_margin_bottom
);

$subtitle_padding_group = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for subtitle", 'brick' )
);
$qodeSlideSubtitle->addChild(
	"subtitle_padding_group",
	$subtitle_padding_group
);
$row1 = new QodeRow( true );
$subtitle_padding_group->addChild(
	"row1",
	$row1
);
$subtitle_padding_top = new QodeMetaField(
	"textsimple",
	"qode_slide_subtitle_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_subtitle_padding_top",
	$subtitle_padding_top
);
$subtitle_padding_right = new QodeMetaField(
	"textsimple",
	"qode_slide_subtitle_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_subtitle_padding_right",
	$subtitle_padding_right
);
$subtitle_padding_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide_subtitle_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_subtitle_padding_bottom",
	$subtitle_padding_bottom
);
$subtitle_padding_left = new QodeMetaField(
	"textsimple",
	"qode_slide_subtitle_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_subtitle_padding_left",
	$subtitle_padding_left
);

//Slide Text

$qodeSlideText = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Text Style", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_text",
	$qodeSlideText
);

$text_common_text_group = new QodeGroup(
	esc_html__( 'Text Color and Size', 'brick' ),
	esc_html__( 'Define text color and size', 'brick' )
);
$qodeSlideText->addChild(
	'text_common_text_group',
	$text_common_text_group
);

$row1 = new QodeRow();
$text_common_text_group->addChild(
	'row1',
	$row1
);

$text_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-text-color",
	"",
	esc_html__( "Font Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-text-color",
	$text_color
);
$text_background_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-text-background-color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-text-background-color",
	$text_background_color
);
$text_fontsize = new QodeMetaField(
	"textsimple",
	"qode_slide-text-font-size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-text-font-size",
	$text_fontsize
);
$text_lineheight = new QodeMetaField(
	"textsimple",
	"qode_slide-text-line-height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-text-line-height",
	$text_lineheight
);

$text_separator_text = new QodeMetaField(
	'yesno',
	'text_separator_text',
	'no',
	esc_html__( 'Separator Around Text', 'brick' ),
	esc_html__( 'Do you want to have a separator around text', 'brick' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '#qodef_text_without_separator_container',
		'dependence_show_on_yes' => '#qodef_text_with_separator_container'
	)
);
$qodeSlideText->addChild(
	'text_separator_text',
	$text_separator_text
);

$text_without_separator_container = new QodeContainerNoStyle(
	'text_without_separator_container',
	'text_separator_text',
	'yes'
);
$qodeSlideText->addChild(
	'text_without_separator_container',
	$text_without_separator_container
);

$text_without_separator_padding_group = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define padding for text", 'brick' )
);
$text_without_separator_container->addChild(
	"text_without_separator_padding_group",
	$text_without_separator_padding_group
);

$row1 = new QodeRow( true );
$text_without_separator_padding_group->addChild(
	"row1",
	$row1
);

$text_padding_top = new QodeMetaField(
	"textsimple",
	"qode_slide_text_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_text_padding_top",
	$text_padding_top
);
$text_padding_right = new QodeMetaField(
	"textsimple",
	"qode_slide_text_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_text_padding_right",
	$text_padding_right
);
$text_padding_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide_text_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_text_padding_bottom",
	$text_padding_bottom
);
$text_padding_left = new QodeMetaField(
	"textsimple",
	"qode_slide_text_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_text_padding_left",
	$text_padding_left
);

$text_without_separator_text_group = new QodeGroup(
	esc_html__( "Text Text Style", 'brick' ),
	esc_html__( "Define styles for text text", 'brick' )
);
$text_without_separator_container->addChild(
	"text_without_separator_text_group",
	$text_without_separator_text_group
);

$row1 = new QodeRow();
$text_without_separator_text_group->addChild(
	"row1",
	$row1
);

$text_letterspacing = new QodeMetaField(
	"textsimple",
	"qode_slide-text-letter-spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-text-letter-spacing",
	$text_letterspacing
);

$row2 = new QodeRow( true );
$text_without_separator_text_group->addChild(
	"row2",
	$row2
);

$text_google_fonts = new QodeMetaField(
	"fontsimple",
	"qode_slide-text-font-family",
	"",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-text-font-family",
	$text_google_fonts
);
$text_fontstyle = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-text-font-style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"qode_slide-text-font-style",
	$text_fontstyle
);
$text_fontweight = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-text-font-weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"qode_slide-text-font-weight",
	$text_fontweight
);
$text_transform = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-text-text-transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"qode_slide-text-text-transform",
	$text_transform
);

$text_without_separator_background_group = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background for text", 'brick' )
);
$text_without_separator_container->addChild(
	"text_without_separator_background_group",
	$text_without_separator_background_group
);

$row1 = new QodeRow( true );
$text_without_separator_background_group->addChild(
	"row1",
	$row1
);

$text_background_color_transparency = new QodeMetaField(
	"textsimple",
	"qode_slide-text-bg-color-transparency",
	"",
	esc_html__( "Background Color Transparency (values 0-1)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-text-bg-color-transparency",
	$text_background_color_transparency
);

$text_with_separator_container = new QodeContainer(
	'text_with_separator_container',
	'text_separator_text',
	'no'
);
$qodeSlideText->addChild(
	'text_with_separator_container',
	$text_with_separator_container
);

$text_with_separator_border_styles = new QodeGroup(
	esc_html__( 'Separator Line Style', 'brick' ),
	esc_html__( 'Define separator line style', 'brick' )
);
$text_with_separator_container->addChild(
	'text_with_separator_border_styles',
	$text_with_separator_border_styles
);

$row1 = new QodeRow();
$text_with_separator_border_styles->addChild(
	'row1',
	$row1
);

$qode_separator_line_border_style = new QodeMetaField(
	'selectsimple',
	'qode_separator_line_border_style',
	'solid',
	esc_html__( 'Line Border Style', 'brick' ),
	'',
	array(
		'solid' => esc_html__( 'Solid', 'brick' ),
		'dashed' => esc_html__( 'Dashed', 'brick' ),
		'dotted' => esc_html__( 'Dotted', 'brick' ),
		'transparent' => esc_html__( 'Transparent', 'brick' )
	)
);
$row1->addChild(
	'qode_separator_line_border_style',
	$qode_separator_line_border_style
);

$qode_separator_line_width = new QodeMetaField(
	'textsimple',
	'qode_separator_line_width',
	'',
	esc_html__( 'Line Width (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_line_width',
	$qode_separator_line_width
);

$qode_separator_line_thickness = new QodeMetaField(
	'textsimple',
	'qode_separator_line_thickness',
	'',
	esc_html__( 'Line Thickness (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_line_thickness',
	$qode_separator_line_thickness
);

$qode_separator_line_color = new QodeMetaField(
	'colorsimple',
	'qode_separator_line_color',
	'',
	esc_html__( 'Line Color', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_line_color',
	$qode_separator_line_color
);

$text_with_separator_boxed = new QodeGroup(
	esc_html__( 'Boxed Text', 'brick' ),
	esc_html__( 'Add box around text', 'brick' )
);
$text_with_separator_container->addChild(
	'text_with_separator_boxed',
	$text_with_separator_boxed
);

$row1 = new QodeRow();
$text_with_separator_boxed->addChild(
	'row1',
	$row1
);

$qode_separator_text_in_box = new QodeMetaField(
	'selectsimple',
	'qode_separator_text_in_box',
	'no',
	esc_html__( 'Text in Box', 'brick' ),
	'',
	array(
		'yes' => esc_html__( 'Yes', 'brick' ),
		'no' => esc_html__( 'No', 'brick' )
	)
);
$row1->addChild(
	'qode_separator_text_in_box',
	$qode_separator_text_in_box
);

$qode_separator_box_border_style = new QodeMetaField(
	'selectsimple',
	'qode_separator_box_border_style',
	'solid',
	esc_html__( 'Box Border Style', 'brick' ),
	'',
	array(
		'solid' => esc_html__( 'Solid', 'brick' ),
		'dashed' => esc_html__( 'Dashed', 'brick' ),
		'dotted' => esc_html__( 'Dotted', 'brick' ),
		'transparent' => esc_html__( 'Transparent', 'brick' )
	)
);
$row1->addChild(
	'qode_separator_box_border_style',
	$qode_separator_box_border_style
);

$qode_separator_box_border_width = new QodeMetaField(
	'textsimple',
	'qode_separator_box_border_width',
	'',
	esc_html__( 'Box Border Width (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_box_border_width',
	$qode_separator_box_border_width
);

$qode_separator_box_border_radius = new QodeMetaField(
	'textsimple',
	'qode_separator_box_border_radius',
	'',
	esc_html__( 'Box Border Radius (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_box_border_radius',
	$qode_separator_box_border_radius
);

$row2 = new QodeRow( true );
$text_with_separator_boxed->addChild(
	'row2',
	$row2
);

$qode_separator_box_border_color = new QodeMetaField(
	'colorsimple',
	'qode_separator_box_border_color',
	'',
	esc_html__( 'Box Border Color', 'brick' ),
	''
);
$row2->addChild(
	'qode_separator_box_border_color',
	$qode_separator_box_border_color
);

$text_with_separator_position = new QodeGroup(
	esc_html__( 'Text Position', 'brick' ),
	esc_html__( 'Define position of text', 'brick' )
);
$text_with_separator_container->addChild(
	'text_with_separator_position',
	$text_with_separator_position
);

$row1 = new QodeRow();
$text_with_separator_position->addChild(
	'row1',
	$row1
);

$qode_separator_text_position = new QodeMetaField(
	'selectsimple',
	'qode_separator_text_position',
	'center',
	esc_html__( 'Text position', 'brick' ),
	'',
	array(
		'center' => esc_html__( 'Center', 'brick' ),
		'left' => esc_html__( 'Left', 'brick' ),
		'right' => esc_html__( 'Right', 'brick' )
	)
);
$row1->addChild(
	'qode_separator_text_position',
	$qode_separator_text_position
);

$qode_separator_text_leftright_padding = new QodeMetaField(
	'textsimple',
	'qode_separator_text_leftright_padding',
	'',
	esc_html__( 'Left/Right Text padding (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_text_leftright_padding',
	$qode_separator_text_leftright_padding
);

$qode_separator_text_top_margin = new QodeMetaField(
	'textsimple',
	'qode_separator_text_top_margin',
	'',
	esc_html__( 'Top Margin (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_text_top_margin',
	$qode_separator_text_top_margin
);

$qode_separator_text_bottom_margin = new QodeMetaField(
	'textsimple',
	'qode_separator_text_bottom_margin',
	'',
	esc_html__( 'Bottom Margin (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_text_bottom_margin',
	$qode_separator_text_bottom_margin
);

$row2 = new QodeRow( true );
$text_with_separator_position->addChild(
	'row2',
	$row2
);

$qode_separator_box_margin = new QodeMetaField(
	'textsimple',
	'qode_separator_box_margin',
	'',
	esc_html__( 'Box Margins Left/Right (px)', 'brick' ),
	''
);
$row2->addChild(
	'qode_separator_box_margin',
	$qode_separator_box_margin
);

$text_with_separator_linedots = new QodeGroup(
	esc_html__( 'Dots on Line End', 'brick' ),
	esc_html__( 'Add dots on line end', 'brick' )
);
$text_with_separator_container->addChild(
	'text_with_separator_linedots',
	$text_with_separator_linedots
);

$row1 = new QodeRow();
$text_with_separator_linedots->addChild(
	'row1',
	$row1
);

$qode_separator_linedots = new QodeMetaField(
	'selectsimple',
	'qode_separator_linedots',
	'no',
	esc_html__( 'Dots on line end', 'brick' ),
	'',
	array(
		'no' => esc_html__( 'No', 'brick' ),
		'yes' => esc_html__( 'Yes', 'brick' ),
	)
);
$row1->addChild(
	'qode_separator_linedots',
	$qode_separator_linedots
);

$qode_separator_line_dots_size = new QodeMetaField(
	'textsimple',
	'qode_separator_line_dots_size',
	'',
	esc_html__( 'Dots Size (px)', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_line_dots_size',
	$qode_separator_line_dots_size
);

$qode_separator_dots_color = new QodeMetaField(
	'colorsimple',
	'qode_separator_dots_color',
	'',
	esc_html__( 'Dots Color', 'brick' ),
	''
);
$row1->addChild(
	'qode_separator_dots_color',
	$qode_separator_dots_color
);

//Slide Buttons
//Button 1
$qodeSlideButtons = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Buttons Style", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_buttons",
	$qodeSlideButtons
);

$button1_section = new QodeTitle(
	"button1_section",
	esc_html__( "Button 1", 'brick' )
);
$qodeSlideButtons->addChild(
	"button1_section",
	$button1_section
);

$button1_group2 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$qodeSlideButtons->addChild(
	"button1_group2",
	$button1_group2
);

$row1 = new QodeRow();
$button1_group2->addChild(
	"row1",
	$row1
);
$button1_font_family = new QodeMetaField(
	"fontsimple",
	"qode_slide-button_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_font_family",
	$button1_font_family
);
$button1_font_size = new QodeMetaField(
	"textsimple",
	"qode_slide-button_font_size",
	"",
	esc_html__( "Text Size(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_font_size",
	$button1_font_size
);
$button1_font_style = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row1->addChild(
	"qode_slide-button_font_style",
	$button1_font_style
);
$button1_font_weight = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"qode_slide-button_font_weight",
	$button1_font_weight
);

$row2 = new QodeRow();
$button1_group2->addChild(
	"row2",
	$row2
);

$button1_letter_spacing = new QodeMetaField(
	"textsimple",
	"qode_slide-button_letter_spacing",
	"",
	esc_html__( "Letter Spacing(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_letter_spacing",
	$button1_letter_spacing
);

$button1_line_height = new QodeMetaField(
	"textsimple",
	"qode_slide-button_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_line_height",
	$button1_line_height
);

$button1_text_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_text_color",
	$button1_text_color
);

$button1_text_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_text_hover_color",
	$button1_text_hover_color
);

$row3 = new QodeRow();
$button1_group2->addChild(
	"row3",
	$row3
);

$button1_text_align = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_text_align",
	"",
	esc_html__( "Text Align", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$row3->addChild(
	"qode_slide-button_text_align",
	$button1_text_align
);
$button1_text_transform = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"qode_slide-button_text_transform",
	$button1_text_transform
);

$button1_group3 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background", 'brick' )
);
$qodeSlideButtons->addChild(
	"button1_group3",
	$button1_group3
);

$row1 = new QodeRow();
$button1_group3->addChild(
	"row1",
	$row1
);

$button1_background_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_background_color",
	$button1_background_color
);

$button1_background_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_background_hover_color",
	$button1_background_hover_color
);

$button1_group4 = new QodeGroup(
	esc_html__( "Size", 'brick' ),
	esc_html__( "Define button size", 'brick' )
);
$qodeSlideButtons->addChild(
	"button1_group4",
	$button1_group4
);

$row1 = new QodeRow();
$button1_group4->addChild(
	"row1",
	$row1
);

$button1_width = new QodeMetaField(
	"textsimple",
	"qode_slide-button_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_width",
	$button1_width
);

$button1_height = new QodeMetaField(
	"textsimple",
	"qode_slide-button_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_height",
	$button1_height
);

$button1_group5 = new QodeGroup(
	esc_html__( "Border", 'brick' ),
	esc_html__( "Define border style", 'brick' )
);
$qodeSlideButtons->addChild(
	"button1_group5",
	$button1_group5
);

$row1 = new QodeRow();
$button1_group5->addChild(
	"row1",
	$row1
);

$button1_border_width = new QodeMetaField(
	"textsimple",
	"qode_slide-button_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_width",
	$button1_border_width
);

$button1_border_radius = new QodeMetaField(
	"textsimple",
	"qode_slide-button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_radius",
	$button1_border_radius
);

$button1_border_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_color",
	$button1_border_color
);

$button1_border_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_hover_color",
	$button1_border_hover_color
);

$button1_margin = new QodeMetaField(
	"text",
	"qode_slide-button_margin1",
	"",
	esc_html__( "Margin (px)", 'brick' ),
	esc_html__( "Please insert margin in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qodeSlideButtons->addChild(
	"qode_slide-button_margin1",
	$button1_margin
);

$button1_group6 = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define left/right padding for button (px)", 'brick' )
);
$qodeSlideButtons->addChild(
	"button1_group6",
	$button1_group6
);

$row1 = new QodeRow( true );
$button1_group6->addChild(
	"row1",
	$row1
);

$button1_padding = new QodeMetaField(
	"textsimple",
	"qode_slide-button_padding",
	"",
	"",
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_padding",
	$button1_padding
);

$qode_slide_button1_hover_animation = new QodeMetaField(
	"select",
	"qode_slide_button1_hover_animation",
	"default",
	esc_html__( "Button Hover Animation", 'brick' ),
	esc_html__( "Choose a hover animation for slide buttons", 'brick' ),
	array(
		"default" => esc_html__( "Default", 'brick' ),
		"move_icon" => esc_html__( "Move Icon", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"default" => "#qodef_qode_slide_button1_width_container"
		),
		"show"       => array(
			"move_icon" => "#qodef_qode_slide_button1_width_container"
		)
	)
);
$qodeSlideButtons->addChild(
	"qode_slide_button1_hover_animation",
	$qode_slide_button1_hover_animation
);

$qode_slide_button1_width_container = new QodeContainer(
	'qode_slide_button1_width_container',
	'qode_slide_button1_hover_animation',
	'default'
);
$qodeSlideButtons->addChild(
	'qode_slide_button1_width_container',
	$qode_slide_button1_width_container
);

$qode_slide_button1_width = new QodeMetaField(
	"text",
	"qode_slide_button1_width",
	"",
	esc_html__( "Button 1 Width", 'brick' ),
	esc_html__( "Enter width for Button 1", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qode_slide_button1_width_container->addChild(
	"qode_slide_button1_width",
	$qode_slide_button1_width
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$button1_icon_pack_hide_array = array();
$button1_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$button1_icon_collections_params = brick_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( brick_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$button1_icon_pack_hide_array[ $dep_collection_key ] = '';
		$button1_icon_pack_hide_array["no_icon"]             = "";
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$button1_icon_pack_show_array[ $dep_collection_key ] = '#qodef_button1_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $button1_icon_collections_params as $button1_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $button1_icon_collections_param !== $dep_collection_object->param ) {
				$button1_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_button1_icon_' . $button1_icon_collections_param . '_container,';
			}
			
			$button1_icon_pack_hide_array["no_icon"] .= '#qodef_button1_icon_' . $button1_icon_collections_param . '_container,';
		}
		
		//remove remaining ',' character
		$button1_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$button1_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		$button1_icon_pack_hide_array["no_icon"]             = rtrim(
			$button1_icon_pack_hide_array["no_icon"],
			','
		);
	}
	
}

$button1_icon_pack = new QodeMetaField(
	"select",
	"button1_icon_pack",
	"no_icon",
	esc_html__( "Button 1 Icon Pack", 'brick' ),
	esc_html__( "Choose icon pack for first button", 'brick' ),
	brick_qode_icon_collections()->getIconCollectionsEmpty( "no_icon" ),
	array(
		"dependence" => true,
		"hide"       => $button1_icon_pack_hide_array,
		"show"       => $button1_icon_pack_show_array
	)
);

$qodeSlideButtons->addChild(
	"button1_icon_pack",
	$button1_icon_pack
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
		
		$button1_icon_hide_values   = $icon_collections_keys;
		$button1_icon_hide_values[] = "no_icon";
		$button1_icon_container     = new QodeContainer(
			"button1_icon_" . $collection_object->param . "_container",
			"button1_icon_pack",
			"",
			$button1_icon_hide_values
		);
		$button1_icon               = new QodeMetaField(
			"select",
			"button1_icon_" . $collection_object->param,
			"",
			esc_html__( "Button 1 Icon", 'brick' ),
			esc_html__( "Choose First Button Icon", 'brick' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$button1_icon_container->addChild(
			"button1_icon_" . $collection_object->param,
			$button1_icon
		);
		
		$qodeSlideButtons->addChild(
			"button1_icon_" . $collection_object->param . "_container",
			$button1_icon_container
		);
	}
	
}

//Button 2
$button2_section = new QodeTitle(
	"button2_section",
	esc_html__( "Button 2", 'brick' )
);
$qodeSlideButtons->addChild(
	"button2_section",
	$button2_section
);

$button2_group2 = new QodeGroup(
	esc_html__( "Text Style", 'brick' ),
	esc_html__( "Define text style", 'brick' )
);
$qodeSlideButtons->addChild(
	"button2_group2",
	$button2_group2
);
$row1 = new QodeRow();
$button2_group2->addChild(
	"row1",
	$row1
);

$button2_font_family = new QodeMetaField(
	"fontsimple",
	"qode_slide-button_font_family2",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_font_family2",
	$button2_font_family
);
$button2_font_size = new QodeMetaField(
	"textsimple",
	"qode_slide-button_font_size2",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_font_size2",
	$button2_font_size
);
$button2_font_style = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_font_style2",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row1->addChild(
	"qode_slide-button_font_style2",
	$button2_font_style
);
$button2_font_weight = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_font_weight2",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row1->addChild(
	"qode_slide-button_font_weight2",
	$button2_font_weight
);

$row2 = new QodeRow();
$button2_group2->addChild(
	"row2",
	$row2
);
$button2_letter_spacing = new QodeMetaField(
	"textsimple",
	"qode_slide-button_letter_spacing2",
	"",
	esc_html__( "Letter Spacing(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_letter_spacing2",
	$button2_letter_spacing
);
$button2_line_height = new QodeMetaField(
	"textsimple",
	"qode_slide-button_line_height2",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_line_height2",
	$button2_line_height
);
$button2_text_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_text_color2",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_text_color2",
	$button2_text_color
);
$button2_text_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_text_hover_color2",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-button_text_hover_color2",
	$button2_text_hover_color
);

$row3 = new QodeRow();
$button2_group2->addChild(
	"row3",
	$row3
);
$button2_text_align = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_text_align2",
	"",
	esc_html__( "Text Align", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$row3->addChild(
	"qode_slide-button_text_align2",
	$button2_text_align
);
$button2_text_transform = new QodeMetaField(
	"selectblanksimple",
	"qode_slide-button_text_transform2",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"qode_slide-button_text_transform2",
	$button2_text_transform
);

$button2_group3 = new QodeGroup(
	esc_html__( "Background", 'brick' ),
	esc_html__( "Define background", 'brick' )
);
$qodeSlideButtons->addChild(
	"button2_group3",
	$button2_group3
);
$row4 = new QodeRow();
$button2_group3->addChild(
	"row4",
	$row4
);
$button2_background_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_background_color2",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"qode_slide-button_background_color2",
	$button2_background_color
);
$button2_background_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_background_hover_color2",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"qode_slide-button_background_hover_color2",
	$button2_background_hover_color
);

$button2_group4 = new QodeGroup(
	esc_html__( "Size", 'brick' ),
	esc_html__( "Define button size", 'brick' )
);
$qodeSlideButtons->addChild(
	"button2_group4",
	$button2_group4
);
$row1 = new QodeRow();
$button2_group4->addChild(
	"row1",
	$row1
);
$button2_width = new QodeMetaField(
	"textsimple",
	"qode_slide-button_width2",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_width2",
	$button2_width
);
$button2_height = new QodeMetaField(
	"textsimple",
	"qode_slide-button_height2",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_height2",
	$button2_height
);

$button2_group5 = new QodeGroup(
	esc_html__( "Border", 'brick' ),
	esc_html__( "Define border style", 'brick' )
);
$qodeSlideButtons->addChild(
	"button2_group5",
	$button2_group5
);
$row1 = new QodeRow();
$button2_group5->addChild(
	"row1",
	$row1
);
$button2_border_width = new QodeMetaField(
	"textsimple",
	"qode_slide-button_border_width2",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_width2",
	$button2_border_width
);
$button2_border_radius = new QodeMetaField(
	"textsimple",
	"qode_slide-button_border_radius2",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_radius2",
	$button2_border_radius
);
$button2_border_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_border_color2",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_color2",
	$button2_border_color
);
$button2_border_hover_color = new QodeMetaField(
	"colorsimple",
	"qode_slide-button_border_hover_color2",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_border_hover_color2",
	$button2_border_hover_color
);

$button2_margin = new QodeMetaField(
	"text",
	"qode_slide-button_margin2",
	"",
	esc_html__( "Margin (px)", 'brick' ),
	esc_html__( "Please insert margin in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qodeSlideButtons->addChild(
	"qode_slide-button_margin2",
	$button2_margin
);

$button2_group6 = new QodeGroup(
	esc_html__( "Padding", 'brick' ),
	esc_html__( "Define left/right padding for button (px)", 'brick' )
);
$qodeSlideButtons->addChild(
	"button2_group6",
	$button2_group6
);

$row1 = new QodeRow( true );
$button2_group6->addChild(
	"row1",
	$row1
);

$button2_padding = new QodeMetaField(
	"textsimple",
	"qode_slide-button_padding2",
	"",
	"",
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-button_padding2",
	$button2_padding
);

$qode_slide_button2_hover_animation = new QodeMetaField(
	"select",
	"qode_slide_button2_hover_animation",
	"default",
	esc_html__( "Button Hover Animation", 'brick' ),
	esc_html__( "Choose a hover animation for slide buttons", 'brick' ),
	array(
		"default" => esc_html__( "Default", 'brick' ),
		"move_icon" => esc_html__( "Move Icon", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"default" => "#qodef_qode_slide_button2_width_container"
		),
		"show"       => array(
			"move_icon" => "#qodef_qode_slide_button2_width_container"
		)
	)
);
$qodeSlideButtons->addChild(
	"qode_slide_button2_hover_animation",
	$qode_slide_button2_hover_animation
);

$qode_slide_button2_width_container = new QodeContainer(
	'qode_slide_button2_width_container',
	'qode_slide_button2_hover_animation',
	'default'
);
$qodeSlideButtons->addChild(
	'qode_slide_button2_width_container',
	$qode_slide_button2_width_container
);

$qode_slide_button2_width = new QodeMetaField(
	"text",
	"qode_slide_button2_width",
	"",
	esc_html__( "Button 2 Width", 'brick' ),
	esc_html__( "Enter width for Button 2", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qode_slide_button2_width_container->addChild(
	"qode_slide_button2_width",
	$qode_slide_button2_width
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$button2_icon_pack_hide_array = array();
$button2_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( brick_qode_icon_collections()->iconCollections ) && count( brick_qode_icon_collections()->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$button2_icon_collections_params = brick_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( brick_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$button2_icon_pack_hide_array[ $dep_collection_key ] = '';
		$button2_icon_pack_hide_array["no_icon"]             = "";
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$button2_icon_pack_show_array[ $dep_collection_key ] = '#qodef_button2_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $button2_icon_collections_params as $button2_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $button2_icon_collections_param !== $dep_collection_object->param ) {
				$button2_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_button2_icon_' . $button2_icon_collections_param . '_container,';
			}
			
			$button2_icon_pack_hide_array["no_icon"] .= '#qodef_button2_icon_' . $button2_icon_collections_param . '_container,';
		}
		
		//remove remaining ',' character
		$button2_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$button2_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		$button2_icon_pack_hide_array["no_icon"]             = rtrim(
			$button2_icon_pack_hide_array["no_icon"],
			','
		);
	}
	
}

$button2_icon_pack = new QodeMetaField(
	"select",
	"button2_icon_pack",
	"no_icon",
	esc_html__( "Button 2 Icon Pack", 'brick' ),
	esc_html__( "Choose icon pack for first button", 'brick' ),
	brick_qode_icon_collections()->getIconCollectionsEmpty( "no_icon" ),
	array(
		"dependence" => true,
		"hide"       => $button2_icon_pack_hide_array,
		"show"       => $button2_icon_pack_show_array
	)
);

$qodeSlideButtons->addChild(
	"button2_icon_pack",
	$button2_icon_pack
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
		
		$button2_icon_hide_values   = $icon_collections_keys;
		$button2_icon_hide_values[] = "no_icon";
		$button2_icon_container     = new QodeContainer(
			"button2_icon_" . $collection_object->param . "_container",
			"button2_icon_pack",
			"",
			$button2_icon_hide_values
		);
		$button2_icon               = new QodeMetaField(
			"select",
			"button2_icon_" . $collection_object->param,
			"",
			esc_html__( "Button 2 Icon", 'brick' ),
			esc_html__( "Choose First Button Icon", 'brick' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$button2_icon_container->addChild(
			"button2_icon_" . $collection_object->param,
			$button2_icon
		);
		
		$qodeSlideButtons->addChild(
			"button2_icon_" . $collection_object->param . "_container",
			$button2_icon_container
		);
	}
	
}

//Slide Content Positioning

$qodeSlideContentPositioning = new BrickQodeMetaBox(
	"slides",
	esc_html__( "Slide Content Positioning", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"slides_content_positioning",
	$qodeSlideContentPositioning
);

$qode_slide_predefined_content_position = new QodeMetaField(
	"selectblank",
	"qode_slide_predefined_content_position",
	"",
	esc_html__( "Predefined content position", 'brick' ),
	esc_html__( "Choose position of slide content", 'brick' ),
	array(
		""                     => "",
		"content_bottom_left" => esc_html__( "Bottom Left", 'brick' ),
		"content_bottom_right" => esc_html__( "Bottom Right", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                     => "#qodef_qode_slide_predefined_content_position_width_container",
			"content_bottom_left"  => "#qodef_qode_slide_predefined_content_position_container",
			"content_bottom_right" => "#qodef_qode_slide_predefined_content_position_container"
		),
		"show"       => array(
			""                     => "#qodef_qode_slide_predefined_content_position_container",
			"content_bottom_left"  => "#qodef_qode_slide_predefined_content_position_width_container",
			"content_bottom_right" => "#qodef_qode_slide_predefined_content_position_width_container"
		)
	)
);
$qodeSlideContentPositioning->addChild(
	"qode_slide_predefined_content_position",
	$qode_slide_predefined_content_position
);

$qode_slide_predefined_content_position_width_container = new QodeContainerNoStyle(
	"qode_slide_predefined_content_position_width_container",
	"qode_slide_predefined_content_position",
	""
);
$qodeSlideContentPositioning->addChild(
	"qode_slide_predefined_content_position_width_container",
	$qode_slide_predefined_content_position_width_container
);

$qode_slide_predefined_content_position_width = new QodeMetaField(
	"text",
	"qode_slide_predefined_content_position_width",
	"",
	esc_html__( "Content Width", 'brick' ),
	esc_html__( "Enter Width for Content Area (px)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qode_slide_predefined_content_position_width_container->addChild(
	"qode_slide_predefined_content_position_width",
	$qode_slide_predefined_content_position_width
);

$qode_slide_predefined_content_position_container = new QodeContainerNoStyle(
	"qode_slide_predefined_content_position_container",
	"qode_slide_predefined_content_position",
	"content_bottom_left",
	array( "content_bottom_left", "content_bottom_right" )
);
$qodeSlideContentPositioning->addChild(
	"qode_slide_predefined_content_position_container",
	$qode_slide_predefined_content_position_container
);

$qode_slide_text_alignment = new QodeMetaField(
	"selectblank",
	"qode_slide-content-alignment",
	"",
	esc_html__( "Text Alignment", 'brick' ),
	esc_html__( "Choose an alignment for the slide text", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$qode_slide_predefined_content_position_container->addChild(
	"qode_slide-content-alignment",
	$qode_slide_text_alignment
);

$qode_slide_separate_text_graphic = new QodeMetaField(
	"selectblank",
	"qode_slide-separate-text-graphic",
	"no",
	esc_html__( "Separate Graphic and Text Positioning", 'brick' ),
	esc_html__( "Do you want to separately position graphic and text?", 'brick' ),
	array(
		"no" => esc_html__( "No", 'brick' ),
		"yes" => esc_html__( "Yes", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#qodef_qode_slide_graphic_positioning_container, #qodef_qode_slide_general_animation_separate_container",
			"no" => "#qodef_qode_slide_graphic_positioning_container, #qodef_qode_slide_general_animation_separate_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_slide_graphic_positioning_container, #qodef_qode_slide_general_animation_separate_container"
		)
	)
);
$qode_slide_predefined_content_position_container->addChild(
	"qode_slide-separate-text-graphic",
	$qode_slide_separate_text_graphic
);

$qode_slide_content_vertical_middle = new QodeMetaField(
	"yesno",
	"qode_slide-content-vertical-middle",
	"no",
	esc_html__( "Vertically Align Content to Middle", 'brick' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_qode_slide-content-vertical-middle-container",
		"dependence_show_on_yes" => "#qodef_qode_slide-content-vertical-middle-type-container"
	)
);
$qode_slide_predefined_content_position_container->addChild(
	"qode_slide-content-vertical-middle",
	$qode_slide_content_vertical_middle
);

$qode_slide_content_vertical_middle_type_container = new QodeContainer(
	"qode_slide-content-vertical-middle-type-container",
	"qode_slide-content-vertical-middle",
	"no"
);
$qode_slide_predefined_content_position_container->addChild(
	"qode_slide-content-vertical-middle-type-container",
	$qode_slide_content_vertical_middle_type_container
);

$qode_slide_content_vertical_middle_type = new QodeMetaField(
	"selectblank",
	"qode_slide-content-vertical-middle-type",
	"",
	esc_html__( "Align Content Vertically Relative to the Height Measured From", 'brick' ),
	"",
	array(
		"bottom_of_header" => esc_html__( "Bottom of Header", 'brick' ),
		"window_top" => esc_html__( "Window Top", 'brick' )
	)
);
$qode_slide_content_vertical_middle_type_container->addChild(
	"qode_slide-content-vertical-middle-type",
	$qode_slide_content_vertical_middle_type
);

$qode_slide_vertical_content_full_width = new QodeMetaField(
	"yesno",
	"qode_slide_vertical_content_full_width",
	"no",
	esc_html__( "Content Holder Full Width", 'brick' ),
	esc_html__( "Do you want to set slide content holder to full width?", 'brick' )
);
$qode_slide_content_vertical_middle_type_container->addChild(
	"qode_slide_vertical_content_full_width",
	$qode_slide_vertical_content_full_width
);

$qode_slide_vertical_content_width = new QodeMetaField(
	"text",
	"qode_slide_vertical_content_width",
	"",
	esc_html__( "Content Width", 'brick' ),
	esc_html__( "Enter Width for Content Area (%)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qode_slide_content_vertical_middle_type_container->addChild(
	"qode_slide_vertical_content_width",
	$qode_slide_vertical_content_width
);

$content_vertical_positioning_group = new QodeGroup(
	esc_html__( "Space Around Content in Slide", 'brick' ),
	esc_html__( "Enter values for margins around slide content", 'brick' )
);
$qode_slide_content_vertical_middle_type_container->addChild(
	"content_vertical_positioning_group",
	$content_vertical_positioning_group
);
$row1 = new QodeRow( true );
$content_vertical_positioning_group->addChild(
	"row1",
	$row1
);
$qode_slide_vertical_content_left = new QodeMetaField(
	"textsimple",
	"qode_slide_vertical_content_left",
	"",
	esc_html__( "From Left (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_vertical_content_left",
	$qode_slide_vertical_content_left
);
$qode_slide_vertical_content_right = new QodeMetaField(
	"textsimple",
	"qode_slide_vertical_content_right",
	"",
	esc_html__( "From Right (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide_vertical_content_right",
	$qode_slide_vertical_content_right
);

$qode_slide_content_vertical_middle_container = new QodeContainer(
	"qode_slide-content-vertical-middle-container",
	"qode_slide-content-vertical-middle",
	"yes"
);
$qode_slide_predefined_content_position_container->addChild(
	"qode_slide-content-vertical-middle-container",
	$qode_slide_content_vertical_middle_container
);

$qode_slide_content_full_width = new QodeMetaField(
	"yesno",
	"qode_slide-content-full-width",
	"no",
	esc_html__( "Content Holder Full Width", 'brick' ),
	esc_html__( "Do you want to set slide content holder to full width?", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_qode_slide_content_width_container",
		"dependence_show_on_yes" => ""
	)
);
$qode_slide_content_vertical_middle_container->addChild(
	"qode_slide-content-full-width",
	$qode_slide_content_full_width
);

$qode_slide_content_width_container = new QodeContainer(
	"qode_slide_content_width_container",
	"qode_slide-content-full-width",
	"yes"
);
$qode_slide_content_vertical_middle_container->addChild(
	"qode_slide_content_width_container",
	$qode_slide_content_width_container
);

$qode_slide_content_width = new QodeMetaField(
	"text",
	"qode_slide-content-width",
	"",
	esc_html__( "Content Holder Width", 'brick' ),
	esc_html__( "Enter Width for Content Holder Area (%)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$qode_slide_content_width_container->addChild(
	"qode_slide-content-width",
	$qode_slide_content_width
);

$content_positioning_group = new QodeGroup(
	esc_html__( "Space Around Content in Slide", 'brick' ),
	esc_html__( "Enter values for margins around slide content", 'brick' )
);
$qode_slide_content_vertical_middle_container->addChild(
	"content_positioning_group",
	$content_positioning_group
);
$row1 = new QodeRow( true );
$content_positioning_group->addChild(
	"row1",
	$row1
);
$qode_slide_content_top = new QodeMetaField(
	"textsimple",
	"qode_slide-content-top",
	"",
	esc_html__( "From Top (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-content-top",
	$qode_slide_content_top
);
$qode_slide_content_left = new QodeMetaField(
	"textsimple",
	"qode_slide-content-left",
	"",
	esc_html__( "From Left (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-content-left",
	$qode_slide_content_left
);
$qode_slide_content_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide-content-bottom",
	"",
	esc_html__( "From Bottom (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-content-bottom",
	$qode_slide_content_bottom
);
$qode_slide_content_right = new QodeMetaField(
	"textsimple",
	"qode_slide-content-right",
	"",
	esc_html__( "From Right (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-content-right",
	$qode_slide_content_right
);

$qode_slide_graphic_positioning_container = new QodeContainer(
	"qode_slide_graphic_positioning_container",
	"qode_slide-separate-text-graphic",
	"no"
);
$qode_slide_content_vertical_middle_container->addChild(
	"qode_slide_graphic_positioning_container",
	$qode_slide_graphic_positioning_container
);

$qode_slide_graphic_alignment = new QodeMetaField(
	"selectblank",
	"qode_slide-graphic-alignment",
	"",
	esc_html__( "Graphic Alignment", 'brick' ),
	esc_html__( "Choose an alignment for the slide graphic", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$qode_slide_graphic_positioning_container->addChild(
	"qode_slide-graphic-alignment",
	$qode_slide_graphic_alignment
);

$graphic_positioning_group = new QodeGroup(
	esc_html__( "Graphic Positioning", 'brick' ),
	esc_html__( "Positioning for slide graphic", 'brick' )
);
$qode_slide_graphic_positioning_container->addChild(
	"graphic_positioning_group",
	$graphic_positioning_group
);

$row1 = new QodeRow();
$graphic_positioning_group->addChild(
	"row1",
	$row1
);

$qode_slide_content_top = new QodeMetaField(
	"textsimple",
	"qode_slide-graphic-top",
	"",
	esc_html__( "From Top (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-graphic-top",
	$qode_slide_content_top
);

$qode_slide_content_left = new QodeMetaField(
	"textsimple",
	"qode_slide-graphic-left",
	"",
	esc_html__( "From Left (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-graphic-left",
	$qode_slide_content_left
);

$qode_slide_content_bottom = new QodeMetaField(
	"textsimple",
	"qode_slide-graphic-bottom",
	"",
	esc_html__( "From Bottom (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-graphic-bottom",
	$qode_slide_content_bottom
);

$qode_slide_content_right = new QodeMetaField(
	"textsimple",
	"qode_slide-graphic-right",
	"",
	esc_html__( "From Right (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"qode_slide-graphic-right",
	$qode_slide_content_right
);

$row2 = new QodeRow( true );
$graphic_positioning_group->addChild(
	"row2",
	$row2
);

$qode_slide_content_width = new QodeMetaField(
	"textsimple",
	"qode_slide-graphic-width",
	"",
	esc_html__( "Width (%)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"qode_slide-graphic-width",
	$qode_slide_content_width
);

$qode_slide_content_padding = new QodeMetaField(
	"text",
	"qode_slide-content-text-padding",
	"",
	esc_html__( "Slide Content Text Padding", 'brick' ),
	esc_html__( "Define some padding around text (top right bottom left) - Default value is 0px 0px 0px 0px", 'brick' )
);
$qodeSlideContentPositioning->addChild(
	"qode_slide-content-text-padding",
	$qode_slide_content_padding
);    