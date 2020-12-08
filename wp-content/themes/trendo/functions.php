<?php

require_once( __DIR__ . '/includes/sec-adjustments.php');

// Add styles and scripts
require_once( __DIR__ . '/includes/styles-scripts.php');

// Register custom post types
require_once( __DIR__ . '/includes/custom-post-types.php');

// Register menus
require_once( __DIR__ . '/includes/register-menus.php');

// Register widget areas
require_once( __DIR__ . '/includes/widget-areas.php');

// Add custom image sizes
require_once( __DIR__ . '/includes/image-sizes.php');

// Register Custom Navigation Walker
require_once( __DIR__ . '/includes/wp-bootstrap-navwalker.php');

// Adjustments for admin
require_once( __DIR__ . '/includes/admin-adjustments.php');

// Adjustments for Woocommerce
require_once( __DIR__ . '/includes/woocommerce-adjustments.php');

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page('Algemene instellingen');

}

function unitsite_theme_setup() {

    /*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
    load_theme_textdomain( 'unittheme' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support( 'post-thumbnails' );

    /*
	 * Enable theme support for Woocommerce.
     */
    add_theme_support( 'woocommerce' );

    /*
     * Disable Woocommerce styles
     */
    if (class_exists('Woocommerce')){
        //add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
    }

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}
add_action( 'after_setup_theme', 'unitsite_theme_setup' );

// add hook
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
    if ( isset( $args->sub_menu ) ) {
        $root_id = 0;

        // find the current menu item
        foreach ( $sorted_menu_items as $menu_item ) {
            if ( $menu_item->current ) {
                // set the root id based on whether the current menu item has a parent or not
                $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
                break;
            }
        }

        // find the top level parent
        if ( ! isset( $args->direct_parent ) ) {
            $prev_root_id = $root_id;
            while ( $prev_root_id != 0 ) {
                foreach ( $sorted_menu_items as $menu_item ) {
                    if ( $menu_item->ID == $prev_root_id ) {
                        $prev_root_id = $menu_item->menu_item_parent;
                        // don't set the root_id to 0 if we've reached the top of the menu
                        if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
                        break;
                    }
                }
            }
        }
        $menu_item_parents = array();
        foreach ( $sorted_menu_items as $key => $item ) {
            // init menu_item_parents
            if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;
            if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
                // part of sub-tree: keep!
                $menu_item_parents[] = $item->ID;
            } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
                // not part of sub-tree: away with it!
                unset( $sorted_menu_items[$key] );
            }
        }

        return $sorted_menu_items;
    } else {
        return $sorted_menu_items;
    }
}