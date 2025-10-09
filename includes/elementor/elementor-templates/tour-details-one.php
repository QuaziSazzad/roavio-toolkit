<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="tour-details-wrappers">
        <div class="tour-details-content">
            <div class="tour-left-content">
                <?php if (!empty($settings['layout_one_overview_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_one_overview_title_tag']); ?>>
                        <?php echo rt_kses_basic($settings['layout_one_overview_title']); ?>
                    </<?php echo esc_attr($settings['layout_one_overview_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_one_overview_description'])) : ?>
                    <p class="mt-3 mb-3">
                        <?php echo rt_kses_basic($settings['layout_one_overview_description']); ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($settings['layout_one_overview_description_two'])) : ?>
                    <p class="mb-5">
                        <?php echo rt_kses_basic($settings['layout_one_overview_description_two']); ?>
                    </p>
                <?php endif; ?>

                <div class="row g-4 mb-5">
                    <div class="col-lg-6">
                        <div class="list-item">
                            <?php if (!empty($settings['layout_one_included_title'])) : ?>
                                <<?php echo esc_attr($settings['layout_one_included_title_tag']); ?>>
                                    <?php echo rt_kses_basic($settings['layout_one_included_title']); ?>
                                </<?php echo esc_attr($settings['layout_one_included_title_tag']); ?>>
                            <?php endif; ?>

                            <?php if (!empty($settings['layout_one_included_items'])) : ?>
                                <ul class="list">
                                    <?php foreach ($settings['layout_one_included_items'] as $item) : ?>
                                        <li>
                                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            <?php echo rt_kses_basic($item['included_item']); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="list-item">
                            <?php if (!empty($settings['layout_one_excluded_title'])) : ?>
                                <<?php echo esc_attr($settings['layout_one_excluded_title_tag']); ?>>
                                    <?php echo rt_kses_basic($settings['layout_one_excluded_title']); ?>
                                </<?php echo esc_attr($settings['layout_one_excluded_title_tag']); ?>>
                            <?php endif; ?>

                            <?php if (!empty($settings['layout_one_excluded_items'])) : ?>
                                <ul class="list">
                                    <?php foreach ($settings['layout_one_excluded_items'] as $item) : ?>
                                        <li>
                                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            <?php echo rt_kses_basic($item['layout_one_excluded_item']); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>