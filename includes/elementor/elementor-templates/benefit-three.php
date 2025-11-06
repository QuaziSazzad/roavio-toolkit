<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Tour-benefit Section-2 Start -->
    <section class="tour-benefit-section-2 section-padding fix bg-color">
        <div class="container custom-container-4">
            <div class="section-title text-center">
                <?php if ($settings['layout_three_title']) : ?>
                    <<?php echo esc_attr($settings['layout_three_title_tag']); ?> class="text-anim sec-title"><?php echo rt_kses_basic($settings['layout_three_title']); ?></<?php echo esc_attr($settings['layout_three_title_tag']); ?>>
                <?php endif; ?>
                <?php if ($settings['layout_three_sub_title']) : ?>
                    <<?php echo esc_attr($settings['layout_three_sub_title_tag']); ?> class="wow fadeInUp sec-sub-title" data-wow-delay=".5s">
                        <?php echo rt_kses_basic($settings['layout_three_sub_title']); ?>
                    </<?php echo esc_attr($settings['layout_three_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="tour-benefit-wrapper-2 style-2">
                <span class="right-border"></span>
                <div class="row g-4 justify-content-center">
                    <?php foreach ($settings['layout_three_benefit_items'] as $index => $item) : ?>
                        <div class="col-xl-2 col-md-6 col-lg-4">
                            <div class="tour-benefit-item-2">
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['layout_three_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                                <div class="content">
                                    <?php if ($item['layout_three_item_title']) : ?>
                                        <h5>
                                            <a href="<?php echo esc_url($item['layout_three_url']['url']); ?>" <?php if (!empty($item['layout_three_url']['is_external'])) : ?> target="_blank" <?php endif; ?>><?php echo esc_html($item['layout_three_item_title']); ?></a>
                                        </h5>
                                    <?php endif; ?>
                                    <?php if ($item['layout_three_item_description']) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($item['layout_three_item_description']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-4">
                            <div class="tour-benefit-image">
                                <?php rt_elementor_rendered_image($item, 'layout_three_image'); ?>
                            </div>
                        </div>
                        <?php if ($index === 3) : ?>
                            <div class="col-xl-4 col-md-6 col-lg-4">
                                <div class="tour-benefit-image">
                                    <?php rt_elementor_rendered_image($settings, 'layout_three_center_image'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>