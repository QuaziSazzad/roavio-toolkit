<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="single-footer-widget">
        <?php if (!empty($settings['layout_one_title'])) : ?>
            <div class="wid-title">
                <h4><?php echo rt_kses_basic($settings['layout_one_title']); ?></h4>
            </div>
        <?php endif; ?>

        <?php if (!empty($settings['layout_one_contact_items'])) : ?>
            <?php foreach ($settings['layout_one_contact_items'] as $item) :
                $last_item_class = 'yes' === $item['layout_one_contact_last_item'] ? ' mb-0' : '';
                $link_key = 'contact_link_' . uniqid();
                $has_link = !empty($item['layout_one_contact_link']['url']);

                if ($has_link) {
                    $this->add_link_attributes($link_key, $item['layout_one_contact_link']);
                }
            ?>
                <div class="contact-item<?php echo esc_attr($last_item_class); ?>">
                    <div class="icon">
                        <?php \Elementor\Icons_Manager::render_icon($item['layout_one_contact_icon'], ['aria-hidden' => 'true']); ?>
                    </div>
                    <div class="content">
                        <h6>
                            <?php if ($has_link) : ?>
                                <a <?php echo $this->get_render_attribute_string($link_key); ?>>
                                    <?php echo rt_kses_basic($item['layout_one_contact_content']); ?>
                                </a>
                            <?php else : ?>
                                <?php echo rt_kses_basic($item['layout_one_contact_content']); ?>
                            <?php endif; ?>
                        </h6>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>