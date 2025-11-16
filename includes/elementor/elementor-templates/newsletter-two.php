<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Cta-contact Section-3 Start -->
    <section class="cta-contact-section-3 fix header-bg">
        <?php if (!empty($settings['layout_two_shape_one']['url'])) : ?>
            <div class="right-shape">
                <?php rt_elementor_rendered_image($settings, 'layout_two_shape_one'); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($settings['layout_two_shape_two']['url'])) : ?>
            <div class="top-shape float-bob-x">
                <?php rt_elementor_rendered_image($settings, 'layout_two_shape_two'); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($settings['layout_two_shape_three']['url'])) : ?>
            <div class="bottom-shape float-bob-y">
                <?php rt_elementor_rendered_image($settings, 'layout_two_shape_three'); ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="cta-contact-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="cta-image">
                            <?php if (!empty($settings['layout_two_image']['url'])) : ?>
                                <?php rt_elementor_rendered_image($settings, 'layout_two_image'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cta-right-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_two_section_title'])) :
                                ?>
                                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="text-white text-anim sec-title">
                                        <?php echo rt_kses_basic($settings['layout_two_section_title']); ?>
                                    </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_two_description_text'])) : ?>
                                <p class="text text-white wow fadeInUp desc" data-wow-delay=".5s">
                                    <?php echo rt_kses_basic($settings['layout_two_description_text']); ?>
                                </p>
                            <?php endif; ?>
                            <form class="mc-form">
                                <div class="form-clt">
                                    <input type="text" name="email" id="email" class="mc-form__input" placeholder="<?php echo esc_attr($settings['layout_two_input_placeholder']); ?>">
                                    <button type="submit" class="theme-btn">
                                        <?php echo esc_html($settings['layout_two_btn_label']); ?>
                                    </button>
                                </div>
                                <p class="mc-form__feedback text-white"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>