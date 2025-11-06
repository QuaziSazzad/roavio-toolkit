<?php

use RoavioTheme\Classes\Roavio_Post_Helper;

if ('layout_seven' == $settings['layout_type']) :
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
    <!-- tour-places-section-3 Start -->
    <section class="tour-places-section-3 section-padding pt-0 fix">
        <div class="array-buttons">
            <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="container custom-container-7">
            <div class="section-title text-center">
                <?php if ($settings['section_title']) : ?>
                    <h2 class="text-anim"><?php echo esc_html($settings['section_title']); ?></h2>
                <?php endif; ?>
                <?php if ($settings['sub_title']) : ?>
                    <p class="wow fadeInUp" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['sub_title']); ?></p>
                <?php endif; ?>

            </div>
            <?php if ('yes' === $settings['layout_seven_enable_slider'] && !empty($settings['layout_seven_tabs'])) : ?>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="swiper top-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($settings['layout_seven_tabs'] as $index => $tab) : ?>
                                    <div class="swiper-slide">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item">
                                                <a href="<?php echo esc_url($tab['url']['url']); ?>" data-bs-toggle="tab" class="nav-link <?php echo ($index === 0) ? 'active' : ''; ?>" aria-selected="<?php echo ($index === 0) ? 'true' : 'false'; ?>" role="tab" <?php echo ($index !== 0) ? 'tabindex="-1"' : ''; ?>>
                                                    <?php rt_elementor_rendered_image($tab, 'image'); ?>
                                                    <?php echo esc_html($tab['layout_seven_tab_title']); ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tour-places-items-3">
                            <div class="tour-places-image">
                                <?php the_post_thumbnail('roavio_blog_410X270'); ?>
                                <?php if ($discount) : ?>
                                    <span><?php echo esc_html($discount); ?> <?php esc_html_e('% off', 'roavio-toolkit'); ?></span>
                                <?php endif; ?>
                                <div class="icon">
                                    <?php if (class_exists('RoavioToolkit\Helper\Wishlist')) {
                                        echo RoavioToolkit\Helper\Wishlist::html_icon($post_id);
                                    } ?>
                                </div>
                            </div>
                            <div class="tour-place-content">
                                <ul class="tour-list">
                                    <?php if (!empty($tour_meta['tour_address'])) : ?>
                                        <li>
                                            <i class="fa-regular fa-location-dot"></i>
                                            <?php echo esc_html($tour_meta['tour_address']); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php
                                    $total_vote = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                                    $rating = get_post_meta(get_the_ID(), '_rating', true);
                                    if (empty($rating)) {
                                        $rating = 0;
                                    }
                                    $rating = number_format((float) $rating, 1);
                                    ?>
                                    <?php if (!empty($total_vote)) : ?>
                                        <li class="style-2">
                                            <i class="fa-solid fa-star"></i>
                                            <?php echo esc_html($rating); ?> (<?php echo esc_html($total_vote); ?>)
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <h4>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <div class="tour-place-bottom">
                                    <div class="price">
                                        <p><?php esc_html_e('Tours Price', 'roavio-toolkit'); ?></p>
                                        <h5>
                                            <?php if (!empty($discount_price_from)) :
                                                echo BABE_Currency::get_currency_price($prices['discount_price_from']);
                                            else :
                                                echo BABE_Currency::get_currency_price($prices['price_from']);
                                            endif;
                                            ?>
                                        </h5>
                                    </div>
                                    <?php if (!empty($tour_meta['tour_duration'])) : ?>
                                        <div class="price">
                                            <p>Durations</p>
                                            <h5><?php echo esc_html($tour_meta['tour_duration']); ?></h5>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($settings['button_label']) : ?>
                                        <a href="<?php the_permalink(); ?>" class="theme-btn"><?php echo esc_html($settings['button_label']); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                if ('yes' === $settings['pagination_status']) {
                    Roavio_Post_Helper::pagination($posts_query);
                }
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>