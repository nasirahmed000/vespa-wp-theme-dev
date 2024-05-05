<?php

// add css and js file

function wp_wp515_scripts() {

    // enqueue style
    wp_enqueue_style( 'bootstrap-css', 
    get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '5.0.0', 'all' );
    wp_enqueue_style( 'icofont-css', 
    get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '1.0.1 ', 'all' );
    wp_enqueue_style( 'remixicon-css', 
    get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '2.5.0', 'all' );
    wp_enqueue_style( 'boxicons-css', 
    get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '', 'all' );
    wp_enqueue_style( 'owl-css', 
    get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '2.3.4', 'all' );
    wp_enqueue_style( 'venobox-css', 
    get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '', 'all' );
    wp_enqueue_style( 'template-css', 
    get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '', 'all' );
    wp_enqueue_style( 'theme-css', 
    get_template_directory_uri() . '/assets/css/style.css', array(), '3.0.3', 'all' );
  
    // enqueue_script
    wp_enqueue_script( 'query-js', 
        get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrap-js', 
        get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '', true );
    wp_enqueue_script( 'easing-js', 
        get_template_directory_uri().'/assets/vendor/jquery.easing/jquery.easing.min.js', array(), '', true );
    wp_enqueue_script( 'validate-js', 
        get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array(), '', true );
    wp_enqueue_script( 'waypoints-js', 
       get_template_directory_uri().'/assets/vendor/waypoints/jquery.waypoints.min.js', array(), '', true );
    wp_enqueue_script( 'counterup-js', 
        get_template_directory_uri().'/assets/vendor/counterup/counterup.min.js', array(), '', true );
    wp_enqueue_script( 'owl-js', 
        get_template_directory_uri().'/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '', true );
    wp_enqueue_script( 'venobox-js', 
        get_template_directory_uri().'/assets/vendor/venobox/venobox.min.js', array(), '', true );
    wp_enqueue_script( 'aos-js', 
        get_template_directory_uri().'/assets/vendor/aos/aos.js', array(), '', true );
    wp_enqueue_script( 'main-js', 
       get_template_directory_uri().'/assets/js/main.js', array(), '', true );

}

add_action( 'wp_enqueue_scripts', 'wp_wp515_scripts' );


//  custom post function
function custom_post_type() {
  
    // Service start 

    register_post_type( 'Services',
    
        array(
            'labels' => array(
                'name'             => __( 'Services','Vespa' ),
                'singular_name'    => __( 'Service','Vespa' ),
                'add_new'          => __( 'Add New', 'Vespa' ),
                'add_new_item'     => __( 'Add New Service', 'Vespa' ),
                'new_item'         => __( 'New service', 'Vespa' ),
                'edit_item'        => __( 'Edit service', 'Vespa' ),
                'view_item'        => __( 'View service', 'Vespa' ),
                'all_items'        => __( 'All service', 'Vespa' ),
                'search_items'     => __( 'Search service', 'Vespa' ),
                'not_found'             => __( 'No service found.', 'textdomain' ),
                'not_found_in_trash'    => __( 'No service found in Trash.', 'textdomain' )
            ),
            'public'              => true,
            'publicly_queryable'  => true,
            'has_archive'         => true,
            'rewrite'             =>      array('slug' => 'services'),
            'capability_type'     => 'post',
            'hierarchical'        => false,
            'menu_position'       => 21,
            'menu_icon'           => 'dashicons-sticky' ,
            'supports'            => array( 'title')
            
        ));

    // service end 
}

add_action( 'init', 'custom_post_type' ); 


?>
