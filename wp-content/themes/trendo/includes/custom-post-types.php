<?php

/*
 * Include for adding custom post types
 *
 */


if ( ! function_exists('custom_post_types') ) {

// Register Custom Post Type
    function custom_post_types() {

        // Custom Post Type | Stores
        $labels = array(
            'name'                  => _x( 'Winkels', 'Post Type General Name', 'unittheme' ),
            'singular_name'         => _x( 'Winkel', 'Post Type Singular Name', 'unittheme' ),
            'menu_name'             => __( 'Winkels', 'unittheme' ),
            'name_admin_bar'        => __( 'Winkel', 'unittheme' ),
            'archives'              => __( 'Item Archives', 'unittheme' ),
            'attributes'            => __( 'Item Attributes', 'unittheme' ),
            'parent_item_colon'     => __( 'Parent Item:', 'unittheme' ),
            'all_items'             => __( 'Alle winkels', 'unittheme' ),
            'add_new_item'          => __( 'Nieuwe winkel', 'unittheme' ),
            'add_new'               => __( 'Nieuwe winkel', 'unittheme' ),
            'new_item'              => __( 'Nieuwe winkel', 'unittheme' ),
            'edit_item'             => __( 'Edit winkel', 'unittheme' ),
            'update_item'           => __( 'Update winkel', 'unittheme' ),
            'view_item'             => __( 'Bekijk winkel', 'unittheme' ),
            'view_items'            => __( 'Bekijk winkels', 'unittheme' ),
            'search_items'          => __( 'Zoek winkel', 'unittheme' ),
            'not_found'             => __( 'Not found', 'unittheme' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'unittheme' ),
            'featured_image'        => __( 'Featured Image', 'unittheme' ),
            'set_featured_image'    => __( 'Set featured image', 'unittheme' ),
            'remove_featured_image' => __( 'Remove featured image', 'unittheme' ),
            'use_featured_image'    => __( 'Use as featured image', 'unittheme' ),
            'insert_into_item'      => __( 'Insert into item', 'unittheme' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'unittheme' ),
            'items_list'            => __( 'Items list', 'unittheme' ),
            'items_list_navigation' => __( 'Items list navigation', 'unittheme' ),
            'filter_items_list'     => __( 'Filter items list', 'unittheme' ),
        );
        $rewrite = array(
            'slug'                  => 'winkels',
            'with_front'            => false,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Winkel', 'unittheme' ),
            'description'           => __( 'Winkels', 'unittheme' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'taxonomies'            => array( 'stores_category' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-multisite',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'winkels',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'post',
        );
        register_post_type( 'cpt_stores', $args );
        
    }
    add_action( 'init', 'custom_post_types', 0 );

}


if ( ! function_exists( 'custom_taxonomy' ) ) {

// Register Custom Taxonomy
    function custom_taxonomy() {

        /*
        $labels = array(
            'name'                       => _x( 'Project categorieen', 'Taxonomy General Name', 'unittheme' ),
            'singular_name'              => _x( 'Project categorie', 'Taxonomy Singular Name', 'unittheme' ),
            'menu_name'                  => __( 'Project categorieen', 'unittheme' ),
            'all_items'                  => __( 'All Items', 'unittheme' ),
            'parent_item'                => __( 'Parent Item', 'unittheme' ),
            'parent_item_colon'          => __( 'Parent Item:', 'unittheme' ),
            'new_item_name'              => __( 'New Item Name', 'unittheme' ),
            'add_new_item'               => __( 'Add New Item', 'unittheme' ),
            'edit_item'                  => __( 'Edit Item', 'unittheme' ),
            'update_item'                => __( 'Update Item', 'unittheme' ),
            'view_item'                  => __( 'View Item', 'unittheme' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'unittheme' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'unittheme' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'unittheme' ),
            'popular_items'              => __( 'Popular Items', 'unittheme' ),
            'search_items'               => __( 'Search Items', 'unittheme' ),
            'not_found'                  => __( 'Not Found', 'unittheme' ),
            'no_terms'                   => __( 'No items', 'unittheme' ),
            'items_list'                 => __( 'Items list', 'unittheme' ),
            'items_list_navigation'      => __( 'Items list navigation', 'unittheme' ),
        );
        $rewrite = array(
            'slug'                       => 'project-categorie',
            'with_front'                 => true,
            'hierarchical'               => true,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
        );
        register_taxonomy( 'tax_projectcats', array( 'cpt_projects' ), $args );
        */
    }
    add_action( 'init', 'custom_taxonomy', 0 );

}
