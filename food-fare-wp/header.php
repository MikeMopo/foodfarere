<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="icon">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand p-0">
                    <h1 class="text-white m-0"></i>FoodFare</h1>
<!--                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="Logo" class="img-responsive">-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'navbar-nav ms-auto py-0 pe-4',
                        'container'      => false,
                        'fallback_cb'    => false,
                        // Note: To add Bootstrap's 'nav-item' and 'nav-link' classes to the li and a tags respectively,
                        // a custom Nav Walker is typically required. This is a basic implementation.
                    ) );
                    ?>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5 hero-image"  >
                <div class="container my-5 py-5" >
                    <div class="row align-items-center g-5 hero" >
                        <div class="col-lg-6 text-center text-lg-start">
                            <a href="#" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft button-container">Full Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
