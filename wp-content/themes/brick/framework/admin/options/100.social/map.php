<?php

$socialPage = new BrickQodeAdminPage(
	"12",
	esc_html__( "Social", 'brick' ),
	"fa fa-share-alt"
);
$brick_qode_framework->qodeOptions->addAdminPage(
	"socialPage",
	$socialPage
);

//Enable Social Share

$panel2 = new QodePanel(
	esc_html__( "Enable Social Share", 'brick' ),
	"social_sharing_panel"
);
$socialPage->addChild(
	"panel2",
	$panel2
);

$enable_social_share = new QodeField(
	"yesno",
	"enable_social_share",
	"no",
	esc_html__( "Enable Social Share", 'brick' ),
	esc_html__( "Enabling this option will allow social share on networks of your choice", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_social_networks_panel,#qodef_show_social_share_panel"
	)
);
$panel2->addChild(
	"enable_social_share",
	$enable_social_share
);

//Show Social Share

$panel3 = new QodePanel(
	esc_html__( "Show Social Share On", 'brick' ),
	"show_social_share_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel3",
	$panel3
);

$post_types_names_post = new QodeField(
	"flagpost",
	"post_types_names_post",
	"",
	esc_html__( "Posts", 'brick' ),
	esc_html__( "Show Social Share on Blog Posts", 'brick' )
);
$panel3->addChild(
	"post_types_names_post",
	$post_types_names_post
);

$post_types_names_page = new QodeField(
	"flagpage",
	"post_types_names_page",
	"",
	esc_html__( "Pages", 'brick' ),
	esc_html__( "Show Social Share on Pages", 'brick' )
);
$panel3->addChild(
	"post_types_names_page",
	$post_types_names_page
);

$post_types_names_attachment = new QodeField(
	"flagmedia",
	"post_types_names_attachment",
	"",
	esc_html__( "Media", 'brick' ),
	esc_html__( "Show Social Share for Images and Videos", 'brick' )
);
$panel3->addChild(
	"post_types_names_attachment",
	$post_types_names_attachment
);

$post_types_names_portfolio_page = new QodeField(
	"flagportfolio",
	"post_types_names_portfolio_page",
	"",
	esc_html__( "Portfolio Item", 'brick' ),
	esc_html__( "Show Social Share for Portfolio Items", 'brick' )
);
$panel3->addChild(
	"post_types_names_portfolio_page",
	$post_types_names_portfolio_page
);

if ( brick_qode_is_woocommerce_installed() ) {
	$post_types_names_product = new QodeField(
		"flagproduct",
		"post_types_names_product",
		"",
		esc_html__( "Product", 'brick' ),
		esc_html__( "Show Social Share for Product Items", 'brick' )
	);
	$panel3->addChild(
		"post_types_names_product",
		$post_types_names_product
	);
}

//Social Share Networks

$panel4 = new QodePanel(
	esc_html__( "Social Networks", 'brick' ),
	"social_networks_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel4",
	$panel4
);

//Facebook

$facebook_subtitle = new QodeTitle(
	"facebook_subtitle",
	esc_html__( "Share on Facebook", 'brick' )
);
$panel4->addChild(
	"facebook_subtitle",
	$facebook_subtitle
);

$enable_facebook_share = new QodeField(
	"yesno",
	"enable_facebook_share",
	"no",
	esc_html__( "Enable Share", 'brick' ),
	esc_html__( "Enabling this option will allow sharing via Facebook", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_facebook_share_container"
	)
);
$panel4->addChild(
	"enable_facebook_share",
	$enable_facebook_share
);

$enable_facebook_share_container = new QodeContainer(
	"enable_facebook_share_container",
	"enable_facebook_share",
	"no"
);
$panel4->addChild(
	"enable_facebook_share_container",
	$enable_facebook_share_container
);

$facebook_icon = new QodeField(
	"image",
	"facebook_icon",
	"",
	esc_html__( "Upload Icon", 'brick' ),
	""
);
$enable_facebook_share_container->addChild(
	"facebook_icon",
	$facebook_icon
);

//Twitter
$twitter_subtitle = new QodeTitle(
	"twitter_subtitle",
	esc_html__( "Share on Twitter", 'brick' )
);
$panel4->addChild(
	"twitter_subtitle",
	$twitter_subtitle
);

