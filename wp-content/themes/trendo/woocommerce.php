<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="breadcrumbs">
                    <div class="container">
                        <?php woocommerce_breadcrumb(); ?>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <?php if (is_product_category()) { ?>
                            <div class="col-3">
                                <?php get_sidebar(); ?>
                                <?php echo woocommerce_get_sidebar(); ?>
                            </div>
                        <?php } ?>
                        <div class="col<?php if (is_product_category()) { echo "-9"; } ?>">
                            <?php
                            woocommerce_content();
                            ?>
                        </div>
                    </div>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->

    </div><!-- .wrap -->

<?php get_footer();
