<?php

class BrickQodeStickySidebar extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'qode_sticky_sidebar', // Base ID
			esc_html__( 'Brick Sticky Sidebar', 'brick' ), // Name
			array( 'description' => esc_html__( 'Use this widget to make the sidebar sticky. Drag it into the sidebar above the widget which you want to be the first element in the sticky sidebar.', 'brick' ), ) // Args
		);
	}
	
	public function widget( $args, $instance ) {
		echo '<div class="widget widget_sticky-sidebar"></div>';
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		
		return $instance;
	}
}
