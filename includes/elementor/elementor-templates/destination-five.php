<?php if ('layout_five' == $settings['layout_type']) : ?>
    <!-- Popular-Destination Section-4 Start -->
    <section class="popular-destination-section-4 section-padding header-bg fix">
        <div class="container">
            <?php if (!empty($settings['section_title']) ||  !empty($settings['section_sub_title'])) : ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['section_title'])) : ?>
                        <<?php echo esc_html($settings['title_tag']); ?> class="text-white sec-title text-anim"><?php echo rt_kses_basic($settings['section_title']); ?></<?php echo esc_html($settings['title_tag']); ?>>
                    <?php endif; ?>
                    <?php if (!empty($settings['section_sub_title'])) : ?>
                        <<?php echo esc_html($settings['section_sub_title_tag']); ?> class="text-white wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['section_sub_title']); ?></<?php echo esc_html($settings['section_sub_title_tag']); ?>>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php
                if (is_array($settings['locations_items'])) :
                    $delay = 0.2;
                    foreach ($settings['locations_items'] as $item) :
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

                ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="destination-radius-item style-2">
                                <div class="destination-image">
                                    <?php rt_elementor_rendered_image($item, 'image'); ?>
                                    <?php if (!empty($item['listing_text'])) : ?>
                                        <span><?php echo esc_html($item['listing_text']); ?></span>
                                    <?php else: ?>
                                        <span><?php echo esc_html($term->count); ?> <?php echo esc_html__(' Listing', 'roavio-toolkit'); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="destination-content">
                                    <?php if (!empty($item['location'])) : ?>
                                        <h5>
                                            <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($item['location']); ?></a>
                                        </h5>
                                    <?php endif; ?>
                                    <?php if (!empty($item['address'])) : ?>
                                        <p><?php echo esc_html($item['address']); ?></p>
                                    <?php else: ?>
                                        <p> <?php echo esc_html($address); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                <?php
                        $delay += 0.2;
                        if ($delay > 0.8) {
                            $delay = 0.2;
                        }
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>