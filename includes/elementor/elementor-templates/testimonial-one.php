<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Testimonial Section Start -->
    <section class="testimonial-section section-padding fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_one_background_image']['url']); ?>);">
        <div class="container">
            <?php if (!empty($settings['layout_one_section_title']) || !empty($settings['layout_one_section_subtitle'])) : ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['layout_one_section_title'])) : ?>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($settings['layout_one_section_title']); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_one_section_subtitle'])) : ?>
                        <p class="text-white wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html($settings['layout_one_section_subtitle']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="testimonial-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <?php if (!empty($settings['layout_one_testimonials'])) : ?>
                                <div class="swiper testimonial-slider">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($settings['layout_one_testimonials'] as $testimonial) : ?>
                                            <div class="swiper-slide">
                                                <div class="content">
                                                    <div class="icon">
                                                        <?php \Elementor\Icons_Manager::render_icon($testimonial['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                    </div>
                                                    <?php if (!empty($testimonial['testimonial_text'])) : ?>
                                                        <p>
                                                            <?php echo wp_kses_post($testimonial['testimonial_text']); ?>
                                                        </p>
                                                    <?php endif; ?>
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
                                <div class="swiper-dot">
                                    <div class="dot2"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-right-item">
                            <div class="row g-2">
                                <?php if (!empty($settings['layout_one_right_image_1']['url'])) : ?>
                                    <div class="col-xl-7 col-md-6 wow img-custom-anim-left">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_one_right_image_1'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_one_right_image_2']['url'])) : ?>
                                    <div class="col-xl-5 col-md-6 wow img-custom-anim-right">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_one_right_image_2'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_one_right_image_3']['url'])) : ?>
                                    <div class="col-xl-5 col-md-6 wow img-custom-anim-left">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_one_right_image_3'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_one_right_image_4']['url'])) : ?>
                                    <div class="col-xl-7 col-md-6 wow img-custom-anim-right">
                                        <div class="testimonial-image">
                                            <?php rt_elementor_rendered_image($settings, 'layout_one_right_image_4'); ?>
                                            <?php if (!empty($settings['layout_one_video_url']['url'])) : ?>
                                                <a href="<?php echo esc_url($settings['layout_one_video_url']['url']); ?>" class="video-btn video-popup">
                                                    <i class="fa fa-play"></i>
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