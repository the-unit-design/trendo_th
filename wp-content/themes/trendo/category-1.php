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
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="text-center">Wooninspiratie van Trendo Living</h1>
                                <p class="text-center mb-5">Hier komt een tekst!</p>
                                <p class="text-center">Kies je categorie...</p>
                            </div>
                        </div>
                        <?php
                        $blogterms = get_terms( array(
                            'taxonomy' => 'category',
                            'parent'   => 1,
                            'hide_empty' => false
                        ) );

                        if ( ! empty( $blogterms ) && ! is_wp_error( $blogterms ) ) {
                            $count = count( $blogterms );
                            $i = 0;
                            echo '<div class="row">';
                            foreach ( $blogterms as $term ) {
                                $i++;
                                echo '<div class="col-md-3"><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '"><figure><img class="img-fluid" src="https://picsum.photos/640/480?image=0" alt=""></figure><h3 class="text-center">' . $term->name . '</h3></a></div>';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </section>
                <section class="section bg-gray1">
                    <div class="container">
                        <h2 class="section__title">Meer inspiratie? Volg ons!</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="text-center">
                            <ul class="social-media social-media--dark">
                                <?php if (get_field('tpl_option_facebook', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_facebook', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Facebook"><i class="fa fa-facebook-f"></i></a></li>';} ?>
                                <?php if (get_field('tpl_option_instagram', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_instagram', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Instagram"><i class="fa fa-instagram"></i></a></li>';} ?>
                                <?php if (get_field('tpl_option_twitter', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_twitter', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Twitter"><i class="fa fa-twitter"></i></a></li>';} ?>
                                <?php if (get_field('tpl_option_linkedin', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_linkedin', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' LinkedIn"><i class="fa fa-linkedin"></i></a></li>';} ?>
                                <?php if (get_field('tpl_option_youtube', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_youtube', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Youtube"><i class="fa fa-youtube"></i></a></li>';} ?>
                                <?php if (get_field('tpl_option_pinterest', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_pinterest', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Youtube"><i class="fa fa-pinterest"></i></a></li>';} ?>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="container">
                        <h2 class="section__title">Recente blogartikelen</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="row">
                                    <?php
                                    $args = array('posts_per_page' => 3);
                                    $the_query = new WP_Query( $args );
                                    if ( $the_query->have_posts() ) :
                                        while ( $the_query->have_posts() ) : $the_query->the_post();
                                            get_template_part( 'template-parts/post/archive', 'posts');
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="container">
                        <h2 class="section__title">Advies nodig?</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </section>
            </main><!-- #main -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer();