<section class="widget bg-primary cta">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="widget__content">
                    <h4 class="widget__content__title">Benieuwd wat we voor u kunnen betekenen?</h4>
                    <div class="widget__content__text">
                        <p>Neem contact op voor de mogelijkheden</p>
                        <ul class="nav">
                            <li class="nav-item">
                                <?php if (get_field('option_company_phonenumber', 'option') != false) { echo '<a class="nav-link btn btn--transparent-primary" href="tel:' . str_replace(array(':', '\\', '/', '-', ' '), '', get_field('option_company_phonenumber', 'option')) . '"><i class="fa fa-mobile"></i>' . get_field('option_company_phonenumber', 'option') . '</a>' ;} ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn--transparent-primary" href="<?php echo get_site_url(); ?>/contact/"><i class="fa fa-envelope"></i>Contact</a>
                            </li>
                        </ul>
                        <!--
                    <?php/*
                    if (get_field('vdv_cta_text') != '') {
                        the_field('vdv_cta_text');
                    } else {
                        the_field('vdv_cta_base', 'option');
                    }*/
                    ?>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>