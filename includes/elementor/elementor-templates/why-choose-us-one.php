<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="choose-us-section section-padding fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_one_background_image']['url']); ?>);">
        <div class="container">
            <?php if (!empty($settings['layout_one_section_title']) || !empty($settings['layout_one_section_subtitle'])) : ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['layout_one_section_title'])) : ?>
                        <<?php echo esc_attr($settings['layout_one_section_title_tag']); ?> class="text-anim sec-title">
                            <?php echo rt_kses_basic($settings['layout_one_section_title']); ?>
                        </<?php echo esc_attr($settings['layout_one_section_title_tag']); ?>>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_one_section_subtitle'])) : ?>
                        <<?php echo esc_attr($settings['layout_one_subtitle_tag']); ?> class="wow fadeInUp sec-sub-title">
                            <?php echo rt_kses_basic($settings['layout_one_section_subtitle']); ?>
                        </<?php echo esc_attr($settings['layout_one_subtitle_tag']); ?>>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($settings['layout_one_choose_us_items'])) : ?>
                <div class="row">
                    <?php foreach ($settings['layout_one_choose_us_items'] as $item) : ?>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="choose-us-box">
                                <?php if (!empty($item['layout_one_item_icon']['value'])) : ?>
                                    <div class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['layout_one_item_icon'], ['aria-hidden' => 'true']); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="choose-us-content">
                                    <?php if (!empty($item['layout_one_item_title'])) : ?>
                                        <h5><?php echo rt_kses_basic($item['layout_one_item_title']); ?></h5>
                                    <?php endif; ?>
                                    <?php if (!empty($item['layout_one_item_description'])) : ?>
                                        <p><?php echo rt_kses_basic($item['layout_one_item_description']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>