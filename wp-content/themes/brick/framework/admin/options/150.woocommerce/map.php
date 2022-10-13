<?php

$woocommercePage = new BrickQodeAdminPage(
	"19",
	esc_html__( "WooCommerce", 'brick' ),
	"fa fa-shopping-cart"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"woocommerce",
	$woocommercePage
);

// General
$panel3 = new QodePanel(
	esc_html__( "General", 'brick' ),
	"general_panel"
);
$woocommercePage->addChild(
	"panel3",
	$panel3
);

$text_input_field_subtitle = new QodeTitle(
	"text_input_field_subtitle",
	esc_html__( "Text Input Fields", 'brick' )
);
$panel3->addChild(
	"text_input_field_subtitle",
	$text_input_field_subtitle
);

$group1 = new QodeGroup(
	esc_html__( "Text Input Fields Text Style", 'brick' ),
	esc_html__( "Define text input fields style in Cart, Checkout, My Account", 'brick' )
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

$woo_input_text_color = new QodeField(
	"colorsimple",
	"woo_input_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_input_text_color",
	$woo_input_text_color
);

$woo_input_focus_text_color = new QodeField(
	"colorsimple",
	"woo_input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_input_focus_text_color",
	$woo_input_focus_text_color
);

$group16 = new QodeGroup(
	esc_html__( "Text Input Fields Background", 'brick' ),
	esc_html__( "Define text input fields background", 'brick' )
);
$panel3->addChild(
	"group16",
	$group16
);

$row1 = new QodeRow();
$group16->addChild(
	"row1",
	$row1
);

$woo_input_background_color = new QodeField(
	"colorsimple",
	"woo_input_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_input_background_color",
	$woo_input_background_color
);

$woo_input_focus_background_color = new QodeField(
	"colorsimple",
	"woo_input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_input_focus_background_color",
	$woo_input_focus_background_color
);

$group17 = new QodeGroup(
	esc_html__( "Text Input Fields Border", 'brick' ),
	esc_html__( "Define text input fields border", 'brick' )
);
$panel3->addChild(
	"group17",
	$group17
);

$row1 = new QodeRow();
$group17->addChild(
	"row1",
	$row1
);

$woo_input_border_color = new QodeField(
	"colorsimple",
	"woo_input_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_input_border_color",
	$woo_input_border_color
);

$woo_input_focus_border_color = new QodeField(
	"colorsimple",
	"woo_input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_input_focus_border_color",
	$woo_input_focus_border_color
);

$woo_input_border_width = new QodeField(
	"textsimple",
	"woo_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_input_border_width",
	$woo_input_border_width
);

//Button

$button_all_shop_pages = new QodeTitle(
	"button_all_shop_pages",
	esc_html__( "Buttons", 'brick' )
);
$panel3->addChild(
	"button_all_shop_pages",
	$button_all_shop_pages
);

$group8 = new QodeGroup(
	esc_html__( "Button Text Style", 'brick' ),
	esc_html__( "Define button text style for all shop pages", 'brick' )
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

$woo_products_list_add_to_cart_color = new QodeField(
	"colorsimple",
	"woo_products_list_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_color",
	$woo_products_list_add_to_cart_color
);

$woo_products_list_add_to_cart_font_size = new QodeField(
	"textsimple",
	"woo_products_list_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_font_size",
	$woo_products_list_add_to_cart_font_size
);

$woo_products_list_add_to_cart_line_height = new QodeField(
	"textsimple",
	"woo_products_list_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_line_height",
	$woo_products_list_add_to_cart_line_height
);

$woo_products_list_add_to_cart_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_products_list_add_to_cart_text_transform",
	$woo_products_list_add_to_cart_text_transform
);

$row2 = new QodeRow( true );
$group8->addChild(
	"row2",
	$row2
);

$woo_products_list_add_to_cart_font_family = new QodeField(
	"fontsimple",
	"woo_products_list_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_family",
	$woo_products_list_add_to_cart_font_family
);

$woo_products_list_add_to_cart_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_style",
	$woo_products_list_add_to_cart_font_style
);

$woo_products_list_add_to_cart_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_weight",
	$woo_products_list_add_to_cart_font_weight
);

$woo_products_list_add_to_cart_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_list_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_letter_spacing",
	$woo_products_list_add_to_cart_letter_spacing
);

$row3 = new QodeRow( true );
$group8->addChild(
	"row3",
	$row3
);

$woo_products_list_add_to_cart_hover_color = new QodeField(
	"colorsimple",
	"woo_products_list_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_hover_color",
	$woo_products_list_add_to_cart_hover_color
);

$woo_products_list_add_to_cart_padding = new QodeField(
	"textsimple",
	"woo_products_list_add_to_cart_padding",
	"",
	esc_html__( "Padding Left/Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_padding",
	$woo_products_list_add_to_cart_padding
);

$row4 = new QodeRow( true );
$group8->addChild(
	"row4",
	$row4
);

$group14 = new QodeGroup(
	esc_html__( "Button Background", 'brick' ),
	esc_html__( "Define button background", 'brick' )
);
$panel3->addChild(
	"group14",
	$group14
);

$row1 = new QodeRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_background_color = new QodeField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_color",
	$woo_products_list_add_to_cart_background_color
);

$woo_products_list_add_to_cart_background_hover_color = new QodeField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_hover_color",
	$woo_products_list_add_to_cart_background_hover_color
);

$group15 = new QodeGroup(
	esc_html__( "Button Border", 'brick' ),
	esc_html__( "Define button border", 'brick' )
);
$panel3->addChild(
	"group15",
	$group15
);

$row1 = new QodeRow();
$group15->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_border_color = new QodeField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_color",
	$woo_products_list_add_to_cart_border_color
);

$woo_products_list_add_to_cart_border_hover_color = new QodeField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_hover_color",
	$woo_products_list_add_to_cart_border_hover_color
);

$woo_products_list_add_to_cart_border_width = new QodeField(
	"textsimple",
	"woo_products_list_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_width",
	$woo_products_list_add_to_cart_border_width
);

$woo_products_list_add_to_cart_border_radius = new QodeField(
	"textsimple",
	"woo_products_list_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_radius",
	$woo_products_list_add_to_cart_border_radius
);

$wocommerce_messages_style_title = new QodeTitle(
	"wocommerce_messages_style_title",
	esc_html__( "Message", 'brick' )
);
$panel3->addChild(
	"wocommerce_messages_style_title",
	$wocommerce_messages_style_title
);

