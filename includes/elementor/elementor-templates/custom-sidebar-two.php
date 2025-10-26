<?php if ('layout_two' == $settings['layout_type']) : ?>
    <div class="destination-details-wrapper">
        <div class="price-box-item">
            <?php if (!empty($settings['layout_two_title'])) : ?>
                <h3 class="sec-title"><?php echo esc_html($settings['layout_two_title']); ?></h3>
            <?php endif; ?>
            <div class="price-item">
                <div class="price">
                    <?php if (!empty($settings['layout_two_child_price_label'])) : ?>
                        <h6><?php echo esc_html($settings['layout_two_child_price_label']); ?></h6>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_two_child_price'])) : ?>
                        <h2><?php echo esc_html($settings['layout_two_child_price']); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="price style-2">
                    <?php if (!empty($settings['layout_two_adult_price_label'])) : ?>
                        <h6><?php echo esc_html($settings['layout_two_adult_price_label']); ?></h6>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_two_adult_price'])) : ?>
                        <h2><?php echo esc_html($settings['layout_two_adult_price']); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (!empty($settings['layout_two_button_text'])) :
                $target = $settings['layout_two_button_url']['is_external'] ? ' target="_blank"' : '';
                $nofollow = $settings['layout_two_button_url']['nofollow'] ? ' rel="nofollow"' : '';
                $url = !empty($settings['layout_two_button_url']['url']) ? $settings['layout_two_button_url']['url'] : '#';
            ?>
                <a href="<?php echo esc_url($url); ?>" class="theme-btn" <?php echo ($target . $nofollow); ?>><?php echo esc_html($settings['layout_two_button_text']); ?></a>
            <?php endif; ?>
            <?php if (!empty($settings['layout_two_bottom_text']) || !empty($settings['layout_two_bottom_link_text'])) : ?>
                <h6>
                    <?php echo esc_html($settings['layout_two_bottom_text']); ?>
                    <?php if (!empty($settings['layout_two_bottom_link_text'])) :
                        $target = $settings['layout_two_bottom_link_url']['is_external'] ? ' target="_blank"' : '';
                        $nofollow = $settings['layout_two_bottom_link_url']['nofollow'] ? ' rel="nofollow"' : '';
                        $url = !empty($settings['layout_two_bottom_link_url']['url']) ? $settings['layout_two_bottom_link_url']['url'] : '#';
                    ?>
                        <a href="<?php echo esc_url($url); ?>" <?php echo ($target . $nofollow); ?>><?php echo esc_html($settings['layout_two_bottom_link_text']); ?></a>
                    <?php endif; ?>
                </h6>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>