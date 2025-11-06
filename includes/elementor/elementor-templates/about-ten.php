<?php if ('layout_ten' == $settings['layout_type']) : ?>
    <!-- Feature-Memories Section Start -->
    <section class="feature-memories-section section-padding fix header-bg">
        <div class="container">
            <div class="feature-memories-wrapper">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="feature-memories-content">
                            <div class="section-title mb-0">
                                <?php if (!empty($settings['layout_ten_title'])) : ?>
                                    <<?php echo esc_attr($settings['layout_ten_title_tag']); ?> class="text-white sec-title text-anim">
                                        <?php echo rt_kses_basic($settings['layout_ten_title']); ?>
                                    </<?php echo esc_attr($settings['layout_ten_title_tag']); ?>>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_ten_text'])) : ?>
                                <p class="text description">
                                    <?php echo rt_kses_basic($settings['layout_ten_text']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="feature-memories-image">
                                <?php rt_elementor_rendered_image($settings, 'layout_ten_image'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="feature-memories-right">
                            <?php if (!empty($settings['layout_ten_text_2'])) : ?>
                                <p class="text-2 description">
                                    <?php echo rt_kses_basic($settings['layout_ten_text_2']); ?>
                                </p>
                            <?php endif; ?>
                            <div class="feature-memories-item">
                                <div class="feature-item">
                                    <div class="icon-item">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_ten_feature_icon_1'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <?php if (!empty($settings['layout_ten_feature_title_1'])) : ?>
                                            <h5><?php echo rt_kses_basic($settings['layout_ten_feature_title_1']); ?></h5>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (!empty($settings['layout_ten_feature_text_1'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($settings['layout_ten_feature_text_1']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="feature-item">
                                    <div class="icon-item">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_ten_feature_icon_2'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <?php if (!empty($settings['layout_ten_feature_title_2'])) : ?>
                                            <h5><?php echo rt_kses_basic($settings['layout_ten_feature_title_2']); ?></h5>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (!empty($settings['layout_ten_feature_text_2'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($settings['layout_ten_feature_text_2']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="list-box-item">
                                <?php if (!empty($settings['layout_ten_list_items'])) : ?>
                                    <ul class="list">
                                        <?php foreach ($settings['layout_ten_list_items'] as $item) : ?>
                                            <li>
                                                <i class="fa-solid fa-badge-check"></i>
                                                <?php echo rt_kses_basic($item['layout_ten_list_text']); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="award-box">
                                    <div class="icon">
                                        <?php rt_elementor_rendered_image($settings, 'layout_ten_award_image'); ?>
                                    </div>
                                    <?php if (!empty($settings['layout_ten_award_title'])) : ?>
                                        <h5>
                                            <?php echo rt_kses_basic($settings['layout_ten_award_title']); ?>
                                        </h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>