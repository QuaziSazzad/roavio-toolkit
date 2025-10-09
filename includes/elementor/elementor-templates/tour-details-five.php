<?php

if ('layout_five' == $settings['layout_type']) :
?>
    <div class="widget-contact">
        <?php if (!empty($settings['layout_five_title'])) : ?>
            <<?php echo esc_attr($settings['layout_five_title_tag']); ?>>
                <?php echo esc_html($settings['layout_five_title']); ?>
            </<?php echo esc_attr($settings['layout_five_title_tag']); ?>>
        <?php endif; ?>

        <?php if (!empty($settings['layout_five_contact_items'])) : ?>
            <ul class="list-style-one">
                <?php foreach ($settings['layout_five_contact_items'] as $item) : ?>
                    <li>
                        <?php \Elementor\Icons_Manager::render_icon($item['layout_five_contact_icon'], ['aria-hidden' => 'true']); ?>
                        <?php if (!empty($item['layout_five_contact_url']['url'])) : ?>
                            <a href="<?php echo esc_url($item['layout_five_contact_url']['url']); ?>"
                                <?php echo $item['layout_five_contact_url']['is_external'] ? 'target="_blank"' : ''; ?>
                                <?php echo $item['layout_five_contact_url']['nofollow'] ? 'rel="nofollow"' : ''; ?>>
                                <?php echo esc_html($item['layout_five_contact_text']); ?>
                            </a>
                        <?php else : ?>
                            <?php echo esc_html($item['layout_five_contact_text']); ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
<?php endif; ?>