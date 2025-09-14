<?php if ('layout_five' == $settings['layout_type']) : ?>
    <!-- Commitmentature Section-2 Start -->
    <section class="commitment-section section-padding fix header-bg">
        <div class="container">
            <div class="commitment-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="commitment-content">
                            <?php if (!empty($settings['layout_five_title'])) : ?>
                                <div class="section-title mb-0">
                                    <<?php echo esc_attr($settings['layout_five_title_tag']); ?> class="text-white">
                                        <?php echo rt_kses_basic($settings['layout_five_title']); ?>
                                    </<?php echo esc_attr($settings['layout_five_title_tag']); ?>>
                                </div>
                            <?php endif; ?>
                            <div class="commitment-left">
                                <div class="commitment-image wow img-custom-anim-left">
                                    <?php rt_elementor_rendered_image($settings, 'layout_five_left_image'); ?>
                                </div>
                                <div class="count-item">
                                    <?php if (!empty($settings['layout_five_description'])) : ?>
                                        <p class="wow fadeInUp" data-wow-delay=".3s">
                                            <?php echo wp_kses_post($settings['layout_five_description']); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_five_count_1_number']) || !empty($settings['layout_five_count_2_number'])) : ?>
                                        <div class="count-content wow fadeInUp" data-wow-delay=".5s">
                                            <?php if (!empty($settings['layout_five_count_1_number'])) : ?>
                                                <div class="content">
                                                    <h2><span class="count"><?php echo esc_html($settings['layout_five_count_1_number']); ?></span>+</h2>
                                                    <?php if (!empty($settings['layout_five_count_1_text'])) : ?>
                                                        <p><?php echo esc_html($settings['layout_five_count_1_text']); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['layout_five_count_2_number'])) : ?>
                                                <div class="content">
                                                    <h2><span class="count"><?php echo esc_html($settings['layout_five_count_2_number']); ?></span>+</h2>
                                                    <?php if (!empty($settings['layout_five_count_2_text'])) : ?>
                                                        <p><?php echo esc_html($settings['layout_five_count_2_text']); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="commitment-image-item">
                            <div class="commitment-image wow img-custom-anim-top">
                                <?php rt_elementor_rendered_image($settings, 'layout_five_right_image_1'); ?>
                                <?php if (!empty($settings['layout_five_video_url']['url'])) : ?>
                                    <a href="<?php echo esc_url($settings['layout_five_video_url']['url']); ?>" class="video-btn video-popup"
                                        <?php echo ($settings['layout_five_video_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                        <?php echo ($settings['layout_five_video_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                        <i class="fa-duotone fa-play"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="commitment-image style-2 wow img-custom-anim-right">
                                <?php rt_elementor_rendered_image($settings, 'layout_five_right_image_2'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>