<?php

require_once("lib/qode.layout.php");
require_once("lib/google-fonts.php");
require_once("lib/qode.framework.php");
require_once("lib/qode.functions.php");
require_once("lib/qode.icons/qode.icons.php");
require_once("admin/options/qode-options-setup.php");
require_once("admin/meta-boxes/qode-meta-boxes-setup.php");

if ( ! function_exists( 'brick_qode_framework' ) ) {
	/**
	 * Function that returns instance of BrickQodeFramework class
	 *
	 * @return BrickQodeFramework
	 */
	function brick_qode_framework() {
		return BrickQodeFramework::get_instance();
	}
}

if ( ! function_exists( 'brick_qode_options' ) ) {
	/**
	 * Returns instance of BrickQodeOptions class
	 *
	 * @return BrickQodeOptions
	 */
	function brick_qode_options() {
		return brick_qode_framework()->qodeOptions;
	}
}

if ( ! function_exists( 'brick_qode_icon_collections' ) ) {
	/**
	 * @return BrickQodeIconCollections
	 */
	function brick_qode_icon_collections() {
		return BrickQodeIconCollections::get_instance();
	}
}

if ( ! function_exists( 'brick_qode_get_icon_collections' ) ) {
	function brick_qode_get_icon_collections( $type = '' ) {
		$icons = brick_qode_icon_collections();
		
		if ( ! empty( $icons ) ) {
			switch ( $type ) {
				case 'empty':
					return $icons->getIconCollectionsEmpty();
					break;
				default:
					return $icons->getIconCollections();
			}
		} else {
			return array();
		}
	}
}

if(!function_exists('brick_qode_admin_scripts_init')) {
	/**
	 * Function that registers all scripts that are necessary for our back-end
	 */
	function brick_qode_admin_scripts_init() {
		wp_register_style('brick-admin-jquery-ui', get_template_directory_uri().'/framework/admin/assets/css/jquery-ui/jquery-ui.css');
		wp_register_script('brick-admin-dependence', get_template_directory_uri().'/framework/admin/assets/js/qodef-ui/qodef-dependence.js');

        /**
         * @see BrickQodeSkinAbstract::registerScripts - hooked with 10
         * @see BrickQodeSkinAbstract::registerStyles - hooked with 10
         */
        do_action('brick_qode_action_admin_scripts_init');
	}

	add_action('admin_init', 'brick_qode_admin_scripts_init');
}

if(!function_exists('brick_qode_enqueue_admin_styles')) {
	/**
	 * Function that enqueues styles for options page
	 */
	function brick_qode_enqueue_admin_styles() {
		wp_enqueue_style('wp-color-picker');

        /**
         * @see BrickQodeSkinAbstract::enqueueStyles - hooked with 10
         */
        do_action('brick_qode_action_enqueue_admin_styles');
	}
}

if(!function_exists('brick_qode_enqueue_admin_scripts')) {
	/**
	 * Function that enqueues styles for options page
	 */
	function brick_qode_enqueue_admin_scripts() {
		wp_enqueue_script('wp-color-picker');
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_script('jquery-ui-accordion');
		wp_enqueue_script('common');
		wp_enqueue_script('wp-lists');
		wp_enqueue_script('postbox');
		wp_enqueue_media();
		wp_enqueue_script('brick-admin-dependence');

        /**
         * @see BrickQodeSkinAbstract::enqueueScripts - hooked with 10
         */
        do_action('brick_qode_action_enqueue_admin_scripts');
	}
}

if(!function_exists('brick_qode_enqueue_meta_box_styles')) {
	/**
	 * Function that enqueues styles for meta boxes
	 */
	function brick_qode_enqueue_meta_box_styles() {
		wp_enqueue_style( 'wp-color-picker' );

        /**
         * @see BrickQodeSkinAbstract::enqueueStyles - hooked with 10
         */
        do_action('brick_qode_action_enqueue_meta_box_styles');
	}
}

