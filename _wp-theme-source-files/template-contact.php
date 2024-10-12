<?php 
/*
* Template Name: Contact
*/
get_header(); ?>

    <!-- =======================
    Banner innerpage -->
    <?php
    if( have_posts() ) : while( have_posts() ) : the_post();
        $feature = wp_get_attachment_image_src( get_post_thumbnail_id() , 'contact_feature' );
        $phone_campbel = get_field( 'phone_campbell' );
        $phone_comox   = get_field( 'phone_comox' );
        $email         = get_field( 'email' );
    ?>
    <div class="text-center bg-overlay-dark-4" style="background:url(<?php echo esc_url( $feature[0] ); ?> ) no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center">
                    <h6 class="display-6 mt-9 mb-0"></h6>
                    <h1 class="font-weight-bold display-4 display-md-1 mb-2 mb-md-n4"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- =======================
    Banner innerpage -->
    <!-- =======================
    contact -->
    <section class="contact-page">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 mb-5">
                    <?php the_content(); ?>
                    <!-- Phone -->
                    <?php if( $phone_campbel || $phone_comox ) : ?>
                        <div class="contact-info">
                            <h5 class="mb-2">Phone</h5>
                            <?php if( $phone_campbel ) : ?>
                                <p>Campbell River, BC: <a data-global="phone" href="tel:<?php echo esc_url( $phone_campbel ); ?>" data-track-event="click" data-track-action="phone_link"><?php echo $phone_campbel; ?></a></p>
                            <?php endif; if( $phone_comox ) : ?>
                                <p>Comox/Courtenay, BC: <a href="tel:<?php echo esc_url( $phone_comox ); ?>" data-track-event="click" data-track-action="phone_link"><?php echo $phone_comox; ?></a></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Email -->
                    <?php if( $email ) : ?>
                        <div class="contact-info">
                            <h5 class="mb-2">E-mail</h5>
                            <p><a style="color: #ff0000;" href="mailto:<?php echo esc_url( $email ); ?>"><?php echo $email; ?></a></p>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- contact form -->
                <div class="col-md-6">
                    <div class="h-100">                        
                        <!-- Start main form -->
                        <div class="row">
                             <?php echo do_shortcode( '[contact-form-7 id="141" title="Contact Page"]' );  ?>
                        </div>
                        <!-- End main form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; wp_reset_query(); ?>
    <!-- =======================
    contact -->
    
<?php get_footer();