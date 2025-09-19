<?php

function food_fare_wp_scripts() {
    // Enqueue Styles
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap', array(), null );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0' );
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.4.1' );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), null );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), null );
    wp_enqueue_style( 'tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), null );

    wp_enqueue_style( 'bootstrap-custom', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() ); // This is the main style.css

    // Enqueue Scripts
    // The HTML loads jquery 3.4.1, WP might have a different version. We'll use the bundled one for now.
    // The bootstrap bundle includes popper.js
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), null, true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), null, true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), null, true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), null, true );
    wp_enqueue_script( 'owlcarousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'moment', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', array(), null, true );
    wp_enqueue_script( 'moment-timezone', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', array('moment'), null, true );
    wp_enqueue_script( 'tempusdominus-js', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array('moment'), null, true );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'food_fare_wp_scripts' );

function food_fare_wp_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
        )
    );
}
add_action( 'init', 'food_fare_wp_register_menus' );

// Add classes to menu li elements
add_filter('nav_menu_css_class', 'add_class_to_menu_li', 1, 3);
function add_class_to_menu_li($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}

// Add classes to menu a elements
add_filter( 'nav_menu_link_attributes', 'add_class_to_menu_a', 1, 3 );
function add_class_to_menu_a( $atts, $item, $args ) {
    if ( $args->theme_location == 'primary' ) {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