if(!function_exists('brick_qode_enqueue_meta_box_scripts')) {
	/**
	 * Function that enqueues scripts for meta boxes
	 */
	function brick_qode_enqueue_meta_box_scripts() {
		wp_enqueue_script('wp-color-picker');
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_script('jquery-ui-accordion');
		wp_enqueue_script('common');
		wp_enqueue_script('wp-lists');
		wp_enqueue_script('postbox');
		wp_enqueue_media();
		wp_enqueue_script('brick-admin-dependence');

        /**
         * @see BrickQodeSkinAbstract::enqueueScripts - hooked with 10
         */
        do_action('brick_qode_action_enqueue_meta_box_scripts');
	}
}

if(!function_exists('brick_qode_enqueue_nav_menu_script')) {
	/**
	 * Function that enqueues styles and scripts necessary for menu administration page.
	 * It checks $hook variable
	 * @param $hook string current page hook to check
	 */
	function brick_qode_enqueue_nav_menu_script($hook) {
		if($hook == 'nav-menus.php') {
			wp_enqueue_script('brick-admin-nav-menu', get_template_directory_uri().'/framework/admin/assets/js/qodef-nav-menu.js');
			wp_enqueue_style('brick-admin-nav-menu', get_template_directory_uri().'/framework/admin/assets/css/qodef-nav-menu.css');
		}
	}

	add_action('admin_enqueue_scripts', 'brick_qode_enqueue_nav_menu_script');
}


if(!function_exists('brick_qode_enqueue_widgets_admin_script')) {
	/**
	 * Function that enqueues styles and scripts for admin widgets page.
	 * @param $hook string current page hook to check
	 */
	function brick_qode_enqueue_widgets_admin_script($hook) {
		if($hook == 'widgets.php') {
			wp_enqueue_script('brick-admin-dependence');
		}
	}

	add_action('admin_enqueue_scripts', 'brick_qode_enqueue_widgets_admin_script');
}


if(!function_exists('brick_qode_enqueue_styles_slider_taxonomy')) {
	/**
	 * Enqueue styles when on slider taxonomy page in admin
	 */
	function brick_qode_enqueue_styles_slider_taxonomy() {
		if(isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'slides_category') {
			brick_qode_enqueue_admin_styles();
		}
	}

	add_action('admin_print_scripts-edit-tags.php', 'brick_qode_enqueue_styles_slider_taxonomy');
}

if(!function_exists('brick_qode_init_theme_options_array')) {
	/**
	 * Function that merges $brick_qode_options and default options array into one array.
	 *
	 * @see array_merge()
	 */
	function brick_qode_init_theme_options_array() {
		global $brick_qode_options, $brick_qode_framework;

		$db_options = get_option('qode_options_brick');

		//does qode_options exists in db?
		if(is_array($db_options)) {
			//merge with default options
			$brick_qode_options  = array_merge($brick_qode_framework->qodeOptions->options, get_option('qode_options_brick'));
		} else {
			//options don't exists in db, take default ones
			$brick_qode_options = $brick_qode_framework->qodeOptions->options;
		}
	}

	//priority needs to be greater than 0, because theme options are initialized on after_setup_theme 0
	add_action('after_setup_theme', 'brick_qode_init_theme_options_array', 2);
}

if(!function_exists('brick_qode_init_theme_options')) {
	/**
	 * Function that sets $brick_qode_options variable if it does'nt exists
	 */
	function brick_qode_init_theme_options() {
		global $brick_qode_options;
		global $brick_qode_framework;
		if(isset($brick_qode_options['reset_to_defaults'])) {
			if( $brick_qode_options['reset_to_defaults'] == 'yes' ) delete_option( "qode_options_brick");
		}

		if (!get_option("qode_options_brick")) {
			add_option( "qode_options_brick",
				$brick_qode_framework->qodeOptions->options
			);

			$brick_qode_options = $brick_qode_framework->qodeOptions->options;
		}
	}
}

