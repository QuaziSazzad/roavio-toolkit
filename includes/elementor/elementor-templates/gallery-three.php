<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- gallery Section Start -->
    <section class="gallery-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_three_section_title'])): ?>
                    <<?php echo esc_attr($settings['layout_three_title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s">
                        <?php echo rt_kses_basic($settings['layout_three_section_title']); ?>
                    </<?php echo esc_attr($settings['layout_three_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_three_sub_title'])): ?>
                    <<?php echo esc_attr($settings['layout_three_sub_title_tag']); ?> class="wow fadeInUp sec-sub-title" data-wow-delay=".5s">
                        <?php echo rt_kses_basic($settings['layout_three_sub_title']); ?>
                    </<?php echo esc_attr($settings['layout_three_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
        </div>

        <?php if (!empty($settings['layout_three_gallery_slider_1'])): ?>
            <div class="swiper gallery-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_three_gallery_slider_1'] as $item): ?>
                        <div class="swiper-slide">
                            <div class="gallery-image">
                                <?php if (!empty($item['image'])): ?>
                                    <?php rt_elementor_rendered_image($item, 'image'); ?>
                                <?php endif; ?>

                                <div class="gallery-content">
                                    <?php if (!empty($item['title'])): ?>
                                        <h4>
                                            <?php if (!empty($item['url']['url'])): ?>
                                                <a href="<?php echo esc_url($item['url']['url']); ?>"
                                                    <?php echo !empty($item['url']['is_external']) ? 'target="_blank"' : ''; ?>
                                                    <?php echo !empty($item['url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                    <?php echo rt_kses_basic($item['title']); ?>
                                                </a>
                                            <?php else: ?>
                                                <?php echo rt_kses_basic($item['title']); ?>
                                            <?php endif; ?>
                                        </h4>
                                    <?php endif; ?>

                                    <?php if (!empty($item['category'])): ?>
                                        <p><?php echo rt_kses_basic($item['category']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($settings['layout_three_gallery_slider_2'])): ?>
            <div class="swiper gallery-slider-2">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_three_gallery_slider_2'] as $item): ?>
                        <div class="swiper-slide">
                            <div class="gallery-image">
                                <?php if (!empty($item['image'])): ?>
                                    <?php rt_elementor_rendered_image($item, 'image'); ?>
                                <?php endif; ?>

                                <div class="gallery-content">
                                    <?php if (!empty($item['title'])): ?>
                                        <h4>
                                            <?php if (!empty($item['url']['url'])): ?>
                                                <a href="<?php echo esc_url($item['url']['url']); ?>"
                                                    <?php echo !empty($item['url']['is_external']) ? 'target="_blank"' : ''; ?>
                                                    <?php echo !empty($item['url']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                    <?php echo rt_kses_basic($item['title']); ?>
                                                </a>
                                            <?php else: ?>
                                                <?php echo rt_kses_basic($item['title']); ?>
                                            <?php endif; ?>
                                        </h4>
                                    <?php endif; ?>

                                    <?php if (!empty($item['category'])): ?>
                                        <p><?php echo rt_kses_basic($item['category']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>

<?php endif; ?>