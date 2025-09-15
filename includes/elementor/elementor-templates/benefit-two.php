<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Tour-benefit Section-2 Start -->
    <section class="tour-benefit-section-2 section-padding fix header-bg">
        <div class="container custom-container-4">
            <div class="section-title text-center">
                <?php if ($settings['layout_two_title']) : ?>
                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['layout_two_title']); ?></<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                <?php endif; ?>
                <?php if ($settings['layout_two_sub_title']) : ?>
                    <<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".5s">
                        <?php echo esc_html($settings['layout_two_sub_title']); ?>
                    </<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="tour-benefit-wrapper-2">
                <span class="right-border"></span>
                <div class="row g-4 justify-content-center">
                    <?php foreach ($settings['layout_two_benefit_items'] as $index => $item) : ?>
                        <?php if ($index === 4) : ?>
                            <div class="col-xl-4 col-md-6 col-lg-4">
                                <div class="tour-benefit-image">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_center_image'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-xl-2 col-md-6 col-lg-4">
                            <div class="tour-benefit-item-2">
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['layout_two_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                                <div class="content">
                                    <?php if ($item['layout_two_item_title']) : ?>
                                        <h5>
                                            <a href="<?php echo esc_url($item['layout_two_url']['url']); ?>" <?php if (!empty($item['layout_two_url']['is_external'])) : ?> target="_blank" <?php endif; ?>><?php echo esc_html($item['layout_two_item_title']); ?></a>
                                        </h5>
                                    <?php endif; ?>
                                    <?php if ($item['layout_two_item_description']) : ?>
                                        <p>
                                            <?php echo esc_html($item['layout_two_item_description']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-4">
                            <div class="tour-benefit-image">
                                <?php rt_elementor_rendered_image($item, 'layout_two_image'); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>