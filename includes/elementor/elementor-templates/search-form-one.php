<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Contact-From Section Start -->
    <div class="contact-from-section header-bg wow fadeInUp" data-wow-delay=".3s">
        <div class="right-shape d-none d-xxl-block">
            <?php rt_elementor_rendered_image($settings, 'layout_one_bg_image'); ?>
        </div>
        <div class="container-fluid">
            <div class="contact-from-wrapper">
                <div class="contact-content">
                    <?php if ($settings['layout_one_count_number']) : ?>
                        <h2><span class="count"><?php echo esc_html($settings['layout_one_count_number']); ?></span><?php echo esc_html($settings['layout_one_count_symbol']); ?></h2>
                    <?php endif; ?>
                    <?php if ($settings['layout_one_count_text']) : ?>
                        <h6><?php echo esc_html($settings['layout_one_count_text']); ?></h6>
                    <?php endif; ?>
                    <div class="grop-image">
                        <?php rt_elementor_rendered_image($settings, 'layout_one_group_image'); ?>
                    </div>
                </div>
                <div class="contact-right">
                    <?php if ($settings['layout_one_title']) : ?>
                        <<?php echo esc_attr($settings['layout_one_title_tag']); ?>><?php echo rt_kses_basic($settings['layout_one_title']); ?></<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                    <?php endif; ?>
                    <?php if ($settings['layout_one_sub_title']) : ?>
                        <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>><?php echo rt_kses_basic($settings['layout_one_sub_title']); ?></<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
                    <?php endif; ?>
                    <div class="box-item">
                        <div class="form-clt">
                            <div class="form">
                                <select class="single-select w-100">
                                    <option>Where to go</option>
                                    <option>Travel destinations</option>
                                    <option>Local places</option>
                                    <option>Adventure</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-clt">
                            <div class="form">
                                <select class="single-select w-100">
                                    <option>Where to go</option>
                                    <option>Travel destinations</option>
                                    <option>Local places</option>
                                    <option>Adventure</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-clt">
                            <div class="form">
                                <select class="single-select w-100">
                                    <option>Travel type</option>
                                    <option>Travel destinations</option>
                                    <option>Local places</option>
                                    <option>Adventure</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-clt">
                            <button class="theme-btn" type="submit">
                                Find Tours
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>