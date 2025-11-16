<?php if ('layout_eleven' == $settings['layout_type']) : ?>
    <!-- Feature Section-4 Start -->
    <section class="feature-section-4 section-padding fix">
        <div class="container">
            <div class="feature-wrapper-4">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="feature-content">
                            <div class="section-title mb-0">
                                <?php
                                if (!empty($settings['layout_eleven_title'])) :
                                ?>
                                    <<?php echo esc_attr($settings['layout_eleven_title_tag']); ?> class="text-anim sec-title">
                                        <?php echo rt_kses_basic($settings['layout_eleven_title']); ?>
                                    </<?php echo esc_attr($settings['layout_eleven_title_tag']); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_eleven_description'])) : ?>
                                <p class="text wow fadeInUp description" data-wow-delay=".5s">
                                    <?php echo rt_kses_basic($settings['layout_eleven_description']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="feature-left-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="feature-items">
                                    <?php if (!empty($settings['layout_eleven_feature_one_icon']['value'])) : ?>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_eleven_feature_one_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_eleven_feature_one_title'])) : ?>
                                        <h5><?php echo rt_kses_basic($settings['layout_eleven_feature_one_title']); ?></h5>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_eleven_feature_one_text'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($settings['layout_eleven_feature_one_text']); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_eleven_feature_one_button_text'])) :
                                        $button_url = !empty($settings['layout_eleven_feature_one_button_url']['url']) ? $settings['layout_eleven_feature_one_button_url']['url'] : '#';
                                        $target = !empty($settings['layout_eleven_feature_one_button_url']['is_external']) ? ' target="_blank"' : '';
                                        $nofollow = !empty($settings['layout_eleven_feature_one_button_url']['nofollow']) ? ' rel="nofollow"' : '';
                                    ?>
                                        <a href="<?php echo esc_url($button_url); ?>" class="theme-btn" <?php echo esc_attr($target . $nofollow); ?>>
                                            <?php echo esc_html($settings['layout_eleven_feature_one_button_text']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="feature-items">
                                    <?php if (!empty($settings['layout_eleven_feature_two_icon']['value'])) : ?>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_eleven_feature_two_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_eleven_feature_two_title'])) : ?>
                                        <h5><?php echo rt_kses_basic($settings['layout_eleven_feature_two_title']); ?></h5>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_eleven_feature_two_text'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($settings['layout_eleven_feature_two_text']); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_eleven_feature_two_group_image']['url'])) : ?>
                                        <div class="group-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_eleven_feature_two_group_image'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-right-item">
                            <div class="feature-thumb">
                                <?php rt_elementor_rendered_image($settings, 'layout_eleven_main_image', 'wow img-custom-anim-top'); ?>
                                <?php if (!empty($settings['layout_eleven_hero_box_bg']['url'])) : ?>
                                    <div class="hero-box bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_eleven_hero_box_bg']['url']); ?>);">
                                        <div class="top-item">
                                            <div class="cont">
                                                <?php if (!empty($settings['layout_eleven_tours_count'])) : ?>
                                                    <h2><span class="count"><?php echo esc_html($settings['layout_eleven_tours_count']); ?></span>+</h2>
                                                <?php endif; ?>
                                                <?php if (!empty($settings['layout_eleven_tours_text'])) : ?>
                                                    <p><?php echo esc_html($settings['layout_eleven_tours_text']); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (!empty($settings['layout_eleven_small_image']['url'])) : ?>
                                                <div class="small-image">
                                                    <?php rt_elementor_rendered_image($settings, 'layout_eleven_small_image',  'wow img-custom-anim-right'); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="bottom-item">
                                            <?php if (!empty($settings['layout_eleven_rating_number'])) : ?>
                                                <div class="box">
                                                    <h2><?php echo esc_html($settings['layout_eleven_rating_number']); ?></h2>
                                                </div>
                                            <?php endif; ?>
                                            <div class="right-content">
                                                <?php rt_elementor_rendered_image($settings, 'layout_eleven_rating_image'); ?>
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_eleven_bottom_image']['url'])) : ?>
                                <div class="feature-thumb style-4">
                                    <?php rt_elementor_rendered_image($settings, 'layout_eleven_bottom_image'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>