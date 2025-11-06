<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Why-choose-us Section-3 Start -->
    <section class="why-choose-us-section-3 section-padding fix bg-color-5">
        <?php if (!empty($settings['layout_two_left_shape_image']['url'])) : ?>
            <div class="left-shape">
                <?php rt_elementor_rendered_image($settings, 'layout_two_left_shape_image'); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($settings['layout_two_right_shape_image']['url'])) : ?>
            <div class="right-shape">
                <?php rt_elementor_rendered_image($settings, 'layout_two_right_shape_image'); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($settings['layout_two_bottom_shape_image']['url'])) : ?>
            <div class="bottom-shape">
                <?php rt_elementor_rendered_image($settings, 'layout_two_bottom_shape_image'); ?>
            </div>
        <?php endif; ?>

        <div class="container-fluid">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_two_section_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="text-white text-anim  sec-title">
                        <?php echo rt_kses_basic($settings['layout_two_section_title']); ?>
                    </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_two_section_subtitle'])) : ?>
                    <p class="text-white wow fadeInUp sec-sub-title" data-wow-delay=".5s">
                        <?php echo rt_kses_basic($settings['layout_two_section_subtitle']); ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="row">
                <?php
                if (!empty($settings['layout_two_feature_boxes'])) :
                    foreach ($settings['layout_two_feature_boxes'] as $index => $item) :
                ?>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="choose-us-box-items-3">
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['layout_two_box_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                                <?php if (!empty($item['layout_two_box_title'])) : ?>
                                    <h5><?php echo rt_kses_basic($item['layout_two_box_title']); ?></h5>
                                <?php endif; ?>

                                <?php if (!empty($item['layout_two_box_description'])) : ?>
                                    <p>
                                        <?php echo rt_kses_basic($item['layout_two_box_description']); ?>
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