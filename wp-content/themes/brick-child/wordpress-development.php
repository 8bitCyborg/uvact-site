<?php 
/*
 * Template Name: WordPress Development Template
 */

get_header(); ?>

<head> 
<meta name="theme-color" content="#000" />

<link rel="preload"  as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/css/fonts.css" type='text/css' media='all'> 


<style type="text/css">
     body {
    font-family: 'Radley', sans-serif!important;
      }

     p, h1, h2, h3, h4, h5,h6,a  {
    font-family: 'Montserrat', sans-serif !important;
      }

	  label.wpforms-field-label {
    	font-family: 'Montserrat', sans-serif !important;
		}

img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
.title_outer.title_without_animation.with_image {
    display: none!important;
}

@media (min-width: 1025px) and (max-width: 1500px), (-webkit-min-device-pixel-ratio: 1.25) and (min-width: 1025px), (min-resolution: 120dpi) and (min-width: 1025px){
.wrapper-dev {
    padding-top: 0px!important;
}
}

.inactiveLink {
   pointer-events: none;
   cursor: default;
}


.title, .popup_menu:hover .line, .popup_menu:hover .line:after, .popup_menu:hover .line:before, .mejs-controls .mejs-time-rail .mejs-time-current, .mejs-controls .mejs-time-rail .mejs-time-handle, .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current, .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-active, .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-hover, .q_accordion_holder.accordion .ui-accordion-header.ui-state-active .accordion_mark, .q_accordion_holder.accordion .ui-accordion-header.ui-state-hover .accordion_mark, .q_dropcap.circle, .q_dropcap.square, .gallery_holder ul li .gallery_hover i.fa-search, .highlight, .testimonials_holder.light .flex-direction-nav a:hover, .q_tabs.with_borders .tabs-nav li.active a, .q_tabs.with_borders .tabs-nav li.active a:hover, .q_tabs.border_arround_element .tabs-nav li a:hover, .q_tabs.with_lines .tabs-nav li.active a, .q_tabs.with_lines .tabs-nav li a:hover, .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li a:hover:after, .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a:after, .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a:hover:after, .q_message, .price_table_inner .price_button a, .price_table_inner .button_on_bottom_wrapper a, .q_price_table.active .active_text, .q_social_icon_holder .qode_icon_stack, .footer_top .q_social_icon_holder:hover .qode_icon_stack, .q_list.circle ul>li:before, .q_list.number.circle_number ul>li:before, .q_pie_graf_legend ul li .color_holder, .q_line_graf_legend ul li .color_holder, .q_progress_bar .progress_content, .q_progress_bars_vertical .progress_content_outer .progress_content, .q_progress_bar .floating.floating_outside .progress_number, .qbutton, .load_more a, .blog_load_more_button a, #submit_comment, .post-password-form input[type='submit'], #wp-calendar td#today, .qode_image_gallery_no_space.light .controls a.prev-slide:hover, .qode_image_gallery_no_space.light .controls a.next-slide:hover, input.wpcf7-form-control.wpcf7-submit, div.wpcf7-response-output.wpcf7-mail-sent-ok, .qbutton.white:hover, .qbutton.solid_color, .qbutton.top_and_bottom_border:hover, .pagination ul li a:hover, .single_links_pages span:hover, .comment_pager .page-numbers:hover, .comment_pager a:hover, .comment_pager .current:hover, .pagination ul li.active span, .single_links_pages > span, .comment_pager .current, .comment_pager .page-numbers.dots:hover, .read_more_button_holder a, .read_more_button_holder a.white:hover, .projects_holder article .item_holder.upward_hover .text_holder, .projects_masonry_holder article .item_holder.upward_hover .text_holder, .portfolio_slider li.item .item_holder.upward_hover .text_holder, .projects_holder article .item_holder.slide_from_left_hover .icons_holder, .projects_masonry_holder article .item_holder.slide_from_left_hover .icons_holder, .portfolio_slider li.item .item_holder.slide_from_left_hover .icons_holder, .projects_holder article .item_holder.opposite_corners_hover .text_holder .separator, .projects_masonry_holder article .item_holder.opposite_corners_hover .text_holder .separator, .portfolio_slider li.item .item_holder.opposite_corners_hover .text_holder .separator, .projects_holder article .item_holder.opposite_corners_hover .text_holder .separator.animate, .projects_masonry_holder article .item_holder.opposite_corners_hover .text_holder .separator.animate, .portfolio_slider li.item .item_holder.opposite_corners_hover .text_holder .separator.animate, .projects_holder article .item_holder.slide_from_left_hover .text_holder .separator, .projects_masonry_holder article .item_holder.slide_from_left_hover .text_holder .separator, .portfolio_slider li.item .item_holder.slide_from_left_hover .text_holder .separator, .projects_holder article .item_holder.slide_from_left_hover .text_holder .separator.animate, .projects_masonry_holder article .item_holder.slide_from_left_hover .text_holder .separator.animate, .portfolio_slider li.item .item_holder.slide_from_left_hover .text_holder .separator.animate, .projects_holder article .item_holder.subtle_vertical_hover .text_holder .separator, .projects_masonry_holder article .item_holder.subtle_vertical_hover .text_holder .separator, .portfolio_slider li.item .item_holder.subtle_vertical_hover .text_holder .separator, .projects_holder article .item_holder.subtle_vertical_hover .text_holder .separator.animate, .projects_masonry_holder article .item_holder.subtle_vertical_hover .text_holder .separator.animate, .portfolio_slider li.item .item_holder.subtle_vertical_hover .text_holder .separator.animate, .projects_holder article .item_holder.image_text_zoom_hover .text_holder .separator, .projects_masonry_holder article .item_holder.image_text_zoom_hover .text_holder .separator, .portfolio_slider li.item .item_holder.image_text_zoom_hover .text_holder .separator, .projects_holder article .item_holder.image_text_zoom_hover .text_holder .separator.animate, .projects_masonry_holder article .item_holder.image_text_zoom_hover .text_holder .separator.animate, .portfolio_slider li.item .item_holder.image_text_zoom_hover .text_holder .separator.animate, .projects_holder article .item_holder.opposite_corners_hover .icons_holder a, .projects_masonry_holder article .item_holder.opposite_corners_hover .icons_holder a, .portfolio_slider li.item .item_holder.opposite_corners_hover .icons_holder a, .projects_holder article .item_holder.subtle_vertical_hover .icons_holder a, .projects_masonry_holder article .item_holder.subtle_vertical_hover .icons_holder a, .portfolio_slider li.item .item_holder.subtle_vertical_hover .icons_holder a, .projects_holder article .item_holder.image_text_zoom_hover .icons_holder a, .projects_masonry_holder article .item_holder.image_text_zoom_hover .icons_holder a, .portfolio_slider li.item .item_holder.image_text_zoom_hover .icons_holder a, .projects_holder article .item_holder.gradient_hover .icons_holder a:hover, .projects_masonry_holder article .item_holder.gradient_hover .icons_holder a:hover, .portfolio_slider li.item .item_holder.gradient_hover .icons_holder a:hover, .vertical_menu_hidden_button_line, .vertical_menu_hidden_button_line:after, .vertical_menu_hidden_button_line:before, .popup_menu.opened:hover .line:after, .popup_menu.opened:hover .line:before, .shopping_cart_header .header_cart_span, .shopping_cart_dropdown .cart_bottom .checkout, .shopping_cart_dropdown .cart_bottom .view-cart:hover, .shopping_cart_dropdown ul li .item_info_holder .item_right .remove:hover, .popup_menu.opened:hover .line:before, .single_tags a:hover, aside.sidebar .widget .tagcloud a:hover, .widget .tagcloud a:hover, .blog_holder article.format-link .post_text .post_text_inner:hover, .blog_holder article.format-quote .post_text .post_text_inner:hover, .blog_holder article .post_social .post_comments i, .blog_holder article .post_social .blog_like i, .blog_vertical_loop_button .button_icon a, .blog_vertical_loop_back_button .button_icon a, .blog_holder.masonry article.format-link .quote_link_icon_holder, .blog_holder.masonry article.format-quote .quote_link_icon_holder, .blog_holder.masonry_full_width article.format-link .quote_link_icon_holder, .blog_holder.masonry_full_width article.format-quote .quote_link_icon_holder, .wpb_gallery .flexslider_slide .flex-control-paging li a.flex-active, .wpb_gallery .flexslider_fade .flex-control-paging li a.flex-active, ul.qode_pricing_list_holder .highlighted_item span.highlighted_text, .q_team.below_image:hover .social_share_icon_shape{
    background-color: transparent!important;
}

