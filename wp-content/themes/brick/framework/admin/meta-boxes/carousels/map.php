<?php

//Carousels

$qodeCarousels = new BrickQodeMetaBox(
	"carousels",
	esc_html__( "Carousels", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"carousels",
	$qodeCarousels
);

$qode_carousel_image = new QodeMetaField(
	"image",
	"qode_carousel-image",
	"",
	esc_html__( "Carousel Image", 'brick' ),
	esc_html__( "Choose carousel image (min width needs to be 215px)", 'brick' )
);
$qodeCarousels->addChild(
	"qode_carousel-image",
	$qode_carousel_image
);

$qode_carousel_hover_image = new QodeMetaField(
	"image",
	"qode_carousel-hover-image",
	"",
	esc_html__( "Carousel Hover Image", 'brick' ),
	esc_html__( "Choose carousel hover image (min width needs to be 215px)", 'brick' )
);
$qodeCarousels->addChild(
	"qode_carousel-hover-image",
	$qode_carousel_hover_image
);

$qode_carousel_item_link = new QodeMetaField(
	"text",
	"qode_carousel-item-link",
	"",
	esc_html__( "Link", 'brick' ),
	esc_html__( "Enter the URL to which you want the image to link to (e.g. http://www.example.com)", 'brick' )
);
$qodeCarousels->addChild(
	"qode_carousel-item-link",
	$qode_carousel_item_link
);

$qode_carousel_item_target = new QodeMetaField(
	"selectblank",
	"qode_carousel-item-target",
	"",
	esc_html__( "Target", 'brick' ),
	esc_html__( "Specify where to open the linked document", 'brick' ),
	array(
		"_self" => esc_html__( "Self", 'brick' ),
		"_blank" => esc_html__( "Blank", 'brick' )
	)
);
$qodeCarousels->addChild(
	"qode_carousel-item-target",
	$qode_carousel_item_target
);