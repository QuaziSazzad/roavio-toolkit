<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="single-footer-widget">
        <?php if (!empty($settings['layout_one_title'])) : ?>
            <div class="wid-title">
                <h4><?php echo rt_kses_basic($settings['layout_one_title']); ?></h4>
            </div>
        <?php endif; ?>
        <div class="newsletter-content">
            <?php if (!empty($settings['layout_one_summary_text'])) : ?>
                <p>
                    <?php echo rt_kses_basic($settings['layout_one_summary_text']); ?>
                </p>
            <?php endif; ?>
            <form class="mc-form">
                <div class="form-clt">
                    <input type="text" class="mc-form__input" name="email" placeholder="<?php echo esc_attr($settings['layout_one_placeholder']); ?>">
                    <button type="submit" class="theme-btn">
                        <?php echo esc_html($settings['layout_one_btn_label']); ?>
                    </button>
                </div>
                <p class="mc-form__feedback text-white"></p>
            </form>
        </div>
    </div>
<?php endif; ?>