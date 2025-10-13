<?php if ('layout_nine' == $settings['layout_type']) : ?>
    <!-- About Section Start -->
    <section class="about-section section-padding fix">
        <div class="container">
            <div class="about-wrapper-3">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="about-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_nine_title'])) : ?>
                                    <<?php echo esc_attr($settings['layout_nine_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo rt_kses_basic($settings['layout_nine_title']); ?>
                                    </<?php echo esc_attr($settings['layout_nine_title_tag']); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_nine_description'])) : ?>
                                <p class="text">
                                    <?php echo rt_kses_basic($settings['layout_nine_description']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="about-left-item">
                                <div class="left-image">
                                    <?php rt_elementor_rendered_image($settings, 'layout_nine_left_image'); ?>
                                </div>
                                <div class="right-item">
                                    <div class="count-item">
                                        <?php if (!empty($settings['layout_nine_counter_number'])) : ?>
                                            <div class="count-box">
                                                <h2><span class="count"><?php echo esc_html($settings['layout_nine_counter_number']); ?></span></h2>
                                            </div>
                                        <?php endif; ?>
                                        <div class="radius-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_nine_radius_image'); ?>
                                            <?php if (!empty($settings['layout_nine_video_url']['url'])) : ?>
                                                <a href="<?php echo esc_url($settings['layout_nine_video_url']['url']); ?>" class="video-btn video-popup" <?php echo ($settings['layout_nine_video_url']['is_external']) ? 'target="_blank"' : ''; ?> <?php echo ($settings['layout_nine_video_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                    <i class="fa-duotone fa-play"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if (!empty($settings['layout_nine_counter_text'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($settings['layout_nine_counter_text']); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_nine_button_text'])) : ?>
                                        <a href="<?php echo esc_url($settings['layout_nine_button_url']['url']); ?>" class="theme-btn" <?php echo ($settings['layout_nine_button_url']['is_external']) ? 'target="_blank"' : ''; ?> <?php echo ($settings['layout_nine_button_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                            <?php echo esc_html($settings['layout_nine_button_text']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-right-item">
                            <div class="about-box">
                                <?php if (!empty($settings['layout_nine_right_title'])) : ?>
                                    <h3>
                                        <?php echo rt_kses_basic($settings['layout_nine_right_title']); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_nine_feature_title_1'])) : ?>
                                    <div class="icon-item">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_nine_feature_icon_1'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <div class="content">
                                            <h5><?php echo esc_html($settings['layout_nine_feature_title_1']); ?></h5>
                                            <?php if (!empty($settings['layout_nine_feature_description_1'])) : ?>
                                                <p>
                                                    <?php echo rt_kses_basic($settings['layout_nine_feature_description_1']); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_nine_feature_title_2'])) : ?>
                                    <div class="icon-item style-2">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_nine_feature_icon_2'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <div class="content">
                                            <h5><?php echo esc_html($settings['layout_nine_feature_title_2']); ?></h5>
                                            <?php if (!empty($settings['layout_nine_feature_description_2'])) : ?>
                                                <p>
                                                    <?php echo rt_kses_basic($settings['layout_nine_feature_description_2']); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="right-image">
                                <?php rt_elementor_rendered_image($settings, 'layout_nine_right_image'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>