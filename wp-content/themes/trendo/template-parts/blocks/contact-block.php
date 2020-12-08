<section class="widget submenu">
    <div class="row">
        <div class="col">
            <div class="widget__content">
                <div class="widget__content__text">
                    <h2 class="widget__content__text__title"><strong><?php if (get_field('tpl_option_companyname', 'option')) { the_field('tpl_option_companyname', 'option'); } else { bloginfo('name'); } ?></strong></h2>
                    <p class="main-footer__content__address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <?php if (get_field('tpl_option_address', 'option') != false) { echo "<span itemprop=\"streetAddress\">" . get_field('tpl_option_address', 'option') . '</span><br/>' ;} ?>
                        <?php if (get_field('tpl_option_zipcode', 'option') != false) { echo "<span itemprop=\"postalCode\">" . get_field('tpl_option_zipcode', 'option') . '</span><span>, </span>' ;} ?>
                        <?php if (get_field('tpl_option_city', 'option') != false) { echo "<span itemprop=\"addressLocality\">" . get_field('tpl_option_city', 'option') . '</span>' ;} ?>
                    </p>
                    <p class="main-footer__content__phone">
                        <?php if (get_field('tpl_option_phonenumber', 'option') != false) { echo '<a itemprop="telephone" href="tel:' . str_replace(array(':', '\\', '/', '-', ' '), '', get_field('tpl_option_phonenumber', 'option')) . '"><span itemprop="telephone">' . get_field('tpl_option_phonenumber', 'option') . '</span></a><br/>' ;} ?>
                        <?php if (get_field('tpl_option_mobile', 'option') != false) { echo '<a itemprop="telephone" href="tel:' . str_replace(array(':', '\\', '/', '-', ' '), '', get_field('tpl_option_mobile', 'option')) . '"><span itemprop="telephone">' . get_field('tpl_option_mobile', 'option') . '</span></a>' ;} ?>
                        <?php if (get_field('tpl_option_email', 'option') != false) { echo "<a href=mailto:" . get_field('tpl_option_email', 'option') . ">" . get_field('tpl_option_email', 'option') . "</a>" ;} ?>
                    </p>
                    <hr/>
                    <ul class="nav flex-column widget__content__text__social">
                        <?php if (get_field('option_company_facebook', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('option_company_facebook', 'option') . '" target="_blank" title="' . get_field('option_company_name', 'option') . ' Facebook"><i class="fa fa-facebook-f"></i>Facebook</a></li>';} ?>
                        <?php if (get_field('option_company_twitter', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('option_company_twitter', 'option') . '" target="_blank" title="' . get_field('option_company_name', 'option') . ' Twitter"><i class="fa fa-twitter"></i>Twitter</a></li>';} ?>
                        <?php if (get_field('option_company_google', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('option_company_google', 'option') . '" target="_blank" title="' . get_field('option_company_name', 'option') . ' Google"><i class="fa fa-google"></i>Google</a></li>';} ?>
                        <?php if (get_field('option_company_linkedin', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('option_company_linkedin', 'option') . '" target="_blank" title="' . get_field('option_company_name', 'option') . ' LinkedIn"><i class="fa fa-linkedin"></i>LinkedIn</a></li>';} ?>
                        <?php if (get_field('option_company_youtube', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('option_company_youtube', 'option') . '" target="_blank" title="' . get_field('option_company_name', 'option') . ' Youtube"><i class="fa fa-youtube"></i>Youtube</a></li>';} ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>