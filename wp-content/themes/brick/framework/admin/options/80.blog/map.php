<?php

$blogPage = new BrickQodeAdminPage(
	"8",
	esc_html__( "Blog", 'brick' ),
	"fa fa-files-o"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"blogPage",
	$blogPage
);

// Blog Post Lists - General

$panel1 = new QodePanel(
	esc_html__( "Blog Lists", 'brick' ),
	"post_lists_general_panel"
);
$blogPage->addChild(
	"panel1",
	$panel1
);

$blog_style = new QodeField(
	"select",
	"blog_style",
	"1",
	esc_html__( "Archive and Category Layout", 'brick' ),
	esc_html__( "Choose a default blog layout for archived Blog Post Lists and Category Blog Lists", 'brick' ),
	array(
		"1" => esc_html__( "Blog: Standard", 'brick' ),
		"2" => esc_html__( "Blog: Split Column", 'brick' ),
		"3" => esc_html__( "Blog: Masonry", 'brick' ),
		"4" => esc_html__( "Blog: Masonry Full Width", 'brick' ),
		"5" => esc_html__( "Blog: Standard Whole Post", 'brick' )
	)
);
$panel1->addChild(
	"blog_style",
	$blog_style
);

$category_blog_sidebar = new QodeField(
	"select",
	"category_blog_sidebar",
	"default",
	esc_html__( "Archive and Category Sidebar", 'brick' ),
	esc_html__( "Choose a sidebar layout for archived Blog Post Lists and Category Blog Lists", 'brick' ),
	array(
		"default" => esc_html__( "No Sidebar", 'brick' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'brick' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'brick' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'brick' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'brick' )
	)
);
$panel1->addChild(
	"category_blog_sidebar",
	$category_blog_sidebar
);

$pagination = new QodeField(
	"yesno",
	"pagination",
	"yes",
	esc_html__( "Pagination", 'brick' ),
	esc_html__( "Enabling this option will display pagination links on bottom of Blog Post List", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_hide_pagination_list_container"
	)
);
$panel1->addChild(
	"pagination",
	$pagination
);

$blog_hide_pagination_list_container = new QodeContainer(
	"blog_hide_pagination_list_container",
	"pagination",
	""
);
$panel1->addChild(
	"blog_hide_pagination_list_container",
	$blog_hide_pagination_list_container
);

$blog_pagination_type = new QodeField(
	"select",
	"blog_pagination_type",
	"standard",
	esc_html__( "Pagination type", 'brick' ),
	esc_html__( "Choose type of pagination", 'brick' ),
	array(
		"standard" => esc_html__( "Standard", 'brick' ),
		"prev_and_next" => esc_html__( "Only Previous and Next", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"prev_and_next" => "#qodef_blog_page_range_container",
			"standard"      => "#qodef_blog_pagination_text_container"
		),
		"show"       => array(
			"standard"      => "#qodef_blog_page_range_container",
			"prev_and_next" => "#qodef_blog_pagination_text_container"
		)
	)
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_type",
	$blog_pagination_type
);

$blog_page_range_container = new QodeContainer(
	"blog_page_range_container",
	"blog_pagination_type",
	"prev_and_next"
);
$blog_hide_pagination_list_container->addChild(
	"blog_page_range_container",
	$blog_page_range_container
);

