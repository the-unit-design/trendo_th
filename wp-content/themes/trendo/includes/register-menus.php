<?php

function register_wp_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Hoofd Menu', 'unittheme' ),
            /*
            'footer-menu' => __( 'Footer Menu', 'unittheme' ),
            'services-menu' => __( 'Diensten Menu', 'unittheme' )
            */
        )
    );
}
add_action( 'init', 'register_wp_menus' );