.title {
    height: auto!important;
    }

.costume{
    color: black;
    font-size: 35px;
    text-transform: capitalize;
    line-height: 45px;
    font-weight: 700;
    letter-spacing: 0.5px;
}

#wpforms-51481 label{
    color: #000000;
}
.costume-two{
    text-transform: inherit;
    color: #000000;
}

section.partner-section > .container{
    background-color: transparent;
}

.wordCamp{
    color: black;
    text-transform: capitalize;
}

.text-black{
    color: #000000!important;
}

.bg-transparent{
    background: transparent;
}

.wpforms-field-container label {
    color: #000;
}

#get-in-touch input{
	border: none;
    border-bottom: 1px solid #000;
    color: #000;
    width: 100%;
    font-size: 16px;
    padding: 11px 0;
    position: relative;
    outline: none;
    transition: all .5s;
    background: transparent;
}

#get-in-touch textarea{
	height: 40px!important;
	border: none;
    border-bottom: 1px solid #000;
    color: #000;
    width: 100%;
    font-size: 16px;
    padding: 11px 0;
    position: relative;
    outline: none;
    transition: all .5s;
    background: transparent;
	resize: none;
}

#get-in-touch input, form {
    font-family: 'Montserrat', sans-serif !important;
}

input#wpforms-52036-field_4_1 {
    width: auto;
}

input#wpforms-52036-field_4_2 {
    width: auto;
}

input#wpforms-52036-field_5_1 {
    width: auto;
}

input#wpforms-52036-field_5_2 {
    width: auto;
}
input#wpforms-52036-field_5_4 {
    width: auto;
}

#get-in-touch button {
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    background: #646AEE;
    padding: 0 45px;
    font-size: 18px;
    display: inline-block;
    text-align: center;
    min-height: 45px;
    line-height: 45px;
    border-radius: 50px;
    position: relative;
    overflow: hidden;
    z-index: 2;
    max-width: 180px;
    margin: auto;
    position: relative;
    text-align: center;
}


.wpforms-confirmation-container-full p:last-of-type, div[submit-success]>.wpforms-confirmation-container-full p:last-of-type {
    color: #fff!important;
    margin: 0;
}

</style>

