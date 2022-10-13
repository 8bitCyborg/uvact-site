<?php
/*
Template Name: Blog Masonry Full Width
*/

get_header();

$brick_sidebar = brick_qode_get_sidebar_layout();

brick_qode_set_blog_word_count( 'blog_masonry_number_of_chars' );
?>
	<div class="full_width" <?php brick_qode_inline_page_background_style(); ?>>
		<div class="full_width_inner clearfix <?php echo esc_attr( brick_qode_options()->getOptionValue( 'blog_masonry_filter' ) == "yes" ? 'full_page_container_inner' : '' ); ?>" <?php brick_qode_inline_page_padding_style(); ?>>
			<?php
			echo brick_qode_get_blog_content_part();
			get_template_part( 'templates/blog/blog', 'structure' );
			?>
		</div>
	</div>
<?php get_footer(); ?>