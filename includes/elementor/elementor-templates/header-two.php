<?php

use RoavioTheme\Classes\Roavio_Nav_Walker;

if ('layout_two' == $settings['layout_type']) : ?>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 header-2">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
                                <img src="<?php echo esc_url($settings['logo']['url']); ?>" width="<?php echo esc_attr($settings['logo_size']['width']); ?>" height="<?php echo esc_attr($settings['logo_size']['height']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo-2">
                                <img src="<?php echo esc_url($settings['sticky_logo']['url']); ?>" width="<?php echo esc_attr($settings['logo_size']['width']); ?>" height="<?php echo esc_attr($settings['logo_size']['height']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'menu' => $settings['nav_menu'],
                                            'menu_class' => 'navigation clearfix',
                                            'container'       => '',
                                            'fallback_cb'     => false,
                                            'container_class' => '',
                                            'walker'          => new Roavio_Nav_Walker()
                                        )
                                    );
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <?php if ('yes' == $settings['enable_search']) : ?>
                            <a href="#" class="main-header__search search-toggler">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </a>
                        <?php endif; ?>
                        <div class="header__hamburger my-auto">
                            <div class="sidebar__toggle">
                                <i class="fa-solid fa-bars-staggered"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="<?php esc_url(home_url('/')); ?>">
                <input type="text" id="search" name="s" placeholder="<?php esc_attr($settings['search_placeholder']); ?>">
                <button type="submit" aria-label="search submit" class="search-btn">
                    <span><i class="fa-regular fa-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
    </div>
<?php endif; ?>