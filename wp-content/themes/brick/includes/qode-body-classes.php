<?php

if ( ! function_exists( 'brick_qode_add_theme_version_class' ) ) {
	/**
	 * Function that adds classes on body for version of theme
	 */
	function brick_qode_add_theme_version_class( $classes ) {
		$current_theme = wp_get_theme();
		
		//is child theme activated?
		if ( $current_theme->parent() ) {
			//add child theme version
			$classes[] = str_replace( ' ', '-', strtolower( $current_theme->get( 'Name' ) ) ) . '-child-theme-ver-' . $current_theme->get( 'Version' );
			
			//get parent theme
			$current_theme = $current_theme->parent();
		}
		
		if ( $current_theme->exists() && $current_theme->get( 'Version' ) != "" ) {
			$classes[] = str_replace( ' ', '-', strtolower( $current_theme->get( 'Name' ) ) ) . '-theme-ver-' . $current_theme->get( 'Version' );
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'brick_qode_add_theme_version_class' );
}

if ( ! function_exists( 'brick_qode_add_ajax_classes' ) ) {
	function brick_qode_add_ajax_classes( $classes ) {
		$page_transitions = brick_qode_options()->getOptionValue( 'page_transitions' );
		
		if ( $page_transitions === "1" ) {
			$classes[] = 'ajax_updown';
			$classes[] = 'page_not_loaded';
		} elseif ( $page_transitions === "2" ) {
			$classes[] = 'ajax_fade';
			$classes[] = 'page_not_loaded';
		} elseif ( $page_transitions === "3" ) {
			$classes[] = 'ajax_updown_fade';
			$classes[] = 'page_not_loaded';
		} elseif ( $page_transitions === "4" ) {
			$classes[] = 'ajax_leftright';
			$classes[] = 'page_not_loaded';
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'brick_qode_add_ajax_classes' );
}

if ( ! function_exists( 'brick_qode_add_helpers_class' ) ) {
	/**
	 * Function that adds classes on body element
	 */
	function brick_qode_add_helpers_class( $classes ) {
		$page_id = brick_qode_get_page_id();
		
		if ( brick_qode_options()->getOptionValue( 'boxed' ) == "yes" && brick_qode_options()->getOptionValue( 'transparent_content' ) == 'no' ) :
			$classes[] = 'boxed';
		endif;
		
		//is Chrome or Opera and is smooth scrolling turned on?
		if ( brick_qode_options()->getOptionValue( 'smooth_scroll' ) == "yes" ) {
			$classes[] = "smooth_scroll";
		}
		
		$isMobile = (bool) preg_match( '#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet' .
		                               '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]' .
		                               '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', getenv( "HTTP_USER_AGENT" ) );
		
		if ( brick_qode_options()->getOptionValue( 'elements_animation_on_touch' ) == "no" && $isMobile == true ) {
			$classes[] = 'no_animation_on_touch';
		}
		
		if ( brick_qode_options()->getOptionValue( 'paspartu' ) == 'yes' ) {
			$classes[] = 'paspartu_enabled';
			
			if ( ( brick_qode_options()->getOptionValue( 'paspartu_on_top' ) == 'yes' && brick_qode_options()->getOptionValue( 'paspartu_on_top_fixed' ) == 'yes' ) || ( brick_qode_options()->getOptionValue( 'vertical_area' ) == 'yes' && brick_qode_options()->getOptionValue( 'vertical_menu_inside_paspartu' ) == 'yes' ) ) {
				$classes[] = 'paspartu_on_top_fixed';
			}
			
			if ( brick_qode_options()->getOptionValue( 'paspartu_on_bottom_fixed' ) == 'yes' || ( brick_qode_options()->getOptionValue( 'vertical_area' ) == 'yes' && brick_qode_options()->getOptionValue( 'vertical_menu_inside_paspartu' ) == 'yes' ) ) {
				$classes[] = 'paspartu_on_bottom_fixed';
			}
			
			if ( brick_qode_options()->getOptionValue( 'vertical_area' ) == 'yes' && brick_qode_options()->getOptionValue( 'vertical_menu_inside_paspartu' ) == 'no' ) {
				$classes[] = 'vertical_menu_outside_paspartu';
			}
			
			if ( brick_qode_options()->getOptionValue( 'vertical_area' ) == 'yes' && brick_qode_options()->getOptionValue( 'vertical_menu_inside_paspartu' ) == 'yes' ) {
				$classes[] = 'vertical_menu_inside_paspartu';
			}
		}
		
		if ( brick_qode_options()->getOptionValue( 'transparent_content' ) == 'yes' ) {
			$classes[] = 'transparent_content';
		}
		
		if ( brick_qode_options()->getOptionValue( 'enable_popup_menu' ) == 'yes' && brick_qode_options()->getOptionValue( 'popup_menu_animation_style' ) ) {
			$classes[] = brick_qode_options()->getOptionValue( 'popup_menu_animation_style' );
		}
		
		if ( brick_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) {
			$classes[] = 'overlapping_content';
		}
		
		if ( brick_qode_options()->getOptionValue( 'content_predefined_width' ) !== '' ) {
			$classes[] = brick_qode_options()->getOptionValue( 'content_predefined_width' );
		}
		
		$header_bottom_appearance = brick_qode_options()->getOptionValue( 'header_bottom_appearance' );
		if ( $header_bottom_appearance == "stick" || $header_bottom_appearance == "stick menu_bottom" || $header_bottom_appearance == "stick_with_left_right_menu" ) {
			if ( get_post_meta( $page_id, "qode_page_hide_initial_sticky", true ) == 'yes' ) {
				$classes[] = 'hide_inital_sticky';
			} else if ( brick_qode_options()->getOptionValue( 'hide_initial_sticky' ) == 'yes' ) {
				$classes[] = 'hide_inital_sticky';
			}
		}
		
		if ( brick_qode_options()->getOptionValue( 'enable_side_area' ) == 'yes' ) {
			if ( brick_qode_options()->getOptionValue( 'side_area_type' ) == 'side_menu_slide_from_right' ) {
				$classes[] = 'side_menu_slide_from_right';
			} else if ( brick_qode_options()->getOptionValue( 'side_area_type' ) == 'side_menu_slide_with_content' ) {
				$classes[] = 'side_menu_slide_with_content';
				$classes[] = brick_qode_options()->getOptionValue( 'side_area_slide_with_content_width' );
			} else if( brick_qode_options()->getOptionValue( 'side_area_type' ) == 'side_area_uncovered_from_content' ) {
				$classes[] = 'side_area_uncovered_from_content';
			}
		}
		
		if ( brick_qode_options()->getOptionValue( 'vertical_area' ) == 'yes' ) {
			$classes[] = 'vertical_menu_enabled';
			
			//left menu type class?
			if ( brick_qode_options()->getOptionValue( 'vertical_area_type' ) != '' ) {
				switch ( brick_qode_options()->getOptionValue( 'vertical_area_type' ) ) {
					case 'hidden':
						$classes[] = 'vertical_menu_hidden';
						
						if ( brick_qode_options()->getOptionValue( 'vertical_logo_bottom' ) !== '' ) {
							$classes[] = 'vertical_menu_hidden_with_logo';
						}
						break;
					
					case 'hidden_with_icons':
						$classes[] = 'vertical_menu_hidden vertical_menu_hidden_with_icons';
						
						if ( brick_qode_options()->getOptionValue( 'vertical_logo_bottom' ) !== '' ) {
							$classes[] = 'vertical_menu_hidden_with_logo';
						}
						break;
				}
			}
			
			if ( brick_qode_options()->getOptionValue( 'vertical_area_position' ) == 'right' ) {
				$classes[] = 'vertical_menu_right';
			} elseif ( brick_qode_options()->getOptionValue( 'vertical_area_position' ) == 'left' ) {
				$classes[] = 'vertical_menu_left';
			}
			
			if ( brick_qode_options()->getOptionValue( 'vertical_area_width' ) == 'width_350' ) {
				$classes[] = 'vertical_menu_width_350';
			} elseif ( brick_qode_options()->getOptionValue( 'vertical_area_width' ) == 'width_400' ) {
				$classes[] = 'vertical_menu_width_400';
			} else {
				$classes[] = 'vertical_menu_width_290';
			}
		}
		
		if ( brick_qode_options()->getOptionValue( 'vertical_area_transparency' ) == 'yes' && get_post_meta( $page_id, "qode_page_vertical_area_transparency", true ) != "no" && brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side" ) {
			$classes[] = 'vertical_menu_transparency vertical_menu_transparency_on';
		} else if ( get_post_meta( $page_id, "qode_page_vertical_area_transparency", true ) == "yes" && brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side" ) {
			$classes[] = 'vertical_menu_transparency vertical_menu_transparency_on';
		}
		
		if ( brick_qode_options()->getOptionValue( 'vertical_area_background_transparency' ) !== '' && brick_qode_options()->getOptionValue( 'vertical_area_background_transparency' ) !== '1' && get_post_meta( $page_id, "qode_page_vertical_area_background_opacity", true ) == "" && brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side" && brick_qode_options()->getOptionValue( 'vertical_menu_inside_paspartu' ) == 'yes' ) {
			$classes[] = 'vertical_menu_background_opacity';
		} else if ( get_post_meta( $page_id, "qode_page_vertical_area_background_opacity", true ) !== "" && get_post_meta( $page_id, "qode_page_vertical_area_background_opacity", true ) !== "1" && brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side" ) {
			$classes[] = 'vertical_menu_background_opacity';
		}
		
		if ( brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "to_content" ) {
			$classes[] = 'vertical_menu_with_scroll';
		}
		
		if ( get_post_meta( $page_id, "qode_full_screen_sections_on_small_screens", true ) == 'yes' ) {
			$classes[] = 'enable_full_screen_sections_on_small_screens';
		} else if ( brick_qode_options()->getOptionValue( 'full_screen_sections_on_small_screens' ) == 'yes' ) {
			$classes[] = 'enable_full_screen_sections_on_small_screens';
		}
		
		if ( brick_qode_is_woocommerce_installed() ) {
			$products_list_number = 'columns-3';
			if ( brick_qode_options()->getOptionValue( 'woo_products_list_number' ) ) {
				$products_list_number = brick_qode_options()->getOptionValue( 'woo_products_list_number' );
			}
			
			$classes[] = $products_list_number;
			
			if ( brick_qode_options()->getOptionValue( 'woo_products_list_type' ) ) {
				$classes[] = brick_qode_options()->getOptionValue( 'woo_products_list_type' );
			}
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'brick_qode_add_helpers_class' );
}