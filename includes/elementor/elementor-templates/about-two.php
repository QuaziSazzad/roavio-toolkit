<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Adventure Section Start -->
    <section class="adventure-section section-padding fix">
        <div class="container">
            <div class="adventure-wrapper">
                <div class="row g-4">
                    <div class="col-xl-8">
                        <div class="row g-4">
                            <div class="col-xl-6 col-lg-6">
                                <?php if (!empty($settings['layout_two_title'])) : ?>
                                    <div class="section-title mb-0">
                                        <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                                            <?php echo rt_kses_basic($settings['layout_two_title']); ?>
                                        </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_two_description'])) : ?>
                                    <p class="text wow fadeInUp" data-wow-delay=".5s">
                                        <?php echo wp_kses_post($settings['layout_two_description']); ?>
                                    </p>
                                <?php endif; ?>
                                <div class="adventure-image wow img-custom-anim-left">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_image_one'); ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="adventure-image wow img-custom-anim-top">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_image_two'); ?>
                                </div>
                                <?php if (!empty($settings['layout_two_box_title']) || !empty($settings['layout_two_client_name']) || !empty($settings['layout_two_client_designation'])) : ?>
                                    <div class="adventure-box wow img-custom-anim-bottom">
                                        <?php if (!empty($settings['layout_two_box_title'])) : ?>
                                            <h3>
                                                <a href="<?php echo esc_url($settings['layout_two_box_url']['url']); ?>"
                                                    <?php echo ($settings['layout_two_box_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                                    <?php echo ($settings['layout_two_box_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                    <?php echo esc_html($settings['layout_two_box_title']); ?>
                                                </a>
                                            </h3>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_two_client_name']) || !empty($settings['layout_two_client_designation'])) : ?>
                                            <div class="info-item">
                                                <?php rt_elementor_rendered_image($settings, 'layout_two_client_image'); ?>
                                                <div class="content">
                                                    <?php if (!empty($settings['layout_two_client_name'])) : ?>
                                                        <h5><?php echo esc_html($settings['layout_two_client_name']); ?></h5>
                                                    <?php endif; ?>
                                                    <?php if (!empty($settings['layout_two_client_designation'])) : ?>
                                                        <span><?php echo esc_html($settings['layout_two_client_designation']); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="shape">
                                            <?php rt_elementor_rendered_image($settings, 'layout_two_shape_image'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="adventure-thumb wow img-custom-anim-right">
                            <?php rt_elementor_rendered_image($settings, 'layout_two_image_three'); ?>
                            <?php if (!empty($settings['layout_two_discount_text']) || !empty($settings['layout_two_adventure_title']) || !empty($settings['layout_two_price'])) : ?>
                                <div class="adventure-content">
                                    <?php if (!empty($settings['layout_two_discount_text'])) : ?>
                                        <h6><?php echo esc_html($settings['layout_two_discount_text']); ?></h6>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_two_adventure_title'])) : ?>
                                        <h3>
                                            <a href="<?php echo esc_url($settings['layout_two_adventure_url']['url']); ?>"
                                                <?php echo ($settings['layout_two_adventure_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                                <?php echo ($settings['layout_two_adventure_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                <?php echo esc_html($settings['layout_two_adventure_title']); ?>
                                            </a>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_two_price']) || !empty($settings['layout_two_button_text'])) : ?>
                                        <div class="booking-item">
                                            <?php if (!empty($settings['layout_two_price'])) : ?>
                                                <div class="content">
                                                    <h4><?php echo esc_html($settings['layout_two_price']); ?></h4>
                                                    <?php if (!empty($settings['layout_two_price_description'])) : ?>
                                                        <span><?php echo esc_html($settings['layout_two_price_description']); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['layout_two_button_text'])) : ?>
                                                <a href="<?php echo esc_url($settings['layout_two_button_url']['url']); ?>" class="theme-btn"
                                                    <?php echo ($settings['layout_two_button_url']['is_external']) ? 'target="_blank"' : ''; ?>
                                                    <?php echo ($settings['layout_two_button_url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                    <?php echo esc_html($settings['layout_two_button_text']); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>