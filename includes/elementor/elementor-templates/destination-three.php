<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Destination Section-4 Start -->
    <section class="destination-section-4 section-padding fix">
        <div class="container">
            <?php if (!empty($settings['section_title']) ||  !empty($settings['section_sub_title'])) : ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['section_title'])) : ?>
                        <<?php echo esc_html($settings['title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['section_title']); ?></<?php echo esc_html($settings['title_tag']); ?>>
                    <?php endif; ?>
                    <?php if (!empty($settings['section_sub_title'])) : ?>
                        <<?php echo esc_html($settings['section_sub_title_tag']); ?> class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['section_sub_title']); ?></<?php echo esc_html($settings['section_sub_title_tag']); ?>>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="destination-one-wrapper">
                <div class="row g-3">
                    <?php
                    if (is_array($settings['locations_two_items'])) :
                        $delay = 0.3;
                        foreach ($settings['locations_two_items'] as $item) :
                            $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                            $image_alt = !empty($item['image']['alt']) ? $item['image']['alt'] : $item['location'];

                            $taxonomy = 'ba_location';
                            $link_term = '#';
                            $term = get_term_by('slug', $item['select_category'], $taxonomy);
                            if ($term) {
                                $link_term = get_term_link($term->term_id, $taxonomy);
                            }
                            $url = $link_term;
                            if (!empty($item['custom_url']['url'])) {
                                $url = $item['custom_url']['url'];
                            }

                            $address = '';
                            if ($term) {
                                $address = get_term_meta($term->term_id, 'address', true);
                            }

                            $column_class = !empty($item['column']) ? $item['column'] : 'col-xl-3';
                    ?>
                            <div class="<?php echo esc_attr($column_class); ?> col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo esc_attr(number_format($delay, 1)); ?>s">
                                <div class="destination-image-item">
                                    <div class="destination-image">
                                        <?php rt_elementor_rendered_image($item, 'image'); ?>
                                        <div class="destination-content">
                                            <?php if (!empty($item['location'])) : ?>
                                                <h3>
                                                    <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($item['location']); ?></a>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (!empty($item['address'])) : ?>
                                                <p><?php echo esc_html($item['address']); ?></p>
                                            <?php else: ?>
                                                <?php echo esc_html($address); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $delay += 0.2;
                            if ($delay > 0.7) {
                                $delay = 0.3;
                            }
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>