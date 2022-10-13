<?php

/*** Removing shortcodes ***/

vc_remove_element("vc_widget_sidebar");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_gmaps");
vc_remove_element("vc_btn");
vc_remove_element("vc_cta");
vc_remove_element("vc_round_chart");
vc_remove_element("vc_line_chart");
vc_remove_element("vc_tta_accordion");
vc_remove_element("vc_tta_tour");
vc_remove_element("vc_tta_tabs");
vc_remove_element("vc_section");

/***Remove Grid Elements if disabled ***/

if (!brick_qode_vc_grid_elements_enabled() && version_compare(brick_qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_element('vc_basic_grid');
	vc_remove_element('vc_media_grid');
	vc_remove_element('vc_masonry_grid');
	vc_remove_element('vc_masonry_media_grid');
	vc_remove_element('vc_icon');
	vc_remove_element('vc_button2');
	vc_remove_element("vc_custom_heading");
}


/*** Remove unused parameters ***/

if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_single_image', 'title');
	vc_remove_param('vc_gallery', 'title');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param( "vc_row", "css" );
	vc_remove_param( "vc_row_inner", "css" );
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_tabs', 'title');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'title_align');
	vc_remove_param('vc_accordion', 'title');
	vc_remove_param('vc_row', 'equal_height');
	vc_remove_param('vc_row', 'columns_placement');
	vc_remove_param('vc_row', 'gap');
	vc_remove_param('vc_row', 'parallax_speed_video');
	vc_remove_param('vc_row', 'parallax_speed_bg');
	vc_remove_param('vc_row_inner', 'equal_height');
	vc_remove_param('vc_row_inner', 'columns_placement');
	vc_remove_param('vc_row_inner', 'gap');
	vc_remove_param('vc_row_inner', 'disable_element');
	vc_remove_param('vc_row', 'disable_element');
	vc_remove_param('vc_row', 'css_animation');
        vc_remove_param('vc_text_separator', 'add_icon');
        vc_remove_param('vc_text_separator', 'vc_icon');
        vc_remove_param('vc_text_separator', 'i_icon_material');
        vc_remove_param('vc_text_separator', 'i_icon_monosocial');
        vc_remove_param('vc_text_separator', 'i_type');
        vc_remove_param('vc_text_separator', 'i_icon_fontawesome');
        vc_remove_param('vc_text_separator', 'i_icon_openiconic');
        vc_remove_param('vc_text_separator', 'i_icon_typicons');
        vc_remove_param('vc_text_separator', 'i_icon_entypo');
        vc_remove_param('vc_text_separator', 'i_icon_linecons');
        vc_remove_param('vc_text_separator', 'i_color');
        vc_remove_param('vc_text_separator', 'i_custom_color');
        vc_remove_param('vc_text_separator', 'i_background_color');
        vc_remove_param('vc_text_separator', 'i_background_style');
        vc_remove_param('vc_text_separator', 'i_custom_background_color');
        vc_remove_param('vc_text_separator', 'i_size');
        vc_remove_param('vc_text_separator', 'i_css_animation');
	
	
	

    //remove vc parallax functionality
    vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');

	if(version_compare(brick_qode_get_vc_version(), '4.4.2') >= 0) {
		vc_remove_param('vc_accordion', 'disable_keyboard');
		vc_remove_param('vc_separator', 'align');
		vc_remove_param('vc_separator', 'border_width');
		vc_remove_param('vc_text_separator', 'align');
		vc_remove_param('vc_text_separator', 'border_width');
	}
    if(version_compare(brick_qode_get_vc_version(), '4.7.4') >= 0) {
		add_action( 'init', 'brick_qode_remove_vc_image_zoom',11);
		function brick_qode_remove_vc_image_zoom() {
			//Remove zoom from click action on single image
			$param = WPBMap::getParam( 'vc_single_image', 'onclick' );
			unset($param['value']['Zoom']);
			vc_update_shortcode_param( 'vc_single_image', $param );
		}
		vc_remove_param('vc_text_separator', 'css');
		vc_remove_param('vc_separator', 'css');
	}
}


/*** Remove unused parameters from grid elements ***/

if (function_exists('vc_remove_param') && brick_qode_vc_grid_elements_enabled() && version_compare(brick_qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_param('vc_basic_grid', 'button_style');
	vc_remove_param('vc_basic_grid', 'button_color');
	vc_remove_param('vc_basic_grid', 'button_size');
	vc_remove_param('vc_basic_grid', 'filter_color');
	vc_remove_param('vc_basic_grid', 'filter_style');
	vc_remove_param('vc_media_grid', 'button_style');
	vc_remove_param('vc_media_grid', 'button_color');
	vc_remove_param('vc_media_grid', 'button_size');
	vc_remove_param('vc_media_grid', 'filter_color');
	vc_remove_param('vc_media_grid', 'filter_style');
	vc_remove_param('vc_masonry_grid', 'button_style');
	vc_remove_param('vc_masonry_grid', 'button_color');
	vc_remove_param('vc_masonry_grid', 'button_size');
	vc_remove_param('vc_masonry_grid', 'filter_color');
	vc_remove_param('vc_masonry_grid', 'filter_style');
	vc_remove_param('vc_masonry_media_grid', 'button_style');
	vc_remove_param('vc_masonry_media_grid', 'button_color');
	vc_remove_param('vc_masonry_media_grid', 'button_size');
	vc_remove_param('vc_masonry_media_grid', 'filter_color');
	vc_remove_param('vc_masonry_media_grid', 'filter_style');
	vc_remove_param('vc_basic_grid', 'paging_color');
	vc_remove_param('vc_basic_grid', 'arrows_color');
	vc_remove_param('vc_media_grid', 'paging_color');
	vc_remove_param('vc_media_grid', 'arrows_color');
	vc_remove_param('vc_masonry_grid', 'paging_color');
	vc_remove_param('vc_masonry_grid', 'arrows_color');
	vc_remove_param('vc_masonry_media_grid', 'paging_color');
	vc_remove_param('vc_masonry_media_grid', 'arrows_color');
}


/*** Remove frontend editor ***/

if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}

/*** Restore Tabs&Accordion from Deprecated category ***/

$vc_map_deprecated_settings = array (
	'deprecated' => false,
	'category' => esc_html__( 'Content', 'brick' )
);
vc_map_update( 'vc_accordion', $vc_map_deprecated_settings );
vc_map_update( 'vc_tabs', $vc_map_deprecated_settings );
vc_map_update( 'vc_tab', array('deprecated' => false) );
vc_map_update( 'vc_accordion_tab', array('deprecated' => false) );

$animations = array(
	esc_html__( "No animations", 'brick' ) => "",
	esc_html__( "Elements Shows From Left Side", 'brick' ) => "element_from_left",
	esc_html__( "Elements Shows From Right Side", 'brick' ) => "element_from_right",
	esc_html__( "Elements Shows From Top Side", 'brick' ) => "element_from_top",
	esc_html__( "Elements Shows From Bottom Side", 'brick' ) => "element_from_bottom",
	esc_html__( "Elements Shows From Fade", 'brick' ) => "element_from_fade"
);
$font_weight_array = array(
	esc_html__( "Default", 'brick' ) => "",
	esc_html__( "Thin 100", 'brick' ) => "100",
	esc_html__( "Extra-Light 200", 'brick' ) => "200",
	esc_html__( "Light 300", 'brick' ) => "300",
	esc_html__( "Regular 400", 'brick' ) => "400",
	esc_html__( "Medium 500", 'brick' ) => "500",
	esc_html__( "Semi-Bold 600", 'brick' ) => "600",
	esc_html__( "Bold 700", 'brick' ) => "700",
	esc_html__( "Extra-Bold 800", 'brick' ) => "800",
	esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
);
$social_icons_array = array(
	"" => "",
	esc_html__( "ADN", 'brick' ) => "fa-adn",
	esc_html__( "Android", 'brick' ) => "fa-android",
	esc_html__( "Apple", 'brick' ) => "fa-apple",
	esc_html__( "Bitbucket", 'brick' ) => "fa-bitbucket",
	esc_html__( "Bitbucket-Sign", 'brick' ) => "fa-bitbucket-sign",
	esc_html__( "Bitcoin", 'brick' ) => "fa-bitcoin",
	esc_html__( "BTC", 'brick' ) => "fa-btc",
	esc_html__( "CSS3", 'brick' ) => "fa-css3",
	esc_html__( "Dribbble", 'brick' ) => "fa-dribbble",
	esc_html__( "Dropbox", 'brick' ) => "fa-dropbox",
	esc_html__( "Facebook", 'brick' ) => "fa-facebook",
	esc_html__( "Facebook-Sign", 'brick' ) => "fa-facebook-sign",
	esc_html__( "Flickr", 'brick' ) => "fa-flickr",
	esc_html__( "Foursquare", 'brick' ) => "fa-foursquare",
	esc_html__( "GitHub", 'brick' ) => "fa-github",
	esc_html__( "GitHub-Alt", 'brick' ) => "fa-github-alt",
	esc_html__( "GitHub-Sign", 'brick' ) => "fa-github-sign",
	esc_html__( "Gittip", 'brick' ) => "fa-gittip",
	esc_html__( "Google Plus", 'brick' ) => "fa-google-plus",
	esc_html__( "Google Plus-Sign", 'brick' ) => "fa-google-plus-sign",
	esc_html__( "HTML5", 'brick' ) => "fa-html5",
	esc_html__( "Instagram", 'brick' ) => "fa-instagram",
	esc_html__( "LinkedIn", 'brick' ) => "fa-linkedin",
	esc_html__( "LinkedIn-Sign", 'brick' ) => "fa-linkedin-sign",
	esc_html__( "Linux", 'brick' ) => "fa-linux",
	esc_html__( "MaxCDN", 'brick' ) => "fa-maxcdn",
	esc_html__( "Paypal", 'brick' ) => "fa-paypal",
	esc_html__( "Pinterest", 'brick' ) => "fa-pinterest",
	esc_html__( "Pinterest-Sign", 'brick' ) => "fa-pinterest-sign",
	esc_html__( "Renren", 'brick' ) => "fa-renren",
	esc_html__( "Skype", 'brick' ) => "fa-skype",
	esc_html__( "StackExchange", 'brick' ) => "fa-stackexchange",
	esc_html__( "Trello", 'brick' ) => "fa-trello",
	esc_html__( "Tumblr", 'brick' ) => "fa-tumblr",
	esc_html__( "Tumblr-Sign", 'brick' ) => "fa-tumblr-sign",
	esc_html__( "Twitter", 'brick' ) => "fa-twitter",
	esc_html__( "Twitter-Sign", 'brick' ) => "fa-twitter-sign",
	esc_html__( "VK", 'brick' ) => "fa-vk",
	esc_html__( "Weibo", 'brick' ) => "fa-weibo",
	esc_html__( "Windows", 'brick' ) => "fa-windows",
	esc_html__( "Xing", 'brick' ) => "fa-xing",
	esc_html__( "Xing-Sign", 'brick' ) => "fa-xing-sign",
	esc_html__( "YouTube", 'brick' ) => "fa-youtube",
	esc_html__( "YouTube Play", 'brick' ) => "fa-youtube-play",
	esc_html__( "YouTube-Sign", 'brick' ) => "fa-youtube-sign"
);

/*** Accordion ***/

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Style", 'brick' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Accordion", 'brick' ) => "accordion",
		esc_html__( "Toggle", 'brick' ) => "toggle",
        esc_html__( "Boxed Accordion", 'brick' ) => "boxed_accordion",
        esc_html__( "Boxed Toggle", 'brick' ) => "boxed_toggle"
	),
	'save_always' => 'true'
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"heading" => esc_html__( "Accordion Title Border Radius", 'brick' ),
	"param_name" => "accordion_section_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('boxed_accordion', 'boxed_toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"heading" => esc_html__( "Accordion Mark Border Radius", 'brick' ),
	"param_name" => "accordion_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"heading" => esc_html__( "Accordion Title Height", 'brick' ),
	"param_name" => "accordion_section_height",
	"value" => ""
));

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Hide Icon", 'brick' ),
	"param_name" => "hide_icon",
	"value" => array(
		esc_html__( "Yes", 'brick' ) => "yes",
		esc_html__( "No", 'brick' ) => "no"),
	'save_always' => 'true'
));
vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Title Alignment", 'brick' ),
	"param_name" => "title_alignment",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'brick' ) => "left",
		esc_html__( "Right", 'brick' ) => "right",
		"Center" => "center",
		),
	'save_always' => 'true',
	"dependency" => Array('element' => "hide_icon", 'value' => "yes")
));

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Title and Icon Alignment", 'brick' ),
	"param_name" => "title_icon_alignment",
	"value" => array(
		"" => "",
		esc_html__( "Icon on Left", 'brick' ) => "icon_left",
		esc_html__( "Text on Left", 'brick' ) => "text_left"
		),
	"description" => esc_html__( "This option is only used for boxed accordions.", 'brick' ),
	"dependency" => Array('element' => "hide_icon", 'value' => "no")
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Color", 'brick' ),
	"param_name" => "title_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Hover Color", 'brick' ),
	"param_name" => "title_hover_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Mark Icon Color", 'brick' ),
	"param_name" => "mark_icon_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Mark Icon Hover Color", 'brick' ),
	"param_name" => "mark_icon_color_hover",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Background Color", 'brick' ),
	"param_name" => "background_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'brick' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Background Hover Color", 'brick' ),
	"param_name" => "background_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'brick' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Border Color", 'brick' ),
	"param_name" => "border_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'brick' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Border Hover Color", 'brick' ),
	"param_name" => "border_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'brick' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "dropdown",
    "heading" => esc_html__( "Title Tag", 'brick' ),
    "param_name" => "title_tag",
    "value" => array(
        ""   => "",
		esc_html__( "p", 'brick' ) => "p",
        esc_html__( "h2", 'brick' ) => "h2",
        esc_html__( "h3", 'brick' ) => "h3",
        esc_html__( "h4", 'brick' ) => "h4",
        esc_html__( "h5", 'brick' ) => "h5",
        esc_html__( "h6", 'brick' ) => "h6",
    )
));


/*** Tabs ***/

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Style", 'brick' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Horizontal Center", 'brick' ) => "horizontal",
		esc_html__( "Horizontal Center With Icons", 'brick' ) => "horizontal_with_icons",
		esc_html__( "Horizontal Left", 'brick' ) => "horizontal_left",
		esc_html__( "Horizontal Left With Icons", 'brick' ) => "horizontal_left_with_icons",
		esc_html__( "Horizontal Right", 'brick' ) => "horizontal_right",
		esc_html__( "Horizontal Right With Icons", 'brick' ) => "horizontal_right_with_icons",
		esc_html__( "Vertical Left", 'brick' ) => "vertical_left",
		esc_html__( "Vertical Left With Icons", 'brick' ) => "vertical_left_with_icons",
		esc_html__( "Vertical Right", 'brick' ) => "vertical_right",
        esc_html__( "Vertical Right With Icons", 'brick' ) => "vertical_right_with_icons"
	),
	'save_always' => 'true'
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Tab Type", 'brick' ),
	"param_name" => "tab_type_default",
	"value" => array(
		esc_html__( "Default", 'brick' ) => "default",
		esc_html__( "With Borders", 'brick' ) => "with_borders"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "style", 'value' => array('horizontal','horizontal_left','horizontal_right', 'vertical_left', 'vertical_right'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Tab Type", 'brick' ),
	"param_name" => "tab_type_icons",
	"value" => array(
		esc_html__( "Default", 'brick' ) => "default",
		esc_html__( "With Borders", 'brick' ) => "with_borders",
		esc_html__( "With Lines", 'brick' ) => "with_lines"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons', 'vertical_left_with_icons', 'vertical_right_with_icons'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Border Type", 'brick' ),
	"param_name" => "border_type_default",
	"value" => array(
		esc_html__( "Border Arround Tabs", 'brick' ) => "border_arround_element",
		esc_html__( "Border Arround Active Tab", 'brick' ) => "border_arround_active_tab"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Border Type", 'brick' ),
	"param_name" => "border_type_icons",
	"value" => array(
		esc_html__( "Border Arround Tabs", 'brick' ) => "border_arround_element",
		esc_html__( "Border Arround Active Tab", 'brick' ) => "border_arround_active_tab"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "tab_type_icons", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Margin Between Tabs", 'brick' ),
	"param_name" => "margin_between_tabs",
	"value" => array(
		esc_html__( "Yes", 'brick' ) => "enable_margin",
		esc_html__( "No", 'brick' ) => "disable_margin"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "border_type_default", 'value' => array('border_arround_element'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Margin Between Tabs", 'brick' ),
	"param_name" => "icons_margin_between_tabs",
	"value" => array(
		esc_html__( "Yes", 'brick' ) => "enable_margin",
		esc_html__( "No", 'brick' ) => "disable_margin"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "border_type_icons", 'value' => array('border_arround_element'))
));

vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "heading" => esc_html__( "Space Between Tab and Content (px)", 'brick' ),
    "param_name" => "space_between_tab_and_content",
    "value" => "",
    "description" => esc_html__( "Insert value for space between Tab and Content (default value is 18px)", 'brick' ),
    "dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons','horizontal','horizontal_left','horizontal_right'))
));


vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "heading" => esc_html__( "Border Radius (px)", 'brick' ),
    "param_name" => "tab_border_radius",
    "value" => ""
));

vc_add_param("vc_tab", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Icon Pack", 'brick' ),
    "param_name" => brick_qode_icon_collections()->iconPackParamName,
    "value" => brick_qode_icon_collections()->getIconCollectionsVC(),
	'save_always' => 'true'
));

foreach (brick_qode_icon_collections()->iconCollections as $collection_key => $collection ) {
    vc_add_param("vc_tab", array(
        "type" => "dropdown",
        "heading" => esc_html__( "Icon", 'brick' ),
        "param_name" => $collection->param,
        "value" => $collection->getIconsArray(),
		'save_always' => 'true',
        "dependency" => Array('element' => brick_qode_icon_collections()->iconPackParamName, 'value' => array($collection_key))
    ));
}


/*** Flickr Widget ***/

vc_add_param("vc_flickr", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Columns", 'brick' ),
    "param_name" => "columns",
    "value" => array(
        esc_html__( "Two", 'brick' ) => "two",
        esc_html__( "Three", 'brick' ) => "three",
        esc_html__( "Four", 'brick' ) => "four"
    ),
	'save_always' => 'true'
));


/*** Empty Space ***/

vc_add_param("vc_empty_space",  array(
        "type" => "attach_image",
        'heading' => esc_html__( 'Background Image', 'brick' ),
        'param_name' => 'background_image',
        'value' => '',
        'description' => esc_html__( 'Select image from media library.', 'brick' )
    )
);
vc_add_param("vc_empty_space",  array(
        "type" => "dropdown",
        'heading' => esc_html__( 'Image Repeat', 'brick' ),
        'param_name' => 'image_repeat',
        "value" => array(
            esc_html__( 'No Repeat', 'brick' ) => 'no-repeat',
            esc_html__( 'Repeat x', 'brick' ) => 'repeat-x',
            esc_html__( 'Repeat y', 'brick' ) => 'repeat-y',
            esc_html__( 'Repeat (x y)', 'brick' ) => 'repeat'
        ),
		'save_always' => 'true'
    )
);

