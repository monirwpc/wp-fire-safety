<?php
/*--------------------------------------------------------------------*/
// Slider Post Type 
/*--------------------------------------------------------------------*/
    add_action( 'init' , 'register_slider_post' );
	function register_slider_post() {
		$arg = array(
			'label'           => __( 'Slider' , 'fire_safety' ),
			'singular_label'  => 'fire_slider',
			'public'          => true,
			'hierarchical'    => false,
			'capability_type' => 'post',
			'has_archive'     => true,
			'show_ui'         => true,
			'menu_position'   => 5,
			'menu_icon'       => 'dashicons-images-alt2',
			'supports'        => array( 'title', 'editor', 'thumbnail' , 'comments' , 'author' ),
			'labels'          => array(
				'add_new'               => __( 'Add New Slider', 'fire_safety' ),
		        'add_new_item'          => __( 'Add New Slider', 'fire_safety' ),
		        'new_item'              => __( 'New Slider', 'fire_safety' ),
		        'edit_item'             => __( 'Edit Slider', 'fire_safety' ),
		        'view_item'             => __( 'View Slider', 'fire_safety' ),
		        'all_items'             => __( 'All Slider', 'fire_safety' ),
		        'search_items'          => __( 'Search Slider', 'fire_safety' ),
		        'not_found'             => __( 'No Slider found.', 'fire_safety' ),
		        'featured_image'        => __( 'Slider Featured Image', 'fire_safety' ),
		        'set_featured_image'    => __( 'Set Slider Featured Image', 'fire_safety' ),
		        'remove_featured_image' => __( 'Remove Slider Featured Image', 'fire_safety' ),
			),
		);
		register_post_type( 'fire_slider' , $arg );
	}

/*--------------------------------------------------------------------*/
// Services Post Type
/*--------------------------------------------------------------------*/
	add_action( 'init' , 'register_services_post' );
	function register_services_post() {
		$args = array(
			'label'           => __( 'Services' , 'fire_safety' ),
			'singular_label'  => 'fire_services',
			'public'          => true,
			'hierarchical'    => false,
			'capability_type' => 'post',
			'has_archive'     => true,
			'show_ui'         => true,
			'menu_position'   => 5,
			'menu_icon'       => 'dashicons-screenoptions',
			'supports'        => array( 'title', 'editor', 'thumbnail' , 'comments' , 'author' ),
			'labels'          => array(
				'add_new'               => __( 'Add New Service', 'fire_safety' ),
		        'add_new_item'          => __( 'Add New Service', 'fire_safety' ),
		        'new_item'              => __( 'New Service', 'fire_safety' ),
		        'edit_item'             => __( 'Edit Service', 'fire_safety' ),
		        'view_item'             => __( 'View Service', 'fire_safety' ),
		        'all_items'             => __( 'All Services', 'fire_safety' ),
		        'search_items'          => __( 'Search Service', 'fire_safety' ),
		        'not_found'             => __( 'No Services found.', 'fire_safety' ),
		        'featured_image'        => __( 'Service Featured Image', 'fire_safety' ),
		        'set_featured_image'    => __( 'Set Service Featured Image', 'fire_safety' ),
		        'remove_featured_image' => __( 'Remove Service Featured Image', 'fire_safety' ),
			),
		);
		register_post_type( 'fire_services' , $args );
	}