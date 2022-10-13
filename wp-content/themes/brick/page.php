<?php
get_header();

$brick_sidebar   = brick_qode_get_sidebar_layout( false );
$enable_page_comments = get_post_meta( brick_qode_get_page_id(), "qode_enable-page-comments", true ) == 'yes';
?>
<div class="container" <?php brick_qode_inline_page_background_style(); ?>>
<?php if ( brick_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
	<div class="overlapping_content"><div class="overlapping_content_inner">
<?php } ?>
<div class="container_inner default_template_holder clearfix" <?php brick_qode_inline_page_padding_style(); ?>>
<?php if ( ( $brick_sidebar == "default" ) || ( $brick_sidebar == "" ) ) : ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		
		brick_qode_wp_link_pages();
		
		if ( $enable_page_comments ) {
			comments_template( '', true );
		}
		?>
	<?php endwhile; endif; ?>
<?php elseif ( $brick_sidebar == "1" || $brick_sidebar == "2" ): ?>
	<?php if ( $brick_sidebar == "1" ) : ?>
	<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
	<div class="column1 content_left_from_sidebar">
	<?php elseif ( $brick_sidebar == "2" ) : ?>
	<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
		<div class="column1 content_left_from_sidebar">
			<?php endif; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="column_inner">
					<?php the_content();
					
					brick_qode_wp_link_pages();
					
					if ( $enable_page_comments ) {
						comments_template( '', true );
					} ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="column2"><?php get_sidebar(); ?></div>
	</div>
	<?php elseif ( $brick_sidebar == "3" || $brick_sidebar == "4" ): ?>
	<?php if ( $brick_sidebar == "3" ) : ?>
	<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
	<div class="column1"><?php get_sidebar(); ?></div>
	<div class="column2 content_right_from_sidebar">
	<?php elseif ( $brick_sidebar == "4" ) : ?>
	<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
		<div class="column1"><?php get_sidebar(); ?></div>
		<div class="column2 content_right_from_sidebar">
			<?php endif; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="column_inner">
					<?php
					the_content();
					
					brick_qode_wp_link_pages();
					
					if ( $enable_page_comments ) {
						comments_template( '', true );
					} ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
<?php endif; ?>
	</div>
<?php if ( brick_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
	</div></div>
<?php } ?>
	</div>
<?php get_footer(); ?>