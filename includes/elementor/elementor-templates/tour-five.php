<?php

use RoavioTheme\Classes\Roavio_Post_Helper;

if ('layout_five' == $settings['layout_type']) :
    $args  = array(
        'post_type'           => 'to_book',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page'      => $settings['post_count']['size'],
    );

    $args['orderby'] = $settings['orderby'];
    $args['order']   = $settings['order'];
    if (!empty($settings['exclude_cat'])) {
        $args['category__not_in'] = $settings['exclude_cat'];
    }


    if (!empty($settings['select_cat'])) {
        $args['tax_query'][] = array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => array_values($settings['select_cat'])
        );
    }

    $posts_query = new \WP_Query($args);
?>
    <!-- Tour Grid Section Start -->
    <section class="tour-grid-section section-padding fix">
        <div class="container">
            <?php
            if ($settings['section_title'] || $settings['sub_title']) :
            ?>
                <div class="section-title text-center">
                    <?php if ($settings['section_title']) : ?>
                        <<?php echo esc_attr($settings['title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['section_title']); ?></<?php echo esc_attr($settings['title_tag']); ?>>
                    <?php endif; ?>
                    <?php if ($settings['sub_title']) : ?>
                        <<?php echo esc_attr($settings['sub_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['sub_title']); ?></<?php echo esc_attr($settings['sub_title_tag']); ?>>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php
                while ($posts_query->have_posts()) :
                    $posts_query->the_post();
                    $post_id = get_the_ID();

                    $ba_post_meta = BABE_Post_types::get_post($post_id);
                    if (!isset($ba_post_meta['discount_price_from']) || !isset($ba_post_meta['price_from']) || !isset($ba_post_meta['discount_date_to']) || !isset($ba_post_meta['discount'])) {
                        $prices = BABE_Post_types::get_post_price_from($post_id);
                    } else {
                        $prices = $ba_post_meta;
                    }
                    $discount = isset($ba_post_meta['discount']['discount']) && $ba_post_meta['discount']['discount'] ? $ba_post_meta['discount']['discount'] : false;
                    $tour_meta = get_post_meta(get_the_ID(), 'roavio_booking_tour_meta', true);

                    $discount_price_from = isset($prices['discount_price_from']) ? $prices['discount_price_from'] : false;
                    $price_from = isset($prices['price_from']) ? $prices['price_from'] : false;

                    $total_vote = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                    $rating = get_post_meta(get_the_ID(), '_rating', true);
                    if (empty($rating)) {
                        $rating = 0;
                    }
                    $rating = number_format((float) $rating, 1);
                ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tour-place-item">
                            <div class="tour-place-image">
                                <?php the_post_thumbnail('roavio_blog_406X267'); ?>
                                <?php if ($discount) : ?>
                                    <span><?php echo esc_html($discount); ?> <?php esc_html_e('% Off', 'roavio-toolkit'); ?></span>
                                <?php endif; ?>
                                <div class="icon">
                                    <?php if (class_exists('RoavioToolkit\Helper\Wishlist')) {
                                        echo RoavioToolkit\Helper\Wishlist::html_icon($post_id);
                                    } ?>
                                </div>
                            </div>
                            <div class="tour-place-content">
                                <div class="rating-item">
                                    <div class="star">
                                        <span><?php echo esc_html(!empty($total_vote) ? __('Rating', 'roavio-toolkit') : __('No Rating', 'roavio-toolkit')); ?></span>
                                        <?php echo BABE_Rating::post_stars_rendering(get_the_ID()); ?>
                                    </div>
                                    <h5>
                                        <span><?php esc_html_e('Tours Price', 'roavio-toolkit'); ?></span>
                                        <?php if (!empty($discount_price_from)) {
                                            echo BABE_Currency::get_currency_price($prices['discount_price_from']);
                                        } elseif (!empty($price_from)) {
                                            echo BABE_Currency::get_currency_price($prices['price_from']);
                                        } else {
                                            echo BABE_Currency::get_currency_price(0);
                                        } ?>
                                    </h5>
                                </div>
                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <ul class="tour-list">
                                    <?php if (!empty($tour_meta['tour_address'])) : ?>
                                        <li>
                                            <i class="fa-regular fa-location-dot"></i>
                                            <?php echo esc_html($tour_meta['tour_address']); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($tour_meta['tour_duration'])) : ?>
                                        <li>
                                            <i class="fa-regular fa-clock"></i>
                                            <?php echo esc_html($tour_meta['tour_duration']); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($tour_meta['people_count'])) : ?>
                                        <li>
                                            <i class="fa-regular fa-users"></i>
                                            <?php echo esc_html($tour_meta['people_count']); ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php
                wp_reset_postdata();
                if ('yes' === $settings['pagination_status']) {
                    Roavio_Post_Helper::pagination($posts_query);
                }
                ?>
            </div>

        </div>
    </section>
<?php endif; ?>