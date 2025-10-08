<?php

if ('layout_two' == $settings['layout_type']) :
    $uid = $this->get_id();
?>
    <?php if (!empty($settings['layout_two_title'])) : ?>
        <<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
            <?php echo rt_kses_basic($settings['layout_two_title']); ?>
        </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
    <?php endif; ?>
    <div class="accordion-two" id="faq-accordion-two-<?php echo esc_attr($uid); ?>">
        <?php
        if (!empty($settings['layout_two_items'])) :
            $i = 0;
            foreach ($settings['layout_two_items'] as $item) :
                $i++;
                $collapse_id = 'collapseTwo' . $i;
                $is_expanded = isset($item['layout_two_item_expanded']) && 'yes' === $item['layout_two_item_expanded'];
                $button_class = $is_expanded ? 'accordion-button' : 'accordion-button collapsed';
                $collapse_class = $is_expanded ? 'accordion-collapse collapse show' : 'accordion-collapse collapse';
                $aria_expanded = $is_expanded ? 'true' : 'false';
        ?>
                <div class="accordion-item">
                    <h5 class="accordion-header">
                        <button class="<?php echo esc_attr($button_class); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="<?php echo esc_attr($aria_expanded); ?>" aria-controls="<?php echo esc_attr($collapse_id); ?>">
                            <?php echo rt_kses_basic($item['layout_two_item_title']); ?>
                        </button>
                    </h5>
                    <div id="<?php echo esc_attr($collapse_id); ?>" class="<?php echo esc_attr($collapse_class); ?>" data-bs-parent="#faq-accordion-two-<?php echo esc_attr($uid); ?>">
                        <div class="accordion-body">
                            <p>
                                <?php echo rt_kses_basic($item['layout_two_item_content']); ?>
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