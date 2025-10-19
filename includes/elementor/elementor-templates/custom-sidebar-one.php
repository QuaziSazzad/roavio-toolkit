<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="destination-details-wrapper">
        <div class="best-tourist-box">
            <div class="top-content">
                <?php if (!empty($settings['layout_one_subtitle'])) : ?>
                    <h6><?php echo esc_html($settings['layout_one_subtitle']); ?></h6>
                <?php endif; ?>

                <?php if (!empty($settings['layout_one_title'])) : ?>
                    <h3>
                        <?php echo esc_html($settings['layout_one_title']); ?>
                    </h3>
                <?php endif; ?>

                <?php if (!empty($settings['layout_one_button_text'])) :
                    $target = $settings['layout_one_button_url']['is_external'] ? ' target="_blank"' : '';
                    $nofollow = $settings['layout_one_button_url']['nofollow'] ? ' rel="nofollow"' : '';
                    $url = !empty($settings['layout_one_button_url']['url']) ? $settings['layout_one_button_url']['url'] : '#';
                ?>
                    <a href="<?php echo esc_url($url); ?>" class="theme-btn" <?php echo ($target . $nofollow); ?>><?php echo esc_html($settings['layout_one_button_text']); ?></a>
                <?php endif; ?>
            </div>
            <div class="bottom-image">
                <?php rt_elementor_rendered_image($settings, 'layout_one_image'); ?>
                <div class="bg-shape">
                    <?php rt_elementor_rendered_image($settings, 'layout_one_bg_shape_image'); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>