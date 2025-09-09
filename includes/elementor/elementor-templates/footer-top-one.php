<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Contact Section Start -->
    <section class="contact-section section-padding pb-0">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row g-4 align-items-end">
                    <div class="col-lg-6">
                        <div class="contact-image wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: img-anim-left;">
                            <?php rt_elementor_rendered_image($settings, 'layout_one_contact_image'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <?php if (!empty($settings['layout_one_logo_image']['url'])) : ?>
                                <div class="logo-image">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php rt_elementor_rendered_image($settings, 'layout_one_logo_image'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_one_title'])) : ?>
                                    <?php
                                    $title_tag = !empty($settings['layout_one_title_tag']) ? $settings['layout_one_title_tag'] : 'h2';
                                    ?>
                                    <<?php echo esc_attr($title_tag); ?> class="sec-title text-white">
                                        <?php echo esc_html($settings['layout_one_title']); ?>
                                    </<?php echo esc_attr($title_tag); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_one_description'])) : ?>
                                <p class="text wow fadeInUp" data-wow-delay=".3s">
                                    <?php echo esc_html($settings['layout_one_description']); ?>
                                </p>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_one_button_text'])) : ?>
                                <a href="<?php echo esc_url($settings['layout_one_button_url']['url']); ?>" <?php if (!empty($settings['layout_one_button_url']['is_external'])) : ?> target="_blank" <?php endif; ?> class="theme-btn"><?php echo esc_html($settings['layout_one_button_text']); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>