$group9 = new QodeGroup(
	esc_html__( "Message Box Style", 'brick' ),
	esc_html__( "Define message box style for all shop pages", 'brick' )
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

$woo_message_box_text_color = new QodeField(
	"colorsimple",
	"woo_message_box_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_message_box_text_color",
	$woo_message_box_text_color
);

$woo_message_box_font_size = new QodeField(
	"textsimple",
	"woo_message_box_font_size",
	"",
	esc_html__( "Font Size", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_message_box_font_size",
	$woo_message_box_font_size
);

$woo_message_box_background_color = new QodeField(
	"colorsimple",
	"woo_message_box_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_message_box_background_color",
	$woo_message_box_background_color
);

$woo_message_box_border_color = new QodeField(
	"colorsimple",
	"woo_message_box_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_message_box_border_color",
	$woo_message_box_border_color
);

//Product list styles

$panel1 = new QodePanel(
	esc_html__( "Product List", 'brick' ),
	"product_list_panel"
);
$woocommercePage->addChild(
	"panel1",
	$panel1
);

//Use full-width template

$woo_products_enable_full_width_template = new QodeField(
	"yesno",
	"woo_products_enable_full_width_template",
	"no",
	esc_html__( "Enable Full Width Template", 'brick' ),
	esc_html__( "Enabling this option will enable full width template for shop page", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_full_width_template_container"
	)
);
$panel1->addChild(
	"woo_products_enable_full_width_template",
	$woo_products_enable_full_width_template
);

$enable_full_width_template_container = new QodeContainer(
	"enable_full_width_template_container",
	"woo_products_enable_full_width_template",
	"no"
);
$panel1->addChild(
	"enable_full_width_template_container",
	$enable_full_width_template_container
);

$woo_full_width_margin_left = new QodeField(
	"text",
	"woo_full_width_margin_left",
	"",
	esc_html__( "Full Width Template Left Margin", 'brick' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_left",
	$woo_full_width_margin_left
);

$woo_full_width_margin_right = new QodeField(
	"text",
	"woo_full_width_margin_right",
	"",
	esc_html__( "Full Width Template Right Margin", 'brick' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_right",
	$woo_full_width_margin_right
);

//Use full-width template

$woo_products_disable_space_between_products = new QodeField(
	"yesno",
	"woo_products_disable_space_between_products",
	"no",
	esc_html__( "Disable Space Between Products", 'brick' ),
	esc_html__( "Enabling this option will disable space between products", 'brick' )
);
$panel1->addChild(
	"woo_products_disable_space_between_products",
	$woo_products_disable_space_between_products
);

//Product per page

$woo_products_per_page = new QodeField(
	"text",
	"woo_products_per_page",
	"",
	esc_html__( "Number Of Product Per Page", 'brick' ),
	esc_html__( "Set number of products on shop page.", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_per_page",
	$woo_products_per_page
);

$woo_products_list_margin_top = new QodeField(
	"text",
	"woo_products_list_margin_top",
	"",
	esc_html__( "Product List Margin Top ", 'brick' ),
	esc_html__( "Set margin top for product list.", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_list_margin_top",
	$woo_products_list_margin_top
);

//Products list type

$woo_products_list_type = new QodeField(
	"select",
	"woo_products_list_type",
	"type1",
	esc_html__( "Product List Style", 'brick' ),
	esc_html__( "Choose layout for displaying product listing", 'brick' ),
	array(
		"type1" => esc_html__( "Simple", 'brick' ),
		"type2" => esc_html__( "Long Description", 'brick' ),
		"type3" => esc_html__( "Info Over Image", 'brick' ),
		"type5" => esc_html__( "Info on Hover", 'brick' ),
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"type1" => "#qodef_woo_products_title_type2_container",
			"type2" => "#qodef_woo_products_enable_item_borders_container",
			"type3" => "#qodef_woo_products_enable_item_borders_container",
			"#qodef_woo_products_title_type2_container",
			"type5" => "#qodef_woo_products_enable_item_borders_container",
			"#qodef_woo_products_title_type2_container"
		),
		"show"       => array(
			"type1" => "#qodef_woo_products_enable_item_borders_container",
			"type2" => "#qodef_woo_products_title_type2_container"
		)
	)
);
$panel1->addChild(
	"woo_products_list_type",
	$woo_products_list_type
);

$woo_products_enable_item_borders_container = new QodeContainer(
	"woo_products_enable_item_borders_container",
	"woo_products_list_type",
	""
);
$panel1->addChild(
	"woo_products_enable_item_borders_container",
	$woo_products_enable_item_borders_container
);

$woo_products_enable_item_borders = new QodeField(
	"yesno",
	"woo_products_enable_item_borders",
	"no",
	esc_html__( "Enable Borders Around Item", 'brick' ),
	esc_html__( "Enable this option and choose to display borders around item's box or image", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_woo_products_item_borders_container"
	)
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_enable_item_borders",
	$woo_products_enable_item_borders
);

$woo_products_item_borders_container = new QodeContainer(
	"woo_products_item_borders_container",
	"woo_products_enable_item_borders",
	"no"
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_item_borders_container",
	$woo_products_item_borders_container
);

$woo_products_item_borders_style = new QodeField(
	"select",
	"woo_products_item_borders_style",
	"around_item",
	esc_html__( "Display Borders Around", 'brick' ),
	esc_html__( "Choose to display borders around the item's box or image", 'brick' ),
	array(
		"around_item"  => esc_html__( "Item Box", 'brick' ),
		"around_image" => esc_html__( "Image", 'brick' )
	
	)
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_style",
	$woo_products_item_borders_style
);

$woo_products_item_borders_color = new QodeField(
	"color",
	"woo_products_item_borders_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "Choose a color for the item borders", 'brick' )
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_color",
	$woo_products_item_borders_color
);

$woo_products_enable_lighbox_icon = new QodeField(
	"yesno",
	"woo_products_enable_lighbox_icon",
	"yes",
	esc_html__( "Enable Lightbox Icon", 'brick' ),
	esc_html__( "Enabling this option will show lighbox icon on product list", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_woo_products_item_lightbox_icon_container"
	)
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_enable_lighbox_icon",
	$woo_products_enable_lighbox_icon
);

$woo_products_item_lightbox_icon_container = new QodeContainer(
	"woo_products_item_lightbox_icon_container",
	"woo_products_enable_lighbox_icon",
	"no"
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_item_lightbox_icon_container",
	$woo_products_item_lightbox_icon_container
);

$woo_products_lightbox_icon_color = new QodeField(
	"color",
	"woo_products_lightbox_icon_color",
	"",
	esc_html__( "Lightbox Icon Color", 'brick' ),
	esc_html__( "Define color for lightbox icon", 'brick' )
);
$woo_products_item_lightbox_icon_container->addChild(
	"woo_products_lightbox_icon_color",
	$woo_products_lightbox_icon_color
);

$woo_products_hover_list_type = new QodeField(
	"select",
	"woo_products_hover_list_type",
	"type1",
	esc_html__( "Product Hover Style", 'brick' ),
	esc_html__( "Choose hover style for products in products list", 'brick' ),
	array(
		"hover_type1" => esc_html__( "Add to cart button", 'brick' ),
		"hover_type2" => esc_html__( "Add to cart icon", 'brick' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"hover_type2" => "#qodef_woo_products_enable_button_icons_container"
		),
		"show"       => array(
			"hover_type1" => "#qodef_woo_products_enable_button_icons_container"
		)
	)
);
$panel1->addChild(
	"woo_products_hover_list_type",
	$woo_products_hover_list_type
);

$woo_products_enable_button_icons_container = new QodeContainer(
	"woo_products_enable_button_icons_container",
	"woo_products_hover_list_type",
	""
);
$panel1->addChild(
	"woo_products_enable_button_icons_container",
	$woo_products_enable_button_icons_container
);

$woo_products_enable_button_icons = new QodeField(
	"yesno",
	"woo_products_enable_button_icons",
	"no",
	esc_html__( "Enable Icons in Add to Cart Button", 'brick' ),
	esc_html__( "Enabling this option will display icons in Add to Cart button", 'brick' )
);
$woo_products_enable_button_icons_container->addChild(
	"woo_products_enable_button_icons",
	$woo_products_enable_button_icons
);

$woo_products_list_number = new QodeField(
	"select",
	"woo_products_list_number",
	"columns-3",
	esc_html__( "Product List and Related Products Columns Number", 'brick' ),
	esc_html__( "Choose number of columns for product listing and related products on single product", 'brick' ),
	array(
		"columns-3" => esc_html__( "3 Columns (2 with sidebar)", 'brick' ),
		"columns-4" => esc_html__( "4 Columns (3 with sidebar)", 'brick' )
	)
);

$panel1->addChild(
	"woo_products_list_number",
	$woo_products_list_number
);

//Product box
$woo_products_box_text_align = new QodeField(
	"select",
	"woo_products_box_text_align",
	"left",
	esc_html__( "Product Info Text Alignment", 'brick' ),
	esc_html__( "Specify products text alignment in product listing", 'brick' ),
	array(
		"left"   => esc_html__( "Left", 'brick' ),
		"center" => esc_html__( "Center", 'brick' ),
		"right"  => esc_html__( "Right", 'brick' )
	)
);
$panel1->addChild(
	"woo_products_box_text_align",
	$woo_products_box_text_align
);

$woo_products_item_info_box_background_color = new QodeField(
	"color",
	"woo_products_item_info_box_background_color",
	"",
	esc_html__( "Product Info Background Color", 'brick' ),
	esc_html__( "Define background color for product info box", 'brick' )
);
$panel1->addChild(
	"woo_products_item_info_box_background_color",
	$woo_products_item_info_box_background_color
);

$woo_products_item_info_box_padding = new QodeField(
	"text",
	"woo_products_item_info_box_padding",
	"",
	esc_html__( "Product Info Box Padding", 'brick' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_info_box_padding",
	$woo_products_item_info_box_padding
);

$woo_products_item_info_box_border = new QodeField(
	"yesno",
	"woo_products_item_info_box_border",
	"no",
	esc_html__( "Enable Right Separator for Product Info Box", 'brick' ),
	esc_html__( "Enabling this option will show right separator for product info box.", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#qodef_woo_products_item_info_box_container",
		"dependence_hide_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_item_info_box_border",
	$woo_products_item_info_box_border
);

$woo_products_item_info_box_container = new QodeContainer(
	"woo_products_item_info_box_container",
	"woo_products_item_info_box_border",
	"no"
);
$panel1->addChild(
	"woo_products_item_info_box_container",
	$woo_products_item_info_box_container
);

$group_product_box_info = new QodeGroup(
	esc_html__( "Product Box Info Border Styles ", 'brick' ),
	esc_html__( "Define box info border styles", 'brick' )
);
$woo_products_item_info_box_container->addChild(
	"group_product_box_info",
	$group_product_box_info
);

$row1 = new QodeRow();
$group_product_box_info->addChild(
	"row1",
	$row1
);

$woo_products_box_info_border_width = new QodeField(
	"textsimple",
	"woo_products_box_info_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_box_info_border_width",
	$woo_products_box_info_border_width
);

$woo_products_box_info_border_color = new QodeField(
	"colorsimple",
	"woo_products_box_info_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_box_info_border_color",
	$woo_products_box_info_border_color
);

$woo_products_item_shader_color = new QodeField(
	"color",
	"woo_products_item_shader_color",
	"",
	esc_html__( "Shader Background Color", 'brick' ),
	esc_html__( "Choose a background color for the shader of hovered item", 'brick' )
);
$panel1->addChild(
	"woo_products_item_shader_color",
	$woo_products_item_shader_color
);

$woo_products_item_shader_opacity = new QodeField(
	"text",
	"woo_products_item_shader_opacity",
	"",
	esc_html__( "Shader Background Opacity", 'brick' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_shader_opacity",
	$woo_products_item_shader_opacity
);

//Product category
$woo_products_category_hide_category = new QodeField(
	"yesno",
	"woo_products_category_hide_category",
	"no",
	esc_html__( "Hide Product Category", 'brick' ),
	esc_html__( "Enabling this option will hide product category.", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_woo_products_hide_category_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_category_hide_category",
	$woo_products_category_hide_category
);

$woo_products_hide_category_container = new QodeContainer(
	"woo_products_hide_category_container",
	"woo_products_category_hide_category",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_category_container",
	$woo_products_hide_category_container
);

$group2 = new QodeGroup(
	esc_html__( "Product Category Text Style", 'brick' ),
	esc_html__( "Define product category text style", 'brick' )
);
$woo_products_hide_category_container->addChild(
	"group2",
	$group2
);

$row1 = new QodeRow();
$group2->addChild(
	"row1",
	$row1
);

$woo_products_category_color = new QodeField(
	"colorsimple",
	"woo_products_category_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_category_color",
	$woo_products_category_color
);

$woo_products_category_font_size = new QodeField(
	"textsimple",
	"woo_products_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_category_font_size",
	$woo_products_category_font_size
);

$woo_products_category_line_height = new QodeField(
	"textsimple",
	"woo_products_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_category_line_height",
	$woo_products_category_line_height
);

$woo_products_category_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_category_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_products_category_text_transform",
	$woo_products_category_text_transform
);

$row2 = new QodeRow();
$group2->addChild(
	"row2",
	$row2
);

$woo_products_category_font_family = new QodeField(
	"fontsimple",
	"woo_products_category_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_category_font_family",
	$woo_products_category_font_family
);

$woo_products_category_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_category_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_category_font_style",
	$woo_products_category_font_style
);

$woo_products_category_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_category_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_category_font_weight",
	$woo_products_category_font_weight
);

$woo_products_category_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_category_letter_spacing",
	$woo_products_category_letter_spacing
);

$woo_products_title_separator_hide_title_separator = new QodeField(
	"yesno",
	"woo_products_title_separator_hide_title_separator",
	"no",
	esc_html__( "Hide Separator in Product Title ", 'brick' ),
	esc_html__( "Enabling this option will hide product title separator", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_woo_products_hide_title_separator_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_title_separator_hide_title_separator",
	$woo_products_title_separator_hide_title_separator
);

$woo_products_hide_title_separator_container = new QodeContainer(
	"woo_products_hide_title_separator_container",
	"woo_products_title_separator_hide_title_separator",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_title_separator_container",
	$woo_products_hide_title_separator_container
);

$group10 = new QodeGroup(
	esc_html__( "Separator Styles", 'brick' ),
	esc_html__( "Define style for product title separator ", 'brick' )
);
$woo_products_hide_title_separator_container->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$woo_products_title_separator_color = new QodeField(
	"colorsimple",
	"woo_products_title_separator_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_title_separator_color",
	$woo_products_title_separator_color
);

$woo_products_title_separator_style = new QodeField(
	"selectsimple",
	"woo_products_title_separator_style",
	"solid",
	esc_html__( "Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	array(
		"solid"  => esc_html__( "Solid", 'brick' ),
		"dashed" => esc_html__( "Dashed", 'brick' ),
		"dotted" => esc_html__( "Dotted", 'brick' )
	)
);
$row1->addChild(
	"woo_products_title_separator_style",
	$woo_products_title_separator_style
);

$woo_products_title_separator_margin_top = new QodeField(
	"textsimple",
	"woo_products_title_separator_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_title_separator_margin_top",
	$woo_products_title_separator_margin_top
);

$woo_products_title_separator_margin_bottom = new QodeField(
	"textsimple",
	"woo_products_title_separator_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_title_separator_margin_bottom",
	$woo_products_title_separator_margin_bottom
);

//Product title

$group3 = new QodeGroup(
	esc_html__( "Product Title", 'brick' ),
	esc_html__( "Define product title text style", 'brick' )
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

$woo_products_title_color = new QodeField(
	"colorsimple",
	"woo_products_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_title_color",
	$woo_products_title_color
);

$woo_products_title_font_size = new QodeField(
	"textsimple",
	"woo_products_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_title_font_size",
	$woo_products_title_font_size
);

$woo_products_title_line_height = new QodeField(
	"textsimple",
	"woo_products_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_title_line_height",
	$woo_products_title_line_height
);

$woo_products_title_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_products_title_text_transform",
	$woo_products_title_text_transform
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_products_title_font_family = new QodeField(
	"fontsimple",
	"woo_products_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_title_font_family",
	$woo_products_title_font_family
);

$woo_products_title_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_title_font_style",
	$woo_products_title_font_style
);

$woo_products_title_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_title_font_weight",
	$woo_products_title_font_weight
);

$woo_products_title_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_title_letter_spacing",
	$woo_products_title_letter_spacing
);

$row3 = new QodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$woo_products_title_hover_color = new QodeField(
	"colorsimple",
	"woo_products_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_title_hover_color",
	$woo_products_title_hover_color
);

$woo_products_title_line_margin_bottom = new QodeField(
	"textsimple",
	"woo_products_title_line_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_title_line_margin_bottom",
	$woo_products_title_line_margin_bottom
);

$woo_products_title_type2_container = new QodeContainer(
	"woo_products_title_type2_container",
	"woo_products_list_type",
	"",
	array( "type1", "type3", "type5" )
);
$panel1->addChild(
	"woo_products_title_type2_container",
	$woo_products_title_type2_container
);

$group_title_type2 = new QodeGroup(
	esc_html__( "Product Title Holder", 'brick' ),
	esc_html__( "Define spacing for product title holder", 'brick' )
);
$woo_products_title_type2_container->addChild(
	"group_title_type2",
	$group_title_type2
);

$row1 = new QodeRow();
$group_title_type2->addChild(
	"row1",
	$row1
);

$woo_products_type2_title_holder_margin_top = new QodeField(
	"textsimple",
	"woo_products_type2_title_holder_margin_top",
	"",
	esc_html__( "Title Holder Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_type2_title_holder_margin_top",
	$woo_products_type2_title_holder_margin_top
);

$woo_products_type2_title_holder_margin_bottom = new QodeField(
	"textsimple",
	"woo_products_type2_title_holder_margin_bottom",
	"",
	esc_html__( "Title Holder Margin Bottom (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_type2_title_holder_margin_bottom",
	$woo_products_type2_title_holder_margin_bottom
);

//Product price	

$group4 = new QodeGroup(
	esc_html__( "Product Price", 'brick' ),
	esc_html__( "Define product price text style", 'brick' )
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

$woo_products_price_color = new QodeField(
	"colorsimple",
	"woo_products_price_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_price_color",
	$woo_products_price_color
);

$woo_products_price_font_size = new QodeField(
	"textsimple",
	"woo_products_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_price_font_size",
	$woo_products_price_font_size
);

$woo_products_price_line_height = new QodeField(
	"textsimple",
	"woo_products_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_price_line_height",
	$woo_products_price_line_height
);

$woo_products_price_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_price_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_products_price_text_transform",
	$woo_products_price_text_transform
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_products_price_font_family = new QodeField(
	"fontsimple",
	"woo_products_price_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_price_font_family",
	$woo_products_price_font_family
);

$woo_products_price_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_price_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_price_font_style",
	$woo_products_price_font_style
);

$woo_products_price_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_price_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_price_font_weight",
	$woo_products_price_font_weight
);

$woo_products_price_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_price_letter_spacing",
	$woo_products_price_letter_spacing
);

$row3 = new QodeRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_products_price_old_font_size = new QodeField(
	"textsimple",
	"woo_products_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_price_old_font_size",
	$woo_products_price_old_font_size
);

$woo_products_price_old_color = new QodeField(
	"colorsimple",
	"woo_products_price_old_color",
	"",
	esc_html__( "Old Price Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_price_old_color",
	$woo_products_price_old_color
);

//Product sale

$group5 = new QodeGroup(
	esc_html__( "Product Sale", 'brick' ),
	esc_html__( "Define product sale text style", 'brick' )
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

$woo_products_sale_color = new QodeField(
	"colorsimple",
	"woo_products_sale_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sale_color",
	$woo_products_sale_color
);

$woo_products_sale_font_size = new QodeField(
	"textsimple",
	"woo_products_sale_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sale_font_size",
	$woo_products_sale_font_size
);

$woo_products_sale_line_height = new QodeField(
	"textsimple",
	"woo_products_sale_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sale_line_height",
	$woo_products_sale_line_height
);

$woo_products_sale_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_sale_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_products_sale_text_transform",
	$woo_products_sale_text_transform
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_products_sale_font_family = new QodeField(
	"fontsimple",
	"woo_products_sale_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_sale_font_family",
	$woo_products_sale_font_family
);

$woo_products_sale_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_sale_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_sale_font_style",
	$woo_products_sale_font_style
);

$woo_products_sale_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_sale_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_sale_font_weight",
	$woo_products_sale_font_weight
);

$woo_products_sale_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_sale_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_sale_letter_spacing",
	$woo_products_sale_letter_spacing
);

$row3 = new QodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$woo_products_sale_background_color = new QodeField(
	"colorsimple",
	"woo_products_sale_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_sale_background_color",
	$woo_products_sale_background_color
);

$woo_products_sale_border_radius = new QodeField(
	"textsimple",
	"woo_products_sale_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_sale_border_radius",
	$woo_products_sale_border_radius
);

$woo_products_sale_top_position = new QodeField(
	"textsimple",
	"woo_products_sale_top_position",
	"",
	esc_html__( "Top Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_sale_top_position",
	$woo_products_sale_top_position
);

$woo_products_sale_left_position = new QodeField(
	"textsimple",
	"woo_products_sale_left_position",
	"",
	esc_html__( "Left Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_sale_left_position",
	$woo_products_sale_left_position
);

$row4 = new QodeRow( true );
$group5->addChild(
	"row4",
	$row4
);

$woo_products_sale_right_position = new QodeField(
	"textsimple",
	"woo_products_sale_right_position",
	"",
	esc_html__( "Right Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"woo_products_sale_right_position",
	$woo_products_sale_right_position
);

$woo_products_sale_width = new QodeField(
	"textsimple",
	"woo_products_sale_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"woo_products_sale_width",
	$woo_products_sale_width
);

$woo_products_sale_height = new QodeField(
	"textsimple",
	"woo_products_sale_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"woo_products_sale_height",
	$woo_products_sale_height
);

//Product out of stock

$group6 = new QodeGroup(
	esc_html__( 'Product "Out Of Stock"', 'brick' ),
	esc_html__( "Define 'Out Of Stock' text style", 'brick' )
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

$woo_products_out_of_stock_color = new QodeField(
	"colorsimple",
	"woo_products_out_of_stock_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_out_of_stock_color",
	$woo_products_out_of_stock_color
);

$woo_products_out_of_stock_font_size = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_out_of_stock_font_size",
	$woo_products_out_of_stock_font_size
);

$woo_products_out_of_stock_line_height = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_out_of_stock_line_height",
	$woo_products_out_of_stock_line_height
);

$woo_products_out_of_stock_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_out_of_stock_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_products_out_of_stock_text_transform",
	$woo_products_out_of_stock_text_transform
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_out_of_stock_font_family = new QodeField(
	"fontsimple",
	"woo_products_out_of_stock_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_out_of_stock_font_family",
	$woo_products_out_of_stock_font_family
);

$woo_products_out_of_stock_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_out_of_stock_font_style",
	$woo_products_out_of_stock_font_style
);

$woo_products_out_of_stock_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_out_of_stock_font_weight",
	$woo_products_out_of_stock_font_weight
);

$woo_products_out_of_stock_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_out_of_stock_letter_spacing",
	$woo_products_out_of_stock_letter_spacing
);

$row3 = new QodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_out_of_stock_background_color = new QodeField(
	"colorsimple",
	"woo_products_out_of_stock_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_out_of_stock_background_color",
	$woo_products_out_of_stock_background_color
);

$woo_products_out_of_stock_border_radius = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_out_of_stock_border_radius",
	$woo_products_out_of_stock_border_radius
);

$woo_products_out_of_stock_top_position = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_top_position",
	"",
	esc_html__( "Top Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_out_of_stock_top_position",
	$woo_products_out_of_stock_top_position
);

$woo_products_out_of_stock_left_position = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_left_position",
	"",
	esc_html__( "Left Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_out_of_stock_left_position",
	$woo_products_out_of_stock_left_position
);

$row4 = new QodeRow( true );
$group6->addChild(
	"row4",
	$row4
);

$woo_products_out_of_stock_right_position = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_right_position",
	"",
	esc_html__( "Right Position (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"woo_products_out_of_stock_right_position",
	$woo_products_out_of_stock_right_position
);

$woo_products_out_of_stock_width = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"woo_products_out_of_stock_width",
	$woo_products_out_of_stock_width
);

