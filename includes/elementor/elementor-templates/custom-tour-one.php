<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Destination-Escap Section-4 Start -->
    <section class="destination-escap-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <?php if (!empty($settings['layout_one_section_title'])) :
                    ?>
                        <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="text-anim sec-title">
                            <?php echo rt_kses_basic($settings['layout_one_section_title']); ?>
                        </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_one_section_description'])) : ?>
                        <p class="wow fadeInUp sec-sub-title" data-wow-delay=".5s">
                            <?php echo rt_kses_basic($settings['layout_one_section_description']); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <?php if ('yes' === $settings['layout_one_show_navigation']) : ?>
                    <div class="array-buttons wow fadeInUp" data-wow-delay=".5s">
                        <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
                        <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper destination-slider-4">
            <div class="swiper-wrapper">
                <?php if (!empty($settings['layout_one_tour_items'])) :
                    foreach ($settings['layout_one_tour_items'] as $item) :
                        $target = !empty($item['layout_one_tour_link']['is_external']) ? ' target="_blank"' : '';
                        $nofollow = !empty($item['layout_one_tour_link']['nofollow']) ? ' rel="nofollow"' : '';
                        $tour_url = !empty($item['layout_one_tour_link']['url']) ? $item['layout_one_tour_link']['url'] : '#';

                        // Calculate star rating
                        $rating = !empty($item['layout_one_tour_rating']) ? floatval($item['layout_one_tour_rating']) : 0;
                        $full_stars = floor($rating);
                        $half_star = ($rating - $full_stars) >= 0.5 ? true : false;
                ?>
                        <div class="swiper-slide">
                            <div class="destination-escap-item">
                                <?php if (!empty($item['layout_one_tour_image']['url'])) : ?>
                                    <div class="destination-escap-image">
                                        <?php rt_elementor_rendered_image($item, 'layout_one_tour_image'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="destination-escap-content">
                                    <div class="content-item">
                                        <?php if (!empty($item['layout_one_tour_title'])) : ?>
                                            <h4>
                                                <a href="<?php echo esc_url($tour_url); ?>" <?php echo ($target . $nofollow); ?>>
                                                    <?php echo esc_html($item['layout_one_tour_title']); ?>
                                                </a>
                                            </h4>
                                        <?php endif; ?>
                                        <?php if ($rating > 0) : ?>
                                            <div class="star">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                    <?php if ($i <= $full_stars) : ?>
                                                        <i class="fa-solid fa-star"></i>
                                                    <?php elseif ($i == $full_stars + 1 && $half_star) : ?>
                                                        <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                                                    <?php else : ?>
                                                        <i class="fa-regular fa-star"></i>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                <?php if (!empty($item['layout_one_tour_reviews'])) : ?>
                                                    <span><?php echo esc_html($rating); ?>(<?php echo esc_html($item['reviews_text']); ?> <?php echo esc_html($item['layout_one_tour_reviews']); ?>)</span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (!empty($item['layout_one_tour_description'])) : ?>
                                        <p>
                                            <?php echo esc_html($item['layout_one_tour_description']); ?>
                                        </p>
                                    <?php endif; ?>
                                    <div class="bottom-item">
                                        <?php if (!empty($item['layout_one_tour_price'])) : ?>
                                            <h6>
                                                <?php echo esc_html($item['layout_one_tour_price']); ?>
                                                <?php if (!empty($item['layout_one_tour_price_label'])) : ?>
                                                    <span><?php echo esc_html($item['layout_one_tour_price_label']); ?></span>
                                                <?php endif; ?>
                                            </h6>
                                        <?php endif; ?>
                                        <?php if (!empty($item['layout_one_tour_area'])) : ?>
                                            <h6>
                                                <?php echo esc_html($item['layout_one_tour_area']); ?>
                                                <?php if (!empty($item['layout_one_tour_area_label'])) : ?>
                                                    <span><?php echo esc_html($item['layout_one_tour_area_label']); ?></span>
                                                <?php endif; ?>
                                            </h6>
                                        <?php endif; ?>
                                        <?php if (!empty($item['layout_one_tour_location'])) : ?>
                                            <h6>
                                                <?php echo esc_html($item['layout_one_tour_location']); ?>
                                                <?php if (!empty($item['layout_one_tour_location_label'])) : ?>
                                                    <span><?php echo esc_html($item['layout_one_tour_location_label']); ?></span>
                                                <?php endif; ?>
                                            </h6>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
        <div class="swiper-dot-4">
            <div class="dot2"></div>
        </div>
    </section>
<?php endif; ?>