<?php if ('layout_four' == $settings['layout_type']) :
    $uid = $this->get_id();
?>

    <!-- Faq Section-3 Start -->
    <section class="faq-section-3 section-padding fix header-bg pt-0">
        <div class="faq-shape">
            <?php rt_elementor_rendered_image($settings, 'layout_four_shape'); ?>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_four_section_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_four_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".3s">
                        <?php echo rt_kses_basic($settings['layout_four_section_title']); ?>
                    </<?php echo esc_attr($settings['layout_four_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_four_section_description'])) : ?>
                    <p class="text-white wow fadeInUp" data-wow-delay=".5s">
                        <?php echo rt_kses_basic($settings['layout_four_section_description']); ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="faq-wrapper-3">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="faq-left-item">
                            <?php if (!empty($settings['layout_four_location_title'])) : ?>
                                <h3><?php echo rt_kses_basic($settings['layout_four_location_title']); ?></h3>
                            <?php endif; ?>
                            <div class="faq-image">
                                <?php rt_elementor_rendered_image($settings, 'layout_four_image'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="faq-content">
                            <div class="faq-items-5">
                                <div class="accordion" id="technicalAccordion_<?php echo esc_attr($uid); ?>">
                                    <?php
                                    if (!empty($settings['layout_four_activities'])) :
                                        $i = 0;
                                        foreach ($settings['layout_four_activities'] as $index => $item) :
                                            $i++;
                                            $is_active = $item['layout_four_item_is_active'] === 'yes';
                                            $collapse_class = $is_active ? 'show' : '';
                                            $button_class = $is_active ? '' : 'collapsed';
                                            $expanded = $is_active ? 'true' : 'false';
                                            $item_id = 'technicalCollapse_' . $uid . '_' . $i;
                                            $heading_id = 'technicalHeading_' . $uid . '_' . $i;
                                    ?>
                                            <div class="accordion-item <?php echo ($i === count($settings['layout_four_activities'])) ? 'mb-0' : ''; ?>">
                                                <h2 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                                    <button class="accordion-button <?php echo esc_attr($button_class); ?>" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#<?php echo esc_attr($item_id); ?>" aria-expanded="<?php echo esc_attr($expanded); ?>" aria-controls="<?php echo esc_attr($item_id); ?>">
                                                        <span><?php echo rt_kses_basic($item['layout_four_item_number']); ?></span> <?php echo rt_kses_basic($item['layout_four_item_title']); ?>
                                                    </button>
                                                </h2>
                                                <div id="<?php echo esc_attr($item_id); ?>" class="accordion-collapse collapse <?php echo esc_attr($collapse_class); ?>"
                                                    aria-labelledby="<?php echo esc_attr($heading_id); ?>" data-bs-parent="#technicalAccordion_<?php echo esc_attr($uid); ?>">
                                                    <div class="accordion-body">
                                                        <p>
                                                            <?php echo rt_kses_basic($item['layout_four_item_description']); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>