if(!function_exists('brick_qode_theme_menu')) {
	/**
	 * Function that generates admin menu for options page.
	 * It generates one admin page per options page.
	 */
	function brick_qode_theme_menu() {
		global $brick_qode_framework;
		brick_qode_init_theme_options();

		$page_hook_suffix = add_menu_page(
			esc_html__( 'Select Options', 'brick' ),                  // The value used to populate the browser's title bar when the menu page is active
			esc_html__('Select Options', 'brick' ),                   // The text of the menu in the administrator's sidebar
			'administrator',                  // What roles are able to access the menu
			'qode_theme_menu',                // The ID used to bind submenu items to this menu
			array($brick_qode_framework->getSkin(), 'renderOptions'), // The callback function used to render this menu
			$brick_qode_framework->getSkin()->getMenuIcon('options'),             // Icon For menu Item
			$brick_qode_framework->getSkin()->getMenuItemPosition('options')            // Position
		);

		foreach ($brick_qode_framework->qodeOptions->adminPages as $key=>$value ) {
			$slug = "";

			if (!empty($value->slug)) {
				$slug = "_tab".$value->slug;
			}

			$subpage_hook_suffix = add_submenu_page(
				'qode_theme_menu',
				esc_html__('Select Options - ', 'brick' ) .$value->title,                   // The value used to populate the browser's title bar when the menu page is active
				$value->title,                   // The text of the menu in the administrator's sidebar
				'administrator',                  // What roles are able to access the menu
				'qode_theme_menu'.$slug,                // The ID used to bind submenu items to this menu
				array($brick_qode_framework->getSkin(), 'renderOptions')
			);

			add_action('admin_print_scripts-'.$subpage_hook_suffix, 'brick_qode_enqueue_admin_scripts');
			add_action('admin_print_styles-'.$subpage_hook_suffix, 'brick_qode_enqueue_admin_styles');
		};

		add_action('admin_print_scripts-'.$page_hook_suffix, 'brick_qode_enqueue_admin_scripts');
		add_action('admin_print_styles-'.$page_hook_suffix, 'brick_qode_enqueue_admin_styles');
	}

	add_action( 'admin_menu', 'brick_qode_theme_menu' );
}

if(!function_exists('brick_qode_register_theme_settings')) {
	/**
	 * Function that registers setting that will be used to store theme options
	 */
	function brick_qode_register_theme_settings() {
		register_setting( 'qode_theme_menu', 'qode_options' );
	}

	add_action('admin_init', 'brick_qode_register_theme_settings');
}

if(!function_exists('brick_qode_get_admin_tab')) {
	/**
	 * Helper function that returns current tab from url.
	 * @return null
	 */
	function brick_qode_get_admin_tab(){
		return isset($_GET['page']) ? brick_qode_strafter($_GET['page'],'tab') : NULL;
	}
}

if(!function_exists('brick_qode_strafter')) {
	/**
	 * Function that returns string that comes after found string
	 * @param $string string where to search
	 * @param $substring string what to search for
	 * @return null|string string that comes after found string
	 */
	function brick_qode_strafter($string, $substring) {
		$pos = strpos($string, $substring);
		if ($pos === false) {
			return NULL;
		}

		return(substr($string, $pos+strlen($substring)));
	}
}

if(!function_exists('brick_qode_save_options')) {
	/**
	 * Function that saves theme options to db.
	 */
	function brick_qode_save_options() {
		global $brick_qode_options;
		global $brick_qode_framework;

		if(current_user_can('administrator')) {
			$_REQUEST = stripslashes_deep($_REQUEST);

			check_ajax_referer('qodef_ajax_save_nonce', 'qodef_ajax_save_nonce');

			foreach ($brick_qode_framework->qodeOptions->options as $key => $value) {
				if (isset($_REQUEST[ $key ])) {
					$brick_qode_options[$key]=$_REQUEST[ $key ];
				}
			}

			update_option( 'qode_options_brick', $brick_qode_options );

			do_action('brick_qode_action_after_theme_option_save');
			echo esc_html__("Saved", 'brick');

			die();
		}
	}

	add_action('wp_ajax_qodef_save_options', 'brick_qode_save_options');
}

