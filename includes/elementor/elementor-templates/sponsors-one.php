<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Brand Section Start -->
    <section class="brand-section section-padding fix">
        <div class="container custom-container-2">
            <div class="brand-wrapper">
                <?php if ($settings['layout_one_title']) : ?>
                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?>><?php echo rt_kses_basic($settings['layout_one_title']); ?></<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                <?php endif; ?>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($settings['layout_one_sponsors'] as $item) : ?>
                            <div class="swiper-slide">
                                <div class="brand-image text-center">
                                    <?php rt_elementor_rendered_image($item, 'image'); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>