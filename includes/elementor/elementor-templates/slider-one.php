<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <section class="hero-section-1 fix">
        <div class="swiper-dot-3">
            <div class="dot"></div>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <?php if (!empty($settings['layout_one_slides'])) : ?>
                    <?php foreach ($settings['layout_one_slides'] as $slide) : ?>
                        <div class="swiper-slide">
                            <div class="hero-1">
                                <div class="hero-bg bg-cover" style="background-image: url(<?php echo esc_url($slide['layout_one_slide_background_image']['url']); ?>);">
                                </div>
                                <div class="container-fluid">
                                    <div class="row g-4 justify-content-between align-items-end">
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="hero-content">
                                                <?php if (!empty($slide['layout_one_slide_title'])) : ?>
                                                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> data-animation="fadeInUp" data-delay="1.3s">
                                                        <?php echo rt_kses_basic($slide['layout_one_slide_title']); ?>
                                                    </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                                                <?php endif; ?>

                                                <?php if (!empty($slide['layout_one_slide_description'])) : ?>
                                                    <p data-animation="fadeInUp" data-delay="1.3s">
                                                        <?php echo esc_html($slide['layout_one_slide_description']); ?>
                                                    </p>
                                                <?php endif; ?>

                                                <?php if (!empty($slide['layout_one_slide_button_text'])) : ?>
                                                    <a href="<?php echo esc_url($slide['layout_one_slide_button_url']['url'] ?? '#'); ?>"
                                                        <?php if (!empty($slide['layout_one_slide_button_url']['is_external'])) : ?> target="_blank" <?php endif; ?>
                                                        class="theme-btn" data-animation="fadeInUp" data-delay="1.3s">
                                                        <?php echo esc_html($slide['layout_one_slide_button_text']); ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="counter-item" data-animation="fadeInUp" data-delay="1.3s">
                                                <?php if (!empty($slide['layout_one_counter_number_1'])) : ?>
                                                    <div class="content">
                                                        <h2><span class="count"><?php echo esc_html($slide['layout_one_counter_number_1']); ?></span><?php echo esc_html($slide['layout_one_counter_suffix_1'] ?? ''); ?></h2>
                                                        <?php if (!empty($slide['layout_one_counter_text_1'])) : ?>
                                                            <p><?php echo esc_html($slide['layout_one_counter_text_1']); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($slide['layout_one_counter_number_2'])) : ?>
                                                    <div class="content">
                                                        <h2><span class="count"><?php echo esc_html($slide['layout_one_counter_number_2']); ?></span><?php echo esc_html($slide['layout_one_counter_suffix_2'] ?? ''); ?></h2>
                                                        <?php if (!empty($slide['layout_one_counter_text_2'])) : ?>
                                                            <p><?php echo esc_html($slide['layout_one_counter_text_2']); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>