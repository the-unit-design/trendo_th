<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function unit_custom_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'trendotheme' ),
        'id'            => 'primary',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Woocommerce Sidebar', 'trendotheme' ),
        'id'            => 'woocommerce',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'unit_custom_widgets_init' );