/*** Gallery ***/

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Column Number", 'brick' ),
	"param_name" => "column_number",
	 "value" => array(2, 3, 4, 5, "Disable" => 0),
	'save_always' => 'true',
	 "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Grayscale Images", 'brick' ),
    "param_name" => "grayscale",
    "value" => array(
    	esc_html__( 'No', 'brick' ) => 'no',
	    esc_html__( 'Yes', 'brick' ) => 'yes'
    ),
	'save_always' => 'true',
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Frame", 'brick' ),
    "param_name" => "frame",
	"value" => array(
		'' => '',
		esc_html__( 'Yes', 'brick' ) => 'use_frame',
		esc_html__( 'No', 'brick' ) => 'no'
	),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide'))
));

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Choose Frame", 'brick' ),
	"param_name" => "choose_frame",
	"value" => array(
		esc_html__( 'Default', 'brick' ) => 'default',
		esc_html__( 'Frame 1', 'brick' ) => 'frame1',
		esc_html__( 'Frame 2', 'brick' ) => 'frame2',
		esc_html__( 'Frame 3', 'brick' ) => 'frame3',
		esc_html__( 'Frame 4', 'brick' ) => 'frame4'
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "frame", 'value' => array('use_frame'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "heading" => esc_html__( "Show image title?", 'brick' ),
    "param_name" => "show_image_title",
    "value" => array("Show image title in the bottom of image" => "show_image_title"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "heading" => esc_html__( "Disable navigation arrows?", 'brick' ),
    "param_name" => "disable_navigation_arrows",
    "value" => array("Disable navigation arrows" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "heading" => esc_html__( "Show navigation controls?", 'brick' ),
    "param_name" => "show_navigation_controls",
    "value" => array("Show navigation controls" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Title Alignment", 'brick' ),
    "param_name" => "title_alignment",
    "value" => array(
        esc_html__( "Left", 'brick' ) => "left",
        esc_html__( "Center", 'brick' ) => "center",
        esc_html__( "Right", 'brick' ) => "right"
    ),
	'save_always' => 'true',
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "heading" => esc_html__( "Title Font Family", 'brick' ),
    "param_name" => "title_font_family",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "heading" => esc_html__( "Title Font Size (px)", 'brick' ),
    "param_name" => "title_font_size",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Title Font Weight", 'brick' ),
    "param_name" => "title_font_weight",
    "value" => array(
        esc_html__( "Default", 'brick' ) => "",
        esc_html__( "Thin 100", 'brick' ) => "100",
        esc_html__( "Extra-Light 200", 'brick' ) => "200",
        esc_html__( "Light 300", 'brick' ) => "300",
        esc_html__( "Regular 400", 'brick' ) => "400",
        esc_html__( "Medium 500", 'brick' ) => "500",
        esc_html__( "Semi-Bold 600", 'brick' ) => "600",
        esc_html__( "Bold 700", 'brick' ) => "700",
        esc_html__( "Extra-Bold 800", 'brick' ) => "800",
        esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Title Font Style", 'brick' ),
    "param_name" => "title_font_style",
    "value" => array(
        "" 		   => "",
        esc_html__( "Normal", 'brick' ) => "normal",
        esc_html__( "Italic", 'brick' ) => "italic"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Title Layer Color", 'brick' ),
    "param_name" => "title_layer_color",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Background hover color", 'brick' ),
    "param_name" => "background_hover_color",
    "value" => "",
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Choose hover icon", 'brick' ),
    "param_name" => "hover_icon",
    "value" => array(
    	esc_html__( 'None', 'brick' ) => 'none',
	    esc_html__( 'Magnifier', 'brick' ) => 'magnifier',
	    esc_html__( 'Plus', 'brick' ) => 'plus'
    ),
	'save_always' => 'true',
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Spaces between images", 'brick' ),
    "param_name" => "images_space",
    "value" => array(
    	esc_html__( 'No', 'brick' ) => 'gallery_without_space',
	    esc_html__( 'Yes', 'brick' ) => 'gallery_with_space'
    ),
	'save_always' => 'true',
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));



/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'brick' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'brick' ) => "row",
		esc_html__( "Parallax", 'brick' ) => "parallax",
		esc_html__( "Expandable", 'brick' ) => "expandable",
		esc_html__( "Content menu", 'brick' ) => "content_menu"
	),
	'save_always' => 'true'
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Use Row as Full Screen Section", 'brick' ),
	"param_name" => "use_row_as_full_screen_section",
	"value" => array(
		esc_html__( "No", 'brick' ) => "no",
		esc_html__( "Yes", 'brick' ) => "yes"
	),
	'save_always' => 'true',
	"description" => esc_html__( "This option works only for Full Screen Sections Template", 'brick' ),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Type", 'brick' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'brick' ) => "full_width",
		esc_html__( "In Grid", 'brick' ) => "grid"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','content_menu'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Header Style", 'brick' ),
    "param_name" => "header_style",
    "value" => array(
        "" => "",
        esc_html__( "Light", 'brick' ) => "light",
        esc_html__( "Dark", 'brick' ) => "dark"
    ),
	'save_always' => 'true',
    "dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Anchor ID (Example home)", 'brick' ),
	"param_name" => "anchor",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Row in content menu", 'brick' ),
	"value" => array("Use row for content menu?" => "in_content_menu"),
	"param_name" => "in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable', 'expandable_with_background'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Content menu title", 'brick' ),
	"value" => "",
	"param_name" => "content_menu_title",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Content menu icon pack", 'brick' ),
	"param_name" => brick_qode_icon_collections()->iconPackParamName,
	"value" => brick_qode_icon_collections()->getIconCollectionsVC(),
	'save_always' => 'true',
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

foreach(brick_qode_icon_collections()->iconCollections as $collection_key => $collection) {
    vc_add_param("vc_row", array(
        "type" => "dropdown",
        "heading" => esc_html__( "Content menu icon", 'brick' ),
        "param_name" => "content_menu_".$collection->param,
        "value" => $collection->getIconsArray(),
		'save_always' => 'true',
        "dependency" => Array('element' => brick_qode_icon_collections()->iconPackParamName, 'value' => array($collection_key))
    ));
}

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Text Align", 'brick' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'brick' ) => "left",
		esc_html__( "Center", 'brick' ) => "center",
		esc_html__( "Right", 'brick' ) => "right"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));


vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Video background", 'brick' ),
	"value" => array(
		esc_html__( "No", 'brick' ) => "",
		esc_html__( "Yes", 'brick' ) => "show_video"
	),
	"param_name" => "video",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Video overlay", 'brick' ),
	"value" => array(
		esc_html__( "No", 'brick' ) => "",
		esc_html__( "Yes", 'brick' ) => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Video overlay image (pattern)", 'brick' ),
	"value" => "",
	"param_name" => "video_overlay_image",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Video background (webm) file url", 'brick' ),
	"value" => "",
	"param_name" => "video_webm",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Video background (mp4) file url", 'brick' ),
	"value" => "",
	"param_name" => "video_mp4",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Video background (ogv) file url", 'brick' ),
	"value" => "",
	"param_name" => "video_ogv",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Video preview image", 'brick' ),
	"value" => "",
	"param_name" => "video_image",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Background image", 'brick' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Pattern background", 'brick' ),
	"value" => array("Use background image as pattern?" => "pattern_background"),
	"param_name" => "pattern_background",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Full Screen Height", 'brick' ),
    "param_name" => "full_screen_section_height",
    "value" => array(
        esc_html__( "No", 'brick' ) => "no",
        esc_html__( "Yes", 'brick' ) => "yes"
    ),
	'save_always' => 'true',
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Vertically Align Content In Middle", 'brick' ),
    "param_name" => "vertically_align_content_in_middle",
    "value" => array(
        esc_html__( "No", 'brick' ) => "no",
        esc_html__( "Yes", 'brick' ) => "yes"
    ),
	'save_always' => 'true',
    "dependency" => array('element' => 'full_screen_section_height', 'value' => 'yes')
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Section height", 'brick' ),
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Use as box", 'brick' ),
	"value" => array("Use row as box" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "textfield",
    "heading" => esc_html__( "Parallax speed", 'brick' ),
    "param_name" => "parallax_speed",
    "value" => "",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Background color", 'brick' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Show logo", 'brick' ),
	"value" => array("Show logo in content menu" => "logo_in_content_menu"),
	"param_name" => "logo_in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Custom widget area", 'brick' ),
	"param_name" => "custom_widget_area",
	"value" => array_merge(array('' => ''), brick_qode_get_custom_sidebars()),
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Show Border Bottom", 'brick' ),
	"value" => array("Show border bottom on content menu?" => "yes"),
	"param_name" => "content_menu_border_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Content Menu Border Color", 'brick' ),
	"param_name" => "content_menu_border_color",
	"value" => "",
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Content Menu Border Style", 'brick' ),
	"param_name" => "content_menu_border_style",
	"value" => array(
		esc_html__( "Solid", 'brick' ) => "solid",
		esc_html__( "Dashed", 'brick' ) => "dashed",
		esc_html__( "Dotted", 'brick' ) => "dotted"
		),
	'save_always' => 'true',
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Border Top Color", 'brick' ),
	"param_name" => "border_top_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Border Bottom Color", 'brick' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding", 'brick' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Padding (left/right in pixels or percentage. Put number and px or %. Ex. 30% or 30px)", 'brick' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
    "heading" => esc_html__( "Padding Top (px)", 'brick' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
    "heading" => esc_html__( "Padding Bottom (px)", 'brick' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Label Color", 'brick' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Label Hover Color", 'brick' ),
	"param_name" => "hover_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "More Label", 'brick' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Expand Section", 'brick' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Less Label", 'brick' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Contract Section", 'brick' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Label Position", 'brick' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'brick' ) => "left",
		esc_html__( "Right", 'brick' ) => "right",
		esc_html__( "Center", 'brick' ) => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => esc_html__( "CSS Animation", 'brick' ),
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => $animations,
	'save_always' => 'true',
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (ms)", 'brick' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "css_animation", "not_empty" => true)
 
));

vc_add_param("vc_row",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Duration of Animation(ms)", 'brick' ),
	"param_name" => "animation_duration",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "css_animation", "not_empty" => true)
 
));

vc_add_param("vc_row",  array(
    "type" => "dropdown",
    "heading" => esc_html__( "Box Shadow on Row", 'brick' ),
    "param_name" => "box_shadow_on_row",
    "value" => array(
        esc_html__( "No", 'brick' ) => "no",
        esc_html__( "Yes", 'brick' ) => "yes"
    ),
	'save_always' => 'true',
    "dependency" => array("element" => "row_type", "value" => array("row"))
));

vc_add_param("vc_row",  array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Shadow Color", 'brick' ),
    "param_name" => "box_shadow_color",
    "value" => "",
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
  
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Horizontal Offset (px)", 'brick' ),
    "param_name" => "horizontal_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Vertical Offset (px)", 'brick' ),
    "param_name" => "vertical_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Blur (px)", 'brick' ),
    "param_name" => "box_shadow_blur",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Spread (px)", 'brick' ),
    "param_name" => "box_shadow_spread",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));


/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'brick' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'brick' ) => "row",
		esc_html__( "Parallax", 'brick' ) => "parallax",
		esc_html__( "Expandable", 'brick' ) => "expandable"
	),
	'save_always' => 'true'
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Type", 'brick' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'brick' ) => "full_width",
		esc_html__( "In Grid", 'brick' ) => "grid"
	),
	'save_always' => 'true',
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Use Row as Full Screen Section Slide", 'brick' ),
    "param_name" => "use_row_as_full_screen_section_slide",
    "value" => array(
        esc_html__( "No", 'brick' ) => "no",
        esc_html__( "Yes", 'brick' ) => "yes"
    ),
	'save_always' => 'true',
    "description" => esc_html__( "This option works only for Full Screen Sections Template", 'brick' ),
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "checkbox",
    "heading" => esc_html__( "Use as box", 'brick' ),
    "value" => array("Use row as box" => "use_row_as_box" ),
    "param_name" => "use_as_box",
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Border Radius(px)", 'brick' ),
	"param_name" => "row_box_border_radius",
	"value" => "",
	"dependency" => Array('element' => "use_as_box", 'value' => array('use_row_as_box'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Anchor ID", 'brick' ),
	"param_name" => "anchor",
	"value" => ""
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Text Align", 'brick' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'brick' ) => "left",
		esc_html__( "Center", 'brick' ) => "center",
		esc_html__( "Right", 'brick' ) => "right"
	),
	'save_always' => 'true'
	
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Background color", 'brick' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Background image", 'brick' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Border color", 'brick' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding", 'brick' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Left and right spacing in pixels", 'brick' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding Top", 'brick' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding Bottom", 'brick' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "More Button Label", 'brick' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Less Button Label", 'brick' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Button Position", 'brick' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'brick' ) => "left",
		esc_html__( "Right", 'brick' ) => "right",
		esc_html__( "Center", 'brick' ) => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Color", 'brick' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'brick' ),
	"param_name" => "css_animation",
	"admin_label" => true,
	"value" => $animations,
	'save_always' => 'true',
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
 
));

vc_add_param("vc_row_inner",  array(
  "type" => "textfield",
  "heading" => esc_html__( "Transition delay (ms)", 'brick' ),
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row_inner",  array(
    "type" => "dropdown",
    "heading" => esc_html__( "Box Shadow on Row", 'brick' ),
    "param_name" => "box_shadow_on_row",
    "value" => array(
        esc_html__( "No", 'brick' ) => "no",
        esc_html__( "Yes", 'brick' ) => "yes"
    ),
	'save_always' => 'true',
    "dependency" => array("element" => "row_type", "value" => array("row"))
));

vc_add_param("vc_row_inner",  array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Shadow Color", 'brick' ),
    "param_name" => "box_shadow_color",
    "value" => "",
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
  
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Horizontal Offset (px)", 'brick' ),
    "param_name" => "horizontal_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Vertical Offset (px)", 'brick' ),
    "param_name" => "vertical_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Blur (px)", 'brick' ),
    "param_name" => "box_shadow_blur",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Spread (px)", 'brick' ),
    "param_name" => "box_shadow_spread",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'brick' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));


/*** Separator ***/

$separator_setting = array (
  'show_settings_on_create' => true,
  "controls"	=> '',
);
vc_map_update('vc_separator', $separator_setting);

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Type", 'brick' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Normal", 'brick' ) => "normal",
		esc_html__( "Transparent", 'brick' ) => "transparent",
		esc_html__( "Small", 'brick' ) => "small",
	),
	'save_always' => 'true'
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Position", 'brick' ),
	"param_name" => "position",
	"value" => array(
		esc_html__( "Center", 'brick' ) => "center",
		esc_html__( "Left", 'brick' ) => "left",
		esc_html__( "Right", 'brick' ) => "right"
	),
	'save_always' => 'true',
    "dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Color", 'brick' ),
	"param_name" => "color",
	"value" => "",
    "dependency" => array("element" => "type", "value" => array("small", "normal"))
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Border Style", 'brick' ),
	"param_name" => "border_style",
	"value" => array(
		"" => "",
		esc_html__( "Dashed", 'brick' ) => "dashed",
		esc_html__( "Solid", 'brick' ) => "solid",
        esc_html__( "Dotted", 'brick' ) => "dotted"
    )
));

vc_add_param("vc_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Width (px)", 'brick' ),
    "param_name" => "width",
    "value" => "",
	"dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Thickness (px)", 'brick' ),
	"param_name" => "thickness",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Top Margin (px)", 'brick' ),
	"param_name" => "up",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Bottom Margin  (px)", 'brick' ),
	"param_name" => "down",
	"value" => ""
));


/*** Separator With Text ***/

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Title Color", 'brick' ),
    "param_name" => "title_color",
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Title Font size (px)", 'brick' ),
    "param_name" => 'title_size',
    "value" => ""
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Text In Box", 'brick' ),
    "param_name" => "text_in_box",
    "value" => array(
        esc_html__( "Yes", 'brick' ) => "yes",
        esc_html__( "No", 'brick' ) => "no"
    ),
	'save_always' => 'true'
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Text Position", 'brick' ),
    "param_name" => "text_position",
    "value" => array(
        esc_html__( "Center", 'brick' ) => "center",
        esc_html__( "Left", 'brick' ) => "left",
        esc_html__( "Right", 'brick' ) => "right"
    ),
	'save_always' => 'true'
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Height (px)", 'brick' ),
    "param_name" => 'box_height',
    "value" => "",
    "description" => esc_html__( "Insert height for a shape around the text", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Left/right Padding (px)", 'brick' ),
    "param_name" => 'box_padding',
    "value" => "",
    "description" => esc_html__( "Insert size for a padding on left and right side of text", 'brick' ),
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Background Color", 'brick' ),
    "param_name" => "box_background_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Border Width (px)", 'brick' ),
    "param_name" => "box_border_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'brick' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Border Color", 'brick' ),
    "param_name" => "box_border_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Border radius (px)", 'brick' ),
    "param_name" => "box_border_radius",
    "description" => esc_html__( "Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default. ", 'brick' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Box Border Style", 'brick' ),
    "param_name" => "box_border_style",
    "value" => array(
        esc_html__( "Solid", 'brick' ) => "solid",
        esc_html__( "Dashed", 'brick' ) => "dashed",
        esc_html__( "Dotted", 'brick' ) => "dotted",
        esc_html__( "Transparent", 'brick' ) => "transparent"
    ),
	'save_always' => 'true',
    "description" => esc_html__( "Choose a style for the separator line", 'brick' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Line Color", 'brick' ),
    "param_name" => "line_color",
    "value" => "",
    "description" => esc_html__( "Choose a color for the separator line", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Line Width (px)", 'brick' ),
    "param_name" => "line_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Line Thickness (px)", 'brick' ),
    "param_name" => "line_thickness",
    "value" => "",
    "description" => esc_html__( "Insert thickness for the separator line", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Separator Line Style", 'brick' ),
    "param_name" => "line_border_style",
    "value" => array(
        esc_html__( "Solid", 'brick' ) => "solid",
        esc_html__( "Dashed", 'brick' ) => "dashed",
        esc_html__( "Dotted", 'brick' ) => "dotted",
        esc_html__( "Transparent", 'brick' ) => "transparent"
    ),
	'save_always' => 'true',
    "description" => esc_html__( "Choose a style for the separator line", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Top Margin (px)", 'brick' ),
    "param_name" => "up",
    "value" => "",
    "description" => esc_html__( "Insert top margin for the separator", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Bottom Margin (px)", 'brick' ),
    "param_name" => "down",
    "value" => "",
    "description" => esc_html__( "Insert bottom margin for the separator", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Margins (px)", 'brick' ),
    "param_name" => "box_margin",
    "description" => esc_html__( "Insert left and right line margins", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Dots on line end ", 'brick' ),
    "param_name" => "line_dots",
    "value" => array(
        esc_html__( "No", 'brick' ) => "no",
        esc_html__( "Yes", 'brick' ) => "yes"
    ),
	'save_always' => 'true',
    "description" => esc_html__( "Insert icons on the end of the border", 'brick' )
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Dots Color", 'brick' ),
    "param_name" => "line_dots_color",
    "description" => esc_html__( "Insert dots color (default value is #b2b2b2)", 'brick' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "heading" => esc_html__( "Dots Size (px)", 'brick' ),
    "param_name" => "line_dots_size",
    "description" => esc_html__( "Insert dots size", 'brick' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));


/*** Single Image ***/

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'brick' ),
	"param_name" => "qode_css_animation",
	"admin_label" => true,
	"value" => $animations,
	'save_always' => 'true'
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (s)", 'brick' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "qode_css_animation", "not_empty" => true)
));

function brick_qode_add_open_prettyphoto() {
    //Get current values stored in the Link Target in "Single Image" element
    $param = WPBMap::getParam('vc_single_image', 'img_link_target');
    //Append new value to the 'value' array
    $param['value'][esc_html__('Open prettyPhoto', 'brick')] = 'open_prettyphoto';
    //Finally "mutate" param with new values
    WPBMap::mutateParam('vc_single_image', $param);
}
add_action('init', 'brick_qode_add_open_prettyphoto',11);


/*************************************
 	Mapping Shortcodes
 *************************************/


/*** Elements Holder ***/

class WPBakeryShortCode_No_Elements_Holder  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elements Holder', 'brick' ),
	"base" => "no_elements_holder",
	"as_parent" => array('only' => 'no_elements_holder_item'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-elements-holder extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background Color", 'brick' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Columns", 'brick' ),
			"param_name" => "number_of_columns",
			"value" => array(
				esc_html__( "1 Column", 'brick' ) => "one_column",
				esc_html__( "2 Columns", 'brick' ) => "two_columns",
				esc_html__( "3 Columns", 'brick' ) => "three_columns",
				esc_html__( "4 Columns", 'brick' ) => "four_columns",
				esc_html__( "5 Columns", 'brick' ) => "five_columns",
				esc_html__( "6 Columns", 'brick' ) => "six_columns"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__( "Items Float Left", 'brick' ),
			"param_name" => "items_float_left",
			"value" => array("Make Items Float Left?" => "yes")
		),
		array(
			"type" => "dropdown",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Switch to One Column", 'brick' ),
			"param_name" => "switch_to_one_column",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Below 1300px", 'brick' ) => "1300",
				esc_html__( "Below 1000px", 'brick' ) => "1000",
				esc_html__( "Below 768px", 'brick' ) => "768",
				esc_html__( "Below 600px", 'brick' ) => "600",
				esc_html__( "Below 480px", 'brick' ) => "480",
				esc_html__( "Never", 'brick' ) => "never"
			),
			"description" => esc_html__( "Choose on which stage item will be in one column", 'brick' )
		),
		array(
			"type" => "dropdown",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Choose Alignment In Responsive Mode", 'brick' ),
			"param_name" => "alignment_one_column",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Left", 'brick' ) => "left",
				esc_html__( "Center", 'brick' ) => "center",
				esc_html__( "Right", 'brick' ) => "right"
			),
			"description" => esc_html__( "Alignment When Items are in One Column", 'brick' )
		)
	)
) );


/*** Elements Holder Item ***/

class WPBakeryShortCode_No_Elements_Holder_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elements Holder Item', 'brick' ),
	"base" => "no_elements_holder_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider, no_carousel'),
	"as_child" => array('only' => 'no_elements_holder'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-elements-holder-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background Color", 'brick' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Background Image", 'brick' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Padding", 'brick' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Alignment", 'brick' ),
			"param_name" => "aligment",
			"value" => array(
				esc_html__( "Left", 'brick' ) => "left",
				esc_html__( "Right", 'brick' ) => "right",
				esc_html__( "Center", 'brick' ) => "center"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Vertical Alignment", 'brick' ),
			"param_name" => "vertical_alignment",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Top", 'brick' ) => "top",
				esc_html__( "Middle", 'brick' ) => "middle",
				esc_html__( "Bottom", 'brick' ) => "bottom"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Animation Name", 'brick' ),
			"param_name" => "animation_name",
			"value" => array(
				esc_html__( "No Animation", 'brick' ) => "",
				esc_html__( "Flip In", 'brick' ) => "flip_in",
				esc_html__( "Grow In", 'brick' ) => "grow_in",
				esc_html__( "X Rotate", 'brick' ) => "x_rotate",
				esc_html__( "Z Rotate", 'brick' ) => "z_rotate",
				esc_html__( "Y Translate", 'brick' ) => "y_translate",
				esc_html__( "Fade In", 'brick' ) => "fade_in",
				esc_html__( "Fade In Down", 'brick' ) => "fade_in_down",
				esc_html__( "Fade In Left X Rotate", 'brick' ) => "fade_in_left_x_rotate"
			)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Animation Delay (ms)", 'brick' ),
			"param_name" => "animation_delay",
			"value" => "",
			"dependency" => array('element' => "animation_name", 'value' => array('flip_in', 'grow_in', 'x_rotate','z_rotate','y_translate','fade_in', 'fade_in_down', 'fade_in_left_x_rotate'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Advanced Animations", 'brick' ),
			"param_name" => "advanced_animations",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Animation Start Position", 'brick' ),
			"param_name" => "start_position",
			"value" => array(
				esc_html__( 'Bottom of Page', 'brick' ) => 'bottom',
				esc_html__( 'Center of Page', 'brick' ) => 'center'
			),
			'save_always' => 'true',
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Start Animation Style", 'brick' ),
			"param_name" => "start_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Animation End Position", 'brick' ),
			"param_name" => "end_position",
			"value" => array(
				esc_html__( "Center of Page", 'brick' ) => "center",
				esc_html__( "Top of Page", 'brick' ) => "top-bottom"
			),
			'save_always' => 'true',
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "End Animation Style", 'brick' ),
			"param_name" => "end_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Padding on screen size between 1300px-1600px", 'brick' ),
			"param_name" => "item_padding_1300_1600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'brick' )
		),
		array(
			"type" => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Padding on screen size between 1000px-1300px", 'brick' ),
			"param_name" => "item_padding_1000_1300",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'brick' )
		),
		array(
			"type" => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Padding on screen size between 768px-1000px", 'brick' ),
			"param_name" => "item_padding_768_1000",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'brick' )
		),
		array(
			"type" => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Padding on screen size between 600px-768px", 'brick' ),
			"param_name" => "item_padding_600_768",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'brick' )
		),
		array(
			"type" => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Padding on screen size between 480px-600px", 'brick' ),
			"param_name" => "item_padding_480_600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'brick' )
		),
		array(
			"type" => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'brick' ),
			"heading" => esc_html__( "Padding on Screen Size Bellow 480px", 'brick' ),
			"param_name" => "item_padding_480",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'brick' )
		)
	)
) );


