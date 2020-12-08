<div class="col-md-4">
    <article id="post-<?php the_ID(); ?>" <?php post_class("blog__post"); ?>>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
        <header>
            <?php
            if ( has_post_thumbnail() ) {

                $bgImgId = get_post_thumbnail_id(get_the_ID());
                $bgImgUrl = wp_get_attachment_image_url( $bgImgId, 'medium' );
                $bgImgSrcset = wp_get_attachment_image_srcset( $bgImgId, 'medium' );
                $bgImgSizes = wp_get_attachment_image_sizes( $bgImgId, 'medium' );
                $backgroundImgNewsData = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), '510-x-340' );
                $backgroundImgNews = $backgroundImgNewsData[0];
                echo '<figure class="blog__post__image" style="background-image: url(' . $backgroundImgNews . ')">';
                the_post_thumbnail('full',['class' => 'img-fluid', 'title' => 'Feature image']);
                echo '</figure>';
                /*echo '<img src="' . $bgImgUrl . '" srcset="' . $bgImgSrcset . '" sizes="' . $bgImgSizes . '" />';*/
            } else {
                $backgroundImgNews = get_field('sec_base_employee_image', 'option');
                echo '<figure class="blog__post__image no-cover" style="background-image: url(' . get_template_directory_uri() . '/assets/images/no-image.svg)"></figure>';
            }
            ?>
            <h2 class="blog__post__title">
                <?php the_title(); ?>
            </h2>
        </header><!-- .entry-header -->
        </a>
    </article><!-- #post-## -->
</div>