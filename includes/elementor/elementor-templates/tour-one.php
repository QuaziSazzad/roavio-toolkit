<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Tour-place Section Start -->
    <section class="tour-place-section section-padding fix">
        <div class="container custom-container-2">
            <?php
            if ($settings['section_title'] || $settings['sub_title']) :
            ?>
                <div class="section-title text-center">
                    <?php if ($settings['section_title']) : ?>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['section_title']); ?></h2>
                    <?php endif; ?>
                    <?php if ($settings['sub_title']) : ?>
                        <p class="wow fadeInUp" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['sub_title']); ?></p>
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
                            <div class="tour-place-item">
                                <div class="tour-place-image">
                                    <?php the_post_thumbnail('roavio_blog_410X270'); ?>
                                    <?php if ($discount) : ?>
                                        <span><?php echo esc_html($discount); ?> <?php esc_html_e('% off', 'roavio-toolkit'); ?></span>
                                    <?php endif; ?>

                                    <div class="icon">
                                        <?php if (class_exists('RoavioToolkit\Helper\Wishlist')) {
                                            echo RoavioToolkit\Helper\Wishlist::html_icon($post_id);
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="tour-place-content">
                                    <div class="rating-item">
                                        <div class="star">
                                            <?php
                                            $total_vote = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                                            $rating = get_post_meta(get_the_ID(), '_rating', true);
                                            if (empty($total_vote)) {
                                                $vote_base = esc_html__('0 Rating', 'roavio-toolkit');
                                            } elseif ($total_vote == 1) {
                                                $vote_base = esc_html__('1 Rating', 'roavio-toolkit');
                                            } else {
                                                $vote_base = $total_vote . esc_html__(' Ratings', 'roavio-toolkit');
                                            }

                                            if (empty($rating)) {
                                                $rating = 0;
                                            }
                                            $rating = number_format((float) $rating, 1);
                                            ?>
                                            <span><?php echo esc_html(!empty($total_vote) ? __('Rating', 'roavio-toolkit') : __('No Rating', 'roavio-toolkit')); ?></span>
                                            <?php echo BABE_Rating::post_stars_rendering(get_the_ID()); ?>
                                        </div>

                                        <h5><span><?php esc_html_e('Tours Price', 'roavio-toolkit'); ?></span>
                                            <?php if (!empty($discount_price_from)) :
                                                echo BABE_Currency::get_currency_price($prices['discount_price_from']);
                                            else :
                                                echo BABE_Currency::get_currency_price($prices['price_from']);
                                            endif;
                                            ?>
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
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tour-place-item">
                                    <div class="tour-place-image">
                                        <?php
                                        if (!empty($post['image']['url'])):
                                            rt_elementor_rendered_image($post, 'image');
                                        else:
                                            the_post_thumbnail('roavio_blog_410X270');
                                        endif;
                                        ?>
                                        <?php if ($discount) : ?>
                                            <span><?php echo esc_html($discount); ?> <?php esc_html_e('% off', 'roavio-toolkit'); ?></span>
                                        <?php endif; ?>
                                        <div class="icon">
                                            <?php if (class_exists('RoavioToolkit\Helper\Wishlist')) {
                                                echo RoavioToolkit\Helper\Wishlist::html_icon($post_id);
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="tour-place-content">
                                        <div class="rating-item">
                                            <div class="star">
                                                <?php
                                                $total_vote = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                                                $rating = get_post_meta(get_the_ID(), '_rating', true);
                                                if (empty($total_vote)) {
                                                    $vote_base = esc_html__('0 Rating', 'roavio-toolkit');
                                                } elseif ($total_vote == 1) {
                                                    $vote_base = esc_html__('1 Rating', 'roavio-toolkit');
                                                } else {
                                                    $vote_base = $total_vote . esc_html__(' Ratings', 'roavio-toolkit');
                                                }

                                                if (empty($rating)) {
                                                    $rating = 0;
                                                }
                                                $rating = number_format((float) $rating, 1);
                                                ?>
                                                <span><?php echo esc_html(!empty($total_vote) ? __('Rating', 'roavio-toolkit') : __('No Rating', 'roavio-toolkit')); ?></span>
                                                <?php echo BABE_Rating::post_stars_rendering(get_the_ID()); ?>
                                            </div>
                                            <h5><span><?php esc_html_e('Tours Price', 'roavio-toolkit'); ?></span>
                                                <?php if (!empty($discount_price_from)) :
                                                    echo BABE_Currency::get_currency_price($prices['discount_price_from']);
                                                else :
                                                    echo BABE_Currency::get_currency_price($prices['price_from']);
                                                endif;
                                                ?>
                                            </h5>
                                        </div>
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