$blog_page_range = new QodeField(
	"text",
	"blog_page_range",
	"",
	esc_html__( "Pagination Range limit", 'brick' ),
	esc_html__( "Enter a number that will limit pagination to a certain range of links", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_page_range_container->addChild(
	"blog_page_range",
	$blog_page_range
);

$blog_pagination_text_container = new QodeContainer(
	"blog_pagination_text_container",
	"blog_pagination_type",
	"standard"
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_text_container",
	$blog_pagination_text_container
);

$group17 = new QodeGroup(
	esc_html__( "Labels for Buttons", 'brick' ),
	esc_html__( "Enter labels you want for Previous and Next buttons (Previous and Next are standard labels)", 'brick' )
);
$blog_pagination_text_container->addChild(
	"group17",
	$group17
);

$row1 = new QodeRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_pagination_previous_label = new QodeField(
	"textsimple",
	"blog_pagination_previous_label",
	"",
	esc_html__( "Previous Label", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_pagination_previous_label",
	$blog_pagination_previous_label
);

$blog_pagination_next_label = new QodeField(
	"textsimple",
	"blog_pagination_next_label",
	"",
	esc_html__( "Next Label", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_pagination_next_label",
	$blog_pagination_next_label
);

$blog_pagination_border_above_yesno = new QodeField(
	"yesno",
	"blog_pagination_border_above_yesno",
	"no",
	esc_html__( "Border Above Pagination", 'brick' ),
	esc_html__( "Enabling this option will display border above pagination", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#qodef_blog_pagination_border_container"
	)
);
$blog_page_range_container->addChild(
	"blog_pagination_border_above_yesno",
	$blog_pagination_border_above_yesno
);

$blog_pagination_border_container = new QodeContainer(
	"blog_pagination_border_container",
	"blog_pagination_border_above_yesno",
	"no"
);
$blog_page_range_container->addChild(
	"blog_pagination_border_container",
	$blog_pagination_border_container
);

$group18 = new QodeGroup(
	esc_html__( "Border Style", 'brick' ),
	esc_html__( "Define style for border top on pagination", 'brick' )
);
$blog_pagination_border_container->addChild(
	"group18",
	$group18
);

$row1 = new QodeRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_pgn_border_color = new QodeField(
	"colorsimple",
	"blog_pgn_border_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_pgn_border_color",
	$blog_pgn_border_color
);

$blog_pgn_border_width = new QodeField(
	"textsimple",
	"blog_pgn_border_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_pgn_border_width",
	$blog_pgn_border_width
);

$blog_pgn_border_style = new QodeField(
	"selectsimple",
	"blog_pgn_border_style",
	"",
	esc_html__( "Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"solid" => esc_html__( "Solid", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' )
	)
);
$row1->addChild(
	"blog_pgn_border_style",
	$blog_pgn_border_style
);

$blog_pagination_border_margin = new QodeField(
	"text",
	"blog_pagination_border_margin",
	"",
	esc_html__( "Margin from Border (px)", 'brick' ),
	esc_html__( "Set margin from border to pagination buttons", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_pagination_border_container->addChild(
	"blog_pagination_border_margin",
	$blog_pagination_border_margin
);

$number_of_chars = new QodeField(
	"text",
	"number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'brick' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"number_of_chars",
	$number_of_chars
);

// Blog Single

$panel20 = new QodePanel(
	esc_html__( "Blog Single", 'brick' ),
	"blog_single_panel"
);
$blogPage->addChild(
	"panel20",
	$panel20
);

$blog_single_sidebar = new QodeField(
	"select",
	"blog_single_sidebar",
	"default",
	esc_html__( "Sidebar Layout", 'brick' ),
	esc_html__( "Choose a sidebar layout for Blog Single pages", 'brick' ),
	array(
		"default" => esc_html__( "No Sidebar", 'brick' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'brick' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'brick' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'brick' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'brick' )
	)
);
$panel20->addChild(
	"blog_single_sidebar",
	$blog_single_sidebar
);

$custom_sidebars = brick_qode_get_custom_sidebars();

$blog_single_sidebar_custom_display = new QodeField(
	"selectblank",
	"blog_single_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'brick' ),
	esc_html__( "Choose a sidebar to display on Blog Single pages", 'brick' ),
	$custom_sidebars
);
$panel20->addChild(
	"blog_single_sidebar_custom_display",
	$blog_single_sidebar_custom_display
);

$blog_single_show_ql_icon = new QodeField(
	"yesno",
	"blog_single_show_ql_icon",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'brick' ),
	esc_html__( "Enabling this option will show Quote/Link Icon on Blog Single posts", 'brick' )
);
$panel20->addChild(
	"blog_single_show_ql_icon",
	$blog_single_show_ql_icon
);

$blog_single_navigation = new QodeField(
	"yesno",
	"blog_single_navigation",
	"no",
	esc_html__( "Enable Prev/Next Single Post Navigation Links", 'brick' ),
	esc_html__( "Enable navigation links through the blog posts (left and right arrows will appear)", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_hide_pagination_container"
	)
);
$panel20->addChild(
	"blog_single_navigation",
	$blog_single_navigation
);

$blog_hide_pagination_container = new QodeContainer(
	"blog_hide_pagination_container",
	"blog_single_navigation",
	"no"
);
$panel20->addChild(
	"blog_hide_pagination_container",
	$blog_hide_pagination_container
);

$blog_navigation_through_same_category = new QodeField(
	"yesno",
	"blog_navigation_through_same_category",
	"no",
	esc_html__( "Enable Navigation Only in Current Category", 'brick' ),
	esc_html__( "Limit your navigation only through current category", 'brick' )
);
$blog_hide_pagination_container->addChild(
	"blog_navigation_through_same_category",
	$blog_navigation_through_same_category
);

$blog_single_title_tags = new QodeField(
	"select",
	"blog_single_title_tags",
	"h5",
	esc_html__( "Headlines Below Post Content", 'brick' ),
	esc_html__( 'Choose a tag for headlines below post content ("Tags", "Post a comment", etc)', 'brick' ),
	array(
		"h2" => esc_html__( "h2", 'brick' ),
		"h3" => esc_html__( "h3", 'brick' ),
		"h4" => esc_html__( "h4", 'brick' ),
		"h5" => esc_html__( "h5", 'brick' ),
		"h6" => esc_html__( "h6", 'brick' )
	)
);
$panel20->addChild(
	"blog_single_title_tags",
	$blog_single_title_tags
);

$group1 = new QodeGroup(
	esc_html__( "Blog Single Spacing", 'brick' ),
	esc_html__( "Set spacing for single post pages", 'brick' )
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

$blog_single_tags_holder_margin_top = new QodeField(
	"textsimple",
	"blog_single_tags_holder_margin_top",
	"",
	esc_html__( "Margin Above Tags(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_tags_holder_margin_top",
	$blog_single_tags_holder_margin_top
);

$blog_single_navigation_margin = new QodeField(
	"textsimple",
	"blog_single_navigation_margin",
	"",
	esc_html__( "Margin Above and Under Navigation(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_navigation_margin",
	$blog_single_navigation_margin
);

$blog_single_comments_holder_margin = new QodeField(
	"textsimple",
	"blog_single_comments_holder_margin",
	"",
	esc_html__( "Margin Above and Under Comments(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_comments_holder_margin",
	$blog_single_comments_holder_margin
);

$post_info_data_single = new QodeTitle(
	"post_info_data_single",
	esc_html__( "Post Info Data Fields", 'brick' )
);
$panel20->addChild(
	"post_info_data_single",
	$post_info_data_single
);

$blog_single_show_date = new QodeField(
	"yesno",
	"blog_single_show_date",
	"yes",
	esc_html__( "Show Date", 'brick' ),
	esc_html__( "Enabling this option will show date on Blog Single posts", 'brick' )
);
$panel20->addChild(
	"blog_single_show_date",
	$blog_single_show_date
);

$blog_single_show_like = new QodeField(
	"yesno",
	"blog_single_show_like",
	"no",
	esc_html__( "Show Like", 'brick' ),
	esc_html__( "Enabling this option will turn on 'Likes' on Blog Single posts", 'brick' )
);
$panel20->addChild(
	"blog_single_show_like",
	$blog_single_show_like
);

$blog_single_show_social_share = new QodeField(
	"yesno",
	"blog_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'brick' ),
	esc_html__( "Enabling this option will show share on Single Post", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_single_share_options_container"
	)
);
$panel20->addChild(
	"blog_single_show_social_share",
	$blog_single_show_social_share
);

$blog_single_share_options_container = new QodeContainer(
	"blog_single_share_options_container",
	"blog_single_show_social_share",
	"no"
);
$panel20->addChild(
	"blog_single_share_options_container",
	$blog_single_share_options_container
);

$blog_single_select_share_option = new QodeField(
	"select",
	"blog_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'brick' ),
	esc_html__( "Choose Social Share Style for Single Post", 'brick' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'brick' ),
		"list" => esc_html__( "Social Share List", 'brick' )
	)
);

$blog_single_share_options_container->addChild(
	"blog_single_select_share_option",
	$blog_single_select_share_option
);

$blog_single_share_icon_color = new QodeField(
	"color",
	"blog_single_share_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose Social Share Icon Color for Single Post", 'brick' )
);
$blog_single_share_options_container->addChild(
	"blog_single_share_icon_color",
	$blog_single_share_icon_color
);

$blog_single_share_icon_color_hover = new QodeField(
	"color",
	"blog_single_share_icon_color_hover",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose Social Share Icon Hover Color for Single Post", 'brick' )
);
$blog_single_share_options_container->addChild(
	"blog_single_share_icon_color_hover",
	$blog_single_share_icon_color_hover
);

$blog_single_show_category = new QodeField(
	"yesno",
	"blog_single_show_category",
	"yes",
	esc_html__( "Show Category", 'brick' ),
	esc_html__( "Enabling this option will show category/categories on Blog Single posts", 'brick' )
);
$panel20->addChild(
	"blog_single_show_category",
	$blog_single_show_category
);

$blog_single_show_time = new QodeField(
	"yesno",
	"blog_single_show_time",
	"yes",
	esc_html__( "Show Time", 'brick' ),
	esc_html__( "Enabling this option will show time on Blog Single posts", 'brick' ),
	"",
	array(
		"blog_standard_type",
		"blog_date_in_title",
		"blog_category_title_first_centered",
		"blog_title_author_centered",
		"blog_post_info_hierarchical",
		"blog_split_column",
		"blog_masonry"
	)
);
$panel20->addChild(
	"blog_single_show_time",
	$blog_single_show_time
);

$blog_author_info = new QodeField(
	"yesno",
	"blog_author_info",
	"no",
	esc_html__( "Show Author Info", 'brick' ),
	esc_html__( "Enabling this option will display author name and descriptions on Blog Single pages", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_blog_author_info_container"
	)
);
$panel20->addChild(
	"blog_author_info",
	$blog_author_info
);

$enable_blog_author_info_container = new QodeContainer(
	"enable_blog_author_info_container",
	"blog_author_info",
	"no"
);
$panel20->addChild(
	"enable_blog_author_info_container",
	$enable_blog_author_info_container
);

$enable_author_info_email = new QodeField(
	"yesno",
	"enable_author_info_email",
	"no",
	esc_html__( "Show Author Email", 'brick' ),
	esc_html__( "Enabling this option will show author email", 'brick' )
);
$enable_blog_author_info_container->addChild(
	"enable_author_info_email",
	$enable_author_info_email
);

$group1 = new QodeGroup(
	esc_html__( "Blog Single Author Info Box Style", 'brick' ),
	esc_html__( "Set styles for author info box on single post pages", 'brick' )
);
$enable_blog_author_info_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_margin_top = new QodeField(
	"textsimple",
	"blog_single_post_author_info_margin_top",
	"",
	esc_html__( "Margin Top for Author Info Holder (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_margin_top",
	$blog_single_post_author_info_margin_top
);

$blog_single_post_author_info_background_color = new QodeField(
	"colorsimple",
	"blog_single_post_author_info_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_background_color",
	$blog_single_post_author_info_background_color
);

$blog_single_post_author_info_border_width = new QodeField(
	"textsimple",
	"blog_single_post_author_info_border_width",
	"",
	esc_html__( "Border width(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_border_width",
	$blog_single_post_author_info_border_width
);

$blog_single_post_author_info_border_color = new QodeField(
	"colorsimple",
	"blog_single_post_author_info_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_border_color",
	$blog_single_post_author_info_border_color
);

$row2 = new QodeRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_padding_top = new QodeField(
	"textsimple",
	"blog_single_post_author_info_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_top",
	$blog_single_post_author_info_padding_top
);

$blog_single_post_author_info_padding_bottom = new QodeField(
	"textsimple",
	"blog_single_post_author_info_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_bottom",
	$blog_single_post_author_info_padding_bottom
);

$blog_single_post_author_info_padding_left = new QodeField(
	"textsimple",
	"blog_single_post_author_info_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_left",
	$blog_single_post_author_info_padding_left
);

$blog_single_post_author_info_padding_right = new QodeField(
	"textsimple",
	"blog_single_post_author_info_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_right",
	$blog_single_post_author_info_padding_right
);

$group2 = new QodeGroup(
	esc_html__( "Blog Single Author Info Title Style", 'brick' ),
	esc_html__( "Set styles for author info title on single post pages", 'brick' )
);
$enable_blog_author_info_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_title_color = new QodeField(
	"colorsimple",
	"blog_single_post_author_info_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_title_color",
	$blog_single_post_author_info_title_color
);

$blog_single_post_author_info_title_font_family = new QodeField(
	"fontsimple",
	"blog_single_post_author_info_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_title_font_family",
	$blog_single_post_author_info_title_font_family
);

$blog_single_post_author_info_title_fontsize = new QodeField(
	"textsimple",
	"blog_single_post_author_info_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_title_fontsize",
	$blog_single_post_author_info_title_fontsize
);

$blog_single_post_author_info_title_lineheight = new QodeField(
	"textsimple",
	"blog_single_post_author_info_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_title_lineheight",
	$blog_single_post_author_info_title_lineheight
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_single_post_author_info_title_fontstyle",
	$blog_single_post_author_info_title_fontstyle
);

$blog_single_post_author_info_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_single_post_author_info_title_fontweight",
	$blog_single_post_author_info_title_fontweight
);

$blog_single_post_author_info_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_single_post_author_info_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_single_post_author_info_title_texttransform",
	$blog_single_post_author_info_title_texttransform
);

$blog_single_post_author_info_title_letterspacing = new QodeField(
	"textsimple",
	"blog_single_post_author_info_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_author_info_title_letterspacing",
	$blog_single_post_author_info_title_letterspacing
);

$row3 = new QodeRow();
$group2->addChild(
	"row3",
	$row3
);

$blog_single_post_author_info_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_single_post_author_info_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom for Author Info Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_single_post_author_info_title_margin_bottom",
	$blog_single_post_author_info_title_margin_bottom
);

$group3 = new QodeGroup(
	esc_html__( "Blog Single Author Info Text Style", 'brick' ),
	esc_html__( "Set styles for author info text on single post pages", 'brick' )
);
$enable_blog_author_info_container->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_text_color = new QodeField(
	"colorsimple",
	"blog_single_post_author_info_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_text_color",
	$blog_single_post_author_info_text_color
);

$blog_single_post_author_info_text_font_family = new QodeField(
	"fontsimple",
	"blog_single_post_author_info_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_text_font_family",
	$blog_single_post_author_info_text_font_family
);

$blog_single_post_author_info_text_fontsize = new QodeField(
	"textsimple",
	"blog_single_post_author_info_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_text_fontsize",
	$blog_single_post_author_info_text_fontsize
);

$blog_single_post_author_info_text_lineheight = new QodeField(
	"textsimple",
	"blog_single_post_author_info_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_author_info_text_lineheight",
	$blog_single_post_author_info_text_lineheight
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_text_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_single_post_author_info_text_fontstyle",
	$blog_single_post_author_info_text_fontstyle
);

$blog_single_post_author_info_text_fontweight = new QodeField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_single_post_author_info_text_fontweight",
	$blog_single_post_author_info_text_fontweight
);

$blog_single_post_author_info_text_texttransform = new QodeField(
	"selectblanksimple",
	"blog_single_post_author_info_text_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_single_post_author_info_text_texttransform",
	$blog_single_post_author_info_text_texttransform
);

$blog_single_post_author_info_text_letterspacing = new QodeField(
	"textsimple",
	"blog_single_post_author_info_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_author_info_text_letterspacing",
	$blog_single_post_author_info_text_letterspacing
);

$blog_single_show_comments = new QodeField(
	"yesno",
	"blog_single_show_comments",
	"yes",
	esc_html__( "Show Comments", 'brick' ),
	esc_html__( "Enabling this option will show comments on Blog Single posts", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_blog_comments_container"
	)
);
$panel20->addChild(
	"blog_single_show_comments",
	$blog_single_show_comments
);

$enable_blog_comments_container = new QodeContainer(
	"enable_blog_comments_container",
	"blog_single_show_comments",
	"no"
);
$panel20->addChild(
	"enable_blog_comments_container",
	$enable_blog_comments_container
);

$group1 = new QodeGroup(
	esc_html__( "Comments Box Style", 'brick' ),
	esc_html__( "Set styles for comments box on single post pages", 'brick' )
);
$enable_blog_comments_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_background_color = new QodeField(
	"colorsimple",
	"blog_single_post_comments_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_background_color",
	$blog_single_post_comments_background_color
);

$blog_single_post_comments_border_width = new QodeField(
	"textsimple",
	"blog_single_post_comments_border_width",
	"",
	esc_html__( "Border width(px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_border_width",
	$blog_single_post_comments_border_width
);

$blog_single_post_comments_border_color = new QodeField(
	"colorsimple",
	"blog_single_post_comments_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_border_color",
	$blog_single_post_comments_border_color
);

$blog_single_post_comments_margin_bottom = new QodeField(
	"textsimple",
	"blog_single_post_comments_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_margin_bottom",
	$blog_single_post_comments_margin_bottom
);

$row2 = new QodeRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_comments_padding_top = new QodeField(
	"textsimple",
	"blog_single_post_comments_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_comments_padding_top",
	$blog_single_post_comments_padding_top
);

$blog_single_post_comments_padding_bottom = new QodeField(
	"textsimple",
	"blog_single_post_comments_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_comments_padding_bottom",
	$blog_single_post_comments_padding_bottom
);

$blog_single_post_comments_padding_left = new QodeField(
	"textsimple",
	"blog_single_post_comments_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_comments_padding_left",
	$blog_single_post_comments_padding_left
);

$blog_single_post_comments_padding_right = new QodeField(
	"textsimple",
	"blog_single_post_comments_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_single_post_comments_padding_right",
	$blog_single_post_comments_padding_right
);

$group2 = new QodeGroup(
	esc_html__( "Comments Color Style", 'brick' ),
	esc_html__( "Set styles for comments on single post pages", 'brick' )
);
$enable_blog_comments_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_title_color = new QodeField(
	"colorsimple",
	"blog_single_post_comments_title_color",
	"",
	esc_html__( "Title Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_title_color",
	$blog_single_post_comments_title_color
);

$blog_single_post_comments_text_color = new QodeField(
	"colorsimple",
	"blog_single_post_comments_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_text_color",
	$blog_single_post_comments_text_color
);

$blog_single_post_comments_link_color = new QodeField(
	"colorsimple",
	"blog_single_post_comments_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_link_color",
	$blog_single_post_comments_link_color
);

$blog_single_post_comments_date_color = new QodeField(
	"colorsimple",
	"blog_single_post_comments_date_color",
	"",
	esc_html__( "Date Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_single_post_comments_date_color",
	$blog_single_post_comments_date_color
);

// Advanced Options

$panel_advanced_options = new QodePanel(
	esc_html__( "Advanced Options", 'brick' ),
	"panel_advanced_options"
);
$blogPage->addChild(
	"panel_advanced_options",
	$panel_advanced_options
);

$blog_standard_type_show_options = new QodeField(
	"yesno",
	"blog_standard_type_show_options",
	"no",
	esc_html__( "Show Standard Template Options", 'brick' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_standard_type_show_options",
	$blog_standard_type_show_options
);

$blog_split_column_show_options = new QodeField(
	"yesno",
	"blog_split_column_show_options",
	"no",
	esc_html__( "Show Split Column Template Options", 'brick' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_split_column_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_split_column_show_options",
	$blog_split_column_show_options
);

$blog_masonry_show_options = new QodeField(
	"yesno",
	"blog_masonry_show_options",
	"no",
	esc_html__( "Show Masonry & Masonry Full Width Template Options", 'brick' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_masonry_show_options",
	$blog_masonry_show_options
);

$blog_vertical_loop_show_options = new QodeField(
	"yesno",
	"blog_vertical_loop_show_options",
	"no",
	esc_html__( "Show Vertical Loop Template Options", 'brick' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_vertical_loop_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_vertical_loop_show_options",
	$blog_vertical_loop_show_options
);

// Blog Post List - Blog: Masonry
$panel10 = new QodePanel(
	esc_html__( "Blog List Templates Options: Masonry & Masonry Full Width", 'brick' ),
	"blog_masonry_post_lists",
	"blog_masonry_show_options",
	"no"
);
$blogPage->addChild(
	"panel10",
	$panel10
);

$blog_masonry_number_of_chars = new QodeField(
	"text",
	"blog_masonry_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'brick' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_number_of_chars",
	$blog_masonry_number_of_chars
);

$blog_masonry_read_more_button = new QodeField(
	"yesno",
	"blog_masonry_read_more_button",
	"no",
	esc_html__( "Read More Button", 'brick' ),
	esc_html__( "Enable Read More Button", 'brick' )
);
$panel10->addChild(
	"blog_masonry_read_more_button",
	$blog_masonry_read_more_button
);

$pagination_masonry = new QodeField(
	"select",
	"pagination_masonry",
	"pagination",
	esc_html__( "Pagination on Masonry", 'brick' ),
	esc_html__( 'Choose a pagination style for "Masonry" Blog List', 'brick' ),
	array(
		"pagination" => esc_html__( "Pagination", 'brick' ),
		"load_more" => esc_html__( "Load More", 'brick' ),
		"infinite_scroll" => esc_html__( "Infinite Scroll", 'brick' )
	)
);
$panel10->addChild(
	"pagination_masonry",
	$pagination_masonry
);

$blog_masonry_columns = new QodeField(
	'select',
	'blog_masonry_columns',
	'',
	esc_html__( 'Masonry Blog Columns', 'brick' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List without sidebar', 'brick' ),
	array(
		'two_columns'   => '2',
		'three_columns' => '3'
	)
);
$panel10->addChild(
	'blog_masonry_columns',
	$blog_masonry_columns
);

$blog_masonry_full_width_columns = new QodeField(
	'select',
	'blog_masonry_full_width_columns',
	'',
	esc_html__( 'Full Width Masonry Blog Columns', 'brick' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List', 'brick' ),
	array(
		'three_columns' => '3',
		'four_columns'  => '4',
		'five_columns'  => '5'
	)
);
$panel10->addChild(
	'blog_masonry_full_width_columns',
	$blog_masonry_full_width_columns
);

$blog_masonry_full_width_margin = new QodeField(
	"text",
	"blog_masonry_full_width_margin",
	"",
	esc_html__( "Full Width Masonry Margin", 'brick' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_full_width_margin",
	$blog_masonry_full_width_margin
);

$blog_masonry_filter = new QodeField(
	"yesno",
	"blog_masonry_filter",
	"no",
	esc_html__( "Show Category Filter on Masonry", 'brick' ),
	esc_html__( 'Enabling this option will display a Category Filter on "Masonry" Blog List', 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_filter_container"
	)
);
$panel10->addChild(
	"blog_masonry_filter",
	$blog_masonry_filter
);

$blog_masonry_filter_container = new QodeContainer(
	"blog_masonry_filter_container",
	"blog_masonry_filter",
	"no"
);
$panel10->addChild(
	"blog_masonry_filter_container",
	$blog_masonry_filter_container
);

// Blog Masonry Filter
$blog_masonry_filter_background_color = new QodeField(
	"color",
	"blog_masonry_filter_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose color for background of filter area", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_background_color",
	$blog_masonry_filter_background_color
);

$blog_masonry_filter_height = new QodeField(
	"text",
	"blog_masonry_filter_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "Enter height for filter area", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_height",
	$blog_masonry_filter_height
);

$blog_masonry_filter_margin_bottom = new QodeField(
	"text",
	"blog_masonry_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'brick' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_margin_bottom",
	$blog_masonry_filter_margin_bottom
);

$blog_masonry_filter_alignment = new QodeField(
	"select",
	"blog_masonry_filter_alignment",
	"",
	esc_html__( "Horizontal Alignment", 'brick' ),
	esc_html__( "Choose filter alignment", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_alignment",
	$blog_masonry_filter_alignment
);

$blog_masonry_enable_filter_title = new QodeField(
	"yesno",
	"blog_masonry_enable_filter_title",
	"no",
	esc_html__( "Enable Filter Title", 'brick' ),
	esc_html__( "Enabling this option will show category filter title", 'brick' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_enable_filter_title",
	$blog_masonry_enable_filter_title
);

$group1 = new QodeGroup(
	esc_html__( "Title", 'brick' ),
	esc_html__( "Define text styles for filter title", 'brick' )
);
$blog_masonry_filter_container->addChild(
	"group1",
	$group1
);

$row1 = new QodeRow();
$group1->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_title_color = new QodeField(
	"colorsimple",
	"blog_masonry_filter_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_filter_title_color",
	$blog_masonry_filter_title_color
);
$blog_masonry_filter_title_font_size = new QodeField(
	"textsimple",
	"blog_masonry_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_filter_title_font_size",
	$blog_masonry_filter_title_font_size
);
$blog_masonry_filter_title_line_height = new QodeField(
	"textsimple",
	"blog_masonry_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_filter_title_line_height",
	$blog_masonry_filter_title_line_height
);
$blog_masonry_filter_title_text_transform = new QodeField(
	"selectblanksimple",
	"blog_masonry_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"blog_masonry_filter_title_text_transform",
	$blog_masonry_filter_title_text_transform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_title_font_family = new QodeField(
	"fontsimple",
	"blog_masonry_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_family",
	$blog_masonry_filter_title_font_family
);
$blog_masonry_filter_title_font_style = new QodeField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_filter_title_font_style",
	$blog_masonry_filter_title_font_style
);
$blog_masonry_filter_title_font_weight = new QodeField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_filter_title_font_weight",
	$blog_masonry_filter_title_font_weight
);
$blog_masonry_filter_title_letter_spacing = new QodeField(
	"textsimple",
	"blog_masonry_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_filter_title_letter_spacing",
	$blog_masonry_filter_title_letter_spacing
);

$group2 = new QodeGroup(
	esc_html__( "Categories", 'brick' ),
	esc_html__( "Define text styles for filter categories", 'brick' )
);
$blog_masonry_filter_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_color = new QodeField(
	"colorsimple",
	"blog_masonry_filter_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_filter_color",
	$blog_masonry_filter_color
);
$blog_masonry_filter_hovercolor = new QodeField(
	"colorsimple",
	"blog_masonry_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_filter_hovercolor",
	$blog_masonry_filter_hovercolor
);
$blog_masonry_filter_font_size = new QodeField(
	"textsimple",
	"blog_masonry_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_filter_font_size",
	$blog_masonry_filter_font_size
);
$blog_masonry_filter_line_height = new QodeField(
	"textsimple",
	"blog_masonry_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_filter_line_height",
	$blog_masonry_filter_line_height
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_font_family = new QodeField(
	"fontsimple",
	"blog_masonry_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_filter_font_family",
	$blog_masonry_filter_font_family
);
$blog_masonry_filter_font_style = new QodeField(
	"selectblanksimple",
	"blog_masonry_filter_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_filter_font_style",
	$blog_masonry_filter_font_style
);
$blog_masonry_filter_font_weight = new QodeField(
	"selectblanksimple",
	"blog_masonry_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_filter_font_weight",
	$blog_masonry_filter_font_weight
);
$blog_masonry_filter_text_transform = new QodeField(
	"selectblanksimple",
	"blog_masonry_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_masonry_filter_text_transform",
	$blog_masonry_filter_text_transform
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);
$blog_masonry_filter_letter_spacing = new QodeField(
	"textsimple",
	"blog_masonry_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_masonry_filter_letter_spacing",
	$blog_masonry_filter_letter_spacing
);

$blog_masonry_filter_disable_separator = new QodeField(
	"yesno",
	"blog_masonry_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'brick' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'brick' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_disable_separator",
	$blog_masonry_filter_disable_separator
);

$blog_masonry_type = new QodeField(
	"select",
	"blog_masonry_type",
	"post_info_below_title",
	esc_html__( "Post Info Position", 'brick' ),
	esc_html__( "Choose Post Info Position for Masonry Blog List", 'brick' ),
	array(
		"post_info_below_title" => esc_html__( "Post Info Section Below Title", 'brick' ),
		"post_info_at_bottom" => esc_html__( "Post Info Section at Bottom", 'brick' )
	)
);
$panel10->addChild(
	"blog_masonry_type",
	$blog_masonry_type
);

$blog_masonry_content_position = new QodeField(
	"select",
	"blog_masonry_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'brick' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'brick' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'brick' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'brick' )
	)
);
$panel10->addChild(
	"blog_masonry_content_position",
	$blog_masonry_content_position
);

$blog_masonry_post_meta_data_section = new QodeTitle(
	"blog_masonry_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'brick' )
);
$panel10->addChild(
	"blog_masonry_post_meta_data_section",
	$blog_masonry_post_meta_data_section
);

$blog_masonry_show_categories = new QodeField(
	"yesno",
	"blog_masonry_show_categories",
	"no",
	esc_html__( "Show Categories", 'brick' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'brick' )
);
$panel10->addChild(
	"blog_masonry_show_categories",
	$blog_masonry_show_categories
);

$blog_masonry_show_comments = new QodeField(
	"yesno",
	"blog_masonry_show_comments",
	"no",
	esc_html__( "Show Comments", 'brick' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'brick' )
);
$panel10->addChild(
	"blog_masonry_show_comments",
	$blog_masonry_show_comments
);

$blog_masonry_show_author = new QodeField(
	"yesno",
	"blog_masonry_show_author",
	"no",
	esc_html__( "Show Author Name", 'brick' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'brick' )
);
$panel10->addChild(
	"blog_masonry_show_author",
	$blog_masonry_show_author
);

$blog_masonry_show_date = new QodeField(
	"yesno",
	"blog_masonry_show_date",
	"no",
	esc_html__( "Show Date", 'brick' ),
	esc_html__( "Enabling this option will show date on Post List", 'brick' )
);
$panel10->addChild(
	"blog_masonry_hide_date",
	$blog_masonry_show_date
);

$blog_masonry_show_share = new QodeField(
	"yesno",
	"blog_masonry_show_share",
	"no",
	esc_html__( "Show Share", 'brick' ),
	esc_html__( "Enabling this option will show share on Post List", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_share_options_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_share",
	$blog_masonry_show_share
);

$blog_masonry_share_options_container = new QodeContainer(
	"blog_masonry_share_options_container",
	"blog_masonry_show_share",
	"no"
);
$panel10->addChild(
	"blog_masonry_share_options_container",
	$blog_masonry_share_options_container
);

$blog_masonry_select_share_options_masonry_type = new QodeField(
	"select",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown",
	esc_html__( "Social Share Style", 'brick' ),
	esc_html__( "Choose Social Share Style for Masonry Type", 'brick' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'brick' ),
		"list" => esc_html__( "Social Share List", 'brick' )
	)
);

$blog_masonry_share_options_container->addChild(
	"blog_masonry_select_share_options_masonry_type",
	$blog_masonry_select_share_options_masonry_type
);

$blog_masonry_share_icon_color = new QodeField(
	"color",
	"blog_masonry_share_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for share dropdown", 'brick' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color",
	$blog_masonry_share_icon_color
);

$blog_masonry_share_icon_hover_color = new QodeField(
	"color",
	"blog_masonry_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose icon hover color for share dropdown", 'brick' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color",
	$blog_masonry_share_icon_hover_color
);

$blog_masonry_share_background_color = new QodeField(
	"color",
	"blog_masonry_share_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for share dropdown list field", 'brick' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_background_color",
	$blog_masonry_share_background_color
);

$blog_masonry_show_like = new QodeField(
	"yesno",
	"blog_masonry_show_like",
	"no",
	esc_html__( "Show Likes", 'brick' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'brick' )
);
$panel10->addChild(
	"blog_masonry_show_like",
	$blog_masonry_show_like
);

$blog_masonry_post_design_style = new QodeTitle(
	"blog_masonry_post_design_style",
	esc_html__( "Post Design Style", 'brick' )
);
$panel10->addChild(
	"blog_masonry_post_design_style",
	$blog_masonry_post_design_style
);

$blog_masonry_post_alignment = new QodeField(
	"select",
	"blog_masonry_post_alignment",
	"",
	esc_html__( "Post Alignment", 'brick' ),
	esc_html__( "Choose alignment for whole post", 'brick' ),
	array(
		"left" => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);
$panel10->addChild(
	"blog_masonry_post_alignment",
	$blog_masonry_post_alignment
);

$blog_masonry_enable_text_box = new QodeField(
	"yesno",
	"blog_masonry_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'brick' ),
	esc_html__( "Enable post text boxed features", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_enable_text_box_container"
	)
);
$panel10->addChild(
	"blog_masonry_enable_text_box",
	$blog_masonry_enable_text_box
);

$blog_masonry_enable_text_box_container = new QodeContainer(
	"blog_masonry_enable_text_box_container",
	"blog_masonry_enable_text_box",
	"no"
);
$panel10->addChild(
	"blog_masonry_enable_text_box_container",
	$blog_masonry_enable_text_box_container
);

$blog_masonry_box_background_color = new QodeField(
	"color",
	"blog_masonry_box_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for post text box", 'brick' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_background_color",
	$blog_masonry_box_background_color
);

$blog_masonry_box_border_color = new QodeField(
	"color",
	"blog_masonry_box_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose border color for post text box", 'brick' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_border_color",
	$blog_masonry_box_border_color
);

$blog_masonry_box_padding = new QodeField(
	"text",
	"blog_masonry_box_padding",
	"",
	esc_html__( "Text box padding", 'brick' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_padding",
	$blog_masonry_box_padding
);

$group7 = new QodeGroup(
	esc_html__( "Paragraph", 'brick' ),
	esc_html__( "Set paragraph color", 'brick' )
);
$panel10->addChild(
	"group7",
	$group7
);

$blog_masonry_paragraph_color = new QodeField(
	"colorsimple",
	"blog_masonry_paragraph_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$group7->addChild(
	"blog_masonry_paragraph_color",
	$blog_masonry_paragraph_color
);

$group_masonry_audio_bar = new QodeGroup(
	esc_html__( "Audio Bar Background Color", 'brick' ),
	esc_html__( "Set background color for audio bar", 'brick' )
);
$panel10->addChild(
	"group_masonry_audio_bar",
	$group_masonry_audio_bar
);

$blog_masonry_audio_bar_back_color = new QodeField(
	"colorsimple",
	"blog_masonry_audio_bar_back_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$group_masonry_audio_bar->addChild(
	"blog_masonry_audio_bar_back_color",
	$blog_masonry_audio_bar_back_color
);

$group1 = new QodeGroup(
	esc_html__( "Quote/Link Background", 'brick' ),
	esc_html__( "Set background of Quote/Link post type", 'brick' )
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

$blog_masonry_ql_background_image = new QodeField(
	"yesnosimple",
	"blog_masonry_ql_background_image",
	"no",
	esc_html__( "Background Image", 'brick' ),
	""
);
$row1->addChild(
	"blog_masonry_ql_background_image",
	$blog_masonry_ql_background_image
);

$blog_masonry_ql_background_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Default color is #ffffff.", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_background_color",
	$blog_masonry_ql_background_color
);

$blog_masonry_ql_hover_background_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "Default color is #e6ae48.", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_hover_background_color",
	$blog_masonry_ql_hover_background_color
);

$blog_masonry_show_ql_mark = new QodeField(
	"yesno",
	"blog_masonry_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'brick' ),
	esc_html__( "Show Icons for quote/link post format", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_show_ql_mark_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_ql_mark",
	$blog_masonry_show_ql_mark
);

$blog_masonry_show_ql_mark_container = new QodeContainer(
	"blog_masonry_show_ql_mark_container",
	"blog_masonry_show_ql_mark",
	"no"
);
$panel10->addChild(
	"blog_masonry_show_ql_mark_container",
	$blog_masonry_show_ql_mark_container
);

$row1 = new QodeRow();
$blog_masonry_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_holder_back_color = new QodeField(
	"color",
	"blog_masonry_ql_holder_back_color",
	"",
	esc_html__( "Icon Holder Background Color", 'brick' ),
	esc_html__( "Choose background color for quote/link icon holder", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_holder_back_color",
	$blog_masonry_ql_holder_back_color
);

$blog_masonry_ql_holder_back_color_hover = new QodeField(
	"color",
	"blog_masonry_ql_holder_back_color_hover",
	"",
	esc_html__( "Icon Holder Background Hover Color", 'brick' ),
	esc_html__( "Choose icon color for quote/link icon holder", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_holder_back_color_hover",
	$blog_masonry_ql_holder_back_color_hover
);

$blog_masonry_ql_mark_color = new QodeField(
	"color",
	"blog_masonry_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for quote/link post", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_mark_color",
	$blog_masonry_ql_mark_color
);

$blog_masonry_ql_mark_hover_color = new QodeField(
	"color",
	"blog_masonry_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_mark_hover_color",
	$blog_masonry_ql_mark_hover_color
);

$row2 = new QodeRow();
$blog_masonry_show_ql_mark_container->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_link_size = new QodeField(
	"text",
	"blog_masonry_ql_link_size",
	"",
	esc_html__( "Link Icon Size(px)", 'brick' ),
	esc_html__( "Defiine size for link icon", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"blog_masonry_ql_link_size",
	$blog_masonry_ql_link_size
);

$blog_masonry_ql_quote_size = new QodeField(
	"text",
	"blog_masonry_ql_quote_size",
	"",
	esc_html__( "Quote Icon Size (px)", 'brick' ),
	esc_html__( "Defiine size for quote icon", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"blog_masonry_ql_quote_size",
	$blog_masonry_ql_quote_size
);

$group8 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel10->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_masonry_image_margin_bottom = new QodeField(
	"textsimple",
	"blog_masonry_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_image_margin_bottom",
	$blog_masonry_image_margin_bottom
);

$blog_masonry_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_masonry_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_title_margin_bottom",
	$blog_masonry_title_margin_bottom
);

$blog_masonry_post_info_margin_bottom = new QodeField(
	"textsimple",
	"blog_masonry_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_post_info_margin_bottom",
	$blog_masonry_post_info_margin_bottom
);

$blog_masonry_read_more_margin_top = new QodeField(
	"textsimple",
	"blog_masonry_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_read_more_margin_top",
	$blog_masonry_read_more_margin_top
);

$row2 = new QodeRow();
$group8->addChild(
	"row2",
	$row2
);

$blog_masonry_social_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_masonry_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_social_share_list_margin_top",
	$blog_masonry_social_share_list_margin_top
);

$blog_masonry_article_margin_bottom = new QodeField(
	"textsimple",
	"blog_masonry_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_article_margin_bottom",
	$blog_masonry_article_margin_bottom
);

$blog_masonry_post_info_bottom_margin_top = new QodeField(
	"textsimple",
	"blog_masonry_post_info_bottom_margin_top",
	"",
	esc_html__( "Margin Above Post Info When Post Info is on the bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_post_info_bottom_margin_top",
	$blog_masonry_post_info_bottom_margin_top
);

$group9 = new QodeGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel10->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_masonry_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_title_margin_bottom",
	$blog_masonry_ql_title_margin_bottom
);

$blog_masonry_ql_quote_author_margin_bottom = new QodeField(
	"textsimple",
	"blog_masonry_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_quote_author_margin_bottom",
	$blog_masonry_ql_quote_author_margin_bottom
);

$blog_masonry_ql_social_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_masonry_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_social_share_list_margin_top",
	$blog_masonry_ql_social_share_list_margin_top
);

$group10 = new QodeGroup(
	esc_html__( "Border Arround Article", 'brick' ),
	esc_html__( "Set border style for articles", 'brick' )
);
$panel10->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_masonry_article_border_width = new QodeField(
	"textsimple",
	"blog_masonry_article_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_article_border_width",
	$blog_masonry_article_border_width
);

$blog_masonry_article_border_color = new QodeField(
	"colorsimple",
	"blog_masonry_article_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_article_border_color",
	$blog_masonry_article_border_color
);

$post_text_styling = new QodeTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'brick' )
);
$panel10->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new QodeGroup(
	esc_html__( "Post Title", 'brick' ),
	esc_html__( "Define title styles in this blog post template.", 'brick' )
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

$blog_masonry_title_color = new QodeField(
	"colorsimple",
	"blog_masonry_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_title_color",
	$blog_masonry_title_color
);

$blog_masonry_title_hover_color = new QodeField(
	"colorsimple",
	"blog_masonry_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_title_hover_color",
	$blog_masonry_title_hover_color
);

$blog_masonry_title_fontsize = new QodeField(
	"textsimple",
	"blog_masonry_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_title_fontsize",
	$blog_masonry_title_fontsize
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_masonry_title_lineheight = new QodeField(
	"textsimple",
	"blog_masonry_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_title_lineheight",
	$blog_masonry_title_lineheight
);

$blog_masonry_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_masonry_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_title_google_fonts",
	$blog_masonry_title_google_fonts
);

$blog_masonry_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_masonry_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_title_fontstyle",
	$blog_masonry_title_fontstyle
);

$blog_masonry_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_masonry_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_title_fontweight",
	$blog_masonry_title_fontweight
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_masonry_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_masonry_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_masonry_title_texttransform",
	$blog_masonry_title_texttransform
);

$blog_masonry_title_letterspacing = new QodeField(
	"textsimple",
	"blog_masonry_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_masonry_title_letterspacing",
	$blog_masonry_title_letterspacing
);

$group4 = new QodeGroup(
	esc_html__( "Post Info Data", 'brick' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'brick' )
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

$blog_masonry_info_color = new QodeField(
	"colorsimple",
	"blog_masonry_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_info_color",
	$blog_masonry_info_color
);

$blog_masonry_info_link_color = new QodeField(
	"colorsimple",
	"blog_masonry_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_info_link_color",
	$blog_masonry_info_link_color
);

$blog_masonry_info_hover_color = new QodeField(
	"colorsimple",
	"blog_masonry_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_info_hover_color",
	$blog_masonry_info_hover_color
);

$blog_masonry_info_fontsize = new QodeField(
	"textsimple",
	"blog_masonry_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_info_fontsize",
	$blog_masonry_info_fontsize
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_masonry_info_lineheight = new QodeField(
	"textsimple",
	"blog_masonry_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_info_lineheight",
	$blog_masonry_info_lineheight
);

$blog_masonry_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_masonry_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_info_google_fonts",
	$blog_masonry_info_google_fonts
);

$blog_masonry_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_masonry_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_info_fontstyle",
	$blog_masonry_info_fontstyle
);

$blog_masonry_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_masonry_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_info_fontweight",
	$blog_masonry_info_fontweight
);

$row3 = new QodeRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_masonry_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_masonry_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_masonry_info_texttransform",
	$blog_masonry_info_texttransform
);

$blog_masonry_info_letterspacing = new QodeField(
	"textsimple",
	"blog_masonry_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_masonry_info_letterspacing",
	$blog_masonry_info_letterspacing
);

$group_masonry_read_more = new QodeGroup(
	esc_html__( "Read More Button", 'brick' ),
	esc_html__( "Define read more button styles", 'brick' )
);
$panel10->addChild(
	"group_masonry_read_more",
	$group_masonry_read_more
);

$row1 = new QodeRow();
$group_masonry_read_more->addChild(
	"row1",
	$row1
);

$blog_masonry_read_more_color = new QodeField(
	"colorsimple",
	"blog_masonry_read_more_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_read_more_color",
	$blog_masonry_read_more_color
);

$blog_masonry_read_more_hover_color = new QodeField(
	"colorsimple",
	"blog_masonry_read_more_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_read_more_hover_color",
	$blog_masonry_read_more_hover_color
);

$blog_masonry_read_more_fontsize = new QodeField(
	"textsimple",
	"blog_masonry_read_more_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_read_more_fontsize",
	$blog_masonry_read_more_fontsize
);

$blog_masonry_read_more_lineheight = new QodeField(
	"textsimple",
	"blog_masonry_read_more_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_read_more_lineheight",
	$blog_masonry_read_more_lineheight
);

$row2 = new QodeRow( true );
$group_masonry_read_more->addChild(
	"row2",
	$row2
);

$blog_masonry_read_more_google_fonts = new QodeField(
	"fontsimple",
	"blog_masonry_read_more_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_read_more_google_fonts",
	$blog_masonry_read_more_google_fonts
);

$blog_masonry_read_more_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_masonry_read_more_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_read_more_fontstyle",
	$blog_masonry_read_more_fontstyle
);

$blog_masonry_read_more_fontweight = new QodeField(
	"selectblanksimple",
	"blog_masonry_read_more_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_read_more_fontweight",
	$blog_masonry_read_more_fontweight
);

$blog_masonry_read_more_texttransform = new QodeField(
	"selectblanksimple",
	"blog_masonry_read_more_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_masonry_read_more_texttransform",
	$blog_masonry_read_more_texttransform
);

$row3 = new QodeRow( true );
$group_masonry_read_more->addChild(
	"row3",
	$row3
);

$blog_masonry_read_more_letterspacing = new QodeField(
	"textsimple",
	"blog_masonry_read_more_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_masonry_read_more_letterspacing",
	$blog_masonry_read_more_letterspacing
);

$group3 = new QodeGroup(
	esc_html__( "Quote/Link Title Style", 'brick' ),
	esc_html__( "Define title styles for Quote/Link articles", 'brick' )
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

$blog_masonry_ql_title_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_title_color",
	$blog_masonry_ql_title_color
);

$blog_masonry_ql_title_hover_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_title_hover_color",
	$blog_masonry_ql_title_hover_color
);

$blog_masonry_ql_title_fontsize = new QodeField(
	"textsimple",
	"blog_masonry_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_title_font_size",
	$blog_masonry_ql_title_fontsize
);

$blog_masonry_ql_title_lineheight = new QodeField(
	"textsimple",
	"blog_masonry_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_title_lineheight",
	$blog_masonry_ql_title_lineheight
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_masonry_ql_title_texttransform",
	$blog_masonry_ql_title_texttransform
);

$blog_masonry_ql_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_masonry_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_ql_title_google_fonts",
	$blog_masonry_ql_title_google_fonts
);

$blog_masonry_ql_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_ql_title_fontstyle",
	$blog_masonry_ql_title_fontstyle
);

$blog_masonry_ql_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_ql_title_fontweight",
	$blog_masonry_ql_title_fontweight
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_title_letterspacing = new QodeField(
	"textsimple",
	"blog_masonry_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_masonry_ql_title_letterspacing",
	$blog_masonry_ql_title_letterspacing
);

$group5 = new QodeGroup(
	esc_html__( "Quote/Link Post Info Data", 'brick' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'brick' )
);
$panel10->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_info_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_info_color",
	$blog_masonry_ql_info_color
);

$blog_masonry_ql_info_link_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_info_link_color",
	$blog_masonry_ql_info_link_color
);

$blog_masonry_ql_info_hover_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_info_hover_color",
	$blog_masonry_ql_info_hover_color
);

$blog_masonry_ql_info_fontsize = new QodeField(
	"textsimple",
	"blog_masonry_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_info_fontsize",
	$blog_masonry_ql_info_fontsize
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_info_lineheight = new QodeField(
	"textsimple",
	"blog_masonry_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_ql_info_lineheight",
	$blog_masonry_ql_info_lineheight
);

$blog_masonry_ql_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_masonry_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_ql_info_google_fonts",
	$blog_masonry_ql_info_google_fonts
);

$blog_masonry_ql_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_ql_info_fontstyle",
	$blog_masonry_ql_info_fontstyle
);

$blog_masonry_ql_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_ql_info_fontweight",
	$blog_masonry_ql_info_fontweight
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_masonry_ql_info_texttransform",
	$blog_masonry_ql_info_texttransform
);

$blog_masonry_ql_info_letterspacing = new QodeField(
	"textsimple",
	"blog_masonry_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_masonry_ql_info_letterspacing",
	$blog_masonry_ql_info_letterspacing
);

$group6 = new QodeGroup(
	esc_html__( "Quote Author Style", 'brick' ),
	esc_html__( "Define author styles for Quote articles", 'brick' )
);
$panel10->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_author_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_author_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_author_color",
	$blog_masonry_ql_author_color
);

$blog_masonry_ql_author_hover_color = new QodeField(
	"colorsimple",
	"blog_masonry_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_author_hover_color",
	$blog_masonry_ql_author_hover_color
);

$blog_masonry_ql_author_fontsize = new QodeField(
	"textsimple",
	"blog_masonry_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_author_font_size",
	$blog_masonry_ql_author_fontsize
);

$blog_masonry_ql_author_lineheight = new QodeField(
	"textsimple",
	"blog_masonry_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_masonry_ql_author_lineheight",
	$blog_masonry_ql_author_lineheight
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_author_texttransform = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_masonry_ql_author_texttransform",
	$blog_masonry_ql_author_texttransform
);

$blog_masonry_ql_author_google_fonts = new QodeField(
	"fontsimple",
	"blog_masonry_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_masonry_ql_author_google_fonts",
	$blog_masonry_ql_author_google_fonts
);

$blog_masonry_ql_author_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_masonry_ql_author_fontstyle",
	$blog_masonry_ql_author_fontstyle
);

$blog_masonry_ql_author_fontweight = new QodeField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_masonry_ql_author_fontweight",
	$blog_masonry_ql_author_fontweight
);

$row3 = new QodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_author_letterspacing = new QodeField(
	"textsimple",
	"blog_masonry_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_masonry_ql_author_letterspacing",
	$blog_masonry_ql_author_letterspacing
);

// Blog Post List - Blog: Split Column
$panel11 = new QodePanel(
	esc_html__( "Blog List Template Options: Split Column", 'brick' ),
	"blog_split_column_post_lists",
	"blog_split_column_show_options",
	"no"
);
$blogPage->addChild(
	"panel11",
	$panel11
);

$blog_split_column_number_of_chars = new QodeField(
	"text",
	"blog_split_column_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'brick' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel11->addChild(
	"blog_split_column_number_of_chars",
	$blog_split_column_number_of_chars
);

$blog_split_column_read_more_button = new QodeField(
	"yesno",
	"blog_split_column_read_more_button",
	"yes",
	esc_html__( "Read More Button", 'brick' ),
	esc_html__( "Enable Read More Button", 'brick' )
);
$panel11->addChild(
	"blog_split_column_read_more_button",
	$blog_split_column_read_more_button
);

$blog_split_column_content_position = new QodeField(
	"select",
	"blog_split_column_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'brick' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'brick' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'brick' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'brick' )
	)
);
$panel11->addChild(
	"blog_split_column_content_position",
	$blog_split_column_content_position
);

$blog_split_column_post_meta_data_section = new QodeTitle(
	"blog_split_column_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'brick' )
);
$panel11->addChild(
	"blog_split_column_post_meta_data_section",
	$blog_split_column_post_meta_data_section
);

$blog_split_column_show_categories = new QodeField(
	"yesno",
	"blog_split_column_show_categories",
	"no",
	esc_html__( "Show Categories", 'brick' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'brick' )
);
$panel11->addChild(
	"blog_split_column_show_categories",
	$blog_split_column_show_categories
);

$blog_split_column_show_comments = new QodeField(
	"yesno",
	"blog_split_column_show_comments",
	"no",
	esc_html__( "Show Comments", 'brick' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'brick' )
);
$panel11->addChild(
	"blog_split_column_show_comments",
	$blog_split_column_show_comments
);

$blog_split_column_show_author = new QodeField(
	"yesno",
	"blog_split_column_show_author",
	"yes",
	esc_html__( "Show Author Name", 'brick' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'brick' )
);
$panel11->addChild(
	"blog_split_column_show_author",
	$blog_split_column_show_author
);

$blog_split_column_show_date = new QodeField(
	"yesno",
	"blog_split_column_show_date",
	"yes",
	esc_html__( "Show Date", 'brick' ),
	esc_html__( "Enabling this option will show date on Post List", 'brick' )
);
$panel11->addChild(
	"blog_split_column_hide_date",
	$blog_split_column_show_date
);

$blog_split_column_show_share = new QodeField(
	"yesno",
	"blog_split_column_show_share",
	"no",
	esc_html__( "Show Share", 'brick' ),
	esc_html__( "Enabling this option will show share on Post List", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_split_column_share_options_container"
	)
);
$panel11->addChild(
	"blog_split_column_show_share",
	$blog_split_column_show_share
);

$blog_split_column_share_options_container = new QodeContainer(
	"blog_split_column_share_options_container",
	"blog_split_column_show_share",
	"no"
);
$panel11->addChild(
	"blog_split_column_share_options_container",
	$blog_split_column_share_options_container
);

$blog_split_column_select_share_option = new QodeField(
	"select",
	"blog_split_column_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'brick' ),
	esc_html__( "Choose Social Share Style for Split Column Type", 'brick' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'brick' ),
		"list" => esc_html__( "Social Share List", 'brick' )
	)
);

