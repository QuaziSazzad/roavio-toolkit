<?php if ('layout_six' == $settings['layout_type']) : ?>
    <div class="tour-details-wrappers">
        <div class="tour-details-content">
            <div class="tour-details-side">
                <div class="tour-sidebar-bg-image-items">
                    <?php rt_elementor_rendered_image($settings, 'layout_six_image'); ?>
                    <div class="tour-bg-content">
                        <?php if (!empty($settings['layout_six_subtitle'])) : ?>
                            <span class="sec-sub-title"><?php echo esc_html($settings['layout_six_subtitle']); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_six_title'])) : ?>
                            <h3 class="sec-title">
                                <a href="<?php echo esc_url($settings['layout_six_url']['url']); ?>" <?php echo ($settings['layout_six_url']['is_external'] ? ' target="_blank"' : ''); ?> <?php echo ($settings['layout_six_url']['nofollow'] ? ' rel="nofollow"' : ''); ?>><?php echo esc_html($settings['layout_six_title']); ?></a>
                            </h3>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_six_button_text'])) : ?>
                            <a href="<?php echo esc_url($settings['layout_six_button_url']['url']); ?>" <?php echo ($settings['layout_six_button_url']['is_external'] ? ' target="_blank"' : ''); ?> <?php echo ($settings['layout_six_button_url']['nofollow'] ? ' rel="nofollow"' : ''); ?> class="theme-btn"><?php echo esc_html($settings['layout_six_button_text']); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>