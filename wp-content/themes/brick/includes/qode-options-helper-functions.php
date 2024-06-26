<?php

if(!function_exists('brick_qode_get_header_options')) {
    /**
     * Returns an array containing variables needed in header.php
     * @return array
     */
    function brick_qode_get_header_options() {
        $id = brick_qode_get_page_id();
        $enable_side_area = brick_qode_is_side_area_enabled();
        $enable_popup_menu = brick_qode_is_fullscreen_menu_enabled();
        $popup_menu_animation_style = '';
        $enable_fullscreen_search = 'no';
        $fullscreen_search_animation = 'fade';
        $enable_vertical_menu = brick_qode_is_vertical_menu_enabled();
        $header_button_size = '';
        $header_in_grid = brick_qode_is_header_in_grid();
        $header_bottom_class = ' header_in_grid';
        $menu_item_icon_position = '';
        $menu_position = '';
        $centered_logo = brick_qode_is_logo_centered();
        $enable_border_top_bottom_menu = false;
        $menu_dropdown_appearance_class = '';
        $logo_wrapper_style = '';
        $divided_left_menu_padding = '';
        $divided_right_menu_padding = '';
        $display_header_top = 'yes';
        $header_top_area_scroll = 'no';
        $header_style = brick_qode_get_header_style();
        $header_color_transparency_per_page = brick_qode_get_header_bg_transparency();
        $header_color_per_page = brick_qode_get_header_bottom_bg_color();
        $header_top_color_per_page = brick_qode_get_header_top_bg_color();
        $header_color_transparency_on_scroll = '';
        $header_bottom_border_style = '';
        $header_bottom_appearance = 'fixed';
        $header_transparency = brick_qode_get_header_bg_transparency();
        $vertical_area_background_image = '';
        $vertical_menu_style = brick_qode_get_vertical_menu_style();
        $vertical_area_scroll = " with_scroll";
        $page_vertical_area_background_transparency = brick_qode_get_vertical_area_bg_transparency();
        $page_vertical_area_background = brick_qode_get_vertical_area_bg_color();

        if ( !empty(brick_qode_options()->getOptionValue( 'popup_menu_animation_style' ))) {
            $popup_menu_animation_style = brick_qode_options()->getOptionValue( 'popup_menu_animation_style' );
        }

        if(brick_qode_is_search_enabled() && brick_qode_options()->getOptionValue( 'search_type' ) == 'fullscreen_search') {
            $enable_fullscreen_search = 'yes';

            if(brick_qode_options()->getOptionValue( 'search_animation' ) !== '') {
                $fullscreen_search_animation = brick_qode_options()->getOptionValue( 'search_animation' );
            }
        }

        if(brick_qode_options()->getOptionValue( 'header_buttons_size' )){
            $header_button_size = brick_qode_options()->getOptionValue( 'header_buttons_size' );
        }

        if(!brick_qode_is_header_in_grid()) {
            $header_bottom_class = ' header_full_width';
        }

        if(brick_qode_options()->getOptionValue( 'menu_item_icon_position' )) {
            $menu_item_icon_position = brick_qode_options()->getOptionValue( 'menu_item_icon_position' );
        }

        if(brick_qode_options()->getOptionValue( 'menu_position' )) {
            $menu_position = brick_qode_options()->getOptionValue( 'menu_position' );
        }

        if(brick_qode_options()->getOptionValue( 'enable_border_top_bottom_menu' ) == "yes") {
            $enable_border_top_bottom_menu = true;
        }

        if( brick_qode_options()->getOptionValue( 'menu_dropdown_appearance' ) != "default"){
            $menu_dropdown_appearance_class = brick_qode_options()->getOptionValue( 'menu_dropdown_appearance' );
        }

        if( brick_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "stick_with_left_right_menu"){
            $logo_wrapper_style = 'width:'.(esc_attr(brick_qode_options()->getOptionValue( 'logo_width' ))/2).'px;';
            $divided_left_menu_padding = 'padding-right:'.(esc_attr(brick_qode_options()->getOptionValue( 'logo_width' ))/4).'px;';
            $divided_right_menu_padding = 'padding-left:'.(esc_attr(brick_qode_options()->getOptionValue( 'logo_width' ))/4).'px;';
        }
        if(brick_qode_options()->getOptionValue( 'center_logo_image' ) == "yes" && brick_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "regular"){
            $logo_wrapper_style = 'height:'.(esc_attr(brick_qode_options()->getOptionValue( 'logo_height' ))/2).'px;';
        }

        if( brick_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_top_header"){
            $logo_wrapper_style = 'height:'.(esc_attr(brick_qode_options()->getOptionValue( 'logo_height' ))/2).'px;';
        }

        if(brick_qode_options()->getOptionValue( 'header_top_area' )){
            $display_header_top = brick_qode_options()->getOptionValue( 'header_top_area' );
        }

        if(brick_qode_options()->getOptionValue( 'header_top_area_scroll' )){
            $header_top_area_scroll = brick_qode_options()->getOptionValue( 'header_top_area_scroll' );
        }

        if( brick_qode_options()->getOptionValue( 'header_background_transparency_sticky' ) != ""){
            $header_color_transparency_on_scroll = brick_qode_options()->getOptionValue( 'header_background_transparency_sticky' );
        }

        if( brick_qode_options()->getOptionValue( 'header_botom_border_in_grid' ) == "yes" && get_post_meta($id, "qode_header_bottom_border_color", true) != ""){
            $header_bottom_border_style = 'border-bottom: 1px solid '.esc_attr(get_post_meta($id, "qode_header_bottom_border_color", true)).';';
        }

        if(brick_qode_options()->getOptionValue( 'header_bottom_appearance' )){
            $header_bottom_appearance = brick_qode_options()->getOptionValue( 'header_bottom_appearance' );
        }

        if( brick_qode_options()->getOptionValue( 'vertical_area_background_image' ) != "" &&  brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side") {
            $vertical_area_background_image = brick_qode_options()->getOptionValue( 'vertical_area_background_image' );
        }
        if(get_post_meta($id, "qode_page_vertical_area_background_image", true) != "" &&  brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side"){
            $vertical_area_background_image = get_post_meta($id, "qode_page_vertical_area_background_image", true);
        }

        $vertical_area_dropdown_showing = brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' );
        if ($vertical_area_dropdown_showing == 'to_content') {
            $vertical_area_scroll = "";
        }

        return array(
            'id' => $id,
            'enable_side_area' => $enable_side_area,
            'enable_popup_menu' => $enable_popup_menu,
            'popup_menu_animation_style' => $popup_menu_animation_style,
            'enable_fullscreen_search' => $enable_fullscreen_search,
            'fullscreen_search_animation' => $fullscreen_search_animation,
            'enable_vertical_menu' => $enable_vertical_menu,
            'header_button_size' => $header_button_size,
            'header_in_grid' => $header_in_grid,
            'header_bottom_class' => $header_bottom_class,
            'menu_item_icon_position' => $menu_item_icon_position,
            'menu_position' => $menu_position,
            'centered_logo' => $centered_logo,
            'enable_border_top_bottom_menu' => $enable_border_top_bottom_menu,
            'menu_dropdown_appearance_class' => $menu_dropdown_appearance_class,
            'logo_wrapper_style' => $logo_wrapper_style,
            'divided_left_menu_padding' => $divided_left_menu_padding,
            'divided_right_menu_padding' => $divided_right_menu_padding,
            'display_header_top' => $display_header_top,
            'header_top_area_scroll' => $header_top_area_scroll,
            'header_style' => $header_style,
            'header_color_transparency_per_page' => $header_color_transparency_per_page,
            'header_color_per_page' => $header_color_per_page,
            'header_top_color_per_page' => $header_top_color_per_page,
            'header_color_transparency_on_scroll' => $header_color_transparency_on_scroll,
            'header_bottom_border_style' => $header_bottom_border_style,
            'header_bottom_appearance' => $header_bottom_appearance,
            'header_transparency' => $header_transparency,
            'vertical_area_background_image' => $vertical_area_background_image,
            'vertical_menu_style' => $vertical_menu_style,
            'vertical_area_scroll' => $vertical_area_scroll,
            'page_vertical_area_background_transparency'=> $page_vertical_area_background_transparency,
            'page_vertical_area_background' => $page_vertical_area_background
        );
    }
}

