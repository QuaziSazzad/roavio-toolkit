<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Breadcrumb-Wrapper Section Start -->
    <div class="breadcrumb-wrapper-4 fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_two_background_image']['url']); ?>);">
        <div class="container">
            <div class="breadcrumb-top-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <?php if (!empty($settings['layout_two_page_title'])) : ?>
                            <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                                <?php echo rt_kses_basic($settings['layout_two_page_title']); ?>
                            </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                        <?php endif; ?>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <?php if (!empty($settings['layout_two_home_text'])) : ?>
                            <li>
                                <a href="<?php echo esc_url($settings['layout_two_home_url']['url']); ?>">
                                    <?php echo rt_kses_basic($settings['layout_two_home_text']); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_two_current_page_text'])) : ?>
                            <li class="style-2 style-3">
                                <?php echo rt_kses_basic($settings['layout_two_current_page_text']); ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="content">
                    <?php if (!empty($settings['layout_two_count_number'])) : ?>
                        <h2><span class="count"><?php echo rt_kses_basic($settings['layout_two_count_number']); ?></span>+</h2>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_two_count_text'])) : ?>
                        <p><?php echo rt_kses_basic($settings['layout_two_count_text']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>