$blog_split_column_share_options_container->addChild(
	"blog_split_column_select_share_option",
	$blog_split_column_select_share_option
);

$blog_split_column_share_icon_color = new QodeField(
	"color",
	"blog_split_column_share_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for share dropdown", 'brick' )
);
$blog_split_column_share_options_container->addChild(
	"blog_split_column_share_icon_color",
	$blog_split_column_share_icon_color
);

$blog_split_column_share_icon_hover_color = new QodeField(
	"color",
	"blog_split_column_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose icon hover color for share dropdown", 'brick' )
);
$blog_split_column_share_options_container->addChild(
	"blog_split_column_share_icon_hover_color",
	$blog_split_column_share_icon_hover_color
);

$blog_split_column_share_background_color = new QodeField(
	"color",
	"blog_split_column_share_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for share dropdown list field", 'brick' )
);
$blog_split_column_share_options_container->addChild(
	"blog_split_column_share_background_color",
	$blog_split_column_share_background_color
);

$blog_split_column_show_like = new QodeField(
	"yesno",
	"blog_split_column_show_like",
	"no",
	esc_html__( "Show Likes", 'brick' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'brick' )
);
$panel11->addChild(
	"blog_split_column_show_like",
	$blog_split_column_show_like
);

$blog_split_column_post_design_style = new QodeTitle(
	"blog_split_column_post_design_style",
	esc_html__( "Post Design Style", 'brick' )
);
$panel11->addChild(
	"blog_split_column_post_design_style",
	$blog_split_column_post_design_style
);