if ( ! function_exists( 'brick_qode_get_footer_options' ) ) {
	function brick_qode_get_footer_options() {
		$footer_classes_array              = array();
		$footer_classes                    = '';
		$footer_border_columns             = 'yes';
		$footer_top_border_color           = '';
		$footer_top_border_in_grid         = '';
		$footer_bottom_border_color        = '';
		$footer_bottom_border_bottom_color = '';
		$footer_bottom_border_in_grid      = '';
		$footer_in_grid                    = true;
		$footer_top_columns                = 4;
		$footer_bottom_columns             = 3;
		
		if ( brick_qode_options()->getOptionValue( 'footer_border_columns' ) !== '' ) {
			$footer_border_columns = brick_qode_options()->getOptionValue( 'footer_border_columns' );
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_top_border_color' ) ) {
			if ( brick_qode_options()->getOptionValue( 'footer_top_border_width' ) !== '' ) {
				$footer_border_height = brick_qode_options()->getOptionValue( 'footer_top_border_width' );
			} else {
				$footer_border_height = '1';
			}
			$footer_top_border_color = 'height: ' . esc_attr( $footer_border_height ) . 'px;background-color: ' . esc_attr( brick_qode_options()->getOptionValue( 'footer_top_border_color' ) ) . ';';
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_top_border_in_grid' ) == 'yes' ) {
			$footer_top_border_in_grid = 'in_grid';
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_bottom_border_color' ) ) {
			if ( brick_qode_options()->getOptionValue( 'footer_bottom_border_width' ) ) {
				$footer_bottom_border_width = brick_qode_options()->getOptionValue( 'footer_bottom_border_width' ) . 'px';
			} else {
				$footer_bottom_border_width = '1px';
			}
			
			$footer_bottom_border_color = 'height: ' . esc_attr( $footer_bottom_border_width ) . ';background-color: ' . esc_attr( brick_qode_options()->getOptionValue( 'footer_bottom_border_color' ) ) . ';';
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_bottom_border_in_grid' ) == 'yes' ) {
			$footer_bottom_border_in_grid = 'in_grid';
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_bottom_border_bottom_color' ) ) {
			if ( brick_qode_options()->getOptionValue( 'footer_bottom_border_bottom_width' ) ) {
				$footer_bottom_border_bottom_width = brick_qode_options()->getOptionValue( 'footer_bottom_border_bottom_width' ) . 'px';
			} else {
				$footer_bottom_border_bottom_width = '1px';
			}
			
			$footer_bottom_border_bottom_color = 'height: ' . esc_attr( $footer_bottom_border_bottom_width ) . ';background-color: ' . esc_attr( brick_qode_options()->getOptionValue( 'footer_bottom_border_bottom_color' ) ) . ';';
		}
		
		//is uncovering footer option set in theme options?
		if ( brick_qode_options()->getOptionValue( 'uncovering_footer' ) == "yes" && brick_qode_options()->getOptionValue( 'paspartu' ) == 'no' ) {
			//add uncovering footer class to array
			$footer_classes_array[] = 'uncover';
		}
		
		if ( get_post_meta( brick_qode_get_page_id(), "qode_footer-disable", true ) == "yes" ) {
			$footer_classes_array[] = 'disable_footer';
		}
		
		if ( $footer_border_columns == 'yes' ) {
			$footer_classes_array[] = 'footer_border_columns';
		}
		
		if( brick_qode_options()->getOptionValue( 'paspartu' ) == 'yes' && brick_qode_options()->getOptionValue( 'paspartu_footer_alignment' ) == 'yes' ){
			$footer_classes_array[]= 'paspartu_footer_alignment';
		}
		
		//is some class added to footer classes array?
		if ( is_array( $footer_classes_array ) && count( $footer_classes_array ) ) {
			//concat all classes and prefix it with class attribute
			$footer_classes = esc_attr( implode( ' ', $footer_classes_array ) );
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_in_grid' ) != "yes" ) {
			$footer_in_grid = false;
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_top_columns' ) ) {
			$footer_top_columns = brick_qode_options()->getOptionValue( 'footer_top_columns' );
		}
		
		if ( brick_qode_options()->getOptionValue( 'footer_bottom_columns' ) ) {
			$footer_bottom_columns = brick_qode_options()->getOptionValue( 'footer_bottom_columns' );
		}
		
		return array(
			'footer_border_columns'             => $footer_border_columns,
			'footer_top_border_color'           => $footer_top_border_color,
			'footer_top_border_in_grid'         => $footer_top_border_in_grid,
			'footer_bottom_border_color'        => $footer_bottom_border_color,
			'footer_bottom_border_in_grid'      => $footer_bottom_border_in_grid,
			'footer_bottom_border_bottom_color' => $footer_bottom_border_bottom_color,
			'footer_classes'                    => $footer_classes,
			'display_footer_text'               => brick_qode_is_footer_bottom_enabled(),
			'footer_in_grid'                    => $footer_in_grid,
			'display_footer_top'                => brick_qode_is_footer_top_enabled(),
			'footer_top_columns'                => $footer_top_columns,
			'footer_bottom_columns'             => $footer_bottom_columns
		);
	}
}

