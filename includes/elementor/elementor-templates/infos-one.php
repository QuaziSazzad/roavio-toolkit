<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Feature Section Start -->
    <section class="feature-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title text-center">
                <?php if ($settings['layout_one_title']) : ?>
                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['layout_one_title']); ?></<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                <?php endif; ?>
                <?php if ($settings['layout_one_sub_title']) : ?>
                    <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html($settings['layout_one_sub_title']); ?></<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php
                if (is_array($settings['layout_one_info_items'])) :
                    $delay = 200;
                    foreach ($settings['layout_one_info_items'] as $item) :
                        $delay += 200;
                ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo esc_attr($delay); ?>s">
                            <div class="feature-item">
                                <div class="feature-icon-item">
                                    <?php if (!empty($item['layout_one_item_icon']['value'])) : ?>
                                        <div class="icon <?php echo esc_attr($item['layout_one_item_icon_style']); ?>">
                                            <?php \Elementor\Icons_Manager::render_icon($item['layout_one_item_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($item['layout_one_item_title']) : ?>
                                        <h4>
                                            <?php echo rt_kses_basic($item['layout_one_item_title']); ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                                <?php if ($item['layout_one_item_description']) : ?>
                                    <p>
                                        <?php echo esc_html($item['layout_one_item_description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>