$blog_split_column_enable_text_box = new QodeField(
	"yesno",
	"blog_split_column_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'brick' ),
	esc_html__( "Enable post text boxed features", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_split_column_enable_text_box_container"
	)
);
$panel11->addChild(
	"blog_split_column_enable_text_box",
	$blog_split_column_enable_text_box
);

$blog_split_column_enable_text_box_container = new QodeContainer(
	"blog_split_column_enable_text_box_container",
	"blog_split_column_enable_text_box",
	"no"
);
$panel11->addChild(
	"blog_split_column_enable_text_box_container",
	$blog_split_column_enable_text_box_container
);

$blog_split_column_box_background_color = new QodeField(
	"color",
	"blog_split_column_box_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for post text box", 'brick' )
);
$blog_split_column_enable_text_box_container->addChild(
	"blog_split_column_box_background_color",
	$blog_split_column_box_background_color
);

$blog_split_column_box_border_color = new QodeField(
	"color",
	"blog_split_column_box_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose border color for post text box", 'brick' )
);
$blog_split_column_enable_text_box_container->addChild(
	"blog_split_column_box_border_color",
	$blog_split_column_box_border_color
);

$blog_split_column_box_padding = new QodeField(
	"text",
	"blog_split_column_box_padding",
	"",
	esc_html__( "Text box padding", 'brick' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_split_column_enable_text_box_container->addChild(
	"blog_split_column_box_padding",
	$blog_split_column_box_padding
);

$group8 = new QodeGroup(
	esc_html__( "Paragraph", 'brick' ),
	esc_html__( "Set paragraph color", 'brick' )
);
$panel11->addChild(
	"group8",
	$group8
);

$blog_split_column_paragraph_color = new QodeField(
	"colorsimple",
	"blog_split_column_paragraph_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$group8->addChild(
	"blog_split_column_paragraph_color",
	$blog_split_column_paragraph_color
);

$blog_masonry_paragraph_color = new QodeField(
	"colorsimple",
	"blog_masonry_paragraph_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$group7->addChild(
	"blog_masonry_paragraph_color",
	$blog_masonry_paragraph_color
);

$group_split_column_audio_bar = new QodeGroup(
	esc_html__( "Audio Bar Background Color", 'brick' ),
	esc_html__( "Set background color for audio bar", 'brick' )
);
$panel10->addChild(
	"group_split_column_audio_bar",
	$group_split_column_audio_bar
);

$blog_split_column_audio_bar_back_color = new QodeField(
	"colorsimple",
	"blog_split_column_audio_bar_back_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$group_split_column_audio_bar->addChild(
	"blog_split_column_audio_bar_back_color",
	$blog_split_column_audio_bar_back_color
);

$group1 = new QodeGroup(
	esc_html__( "Quote/Link Background", 'brick' ),
	esc_html__( "Set background of Quote/Link post type", 'brick' )
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

$blog_split_column_ql_background_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Default color is #ffffff.", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_background_color",
	$blog_split_column_ql_background_color
);

$blog_split_column_ql_hover_background_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "Default color is #e6ae48.", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_hover_background_color",
	$blog_split_column_ql_hover_background_color
);

$blog_split_column_show_ql_mark = new QodeField(
	"yesno",
	"blog_split_column_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'brick' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_split_column_show_ql_mark_container"
	)
);
$panel11->addChild(
	"blog_split_column_show_ql_mark",
	$blog_split_column_show_ql_mark
);

$blog_split_column_show_ql_mark_container = new QodeContainer(
	"blog_split_column_show_ql_mark_container",
	"blog_split_column_show_ql_mark",
	"no"
);
$panel11->addChild(
	"blog_split_column_show_ql_mark_container",
	$blog_split_column_show_ql_mark_container
);

$row1 = new QodeRow();
$blog_split_column_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_mark_color = new QodeField(
	"color",
	"blog_split_column_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for quote/link post.", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_mark_color",
	$blog_split_column_ql_mark_color
);

$blog_split_column_ql_mark_hover_color = new QodeField(
	"color",
	"blog_split_column_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_mark_hover_color",
	$blog_split_column_ql_mark_hover_color
);

$group9 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel11->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_split_column_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_split_column_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_title_margin_bottom",
	$blog_split_column_title_margin_bottom
);

$blog_split_column_post_info_margin_bottom = new QodeField(
	"textsimple",
	"blog_split_column_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_post_info_margin_bottom",
	$blog_split_column_post_info_margin_bottom
);

$blog_split_column_read_more_margin_top = new QodeField(
	"textsimple",
	"blog_split_column_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_read_more_margin_top",
	$blog_split_column_read_more_margin_top
);

$blog_split_column_social_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_split_column_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_social_share_list_margin_top",
	$blog_split_column_social_share_list_margin_top
);

$row2 = new QodeRow();
$group9->addChild(
	"row2",
	$row2
);

$blog_split_column_article_margin_bottom = new QodeField(
	"textsimple",
	"blog_split_column_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_article_margin_bottom",
	$blog_split_column_article_margin_bottom
);

$group10 = new QodeGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel11->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_split_column_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_title_margin_bottom",
	$blog_split_column_ql_title_margin_bottom
);

$blog_split_column_ql_quote_author_margin_bottom = new QodeField(
	"textsimple",
	"blog_split_column_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_quote_author_margin_bottom",
	$blog_split_column_ql_quote_author_margin_bottom
);

$blog_split_column_ql_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_split_column_ql_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_share_list_margin_top",
	$blog_split_column_ql_share_list_margin_top
);

$post_text_styling = new QodeTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'brick' )
);
$panel11->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new QodeGroup(
	esc_html__( "Post Title", 'brick' ),
	esc_html__( "Define title styles in this blog post template.", 'brick' )
);
$panel11->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_split_column_title_color = new QodeField(
	"colorsimple",
	"blog_split_column_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_title_color",
	$blog_split_column_title_color
);

$blog_split_column_title_hover_color = new QodeField(
	"colorsimple",
	"blog_split_column_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_title_hover_color",
	$blog_split_column_title_hover_color
);

$blog_split_column_title_fontsize = new QodeField(
	"textsimple",
	"blog_split_column_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_title_fontsize",
	$blog_split_column_title_fontsize
);

$blog_split_column_title_lineheight = new QodeField(
	"textsimple",
	"blog_split_column_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_title_lineheight",
	$blog_split_column_title_lineheight
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_split_column_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_split_column_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_title_google_fonts",
	$blog_split_column_title_google_fonts
);

$blog_split_column_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_split_column_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_split_column_title_fontstyle",
	$blog_split_column_title_fontstyle
);

$blog_split_column_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_split_column_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_split_column_title_fontweight",
	$blog_split_column_title_fontweight
);

$blog_split_column_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_split_column_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_split_column_title_texttransform",
	$blog_split_column_title_texttransform
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_split_column_title_letterspacing = new QodeField(
	"textsimple",
	"blog_split_column_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_split_column_title_letterspacing",
	$blog_split_column_title_letterspacing
);

$group4 = new QodeGroup(
	esc_html__( "Post Info Data", 'brick' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'brick' )
);
$panel11->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$blog_split_column_info_color = new QodeField(
	"colorsimple",
	"blog_split_column_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_info_color",
	$blog_split_column_info_color
);

$blog_split_column_info_link_color = new QodeField(
	"colorsimple",
	"blog_split_column_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_info_link_color",
	$blog_split_column_info_link_color
);

$blog_split_column_info_hover_color = new QodeField(
	"colorsimple",
	"blog_split_column_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_info_hover_color",
	$blog_split_column_info_hover_color
);

$blog_split_column_info_fontsize = new QodeField(
	"textsimple",
	"blog_split_column_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_info_fontsize",
	$blog_split_column_info_fontsize
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_split_column_info_lineheight = new QodeField(
	"textsimple",
	"blog_split_column_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_info_lineheight",
	$blog_split_column_info_lineheight
);

$blog_split_column_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_split_column_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_info_google_fonts",
	$blog_split_column_info_google_fonts
);

$blog_split_column_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_split_column_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_split_column_info_fontstyle",
	$blog_split_column_info_fontstyle
);

$blog_split_column_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_split_column_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_split_column_info_fontweight",
	$blog_split_column_info_fontweight
);

$row3 = new QodeRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_split_column_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_split_column_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_split_column_info_texttransform",
	$blog_split_column_info_texttransform
);

$blog_split_column_info_letterspacing = new QodeField(
	"textsimple",
	"blog_split_column_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_split_column_info_letterspacing",
	$blog_split_column_info_letterspacing
);

$group3 = new QodeGroup(
	esc_html__( "Quote/Link Title Style", 'brick' ),
	esc_html__( "Define title styles for Quote/Link articles", 'brick' )
);
$panel11->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_title_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_title_color",
	$blog_split_column_ql_title_color
);

$blog_split_column_ql_title_hover_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_title_hover_color",
	$blog_split_column_ql_title_hover_color
);

$blog_split_column_ql_title_fontsize = new QodeField(
	"textsimple",
	"blog_split_column_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_title_font_size",
	$blog_split_column_ql_title_fontsize
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_split_column_ql_title_lineheight = new QodeField(
	"textsimple",
	"blog_split_column_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_ql_title_lineheight",
	$blog_split_column_ql_title_lineheight
);

$blog_split_column_ql_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_split_column_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_ql_title_google_fonts",
	$blog_split_column_ql_title_google_fonts
);

$blog_split_column_ql_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_split_column_ql_title_fontstyle",
	$blog_split_column_ql_title_fontstyle
);

$blog_split_column_ql_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_split_column_ql_title_fontweight",
	$blog_split_column_ql_title_fontweight
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$blog_split_column_ql_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_split_column_ql_title_texttransform",
	$blog_split_column_ql_title_texttransform
);

$blog_split_column_ql_title_letterspacing = new QodeField(
	"textsimple",
	"blog_split_column_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_split_column_ql_title_letterspacing",
	$blog_split_column_ql_title_letterspacing
);

$group5 = new QodeGroup(
	esc_html__( "Quote/Link Post Info Data", 'brick' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'brick' )
);
$panel11->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_info_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_info_color",
	$blog_split_column_ql_info_color
);

$blog_split_column_ql_info_link_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_info_link_color",
	$blog_split_column_ql_info_link_color
);

$blog_split_column_ql_info_hover_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_info_hover_color",
	$blog_split_column_ql_info_hover_color
);

$blog_split_column_ql_info_fontsize = new QodeField(
	"textsimple",
	"blog_split_column_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_info_fontsize",
	$blog_split_column_ql_info_fontsize
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_split_column_ql_info_lineheight = new QodeField(
	"textsimple",
	"blog_split_column_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_ql_info_lineheight",
	$blog_split_column_ql_info_lineheight
);

$blog_split_column_ql_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_split_column_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_ql_info_google_fonts",
	$blog_split_column_ql_info_google_fonts
);

$blog_split_column_ql_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_split_column_ql_info_fontstyle",
	$blog_split_column_ql_info_fontstyle
);

$blog_split_column_ql_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_split_column_ql_info_fontweight",
	$blog_split_column_ql_info_fontweight
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_split_column_ql_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_split_column_ql_info_texttransform",
	$blog_split_column_ql_info_texttransform
);

$blog_split_column_ql_info_letterspacing = new QodeField(
	"textsimple",
	"blog_split_column_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_split_column_ql_info_letterspacing",
	$blog_split_column_ql_info_letterspacing
);

$group6 = new QodeGroup(
	esc_html__( "Quote Author Style", 'brick' ),
	esc_html__( "Define author styles for Quote articles", 'brick' )
);
$panel11->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_author_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_author_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_author_color",
	$blog_split_column_ql_author_color
);

$blog_split_column_ql_author_hover_color = new QodeField(
	"colorsimple",
	"blog_split_column_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_author_hover_color",
	$blog_split_column_ql_author_hover_color
);