if ( ! function_exists( 'brick_qode_is_footer_top_enabled' ) ) {
	function brick_qode_is_footer_top_enabled() {
		$footer_top_flag = false;
		
		//check value from options and meta field on current page
		$option_flag = true;
		if ( brick_qode_options()->getOptionValue( 'show_footer_top' ) == "no" ) {
			$option_flag = false;
		}
		
		//check footer columns.If they are empty, disable footer top
		$columns_flag = false;
		for ( $i = 1; $i <= 4; $i ++ ) {
			$footer_columns_id = 'footer_column_' . $i;
			if ( is_active_sidebar( $footer_columns_id ) ) {
				$columns_flag = true;
				break;
			}
		}
		
		if ( $option_flag && $columns_flag ) {
			$footer_top_flag = true;
		}
		
		return $footer_top_flag;
	}
}

if ( ! function_exists( 'brick_qode_is_footer_bottom_enabled' ) ) {
	function brick_qode_is_footer_bottom_enabled() {
		$footer_bottom_flag = false;
		
		//check value from options and meta field on current page
		$option_flag = true;
		if ( brick_qode_options()->getOptionValue( 'footer_text' ) == "no" ) {
			$option_flag = false;
		}
		
		//check footer columns.If they are empty, disable footer top
		$columns_flag = false;
		if ( is_active_sidebar( 'footer_text' ) || is_active_sidebar( 'footer_bottom_left' ) || is_active_sidebar( 'footer_bottom_right' ) ) {
			$columns_flag = true;
		}
		
		if ( $option_flag && $columns_flag ) {
			$footer_bottom_flag = true;
		}
		
		return $footer_bottom_flag;
	}
}

