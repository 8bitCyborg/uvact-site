<?php

$parallaxPage = new BrickQodeAdminPage(
	"15",
	esc_html__( "Parallax", 'brick' ),
	"fa fa-unsorted"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Parallax", 'brick' ),
	$parallaxPage
);

//Parallax Settings

$panel1 = new QodePanel(
	esc_html__( "Parallax Settings", 'brick' ),
	"parallax_settings_panel"
);
$parallaxPage->addChild(
	"panel1",
	$panel1
);

$parallax_onoff = new QodeField(
	"onoff",
	"parallax_onoff",
	"on",
	esc_html__( "Parallax on touch devices", 'brick' ),
	esc_html__( "Enabling this option will allow parallax on touch devices", 'brick' )
);
$panel1->addChild(
	"parallax_onoff",
	$parallax_onoff
);

$parallax_minheight = new QodeField(
	"text",
	"parallax_minheight",
	"400",
	esc_html__( "Parallax Min Height (px)", 'brick' ),
	esc_html__( "Set a minimum height for parallax images on small displays (phones, tablets, etc.)", 'brick' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"parallax_minheight",
	$parallax_minheight
);