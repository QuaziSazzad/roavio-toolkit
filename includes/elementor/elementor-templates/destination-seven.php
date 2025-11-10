<?php if ('layout_seven' == $settings['layout_type']) : ?>
    <!-- Destination Section-4 Start -->
    <section class="destination-section-4 fix">
        <div class="container-fluid">
            <div class="row g-2">
                <?php
                if (is_array($settings['locations_two_items'])) :
                    $delay = 0.3;
                    $index = 0;
                    foreach ($settings['locations_two_items'] as $item) :
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
                        <div class="<?php echo esc_attr($column_class); ?> col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                            <div class="destination-item-4">
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
                                            <p><?php echo esc_html($address); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                        $delay = ($delay == 0.3) ? 0.5 : (($delay == 0.5) ? 0.7 : 0.3);
                        $index++;
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>