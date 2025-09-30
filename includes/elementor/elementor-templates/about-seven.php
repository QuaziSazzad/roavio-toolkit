<?php if ('layout_seven' == $settings['layout_type']) : ?>
    <!-- Tour-Dedicated Section Start -->
    <section class="tour-dedicated-section section-padding fix">
        <div class="container">
            <div class="tour-dedicated-wrapper">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="tour-dedicated-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_seven_title'])) : ?>
                                    <<?php echo esc_attr($settings['layout_seven_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo rt_kses_basic($settings['layout_seven_title']); ?>
                                    </<?php echo esc_attr($settings['layout_seven_title_tag']); ?>>
                                <?php endif; ?>

                                <?php if (!empty($settings['layout_seven_description'])) : ?>
                                    <p class="text">
                                        <?php echo rt_kses_basic($settings['layout_seven_description']); ?>
                                    </p>
                                <?php endif; ?>

                                <div class="tour-dedicated-item">
                                    <div class="left-icon-item">
                                        <div class="icon-item">
                                            <div class="icon">
                                                <?php \Elementor\Icons_Manager::render_icon($settings['layout_seven_feature_one_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            </div>
                                            <div class="content">
                                                <?php if (!empty($settings['layout_seven_feature_one_title'])) : ?>
                                                    <h5><?php echo rt_kses_basic($settings['layout_seven_feature_one_title']); ?></h5>
                                                <?php endif; ?>

                                                <?php if (!empty($settings['layout_seven_feature_one_description'])) : ?>
                                                    <p>
                                                        <?php echo rt_kses_basic($settings['layout_seven_feature_one_description']); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (!empty($settings['layout_seven_feature_one_btn_text'])) : ?>
                                                <a href="<?php echo esc_url($settings['layout_seven_feature_one_btn_url']['url']); ?>" class="theme-btn" <?php echo ($settings['layout_seven_feature_one_btn_url']['is_external']) ? 'target="_blank"' : ''; ?>>
                                                    <?php echo esc_html($settings['layout_seven_feature_one_btn_text']); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="icon-item">
                                            <div class="icon">
                                                <?php \Elementor\Icons_Manager::render_icon($settings['layout_seven_feature_two_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            </div>
                                            <div class="content">
                                                <?php if (!empty($settings['layout_seven_feature_two_title'])) : ?>
                                                    <h5><?php echo rt_kses_basic($settings['layout_seven_feature_two_title']); ?></h5>
                                                <?php endif; ?>

                                                <?php if (!empty($settings['layout_seven_feature_two_description'])) : ?>
                                                    <p>
                                                        <?php echo rt_kses_basic($settings['layout_seven_feature_two_description']); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb">
                                        <?php rt_elementor_rendered_image($settings, 'layout_seven_feature_image'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tour-image">
                            <?php rt_elementor_rendered_image($settings, 'layout_seven_main_image'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>