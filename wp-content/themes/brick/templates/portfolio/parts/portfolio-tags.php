<?php

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

$portfolio_tags = wp_get_post_terms(get_the_ID(),'portfolio_tag');

if(is_array($portfolio_tags) && count($portfolio_tags)) {

	$portfolio_tags_array = array();
	foreach ($portfolio_tags as $portfolio_tag) {
		$portfolio_tags_array[] = $portfolio_tag->name;
	}

	?>
	<div class="info portfolio_single_tags">
		<<?php echo esc_attr($portfolio_info_tag);?> class="info_section_title" <?php brick_qode_inline_style($portfolio_info_style); ?>><?php esc_html_e('Tags', 'brick') ?></<?php echo esc_attr($portfolio_info_tag);?>>
		<span class="category">
			<?php echo esc_html(implode(', ', $portfolio_tags_array)); ?>
		</span> <!-- close span.category -->
	</div> <!-- close div.info.portfolio_tags -->

<?php } ?>