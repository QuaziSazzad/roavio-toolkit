<?php if ('layout_three' == $settings['layout_type']) :
    $uid = $this->get_id();
?>
    <?php if (!empty($settings['layout_three_title'])) : ?>
        <<?php echo esc_attr($settings['layout_three_title_tag']); ?>>
            <?php echo rt_kses_basic($settings['layout_three_title']); ?>
        </<?php echo esc_attr($settings['layout_three_title_tag']); ?>>
    <?php endif; ?>
    <div class="accordion-one mt-25 mb-60" id="faq-accordion-<?php echo esc_attr($uid); ?>">
        <?php
        if (!empty($settings['layout_three_items'])) :
            foreach ($settings['layout_three_items'] as $index => $item) :
                $item_id = 'collapse-' . $uid . '-' . $index;
                $expanded = isset($item['layout_three_item_expanded']) && 'yes' === $item['layout_three_item_expanded'] ? 'true' : 'false';
                $show_class = isset($item['layout_three_item_expanded']) && 'yes' === $item['layout_three_item_expanded'] ? 'show' : '';
                $collapsed_class = isset($item['layout_three_item_expanded']) && 'yes' === $item['layout_three_item_expanded'] ? '' : 'collapsed';
        ?>
                <div class="accordion-item">
                    <h5 class="accordion-header">
                        <button class="accordion-button <?php echo esc_attr($collapsed_class); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($item_id); ?>" aria-expanded="<?php echo esc_attr($expanded); ?>" aria-controls="<?php echo esc_attr($item_id); ?>">
                            <?php if (!empty($item['layout_three_item_number'])) : ?>
                                <?php echo esc_html($item['layout_three_item_number']); ?>_
                            <?php endif; ?>
                            <?php echo esc_html($item['layout_three_item_title']); ?>
                        </button>
                    </h5>
                    <div id="<?php echo esc_attr($item_id); ?>" class="accordion-collapse collapse <?php echo esc_attr($show_class); ?>" data-bs-parent="#faq-accordion-<?php echo esc_attr($uid); ?>">
                        <div class="accordion-body">
                            <p>
                                <?php echo wp_kses_post($item['layout_three_item_content']); ?>
                            </p>
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
<?php endif; ?>