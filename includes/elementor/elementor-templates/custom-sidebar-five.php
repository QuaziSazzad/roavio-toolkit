<?php if ('layout_five' == $settings['layout_type']) : ?>
    <div class="tour-details-wrappers">
        <div class="tour-details-content">
            <div class="tour-details-side">
                <div class="widget-contact">
                    <?php if (!empty($settings['layout_five_title'])) : ?>
                        <<?php echo esc_attr($settings['layout_five_title_tag']); ?> class="sec-title">
                            <?php echo esc_html($settings['layout_five_title']); ?>
                        </<?php echo esc_attr($settings['layout_five_title_tag']); ?>>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_five_items'])) : ?>
                        <ul class="list-style-one">
                            <?php foreach ($settings['layout_five_items'] as $item) : ?>
                                <li>
                                    <?php \Elementor\Icons_Manager::render_icon($item['layout_five_item_icon'], ['aria-hidden' => 'true']); ?>
                                    <?php if (!empty($item['layout_five_item_link']['url'])) : ?>
                                        <a href="<?php echo esc_url($item['layout_five_item_link']['url']); ?>"
                                            <?php echo ($item['layout_five_item_link']['is_external'] ? ' target="_blank"' : ''); ?>
                                            <?php echo ($item['layout_five_item_link']['nofollow'] ? ' rel="nofollow"' : ''); ?>>
                                            <?php echo esc_html($item['layout_five_item_text']); ?>
                                        </a>
                                    <?php else : ?>
                                        <?php echo esc_html($item['layout_five_item_text']); ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>