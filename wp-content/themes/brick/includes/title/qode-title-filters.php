<?php

if(!function_exists('brick_qode_title_classes')) {
	/**
	 * Function that adds classes to title div.
	 * All other functions are tied to it with add_filter function
	 * @param array $classes array of classes
	 */
	function brick_qode_title_classes($classes = array()) {
		$classes = array();
		$classes = apply_filters('brick_qode_filter_title_classes', $classes);

		if(is_array($classes) && count($classes)) {
			echo implode(' ', $classes);
		}
	}
}

if(!function_exists('brick_qode_title_position_class')) {
	/**
	 * Function that adds class on title based on title position option
	 * Could be left, centered or right
	 * @param $classes original array of classes
	 * @return array changed array of classes
	 */
	function brick_qode_title_position_class($classes) {
		//init variables
		$id 			= brick_qode_get_page_id();
		$title_position = 'left';

		if(get_post_meta($id, "qode_page_title_position", true) != "") {
			$title_position = get_post_meta($id, "qode_page_title_position", true);

		} else {
			$title_position = brick_qode_options()->getOptionValue( 'page_title_position' );
		}

		$classes[] = 'position_'.$title_position;

		return $classes;
	}

	add_filter('brick_qode_filter_title_classes', 'brick_qode_title_position_class');
}

if(!function_exists('brick_qode_title_background_image_classes')) {
	function brick_qode_title_background_image_classes($classes) {
		//init variables
		$id 					= brick_qode_get_page_id();
		$is_img_responsive 		= '';
		$is_image_fixed			= '';
		$is_image_fixed_array 	= array('yes', 'yes_zoom');
		$show_title_img			= true;
		$title_img				= '';

		//is responsive image is set for current page?
		if(get_post_meta($id, "qode_responsive-title-image", true) != "") {
			$is_img_responsive = get_post_meta($id, "qode_responsive-title-image", true);
		} else {
			//take value from theme options
			$is_img_responsive = brick_qode_options()->getOptionValue( 'responsive_title_image' );
		}

		//is title image chosen for current page?
		if(get_post_meta($id, "qode_title-image", true) != ""){
			$title_img = get_post_meta($id, "qode_title-image", true);
		}else{
			//take image that is set in theme options
			$title_img = brick_qode_options()->getOptionValue( 'title_image' );
		}

		//is image set to be fixed for current page?
		if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
			$is_image_fixed = get_post_meta($id, "qode_fixed-title-image", true);
		}else{
			//take setting from theme options
			$is_image_fixed = brick_qode_options()->getOptionValue( 'fixed_title_image' );
		}

		//is title image hidden for current page?
		if(get_post_meta($id, "qode_show-page-title-image", true) == "yes") {
			$show_title_img = false;
		}

		//is title image set and visible?
		if($title_img !== '' && $show_title_img == true) {
			//is image not responsive and parallax title is set?
            $classes[] = 'preload_background';

            if($is_img_responsive == 'no' && in_array($is_image_fixed, $is_image_fixed_array)) {
				$classes[] = 'has_fixed_background';

				if($is_image_fixed == 'yes_zoom') {
					$classes[] = 'zoom_out';
				}
			}
			//is image not responsive and parallax title isn't set?
			elseif($is_img_responsive == 'no') {
				$classes[] = 'has_background';
			}
		}

		return $classes;
	}

	add_filter('brick_qode_filter_title_classes', 'brick_qode_title_background_image_classes');
}

if(!function_exists('brick_qode_title_text_is_hidden_class')) {
	function brick_qode_title_text_is_hidden_class($classes) {
		$is_title_text_visible = true;

		//init variables
		$id = brick_qode_get_page_id();
		
		if(get_post_meta($id, "qode_show_page_title_text", true) == 'yes') {
			$is_title_text_visible = true;
		} elseif(get_post_meta($id, "qode_show_page_title_text", true) == 'no') {
			$is_title_text_visible = false;
		} elseif(get_post_meta($id, "qode_show_page_title_text", true) == '' && ( brick_qode_options()->getOptionValue( 'show_page_title_text' ) == 'yes')) {
			$is_title_text_visible = true;
		} elseif(get_post_meta($id, "qode_show_page_title_text", true) == '' && ( brick_qode_options()->getOptionValue( 'show_page_title_text' ) == 'no')) {
			$is_title_text_visible = false;
		} elseif( brick_qode_options()->getOptionValue( 'show_page_title_text' ) == 'yes') {
			$is_title_text_visible = true;
		}

		if(!$is_title_text_visible) {
			$classes[] = 'without_title_text';
		}

		return $classes;
	}

	add_filter('brick_qode_filter_title_classes', 'brick_qode_title_text_is_hidden_class');
}


if(!function_exists('brick_qode_title_breadcrumb_type_class')) {
    function brick_qode_title_breadcrumb_type_class($classes) {
        //init variables
	    $id = brick_qode_get_page_id();

        $title_type = "standard_title";
        if(get_post_meta($id, "qode_page_title_type", true) != ""){
            $title_type = get_post_meta($id, "qode_page_title_type", true);
        }else if(is_404()){
            $title_type = "breadcrumbs_title";
        }else{
            $title_type = brick_qode_options()->getOptionValue( 'title_type' );
        }

        $classes[] = $title_type;

        return $classes;
    }

    add_filter('brick_qode_filter_title_classes', 'brick_qode_title_breadcrumb_type_class');
}

if(!function_exists('brick_qode_title_background_color_class')) {
	function brick_qode_title_background_color_class($classes) {
		//init variables
		$id = brick_qode_get_page_id();
		$title_image	= '';
		$title_bg_color = '';

		//is title image chosen for current page?
		if(get_post_meta($id, "qode_title-image", true) != ""){
			$title_img = get_post_meta($id, "qode_title-image", true);
		}else{
			//take image that is set in theme options
			$title_img = brick_qode_options()->getOptionValue( 'title_image' );
		}

		//is title background color set?
		if(get_post_meta($id, "qode_page-title-background-color", true) != ""){
			$title_bg_color = get_post_meta($id, "qode_page-title-background-color", true);
		}else{
			//take background color from
			$title_bg_color = brick_qode_options()->getOptionValue( 'title_background_color' );
		}

		if($title_bg_color !== '' && $title_img === '') {
			$classes[] = 'with_background_color';
		}

		return $classes;
	}

	add_filter('brick_qode_filter_title_classes', 'brick_qode_title_background_color_class');
}