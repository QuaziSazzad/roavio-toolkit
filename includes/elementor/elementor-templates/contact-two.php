<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Contact Section-4 Start -->
    <section class="contact-section-4 section-padding fix">
        <div class="container">
            <div class="contact-wrapper-4">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <div class="section-title">
                                <?php if (!empty($settings['layout_two_section_title'])) :
                                ?>
                                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="text-anim sec-title">
                                        <?php echo rt_kses_basic($settings['layout_two_section_title']); ?>
                                    </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                                <?php endif; ?>

                                <?php if (!empty($settings['layout_two_description'])) : ?>
                                    <p class="wow fadeInUp description" data-wow-delay=".5s">
                                        <?php echo rt_kses_basic($settings['layout_two_description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="contact-content">
                                <?php if (!empty($settings['layout_two_select_cf7_form'])) : ?>
                                    <?php echo do_shortcode('[contact-form-7 id="' . esc_attr($settings['layout_two_select_cf7_form']) . '"]'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-2">
                            <div class="col-lg-7 col-md-7">
                                <div class="contact-image-4">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_image_one'); ?>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="contact-image-4">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_image_two'); ?>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="contact-image-4">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_image_three'); ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="contact-image-4">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_image_four'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>