/*** Bordered Elements Holder ***/

class WPBakeryShortCode_No_Bordered_Elements_Holder extends WPBakeryShortCodesContainer {}
vc_map( array(
	'name' => esc_html__( 'Bordered Elements Holder', 'brick' ),
	'base' => 'no_bordered_elements_holder',
	'as_parent' => array('except' => 'vc_row'),
	'content_element' => true,
	'category' => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-bordered-elements-holder-item extended-custom-icon",
	'show_settings_on_create' => true,
	'js_view' => 'VcColumnView',
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Border Animation Type', 'brick' ),
			'param_name' => 'animation_type',
			'value' => array(
				esc_html__( 'No Animation', 'brick' ) => '',
				esc_html__( 'Continue Line', 'brick' ) => 'qode_box_continue_line',
				esc_html__( 'Corner Line', 'brick' ) => 'qode_box_corner_line',
				esc_html__( 'Simultaneous Line', 'brick' ) => 'qode_box_simultaneous_line'
			),
			'description' => esc_html__( 'Choose type of animation', 'brick' )
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Border Color', 'brick' ),
			'param_name' => 'border_color',
			'value' => ''
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Border Width (px)', 'brick' ),
			'param_name' => 'border_width',
			'value' => ''
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Duration of the Animation (s)', 'brick' ),
			'param_name' => 'animation_time',
			'value' => '',
			'description' => esc_html__( 'Default is 2 sec', 'brick' ),
			'dependency' => array('element' => 'animation_type', 'value' => array('qode_box_continue_line', 'qode_box_corner_line', 'qode_box_simultaneous_line'))
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Holder Padding (px)', 'brick' ),
			'param_name' => 'holder_padding',
			'value' => ''
		)
	)
) );


/*** Blog List ***/

vc_map( array(
	"name" => esc_html__( "Blog List", 'brick' ),
	"base" => "no_blog_list",
	"icon" => "icon-wpb-blog-list extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'brick' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Image in left box", 'brick' ) => "image_in_box",
				esc_html__( "Boxes", 'brick' ) => "boxes",
				esc_html__( "Minimal", 'brick' ) => "minimal"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Number of Posts", 'brick' ),
			"param_name" => "number_of_posts",
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'minimal','boxes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Image Size", 'brick' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Original", 'brick' ) => "original",
				esc_html__( "Landscape", 'brick' ) => "landscape",
				esc_html__( "Square", 'brick' ) => "square"

			),
			'save_always' => 'true',
			"dependency" => Array('element' => "type", 'value' => array('boxes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show Thumbnail", 'brick' ),
			"param_name" => "show_thumbnail",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no",
			),
			'save_always' => 'true',
			"dependency" => Array('element' => "type", 'value' => array('boxes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Number of Columns", 'brick' ),
			"param_name" => "number_of_columns",
			"value" => array(
				esc_html__( "One", 'brick' ) => "1",
				esc_html__( "Two", 'brick' ) => "2",
				esc_html__( "Three", 'brick' ) => "3",
				esc_html__( "Four", 'brick' ) => "4"
			),
			'save_always' => 'true',
			"dependency" => Array('element' => "type", 'value' => array('boxes'))
		),

		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Overlay Color", 'brick' ),
			"param_name" => "overlay_color",
			"dependency" => Array('element' => "type", 'value' => array('boxes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Display Overlay Icon", 'brick' ),
			"param_name" => "overlay_icon",
			"value" => array(
				esc_html__( "No", 'brick' ) => "0",
				esc_html__( "Yes", 'brick' ) => "1"
			),
			'save_always' => 'true',
			"dependency" => Array('element' => "type", 'value' => array('boxes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Order By", 'brick' ),
			"param_name" => "order_by",
			"value" => array(
				esc_html__( "Title", 'brick' ) => "title",
				esc_html__( "Date", 'brick' ) => "date"
			),
			'save_always' => 'true',
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Order", 'brick' ),
			"param_name" => "order",
			"value" => array(
				esc_html__( "ASC", 'brick' ) => "ASC",
				esc_html__( "DESC", 'brick' ) => "DESC"
			),
			'save_always' => 'true',
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Category Slug", 'brick' ),
			"param_name" => "category",
			"description" => esc_html__( "Leave empty for all or use comma for list", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Vertical Alignment of text", 'brick' ),
			"param_name" => "vertical_align_text",
			"value" => array(
				esc_html__( "Default/middle", 'brick' ) => "middle",
				esc_html__( "Top", 'brick' ) => "top",
				esc_html__( "Bottom", 'brick' ) => 'bottom'
			),
			'save_always' => 'true',
			"dependency" => array('element' => 'type', 'value' => array('split_column'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text length", 'brick' ),
			"param_name" => "text_length",
			"description" => esc_html__( "Number of characters", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Tag", 'brick' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'brick' ) => "h2",
				esc_html__( "h3", 'brick' ) => "h3",
				esc_html__( "h4", 'brick' ) => "h4",
				esc_html__( "h5", 'brick' ) => "h5",
				esc_html__( "h6", 'brick' ) => "h6",
			)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title Size (px)", 'brick' ),
			"param_name" => "title_size"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color", 'brick' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Display excerpt", 'brick' ),
			"param_name" => "display_excerpt",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Yes", 'brick' ) => "1",
				esc_html__( "No", 'brick' ) => "0"
			)
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Excerpt Color", 'brick' ),
			"param_name" => "excerpt_color",
			"dependency" => Array('element' => "display_excerpt", 'value' => array('1', ''))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Info Position", 'brick' ),
			"param_name" => "info_position",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Top", 'brick' ) => "top",
				esc_html__( "Bottom", 'brick' ) => "bottom"
			),
			"dependency" => array('element' => "type", 'value' => array('image_in_box', 'minimal','boxes'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Post info font size (px)", 'brick' ),
			"param_name" => "post_info_font_size",
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Post info color", 'brick' ),
			"param_name" => "post_info_color",
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Post info link color", 'brick' ),
			"param_name" => "post_info_link_color",
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Post info font family", 'brick' ),
			"param_name" => "post_info_font_family",
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Post info text transform", 'brick' ),
			"param_name" => "post_info_text_transform",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "None", 'brick' ) => "none",
				esc_html__( "Capitalize", 'brick' ) => "capitalize",
				esc_html__( "Uppercase", 'brick' ) => "uppercase",
				esc_html__( "Lowercase", 'brick' ) => "lowercase"
			),
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Post info font weight", 'brick' ),
			"param_name" => "post_info_font_weight",
			"value" => $font_weight_array,
			'save_always' => 'true',
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Post info font style", 'brick' ),
			"param_name" => "post_info_font_style",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Normal", 'brick' ) => "normal",
				esc_html__( "Italic", 'brick' ) => "italic"
			),
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Post info letter spacing (px)", 'brick' ),
			"param_name" => "post_info_letter_spacing",
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Display category", 'brick' ),
			"param_name" => "display_category",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Yes", 'brick' ) => "1",
				esc_html__( "No", 'brick' ) => "0"
			),
			"dependency" => Array('element' => "type", 'value' => array('image_in_box','boxes','minimal'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Display date", 'brick' ),
			"param_name" => "display_date",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Yes", 'brick' ) => "1",
				esc_html__( "No", 'brick' ) => "0"
			),
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Date Position", 'brick' ),
			"param_name" => "date_place",
			"value" => array(
				esc_html__( "Date by Title", 'brick' ) => "by_title",
				esc_html__( "Date by Post Info", 'brick' ) => "by_post_info"
			),
			'save_always' => 'true',
			"description" => esc_html__( 'Choose where will be date placed', 'brick' ),
			"dependency" => Array('element' => "type", 'value' => array('boxes'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Date Size (px)", 'brick' ),
			"param_name" => "date_size",
			"dependency" => array('element' => "type", 'value' => array('boxes', 'image_in_box'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Display author", 'brick' ),
			"param_name" => "display_author",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Yes", 'brick' ) => "1",
				esc_html__( "No", 'brick' ) => "0"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Display comments", 'brick' ),
			"param_name" => "display_comments",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Yes", 'brick' ) => "1",
				esc_html__( "No", 'brick' ) => "0"
			),
			"dependency" => Array('element' => "type", 'value' => array('image_in_box','boxes'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Box Background Color", 'brick' ),
			"param_name" => "background_color",
			"dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Box Padding", 'brick' ),
			"param_name" => "box_info_padding",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
			"dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Separator Between Item Color", 'brick' ),
			"param_name" => "border_color",
			"dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Separator Between Item Thickness (px)", 'brick' ),
			"param_name" => "border_width",
			"dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))

		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Display Button", 'brick' ),
			"param_name" => "display_button",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Yes", 'brick' ) => "1",
				esc_html__( "No", 'brick' ) => "0"
			),
			"description" => esc_html__( "Show button leading to post single page", 'brick' ),
			"dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))

		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Button Size", 'brick' ),
			"param_name" => "button_size",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Small", 'brick' ) => "small",
				esc_html__( "Medium", 'brick' ) => "medium",
				esc_html__( "Large", 'brick' ) => "large",
				esc_html__( "Extra Large", 'brick' ) => "big_large"
			),
			"description" => esc_html__( "Default value is small", 'brick' ),
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Button Style", 'brick' ),
			"param_name" => "button_style",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "White", 'brick' ) => "white"
			),
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Text", 'brick' ),
			"param_name" => "button_text",
			"description" => esc_html__( "Default text is LEARN MORE", 'brick' ),
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Text Color", 'brick' ),
			"param_name" => "button_color",
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Text Hover Color", 'brick' ),
			"param_name" => "button_hover_color",
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Background Color", 'brick' ),
			"param_name" => "button_background_color",
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Hover Background Color", 'brick' ),
			"param_name" => "button_hover_background_color",
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Border Color", 'brick' ),
			"param_name" => "button_border_color",
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Border Width", 'brick' ),
			"param_name" => "button_border_width",
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Hover Border Color", 'brick' ),
			"param_name" => "button_hover_border_color",
			"dependency" => array('element' => "display_button", 'value' => '1')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Border Radius (px)", 'brick' ),
			"param_name" => "button_border_radius",
			"description" => esc_html__( "Border radius for button", 'brick' ),
			"dependency" => array('element' => "display_button", 'value' => '1')
		)
	)
) );


/*** Blog Slider ***/

vc_map( array(
	"name" => esc_html__( "Blog Slider", 'brick' ),
	"base" => "no_blog_slider",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-blog-slider extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Slider type", 'brick' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Post Info visible", 'brick' ) => "info_always",
				esc_html__( "Post Info in Bottom", 'brick' ) => "info_in_bottom"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Image size", 'brick' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Original Size", 'brick' ) => "full",
				esc_html__( "Landscape", 'brick' ) => "landscape",
				esc_html__( "Portrait", 'brick' ) => "portrait"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Order By", 'brick' ),
			"param_name" => "order_by",
			"value" => array(
				"" => "",
				esc_html__( "Title", 'brick' ) => "title",
				esc_html__( "Date", 'brick' ) => "date"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Order", 'brick' ),
			"param_name" => "order",
			"value" => array(
				"" => "",
				esc_html__( "ASC", 'brick' ) => "ASC",
				esc_html__( "DESC", 'brick' ) => "DESC",
			)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Number", 'brick' ),
			"param_name" => "number",
			"value" => "-1",
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Number of Blog Posts Shown", 'brick' ),
			"param_name" => "blogs_shown",
			"value" => array(
				"" => "",
				esc_html__( "3", 'brick' ) => "3",
				esc_html__( "4", 'brick' ) => "4",
				esc_html__( "5", 'brick' ) => "5",
				esc_html__( "6", 'brick' ) => "6"
			),
			"description" => esc_html__( "Number of blog posts that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'brick' ),
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Category", 'brick' ),
			"param_name" => "category",
			"value" => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'brick' )
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Selected Projects", 'brick' ),
			"param_name" => "selected_projects",
			"value" => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'brick' )
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Info Box Background Color", 'brick' ),
			"param_name" => "hover_box_color",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Post Info Color", 'brick' ),
			"param_name" => "post_info_color",
			"value" => "",
			"dependency" => array("element" => "type","value" => "info_in_bottom")
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show Author", 'brick' ),
			"param_name" => "show_author",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => 'true',
			"description" => esc_html__( "Default value is Yes", 'brick' ),
			"dependency" => array("element" => "type", "value" => "info_in_bottom")
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Author Color", 'brick' ),
			"param_name" => "author_color",
			"value" => "",
			"dependency" => array('element' => "show_author", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show Category Names", 'brick' ),
			"param_name" => "show_categories",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => 'true',
			"description" => esc_html__( "Default value is Yes", 'brick' ),
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Category Name Color", 'brick' ),
			"param_name" => "category_color",
			"value" => "",
			"dependency" => array('element' => "show_categories", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show Date", 'brick' ),
			"param_name" => "show_date",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => 'true',
			"description" => esc_html__( "Default value is Yes", 'brick' ),
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Date Color", 'brick' ),
			"param_name" => "date_color",
			"value" => "",
			"dependency" => array('element' => "show_date", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Tag", 'brick' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'brick' ) => "h2",
				esc_html__( "h3", 'brick' ) => "h3",
				esc_html__( "h4", 'brick' ) => "h4",
				esc_html__( "h5", 'brick' ) => "h5",
				esc_html__( "h6", 'brick' ) => "h6",
			)
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color", 'brick' ),
			"param_name" => "title_color",
			"value" => ""
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__( "Prev/Next navigation", 'brick' ),
			"value" => array("Enable prev/next navigation?" => "enable_navigation"),
			"param_name" => "enable_navigation"
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__( "Bullets navigation", 'brick' ),
			"value" => array("Show bullets navigation?" => "yes"),
			"param_name" => "pager_navigation"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Extra class name", 'brick' ),
			"param_name" => "add_class",
			"value" => "",
			"description" => esc_html__( "If you wish to style this particular blog slider differently, you can use this field to add an extra class name to it and then refer to that class name in your css file.", 'brick' )
		)
	)
) );


/*** Vertical Split Slider ***/

class WPBakeryShortCode_No_Vertical_Split_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Select Vertical Split Slider', 'brick' ),
	"base" => "no_vertical_split_slider",
	"as_parent" => array('only' => 'no_vertical_left_sliding_panel,no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-vertical-split-slider extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Preloader Background Color", 'brick' ),
			"param_name" => "background_color",
			"value" => ""
		)
	)
) );


/*** Vertical Split Slider Left Panel ***/

class WPBakeryShortCode_No_Vertical_Left_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Left Sliding Panel', 'brick' ),
	"base" => "no_vertical_left_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-vertical-split-slider-left-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Right Panel ***/

class WPBakeryShortCode_No_Vertical_Right_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Right Sliding Panel', 'brick' ),
	"base" => "no_vertical_right_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-vertical-split-slider-right-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Content Item ***/

class WPBakeryShortCode_No_Vertical_Slide_Content_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Slide Content Item', 'brick' ),
	"base" => "no_vertical_slide_content_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider, no_carousel'),
	"as_child" => array('only' => 'no_vertical_left_sliding_panel, no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-vertical-split-slider-content-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background Color", 'brick' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Background Image", 'brick' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Padding left/right", 'brick' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 10px", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Content Aligment", 'brick' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "left", 'brick' ) => "left",
				esc_html__( "right", 'brick' ) => "right",
				esc_html__( "center", 'brick' ) => "center"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Header Style", 'brick' ),
			"param_name" => "header_style",
			"value" => array(
				""	=>	"",
				esc_html__( "Light", 'brick' ) => "light",
				esc_html__( "Dark", 'brick' ) => "dark"
			)
		)

	)
) );


/*** Image slider ***/

vc_map( array(
	"name" => esc_html__( "Select Image Slider", 'brick' ),
	"base" => "no_image_slider_no_space",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-image-slider-no-space extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_images",
			"heading" => esc_html__( "Images", 'brick' ),
			"param_name" => "images"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "On click", 'brick' ),
			"param_name" => "on_click",
			"value" => array(
				esc_html__( "Do nothing", 'brick' ) => "",
				esc_html__( "Open image in prettyphoto", 'brick' ) => "prettyphoto",
				esc_html__( "Open image in new tab", 'brick' ) => "new_tab",
				esc_html__( "Use custom links", 'brick' ) => "use_custom_links"
			)
		),
		array(
			"type" => "textarea",
			"heading" => esc_html__( "Custom Links", 'brick' ),
			"param_name" => "custom_links",
			"value" => "",
			"dependency" => array('element' => 'on_click', 'value' => 'use_custom_links'),
			"description" => esc_html__( "Enter links for each image here. Divide links with comma.", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Custom links target", 'brick' ),
			"param_name" => "custom_links_target",
			"value" => array(
				"" => "",
				esc_html__( "Same window", 'brick' ) => "_self",
				esc_html__( "New window", 'brick' ) => "_blank"
			),
			"dependency" => array('element' => 'on_click', 'value' => 'use_custom_links')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show info", 'brick' ),
			"param_name" => "show_info",
			"value" => array(
				"" => "",
				esc_html__( "On Hover", 'brick' ) => "on_hover",
				esc_html__( "In The Bottom Corner", 'brick' ) => "in_bottom_corner",
			),
			"description" => esc_html__( "Show image title and description", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Info position", 'brick' ),
			"param_name" => "info_position",
			"value" => array(
				esc_html__( "Bottom Left", 'brick' ) => "bottom_left",
				esc_html__( "Bottom Right", 'brick' ) => "bottom_right",
			),
			'save_always' => 'true',
			"dependency" => array('element' => "show_info", 'value' => array('in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background Color", 'brick' ),
			"param_name" => "background_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color", 'brick' ),
			"param_name" => "title_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title font size (px)", 'brick' ),
			"param_name" => "title_font_size",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Description Color", 'brick' ),
			"param_name" => "description_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Description font size (px)", 'brick' ),
			"param_name" => "description_font_size",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'brick' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "show_info", 'value' => 'on_hover')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Separator opacity (0-1)", 'brick' ),
			"param_name" => "separator_opacity",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => 'on_hover')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Full Screen Height", 'brick' ),
			"param_name" => "full_screen",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Slider height (px)", 'brick' ),
			"param_name" => "height",
			"value" => "",
			"dependency" => array('element' => 'full_screen', 'value' => 'no')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Navigation style", 'brick' ),
			"param_name" => "navigation_style",
			"value" => array(
				"" => "",
				esc_html__( "Light", 'brick' ) => "light",
				esc_html__( "Dark", 'brick' ) => "dark"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Highlight Active Image", 'brick' ),
			"param_name" => "highlight_active_image",
			"value" => array(
				"" => "",
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			)
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Highlight Inactive Color", 'brick' ),
			"param_name" => "highlight_inactive_color",
			"dependency" => array('element' => "highlight_active_image", 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Highlight Inactive Opacity (0-1)", 'brick' ),
			"param_name" => "highlight_inactive_opacity",
			"value" => "",
			"dependency" => array('element' => "highlight_active_image", 'value' => 'yes')
		)
	)
) );

/*** Google Map ***/

