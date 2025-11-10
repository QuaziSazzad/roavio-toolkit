<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Travel Section-4 Start -->
    <section class="travel-section-4 section-padding pb-0 fix">
        <div class="container">
            <?php if (!empty($settings['layout_one_section_title']) || !empty($settings['layout_one_section_description'])) : ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['layout_one_section_title'])) :
                    ?>
                        <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="text-anim">
                            <?php echo rt_kses_basic($settings['layout_one_section_title']); ?>
                        </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                    <?php endif; ?>

                    <?php if (!empty($settings['layout_one_section_description'])) : ?>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            <?php echo rt_kses_basic($settings['layout_one_section_description']); ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($settings['layout_one_feature_items'])) : ?>
                <div class="row">
                    <?php
                    $delay = 0.2;
                    foreach ($settings['layout_one_feature_items'] as $index => $item) :
                        $delay_value = number_format($delay, 1);
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo esc_attr($delay_value); ?>s">
                            <div class="travel-box-items-4">
                                <?php if (!empty($item['layout_one_box_icon']['value'])) : ?>
                                    <div class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['layout_one_box_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="content">
                                    <?php if (!empty($item['layout_one_box_title'])) : ?>
                                        <h5>
                                            <?php if (!empty($item['layout_one_box_link']['url'])) :
                                                $target = !empty($item['layout_one_box_link']['is_external']) ? ' target="_blank"' : '';
                                                $nofollow = !empty($item['layout_one_box_link']['nofollow']) ? ' rel="nofollow"' : '';
                                            ?>
                                                <a href="<?php echo esc_url($item['layout_one_box_link']['url']); ?>" <?php echo ($target . $nofollow); ?>>
                                                    <?php echo rt_kses_basic($item['layout_one_box_title']); ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo rt_kses_basic($item['layout_one_box_title']); ?>
                                            <?php endif; ?>
                                        </h5>
                                    <?php endif; ?>

                                    <?php if (!empty($item['layout_one_box_description'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($item['layout_one_box_description']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        $delay += 0.2;
                    endforeach;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>