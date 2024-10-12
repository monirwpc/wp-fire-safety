<?php

/*---------------------------------------------------------------*/
//  include needed files
/*---------------------------------------------------------------*/
	require( get_template_directory(). '/inc/custom-widget.php' );
	require( get_template_directory(). '/inc/register-post-type.php' );

/*---------------------------------------------------------------*/
// fire-safety theme setup
/*---------------------------------------------------------------*/
	add_action( 'after_setup_theme' , 'setup_fire_safety' );
	function setup_fire_safety() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_image_size( 'logo' , 250, 65, true );
		add_image_size( 'slider' , 1350, 700, true );
		add_image_size( 'middle_feature' , 585, 580, true );
		add_image_size( 'service_icon' , 60, 60.8 , true );
		add_image_size( 'testimonial_bg' , 1350, 444, true );
		add_image_size( 'footer_logo' , 200, 52, true );
		add_image_size( 'contact_feature' , 1350, 267, true );
		add_image_size( 'page_banner_bg' , 1350, 321, true );
		add_image_size( 'page_570_570' , 570, 570, true );
		add_image_size( 'page_middle' , 674, 501, true );

		register_nav_menus(
			array(
				'main-menu'   => __( 'Main Menu' , 'fire_safety' ),
				'footer-menu' => __( 'Footer Menu' , 'fire_safety' ),
			)
		);
	}

/*-----------------------------------------------------------------------------------*/
// enqueue css & js file
/*-----------------------------------------------------------------------------------*/
	add_action( 'wp_enqueue_scripts' , 'include_css_js' );
	function include_css_js() {
		//enqueue css		
		wp_enqueue_style( 'poppins-font' , 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CPlayfair+Display:400,400i,700,700i%7CRoboto:400,400i,500,700' , array() , '1.1.0' , 'all' );
		wp_enqueue_style( 'font-awesome' , get_template_directory_uri(). '/assets/vendor/font-awesome/css/font-awesome.min.css', array(), '1.1.0', 'all' ); 
		wp_enqueue_style( 'themify-icons' , get_template_directory_uri(). '/assets/vendor/themify-icons/css/themify-icons.css', array(), '1.1.0', 'all' ); 
		wp_enqueue_style( 'animate' , get_template_directory_uri(). '/assets/vendor/animate/animate.min.css', array(), '1.1.0', 'all' ); 
		wp_enqueue_style( 'fancybox' , get_template_directory_uri(). '/assets/vendor/fancybox/css/jquery.fancybox.min.css', array(), '1.1.0', 'all' ); 
		wp_enqueue_style( 'owl-carousel' , get_template_directory_uri(). '/assets/vendor/owlcarousel/css/owl.carousel.min.css', array(), '1.1.0', 'all' ); 
		wp_enqueue_style( 'swiper' , get_template_directory_uri(). '/assets/vendor/swiper/css/swiper.min.css', array(), '1.1.0', 'all' ); 
		wp_enqueue_style( 'main-style' , get_template_directory_uri(). '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css' ), 'all' ); 
		wp_enqueue_style( 'fire-splash' , get_template_directory_uri(). '/assets/css/fire-splash.css', array(), '1.1.0', 'all' );

		// enqueue js
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/vendor/popper.js/umd/popper.min.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/vendor/popper.js/umd/popper.min.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/dist/js/bootstrap.min.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'jquery-easing', get_template_directory_uri().'/assets/vendor/jquery-easing/jquery.easing.min.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'fancybox', get_template_directory_uri().'/assets/vendor/fancybox/js/jquery.fancybox.min.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/vendor/owlcarousel/js/owl.carousel.min.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/vendor/swiper/js/swiper.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/vendor/wow/wow.min.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'jarallax', get_template_directory_uri().'/assets/vendor/jarallax/jarallax.min.js' , array() , '1.1.0' , true );
		// contact page js
		wp_enqueue_script( 'map', get_template_directory_uri().'/assets/vendor/map/map.js' , array() , '1.1.0' , true );
		wp_enqueue_script( 'map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCtF5lHSU7Y7c2BYl_c4-G9bSi44h1X9Ls' , array() , '1.1.0' , true );
		// custom js
		wp_enqueue_script( 'functions', get_template_directory_uri().'/assets/js/functions.js' , array() , '1.1.0' , true );
	}

/*--------------------------------------------------------------------*/
// acf option page
/*--------------------------------------------------------------------*/
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page( array(
			'page_title'   => __( 'Theme Options Page' , 'fire_safety' ),
			'menu_title'   => __( 'Theme Option' , 'fire_safety' ),
			'menu_slug'    => 'theme_options_page',
			'capability'   => 'edit_posts',
			'redirect'     => true
		) );

		acf_add_options_sub_page( array(
			'page_title'   => __( 'Header Options' , 'fire_safety' ),
			'menu_title'   => __( 'Header' , 'fire_safety' ),
			'parent_slug'  => 'theme_options_page',			
		) );

		acf_add_options_sub_page( array(
			'page_title'   => __( 'Footer Options' , 'fire_safety' ),
			'menu_title'   => __( 'Footer' , 'fire_safety' ),
			'parent_slug'  => 'theme_options_page'
		) );
	}

/*-------------------------------------------------------------------*/
// Custom Excerpt Length
/*-------------------------------------------------------------------*/
	function fire_safety_excerpt_length( $length ) {
	   return 37;
	}
	add_filter( 'excerpt_length' , 'fire_safety_excerpt_length', 999 );

	if ( ! function_exists( 'fire_safety_excerpt_more' ) && ! is_admin() ) :
	function fire_safety_excerpt_more( $more ) {
		$link = sprintf( '<a href="%1$s">%2$s</a>',
			esc_url( get_permalink( get_the_ID() ) ),
			sprintf( __( '...', 'fire_safety' ))
			);
		return $link;
	}
	add_filter( 'excerpt_more', 'fire_safety_excerpt_more' );
	endif;

/*--------------------------------------------------------------------*/
// Page Name to Page ID 
/*--------------------------------------------------------------------*/
	function get_page_id($page_name){
		global $wpdb;
		$page_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."' AND post_status = 'publish' AND post_type = 'page'");
		return $page_name;
	}

/*--------------------------------------------------------------------*/
// Romove autop and br from contact form 7 
/*--------------------------------------------------------------------*/
	add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
	function wpcf7_autop_return_false() {
	    return false;
	} 

/*--------------------------------------------------------------------*/
// Romove default wp editor in all pages 
/*--------------------------------------------------------------------*/
	add_action( 'init', function() {
	    remove_post_type_support( 'page', 'editor' );
	}, 99);
