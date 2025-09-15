<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Testimonial Section-2 Start -->
    <section class="testimonial-section-2 section-padding fix pt-0">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_two_section_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($settings['layout_two_section_title']); ?></<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                <?php endif; ?>
                <?php if (!empty($settings['layout_two_sub_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html($settings['layout_two_sub_title']); ?></<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
        </div>
        <?php if (!empty($settings['layout_two_testimonials'])) : ?>
            <div class="swiper testimonial-slider-2">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_two_testimonials'] as $testimonial) : ?>
                        <div class="swiper-slide">
                            <div class="testimonial-info-items">
                                <?php if (!empty($testimonial['client_image']['url'])) : ?>
                                    <div class="client-image">
                                        <?php rt_elementor_rendered_image($testimonial, 'client_image'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="info-content">
                                    <?php if (!empty($testimonial['icon']['value'])) : ?>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($testimonial['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($testimonial['testimonial_text'])) : ?>
                                        <h3>
                                            <?php echo esc_html($testimonial['testimonial_text']); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($testimonial['client_name']) || !empty($testimonial['client_designation'])) : ?>
                                        <h6>
                                            <?php if (!empty($testimonial['client_name'])) : ?>
                                                <?php echo esc_html($testimonial['client_name']); ?>
                                            <?php endif; ?>
                                            <?php if (!empty($testimonial['client_designation'])) : ?>
                                                , <span><?php echo esc_html($testimonial['client_designation']); ?></span>
                                            <?php endif; ?>
                                        </h6>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-dot-style">
                <div class="dot2"></div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>