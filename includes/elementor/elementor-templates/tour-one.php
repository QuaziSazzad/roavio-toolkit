<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Tour-place Section Start -->
    <section class="tour-place-section section-padding fix">
        <div class="container custom-container-2">

            <div class="section-title text-center">
                <?php if ($settings['section_title']) : ?>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['section_title']); ?></h2>
                <?php endif; ?>
                <?php if ($settings['sub_title']) : ?>
                    <p class="wow fadeInUp" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['sub_title']); ?></p>
                <?php endif; ?>
            </div>

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
                        $tour_meta = get_post_meta(get_the_ID(), 'travhub_tour_meta', true);

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
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="tour-place-content">
                                    <div class="rating-item">
                                        <div class="star">
                                            <?php
                                            $vote_base = get_post_meta(get_the_ID(), '_rating_votes_base', true);
                                            $rating = get_post_meta(get_the_ID(), '_rating', true);
                                            if (empty($vote_base)) {
                                                $vote_base = esc_html__('0 Rating', 'travhub-core');
                                            } elseif ($vote_base == 1) {
                                                $vote_base = esc_html__('1 Rating', 'travhub-core');
                                            } else {
                                                $vote_base = $vote_base . esc_html__(' Ratings', 'travhub-core');
                                            }

                                            if (empty($rating)) {
                                                $rating = 0;
                                            }
                                            $rating = number_format((float) $rating, 1);
                                            ?>
                                            <span><?php //echo esc_html($vote_base); 
                                                    ?></span>
                                            <?php echo BABE_Rating::post_stars_rendering(get_the_ID()); ?>
                                        </div>

                                        <h5><span>Tours Price</span>
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
                                        <li>
                                            <i class="fa-regular fa-location-dot"></i>
                                            Bali, Indonesia
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-clock"></i>
                                            1 - 3 days
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-users"></i>
                                            3 persons
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="tour-place-item">
                        <div class="tour-place-image">
                            <img src="assets/img/home-1/tour/tour-9.jpg" alt="img">
                            <div class="icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="tour-place-content">
                            <div class="rating-item">
                                <div class="star">
                                    <span>Rating</span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star-half-stroke"></i>
                                </div>
                                <h5><span>Tours Price</span>$49.00</h5>
                            </div>
                            <h3>
                                <a href="tour-details.html">
                                    Scenic Kayaking Setup Along <br> Duero River, Soria
                                </a>
                            </h3>
                            <ul class="tour-list">
                                <li>
                                    <i class="fa-regular fa-location-dot"></i>
                                    Soria, Castilla
                                </li>
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                    1 - 3 days
                                </li>
                                <li>
                                    <i class="fa-regular fa-users"></i>
                                    3 persons
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
    </section>

<?php endif; ?>