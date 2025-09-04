<?php

use RoavioTheme\Classes\Roavio_Post_Helper;

if ('layout_six' == $settings['layout_type']) : ?>
    <!-- Blog Grid Area start -->
    <section class="blog-grid-page rel z-1">
        <div class="container bordered-x px-sm-0 py-130 rpy-100">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php

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
                            <div class="col-md-<?php echo esc_attr($settings['column_size']); ?>">
                                <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <?php if (has_post_thumbnail() && 'yes' === $settings['show_thumbnail']): ?>
                                        <div class="image">
                                            <?php echo get_the_post_thumbnail($idd, $settings['post_thumbnail_size']); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="content">
                                        <?php
                                        if (has_category()) :
                                            $categories = get_the_category();
                                        ?>
                                            <ul class="blog-meta">
                                                <li><a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"><?php echo esc_html($categories[0]->name); ?></a></li>
                                            </ul>
                                        <?php endif; ?>
                                        <h5><a href="<?php the_permalink(); ?>"><?php echo esc_html($the_title); ?></a></h5>
                                        <?php if ('yes' === $settings['show_read_more'] && ! empty($settings['read_more_text'])) : ?>
                                            <a href="<?php the_permalink(); ?>" class="theme-btn style-two" data-hover="<?php echo esc_attr($settings['read_more_text']); ?>">
                                                <span><?php echo esc_html($settings['read_more_text']); ?></span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();

                        if ('yes' === $settings['show_pagination']) {
                            Roavio_Post_Helper::pagination($wp_query);
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Grid Area end -->
<?php endif; ?>