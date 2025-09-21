<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Contact Section-2 Start -->
    <section class="contact-section-2 section-padding pb-0 fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_one_bg_image']['url']); ?>);">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_one_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s">
                        <?php echo rt_kses_basic($settings['layout_one_title']); ?>
                    </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                <?php endif; ?>
                <?php if (!empty($settings['layout_one_sub_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?> class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['layout_one_sub_title']); ?></<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="contact-content-2 wow fadeInUp" data-wow-delay=".3s">
                        <form action="#" class="mc-form">
                            <div class="form-clt">
                                <input type="text" name="email" id="email" class="mc-form__input" placeholder="<?php echo esc_attr($settings['layout_one_input_placeholder']); ?>">
                                <button type="submit" class="theme-btn">
                                    <?php echo esc_html($settings['layout_one_button_label']); ?>
                                </button>
                            </div>
                            <p class="mc-form__feedback text-white"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>