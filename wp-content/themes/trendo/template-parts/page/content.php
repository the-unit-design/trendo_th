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
<article id="post-<?php the_ID(); ?>" <?php post_class("article"); ?>>
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
                        <?php get_template_part( 'template-parts/blocks/submenu', 'block' ); ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <?php if( have_rows('vi_employees') ): ?>
    <section class="section employees bg-primary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section__title text-center">Onze <strong>medewerkers</strong></h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php while( have_rows('vi_employees') ): the_row();

                    // vars
                    $emplName = get_sub_field('vi_employee_name');
                    $emplTitle = get_sub_field('vi_employee_title');
                    $emplImage = get_sub_field('vi_employee_image');

                    ?>
                    <div class="col-md-4 employee">
                        <div class="employee__image text-center">
                            <figure>
                                <img class="img-fluid" src="<?php echo $emplImage['url']; ?>" alt="<?php echo $emplImage['alt'] ?>" />
                            </figure>
                        </div>
                        <p class="employee__name text-center"><?php echo $emplName; ?></p>
                        <p class="employee__title text-center"><?php echo $emplTitle; ?></p>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</article><!-- #post-## -->