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


$portfolio_hide_categories = "no";
if(brick_qode_options()->getOptionValue( 'portfolio_hide_categories' )) {
	$portfolio_hide_categories = brick_qode_options()->getOptionValue( 'portfolio_hide_categories' );
}

$portfolio_categories = wp_get_post_terms(get_the_ID(),'portfolio_category');

if(is_array($portfolio_categories) && count($portfolio_categories) && $portfolio_hide_categories != "yes"){

	$portfolio_categories_array = array();
	foreach($portfolio_categories as $portfolio_category) {
		$portfolio_categories_array[] = $portfolio_category->name;
	}

	?>
	<div class="info portfolio_single_categories">
		<<?php echo esc_attr($portfolio_info_tag); ?> class="info_section_title" <?php brick_qode_inline_style($portfolio_info_style); ?>><?php esc_html_e('Category ','brick'); ?></<?php echo esc_attr($portfolio_info_tag); ?>>
		<p>
			<span class="category">
			<?php echo esc_html(implode(', ', $portfolio_categories_array)); ?>
			</span> <!-- close span.category -->
		</p>
	</div> <!-- close div.info.portfolio-categories -->
<?php } ?>