$blog_split_column_ql_author_fontsize = new QodeField(
	"textsimple",
	"blog_split_column_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_author_font_size",
	$blog_split_column_ql_author_fontsize
);

$blog_split_column_ql_author_lineheight = new QodeField(
	"textsimple",
	"blog_split_column_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_split_column_ql_author_lineheight",
	$blog_split_column_ql_author_lineheight
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_split_column_ql_author_texttransform = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_split_column_ql_author_texttransform",
	$blog_split_column_ql_author_texttransform
);

$blog_split_column_ql_author_google_fonts = new QodeField(
	"fontsimple",
	"blog_split_column_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_split_column_ql_author_google_fonts",
	$blog_split_column_ql_author_google_fonts
);

$blog_split_column_ql_author_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_split_column_ql_author_fontstyle",
	$blog_split_column_ql_author_fontstyle
);

$blog_split_column_ql_author_fontweight = new QodeField(
	"selectblanksimple",
	"blog_split_column_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_split_column_ql_author_fontweight",
	$blog_split_column_ql_author_fontweight
);

$row3 = new QodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_split_column_ql_author_letterspacing = new QodeField(
	"textsimple",
	"blog_split_column_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_split_column_ql_author_letterspacing",
	$blog_split_column_ql_author_letterspacing
);

// Blog Post List - Blog: Standard
$panel21 = new QodePanel(
	esc_html__( "Blog List Template Options: Standard", 'brick' ),
	"blog_standard_type_post_lists",
	"blog_standard_type_show_options",
	"no"
);
$blogPage->addChild(
	"panel21",
	$panel21
);

$blog_standard_type_number_of_chars = new QodeField(
	"text",
	"blog_standard_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'brick' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel21->addChild(
	"blog_standard_type_number_of_chars",
	$blog_standard_type_number_of_chars
);

$blog_standard_type_read_more_button = new QodeField(
	"yesno",
	"blog_standard_type_read_more_button",
	"yes",
	esc_html__( "Read More Button", 'brick' ),
	esc_html__( "Enable Read More Button", 'brick' )
);
$panel21->addChild(
	"blog_standard_type_read_more_button",
	$blog_standard_type_read_more_button
);

$blog_standard_type_content_position = new QodeField(
	"select",
	"blog_standard_type_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'brick' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'brick' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'brick' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'brick' )
	)
);
$panel21->addChild(
	"blog_standard_type_content_position",
	$blog_standard_type_content_position
);

$blog_standard_type_post_meta_data_section = new QodeTitle(
	"blog_standard_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'brick' )
);
$panel21->addChild(
	"blog_standard_type_post_meta_data_section",
	$blog_standard_type_post_meta_data_section
);

$blog_standard_type_show_categories = new QodeField(
	"yesno",
	"blog_standard_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'brick' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'brick' )
);
$panel21->addChild(
	"blog_standard_type_show_categories",
	$blog_standard_type_show_categories
);

$blog_standard_type_show_comments = new QodeField(
	"yesno",
	"blog_standard_type_show_comments",
	"no",
	esc_html__( "Show Comments", 'brick' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'brick' )
);
$panel21->addChild(
	"blog_standard_type_show_comments",
	$blog_standard_type_show_comments
);

$blog_standard_type_show_author = new QodeField(
	"yesno",
	"blog_standard_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'brick' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'brick' )
);
$panel21->addChild(
	"blog_standard_type_show_author",
	$blog_standard_type_show_author
);

$blog_standard_type_show_date = new QodeField(
	"yesno",
	"blog_standard_type_show_date",
	"yes",
	esc_html__( "Show Date", 'brick' ),
	esc_html__( "Enabling this option will show date on Post List", 'brick' )
);
$panel21->addChild(
	"blog_standard_type_hide_date",
	$blog_standard_type_show_date
);

$blog_standard_type_show_share = new QodeField(
	"yesno",
	"blog_standard_type_show_share",
	"no",
	esc_html__( "Show Share", 'brick' ),
	esc_html__( "Enabling this option will show share on Post List", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_share_options_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_share",
	$blog_standard_type_show_share
);

$blog_standard_type_share_options_container = new QodeContainer(
	"blog_standard_type_share_options_container",
	"blog_standard_type_show_share",
	"no"
);
$panel21->addChild(
	"blog_standard_type_share_options_container",
	$blog_standard_type_share_options_container
);

$blog_standard_type_select_share_option = new QodeField(
	"select",
	"blog_standard_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'brick' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'brick' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'brick' ),
		"list" => esc_html__( "Social Share List", 'brick' )
	)
);

$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_select_share_option",
	$blog_standard_type_select_share_option
);

$blog_standard_type_share_icon_color = new QodeField(
	"color",
	"blog_standard_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'brick' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color",
	$blog_standard_type_share_icon_color
);

$blog_standard_type_share_icon_hover_color = new QodeField(
	"color",
	"blog_standard_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'brick' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color",
	$blog_standard_type_share_icon_hover_color
);

$blog_standard_type_share_background_color = new QodeField(
	"color",
	"blog_standard_type_share_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for dropdown share type", 'brick' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_background_color",
	$blog_standard_type_share_background_color
);

$blog_standard_type_show_like = new QodeField(
	"yesno",
	"blog_standard_type_show_like",
	"no",
	esc_html__( "Show Likes", 'brick' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'brick' )
);
$panel21->addChild(
	"blog_standard_type_show_like",
	$blog_standard_type_show_like
);

$blog_standard_type_post_design_style = new QodeTitle(
	"blog_standard_type_post_design_style",
	esc_html__( "Post Design Style", 'brick' )
);
$panel21->addChild(
	"blog_standard_type_post_design_style",
	$blog_standard_type_post_design_style
);

$blog_standard_type_enable_text_box = new QodeField(
	"yesno",
	"blog_standard_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'brick' ),
	esc_html__( "Enable post text boxed features", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_enable_text_box_container"
	)
);
$panel21->addChild(
	"blog_standard_type_enable_text_box",
	$blog_standard_type_enable_text_box
);

$blog_standard_type_enable_text_box_container = new QodeContainer(
	"blog_standard_type_enable_text_box_container",
	"blog_standard_type_enable_text_box",
	"no"
);
$panel21->addChild(
	"blog_standard_type_enable_text_box_container",
	$blog_standard_type_enable_text_box_container
);

$blog_standard_type_box_background_color = new QodeField(
	"color",
	"blog_standard_type_box_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for post text box", 'brick' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_background_color",
	$blog_standard_type_box_background_color
);

$blog_standard_type_box_border_color = new QodeField(
	"color",
	"blog_standard_type_box_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose border color for post text box", 'brick' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_border_color",
	$blog_standard_type_box_border_color
);

$blog_standard_type_box_padding = new QodeField(
	"text",
	"blog_standard_type_box_padding",
	"",
	esc_html__( "Text box padding", 'brick' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_padding",
	$blog_standard_type_box_padding
);

$group10 = new QodeGroup(
	esc_html__( "Paragraph", 'brick' ),
	esc_html__( "Set paragraph color", 'brick' )
);
$panel21->addChild(
	"group10",
	$group10
);

$blog_standard_type_paragraph_color = new QodeField(
	"colorsimple",
	"blog_standard_type_paragraph_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$group10->addChild(
	"blog_standard_type_paragraph_color",
	$blog_standard_type_paragraph_color
);

$group_standard_audio_bar = new QodeGroup(
	esc_html__( "Audio Bar Background Color", 'brick' ),
	esc_html__( "Set background color for audio bar", 'brick' )
);
$panel21->addChild(
	"group_standard_audio_bar",
	$group_standard_audio_bar
);

$blog_standard_type_audio_bar_back_color = new QodeField(
	"colorsimple",
	"blog_standard_type_audio_bar_back_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$group_standard_audio_bar->addChild(
	"blog_standard_type_audio_bar_back_color",
	$blog_standard_type_audio_bar_back_color
);

$group1 = new QodeGroup(
	esc_html__( "Quote/Link Background", 'brick' ),
	esc_html__( "Set background of Quote/Link post type", 'brick' )
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

$blog_standard_type_ql_background_image = new QodeField(
	"yesnosimple",
	"blog_standard_type_ql_background_image",
	"no",
	esc_html__( "Background Image", 'brick' ),
	""
);
$row1->addChild(
	"blog_standard_type_ql_background_image",
	$blog_standard_type_ql_background_image
);

$blog_standard_type_ql_background_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Default color is #ffffff.", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_background_color",
	$blog_standard_type_ql_background_color
);

$blog_standard_type_ql_hover_background_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "Default color is #e6ae48.", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_hover_background_color",
	$blog_standard_type_ql_hover_background_color
);

$blog_standard_type_show_ql_mark = new QodeField(
	"yesno",
	"blog_standard_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'brick' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_show_ql_mark_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark",
	$blog_standard_type_show_ql_mark
);

$blog_standard_type_show_ql_mark_container = new QodeContainer(
	"blog_standard_type_show_ql_mark_container",
	"blog_standard_type_show_ql_mark",
	"no"
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark_container",
	$blog_standard_type_show_ql_mark_container
);

$row1 = new QodeRow();
$blog_standard_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_mark_color = new QodeField(
	"color",
	"blog_standard_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for quote/link post.", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_color",
	$blog_standard_type_ql_mark_color
);

$blog_standard_type_ql_mark_hover_color = new QodeField(
	"color",
	"blog_standard_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_hover_color",
	$blog_standard_type_ql_mark_hover_color
);

$group11 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel21->addChild(
	"group11",
	$group11
);

$row1 = new QodeRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_standard_type_image_margin_bottom = new QodeField(
	"textsimple",
	"blog_standard_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_image_margin_bottom",
	$blog_standard_type_image_margin_bottom
);

$blog_standard_type_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_standard_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_title_margin_bottom",
	$blog_standard_type_title_margin_bottom
);

$blog_standard_type_read_more_margin_top = new QodeField(
	"textsimple",
	"blog_standard_type_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_read_more_margin_top",
	$blog_standard_type_read_more_margin_top
);

$blog_standard_type_post_info_margin_bottom = new QodeField(
	"textsimple",
	"blog_standard_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_post_info_margin_bottom",
	$blog_standard_type_post_info_margin_bottom
);

$row2 = new QodeRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_standard_type_article_margin_bottom = new QodeField(
	"textsimple",
	"blog_standard_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_article_margin_bottom",
	$blog_standard_type_article_margin_bottom
);

$blog_standard_type_single_article_social_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_standard_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_single_article_social_share_list_margin_top",
	$blog_standard_type_single_article_social_share_list_margin_top
);

$group12 = new QodeGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel21->addChild(
	"group12",
	$group12
);

$row1 = new QodeRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_standard_type_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_title_margin_bottom",
	$blog_standard_type_ql_title_margin_bottom
);

$blog_standard_type_ql_social_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_standard_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_social_share_list_margin_top",
	$blog_standard_type_ql_social_share_list_margin_top
);

$blog_standard_type_ql_quote_author_margin_bottom = new QodeField(
	"textsimple",
	"blog_standard_type_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_quote_author_margin_bottom",
	$blog_standard_type_ql_quote_author_margin_bottom
);

$post_text_styling = new QodeTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'brick' )
);
$panel21->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new QodeGroup(
	esc_html__( "Post Title", 'brick' ),
	esc_html__( "Define title styles in this blog post template.", 'brick' )
);
$panel21->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_standard_type_title_color = new QodeField(
	"colorsimple",
	"blog_standard_type_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_title_color",
	$blog_standard_type_title_color
);

$blog_standard_type_title_hover_color = new QodeField(
	"colorsimple",
	"blog_standard_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_title_hover_color",
	$blog_standard_type_title_hover_color
);

$blog_standard_type_title_fontsize = new QodeField(
	"textsimple",
	"blog_standard_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_title_fontsize",
	$blog_standard_type_title_fontsize
);

$blog_standard_type_title_lineheight = new QodeField(
	"textsimple",
	"blog_standard_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_title_lineheight",
	$blog_standard_type_title_lineheight
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_standard_type_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_standard_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_standard_type_title_texttransform",
	$blog_standard_type_title_texttransform
);

$blog_standard_type_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_standard_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_title_google_fonts",
	$blog_standard_type_title_google_fonts
);

$blog_standard_type_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_standard_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_standard_type_title_fontstyle",
	$blog_standard_type_title_fontstyle
);

$blog_standard_type_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_standard_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_standard_type_title_fontweight",
	$blog_standard_type_title_fontweight
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_standard_type_title_letterspacing = new QodeField(
	"textsimple",
	"blog_standard_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_standard_type_title_letterspacing",
	$blog_standard_type_title_letterspacing
);

$group7 = new QodeGroup(
	esc_html__( "Post Info Data", 'brick' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'brick' )
);
$panel21->addChild(
	"group7",
	$group7
);

$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_standard_type_info_color = new QodeField(
	"colorsimple",
	"blog_standard_type_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_info_color",
	$blog_standard_type_info_color
);

$blog_standard_type_info_link_color = new QodeField(
	"colorsimple",
	"blog_standard_type_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_info_link_color",
	$blog_standard_type_info_link_color
);

$blog_standard_type_info_hover_color = new QodeField(
	"colorsimple",
	"blog_standard_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_info_hover_color",
	$blog_standard_type_info_hover_color
);

$blog_standard_type_info_fontsize = new QodeField(
	"textsimple",
	"blog_standard_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_info_fontsize",
	$blog_standard_type_info_fontsize
);

$row2 = new QodeRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_standard_type_info_lineheight = new QodeField(
	"textsimple",
	"blog_standard_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_info_lineheight",
	$blog_standard_type_info_lineheight
);

$blog_standard_type_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_standard_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_info_google_fonts",
	$blog_standard_type_info_google_fonts
);

$blog_standard_type_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_standard_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_standard_type_info_fontstyle",
	$blog_standard_type_info_fontstyle
);

$blog_standard_type_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_standard_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_standard_type_info_fontweight",
	$blog_standard_type_info_fontweight
);

$row3 = new QodeRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_standard_type_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_standard_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_standard_type_info_texttransform",
	$blog_standard_type_info_texttransform
);

$blog_standard_type_info_letterspacing = new QodeField(
	"textsimple",
	"blog_standard_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_standard_type_info_letterspacing",
	$blog_standard_type_info_letterspacing
);

$group6 = new QodeGroup(
	esc_html__( "Quote/Link Title Style", 'brick' ),
	esc_html__( "Define title styles for Quote/Link articles", 'brick' )
);
$panel21->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_title_color",
	$blog_standard_type_ql_title_color
);

$blog_standard_type_ql_title_hover_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_title_hover_color",
	$blog_standard_type_ql_title_hover_color
);

$blog_standard_type_ql_title_fontsize = new QodeField(
	"textsimple",
	"blog_standard_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_title_font_size",
	$blog_standard_type_ql_title_fontsize
);

$blog_standard_type_ql_title_lineheight = new QodeField(
	"textsimple",
	"blog_standard_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_title_lineheight",
	$blog_standard_type_ql_title_lineheight
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_standard_type_ql_title_texttransform",
	$blog_standard_type_ql_title_texttransform
);

$blog_standard_type_ql_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_standard_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_ql_title_google_fonts",
	$blog_standard_type_ql_title_google_fonts
);

$blog_standard_type_ql_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_standard_type_ql_title_fontstyle",
	$blog_standard_type_ql_title_fontstyle
);

$blog_standard_type_ql_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_standard_type_ql_title_fontweight",
	$blog_standard_type_ql_title_fontweight
);

$row3 = new QodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_title_letterspacing = new QodeField(
	"textsimple",
	"blog_standard_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_standard_type_ql_title_letterspacing",
	$blog_standard_type_ql_title_letterspacing
);

$group8 = new QodeGroup(
	esc_html__( "Quote/Link Post Info Data", 'brick' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'brick' )
);
$panel21->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_info_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_info_color",
	$blog_standard_type_ql_info_color
);

$blog_standard_type_ql_info_link_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_info_link_color",
	$blog_standard_type_ql_info_link_color
);

$blog_standard_type_ql_info_hover_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_info_hover_color",
	$blog_standard_type_ql_info_hover_color
);

$blog_standard_type_ql_info_fontsize = new QodeField(
	"textsimple",
	"blog_standard_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_info_fontsize",
	$blog_standard_type_ql_info_fontsize
);

$row2 = new QodeRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_info_lineheight = new QodeField(
	"textsimple",
	"blog_standard_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_ql_info_lineheight",
	$blog_standard_type_ql_info_lineheight
);

$blog_standard_type_ql_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_standard_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_ql_info_google_fonts",
	$blog_standard_type_ql_info_google_fonts
);

$blog_standard_type_ql_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_standard_type_ql_info_fontstyle",
	$blog_standard_type_ql_info_fontstyle
);

$blog_standard_type_ql_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_standard_type_ql_info_fontweight",
	$blog_standard_type_ql_info_fontweight
);

$row3 = new QodeRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_standard_type_ql_info_texttransform",
	$blog_standard_type_ql_info_texttransform
);

$blog_standard_type_ql_info_letterspacing = new QodeField(
	"textsimple",
	"blog_standard_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_standard_type_ql_info_letterspacing",
	$blog_standard_type_ql_info_letterspacing
);

$group9 = new QodeGroup(
	esc_html__( "Quote Author Style", 'brick' ),
	esc_html__( "Define author styles for Quote articles", 'brick' )
);
$panel21->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_author_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_author_color",
	$blog_standard_type_ql_author_color
);

$blog_standard_type_ql_author_hover_color = new QodeField(
	"colorsimple",
	"blog_standard_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_author_hover_color",
	$blog_standard_type_ql_author_hover_color
);

