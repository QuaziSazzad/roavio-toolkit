<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Benefit-Tour Section Start -->
    <section class="benefit-tour-section section-padding fix header-bg">
        <div class="container">
            <div class="section-title text-center">
                <?php if ($settings['layout_one_title']) : ?>
                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['layout_one_title']); ?></<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                <?php endif; ?>
                <?php if ($settings['layout_one_sub_title']) : ?>
                    <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html($settings['layout_one_sub_title']); ?></<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php
                if (is_array($settings['layout_one_benefit_items'])) :
                    $delay = 300;
                    $count = 0;
                    foreach ($settings['layout_one_benefit_items'] as $item) :
                        $count++;
                        // Add center image after first item
                        if ($count === 2) :
                ?>
                            <div class="col-xl-6 col-lg-4 col-md-6 wow img-custom-anim-top">
                                <div class="benefit-tour-image">
                                    <?php rt_elementor_rendered_image($settings, 'layout_one_center_image'); ?>
                                </div>
                            </div>
                        <?php
                        endif;

                        // Animation class based on position
                        $animation_class = 'fadeInUp';
                        if ($count === 1) {
                            $animation_class = 'fadeInLeft';
                        } elseif ($count === 3) {
                            $animation_class = 'fadeInRight';
                        }
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow <?php echo esc_attr($animation_class); ?>" data-wow-delay=".<?php echo esc_attr($delay); ?>s">
                            <div class="benefit-tour-item">
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['layout_one_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                                <div class="content">
                                    <?php if ($item['layout_one_item_title']) : ?>
                                        <h5>
                                            <a href="<?php echo esc_url($item['layout_one_url']['url']); ?>" <?php if (!empty($item['layout_one_url']['is_external'])) : ?> target="_blank" <?php endif; ?>>
                                                <?php echo esc_html($item['layout_one_item_title']); ?>
                                            </a>
                                        </h5>
                                    <?php endif; ?>
                                    <?php if ($item['layout_one_item_description']) : ?>
                                        <p>
                                            <?php echo esc_html($item['layout_one_item_description']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                <?php
                        $delay += 200;
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>