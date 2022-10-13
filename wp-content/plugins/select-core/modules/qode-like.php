<?php

class BrickQodeLike {
	
	function __construct() {
		add_action( 'wp_enqueue_scripts', array( &$this, 'enqueue_scripts' ) );
		add_action( 'wp_ajax_qode_like', array( &$this, 'ajax' ) );
		add_action( 'wp_ajax_nopriv_qode_like', array( &$this, 'ajax' ) );
	}
	
	function enqueue_scripts() {
		wp_enqueue_script( 'brick-like', get_template_directory_uri() . '/js/qode-like.js', 'jquery', '1.0', true );
		
		wp_localize_script( 'brick-like', 'qodeLike', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		) );
	}
	
	function ajax( $post_id ) {
		//update
		if ( isset( $_POST['likes_id'] ) ) {
			$post_id = str_replace( 'qode-like-', '', $_POST['likes_id'] );
			$type    = isset( $_POST['type'] ) ? $_POST['type'] : '';
			
			echo wp_kses( $this->like_post( $post_id, 'update', $type ), array(
				'span' => array(
					'class'       => true,
					'aria-hidden' => true,
					'style'       => true,
					'id'          => true
				),
				'i'    => array(
					'class' => true,
					'style' => true,
					'id'    => true
				)
			) );
		} //get
		else {
			$post_id = str_replace( 'qode-like-', '', $_POST['likes_id'] );
			echo wp_kses( $this->like_post( $post_id, 'get' ), array(
				'span' => array(
					'class'       => true,
					'aria-hidden' => true,
					'style'       => true,
					'id'          => true
				),
				'i'    => array(
					'class' => true,
					'style' => true,
					'id'    => true
				)
			) );
		}
		exit;
	}
	
	function like_post( $post_id, $action = 'get', $type = '' ) {
		if ( ! is_numeric( $post_id ) ) {
			return;
		}
		
		switch ( $action ) {
			
			case 'get':
				$like_count = get_post_meta( $post_id, '_qode-like', true );
				if ( isset( $_COOKIE[ 'qode-like_' . $post_id ] ) ) {
					$icon = '<i class="icon_heart" aria-hidden="true"></i>';
				} else {
					$icon = '<i class="icon_heart_alt" aria-hidden="true"></i>';
				}
				if ( ! $like_count ) {
					$like_count = 0;
					add_post_meta( $post_id, '_qode-like', $like_count, true );
					$icon = '<i class="icon_heart_alt" aria-hidden="true"></i>';
				}
				$return_value = $icon . "<span>" . $like_count . "</span>";
				
				return $return_value;
				break;
			
			case 'update':
				$like_count = get_post_meta( $post_id, '_qode-like', true );
				
				if ( $type != 'portfolio_list' && isset( $_COOKIE[ 'qode-like_' . $post_id ] ) ) {
					return $like_count;
				}
				
				$like_count ++;
				
				update_post_meta( $post_id, '_qode-like', $like_count );
				setcookie( 'qode-like_' . $post_id, $post_id, time() * 20, '/' );
				
				if ( $type != 'portfolio_list' ) {
					$return_value = "<i class='icon_heart' aria-hidden='true'></i><span>" . $like_count . "</span>";
					
					$return_value .= '</span>';
					
					return $return_value;
				}
				
				return '';
				break;
			default:
				return '';
				break;
		}
	}
	
	function add_qode_like() {
		global $post;
		
		$output = $this->like_post( $post->ID );
		
		$class = 'qode-like';
		$title = esc_attr__( 'Like this', 'select-core' );
		if ( isset( $_COOKIE[ 'qode-like_' . $post->ID ] ) ) {
			$class = 'qode-like liked';
			$title = esc_attr__( 'You already liked this!', 'select-core' );
		}
		
		return '<a href="#" class="' . $class . '" id="qode-like-' . $post->ID . '" title="' . esc_attr( $title ) . '">' . $output . '</a>';
	}
	
	function add_qode_like_portfolio_list( $portfolio_project_id ) {
		
		$class = 'qode-like';
		$title = esc_attr__( 'Like this', 'select-core' );
		if ( isset( $_COOKIE[ 'qode-like_' . $portfolio_project_id ] ) ) {
			$class = 'qode-like liked';
			$title = esc_attr__( 'You already like this!', 'select-core' );
		}
		
		return '<a class="' . $class . '" data-type="portfolio_list" id="qode-like-' . $portfolio_project_id . '" title="' . esc_attr( $title ) . '"></a>';
	}
	
	function add_qode_like_blog_list( $blog_id ) {
		
		$class = 'qode-like';
		$title = esc_attr__( 'Like this', 'select-core' );
		if ( isset( $_COOKIE[ 'qode-like_' . $blog_id ] ) ) {
			$class = 'qode-like liked';
			$title = esc_attr__( 'You already like this!', 'select-core' );
		}
		
		return '<a class="hover_icon ' . $class . '" data-type="portfolio_list" id="qode-like-' . $blog_id . '" title="' . esc_attr( $title ) . '"></a>';
	}
}

if ( ! function_exists( 'brick_qode_create_like' ) ) {
	/*
	 * @return BrickQodeLike
	 */
	function brick_qode_create_like() {
		global $qode_like;
		
		$qode_like = new BrickQodeLike();
	}
	
	add_action( 'after_setup_theme', 'brick_qode_create_like' );
}

if ( ! function_exists( 'brick_qode_like' ) ) {
	function brick_qode_like() {
		echo brick_qode_get_like();
	}
}

if ( ! function_exists( 'brick_qode_get_like' ) ) {
	function brick_qode_get_like() {
		global $qode_like;
		
		return $qode_like->add_qode_like();
	}
}

if ( ! function_exists( 'brick_qode_like_portfolio_list' ) ) {
	function brick_qode_like_portfolio_list( $portfolio_project_id ) {
		global $qode_like;
		
		return $qode_like->add_qode_like_portfolio_list( $portfolio_project_id );
	}
}