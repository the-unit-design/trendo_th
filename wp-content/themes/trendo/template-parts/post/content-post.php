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

} else {
    //$bgImage = get_field('sec_base_header_image', 'option');
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("article"); ?>>
    <header class="article__header" style="background-image: url('<?php echo $bgImage; ?>');">
        <div class="article__header__overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="article__content">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php
                            if (get_field('sec_news_source')) { ?>
                                <hr/>
                                <i>Bron: <a href="<?php the_field('sec_news_source'); ?>" rel="nofollow"><?php the_field('sec_news_source'); ?></a></i>
                            <?php }
                        ?>
                    </div><!-- .entry-content -->
                </div>
                <div class="col-4">
                    <aside>
                        <?php get_template_part( 'template-parts/blocks/submenu', 'block' ); ?>
                        <?php get_template_part( 'template-parts/blocks/cta-block', 'small' ); ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-## -->