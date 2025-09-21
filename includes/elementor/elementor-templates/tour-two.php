<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Tour-place Section-2 Start -->
    <section class="tour-place-section-2 section-padding fix">
        <div class="container custom-container-2">
            <?php if (!empty($settings['section_title']) || !empty($settings['section_sub_title'])) : ?>
                <div class="section-title text-center">
                    <?php if ($settings['section_title']) : ?>
                        <<?php echo esc_attr($settings['title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['section_title']); ?></<?php echo esc_attr($settings['title_tag']); ?>>
                    <?php endif; ?>
                    <?php if ($settings['sub_title']) : ?>
                        <<?php echo esc_attr($settings['sub_title_tag']); ?> class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['sub_title']); ?></<?php echo esc_attr($settings['sub_title_tag']); ?>>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <?php

                if ('cpt' == $settings['post_type']) :

                    while ($posts_query->have_posts()) :
                        $posts_query->the_post();
                        $comments_number = get_comments_number();
                        $user = wp_get_current_user();
                        $author_id = get_the_author_meta('ID');
                        $author_img = get_avatar_url($author_id, array("size" => 31));

                        $post_id = get_the_ID();

                        $ba_post_meta     = BABE_Post_types::get_post($post_id);
                        if (!isset($ba_post_meta['discount_price_from']) || !isset($ba_post_meta['price_from']) || !isset($ba_post_meta['discount_date_to']) || !isset($ba_post_meta['discount'])) {
                            $prices = BABE_Post_types::get_post_price_from($post_id);
                        } else {
                            $prices = $ba_post_meta;
                        }
                        $discount = isset($ba_post_meta['discount']['discount']) && $ba_post_meta['discount']['discount'] ? $ba_post_meta['discount']['discount'] : false;
                        $tour_meta = get_post_meta(get_the_ID(), 'roavio_booking_tour_meta', true);

                        $discount_price_from = isset($prices['discount_price_from']) ? $prices['discount_price_from'] : false;
                        $price_from = isset($prices['price_from']) ? $prices['price_from'] : false;
                ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="tour-place-item-2">
                                <div class="tour-place-image">
                                    <?php the_post_thumbnail('roavio_blog_410X270'); ?>
                                    <div class="icon">
                                        <?php if (class_exists('RoavioToolkit\Helper\Wishlist')) {
                                            echo RoavioToolkit\Helper\Wishlist::html_icon($post_id);
                                        }
                                        ?>
                                    </div>
                                    <?php if ($discount) : ?>
                                        <span><?php echo esc_html($discount); ?> <?php esc_html_e('% off', 'roavio-toolkit'); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="tour-place-content">
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
                                    <div class="tour-place-bottom">
                                        <div class="price">
                                            <p><?php esc_html_e('Start Price', 'roavio-toolkit'); ?></p>
                                            <h5>
                                                <?php if (!empty($discount_price_from)) {
                                                    echo BABE_Currency::get_currency_price($prices['discount_price_from']);
                                                } elseif (!empty($price_from)) {
                                                    echo BABE_Currency::get_currency_price($prices['price_from']);
                                                } else {
                                                    echo BABE_Currency::get_currency_price(0);
                                                }
                                                ?>
                                            </h5>
                                        </div>
                                        <div class="rating">
                                            <?php
                                            $total_vote = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                                            $rating = get_post_meta(get_the_ID(), '_rating', true);
                                            if (empty($rating)) {
                                                $rating = 0;
                                            }
                                            $rating = number_format((float) $rating, 1);
                                            ?>
                                            <span><?php esc_html_e('Rating', 'roavio-toolkit'); ?></span>
                                            <h6><i class="fa-solid fa-star"></i><?php echo esc_html($rating); ?> (<?php echo esc_html($total_vote); ?>)</h6>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="theme-btn"><?php esc_html_e('View Tour', 'roavio-toolkit'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <?php if ('elementor-field' == $settings['post_type']) :
                    foreach ($settings['post_list'] as $post) :

                        $custom_post_post_query_args = array(
                            'post_type' => 'to_book',
                            'post_status' => 'publish',
                            'posts_per_page'      => 1,
                            'post__in' => array($post['select_post']),
                        );
                        $custom_post_post_query = new \WP_Query($custom_post_post_query_args);
                        while ($custom_post_post_query->have_posts()) :
                            $custom_post_post_query->the_post();
                            $comments_number = get_comments_number();
                            $user = wp_get_current_user();
                            $author_id = get_the_author_meta('ID');
                            $author_img = get_avatar_url($author_id, array("size" => 31));

                            $post_id = get_the_ID();

                            $ba_post_meta     = BABE_Post_types::get_post($post_id);
                            if (!isset($ba_post_meta['discount_price_from']) || !isset($ba_post_meta['price_from']) || !isset($ba_post_meta['discount_date_to']) || !isset($ba_post_meta['discount'])) {
                                $prices = BABE_Post_types::get_post_price_from($post_id);
                            } else {
                                $prices = $ba_post_meta;
                            }
                            $discount = isset($ba_post_meta['discount']['discount']) && $ba_post_meta['discount']['discount'] ? $ba_post_meta['discount']['discount'] : false;
                            $tour_meta = get_post_meta(get_the_ID(), 'travhub_tour_meta', true);
                            $discount_price_from = isset($prices['discount_price_from']) ? $prices['discount_price_from'] : false;
                            $price_from = isset($prices['price_from']) ? $prices['price_from'] : false;
                ?>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tour-place-item-2">
                                    <div class="tour-place-image">
                                        <?php
                                        if (!empty($post['image']['url'])):
                                            rt_elementor_rendered_image($post, 'image');
                                        else:
                                            the_post_thumbnail('roavio_blog_410X270');
                                        endif;
                                        ?>
                                        <div class="icon">
                                            <?php if (class_exists('RoavioToolkit\Helper\Wishlist')) {
                                                echo RoavioToolkit\Helper\Wishlist::html_icon($post_id);
                                            }
                                            ?>
                                        </div>
                                        <?php if ($discount) : ?>
                                            <span><?php echo esc_html($discount); ?> <?php esc_html_e('% off', 'roavio-toolkit'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tour-place-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                if (!empty($post['title'])):
                                                    echo esc_html($post['title']);
                                                else:
                                                    the_title();
                                                endif;
                                                ?>
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
                                        <div class="tour-place-bottom">
                                            <div class="price">
                                                <p><?php esc_html_e('Start Price', 'roavio-toolkit'); ?></p>
                                                <h5>
                                                    <?php if (!empty($discount_price_from)) {
                                                        echo BABE_Currency::get_currency_price($prices['discount_price_from']);
                                                    } elseif (!empty($price_from)) {
                                                        echo BABE_Currency::get_currency_price($prices['price_from']);
                                                    } else {
                                                        echo BABE_Currency::get_currency_price(0);
                                                    }
                                                    ?>
                                                </h5>
                                            </div>
                                            <div class="rating">
                                                <?php
                                                $total_vote = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                                                $rating = get_post_meta(get_the_ID(), '_rating', true);
                                                if (empty($rating)) {
                                                    $rating = 0;
                                                }
                                                $rating = number_format((float) $rating, 1);
                                                ?>
                                                <span><?php esc_html_e('Rating', 'roavio-toolkit'); ?></span>
                                                <h6><i class="fa-solid fa-star"></i><?php echo esc_html($rating); ?> (<?php echo esc_html($total_vote); ?>)</h6>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="theme-btn"><?php esc_html_e('View Tour', 'roavio-toolkit'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
                    endforeach;
                endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>