vc_map( array(
	"name" => esc_html__( "Google Map", 'brick' ),
	"base" => "no_google_map",
	"icon" => "icon-wpb-google-map extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Address 1", 'brick' ),
			"param_name" => "address1"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Address 2", 'brick' ),
			"param_name" => "address2"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Address 3", 'brick' ),
			"param_name" => "address3"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Address 4", 'brick' ),
			"param_name" => "address4"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Address 5", 'brick' ),
			"param_name" => "address5"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Custom Map Style", 'brick' ),
			"param_name" => "custom_map_style",
			"value" => array(
				esc_html__( "No", 'brick' ) => "false",
				esc_html__( "Yes", 'brick' ) => "true"
			),
			'save_always' => 'true',
			"description" => esc_html__( "Enabling this option will allow Map editing", 'brick' )
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Color Overlay", 'brick' ),
			"param_name" => "color_overlay",
			"description" => esc_html__( "Choose a Map color overlay", 'brick' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Saturation", 'brick' ),
			"param_name" => "saturation",
			"description" => esc_html__( "Choose a level of saturation (-100 = least saturated, 100 = most saturated)", 'brick' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Lightness", 'brick' ),
			"param_name" => "lightness",
			"description" => esc_html__( "Choose a level of lightness (-100 = darkest, 100 = lightest)", 'brick' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Pin", 'brick' ),
			"param_name" => "pin",
			"description" => esc_html__( "Select a pin image to be used on Google Map", 'brick' )
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Map Zoom", 'brick' ),
			"param_name" => "zoom",
			"description" => esc_html__( "Enter a zoom factor for Google Map (0 = whole worlds, 19 = individual buildings)", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Zoom Map on Mouse Wheel", 'brick' ),
			"param_name" => "google_maps_scroll_wheel",
			"value" => array(
				esc_html__( "No", 'brick' ) => "false",
				esc_html__( "Yes", 'brick' ) => "true"
			),
			'save_always' => 'true',
			"description" => esc_html__( "Enabling this option will allow users to zoom in on Map using mouse wheel", 'brick' )
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Map Height", 'brick' ),
			"param_name" => "map_height"
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show address info box on page load", 'brick' ),
			"param_name" => "address_info_box",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true'
		)
	)
));


/*** Team ***/

$team_social_icons_array = array();
for ($x = 1; $x<6; $x++) {
	$teamIconCollections = brick_qode_icon_collections()->iconCollections;
	if (array_key_exists('linea_icons', $teamIconCollections)) {
		unset($teamIconCollections['linea_icons']);
		unset($teamIconCollections['simple_line_icons']);
	}
	foreach($teamIconCollections as $collection_key => $collection) {

		$team_social_icons_array[] = array(
			"type" => "dropdown",
			"heading" => esc_html__( "Social Icon ", 'brick' ).$x,
			"param_name" => "team_social_".$collection->param."_".$x,
			"value" => $collection->getSocialIconsArrayVC(),
			'save_always' => 'true',
			"dependency" => Array('element' => "team_social_icon_pack", 'value' => array($collection_key))
		);

	}

	$team_social_icons_array[] = array(
		"type" => "textfield",
		"heading" => esc_html__( " Link", 'brick' ),
		"param_name" => "team_social_icon_".$x."_link",
		"dependency" => array('element' => 'team_social_icon_pack', 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
	);

	$team_social_icons_array[] = array(
		"type" => "dropdown",
		"heading" => esc_html__( " Target", 'brick' ),
		"param_name" => "team_social_icon_".$x."_target",
		"value" => array(
			"" => "",
			esc_html__( "Self", 'brick' ) => "_self",
			esc_html__( "Blank", 'brick' ) => "_blank"
		),
		"dependency" => Array('element' => "team_social_icon_".$x."_link", 'not_empty' => true)
	);

}

vc_map( array(
	"name" => esc_html__( "Team", 'brick' ),
	"base" => "no_team",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-team extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'brick' ),
				"param_name" => "team_type",
				"value" => array(
					esc_html__( "Main Info on Hover", 'brick' ) => "on_hover",
					esc_html__( "Main Info Below Image", 'brick' ) => "below_image"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "attach_image",
				"heading" => esc_html__( "Image", 'brick' ),
				"param_name" => "team_image"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Image hover color", 'brick' ),
				"param_name" => "team_image_hover_color"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Hover Type", 'brick' ),
				"param_name" => "team_hover_type",
				"value" => array(
					esc_html__( "Text In Center", 'brick' ) => "in_center",
					esc_html__( "Text in Left Corner", 'brick' ) => "in_corner"
				),
				'save_always' => 'true',
				"dependency" => array('element' => "team_type", 'value' => array('on_hover'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Name", 'brick' ),
				"param_name" => "team_name"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Name Tag", 'brick' ),
				"param_name" => "team_name_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Name font size(px)", 'brick' ),
				"param_name" => "team_name_font_size",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Name color", 'brick' ),
				"param_name" => "team_name_color",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Name font weight", 'brick' ),
				"param_name" => "team_name_font_weight",
				"value" => $font_weight_array,
				'save_always' => 'true',
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Name text transform", 'brick' ),
				"param_name" => "team_name_text_transform",
				"value" => array(
					esc_html__( "Default", 'brick' ) => "",
					esc_html__( "None", 'brick' ) => "none",
					esc_html__( "Capitalize", 'brick' ) => "capitalize",
					esc_html__( "Uppercase", 'brick' ) => "uppercase",
					esc_html__( "Lowercase", 'brick' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Show Separator", 'brick' ),
				"param_name" => "team_show_separator",
				"value" => array(
					esc_html__( "Yes", 'brick' ) => "yes",
					esc_html__( "No", 'brick' ) => "no"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Separator color", 'brick' ),
				"param_name" => "team_separator_color",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Position", 'brick' ),
				"param_name" => "team_position"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Position font size(px)", 'brick' ),
				"param_name" => "team_position_font_size",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Position color", 'brick' ),
				"param_name" => "team_position_color",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Position font weight", 'brick' ),
				"param_name" => "team_position_font_weight",
				"value" => $font_weight_array,
				'save_always' => 'true',
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Position text transform", 'brick' ),
				"param_name" => "team_position_text_transform",
				"value" => array(
					esc_html__( "Default", 'brick' ) => "",
					esc_html__( "None", 'brick' ) => "none",
					esc_html__( "Capitalize", 'brick' ) => "capitalize",
					esc_html__( "Uppercase", 'brick' ) => "uppercase",
					esc_html__( "Lowercase", 'brick' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "textarea",
				"heading" => esc_html__( "Description", 'brick' ),
				"param_name" => "team_description"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Description color", 'brick' ),
				"param_name" => "team_description_color",
				"dependency" => array('element' => 'team_description', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Text align", 'brick' ),
				"param_name" => "text_align",
				"value" => array(
					esc_html__( "Default", 'brick' ) => "",
					esc_html__( "Left", 'brick' ) => "left_align",
					esc_html__( "Center", 'brick' ) => "center_align",
					esc_html__( "Right", 'brick' ) => "right_align"
				)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Background Color", 'brick' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Box Border", 'brick' ),
				"param_name" => "box_border",
				"value" => array(
					esc_html__( "Default", 'brick' ) => "",
					esc_html__( "No", 'brick' ) => "no",
					esc_html__( "Yes", 'brick' ) => "yes"
				)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Box Border Width", 'brick' ),
				"param_name" => "box_border_width",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Box Border Color", 'brick' ),
				"param_name" => "box_border_color",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Social Icon Pack", 'brick' ),
				"param_name" => "team_social_icon_pack",
				"value" => array_merge(array("" => ""),brick_qode_icon_collections()->getIconCollectionsVCExclude('linea_icons')),
				'save_always' => 'true'
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Social Style", 'brick' ),
				"param_name" => "team_social_style",
				"value" => array(
					esc_html__( "Between Image and Info", 'brick' ) => "social_style_between",
					esc_html__( "In the center of the image", 'brick' ) => "social_style_center"
				),
				'save_always' => 'true',
				"description" => esc_html__( "Social Style applies only when Main Info Below Image type is selected", 'brick' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Social Icons Position", 'brick' ),
				"param_name" => "social_icons_position",
				"value" => array(
					esc_html__( "Left", 'brick' ) => "left",
					esc_html__( "Center", 'brick' ) => "center",
					esc_html__( "Right", 'brick' ) => "right"
				),
				'save_always' => 'true',
				"description" => esc_html__( "Social Icons Position applies only when Main Info Below Image type is selected", 'brick' ),
				"dependency" => array('element' => 'team_social_style', 'value' => array("social_style_between"))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Social Icons Type", 'brick' ),
				"param_name" => "team_social_icon_type",
				"value" => array(
					esc_html__( "Normal", 'brick' ) => "normal_social",
					esc_html__( "Circle", 'brick' ) => "circle_social",
					esc_html__( "Square", 'brick' ) => "square_social"
				),
				'save_always' => 'true',
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Social Icons color", 'brick' ),
				"param_name" => "team_social_icon_color",
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Social Icons Background Color", 'brick' ),
				"param_name" => "team_social_icon_background_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Social Icons Border Color", 'brick' ),
				"param_name" => "team_social_icon_border_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle_social', 'square_social'))
			)
		),
		$team_social_icons_array,
		array(
			array(
				"type" => "checkbox",
				"heading" => esc_html__( "Team Member Skills", 'brick' ),
				"value" => array("Show Team Member Skills?" => "yes"),
				"param_name" => "show_skills"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Skills Title Size", 'brick' ),
				"param_name" => "skills_title_size",
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "First Skill Title", 'brick' ),
				"param_name" => "skill_title_1",
				"description" => esc_html__( "For example Web design", 'brick' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "First Skill Percentage", 'brick' ),
				"param_name" => "skill_percentage_1",
				"description" => esc_html__( "Enter just number, without %", 'brick' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Second Skill Title", 'brick' ),
				"param_name" => "skill_title_2",
				"description" => esc_html__( "For example Web design", 'brick' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Second Skill Percentage", 'brick' ),
				"param_name" => "skill_percentage_2",
				"description" => esc_html__( "Enter just number, without %", 'brick' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Third Skill Title", 'brick' ),
				"param_name" => "skill_title_3",
				"description" => esc_html__( "For example Web design", 'brick' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Third Skill Percentage", 'brick' ),
				"param_name" => "skill_percentage_3",
				"description" => esc_html__( "Enter just number, without %", 'brick' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			)
		)
	)

) );


/*** Clients ***/

class WPBakeryShortCode_No_Clients  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "brick", 'brick' ),
	"base" => "no_clients",
	"as_parent" => array('only' => 'no_client'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-clients extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Columns", 'brick' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'brick' ) => "two_columns",
				esc_html__( "Three", 'brick' ) => "three_columns",
				esc_html__( "Four", 'brick' ) => "four_columns",
				esc_html__( "Five", 'brick' ) => "five_columns",
				esc_html__( "Six", 'brick' ) => "six_columns"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show borders", 'brick' ),
			"param_name" => "client_borders",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => 'true',
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Space between clients", 'brick' ),
			"param_name" => "space_between_clients",
			"description" => esc_html__( "When yes, space will be 10px", 'brick' ),
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true',
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Client ***/

class WPBakeryShortCode_No_Client extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "brick", 'brick' ),
	"base" => "no_client",
	"content_element" => true,
	"icon" => "icon-wpb-client extended-custom-icon",
	"as_child" => array('only' => 'no_clients'),
	"params" => array(
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Image", 'brick' ),
			"param_name" => "image"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Link", 'brick' ),
			"param_name" => "link"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Link Target", 'brick' ),
			"param_name" => "link_target",
			"value" => array(
				"" => "",
				esc_html__( "Self", 'brick' ) => "_self",
				esc_html__( "Blank", 'brick' ) => "_blank"
			)
		)
	)
) );


/*** Circles ***/

class WPBakeryShortCode_No_Circles  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "brick", 'brick' ),
	"base" => "no_circles",
	"as_parent" => array('only' => 'no_circle'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-circles extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Columns", 'brick' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Three", 'brick' ) => "three_columns",
				esc_html__( "Four", 'brick' ) => "four_columns",
				esc_html__( "Five", 'brick' ) => "five_columns",
				esc_html__( "Six", 'brick' ) => "six_columns"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Lines between items?", 'brick' ),
			"param_name" => "lines_between",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Line Color", 'brick' ),
			"param_name" => "line_color"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Process Item Height (px)", 'brick' ),
			"param_name" => "process_height"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Process Item Width (px)", 'brick' ),
			"param_name" => "process_width"
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Circle ***/

class WPBakeryShortCode_No_Circle extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "brick", 'brick' ),
	"base" => "no_circle",
	"content_element" => true,
	"icon" => "icon-wpb-circle extended-custom-icon",
	"as_child" => array('only' => 'no_circles'),
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'brick' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Icon in Process", 'brick' ) => "icon_type",
					esc_html__( "Image", 'brick' ) => "image_type",
					esc_html__( "Text in Process", 'brick' ) => "text_type",
					esc_html__( "Image with Text", 'brick' ) => "image_with_text_type"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "attach_image",
				"heading" => esc_html__( "Process Background Image", 'brick' ),
				"param_name" => "background_image",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Background Process Color", 'brick' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Background Process Transparency", 'brick' ),
				"param_name" => "background_transparency",
				"description" => esc_html__( "Insert value between 0 and 1", 'brick' )
			),
			array(
				"type" => "checkbox",
				"heading" => esc_html__( "", 'brick' ),
				"value" => array("Without outer border?" => "yes"),
				"param_name" => "without_double_border"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Process Color", 'brick' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Border Process Width", 'brick' ),
				"param_name" => "border_width"
			)
		),
		brick_qode_icon_collections()->getVCParamsArray( array( 'element' => 'type', 'value' => array( 'icon_type' ) ) ),
		array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Size", 'brick' ),
				"param_name" => "size",
				"description" => esc_html__( "Enter just number. Omit px", 'brick' ),
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'brick' ),
				"param_name" => "icon_color",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "attach_image",
				"heading" => esc_html__( "Image", 'brick' ),
				"param_name" => "image",
				"dependency" => array('element' => "type", 'value' => array("image_type", "image_with_text_type"))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Text in Process", 'brick' ),
				"param_name" => "text_in_circle",
				"dependency" => array('element' => "type", 'value' => array("text_type", "image_with_text_type"))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Text in Process Tag", 'brick' ),
				"param_name" => "text_in_circle_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				),
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Text in Process Size (px)", 'brick' ),
				"param_name" => "font_size",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Text in Process Color", 'brick' ),
				"param_name" => "text_in_circle_color",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Link", 'brick' ),
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Link Target", 'brick' ),
				"param_name" => "link_target",
				"value" => array(
					"" => "",
					esc_html__( "Self", 'brick' ) => "_self",
					esc_html__( "Blank", 'brick' ) => "_blank"
				),
				"dependency" => array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title", 'brick' ),
				"param_name" => "title"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Tag", 'brick' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Title Color", 'brick' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Alignment", 'brick' ),
				"param_name" => "title_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'brick' ) => "title_left",
					esc_html__( "Center", 'brick' ) => "title_center",
					esc_html__( "Right", 'brick' ) => "title_right"
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textarea",
				"heading" => esc_html__( "Text", 'brick' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Text Color", 'brick' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Text Alignment", 'brick' ),
				"param_name" => "text_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'brick' ) => "text_left",
					esc_html__( "Center", 'brick' ) => "text_center",
					esc_html__( "Right", 'brick' ) => "text_right"
				),
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Space between circle and title", 'brick' ),
				"param_name" => "title_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 24)", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Space between title and text", 'brick' ),
				"param_name" => "text_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 5)", 'brick' )
			)
		)
	)
) );


/*** Pricing Tables ***/

class WPBakeryShortCode_No_Pricing_Tables  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "brick", 'brick' ),
	"base" => "no_pricing_tables",
	"as_parent" => array('only' => 'no_pricing_table'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-pricing-tables extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Columns", 'brick' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'brick' ) => "two_columns",
				esc_html__( "Three", 'brick' ) => "three_columns",
				esc_html__( "Four", 'brick' ) => "four_columns",
			),
			'save_always' => 'true'
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Pricing Table ***/

class WPBakeryShortCode_No_Pricing_Table  extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Pricing Table", 'brick' ),
	"base" => "no_pricing_table",
	"icon" => "icon-wpb-pricing-table extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"as_child" => array('only' => 'no_pricing_tables'),
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'brick' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Price on top", 'brick' ) => "price_on_top",
				esc_html__( "Title on top", 'brick' ) => "title_on_top"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title", 'brick' ),
			"param_name" => "title",
			"value" => "Basic Plan"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color", 'brick' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Background Color", 'brick' ),
			"param_name" => "title_background_color"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Small Separator", 'brick' ),
			"param_name" => "title_separator",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true',
			"dependency" => array('element' => 'type', 'value' => 'price_on_top')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Separator Color", 'brick' ),
			"param_name" => "title_separator_color",
			"dependency" => array('element' => 'title_separator', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Border Bottom", 'brick' ),
			"param_name" => "title_border_bottom",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => 'true',
			"dependency" => array('element' => 'type', 'value' => 'title_on_top')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Border Bottom Color", 'brick' ),
			"param_name" => "title_border_bottom_color",
			"dependency" => array('element' => 'title_border_bottom', 'value' => 'yes')
		),

		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Border Around", 'brick' ),
			"param_name" => "border_arround",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true'
		),

		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Border Arround Color", 'brick' ),
			"param_name" => "border_arround_color",
			"dependency" => array('element' => 'border_arround', 'value' => 'yes')
		),

		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Wide Border Top", 'brick' ),
			"param_name" => "table_border_top",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => 'true',
			"dependency" => array('element' => 'type', 'value' => 'title_on_top')
		),

		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Wide Border Top Color", 'brick' ),
			"param_name" => "pricing_table_border_top_color",
			"dependency" => array('element' => 'table_border_top', 'value' => 'yes')
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__( "Price", 'brick' ),
			"param_name" => "price",
			"description" => esc_html__( "Default value is 100", 'brick' )
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Price Background Color", 'brick' ),
			"param_name" => "price_background"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Price Font Weight", 'brick' ),
			"param_name" => "price_font_weight",
			"value" => $font_weight_array,
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Currency", 'brick' ),
			"param_name" => "currency",
			"description" => esc_html__( "Default mark is $", 'brick' )
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Price Period", 'brick' ),
			"param_name" => "price_period",
			"description" => esc_html__( "Default label is monthly", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Price Period Position", 'brick' ),
			"param_name" => "price_period_position",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Next to Title", 'brick' ) => "next_to_title",
				esc_html__( "Bellow Title", 'brick' ) => "bellow_title"
			),
			"dependency" => array('element' => 'type', 'value' => 'price_on_top')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show Button", 'brick' ),
			"param_name" => "show_button",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Button Type", 'brick' ),
			"param_name" => "pricing_button_type",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Standard Button", 'brick' ) => "standard_button",
				esc_html__( "Button on Bottom", 'brick' ) => "button_on_bottom"
			),
			"dependency" => array('element' => 'show_button',  'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Text", 'brick' ),
			"param_name" => "button_text",
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Button Size", 'brick' ),
			"value" => array(
				esc_html__( "Full Width", 'brick' ) => "full_width",
				esc_html__( "Normal", 'brick' ) => "normal"
			),
			'save_always' => 'true',
			"param_name" => "button_size",
			"description" => esc_html__( "This options is only used for type Title on Top", 'brick' ),
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Link", 'brick' ),
			"param_name" => "link",
			"dependency" => array('element' => 'show_button',  'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Button Target", 'brick' ),
			"param_name" => "target",
			"value" => array(
				"" => "",
				esc_html__( "Self", 'brick' ) => "_self",
				esc_html__( "Blank", 'brick' ) => "_blank"
			),
			"dependency" => array('element' => 'link', 'not_empty' => true)
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Color", 'brick' ),
			"param_name" => "button_color",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Button Background Color", 'brick' ),
			"param_name" => "button_background_color",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Button Icon Size(px)", 'brick' ),
			"param_name" => "button_icon_size",
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'button_on_bottom')
		),

		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Button arrow", 'brick' ),
			"param_name" => "button_arrow",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true',
			"dependency" => array('element' => 'button_text', 'not_empty' => true)
		),

		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Disable Button Top Border", 'brick' ),
			"param_name" => "disable_button_border_top",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			"description" => esc_html__( "This options is only used for type Title on Top", 'brick' ),
			"dependency" => array('element' => 'button_text', 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Active", 'brick' ),
			"param_name" => "active",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Active Style", 'brick' ),
			"param_name" => "active_style",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Circle", 'brick' ) => "circle",
				esc_html__( "Rectangle", 'brick' ) => "rectangle",
			),
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Active text", 'brick' ),
			"param_name" => "active_text",
			"description" => esc_html__( "Best choice", 'brick' ),
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Active Text Color", 'brick' ),
			"param_name" => "active_text_color",
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Active Text Background Color", 'brick' ),
			"param_name" => "active_text_background_color",
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Content Text Color", 'brick' ),
			"param_name" => "content_text_color"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Content Background Color", 'brick' ),
			"param_name" => "content_background_color"
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Pricing Table Background Image", 'brick' ),
			"param_name" => "content_background_image"
		),
		array(
			"type" => "textarea_html",
			"heading" => esc_html__( "Content", 'brick' ),
			"param_name" => "content",
			"value" => "<li>content content content</li><li>content content content</li><li>content content content</li>"
		)
	)
) );


/*** Pricing List ***/

class WPBakeryShortCode_No_Pricing_List  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "brick", 'brick' ),
	"base" => "no_pricing_list",
	"as_parent" => array('only' => 'no_pricing_list_item'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-pricing-list extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'brick' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Leaders", 'brick' ) => "with_leaders",
				esc_html__( "Background", 'brick' ) => "with_background_image"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title", 'brick' ),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Background image", 'brick' ),
			"param_name" => "background_image",
			"dependency" => array('element' => "type", 'value' => array("with_background_image"))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background Color", 'brick' ),
			"param_name" => "backgroundcolor"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Leaders Type", 'brick' ),
			"param_name" => "leaders_type",
			"value" => array(
				esc_html__( "Dotted", 'brick' ) => "dotted",
				esc_html__( "Solid", 'brick' ) => "solid",
				esc_html__( "Dashed", 'brick' ) => "dashed"
			),
			'save_always' => 'true',
			"dependency" => array('element' => "type", 'value' => array("with_leaders"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Padding", 'brick' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px, default value is 0 0 0 0", 'brick' ),
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Border", 'brick' ),
			"param_name" => "border",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes",
			),
			'save_always' => 'true'
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Border Color", 'brick' ),
			"param_name" => "border_color",
			"dependency" => array('element' => "border", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Border Width (px)", 'brick' ),
			"param_name" => "border_width",
			"dependency" => array('element' => "border", 'value' => array("yes"))
		)
	)
) );


/*** Pricing List Item ***/

