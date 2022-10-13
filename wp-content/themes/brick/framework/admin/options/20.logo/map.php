<?php

$logoPage = new BrickQodeAdminPage(
	"1",
	esc_html__( "Logo", 'brick' ),
	"fa fa-coffee"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"logo",
	$logoPage
);

$panel1 = new QodePanel(
	esc_html__( "Logo Upload", 'brick' ),
	"logo"
);
$logoPage->addChild(
	"panel1",
	$panel1
);

$show_logo = new QodeField(
	"yesno",
	"show_logo",
	"yes",
	esc_html__( "Show Logo", 'brick' ),
	esc_html__( "Disabling this option will hide logo", 'brick' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_show_logo_container"
	)
);
$panel1->addChild(
	"show_logo",
	$show_logo
);
$show_logo_container = new QodeContainer(
	"show_logo_container",
	"show_logo",
	"no"
);
$panel1->addChild(
	"show_logo_container",
	$show_logo_container
);

$logo_image = new QodeField(
	"image",
	"logo_image",
	BRICK_ROOT . "/img/logo.png",
	esc_html__( "Logo Image - Normal", 'brick' ),
	esc_html__( "Choose a default logo image to display ", 'brick' )
);
$show_logo_container->addChild(
	"logo_image",
	$logo_image
);

$logo_image_light = new QodeField(
	"image",
	"logo_image_light",
	BRICK_ROOT . "/img/logo_white.png",
	esc_html__( "Logo Image - Light", 'brick' ),
	esc_html__( 'Choose a logo image to display for "Light" header skin', 'brick' )
);
$show_logo_container->addChild(
	"logo_image_light",
	$logo_image_light
);

$logo_image_dark = new QodeField(
	"image",
	"logo_image_dark",
	BRICK_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Dark", 'brick' ),
	esc_html__( 'Choose a logo image to display for "Dark" header skin', 'brick' )
);
$show_logo_container->addChild(
	"logo_image_dark",
	$logo_image_dark
);

$logo_image_sticky = new QodeField(
	"image",
	"logo_image_sticky",
	BRICK_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Sticky Header", 'brick' ),
	esc_html__( 'Choose a logo image to display for "Sticky" header type', 'brick' )
);
$show_logo_container->addChild(
	"logo_image_sticky",
	$logo_image_sticky
);

$logo_image_fixed_hidden = new QodeField(
	"image",
	"logo_image_fixed_hidden",
	"",
	esc_html__( "Logo Image - Fixed Advanced Header", 'brick' ),
	esc_html__( 'Choose a logo image to display for "Fixed Advanced" header type', 'brick' )
);
$show_logo_container->addChild(
	"logo_image_fixed_hidden",
	$logo_image_fixed_hidden
);

$logo_image_mobile = new QodeField(
	"image",
	"logo_image_mobile",
	"",
	esc_html__( "Logo Image - Mobile Header", 'brick' ),
	esc_html__( 'Choose a logo image to display for "Mobile" header type', 'brick' )
);
$show_logo_container->addChild(
	"logo_image_mobile",
	$logo_image_mobile
);

$vertical_logo_bottom = new QodeField(
	"image",
	"vertical_logo_bottom",
	"",
	esc_html__( "Side Menu Area Bottom Logo Image", 'brick' ),
	esc_html__( 'Choose a logo image to display on the bottom of side menu area for "Initially Hidden" side menu area type', 'brick' )
);
$show_logo_container->addChild(
	"vertical_logo_bottom",
	$vertical_logo_bottom
);

$content_menu_logo_image = new QodeField(
	"image",
	"content_menu_logo_image",
	"",
	esc_html__( "Content Menu Logo Image", 'brick' ),
	esc_html__( 'Choose a logo image to display on the Content Menu', 'brick' )
);
$show_logo_container->addChild(
	"content_menu_logo_image",
	$content_menu_logo_image
);