$blog_standard_type_ql_author_fontsize = new QodeField(
	"textsimple",
	"blog_standard_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_author_font_size",
	$blog_standard_type_ql_author_fontsize
);

$blog_standard_type_ql_author_lineheight = new QodeField(
	"textsimple",
	"blog_standard_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_standard_type_ql_author_lineheight",
	$blog_standard_type_ql_author_lineheight
);

$row2 = new QodeRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_author_texttransform = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_standard_type_ql_author_texttransform",
	$blog_standard_type_ql_author_texttransform
);

$blog_standard_type_ql_author_google_fonts = new QodeField(
	"fontsimple",
	"blog_standard_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_standard_type_ql_author_google_fonts",
	$blog_standard_type_ql_author_google_fonts
);

$blog_standard_type_ql_author_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_standard_type_ql_author_fontstyle",
	$blog_standard_type_ql_author_fontstyle
);

$blog_standard_type_ql_author_fontweight = new QodeField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_standard_type_ql_author_fontweight",
	$blog_standard_type_ql_author_fontweight
);

$row3 = new QodeRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_author_letterspacing = new QodeField(
	"textsimple",
	"blog_standard_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_standard_type_ql_author_letterspacing",
	$blog_standard_type_ql_author_letterspacing
);

// Blog Post List - Blog: Vertical Loop
$panel22 = new QodePanel(
	esc_html__( "Blog List Template Options: Vertical Loop", 'brick' ),
	"blog_vertical_loop_post_lists",
	"blog_vertical_loop_show_options",
	"no"
);
$blogPage->addChild(
	"panel22",
	$panel22
);

$blog_vertical_loop_type_number_of_chars = new QodeField(
	"text",
	"blog_vertical_loop_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'brick' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel22->addChild(
	"blog_vertical_loop_type_number_of_chars",
	$blog_vertical_loop_type_number_of_chars
);

$blog_vertical_loop_type_post_meta_data_section = new QodeTitle(
	"blog_vertical_loop_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'brick' )
);
$panel22->addChild(
	"blog_vertical_loop_type_post_meta_data_section",
	$blog_vertical_loop_type_post_meta_data_section
);

$blog_vertical_loop_type_show_categories = new QodeField(
	"yesno",
	"blog_vertical_loop_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'brick' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'brick' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_categories",
	$blog_vertical_loop_type_show_categories
);

$blog_vertical_loop_type_show_comments = new QodeField(
	"yesno",
	"blog_vertical_loop_type_show_comments",
	"no",
	esc_html__( "Show Comments", 'brick' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'brick' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_comments",
	$blog_vertical_loop_type_show_comments
);

$blog_vertical_loop_type_show_author = new QodeField(
	"yesno",
	"blog_vertical_loop_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'brick' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'brick' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_author",
	$blog_vertical_loop_type_show_author
);

$blog_vertical_loop_type_show_date = new QodeField(
	"yesno",
	"blog_vertical_loop_type_show_date",
	"yes",
	esc_html__( "Show Date", 'brick' ),
	esc_html__( "Enabling this option will show date on Post List", 'brick' )
);
$panel22->addChild(
	"blog_vertical_loop_type_hide_date",
	$blog_vertical_loop_type_show_date
);

$blog_vertical_loop_type_show_share = new QodeField(
	"yesno",
	"blog_vertical_loop_type_show_share",
	"no",
	esc_html__( "Show Share", 'brick' ),
	esc_html__( "Enabling this option will show share on Post List", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_vertical_loop_type_share_options_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_show_share",
	$blog_vertical_loop_type_show_share
);

$blog_vertical_loop_type_share_options_container = new QodeContainer(
	"blog_vertical_loop_type_share_options_container",
	"blog_vertical_loop_type_show_share",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_share_options_container",
	$blog_vertical_loop_type_share_options_container
);

$blog_vertical_loop_type_select_share_option = new QodeField(
	"select",
	"blog_vertical_loop_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'brick' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'brick' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'brick' ),
		"list" => esc_html__( "Social Share List", 'brick' )
	)
);

$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_select_share_option",
	$blog_vertical_loop_type_select_share_option
);

$blog_vertical_loop_type_share_icon_color = new QodeField(
	"color",
	"blog_vertical_loop_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'brick' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_icon_color",
	$blog_vertical_loop_type_share_icon_color
);

$blog_vertical_loop_type_share_icon_hover_color = new QodeField(
	"color",
	"blog_vertical_loop_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'brick' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_icon_hover_color",
	$blog_vertical_loop_type_share_icon_hover_color
);

$blog_vertical_loop_type_share_background_color = new QodeField(
	"color",
	"blog_vertical_loop_type_share_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for dropdown share type", 'brick' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_background_color",
	$blog_vertical_loop_type_share_background_color
);

$blog_vertical_loop_type_show_like = new QodeField(
	"yesno",
	"blog_vertical_loop_type_show_like",
	"no",
	esc_html__( "Show Likes", 'brick' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'brick' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_like",
	$blog_vertical_loop_type_show_like
);

$blog_vertical_loop_type_post_design_style = new QodeTitle(
	"blog_vertical_loop_type_post_design_style",
	esc_html__( "Post Design Style", 'brick' )
);
$panel22->addChild(
	"blog_vertical_loop_type_post_design_style",
	$blog_vertical_loop_type_post_design_style
);

$blog_vertical_loop_type_enable_text_box = new QodeField(
	"yesno",
	"blog_vertical_loop_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'brick' ),
	esc_html__( "Enable post text boxed features", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_vertical_loop_type_enable_text_box_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_enable_text_box",
	$blog_vertical_loop_type_enable_text_box
);

$blog_vertical_loop_type_enable_text_box_container = new QodeContainer(
	"blog_vertical_loop_type_enable_text_box_container",
	"blog_vertical_loop_type_enable_text_box",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_enable_text_box_container",
	$blog_vertical_loop_type_enable_text_box_container
);

$blog_vertical_loop_type_box_background_color = new QodeField(
	"color",
	"blog_vertical_loop_type_box_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Choose background color for post text box", 'brick' )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_background_color",
	$blog_vertical_loop_type_box_background_color
);

$blog_vertical_loop_type_box_border_color = new QodeField(
	"color",
	"blog_vertical_loop_type_box_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose border color for post text box", 'brick' )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_border_color",
	$blog_vertical_loop_type_box_border_color
);

$blog_vertical_loop_type_box_padding = new QodeField(
	"text",
	"blog_vertical_loop_type_box_padding",
	"",
	esc_html__( "Text box padding", 'brick' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_padding",
	$blog_vertical_loop_type_box_padding
);

$group1 = new QodeGroup(
	esc_html__( "Quote/Link Background", 'brick' ),
	esc_html__( "Set background of Quote/Link post type", 'brick' )
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

$blog_vertical_loop_type_ql_background_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "Default color is #ffffff.", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_background_color",
	$blog_vertical_loop_type_ql_background_color
);

$blog_vertical_loop_type_ql_hover_background_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "Default color is #e6ae48.", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_hover_background_color",
	$blog_vertical_loop_type_ql_hover_background_color
);

$blog_vertical_loop_type_show_ql_mark = new QodeField(
	"yesno",
	"blog_vertical_loop_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'brick' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_vertical_loop_type_show_ql_mark_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_show_ql_mark",
	$blog_vertical_loop_type_show_ql_mark
);

$blog_vertical_loop_type_show_ql_mark_container = new QodeContainer(
	"blog_vertical_loop_type_show_ql_mark_container",
	"blog_vertical_loop_type_show_ql_mark",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_show_ql_mark_container",
	$blog_vertical_loop_type_show_ql_mark_container
);

$row1 = new QodeRow();
$blog_vertical_loop_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_mark_color = new QodeField(
	"color",
	"blog_vertical_loop_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "Choose icon color for quote/link post.", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_mark_color",
	$blog_vertical_loop_type_ql_mark_color
);

$blog_vertical_loop_type_ql_mark_hover_color = new QodeField(
	"color",
	"blog_vertical_loop_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_mark_hover_color",
	$blog_vertical_loop_type_ql_mark_hover_color
);

$blog_vertical_loop_type_image_height = new QodeField(
	"text",
	"blog_vertical_loop_type_image_height",
	"",
	esc_html__( "Image Height", 'brick' ),
	esc_html__( "Define image height for current and next article", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel22->addChild(
	"blog_vertical_loop_type_image_height",
	$blog_vertical_loop_type_image_height
);

$group11 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel22->addChild(
	"group11",
	$group11
);

$row1 = new QodeRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_image_margin_bottom = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_image_margin_bottom",
	$blog_vertical_loop_type_image_margin_bottom
);

$blog_vertical_loop_type_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_margin_bottom",
	$blog_vertical_loop_type_title_margin_bottom
);

$blog_vertical_loop_type_post_info_margin_bottom = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_post_info_margin_bottom",
	$blog_vertical_loop_type_post_info_margin_bottom
);

$blog_vertical_loop_type_article_margin_bottom = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_article_margin_bottom",
	$blog_vertical_loop_type_article_margin_bottom
);

$row2 = new QodeRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_single_article_social_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_single_article_social_share_list_margin_top",
	$blog_vertical_loop_type_single_article_social_share_list_margin_top
);

$group12 = new QodeGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'brick' ),
	esc_html__( "Set spacing for blog layouts", 'brick' )
);
$panel22->addChild(
	"group12",
	$group12
);

$row1 = new QodeRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_margin_bottom",
	$blog_vertical_loop_type_ql_title_margin_bottom
);

$blog_vertical_loop_type_ql_social_share_list_margin_top = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_social_share_list_margin_top",
	$blog_vertical_loop_type_ql_social_share_list_margin_top
);

$blog_vertical_loop_type_ql_quote_author_margin_bottom = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_quote_author_margin_bottom",
	$blog_vertical_loop_type_ql_quote_author_margin_bottom
);

$post_text_styling = new QodeTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'brick' )
);
$panel22->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new QodeGroup(
	esc_html__( "Post Title", 'brick' ),
	esc_html__( "Define title styles in this blog post template.", 'brick' )
);
$panel22->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_title_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_color",
	$blog_vertical_loop_type_title_color
);

$blog_vertical_loop_type_title_hover_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_hover_color",
	$blog_vertical_loop_type_title_hover_color
);

$blog_vertical_loop_type_title_fontsize = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_fontsize",
	$blog_vertical_loop_type_title_fontsize
);

$blog_vertical_loop_type_title_lineheight = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_lineheight",
	$blog_vertical_loop_type_title_lineheight
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_vertical_loop_type_title_texttransform",
	$blog_vertical_loop_type_title_texttransform
);

$blog_vertical_loop_type_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_vertical_loop_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_title_google_fonts",
	$blog_vertical_loop_type_title_google_fonts
);

$blog_vertical_loop_type_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_vertical_loop_type_title_fontstyle",
	$blog_vertical_loop_type_title_fontstyle
);

$blog_vertical_loop_type_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_loop_type_title_fontweight",
	$blog_vertical_loop_type_title_fontweight
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_title_letterspacing = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_vertical_loop_type_title_letterspacing",
	$blog_vertical_loop_type_title_letterspacing
);

$group7 = new QodeGroup(
	esc_html__( "Post Info Data", 'brick' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'brick' )
);
$panel22->addChild(
	"group7",
	$group7
);

$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_info_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_color",
	$blog_vertical_loop_type_info_color
);

$blog_vertical_loop_type_info_link_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_link_color",
	$blog_vertical_loop_type_info_link_color
);

$blog_vertical_loop_type_info_hover_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_hover_color",
	$blog_vertical_loop_type_info_hover_color
);

$blog_vertical_loop_type_info_fontsize = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_fontsize",
	$blog_vertical_loop_type_info_fontsize
);

$row2 = new QodeRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_info_lineheight = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_lineheight",
	$blog_vertical_loop_type_info_lineheight
);

$blog_vertical_loop_type_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_vertical_loop_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_google_fonts",
	$blog_vertical_loop_type_info_google_fonts
);

$blog_vertical_loop_type_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_vertical_loop_type_info_fontstyle",
	$blog_vertical_loop_type_info_fontstyle
);

$blog_vertical_loop_type_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_loop_type_info_fontweight",
	$blog_vertical_loop_type_info_fontweight
);

$row3 = new QodeRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_vertical_loop_type_info_texttransform",
	$blog_vertical_loop_type_info_texttransform
);

$blog_vertical_loop_type_info_letterspacing = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_vertical_loop_type_info_letterspacing",
	$blog_vertical_loop_type_info_letterspacing
);

$group_bottom_share_text = new QodeGroup(
	esc_html__( "Share Text", 'brick' ),
	esc_html__( "Define share text styles when social share list is used.", 'brick' )
);
$panel22->addChild(
	"group_bottom_share_text",
	$group_bottom_share_text
);

$row1 = new QodeRow();
$group_bottom_share_text->addChild(
	"row1",
	$row1
);

$blog_loop_bottom_share_color = new QodeField(
	"colorsimple",
	"blog_loop_bottom_share_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_bottom_share_color",
	$blog_loop_bottom_share_color
);

$blog_loop_bottom_share_fontsize = new QodeField(
	"textsimple",
	"blog_loop_bottom_share_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_bottom_share_fontsize",
	$blog_loop_bottom_share_fontsize
);

$blog_loop_bottom_share_lineheight = new QodeField(
	"textsimple",
	"blog_loop_bottom_share_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_bottom_share_lineheight",
	$blog_loop_bottom_share_lineheight
);

$blog_loop_bottom_share_google_fonts = new QodeField(
	"fontsimple",
	"blog_loop_bottom_share_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_bottom_share_google_fonts",
	$blog_loop_bottom_share_google_fonts
);

$row2 = new QodeRow( true );
$group_bottom_share_text->addChild(
	"row2",
	$row2
);

$blog_loop_bottom_share_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_loop_bottom_share_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_loop_bottom_share_fontstyle",
	$blog_loop_bottom_share_fontstyle
);

$blog_loop_bottom_share_fontweight = new QodeField(
	"selectblanksimple",
	"blog_loop_bottom_share_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_loop_bottom_share_fontweight",
	$blog_loop_bottom_share_fontweight
);

$blog_loop_bottom_share_texttransform = new QodeField(
	"selectblanksimple",
	"blog_loop_bottom_share_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_loop_bottom_share_texttransform",
	$blog_loop_bottom_share_texttransform
);

$blog_loop_bottom_share_letterspacing = new QodeField(
	"textsimple",
	"blog_loop_bottom_share_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_loop_bottom_share_letterspacing",
	$blog_loop_bottom_share_letterspacing
);

$group6 = new QodeGroup(
	esc_html__( "Quote/Link Title Style", 'brick' ),
	esc_html__( "Define title styles for Quote/Link articles", 'brick' )
);
$panel22->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_title_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_color",
	$blog_vertical_loop_type_ql_title_color
);

$blog_vertical_loop_type_ql_title_hover_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_hover_color",
	$blog_vertical_loop_type_ql_title_hover_color
);

$blog_vertical_loop_type_ql_title_fontsize = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_font_size",
	$blog_vertical_loop_type_ql_title_fontsize
);

$blog_vertical_loop_type_ql_title_lineheight = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_lineheight",
	$blog_vertical_loop_type_ql_title_lineheight
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_texttransform",
	$blog_vertical_loop_type_ql_title_texttransform
);

$blog_vertical_loop_type_ql_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_vertical_loop_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_google_fonts",
	$blog_vertical_loop_type_ql_title_google_fonts
);

$blog_vertical_loop_type_ql_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_fontstyle",
	$blog_vertical_loop_type_ql_title_fontstyle
);

$blog_vertical_loop_type_ql_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_fontweight",
	$blog_vertical_loop_type_ql_title_fontweight
);

$row3 = new QodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_title_letterspacing = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_title_letterspacing",
	$blog_vertical_loop_type_ql_title_letterspacing
);

$group8 = new QodeGroup(
	esc_html__( "Quote/Link Post Info Data", 'brick' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'brick' )
);
$panel22->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_info_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_color",
	$blog_vertical_loop_type_ql_info_color
);

$blog_vertical_loop_type_ql_info_link_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_link_color",
	$blog_vertical_loop_type_ql_info_link_color
);

$blog_vertical_loop_type_ql_info_hover_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_hover_color",
	$blog_vertical_loop_type_ql_info_hover_color
);

$blog_vertical_loop_type_ql_info_fontsize = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_fontsize",
	$blog_vertical_loop_type_ql_info_fontsize
);

$row2 = new QodeRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_info_lineheight = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_lineheight",
	$blog_vertical_loop_type_ql_info_lineheight
);

$blog_vertical_loop_type_ql_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_vertical_loop_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_google_fonts",
	$blog_vertical_loop_type_ql_info_google_fonts
);

$blog_vertical_loop_type_ql_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_fontstyle",
	$blog_vertical_loop_type_ql_info_fontstyle
);

$blog_vertical_loop_type_ql_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_fontweight",
	$blog_vertical_loop_type_ql_info_fontweight
);

$row3 = new QodeRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_vertical_loop_type_ql_info_texttransform",
	$blog_vertical_loop_type_ql_info_texttransform
);

$blog_vertical_loop_type_ql_info_letterspacing = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_info_letterspacing",
	$blog_vertical_loop_type_ql_info_letterspacing
);

$group9 = new QodeGroup(
	esc_html__( "Quote Author Style", 'brick' ),
	esc_html__( "Define author styles for Quote articles", 'brick' )
);
$panel22->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_author_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_color",
	$blog_vertical_loop_type_ql_author_color
);

$blog_vertical_loop_type_ql_author_hover_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_hover_color",
	$blog_vertical_loop_type_ql_author_hover_color
);

