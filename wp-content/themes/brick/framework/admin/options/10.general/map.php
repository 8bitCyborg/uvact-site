<?php

$generalPage = new BrickQodeAdminPage(
	"",
	esc_html__( "General", 'brick' ),
	"fa fa-institution"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"general",
	$generalPage
);

// Design Style

$panel1 = new QodePanel(
	esc_html__( "Design Style", 'brick' ),
	"design_style"
);
$generalPage->addChild(
	"panel1",
	$panel1
);

$google_fonts = new QodeField(
	"font",
	"google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "Choose a default Google font for your site", 'brick' )
);
$panel1->addChild(
	"google_fonts",
	$google_fonts
);

$additional_google_fonts = new QodeField(
	"yesno",
	"additional_google_fonts",
	"no",
	esc_html__( "Additional Google Fonts", 'brick' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_additional_google_font_container"
	)
);
$panel1->addChild(
	"additional_google_fonts",
	$additional_google_fonts
);

$additional_google_font_container = new QodeContainer(
	"additional_google_font_container",
	"additional_google_fonts",
	"no"
);
$panel1->addChild(
	"additional_google_font_container",
	$additional_google_font_container
);

$additional_google_font1 = new QodeField(
	"font",
	"additional_google_font1",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "Choose additional Google font for your site", 'brick' )
);
$additional_google_font_container->addChild(
	"additional_google_font1",
	$additional_google_font1
);

$additional_google_font2 = new QodeField(
	"font",
	"additional_google_font2",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "Choose additional Google font for your site", 'brick' )
);
$additional_google_font_container->addChild(
	"additional_google_font2",
	$additional_google_font2
);

$additional_google_font3 = new QodeField(
	"font",
	"additional_google_font3",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "Choose additional Google font for your site", 'brick' )
);
$additional_google_font_container->addChild(
	"additional_google_font3",
	$additional_google_font3
);

$additional_google_font4 = new QodeField(
	"font",
	"additional_google_font4",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "Choose additional Google font for your site", 'brick' )
);
$additional_google_font_container->addChild(
	"additional_google_font4",
	$additional_google_font4
);

$additional_google_font5 = new QodeField(
	"font",
	"additional_google_font5",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "Choose additional Google font for your site", 'brick' )
);
$additional_google_font_container->addChild(
	"additional_google_font5",
	$additional_google_font5
);

$first_color = new QodeField(
	"color",
	"first_color",
	"",
	esc_html__( "First Main Color", 'brick' ),
	esc_html__( "Choose the most dominant theme color. Default color is #e6ae48.", 'brick' )
);
$panel1->addChild(
	"first_color",
	$first_color
);

$background_color = new QodeField(
	"color",
	"background_color",
	"",
	esc_html__( "Content Background Color", 'brick' ),
	esc_html__( "Choose the background color for page content area. Default color is #f5f5f5.", 'brick' )
);
$panel1->addChild(
	"background_color",
	$background_color
);

$background_color_grid = new QodeField(
	"color",
	"background_color_grid",
	"",
	esc_html__( "Content Background Color for Templates in Grid", 'brick' ),
	esc_html__( "Choose the background color for the page templates in grid.", 'brick' )
);
$panel1->addChild(
	"background_color_grid",
	$background_color_grid
);

$selection_color = new QodeField(
	"color",
	"selection_color",
	"",
	esc_html__( "Text Selection Color", 'brick' ),
	esc_html__( "Choose the color users see when selecting text", 'brick' )
);
$panel1->addChild(
	"selection_color",
	$selection_color
);