class WPBakeryShortCode_No_Pricing_List_Item extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "brick", 'brick' ),
	"base" => "no_pricing_list_item",
	"content_element" => true,
	"icon" => "icon-wpb-pricing-list-item extended-custom-icon",
	"as_child" => array('only' => 'no_pricing_list'),
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background color", 'brick' ),
			"param_name" => "backgroundcolor",
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title", 'brick' ),
			"param_name" => "title",
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color", 'brick' ),
			"param_name" => "title_color",
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title Font Size (px)", 'brick' ),
			"param_name" => "title_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'brick' ),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Tag", 'brick' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'brick' ) => "h2",
				esc_html__( "h3", 'brick' ) => "h3",
				esc_html__( "h4", 'brick' ) => "h4",
				esc_html__( "h5", 'brick' ) => "h5",
				esc_html__( "h6", 'brick' ) => "h6",
			),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title Font Family", 'brick' ),
			"param_name" => "title_font_family",
			"value" => "",
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Font Weight", 'brick' ),
			"param_name" => "title_font_weight",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Thin 100", 'brick' ) => "100",
				esc_html__( "Extra-Light 200", 'brick' ) => "200",
				esc_html__( "Light 300", 'brick' ) => "300",
				esc_html__( "Regular 400", 'brick' ) => "400",
				esc_html__( "Medium 500", 'brick' ) => "500",
				esc_html__( "Semi-Bold 600", 'brick' ) => "600",
				esc_html__( "Bold 700", 'brick' ) => "700",
				esc_html__( "Extra-Bold 800", 'brick' ) => "800",
				esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
			),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text", 'brick' ),
			"param_name" => "text",
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Text Color", 'brick' ),
			"param_name" => "text_color",
			"dependency" => array('element' => "text", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text Font Size (px)", 'brick' ),
			"param_name" => "text_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'brick' ),
			"dependency" => array('element' => "text", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Price", 'brick' ),
			"param_name" => "price",
			"description" => esc_html__( "You can append any unit that you want", 'brick' )
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Price Color", 'brick' ),
			"param_name" => "price_color",
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Price Font Family", 'brick' ),
			"param_name" => "price_font_family",
			"value" => "",
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Price Font Size (px)", 'brick' ),
			"param_name" => "price_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'brick' ),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Price Font Weight", 'brick' ),
			"param_name" => "price_font_weight",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Thin 100", 'brick' ) => "100",
				esc_html__( "Extra-Light 200", 'brick' ) => "200",
				esc_html__( "Light 300", 'brick' ) => "300",
				esc_html__( "Regular 400", 'brick' ) => "400",
				esc_html__( "Medium 500", 'brick' ) => "500",
				esc_html__( "Semi-Bold 600", 'brick' ) => "600",
				esc_html__( "Bold 700", 'brick' ) => "700",
				esc_html__( "Extra-Bold 800", 'brick' ) => "800",
				esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
			),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Price Font Style", 'brick' ),
			"param_name" => "price_font_style",
			"value" => array(
				"" => "",
				esc_html__( "Normal", 'brick' ) => "normal",
				esc_html__( "Italic", 'brick' ) => "italic"
			),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Separator", 'brick' ),
			"param_name" => "separator",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes",
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Separator Type", 'brick' ),
			"param_name" => "separator_type",
			"value" => array(
				esc_html__( "Solid", 'brick' ) => "solid",
				esc_html__( "Dotted", 'brick' ) => "dotted",
				esc_html__( "Dashed", 'brick' ) => "dashed"
			),
			'save_always' => 'true',
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'brick' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Separator Thickness (px)", 'brick' ),
			"param_name" => "separator_width",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Separator Position Top (px)", 'brick' ),
			"param_name" => "separator_position_top",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Separator Position Bottom (px)", 'brick' ),
			"param_name" => "separator_position_bottom",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__( "New Item", 'brick' ),
			"param_name" => "enable_new_item",
			"value" => array("Set as new item?" => "enable_new_item"),
			"description" => esc_html__( "Only when pricing list is set to type Leaders", 'brick' )
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "New Item Text Color", 'brick' ),
			"param_name" => "new_item_text_color",
			"dependency" => array('element' => "enable_new_item", 'value' => array("enable_new_item"))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "New Item Icon Color", 'brick' ),
			"param_name" => "new_item_icon_color",
			"dependency" => array('element' => "enable_new_item", 'value' => array("enable_new_item"))
		),
		array(
			"type" => "checkbox",
			"heading" => esc_html__( "Highlighted Item", 'brick' ),
			"param_name" => "enable_highlighted_item",
			"value" => array("Set as highlighted item?" => "enable_highlighted_item"),
			"description" => esc_html__( "Only when pricing list is set to type Leaders", 'brick' )
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Highlighted Text", 'brick' ),
			"param_name" => "highlighted_text",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Highlighted Text Color", 'brick' ),
			"param_name" => "highlighted_text_color",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Highlighted Text Background Color", 'brick' ),
			"param_name" => "highlighted_text_background_color",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Item Margin Bottom (px)", 'brick' ),
			"param_name" => "margin_bottom_item"
		),
	)
) );


/*** Service table ***/

vc_map( array(
		"name" => esc_html__( "Service Table", 'brick' ),
		"base" => "no_service_table",
		"icon" => "icon-wpb-service-table extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Type", 'brick' ),
					"param_name" => "type",
					"value" => array(
						esc_html__( "Icon/Image on Top", 'brick' ) => "icon_image_on_top",
						esc_html__( "Title on Top", 'brick' ) => "title_on_top",
					),
					'save_always' => 'true'
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Title", 'brick' ),
					"param_name" => "title",
					"value" => ""
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Title Tag", 'brick' ),
					"param_name" => "title_tag",
					"value" => array(
						""   => "",
						esc_html__( "h2", 'brick' ) => "h2",
						esc_html__( "h3", 'brick' ) => "h3",
						esc_html__( "h4", 'brick' ) => "h4",
						esc_html__( "h5", 'brick' ) => "h5",
						esc_html__( "h6", 'brick' ) => "h6",
					)
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Title Color", 'brick' ),
					"param_name" => "title_color"
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Title Background Color", 'brick' ),
					"param_name" => "title_background_color"
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Title Top Padding (px)", 'brick' ),
					"param_name" => "title_top_padding"
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Title Bottom Padding (px)", 'brick' ),
					"param_name" => "title_bottom_padding"
				),
				array(
					"type" => "attach_image",
					"heading" => esc_html__( "Top Background Image", 'brick' ),
					"param_name" => "top_background_image",
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Title Small Separator", 'brick' ),
					"param_name" => "title_separator",
					"value" => array(
						esc_html__( "No", 'brick' ) => "no",
						esc_html__( "Yes", 'brick' ) => "yes"
					),
					'save_always' => 'true',
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Separator Color", 'brick' ),
					"param_name" => "title_separator_color",
					"dependency" => array("element" => "title_separator", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Title Border Bottom", 'brick' ),
					"param_name" => "title_border_bottom",
					"value" => array(
						esc_html__( "Yes", 'brick' ) => "yes",
						esc_html__( "No", 'brick' ) => "no"
					),
					'save_always' => 'true',
					"dependency" => array("element" => "type", "value" => array("title_on_top"))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Title Border Bottom color", 'brick' ),
					"param_name" => "title_border_bottom_color",
					"dependency" => array("element" => "title_border_bottom", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Wide Border Top", 'brick' ),
					"param_name" => "border_top",
					"value" => array(
						esc_html__( "Yes", 'brick' ) => "yes",
						esc_html__( "No", 'brick' ) => "no"
					),
					'save_always' => 'true',
					"dependency" => array("element" => "type", "value" => array("title_on_top"))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Wide Border Top Color", 'brick' ),
					"param_name" => "border_top_color",
					"dependency" => array("element" => "border_top", "value" => array("yes"))
				),

				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Show Icon/Image", 'brick' ),
					"param_name" => "show_icon_image",
					"value" => array(
						esc_html__( "Yes", 'brick' ) => "yes",
						esc_html__( "No", 'brick' ) => "no"
					),
					'save_always' => 'true'
				),

				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Header type", 'brick' ),
					"param_name" => "header_type",
					"value" => array(
						esc_html__( "With Icon", 'brick' ) => "with_icon",
						esc_html__( "With Image", 'brick' ) => "with_image"
					),
					'save_always' => 'true',
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				)
			),
			brick_qode_icon_collections()->getVCParamsArray(array("element" => "header_type", "value" => array("with_icon"))),
			array(
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Icon Color", 'brick' ),
					"param_name" => "icon_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Icon Holder Background Color", 'brick' ),
					"param_name" => "icon_background_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Icon/Image Holder Padding Top (px)", 'brick' ),
					"param_name" => "icon_padding_top",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Icon/Image Holder Padding Bottom (px)", 'brick' ),
					"param_name" => "icon_padding_bottom",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Custom Size (px)", 'brick' ),
					"param_name" => "custom_size",
					"value" => "",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "attach_image",
					"heading" => esc_html__( "Header Image", 'brick' ),
					"param_name" => "header_image",
					"dependency" => array("element" => "header_type", "value" => array("with_image"))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Content Background Color", 'brick' ),
					"param_name" => "content_background_color"
				),
				array(
					"type" => "attach_image",
					"heading" => esc_html__( "Content Background Image", 'brick' ),
					"param_name" => "content_background_image"
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Border Around", 'brick' ),
					"param_name" => "border",
					"value" => array(
						esc_html__( "Default", 'brick' ) => "",
						esc_html__( "No", 'brick' ) => "no",
						esc_html__( "Yes", 'brick' ) => "yes"
					)
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Border width (px)", 'brick' ),
					"param_name" => "border_width",
					"value" => "",
					"dependency" => array('element' => "border", 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Border color", 'brick' ),
					"param_name" => "border_color",
					"value" => "",
					"dependency" => array('element' => "border", 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Active", 'brick' ),
					"param_name" => "active",
					"value" => array(
						esc_html__( "No", 'brick' ) => "no",
						esc_html__( "Yes", 'brick' ) => "yes"
					),
					'save_always' => 'true'
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Active Style", 'brick' ),
					"param_name" => "active_style",
					"value" => array(
						esc_html__( "Default", 'brick' ) => "",
						esc_html__( "Circle", 'brick' ) => "circle",
						esc_html__( "Rectangle", 'brick' ) => "rectangle"
					),
					"description" => esc_html__( "This option is only used for type Icon/Image on Top", 'brick' ),
					"dependency" => array('element' => "active", 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Active text", 'brick' ),
					"param_name" => "active_text",
					"description" => esc_html__( "Best choice", 'brick' ),
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Active Text Color", 'brick' ),
					"param_name" => "active_text_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Active Text Background Color", 'brick' ),
					"param_name" => "active_text_background_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Content Text Color", 'brick' ),
					"param_name" => "content_text_color"
				),
				array(
					"type" => "textarea_html",
					"heading" => esc_html__( "Content", 'brick' ),
					"param_name" => "content",
					"value" => "<li>content content content</li><li>content content content</li><li>content content content</li>"
				)
			)
		)
	)
);


/*** Call to action ***/

vc_map( array(
		"name" => esc_html__( "Call to Action", 'brick' ),
		"base" => "no_call_to_action",
		"category" => esc_html__( 'by Select', 'brick' ),
		"icon" => "icon-wpb-call-to-action extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"heading" => esc_html__( "Full Width", 'brick' ),
					"param_name"    => "full_width",
					"value"         => array(
						esc_html__( "Yes", 'brick' ) => "yes",
						esc_html__( "No", 'brick' ) => "no"
					),
					'save_always' => 'true'
				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"heading" => esc_html__( "Content in grid", 'brick' ),
					"param_name"    => "content_in_grid",
					"value"         => array(
						esc_html__( "Yes", 'brick' ) => "yes",
						esc_html__( "No", 'brick' ) => "no"
					),
					'save_always' => 'true',
					"dependency"    => array("element" => "full_width", "value" => "yes")
				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"heading" => esc_html__( "Grid size", 'brick' ),
					"param_name"    => "grid_size",
					"value"         => array(
						esc_html__( "75/25", 'brick' ) => "75",
						esc_html__( "50/50", 'brick' ) => "50",
						esc_html__( "66/33", 'brick' ) => "66"
					),
					'save_always' => 'true',
					"dependency"    => array("element" => "content_in_grid", "value" => "yes")
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Type", 'brick' ),
					"param_name" => "type",
					"value" => array(
						esc_html__( "Normal", 'brick' ) => "normal",
						esc_html__( "With Icon", 'brick' ) => "with_icon",
						esc_html__( "With Custom Icon", 'brick' ) => "with_custom_icon"
					),
					'save_always' => 'true'
				)
			),
			brick_qode_icon_collections()->getVCParamsArray(array('element' => 'type', 'value' => array('with_icon'))),
			array(
				array(
					"type" => "attach_image",
					"heading" => esc_html__( "Custom Icon", 'brick' ),
					"param_name" => "custom_icon",
					"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Icon Size", 'brick' ),
					"param_name" => "icon_size",
					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Icon Position", 'brick' ),
					"param_name" => "icon_position",
					"value" => array(
						esc_html__( "Default/Top", 'brick' ) => "top",
						esc_html__( "Middle", 'brick' ) => "middle",
						esc_html__( "Bottom", 'brick' ) => "bottom"
					),
					'save_always' => 'true',
					"dependency" => array('element' => 'type', 'value' => array('with_icon','with_custom_icon'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Icon Color", 'brick' ),
					"param_name" => "icon_color",
					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Background Color", 'brick' ),
					"param_name" => "background_color"
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Border Color", 'brick' ),
					"param_name" => "border_color"
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Box Padding (top right bottom left) px", 'brick' ),
					"param_name" => "box_padding",
					"description" => esc_html__( "Default padding is 20px on all sides", 'brick' )
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Default Text Font Size (px)", 'brick' ),
					"param_name" => "text_size",
					"description" => esc_html__( "Font size for p tag", 'brick' )
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Show Button", 'brick' ),
					"param_name" => "show_button",
					"value" => array(
						esc_html__( "Yes", 'brick' ) => "yes",
						esc_html__( "No", 'brick' ) => "no"
					),
					'save_always' => 'true'
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Button Position", 'brick' ),
					"param_name" => "button_position",
					"value" => array(
						esc_html__( "Default/right", 'brick' ) => "",
						esc_html__( "Center", 'brick' ) => "center",
						esc_html__( "Left", 'brick' ) => "left"
					),
					'save_always' => 'true',
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Button Size", 'brick' ),
					"param_name" => "button_size",
					"value" => array(
						esc_html__( "Default", 'brick' ) => "",
						esc_html__( "Small", 'brick' ) => "small",
						esc_html__( "Medium", 'brick' ) => "medium",
						esc_html__( "Large", 'brick' ) => "large",
						esc_html__( "Extra Large", 'brick' ) => "big_large"
					),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Button Text", 'brick' ),
					"param_name" => "button_text",
					"description" => esc_html__( "Default text is button", 'brick' ),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Button Link", 'brick' ),
					"param_name" => "button_link",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__( "Button Target", 'brick' ),
					"param_name" => "button_target",
					"value" => array(
						"" => "",
						esc_html__( "Self", 'brick' ) => "_self",
						esc_html__( "Blank", 'brick' ) => "_blank"
					),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Button Text Color", 'brick' ),
					"param_name" => "button_text_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Button Hover Text Color", 'brick' ),
					"param_name" => "button_hover_text_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Button Background Color", 'brick' ),
					"param_name" => "button_background_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				 array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Button Hover Background Color", 'brick' ),
					"param_name" => "button_hover_background_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Button Border Color", 'brick' ),
					"param_name" => "button_border_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_html__( "Button Hover Border Color", 'brick' ),
					"param_name" => "button_hover_border_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Button Border Width", 'brick' ),
					"param_name" => "button_border_width",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"heading" => esc_html__( "Border Radius px", 'brick' ),
					"param_name" => "border_radius",
					"description" => esc_html__( "Border radius for button", 'brick' ),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textarea_html",
					"heading" => esc_html__( "Content", 'brick' ),
					"param_name" => "content",
					"value" => "<p>".esc_html__( "This is sample content text for shortcode element.", 'brick' ) ."</p>"
				)
			)
			)
    )
);


/*** Message shortcode ***/

vc_map( array(
	"name" => esc_html__( "Message", 'brick' ),
	"base" => "no_message",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-message extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'brick' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'brick' ) => "normal",
					esc_html__( "With Icon", 'brick' ) => "with_icon",
					esc_html__( "With Custom Icon", 'brick' ) => "with_custom_icon"
				),
				'save_always' => 'true'
			)
		),
		brick_qode_icon_collections()->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Position", 'brick' ),
				"param_name" => "icon_position",
				"value" => array(
					esc_html__( "Right", 'brick' ) => "right",
					esc_html__( "Left", 'brick' ) => "left"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => brick_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Position", 'brick' ),
				"param_name" => "custom_icon_position",
				"value" => array(
					esc_html__( "Right", 'brick' ) => "right",
					esc_html__( "Left", 'brick' ) => "left"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => 'type', 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Size", 'brick' ),
				"param_name" => "icon_size",
				"value" => brick_qode_icon_collections()->getIconSizesArray(),
				'save_always' => 'true',
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Custom Size (px)", 'brick' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'brick' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Background Color", 'brick' ),
				"param_name" => "icon_background_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"heading" => esc_html__( "Custom Icon", 'brick' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Background Color", 'brick' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color", 'brick' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Border Width (px)", 'brick' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1", 'brick' )
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Close Button Color", 'brick' ),
				"param_name" => "close_button_color",
				"description" => esc_html__( "Default color is #fff", 'brick' )
			),
			array(
				"type" => "textarea_html",
				"heading" => esc_html__( "Content", 'brick' ),
				"param_name" => "content",
				"value" => "<p>".esc_html__( "This is sample content text for shortcode element.", 'brick' ) ."</p>"
			)
		)
	)
) );


/*** Blockquote ***/

vc_map( array(
		"name" => esc_html__( "Blockquote", 'brick' ),
		"base" => "no_blockquote",
		"category" => esc_html__( 'by Select', 'brick' ),
		"icon" => "icon-wpb-blockquote extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea",
				"heading" => esc_html__( "Text", 'brick' ),
				"param_name" => "text",
				"value" => esc_html__( "Blockquote text", 'brick' )
			),
            array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Text Color", 'brick' ),
				"param_name" => "text_color"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title tag", 'brick' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Width", 'brick' ),
				"param_name" => "width",
				"description" => esc_html__( "Width (%)", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Line Height", 'brick' ),
				"param_name" => "line_height",
				"description" => esc_html__( "Line Height (px)", 'brick' )
			),
            array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Background Color", 'brick' ),
				"param_name" => "background_color"
			),
             array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show Border", 'brick' ),
                "param_name" => "show_border",
                "value" => array(
                    esc_html__( "Yes", 'brick' ) => "yes",
                    esc_html__( "No", 'brick' ) => "no"
                ),
				 'save_always' => 'true'
            ),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color", 'brick' ),
				"param_name" => "border_color",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
			),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Border width (px)", 'brick' ),
                "param_name" => "border_width",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Border Right Margin (px)", 'brick' ),
                "param_name" => "border_right_margin",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show Quote Icon", 'brick' ),
                "param_name" => "show_quote_icon",
                "value" => array(
                    esc_html__( "Yes", 'brick' ) => "yes",
                    esc_html__( "No", 'brick' ) => "no"
                ),
				'save_always' => 'true'
            ),
			array(
                "type" => "textfield",
                "heading" => esc_html__( "Padding Left", 'brick' ),
                "param_name" => "quote_padding_left",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
			array(
                "type" => "textfield",
                "heading" => esc_html__( "Padding Right", 'brick' ),
                "param_name" => "quote_padding_right",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Use Custom Icon or Font", 'brick' ),
                "param_name" => "quote_icon_font",
                "value" => array(
                    esc_html__( "No", 'brick' ) => "",
                    esc_html__( "Use Specific Font", 'brick' ) => "font_family",
                    esc_html__( "Use Icon", 'brick' ) => "with_icon"
                ),
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Quote Icon Font", 'brick' ),
                "param_name" => "quote_font_family",
                "dependency" => Array('element' => "quote_icon_font", 'value' => 'font_family')
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Quote Icon Pack", 'brick' ),
                "param_name" => "quote_icon_pack",
                "value" => array_merge(array("" => ""),brick_qode_icon_collections()->getIconCollectionsVCExclude('linea_icons')),
				'save_always' => 'true',
                "dependency" => Array('element' => "quote_icon_font", 'value' => 'with_icon')
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Quote Icon Color", 'brick' ),
                "param_name" => "quote_icon_color",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Quote Icon Size (px)", 'brick' ),
				"param_name" => "quote_icon_size",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
			)
		)
) );


/*** Custom Font ***/

