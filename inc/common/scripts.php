<?php

function add_theme_scripts(){
     wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all' );
     wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css', array(), '1.1', 'all' );
     wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.1', 'all' );
     wp_enqueue_style( 'tempusdominus-css', get_template_directory_uri() . '/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), '1.1', 'all' );
     wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );

   

     wp_enqueue_style( 'style', get_stylesheet_uri() );

     // JS Link 
     wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array( 'jquery' ), '5.1.3', true );
     wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array( 'jquery' ), '5.1.3', true );
     wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array( 'jquery' ), '5.1.3', true );
     wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js', array( 'jquery' ), '5.1.3', true );
     wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array( 'jquery-ui-slider' ), '5.1.3', true );
     wp_enqueue_script( 'tempusdominus', get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment.min.js', array( 'jquery' ), '5.1.3', true );
     wp_enqueue_script( 'timezone', get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment-timezone.min.js', array( 'jquery' ), '5.1.3', true );
     wp_enqueue_script( 'bootstrap4', get_template_directory_uri() . '/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array( 'jquery' ), '5.1.3', true );

     wp_enqueue_script( 'jquery2', get_template_directory_uri() . 'https://code.jquery.com/jquery-3.4.1.min.js', array( 'jquery' ), '5.1.3', true );
     wp_enqueue_script( 'bootstrap-cdn', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.1.3', true );

     wp_enqueue_script( 'clinic-main', get_template_directory_uri() . '/assets/js/clinic-main.js', array( 'jquery' ), '5.1.3', true );


     if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );