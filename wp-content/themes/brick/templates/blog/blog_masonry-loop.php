<?php
$blog_show_categories = "no";
if (brick_qode_options()->getOptionValue( 'blog_masonry_show_categories' )){
	$blog_show_categories = brick_qode_options()->getOptionValue( 'blog_masonry_show_categories' );
}
$blog_show_comments = "no";
if (brick_qode_options()->getOptionValue( 'blog_masonry_show_comments' )){
	$blog_show_comments = brick_qode_options()->getOptionValue( 'blog_masonry_show_comments' );
}

$blog_show_author = "no";
if (brick_qode_options()->getOptionValue( 'blog_masonry_show_author' )){
	$blog_show_author = brick_qode_options()->getOptionValue( 'blog_masonry_show_author' );
}
$blog_show_like = "no";
if (brick_qode_options()->getOptionValue( 'blog_masonry_show_like' )) {
	$blog_show_like = brick_qode_options()->getOptionValue( 'blog_masonry_show_like' );
}
$blog_show_ql_icon_mark = "yes";
$blog_title_holder_icon_class = "";
if (brick_qode_options()->getOptionValue( 'blog_masonry_show_ql_mark' )) {
	$blog_show_ql_icon_mark = brick_qode_options()->getOptionValue( 'blog_masonry_show_ql_mark' );
}

$blog_show_read_more_button = "yes";
if(brick_qode_options()->getOptionValue( 'blog_masonry_read_more_button' )){
	$blog_show_read_more_button =  brick_qode_options()->getOptionValue( 'blog_masonry_read_more_button' );
}

if ($blog_show_ql_icon_mark == "yes") {
	$blog_title_holder_icon_class = " with_icon_right";
}

$blog_show_date = "no";
if (brick_qode_options()->getOptionValue( 'blog_masonry_show_date' )) {
	$blog_show_date = brick_qode_options()->getOptionValue( 'blog_masonry_show_date' );
}

$blog_social_share_type = "dropdown";
if(brick_qode_options()->getOptionValue( 'blog_masonry_select_share_options_masonry_type' )){
	$blog_social_share_type = brick_qode_options()->getOptionValue( 'blog_masonry_select_share_options_masonry_type' );
}
$blog_show_social_share = "no";
if (brick_qode_options()->getOptionValue( 'enable_social_share' ) =="yes"){
	if (brick_qode_options()->getOptionValue( 'post_types_names_post' ) =="post"){
		if (brick_qode_options()->getOptionValue( 'blog_masonry_show_share' )&& $blog_social_share_type == "dropdown") {
			$blog_show_social_share = brick_qode_options()->getOptionValue( 'blog_masonry_show_share' );
		}
	}
}

$_post_format = get_post_format();

$blog_masonry_type = "post_info_below_title";
if(brick_qode_options()->getOptionValue( 'blog_masonry_type' )){
	$blog_masonry_type = brick_qode_options()->getOptionValue( 'blog_masonry_type' );
}

$blog_ql_background_image = "no";
if(brick_qode_options()->getOptionValue( 'blog_masonry_ql_background_image' )){
	$blog_ql_background_image = brick_qode_options()->getOptionValue( 'blog_masonry_ql_background_image' );
}

