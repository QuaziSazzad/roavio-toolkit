<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Adventure Section-2 Start -->
    <div class="adventure-section-2 section-padding fix header-bg">
        <div class="container-fluid">
            <div class="section-title text-center">
                <?php if ($settings['layout_two_title']) : ?>
                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="text-white fadeInUp sec-title text-anim"><?php echo rt_kses_basic($settings['layout_two_title']); ?></<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                <?php endif; ?>
                <?php if ($settings['layout_two_sub_title']) : ?>
                    <<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?> class="text-white wow sec-sub-title fadeInU" data-wow-delay=".5s"><?php echo esc_html($settings['layout_two_sub_title']); ?></<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="swiper adventure-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_two_gallery'] as $index => $item) : ?>
                        <div class="swiper-slide">
                            <div class="activities-item-2">
                                <div class="activities-image">
                                    <?php echo rt_elementor_rendered_image($item, 'image'); ?>
                                </div>
                                <div class="activities-content">
                                    <h4>
                                        <a href="<?php echo esc_url($item['url']['url']); ?>" <?php if (!empty($item['url']['is_external'])) : ?> target="_blank" <?php endif; ?>><?php echo esc_html($item['title']); ?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-dot-4">
                <div class="dot3"></div>
            </div>
        </div>
    </div>
<?php endif; ?>