if ( ! function_exists( 'brick_qode_is_loading_anim_enabled' ) ) {
	/**
	 * Checks if loading animation is enabled in theme options or not
	 * @return bool
	 */
	function brick_qode_is_loading_anim_enabled() {
		return brick_qode_options()->getOptionValue( 'loading_animation' ) && brick_qode_options()->getOptionValue( 'loading_animation' ) == "off" ? false : true;
	}
}

if ( ! function_exists( 'brick_qode_get_loading_image' ) ) {
	/**
	 * Checks if loading image for loading animation is set
	 * @return string
	 */
	function brick_qode_get_loading_image() {
		return brick_qode_options()->getOptionValue( 'loading_image' ) != "" ? brick_qode_options()->getOptionValue( 'loading_image' ) : '';
	}
}

if(!function_exists('brick_qode_is_side_area_enabled')) {
    /**
     * Checks if side area is enabled or not
     * @return string
     */
    function brick_qode_is_side_area_enabled() {
        $enable_side_area = brick_qode_options()->getOptionValue( 'enable_side_area' ) == "no" ? "no" : "yes";

        return $enable_side_area;
    }
}

if(!function_exists('brick_qode_is_fullscreen_menu_enabled')) {
    /**
     * Checks if fullscreen menu is enabled or not
     * @return string
     */
    function brick_qode_is_fullscreen_menu_enabled() {
        $enable_popup_menu = "no";

        if(brick_qode_options()->getOptionValue( 'enable_popup_menu' ) == "yes" && has_nav_menu('popup-navigation')) {
            $enable_popup_menu = "yes";
        }

        return $enable_popup_menu;
    }
}

