<?php if ('layout_eight' == $settings['layout_type']) : ?>
    <!-- Travel-Section- Start -->
    <section class="travel-section section-padding header-bg fix">
        <div class="container">
            <div class="travel-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="travel-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_eight_title'])) : ?>
                                    <<?php echo esc_attr($settings['layout_eight_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo rt_kses_basic($settings['layout_eight_title']); ?>
                                    </<?php echo esc_attr($settings['layout_eight_title_tag']); ?>>
                                <?php endif; ?>

                                <?php if (!empty($settings['layout_eight_subtitle'])) : ?>
                                    <<?php echo esc_attr($settings['layout_eight_sub_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".5s">
                                        <?php echo rt_kses_basic($settings['layout_eight_subtitle']); ?>
                                    </<?php echo esc_attr($settings['layout_eight_sub_title_tag']); ?>>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($settings['layout_eight_items'])) : ?>
                                <div class="travel-item">
                                    <?php
                                    $count = 0;
                                    foreach ($settings['layout_eight_items'] as $index => $item) :
                                        if ($count % 2 == 0 && $count > 0) : ?>
                                </div>
                                <div class="travel-item">
                                <?php endif; ?>

                                <div class="icon-item">
                                    <div class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['layout_eight_item_icon'], ['aria-hidden' => 'true']); ?>
                                    </div>
                                    <div class="content">
                                        <?php if (!empty($item['layout_eight_item_title'])) : ?>
                                            <h5>
                                                <?php echo rt_kses_basic($item['layout_eight_item_title']); ?>
                                            </h5>
                                        <?php endif; ?>

                                        <?php if (!empty($item['layout_eight_item_description'])) : ?>
                                            <p>
                                                <?php echo rt_kses_basic($item['layout_eight_item_description']); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            <?php
                                        $count++;
                                    endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="travel-image">
                            <?php rt_elementor_rendered_image($settings, 'layout_eight_image'); ?>
                            <div class="right-box">
                                <?php if (!empty($settings['layout_eight_counter_number']) || !empty($settings['layout_eight_counter_suffix'])) : ?>
                                    <h2>
                                        <?php if (!empty($settings['layout_eight_counter_number'])) : ?>
                                            <span class="count"><?php echo esc_html($settings['layout_eight_counter_number']); ?></span>
                                        <?php endif; ?>
                                        <?php if (!empty($settings['layout_eight_counter_suffix'])) : ?>
                                            <?php echo esc_html($settings['layout_eight_counter_suffix']); ?>
                                        <?php endif; ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if (!empty($settings['layout_eight_counter_description'])) : ?>
                                    <p><?php echo rt_kses_basic($settings['layout_eight_counter_description']); ?></p>
                                <?php endif; ?>

                                <div class="star-item">
                                    <?php rt_elementor_rendered_image($settings, 'layout_eight_rating_image'); ?>

                                    <?php if ('yes' === $settings['layout_eight_show_rating_stars'] && !empty($settings['layout_eight_rating_stars'])) : ?>
                                        <div class="star">
                                            <?php
                                            $stars = intval($settings['layout_eight_rating_stars']);
                                            for ($i = 0; $i < $stars; $i++) : ?>
                                                <i class="fa-solid fa-star"></i>
                                            <?php endfor; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>