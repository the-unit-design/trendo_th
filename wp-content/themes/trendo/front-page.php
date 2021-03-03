<?php
/**
 * The front-page template file
 */

get_header(); ?>

<?php
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

if ($backgroundImg) {

    $bgImage = $backgroundImg[0];

} elseif (get_field('option_default_headerimage', 'option')) {
    $bgImage = get_field('option_default_headerimage', 'option');
} else {
    $bgImage = get_template_directory_uri() . '/assets/images/header_noimage.jpg';
}

?>
<!--
<section class="teaser">
    <div class="teaser__slider" style="background-image: url(<?php /* echo $bgImage; */ ?>)">
    <?php if( have_rows('homepage_header_images') ): ?>


        <?php while( have_rows('homepage_header_images') ): the_row();

            // vars
            $teaserimage = get_sub_field('homepage_header_afbeelding');

            ?>

            <div style="background-image: url(<?php echo $teaserimage['url']; ?>" ></div>


        <?php endwhile; ?>

    <?php endif; ?>
    </div>
    <div class="teaser__overlay">
        <div class="teaser__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="teaser__content__title"><span><?php bloginfo( 'description' ); ?></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<article class="article">
    <div class="teaser">

            <div class="teaser__content">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/header-example.jpg" alt="" />
            </div>
        <!--
        <div class="container">
            <div class="teaser__slider">
                <div class="div">
                    <img src="https://cdn.webshopapp.com/shops/185213/files/322581630/carmen-adore-hunter-direct-leverbaar.jpg" alt="">
                </div>
                <div class="div">
                    <img src="https://cdn.webshopapp.com/shops/185213/files/322582270/diane-kiss-direct-leverbaar.jpg" alt="">
                </div>
            </div>
        </div>
        -->
    </div>
    <section class="section categories">
        <div class="container">
            <h2 class="section__title text-center">Bekijk hier de collectie</h2>
            <?php
            $orderby = 'name';
            $order = 'asc';
            $hide_empty = true ;
            $cat_args = array(
                'parent'     => 0,
                'orderby'    => $orderby,
                'order'      => $order,
                'hide_empty' => $hide_empty,
            );

            $product_categories = get_terms( 'product_cat', $cat_args );

            if( !empty($product_categories) ){
                echo '<div class="row justify-content-center">';
                foreach ($product_categories as $key => $category) {
                    $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );

                    echo '<div class="col-md-4">';
                    echo '<a class="categories__item" href="'.get_term_link($category).'" >';
                    echo '<figure class="categories__item__image">';
                    echo wp_get_attachment_image( $thumbnail_id,array(600,400),"", array( "class" => "img-fluid" ) );
                    echo '</figure>';
                    echo '<div class="categories__item__content">';
                    echo '<h3 class="categories__item__content__title">' . $category->name . '</h3>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>
    </section>
    <div class="container">
        <div class="article__content">
            <div class="row justify-content-between">

            </div>
        </div>
    </div>
    <section class="section bg-gray1 about-us">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="about-us__shop">
                        <figure class="about-us__shop__image">
                            <img class="img-fluid" src="https://picsum.photos/750/560?image=1060" alt="" />
                        </figure>
                        <div class="about-us__shop__content">
                            <h2 class="about-us__shop__content__title">TRENDO LIVING ROERMOND</h2>
                            <p>Bezoek onze ruime winkel en krijg een goed beeld van ons ruime aanbod. Of krijg persoonlijk advies van onze stijlisten.</p>
                            <a class="btn btn--primary" href="#">Contact en openingstijden</a>
                        </div>
                    </div>

                    <?php
                    /*
                    if ( have_posts() ) :

                        while ( have_posts() ) : the_post();
                            ?>
                            <header>
                                <?php the_title('<h1 class="section__title text-left">','</h1>'); ?>
                            </header>
                            <?php the_content(); ?>
                        <?php
                        endwhile;

                    endif;
                    */
                    ?>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            1600 M2 SHOWROOM
                        </div>
                        <div class="col-md-6">
                            NEDERLAND, BELGIË, DUITSLAND
                        </div>
                        <div class="col-md-6">
                            PERSOONLIJK ADVIES
                        </div>
                        <div class="col-md-6">
                            LIFESTYLE MEUBELEN
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog">
        <div class="container">
            <h2 class="section__title text-center">Inspiratie</h2>
            <?php
            $taxonomies = get_terms( array(
                'taxonomy' => 'category',
                'parent'    => 1,
                'hide_empty' => false
            ) );

            if ( !empty($taxonomies) ) :
                echo '<div class="row">';
                $counter = 1;
                $category_images = array("1", "635", "1060", "836", "42");
                foreach( $taxonomies as $category ) {
                    $term_link = get_term_link( $category );
                    if ( $counter == 1 || $counter == 2) {
                        $blogclass = "col-md-2";
                        $blocktype = "blog__category--small";
                    } else {
                        $blogclass = "col-md-4";
                        $blocktype = "blog__category--big";
                    }
                    echo '<div class="' . $blogclass . '" title="' . $category_images[$counter] . '"><a class="blog__category ' . $blocktype . '" href="'.$term_link.'"><figure class="blog__category__image"><img class="img-fluid" src="https://picsum.photos/640/480?image=' . $category_images[$counter] . '" alt=""></figure>';
                    echo '<div class="blog__category__content">';
                    echo '<h4 class="blog__category__content__title">' . $category->name . '</h4>';
                    echo '<p class="blog__category__content__text">Hier komt een stukje tekst met uitleg.</p>';
                    echo '</div>';
                    echo '</a></div>';
                    $counter++;
                }
                echo '</div>';

            endif;
            ?>
        </div>
    </section>
    <!--
    <section class="section cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                    <h2>Heeft u een vraag?</h2><a name="contact"></a>
                    <?php gravity_form( 2, false, false, false, '', false ); ?>
                </div>
            </div>
        </div>
    </section>
    -->
</article>

<?php get_footer(); ?>
