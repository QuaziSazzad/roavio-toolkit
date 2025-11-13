<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Cta-contact Section-3 Start -->
    <section class="cta-contact-section-3 fix header-bg">
        <?php if (!empty($settings['layout_three_shape_one']['url'])) : ?>
            <div class="right-shape">
                <?php rt_elementor_rendered_image($settings, 'layout_three_shape_one'); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($settings['layout_three_shape_two']['url'])) : ?>
            <div class="top-shape float-bob-x">
                <?php rt_elementor_rendered_image($settings, 'layout_three_shape_two'); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($settings['layout_three_shape_three']['url'])) : ?>
            <div class="bottom-shape float-bob-y">
                <?php rt_elementor_rendered_image($settings, 'layout_three_shape_three'); ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="cta-contact-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="cta-image">
                            <?php if (!empty($settings['layout_three_image']['url'])) : ?>
                                <?php rt_elementor_rendered_image($settings, 'layout_three_image'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cta-right-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_three_section_title'])) :
                                ?>
                                    <<?php echo esc_attr($settings['layout_three_title_tag']); ?> class="text-white text-anim">
                                        <?php echo rt_kses_basic($settings['layout_three_section_title']); ?>
                                    </<?php echo esc_attr($settings['layout_three_title_tag']); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_three_description_text'])) : ?>
                                <p class="text text-white wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo rt_kses_basic($settings['layout_three_description_text']); ?>
                                </p>
                            <?php endif; ?>
                            <form class="mc-form">
                                <div class="form-clt">
                                    <input type="text" name="email" id="email" class="mc-form__input" placeholder="<?php echo esc_attr($settings['layout_three_input_placeholder']); ?>">
                                    <button type="submit" class="theme-btn">
                                        <?php echo esc_html($settings['layout_three_btn_label']); ?>
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