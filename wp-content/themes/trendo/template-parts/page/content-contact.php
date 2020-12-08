<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '1920-x-380' );

if ($backgroundImg) {

    $bgImage = $backgroundImg[0];

} elseif (get_field('option_default_headerimage', 'option')) {
    $bgImage = get_field('option_default_headerimage', 'option');
} else {
    $bgImage = get_template_directory_uri() . '/assets/images/header_noimage.jpg';
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("article contact"); ?>>
    <header class="article__header" style="background-image: url('<?php echo $bgImage; ?>');">
        <div class="article__header__overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <div class="breadcrumbs">
                            <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="article__content">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </div>
                <div class="col-md-4">
                    <aside>
                        <?php get_template_part( 'template-parts/blocks/contact', 'block' ); ?>
                    </aside>
                </div>
            </div>
        </div>
    </div><!--
    <div id="googlemap" style="height: 400px;"></div>
    <script>
        var map;
        var vermeulen = {lat: 51.546634, lng: 5.632435};
        function initMap() {
            map = new google.maps.Map(document.getElementById('googlemap'), {
                center: vermeulen,
                zoom: 15,
                styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#dde6e8"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
            });
            var marker = new google.maps.Marker({
                position: vermeulen,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwL1zMoXpors_mJxNUpPr-cXhv_8kX7VM&callback=initMap" async defer></script>
    -->
</article><!-- #post-## -->