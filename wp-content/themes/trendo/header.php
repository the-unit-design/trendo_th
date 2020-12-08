<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
        Realisatie & ontwerp door The Unit
        https://www.theunitdesign.nl
        0492 - 700 257
        info@theunitdesign.nl
    -->

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <base href="<?php echo site_url(); ?>/">

    <?php wp_head(); ?>
    <!--
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-***"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '***');
    </script>
    -->
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<header class="main-header shadow-sm">
    <div class="main-header__top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-auto">
                    <?php
                    if( have_rows('tpl_option_usps','option') ):
                    ?>
                    <ul class="nav main-header__top__usps">
                    <?php
                        while( have_rows('tpl_option_usps','option') ) : the_row();
                            $uspTitle = get_sub_field('tpl_option_usps_title','option');
                            $uspIcon = get_sub_field('tpl_option_usps_icon','option');
                            echo '<li class="main-header__top__usps__item" style="font-size: 12px;"><span class="main-header__top__usps__item__icon"><img class="img-fluid" src="'. get_template_directory_uri() .'/assets/images/check.svg"></span><span class="main-header__top__usps__item__title">' . $uspTitle . '</span></li>';
                        endwhile;
                    ?>
                    </ul>
                    <?php
                    endif;
                    ?>
                </div>
                <div class="col-sm-auto">
                    <div class="main-header__top__fbcw">
                        <!-- Feedback Company Widget (start) -->
                        <script type="text/javascript" id="__fbcw__9b71cca3-9f90-441f-9f8c-58321e11bccb">
                            "use strict";!function(){
                                window.FeedbackCompanyWidgets=window.FeedbackCompanyWidgets||{queue:[],loaders:[
                                    ]};var options={uuid:"9b71cca3-9f90-441f-9f8c-58321e11bccb",version:"1.2.1",prefix:""};if(
                                    void 0===window.FeedbackCompanyWidget){if(
                                    window.FeedbackCompanyWidgets.queue.push(options),!document.getElementById(
                                        "__fbcw_FeedbackCompanyWidget")){var scriptTag=document.createElement("script")
                                ;scriptTag.onload=function(){if(window.FeedbackCompanyWidget)for(
                                    ;0<window.FeedbackCompanyWidgets.queue.length;
                                )options=window.FeedbackCompanyWidgets.queue.pop(),
                                        window.FeedbackCompanyWidgets.loaders.push(
                                            new window.FeedbackCompanyWidgetLoader(options))},
                                    scriptTag.id="__fbcw_FeedbackCompanyWidget",
                                    scriptTag.src="https://www.feedbackcompany.com/includes/widgets/feedback-company-widget.min.js"
                                    ,document.body.appendChild(scriptTag)}
                                }else window.FeedbackCompanyWidgets.loaders.push(
                                        new window.FeedbackCompanyWidgetLoader(options))}();
                        </script>
                        <!-- Feedback Company Widget (end) -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header__content">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <nav class="main-navigation navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMainMenu" aria-controls="navbarMainMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                        wp_nav_menu( array(
                                'theme_location'    => 'main-menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbarMainMenu',
                                'menu_class'        => 'navbar-nav mr-auto',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>
                    </nav>
                </div>
                <div class="col-md-4 logo-container">
                    <div class="main-header__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_field('tpl_option_companyname-long','option'); ?>" rel="home">
                            <?php
                            $logoimage = get_field('tpl_option_logo','option');
                            $logosize = 'medium'; // (thumbnail, medium, large, full or custom size)
                            if( $logoimage ) {
                                echo wp_get_attachment_image( $logoimage, $logosize, "", array( "class" => "img-fluid" ) );
                            }
                            echo get_field('tpl_option_companyname-long','option');
                            ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 main-header__contact">
                    <div class="main-header__contact-container">
                        icons
                    </div>
                    <?php echo get_search_form( $echo ); ?>
                </div>

            </div>
        </div>
    </div>
    <div class="category-navigation">
        <div class="container">
            <nav>
                <ul class="nav">
                    <?php

                    $orderby = 'name';
                    $order = 'asc';
                    $hide_empty = false;
                    $parent = 0;
                    $cat_args = array(
                        'orderby'       => $orderby,
                        'order'         => $order,
                        'hide_empty'    => $hide_empty,
                        'parent'        => $parent,
                    );

                    $product_categories = get_terms( 'product_cat', $cat_args );

                    if( !empty($product_categories) ){
                        foreach ($product_categories as $key => $category) {
                            $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );

                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="'.get_term_link($category).'" >';
                            echo $category->name;
                            echo '</a>';
                            echo '</li>';
                        }
                    }
                    ?>
                    <?php rewind_posts(); ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main class="main-content" role="main">