vc_map( array(
	"name" => esc_html__( "Custom Font", 'brick' ),
	"base" => "no_custom_font",
	"icon" => "icon-wpb-custom-font extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Font family", 'brick' ),
			"param_name" => "font_family",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Font size", 'brick' ),
			"param_name" => "font_size",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Line height", 'brick' ),
			"param_name" => "line_height",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Font Style", 'brick' ),
			"param_name" => "font_style",
			"value" => array(
				esc_html__( "Normal", 'brick' ) => "normal",
				esc_html__( "Italic", 'brick' ) => "italic"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Text Align", 'brick' ),
			"param_name" => "text_align",
			"value" => array(
				esc_html__( "Left", 'brick' ) => "left",
				esc_html__( "Center", 'brick' ) => "center",
				esc_html__( "Right", 'brick' ) => "right"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Font weight", 'brick' ),
			"param_name" => "font_weight",
			"value" => "300"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Color", 'brick' ),
			"param_name" => "color"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Text decoration", 'brick' ),
			"param_name" => "text_decoration",
			"value" => array(
				esc_html__( "None", 'brick' ) => "none",
				esc_html__( "Underline", 'brick' ) => "underline",
				esc_html__( "Overline", 'brick' ) => "overline",
				esc_html__( "Line Through", 'brick' ) => "line-through"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Text transform", 'brick' ),
			"param_name" => "text_transform",
			"value" => array(
				esc_html__( "None", 'brick' ) => "none",
				esc_html__( "Uppercase", 'brick' ) => "uppercase",
				esc_html__( "Lowercase", 'brick' ) => "lowercase",
				esc_html__( "Capitalize", 'brick' ) => "capitalize"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Text shadow", 'brick' ),
			"param_name" => "text_shadow",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Letter Spacing (px)", 'brick' ),
			"param_name" => "letter_spacing",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background Color", 'brick' ),
			"param_name" => "background_color"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Padding (px)", 'brick' ),
			"param_name" => "padding",
			"value" => "0",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Margin (px)", 'brick' ),
			"param_name" => "margin",
			"value" => "0"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show in border box", 'brick' ),
			"param_name" => "show_in_border_box",
			"value" => array(
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Border Color", 'brick' ),
			"param_name" => "border_color",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Border Thickness (px)", 'brick' ),
			"param_name" => "border_width",
			"value" => "",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Text background Color", 'brick' ),
			"param_name" => "text_background_color",
			"value" => "",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text padding (px)", 'brick' ),
			"param_name" => "text_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textarea_html",
			"heading" => esc_html__( "Content", 'brick' ),
			"param_name" => "content",
			"value" => "<p>".esc_html__( "This is sample content text for shortcode element.", 'brick' ) ."</p>"
		)
	)
) );


/*** Button shortcode **/

vc_map( array(
		"name" => esc_html__( "Button", 'brick' ),
		"base" => "no_button",
		"category" => esc_html__( 'by Select', 'brick' ),
		"icon" => "icon-wpb-button extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Size", 'brick' ),
                            "param_name" => "size",
                            "value" => array(
                                esc_html__( "Default", 'brick' ) => "",
                                esc_html__( "Small", 'brick' ) => "small",
                                esc_html__( "Medium", 'brick' ) => "medium",
                                esc_html__( "Large", 'brick' ) => "large",
                                esc_html__( "Extra Large", 'brick' ) => "big_large",
                                esc_html__( "Extra Large Full Width", 'brick' ) => "big_large_full_width"
                            ),
							'save_always' => 'true'
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Style", 'brick' ),
                            "param_name" => "style",
                            "value" => array(
                                esc_html__( "Default", 'brick' ) => "",
                                esc_html__( "White", 'brick' ) => "white"
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Text", 'brick' ),
                            "param_name" => "text",
                            "description" => esc_html__( "Default text is button", 'brick' )
                        )
                    ),
                    brick_qode_icon_collections()->getVCParamsArray(array(), '', true),
                    array(
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Icon Position", 'brick' ),
                            "param_name" => "icon_position",
                            "value" => array(
                                esc_html__( "Right", 'brick' ) => "right",
                                esc_html__( "Left", 'brick' ) => "left"
                            ),
							'save_always' => 'true',
                            "dependency" => Array('element' => brick_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Icon Color", 'brick' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' =>brick_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Icon Background Color", 'brick' ),
                            "param_name" => "icon_background_color",
                            "dependency" => Array('element' =>brick_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Icon Background Hover Color", 'brick' ),
                            "param_name" => "icon_background_hover_color",
                            "dependency" => Array('element' =>brick_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Link", 'brick' ),
                            "param_name" => "link"
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Link Target", 'brick' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'brick' ) => "_self",
                                esc_html__( "Blank", 'brick' ) => "_blank"
                            ),
							'save_always' => 'true'
                        ),
						
						array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Hover Animation", 'brick' ),
                            "param_name" => "hover_animation",
                            "value" => array(
                                esc_html__( "Default", 'brick' ) => "",
								esc_html__( "Move Icon", 'brick' ) => "move_icon"
                            )
                        ),
						
						array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Button Width (px)", 'brick' ),
                            "param_name" => "button_width",
							"dependency" => array('element' => "hover_animation", 'value' => array('move_icon')),
							"description" => esc_html__( "Please insert button width in order to work with hover animation ", 'brick' ),
							
                        ),
						
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Color", 'brick' ),
                            "param_name" => "color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Hover Color", 'brick' ),
                            "param_name" => "hover_color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Background Color", 'brick' ),
                            "param_name" => "background_color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Hover Background Color", 'brick' ),
                            "param_name" => "hover_background_color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Border Color", 'brick' ),
                            "param_name" => "border_color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Hover Border Color", 'brick' ),
                            "param_name" => "hover_border_color"
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Border Width (px)", 'brick' ),
                            "param_name" => "border_width"
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Font Style", 'brick' ),
                            "param_name" => "font_style",
                            "value" => array(
                                "" => "",
                                esc_html__( "Normal", 'brick' ) => "normal",
                                esc_html__( "Italic", 'brick' ) => "italic"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Font Weight", 'brick' ),
                            "param_name" => "font_weight",
                            "value" => $font_weight_array,
							'save_always' => 'true'
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Margin", 'brick' ),
                            "param_name" => "margin",
                            "description" => esc_html__( "Please insert margin in format: 0px 0px 1px 0px", 'brick' ),
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Left/Right Padding (px)", 'brick' ),
                            "param_name" => "padding"
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Border radius", 'brick' ),
                            "param_name" => "border_radius",
                            "description" => esc_html__( "Please insert border radius(Rounded corners) in px. For example: 4 ", 'brick' ),
                        )
                    )
                )
    )
);


/*** Counter ***/

vc_map( array(
	"name" => esc_html__( "Counter", 'brick' ),
	"base" => "no_counter",
	"category" => esc_html__( 'by Select', 'brick' ),
	'admin_enqueue_css' => array(brick_qode_get_skin_uri().'/assets/css/qodef-vc-extend.css'),
	"icon" => "icon-wpb-counter extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'brick' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Zero Counter", 'brick' ) => "zero",
				esc_html__( "Random Counter", 'brick' ) => "random"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Box", 'brick' ),
			"param_name" => "box",
			"value" => array(
				"" => "",
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			)
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Box Border Color", 'brick' ),
			"param_name" => "box_border_color",
			"dependency" => array('element' => "box", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Position", 'brick' ),
			"param_name" => "position",
			"value" => array(
				esc_html__( "Left", 'brick' ) => "left",
				esc_html__( "Right", 'brick' ) => "right",
				esc_html__( "Center", 'brick' ) => "center"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Digit", 'brick' ),
			"param_name" => "digit"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Underline Digit", 'brick' ),
			"param_name" => "underline_digit",
			"value" => array(
				"" => "",
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Digit Font Size (px)", 'brick' ),
			"param_name" => "font_size"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Digit Font Weight", 'brick' ),
			"param_name" => "font_weight",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Thin 100", 'brick' ) => "100",
				esc_html__( "Extra-Light 200", 'brick' ) => "200",
				esc_html__( "Light 300", 'brick' ) => "300",
				esc_html__( "Regular 400", 'brick' ) => "400",
				esc_html__( "Medium 500", 'brick' ) => "500",
				esc_html__( "Semi-Bold 600", 'brick' ) => "600",
				esc_html__( "Bold 700", 'brick' ) => "700",
				esc_html__( "Extra-Bold 800", 'brick' ) => "800",
				esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
			)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Digit Letter Spacing (px)", 'brick' ),
			"param_name" => "digit_letter_spacing"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Digit Font Color", 'brick' ),
			"param_name" => "font_color"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title", 'brick' ),
			"param_name" => "title"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color", 'brick' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Tag", 'brick' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'brick' ) => "h2",
				esc_html__( "h3", 'brick' ) => "h3",
				esc_html__( "h4", 'brick' ) => "h4",
				esc_html__( "h5", 'brick' ) => "h5",
				esc_html__( "h6", 'brick' ) => "h6",
			)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title Size (px)", 'brick' ),
			"param_name" => "title_size"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text", 'brick' ),
			"param_name" => "text"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text Size (px)", 'brick' ),
			"param_name" => "text_size"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Text Font Weight", 'brick' ),
			"param_name" => "text_font_weight",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Thin 100", 'brick' ) => "100",
				esc_html__( "Extra-Light 200", 'brick' ) => "200",
				esc_html__( "Light 300", 'brick' ) => "300",
				esc_html__( "Regular 400", 'brick' ) => "400",
				esc_html__( "Medium 500", 'brick' ) => "500",
				esc_html__( "Semi-Bold 600", 'brick' ) => "600",
				esc_html__( "Bold 700", 'brick' ) => "700",
				esc_html__( "Extra-Bold 800", 'brick' ) => "800",
				esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Text Transform", 'brick' ),
			"param_name" => "text_transform",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "None", 'brick' ) => "none",
				esc_html__( "Capitalize", 'brick' ) => "capitalize",
				esc_html__( "Uppercase", 'brick' ) => "uppercase",
				esc_html__( "Lowercase", 'brick' ) => "lowercase"
			)
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Text Color", 'brick' ),
			"param_name" => "text_color"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Separator", 'brick' ),
			"param_name" => "separator",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => 'true'
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Separator Position", 'brick' ),
			"param_name" => "separator_position",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Above Title", 'brick' ) => "above_title",
				esc_html__( "Under Title", 'brick' ) => "under_title",
			),
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'brick' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Separator Thickness (px)", 'brick' ),
			"param_name" => "separator_thickness",
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Separator Border Style", 'brick' ),
			"param_name" => "separator_border_style",
			"value" => array(
				"" => "",
				esc_html__( "Dashed", 'brick' ) => "dashed",
				esc_html__( "Solid", 'brick' ) => "solid"
			),
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Padding Bottom(px)", 'brick' ),
			"param_name" => "padding_bottom"
		),
	)
) );


/*** Countdown ***/

vc_map( array(
	"name" => esc_html__( "Countdown", 'brick' ),
	"base" => "no_countdown",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-countdown extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Year", 'brick' ),
			"param_name" => "year",
			"value" => array(
				"" => "",
				esc_html__( "2014", 'brick' ) => "2014",
				esc_html__( "2015", 'brick' ) => "2015",
				esc_html__( "2016", 'brick' ) => "2016",
				esc_html__( "2017", 'brick' ) => "2017",
				esc_html__( "2018", 'brick' ) => "2018",
				esc_html__( "2019", 'brick' ) => "2019",
				esc_html__( "2020", 'brick' ) => "2020"
			),
			"save_always" => true
		),

		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Month", 'brick' ),
			"param_name" => "month",
			"value" => array(
				"" => "",
				esc_html__( "January", 'brick' ) => "1",
				esc_html__( "February", 'brick' ) => "2",
				esc_html__( "March", 'brick' ) => "3",
				esc_html__( "April", 'brick' ) => "4",
				esc_html__( "May", 'brick' ) => "5",
				esc_html__( "June", 'brick' ) => "6",
				esc_html__( "July", 'brick' ) => "7",
				esc_html__( "August", 'brick' ) => "8",
				esc_html__( "September", 'brick' ) => "9",
				esc_html__( "October", 'brick' ) => "10",
				esc_html__( "November", 'brick' ) => "11",
				esc_html__( "December", 'brick' ) => "12"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Day", 'brick' ),
			"param_name" => "day",
			"value" => array(
				"" => "",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24",
				"25" => "25",
				"26" => "26",
				"27" => "27",
				"28" => "28",
				"29" => "29",
				"30" => "30",
				"31" => "31",
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Hour", 'brick' ),
			"param_name" => "hour",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Minute", 'brick' ),
			"param_name" => "minute",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24",
				"25" => "25",
				"26" => "26",
				"27" => "27",
				"28" => "28",
				"29" => "29",
				"30" => "30",
				"31" => "31",
				"32" => "32",
				"33" => "33",
				"34" => "34",
				"35" => "35",
				"36" => "36",
				"37" => "37",
				"38" => "38",
				"39" => "39",
				"40" => "40",
				"41" => "41",
				"42" => "42",
				"43" => "43",
				"44" => "44",
				"45" => "45",
				"46" => "46",
				"47" => "47",
				"48" => "48",
				"49" => "49",
				"50" => "50",
				"51" => "51",
				"52" => "52",
				"53" => "53",
				"54" => "54",
				"55" => "55",
				"56" => "56",
				"57" => "57",
				"58" => "58",
				"59" => "59",
				"60" => "60",
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Month Label", 'brick' ),
			"param_name" => "month_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Day Label", 'brick' ),
			"param_name" => "day_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Hour Label", 'brick' ),
			"param_name" => "hour_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Minute Label", 'brick' ),
			"param_name" => "minute_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Second Label", 'brick' ),
			"param_name" => "second_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Month Singular Label", 'brick' ),
			"param_name" => "month_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Day Singular Label", 'brick' ),
			"param_name" => "day_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Hour Singular Label", 'brick' ),
			"param_name" => "hour_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Minute Singular Label", 'brick' ),
			"param_name" => "minute_singular_label"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Second Singular Label", 'brick' ),
			"param_name" => "second_singular_label"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Color", 'brick' ),
			"param_name" => "color",
			"description" => esc_html__( "For digits, labels and separators", 'brick' ),
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Digit Font Size (px)", 'brick' ),
			"param_name" => "digit_font_size"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Label Font Size (px)", 'brick' ),
			"param_name" => "label_font_size"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Font Weight", 'brick' ),
			"param_name" => "font_weight",
			"description" => esc_html__( "For both digits and labels", 'brick' ),
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "Thin 100", 'brick' ) => "100",
				esc_html__( "Extra-Light 200", 'brick' ) => "200",
				esc_html__( "Light 300", 'brick' ) => "300",
				esc_html__( "Regular 400", 'brick' ) => "400",
				esc_html__( "Medium 500", 'brick' ) => "500",
				esc_html__( "Semi-Bold 600", 'brick' ) => "600",
				esc_html__( "Bold 700", 'brick' ) => "700",
				esc_html__( "Extra-Bold 800", 'brick' ) => "800",
				esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Show separator", 'brick' ),
			"param_name" => "show_separator",
			"value" => array(
				esc_html__( "No", 'brick' ) => "hide_separator",
				esc_html__( "Yes", 'brick' ) => "show_separator"
			),
			'save_always' => 'true',
		),
	)
) );


/*** Pie Chart ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart", 'brick' ),
		"base" => "no_pie_chart",
		"icon" => "icon-wpb-pie-chart extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Size(px)", 'brick' ),
                "param_name" => "size"
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Type of Central text", 'brick' ),
                "param_name" => "type_of_central_text",
                "value" => array(
                    esc_html__( "Title", 'brick' ) => "title",
                    esc_html__( "Percent", 'brick' ) => "percent"
                ),
				'save_always' => 'true',
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Percentage", 'brick' ),
				"param_name" => "percent"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Show Percentage Mark", 'brick' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'brick' ) => "with_mark",
					esc_html__( "No", 'brick' ) => "without_mark"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Percentage Color", 'brick' ),
				"param_name" => "percentage_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Percentage Font", 'brick' ),
                "param_name" => "percent_font_family",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Percentage Font Size", 'brick' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Percentage Font weight", 'brick' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'brick' ) => "",
					esc_html__( "Thin 100", 'brick' ) => "100",
					esc_html__( "Extra-Light 200", 'brick' ) => "200",
					esc_html__( "Light 300", 'brick' ) => "300",
					esc_html__( "Regular 400", 'brick' ) => "400",
					esc_html__( "Medium 500", 'brick' ) => "500",
					esc_html__( "Semi-Bold 600", 'brick' ) => "600",
					esc_html__( "Bold 700", 'brick' ) => "700",
					esc_html__( "Extra-Bold 800", 'brick' ) => "800",
					esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Bar Active Color", 'brick' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Bar Inactive Color", 'brick' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'brick' ),
				"param_name" => "line_width"
			),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Chart Alignment", 'brick' ),
                "param_name" => "chart_alignment",
                "value" => array(
                    esc_html__( "Center", 'brick' ) => "",
                    esc_html__( "Left", 'brick' ) => "left",
                    esc_html__( "Right", 'brick' ) => "right"
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Margin below chart (px)", 'brick' ),
                "param_name" => "margin_below_chart"
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title", 'brick' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Title Color", 'brick' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Tag", 'brick' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				)
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Text", 'brick' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Text Color", 'brick' ),
				"param_name" => "text_color"
			),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Separator", 'brick' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'brick' ) => "yes",
                    esc_html__( "No", 'brick' ) => "no"
                ),
				'save_always' => 'true'
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Separator Color", 'brick' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Separator Border Style", 'brick' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'brick' ) => "dashed",
                    esc_html__( "Solid", 'brick' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            )
		)
) );


/*** Pie Chart 2 (Pie) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 2 (Pie)", 'brick' ),
		"base" => "no_pie_chart2",
		"icon" => "icon-wpb-pie-chart2 extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Width", 'brick' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Height", 'brick' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Legend Text Color", 'brick' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"heading" => esc_html__( "Content", 'brick' ),
				"param_name" => "content",
				"value" => esc_html__( "15,#ECAB71,Legend One; 35,#985214 ,Legend Two; 50,#e27d23,Legend Three", 'brick' )
			)

		)
) );


/*** Pie Chart 3 (Doughnut) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 3 (Doughnut)", 'brick' ),
		"base" => "no_pie_chart3",
		"category" => esc_html__( 'by Select', 'brick' ),
		"icon" => "icon-wpb-pie-chart3 extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Width", 'brick' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Height", 'brick' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Legend Text Color", 'brick' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"heading" => esc_html__( "Content", 'brick' ),
				"param_name" => "content",
				"value" => esc_html__( "15,#ECAB71,Legend One; 35,#985214 ,Legend Two; 50,#e27d23,Legend Three", 'brick' )
			)

		)
) );


/*** Pie Chart With Icon ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart With Icon", 'brick' ),
	"base" => "no_pie_chart_with_icon",
	"icon" => "icon-wpb-pie-chart-with-icon extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Size(px)", 'brick' ),
				"param_name" => "size"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Percentage", 'brick' ),
				"param_name" => "percent"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Bar Active Color", 'brick' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Bar Inactive Color", 'brick' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'brick' ),
				"param_name" => "line_width"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title", 'brick' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Title Color", 'brick' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Tag", 'brick' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
		),
		brick_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'brick' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Custom Icon Size (px)", 'brick' ),
				"param_name" => "icon_custom_size",
				"dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Size", 'brick' ),
				"param_name" => "icon_size",
				"value" => brick_qode_icon_collections()->getIconSizesArray(),
				'save_always' => 'true'
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Text", 'brick' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Text Color", 'brick' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Separator", 'brick' ),
				"param_name" => "separator",
				"value" => array(
					esc_html__( "Yes", 'brick' ) => "yes",
					esc_html__( "No", 'brick' ) => "no"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Separator Color", 'brick' ),
				"param_name" => "separator_color",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Separator Border Style", 'brick' ),
				"param_name" => "separator_border_style",
				"value" => array(
					"" => "",
					esc_html__( "Dashed", 'brick' ) => "dashed",
					esc_html__( "Solid", 'brick' ) => "solid"
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			)
		)
	)

) );


/** Horizontal progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Horizontal", 'brick' ),
		"base" => "no_progress_bar",
		"icon" => "icon-wpb-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title", 'brick' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Title Color", 'brick' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Tag", 'brick' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				)
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title Custom Size (px)", 'brick' ),
				"param_name" => "title_custom_size"
			),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Padding Bottom(px)", 'brick' ),
                "param_name" => "title_padding_bottom"
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Percentage", 'brick' ),
				"param_name" => "percent"
			),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show Percentage Number", 'brick' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'brick' ) => "yes",
                    esc_html__( "No", 'brick' ) => "no"
                ),
				'save_always' => 'true',
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Show Percentage Mark", 'brick' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'brick' ) => "with_mark",
					esc_html__( "No", 'brick' ) => "without_mark"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Percentage Type", 'brick' ),
                "param_name" => "percentage_type",
                "value" => array(
                    esc_html__( "Floating", 'brick' ) => "floating",
                    esc_html__( "Static", 'brick' ) => "static"
                ),
				'save_always' => 'true',
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Percentage Bar Height (px)", 'brick' ),
				"param_name" => "percentage_bar_height",
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Floating Type", 'brick' ),
				"param_name" => "floating_type",
				"value" => array(
					esc_html__( "Outside Floating", 'brick' ) => "floating_outside",
					esc_html__( "Inside Floating", 'brick' ) => "floating_inside"
				),
				'save_always' => 'true',
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Percentage Color", 'brick' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Percentage Background Color", 'brick' ),
                "param_name" => "percent_background_color",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Percentage Border Radius (px)", 'brick' ),
                "param_name" => "percent_border_radius",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Percentage Font Size", 'brick' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Percentage Font weight", 'brick' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'brick' ) => "",
					esc_html__( "Thin 100", 'brick' ) => "100",
					esc_html__( "Extra-Light 200", 'brick' ) => "200",
					esc_html__( "Light 300", 'brick' ) => "300",
					esc_html__( "Regular 400", 'brick' ) => "400",
					esc_html__( "Medium 500", 'brick' ) => "500",
					esc_html__( "Semi-Bold 600", 'brick' ) => "600",
					esc_html__( "Bold 700", 'brick' ) => "700",
					esc_html__( "Extra-Bold 800", 'brick' ) => "800",
					esc_html__( "Ultra-Bold 900", 'brick' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Active Background Color", 'brick' ),
				"param_name" => "active_background_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Active Border Color", 'brick' ),
				"param_name" => "active_border_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Inactive Background Color", 'brick' ),
				"param_name" => "noactive_background_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Progress Bar Height (px)", 'brick' ),
				"param_name" => "height"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Progress Bar Border Radius)", 'brick' ),
				"param_name" => "border_radius"
			)
		)
) );


/*** Vertical progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Vertical", 'brick' ),
		"base" => "no_progress_bar_vertical",
		"icon" => "icon-wpb-vertical-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array (
				"type" => "textfield",
				"heading" => esc_html__( "Title", 'brick' ),
				"param_name" => "title"
			),
            array (
				"type" => "colorpicker",
				"heading" => esc_html__( "Title Color", 'brick' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Tag", 'brick' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'brick' ) => "h2",
					esc_html__( "h3", 'brick' ) => "h3",
					esc_html__( "h4", 'brick' ) => "h4",
					esc_html__( "h5", 'brick' ) => "h5",
					esc_html__( "h6", 'brick' ) => "h6",
				)
            ),
            array (
				"type" => "textfield",
				"heading" => esc_html__( "Title Size", 'brick' ),
				"param_name" => "title_size"
			),
			 array (
				"type" => "textfield",
				"heading" => esc_html__( "Progress Bar Height(px)", 'brick' ),
				"param_name" => "bar_content_height",
				"description" => esc_html__( "Default value is 190px", 'brick' )
			),
            array (
                "type" => "colorpicker",
                "heading" => esc_html__( "Bar Color", 'brick' ),
                "param_name" => "bar_color"
            ),
            array (
                "type" => "colorpicker",
                "heading" => esc_html__( "Bar Border Color", 'brick' ),
                "param_name" => "bar_border_color"
            ),
			array (
				"type" => "colorpicker",
				"heading" => esc_html__( "Background Color", 'brick' ),
				"param_name" => "background_color"
			),
			array (
				"type" => "textfield",
				"heading" => esc_html__( "Top Border Radius", 'brick' ),
				"param_name" => "border_radius"
			),
            array (
				"type" => "textfield",
				"heading" => esc_html__( "Percent", 'brick' ),
				"param_name" => "percent"
			),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show Percentage Number", 'brick' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'brick' ) => "yes",
                    esc_html__( "No", 'brick' ) => "no"
                ),
				'save_always' => 'true',
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Show Percentage Mark", 'brick' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'brick' ) => "with_mark",
					esc_html__( "No", 'brick' ) => "without_mark"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
				"type" => "textfield",
				"heading" => esc_html__( "Percentage Text Size", 'brick' ),
				"param_name" => "percentage_text_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Percentage Color", 'brick' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "textarea",
				"heading" => esc_html__( "Text", 'brick' ),
				"param_name" => "text",
				"value" => ""
			),
            array (
                "type" => "colorpicker",
                "heading" => esc_html__( "Text Color", 'brick' ),
                "param_name" => "text_color",
                "dependency" => Array('element' => "text", 'not_empty' => true)
            )
		)
) );


/*** Progress Bar Icon ***/

