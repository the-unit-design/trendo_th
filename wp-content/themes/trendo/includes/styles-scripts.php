<?php

function replace_core_jquery_version() {
  wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1' );
}
//add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

// Add styles and scripts
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    //wp_enqueue_style( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', array(), '5.0.0', 'all' );
    //wp_style_add_data( 'bootstrap_css', 'integrity', 'sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' );
    //wp_style_add_data( 'bootstrap_css', 'crossorigin', 'anonymous' );

    wp_enqueue_style( 'robotocondensed_css', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap', array(), '1.0', 'all' );
    wp_enqueue_style( 'montserrat_css', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), '1.0', 'all' );
    wp_enqueue_style( 'fancybox_css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), '3.5.7', 'all');

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');

    wp_enqueue_script( 'popper_js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array(), '2.6.0', true );
    wp_script_add_data( 'popper_js', 'integrity', 'sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi' );
    wp_script_add_data( 'popper_js', 'crossorigin', 'anonymous' );

    //wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', array(), '5.0.0', true );
    //wp_script_add_data( 'bootstrap_js', 'integrity', 'sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj' );
    //wp_script_add_data( 'bootstrap_js', 'crossorigin', 'anonymous' );

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/vendors/bootstrap/bootstrap.min.js', array(), '5.0.0', true );
    wp_script_add_data( 'bootstrap_js', 'integrity', 'sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG' );
    wp_script_add_data( 'bootstrap_js', 'crossorigin', 'anonymous' );

    wp_enqueue_script( 'fancybox_js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), '3.5.7', true );

    wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true );

    wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true );

    wp_enqueue_script( 'jquery_match-height', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array(), '0.7.2', true );

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );