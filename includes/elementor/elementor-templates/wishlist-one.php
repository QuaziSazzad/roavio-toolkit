<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Wishlist Section Start -->
    <div class="cart-section fix section-padding pb-0">
        <div class="container">
            <div class="cart-list-area">
                <div class="table-responsive">
                    <?php
                    $user = wp_get_current_user();
                    $userid = $user->ID;
                    $post_ids = get_user_meta($userid, 'roavio_wishlist', true);
                    if (!empty($post_ids)) :
                    ?>
                        <table class="table common-table">
                            <thead data-aos="fade-down">
                                <tr>
                                    <th><?php echo esc_html($settings['item_text']); ?></th>
                                    <th><?php echo esc_html($settings['price_text']); ?></th>
                                    <th><?php echo esc_html($settings['date_text']); ?></th>
                                    <th><?php echo esc_html__('Action', 'roavio-toolkit'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $post_type = 'to_book';
                                $post_type_obj = get_post_type_object($post_type);
                                $args = array(
                                    'post_type'           => $post_type,
                                    'posts_per_page'     => 10,
                                    'paged'                 => get_query_var('paged'),
                                    'post_status'         => 'any',
                                    'orderby'             => 'post_date',
                                    'order'                 => 'DESC',
                                    'post__in'            => $post_ids
                                );

                                $wishlist_query = new WP_Query($args);
                                $max_num_pages = $wishlist_query->max_num_pages;
                                $found_posts = $wishlist_query->found_posts;

                                while ($wishlist_query->have_posts()) : $wishlist_query->the_post();

                                    $post_id = get_the_ID();

                                    $ba_post_meta     = BABE_Post_types::get_post($post_id);
                                    $prices = BABE_Post_types::get_post_price_from($post_id);
                                    $discount_price_from = isset($prices['discount_price_from']) ? $prices['discount_price_from'] : false;
                                    $price_from = isset($prices['price_from']) ? $prices['price_from'] : false;
                                ?>
                                    <tr class="align-items-center py-3 product ">
                                        <td>
                                            <div class="cart-item-thumb d-flex align-items-center gap-4">
                                                <?php the_post_thumbnail('roavio_wishlist_140X140'); ?>
                                                <span class="head text-nowrap"><?php the_title(); ?></span>
                                            </div>
                                        </td>
                                        <td class="style-fl ">
                                            <?php if (!empty($discount_price_from)) : ?>
                                                <span class="price-usd">
                                                    <?php echo BABE_Currency::get_currency_price($prices['discount_price_from']); ?>
                                                </span>
                                            <?php else : ?>
                                                <span class="price-usd">
                                                    <?php echo BABE_Currency::get_currency_price($prices['price_from']); ?>
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="style-fl ">
                                            <span class="price-usd">
                                                <?php the_time('d M Y'); ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="<?php echo esc_url(get_the_permalink()); ?>" class="theme-btn color"><?php echo esc_html($settings['button']); ?></a>
                                            <a href="javascript:void(0);" class="table wishlist-page__table__remove" onclick="return false;">
                                                <span data-post_id="<?php echo absint(get_the_ID()); ?>" class="fas fa-times roavio" title="<?php echo esc_attr__('Remove from wishlist', 'roavio-toolkit'); ?>"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                endwhile;
                                wp_reset_query();
                                ?>
                            </tbody>
                        </table>
                    <?php
                    else :
                    ?>
                        <h2 class="empty-wishlist"><?php echo esc_html($settings['wishlist_empty_text']); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>