<link rel='stylesheet' id='wp-block-library-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/css/dist/block-library/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='amazonpolly-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/plugins/amazon-polly/public/css/amazonpolly-public.css' type='text/css' media='all' />
<link rel='stylesheet' id='bcct_style-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/plugins/better-click-to-tweet/assets/css/styles.css' type='text/css' media='all' />

<link rel='stylesheet' id='global-css-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/css/global.css' type='text/css' media='' />
<link rel='stylesheet' id='wordpress-css-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/css/wordpress.css' type='text/css' media='' />


<link rel='stylesheet' id='uplers-style-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='addtoany-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/plugins/add-to-any/addtoany.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='mCustomScrollbar-css-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/css/jquery.mCustomScrollbar.min.css' type='text/css' media='' />


<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/wp-inc/js/jquery/jquery.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/wp-inc/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/plugins/add-to-any/addtoany.min.js' id='addtoany-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/plugins/amazon-polly/public/js/amazonpolly-public.js' id='amazonpolly-js'></script>


</head>

<body data-rsssl=1 id="wp-dev-template" class="page-template page-template-page-templates page-template-tpl-wordpress-page page-template-page-templatestpl-wordpress-page-php page page-id-230 wordpress-development">
	
	<div id="page" class="hfeed site">

		
<div id="main" class="wrapper-dev">
	<div class="wordpress-pg" id="topForm">

		<section class="moduleOne sm-cont banneForm-full">
			<div class="container">
				<div class="row align-items-center">
					<div class="left-content col-md-6">
						<h1 class="costume">Custom WordPress Development Services</h1>
						<h3 class="costume-two">Uvact's custom WordPress development services leverage the strength of the content management system to the benefit of clients. Our developers work with our clients to bring their wildest dreams to life.</h3>
					</div>
					<div class="right-form col-md-6">
						<div class="bannerform">
							<div class="defaultForm">
								<div class="heading-content">
									<h2 class="title text-left">Get In Touch</h2>
									<p>(no contracts, no commitments)</p>
								</div>

								<div id="get-in-touch">
								<?php echo do_shortcode('[wpforms id="52036"]');?>
								</div>

								<!-- <form id="enquiry-form" method="post">
	<input type="hidden" name="action" value="upl_web_developer_form_ajax">
	<input type="hidden" name="page_title" value="Custom WordPress Development Services Company | WordPress Agency">
	<div class="row justify-content-center">
		<div class="col-sm-12">
			<div class="form-group ">
				<input type="text" name="full_name" placeholder="Name*">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group ">
				<input type="Email" name="email" placeholder="Work Email*">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group ">
				<input type="text" name="phone" placeholder="Phone*">
			</div>
		</div>

		<div class="col-sm-12 selectWrap">
			<label class="lbl-title">How soon do you want to start the project?*</label>
			<div class="optionBox">
				<label>
					<input type="radio" name="how_soon_do_you_want_to_start_the_project_" value="Within 8 weeks" checked="checked">
					<span class="lbl-txt">Within 8 weeks</span>
				</label>
			</div>
			<div class="optionBox">
				<label>
					<input type="radio" name="how_soon_do_you_want_to_start_the_project_" value="More than 8 weeks">
					<span class="lbl-txt">More than 8 weeks</span>
				</label>
			</div>
		</div>

		<div class="col-sm-12 selectWrap">
			<label class="lbl-title">Which digital marketing services are you looking for?*</label>
			<div class="optionBox">
				<label>
					<input type="radio" name="which_service_are_you_interested_in_one" value="Design only" checked="checked">
					<span class="lbl-txt">Design only</span>
				</label>
			</div>
			<div class="optionBox">
				<label>
					<input type="radio" name="which_service_are_you_interested_in_one" value="Development only">
					<span class="lbl-txt">Development only</span>
				</label>
			</div>
			<div class="optionBox">
				<label>
					<input type="radio" name="which_service_are_you_interested_in_one" value="Both">
					<span class="lbl-txt">Both</span>
				</label>
			</div>
		</div>

		<div class="col-sm-12 mt-2">
			<div class="form-group">
				<label class="ta-lbl-title">What is your preferred web development technology?*</label> -->
				<!-- <select name="what_is_your_preferred_web_development_technology">
					<option value="WordPress">WordPress</option>
					<option value="HubSpot">HubSpot</option>
					<option value="Front-end/HTML">Front-end/HTML</option>
					<option value="Shopify">Shopify</option>
					<option value="Others">Others (Specify if any)</option>
				</select> -->
			<!-- <textarea placeholder="(Share your preferred web development technology)" name="what_is_your_preferred_web_development_technology"></textarea>

			</div> -->
			<!-- <div class="optionBox textbox" style="display: none;">
				<label>
					<input type="text" name="what_is_your_preferred_web_development_technology_other" value="" placeholder="Please specify other*" style="opacity: 1;">
				</label>
			</div>												 -->
		<!-- </div>

		<div class="col-sm-12 textareaWrap">
			<div class="form-group">
				<label class="ta-lbl-title">Share your requirements (minimum 250 characters)*</label>
				<textarea placeholder="(You can add links to your shareable materials if any)" name="share_your_requirements"></textarea>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="submit-btn">
				<input type="submit" value="submit">
				<div class="form-loader"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/loader.svg" alt="loader"></div>			</div>
		</div>
		<div class="ajax-message"></div>
	</div>
</form>	 -->


