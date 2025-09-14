<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Feature-exprience Section-2 Start -->
    <section class="feature-exprience-section-2 fix header-bg">
        <div class="container custom-container-4">
            <div class="feature-exprience-wrapper">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 wow img-custom-anim-left">
                        <div class="left-image">
                            <?php rt_elementor_rendered_image($settings, 'layout_three_left_image'); ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <?php if (!empty($settings['layout_three_counter_one_number']) || !empty($settings['layout_three_counter_two_number'])) : ?>
                            <div class="counter-main-box wow img-custom-anim-top">
                                <?php if (!empty($settings['layout_three_counter_one_number']) || !empty($settings['layout_three_counter_one_text'])) : ?>
                                    <div class="content">
                                        <?php if (!empty($settings['layout_three_counter_one_number'])) : ?>
                                            <h2><span class="count"><?php echo esc_html($settings['layout_three_counter_one_number']); ?></span><?php echo esc_html($settings['layout_three_counter_one_suffix']); ?></h2>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_three_counter_one_text'])) : ?>
                                            <p><?php echo esc_html($settings['layout_three_counter_one_text']); ?></p>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_three_group_image']['url'])) : ?>
                                            <div class="group-image">
                                                <?php rt_elementor_rendered_image($settings, 'layout_three_group_image'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_counter_two_number']) || !empty($settings['layout_three_counter_two_text'])) : ?>
                                    <div class="right-box">
                                        <?php if (!empty($settings['layout_three_counter_two_number'])) : ?>
                                            <h2><span class="count"><?php echo esc_html($settings['layout_three_counter_two_number']); ?></span><?php echo esc_html($settings['layout_three_counter_two_suffix']); ?></h2>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_three_counter_two_text'])) : ?>
                                            <p><?php echo esc_html($settings['layout_three_counter_two_text']); ?></p>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_three_star_image']['url'])) : ?>
                                            <div class="star-item">
                                                <?php rt_elementor_rendered_image($settings, 'layout_three_star_image'); ?>
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_three_experience_title']) || !empty($settings['layout_three_client_name']) || !empty($settings['layout_three_client_designation'])) : ?>
                            <div class="adventure-box-2 wow img-custom-anim-bottom">
                                <?php if (!empty($settings['layout_three_shape_bg_image']['url'])) : ?>
                                    <div class="shape-2">
                                        <?php rt_elementor_rendered_image($settings, 'layout_three_shape_bg_image'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_experience_title'])) : ?>
                                    <h3>
                                        <a href="<?php echo esc_url($settings['layout_three_experience_url']['url']); ?>"
                                            <?php echo ($settings['layout_three_experience_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                            <?php echo ($settings['layout_three_experience_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                            <?php echo wp_kses_post($settings['layout_three_experience_title']); ?>
                                        </a>
                                    </h3>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_client_name']) || !empty($settings['layout_three_client_designation'])) : ?>
                                    <div class="info-item">
                                        <?php rt_elementor_rendered_image($settings, 'layout_three_client_image'); ?>
                                        <div class="content">
                                            <?php if (!empty($settings['layout_three_client_name'])) : ?>
                                                <h5><?php echo esc_html($settings['layout_three_client_name']); ?></h5>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['layout_three_client_designation'])) : ?>
                                                <span><?php echo esc_html($settings['layout_three_client_designation']); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_shape_image']['url'])) : ?>
                                    <div class="shape">
                                        <?php rt_elementor_rendered_image($settings, 'layout_three_shape_image'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow img-custom-anim-right">
                        <div class="left-image">
                            <?php rt_elementor_rendered_image($settings, 'layout_three_right_image'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>