$blog_vertical_loop_type_ql_author_fontsize = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_font_size",
	$blog_vertical_loop_type_ql_author_fontsize
);

$blog_vertical_loop_type_ql_author_lineheight = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_lineheight",
	$blog_vertical_loop_type_ql_author_lineheight
);

$row2 = new QodeRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_author_texttransform = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_texttransform",
	$blog_vertical_loop_type_ql_author_texttransform
);

$blog_vertical_loop_type_ql_author_google_fonts = new QodeField(
	"fontsimple",
	"blog_vertical_loop_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_google_fonts",
	$blog_vertical_loop_type_ql_author_google_fonts
);

$blog_vertical_loop_type_ql_author_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_fontstyle",
	$blog_vertical_loop_type_ql_author_fontstyle
);

$blog_vertical_loop_type_ql_author_fontweight = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_fontweight",
	$blog_vertical_loop_type_ql_author_fontweight
);

$row3 = new QodeRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_author_letterspacing = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_author_letterspacing",
	$blog_vertical_loop_type_ql_author_letterspacing
);

$post_vertical_loop_type_next_article_title = new QodeTitle(
	"post_vertical_loop_type_next_article_title",
	esc_html__( "Next Article Title Styles", 'brick' )
);
$panel22->addChild(
	"post_vertical_loop_type_next_article_title",
	$post_vertical_loop_type_next_article_title
);

$group10 = new QodeGroup(
	esc_html__( "Title Style", 'brick' ),
	esc_html__( "Define title styles for next article", 'brick' )
);
$panel22->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_article_title_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_color",
	$blog_vertical_loop_type_next_article_title_color
);

$blog_vertical_loop_type_next_article_title_fontsize = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_fontsize",
	$blog_vertical_loop_type_next_article_title_fontsize
);

$blog_vertical_loop_type_next_article_title_lineheight = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_lineheight",
	$blog_vertical_loop_type_next_article_title_lineheight
);

$blog_vertical_loop_type_next_article_title_texttransform = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_texttransform",
	$blog_vertical_loop_type_next_article_title_texttransform
);

$row2 = new QodeRow( true );
$group10->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_article_title_google_fonts = new QodeField(
	"fontsimple",
	"blog_vertical_loop_type_next_article_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_google_fonts",
	$blog_vertical_loop_type_next_article_title_google_fonts
);

$blog_vertical_loop_type_next_article_title_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_fontstyle",
	$blog_vertical_loop_type_next_article_title_fontstyle
);

$blog_vertical_loop_type_next_article_title_fontweight = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_fontweight",
	$blog_vertical_loop_type_next_article_title_fontweight
);

$blog_vertical_loop_type_next_article_title_letterspacing = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_letterspacing",
	$blog_vertical_loop_type_next_article_title_letterspacing
);

$row3 = new QodeRow( true );
$group10->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_next_article_title_position = new QodeField(
	"selectsimple",
	"blog_vertical_loop_type_next_article_title_position",
	"dropdown",
	esc_html__( "Title Position", 'brick' ),
	esc_html__( "Choose title position for next article", 'brick' ),
	array(
		"center" => esc_html__( "Center", 'brick' ),
		"left" => esc_html__( "Left", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);

$row3->addChild(
	"blog_vertical_loop_type_next_article_title_position",
	$blog_vertical_loop_type_next_article_title_position
);

$post_vertical_loop_next_art_post_info = new QodeTitle(
	"post_vertical_loop_next_art_post_info",
	esc_html__( "Next Article Post Info Style", 'brick' )
);
$panel22->addChild(
	"post_vertical_loop_next_art_post_info",
	$post_vertical_loop_next_art_post_info
);

$group_next_art_post_info = new QodeGroup(
	esc_html__( "Post Info Data", 'brick' ),
	esc_html__( "Define post info text styles (date, category names etc.)", 'brick' )
);
$panel22->addChild(
	"group_next_art_post_info",
	$group_next_art_post_info
);

$row1 = new QodeRow();
$group_next_art_post_info->addChild(
	"row1",
	$row1
);

$blog_loop_next_art_info_color = new QodeField(
	"colorsimple",
	"blog_loop_next_art_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_next_art_info_color",
	$blog_loop_next_art_info_color
);

$blog_loop_next_art_info_link_color = new QodeField(
	"colorsimple",
	"blog_loop_next_art_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_next_art_info_link_color",
	$blog_loop_next_art_info_link_color
);

$blog_loop_next_art_info_hover_color = new QodeField(
	"colorsimple",
	"blog_loop_next_art_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_next_art_info_hover_color",
	$blog_loop_next_art_info_hover_color
);

$blog_loop_next_art_info_fontsize = new QodeField(
	"textsimple",
	"blog_loop_next_art_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_loop_next_art_info_fontsize",
	$blog_loop_next_art_info_fontsize
);

$row2 = new QodeRow( true );
$group_next_art_post_info->addChild(
	"row2",
	$row2
);

$blog_loop_next_art_info_lineheight = new QodeField(
	"textsimple",
	"blog_loop_next_art_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_loop_next_art_info_lineheight",
	$blog_loop_next_art_info_lineheight
);

$blog_loop_next_art_info_google_fonts = new QodeField(
	"fontsimple",
	"blog_loop_next_art_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_loop_next_art_info_google_fonts",
	$blog_loop_next_art_info_google_fonts
);

$blog_loop_next_art_info_fontstyle = new QodeField(
	"selectblanksimple",
	"blog_loop_next_art_info_fontstyle",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_loop_next_art_info_fontstyle",
	$blog_loop_next_art_info_fontstyle
);

$blog_loop_next_art_info_fontweight = new QodeField(
	"selectblanksimple",
	"blog_loop_next_art_info_fontweight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_loop_next_art_info_fontweight",
	$blog_loop_next_art_info_fontweight
);

$row3 = new QodeRow( true );
$group_next_art_post_info->addChild(
	"row3",
	$row3
);

$blog_loop_next_art_info_texttransform = new QodeField(
	"selectblanksimple",
	"blog_loop_next_art_info_texttransform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"blog_loop_next_art_info_texttransform",
	$blog_loop_next_art_info_texttransform
);

$blog_loop_next_art_info_letterspacing = new QodeField(
	"textsimple",
	"blog_loop_next_art_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_loop_next_art_info_letterspacing",
	$blog_loop_next_art_info_letterspacing
);

$blog_loop_next_art_info_position = new QodeField(
	"selectsimple",
	"blog_loop_next_art_info_position",
	"dropdown",
	esc_html__( "Post Info Position", 'brick' ),
	esc_html__( "Choose post info position for next article", 'brick' ),
	array(
		"center" => esc_html__( "Center", 'brick' ),
		"left" => esc_html__( "Left", 'brick' ),
		"right" => esc_html__( "Right", 'brick' )
	)
);

$row3->addChild(
	"blog_loop_next_art_info_position",
	$blog_loop_next_art_info_position
);

$post_vertical_loop_type_next_previous_arrow_title = new QodeTitle(
	"post_vertical_loop_type_next_previous_arrow_title",
	esc_html__( "Previous/Next Article Arrow Style", 'brick' )
);
$panel22->addChild(
	"post_vertical_loop_type_next_previous_arrow_title",
	$post_vertical_loop_type_next_previous_arrow_title
);

$group13 = new QodeGroup(
	esc_html__( "Article Arrow Style", 'brick' ),
	esc_html__( "Define arrow styles for previous/next article", 'brick' )
);
$panel22->addChild(
	"group13",
	$group13
);

$row1 = new QodeRow();
$group13->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_article_arrow_background_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_background_color",
	$blog_vertical_loop_type_next_article_arrow_background_color
);

$blog_vertical_loop_type_next_article_arrow_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_color",
	"",
	esc_html__( "Arrow Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_color",
	$blog_vertical_loop_type_next_article_arrow_color
);

$blog_vertical_loop_type_next_article_arrow_background_hover_color = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_background_hover_color",
	$blog_vertical_loop_type_next_article_arrow_background_hover_color
);

$blog_vertical_loop_type_next_article_arrow_color_hover = new QodeField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_color_hover",
	"",
	esc_html__( "Arrow Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_color_hover",
	$blog_vertical_loop_type_next_article_arrow_color_hover
);

$row2 = new QodeRow();
$group13->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_article_arrow_size = new QodeField(
	"textsimple",
	"blog_vertical_loop_type_next_article_arrow_size",
	"",
	esc_html__( "Arrow Size", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_arrow_size",
	$blog_vertical_loop_type_next_article_arrow_size
);

$blog_vertical_loop_type_next_article_font_weight = new QodeField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_font_weight",
	$blog_vertical_loop_type_next_article_font_weight
);

$post_vertical_loop_type_next_previous_text_title = new QodeTitle(
	"post_vertical_loop_type_next_previous_text_title",
	esc_html__( "Previous/Next Article Text Style", 'brick' )
);
$panel22->addChild(
	"post_vertical_loop_type_next_previous_text_title",
	$post_vertical_loop_type_next_previous_text_title
);

$group14 = new QodeGroup(
	esc_html__( "Article Prev/Next Text Style", 'brick' ),
	esc_html__( "Define Blog List title style", 'brick' )
);
$panel22->addChild(
	"group14",
	$group14
);

$row1 = new QodeRow();
$group14->addChild(
	"row1",
	$row1
);

$blog_vertical_lp_prvnxt_text_color = new QodeField(
	"colorsimple",
	"blog_vertical_lp_prvnxt_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_lp_prvnxt_text_color",
	$blog_vertical_lp_prvnxt_text_color
);

$blog_vertical_lp_prvnxt_text_hover_color = new QodeField(
	"colorsimple",
	"blog_vertical_lp_prvnxt_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_lp_prvnxt_text_hover_color",
	$blog_vertical_lp_prvnxt_text_hover_color
);

$blog_vertical_lp_prvnxt_text_font_size = new QodeField(
	"textsimple",
	"blog_vertical_lp_prvnxt_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_lp_prvnxt_text_font_size",
	$blog_vertical_lp_prvnxt_text_font_size
);

$blog_vertical_lp_prvnxt_text_line_height = new QodeField(
	"textsimple",
	"blog_vertical_lp_prvnxt_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_vertical_lp_prvnxt_text_line_height",
	$blog_vertical_lp_prvnxt_text_line_height
);

$row2 = new QodeRow();
$group14->addChild(
	"row2",
	$row2
);

$blog_vertical_lp_prvnxt_text_text_transform = new QodeField(
	"selectblanksimple",
	"blog_vertical_lp_prvnxt_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_vertical_lp_prvnxt_text_text_transform",
	$blog_vertical_lp_prvnxt_text_text_transform
);

$blog_vertical_lp_prvnxt_text_font_family = new QodeField(
	"fontsimple",
	"blog_vertical_lp_prvnxt_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_vertical_lp_prvnxt_text_font_family",
	$blog_vertical_lp_prvnxt_text_font_family
);

$blog_vertical_lp_prvnxt_text_font_style = new QodeField(
	"selectblanksimple",
	"blog_vertical_lp_prvnxt_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_vertical_lp_prvnxt_text_font_style",
	$blog_vertical_lp_prvnxt_text_font_style
);

$blog_vertical_lp_prvnxt_text_font_weight = new QodeField(
	"selectblanksimple",
	"blog_vertical_lp_prvnxt_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_vertical_lp_prvnxt_text_font_weight",
	$blog_vertical_lp_prvnxt_text_font_weight
);

$row3 = new QodeRow();
$group14->addChild(
	"row3",
	$row3
);

$blog_vertical_lp_prvnxt_text_letter_spacing = new QodeField(
	"textsimple",
	"blog_vertical_lp_prvnxt_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_vertical_lp_prvnxt_text_letter_spacing",
	$blog_vertical_lp_prvnxt_text_letter_spacing
);

//Blog List

$panel28 = new QodePanel(
	esc_html__( "Blog List Shortcodes", 'brick' ),
	"blog_list_panel"
);
$blogPage->addChild(
	"panel28",
	$panel28
);

//Blog List Boxes

$blog_list_boxes_section_subtitle = new QodeTitle(
	"blog_list_boxes_section_subtitle",
	esc_html__( "Blog List - Boxes", 'brick' )
);
$panel28->addChild(
	"blog_list_boxes_section_subtitle",
	$blog_list_boxes_section_subtitle
);

$group6 = new QodeGroup(
	esc_html__( "Blog List Padding", 'brick' ),
	esc_html__( "Enter Boxes Blog List padding", 'brick' )
);
$panel28->addChild(
	"group6",
	$group6
);
$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_list_boxes_padding_top = new QodeField(
	"textsimple",
	"blog_list_boxes_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_padding_top",
	$blog_list_boxes_padding_top
);

$blog_list_boxes_padding_right = new QodeField(
	"textsimple",
	"blog_list_boxes_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_padding_right",
	$blog_list_boxes_padding_right
);

$blog_list_boxes_padding_bottom = new QodeField(
	"textsimple",
	"blog_list_boxes_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_padding_bottom",
	$blog_list_boxes_padding_bottom
);

$blog_list_boxes_padding_left = new QodeField(
	"textsimple",
	"blog_list_boxes_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_padding_left",
	$blog_list_boxes_padding_left
);

$group16 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Define blog list spacing", 'brick' )
);
$panel28->addChild(
	"group16",
	$group16
);

$row1 = new QodeRow();
$group16->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_list_boxes_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_title_margin_bottom",
	$blog_list_boxes_title_margin_bottom
);

$blog_list_boxes_post_info_margin_bottom = new QodeField(
	"textsimple",
	"blog_list_boxes_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_post_info_margin_bottom",
	$blog_list_boxes_post_info_margin_bottom
);

$blog_list_boxes_read_more_margin_top = new QodeField(
	"textsimple",
	"blog_list_boxes_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_read_more_margin_top",
	$blog_list_boxes_read_more_margin_top
);

$group17 = new QodeGroup(
	esc_html__( "Blog List Title", 'brick' ),
	esc_html__( "Define Blog List title style", 'brick' )
);
$panel28->addChild(
	"group17",
	$group17
);

$row1 = new QodeRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_color = new QodeField(
	"colorsimple",
	"blog_list_boxes_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_title_color",
	$blog_list_boxes_title_color
);

$blog_list_boxes_title_hover_color = new QodeField(
	"colorsimple",
	"blog_list_boxes_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_title_hover_color",
	$blog_list_boxes_title_hover_color
);

$blog_list_boxes_title_font_size = new QodeField(
	"textsimple",
	"blog_list_boxes_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_title_font_size",
	$blog_list_boxes_title_font_size
);

$blog_list_boxes_title_line_height = new QodeField(
	"textsimple",
	"blog_list_boxes_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_title_line_height",
	$blog_list_boxes_title_line_height
);

$row2 = new QodeRow();
$group17->addChild(
	"row2",
	$row2
);

$blog_list_boxes_title_text_transform = new QodeField(
	"selectblanksimple",
	"blog_list_boxes_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_list_boxes_title_text_transform",
	$blog_list_boxes_title_text_transform
);

$blog_list_boxes_title_font_family = new QodeField(
	"fontsimple",
	"blog_list_boxes_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_boxes_title_font_family",
	$blog_list_boxes_title_font_family
);

$blog_list_boxes_title_font_style = new QodeField(
	"selectblanksimple",
	"blog_list_boxes_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_list_boxes_title_font_style",
	$blog_list_boxes_title_font_style
);

$blog_list_boxes_title_font_weight = new QodeField(
	"selectblanksimple",
	"blog_list_boxes_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_list_boxes_title_font_weight",
	$blog_list_boxes_title_font_weight
);

$row3 = new QodeRow();
$group17->addChild(
	"row3",
	$row3
);

$blog_list_boxes_title_letter_spacing = new QodeField(
	"textsimple",
	"blog_list_boxes_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_list_boxes_title_letter_spacing",
	$blog_list_boxes_title_letter_spacing
);

$group18 = new QodeGroup(
	esc_html__( "Blog List Post Info", 'brick' ),
	esc_html__( "Define blog list post info style", 'brick' )
);
$panel28->addChild(
	"group18",
	$group18
);

$row1 = new QodeRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_list_boxes_post_info_color = new QodeField(
	"colorsimple",
	"blog_list_boxes_post_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_post_info_color",
	$blog_list_boxes_post_info_color
);

$blog_list_boxes_post_info_link_color = new QodeField(
	"colorsimple",
	"blog_list_boxes_post_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_color",
	$blog_list_boxes_post_info_link_color
);

$blog_list_boxes_post_info_link_hover_color = new QodeField(
	"colorsimple",
	"blog_list_boxes_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_hover_color",
	$blog_list_boxes_post_info_link_hover_color
);

$blog_list_boxes_post_info_font_size = new QodeField(
	"textsimple",
	"blog_list_boxes_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_boxes_post_info_font_size",
	$blog_list_boxes_post_info_font_size
);

$row2 = new QodeRow();
$group18->addChild(
	"row2",
	$row2
);

$blog_list_boxes_post_info_line_height = new QodeField(
	"textsimple",
	"blog_list_boxes_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_boxes_post_info_line_height",
	$blog_list_boxes_post_info_line_height
);

$blog_list_boxes_post_info_text_transform = new QodeField(
	"selectblanksimple",
	"blog_list_boxes_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_list_boxes_post_info_text_transform",
	$blog_list_boxes_post_info_text_transform
);

$blog_list_boxes_post_info_font_family = new QodeField(
	"fontsimple",
	"blog_list_boxes_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_boxes_post_info_font_family",
	$blog_list_boxes_post_info_font_family
);

