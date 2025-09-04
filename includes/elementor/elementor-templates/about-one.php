<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- About Section Start -->
    <section class="about-section section-right fix">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-4">
                        <div class="about-left-item">
                            <?php if (!empty($settings['layout_one_title'])) : ?>
                                <div class="section-title mb-0">
                                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo rt_kses_basic($settings['layout_one_title']); ?>
                                    </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_one_sub_title'])) : ?>
                                <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['layout_one_sub_title']); ?></<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
                            <?php endif; ?>
                            <div class="about-image wow img-custom-anim-left">
                                <?php rt_elementor_rendered_image($settings, 'layout_one_image_one'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="about-right-item">
                            <div class="about-image-item">
                                <div class="about-image-2 wow img-custom-anim-left">
                                    <?php rt_elementor_rendered_image($settings, 'layout_one_image_two'); ?>
                                </div>
                                <?php if (!empty($settings['layout_one_box_title']) || !empty($settings['layout_one_box_description'])) : ?>
                                    <div class="about-box wow img-custom-anim-right">
                                        <?php if (!empty($settings['layout_one_box_icon']['url'])) : ?>
                                            <div class="icon">
                                                <img src="assets/img/home-1/icon/01.svg" alt="img">
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_one_box_title'])) : ?>
                                            <h5><?php echo esc_html($settings['layout_one_box_title']); ?></h5>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_one_box_description'])) : ?>
                                            <p>
                                                <?php echo wp_kses_post($settings['layout_one_box_description']); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <?php if (!empty($settings['layout_one_content'])) : ?>
                                    <p class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo wp_kses_post($settings['layout_one_content']); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_one_features'])) : ?>
                                    <div class="list-item wow fadeInUp" data-wow-delay=".5s">
                                        <?php
                                        $features = $settings['layout_one_features'];
                                        $feature_count = count($features);
                                        $features_per_column = ceil($feature_count / 3);
                                        $feature_chunks = array_chunk($features, $features_per_column);

                                        foreach ($feature_chunks as $chunk) : ?>
                                            <ul class="list">
                                                <?php foreach ($chunk as $feature) : ?>
                                                    <li>
                                                        <?php \Elementor\Icons_Manager::render_icon($feature['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                        <?php echo esc_html($feature['feature_text']); ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_one_button_text'])) : ?>
                                    <a href="<?php echo esc_url($settings['layout_one_button_url']['url']); ?>" class="theme-btn wow fadeInUp" data-wow-delay=".3s"
                                        <?php echo ($settings['layout_one_button_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                        <?php echo ($settings['layout_one_button_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                        <?php echo esc_html($settings['layout_one_button_text']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>