<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!-- Testimonial Section-3 Start -->
    <section class="testimonial-section-3 section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_four_section_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_four_section_title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s">
                        <?php echo rt_kses_basic($settings['layout_four_section_title']); ?>
                    </<?php echo esc_attr($settings['layout_four_section_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_four_section_subtitle'])) : ?>
                    <p class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['layout_four_section_subtitle']); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="testimonial-box-wrapper style-1">
            <div class="swiper testimonial-box-slider">
                <div class="swiper-wrapper slide-transtion">
                    <?php foreach ($settings['layout_four_testimonials_top'] as $item) : ?>
                        <div class="swiper-slide brand-slide-element">
                            <div class="testimonial-card-item-3 <?php echo esc_attr($item['layout_four_card_style'] === 'bg' ? 'bg' : ''); ?>">
                                <div class="thumb">
                                    <?php rt_elementor_rendered_image($item, 'layout_four_testimonial_image'); ?>
                                </div>
                                <div class="content">
                                    <div class="icon">
                                        <i class="flaticon-left-quote"></i>
                                    </div>
                                    <?php if (!empty($item['layout_four_testimonial_content'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($item['layout_four_testimonial_content']); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if (!empty($item['layout_four_client_name'])) : ?>
                                        <h5><?php echo rt_kses_basic($item['layout_four_client_name']); ?>,</h5>
                                    <?php endif; ?>

                                    <?php if (!empty($item['layout_four_client_designation'])) : ?>
                                        <span><?php echo rt_kses_basic($item['layout_four_client_designation']); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="testimonial-box-wrapper style-2">
            <div dir="rtl" class="swiper testimonial-box-slider-2">
                <div class="swiper-wrapper slide-transtion">
                    <?php foreach ($settings['layout_four_testimonials_bottom'] as $item) : ?>
                        <div class="swiper-slide brand-slide-element">
                            <div class="testimonial-card-item-3 <?php echo esc_attr($item['layout_four_card_style_bottom'] === 'bg' ? 'bg' : ''); ?>">
                                <div class="content">
                                    <div class="icon">
                                        <i class="flaticon-left-quote"></i>
                                    </div>
                                    <?php if (!empty($item['layout_four_testimonial_content_bottom'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($item['layout_four_testimonial_content_bottom']); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if (!empty($item['layout_four_client_name_bottom'])) : ?>
                                        <h5><?php echo rt_kses_basic($item['layout_four_client_name_bottom']); ?>,</h5>
                                    <?php endif; ?>

                                    <?php if (!empty($item['layout_four_client_designation_bottom'])) : ?>
                                        <span><?php echo rt_kses_basic($item['layout_four_client_designation_bottom']); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="thumb">
                                    <?php rt_elementor_rendered_image($item, 'layout_four_testimonial_image_bottom'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>