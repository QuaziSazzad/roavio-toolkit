<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Feature Section-2 Start -->
    <section class="feature-section-2 bg-cover" <?php if (!empty($settings['layout_one_background_image']['url'])) : ?>style="background-image: url(<?php echo esc_url($settings['layout_one_background_image']['url']); ?>);" <?php endif; ?>>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="feature-bg-content">
                        <?php if (!empty($settings['layout_one_title'])) : ?>
                            <h2 class="wow fadeInUp title" data-wow-delay=".3s">
                                <?php echo esc_html($settings['layout_one_title']); ?>
                                <?php rt_elementor_rendered_image($settings, 'layout_one_client_image'); ?>
                                <?php echo esc_html($settings['layout_one_title_second_part']); ?>
                            </h2>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_one_subtitle'])) : ?>
                            <h2 class="text wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html($settings['layout_one_subtitle']); ?></h2>
                        <?php endif; ?>
                        <div class="feature-bottom-content wow fadeInUp" data-wow-delay=".3s">
                            <?php if (!empty($settings['layout_one_description'])) : ?>
                                <p><?php echo esc_html($settings['layout_one_description']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_one_price'])) : ?>
                                <h3><?php echo esc_html($settings['layout_one_price']); ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_one_button_text']) && !empty($settings['layout_one_button_url']['url'])) : ?>
                                <a href="<?php echo esc_url($settings['layout_one_button_url']['url']); ?>" class="theme-btn" data-animation="fadeInUp" data-delay="1.3s" <?php if (!empty($settings['layout_one_button_url']['is_external'])) : ?>target="_blank" <?php endif; ?>><?php echo esc_html($settings['layout_one_button_text']); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>