if(!function_exists('brick_qode_is_search_enabled')) {
    /**
     * Checks if search functionality is enabled
     * @return bool
     */
    function brick_qode_is_search_enabled() {
        return brick_qode_options()->getOptionValue( 'enable_search' ) == 'yes';
    }
}

if(!function_exists('brick_qode_is_vertical_menu_enabled')) {
    /**
     * Checks if vertical menu is enabled
     * @return bool
     */
    function brick_qode_is_vertical_menu_enabled() {
        return brick_qode_options()->getOptionValue( 'vertical_area' ) =='yes';
    }
}

if(!function_exists('brick_qode_is_header_paspartu_aligned')) {
    /**
     * Checks if header is aligned with paspartu
     * @return bool
     */
    function brick_qode_is_header_paspartu_aligned() {
        return brick_qode_options()->getOptionValue( 'paspartu_header_alignment' ) == 'yes' && brick_qode_is_paspartu_enabled();
    }
}

if(!function_exists('brick_qode_is_paspartu_enabled')) {
    /**
     * Checks if paspartu is enabled
     * @return bool
     */
    function brick_qode_is_paspartu_enabled() {
        return brick_qode_options()->getOptionValue( 'paspartu' ) == 'yes';
    }
}

if(!function_exists('brick_qode_is_header_in_grid')) {
    /**
     * Checks if header is in grid. If header is aligned with paspartu it returns false
     * @return bool
     *
     * @see brick_qode_is_header_paspartu_aligned()
     */
    function brick_qode_is_header_in_grid() {
        if(brick_qode_is_header_paspartu_aligned()) {
            return false;
        }

        return brick_qode_options()->getOptionValue( 'header_in_grid' ) == "no" ? false : true;
    }
}

if(!function_exists('brick_qode_is_logo_centered')) {
    /**
     * Checks if logo is centered
     * @return bool
     */
    function brick_qode_is_logo_centered() {
        if(brick_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_hiding"
            || brick_qode_options()->getOptionValue( 'center_logo_image' ) == "yes" && brick_qode_options()->getOptionValue( 'header_bottom_appearance' ) !== "stick_with_left_right_menu") {
            return true;
        }

        return false;
    }
}

if(!function_exists('brick_qode_get_header_style')) {
    /**
     * Returns header style on current page
     * @return mixed|string
     */
    function brick_qode_get_header_style() {
        $id = brick_qode_get_page_id();
        $header_style = '';

        if(get_post_meta($id, "qode_header-style", true) != ""){
            $header_style = get_post_meta($id, "qode_header-style", true);
        }else if(brick_qode_options()->getOptionValue( 'header_style' )){
            $header_style = brick_qode_options()->getOptionValue( 'header_style' );
        }

        return $header_style;
    }
}

