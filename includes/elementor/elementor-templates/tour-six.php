<?php

use RoavioTheme\Classes\Roavio_Post_Helper;

if ('layout_six' == $settings['layout_type']) :
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
    <!-- Tour sidebar Section Start -->
    <section class="tour-no-sidebar-section section-padding">
        <div class="container custom-container-6">
            <div class="section-title text-center">
                <?php if ($settings['section_title']) : ?>
                    <<?php echo esc_attr($settings['title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['section_title']); ?></<?php echo esc_attr($settings['title_tag']); ?>>
                <?php endif; ?>
                <?php if ($settings['sub_title']) : ?>
                    <p class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['sub_title']); ?></p>
                <?php endif; ?>
            </div>
            <div class="tour-no-sidebar-wrapper">
                <div class="row g-4">
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
                        <div class="col-lg-6 col-md-6">
                            <div class="tour-no-sideber-item">
                                <div class="sideber-image">
                                    <?php the_post_thumbnail('roavio_blog_300X200'); ?>
                                    <?php if ($discount) : ?>
                                        <span><?php echo esc_html($discount); ?> <?php esc_html_e('% off', 'roavio-toolkit'); ?></span>
                                    <?php endif; ?>

                                    <div class="icon">
                                        <?php if (class_exists('RoavioToolkit\Helper\Wishlist')) {
                                            echo RoavioToolkit\Helper\Wishlist::html_icon($post_id);
                                        } ?>
                                    </div>
                                </div>
                                <div class="sideber-content">
                                    <?php
                                    $total_vote = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                                    ?>
                                    <div class="rating-item">
                                        <?php if (!empty($total_vote)) : ?>
                                            <div class="star">
                                                <?php echo BABE_Rating::post_stars_rendering(get_the_ID()); ?>
                                                <span>(<?php echo esc_html($total_vote); ?>)</span>
                                            </div>
                                        <?php endif; ?>
                                        <h5><span><?php esc_html_e('Tours Price', 'roavio-toolkit'); ?></span>
                                            <?php if (!empty($discount_price_from)) :
                                                echo BABE_Currency::get_currency_price($prices['discount_price_from']);
                                            else :
                                                echo BABE_Currency::get_currency_price($prices['price_from']);
                                            endif;
                                            ?>
                                        </h5>
                                    </div>
                                    <h4 class="tour-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
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
                                    <div class="share-item">
                                        <div class="small-button">
                                            <a href="<?php the_permalink(); ?>" class="theme-btn"><?php echo esc_html($settings['button_label']); ?></a>
                                        </div>
                                        <div class="social-profile">
                                            <ul>
                                                <?php
                                                $post_url = urlencode(get_permalink());
                                                $post_title = urlencode(get_the_title());
                                                ?>
                                                <li><a href="<?php echo esc_url('https://www.facebook.com/sharer/sharer.php?u=' . $post_url . '&t=' . $post_title); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                                <li><a href="<?php echo esc_url('https://twitter.com/intent/tweet?url=' . $post_url . '&text=' . $post_title); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="<?php echo esc_url('https://www.linkedin.com/shareArticle?mini=true&url=' . $post_url . '&title=' . $post_title); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <span class="plus-btn"><i class="fa-regular fa-share-nodes"></i></span>
                                        </div>
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
        </div>
    </section>
<?php endif; ?>