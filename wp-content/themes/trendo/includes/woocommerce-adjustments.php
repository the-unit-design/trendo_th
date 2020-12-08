<?php

/* Category */


/* Single product */
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
add_action('woocommerce_single_product_summary', 'unit_woocommerce_template_single_title',5);

if ( ! function_exists( 'unit_woocommerce_template_single_title' ) ) {
   function unit_woocommerce_template_single_title() {
?>
     <h1 itemprop="name" class="product__title product_title entry-title"><span><?php the_title(); ?></span></h1>
<?php
    }
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 11 );

/* Single product | Estimated Deliverytime */
add_action('woocommerce_single_product_summary', 'unit_woocommerce_template_edt',8);

if ( ! function_exists( 'unit_woocommerce_template_edt' ) ) {
    function unit_woocommerce_template_edt() {
        ?>
        <p style="font-size: 14px; font-weight: bold;"><i class="fa fa-truck" aria-hidden="true"></i> Levertijd: week 52</p>
        <?php
    }
}

/* Single product | Usps */
add_action('woocommerce_single_product_summary', 'unit_woocommerce_template_usps',60);

if ( ! function_exists( 'unit_woocommerce_template_usps' ) ) {
    function unit_woocommerce_template_usps() {
        if( have_rows('tpl_option_usps','option') ):
            ?>
            <ul class="nav flex-column product__usps">
                <?php
                while( have_rows('tpl_option_usps','option') ) : the_row();
                    $uspTitle = get_sub_field('tpl_option_usps_title','option');
                    $uspIcon = get_sub_field('tpl_option_usps_icon','option');
                    echo '<li class="nav-item" style="font-size: 12px;"><span class="nav-link product__usps__title"><i class="fa fa-check"></i>' . $uspTitle . '</span></li>';
                endwhile;
                ?>
            </ul>
        <?php
        endif;
                    ?>
        <?php
    }
}

/* Single product | Customer support */
add_action('woocommerce_single_product_summary', 'unit_woocommerce_template_support',65);

if ( ! function_exists( 'unit_woocommerce_template_support' ) ) {
    function unit_woocommerce_template_support() {
        if( have_rows('tpl_option_customerservice','option') ):
            ?>
            <div class="product__customer-support">
                <h4 class="product__customer-support__blocktitle"><?php echo esc_html__('Klantenservice', 'unittheme'); ?></h4>
                <ul class="nav flex-column">
                    <?php
                    while( have_rows('tpl_option_customerservice','option') ) : the_row();
                        $csTitle = get_sub_field('tpl_option_customerservice__title','option');
                        $csText = get_sub_field('tpl_option_customerservice_text','option');
                        $csIcon = get_sub_field('tpl_option_customerservice_icon','option');
                        echo '<li class="nav-item">';
                        echo '<a href="#" target="_blank" class="nav-link">';
                        echo '<i class="product__customer-support__icon fa '. $csIcon .'" aria-hidden="true"></i>';
                        echo '<span class="product__customer-support__title">';
                        echo $csTitle;
                        echo '</span>';
                        echo '<span class="product__customer-support__text">';
                        echo $csText;
                        echo '</span>';
                        echo '</a>';
                        echo '</li>';
                    endwhile;
                    ?>
                </ul>
            </div>
        <?php
        endif;
        ?>
        <?php
    }
}