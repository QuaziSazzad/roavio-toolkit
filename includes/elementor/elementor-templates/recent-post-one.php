<?php

use RoavioTheme\Classes\Roavio_Post_Helper;

if ('layout_one' == $settings['layout_type']) : ?>
    <!-- News Section Start -->
    <section class="news-section section-padding fix">
        <div class="container custom-container-2">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_one_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                        <?php echo esc_html($settings['layout_one_title']); ?>
                    </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                <?php endif; ?>
                <?php if (!empty($settings['layout_one_sub_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".5s">
                        <?php echo esc_html($settings['layout_one_sub_title']); ?>
                    </<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
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
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="news-card-items">
                                <?php if (has_post_thumbnail() && 'yes' === $settings['show_thumbnail']): ?>
                                    <div class="news-image">
                                        <?php echo get_the_post_thumbnail($idd, $settings['post_thumbnail_size']); ?>
                                        <span><?php the_time('d F'); ?></span>
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
                                        <a href="<?php the_permalink(); ?>" class="link-btn"><?php echo esc_html($settings['read_more_text']); ?> <i class="fa fa-chevron-right"></i></a>
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
                <?php if ('elementor-field' == $settings['post_type']) : ?>
                    <?php
                    if (is_array($settings['layout_one_post_list'])) :
                        foreach ($settings['layout_one_post_list'] as $post) :

                            $custom_post_post_query_args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'      => 1,
                                'post__in' => array($post['select_post']),
                            );
                            $custom_post_post_query = new \WP_Query($custom_post_post_query_args);
                    ?>
                            <?php while ($custom_post_post_query->have_posts()) :
                                $custom_post_post_query->the_post();
                                $idd             = get_the_ID();
                                if ($settings['title_word']) {
                                    $the_title = wp_trim_words(get_the_title(), $settings['title_word'], '..');
                                } else {
                                    $the_title = get_the_title();
                                }
                                $categories_list = get_the_terms($idd, 'category', '', '', '');

                            ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="news-card-items">
                                        <div class="news-image">
                                            <?php rt_elementor_rendered_image($post, 'image'); ?>
                                            <span><?php the_time('d F'); ?></span>
                                        </div>
                                        <div class="news-content">
                                            <?php
                                            if (has_category()) :
                                                $categories = get_the_category();
                                            ?>
                                                <span><?php echo esc_html($categories_list[0]->name); ?></span>
                                            <?php endif; ?>
                                            <<?php echo rt_escape_tags($settings['title_tag'], 'h3'); ?>>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php
                                                    if (!empty($post['title'])):
                                                        echo rt_kses_basic($post['title']);
                                                    else:
                                                        echo rt_kses_basic($the_title);
                                                    endif;
                                                    ?>
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
                        endforeach;
                    endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>