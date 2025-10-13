<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Countr-section-3 Start -->
    <section class="countr-section-3 section-padding fix">
        <div class="container-fluid">
            <div class="counter-wrapper-3">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <div class="row g-2">
                            <div class="col-xl-6 col-lg-12">
                                <div class="counter-box">
                                    <div class="top-items">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_counter_one_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <div class="content">
                                            <h3><span class="count"><?php echo esc_html($settings['layout_two_counter_one_number']); ?></span><?php echo esc_html($settings['layout_two_counter_one_suffix']); ?></h3>
                                            <h6><?php echo esc_html($settings['layout_two_counter_one_title']); ?></h6>
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo esc_html($settings['layout_two_counter_one_description']); ?>
                                    </p>
                                </div>
                                <div class="counter-box style-2">
                                    <div class="top-items">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_counter_two_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <div class="content">
                                            <h3><span class="count"><?php echo esc_html($settings['layout_two_counter_two_number']); ?></span><?php echo esc_html($settings['layout_two_counter_two_suffix']); ?></h3>
                                            <h6><?php echo esc_html($settings['layout_two_counter_two_title']); ?></h6>
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo esc_html($settings['layout_two_counter_two_description']); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="counter-image">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_counter_image'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-2">
                            <div class="col-xl-6 col-lg-12">
                                <div class="counter-box">
                                    <div class="top-items">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_counter_three_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <div class="content">
                                            <h3><span class="count"><?php echo esc_html($settings['layout_two_counter_three_number']); ?></span><?php echo esc_html($settings['layout_two_counter_three_suffix']); ?></h3>
                                            <h6><?php echo esc_html($settings['layout_two_counter_three_title']); ?></h6>
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo esc_html($settings['layout_two_counter_three_description']); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="counter-box">
                                    <div class="top-items">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_counter_four_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <div class="content">
                                            <h3><span class="count"><?php echo esc_html($settings['layout_two_counter_four_number']); ?></span><?php echo esc_html($settings['layout_two_counter_four_suffix']); ?></h3>
                                            <h6><?php echo esc_html($settings['layout_two_counter_four_title']); ?></h6>
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo esc_html($settings['layout_two_counter_four_description']); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="adventer-image">
                                    <?php rt_elementor_rendered_image($settings, 'layout_two_adventure_image'); ?>
                                    <div class="left-content">
                                        <h6><?php echo esc_html($settings['layout_two_adventure_subtitle']); ?></h6>
                                        <h2>
                                            <?php echo wp_kses_post($settings['layout_two_adventure_title']); ?>
                                        </h2>
                                        <a href="<?php echo esc_url($settings['layout_two_adventure_button_url']['url']); ?>" class="theme-btn"><?php echo esc_html($settings['layout_two_adventure_button_text']); ?></a>
                                    </div>
                                    <div class="right-box">
                                        <h3><span class="count"><?php echo esc_html($settings['layout_two_right_box_number']); ?></span><?php echo esc_html($settings['layout_two_right_box_suffix']); ?></h3>
                                        <p><?php echo esc_html($settings['layout_two_right_box_text']); ?></p>
                                        <?php rt_elementor_rendered_image($settings, 'layout_two_right_box_image'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>