<?php

//Testimonials

$qodeTestimonials = new BrickQodeMetaBox(
	"testimonials",
	esc_html__( "Testimonials", 'brick' )
);
$brick_qode_framework->qodeMetaBoxes->addMetaBox(
	"testimonials",
	$qodeTestimonials
);

$qode_show_testimonial_title_text = new QodeMetaField(
	"yesno",
	"qode_show_testimonial_title_text",
	"no",
	esc_html__( "Hide Testimonial Title Text", 'brick' ),
	esc_html__( "Enable this option to hide the title text", 'brick' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "#qodef_qode_testimonial_title_container",
		"dependence_show_on_yes" => ""
	)
);
$qodeTestimonials->addChild(
	"qode_show_testimonial_title_text",
	$qode_show_testimonial_title_text
);

$qode_testimonial_title_container = new QodeContainer(
	"qode_testimonial_title_container",
	"qode_show_testimonial_title_text",
	"yes"
);
$qodeTestimonials->addChild(
	"qode_testimonial_title_container",
	$qode_testimonial_title_container
);

$qode_testimonial_title = new QodeMetaField(
	"text",
	"qode_testimonial_title",
	"",
	esc_html__( "Title", 'brick' ),
	esc_html__( "Enter testimonial title", 'brick' )
);
$qode_testimonial_title_container->addChild(
	"qode_testimonial_title",
	$qode_testimonial_title
);

$qode_testimonial_author = new QodeMetaField(
	"text",
	"qode_testimonial-author",
	"",
	esc_html__( "Author", 'brick' ),
	esc_html__( "Enter author name", 'brick' )
);
$qodeTestimonials->addChild(
	"qode_testimonial-author",
	$qode_testimonial_author
);

$qode_testimonial_author_position = new QodeMetaField(
	"text",
	"qode_testimonial_author_position",
	"",
	esc_html__( "Job Position", 'brick' ),
	esc_html__( "Enter job position name", 'brick' )
);
$qodeTestimonials->addChild(
	"qode_testimonial_author_position",
	$qode_testimonial_author_position
);

$qode_testimonial_text = new QodeMetaField(
	"textarea",
	"qode_testimonial-text",
	"",
	esc_html__( "Text", 'brick' ),
	esc_html__( "Enter testimonial text", 'brick' )
);
$qodeTestimonials->addChild(
	"qode_testimonial-text",
	$qode_testimonial_text
);