vc_map( array(
	"name" => esc_html__( "Progress Bar - Icon", 'brick' ),
	"base" => "no_progress_bar_icon",
	"icon" => "icon-wpb-progress-bar-icon extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Number of Icons", 'brick' ),
                        "param_name" => "icons_number"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Number of Active Icons", 'brick' ),
                        "param_name" => "active_number"
                    )
                ),
                brick_qode_icon_collections()->getVCParamsArray(),
                array(
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Size", 'brick' ),
                        "param_name" => "size",
                        "value" => array(
                            esc_html__( "Tiny", 'brick' ) => "tiny",
                            esc_html__( "Small", 'brick' ) => "small",
                            esc_html__( "Medium", 'brick' ) => "medium",
                            esc_html__( "Large", 'brick' ) => "large",
                            esc_html__( "Very Large", 'brick' ) => "very_large",
                            esc_html__( "Custom", 'brick' ) => "custom"
                        ),
						'save_always' => 'true',
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Custom Size (px)", 'brick' ),
                        "param_name" => "custom_size",
                        "value" => "",
                        "dependency" => array('element' => 'size', 'value' => array('custom'))
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Type", 'brick' ),
                        "param_name" => "type",
                        "value" => array(
                            esc_html__( "Normal", 'brick' ) => "normal",
                            esc_html__( "Circle", 'brick' ) => "circle",
                            esc_html__( "Square", 'brick' ) => "square"
                        ),
						'save_always' => 'true',
                        "dependency" => array('element' => 'size', 'value' => array('tiny','small','medium','large','very_large'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Color", 'brick' ),
                        "param_name" => "icon_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Active Color", 'brick' ),
                        "param_name" => "icon_active_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Background Color", 'brick' ),
                        "param_name" => "background_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Background Active Color", 'brick' ),
                        "param_name" => "background_active_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Border Color", 'brick' ),
                        "param_name" => "border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'brick' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Border Active Color", 'brick' ),
                        "param_name" => "border_active_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'brick' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    )
                )
            )
) );


/*** Line Graph shortcode ***/

vc_map( array(
		"name" => esc_html__( "Line Graph", 'brick' ),
		"base" => "no_line_graph",
		"icon" => "icon-wpb-line-graph extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'brick' ),
				"param_name" => "type",
				"value" => array(
					"" => "",
					esc_html__( "Rounded edges", 'brick' ) => "rounded",
					esc_html__( "Sharp edges", 'brick' ) => "sharp"
				)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Width", 'brick' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Height", 'brick' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Custom Color", 'brick' ),
				"param_name" => "custom_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Scale steps", 'brick' ),
				"param_name" => "scale_steps"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Scale step width", 'brick' ),
				"param_name" => "scale_step_width"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Labels", 'brick' ),
				"param_name" => "labels",
				"value" => esc_html__( "Label 1, Label 2, Label 3", 'brick' )
			),
			array(
				"type" => "textarea_html",
				"heading" => esc_html__( "Content", 'brick' ),
				"param_name" => "content",
				"value" => esc_html__( "#e27d23,Legend One,1,5,10;#985214 ,Legend Two,3,7,20;#ECAB71,Legend Three,10,2,34", 'brick' )
			)
		)
) );


/*** Ordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Ordered", 'brick' ),
		"base" => "no_ordered_list",
		"icon" => "icon-wpb-ordered-list extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea_html",
				"heading" => esc_html__( "Content", 'brick' ),
				"param_name" => "content",
				"value" => "<ol><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ol>"
			)

		)
) );


/*** Unordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Unordered", 'brick' ),
		"base" => "no_unordered_list",
		"icon" => "icon-wpb-unordered-list extended-custom-icon",
		"category" => esc_html__( 'by Select', 'brick' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Style", 'brick' ),
				"param_name" => "style",
				"value" => array(
					esc_html__( "Circle", 'brick' ) => "circle",
					esc_html__( "Number", 'brick' ) => "number",
					esc_html__( "Line", 'brick' ) => "line"
				),
				'save_always' => 'true'
			),
            array(
                "type" => "dropdown",
				"heading" => esc_html__( "Number Type", 'brick' ),
				"param_name" => "number_type",
				"value" => array(
					esc_html__( "Circle", 'brick' ) => "circle_number",
					esc_html__( "Transparent", 'brick' ) => "transparent_number"
				),
				'save_always' => 'true',
                "dependency" => array('element' => "style", 'value' => array('number'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Animate List", 'brick' ),
				"param_name" => "animate",
				"value" => array(
					esc_html__( "No", 'brick' ) => "no",
					esc_html__( "Yes", 'brick' ) => "yes"
				),
				'save_always' => 'true'
			),
            array(
				"type" => "dropdown",
				"heading" => esc_html__( "Font Weight", 'brick' ),
				"param_name" => "font_weight",
				"value" => array(
                    esc_html__( "Default", 'brick' ) => "",
					esc_html__( "Light", 'brick' ) => "light",
					esc_html__( "Normal", 'brick' ) => "normal",
                    esc_html__( "Bold", 'brick' ) => "bold"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "textarea_html",
				"heading" => esc_html__( "Content", 'brick' ),
				"param_name" => "content",
				"value" => "<ul><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ul>"
			)
		)
) );


/*** Icon List Item ***/

vc_map( array(
	"name" => esc_html__( "Icon List Item", 'brick' ),
	"base" => "no_icon_list_item",
	"icon" => "icon-wpb-icon-list-item extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"params" => array_merge(
		brick_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Type", 'brick' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'brick' ) => "normal_icon_list",
					esc_html__( "Small", 'brick' ) => "small_icon_list"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'brick' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon Margin Right (px)", 'brick' ),
				"param_name" => "icon_margin_right"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Border Type", 'brick' ),
				"param_name" => "border_type",
				"value" => array(
					"" => "",
					esc_html__( "Circle", 'brick' ) => "circle",
					esc_html__( "Square", 'brick' ) => "square"
				)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color", 'brick' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title", 'brick' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Title Color", 'brick' ),
				"param_name" => "title_color"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title size (px)", 'brick' ),
				"param_name" => "title_size"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Font Weight (px)", 'brick' ),
				"param_name" => "title_font_weight",
				"value" => $font_weight_array,
				'save_always' => 'true'
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Bottom Margin (px)", 'brick' ),
				"param_name" => "bottom_margin"
			)
		)
	)
) );


/*** Icon Shortcode ***/

vc_map( array(
	"name" => esc_html__( "Icon", 'brick' ),
	"base" => "no_icons",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-icons extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		brick_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Size", 'brick' ),
				"param_name" => 'fa_size',
				"value" => brick_qode_icon_collections()->getIconSizesArray(),
				'save_always' => 'true'
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Custom Size (px)", 'brick' ),
				"param_name" => "custom_size",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'brick' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'brick' ) => "normal",
					esc_html__( "Circle", 'brick' ) => "circle",
					esc_html__( "Square", 'brick' ) => "square"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Rotated Shape", 'brick' ),
				"param_name" => "rotated_shape",
				"value" => array(
					esc_html__( "No", 'brick' ) => "no",
					esc_html__( "Yes", 'brick' ) => "yes"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => "type", 'value' => "square")
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Border radius", 'brick' ),
				"param_name" => "border_radius",
				"description" => esc_html__( "Please insert border radius(Rounded corners) in px. For example: 4 ", 'brick' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Shape Size (px)", 'brick' ),
				"param_name" => 'shape_size',
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'brick' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Position", 'brick' ),
				"param_name" => "position",
				"value" => array(
					esc_html__( "Normal", 'brick' ) => "",
					esc_html__( "Left", 'brick' ) => "left",
					esc_html__( "Center", 'brick' ) => "center",
					esc_html__( "Right", 'brick' ) => "right"
				),
				'save_always' => 'true'
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color", 'brick' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square')),
				"description" => esc_html__( "Same color for Inner Border if enabled", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Border Width", 'brick' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1. Enter just number. Omit pixels", 'brick' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Background Color", 'brick' ),
				"param_name" => "background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Hover Icon Color", 'brick' ),
				"param_name" => "hover_icon_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Hover Border Color", 'brick' ),
				"param_name" => "hover_border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Hover Background Color", 'brick' ),
				"param_name" => "hover_background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Shadow", 'brick' ),
				"param_name" => "icon_shadow",
				"value" => array(
					esc_html__( "No", 'brick' ) => "no",
					esc_html__( "Yes", 'brick' ) => "yes"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Shadow Color", 'brick' ),
				"param_name" => "shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Hover Shadow Color", 'brick' ),
				"param_name" => "hover_shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Inner Border", 'brick' ),
				"param_name" => "inner_border",
				"value" => array(
					esc_html__( "No", 'brick' ) => "no",
					esc_html__( "Yes", 'brick' ) => "yes"
				),
				'save_always' => 'true',
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Margin", 'brick' ),
				"param_name" => "margin",
				"description" => esc_html__( "Margin (top right bottom left)", 'brick' )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Animation", 'brick' ),
				"param_name" => "icon_animation",
				"value" => array(
					esc_html__( "No", 'brick' ) => "",
					esc_html__( "Yes", 'brick' ) => "q_icon_animation"
				)
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon Animation Delay (ms)", 'brick' ),
				"param_name" => "icon_animation_delay",
				"value" => "",
				"dependency" => Array('element' => "icon_animation", 'value' => 'q_icon_animation')
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Animation on Hover", 'brick' ),
				"param_name" => "icon_hover_animation",
				"value" => array(
					esc_html__( "None", 'brick' ) => "none",
					esc_html__( "Border Outer", 'brick' ) => "border_appear",
					esc_html__( "Border Inner", 'brick' ) => "border_bckg_separate",
					esc_html__( "Enlarge Background", 'brick' ) => "bckg_enlarge",
					esc_html__( "Fill From Center", 'brick' ) => "bckg_change"
				),
				'save_always' => 'true',
				"description" => esc_html__( "Do not set border style attributes when using Border Outer or Border Inner", 'brick' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "checkbox",
				"heading" => esc_html__( "Use For Back To Top", 'brick' ),
				"value" => array("Use this icon as Back to Top button?" => "yes"),
				"param_name" => "back_to_top_icon"
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Link", 'brick' ),
				"param_name" => "link",
				"value" => ""
			),
			array(
				"type" => "checkbox",
				"heading" => esc_html__( "Use Link as Anchor", 'brick' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "anchor_icon",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'brick' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Target", 'brick' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'brick' ) => "_self",
					esc_html__( "Blank", 'brick' ) => "_blank"
				),
				'save_always' => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
		))
	)
) );


/*** Social icon ***/

vc_map( array(
	"name" => esc_html__( "Social Icons", 'brick' ),
	"base" => "no_social_icons",
	"icon" => "icon-wpb-social-icons extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'brick' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'brick' ) => "normal_social",
					esc_html__( "Circle", 'brick' ) => "circle_social",
					esc_html__( "Square", 'brick' ) => "square_social"
				),
				'save_always' => true
			)
		),
		brick_qode_icon_collections()->getSocialVCParamsArray(array(), '', false, array('linea_icons', 'simple_line_icons')),
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Size", 'brick' ),
				"param_name" => "size",
				"value" => array(
					esc_html__( "Tiny", 'brick' ) => "tiny",
					esc_html__( "Small", 'brick' ) => "small",
					esc_html__( "Medium", 'brick' ) => "medium",
					esc_html__( "Large", 'brick' ) => "large",
					esc_html__( "Huge", 'brick' ) => "huge"
				),
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Link", 'brick' ),
				"param_name" => "link",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Target", 'brick' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'brick' ) => "_self",
					esc_html__( "Blank", 'brick' ) => "_blank"
				),
				'save_always' => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'brick' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Background Color", 'brick' ),
				"param_name" => "background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color", 'brick' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type"              => "colorpicker",
				"holder"            => "div",
				"heading" => esc_html__( "Icon Hover Color", 'brick' ),
				"param_name"        => "icon_hover_color"
			),
			array(
				"type"              => "colorpicker",
				"holder"            => "div",
				"heading" => esc_html__( "Background Hover Color", 'brick' ),
				"param_name"        => "background_hover_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type"              => "colorpicker",
				"holder"            => "div",
				"heading" => esc_html__( "Border Hover Color", 'brick' ),
				"param_name"        => "border_hover_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			)
		)
	)
) );


/*** Icon with Text ***/