if(!function_exists('brick_qode_meta_box_add')) {
	/**
	 * Function that adds all defined meta boxes.
	 * It loops through array of created meta boxes and adds them
	 */
	function brick_qode_meta_box_add() {
		global $brick_qode_framework;


		foreach ($brick_qode_framework->qodeMetaBoxes->metaBoxes as $key=>$box ) {
			$hidden = false;
			if (!empty($box->hidden_property)) {
				foreach ($box->hidden_values as $value) {
					if (brick_qode_option_get_value($box->hidden_property)==$value)
						$hidden = true;

				}
			}
			
			brick_qode_create_meta_box_handler( $box, $key );

			if ($hidden) {
				add_filter( 'postbox_classes_'.$box->scope.'_qodef-meta-box-'.$key, 'brick_qode_meta_box_add_hidden_class' );
			}
		}
		
		if ( brick_qode_is_gutenberg_installed() || class_exists( 'WP_Block_Type' ) ) {
			brick_qode_enqueue_meta_box_styles();
			brick_qode_enqueue_meta_box_scripts();
		} else {
			add_action('admin_enqueue_scripts', 'brick_qode_enqueue_meta_box_styles');
			add_action('admin_enqueue_scripts', 'brick_qode_enqueue_meta_box_scripts');
		}
	}
}

if(!function_exists('brick_qode_meta_box_save')) {
	/**
	 * Function that saves meta box to postmeta table
	 * @param $post_id int id of post that meta box is being saved
	 * @param $post WP_Post current post object
	 */
	function brick_qode_meta_box_save( $post_id, $post ) {
		global $brick_qode_framework;

		$postTypes = array( "page", "post", "portfolio_page", "testimonials", "slides", "carousels");

		if (!isset( $_POST[ '_wpnonce' ])) {
			return;
		}

		if (!current_user_can('edit_post', $post_id)) {
			return;
		}

		if (!in_array($post->post_type, $postTypes)) {
			return;
		}

		foreach ($brick_qode_framework->qodeMetaBoxes->options as $key=>$box ) {

			if (isset($_POST[$key]) && trim($_POST[$key] !== '')) {

				$value = $_POST[$key];

				update_post_meta( $post_id, $key, $value );
			} else {
				delete_post_meta( $post_id, $key );
			}
		}

		$portfolios = false;
		if (isset($_POST['optionLabel'])) {
			foreach ($_POST['optionLabel'] as $key => $value) {
				$portfolios_val[$key] = array('optionLabel'=>$value,'optionValue'=>$_POST['optionValue'][$key],'optionUrl'=>$_POST['optionUrl'][$key],'optionlabelordernumber'=>$_POST['optionlabelordernumber'][$key]);
				$portfolios = true;

			}
		}

		if ($portfolios) {
			update_post_meta( $post_id,  'qode_portfolios', $portfolios_val );
		} else {
			delete_post_meta( $post_id, 'qode_portfolios' );
		}

		$portfolio_images = false;
		if (isset($_POST['portfolioimg'])) {
			foreach ($_POST['portfolioimg'] as $key => $value) {
				$portfolio_images_val[$key] = array('portfolioimg'=>$_POST['portfolioimg'][$key],'portfoliotitle'=>$_POST['portfoliotitle'][$key],'portfolioimgordernumber'=>$_POST['portfolioimgordernumber'][$key], 'portfoliovideotype'=>$_POST['portfoliovideotype'][$key], 'portfoliovideoid'=>$_POST['portfoliovideoid'][$key], 'portfoliovideoimage'=>$_POST['portfoliovideoimage'][$key], 'portfoliovideowebm'=>$_POST['portfoliovideowebm'][$key], 'portfoliovideomp4'=>$_POST['portfoliovideomp4'][$key], 'portfoliovideoogv'=>$_POST['portfoliovideoogv'][$key], 'portfolioimgtype'=>$_POST['portfolioimgtype'][$key] );
				$portfolio_images = true;
			}
		}


		if ($portfolio_images) {
			update_post_meta( $post_id,  'qode_portfolio_images', $portfolio_images_val );
		} else {
			delete_post_meta( $post_id,  'qode_portfolio_images' );
		}
	}

	add_action( 'save_post', 'brick_qode_meta_box_save', 1, 2 );
}

