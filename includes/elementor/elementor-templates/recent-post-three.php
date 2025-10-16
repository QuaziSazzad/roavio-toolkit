<?php

use RoavioTheme\Classes\Roavio_Post_Helper;

if ('layout_three' == $settings['layout_type']) : ?>
    <!-- News Section-3 Start -->
    <section class="news-section section-padding fix">
        <div class="container">
            <div class="news-wrapper-3">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="news-left-content">
                            <?php if (!empty($settings['layout_one_title'])) : ?>
                                <div class="section-title mb-0">
                                    <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="wow fadeInUp sec-title" data-wow-delay=".3s"><?php echo esc_html($settings['layout_one_title']); ?></<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_one_sub_title'])) : ?>
                                <<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?> class="text wow fadeInUp sec-sub-title" data-wow-delay=".3s"><?php echo esc_html($settings['layout_one_sub_title']); ?></<?php echo esc_attr($settings['layout_one_sub_title_tag']); ?>>
                            <?php endif; ?>
                            <?php
                            $custom_blog_post_query_args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'ignore_sticky_posts' => true,
                                'post__in' => array($settings['select_left_post']),
                            );
                            $custom_blog_post_query = new \WP_Query($custom_blog_post_query_args);
                            ?>
                            <?php while ($custom_blog_post_query->have_posts()) :
                                $custom_blog_post_query->the_post();
                                if ($settings['title_word']) {
                                    $the_title = wp_trim_words(get_the_title(), $settings['title_word'], '..');
                                } else {
                                    $the_title = get_the_title();
                                }

                                $excerpt_count = $settings['excerpt_count'];

                                $categories_list = get_the_terms(get_the_ID(), 'category', '', '', '');
                            ?>
                                <div class="news-black-bg">
                                    <?php if (!empty($categories_list[0]->name)) : ?>
                                        <span><?php echo esc_html($categories_list[0]->name); ?></span>
                                    <?php endif; ?>
                                    <h4>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            if (!empty($settings['left_post_custom_title'])) {
                                                echo esc_html($settings['left_post_custom_title']);
                                            } else {
                                                echo esc_html(get_the_title());
                                            }
                                            ?>
                                        </a>
                                    </h4>
                                    <p>
                                        <?php if (!empty($settings['left_post_custom_summary_text'])) {
                                            echo rt_kses_basic($settings['left_post_custom_summary_text']);
                                        } else {
                                            if (has_excerpt()) {
                                                echo wp_trim_words(get_the_excerpt(), $excerpt_count, '...');
                                            } else {
                                                echo wp_trim_words(get_the_content(), $excerpt_count, '...');
                                            }
                                        } ?>
                                    </p>
                                    <?php if ('yes' === $settings['show_read_more'] && ! empty($settings['read_more_text'])) : ?>
                                        <a href="<?php the_permalink(); ?>" class="link-btn"><?php echo esc_html($settings['read_more_text']); ?> <i class="fa-solid fa-chevron-right"></i></a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <?php
                        if (is_array($settings['layout_three_post_list'])) :
                            foreach ($settings['layout_three_post_list'] as $index => $post) :

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
                                    $categories_list = get_the_terms(get_the_ID(), 'category', '', '', '');

                                ?>
                                    <div class="news-image-items-3 <?php echo esc_attr($index == 0 ? '' : 'style-2'); ?>">
                                        <div class="news-image">
                                            <?php rt_elementor_rendered_image($post, 'image'); ?>
                                            <div class="box">
                                                <h3><?php the_time('j'); ?></h3>
                                                <h6><?php the_time('M'); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                                wp_reset_postdata();
                            endforeach;
                        endif; ?>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <?php
                        if (is_array($settings['layout_three_post_list'])) :
                            foreach ($settings['layout_three_post_list'] as $index => $post) :

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
                                    $categories_list = get_the_terms(get_the_ID(), 'category', '', '', '');

                                ?>
                                    <div class="news-white-bg <?php echo esc_attr($index == 0 ? '' : 'style-3'); ?>">
                                        <?php if (!empty($categories_list[0]->name)) : ?>
                                            <span><?php echo esc_html($categories_list[0]->name); ?></span>
                                        <?php endif; ?>
                                        <h4>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                if (!empty($post['title'])):
                                                    echo rt_kses_basic($post['title']);
                                                else:
                                                    echo rt_kses_basic($the_title);
                                                endif;
                                                ?>
                                            </a>
                                        </h4>
                                        <p>
                                            <?php if (!empty($post['summary_text'])) {
                                                echo rt_kses_basic($post['summary_text']);
                                            } else {
                                                if (has_excerpt()) {
                                                    echo wp_trim_words(get_the_excerpt(), $excerpt_count, '...');
                                                } else {
                                                    echo wp_trim_words(get_the_content(), $excerpt_count, '...');
                                                }
                                            } ?>
                                        </p>
                                        <?php if ('yes' === $settings['show_read_more'] && ! empty($settings['read_more_text'])) : ?>
                                            <a href="<?php the_permalink(); ?>" class="link-btn"><?php echo esc_html($settings['read_more_text']); ?><i class="fa-solid fa-chevron-right"></i></a>
                                        <?php endif; ?>
                                    </div>
                        <?php
                                endwhile;
                                wp_reset_postdata();
                            endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>