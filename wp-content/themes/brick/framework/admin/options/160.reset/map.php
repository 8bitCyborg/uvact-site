<?php

$resetPage = new BrickQodeAdminPage(
	"21",
	esc_html__( "Reset", 'brick' ),
	"fa fa-retweet"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Reset", 'brick' ),
	$resetPage
);

//Reset

$panel1 = new QodePanel(
	esc_html__( "Reset to Defaults", 'brick' ),
	"reset_panel"
);
$resetPage->addChild(
	"panel1",
	$panel1
);

$reset_to_defaults = new QodeField(
	"yesno",
	"reset_to_defaults",
	"no",
	esc_html__( "Reset to Defaults", 'brick' ),
	esc_html__( "This option will reset all Select Options values to defaults", 'brick' )
);
$panel1->addChild(
	"reset_to_defaults",
	$reset_to_defaults
);