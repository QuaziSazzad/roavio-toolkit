<?php

use RoavioTheme\Classes\Roavio_Post_Helper;

if ('layout_two' == $settings['layout_type']) :
?>
    <!-- News Section-2 Start -->
    <section class="news-section-2 section-padding fix">
        <div class="container custom-container-2">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_one_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($settings['layout_one_title']); ?></<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                <?php endif; ?>
                <?php if (!empty($settings['layout_one_sub_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html($settings['layout_one_sub_title']); ?></<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php if ('cpt' == $settings['post_type']) :

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = [
                        'post_type'           => 'post',
                        'post_status'         => 'publish',
                        'posts_per_page'      => $settings['post_limit'],
                        'orderby'             => $settings['order_by'],
                        'order'               => $settings['sort_order'],
                        'ignore_sticky_posts' => 1,
                        'paged'               => $paged
                    ];

                    if ('categories' == $settings['post_from'] && $settings['cat_slugs']) {
                        $args['tax_query'] = [
                            [
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => $settings['cat_slugs'],
                            ],
                        ];
                    }

                    if ('specific-post' == $settings['post_from'] && $settings['post_ids']) {
                        $args['post__in'] = $settings['post_ids'];
                    }

                    $wp_query = new WP_Query($args);

                    while ($wp_query->have_posts()): $wp_query->the_post();
                        $idd = get_the_ID();

                        if ($settings['title_word']) {
                            $the_title = wp_trim_words(get_the_title(), $settings['title_word'], '..');
                        } else {
                            $the_title = get_the_title();
                        }

                        $excerpt_count = $settings['excerpt_count'];

                ?>
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="news-card-items-2">
                                <?php if (has_post_thumbnail() && 'yes' === $settings['show_thumbnail']): ?>
                                    <div class="news-image">
                                        <?php echo get_the_post_thumbnail($idd, $settings['post_thumbnail_size']); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="news-content">
                                    <?php
                                    if (has_category()) :
                                        $categories = get_the_category();
                                    ?>
                                        <span><?php echo esc_html($categories[0]->name); ?></span>
                                    <?php endif; ?>
                                    <<?php echo rt_escape_tags($settings['title_tag'], 'h3'); ?>>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo esc_html($the_title); ?>
                                        </a>
                                    </<?php echo rt_escape_tags($settings['title_tag'], 'h3'); ?>>
                                    <?php if ('yes' === $settings['show_read_more'] && ! empty($settings['read_more_text'])) : ?>
                                        <a href="<?php the_permalink(); ?>" class="link-btn"><?php echo esc_html($settings['read_more_text']); ?><i class="fa-solid fa-chevron-right"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();

                    if ('yes' === $settings['show_pagination']) {
                        Roavio_Post_Helper::pagination($wp_query);
                    }
                    ?>
                <?php endif; ?>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items-2">
                        <div class="news-image">
                            <img src="assets/img/home-2/news/news-2.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <span>Tours & travel</span>
                            <h3>
                                <a href="news-details.html">
                                    Focus on destinations suitable for families with kids.
                                </a>
                            </h3>
                            <a href="news-details.html" class="link-btn">Read More <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
<?php endif; ?>