<?php get_header(); 
    if( have_posts() ) : while( have_posts() ) : the_post();        
        $feature        = wp_get_attachment_image_src( get_post_thumbnail_id(), 'page_banner_bg' );
        if( ! $feature ) {
            $feature[0] = get_template_directory_uri() . '/assets/images/banner/emergency-lights.jpg';
        }
        $banner_title   = get_field( 'banner_title' );
        $banner_content = get_field( 'banner_content' );
?>

    <!-- =======================
    Banner innerpage -->
    <div class="bg-overlay-dark-2" style="background:url(<?php echo esc_url( $feature[0] ); ?>) no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-6">
                    <h1 class="font-weight-bold" style="margin-top:100px;"><?php if( $banner_title ) { echo $banner_title; } else { the_title(); } ?></h1>
                    <?php if( $banner_content ) : ?>
                        <p style="font-size:18px;font-family:'Open Sans';font-weight:normal;"><?php echo $banner_content; ?></p>
                    <?php endif; ?>
                    <br />
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
    <!-- =======================
    Banner innerpage -->
    <!-- =======================
    content -->
    <?php 
        $banner_bottom      = get_field( 'banner_bottom_area' );
        $banner_btm_img_id  = $banner_bottom['block_right_image'];
        $banner_btm_img_url = wp_get_attachment_image_src( $banner_btm_img_id, 'page_570_570' );
        $banner_btm_cont    = $banner_bottom['block_left_content'];
        if( $banner_btm_img_id || $banner_btm_cont ) :
    ?>
        <section>
            <div class="container">
                <div class="row">
                    <?php if( $banner_btm_cont ) : ?>            
                        <div class="col-md-6 mb-5">
                            <?php echo $banner_btm_cont; ?>
                        </div>
                    <?php endif; if( $banner_btm_img_id ) : ?>
                        <div class="col-md-6">
                            <img class="rounded" src="<?php echo esc_url( $banner_btm_img_url[0] ); ?>" alt="">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <hr />
    <?php endif; ?>
 
    <!-- =======================
    call to action-->
    <?php 
        $page_middle    = get_field( 'page_middle_area' );
        $middle_title   = $page_middle['middle_right_title'];
        $middle_content = $page_middle['middle_right_content'];
        $middle_img_id  = $page_middle['middle_left_image'];
        $middle_img_url = wp_get_attachment_image_src( $middle_img_id, 'large' );
        if( $middle_title || $middle_content || $middle_img_id ) :
    ?>
        <section class="why-us p-0">
            <div class="container-fluid">
                <div class="row">                
                    <!--why us left-->
                        <div class="col-lg-6 d-none d-lg-block bg-light p-0" style="background:url(<?php echo esc_url( $middle_img_url[0] ); ?>) no-repeat; background-size:cover;">
                        </div>
                    <!--why us right-->
                    <div class="col-lg-6 col-md-12 bg-light px-4 py-5 p-lg-5">
                        <div class="h-100">
                            <?php if( $middle_title ) : ?>
                                <div class="title text-left p-0">
                                    <h2><?php echo $middle_title; ?></h2>
                                </div>
                            <?php endif; if( $middle_content ) : ?>
                                <div class="row">
                                    <div class="col">
                                        <?php echo $middle_content; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php 
        $page_bottom          = get_field( 'inspection_requirements_area' );
        $page_bottom_top      = $page_bottom['requirements_top_content'];
        $page_btm_top_img_id  = $page_bottom['requirements_top_right_image'];
        $page_btm_top_img_url = wp_get_attachment_image_src( $page_btm_top_img_id, 'page_btm_top' );
        $bottom_top_left      = $page_bottom['requirements_bottom_left'];
        $bottom_top_right     = $page_bottom['requirements_bottom_right'];
        
        if( $page_bottom_top || $page_btm_top_img_id  || $bottom_top_left || $bottom_top_right ) :
    ?>
        <section>
            <div class="container">
                <div class="row">
                    <?php if( $page_bottom_top ) : ?>
                        <div class="col-md-6">
                            <?php echo $page_bottom_top; ?>
                        </div>
                    <?php endif; if( $page_btm_top_img_id ) : ?>
                        <div class="col-md-6">
                            <img src="<?php echo esc_url( $page_btm_top_img_url[0] ); ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php if( $bottom_top_left ) : ?>
                        <div class="col-md-5">
                            <?php echo $bottom_top_left; ?>
                        </div>
                        <div class="col-md-1"></div>
                    <?php endif; if( $bottom_top_right ) : ?>
                        <div class="col-md-5">
                            <?php echo $bottom_top_right; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php 
    endwhile; endif;
get_footer();