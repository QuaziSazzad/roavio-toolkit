<?php if ('layout_three' == $settings['layout_type']) : ?>
    <div class="faq-bg-image">
        <?php rt_elementor_rendered_image($settings, 'layout_three_image'); ?>
        <div class="tour-bg-content">
            <?php if (!empty($settings['layout_three_subtitle'])) : ?>
                <span class="sec-sub-title"><?php echo rt_kses_basic($settings['layout_three_subtitle']); ?></span>
            <?php endif; ?>
            <?php if (!empty($settings['layout_three_title'])) : ?>
                <h3 class="sec-title">
                    <a href="<?php echo esc_url($settings['layout_three_title_url']['url']); ?>"
                        <?php echo ($settings['layout_three_title_url']['is_external'] ? 'target="_blank"' : ''); ?>
                        <?php echo ($settings['layout_three_title_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                        <?php echo rt_kses_basic($settings['layout_three_title']); ?>
                    </a>
                </h3>
            <?php endif; ?>
            <?php if (!empty($settings['layout_three_button_text'])) : ?>
                <a href="<?php echo esc_url($settings['layout_three_button_url']['url']); ?>"
                    class="theme-btn"
                    <?php echo $settings['layout_three_button_url']['is_external'] ? 'target="_blank"' : ''; ?>
                    <?php echo $settings['layout_three_button_url']['nofollow'] ? 'rel="nofollow"' : ''; ?>>
                    <?php echo rt_kses_basic($settings['layout_three_button_text']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>