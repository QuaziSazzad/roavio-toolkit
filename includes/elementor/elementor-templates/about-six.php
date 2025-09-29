<?php if ('layout_six' == $settings['layout_type']) : ?>
    <!-- About Section-2 Start -->
    <section class="about-section-2 section-padding fix">
        <div class="container">
            <div class="about-wrapper-2 style-2">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="about-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_six_section_title'])) : ?>
                                    <<?php echo esc_attr($settings['layout_six_title_tag'] ?? 'h2'); ?> class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo rt_kses_basic($settings['layout_six_section_title']); ?>
                                    </<?php echo esc_attr($settings['layout_six_title_tag'] ?? 'h2'); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_six_description'])) : ?>
                                <p class="text wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo rt_kses_basic($settings['layout_six_description']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="about-item">
                                <div class="about-image wow img-custom-anim-left">
                                    <?php rt_elementor_rendered_image($settings, 'layout_six_left_image'); ?>
                                </div>
                                <div class="right-content wow fadeInUp" data-wow-delay=".3s">
                                    <?php if (!empty($settings['layout_six_tabs'])) : ?>
                                        <ul class="nav">
                                            <?php foreach ($settings['layout_six_tabs'] as $index => $tab) : ?>
                                                <?php if (!empty($tab['tab_title'])) : ?>
                                                    <li class="nav-item">
                                                        <a href="#tab-<?php echo esc_attr($index); ?>" data-bs-toggle="tab" class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>">
                                                            <?php echo esc_html($tab['tab_title']); ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                        <div class="tab-content">
                                            <?php foreach ($settings['layout_six_tabs'] as $index => $tab) : ?>
                                                <div id="tab-<?php echo esc_attr($index); ?>" class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>">
                                                    <div class="content">
                                                        <?php if (!empty($tab['tab_content'])) : ?>
                                                            <p>
                                                                <?php echo rt_kses_basic($tab['tab_content']); ?>
                                                            </p>
                                                        <?php endif; ?>
                                                        <?php if (!empty($tab['tab_features'])) : ?>
                                                            <ul class="list">
                                                                <?php foreach ($tab['tab_features'] as $feature) : ?>
                                                                    <li>
                                                                        <?php if (!empty($feature['feature_icon'])) : ?>
                                                                            <?php \Elementor\Icons_Manager::render_icon($feature['feature_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                                        <?php else : ?>
                                                                            <i class="fa-solid fa-check"></i>
                                                                        <?php endif; ?>
                                                                        <?php echo esc_html($feature['feature_text']); ?>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                        <?php if (!empty($tab['tab_button_text']) && !empty($tab['tab_button_url']['url'])) : ?>
                                                            <a href="<?php echo esc_url($tab['tab_button_url']['url']); ?>"
                                                                class="theme-btn"
                                                                <?php if ($tab['tab_button_url']['is_external']) : ?>target="_blank" <?php endif; ?>
                                                                <?php if ($tab['tab_button_url']['nofollow']) : ?>rel="nofollow" <?php endif; ?>>
                                                                <?php echo esc_html($tab['tab_button_text']); ?>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-image-item">
                            <div class="about-image-2 wow img-custom-anim-top">
                                <?php rt_elementor_rendered_image($settings, 'layout_six_right_image'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>