</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-image">
				<!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/person-img.png" alt="Custom Wordpress Development"> -->
			</div>
		</section>

		<section class="partner-section">
			<div class="container">
				<div class="partner-top-section">
					<div class="partner-campain">
						<div class="row">
							<div class="partner-content col-md-6">
								<div class="heading-content">
									<h2 class="title wordCamp"><i class="uvact-shape"></i>We’ve been busy</h2>
									<!-- <p class="text-black">We’ve been a sponsor of Wordcamps for the past several years, working closely with the community. We work on constant updates in order to improvise future WordPress themes. And being a custom WordPress Development Company, it also helps us meet our client’s custom WordPress Development Service deliverables.</p> -->
								</div>
								<div class="partner-counter">
									<!-- <div class="single-partner-counter"> 
										
										<div class="single-counter">
											<h3><span class="counter">80</span>+</h3>
											<span>WooCommerce developers</span>
										</div>
									</div> -->
									<div class="single-partner-counter">
										
										<div class="single-counter">
											<h3><span class="counter">565</span>+</h3>
											<span>Websites delivered</span>
										</div>
									</div>
								</div>
							</div>
							<div class="partner-img col-md-6" data-bottom-top="transform:translateY(-50px);" data-top-bottom="transform:translateY(0px);">
								<figure>
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/wordcamp-1.jpg" alt="wordcamp"> -->
								</figure>	
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<!-- <section class="agency-grow">
			<div class="container">
				<div class="row">
					<div class="left-img col-md-4">
						<figure>
							<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/grow-img.png" alt="Wordpress Development Services">
						</figure>
					</div>

					<div class="partner-content col-md-8">
						<div class="heading-content">
							<h2 class="title wordCamp"><i class="uvact-shape"></i>Grow your Agency Revenue, hire the best WordPress Development Company to your service!</h2>
							<p class="text-black">Offering professional WordPress website design and development services, we offer individual focus to the complexities in each web project and deliver highly optimized SEO-smart WordPress solutions within the decided timelines. Our team of WordPress developers follow clean and clear coding practices to deliver websites that are secure and scalable. With this, dedicated project managers help you with seamless delegation over your WordPress Development Services. You can opt for a project-based model or independently manage your projects by hiring resources through our Offshore Remote Teams model.</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="our-service-section">
			<div class="container">
				<div class="heading-content text-center">
					<h2 class="title wordCamp text-center"><i class="uvact-shape"></i>WordPress Development Services We Offer</h2>
				</div>
				<div class="services-list">
					<div class="row mb-4">
						<div class="single-service col-lg-4 col-sm-6">
		                    <div class="services-listing-wrap">
								<div class="thumb-icon">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/wp-development.svg" alt="wordpress-development">
									</figure>
								</div>
		                        <h5 class="wordCamp">Custom WordPress <br>Website Development</h5>
		                        <p class="text-black">With years of experience on our belts, we are able to offer clean-looking and highly functional WordPress websites for every kind of business.</p>
							</div>
	                    </div>

	                    <div class="single-service col-lg-4 col-sm-6">
		                    <div class="services-listing-wrap">
								<div class="thumb-icon">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/customization.svg" alt="WP theme development & customization icon">
									</figure>
								</div>
		                        <h5 class="wordCamp">WordPress Theme Development &<br> Customization</h5>
		                        <p class="text-black">Keeping mobile-ﬁrst orientation in mind, we help clients bring PSD mockups to life as WordPress themes.</p>
							</div>
	                    </div>

	                    <div class="single-service col-lg-4 col-sm-6">
		                    <div class="services-listing-wrap">
								<div class="thumb-icon">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/woocommerce-development.svg" alt="WooCommerce Development Icon">
									</figure>
								</div>
		                        <h5 class="wordCamp">WooCommerce Development</h5>
		                        <p class="text-black">We help new and existing e-commerce businesses build and/or migrate to highly converting stores running on WooCommerce.</p>
							</div>
	                    </div>

	                    <div class="single-service col-lg-4 col-sm-6">
		                    <div class="services-listing-wrap">
								<div class="thumb-icon">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/pagespeed-optimization.svg" alt="WP plugin development">
									</figure>
								</div>
		                        <h5 class="wordCamp">WordPress Plugin Development</h5>
		                        <p class="text-black">We follow the best coding practices to integrate plugins for facilitating an extensive range of features and functionalities on your websites.</p>
							</div>
	                    </div>

	                    <div class="single-service col-lg-4 col-sm-6">
		                    <div class="services-listing-wrap">
								<div class="thumb-icon">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/blog-development.svg" alt="Blog development Icon">
									</figure>
								</div>
		                        <h5 class="wordCamp">Blog Development</h5>
		                        <p class="text-black">Our team of developers helps clients develop purely scalable and engaging WordPress blog themes at the best market prices and within the shortest timeframe.</p>
							</div>
	                    </div>

	                    <div class="single-service col-lg-4 col-sm-6">
		                    <div class="services-listing-wrap">
								<div class="thumb-icon">
									<figure>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/api-integration.svg" alt="API Integration & Customization Icon">
									</figure>
								</div>
		                        <h5 class="wordCamp">API Integration & Customization</h5>
		                        <p class="text-black">Extending your WordPress website capabilities, you can opt for API integration services. We ensure a seamless data sync and offer mobile app integration services with your site. </p>
							</div>
	                    </div>

					</div>
					<div class="get-touch-btn text-center">
						<a href="#topForm" class="cta-button i-link paoc-popup popupaoc-link-image" href="javascript:void(0);" data-target="popuppaoc-modal-51440" data-conf="{&quot;content&quot;:{ &quot;target&quot; : &quot;#paoc-modal-1&quot;, &quot;effect&quot;: &quot;fadein&quot;, &quot;positionX&quot;: &quot;center&quot;, &quot;positionY&quot;: &quot;center&quot;, &quot;fullscreen&quot;: false, &quot;speedIn&quot;: 300, &quot;speedOut&quot;: 300, &quot;delay&quot;: 150, &quot;width&quot;: &quot;60%&quot; },&quot;loader&quot;:{&quot;active&quot;: true},&quot;overlay&quot;:{&quot;active&quot;: true}}">GET IN TOUCH</a>
					</div>
				</div>
			</div>
		</section>

		<!--case studies section start-->
		<!-- <section class="commonlisting">
			<div class="gray-bg">
				<div class="container">
					<div class="heading-content text-center">
						<h2 class="wordCamp"><i class="uvact-shape"></i>Our Work</h2>
						<p class="text-black mb-5">We are a top-notch WordPress Web Design Agency helping you to beat the competition. <br>Here are some of our best works.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-sm-6 listbox">
							<h3 class="box-title"><a href="">Airtasker</a></h3>
							<figure class="ratio-img">
								<a href="">
									<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/case-studies/airtasker.jpg" alt="Airtasker - A Link Building Case Study">
									<span class="view">View</span>
								</a>
							</figure>
							<div class="box-info">
								<h4 class="box-sub-title">How We Increased Airtasker’s Trafﬁc by 7,251% in 10 Months</h4>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 listbox">
							<h3 class="box-title"><a href="">Red Soda</a></h3>
							<figure class="ratio-img">
								<a href="">
									<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/case-studies/musicalfunctions-snall-banner.jpg" alt="Red Soda Case Study Banner">
									<span class="view">View</span>
								</a>
							</figure>
							<div class="box-info">
								<h4 class="box-sub-title">How we increased Sydney based wedding band's conversions by 750%  in 10 months</h4>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 listbox">
							<h3 class="box-title"><a href="">SURVIVAL EMERGENCY SOLUTIONS</a></h3>
							<figure class="ratio-img">
								<a href="">
									<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/case-studies/survival-emergency-solutions.jpg" alt="Survival Emergency Solution- Case Study Banner">
									<span class="view">View</span>
								</a>
							</figure>
							<div class="box-info">
								<h4 class="box-sub-title">How We Put Survival on The First Page of Google in 6 Months</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!--case studies section End-->

		<!-- <section class="wp-expertise">
			<div class="container">
				<div class="heading-content">
					<h2 class="title wordCamp"><i class="uvact-shape"></i>Our WordPress Development Expertise</h2>
				</div>
				<div class="block-lists">
					<div class="single-block block-1">
						<div class="row">
							<div class="left-block col-md-6 content-block">
								<div class="block-content"  data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(50px);">
									<h5 class="wordCamp">Providing Speed & Performance</h5>
									<p class="text-black">All the websites that we develop are super-fast and highly optimized. We ensure all the best practices are followed throughout the custom WordPress development process, which improves overall user engagement and conversion.</p>
								</div>
							</div>

							<div class="right-block col-md-6 img-block">
								<div class="block-img text-right">
									<figure>
										<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/speed-performance.jpg" alt="Providing Speed & Performance">
									</figure>
								</div>
							</div>
						</div>
					</div>

					<div class="single-block block-2">
						<div class="row">
							<div class="left-block col-md-6 img-block" >
								<div class="block-img">
									<figure data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(150px);">
										<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/web-solution.jpg" alt="SEO-Smart Web Solutions">
									</figure>
								</div>
							</div>

							<div class="right-block col-md-6 content-block">
								<div class="block-content">
									<h5 class="wordCamp">SEO-Smart Web Solutions</h5>
									<p class="text-black">Optimized for search engines, our basic SEO implementation includes heading tags, meta tags, image optimization, Alt text, etc., followed by the techniques that allow smoother implementation. This kickstarts marketing without any additional efforts.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="single-block block-3">
						<div class="row">
							<div class="left-block col-md-6 content-block">
								<div class="block-content">
									<h5 class="wordCamp">Simple, Clean & Functional Websites</h5>
									<p class="text-black">We use intelligent frameworks. Our coding practices are well commented with universally accepted naming conventions which translate to easy use worldwide. That’s the first thing you’d expect from a trustworthy WordPress Website Development Company.</p>
								</div>
							</div>

							<div class="right-block col-md-6 img-block" >
								<div class="block-img text-right">
									<figure data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(-150px);">
										<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/functional-website.jpg" alt="Clean & Functional Website">
									</figure>
								</div>
							</div>
						</div>
					</div>

					<div class="single-block block-4">
						<div class="row">
							<div class="left-block col-md-6 img-block" >
								<div class="block-img">
									<figure  data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(-150px);">
										<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/low-maintenance.jpg" alt="Low-Maintenance">
									</figure>
								</div>
							</div>

							<div class="right-block col-md-6 content-block">
								<div class="block-content">
									<h5 class="wordCamp">Low-Maintenance</h5>
									<p class="text-black">We follow industry best practices for our WordPress website development services, removing any hardcoded gaps or unethical customizations. This ensures that our sites are easy to run and maintain.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="single-block block-5">
						<div class="row">
							<div class="left-block col-md-6 content-block">
								<div class="block-content">
									<h5 class="wordCamp">Tech for Non-Tech</h5>
									<p class="text-black">WordPress powers 43% of the internet because of its user-friendliness. On top of it, we as an experienced WordPress website development company develop sites in such a way that makes its interface simpler, interactive, and friendly to all users.</p>
								</div>
							</div>

							<div class="right-block col-md-6 img-block" >
								<div class="block-img text-right">
									<figure  data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(-150px);">
										<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/tech-non-tech.jpg" alt="Tech for Non-Tech">
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="single-block block-6">
						<div class="row">
							<div class="left-block col-md-6 img-block">
								<div class="block-img">
									<figure>
										<img src="<?php //echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/wordpress/upgradable-secure.jpg" alt="Upgradable & Secure">
									</figure>
								</div>
							</div>

							<div class="right-block col-md-6 content-block" >
								<div class="block-content" data-bottom-top="transform:translateY(0px);" data-top-bottom="transform:translateY(-150px);">
									<h5 class="wordCamp">Seamlessly Upgradable & Secure</h5>
									<p class="text-black">Our websites are easily upgradable without any disruption in their previous functionality. We use the highest security techniques to ensure that the site is safe from any bot attacks. We follow correct ﬁle permissions, spam protection, form validations, conﬁguration settings, etc., to ensure that the website remains safe and secured.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section> -->


		<!--our blog START -->
					<!-- <section class="our-blog-main">
				<div class="container">
					<h2 class="section-title wordCamp">Our Blogs</h2>
					<div class="view-all">
						<a href="" class="inactiveLink">view all blogs</a>
					</div>
				</div>

				<div class="blog-slider-section">
					<div class="container">
						<div class="blog-slider">	
						 	  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="Top 9 WordPress web development tools you can’t miss in 2021" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/shutterstock.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Sheryl Jones</li>
							<li>June 1, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="Top 9 WordPress web development tools you can’t miss in 2021" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">Top 9 WordPress web development tools you can’t miss in 2021</h4>
						</a>
					</div>
				</div>  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="Shopify vs WordPress Development: What to pick for your online store?" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/shopify-vs-wordpress-500x300.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Sara Al-Bakri</li>
							<li>May 19, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="Shopify vs WordPress Development: What to pick for your online store?" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">Shopify vs WordPress Development: What to pick for your online store?</h4>
						</a>
					</div>
				</div>  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="8 Do’s and Don’ts for creating HubSpot Landing Pages" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/HubSpot-Landing-Pages-500x303.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Kevin Oskow</li>
							<li>May 11, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="8 Do’s and Don’ts for creating HubSpot Landing Pages" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">8 Do’s and Don’ts for creating HubSpot Landing Pages</h4>
						</a>
					</div>
				</div>  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="Top Event-Based WordPress themes for 2021" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/Event-Based-WordPress-themes-500x303.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Aayush Gupta</li>
							<li>March 23, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="Top Event-Based WordPress themes for 2021" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">Top Event-Based WordPress themes for 2021</h4>
						</a>
					</div>
				</div>  
                <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="Using WordPress as Headless CMS with React" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/Use-WordPress-with-React-1-500x270.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Hiren Purohit</li>
							<li>February 23, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="Using WordPress as Headless CMS with React" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">Using WordPress as Headless CMS with React</h4>
						</a>
					</div>
				</div>  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="WordPress CMS vs HubSpot COS &#8211; Which one to choose and Why" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/image-13-500x250.png" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Sheryl Jones</li>
							<li>February 18, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="WordPress CMS vs HubSpot COS &#8211; Which one to choose and Why" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">WordPress CMS vs HubSpot COS &#8211; Which one to choose and Why</h4>
						</a>
					</div>
				</div>  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="How to Hire the Best WooCommerce Developer with Minimal Budget" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/055-500x270.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Kevin Oskow</li>
							<li>February 8, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="How to Hire the Best WooCommerce Developer with Minimal Budget" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">How to Hire the Best WooCommerce Developer with Minimal Budget</h4>
						</a>
					</div>
				</div>  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="WordPress Development: Expectations vs. Reality" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/02-1-500x270.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Sara Al-Bakri</li>
							<li>January 29, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="WordPress Development: Expectations vs. Reality" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">WordPress Development: Expectations vs. Reality</h4>
						</a>
					</div>
				</div>  
                <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="XAMPP Vs MAMP Vs DesktopServer &#8211; Which One&#8217;s the Best?" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/01-500x270.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Sara Al-Bakri</li>
							<li>January 19, 2021</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Web</a></li>
						</ul>
						<a href="" title="XAMPP Vs MAMP Vs DesktopServer &#8211; Which One&#8217;s the Best?" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">XAMPP Vs MAMP Vs DesktopServer &#8211; Which One&#8217;s the Best?</h4>
						</a>
					</div>
				</div>  <div class="listbox item">
					<figure class="ratio-img">
						<a href="" title="6 Questions To Ask When Hiring Shopify Developers" class="blog_detial_page_link inactiveLink">
							<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/08-500x270.jpeg" alt="" />

							<span class="view">View</span>
						</a>		</figure>
					<div class="box-info">
						<ul>
							<li> Sara Al-Bakri</li>
							<li>December 18, 2020</li>
							<li><a href="" rel="nofollow" class="inactiveLink">Remote Team</a>, <a href="" class="inactiveLink" rel="nofollow">Web</a></li>
						</ul>
						<a href="" title="6 Questions To Ask When Hiring Shopify Developers" class="blog_detial_page_link inactiveLink">
							<h4 class="box-sub-title">6 Questions To Ask When Hiring Shopify Developers</h4>
						</a>
					</div>
				</div>						</div>
					</div>
				</div>	    
					

				<div class="progress" role="progressbar" aria-valuemin="20" aria-valuemax="100">
				    <div class="slider__label"></div>
				</div>
			</section> -->
				<!--our blog END -->


		<!-- latest-testimonials START -->
		<!-- <section class="ppc-testimonials">
			<div class="container">
				<div class="heading-content">
					<h2 class="section-title wordCamp"><i class="uvact-shape"></i>Hear from Our Clients</h2>
				</div>
				<p class="text-black">Being a leading WordPress Development agency, our promise to remain compliant towards<br> the ideas and goals comes first. Here’s what they think of UVact.</p>
				<div class="slides">
					<div class="item">
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/common-services/ranking-thumb.jpg" alt="Testimonial - Tommy Sugishita, Oracle">
						</figure>
						<div class="desc">
							<p>Uvact are a legit team of programmers and coders. Any project you partner with on the uvact team comes out with elegant codes and unparalleled support, a true partner.</p>
						</div>
						<div class="about">
							<div class="name">Tommy Sugishita</div>
							<div class="post">Owner/Interactive Officer</div>
							<div class="company">Ranking Carolina</div>
						</div>
					</div>
					<div class="item">
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/common-services/bapple-thumb.jpg" alt="Testimonial - Peter, Bapple">
						</figure>
						<div class="desc">
							<p>Uvact is a dedicated team of web professionals with attention to detail and passion to help your business succeed. We have worked with them for many years and they always deliver.</p>
						</div>
						<div class="about">
							<div class="name">Peter Kawecki</div>
							<div class="post">Creative Director, General Manager</div>
							<div class="company">Bapple</div>
						</div>
					</div>
					<div class="item">
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/common-services/bbd-thumb.jpg" alt="Testimonial - Emma Lynch, BBD Boom">
						</figure>
						<div class="desc">
							<p>The professionalism and personalized service that we got from Uvact is unlike any other company. Uvact are the true partners!</p>
						</div>
						<div class="about">
							<div class="name">Emma Lynch</div>
							<div class="post">Founder & Head of Client Success</div>
							<div class="company">BBD Boom</div>
						</div>
					</div>
					<div class="item">
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/common-services/fox-thumb.jpg" alt="Testimonial - Vijay Sudan, Fox Corporation">
						</figure>
						<div class="desc">
							<p>Great service. Incredibly fast turnaround and flawless work. Somehow you even anticipated things that I didn't think of myself. I wish I'd discovered Uvact years ago.</p>
						</div>
						<div class="about">
							<div class="name">Vijay Sudan</div>
							<div class="post">Vice President, Social Impact</div>
							<div class="company">Fox Corporation</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- latest-testimonials END -->

		<!--download our rate section-->
		<!-- <section class="download-rate-cart common-form one-line">
			<div class="inner-common-form">
				<div class="container bg-transparent">
					<div class="heading-content">
						<h2 class="title wordCamp">Download our Rate card</h2>
					</div>
					<form id="rate_card-form" method="post">
						<input type="hidden" name="action" value="rate_card_form_ajax">
						<input type="hidden" name="page_title" value="Custom WordPress Development Services Company | WordPress Agency">
						<div class="row">
							<div class="form-group col-md-4">
								<input type="text" name="full_name" placeholder="Name*">
							</div>

							<div class="form-group col-md-4">
								<input type="Email" name="email" placeholder="Work Email*">
							</div>

							<div class="submit-btn col-md-4 text-center">
								<input type="submit" name="submitBtn" value="Download">
								<div class="form-loader"><img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/loader.svg" alt="loader"></div>							</div>

							<div class="ajax-message"></div>
						</div>
					</form>
				</div>
			</div>
		</section> -->
		<!--download our rate section end-->

		<!-- FAQ-section START -->
		<!-- <section class="FAQ-section">
			<div class="container">
				<div class="heading-content text-center">
					<h2 class="section-title wordCamp"><i class="uvact-shape"></i>Frequently Asked Questions</h2>
				</div>
				<div class="all-accordien faq-acco">
					<div class="single-acco single-faq">
						<div class="inner-single-service">
							<div class="acco-heading">
								<h4 class="text-black">Will I get a dedicated Project Manager for my WordPress Website Development Services?</h4>
							</div>
							<div class="acco-content tab-content" style="display: block;">
								<p class="text-black">When you choose Uvact are your outsourcing partner for your WordPress Website Development Services, we ensure that you get backed by a team of Business Analysts, WordPress Developers, server administrators and of course a Project Manager.</p>
								<p class="text-black">However a dedicated Project Manager is optional and can be hired as per your WordPress Development requirements. We will stay in touch with you and the team at all times. In case you are facing any challenges, we will assign a temporary project manager to resolve the issues at no additional cost.</p>
							</div>
						</div>
					</div>

					<div class="single-acco single-faq">
						<div class="inner-single-service">
							<div class="acco-heading">
								<h4 class="text-black">If I have a team of 5 ppl, and if I want to change one of the WordPress expertise/resources in the middle of the contract, what do I do?</h4>
							</div>
							<div class="acco-content tab-content" style="display: none;">
								<p class="text-black">Firstly, being a leading WordPress web development company we make sure that you get the best team to achieve your business goals. But, we also understand that such circumstances do hold their chances during the project. So, we give all our clients the choice to change any of their resources in the middle of the contract. We then provide the client with the next best resource that may be a better fit for your project's needs.</p>
							</div>
						</div>
					</div>

					<div class="single-acco single-faq">
						<div class="inner-single-service">
							<div class="acco-heading">
								<h4 class="text-black">Will I receive any report for work done?</h4>
							</div>
							<div class="acco-content tab-content" style="display: none;">
								<p class="text-black">We believe that a trustworthy WordPress web development company will always be inclined to keep the clients updated and informed about their project’s progress. This helps us achieve transparency and trust with our clients. Yes, our Project Managers will provide you with hourly reports of the work done. If needed, we can also provide you with weekly and monthly reports.</p>
							</div>
						</div>
					</div>

					<div class="single-acco single-faq">
						<div class="inner-single-service">
							<div class="acco-heading">
								<h4 class="text-black">What is the biggest benefit of working with Uvact Offshore Remote Teams?</h4>
							</div>
							<div class="acco-content tab-content" style="display: none;">
								<p class="text-black">As a recognized WordPress web development company, our knowledge and years of experience with the platform make building an Offshore Remote Team simple.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section> -->
		<!-- FAQ-section END -->

		<!--Book a meeting section start-->
		<!-- <section class="book-meeting">
	
			<div class="query-section">
				<div class="container">
					<div class="rate-card-main one-line">
						<div class="inner-common-form">
							<h3 class="query-msg wordCamp">Or Get in Touch</h3>
							<form id="enquiry-form" method="post">
								<input type="hidden" name="action" value="enquiry_form_ajax">
								<input type="hidden" name="page_title" value="Custom WordPress Development Services Company | WordPress Agency">
								<div class="row">
									<div class="form-group">
										<input type="text" name="full_name" placeholder="Name*">
									</div>

									<div class="form-group">
										<input type="Email" name="email" placeholder="Work Email*">
									</div>

									<div class="form-group">
										<textarea placeholder="Message*" name="message"></textarea>
									</div>

									<div class="submit-btn text-center">
										<input type="submit" name="submitBtn" value="Send">
										<div class="form-loader"><img src="<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/images/loader.svg" alt="loader"></div>									</div>

									

									<div class="ajax-message"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!--Book a meeting section End-->

		<!-- paging START -->
		<!-- <section class="paging">
	<div class="row">
		<div class="col-sm-4 pagename-box">

			<a href="">
				<h3 class="title text-black">
					About Our Company				</h3>
			</a>
		</div>
		<div class="col-sm-4 pagename-box">
			<a href="">
				<h3 class="title white-arrow">
					Read Our Blog				</h3>
			</a>
		</div>
		<div class="col-sm-4 pagename-box">
			<a href="">
				<h3 class="title text-black">
					HubSpot Development				</h3>
			</a>
		</div>
	</div>
