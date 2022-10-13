<?php
$root = dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) );
if ( file_exists( $root . '/wp-load.php' ) ) {
	require_once( $root . '/wp-load.php' );
} else {
	$root = dirname( dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) ) );
	if ( file_exists( $root . '/wp-load.php' ) ) {
		require_once( $root . '/wp-load.php' );
	}
}
header( "Content-type: text/css; charset=utf-8" );
?>

@media only screen and (max-width: 1000px){
	<?php if ( ! empty( brick_qode_options()->getOptionValue( 'header_background_color' ) ) ) { ?>
		.header_bottom {
			background-color: <?php echo esc_attr( brick_qode_options()->getOptionValue( 'header_background_color' ) ); ?>;
		}
	<?php } ?>
	<?php if ( ! empty( brick_qode_options()->getOptionValue( 'mobile_background_color' ) ) ) { ?>
		.header_bottom,
		nav.mobile_menu{
			background-color: <?php echo esc_attr( brick_qode_options()->getOptionValue( 'mobile_background_color' ) ); ?> !important;
		}
	<?php } ?>
	
	<?php if (  ( brick_qode_options()->getOptionValue( 'page_subtitle_fontsize' ) ) < 28 && ( brick_qode_options()->getOptionValue( 'page_subtitle_fontsize' ) ) !== '' ) { ?>
		.subtitle{
			font-size: <?php echo intval( brick_qode_options()->getOptionValue( 'page_subtitle_fontsize' ) ) * 0.8; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) > 70 ) { ?>
		.content h4{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) * 0.8; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) > 70 ) { ?>
		.content h5{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) * 0.8; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) > 70 ) { ?>
		.content h6{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) * 0.8; ?>px;
		}
	<?php } ?>
	
	<?php if (  brick_qode_options()->getOptionValue( 'portfolio_list_filter_height' ) !== '' ) { ?>
		.filter_outer.filter_portfolio{
			line-height: 2em;
		}
	<?php } ?>
}

@media only screen and (min-width: 600px) and (max-width: 768px){
	<?php if (  ( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) > 35 ) { ?>
		.content h4{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) * 0.7; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) > 35 ) { ?>
		.content h5{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) * 0.7; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) > 35 ) { ?>
		.content h6{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) * 0.7; ?>px;
		}
	<?php } ?>
}

@media only screen and (min-width: 480px) and (max-width: 768px){
	<?php if (  ! empty( brick_qode_options()->getOptionValue( 'parallax_minheight' ) ) ) { ?>
		section.parallax_section_holder{
			height: auto !important;
			min-height: <?php echo intval( brick_qode_options()->getOptionValue( 'parallax_minheight' ) ); ?>px !important;
		}
	<?php } ?>
	
	<?php if (  ! empty( brick_qode_options()->getOptionValue( 'header_background_color_mobile' ) ) ) { ?>
		header {
			background-color: <?php echo esc_attr( brick_qode_options()->getOptionValue( 'header_background_color_mobile' ) ); ?> !important;
			background-image:none;
		}
	<?php } ?>
}

@media only screen and (max-width: 600px){
	<?php if (  ( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) > 35 ) { ?>
		.content h4{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) * 0.5; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) > 35 ) { ?>
		.content h5{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) * 0.5; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) > 35 ) { ?>
		.content h6{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) * 0.5; ?>px;
		}
	<?php } ?>
	<?php if (  ! empty( brick_qode_options()->getOptionValue( 'title_span_background_color' ) ) ) { ?>
		.title h1 span{
			padding: 0 5px;
		}
	<?php } ?>
	
	<?php if (  brick_qode_options()->getOptionValue( 'portfolio_list_filter_height' ) !== '' ) { ?>
		.filter_outer.filter_portfolio{
			height:auto;
		}
	<?php } ?>
}

@media only screen and (max-width: 480px){
	<?php if (  ( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) > 35 ) { ?>
		.content h4{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h4_fontsize' ) ) * 0.4; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) > 35 ) { ?>
		.content h5{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h5_fontsize' ) ) * 0.4; ?>px;
		}
	<?php } ?>
	<?php if (  ( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) > 35 ) { ?>
		.content h6{
			font-size:<?php echo intval( brick_qode_options()->getOptionValue( 'h6_fontsize' ) ) * 0.4; ?>px;
		}
	<?php } ?>
	
	<?php if (  ! empty( brick_qode_options()->getOptionValue( 'parallax_minheight' ) ) ) { ?>
		section.parallax_section_holder{
			height: auto !important;
			min-height: <?php echo intval( brick_qode_options()->getOptionValue( 'parallax_minheight' ) ); ?>px !important;
		}
	<?php } ?>
	
	<?php if (  ! empty( brick_qode_options()->getOptionValue( 'header_background_color_mobile' ) ) ) { ?>
		header {
			background-color: <?php echo esc_attr( brick_qode_options()->getOptionValue( 'header_background_color_mobile' ) ); ?> !important;
			background-image:none;
		}
	<?php } ?>
}