vc_map( array(
	"name" => esc_html__( "Icon With Text", 'brick' ),
	"base" => "no_icon_text",
	"icon" => "icon-wpb-icon-with-text extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Box type", 'brick' ),
                        "param_name" => "box_type",
                        "value" => array(
                            esc_html__( "Normal", 'brick' ) => "normal",
                            esc_html__( "Icon in a box", 'brick' ) => "icon_in_a_box"
                        ),
						'save_always' => true
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Box Border", 'brick' ),
                        "param_name" => "box_border",
                        "value" => array(
                            esc_html__( "Yes", 'brick' ) => "yes",
                            esc_html__( "No", 'brick' ) => "no"
                        ),
						'save_always' => true,
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Box Border Color", 'brick' ),
                        "param_name" => "box_border_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Box Background Color", 'brick' ),
                        "param_name" => "box_background_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    )
                ),
                brick_qode_icon_collections()->getVCParamsArray(),
                array(
                    array(
                        "type" => "attach_image",
                        "heading" => esc_html__( "Custom Icon", 'brick' ),
                        "param_name" => "custom_icon"
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Icon Type", 'brick' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Normal", 'brick' ) => "normal",
                            esc_html__( "Circle", 'brick' ) => "circle",
                            esc_html__( "Square", 'brick' ) => "square"
                        ),
						'save_always' => true,
                        "description" => esc_html__( "This attribute does not work when Icon Position is Top. In This case Icon Type is Normal", 'brick' ),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Icon border width (px)", 'brick' ),
                        "param_name" => "icon_border_width",
                        "description" => esc_html__( "Enter just number, omit pixels", 'brick' ),
                        "dependency" => array('element' => 'icon_type' , 'value' => array('circle', 'square'))
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Icon Size / Icon Space From Text", 'brick' ),
                        "param_name" => "icon_size",
                        "value" => brick_qode_icon_collections()->getIconSizesArray(),
						'save_always' => true,
                        "description" => esc_html__( "This attribute does not work when Icon Position is Top", 'brick' )
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Custom Icon Size (px)", 'brick' ),
                        "param_name" => "custom_icon_size",
                        "description" => esc_html__( "Default value is 30", 'brick' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Icon Animation", 'brick' ),
                        "param_name" => "icon_animation",
                        "value" => array(
                            esc_html__( "No", 'brick' ) => "",
                            esc_html__( "Yes", 'brick' ) => "q_icon_animation"
                        ),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Icon Animation Delay (ms)", 'brick' ),
                        "param_name" => "icon_animation_delay",
                        "value" => "",
                        "dependency" => Array('element' => "icon_animation", 'value' => array('q_icon_animation'))
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Icon Animation on Hover", 'brick' ),
                        "param_name" => "icon_animation_hover",
                        "value" => array(
                        	esc_html__( "No", 'brick' ) => "no",
                        	esc_html__( "Zoom Icon", 'brick' ) => "zoom"
                        	),
						'save_always' => true,
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Icon Position", 'brick' ),
                        "param_name" => "icon_position",
                        "value" => array(
                            esc_html__( "Top", 'brick' ) => "top",
                            esc_html__( "Left", 'brick' ) => "left",
                            esc_html__( "Left From Title", 'brick' ) => "left_from_title",
                            esc_html__( "Right", 'brick' ) => "right"
                        ),
						'save_always' => true,
                        "description" => esc_html__( "Icon Position (only for normal box type)", 'brick' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Icon Margin", 'brick' ),
                        "param_name" => "icon_margin",
                        "value" => "",
                        "description" => esc_html__( "Margin should be set in a top right bottom left format", 'brick' )
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Text Left Padding (px)", 'brick' ),
                        "param_name" => "text_left_padding",
                        "description" => esc_html__( "Default value is 86. Only when Icon Position is Left", 'brick' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('left'))
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Text Right Padding (px)", 'brick' ),
                        "param_name" => "text_right_padding",
                        "description" => esc_html__( "Default value is 86. Only when Icon Position is Right", 'brick' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('right'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Border Color", 'brick' ),
                        "param_name" => "icon_border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'brick' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Color", 'brick' ),
                        "param_name" => "icon_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Hover Color", 'brick' ),
                        "param_name" => "icon_hover_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Background Color", 'brick' ),
                        "param_name" => "icon_background_color",
                        "description" => esc_html__( "Icon Background Color (only for square and circle icon type)", 'brick' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Separator", 'brick' ),
                        "param_name" => "separator",
                        "value" => array(
                            esc_html__( "No", 'brick' ) => "no",
                            esc_html__( "Yes", 'brick' ) => "yes",
                        ),
						'save_always' => true
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Separator Color", 'brick' ),
                        "param_name" => "separator_color",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Separator Thickness (px)", 'brick' ),
                        "param_name" => "separator_thickness",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Separator Size (px)", 'brick' ),
                        "param_name" => "separator_width",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Separator Alignment", 'brick' ),
                        "param_name" => "separator_alignment",
                        "value" => array(
                            esc_html__( "Center", 'brick' ) => "none",
                            esc_html__( "Left", 'brick' ) => "left",
                            esc_html__( "Right", 'brick' ) => "right",
                        ),
						'save_always' => true,
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Title", 'brick' ),
                        "param_name" => "title",
                        "value" => ""
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Title Tag", 'brick' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'brick' ) => "h2",
                            esc_html__( "h3", 'brick' ) => "h3",
                            esc_html__( "h4", 'brick' ) => "h4",
                            esc_html__( "h5", 'brick' ) => "h5",
                            esc_html__( "h6", 'brick' ) => "h6",
                        ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Title Color", 'brick' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Title Top Padding (px)", 'brick' ),
                        "param_name" => "title_padding",
                        "value" => "",
                        "description" => esc_html__( "This attribute is used for boxed type", 'brick' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Text", 'brick' ),
                        "param_name" => "text",
                        "value" => ""
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Text Color", 'brick' ),
                        "param_name" => "text_color",
                        "dependency" => Array('element' => "text", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Link", 'brick' ),
                        "param_name" => "link",
                        "value" => "",
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Link Icon", 'brick' ),
                        "param_name" => "link_icon",
                        "value" => array(
                            esc_html__( "No", 'brick' ) => "no",
                            esc_html__( "Yes", 'brick' ) => "yes"
                        ),
						'save_always' => true,
                        "dependency" => Array('element' => "link", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Link Text", 'brick' ),
                        "param_name" => "link_text",
                        "description" => esc_html__( "Default value is READ MORE", 'brick' ),
                        "dependency" => Array('element' => "link_icon", 'value' => array('no'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Button Link Text Color", 'brick' ),
                        "param_name" => "link_color",
                        "dependency" => Array('element' => "link_text", 'not_empty' => true)
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Target", 'brick' ),
                        "param_name" => "target",
                        "value" => array(
                            ""   => "",
                            esc_html__( "Self", 'brick' ) => "_self",
                            esc_html__( "Blank", 'brick' ) => "_blank"
                        ),
                        "dependency" => Array('element' => "link", 'not_empty' => true)
                    )
                )
            )
) );

/*** Separator with Icon ***/

vc_map( array(
	"name" => esc_html__( "Separator with Icon", 'brick' ),
	"base" => "no_separator_with_icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-separator-with-icon extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Separator Line Style", 'brick' ),
				"param_name" => "border_style",
				"value" => array(
					esc_html__( "Solid", 'brick' ) => "solid",
					esc_html__( "Dashed", 'brick' ) => "dashed",
					esc_html__( "Dotted", 'brick' ) => "dotted",
					esc_html__( "Transparent", 'brick' ) => "transparent"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose a style for the separator line", 'brick' )
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Line Color", 'brick' ),
				"param_name" => "color",
				"value" => "",
				"description" => esc_html__( "Choose a color for the separator line", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Line Width (px)", 'brick' ),
				"param_name" => "width",
				"value" => "",
				"description" => esc_html__( "Insert width for the separator line", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Line Thickness (px)", 'brick' ),
				"param_name" => "thickness",
				"value" => "",
				"description" => esc_html__( "Insert thickness for the separator line", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Top Margin (px)", 'brick' ),
				"param_name" => "up",
				"value" => "",
				"description" => esc_html__( "Insert top margin for the separator", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Bottom Margin (px)", 'brick' ),
				"param_name" => "down",
				"value" => "",
				"description" => esc_html__( "Insert bottom margin for the separator", 'brick' )
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'brick' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Default Icon", 'brick' ) => "with_icon",
					esc_html__( "Custom Icon", 'brick' ) => "with_custom_icon"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose a style for the separator line", 'brick' )
			),
		),
		brick_qode_icon_collections()->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon Custom Size (px)", 'brick' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"description" => esc_html__( "Insert size for the icon (default value is 20)", 'brick' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Type", 'brick' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'brick' ) => "normal",
					esc_html__( "Circle", 'brick' ) => "circle",
					esc_html__( "Square", 'brick' ) => "square"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose icon type", 'brick' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"heading" => esc_html__( "Custom Icon", 'brick' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon Position", 'brick' ),
				"param_name" => "separator_icon_position",
				"value" => array(
					esc_html__( "Center", 'brick' ) => "center",
					esc_html__( "Left", 'brick' ) => "left",
					esc_html__( "Right", 'brick' ) => "right"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose position of the icon", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon Margins", 'brick' ),
				"param_name" => "icon_margin",
				"description" => esc_html__( "Insert left and right icon margins", 'brick' )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon Border radius", 'brick' ),
				"param_name" => "icon_border_radius",
				"description" => esc_html__( "Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default. ", 'brick' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Shape Size (px)", 'brick' ),
				"param_name" => 'icon_shape_size',
				"value" => "",
				"description" => esc_html__( "Insert size for a shape around the icon", 'brick' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'brick' ),
				"param_name" => "icon_color",
				"description" => esc_html__( "Choose a color for the icon", 'brick' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color", 'brick' ),
				"param_name" => "icon_border_color",
				"description" => esc_html__( "Choose a color for the border around the icon shape", 'brick' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon Border Width", 'brick' ),
				"param_name" => "icon_border_width",
				"description" => esc_html__( "Insert border width (just number, omit pixels)", 'brick' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Background Color", 'brick' ),
				"param_name" => "icon_background_color",
				"description" => esc_html__( "Choose a background color for the icon shape", 'brick' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Hover Icon Color", 'brick' ),
				"param_name" => "hover_icon_color",
				"description" => esc_html__( "Choose a hover color for the icon", 'brick' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Hover Border Color", 'brick' ),
				"param_name" => "hover_icon_border_color",
				"description" => esc_html__( "Choose a hover color for the border around the icon shape", 'brick' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Hover Background Color", 'brick' ),
				"param_name" => "hover_icon_background_color",
				"description" => esc_html__( "Choose a background hover color for the icon shape", 'brick' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),array(
			"type" => "textfield",
			"heading" => esc_html__( "Link", 'brick' ),
			"param_name" => "link"
		),
			array(
				"type" => "checkbox",
				"heading" => esc_html__( "Use Link as Anchor", 'brick' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "icon_anchor",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'brick' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Target", 'brick' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'brick' ) => "_self",
					esc_html__( "Blank", 'brick' ) => "_blank"
				),
				'save_always' => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
			)
		)
	)

) );


/*** Social Share ***/

vc_map( array(
	"name" => esc_html__( "Social Share", 'brick' ),
	"base" => "no_social_share",
	"icon" => "icon-wpb-social-share extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"show_settings_on_create" => false
) );


/*** Cover Boxes ***/

vc_map( array(
	"name" => esc_html__( "Cover Boxes", 'brick' ),
	"base" => "no_cover_boxes",
	"icon" => "icon-wpb-cover-boxes extended-custom-icon",
	"category" => esc_html__( 'by Select', 'brick' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Active element", 'brick' ),
			"param_name" => "active_element",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title tag", 'brick' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'brick' ) => "h2",
				esc_html__( "h3", 'brick' ) => "h3",
				esc_html__( "h4", 'brick' ) => "h4",
				esc_html__( "h5", 'brick' ) => "h5",
				esc_html__( "h6", 'brick' ) => "h6",
			),
			"description" => esc_html__( "Choose with heading tag to display for titles", 'brick' )
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Number of items", 'brick' ),
			"param_name" => "number_of_items",
			"value" => array(
				"" => "",
				esc_html__( "2", 'brick' ) => "2",
				esc_html__( "3", 'brick' ) => "3"
			),
			"description" => esc_html__( "Choose the number of items shown", 'brick' )
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Image 1", 'brick' ),
			"param_name" => "image1"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title 1", 'brick' ),
			"param_name" => "title1",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color 1", 'brick' ),
			"param_name" => "title_color1"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text 1", 'brick' ),
			"param_name" => "text1",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Text Color 1", 'brick' ),
			"param_name" => "text_color1"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Link 1", 'brick' ),
			"param_name" => "link1",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Link label 1", 'brick' ),
			"param_name" => "link_label1",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Target 1", 'brick' ),
			"param_name" => "target1",
			"value" => array(
				esc_html__( "Self", 'brick' ) => "_self",
				esc_html__( "Blank", 'brick' ) => "_blank"
			),
			'save_always' => true
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Image 2", 'brick' ),
			"param_name" => "image2"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title 2", 'brick' ),
			"param_name" => "title2",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color 2", 'brick' ),
			"param_name" => "title_color2"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text 2", 'brick' ),
			"param_name" => "text2",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Text Color 2", 'brick' ),
			"param_name" => "text_color2"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Link 2", 'brick' ),
			"param_name" => "link2",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Link label 2", 'brick' ),
			"param_name" => "link_label2",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Target 2", 'brick' ),
			"param_name" => "target2",
			"value" => array(
				esc_html__( "Self", 'brick' ) => "_self",
				esc_html__( "Blank", 'brick' ) => "_blank"
			),
			'save_always' => true
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Image 3", 'brick' ),
			"param_name" => "image3",
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title 3", 'brick' ),
			"param_name" => "title3",
			"value" => "",
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color 3", 'brick' ),
			"param_name" => "title_color3",
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Text 3", 'brick' ),
			"param_name" => "text3",
			"value" => "",
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Text Color 3", 'brick' ),
			"param_name" => "text_color3",
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Link 3", 'brick' ),
			"param_name" => "link3",
			"value" => "",
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Link label 3", 'brick' ),
			"param_name" => "link_label3",
			"value" => "",
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Target 3", 'brick' ),
			"param_name" => "target3",
			"value" => array(
				esc_html__( "Self", 'brick' ) => "_self",
				esc_html__( "Blank", 'brick' ) => "_blank"
			),
			'save_always' => true,
			"dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Read More Button Style", 'brick' ),
			"param_name" => "read_more_button_style",
			"value" => array(
				esc_html__( "Default", 'brick' ) => "",
				esc_html__( "No", 'brick' ) => "no",
				esc_html__( "Yes", 'brick' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Separator", 'brick' ),
			"param_name" => "separator",
			"value" => array(
				esc_html__( "Yes", 'brick' ) => "yes",
				esc_html__( "No", 'brick' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'brick' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Separator Border Style", 'brick' ),
			"param_name" => "separator_border_style",
			"value" => array(
				"" => "",
				esc_html__( "Dashed", 'brick' ) => "dashed",
				esc_html__( "Solid", 'brick' ) => "solid"
			),
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		)
	)
) );


/*** Interactive Banners ***/

vc_map( array(
		"name" => esc_html__( "Interactive Banners", 'brick' ),
		"base" => "no_interactive_banners",
		"category" => esc_html__( 'by Select', 'brick' ),
		"icon" => "icon-wpb-interactive-banners extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Width", 'brick' ),
                            "param_name" => "layout_width",
                            "value" => array(
                                ""   => "",
                                esc_html__( "1/2", 'brick' ) => "one_half",
                                esc_html__( "1/3", 'brick' ) => "one_third",
                                esc_html__( "1/4", 'brick' ) => "one_fourth",
                            )
                        ),
                        array(
                            "type" => "attach_image",
                            "heading" => esc_html__( "Image", 'brick' ),
                            "param_name" => "image"
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Image Color Overlay", 'brick' ),
                            "param_name" => "overlay_color",
                            "value" => "",
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Image Hover Color Overlay", 'brick' ),
                            "param_name" => "overlay_color_hover",
                            "value" => "",
                        ),
						array(
							"type" => "dropdown",
							"heading" => esc_html__( "Image Zoom on Hover", 'brick' ),
							"param_name" => "image_animate",
							"value" => array(
								esc_html__( "No", 'brick' ) => "no",
								esc_html__( "Yes", 'brick' ) => "yes"
							),
							'save_always' => true,
							"dependency" => Array('element' => "image", 'not_empty' => true)
						),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Show Image Inner Border", 'brick' ),
                            "param_name" => "show_border",
                            "value" => array(
                                esc_html__( "Always", 'brick' ) => "always",
								esc_html__( "Only On Hover", 'brick' ) => "on_hover",
								esc_html__( "Never", 'brick' ) => "never"
                            ),
							'save_always' => true
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Image Inner Border Color", 'brick' ),
                            "param_name" => "border_color",
                            "dependency" => Array('element' => "show_border", 'value' => array('always','on_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Inner Border Offset (px)", 'brick' ),
                            "param_name" => "inner_border_offset",
                            "value" => "",
                            "description" => esc_html__( "Default value is 5", 'brick' ),
                            "dependency" => Array('element' => "show_border", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Padding Left/Right (%)", 'brick' ),
                            "param_name" => "content_padding",
                            "value" => "",
                            "description" => esc_html__( "Set left/right padding that will apply to content", 'brick' )
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Alignment", 'brick' ),
                            "param_name" => "alignment",
                            "value" => array(
                            	esc_html__( "Center", 'brick' ) => "center",
                            	esc_html__( "Left", 'brick' ) => "left",
                            	esc_html__( "Right", 'brick' ) => "right"
                            	),
							'save_always' => true,
                            "description" => esc_html__( "Set general alignment", 'brick' )
                        ),
						array(
							"type" => "dropdown",
							"heading" => esc_html__( "Show Icon", 'brick' ),
							"param_name" => "show_icon",
							"value" => array(
								esc_html__( "Always", 'brick' ) => "always",
								esc_html__( "Only On Hover", 'brick' ) => "on_hover",
								esc_html__( "Never", 'brick' ) => "never"
							),
							'save_always' => true,
						),
                    ),
                    brick_qode_icon_collections()->getVCParamsArray((array('element' => "show_icon", 'value' => array('always', 'on_hover'))), '', true),
                    array(
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Icon Type", 'brick' ),
                            "param_name" => "icon_type",
                            "value" => array(
                                esc_html__( "Normal", 'brick' ) => "normal",
                                esc_html__( "Circle", 'brick' ) => "circle",
                                esc_html__( "Square", 'brick' ) => "square"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Icon Size (px)", 'brick' ),
                            "param_name" => "icon_custom_size",
                            "value" => "",
                            "description" => esc_html__( "Default value is 20", 'brick' ),
                            "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Icon Color", 'brick' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Icon Zoom on Hover", 'brick' ),
                            "param_name" => "icon_zoom",
                            "value" => array(
                                esc_html__( "No", 'brick' ) => "no",
                                esc_html__( "Yes", 'brick' ) => "yes"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Show Title", 'brick' ),
                            "param_name" => "show_title",
                            "value" => array(
                                esc_html__( "Always", 'brick' ) => "always",
                                esc_html__( "Only On Hover", 'brick' ) => "on_hover",
                                esc_html__( "Never", 'brick' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Title Text", 'brick' ),
                            "param_name" => "title",
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Title Color", 'brick' ),
                            "param_name" => "title_color",
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Title Size (px)", 'brick' ),
                            "param_name" => "title_size",
                            "description" => esc_html__( "Default value is 17", 'brick' ),
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover'))
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Title Tag", 'brick' ),
                            "param_name" => "title_tag",
                            "value" => array(
                                ""   => "",
                                esc_html__( "h2", 'brick' ) => "h2",
                                esc_html__( "h3", 'brick' ) => "h3",
                                esc_html__( "h4", 'brick' ) => "h4",
                                esc_html__( "h5", 'brick' ) => "h5",
                                esc_html__( "h6", 'brick' ) => "h6",
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "title", 'not_empty' => true)
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Show Button", 'brick' ),
                            "param_name" => "show_button",
                            "value" => array(
                                esc_html__( "Always", 'brick' ) => "always",
                                esc_html__( "Only On Hover", 'brick' ) => "on_hover",
                                esc_html__( "Never", 'brick' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Button Height", 'brick' ),
                            "param_name" => "button_size",
                            "description" => esc_html__( "It uses small button options (px)", 'brick' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Button Left and Right Padding", 'brick' ),
                            "param_name" => "button_padding",
                            "description" => esc_html__( "It uses small button options (px)", 'brick' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Button Text", 'brick' ),
                            "param_name" => "link_text",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Link Button to following URL", 'brick' ),
                            "param_name" => "button_link",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Link Target", 'brick' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'brick' ) => "_self",
                                esc_html__( "Blank", 'brick' ) => "_blank"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Button Text Color", 'brick' ),
                            "param_name" => "link_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Button Border Color", 'brick' ),
                            "param_name" => "link_border_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Button Background Color", 'brick' ),
                            "param_name" => "link_background_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Button Animation", 'brick' ),
                            "param_name" => "button_animation",
                            "value" => array(
                                esc_html__( "Fade in", 'brick' ) => "fade_in",
                                esc_html__( "Zoom", 'brick' ) => "zoom",
                                esc_html__( "Slides Up", 'brick' ) => "slides_up"
                            ),
							'save_always' => true,
                            "description" => esc_html__( "This option does not work if Hide Text Content on Hover enabled", 'brick' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover"))
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Add Link Over Banner Content", 'brick' ),
                            "param_name" => "link_over_content",
                            "value" => array(
                                esc_html__( "No", 'brick' ) => "no",
                                esc_html__( "Yes", 'brick' ) => "yes"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "show_button", 'value' => "never")
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Link Banner Content to following URL", 'brick' ),
                            "param_name" => "content_link",
                            "dependency" => Array('element' => "link_over_content", 'value' => 'yes')
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Show Separator under Title", 'brick' ),
                            "param_name" => "separator",
                            "value" => array(
                                esc_html__( "Never", 'brick' ) => "no",
                                esc_html__( "Always", 'brick' ) => "yes",
                                esc_html__( "Only On Hover", 'brick' ) => "on_hover"
                            ),
							'save_always' => true
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__( "Separator Thickness (px)", 'brick' ),
                            "param_name" => "separator_thickness",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "heading" => esc_html__( "Separator Color", 'brick' ),
                            "param_name" => "separator_color",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Separator Animation", 'brick' ),
                            "param_name" => "separator_animate",
                            "value" => array(
                                esc_html__( "Yes", 'brick' ) => "yes",
                                esc_html__( "No", 'brick' ) => "no",
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "dropdown",
                            "heading" => esc_html__( "Show Content", 'brick' ),
                            "param_name" => "show_content",
                            "value" => array(
                                esc_html__( "Always", 'brick' ) => "always",
                                esc_html__( "Only On Hover", 'brick' ) => "on_hover",
                                esc_html__( "Never", 'brick' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textarea_html",
                            "heading" => esc_html__( "Content", 'brick' ),
                            "param_name" => "content",
                            "value" => "<p>".esc_html__( "This is sample content text for shortcode element.", 'brick' ) ."</p>"
                        )
                    )
                )
    )
);


/*** Image with Text and Icon ***/

vc_map( array(
    "name" => esc_html__( "Image with text and Icon", 'brick' ),
    "base" => "no_image_with_text_and_icon",
    "icon" => "icon-wpb-image-with-text-and-icon extended-custom-icon",
    "category" => esc_html__( 'by Select', 'brick' ),
    "allowed_container_element" => 'vc_row',
    "params" => array_merge(
                array(
                    array(
                        "type" => "attach_image",
                        "heading" => esc_html__( "Image", 'brick' ),
                        "param_name" => "image"
                    )
                ),
                brick_qode_icon_collections()->getVCParamsArray(array(), '', true),
                array(
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Icon Type", 'brick' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Circle", 'brick' ) => "circle",
                            esc_html__( "Square", 'brick' ) => "square"
                        ),
						'save_always' => true,
                        "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Custom Size (px)", 'brick' ),
                        "param_name" => "icon_custom_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 25", 'brick' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Custom Shape Size (px)", 'brick' ),
                        "param_name" => "icon_shape_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 100", 'brick' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Color", 'brick' ),
                        "param_name" => "icon_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Icon Background Color", 'brick' ),
                        "param_name" => "icon_background_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => brick_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Link", 'brick' ),
                        "param_name" => "link"
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Link Target", 'brick' ),
                        "param_name" => "target",
                        "value" => array(
                            "" => "",
                            esc_html__( "Self", 'brick' ) => "_self",
                            esc_html__( "Blank", 'brick' ) => "_blank"
                        )
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Title", 'brick' ),
                        "param_name" => "title"
                    ),
                    array(
                        "type" => "dropdown",
                        "heading" => esc_html__( "Title Tag", 'brick' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'brick' ) => "h2",
                            esc_html__( "h3", 'brick' ) => "h3",
                            esc_html__( "h4", 'brick' ) => "h4",
                            esc_html__( "h5", 'brick' ) => "h5",
                            esc_html__( "h6", 'brick' ) => "h6",
                        ),
                        "description" => esc_html__( "Default value is h4", 'brick' ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "heading" => esc_html__( "Title Color", 'brick' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textarea_html",
                        "heading" => esc_html__( "Content", 'brick' ),
                        "param_name" => "content",
                        "value" => "<p>".esc_html__( "This is sample content text for shortcode element.", 'brick' ) ."</p>"
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Top Margin", 'brick' ),
                        "param_name" => "position_top",
                        "description" => esc_html__( "Select top position of title from image. Default value is 75", 'brick' )
                    )
                )
            )

) );


/*** Image with text ***/

vc_map( array(
	"name" => esc_html__( "Image With Text", 'brick' ),
	"base" => "no_image_with_text",
	"category" => esc_html__( 'by Select', 'brick' ),
	"icon" => "icon-wpb-image-with-text extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_image",
			"heading" => esc_html__( "Image", 'brick' ),
			"param_name" => "image"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Alignment", 'brick' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "Center", 'brick' ) => "center",
				esc_html__( "Left", 'brick' ) => "left",
				esc_html__( "Right", 'brick' ) => "right"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Title", 'brick' ),
			"param_name" => "title"
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Title Color", 'brick' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Title Tag", 'brick' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'brick' ) => "h2",
				esc_html__( "h3", 'brick' ) => "h3",
				esc_html__( "h4", 'brick' ) => "h4",
				esc_html__( "h5", 'brick' ) => "h5",
				esc_html__( "h6", 'brick' ) => "h6",
			)
		),
		array(
			"type" => "textarea_html",
			"heading" => esc_html__( "Content", 'brick' ),
			"param_name" => "content",
			"value" => "<p>".esc_html__( "This is sample content text for shortcode element.", 'brick' ) ."</p>"
		)
	)
) );


/*** Image hover ***/

vc_map( array(
		"name" => esc_html__( "Image Hover", 'brick' ),
		"base" => "no_image_hover",
		"category" => esc_html__( 'by Select', 'brick' ),
		"icon" => "icon-wpb-image-hover extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "attach_image",
				"heading" => esc_html__( "Image", 'brick' ),
				"param_name" => "image"
			),
			array(
				"type" => "attach_image",
				"heading" => esc_html__( "Hover Image", 'brick' ),
				"param_name" => "hover_image"
			),
            array(
				"type" => "textfield",
				"heading" => esc_html__( "Link", 'brick' ),
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Target", 'brick' ),
				"param_name" => "target",
                "value" => array(
                    esc_html__( "Self", 'brick' ) => "_self",
                    esc_html__( "Blank", 'brick' ) => "_blank"
                ),
				'save_always' => true
			),
            array(
				"type" => "dropdown",
				"heading" => esc_html__( "Animation", 'brick' ),
				"param_name" => "animation",
                "value" => array(
                    "" => "",
                    esc_html__( "Yes", 'brick' ) => "yes",
                    esc_html__( "No", 'brick' ) => "no"
                )
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Animation speed (In seconds)", 'brick' ),
				"param_name" => "animation_speed",
				"dependency" => array('element' => "animation", 'value' => array("yes"))
			),
            array(
				"type" => "textfield",
				"heading" => esc_html__( "Transition delay", 'brick' ),
				"param_name" => "transition_delay",
                "dependency" => array('element' => "animation", 'value' => array("yes"))
			)
		)
) );


/*** Contact Form 7 ***/

if(brick_qode_contact_form_7_installed()){
	vc_add_param("contact-form-7", array(
		"type" => "dropdown",
		"heading" => esc_html__( "Style", 'brick' ),
		"param_name" => "html_class",
		"value" => array(
			esc_html__( "Default", 'brick' ) => "default",
			esc_html__( "Custom Style 1", 'brick' ) => "cf7_custom_style_1",
			esc_html__( "Custom Style 2", 'brick' ) => "cf7_custom_style_2",
			esc_html__( "Custom Style 3", 'brick' ) => "cf7_custom_style_3"
		),
		'save_always' => true,
		"description" => esc_html__( "You can style each form element individually in Select Options > Contact Form 7", 'brick' )
	));
}