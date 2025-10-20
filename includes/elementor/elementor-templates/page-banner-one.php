<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <div class="breadcrumb-wrapper-2 fix bg-cover" style="background-image: url('<?php echo esc_url($settings['layout_one_background_image']['url']); ?>');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <?php if (!empty($settings['layout_one_page_title'])) : ?>
                        <<?php echo esc_attr($settings['layout_one_page_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                            <?php echo rt_kses_basic($settings['layout_one_page_title']); ?>
                        </<?php echo esc_attr($settings['layout_one_page_title_tag']); ?>>
                    <?php endif; ?>
                </div>
                <?php if ('yes' === $settings['layout_one_show_breadcrumb']) : ?>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="<?php echo esc_url($settings['layout_one_home_url']['url']); ?>" <?php echo ($settings['layout_one_home_url']['is_external'] ? ' target="_blank"' : ''); ?><?php echo ($settings['layout_one_home_url']['nofollow'] ? ' rel="nofollow"' : ''); ?>>
                                <?php echo esc_html($settings['layout_one_home_text']); ?>
                            </a>
                        </li>
                        <li class="style-2">
                            <?php echo esc_html($settings['layout_one_current_page_text']); ?>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>