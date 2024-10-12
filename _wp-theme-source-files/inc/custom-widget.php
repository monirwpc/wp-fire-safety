<?php 

/*--------------------------------------------------------------------*/
// Custom Footer Widget 
/*--------------------------------------------------------------------*/
	add_action( 'widgets_init' , 'footer_custom_widget' );
	function footer_custom_widget() {
		register_sidebar( array(
			'name'           => __( 'Footer Sidebar' , 'fire_safety' ),
			'id'             => 'footer_sidebar',
			'description'    => __( 'Fire Safety Footer Widget Sidebar' , 'fire_safety' ),
			'before_widget'  => '',
			'after_widget'   => '',
			'before_title'   => '',
			'after_title'    => '',
		) );
		register_widget( 'Fire_Safety_Footer_Widget' );
	}

	class Fire_Safety_Footer_Widget extends WP_Widget {
		function __construct() {
			parent::__construct( 'fire_footer_widget' , __( 'Footer Custom Widget' , 'fire_safety' ) , array (
				'description'   => __( 'footer custom widget with logo, content , phone number & email address' , 'fire_safety' ),
			) );
		}

		public function widget( $arg , $instance ) { 
				$footer_logo     = $instance['acf']['field_5d18858d841ac'];
				$footer_logo_url = wp_get_attachment_image_src( $footer_logo, 'footer_logo' );
				$footer_txt      = $instance['acf']['field_5d1885b2841ad'];
				$footer_phn      = $instance['acf']['field_5d1885c1841ae'];
				$footer_email    = $instance['acf']['field_5d1885c9841af'];
			?>
			<a href="<?php echo home_url(); ?>" class="footer-logo mb-3 d-block">
                <img src="<?php echo esc_url( $footer_logo_url[0] ); ?>" />
            </a>
            <p class="mt-3"><?php echo $footer_txt; ?></p>
            <!-- contact info -->
            <ul class="p-0 list-inline">
            	<?php if( $footer_phn ) : ?>
                	<li class="list-inline-item mr-4"><i class="mr-1 text-primary ti-headphone-alt"></i>(250) <?php echo $footer_phn; ?></li>
            	<?php endif; if( $footer_email ) : ?>
                	<li class="list-inline-item mr-4"><i class="mr-1 text-primary ti-email"></i> <a href="mailto:<?php echo esc_url( $footer_email ); ?>"><?php echo $footer_email; ?></a> </li>
                <?php endif; ?>
            </ul>
		<?php }

		public function form( $instance ) {

		}
	}