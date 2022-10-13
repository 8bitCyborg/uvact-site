<?php

class BrickQodeLatestPosts extends WP_Widget {
	private $params;
	
	public function __construct() {
		parent::__construct(
			'qode_latest_posts_widget', // Base ID
			esc_html__( 'Brick Blog', 'brick' ), // Name
			array( 'description' => esc_html__( 'Display posts from your blog', 'brick' ), ) // Args
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'name'    => 'type',
				'type'    => 'dropdown',
				'title'   => esc_html__('Type', 'brick' ),
				'options' => array(
					"image_in_box" => esc_html__("Image in left box", 'brick' ),
					"minimal"      => esc_html__("Minimal", 'brick' )
				)
			),
			array(
				'name'  => 'number_of_posts',
				'type'  => 'textfield',
				'title' => esc_html__('Number of posts', 'brick' )
			),
			array(
				'name'    => 'order_by',
				'type'    => 'dropdown',
				'title'   => esc_html__('Order By', 'brick' ),
				'options' => array(
					'title' => esc_html__('Title', 'brick' ),
					'date'  => esc_html__('Date', 'brick' )
				)
			),
			array(
				'name'    => 'order',
				'type'    => 'dropdown',
				'title'   => esc_html__('Order', 'brick' ),
				'options' => array(
					'ASC'  => esc_html__('ASC', 'brick' ),
					'DESC' => esc_html__('DESC', 'brick' )
				)
			),
			array(
				'name'  => 'category',
				'type'  => 'textfield',
				'title' => esc_html__('Category Slug', 'brick' )
			),
			array(
				'name'  => 'text_length',
				'type'  => 'textfield',
				'title' => esc_html__('Number of characters', 'brick' )
			),
			array(
				'name'    => 'title_tag',
				'type'    => 'dropdown',
				'title'   => esc_html__('Title Tag', 'brick' ),
				'options' => array(
					""   => "",
					"h2" => esc_html__("h2", 'brick' ),
					"h3" => esc_html__("h3", 'brick' ),
					"h4" => esc_html__("h4", 'brick' ),
					"h5" => esc_html__("h5", 'brick' ),
					"h6" => esc_html__("h6", 'brick' )
				)
			),
			array(
				'name'  => 'title_size',
				'type'  => 'textfield',
				'title' => esc_html__('Title Size (px)', 'brick' )
			),
			array(
				'name'  => 'title_color',
				'type'  => 'textfield',
				'title' => esc_html__('Title Color', 'brick' )
			),
			array(
				'name'    => 'display_excerpt',
				'type'    => 'dropdown',
				'title'   => esc_html__('Display Excerpt', 'brick' ),
				'options' => array(
					''  => esc_html__('Default', 'brick' ),
					'0' => esc_html__('No', 'brick' ),
					'1' => esc_html__('Yes', 'brick' )
				)
			),
			array(
				'name'  => 'excerpt_color',
				'type'  => 'textfield',
				'title' => esc_html__('Excerpt Color', 'brick' )
			),
			array(
				'name'    => 'info_position',
				'type'    => 'dropdown',
				'title'   => esc_html__('Info Position', 'brick' ),
				'options' => array(
					''       => esc_html__('Default', 'brick' ),
					'top'    => esc_html__('Top', 'brick' ),
					'bottom' => esc_html__('Bottom', 'brick' )
				)
			),
			array(
				'name'  => 'post_info_font_size',
				'type'  => 'textfield',
				'title' => esc_html__('Post info font size (px)', 'brick' )
			),
			array(
				'name'  => 'post_info_color',
				'type'  => 'textfield',
				'title' => esc_html__('Post info color', 'brick' )
			),
			array(
				'name'  => 'post_info_link_color',
				'type'  => 'textfield',
				'title' => esc_html__('Post info link color', 'brick' )
			),
			array(
				'name'  => 'post_info_font_family',
				'type'  => 'textfield',
				'title' => esc_html__('Post info font family', 'brick' )
			),
			array(
				'name'    => 'post_info_text_transform',
				'type'    => 'dropdown',
				'title'   => esc_html__('Post info text transform', 'brick' ),
				'options' => array(
					''           => esc_html__('Default', 'brick' ),
					'none'       => esc_html__('None', 'brick' ),
					'capitalize' => esc_html__('Capitalize', 'brick' ),
					'uppercase'  => esc_html__('Uppercase', 'brick' ),
					'lowercase'  => esc_html__('Lowercase', 'brick' )
				)
			),
			array(
				'name'    => 'post_info_font_weight',
				'type'    => 'dropdown',
				'title'   => esc_html__('Post info font weight', 'brick' ),
				'options' => array(
					''    => esc_html__('Default', 'brick' ),
					'100' => esc_html__('Thin 100', 'brick' ),
					'200' => esc_html__('Extra-Light 200', 'brick' ),
					'300' => esc_html__('Light 300', 'brick' ),
					'400' => esc_html__('Regular 400', 'brick' ),
					'500' => esc_html__('Medium 500', 'brick' ),
					'600' => esc_html__('Semi-Bold 600', 'brick' ),
					'700' => esc_html__('Bold 700', 'brick' ),
					'800' => esc_html__('Extra-Bold 800', 'brick' ),
					'900' => esc_html__('Ultra-Bold 900', 'brick' )
				)
			),
			array(
				'name'    => 'post_info_font_style',
				'type'    => 'dropdown',
				'title'   => esc_html__('Post info font style', 'brick' ),
				'options' => array(
					''       => esc_html__('Default', 'brick' ),
					'normal' => esc_html__('Normal', 'brick' ),
					'italic' => esc_html__('Italic', 'brick' )
				)
			),
			array(
				'name'  => 'post_info_letter_spacing',
				'type'  => 'textfield',
				'title' => esc_html__('Post info letter spacing (px)', 'brick' )
			),
			array(
				'name'    => 'display_category',
				'type'    => 'dropdown',
				'title'   => esc_html__('Display Category', 'brick' ),
				'options' => array(
					''  => esc_html__('Default', 'brick' ),
					'1' => esc_html__('Yes', 'brick' ),
					'0' => esc_html__('No', 'brick' )
				)
			),
			array(
				'name'    => 'display_date',
				'type'    => 'dropdown',
				'title'   => esc_html__('Display Date', 'brick' ),
				'options' => array(
					''  => esc_html__('Default', 'brick' ),
					'1' => esc_html__('Yes', 'brick' ),
					'0' => esc_html__('No', 'brick' )
				)
			),
			array(
				'name'  => 'date_size',
				'type'  => 'textfield',
				'title' => esc_html__('Date Size (px)', 'brick' )
			),
			array(
				'name'    => 'display_author',
				'type'    => 'dropdown',
				'title'   => esc_html__('Display Author', 'brick' ),
				'options' => array(
					''  => esc_html__('Default', 'brick' ),
					'1' => esc_html__('Yes', 'brick' ),
					'0' => esc_html__('No', 'brick' )
				)
			),
			array(
				'name'    => 'display_comments',
				'type'    => 'dropdown',
				'title'   => esc_html__('Display Comments', 'brick' ),
				'options' => array(
					''  => esc_html__('Default', 'brick' ),
					'1' => esc_html__('Yes', 'brick' ),
					'0' => esc_html__('No', 'brick' )
				)
			),
			array(
				'name'  => 'background_color',
				'type'  => 'textfield',
				'title' => esc_html__('Box Background Color', 'brick' )
			),
			array(
				'name'  => 'border_color',
				'type'  => 'textfield',
				'title' => esc_html__('Separator Between Item Color', 'brick' )
			),
			array(
				'name'  => 'border_width',
				'type'  => 'textfield',
				'title' => esc_html__('Separator Between Item Thickness (px)', 'brick' )
			),
			array(
				'name'    => 'display_button',
				'type'    => 'dropdown',
				'title'   => esc_html__('Display Button', 'brick' ),
				'options' => array(
					''  => esc_html__('Default', 'brick' ),
					'1' => esc_html__('Yes', 'brick' ),
					'0' => esc_html__('No', 'brick' )
				)
			),
			array(
				'name'    => 'button_size',
				'type'    => 'dropdown',
				'title'   => esc_html__('Button Size', 'brick' ),
				'options' => array(
					""          => esc_html__("Default", 'brick' ),
					"small"     => esc_html__("Small", 'brick' ),
					"medium"    => esc_html__("Medium", 'brick' ),
					"large"     => esc_html__("Large", 'brick' ),
					"big_large" => esc_html__("Extra Large", 'brick' )
				)
			),
			array(
				'name'    => 'button_style',
				'type'    => 'dropdown',
				'title'   => esc_html__('Button Style', 'brick' ),
				'options' => array(
					""      => esc_html__("Default", 'brick' ),
					"white" => esc_html__("White", 'brick' )
				)
			),
			array(
				'name'  => 'button_text',
				'type'  => 'textfield',
				'title' => esc_html__('Button Text', 'brick' )
			),
			array(
				'name'  => 'button_color',
				'type'  => 'textfield',
				'title' => esc_html__('Button Text Color', 'brick' )
			),
			array(
				'name'  => 'button_hover_color',
				'type'  => 'textfield',
				'title' => esc_html__('Button Text Hover Color', 'brick' )
			),
			array(
				'name'  => 'button_background_color',
				'type'  => 'textfield',
				'title' => esc_html__('Button Background Color', 'brick' )
			),
			array(
				'name'  => 'button_hover_background_color',
				'type'  => 'textfield',
				'title' => esc_html__('Button Hover Background Color', 'brick' )
			),
			array(
				'name'  => 'button_border_color',
				'type'  => 'textfield',
				'title' => esc_html__('Button Border Color', 'brick' )
			),
			array(
				'name'  => 'button_border_width',
				'type'  => 'textfield',
				'title' => esc_html__('Button Border Width', 'brick' )
			),
			array(
				'name'  => 'button_hover_border_color',
				'type'  => 'textfield',
				'title' => esc_html__('Button Hover Border Color', 'brick' )
			),
			array(
				'name'  => 'button_border_radius',
				'type'  => 'textfield',
				'title' => esc_html__('Button Border Radius (px)', 'brick' )
			)
		);
	}
	
	public function getParams() {
		return $this->params;
	}
	
	public function widget( $args, $instance ) {
		extract( $args );
		
		//prepare variables
		$content = '';
		$params  = '';
		
		//is instance empty?
		if ( is_array( $instance ) && count( $instance ) ) {
			//generate shortcode params
			foreach ( $instance as $key => $value ) {
				$params .= " $key = '$value' ";
			}
		}
		
		echo '<div class="widget qode-latest-posts-widget">';
		//finally call the shortcode
		echo do_shortcode( "[no_blog_list $params]" ); // XSS OK
		echo '</div>'; //close div.qode-latest-posts-widget
	}
	
	public function form( $instance ) {
		foreach ( $this->params as $param_array ) {
			$param_name    = $param_array['name'];
			${$param_name} = isset( $instance[ $param_name ] ) ? esc_attr( $instance[ $param_name ] ) : '';
		}
		
		foreach ( $this->params as $param ) {
			switch ( $param['type'] ) {
				case 'textfield': ?>
					<p>
						<label for="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>"><?php echo esc_html( $param['title'] ); ?></label>
						<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( $param['name'] ) ); ?>" type="text" value="<?php echo esc_attr( ${$param['name']} ); ?>"/>
					</p>
					<?php
					break;
				case 'dropdown': ?>
					<p>
						<label for="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>"><?php echo esc_html( $param['title'] ); ?></label>
						<?php if ( isset( $param['options'] ) && is_array( $param['options'] ) && count( $param['options'] ) ) { ?>
							<select class="widefat" name="<?php echo esc_attr( $this->get_field_name( $param['name'] ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>">
								<?php foreach ( $param['options'] as $param_option_key => $param_option_val ) {
									$option_selected = '';
									if ( ${$param['name']} == $param_option_key ) {
										$option_selected = 'selected';
									}
									?>
									<option <?php echo esc_attr( $option_selected ); ?> value="<?php echo esc_attr( $param_option_key ); ?>"><?php echo esc_attr( $param_option_val ); ?></option>
								<?php } ?>
							</select>
						<?php } ?>
					</p>
					
					<?php
					break;
			}
		}
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		foreach ( $this->params as $param ) {
			$param_name = $param['name'];
			
			$instance[ $param_name ] = sanitize_text_field( $new_instance[ $param_name ] );
		}
		
		return $instance;
	}
}
