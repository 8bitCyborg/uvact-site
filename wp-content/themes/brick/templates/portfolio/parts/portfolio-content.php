<?php

$portfolio_title_tag            = 'h3';
$portfolio_title_style          = '';

//set title tag
if (brick_qode_options()->getOptionValue( 'portfolio_title_tag' )) {
$portfolio_title_tag = brick_qode_options()->getOptionValue( 'portfolio_title_tag' );
}

//set style for title
if (( brick_qode_options()->getOptionValue( 'portfolio_title_margin_bottom' ) != '')
	|| ( !empty(brick_qode_options()->getOptionValue( 'portfolio_title_color' )))){

	if ( brick_qode_options()->getOptionValue( 'portfolio_title_margin_bottom' ) != '') {
		$portfolio_title_style .= 'margin-bottom:'.esc_attr(brick_qode_options()->getOptionValue( 'portfolio_title_margin_bottom' )).'px;';
	}

	if ( !empty(brick_qode_options()->getOptionValue( 'portfolio_title_color' ))) {
		$portfolio_title_style .= 'color:'.esc_attr(brick_qode_options()->getOptionValue( 'portfolio_title_color' )).';';
	}

}

?>

<<?php echo esc_attr($portfolio_title_tag);?> class="info_section_title" <?php brick_qode_inline_style($portfolio_title_style); ?>><?php the_title(); ?></<?php echo esc_attr($portfolio_title_tag);?>>
<div class="info portfolio_single_content">
	<?php the_content(); ?>
</div> <!-- close div.portfolio_content -->