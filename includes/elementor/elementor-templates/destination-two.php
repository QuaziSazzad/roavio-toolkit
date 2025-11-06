<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Popular-Destination Section-2 Start -->
    <section class="popular-destination-section-2 section-padding fix">
        <div class="container custom-container">
            <?php if (!empty($settings['section_title']) ||  !empty($settings['section_sub_title'])) : ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['section_title'])) : ?>
                        <h2 class="text-anim sec-title"><?php echo rt_kses_basic($settings['section_title']); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($settings['section_sub_title'])) : ?>
                        <p class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['section_sub_title']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="row g-2">
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
                        <div class="<?php echo esc_attr($column_class); ?> col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".<?php echo esc_attr(number_format($delay, 1)); ?>s">
                            <div class="destination-item-2">
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
    </section>
<?php endif; ?>