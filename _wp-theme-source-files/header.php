<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Creative Multipurpose Bootstrap Template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="preloader">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/preloader.svg" alt="Pre-loader">
    </div>


    <!-- =======================
    header Start-->
    <header class="header-static navbar-sticky navbar-light">
        <!-- Search -->
        <div class="top-search collapse bg-light" id="search-open" data-parent="#search">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-md-8 mx-auto py-5">
                        <form>
                            <div class="input-group">
                                <input class="form-control border-radius-right-0 border-right-0" type="text" name="search" autofocus placeholder="What are you looking for?">
                                <button type="button" class="btn btn-grad border-radius-left-0 mb-0">Search</button>
                            </div>
                        </form>
                        <p class="small mt-2 mb-0"><strong>e.g.</strong>Template, Wizixo, WordPress theme </p>
                    </div>
                    <a class="position-absolute top-0 right-0 mt-3 mr-3" data-toggle="collapse" href="#search-open"><i class="fa fa-window-close"></i></a>
                </div>
            </div>
        </div>
        <!-- End Search -->
        <!-- Navbar top start-->
        <div class="navbar-top d-none d-lg-block">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- navbar top Left-->
                    <div class="d-flex align-items-center">

                    </div>

                    <!-- navbar top Right-->
                    <div class="d-flex align-items-center">

                        <!-- Top info -->
                        <ul class="nav list-unstyled">
                            <li class="nav-item">
                                <a class="navbar-link" href="#"><strong>Phone:</strong> (250) <?php echo get_field( 'phone_number' , 'option'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar top End-->
        <!-- Logo Nav Start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <?php 
                    $logo = get_field( 'site_logo' , 'options' );
                    $site_logo = wp_get_attachment_image_src( $logo['id'] , 'logo' );                         
                    if( ! $site_logo[0] ) {
                        $site_logo[0] = get_template_directory_uri().'/assets/images/logo.png';
                    }
                ?>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo esc_url( $site_logo[0] ); ?>" style="width:250px;" />
                </a>
                <!-- Menu opener button -->
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'  => 'main-menu',
                            'container'       => false,
                            'menu_class'      => 'navbar-nav ml-auto',
                            'depth'           => '2',
                        ));
                    ?>
                </div>
                <!-- Main Menu End -->
                <!-- Header Extras Start-->
                <div class="navbar-nav">
                    <!-- extra item Search-->
                    <div class="nav-item search border-0 pl-3 pr-0 px-lg-2" id="search">

                    </div>

                    <!-- extra item Btn-->
                    <div class="nav-item border-0 d-none d-lg-inline-block align-self-center">
                        <?php 
                            $page_id  = get_page_id('contact-us');                    
                            $page_url = get_permalink($page_id); 
                        ?>
                        <a href="<?php echo esc_url( $page_url ); ?>" class=" btn btn-sm btn-grad text-white mb-0">Contact Us</a>
                    </div>
                </div>
                <!-- Header Extras End-->
            </div>
        </nav>
        <!-- Logo Nav End -->
    </header>
    <!-- =======================
    header End-->