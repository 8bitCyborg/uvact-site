<?php

//get portfolio date value
$portfolio_hide_date = "";
if(brick_qode_options()->getOptionValue( 'portfolio_hide_date' )){
	$portfolio_hide_date = brick_qode_options()->getOptionValue( 'portfolio_hide_date' );
}

if($portfolio_hide_date != "yes"){

    $portfolio_info_tag             = 'h6';
    $portfolio_info_style           = '';

    //set info tag
    if (brick_qode_options()->getOptionValue( 'portfolio_info_tag' )) {
    	$portfolio_info_tag = brick_qode_options()->getOptionValue( 'portfolio_info_tag' );
    }

    //set style for info
    if (( brick_qode_options()->getOptionValue( 'portfolio_info_margin_bottom' ) != '')
    || ( !empty(brick_qode_options()->getOptionValue( 'portfolio_info_color' )))) {

		if ( brick_qode_options()->getOptionValue( 'portfolio_info_margin_bottom' ) != '') {
			$portfolio_info_style .= 'margin-bottom:' . esc_attr(brick_qode_options()->getOptionValue( 'portfolio_info_margin_bottom' )) . 'px;';
		}

		if ( !empty(brick_qode_options()->getOptionValue( 'portfolio_info_color' ))) {
			$portfolio_info_style .= 'color:'.esc_attr(brick_qode_options()->getOptionValue( 'portfolio_info_color' )).';';
		}

    }

   ?>


	<div class="info portfolio_single_custom_date">
		<<?php echo esc_attr($portfolio_info_tag); ?> class="info_section_title" <?php brick_qode_inline_style($portfolio_info_style); ?>><?php esc_html_e('Date','brick'); ?></<?php echo esc_attr($portfolio_info_tag); ?>>
        <p><?php the_time(get_option('date_format')); ?></p>
	</div>
<?php } ?>