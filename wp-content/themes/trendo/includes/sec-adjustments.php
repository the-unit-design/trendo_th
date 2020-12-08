<?php

// Hide error messages on login page
function disable_wordpress_loginerrors(){
    return 'Sorry, er is iets verkeerd gegaan!';
}
add_filter( 'login_errors', 'disable_wordpress_loginerrors' );

// Remove version from head
remove_action('wp_head', 'wp_generator');

// Remove version from rss
add_filter('the_generator', '__return_empty_string');

// Remove version from scripts and styles
function theUnit_remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'theUnit_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'theUnit_remove_version_scripts_styles', 9999);