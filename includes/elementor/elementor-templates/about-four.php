<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!-- About Section-2 Start -->
    <section class="about-section-2 section-padding fix">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <?php if (!empty($settings['layout_four_title'])) : ?>
                                <div class="section-title mb-0">
                                    <<?php echo esc_attr($settings['layout_four_title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s">
                                        <?php echo rt_kses_basic($settings['layout_four_title']); ?>
                                    </<?php echo esc_attr($settings['layout_four_title_tag']); ?>>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_four_description'])) : ?>
                                <p class="text wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo wp_kses_post($settings['layout_four_description']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="about-item">
                                <div class="about-image wow img-custom-anim-left">
                                    <?php rt_elementor_rendered_image($settings, 'layout_four_image_one'); ?>
                                </div>
                                <div class="right-content wow fadeInUp" data-wow-delay=".3s">
                                    <ul class="nav">
                                        <?php if (!empty($settings['layout_four_tab_one_title'])) : ?>
                                            <li class="nav-item">
                                                <a href="#Course" data-bs-toggle="tab" class="nav-link active">
                                                    <?php echo esc_html($settings['layout_four_tab_one_title']); ?>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_four_tab_two_title'])) : ?>
                                            <li class="nav-item">
                                                <a href="#Curriculum" data-bs-toggle="tab" class="nav-link">
                                                    <?php echo esc_html($settings['layout_four_tab_two_title']); ?>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="Course" class="tab-pane fade show active">
                                            <div class="content">
                                                <?php if (!empty($settings['layout_four_tab_one_content'])) : ?>
                                                    <p>
                                                        <?php echo wp_kses_post($settings['layout_four_tab_one_content']); ?>
                                                    </p>
                                                <?php endif; ?>
                                                <?php if (!empty($settings['layout_four_tab_one_features'])) : ?>
                                                    <ul class="list">
                                                        <?php foreach ($settings['layout_four_tab_one_features'] as $feature) : ?>
                                                            <?php if (!empty($feature['feature_text'])) : ?>
                                                                <li>
                                                                    <?php \Elementor\Icons_Manager::render_icon($feature['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                                    <?php echo esc_html($feature['feature_text']); ?>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                                <?php if (!empty($settings['layout_four_tab_one_button_text'])) : ?>
                                                    <a href="<?php echo esc_url($settings['layout_four_tab_one_button_url']['url']); ?>"
                                                        <?php echo ($settings['layout_four_tab_one_button_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                                        <?php echo ($settings['layout_four_tab_one_button_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>
                                                        class="theme-btn">
                                                        <?php echo esc_html($settings['layout_four_tab_one_button_text']); ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div id="Curriculum" class="tab-pane fade">
                                            <div class="content">
                                                <?php if (!empty($settings['layout_four_tab_two_content'])) : ?>
                                                    <p>
                                                        <?php echo wp_kses_post($settings['layout_four_tab_two_content']); ?>
                                                    </p>
                                                <?php endif; ?>
                                                <?php if (!empty($settings['layout_four_tab_two_features'])) : ?>
                                                    <ul class="list">
                                                        <?php foreach ($settings['layout_four_tab_two_features'] as $feature) : ?>
                                                            <?php if (!empty($feature['feature_text'])) : ?>
                                                                <li>
                                                                    <?php \Elementor\Icons_Manager::render_icon($feature['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                                    <?php echo esc_html($feature['feature_text']); ?>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                                <?php if (!empty($settings['layout_four_tab_two_button_text'])) : ?>
                                                    <a href="<?php echo esc_url($settings['layout_four_tab_two_button_url']['url']); ?>"
                                                        <?php echo ($settings['layout_four_tab_two_button_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                                        <?php echo ($settings['layout_four_tab_two_button_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>
                                                        class="theme-btn">
                                                        <?php echo esc_html($settings['layout_four_tab_two_button_text']); ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-item">
                            <div class="about-image-2 wow img-custom-anim-top">
                                <?php rt_elementor_rendered_image($settings, 'layout_four_image_two'); ?>
                            </div>
                            <div class="about-image-2 style-2 wow img-custom-anim-right">
                                <?php rt_elementor_rendered_image($settings, 'layout_four_image_three'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>