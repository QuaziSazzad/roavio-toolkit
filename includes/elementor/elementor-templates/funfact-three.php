<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Counter Section-4 Start -->
    <section class="counter-section-4 fix">
        <div class="container-fluid">
            <div class="counter-wrapper-4">
                <div class="row g-2">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!-- First Counter Box -->
                        <div class="counter-box-item-4 wow fadeInLeft" data-wow-delay=".3s">
                            <?php if (!empty($settings['layout_three_counter_one_icon']['value'])) : ?>
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_counter_one_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="content">
                                <?php if (!empty($settings['layout_three_counter_one_number'])) : ?>
                                    <h2>
                                        <span class="count"><?php echo esc_html($settings['layout_three_counter_one_number']); ?></span><?php echo esc_html($settings['layout_three_counter_one_suffix']); ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_counter_one_description'])) : ?>
                                    <p>
                                        <?php echo esc_html($settings['layout_three_counter_one_description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- Second Counter Box -->
                        <div class="counter-box-item-4 style-2 wow fadeInLeft" data-wow-delay=".5s">
                            <?php if (!empty($settings['layout_three_counter_two_icon']['value'])) : ?>
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_counter_two_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="content">
                                <?php if (!empty($settings['layout_three_counter_two_number'])) : ?>
                                    <h2>
                                        <span class="count"><?php echo esc_html($settings['layout_three_counter_two_number']); ?></span><?php echo esc_html($settings['layout_three_counter_two_suffix']); ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_counter_two_description'])) : ?>
                                    <p>
                                        <?php echo esc_html($settings['layout_three_counter_two_description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <?php if (!empty($settings['layout_three_center_image']['url'])) : ?>
                            <div class="counter-image-4 style-4">
                                <?php rt_elementor_rendered_image($settings, 'layout_three_center_image'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!-- Third Counter Box -->
                        <div class="counter-box-item-4 style-3 wow fadeInRight" data-wow-delay=".3s">
                            <?php if (!empty($settings['layout_three_counter_three_icon']['value'])) : ?>
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_counter_three_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="content">
                                <?php if (!empty($settings['layout_three_counter_three_number'])) : ?>
                                    <h2>
                                        <span class="count"><?php echo esc_html($settings['layout_three_counter_three_number']); ?></span><?php echo esc_html($settings['layout_three_counter_three_suffix']); ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_three_counter_three_description'])) : ?>
                                    <p>
                                        <?php echo esc_html($settings['layout_three_counter_three_description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if (!empty($settings['layout_three_right_image']['url'])) : ?>
                            <div class="counter-image-4 style-right wow fadeInRight" data-wow-delay=".5s">
                                <?php rt_elementor_rendered_image($settings, 'layout_three_right_image'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>