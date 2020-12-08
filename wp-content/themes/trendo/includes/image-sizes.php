<?php

add_theme_support( 'post-thumbnails' );

function custom_image_sizes() {
    /*
     * add_image_size( 'thumbnail-large', 300, 300, true );

    add_image_size( '1920-x-380', 1919, 379, true );

    add_image_size( '510-x-340', 509, 339, true );
    add_image_size( '510-x-max', 509, 99999 );
    add_image_size( '545-x-275', 544, 274, true );
    */
}
add_action('after_setup_theme', 'custom_image_sizes');