if(!function_exists('brick_qode_get_header_bg_transparency')) {
    /**
     * Returns header background color transparency on current page
     * @return string|void
     */
    function brick_qode_get_header_bg_transparency() {
        $id = brick_qode_get_page_id();
        $header_color_transparency_per_page = '';

        if(brick_qode_options()->getOptionValue( 'header_background_transparency_initial' ) != "") {
            $header_color_transparency_per_page = esc_attr(brick_qode_options()->getOptionValue( 'header_background_transparency_initial' ));
        }
        if(get_post_meta($id, "qode_header_color_transparency_per_page", true) != ""){
            $header_color_transparency_per_page = esc_attr(get_post_meta($id, "qode_header_color_transparency_per_page", true));
        }

        return $header_color_transparency_per_page;
    }
}

if(!function_exists('brick_qode_get_header_bottom_bg_color')) {
    /**
     * Returns header bottom background color on current page
     * @return string
     */
    function brick_qode_get_header_bottom_bg_color() {
        $id = brick_qode_get_page_id();
        $header_color_transparency_per_page = brick_qode_get_header_bg_transparency();
        $header_color_per_page = '';

        if(get_post_meta($id, "qode_header_color_per_page", true) != ""){
            if($header_color_transparency_per_page != ""){
                $header_background_color = brick_qode_hex2rgb(esc_attr(get_post_meta($id, "qode_header_color_per_page", true)));
                $header_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
            }else{
                $header_color_per_page .= "background-color:" . esc_attr(get_post_meta($id, "qode_header_color_per_page", true)) . ";";
            }
        } else if($header_color_transparency_per_page != "" && get_post_meta($id, "qode_header_color_per_page", true) == ""){
            $header_background_color = brick_qode_options()->getOptionValue( 'header_background_color' ) ? brick_qode_hex2rgb(esc_attr(brick_qode_options()->getOptionValue( 'header_background_color' ))) : brick_qode_hex2rgb("#ffffff");
            $header_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
        }

        if( brick_qode_options()->getOptionValue( 'header_botom_border_in_grid' ) != "yes" && get_post_meta($id, "qode_header_bottom_border_color", true) != ""){
            $header_color_per_page .= "border-bottom: 1px solid ".esc_attr(get_post_meta($id, "qode_header_bottom_border_color", true)).";";
        }

        return $header_color_per_page;
    }
}

if(!function_exists('brick_qode_get_header_top_bg_color')) {
    /**
     * Returns header top background color on current page
     * @return string
     */
    function brick_qode_get_header_top_bg_color() {
        $id = brick_qode_get_page_id();
        $header_color_transparency_per_page = brick_qode_get_header_bg_transparency();
        $header_top_color_per_page = '';

        if(get_post_meta($id, "qode_header_color_per_page", true) != ""){
            if($header_color_transparency_per_page != ""){
                $header_background_color = brick_qode_hex2rgb(esc_attr(get_post_meta($id, "qode_header_color_per_page", true)));
                $header_top_color_per_page .= "background-color:rgba(" . esc_attr($header_background_color[0]) . ", " . esc_attr($header_background_color[1]) . ", " . esc_attr($header_background_color[2]) . ", " . esc_attr($header_color_transparency_per_page) . ");";
            }else{
                $header_top_color_per_page .= "background-color:" . esc_attr(get_post_meta($id, "qode_header_color_per_page", true)) . ";";
            }
        } else if($header_color_transparency_per_page != "" && get_post_meta($id, "qode_header_color_per_page", true) == ""){
            $header_background_color = brick_qode_options()->getOptionValue( 'header_top_background_color' ) ? brick_qode_hex2rgb(esc_attr(brick_qode_options()->getOptionValue( 'header_top_background_color' ))) : brick_qode_hex2rgb("#ffffff");
            $header_top_color_per_page .= "background-color:rgba(" . esc_attr($header_background_color[0]) . ", " . esc_attr($header_background_color[1]) . ", " . esc_attr($header_background_color[2]) . ", " . esc_attr($header_color_transparency_per_page) . ");";
        }

        return $header_top_color_per_page;
    }
}

if(!function_exists('brick_qode_get_vertical_menu_style')) {
    /**
     * Returns vertical menu opening style
     * @return string
     */
    function brick_qode_get_vertical_menu_style() {
        $vertical_area_dropdown_showing = brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' );
        $vertical_menu_style = '';

        switch($vertical_area_dropdown_showing){
            case 'hover':
                $vertical_menu_style = "toggle";
                break;
            case 'click':
                $vertical_menu_style = "toggle click";
                break;
            case 'side':
                $vertical_menu_style = "side";
                break;
            case 'to_content':
                $vertical_menu_style = "to_content";
                break;
            default:
                $vertical_menu_style = "toggle";
        }

        return $vertical_menu_style;
    }
}

if(!function_exists('brick_qode_get_vertical_area_bg_transparency')) {
    /**
     * Returns vertical area background color transparency on current page
     * @return int|mixed|string
     */
    function brick_qode_get_vertical_area_bg_transparency() {
        $id = brick_qode_get_page_id();
        $page_vertical_area_background_transparency = '';

        if(brick_qode_is_paspartu_enabled() && 
            brick_qode_options()->getOptionValue( 'vertical_menu_inside_paspartu' ) == 'yes'){
            if(brick_qode_options()->getOptionValue( 'vertical_area_background_transparency' ) != "") {
                $page_vertical_area_background_transparency = brick_qode_options()->getOptionValue( 'vertical_area_background_transparency' );
            }
            if(get_post_meta($id, "qode_page_vertical_area_background_opacity", true) != ""){
                $page_vertical_area_background_transparency = get_post_meta($id, "qode_page_vertical_area_background_opacity", true);
            }

            if( brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) == "side"){
                $page_vertical_area_background_transparency = 1;
            }
        }
        else if(!brick_qode_is_paspartu_enabled()){
            if(brick_qode_options()->getOptionValue( 'vertical_area_background_transparency' ) != "") {
                $page_vertical_area_background_transparency = brick_qode_options()->getOptionValue( 'vertical_area_background_transparency' );
            }
            if(get_post_meta($id, "qode_page_vertical_area_background_opacity", true) != ""){
                $page_vertical_area_background_transparency = get_post_meta($id, "qode_page_vertical_area_background_opacity", true);
            }

            if( brick_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) == "side"){
                $page_vertical_area_background_transparency = 1;
            }
        }

        return $page_vertical_area_background_transparency;
    }
}

if(!function_exists('brick_qode_get_vertical_area_bg_color')) {
    /**
     * Returns vertical area background color on current page
     * @return string
     */
    function brick_qode_get_vertical_area_bg_color() {
        $id = brick_qode_get_page_id();
        $page_vertical_area_background_transparency = brick_qode_get_vertical_area_bg_transparency();
        $page_vertical_area_background = '';

        if(get_post_meta($id, "qode_page_vertical_area_background", true) != ""){
            if($page_vertical_area_background_transparency != ""){
                $vertical_area_background_color = brick_qode_hex2rgb(esc_attr(get_post_meta($id, "qode_page_vertical_area_background", true)));
                $page_vertical_area_background = 'background-color:rgba(' . $vertical_area_background_color[0] . ', ' . $vertical_area_background_color[1] . ', ' . $vertical_area_background_color[2] . ', ' . $page_vertical_area_background_transparency . ');';
            }else{
                $page_vertical_area_background = 'background-color:' . esc_attr(get_post_meta($id, 'qode_page_vertical_area_background', true)) . ';';
            }

        }else if($page_vertical_area_background_transparency != "" && get_post_meta($id, "qode_page_vertical_area_background", true) == ""){
            $vertical_area_background_color = brick_qode_options()->getOptionValue( 'vertical_area_background' ) ? brick_qode_hex2rgb(esc_attr(brick_qode_options()->getOptionValue( 'vertical_area_background' ))) : brick_qode_hex2rgb("#ffffff");
            $page_vertical_area_background = 'background-color:rgba(' . esc_attr($vertical_area_background_color[0]) . ', ' . esc_attr($vertical_area_background_color[1]) . ', ' . esc_attr($vertical_area_background_color[2]) . ', ' . esc_attr($page_vertical_area_background_transparency) . ');';
        }

        return $page_vertical_area_background;
    }
}