?>
<?php
switch ($_post_format) {
	case "video":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_image">
				<?php get_template_part('templates/blog/parts/post-format-video'); ?>
			</div>
			<div class="post_text">
				<div class="post_text_inner">
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php if($blog_masonry_type == "post_info_below_title"){
						if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
					<?php
					brick_qode_excerpt();
					if($blog_show_read_more_button == "yes"){ ?>
						<a href="<?php echo get_the_permalink() ?>" target="_self" class="read_more_button">
							<?php  esc_html_e("Read More", "brick") ?>
							<span class="arrow_right"></span>
						</a>
					<?php }
					?>
					<?php if($blog_masonry_type == "post_info_at_bottom"){
						if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info post_info_bottom">
								<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
					<?php if(brick_qode_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
						echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>
				</div>
			</div>
		</article>
		
		<?php
		break;
	case "audio":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post_image">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>
				<?php } ?>
				<div class="audio_image">
					<audio class="blog_audio" src="<?php echo esc_url(get_post_meta(get_the_ID(), "audio_link", true)) ?>" controls="controls">
						<?php esc_html_e("Your browser don't support audio player","brick"); ?>
					</audio>
				</div>
				<div class="post_text">
					<div class="post_text_inner">
						<h4>
							<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h4>
						<?php if($blog_masonry_type == "post_info_below_title"){
							if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
								<div class="post_info">
									<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
								</div>
							<?php }} ?>
						<?php
						brick_qode_excerpt();
						if($blog_show_read_more_button == "yes"){ ?>
							<a href="<?php echo get_the_permalink() ?>" target="_self" class="read_more_button">
								<?php  esc_html_e("Read More", "brick") ?>
								<span class="arrow_right"></span>
							</a>
						<?php }
						?>
						<?php if($blog_masonry_type == "post_info_at_bottom"){
							if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
								<div class="post_info post_info_bottom">
									<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author,'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
								</div>
							<?php }} ?>
						<?php if(brick_qode_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
		</article>
		<?php
		break;
	case "link":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<?php if ($blog_show_ql_icon_mark == "yes") { ?>
					<div class="quote_link_icon_holder">
						<div class="quote_link_icon_holder_inner">
							<div class="post_info_link_mark">
								<span class="icon_link_alt link_mark"></span>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="post_text  <?php if($blog_ql_background_image == "yes") { if ( has_post_thumbnail() ) { ?> link_image" style="background:url(<?php  echo wp_get_attachment_url(get_post_thumbnail_id()); ?>); <?php }} ?>">
					<div class="post_text_inner">
						<div class="post_title<?php echo esc_attr($blog_title_holder_icon_class); ?>">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php
								brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like));
								?>
							</div>
						<?php } ?>
						<?php if(brick_qode_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</div>
		</article>
		<?php
		break;
	case "gallery":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_image">
				<?php get_template_part('templates/blog/parts/post-format-gallery-slider'); ?>
			</div>
			<div class="post_text">
				<div class="post_text_inner">
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php if($blog_masonry_type == "post_info_below_title"){
						if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
					<?php
					brick_qode_excerpt();
					if($blog_show_read_more_button == "yes"){ ?>
						<a href="<?php echo get_the_permalink() ?>" target="_self" class="read_more_button">
							<?php  esc_html_e("Read More", "brick") ?>
							<span class="arrow_right"></span>
						</a>
					<?php }
					?>
					<?php if($blog_masonry_type == "post_info_at_bottom"){ ?>
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info post_info_bottom">
								<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
					<?php if(brick_qode_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
						echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>
				</div>
			</div>
		</article>
		<?php
		break;
	case "quote":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<?php if ($blog_show_ql_icon_mark == "yes") { ?>
					<div class="quote_link_icon_holder">
						<div class="quote_link_icon_holder_inner">
							<div class="post_info_quote_mark">
								<span class="icon_quotations quote_mark"></span>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="post_text  <?php if($blog_ql_background_image == "yes") { if ( has_post_thumbnail() ) { ?> quote_image" style="background:url(<?php  echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);<?php }} ?>">
					<div class="post_text_inner">
						<div class="post_title <?php echo esc_attr($blog_title_holder_icon_class); ?>">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php echo esc_html(get_post_meta(get_the_ID(), "quote_format", true)); ?>
								</a>
							</h3>
							<span class="quote_author">&mdash; <?php the_title(); ?></span>
						</div>
						<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php
								brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like));
								?>
							</div>
						<?php } ?>
						<?php if(brick_qode_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</div>
		</article>
		<?php
		break;
	default:
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="post_image">
					<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail('full'); ?>
					</a>
				</div>
			<?php } ?>
			<div class="post_text">
				<div class="post_text_inner">
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php if($blog_masonry_type == "post_info_below_title"){
						if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
					<?php
					brick_qode_excerpt();
					if($blog_show_read_more_button == "yes"){ ?>
						<a href="<?php echo get_the_permalink() ?>" target="_self" class="read_more_button">
							<?php  esc_html_e("Read More", "brick") ?>
							<span class="arrow_right"></span>
						</a>
					<?php }
					?>
					<?php if($blog_masonry_type == "post_info_at_bottom"){
						if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>
							<div class="post_info post_info_bottom">
								<?php brick_qode_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
						<?php }} ?>
					<?php if(brick_qode_options()->getOptionValue( 'blog_masonry_show_share' ) == "yes" && $blog_social_share_type == "list") {
						echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>
				</div>
			</div>
		</article>
	<?php
}
?>