$enable_twitter_share = new QodeField(
	"yesno",
	"enable_twitter_share",
	"no",
	esc_html__( "Enable Share", 'brick' ),
	esc_html__( "Enabling this option will allow sharing via Twitter", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_twitter_share_container"
	)
);
$panel4->addChild(
	"enable_twitter_share",
	$enable_twitter_share
);
$enable_twitter_share_container = new QodeContainer(
	"enable_twitter_share_container",
	"enable_twitter_share",
	"no"
);
$panel4->addChild(
	"enable_twitter_share_container",
	$enable_twitter_share_container
);
$twitter_icon = new QodeField(
	"image",
	"twitter_icon",
	"",
	esc_html__( "Upload Icon", 'brick' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_icon",
	$twitter_icon
);
$twitter_via = new QodeField(
	"text",
	"twitter_via",
	"",
	esc_html__( "Via", 'brick' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_via",
	$twitter_via
);

//Google Plus

$google_plus_subtitle = new QodeTitle(
	"google_plus_subtitle",
	esc_html__( "Share on Google Plus", 'brick' )
);
$panel4->addChild(
	"google_plus_subtitle",
	$google_plus_subtitle
);

$enable_google_plus = new QodeField(
	"yesno",
	"enable_google_plus",
	"no",
	esc_html__( "Enable Share", 'brick' ),
	esc_html__( "Enabling this option will allow sharing via Google Plus", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_google_plus_container"
	)
);
$panel4->addChild(
	"enable_google_plus",
	$enable_google_plus
);
$enable_google_plus_container = new QodeContainer(
	"enable_google_plus_container",
	"enable_google_plus",
	"no"
);
$panel4->addChild(
	"enable_google_plus_container",
	$enable_google_plus_container
);
$google_plus_icon = new QodeField(
	"image",
	"google_plus_icon",
	"",
	esc_html__( "Upload Icon", 'brick' ),
	""
);
$enable_google_plus_container->addChild(
	"google_plus_icon",
	$google_plus_icon
);

//LinkedIn

$linkedin_subtitle = new QodeTitle(
	"linkedin_subtitle",
	esc_html__( "Share on LinkedIn", 'brick' )
);
$panel4->addChild(
	"linkedin_subtitle",
	$linkedin_subtitle
);

$enable_linkedin = new QodeField(
	"yesno",
	"enable_linkedin",
	"no",
	esc_html__( "Enable Share", 'brick' ),
	esc_html__( "Enabling this option will allow sharing via LinkedIn", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_linkedin_container"
	)
);
$panel4->addChild(
	"enable_linkedin",
	$enable_linkedin
);
$enable_linkedin_container = new QodeContainer(
	"enable_linkedin_container",
	"enable_linkedin",
	"no"
);
$panel4->addChild(
	"enable_linkedin_container",
	$enable_linkedin_container
);
$linkedin_icon = new QodeField(
	"image",
	"linkedin_icon",
	"",
	esc_html__( "Upload Icon", 'brick' ),
	""
);
$enable_linkedin_container->addChild(
	"linkedin_icon",
	$linkedin_icon
);

//Tumblr

$tumblr_subtitle = new QodeTitle(
	"tumblr_subtitle",
	esc_html__( "Share on Tumblr", 'brick' )
);
$panel4->addChild(
	"tumblr_subtitle",
	$tumblr_subtitle
);

$enable_tumblr = new QodeField(
	"yesno",
	"enable_tumblr",
	"no",
	esc_html__( "Enable Share", 'brick' ),
	esc_html__( "Enabling this option will allow sharing via Tumblr", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_tumblr_container"
	)
);
$panel4->addChild(
	"enable_tumblr",
	$enable_tumblr
);

$enable_tumblr_container = new QodeContainer(
	"enable_tumblr_container",
	"enable_tumblr",
	"no"
);
$panel4->addChild(
	"enable_tumblr_container",
	$enable_tumblr_container
);

$tumblr_icon = new QodeField(
	"image",
	"tumblr_icon",
	"",
	esc_html__( "Upload Icon", 'brick' ),
	""
);
$enable_tumblr_container->addChild(
	"tumblr_icon",
	$tumblr_icon
);

// Pinterest

$pinterest_subtitle = new QodeTitle(
	"pinterest_subtitle",
	esc_html__( "Share on Pinterest", 'brick' )
);
$panel4->addChild(
	"pinterest_subtitle",
	$pinterest_subtitle
);

$enable_pinterest = new QodeField(
	"yesno",
	"enable_pinterest",
	"no",
	esc_html__( "Enable Share", 'brick' ),
	esc_html__( "Enabling this option will allow sharing via Pinterest", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_pinterest_container"
	)
);
$panel4->addChild(
	"enable_pinterest",
	$enable_pinterest
);
$enable_pinterest_container = new QodeContainer(
	"enable_pinterest_container",
	"enable_pinterest",
	"no"
);
$panel4->addChild(
	"enable_pinterest_container",
	$enable_pinterest_container
);
$pinterest_icon = new QodeField(
	"image",
	"pinterest_icon",
	"",
	esc_html__( "Upload Icon", 'brick' ),
	""
);
$enable_pinterest_container->addChild(
	"pinterest_icon",
	$pinterest_icon
);

//VK

$vk_subtitle = new QodeTitle(
	"vk_subtitle",
	esc_html__( "Share on VK", 'brick' )
);
$panel4->addChild(
	"vk_subtitle",
	$vk_subtitle
);

$enable_vk = new QodeField(
	"yesno",
	"enable_vk",
	"no",
	esc_html__( "Enable Share", 'brick' ),
	esc_html__( "Enabling this option will allow sharing via VK", 'brick' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_vk_container"
	)
);
$panel4->addChild(
	"enable_vk",
	$enable_vk
);
$enable_vk_container = new QodeContainer(
	"enable_vk_container",
	"enable_vk",
	"no"
);
$panel4->addChild(
	"enable_vk_container",
	$enable_vk_container
);
$vk_icon = new QodeField(
	"image",
	"vk_icon",
	"",
	esc_html__( "Upload Icon", 'brick' ),
	""
);
$enable_vk_container->addChild(
	"vk_icon",
	$vk_icon
);