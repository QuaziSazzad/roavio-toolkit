<?php if ('layout_four' == $settings['layout_type']) : ?>
    <div class="comment-box">
        <?php if (!empty($settings['layout_four_title'])) : ?>
            <h3 class="sec-title"><?php echo esc_html($settings['layout_four_title']); ?></h3>
        <?php endif; ?>
        <?php if (!empty($settings['layout_four_subtitle'])) : ?>
            <p class="sec-sub-title"><?php echo esc_html($settings['layout_four_subtitle']); ?></p>
        <?php endif; ?>
        <?php if (!empty($settings['layout_four_select_cf7_form'])) :
            echo do_shortcode('[contact-form-7 id="' . esc_attr($settings['layout_four_select_cf7_form']) . '"]');
        endif; ?>
    </div>
<?php endif; ?>