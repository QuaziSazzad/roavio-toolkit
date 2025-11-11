<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Video Section-4 Start -->
    <div class="video-section-4 section-padding pt-0 fix">
        <?php if (!empty($settings['layout_two_shape_image']['url'])) : ?>
            <div class="shape">
                <?php rt_elementor_rendered_image($settings, 'layout_two_shape_image'); ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <?php if (!empty($settings['layout_two_video_bg_image']['url'])) : ?>
                <div class="video-wrapper-4 bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_two_video_bg_image']['url']); ?>);">
                    <?php if (!empty($settings['layout_two_video_url'])) : ?>
                        <a href="<?php echo esc_url($settings['layout_two_video_url']); ?>" class="video-btn video-popup">
                            <i class="fa-duotone fa-play"></i>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container custom-container-6">
            <div class="brand-wrapper-4">
                <?php if (!empty($settings['layout_two_brand_title'])) : ?>
                    <h6><?php echo rt_kses_basic($settings['layout_two_brand_title']); ?></h6>
                <?php endif; ?>
                <?php if (!empty($settings['layout_two_brand_logos'])) : ?>
                    <div class="swiper brand-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($settings['layout_two_brand_logos'] as $brand) : ?>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <?php rt_elementor_rendered_image($brand, 'brand_logo'); ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>