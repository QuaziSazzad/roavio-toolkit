<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Counter Section Start -->
    <section class="counter-section-2 section-padding fix">
        <div class="container">
            <div class="counter-wrapper-2">
                <?php if (!empty($settings['layout_one_section_title']) || !empty($settings['layout_one_section_subtitle'])) : ?>
                    <div class="section-title text-center mb-0">
                        <?php if (!empty($settings['layout_one_section_title'])) : ?>
                            <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".3s">
                                <?php echo rt_kses_basic($settings['layout_one_section_title']); ?>
                            </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                        <?php endif; ?>

                        <?php if (!empty($settings['layout_one_section_subtitle'])) : ?>
                            <p class="text-white wow fadeInUp" data-wow-delay=".5s">
                                <?php echo rt_kses_basic($settings['layout_one_section_subtitle']); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="counter-main-item-2">
                        <?php if (!empty($settings['layout_one_counter_items'])) : ?>
                            <?php $delay = 0.3;
                            foreach ($settings['layout_one_counter_items'] as $item) : ?>
                                <div class="counter-item wow fadeInUp" data-wow-delay=".<?php echo esc_attr($delay); ?>s">
                                    <?php if (!empty($item['layout_one_counter_icon']['value'])) : ?>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($item['layout_one_counter_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="content">
                                        <?php if (!empty($item['layout_one_counter_number']) || !empty($item['layout_one_counter_suffix'])) : ?>
                                            <h3>
                                                <?php if (!empty($item['layout_one_counter_number'])) : ?>
                                                    <span class="count"><?php echo esc_html($item['layout_one_counter_number']); ?></span>
                                                <?php endif; ?>
                                                <?php if (!empty($item['layout_one_counter_suffix'])) : ?>
                                                    <?php echo esc_html($item['layout_one_counter_suffix']); ?>
                                                <?php endif; ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (!empty($item['layout_one_counter_title'])) : ?>
                                            <p><?php echo rt_kses_basic($item['layout_one_counter_title']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php $delay += 0.2;
                            endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>