<?php
//init variables
$portfolio_images 			    = get_post_meta(get_the_ID(), "qode_portfolio_images", true);
$lightbox_single_project 	    = 'no';
$lightbox_video_single_project  = 'no';


//is lightbox turned on for image single project?
if (brick_qode_options()->getOptionValue( 'lightbox_single_project' )) {
	$lightbox_single_project = brick_qode_options()->getOptionValue( 'lightbox_single_project' );
}

//is lightbox turned on for video single project?
if (brick_qode_options()->getOptionValue( 'lightbox_video_single_project' )) {
	$lightbox_video_single_project = brick_qode_options()->getOptionValue( 'lightbox_video_single_project' );
}

$portfolio_text_follow = "portfolio_single_follow";
if (brick_qode_options()->getOptionValue( 'portfolio_text_follow' )) {
	$portfolio_text_follow = esc_attr(brick_qode_options()->getOptionValue( 'portfolio_text_follow' ));
}

//sort portfolio images by user defined input
if (is_array($portfolio_images)){
	usort($portfolio_images, "brick_qode_compare_portfolio_images");
}
?>

<div class="two_columns_66_33 clearfix portfolio_container">
	<div class="column1">
		<div class="column_inner">
			<div class="portfolio_images">
				<?php
				
				$portfolio_m_images = get_post_meta(get_the_ID(), "qode_portfolio-image-gallery", true);
				if ($portfolio_m_images){
					$portfolio_image_gallery_array=explode(',',$portfolio_m_images);
					foreach($portfolio_image_gallery_array as $gimg_id){
						$title = get_the_title($gimg_id);
						$alt = get_post_meta($gimg_id, '_wp_attachment_image_alt', true);
						$image_src = wp_get_attachment_image_src( $gimg_id, 'full' );
						if (is_array($image_src)) $image_src = $image_src[0];
						?>
						<?php if($lightbox_single_project == "yes"){ ?>
							<a class="lightbox_single_portfolio" title="<?php echo esc_attr($title); ?>" href="<?php echo esc_url($image_src); ?>" data-rel="prettyPhoto[single_pretty_photo]">
								<img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($alt); ?>" />
							</a>
						<?php } else { ?>
							<img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($alt); ?>" />
						<?php }
					}
				}
				
				//are portfolio images set?
				if (is_array($portfolio_images) && count($portfolio_images)){
					foreach($portfolio_images as $portfolio_image){
						?>
						
						<?php if($portfolio_image['portfolioimg'] != ""){ ?>
							<?php
							
							list($id, $title, $alt) = brick_qode_get_portfolio_image_meta($portfolio_image['portfolioimg']);
							
							?>
							<?php if($lightbox_single_project == "yes"){ ?>
								<a class="lightbox_single_portfolio" title="<?php echo esc_attr($title); ?>" href="<?php echo esc_url($portfolio_image['portfolioimg']); ?>" data-rel="prettyPhoto[single_pretty_photo]">
									<img src="<?php echo esc_url($portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr($alt); ?>" />
								</a>
							<?php } else { ?>
								<img src="<?php echo esc_url($portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr($alt); ?>" />
							<?php } ?>
						
						<?php }else{ ?>
							
							<?php
							$portfolio_video_type = "";
							$protocol = is_ssl() ? "https:" : "http:";
							if (isset($portfolio_image['portfoliovideotype'])) $portfolio_video_type = $portfolio_image['portfoliovideotype'];
							switch ($portfolio_video_type){
								case "youtube": ?>
									<?php if($lightbox_video_single_project == "yes"){ ?>
										<a class="lightbox_single_portfolio" title="<?php echo esc_attr( $portfolio_image['portfoliotitle'] ); ?>" href="https://www.youtube.com/watch?feature=player_embedded&v=<?php echo esc_attr( $portfolio_image['portfoliovideoid'] ); ?>" data-rel="prettyPhoto[single_pretty_photo]">
											<i class="fa fa-play"></i>
											<img width="100%" src="https://img.youtube.com/vi/<?php echo esc_attr( $portfolio_image['portfoliovideoid'] ); ?>/maxresdefault.jpg" alt="<?php echo esc_attr( $portfolio_image['portfoliotitle'] ); ?>"/>
										</a>
									<?php } else { ?>
										<iframe width="100%" src="https://www.youtube.com/embed/<?php echo esc_attr($portfolio_image['portfoliovideoid']);  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
									<?php } ?>
									<?php	break;
								case "vimeo": ?>
									<?php if($lightbox_video_single_project == "yes"){ ?>
										<?php
										$videoid = $portfolio_image['portfoliovideoid'];
										$xml     = simplexml_load_file( "https://vimeo.com/api/v2/video/" . $videoid . ".xml" );
										$xml     = $xml->video;
										$xml_pic = $xml->thumbnail_large;
										?>
										<a class="lightbox_single_portfolio" title="<?php echo esc_attr( $portfolio_image['portfoliotitle'] ); ?>" href="https://vimeo.com/<?php echo esc_attr( $portfolio_image['portfoliovideoid'] ); ?>" data-rel="prettyPhoto[single_pretty_photo]">
											<i class="fa fa-play"></i>
											<img width="100%" src="<?php echo esc_url( $xml_pic ); ?>" alt="<?php echo esc_attr( $portfolio_image['portfoliotitle'] ); ?>"/>
										</a>
									<?php } else { ?>
										<iframe src="https://player.vimeo.com/video/<?php echo esc_attr($portfolio_image['portfoliovideoid']); ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
									<?php } ?>
									<?php break;
								case "self": ?>
									<div class="video">
										<div class="mobile-video-image" style="background-image: url(<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>);"></div>
										<div class="video-wrap"  >
											<video class="video" poster="<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>" preload="auto">
												<?php if(!empty($portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url($portfolio_image['portfoliovideowebm']); ?>"> <?php } ?>
												<?php if(!empty($portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url($portfolio_image['portfoliovideomp4']); ?>"> <?php } ?>
												<?php if(!empty($portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url($portfolio_image['portfoliovideoogv']); ?>"> <?php } ?>
												<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>">
													<param name="movie" value="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>" />
													<param name="flashvars" value="controls=true&file=<?php echo esc_url($portfolio_image['portfoliovideomp4']); ?>" />
													<img src="<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>" width="1920" height="800" title="<?php esc_attr_e( 'No video playback capabilities', 'brick' ); ?>" alt="<?php esc_attr_e( 'Video thumb', 'brick' ); ?>" />
												</object>
											</video>
										</div></div>
									<?php break;
							} //close switch 
						} //close video section
					}
				}
				?>
			</div>
		</div>
	</div>
	<div class="column2">
		<div class="column_inner">
			<div class="portfolio_detail <?php echo esc_attr($portfolio_text_follow); ?> clearfix">
				<?php
				//get portfolio content section
				get_template_part('templates/portfolio/parts/portfolio-content');
				
				//get portfolio custom fields section
				get_template_part('templates/portfolio/parts/portfolio-custom-fields');
				
				//get portfolio date section
				get_template_part('templates/portfolio/parts/portfolio-date');
				
				//get portfolio categories section
				get_template_part('templates/portfolio/parts/portfolio-categories');
				
				//get portfolio tags section
				get_template_part('templates/portfolio/parts/portfolio-tags');
				
				//get portfolio share section
				get_template_part('templates/portfolio/parts/portfolio-social');
				?>
			</div>
		</div>
	</div>
</div>