if(!function_exists('brick_qode_render_meta_box')) {
	/**
	 * Function that renders meta box
	 * @param $post WP_Post post object
	 * @param $metabox array array of current meta box parameters
	 */
	function brick_qode_render_meta_box($post, $metabox) {?>
		<div class="qodef-meta-box qodef-page">
			<div class="qodef-meta-box-holder">

				<?php $metabox["args"]["box"]->render(); ?>

			</div>
		</div>
	<?php
	}
}

if(!function_exists('brick_qode_meta_box_add_hidden_class')) {
	/**
	 * Function that adds class that will initially hide meta box
	 * @param array $classes array of classes
	 * @return array modified array of classes
	 */
	function brick_qode_meta_box_add_hidden_class( $classes=array() ) {
		if( !in_array( 'qodef-meta-box-hidden', $classes ) )
			$classes[] = 'qodef-meta-box-hidden';

		return $classes;
	}

}

if(!function_exists('brick_qode_remove_default_custom_fields')) {
	/**
	 * Function that removes default WordPress custom fields interface
	 */
	function brick_qode_remove_default_custom_fields() {
		foreach ( array( 'normal', 'advanced', 'side' ) as $context ) {
			foreach ( array( "page", "post", "portfolio_page", "testimonials", "slides", "carousels" ) as $postType ) {
				remove_meta_box( 'postcustom', $postType, $context );
			}
		}
	}

	add_action('do_meta_boxes', 'brick_qode_remove_default_custom_fields');
}


if(!function_exists('brick_qode_get_custom_sidebars')) {
	/**
	 * Function that returns all custom made sidebars.
	 *
	 * @uses get_option()
	 * @return array array of custom made sidebars where key and value are sidebar name
	 */
	function brick_qode_get_custom_sidebars() {
		$custom_sidebars = get_option('qode_sidebars');
		$formatted_array = array();

		if(is_array($custom_sidebars) && count($custom_sidebars)) {
			foreach ($custom_sidebars as $custom_sidebar) {
				$formatted_array[$custom_sidebar] = $custom_sidebar;
			}
		}

		return $formatted_array;
	}
}

if(!function_exists('brick_qode_generate_icon_pack_options')) {
    /**
     * Generates options HTML for each icon in given icon pack
     */
    function brick_qode_generate_icon_pack_options() {
	    check_ajax_referer('update-nav_menu', 'update_nav_menu_nonce');
	    
        $html = '';
        $icon_pack = isset($_POST['icon_pack']) ? $_POST['icon_pack'] : '';
        $collections_object = brick_qode_icon_collections()->getIconCollection($icon_pack);

        if($collections_object) {
            $icons = $collections_object->getIconsArray();
            if(is_array($icons) && count($icons)) {
                foreach ($icons as $key => $icon) {
                    $html .= '<option value="'.esc_attr($key).'">'.esc_html($key).'</option>';
                 }
            }
        }

        echo brick_qode_get_module_part($html);
    }

    add_action('wp_ajax_update_admin_nav_icon_options', 'brick_qode_generate_icon_pack_options');
}