<?php
//get current portfolio template
$portfolio_template = 'small-images';
if ( get_post_meta( brick_qode_get_page_id(), "qode_choose-portfolio-single-view", true ) != "" ) {
	$portfolio_template = get_post_meta( brick_qode_get_page_id(), "qode_choose-portfolio-single-view", true );
} elseif ( brick_qode_options()->getOptionValue( 'portfolio_style' ) !== '' ) {
	$portfolio_template = brick_qode_options()->getOptionValue( 'portfolio_style' );
}
?>
<div class="container" <?php brick_qode_inline_page_background_style(); ?>>
	<?php if ( brick_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
	<div class="overlapping_content">
		<div class="overlapping_content_inner">
			<?php } ?>
			<div class="container_inner default_template_holder clearfix" <?php brick_qode_inline_page_padding_style(); ?>>
				<div class="portfolio_single <?php echo esc_attr( $portfolio_template ); ?>">
					<?php
					if ( post_password_required() ) {
						echo get_the_password_form();
					} else {
						//load proper portfolio file based on portfolio template
						get_template_part( 'templates/portfolio/portfolio', $portfolio_template );
						
						get_template_part( 'templates/portfolio/parts/portfolio-navigation' );
						
						get_template_part( 'templates/portfolio/parts/portfolio-comments' );
					}
					?>
				</div> <!-- close div.portfolio single -->
			</div> <!-- close div.container inner -->
			<?php if ( brick_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
		</div>
	</div>
<?php } ?>
</div> <!-- close div.container -->