<!-- =======================
    footer  -->
    <footer class="footer footer-dark section-pt">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <!-- Footer widget 1 -->
                    <div class="col-md-8 mx-auto">
                        <div class="widget text-center mt-5">
                            <?php dynamic_sidebar( 'footer_sidebar' ); ?>
                            <div class="divider my-3"></div>
                            <!-- footer links -->
                            <div class="copyright-links my-2">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location'  => 'footer-menu',
                                        'container'       => false,
                                        'menu_class'      => 'list-inline',
                                        'depth'           => '1',
                                    ));
                                ?>
                            </div>
                            <!-- copyright text -->
                            <div class="copyright-text">©<?php echo date('Y'); ?> All Rights Reserved by <a href="<?php echo esc_url( home_url() ); ?>/campbell-river-fire-safety-service"> Campbell River Fire Safety Service</a></div>
                        </div>
                    </div>

                    <!-- Footer widget 4 -->
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
    footer  -->

    <div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>
    <?php wp_footer(); ?>
    
</body>
</html>