$woo_products_out_of_stock_height = new QodeField(
	"textsimple",
	"woo_products_out_of_stock_height",
	"",
	esc_html__( "Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"woo_products_out_of_stock_height",
	$woo_products_out_of_stock_height
);

//Pricing Filter

$group9 = new QodeGroup(
	esc_html__( "Price Filter Colors", 'brick' ),
	esc_html__( "Define colors in price filter", 'brick' )
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

$woo_products_price_filter_background_color = new QodeField(
	"colorsimple",
	"woo_products_price_filter_background_color",
	"",
	esc_html__( "In Price Range", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_price_filter_background_color",
	$woo_products_price_filter_background_color
);

$woo_products_price_filter_background_active_color = new QodeField(
	"colorsimple",
	"woo_products_price_filter_background_active_color",
	"",
	esc_html__( "Out Price Range", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_price_filter_background_active_color",
	$woo_products_price_filter_background_active_color
);

$woo_products_price_filter_arrows_color = new QodeField(
	"colorsimple",
	"woo_products_price_filter_arrows_color",
	"",
	esc_html__( "Handles", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_price_filter_arrows_color",
	$woo_products_price_filter_arrows_color
);

$group7 = new QodeGroup(
	esc_html__( 'Number of Results Text Style', 'brick' ),
	esc_html__( "Define style for text showing the number of results in product list", 'brick' )
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

$woo_products_sorting_result_color = new QodeField(
	"colorsimple",
	"woo_products_sorting_result_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_result_color",
	$woo_products_sorting_result_color
);

$woo_products_sorting_result_font_size = new QodeField(
	"textsimple",
	"woo_products_sorting_result_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_result_font_size",
	$woo_products_sorting_result_font_size
);

$woo_products_sorting_result_line_height = new QodeField(
	"textsimple",
	"woo_products_sorting_result_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_result_line_height",
	$woo_products_sorting_result_line_height
);

$woo_products_sorting_result_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_sorting_result_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_products_sorting_result_text_transform",
	$woo_products_sorting_result_text_transform
);

$row2 = new QodeRow( true );
$group7->addChild(
	"row2",
	$row2
);

$woo_products_sorting_result_font_family = new QodeField(
	"fontsimple",
	"woo_products_sorting_result_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_sorting_result_font_family",
	$woo_products_sorting_result_font_family
);

$woo_products_sorting_result_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_sorting_result_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_sorting_result_font_style",
	$woo_products_sorting_result_font_style
);

$woo_products_sorting_result_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_sorting_result_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_sorting_result_font_weight",
	$woo_products_sorting_result_font_weight
);

$woo_products_sorting_result_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_sorting_result_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_sorting_result_letter_spacing",
	$woo_products_sorting_result_letter_spacing
);

//Products add to cart button

$products_add_to_cart_subtitle = new QodeTitle(
	"products_add_to_cart_subtitle",
	esc_html__( 'Add to cart button', 'brick' )
);
$panel1->addChild(
	"products_add_to_cart_subtitle",
	$products_add_to_cart_subtitle
);

$group14 = new QodeGroup(
	esc_html__( "Button Text Style", 'brick' ),
	esc_html__( "Define Add To Cart button text style", 'brick' )
);
$panel1->addChild(
	"group14",
	$group14
);

$row1 = new QodeRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_color = new QodeField(
	"colorsimple",
	"woo_products_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_color",
	$woo_products_add_to_cart_color
);

$woo_products_add_to_cart_hover_color = new QodeField(
	"colorsimple",
	"woo_products_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_hover_color",
	$woo_products_add_to_cart_hover_color
);

$woo_products_add_to_cart_font_size = new QodeField(
	"textsimple",
	"woo_products_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_font_size",
	$woo_products_add_to_cart_font_size
);

$woo_products_add_to_cart_line_height = new QodeField(
	"textsimple",
	"woo_products_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_line_height",
	$woo_products_add_to_cart_line_height
);

$row2 = new QodeRow( true );
$group14->addChild(
	"row2",
	$row2
);

$woo_products_add_to_cart_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"woo_products_add_to_cart_text_transform",
	$woo_products_add_to_cart_text_transform
);

$woo_products_add_to_cart_font_family = new QodeField(
	"fontsimple",
	"woo_products_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_add_to_cart_font_family",
	$woo_products_add_to_cart_font_family
);

$woo_products_add_to_cart_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_add_to_cart_font_style",
	$woo_products_add_to_cart_font_style
);

$woo_products_add_to_cart_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_add_to_cart_font_weight",
	$woo_products_add_to_cart_font_weight
);

$row3 = new QodeRow( true );
$group14->addChild(
	"row3",
	$row3
);

$woo_products_add_to_cart_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_add_to_cart_letter_spacing",
	$woo_products_add_to_cart_letter_spacing
);

$woo_products_add_to_cart_margin_top = new QodeField(
	"textsimple",
	"woo_products_add_to_cart_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_add_to_cart_margin_top",
	$woo_products_add_to_cart_margin_top
);

$group27 = new QodeGroup(
	esc_html__( 'Button Background', 'brick' ),
	esc_html__( 'Define "Add To Cart" Button Background', 'brick' )
);
$panel1->addChild(
	"group27",
	$group27
);

$row1 = new QodeRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_background_color = new QodeField(
	"colorsimple",
	"woo_products_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_color",
	$woo_products_add_to_cart_background_color
);

$woo_products_add_to_cart_background_hover_color = new QodeField(
	"colorsimple",
	"woo_products_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_hover_color",
	$woo_products_add_to_cart_background_hover_color
);

$group28 = new QodeGroup(
	esc_html__( 'Button Border', 'brick' ),
	esc_html__( 'Define "Add To Cart" border', 'brick' )
);
$panel1->addChild(
	"group28",
	$group28
);

$row1 = new QodeRow();
$group28->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_border_color = new QodeField(
	"colorsimple",
	"woo_products_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_color",
	$woo_products_add_to_cart_border_color
);

$woo_products_add_to_cart_border_hover_color = new QodeField(
	"colorsimple",
	"woo_products_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_hover_color",
	$woo_products_add_to_cart_border_hover_color
);

$woo_products_add_to_cart_border_width = new QodeField(
	"textsimple",
	"woo_products_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_width",
	$woo_products_add_to_cart_border_width
);

$woo_products_add_to_cart_border_radius = new QodeField(
	"textsimple",
	"woo_products_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_radius",
	$woo_products_add_to_cart_border_radius
);

//Sorting Product List

$product_sorting = new QodeTitle(
	"product_sorting",
	esc_html__( "Product Sorting Select Box", 'brick' )
);
$panel1->addChild(
	"product_sorting",
	$product_sorting
);