$content_top_padding = new QodeField(
	"text",
	"content_top_padding",
	"0",
	esc_html__( "Content Top Padding (px)", 'brick' ),
	esc_html__( "Enter top padding for content area. If you set this value then it's important to set also Content top padding for mobile header value.", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"content_top_padding",
	$content_top_padding
);

$content_top_padding_default_template = new QodeField(
	"text",
	"content_top_padding_default_template",
	"44",
	esc_html__( "Content Top Padding for Templates in Grid (px)", 'brick' ),
	esc_html__( "Enter top padding for content area for Templates in grid. If you set this value then it's important to set also Content top padding for mobile header value.", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"content_top_padding_default_template",
	$content_top_padding_default_template
);

$content_top_padding_mobile = new QodeField(
	"text",
	"content_top_padding_mobile",
	"44",
	esc_html__( "Content Top Padding for Mobile Header (px)", 'brick' ),
	esc_html__( "Enter top padding for content area for Mobile Header.", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"content_top_padding_mobile",
	$content_top_padding_mobile
);

$transparent_content = new QodeField(
	"yesno",
	"transparent_content",
	"no",
	esc_html__( "Enable Uniform Site Background", 'brick' ),
	esc_html__( "If enabled, content background on pages will be transparent (unless set otherwise) and the background you set here will show", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_transparent_content_container"
	)
);
$panel1->addChild(
	"transparent_content",
	$transparent_content
);

$transparent_content_container = new QodeContainer(
	"transparent_content_container",
	"transparent_content",
	"no"
);
$panel1->addChild(
	"transparent_content_container",
	$transparent_content_container
);

$transparent_content_background_color = new QodeField(
	"color",
	"transparent_content_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose body background color. Default color is #ffffff.", 'brick' )
);
$transparent_content_container->addChild(
	"transparent_content_background_color",
	$transparent_content_background_color
);

$transparent_content_background_image = new QodeField(
	"image",
	"transparent_content_background_image",
	"",
	esc_html__( "Background Image", 'brick' ),
	esc_html__( "Choose an image to be displayed in background", 'brick' )
);
$transparent_content_container->addChild(
	"transparent_content_background_image",
	$transparent_content_background_image
);

$transparent_content_pattern_background_image = new QodeField(
	"image",
	"transparent_content_pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'brick' ),
	esc_html__( "Choose an image to be used as background pattern", 'brick' )
);
$transparent_content_container->addChild(
	"transparent_content_pattern_background_image",
	$transparent_content_pattern_background_image
);

$overlapping_content = new QodeField(
	"yesno",
	"overlapping_content",
	"no",
	esc_html__( "Enable Overlapping Content", 'brick' ),
	esc_html__( "Enabling this option will make content overlap title area or slider for set amount of pixels", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_overlapping_content_container"
	)
);
$panel1->addChild(
	"overlapping_content",
	$overlapping_content
);

$overlapping_content_container = new QodeContainer(
	"overlapping_content_container",
	"overlapping_content",
	"no"
);
$panel1->addChild(
	"overlapping_content_container",
	$overlapping_content_container
);

$overlapping_content_amount = new QodeField(
	"text",
	"overlapping_content_amount",
	"",
	esc_html__( "Overlapping amount (px)", 'brick' ),
	esc_html__( "Enter amount of pixels you would like content to overlap title area or slider", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_content_amount",
	$overlapping_content_amount
);

$overlapping_content_padding = new QodeField(
	"text",
	"overlapping_content_padding",
	"",
	esc_html__( "Overlapping left/right padding (px)", 'brick' ),
	esc_html__( "This option takes effect only on Default (in grid) templates", 'brick' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_content_padding",
	$overlapping_content_padding
);

$boxed = new QodeField(
	"yesno",
	"boxed",
	"no",
	esc_html__( "Boxed layout", 'brick' ),
	esc_html__( "Enabling this option will display site content in grid", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_boxed_container"
	)
);
$panel1->addChild(
	"boxed",
	$boxed
);

$boxed_container = new QodeContainer(
	"boxed_container",
	"boxed",
	"no"
);
$panel1->addChild(
	"boxed_container",
	$boxed_container
);

$background_color_box = new QodeField(
	"color",
	"background_color_box",
	"",
	esc_html__( "Page Background Color", 'brick' ),
	esc_html__( "Choose the page background (body) color. Default color is #f5f5f5.", 'brick' )
);
$boxed_container->addChild(
	"background_color_box",
	$background_color_box
);

$background_image = new QodeField(
	"image",
	"background_image",
	"",
	esc_html__( "Background Image", 'brick' ),
	esc_html__( "Choose an image to be displayed in background", 'brick' )
);
$boxed_container->addChild(
	"background_image",
	$background_image
);

$pattern_background_image = new QodeField(
	"image",
	"pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'brick' ),
	esc_html__( "Choose an image to be used as background pattern", 'brick' )
);
$boxed_container->addChild(
	"pattern_background_image",
	$pattern_background_image
);

$background_image_attachment = new QodeField(
	"select",
	"background_image_attachment",
	"fixed",
	esc_html__( "Background Attachment", 'brick' ),
	esc_html__( "Choose background attachment behavior", 'brick' ),
	array(
		"fixed" => esc_html__( "Fixed", 'brick' ),
		"scroll" => esc_html__( "Scroll", 'brick' )
	)
);
$boxed_container->addChild(
	"background_image_attachment",
	$background_image_attachment
);

$boxed_padding_general = new QodeField(
	"text",
	"boxed_padding_general",
	"",
	esc_html__( "Left/Right Padding on Content (%)", 'brick' ),
	esc_html__( "Insert left(right) padding that will apply generaly", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$boxed_container->addChild(
	"boxed_padding_general",
	$boxed_padding_general
);

$boxed_padding_on_header_footer = new QodeField(
	"yesno",
	"boxed_padding_on_header_footer",
	"no",
	esc_html__( "Left/Right Padding Affects Header and Footer", 'brick' ),
	esc_html__( "By enabling this option the left/right padding will affect header and footer also", 'brick' )
);
$boxed_container->addChild(
	"boxed_padding_on_header_footer",
	$boxed_padding_on_header_footer
);

$boxed_padding_on_title_content = new QodeField(
	"yesno",
	"boxed_padding_on_title_content",
	"no",
	esc_html__( "Left/Right Padding Affects Title Content", 'brick' ),
	esc_html__( "By enabling this option the left/right padding will affect title content", 'brick' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_content",
	$boxed_padding_on_title_content
);

$boxed_padding_on_title_container = new QodeField(
	"yesno",
	"boxed_padding_on_title_container",
	"no",
	esc_html__( "Left/Right Padding Affects Title Container", 'brick' ),
	esc_html__( "By enabling this option the left/right padding will affect title container (including title image)", 'brick' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_container",
	$boxed_padding_on_title_container
);

$paspartu = new QodeField(
	"yesno",
	"paspartu",
	"no",
	esc_html__( "Passepartout", 'brick' ),
	esc_html__( "Enabling this option will display passepartout around site content", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_paspartu_container"
	)
);
$panel1->addChild(
	"paspartu",
	$paspartu
);

$paspartu_container = new QodeContainer(
	"paspartu_container",
	"paspartu",
	"no"
);
$panel1->addChild(
	"paspartu_container",
	$paspartu_container
);

$paspartu_color = new QodeField(
	"color",
	"paspartu_color",
	"",
	esc_html__( "Passepartout Color", 'brick' ),
	esc_html__( "Choose passepartout color, default value is #ffffff", 'brick' )
);
$paspartu_container->addChild(
	"paspartu_color",
	$paspartu_color
);

$paspartu_width = new QodeField(
	"text",
	"paspartu_width",
	"",
	esc_html__( "Passepartout Size (%)", 'brick' ),
	esc_html__( "Enter size amount for passepartout, default value is 2% (the percent is in relation to site width)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$paspartu_container->addChild(
	"paspartu_width",
	$paspartu_width
);

$paspartu_header_alignment = new QodeField(
	"yesno",
	"paspartu_header_alignment",
	"no",
	esc_html__( "Align Header With Passepartout", 'brick' ),
	esc_html__( "Enabling this option will align header content with passepartout borders", 'brick' )
);
$paspartu_container->addChild(
	"paspartu_header_alignment",
	$paspartu_header_alignment
);

$paspartu_header_inside = new QodeField(
	"yesno",
	"paspartu_header_inside",
	"no",
	esc_html__( "Set Header Inside Passepartout", 'brick' ),
	esc_html__( "Enabling this option will set the whole header between the left and right border of passepartout", 'brick' )
);
$paspartu_container->addChild(
	"paspartu_header_inside",
	$paspartu_header_inside
);

$vertical_menu_inside_paspartu = new QodeField(
	"yesno",
	"vertical_menu_inside_paspartu",
	"yes",
	esc_html__( "Vertical Menu Inside Passepartout", 'brick' ),
	""
);
$paspartu_container->addChild(
	"vertical_menu_inside_paspartu",
	$vertical_menu_inside_paspartu
);

$paspartu_footer_alignment = new QodeField(
	"yesno",
	"paspartu_footer_alignment",
	"no",
	esc_html__( "Align Footer With Passepartout", 'brick' ),
	esc_html__( "Enabling this option will align footer content with passepartout borders", 'brick' )
);
$paspartu_container->addChild(
	"paspartu_footer_alignment",
	$paspartu_footer_alignment
);

$paspartu_on_top = new QodeField(
	"yesno",
	"paspartu_on_top",
	"yes",
	esc_html__( "Top Passepartout", 'brick' ),
	esc_html__( "Disabling this option will disable top part of passepartout", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_paspartu_on_top_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_top",
	$paspartu_on_top
);

$paspartu_on_top_fixed_container = new QodeContainer(
	"paspartu_on_top_fixed_container",
	"paspartu_on_top",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_top_fixed_container",
	$paspartu_on_top_fixed_container
);

$paspartu_on_top_fixed = new QodeField(
	"yesno",
	"paspartu_on_top_fixed",
	"no",
	esc_html__( "Fix Top Passepartout", 'brick' ),
	esc_html__( "Enabling this option will fix top part of passepartout to the top of the screen", 'brick' )
);
$paspartu_on_top_fixed_container->addChild(
	"paspartu_on_top_fixed",
	$paspartu_on_top_fixed
);

$paspartu_on_bottom_slider_container = new QodeContainer(
	"paspartu_on_bottom_slider_container",
	"",
	""
);
$paspartu_container->addChild(
	"paspartu_on_bottom_slider_container",
	$paspartu_on_bottom_slider_container
);

$paspartu_on_bottom_slider = new QodeField(
	"yesno",
	"paspartu_on_bottom_slider",
	"no",
	esc_html__( "Show Bottom Passepartout on Select Slider", 'brick' ),
	esc_html__( "Enabling this option will show bottom passepartout on Select Slider", 'brick' )
);
$paspartu_on_bottom_slider_container->addChild(
	"paspartu_on_bottom_slider",
	$paspartu_on_bottom_slider
);

$paspartu_on_bottom = new QodeField(
	"yesno",
	"paspartu_on_bottom",
	"yes",
	esc_html__( "Bottom Passepartout", 'brick' ),
	esc_html__( "Disabling this option will disable bottom part of passepartout", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_paspartu_on_bottom_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_bottom",
	$paspartu_on_bottom
);

$paspartu_on_bottom_fixed_container = new QodeContainer(
	"paspartu_on_bottom_fixed_container",
	"paspartu_on_bottom",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_bottom_fixed_container",
	$paspartu_on_bottom_fixed_container
);

$paspartu_on_bottom_fixed = new QodeField(
	"yesno",
	"paspartu_on_bottom_fixed",
	"no",
	esc_html__( "Fix Bottom Passepartout", 'brick' ),
	esc_html__( "Enabling this option will fix bottom part of passepartout to the bottom of the screen", 'brick' )
);
$paspartu_on_bottom_fixed_container->addChild(
	"paspartu_on_bottom_fixed",
	$paspartu_on_bottom_fixed
);

$paspartu_portfolio_full_width = new QodeField(
	"yesno",
	"paspartu_portfolio_full_width",
	"no",
	esc_html__( "Full Width Portfolio List in Passepartout", 'brick' ),
	esc_html__( "Enabling this option will set portfolio lists within the passepartout to full width of content; otherwise there is a small padding between portfolio and passepartout", 'brick' )
);
$paspartu_container->addChild(
	"paspartu_portfolio_full_width",
	$paspartu_portfolio_full_width
);

$content_grid_position = new QodeField(
	"select",
	"content_grid_position",
	"",
	esc_html__( "Position of Content in Grid", 'brick' ),
	esc_html__( "Set position of content in grid", 'brick' ),
	array(
		"default" => esc_html__( "Default", 'brick' ),
		"left" => esc_html__( "Left", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$panel1->addChild(
	"content_grid_position",
	$content_grid_position
);

$content_predefined_width = new QodeField(
	"select",
	"content_predefined_width",
	"",
	esc_html__( "Initial Width of Content", 'brick' ),
	esc_html__( "Choose the initial width of content which is in grid (Applies to pages set to 'Default Template' and rows set to 'In Grid' )", 'brick' ),
	array(
		"" => esc_html__( "1100px - default", 'brick' ),
		"grid_1300" => esc_html__( "1300px", 'brick' ),
		"grid_1200" => esc_html__( "1200px", 'brick' ),
		"grid_800" => esc_html__( "800px", 'brick' )
	)
);
$panel1->addChild(
	"content_predefined_width",
	$content_predefined_width
);

$preload_pattern_image = new QodeField(
	"image",
	"preload_pattern_image",
	BRICK_ROOT . "/img/preload_pattern.png",
	esc_html__( "Preload Pattern Image", 'brick' ),
	esc_html__( "Choose preload pattern image to be displayed until images are loaded ", 'brick' )
);
$panel1->addChild(
	"preload_pattern_image",
	$preload_pattern_image
);

$element_appear_amount = new QodeField(
	"text",
	"element_appear_amount",
	"",
	esc_html__( "Element Appearance (px)", 'brick' ),
	esc_html__( "For animated elements, set distance (related to browser bottom) to start the animation", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"element_appear_amount",
	$element_appear_amount
);

// Settings

$panel4 = new QodePanel(
	esc_html__( "Settings", 'brick' ),
	"settings"
);
$generalPage->addChild(
	"panel4",
	$panel4
);

$page_transitions = new QodeField(
	"select",
	"page_transitions",
	"0",
	esc_html__( "Page Transition", 'brick' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'brick' ),
	array(
		0 => "No animation",
		1 => "Up/Down",
		2 => "Fade",
		3 => "Up/Down (In) / Fade (Out)",
		4 => "Left/Right"
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"0" => "#qodef_ajax_animate_header_container",
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => ""
		),
		"show"       => array(
			"0" => "",
			"1" => "#qodef_ajax_animate_header_container",
			"2" => "#qodef_ajax_animate_header_container",
			"3" => "#qodef_ajax_animate_header_container",
			"4" => "#qodef_ajax_animate_header_container"
		)
	),
	"enable_grid_elements",
	array( "yes" )
);
$panel4->addChild(
	"page_transitions",
	$page_transitions
);

$page_transitions_notice = new QodeNotice(
	esc_html__( "Page Transition", 'brick' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'brick' ),
	esc_html__( "Page transition is disabled because VC Grid is Enabled", 'brick' ),
	"enable_grid_elements",
	"no"
);
$panel4->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$ajax_animate_header_container = new QodeContainer(
	"ajax_animate_header_container",
	"page_transitions",
	"0"
);
$panel4->addChild(
	"ajax_animate_header_container",
	$ajax_animate_header_container
);

$ajax_animate_header = new QodeField(
	"yesno",
	"ajax_animate_header",
	"no",
	esc_html__( "Animate Header", 'brick' ),
	esc_html__( "Enabling this option will include the header area in the Ajax Page Transition Animations", 'brick' )
);
$ajax_animate_header_container->addChild(
	"ajax_animate_header",
	$ajax_animate_header
);

$loading_animation = new QodeField(
	"onoff",
	"loading_animation",
	"off",
	esc_html__( "Loading Animation", 'brick' ),
	esc_html__( "Enabling this option will display animation while page loads", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_loading_animation_container"
	)
);
$panel4->addChild(
	"loading_animation",
	$loading_animation
);

$loading_animation_container = new QodeContainer(
	"loading_animation_container",
	"loading_animation",
	"off"
);
$panel4->addChild(
	"loading_animation_container",
	$loading_animation_container
);

$group1 = new QodeGroup(
	esc_html__( "Loading Animation Graphic", 'brick' ),
	esc_html__( "Choose type and color of preload graphic animation", 'brick' )
);
$loading_animation_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$loading_animation_spinner = new QodeField(
	"selectsimple",
	"loading_animation_spinner",
	"pulse",
	esc_html__( "Spinner", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"pulse" => esc_html__( "Pulse", 'brick' ),
		"double_pulse" => esc_html__( "Double Pulse", 'brick' ),
		"cube" => esc_html__( "Cube", 'brick' ),
		"rotating_cubes" => esc_html__( "Rotating Cubes", 'brick' ),
		"stripes" => esc_html__( "Stripes", 'brick' ),
		"wave" => esc_html__( "Wave", 'brick' ),
		"two_rotating_circles" => esc_html__( "2 Rotating Circles", 'brick' ),
		"five_rotating_circles" => esc_html__( "5 Rotating Circles", 'brick' ),
		"atom" => esc_html__( "Atom", 'brick' ),
		"clock" => esc_html__( "Clock", 'brick' ),
		"mitosis" => esc_html__( "Mitosis", 'brick' ),
		"lines" => esc_html__( "Lines", 'brick' ),
		"fussion" => esc_html__( "Fussion", 'brick' ),
		"wave_circles" => esc_html__( "Wave Circles", 'brick' ),
		"pulse_circles" => esc_html__( "Pulse Circles", 'brick' )
	)
);
$row1->addChild(
	"loading_animation_spinner",
	$loading_animation_spinner
);

$spinner_color = new QodeField(
	"colorsimple",
	"spinner_color",
	"",
	esc_html__( "Spinner Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"spinner_color",
	$spinner_color
);

$loading_image = new QodeField(
	"image",
	"loading_image",
	"",
	esc_html__( "Loading Image", 'brick' ),
	esc_html__( 'Upload custom image to be displayed while page loads (Note: Page Transition must not be set to "No Animation")', 'brick' )
);
$loading_animation_container->addChild(
	"loading_image",
	$loading_image
);

$smooth_scroll = new QodeField(
	"yesno",
	"smooth_scroll",
	"yes",
	esc_html__( "Smooth Scroll", 'brick' ),
	esc_html__( "Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)", 'brick' )
);
$panel4->addChild(
	"smooth_scroll",
	$smooth_scroll
);

$elements_animation_on_touch = new QodeField(
	"yesno",
	"elements_animation_on_touch",
	"no",
	esc_html__( "Elements Animation on Mobile/Touch Devices", 'brick' ),
	esc_html__( "Enabling this option will allow elements (shortcodes) to animate on mobile / touch devices", 'brick' )
);
$panel4->addChild(
	"elements_animation_on_touch",
	$elements_animation_on_touch
);

$show_back_button = new QodeField(
	"yesno",
	"show_back_button",
	"yes",
	esc_html__( "Show 'Back To Top Button'", 'brick' ),
	esc_html__( "Enabling this option will display a Back to Top button on every page", 'brick' )
);
$panel4->addChild(
	"show_back_button",
	$show_back_button
);

$responsiveness = new QodeField(
	"yesno",
	"responsiveness",
	"yes",
	esc_html__( "Responsiveness", 'brick' ),
	esc_html__( "Enabling this option will make all pages responsive", 'brick' )
);
$panel4->addChild(
	"responsiveness",
	$responsiveness
);

$favicon_image = new QodeField(
	"image",
	"favicon_image",
	BRICK_ROOT . "/img/favicon.ico",
	esc_html__( "Favicon Image", 'brick' ),
	esc_html__( "Choose a favicon image to be displayed", 'brick' )
);
$panel4->addChild(
	"favicon_image",
	$favicon_image
);

$internal_no_ajax_links = new QodeField(
	"textarea",
	"internal_no_ajax_links",
	"",
	esc_html__( "List of Internal URLs Loaded Without AJAX (Separated With Comma)", 'brick' ),
	esc_html__( "To disable AJAX transitions on certain pages, enter their full URLs here (for example: http://www.mydomain.com/forum/)", 'brick' )
);
$panel4->addChild(
	"internal_no_ajax_links",
	$internal_no_ajax_links
);

// Custom Code

$panel3 = new QodePanel(
	esc_html__( "Custom Code", 'brick' ),
	"custom_code"
);
$generalPage->addChild(
	"panel3",
	$panel3
);

$custom_css = new QodeField(
	"textarea",
	"custom_css",
	"",
	esc_html__( "Custom CSS", 'brick' ),
	esc_html__( "Enter your custom CSS here", 'brick' )
);
$panel3->addChild(
	"custom_css",
	$custom_css
);

$custom_svg_css = new QodeField(
	"textarea",
	"custom_svg_css",
	"",
	esc_html__( "Custom SVG CSS", 'brick' ),
	esc_html__( "Enter your SVG CSS here", 'brick' )
);
$panel3->addChild(
	"custom_svg_css",
	$custom_svg_css
);

$custom_js = new QodeField(
	"textarea",
	"custom_js",
	"",
	esc_html__( "Custom JS", 'brick' ),
	esc_html__( 'Enter your custom Javascript here (jQuery selector is "$j" because of the conflict mode)', 'brick' )
);
$panel3->addChild(
	"custom_js",
	$custom_js
);

// SEO

$panel2 = new QodePanel(
	esc_html__( "SEO", 'brick' ),
	"seo"
);
$generalPage->addChild(
	"panel2",
	$panel2
);

$disable_qode_seo = new QodeField(
	"yesno",
	"disable_qode_seo",
	"no",
	esc_html__( "Disable SEO", 'brick' ),
	esc_html__( "Enabling this option will turn off SEO", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_disable_qode_seo_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"disable_qode_seo",
	$disable_qode_seo
);

$disable_qode_seo_container = new QodeContainer(
	"disable_qode_seo_container",
	"disable_qode_seo",
	"yes"
);
$panel2->addChild(
	"disable_qode_seo_container",
	$disable_qode_seo_container
);

$meta_keywords = new QodeField(
	"textarea",
	"meta_keywords",
	"",
	esc_html__( "Meta Keywords", 'brick' ),
	esc_html__( "Add relevant keywords separated with commas to improve SEO", 'brick' )
);
$disable_qode_seo_container->addChild(
	"meta_keywords",
	$meta_keywords
);

$meta_description = new QodeField(
	"textarea",
	"meta_description",
	"",
	esc_html__( "Meta Description", 'brick' ),
	esc_html__( "Enter a short description of the website for SEO", 'brick' )
);
$disable_qode_seo_container->addChild(
	"meta_description",
	$meta_description
);

// Google Maps

$panel_google_maps = new QodePanel(
	esc_html__( "Google Maps", 'brick' ),
	"google_maps"
);
$generalPage->addChild(
	"panel_google_maps",
	$panel_google_maps
);

$google_maps_api_key = new QodeField(
	"text",
	"google_maps_api_key",
	"",
	esc_html__( "Google Maps Api Key", 'brick' ),
	esc_html__( "Insert your Google Maps API key here.", 'brick' )
);
$panel_google_maps->addChild(
	"google_maps_api_key",
	$google_maps_api_key
);