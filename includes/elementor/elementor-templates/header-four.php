<?php

use RoavioTheme\Classes\Roavio_Nav_Walker;

if ('layout_four' == $settings['layout_type']) : ?>
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url($settings['mobile_logo']['url']); ?>" width="<?php echo esc_attr($settings['mobile_logo_size']['width']); ?>" height="<?php echo esc_attr($settings['mobile_logo_size']['height']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <?php if (!empty($settings['sidebar_content'])) : ?>
                        <p class="text d-none d-xl-block">
                            <?php echo esc_html($settings['sidebar_content']); ?>
                        </p>
                    <?php endif; ?>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <?php if ($settings['sidebar_contact_title']) : ?>
                            <h3><?php echo esc_html($settings['sidebar_contact_title']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_one_select_cf7_form'])) :
                            echo do_shortcode('[contact-form-7 id="' . esc_attr($settings['layout_one_select_cf7_form']) . '"]');
                        endif; ?>
                        <div class="social-icon d-flex align-items-center">
                            <?php
                            if (!empty($settings['sidebar_social_icons'])) :
                                foreach ($settings['sidebar_social_icons'] as $social_icon) :
                            ?>
                                    <a href="<?php echo esc_url($social_icon['social_url']['url']); ?>" <?php if (!empty($social_icon['social_url']['is_external'])) : ?> target="_blank" <?php endif; ?>><?php \Elementor\Icons_Manager::render_icon($social_icon['social_icon'], ['aria-hidden' => 'true']); ?></a>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 header-4">
        <div class="container">
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
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <?php if ('yes' == $settings['enable_search']) : ?>
                            <div class="search-widget">
                                <form action="<?php echo esc_url(home_url('/')); ?>">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <input type="text" name="s" placeholder="<?php echo esc_attr($settings['search_placeholder']); ?>">
                                </form>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($settings['button_label'])) : ?>
                            <div class="header-button">
                                <a href="<?php echo esc_url($settings['button_url']['url']); ?>" <?php if (!empty($settings['button_url']['is_external'])) : ?> target="_blank" <?php endif; ?> class="theme-btn"><?php echo esc_html($settings['button_label']); ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>