$group8 = new QodeGroup(
	esc_html__( "Select Box Text Style", 'brick' ),
	esc_html__( "Define product sorting text style", 'brick' )
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

$woo_products_sorting_color = new QodeField(
	"colorsimple",
	"woo_products_sorting_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_color",
	$woo_products_sorting_color
);

$woo_products_sorting_hover_color = new QodeField(
	"colorsimple",
	"woo_products_sorting_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_hover_color",
	$woo_products_sorting_hover_color
);

// Sorting Background

$group12 = new QodeGroup(
	esc_html__( "Select Box Background", 'brick' ),
	esc_html__( "Define product sorting select box background", 'brick' )
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

$woo_products_sorting_background_color = new QodeField(
	"colorsimple",
	"woo_products_sorting_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_background_color",
	$woo_products_sorting_background_color
);

$woo_products_sorting_dropdown_background_color = new QodeField(
	"colorsimple",
	"woo_products_sorting_dropdown_background_color",
	"",
	esc_html__( "Dropdown Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_dropdown_background_color",
	$woo_products_sorting_dropdown_background_color
);

// Sorting Border Style

$group13 = new QodeGroup(
	esc_html__( "Select Box Border", 'brick' ),
	esc_html__( "Define product sorting select box border", 'brick' )
);
$panel1->addChild(
	"group13",
	$group13
);

$row1 = new QodeRow();
$group13->addChild(
	"row1",
	$row1
);

$woo_products_sorting_border_color = new QodeField(
	"colorsimple",
	"woo_products_sorting_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_border_color",
	$woo_products_sorting_border_color
);

$woo_products_sorting_border_width = new QodeField(
	"textsimple",
	"woo_products_sorting_border_width",
	"",
	esc_html__( "Box Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_sorting_border_width",
	$woo_products_sorting_border_width
);

//Show Number of Results text			

$woo_product_show_box_shadow = new QodeField(
	"yesno",
	"woo_product_show_box_shadow",
	"yes",
	esc_html__( "Show Box Shadow", 'brick' ),
	esc_html__( "Enabling this option will show box shadow around Product and Product images on single pages", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_woo_product_box_shadow_options_container"
	)
);
$panel1->addChild(
	"woo_product_show_box_shadow",
	$woo_product_show_box_shadow
);

$woo_product_box_shadow_options_container = new QodeContainer(
	"woo_product_box_shadow_options_container",
	"woo_product_show_box_shadow",
	"no"
);
$panel1->addChild(
	"woo_product_box_shadow_options_container",
	$woo_product_box_shadow_options_container
);

$group14 = new QodeGroup(
	esc_html__( "Box Shadow Style", 'brick' ),
	esc_html__( "Define Box Shadow Style", 'brick' )
);
$woo_product_box_shadow_options_container->addChild(
	"group14",
	$group14
);

$row1 = new QodeRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_box_shadow_h_shadow = new QodeField(
	"textsimple",
	"woo_products_box_shadow_h_shadow",
	"1",
	esc_html__( "H-Shadow (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_box_shadow_h_shadow",
	$woo_products_box_shadow_h_shadow
);

$woo_products_box_shadow_v_shadow = new QodeField(
	"textsimple",
	"woo_products_box_shadow_v_shadow",
	"1",
	esc_html__( "V-Shadow (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_box_shadow_v_shadow",
	$woo_products_box_shadow_v_shadow
);

$woo_products_box_shadow_blur = new QodeField(
	"textsimple",
	"woo_products_box_shadow_blur",
	"1",
	esc_html__( "Blur (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_box_shadow_blur",
	$woo_products_box_shadow_blur
);

$woo_products_box_shadow_spread = new QodeField(
	"textsimple",
	"woo_products_box_shadow_spread",
	"1",
	esc_html__( "Spread (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_box_shadow_spread",
	$woo_products_box_shadow_spread
);

$row2 = new QodeRow();
$group14->addChild(
	"row2",
	$row2
);

$woo_products_box_shadow_color = new QodeField(
	"colorsimple",
	"woo_products_box_shadow_color",
	"#dedce0",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_box_shadow_color",
	$woo_products_box_shadow_color
);

//Product single styles

$panel2 = new QodePanel(
	esc_html__( "Product Single", 'brick' ),
	"product_single_panel"
);
$woocommercePage->addChild(
	"panel2",
	$panel2
);

//Product single title

$product_text_style = new QodeTitle(
	"product_text_style",
	esc_html__( "Product Text Style", 'brick' )
);
$panel2->addChild(
	"product_text_style",
	$product_text_style
);

$group1 = new QodeGroup(
	esc_html__( "Product Single Title", 'brick' ),
	esc_html__( "Define Product Single Title Style", 'brick' )
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

$woo_product_single_title_color = new QodeField(
	"colorsimple",
	"woo_product_single_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_title_color",
	$woo_product_single_title_color
);

$woo_product_single_title_hover_color = new QodeField(
	"colorsimple",
	"woo_product_single_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_title_hover_color",
	$woo_product_single_title_hover_color
);

$woo_product_single_title_font_size = new QodeField(
	"textsimple",
	"woo_product_single_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_title_font_size",
	$woo_product_single_title_font_size
);

$woo_product_single_title_line_height = new QodeField(
	"textsimple",
	"woo_product_single_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_title_line_height",
	$woo_product_single_title_line_height
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$woo_product_single_title_text_transform = new QodeField(
	"selectblanksimple",
	"woo_product_single_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"woo_product_single_title_text_transform",
	$woo_product_single_title_text_transform
);

$woo_product_single_title_font_family = new QodeField(
	"fontsimple",
	"woo_product_single_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_title_font_family",
	$woo_product_single_title_font_family
);

$woo_product_single_title_font_style = new QodeField(
	"selectblanksimple",
	"woo_product_single_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_product_single_title_font_style",
	$woo_product_single_title_font_style
);

$woo_product_single_title_font_weight = new QodeField(
	"selectblanksimple",
	"woo_product_single_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_product_single_title_font_weight",
	$woo_product_single_title_font_weight
);

$row3 = new QodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$woo_product_single_title_letter_spacing = new QodeField(
	"textsimple",
	"woo_product_single_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_product_single_title_letter_spacing",
	$woo_product_single_title_letter_spacing
);

//Product single meta title

$group2 = new QodeGroup(
	esc_html__( "Product Single Meta Title", 'brick' ),
	esc_html__( "Define Product Single Meta Title Style", 'brick' )
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

$woo_product_single_meta_title_color = new QodeField(
	"colorsimple",
	"woo_product_single_meta_title_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_meta_title_color",
	$woo_product_single_meta_title_color
);

$woo_product_single_meta_title_font_size = new QodeField(
	"textsimple",
	"woo_product_single_meta_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_meta_title_font_size",
	$woo_product_single_meta_title_font_size
);

$woo_product_single_meta_title_line_height = new QodeField(
	"textsimple",
	"woo_product_single_meta_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_meta_title_line_height",
	$woo_product_single_meta_title_line_height
);

$woo_product_single_meta_title_text_transform = new QodeField(
	"selectblanksimple",
	"woo_product_single_meta_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_product_single_meta_title_text_transform",
	$woo_product_single_meta_title_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_title_font_family = new QodeField(
	"fontsimple",
	"woo_product_single_meta_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_meta_title_font_family",
	$woo_product_single_meta_title_font_family
);

$woo_product_single_meta_title_font_style = new QodeField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_product_single_meta_title_font_style",
	$woo_product_single_meta_title_font_style
);

$woo_product_single_meta_title_font_weight = new QodeField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_product_single_meta_title_font_weight",
	$woo_product_single_meta_title_font_weight
);

$woo_product_single_meta_title_letter_spacing = new QodeField(
	"textsimple",
	"woo_product_single_meta_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_meta_title_letter_spacing",
	$woo_product_single_meta_title_letter_spacing
);

//Product single meta title

$group3 = new QodeGroup(
	esc_html__( "Product Single Meta Info", 'brick' ),
	esc_html__( "Define Product Single Meta Info Style", 'brick' )
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

$woo_product_single_meta_info_color = new QodeField(
	"colorsimple",
	"woo_product_single_meta_info_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_meta_info_color",
	$woo_product_single_meta_info_color
);

$woo_product_single_meta_info_font_size = new QodeField(
	"textsimple",
	"woo_product_single_meta_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_meta_info_font_size",
	$woo_product_single_meta_info_font_size
);

$woo_product_single_meta_info_line_height = new QodeField(
	"textsimple",
	"woo_product_single_meta_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_meta_info_line_height",
	$woo_product_single_meta_info_line_height
);

$woo_product_single_meta_info_text_transform = new QodeField(
	"selectblanksimple",
	"woo_product_single_meta_info_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_product_single_meta_info_text_transform",
	$woo_product_single_meta_info_text_transform
);

$row2 = new QodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_info_font_family = new QodeField(
	"fontsimple",
	"woo_product_single_meta_info_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_meta_info_font_family",
	$woo_product_single_meta_info_font_family
);

$woo_product_single_meta_info_font_style = new QodeField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_product_single_meta_info_font_style",
	$woo_product_single_meta_info_font_style
);

$woo_product_single_meta_info_font_weight = new QodeField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_product_single_meta_info_font_weight",
	$woo_product_single_meta_info_font_weight
);

$woo_product_single_meta_info_letter_spacing = new QodeField(
	"textsimple",
	"woo_product_single_meta_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_meta_info_letter_spacing",
	$woo_product_single_meta_info_letter_spacing
);

//Product single price 

$group4 = new QodeGroup(
	esc_html__( "Product Single Price", 'brick' ),
	esc_html__( "Define Product Single Price Style", 'brick' )
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

$woo_product_single_price_color = new QodeField(
	"colorsimple",
	"woo_product_single_price_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_price_color",
	$woo_product_single_price_color
);

$woo_product_single_price_font_size = new QodeField(
	"textsimple",
	"woo_product_single_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_price_font_size",
	$woo_product_single_price_font_size
);

$woo_product_single_price_line_height = new QodeField(
	"textsimple",
	"woo_product_single_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_price_line_height",
	$woo_product_single_price_line_height
);

$woo_product_single_price_text_transform = new QodeField(
	"selectblanksimple",
	"woo_product_single_price_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_product_single_price_text_transform",
	$woo_product_single_price_text_transform
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_product_single_price_font_family = new QodeField(
	"fontsimple",
	"woo_product_single_price_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_price_font_family",
	$woo_product_single_price_font_family
);

$woo_product_single_price_font_style = new QodeField(
	"selectblanksimple",
	"woo_product_single_price_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_product_single_price_font_style",
	$woo_product_single_price_font_style
);

$woo_product_single_price_font_weight = new QodeField(
	"selectblanksimple",
	"woo_product_single_price_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_product_single_price_font_weight",
	$woo_product_single_price_font_weight
);

$woo_product_single_price_letter_spacing = new QodeField(
	"textsimple",
	"woo_product_single_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_price_letter_spacing",
	$woo_product_single_price_letter_spacing
);

$row3 = new QodeRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_product_single_price_old_font_size = new QodeField(
	"textsimple",
	"woo_product_single_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_product_single_price_old_font_size",
	$woo_product_single_price_old_font_size
);

$woo_product_single_price_old_color = new QodeField(
	"colorsimple",
	"woo_product_single_price_old_color",
	"",
	esc_html__( "Old Price Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_product_single_price_old_color",
	$woo_product_single_price_old_color
);

$woo_product_single_show_social_share = new QodeField(
	"yesno",
	"woo_product_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'brick' ),
	esc_html__( "Enabling this option will show share on Single Product", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_woo_product_single_share_options_container"
	)
);
$panel2->addChild(
	"woo_product_single_show_social_share",
	$woo_product_single_show_social_share
);

$woo_product_single_share_options_container = new QodeContainer(
	"woo_product_single_share_options_container",
	"woo_product_single_show_social_share",
	"no"
);
$panel2->addChild(
	"woo_product_single_share_options_container",
	$woo_product_single_share_options_container
);

$woo_product_single_select_share_option = new QodeField(
	"select",
	"woo_product_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'brick' ),
	esc_html__( "Choose Social Share Style for Single Product", 'brick' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'brick' ),
		"list"     => esc_html__( "Social Share List", 'brick' )
	)
);
$woo_product_single_share_options_container->addChild(
	"woo_product_single_select_share_option",
	$woo_product_single_select_share_option
);

//Product single tabs/accordions

$woo_products_info_style = new QodeField(
	"select",
	"woo_products_info_style",
	"accordions",
	esc_html__( "Product Info Display Style", 'brick' ),
	esc_html__( "Choose to display product info with accordions right from product image or with vertical tabs below product image", 'brick' ),
	array(
		"accordions"    => esc_html__( "Accordions", 'brick' ),
		"vertical_tabs" => esc_html__( "Vertical Tabs", 'brick' )
	
	)
);

$panel2->addChild(
	"woo_products_info_style",
	$woo_products_info_style
);

//Product single accordions 

$group10 = new QodeGroup(
	esc_html__( "Product Single Accordions", 'brick' ),
	esc_html__( "Define Product Single Accordions Style", 'brick' )
);
$panel2->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$woo_product_single_tabs_color = new QodeField(
	"colorsimple",
	"woo_product_single_tabs_color",
	"",
	esc_html__( "Header Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_tabs_color",
	$woo_product_single_tabs_color
);

$woo_product_single_tabs_hover_color = new QodeField(
	"colorsimple",
	"woo_product_single_tabs_hover_color",
	"",
	esc_html__( "Header Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_tabs_hover_color",
	$woo_product_single_tabs_hover_color
);

$woo_product_single_tabs_border_color = new QodeField(
	"colorsimple",
	"woo_product_single_tabs_border_color",
	"",
	esc_html__( "Header Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_tabs_border_color",
	$woo_product_single_tabs_border_color
);

$woo_product_single_tabs_border_hover_color = new QodeField(
	"colorsimple",
	"woo_product_single_tabs_border_hover_color",
	"",
	esc_html__( "Header Hover Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_tabs_border_hover_color",
	$woo_product_single_tabs_border_hover_color
);

$row2 = new QodeRow();
$group10->addChild(
	"row2",
	$row2
);

$woo_product_single_tabs_text_color = new QodeField(
	"colorsimple",
	"woo_product_single_tabs_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_tabs_text_color",
	$woo_product_single_tabs_text_color
);

$woo_product_single_tabs_text_hover_color = new QodeField(
	"colorsimple",
	"woo_product_single_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_tabs_text_hover_color",
	$woo_product_single_tabs_text_hover_color
);

$woo_product_single_tabs_font_size = new QodeField(
	"textsimple",
	"woo_product_single_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_tabs_font_size",
	$woo_product_single_tabs_font_size
);

$woo_product_single_tabs_line_height = new QodeField(
	"textsimple",
	"woo_product_single_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_tabs_line_height",
	$woo_product_single_tabs_line_height
);

$row3 = new QodeRow( true );
$group10->addChild(
	"row3",
	$row3
);

$woo_product_single_tabs_text_transform = new QodeField(
	"selectblanksimple",
	"woo_product_single_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row3->addChild(
	"woo_product_single_tabs_text_transform",
	$woo_product_single_tabs_text_transform
);

$woo_product_single_tabs_font_family = new QodeField(
	"fontsimple",
	"woo_product_single_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_product_single_tabs_font_family",
	$woo_product_single_tabs_font_family
);

$woo_product_single_tabs_font_style = new QodeField(
	"selectblanksimple",
	"woo_product_single_tabs_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"woo_product_single_tabs_font_style",
	$woo_product_single_tabs_font_style
);

$woo_product_single_tabs_font_weight = new QodeField(
	"selectblanksimple",
	"woo_product_single_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"woo_product_single_tabs_font_weight",
	$woo_product_single_tabs_font_weight
);

$row4 = new QodeRow( true );
$group10->addChild(
	"row4",
	$row4
);

$woo_product_single_tabs_letter_spacing = new QodeField(
	"textsimple",
	"woo_product_single_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row4->addChild(
	"woo_product_single_tabs_letter_spacing",
	$woo_product_single_tabs_letter_spacing
);

//Product single tabs 

$group11 = new QodeGroup(
	esc_html__( "Product Single Tabs", 'brick' ),
	esc_html__( "Define Product Single Tabs Style", 'brick' )
);
$panel2->addChild(
	"group11",
	$group11
);

$row1 = new QodeRow();
$group11->addChild(
	"row1",
	$row1
);

$woo_product_single_vertical_tabs_text_color = new QodeField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_color",
	$woo_product_single_vertical_tabs_text_color
);

$woo_product_single_vertical_tabs_text_hover_color = new QodeField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_hover_color",
	$woo_product_single_vertical_tabs_text_hover_color
);

$woo_product_single_vertical_tabs_border_color = new QodeField(
	"colorsimple",
	"woo_product_single_vertical_tabs_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_color",
	$woo_product_single_vertical_tabs_border_color
);

$woo_product_single_vertical_tabs_border_width = new QodeField(
	"textsimple",
	"woo_product_single_vertical_tabs_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_width",
	$woo_product_single_vertical_tabs_border_width
);

$row2 = new QodeRow();
$group11->addChild(
	"row2",
	$row2
);

$woo_product_single_vertical_tabs_font_size = new QodeField(
	"textsimple",
	"woo_product_single_vertical_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_size",
	$woo_product_single_vertical_tabs_font_size
);

$woo_product_single_vertical_tabs_line_height = new QodeField(
	"textsimple",
	"woo_product_single_vertical_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_line_height",
	$woo_product_single_vertical_tabs_line_height
);

$woo_product_single_vertical_tabs_text_transform = new QodeField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"woo_product_single_vertical_tabs_text_transform",
	$woo_product_single_vertical_tabs_text_transform
);

$woo_product_single_vertical_tabs_font_family = new QodeField(
	"fontsimple",
	"woo_product_single_vertical_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_family",
	$woo_product_single_vertical_tabs_font_family
);

$row3 = new QodeRow( true );
$group11->addChild(
	"row3",
	$row3
);

$woo_product_single_vertical_tabs_font_style = new QodeField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_style",
	$woo_product_single_vertical_tabs_font_style
);

$woo_product_single_vertical_tabs_font_weight = new QodeField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_weight",
	$woo_product_single_vertical_tabs_font_weight
);

$woo_product_single_vertical_tabs_letter_spacing = new QodeField(
	"textsimple",
	"woo_product_single_vertical_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_product_single_vertical_tabs_letter_spacing",
	$woo_product_single_vertical_tabs_letter_spacing
);

//Related Products Title

$group5 = new QodeGroup(
	esc_html__( "Related Products Title", 'brick' ),
	esc_html__( "Define Related Products Title Style", 'brick' )
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

$woo_product_single_related_color = new QodeField(
	"colorsimple",
	"woo_product_single_related_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_related_color",
	$woo_product_single_related_color
);

$woo_product_single_related_font_size = new QodeField(
	"textsimple",
	"woo_product_single_related_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_related_font_size",
	$woo_product_single_related_font_size
);

$woo_product_single_related_line_height = new QodeField(
	"textsimple",
	"woo_product_single_related_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_product_single_related_line_height",
	$woo_product_single_related_line_height
);

$woo_product_single_related_text_transform = new QodeField(
	"selectblanksimple",
	"woo_product_single_related_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"woo_product_single_related_text_transform",
	$woo_product_single_related_text_transform
);

$row2 = new QodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_product_single_related_font_family = new QodeField(
	"fontsimple",
	"woo_product_single_related_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_related_font_family",
	$woo_product_single_related_font_family
);

$woo_product_single_related_font_style = new QodeField(
	"selectblanksimple",
	"woo_product_single_related_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_product_single_related_font_style",
	$woo_product_single_related_font_style
);

$woo_product_single_related_font_weight = new QodeField(
	"selectblanksimple",
	"woo_product_single_related_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_product_single_related_font_weight",
	$woo_product_single_related_font_weight
);

$woo_product_single_related_letter_spacing = new QodeField(
	"textsimple",
	"woo_product_single_related_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_product_single_related_letter_spacing",
	$woo_product_single_related_letter_spacing
);

//Add to cart button

$add_to_cart_subtitle = new QodeTitle(
	"add_to_cart_subtitle",
	esc_html__( 'Add to cart button', 'brick' )
);
$panel2->addChild(
	"add_to_cart_subtitle",
	$add_to_cart_subtitle
);

$group6 = new QodeGroup(
	esc_html__( 'Button Text Style', 'brick' ),
	esc_html__( 'Define "Add To Cart" button text style', 'brick' )
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

$woo_products_single_add_to_cart_color = new QodeField(
	"colorsimple",
	"woo_products_single_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_color",
	$woo_products_single_add_to_cart_color
);

$woo_products_single_add_to_cart_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_hover_color",
	$woo_products_single_add_to_cart_hover_color
);

$woo_products_single_add_to_cart_font_size = new QodeField(
	"textsimple",
	"woo_products_single_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_font_size",
	$woo_products_single_add_to_cart_font_size
);

$woo_products_single_add_to_cart_line_height = new QodeField(
	"textsimple",
	"woo_products_single_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_line_height",
	$woo_products_single_add_to_cart_line_height
);

$row2 = new QodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_single_add_to_cart_text_transform = new QodeField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"woo_products_single_add_to_cart_text_transform",
	$woo_products_single_add_to_cart_text_transform
);

$woo_products_single_add_to_cart_font_family = new QodeField(
	"fontsimple",
	"woo_products_single_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_family",
	$woo_products_single_add_to_cart_font_family
);

$woo_products_single_add_to_cart_font_style = new QodeField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_style",
	$woo_products_single_add_to_cart_font_style
);

$woo_products_single_add_to_cart_font_weight = new QodeField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_weight",
	$woo_products_single_add_to_cart_font_weight
);

$row3 = new QodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_single_add_to_cart_letter_spacing = new QodeField(
	"textsimple",
	"woo_products_single_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_letter_spacing",
	$woo_products_single_add_to_cart_letter_spacing
);

$woo_products_single_add_to_cart_margin_left = new QodeField(
	"textsimple",
	"woo_products_single_add_to_cart_margin_left",
	"",
	esc_html__( "Margin left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_margin_left",
	$woo_products_single_add_to_cart_margin_left
);

$group18 = new QodeGroup(
	esc_html__( 'Button Background', 'brick' ),
	esc_html__( 'Define "Add To Cart" Button Background', 'brick' )
);
$panel2->addChild(
	"group18",
	$group18
);

$row1 = new QodeRow();
$group18->addChild(
	"row1",
	$row1
);

$woo_products_single_add_to_cart_background_color = new QodeField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_color",
	$woo_products_single_add_to_cart_background_color
);

$woo_products_single_add_to_cart_background_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_hover_color",
	$woo_products_single_add_to_cart_background_hover_color
);

$group19 = new QodeGroup(
	esc_html__( 'Button Border', 'brick' ),
	esc_html__( 'Define "Add To Cart" border', 'brick' )
);
$panel2->addChild(
	"group19",
	$group19
);

$row1 = new QodeRow();
$group19->addChild(
	"row1",
	$row1
);

$woo_products_single_add_to_cart_border_color = new QodeField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_color",
	$woo_products_single_add_to_cart_border_color
);

$woo_products_single_add_to_cart_border_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_hover_color",
	$woo_products_single_add_to_cart_border_hover_color
);

$woo_products_single_add_to_cart_border_width = new QodeField(
	"textsimple",
	"woo_products_single_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_width",
	$woo_products_single_add_to_cart_border_width
);

$woo_products_single_add_to_cart_border_radius = new QodeField(
	"textsimple",
	"woo_products_single_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_radius",
	$woo_products_single_add_to_cart_border_radius
);

//Quantity buttons

$quantity_subtitle = new QodeTitle(
	"quantity_subtitle",
	esc_html__( 'Quantity Buttons', 'brick' )
);
$panel2->addChild(
	"quantity_subtitle",
	$quantity_subtitle
);

$woo_products_single_quantity_button_space = new QodeField(
	"yesno",
	"woo_products_single_quantity_button_space",
	"no",
	esc_html__( "Disable Space Between Buttons", 'brick' ),
	esc_html__( "Enabling this option will disable space between quantity buttons", 'brick' )
);
$panel2->addChild(
	"woo_products_single_quantity_button_space",
	$woo_products_single_quantity_button_space
);

$group27 = new QodeGroup(
	esc_html__( 'Buttons Width', 'brick' ),
	esc_html__( 'Define width for buttons', 'brick' )
);
$panel2->addChild(
	"group27",
	$group27
);

$row1 = new QodeRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_width = new QodeField(
	"textsimple",
	"woo_products_single_quantity_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_width",
	$woo_products_single_quantity_width
);

$group20 = new QodeGroup(
	esc_html__( 'Buttons Text Style', 'brick' ),
	esc_html__( 'Define Quantity buttons text style', 'brick' )
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

$woo_products_single_quantity_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_color",
	$woo_products_single_quantity_color
);

$woo_products_single_quantity_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_hover_color",
	"",
	esc_html__( "Hover Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_hover_color",
	$woo_products_single_quantity_hover_color
);

$woo_products_single_quantity_font_size = new QodeField(
	"textsimple",
	"woo_products_single_quantity_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_font_size",
	$woo_products_single_quantity_font_size
);

$woo_products_single_quantity_line_height = new QodeField(
	"textsimple",
	"woo_products_single_quantity_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_line_height",
	$woo_products_single_quantity_line_height
);

$group21 = new QodeGroup(
	esc_html__( 'Buttons Background', 'brick' ),
	esc_html__( 'Define Quantity buttons background', 'brick' )
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

$woo_products_single_quantity_background_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_background_color",
	$woo_products_single_quantity_background_color
);

$woo_products_single_quantity_background_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_background_hover_color",
	$woo_products_single_quantity_background_hover_color
);

$group22 = new QodeGroup(
	esc_html__( 'Buttons Border', 'brick' ),
	esc_html__( 'Define Quantity buttons border', 'brick' )
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

$woo_products_single_quantity_border_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_border_color",
	$woo_products_single_quantity_border_color
);

$woo_products_single_quantity_border_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_border_hover_color",
	$woo_products_single_quantity_border_hover_color
);

$woo_products_single_quantity_border_width = new QodeField(
	"textsimple",
	"woo_products_single_quantity_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_border_width",
	$woo_products_single_quantity_border_width
);

$woo_products_single_quantity_border_radius = new QodeField(
	"textsimple",
	"woo_products_single_quantity_border_radius",
	"",
	esc_html__( "Border radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_border_radius",
	$woo_products_single_quantity_border_radius
);

//Quantity input field

$quantity_input_subtitle = new QodeTitle(
	"quantity_input_subtitle",
	esc_html__( 'Quantity Input Field', 'brick' )
);
$panel2->addChild(
	"quantity_input_subtitle",
	$quantity_input_subtitle
);

$group26 = new QodeGroup(
	esc_html__( 'Input Field Width', 'brick' ),
	esc_html__( 'Define width for input field', 'brick' )
);
$panel2->addChild(
	"group26",
	$group26
);

$row1 = new QodeRow();
$group26->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_width = new QodeField(
	"textsimple",
	"woo_products_single_quantity_input_width",
	"",
	esc_html__( "Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_width",
	$woo_products_single_quantity_input_width
);

$group23 = new QodeGroup(
	esc_html__( 'Input Text Style', 'brick' ),
	esc_html__( 'Define Quantity Input Field text style', 'brick' )
);
$panel2->addChild(
	"group23",
	$group23
);

$row1 = new QodeRow();
$group23->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_input_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_color",
	$woo_products_single_quantity_input_color
);

$woo_products_single_quantity_input_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_input_hover_color",
	"",
	esc_html__( "Focus Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_hover_color",
	$woo_products_single_quantity_input_hover_color
);

$woo_products_single_quantity_input_font_size = new QodeField(
	"textsimple",
	"woo_products_single_quantity_input_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_font_size",
	$woo_products_single_quantity_input_font_size
);

$woo_products_single_quantity_input_line_height = new QodeField(
	"textsimple",
	"woo_products_single_quantity_input_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_line_height",
	$woo_products_single_quantity_input_line_height
);

$group24 = new QodeGroup(
	esc_html__( 'Input Background', 'brick' ),
	esc_html__( 'Define Quantity Input Field background', 'brick' )
);
$panel2->addChild(
	"group24",
	$group24
);

$row1 = new QodeRow();
$group24->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_background_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_input_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_color",
	$woo_products_single_quantity_input_background_color
);

$woo_products_single_quantity_input_background_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_input_background_hover_color",
	"",
	esc_html__( "Focus Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_hover_color",
	$woo_products_single_quantity_input_background_hover_color
);

$group25 = new QodeGroup(
	esc_html__( 'Input Border', 'brick' ),
	esc_html__( 'Define Quantity Input Field border', 'brick' )
);
$panel2->addChild(
	"group25",
	$group25
);

$row1 = new QodeRow();
$group25->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_border_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_input_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_color",
	$woo_products_single_quantity_input_border_color
);

$woo_products_single_quantity_input_border_hover_color = new QodeField(
	"colorsimple",
	"woo_products_single_quantity_input_border_hover_color",
	"",
	esc_html__( "Border Focus Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_hover_color",
	$woo_products_single_quantity_input_border_hover_color
);

$woo_products_single_quantity_input_border_width = new QodeField(
	"textsimple",
	"woo_products_single_quantity_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_width",
	$woo_products_single_quantity_input_border_width
);

$woo_products_single_quantity_input_border_radius = new QodeField(
	"textsimple",
	"woo_products_single_quantity_input_border_radius",
	"",
	esc_html__( "Border radius (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_radius",
	$woo_products_single_quantity_input_border_radius
);

//Product single styles

$panel4 = new QodePanel(
	esc_html__( "Header & Sidebar Widget", 'brick' ),
	"product_widget"
);
$woocommercePage->addChild(
	"panel4",
	$panel4
);

$group1 = new QodeGroup(
	esc_html__( "Product Title", 'brick' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'brick' )
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
$sidebar_product_title_color = new QodeField(
	"colorsimple",
	"sidebar_product_title_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_title_color",
	$sidebar_product_title_color
);

$sidebar_product_title_font_size = new QodeField(
	"textsimple",
	"sidebar_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_title_font_size",
	$sidebar_product_title_font_size
);

$sidebar_product_title_line_height = new QodeField(
	"textsimple",
	"sidebar_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_title_line_height",
	$sidebar_product_title_line_height
);

$sidebar_product_title_text_transform = new QodeField(
	"selectblanksimple",
	"sidebar_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"sidebar_product_title_text_transform",
	$sidebar_product_title_text_transform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$sidebar_product_title_font_family = new QodeField(
	"fontsimple",
	"sidebar_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_product_title_font_family",
	$sidebar_product_title_font_family
);

$sidebar_product_title_font_style = new QodeField(
	"selectblanksimple",
	"sidebar_product_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"sidebar_product_title_font_style",
	$sidebar_product_title_font_style
);

$sidebar_product_title_font_weight = new QodeField(
	"selectblanksimple",
	"sidebar_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"sidebar_product_title_font_weight",
	$sidebar_product_title_font_weight
);

$sidebar_product_title_letter_spacing = new QodeField(
	"textsimple",
	"sidebar_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_product_title_letter_spacing",
	$sidebar_product_title_letter_spacing
);

$row3 = new QodeRow();
$group1->addChild(
	"row3",
	$row3
);
$sidebar_product_title_hover_color = new QodeField(
	"colorsimple",
	"sidebar_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"sidebar_product_title_hover_color",
	$sidebar_product_title_hover_color
);

$group2 = new QodeGroup(
	esc_html__( "Product Price", 'brick' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'brick' )
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

$sidebar_product_price_color = new QodeField(
	"colorsimple",
	"sidebar_product_price_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_price_color",
	$sidebar_product_price_color
);

$sidebar_product_price_font_size = new QodeField(
	"textsimple",
	"sidebar_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_price_font_size",
	$sidebar_product_price_font_size
);

$sidebar_product_price_line_height = new QodeField(
	"textsimple",
	"sidebar_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_price_line_height",
	$sidebar_product_price_line_height
);

$sidebar_product_price_text_transform = new QodeField(
	"selectblanksimple",
	"sidebar_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"sidebar_product_price_text_transform",
	$sidebar_product_price_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$sidebar_product_price_font_family = new QodeField(
	"fontsimple",
	"sidebar_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_product_price_font_family",
	$sidebar_product_price_font_family
);

$sidebar_product_price_font_style = new QodeField(
	"selectblanksimple",
	"sidebar_product_price_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"sidebar_product_price_font_style",
	$sidebar_product_price_font_style
);

$sidebar_product_price_font_weight = new QodeField(
	"selectblanksimple",
	"sidebar_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"sidebar_product_price_font_weight",
	$sidebar_product_price_font_weight
);

$sidebar_product_price_letter_spacing = new QodeField(
	"textsimple",
	"sidebar_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"sidebar_product_price_letter_spacing",
	$sidebar_product_price_letter_spacing
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$sidebar_product_price_old_color = new QodeField(
	"colorsimple",
	"sidebar_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"sidebar_product_price_old_color",
	$sidebar_product_price_old_color
);

$group3 = new QodeGroup(
	esc_html__( "Icon Spacing", 'brick' ),
	esc_html__( "Define padding and margin for widget icon", 'brick' )
);
$panel4->addChild(
	"group3",
	$group3
);

$row1 = new QodeRow();
$group3->addChild(
	"row1",
	$row1
);

$sidebar_product_icon_padding_left = new QodeField(
	"textsimple",
	"sidebar_product_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_icon_padding_left",
	$sidebar_product_icon_padding_left
);

$sidebar_product_icon_padding_right = new QodeField(
	"textsimple",
	"sidebar_product_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_icon_padding_right",
	$sidebar_product_icon_padding_right
);

$sidebar_product_icon_margin_left = new QodeField(
	"textsimple",
	"sidebar_product_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_icon_margin_left",
	$sidebar_product_icon_margin_left
);

$sidebar_product_icon_margin_right = new QodeField(
	"textsimple",
	"sidebar_product_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"sidebar_product_icon_margin_right",
	$sidebar_product_icon_margin_right
);

//WooCommerce Dropdown Cart
$woo_drop_cart_type = new QodeField(
	"select",
	"woo_drop_cart_type",
	"with_icon",
	esc_html__( "WooCommerce Dropdown Cart Widget Style", 'brick' ),
	esc_html__( "Choose style for woocommerce dropdown cart widget in header", 'brick' ),
	array(
		"with_icon"        => esc_html__( "With Icon", 'brick' ),
		"with_icon_label"  => esc_html__( "With Icon and Label", 'brick' ),
		"button_with_text" => esc_html__( "Button with Text", 'brick' )
	)
);
$panel4->addChild(
	"woo_drop_cart_type",
	$woo_drop_cart_type
);

$cart_styles_title = new QodeTitle(
	"cart_styles_title",
	esc_html__( "Cart Menu Item Style", 'brick' )
);
$panel4->addChild(
	"cart_styles_title",
	$cart_styles_title
);

$group4 = new QodeGroup(
	esc_html__( "Cart Text Style", 'brick' ),
	esc_html__( "Define cart text style in header", 'brick' )
);
$panel4->addChild(
	"group4",
	$group4
);

$row1 = new QodeRow();
$group4->addChild(
	"row1",
	$row1
);

$header_cart_text_color = new QodeField(
	"colorsimple",
	"header_cart_text_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_text_color",
	$header_cart_text_color
);

$header_cart_text_hover_color = new QodeField(
	"colorsimple",
	"header_cart_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_text_hover_color",
	$header_cart_text_hover_color
);

$header_cart_text_font_size = new QodeField(
	"textsimple",
	"header_cart_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_text_font_size",
	$header_cart_text_font_size
);

$header_cart_text_line_height = new QodeField(
	"textsimple",
	"header_cart_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_text_line_height",
	$header_cart_text_line_height
);

$row2 = new QodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$header_cart_text_text_transform = new QodeField(
	"selectblanksimple",
	"header_cart_text_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"header_cart_text_text_transform",
	$header_cart_text_text_transform
);

$header_cart_text_font_family = new QodeField(
	"fontsimple",
	"header_cart_text_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"header_cart_text_font_family",
	$header_cart_text_font_family
);

$header_cart_text_font_style = new QodeField(
	"selectblanksimple",
	"header_cart_text_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"header_cart_text_font_style",
	$header_cart_text_font_style
);

$header_cart_text_font_weight = new QodeField(
	"selectblanksimple",
	"header_cart_text_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"header_cart_text_font_weight",
	$header_cart_text_font_weight
);

$row3 = new QodeRow( true );
$group4->addChild(
	"row3",
	$row3
);

$header_cart_text_letter_spacing = new QodeField(
	"textsimple",
	"header_cart_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"header_cart_text_letter_spacing",
	$header_cart_text_letter_spacing
);

$group5 = new QodeGroup(
	esc_html__( "Cart Icon Style", 'brick' ),
	esc_html__( "Define cart icon style in header.", 'brick' )
);
$panel4->addChild(
	"group5",
	$group5
);

$row1 = new QodeRow();
$group5->addChild(
	"row1",
	$row1
);

$header_cart_icon_color = new QodeField(
	"colorsimple",
	"header_cart_icon_color",
	"",
	esc_html__( "Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_icon_color",
	$header_cart_icon_color
);

$header_cart_icon_hover_color = new QodeField(
	"colorsimple",
	"header_cart_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_icon_hover_color",
	$header_cart_icon_hover_color
);

$header_cart_icon_size = new QodeField(
	"textsimple",
	"header_cart_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_icon_size",
	$header_cart_icon_size
);

$group6 = new QodeGroup(
	esc_html__( "Count Number Style", 'brick' ),
	esc_html__( "Define count number style in header.", 'brick' )
);
$panel4->addChild(
	"group6",
	$group6
);

$row1 = new QodeRow();
$group6->addChild(
	"row1",
	$row1
);

$header_cart_icon_count_color = new QodeField(
	"colorsimple",
	"header_cart_icon_count_color",
	"",
	esc_html__( "Count Number Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_icon_count_color",
	$header_cart_icon_count_color
);

$header_cart_icon_count_hover_color = new QodeField(
	"colorsimple",
	"header_cart_icon_count_hover_color",
	"",
	esc_html__( "Count Number Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_icon_count_hover_color",
	$header_cart_icon_count_hover_color
);

$header_cart_icon_count_size = new QodeField(
	"textsimple",
	"header_cart_icon_count_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_icon_count_size",
	$header_cart_icon_count_size
);

$group_count_number_sticky = new QodeGroup(
	esc_html__( "Cart Style for Sticky Menu", 'brick' ),
	esc_html__( "Define cart style for sticky menu.", 'brick' )
);
$panel4->addChild(
	"group_count_number_sticky",
	$group_count_number_sticky
);

$row1 = new QodeRow();
$group_count_number_sticky->addChild(
	"row1",
	$row1
);

$header_sticky_cart_icon_count_color = new QodeField(
	"colorsimple",
	"header_sticky_cart_icon_count_color",
	"",
	esc_html__( "Count Number Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_color",
	$header_sticky_cart_icon_count_color
);

$header_sticky_cart_icon_count_hover_color = new QodeField(
	"colorsimple",
	"header_sticky_cart_icon_count_hover_color",
	"",
	esc_html__( "Count Number Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_hover_color",
	$header_sticky_cart_icon_count_hover_color
);

$header_sticky_cart_icon_count_back_color = new QodeField(
	"colorsimple",
	"header_sticky_cart_icon_count_back_color",
	"",
	esc_html__( "Count Number Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_back_color",
	$header_sticky_cart_icon_count_back_color
);

$header_sticky_cart_icon_count_back_hover_color = new QodeField(
	"colorsimple",
	"header_sticky_cart_icon_count_back_hover_color",
	"",
	esc_html__( "Count Number Hover Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_back_hover_color",
	$header_sticky_cart_icon_count_back_hover_color
);

$row2 = new QodeRow();
$group_count_number_sticky->addChild(
	"row2",
	$row2
);

$header_sticky_cart_icon_color = new QodeField(
	"colorsimple",
	"header_sticky_cart_icon_color",
	"",
	esc_html__( "Cart Icon Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"header_sticky_cart_icon_color",
	$header_sticky_cart_icon_color
);

$header_sticky_cart_icon_hover_color = new QodeField(
	"colorsimple",
	"header_sticky_cart_icon_hover_color",
	"",
	esc_html__( "Cart Icon Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"header_sticky_cart_icon_hover_color",
	$header_sticky_cart_icon_hover_color
);

$group7 = new QodeGroup(
	esc_html__( "Button with Text Style", 'brick' ),
	esc_html__( "Define button with text style in header.", 'brick' )
);
$panel4->addChild(
	"group7",
	$group7
);

$row1 = new QodeRow();
$group7->addChild(
	"row1",
	$row1
);

$header_cart_button_background_color = new QodeField(
	"colorsimple",
	"header_cart_button_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_button_background_color",
	$header_cart_button_background_color
);

$header_cart_button_background_hover_color = new QodeField(
	"colorsimple",
	"header_cart_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_button_background_hover_color",
	$header_cart_button_background_hover_color
);

$ww_dropdown_styles_title = new QodeTitle(
	"ww_dropdown_styles_title",
	esc_html__( "Dropdown Item Style", 'brick' )
);
$panel4->addChild(
	"ww_dropdown_styles_title",
	$ww_dropdown_styles_title
);

$group_drop_down_back_color = new QodeGroup(
	esc_html__( "Dropdown Styles", 'brick' ),
	esc_html__( "Define dropdown box style", 'brick' )
);
$panel4->addChild(
	"group_drop_down_back_color",
	$group_drop_down_back_color
);

$row1 = new QodeRow();
$group_drop_down_back_color->addChild(
	"row1",
	$row1
);

$header_cart_drop_down_back_color = new QodeField(
	"colorsimple",
	"header_cart_drop_down_back_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_drop_down_back_color",
	$header_cart_drop_down_back_color
);

$header_cart_drop_down_border_color = new QodeField(
	"colorsimple",
	"header_cart_drop_down_border_color",
	"",
	esc_html__( "Border Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"header_cart_drop_down_border_color",
	$header_cart_drop_down_border_color
);

$group8 = new QodeGroup(
	esc_html__( "Product Name & Price Style", 'brick' ),
	esc_html__( "Define style for product name and price", 'brick' )
);
$panel4->addChild(
	"group8",
	$group8
);

$row1 = new QodeRow();
$group8->addChild(
	"row1",
	$row1
);

$drop_down_product_name_color = new QodeField(
	"colorsimple",
	"drop_down_product_name_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_name_color",
	$drop_down_product_name_color
);

$drop_down_product_name_hover_color = new QodeField(
	"colorsimple",
	"drop_down_product_name_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_name_hover_color",
	$drop_down_product_name_hover_color
);

$drop_down_product_name_font_size = new QodeField(
	"textsimple",
	"drop_down_product_name_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_name_font_size",
	$drop_down_product_name_font_size
);

$drop_down_product_name_line_height = new QodeField(
	"textsimple",
	"drop_down_product_name_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_name_line_height",
	$drop_down_product_name_line_height
);

$row2 = new QodeRow();
$group8->addChild(
	"row2",
	$row2
);

$drop_down_product_name_text_transform = new QodeField(
	"selectblanksimple",
	"drop_down_product_name_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"drop_down_product_name_text_transform",
	$drop_down_product_name_text_transform
);

$drop_down_product_name_font_family = new QodeField(
	"fontsimple",
	"drop_down_product_name_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"drop_down_product_name_font_family",
	$drop_down_product_name_font_family
);

$drop_down_product_name_font_style = new QodeField(
	"selectblanksimple",
	"drop_down_product_name_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"drop_down_product_name_font_style",
	$drop_down_product_name_font_style
);

$drop_down_product_name_font_weight = new QodeField(
	"selectblanksimple",
	"drop_down_product_name_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"drop_down_product_name_font_weight",
	$drop_down_product_name_font_weight
);

$row3 = new QodeRow();
$group8->addChild(
	"row3",
	$row3
);

$drop_down_product_name_letter_spacing = new QodeField(
	"textsimple",
	"drop_down_product_name_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"drop_down_product_name_letter_spacing",
	$drop_down_product_name_letter_spacing
);

$group9 = new QodeGroup(
	esc_html__( "Product Quantity Style", 'brick' ),
	esc_html__( "Define style for product quantity", 'brick' )
);
$panel4->addChild(
	"group9",
	$group9
);

$row1 = new QodeRow();
$group9->addChild(
	"row1",
	$row1
);

$drop_down_product_quantity_color = new QodeField(
	"colorsimple",
	"drop_down_product_quantity_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_quantity_color",
	$drop_down_product_quantity_color
);

$drop_down_product_quantity_font_size = new QodeField(
	"textsimple",
	"drop_down_product_quantity_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_quantity_font_size",
	$drop_down_product_quantity_font_size
);

$drop_down_product_quantity_line_height = new QodeField(
	"textsimple",
	"drop_down_product_quantity_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_quantity_line_height",
	$drop_down_product_quantity_line_height
);

$drop_down_product_quantity_text_transform = new QodeField(
	"selectblanksimple",
	"drop_down_product_quantity_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"drop_down_product_quantity_text_transform",
	$drop_down_product_quantity_text_transform
);

$row2 = new QodeRow();
$group9->addChild(
	"row2",
	$row2
);

$drop_down_product_quantity_font_family = new QodeField(
	"fontsimple",
	"drop_down_product_quantity_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"drop_down_product_quantity_font_family",
	$drop_down_product_quantity_font_family
);

$drop_down_product_quantity_font_style = new QodeField(
	"selectblanksimple",
	"drop_down_product_quantity_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"drop_down_product_quantity_font_style",
	$drop_down_product_quantity_font_style
);

$drop_down_product_quantity_font_weight = new QodeField(
	"selectblanksimple",
	"drop_down_product_quantity_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"drop_down_product_quantity_font_weight",
	$drop_down_product_quantity_font_weight
);

$drop_down_product_quantity_letter_spacing = new QodeField(
	"textsimple",
	"drop_down_product_quantity_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"drop_down_product_quantity_letter_spacing",
	$drop_down_product_quantity_letter_spacing
);

$group10 = new QodeGroup(
	esc_html__( "Product Total Style", 'brick' ),
	esc_html__( "Define style for product total", 'brick' )
);
$panel4->addChild(
	"group10",
	$group10
);

$row1 = new QodeRow();
$group10->addChild(
	"row1",
	$row1
);

$drop_down_product_total_color = new QodeField(
	"colorsimple",
	"drop_down_product_total_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_total_color",
	$drop_down_product_total_color
);

$drop_down_product_total_font_size = new QodeField(
	"textsimple",
	"drop_down_product_total_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_total_font_size",
	$drop_down_product_total_font_size
);

$drop_down_product_total_line_height = new QodeField(
	"textsimple",
	"drop_down_product_total_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_product_total_line_height",
	$drop_down_product_total_line_height
);

$drop_down_product_total_text_transform = new QodeField(
	"selectblanksimple",
	"drop_down_product_total_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"drop_down_product_total_text_transform",
	$drop_down_product_total_text_transform
);

$row2 = new QodeRow();
$group10->addChild(
	"row2",
	$row2
);

$drop_down_product_total_font_family = new QodeField(
	"fontsimple",
	"drop_down_product_total_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"drop_down_product_total_font_family",
	$drop_down_product_total_font_family
);

$drop_down_product_total_font_style = new QodeField(
	"selectblanksimple",
	"drop_down_product_total_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"drop_down_product_total_font_style",
	$drop_down_product_total_font_style
);

$drop_down_product_total_font_weight = new QodeField(
	"selectblanksimple",
	"drop_down_product_total_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"drop_down_product_total_font_weight",
	$drop_down_product_total_font_weight
);

$drop_down_product_total_letter_spacing = new QodeField(
	"textsimple",
	"drop_down_product_total_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"drop_down_product_total_letter_spacing",
	$drop_down_product_total_letter_spacing
);

$group_drop_cart_buttons = new QodeGroup(
	esc_html__( "Dropdown Cart Buttons", 'brick' ),
	esc_html__( "Define style for dropdown cart buttons", 'brick' )
);
$panel4->addChild(
	"group_drop_cart_buttons",
	$group_drop_cart_buttons
);

$row1 = new QodeRow();
$group_drop_cart_buttons->addChild(
	"row1",
	$row1
);

$drop_down_cart_button_color = new QodeField(
	"colorsimple",
	"drop_down_cart_button_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_cart_button_color",
	$drop_down_cart_button_color
);

$drop_down_cart_button_color_hover = new QodeField(
	"colorsimple",
	"drop_down_cart_button_color_hover",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_cart_button_color_hover",
	$drop_down_cart_button_color_hover
);

$drop_down_cart_button_line_height = new QodeField(
	"textsimple",
	"drop_down_cart_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_cart_button_line_height",
	$drop_down_cart_button_line_height
);

$row2 = new QodeRow();
$group_drop_cart_buttons->addChild(
	"row2",
	$row2
);

$drop_down_cart_button_text_transform = new QodeField(
	"selectblanksimple",
	"drop_down_cart_button_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row2->addChild(
	"drop_down_cart_button_text_transform",
	$drop_down_cart_button_text_transform
);

$drop_down_cart_button_font_family = new QodeField(
	"fontsimple",
	"drop_down_cart_button_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"drop_down_cart_button_font_family",
	$drop_down_cart_button_font_family
);

$drop_down_cart_button_font_style = new QodeField(
	"selectblanksimple",
	"drop_down_cart_button_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"drop_down_cart_button_font_style",
	$drop_down_cart_button_font_style
);

$drop_down_cart_button_font_weight = new QodeField(
	"selectblanksimple",
	"drop_down_cart_button_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"drop_down_cart_button_font_weight",
	$drop_down_cart_button_font_weight
);

$row3 = new QodeRow();
$group_drop_cart_buttons->addChild(
	"row3",
	$row3
);

$drop_down_cart_button_background_color = new QodeField(
	"colorsimple",
	"drop_down_cart_button_background_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"drop_down_cart_button_background_color",
	$drop_down_cart_button_background_color
);

$drop_down_cart_button_background_color_hover = new QodeField(
	"colorsimple",
	"drop_down_cart_button_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"drop_down_cart_button_background_color_hover",
	$drop_down_cart_button_background_color_hover
);

$group_drop_cart_remove_button = new QodeGroup(
	esc_html__( "Remove Button Style", 'brick' ),
	esc_html__( "Define style for remove button", 'brick' )
);
$panel4->addChild(
	"group_drop_cart_remove_button",
	$group_drop_cart_remove_button
);

$row1 = new QodeRow();
$group_drop_cart_remove_button->addChild(
	"row1",
	$row1
);

$drop_down_remove_button_color = new QodeField(
	"colorsimple",
	"drop_down_remove_button_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_remove_button_color",
	$drop_down_remove_button_color
);

$drop_down_remove_button_color_hover = new QodeField(
	"colorsimple",
	"drop_down_remove_button_color_hover",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_remove_button_color_hover",
	$drop_down_remove_button_color_hover
);

$drop_down_remove_button_back_color = new QodeField(
	"colorsimple",
	"drop_down_remove_button_back_color",
	"",
	esc_html__( "Background Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_remove_button_back_color",
	$drop_down_remove_button_back_color
);

$drop_down_remove_button_back_color_hover = new QodeField(
	"colorsimple",
	"drop_down_remove_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"drop_down_remove_button_back_color_hover",
	$drop_down_remove_button_back_color_hover
);

//Footer widget

$panel5 = new QodePanel(
	esc_html__( "Footer Widget", 'brick' ),
	"footer_product_widget"
);
$woocommercePage->addChild(
	"panel5",
	$panel5
);

$group1 = new QodeGroup(
	esc_html__( "Product Title", 'brick' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'brick' )
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

$footer_wdgt_product_title_color = new QodeField(
	"colorsimple",
	"footer_wdgt_product_title_color",
	"",
	esc_html__( "Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"footer_wdgt_product_title_color",
	$footer_wdgt_product_title_color
);

$footer_wdgt_product_title_font_size = new QodeField(
	"textsimple",
	"footer_wdgt_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"footer_wdgt_product_title_font_size",
	$footer_wdgt_product_title_font_size
);

$footer_wdgt_product_title_line_height = new QodeField(
	"textsimple",
	"footer_wdgt_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"footer_wdgt_product_title_line_height",
	$footer_wdgt_product_title_line_height
);

$footer_wdgt_product_title_text_transform = new QodeField(
	"selectblanksimple",
	"footer_wdgt_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"footer_wdgt_product_title_text_transform",
	$footer_wdgt_product_title_text_transform
);

$row2 = new QodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_title_font_family = new QodeField(
	"fontsimple",
	"footer_wdgt_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"footer_wdgt_product_title_font_family",
	$footer_wdgt_product_title_font_family
);

$footer_wdgt_product_title_font_style = new QodeField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"footer_wdgt_product_title_font_style",
	$footer_wdgt_product_title_font_style
);

$footer_wdgt_product_title_font_weight = new QodeField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"footer_wdgt_product_title_font_weight",
	$footer_wdgt_product_title_font_weight
);

$footer_wdgt_product_title_letter_spacing = new QodeField(
	"textsimple",
	"footer_wdgt_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"footer_wdgt_product_title_letter_spacing",
	$footer_wdgt_product_title_letter_spacing
);

$row3 = new QodeRow();
$group1->addChild(
	"row3",
	$row3
);
$footer_wdgt_product_title_hover_color = new QodeField(
	"colorsimple",
	"footer_wdgt_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"footer_wdgt_product_title_hover_color",
	$footer_wdgt_product_title_hover_color
);

$group2 = new QodeGroup(
	esc_html__( "Product Price", 'brick' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'brick' )
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

$footer_wdgt_product_price_color = new QodeField(
	"colorsimple",
	"footer_wdgt_product_price_color",
	"",
	esc_html__( "Text Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"footer_wdgt_product_price_color",
	$footer_wdgt_product_price_color
);

$footer_wdgt_product_price_font_size = new QodeField(
	"textsimple",
	"footer_wdgt_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"footer_wdgt_product_price_font_size",
	$footer_wdgt_product_price_font_size
);

$footer_wdgt_product_price_line_height = new QodeField(
	"textsimple",
	"footer_wdgt_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row1->addChild(
	"footer_wdgt_product_price_line_height",
	$footer_wdgt_product_price_line_height
);

$footer_wdgt_product_price_text_transform = new QodeField(
	"selectblanksimple",
	"footer_wdgt_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('text_transform')
);
$row1->addChild(
	"footer_wdgt_product_price_text_transform",
	$footer_wdgt_product_price_text_transform
);

$row2 = new QodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_price_font_family = new QodeField(
	"fontsimple",
	"footer_wdgt_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"footer_wdgt_product_price_font_family",
	$footer_wdgt_product_price_font_family
);

$footer_wdgt_product_price_font_style = new QodeField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_style",
	"",
	esc_html__( "Font Style", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_style')
);
$row2->addChild(
	"footer_wdgt_product_price_font_style",
	$footer_wdgt_product_price_font_style
);

$footer_wdgt_product_price_font_weight = new QodeField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'brick' ),
	esc_html__( "This is some description", 'brick' ),
	brick_qode_get_options_value_by_name('font_weight')
);
$row2->addChild(
	"footer_wdgt_product_price_font_weight",
	$footer_wdgt_product_price_font_weight
);

$footer_wdgt_product_price_letter_spacing = new QodeField(
	"textsimple",
	"footer_wdgt_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row2->addChild(
	"footer_wdgt_product_price_letter_spacing",
	$footer_wdgt_product_price_letter_spacing
);

$row3 = new QodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$footer_wdgt_product_price_old_color = new QodeField(
	"colorsimple",
	"footer_wdgt_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'brick' ),
	esc_html__( "This is some description", 'brick' )
);
$row3->addChild(
	"footer_wdgt_product_price_old_color",
	$footer_wdgt_product_price_old_color
);
