<section class="section references">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="references__title">Onze referenties</h3>
                <div class="references__slider">
                    <?php

                    $argsReferences = array(
                        'post_type' => 'cpt_references',
                        'order'     => 'ASC',
                        'orderby'   => 'rand'
                    );
                    $queryReferences = new WP_Query( $argsReferences ); ?>

                    <?php if ( $queryReferences->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $queryReferences->have_posts() ) : $queryReferences->the_post(); ?>
                            <div>
                                <a class="references__slider__item" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>