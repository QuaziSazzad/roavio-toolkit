<?php if ('layout_two' == $settings['layout_type']) : ?>
    <div class="tour-details-wrappers">
        <div class="tour-details-content">
            <div class="tour-left-content">
                <?php if (!empty($settings['layout_two_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="overview-title">
                        <?php echo rt_kses_basic($settings['layout_two_title']); ?>
                    </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_two_description'])) : ?>
                    <p class="mt-3 overview-desc">
                        <?php echo rt_kses_basic($settings['layout_two_description']); ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($settings['layout_two_highlight_items'])) : ?>
                    <ul class="list-2">
                        <?php foreach ($settings['layout_two_highlight_items'] as $item) : ?>
                            <li>
                                <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                <?php echo rt_kses_basic($item['layout_two_highlight_item']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>