$blog_list_boxes_post_info_font_style = new QodeField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_list_boxes_post_info_font_style",
	$blog_list_boxes_post_info_font_style
);

$row3 = new QodeRow();
$group18->addChild(
	"row3",
	$row3
);

$blog_list_boxes_post_info_font_weight = new QodeField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"blog_list_boxes_post_info_font_weight",
	$blog_list_boxes_post_info_font_weight
);

$blog_list_boxes_post_info_letter_spacing = new QodeField(
	"textsimple",
	"blog_list_boxes_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_list_boxes_post_info_letter_spacing",
	$blog_list_boxes_post_info_letter_spacing
);

$blog_list_boxes_date_color = new QodeField(
	"color",
	"blog_list_boxes_date_color",
	"",
	esc_html__( "Date Color", 'brick' ),
	esc_html__( "Choose color for date", 'brick' )
);
$panel28->addChild(
	"blog_list_boxes_date_color",
	$blog_list_boxes_date_color
);

$blog_list_minimal_subtitle = new QodeTitle(
	"blog_list_minimal_subtitle",
	esc_html__( "Blog List - Minimal", 'brick' )
);
$panel28->addChild(
	"blog_list_minimal_subtitle",
	$blog_list_minimal_subtitle
);

$group5 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Define blog list spacing", 'brick' )
);
$panel28->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow( true );
$group5->addChild(
	"row1",
	$row1
);

$blog_list_minimal_title_margin_bottom = new QodeField(
	"textsimple",
	"blog_list_minimal_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_minimal_title_margin_bottom",
	$blog_list_minimal_title_margin_bottom
);

$blog_list_minimal_post_info_margin_bottom = new QodeField(
	"textsimple",
	"blog_list_minimal_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_minimal_post_info_margin_bottom",
	$blog_list_minimal_post_info_margin_bottom
);

$blog_list_minimal_read_more_margin_top = new QodeField(
	"textsimple",
	"blog_list_minimal_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_minimal_read_more_margin_top",
	$blog_list_minimal_read_more_margin_top
);

// Image in left box

$image_in_left_box = new QodeTitle(
	"image_in_left_box",
	esc_html__( "Blog List - Image in Left Box", 'brick' )
);
$panel28->addChild(
	"image_in_left_box",
	$image_in_left_box
);

$group28 = new QodeGroup(
	esc_html__( "Blog List Title", 'brick' ),
	esc_html__( "Define Blog List title style", 'brick' )
);
$panel28->addChild(
	"group28",
	$group28
);
$row1 = new QodeRow();
$group28->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_color = new QodeField(
	"colorsimple",
	"blog_list_img_in_lbox_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_color",
	$blog_list_img_in_lbox_title_color
);

$blog_list_img_in_lbox_title_hover_color = new QodeField(
	"colorsimple",
	"blog_list_img_in_lbox_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_hover_color",
	$blog_list_img_in_lbox_title_hover_color
);

$blog_list_img_in_lbox_title_font_size = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_font_size",
	$blog_list_img_in_lbox_title_font_size
);

$blog_list_img_in_lbox_title_line_height = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_line_height",
	$blog_list_img_in_lbox_title_line_height
);

$row2 = new QodeRow( true );
$group28->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_title_text_transform = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_list_img_in_lbox_title_text_transform",
	$blog_list_img_in_lbox_title_text_transform
);

$blog_list_img_in_lbox_title_font_family = new QodeField(
	"fontsimple",
	"blog_list_img_in_lbox_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_family",
	$blog_list_img_in_lbox_title_font_family
);

$blog_list_img_in_lbox_title_font_style = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_style",
	$blog_list_img_in_lbox_title_font_style
);

$blog_list_img_in_lbox_title_font_weight = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_weight",
	$blog_list_img_in_lbox_title_font_weight
);

$row3 = new QodeRow( true );
$group28->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_title_letter_spacing = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_list_img_in_lbox_title_letter_spacing",
	$blog_list_img_in_lbox_title_letter_spacing
);

$group29 = new QodeGroup(
	esc_html__( "Blog List Post Info", 'brick' ),
	esc_html__( "Define blog list post info style", 'brick' )
);
$panel28->addChild(
	"group29",
	$group29
);
$row1 = new QodeRow();
$group29->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_post_info_color = new QodeField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_color",
	$blog_list_img_in_lbox_post_info_color
);

$blog_list_img_in_lbox_post_info_link_color = new QodeField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_color",
	$blog_list_img_in_lbox_post_info_link_color
);

$blog_list_img_in_lbox_post_info_link_hover_color = new QodeField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_hover_color",
	$blog_list_img_in_lbox_post_info_link_hover_color
);

$blog_list_img_in_lbox_post_info_font_size = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_font_size",
	$blog_list_img_in_lbox_post_info_font_size
);

$row2 = new QodeRow( true );
$group29->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_post_info_line_height = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_line_height",
	$blog_list_img_in_lbox_post_info_line_height
);

$blog_list_img_in_lbox_post_info_text_transform = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_text_transform",
	$blog_list_img_in_lbox_post_info_text_transform
);

$blog_list_img_in_lbox_post_info_font_family = new QodeField(
	"fontsimple",
	"blog_list_img_in_lbox_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_family",
	$blog_list_img_in_lbox_post_info_font_family
);

$blog_list_img_in_lbox_post_info_font_style = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_style",
	$blog_list_img_in_lbox_post_info_font_style
);

$row3 = new QodeRow( true );
$group29->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_post_info_font_weight = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_font_weight",
	$blog_list_img_in_lbox_post_info_font_weight
);

$blog_list_img_in_lbox_post_info_letter_spacing = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_letter_spacing",
	$blog_list_img_in_lbox_post_info_letter_spacing
);

$group30 = new QodeGroup(
	esc_html__( "Blog List Date Style", 'brick' ),
	esc_html__( "Define blog list date style", 'brick' )
);
$panel28->addChild(
	"group30",
	$group30
);
$row1 = new QodeRow();
$group30->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_date_color = new QodeField(
	"colorsimple",
	"blog_list_img_in_lbox_date_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_color",
	$blog_list_img_in_lbox_date_color
);

$blog_list_img_in_lbox_date_font_size = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_font_size",
	$blog_list_img_in_lbox_date_font_size
);

$blog_list_img_in_lbox_date_line_height = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_line_height",
	$blog_list_img_in_lbox_date_line_height
);

$blog_list_img_in_lbox_date_text_transform = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"blog_list_img_in_lbox_date_text_transform",
	$blog_list_img_in_lbox_date_text_transform
);

$row2 = new QodeRow( true );
$group30->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_date_font_family = new QodeField(
	"fontsimple",
	"blog_list_img_in_lbox_date_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_family",
	$blog_list_img_in_lbox_date_font_family
);

$blog_list_img_in_lbox_date_font_style = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_style",
	$blog_list_img_in_lbox_date_font_style
);

$blog_list_img_in_lbox_date_font_weight = new QodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_weight",
	$blog_list_img_in_lbox_date_font_weight
);

$blog_list_img_in_lbox_date_letter_spacing = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_letter_spacing",
	$blog_list_img_in_lbox_date_letter_spacing
);

$group31 = new QodeGroup(
	esc_html__( "Blog List Spacing", 'brick' ),
	esc_html__( "Define blog list spacing", 'brick' )
);
$panel28->addChild(
	"group31",
	$group31
);

$row1 = new QodeRow( true );
$group31->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_margin_bttm = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_margin_bttm",
	$blog_list_img_in_lbox_title_margin_bttm
);

$blog_list_img_in_lbox_post_info_margin_bttm = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_margin_bttm",
	$blog_list_img_in_lbox_post_info_margin_bttm
);

$blog_list_img_in_lbox_read_more_margin_top = new QodeField(
	"textsimple",
	"blog_list_img_in_lbox_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_list_img_in_lbox_read_more_margin_top",
	$blog_list_img_in_lbox_read_more_margin_top
);

/*** Blog Slider ***/

$panel31 = new QodePanel(
	esc_html__( "Blog Slider", 'brick' ),
	"blog_slider"
);
$blogPage->addChild(
	"panel31",
	$panel31
);

$blog_slider_default_and_with_info_always_title = new QodeTitle(
	"blog_slider_default_and_with_info_always_title",
	esc_html__( "Default and Post Info Visible", 'brick' )
);
$panel31->addChild(
	"blog_slider_default_and_with_info_always_title",
	$blog_slider_default_and_with_info_always_title
);

$group23 = new QodeGroup(
	esc_html__( "Title style", 'brick' ),
	esc_html__( "Blog slider title style", 'brick' )
);
$panel31->addChild(
	"group23",
	$group23
);

$row1 = new QodeRow();
$group23->addChild(
	"row1",
	$row1
);

$blog_slider_title_color = new QodeField(
	"colorsimple",
	"blog_slider_title_color",
	"",
	esc_html__( "Title Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_title_color",
	$blog_slider_title_color
);

$blog_slider_title_hover_color = new QodeField(
	"colorsimple",
	"blog_slider_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_title_hover_color",
	$blog_slider_title_hover_color
);

$blog_slider_title_font_size = new QodeField(
	"textsimple",
	"blog_slider_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_title_font_size",
	$blog_slider_title_font_size
);

$blog_slider_title_line_height = new QodeField(
	"textsimple",
	"blog_slider_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_title_line_height",
	$blog_slider_title_line_height
);

$row2 = new QodeRow();
$group23->addChild(
	"row2",
	$row2
);

$blog_slider_title_text_transform = new QodeField(
	"selectblanksimple",
	"blog_slider_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_slider_title_text_transform",
	$blog_slider_title_text_transform
);

$blog_slider_title_font_family = new QodeField(
	"fontsimple",
	"blog_slider_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_slider_title_font_family",
	$blog_slider_title_font_family
);

$blog_slider_title_font_style = new QodeField(
	"selectblanksimple",
	"blog_slider_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_slider_title_font_style",
	$blog_slider_title_font_style
);

$blog_slider_title_font_weight = new QodeField(
	"selectblanksimple",
	"blog_slider_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_slider_title_font_weight",
	$blog_slider_title_font_weight
);

$row3 = new QodeRow();
$group23->addChild(
	"row3",
	$row3
);

$blog_slider_title_letter_spacing = new QodeField(
	"textsimple",
	"blog_slider_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_slider_title_letter_spacing",
	$blog_slider_title_letter_spacing
);

$group24 = new QodeGroup(
	esc_html__( "Category style", 'brick' ),
	esc_html__( "Blog slider categories style", 'brick' )
);
$panel31->addChild(
	"group24",
	$group24
);

$row1 = new QodeRow();
$group24->addChild(
	"row1",
	$row1
);

$blog_slider_category_color = new QodeField(
	"colorsimple",
	"blog_slider_category_color",
	"",
	esc_html__( "Category Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_category_color",
	$blog_slider_category_color
);

$blog_slider_category_hover_color = new QodeField(
	"colorsimple",
	"blog_slider_category_hover_color",
	"",
	esc_html__( "Category Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_category_hover_color",
	$blog_slider_category_hover_color
);

$blog_slider_category_font_size = new QodeField(
	"textsimple",
	"blog_slider_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_category_font_size",
	$blog_slider_category_font_size
);

$blog_slider_category_line_height = new QodeField(
	"textsimple",
	"blog_slider_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_category_line_height",
	$blog_slider_category_line_height
);

$row2 = new QodeRow();
$group24->addChild(
	"row2",
	$row2
);

$blog_slider_category_text_transform = new QodeField(
	"selectblanksimple",
	"blog_slider_category_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_slider_category_text_transform",
	$blog_slider_category_text_transform
);

$blog_slider_category_font_family = new QodeField(
	"fontsimple",
	"blog_slider_category_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_slider_category_font_family",
	$blog_slider_category_font_family
);

$blog_slider_category_font_style = new QodeField(
	"selectblanksimple",
	"blog_slider_category_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_slider_category_font_style",
	$blog_slider_category_font_style
);

$blog_slider_category_font_weight = new QodeField(
	"selectblanksimple",
	"blog_slider_category_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_slider_category_font_weight",
	$blog_slider_category_font_weight
);

$row3 = new QodeRow();
$group24->addChild(
	"row3",
	$row3
);

$blog_slider_category_letter_spacing = new QodeField(
	"textsimple",
	"blog_slider_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_slider_category_letter_spacing",
	$blog_slider_category_letter_spacing
);

$group25 = new QodeGroup(
	esc_html__( "Date style", 'brick' ),
	esc_html__( "Blog slider date style", 'brick' )
);
$panel31->addChild(
	"group25",
	$group25
);

$row1 = new QodeRow();
$group25->addChild(
	"row1",
	$row1
);

$blog_slider_date_color = new QodeField(
	"colorsimple",
	"blog_slider_date_color",
	"",
	esc_html__( "Date Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_date_color",
	$blog_slider_date_color
);

$blog_slider_date_font_size = new QodeField(
	"textsimple",
	"blog_slider_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_date_font_size",
	$blog_slider_date_font_size
);

$blog_slider_date_line_height = new QodeField(
	"textsimple",
	"blog_slider_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_date_line_height",
	$blog_slider_date_line_height
);

$blog_slider_date_text_transform = new QodeField(
	"selectblanksimple",
	"blog_slider_date_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"blog_slider_date_text_transform",
	$blog_slider_date_text_transform
);

$row2 = new QodeRow();
$group25->addChild(
	"row2",
	$row2
);

$blog_slider_date_font_family = new QodeField(
	"fontsimple",
	"blog_slider_date_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_slider_date_font_family",
	$blog_slider_date_font_family
);

$blog_slider_date_font_style = new QodeField(
	"selectblanksimple",
	"blog_slider_date_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_slider_date_font_style",
	$blog_slider_date_font_style
);

$blog_slider_date_font_weight = new QodeField(
	"selectblanksimple",
	"blog_slider_date_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_slider_date_font_weight",
	$blog_slider_date_font_weight
);

$blog_slider_date_letter_spacing = new QodeField(
	"textsimple",
	"blog_slider_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_slider_date_letter_spacing",
	$blog_slider_date_letter_spacing
);

$blog_slider_info_in_bottom_title = new QodeTitle(
	"blog_slider_info_in_bottom_title",
	esc_html__( "Post Info in Bottom", 'brick' )
);
$panel31->addChild(
	"blog_slider_info_in_bottom_title",
	$blog_slider_info_in_bottom_title
);

$group26 = new QodeGroup(
	esc_html__( "Title style", 'brick' ),
	esc_html__( "Blog slider title style", 'brick' )
);
$panel31->addChild(
	"group26",
	$group26
);

$row1 = new QodeRow();
$group26->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_title_color = new QodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_color",
	"",
	esc_html__( "Title Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_color",
	$blog_slider_post_info_in_bottom_title_color
);

$blog_slider_post_info_in_bottom_title_hover_color = new QodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_hover_color",
	$blog_slider_post_info_in_bottom_title_hover_color
);

$blog_slider_post_info_in_bottom_title_font_size = new QodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_font_size",
	$blog_slider_post_info_in_bottom_title_font_size
);

$blog_slider_post_info_in_bottom_title_line_height = new QodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_line_height",
	$blog_slider_post_info_in_bottom_title_line_height
);

$row2 = new QodeRow();
$group26->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_title_text_transform = new QodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_text_transform",
	$blog_slider_post_info_in_bottom_title_text_transform
);

$blog_slider_post_info_in_bottom_title_font_family = new QodeField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_family",
	$blog_slider_post_info_in_bottom_title_font_family
);

$blog_slider_post_info_in_bottom_title_font_style = new QodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_style",
	$blog_slider_post_info_in_bottom_title_font_style
);

$blog_slider_post_info_in_bottom_title_font_weight = new QodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_weight",
	$blog_slider_post_info_in_bottom_title_font_weight
);

$row3 = new QodeRow();
$group26->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_title_letter_spacing = new QodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	$blog_slider_post_info_in_bottom_title_letter_spacing
);

$group27 = new QodeGroup(
	esc_html__( "Post Info style", 'brick' ),
	esc_html__( "Blog slider post info style", 'brick' )
);
$panel31->addChild(
	"group27",
	$group27
);

$row1 = new QodeRow();
$group27->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_post_info_color = new QodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_color",
	$blog_slider_post_info_in_bottom_post_info_color
);

$blog_slider_post_info_in_bottom_post_info_link_color = new QodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_color",
	"",
	esc_html__( "Link Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_color",
	$blog_slider_post_info_in_bottom_post_info_link_color
);

$blog_slider_post_info_in_bottom_post_info_link_hover_color = new QodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	$blog_slider_post_info_in_bottom_post_info_link_hover_color
);

$blog_slider_post_info_in_bottom_post_info_font_size = new QodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_size",
	$blog_slider_post_info_in_bottom_post_info_font_size
);

$row2 = new QodeRow();
$group27->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_post_info_line_height = new QodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_line_height",
	$blog_slider_post_info_in_bottom_post_info_line_height
);

$blog_slider_post_info_in_bottom_post_info_text_transform = new QodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	$blog_slider_post_info_in_bottom_post_info_text_transform
);

$blog_slider_post_info_in_bottom_post_info_font_family = new QodeField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_family",
	$blog_slider_post_info_in_bottom_post_info_font_family
);

$blog_slider_post_info_in_bottom_post_info_font_style = new QodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_style",
	$blog_slider_post_info_in_bottom_post_info_font_style
);

$row3 = new QodeRow();
$group27->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_post_info_font_weight = new QodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	$blog_slider_post_info_in_bottom_post_info_font_weight
);

$blog_slider_post_info_in_bottom_post_info_letter_spacing = new QodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	$blog_slider_post_info_in_bottom_post_info_letter_spacing
);
