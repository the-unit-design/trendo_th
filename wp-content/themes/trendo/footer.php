</main> <!-- End main-content -->

<?php if (is_front_page()) {
    /* get_template_part( 'template-parts/blocks/references', 'block' ); */
 } ?>
<footer class="main-footer">
    <div class="main-footer__content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <p class="main-footer__content__title">Klantenservice</p>
                </div>
                <div class="col-md-3">
                    <p class="main-footer__content__title">Winkels</p>
                </div>
                <div class="col-md-3">
                    <p class="main-footer__content__title">Inspiratie</p>
                    <!--
                    <p class="main-footer__content__title">Openingstijden</p>
                    <?php
                        $hoursMonday = get_field('tpl_option_hours_monday', 'option');
                        $hoursTuesday = get_field('tpl_option_hours_tuesday', 'option');
                        $hoursWednesday = get_field('tpl_option_hours_wednesday', 'option');
                        $hoursThursday = get_field('tpl_option_hours_thursday', 'option');
                        $hoursFriday = get_field('tpl_option_hours_friday', 'option');
                        $hoursSaturday = get_field('tpl_option_hours_saturday', 'option');
                        $hoursSunday = get_field('tpl_option_hours_sunday', 'option');
                    ?>
                    <table width="100%">
                        <tr>
                            <td>Maandag</td>
                            <td>
                                <?php
                                    if($hoursMonday['tpl_option_hours_monday_state']['value'] == 'closed') {
                                        echo $hoursMonday['tpl_option_hours_monday_state']['label'];
                                    } else {
                                        echo $hoursMonday['tpl_option_hours_monday_time']['tpl_option_hours_monday_time_open'] . ' - ' . $hoursMonday['tpl_option_hours_monday_time']['tpl_option_hours_monday_time_close'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Dinsdag</td>
                            <td>
                                <?php
                                if($hoursTuesday['tpl_option_hours_tuesday_state']['value'] == 'closed') {
                                    echo $hoursTuesday['tpl_option_hours_tuesday_state']['label'];
                                } else {
                                    echo $hoursTuesday['tpl_option_hours_tuesday_time']['tpl_option_hours_tuesday_time_open'] . ' - ' . $hoursTuesday['tpl_option_hours_tuesday_time']['tpl_option_hours_tuesday_time_close'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Woensdag</td>
                            <td>
                                <?php
                                if($hoursWednesday['tpl_option_hours_wednesday_state']['value'] == 'closed') {
                                    echo $hoursWednesday['tpl_option_hours_wednesday_state']['label'];
                                } else {
                                    echo $hoursWednesday['tpl_option_hours_wednesday_time']['tpl_option_hours_wednesday_time_open'] . ' - ' . $hoursWednesday['tpl_option_hours_wednesday_time']['tpl_option_hours_wednesday_time_close'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Donderdag</td>
                            <td>
                                <?php
                                if($hoursThursday['tpl_option_hours_thursday_state']['value'] == 'closed') {
                                    echo $hoursThursday['tpl_option_hours_thursday_state']['label'];
                                } else {
                                    echo $hoursThursday['tpl_option_hours_thursday_time']['tpl_option_hours_thursday_time_open'] . ' - ' . $hoursThursday['tpl_option_hours_thursday_time']['tpl_option_hours_thursday_time_close'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Vrijdag</td>
                            <td>
                                <?php
                                if($hoursFriday['tpl_option_hours_friday_state']['value'] == 'closed') {
                                    echo $hoursFriday['tpl_option_hours_friday_state']['label'];
                                } else {
                                    echo $hoursFriday['tpl_option_hours_friday_time']['tpl_option_hours_friday_time_open'] . ' - ' . $hoursFriday['tpl_option_hours_friday_time']['tpl_option_hours_friday_time_close'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Zaterdag</td>
                            <td>
                                <?php
                                if($hoursSaturday['tpl_option_hours_saturday_state']['value'] == 'closed') {
                                    echo $hoursSaturday['tpl_option_hours_saturday_state']['label'];
                                } else {
                                    echo $hoursSaturday['tpl_option_hours_saturday_time']['tpl_option_hours_saturday_time_open'] . ' - ' . $hoursSaturday['tpl_option_hours_saturday_time']['tpl_option_hours_saturday_time_close'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Zondag</td>
                            <td>
                                <?php
                                if($hoursSunday['tpl_option_hours_sunday_state']['value'] == 'closed') {
                                    echo $hoursSunday['tpl_option_hours_sunday_state']['label'];
                                } else {
                                    echo $hoursSunday['tpl_option_hours_sunday_time']['tpl_option_hours_sunday_time_open'] . ' - ' . $hoursSunday['tpl_option_hours_sunday_time']['tpl_option_hours_sunday_time_close'];
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    -->
                </div>
                <div class="col-md-3">
                    <!--
                    <p class="main-footer__content__title"><?php if (get_field('tpl_option_companyname', 'option')) { the_field('tpl_option_companyname', 'option'); } else { bloginfo('name'); } ?></p>
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
                    <ul class="social-media">
                        <?php if (get_field('tpl_option_facebook', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_facebook', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Facebook"><i class="fa fa-facebook-f"></i></a></li>';} ?>
                        <?php if (get_field('tpl_option_instagram', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_instagram', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Instagram"><i class="fa fa-instagram"></i></a></li>';} ?>
                        <?php if (get_field('tpl_option_twitter', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_twitter', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Twitter"><i class="fa fa-twitter"></i></a></li>';} ?>
                        <?php if (get_field('tpl_option_linkedin', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_linkedin', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' LinkedIn"><i class="fa fa-linkedin"></i></a></li>';} ?>
                        <?php if (get_field('tpl_option_youtube', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_youtube', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Youtube"><i class="fa fa-youtube"></i></a></li>';} ?>
                        <?php if (get_field('tpl_option_pinterest', 'option') != false) { echo '<li class="nav-item"><a class="nav-link" href="' . get_field('tpl_option_pinterest', 'option') . '" target="_blank" title="' . get_field('tpl_option_companyname', 'option') . ' Youtube"><i class="fa fa-pinterest"></i></a></li>';} ?>
                    </ul>
                    <hr/>
                    -->
                    <!-- Feedback Company Widget (start) -->
                    <script type="text/javascript" id="__fbcw__82f80a0c-8193-443c-806c-18d12959f689">
                        "use strict";!function(){
                            window.FeedbackCompanyWidgets=window.FeedbackCompanyWidgets||{queue:[],loaders:[
                                ]};var options={uuid:"82f80a0c-8193-443c-806c-18d12959f689",version:"1.2.1",prefix:""};if(
                                void 0===window.FeedbackCompanyWidget){if(
                                window.FeedbackCompanyWidgets.queue.push(options),!document.getElementById(
                                    "__fbcw_FeedbackCompanyWidget")){var scriptTag=document.createElement("script")
                            ;scriptTag.onload=function(){if(window.FeedbackCompanyWidget)for(
                                ;0<window.FeedbackCompanyWidgets.queue.length;
                            )options=window.FeedbackCompanyWidgets.queue.pop(),
                                    window.FeedbackCompanyWidgets.loaders.push(
                                        new window.FeedbackCompanyWidgetLoader(options))},
                                scriptTag.id="__fbcw_FeedbackCompanyWidget",
                                scriptTag.src="https://www.feedbackcompany.com/includes/widgets/feedback-company-widget.min.js"
                                ,document.body.appendChild(scriptTag)}
                            }else window.FeedbackCompanyWidgets.loaders.push(
                                    new window.FeedbackCompanyWidgetLoader(options))}();
                    </script>
                    <!-- Feedback Company Widget (end) -->
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 main-footer__copyright__left">&copy; <?php if (date("Y") != 2020) { echo '2020 - '; }?><?php echo date("Y"); ?> | <strong><?php bloginfo('name') ?></strong></div>
                <div class="col-12 col-md-6 main-footer__copyright__right">
                    Ontwerp &amp; Realisatie: <a href="https://www.theunitdesign.nl" title="Website laten maken?" target="_blank">The Unit</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>