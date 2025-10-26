<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Testimonial Section Start -->
    <section class="testimonial-section style-2 section-padding fix">
        <div class="container">
            <?php if (!empty($settings['layout_three_section_title']) || !empty($settings['layout_three_section_subtitle'])) : ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['layout_three_section_title'])) : ?>
                        <<?php echo esc_attr($settings['layout_three_title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s"><?php echo esc_html($settings['layout_three_section_title']); ?></<?php echo esc_attr($settings['layout_three_title_tag']); ?>>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_three_section_subtitle'])) : ?>
                        <<?php echo esc_attr($settings['layout_three_sub_title_tag']); ?> class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo esc_html($settings['layout_three_section_subtitle']); ?></<?php echo esc_attr($settings['layout_three_sub_title_tag']); ?>>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="testimonial-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="testimonial-content style-2">
                            <div class="swiper testimonial-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($settings['layout_three_testimonials'] as $testimonial) : ?>
                                        <div class="swiper-slide">
                                            <div class="content">
                                                <div class="icon">
                                                    <?php \Elementor\Icons_Manager::render_icon($testimonial['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                </div>
                                                <p> <?php echo wp_kses_post($testimonial['testimonial_text']); ?></p>
                                                <?php if (!empty($testimonial['client_image']['url'])) : ?>
                                                    <div class="client-image">
                                                        <?php rt_elementor_rendered_image($testimonial, 'client_image'); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if (!empty($testimonial['client_name'])) : ?>
                                                    <h4><?php echo esc_html($testimonial['client_name']); ?></h4>
                                                <?php endif; ?>
                                                <?php if (!empty($testimonial['client_designation'])) : ?>
                                                    <span><?php echo esc_html($testimonial['client_designation']); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="swiper-dot style-2">
                                <div class="dot2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-right-item">
                            <div class="row g-2">
                                <?php if (!empty($settings['layout_three_right_image_1']['url'])) : ?>
                                    <div class="col-xl-7 col-md-6 wow img-custom-anim-left">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_three_right_image_1'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_right_image_2']['url'])) : ?>
                                    <div class="col-xl-5 col-md-6 wow img-custom-anim-right">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_three_right_image_2'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_right_image_3']['url'])) : ?>
                                    <div class="col-xl-5 col-md-6 wow img-custom-anim-left">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_three_right_image_3'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_right_image_4']['url'])) : ?>
                                    <div class="col-xl-7 col-md-6 wow img-custom-anim-right">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_three_right_image_4'); ?>
                                            <?php if (!empty($settings['layout_three_video_url']['url'])) : ?>
                                                <a href="<?php echo esc_url($settings['layout_three_video_url']['url']); ?>" class="video-btn video-popup">
                                                    <i class="fa-duotone fa-play"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>