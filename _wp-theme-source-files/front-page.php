<?php get_header(); ?>
    <!-- =======================
    Main Banner -->
    <section class="p-0">
        <div class="swiper-container height-700-responsive swiper-arrow-hover swiper-slider-fade">
            <div class="swiper-wrapper">                
                <?php 
                    $query = new Wp_Query( array(
                        'post_type' => 'fire_slider',
                    ));
                    if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post();
                    $feature        = wp_get_attachment_image_src( get_post_thumbnail_id() , 'slider' );
                    $button_text    = get_field( 'button_text' );
                    $button_url     = get_field( 'button_url' );
                    $live_demo_url  = get_field( 'live_demo_url' );

                    if( get_field( 'slider_left_alignment') == 1 ) :
                ?>

                <div class="swiper-slide bg-overlay-dark-2" style="background-image:url(<?php echo esc_url( $feature[0] ); ?> ); background-position: center center; background-size: cover;">
                    <div class="container h-100">
                        <div class="row d-flex h-100">
                            <div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
                                <h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">
                                    <?php the_title(); ?>
                                </h2>
                                <h3 class="animated fadeInUp dealy-1000 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4"><?php echo get_the_content(); ?></h3>
                                <div class="animated fadeInUp mt-3 dealy-1500">
                                    <?php if( $button_text ) : ?>
                                        <a href="<?php echo esc_url( $button_url ); ?>" class="btn btn-grad"><?php echo $button_text; ?></a>
                                    <?php endif; if( $live_demo_url ) : ?> 
                                        <a href="<?php echo esc_url( $live_demo_url ); ?>" class="btn btn-link text-white">Check live demo!</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php else: ?>
                
                <div class="swiper-slide bg-overlay-dark-2" style="background-image:url(<?php echo esc_url( $feature[0] ); ?> ); background-position: center top; background-size: cover;">
                    <div class="container h-100">
                        <div class="row d-flex h-100">
                            <div class="col-md-8 justify-content-center align-self-center align-items-start mx-auto">
                                <div class="slider-content text-center ">
                                    <h3 class="animated fadeInUp dealy-500 display-8 display-md-7 text-white alt-font font-italic"><?php echo get_the_content(); ?></h3>
                                    <h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white"><?php the_title(); ?></h2>
                                    <div class="animated fadeInUp mt-3 dealy-1500">
                                        <?php if( $button_text ) : ?>
                                            <a href="<?php echo esc_url( $button_url ); ?>" class="btn btn-grad"><?php echo $button_text; ?></a>
                                        <?php endif; if( $live_demo_url ) : ?>
                                            <a href="<?php echo esc_url( $live_demo_url ); ?>" class="btn btn-link text-white">Check live demo!</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; endwhile; wp_reset_postdata(); endif; wp_reset_query(); ?>
            </div>
            <!-- Slider buttons -->
            <div class="swiper-button-next"><i class="ti-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="ti-angle-left"></i></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- =======================
    Main banner -->
    <!-- =======================
    about us  -->
    <section>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); 
                    $fire_content = get_field( 'fire_protectio_area' );
                ?>
                <!-- left -->
                <div class="col-md-6">
                    <?php echo $fire_content['content_left']; ?>
                </div>
                <!-- right -->
                <div class="col-md-6">
                    <?php echo $fire_content['content_right']; ?>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>

            </div>
        </div>
    </section>
    <!-- =======================
    about us  -->
    <hr />
    <!-- =======================
    why-us -->
    <section class="why-us p-0">
        <div class="container">
            <div class="row no-gutters">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); 
                    $middle_feature  = get_field( 'middle_feature_section' );
                    $feature_img_id  = $middle_feature['feature_image'];
                    $feature_img_url = wp_get_attachment_image_src( $feature_img_id , 'large' );
                    $caption_txt     = $middle_feature['caption_title'];
                    $title           = $middle_feature['title'];
                    $content         = $middle_feature['content'];
                ?>
                <!--why us left-->
                <div class="col-lg-6 d-none d-lg-block bg-light" style="background:url(<?php echo esc_url( $feature_img_url[0] ); ?> ) no-repeat; background-size:cover;">
                </div>
                <!--why us right-->
                <div class="col-lg-6 col-md-12 bg-grad px-4 py-5 p-lg-5 all-text-white">
                    <div class="h-100">
                        <div class="title text-left p-0">
                            <?php if( $caption_txt ) : ?>
                                <span class="pre-title"><?php echo $caption_txt; ?></span>
                            <?php endif; if( $title ) : ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; if( $content ) : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="list-group list-group-borderless text">
                                    <?php if( have_rows('middle_feature_section') ) : while( have_rows('middle_feature_section') ) : the_row(); ?>
                                        <?php if( have_rows('feature_left_item') ) : while( have_rows('feature_left_item') ) : the_row(); ?>
                                            <li class="list-group-item text-white"><i class="fa fa-check"></i><?php echo get_sub_field( 'item_name' ); ?></li>
                                        <?php endwhile; endif; wp_reset_query(); ?>
                                    <?php endwhile; endif; wp_reset_query(); ?>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-group list-group-borderless text">
                                    <?php if( have_rows('middle_feature_section') ) : while( have_rows('middle_feature_section') ) : the_row(); ?>
                                        <?php if( have_rows('feature_right_item') ) : while( have_rows('feature_right_item') ) : the_row(); ?>
                                            <li class="list-group-item text-white"><i class="fa fa-check"></i><?php echo get_sub_field( 'item_name' ); ?></li>
                                        <?php endwhile; endif; wp_reset_query(); ?>
                                    <?php endwhile; endif; wp_reset_query(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <!-- why-us
    =======================  -->
    <!-- =======================
    service  -->
    <section>
        <div class="container">
            <h2 class="section-heading pull-left">SERVICES</h2>
            <?php 
                $page_id  = get_page_id('services');                    
                $page_url = get_permalink( $page_id ); 
            ?>
            <a href="<?php echo esc_url( $page_url ); ?>" class="btn btn-grad pull-right">See all services</a>
        </div>
    </section>
    <hr />
    <section class="pt-0">
        <div class="container">

            <div class="row mt-3">
                <?php 
                    $query = new Wp_Query( array(
                        'post_type'      => 'fire_services',
                        'posts_per_page' => 6,
                    ));
                    if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post();
                        $service_icon = wp_get_attachment_image_src( get_post_thumbnail_id() , 'service_icon' );
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-grad">
                        <div class="feature-box-icon"><img src="<?php echo esc_url( $service_icon[0] ); ?>" style="width:60px;" /></div>
                        <h3 class="feature-box-title"><?php the_title(); ?></h3>
                        <p class="feature-box-desc"><?php echo get_the_content(); ?></p>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <hr />
    <!-- =======================
    service  -->
    <!-- =======================
    testimonial -->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); 
        $testimonial  = get_field( 'testimonial' );
        $client_img_id  = $testimonial['testimonial_background_image'];
        $client_img_url = wp_get_attachment_image_src( $client_img_id , 'large' );
    ?>
    <section class="parallax-bg bg-overlay-dark-2" style="background:url(<?php echo esc_url( $client_img_url[0] ); ?> ) no-repeat center center; background-size:cover;">
        <div class="container">
            <div class="row">
                <!-- left -->
                <div class="col-md-7 col-lg-6">
                    <div class="z-index-9 testimonials all-text-white bg-grad p-3 p-sm-5 border-radius-3">
                        <span><i class="fa fa-quote-left display-6 mb-3"></i></span>
                        <!-- owl-carousel start-->
                        <div class="owl-carousel testi-full dots-white dots-right-top owl-grab" data-arrow="false" data-items="1">
                            <?php if( have_rows('testimonial') ) : while( have_rows('testimonial') ) : the_row(); ?>
                                <?php if( have_rows('testimonial_item') ) : while( have_rows('testimonial_item') ) : the_row(); 
                                        $clien_img = get_sub_field('client_image');
                                    ?>
                                    <!-- testimonial item -->
                                    <div class="item">
                                        <div class="testimonials-wrap">
                                            <div class="testi-text text-left p-0">
                                                <p class="text-white"><?php echo get_sub_field( 'client_feedback' ); ?></p>
                                                <div class="media align-items-center">
                                                    <?php if( $clien_img ) : ?>
                                                    <div class="testi-avatar mb-0">
                                                        <img class="w-75" src="<?php echo esc_url( $clien_img ); ?>" alt="avatar">
                                                    </div>
                                                    <?php endif; ?>
                                                    <div>
                                                        <h6 class="m-0"><?php echo get_sub_field( 'client_name' ); ?></h6>
                                                        <h6 class="small"><?php echo get_sub_field( 'client_position' ); ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; endif; wp_reset_query(); ?>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </div>
                        <!-- owl-carousel End-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; wp_reset_query(); ?>
    <!-- =======================
    testimonial -->
    <!-- =======================
    call to action-->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); 
        $crafting_visual  = get_field( 'crafting_visually_area' );
        $crafting_title   = $crafting_visual['title'];
        $crafting_text    = $crafting_visual['content'];
        $cr_learn_txt     = $crafting_visual['learn_more_text'];
        $cr_learn_url     = $crafting_visual['learn_more_url'];
    ?>
    <section class="p5-4">
        <div class="container">
            <div class="d-block d-md-flex bg-grad p-4 p-sm-5 all-text-white border-radius-3 pattern-overlay-3">
                <div class="align-self-center text-center text-md-left">
                    <?php if( $crafting_title ) : ?>
                        <h3><?php echo $crafting_title; ?></h3>
                    <?php endif; if( $crafting_text ) : ?>
                        <p class="m-0"><?php echo $crafting_text; ?></p>
                    <?php endif; ?>
                </div>
                <?php if( $cr_learn_txt ) : ?>
                <div class="mt-3 mt-md-0 text-center text-md-right ml-md-auto align-self-center">
                    <a href="<?php echo esc_url( home_url() ); ?>"><button class="btn btn-white mb-0"><?php echo $cr_learn_txt; ?></button></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer();