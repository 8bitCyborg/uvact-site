<?php
/*
Template Name: Landing Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php do_action( 'brick_qode_action_header_meta' ); ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="wrapper_inner">
		<?php
		$brick_sidebar   = brick_qode_get_sidebar_layout( false );
		$enable_page_comments = get_post_meta( brick_qode_get_page_id(), "qode_enable-page-comments", true ) == 'yes';
		?>
		<div class="content content_top_margin_none">
			<div class="content_inner">
				<div class="full_width" <?php brick_qode_inline_page_background_style(); ?>>
					<div class="full_width_inner" <?php brick_qode_inline_page_padding_style(); ?>>
						<?php if ( ( $brick_sidebar == "default" ) || ( $brick_sidebar == "" ) ) : ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								
								brick_qode_wp_link_pages();
								
								if ( $enable_page_comments ) { ?>
									<div class="container">
										<div class="container_inner">
											<?php comments_template( '', true ); ?>
										</div>
									</div>
									<?php
								}
							endwhile; endif;
						elseif ( $brick_sidebar == "1" || $brick_sidebar == "2" ): ?>
						<?php if ( $brick_sidebar == "1" ) : ?>
						<div class="two_columns_66_33 clearfix grid2">
							<div class="column1 content_left_from_sidebar">
								<?php elseif ( $brick_sidebar == "2" ) : ?>
								<div class="two_columns_75_25 clearfix grid2">
									<div class="column1 content_left_from_sidebar">
										<?php endif; ?>
										<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
											<div class="column_inner">
												<?php
												the_content();
												
												brick_qode_wp_link_pages();
												
												if ( $enable_page_comments ) { ?>
													<div class="container">
														<div class="container_inner">
															<?php comments_template( '', true ); ?>
														</div>
													</div>
													<?php
												}
												?>
											</div>
										<?php endwhile; endif; ?>
									</div>
									<div class="column2"><?php get_sidebar(); ?></div>
								</div>
								<?php elseif ( $brick_sidebar == "3" || $brick_sidebar == "4" ): ?>
								<?php if ( $brick_sidebar == "3" ) : ?>
								<div class="two_columns_33_66 clearfix grid2">
									<div class="column1"><?php get_sidebar(); ?></div>
									<div class="column2 content_right_from_sidebar">
										<?php elseif ( $brick_sidebar == "4" ) : ?>
										<div class="two_columns_25_75 clearfix grid2">
											<div class="column1"><?php get_sidebar(); ?></div>
											<div class="column2 content_right_from_sidebar">
												<?php endif; ?>
												<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
													<div class="column_inner">
														<?php
														the_content();
														
														brick_qode_wp_link_pages();
														
														if ( $enable_page_comments ) { ?>
															<div class="container">
																<div class="container_inner">
																	<?php comments_template( '', true ); ?>
																</div>
															</div>
															<?php
														}
														?>
													</div>
												<?php endwhile; endif; ?>
											</div>
										</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php wp_footer(); ?>
</body>
</html>