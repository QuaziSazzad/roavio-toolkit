<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="single-footer-widget">
        <div class="wid-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url($settings['logo']['url']); ?>" width="<?php echo esc_attr($settings['logo_size']['width']); ?>" height="<?php echo esc_attr($settings['logo_size']['height']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
            </a>
        </div>
        <div class="footer-content">
            <?php if (!empty($settings['layout_one_summary_text'])) : ?>
                <p>
                    <?php echo rt_kses_basic($settings['layout_one_summary_text']); ?>
                </p>
            <?php endif; ?>
            <div class="social-icon">
                <?php
                if (!empty($settings['layout_one_social_icons'])) :
                    foreach ($settings['layout_one_social_icons'] as $social_icon) :
                ?>
                        <a href="<?php echo esc_url($social_icon['social_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($social_icon['social_icon'], ['aria-hidden' => 'true'], 'i'); ?></a>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>