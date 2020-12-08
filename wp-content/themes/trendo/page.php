<?php
/**
 * The page template file
 */

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php

                if ( have_posts() ) {

                    while ( have_posts() ) {
                        the_post();

                        global $post;
                        $post_slug = $post->post_name;
                        get_template_part( 'template-parts/page/content', $post_slug);
                    }
                }

                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer();