</section>		 -->
<!-- paging END -->

	</div>
</div>

<!-- FAQs Schema START -->
<script>!function(){var n={"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Will I get a dedicated Project Manager for my WordPress Website Development Services?","acceptedAnswer":{"@type":"Answer","text":"When you choose Uvacts are your outsourcing partner for your WordPress Website Development Services, we ensure that you get backed by a team of Business Analysts, WordPress Developers, server administrators and of course a Project Manager.\n\nHowever a dedicated Project Manager is optional and can be hired as per your WordPress Development requirements. We will stay in touch with you and the team at all times. In case you are facing any challenges, we will assign a temporary project manager to resolve the issues at no additional cost."}},{"@type":"Question","name":"If I have a team of 5 ppl, and if I want to change one of the WordPress expertise/resources in the middle of the contract, what do I do?","acceptedAnswer":{"@type":"Answer","text":"Firstly, being a leading WordPress web development company we make sure that you get the best team to achieve your business goals. But, we also understand that such circumstances do hold their chances during the project. So, we give all our clients the choice to change any of their resources in the middle of the contract. We then provide the client with the next best resource that may be a better fit for your project's needs."}},{"@type":"Question","name":"Will I receive any report for work done?","acceptedAnswer":{"@type":"Answer","text":"We believe that a trustworthy WordPress web development company will always be inclined to keep the clients updated and informed about their project’s progress. This helps us achieve transparency and trust with our clients. Yes, our Project Managers will provide you with hourly reports of the work done. If needed, we can also provide you with weekly and monthly reports."}},{"@type":"Question","name":"What is the biggest benefit of working with Uvacts Offshore Remote Teams?","acceptedAnswer":{"@type":"Answer","text":"As a recognised WordPress web development company, our knowledge and years of experience with the platform make building an Offshore Remote Team simple."}}]},e=document.createElement("script");e.type="application/ld+json",e.innerHTML=JSON.stringify(n),document.head.appendChild(e)}();</script><!--Friendly JSON-LD Code Generated by https://saijogeorge.com/json-ld-schema-generator/tag-manager-fix/-->

<!-- FAQs Schema END -->


</div><!-- #page -->
	
</div>
      </div>
    </div>
  </div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/jquery.lazy.min.js' id='lazy-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/form-validation.js' id='form-validation-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/jquery.carousel-ticker.js' id='jquery-carousel-ticker-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/jquery.magnific-popup.min.js' id='jquery-magnific-popup-min-js	-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/merge.min.js' id='merge-min-js-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/rangeSlider.min.js' id='rangeSlider-js-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/sticky-div-min.js' id='sticky-div-min-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/main.js' id='main-js-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/js/jquery.mCustomScrollbar.concat.min.js' id='mCustomScrollbar-js-js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/wordpress-development/assets/wp-inc/js/wp-embed.min.js' id='wp-embed-js'></script>

</body>

<?php get_footer() ?>