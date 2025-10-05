<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Conatct-Us Section Start -->
    <section class="conatct-us-section-3 section-padding fix">
        <div class="container">
            <div class="contact-us-wrapper-3">
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-us-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_one_section_title'])) : ?>
                                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="sec-title">
                                        <?php echo rt_kses_basic($settings['layout_one_section_title']); ?>
                                    </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_one_description'])) : ?>
                                <p class="text description">
                                    <?php echo rt_kses_basic($settings['layout_one_description']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="contact-us-item">
                                <div class="content">
                                    <h5>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_email_icon'], ['aria-hidden' => 'true']); ?>
                                        <?php echo esc_html($settings['layout_one_email_title']); ?>
                                    </h5>
                                    <?php if (!empty($settings['layout_one_email_one'])) : ?>
                                        <h6>
                                            <a href="mailto:<?php echo esc_attr($settings['layout_one_email_one']); ?>"><?php echo esc_html($settings['layout_one_email_one']); ?></a>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_one_email_two'])) : ?>
                                        <h6>
                                            <a href="mailto:<?php echo esc_attr($settings['layout_one_email_two']); ?>"><?php echo esc_html($settings['layout_one_email_two']); ?></a>
                                        </h6>
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                    <h5>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_phone_icon'], ['aria-hidden' => 'true']); ?>
                                        <?php echo esc_html($settings['layout_one_phone_title']); ?>
                                    </h5>
                                    <?php if (!empty($settings['layout_one_phone_number'])) : ?>
                                        <h6>
                                            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $settings['layout_one_phone_number'])); ?>"><?php echo esc_html($settings['layout_one_phone_number']); ?></a>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_one_phone_availability'])) : ?>
                                        <h6>
                                            <?php echo esc_html($settings['layout_one_phone_availability']); ?>
                                        </h6>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="contact-us-item mb-0">
                                <div class="content">
                                    <h5>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_hours_icon'], ['aria-hidden' => 'true']); ?>
                                        <?php echo esc_html($settings['layout_one_hours_title']); ?>
                                    </h5>
                                    <?php if (!empty($settings['layout_one_hours_text'])) : ?>
                                        <h6>
                                            <?php echo rt_kses_basic($settings['layout_one_hours_text']); ?>
                                        </h6>
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                    <h5>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_office_icon'], ['aria-hidden' => 'true']); ?>
                                        <?php echo esc_html($settings['layout_one_office_title']); ?>
                                    </h5>
                                    <?php if (!empty($settings['layout_one_office_address'])) : ?>
                                        <h6>
                                            <?php echo rt_kses_basic($settings['layout_one_office_address']); ?>
                                        </h6>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="contact-box">
                            <?php if (!empty($settings['layout_one_select_cf7_form'])) :
                                echo do_shortcode('[contact-form-7 id="' . esc_attr($settings['layout_one_select_cf7_form']) . '"]');
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>