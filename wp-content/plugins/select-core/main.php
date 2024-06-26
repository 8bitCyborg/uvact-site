<?php
/*
Plugin Name: Select Core
Description: Plugin that adds all post types needed by our theme
Author: Select Themes
Version: 1.2.1
*/

use QodeCore\Lib;
use QodeCore\CPT;

if ( ! class_exists( 'BrickCore' ) ) {
	class BrickCore {
		private static $instance;
		
		public function __construct() {
			require_once 'constants.php';
			require_once 'helpers/helper.php';
			
			// Make plugin available for translation
			add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
			
			// Add plugin's body classes
			add_filter( 'body_class', array( $this, 'add_body_classes' ) );
			
			add_action( 'after_setup_theme', array( $this, 'init' ), 5 );
		}
		
		public static function get_instance() {
			if ( self::$instance == null ) {
				self::$instance = new self();
			}
			
			return self::$instance;
		}
		
		function load_plugin_textdomain() {
			load_plugin_textdomain( 'select-core', false, BRICK_CORE_REL_PATH . '/languages' );
		}
		
		function add_body_classes( $classes ) {
			$classes[] = 'select-core-' . BRICK_CORE_VERSION;
			
			return $classes;
		}
		
		function init() {
			
			if ( brick_core_is_installed( 'theme' ) ) {
				include_once BRICK_CORE_MODULES_PATH . '/helper.php';
				include_once BRICK_CORE_MODULES_PATH . '/import/qode-import.php';
				
				Lib\ShortcodeLoader::getInstance()->load();
				
				add_action( 'init', array( $this, 'cpt_activation' ), 0 );
			}
		}
		
		function cpt_activation() {
			do_action( 'brick_qode_action_core_on_activate' );
			
			CPT\PostTypesRegister::getInstance()->register();
			
			flush_rewrite_rules();
		}
	}
	
	BrickCore::get_instance();
}