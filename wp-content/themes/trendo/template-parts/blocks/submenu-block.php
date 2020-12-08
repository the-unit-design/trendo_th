<section class="widget submenu">
    <div class="row">
        <div class="col">
            <div class="widget__content">
                <div class="widget__content__text">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'main-menu',
                        'container'         => 'nav',
                        'container_class'   => 'widget__content__text__navigation__list',
                        'menu_id'           => 'services-menu-sidebar',
                        'menu_class'        => 'widget__content__text__navigation__list',
                    ) );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>