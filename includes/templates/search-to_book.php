<?php
//volunteer details
get_header();

$post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'to_book'; // Default to 'to_book' if not specified
$search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

$locations = isset($_GET['location']) ? (array) $_GET['location'] : array();
$guests = isset($_GET['guest']) ? intval($_GET['guest']) : 0;
$types = isset($_GET['type']) ? (array) $_GET['type'] : array();
$min_price = isset($_GET['min-price']) ? floatval($_GET['min-price']) : 0;
$max_price = isset($_GET['max-price']) ? floatval($_GET['max-price']) : PHP_INT_MAX; // Set a very high value as the default max price

$sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'date'; // Default sorting by date
$order = isset($_GET['order']) ? strtoupper(sanitize_text_field($_GET['order'])) : 'DESC'; // Default sorting order DESC

$date_range = isset($_GET['date']) ? sanitize_text_field($_GET['date']) : '';

$date_parts = explode(' - ', $date_range);
$start_date = isset($date_parts[0]) ? $date_parts[0] : '';
$end_date = isset($date_parts[1]) ? $date_parts[1] : '';

$ratings = isset($_GET['reviews']) ? (array) $_GET['reviews'] : array();

// Handle reviews filtering
$reviews_filter = isset($_GET['reviews']) ? (array) $_GET['reviews'] : array();
// Sanitize each review value
if (!empty($reviews_filter)) {
    foreach ($reviews_filter as $key => $review) {
        $reviews_filter[$key] = sanitize_text_field($review);
    }
}




// Build query arguments for searching posts
$args = array(
    'post_type' => $post_type,
    's' => $search_query,
);

$selected_ratings = array();
if (! empty($ratings)) {
    $rating_meta_query = array(
        'relation' => 'OR',
    );

    foreach ($ratings as $rating) {
        $rating_value = floatval($rating);
        if ($rating_value >= 1 && $rating_value <= 5) {
            $rating_meta_query[] = array(
                'key' => '_rating', // Replace with your custom rating field key
                'value' => $rating_value,
                'compare' => '=', // You may adjust this if needed (e.g., '>=', '<=', etc.)
                'type' => 'NUMERIC',
            );
            $selected_ratings[] = $rating_value;
        }
    }

    if (! empty($rating_meta_query)) {
        $args['meta_query'][] = $rating_meta_query;
    }
}


// Handle location filtering
$selected_location = array();
if (! empty($locations)) {
    $location_term_ids = array();

    foreach ($locations as $location) {
        $selected_location[] = sanitize_text_field($location);
        $term = get_term_by('slug', $location, 'ba_location');
        if ($term) {
            $location_term_ids[] = $term->term_id;
        }
    }

    if (! empty($location_term_ids)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'ba_location',
            'field' => 'id',
            'terms' => $location_term_ids,
            'operator' => 'IN',
        );
    }
}

// Handle property types filtering
$selected_types = array();
if (! empty($types)) {
    $types_term_ids = array();

    foreach ($types as $type) {
        $selected_types[] = sanitize_text_field($type);
        $term_type = get_term_by('slug', $type, 'ba_type');
        if ($term_type) {
            $types_term_ids[] = $term_type->term_id;
        }
    }

    if (! empty($types_term_ids)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'ba_type',
            'field' => 'id',
            'terms' => $types_term_ids,
            'operator' => 'IN',
        );
    }
}

// Handle guests filtering
if ($guests > 0) {
    $args['meta_query'][] = array(
        'key' => 'guests',
        'value' => $guests,
        'compare' => '>=',
        'type' => 'NUMERIC',
    );
}

// Handle date range filtering
if (! empty($start_date) && ! empty($end_date)) {
    $start_date = date('Y-m-d', strtotime(str_replace('/', '-', $start_date)));
    $end_date = date('Y-m-d', strtotime(str_replace('/', '-', $end_date)));

    $args['meta_query'][] = array(
        'relation' => 'AND',
        array(
            'key' => 'roavio_book_start_date',
            'value' => $start_date,
            'compare' => '<=',
            'type' => 'DATE',
        ),
        array(
            'key' => 'roavio_book_end_date',
            'value' => $end_date,
            'compare' => '>=',
            'type' => 'DATE',
        ),
    );
}

// Note: Price filtering will be applied after the query using BABE's price system
// We cannot filter by price in WP_Query because BABE stores prices in custom tables

// Handle sorting
$args['orderby'] = 'date'; // Default sorting by date
if ($sort === 'rating') {
    $args['orderby'] = 'meta_value_num';
    $args['meta_key'] = '_rating';
} elseif ($sort === 'title') {
    $args['orderby'] = 'title';
}
// Note: Price sorting will be handled after query using BABE prices
$args['order'] = $order; // Sorting order (ASC or DESC)

// Pagination settings
$posts_per_page = 9; // Number of items per page
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;
$args['posts_per_page'] = -1; // Get all posts first, we'll paginate after filtering

// Execute the query
$custom_query = new WP_Query($args);

// Apply price filtering and sorting using BABE prices
$filtered_posts = array();
if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
        $custom_query->the_post();
        $post_id = get_the_ID();

        // Get BABE price for this post
        $prices = array();
        if (class_exists('BABE_Post_types')) {
            $prices = BABE_Post_types::get_post_price_from($post_id);
        }

        // Get the actual price (use discount price if available, otherwise regular price)
        $actual_price = 0;
        if (!empty($prices)) {
            $actual_price = isset($prices['discount_price_from']) && $prices['discount_price_from'] > 0
                ? $prices['discount_price_from']
                : (isset($prices['price_from']) ? $prices['price_from'] : 0);
        }

        // Apply price filtering
        $price_matches = true;
        if ($min_price > 0 && $actual_price < $min_price) {
            $price_matches = false;
        }
        if ($max_price < PHP_INT_MAX && $actual_price > $max_price) {
            $price_matches = false;
        }

        // Only include posts that match price criteria
        if ($price_matches) {
            $filtered_posts[] = array(
                'post' => get_post($post_id),
                'price' => $actual_price
            );
        }
    }
    wp_reset_postdata();

    // Sort by price if requested
    if ($sort === 'price') {
        usort($filtered_posts, function ($a, $b) use ($order) {
            if ($order === 'ASC') {
                return $a['price'] <=> $b['price'];
            } else {
                return $b['price'] <=> $a['price'];
            }
        });
    }
}

// Calculate pagination
$total_post_count = count($filtered_posts);
$total_pages = ceil($total_post_count / $posts_per_page);

// Slice the filtered posts for current page
$offset = ($current_page - 1) * $posts_per_page;
$paged_posts = array_slice($filtered_posts, $offset, $posts_per_page);

$properties = sprintf(
    _n('%d Item', '%d Items', $total_post_count, 'roavio-toolkit'),
    $total_post_count
);
?>
<!-- Tour sidebar Section Start -->
<section class="tour-sidebar-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <?php

            use RoavioTheme\Classes\Roavio_Helper as Helper;

            $tour_search_title = Helper::get_option('tour_search_title', 'Uncover Unique Tours Places');
            $tour_search_subtitle_prefix = Helper::get_option('tour_search_subtitle_prefix', 'One site');
            $tour_search_count = Helper::get_option('tour_search_count', '30,500');
            $tour_search_subtitle_suffix = Helper::get_option('tour_search_subtitle_suffix', 'most popular experience you\'ll remember');
            ?>
            <?php if (!empty($tour_search_title)) : ?>
                <h2 class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($tour_search_title); ?></h2>
            <?php endif; ?>
            <p class="wow fadeInUp" data-wow-delay=".5s">
                <?php if (!empty($tour_search_subtitle_prefix)) : ?>
                    <?php echo esc_html($tour_search_subtitle_prefix); ?>
                <?php endif; ?>
                <?php if (!empty($tour_search_count)) : ?>
                    <span class="count"><?php echo esc_html($tour_search_count); ?></span><b>+</b>
                <?php endif; ?>
                <?php if (!empty($tour_search_subtitle_suffix)) : ?>
                    <?php echo esc_html($tour_search_subtitle_suffix); ?>
                <?php endif; ?>
            </p>
        </div>
        <div class="tour-sidebar-wrapper">
            <div class="row">
                <div class="col-lg-3 col-12 order-2 order-xl-1">
                    <div class="sticky-style">
                        <form class="filter-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                            <div class="tour-main-sideber">
                                <div class="tour-sidebar-items">
                                    <div class="widget-title">
                                        <h4><?php echo esc_html(Helper::get_option('tour_filter_price_title', 'Filter by Price')); ?></h4>
                                    </div>
                                    <div class="price-ranger">
                                        <div id="slider-range"></div>
                                        <div class="ranger-min-max-block">
                                            <input type="text" readonly class="min">
                                            <input type="text" readonly class="max">
                                            <input type="hidden" name="min-price">
                                            <input type="hidden" name="max-price">
                                            <input type="hidden" class="current-search-min-value" data-current-search-min-value="<?php echo esc_attr($min_price); ?>">
                                            <input type="hidden" class="current-search-max-value" data-current-search-max-value="<?php echo esc_attr($max_price); ?>">
                                            <?php
                                            global $wpdb;

                                            // Get min and max prices from BABE rates table
                                            $min_price_query = 0;
                                            $max_price_query = 1000;

                                            if (class_exists('BABE_Functions')) {
                                                $rates_table = $wpdb->prefix . 'babe_rates';

                                                // Query to get minimum and maximum prices from BABE rates
                                                $sql = "SELECT 
                                                        MIN(t_rate.price_from) AS min_price,
                                                        MAX(t_rate.price_from) AS max_price
                                                    FROM {$rates_table} t_rate
                                                    INNER JOIN {$wpdb->posts} ON {$wpdb->posts}.ID = t_rate.booking_obj_id
                                                    WHERE {$wpdb->posts}.post_type = 'to_book'
                                                    AND {$wpdb->posts}.post_status = 'publish'
                                                    AND t_rate.price_from > 0
                                                ";

                                                // Execute the SQL query
                                                $prices = $wpdb->get_row($sql);

                                                $min_price_query = !empty($prices->min_price) ? $prices->min_price : 0;
                                                $max_price_query = !empty($prices->max_price) ? $prices->max_price : 1000;
                                            }
                                            ?>
                                            <input type="hidden" class="min-price-value" data-min-price-value="<?php echo esc_attr(round($min_price_query)); ?>">
                                            <input type="hidden" class="max-price-value" data-max-price-value="<?php echo esc_attr(round($max_price_query)); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="tour-sidebar-items">
                                    <div class="widget-title">
                                        <h4><?php echo esc_html(Helper::get_option('tour_filter_location_title', 'Location')); ?></h4>
                                    </div>
                                    <ul class="radio-filter">
                                        <?php
                                        $locations = get_terms('ba_location', array('hide_empty' => false));
                                        foreach ($locations as $location) {
                                            $checked = in_array($location->slug, $selected_location) ? 'checked' : '';
                                            $location_id = 'location_' . $location->term_id;
                                        ?>
                                            <li>
                                                <input class="form-check-input" type="checkbox" <?php echo esc_attr($checked); ?> name="location[]" id="<?php echo esc_attr($location_id); ?>" value="<?php echo esc_attr($location->slug); ?>">
                                                <label for="<?php echo esc_attr($location_id); ?>"><?php echo esc_html($location->name); ?></label>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>

                                <div class="tour-sidebar-items">
                                    <div class="widget-title">
                                        <h4><?php echo esc_html(Helper::get_option('tour_filter_types_title', 'Tour Types')); ?></h4>
                                    </div>
                                    <ul class="radio-filter">
                                        <?php
                                        $ba_types = get_terms('ba_type', array('hide_empty' => false));
                                        foreach ($ba_types as $type) {
                                            $checked = in_array($type->slug, $selected_types) ? 'checked' : '';
                                            $type_id = 'type_' . $type->term_id;
                                        ?>
                                            <li>
                                                <input class="form-check-input" type="checkbox" <?php echo esc_attr($checked); ?> name="type[]" id="<?php echo esc_attr($type_id); ?>" value="<?php echo esc_attr($type->slug); ?>">
                                                <label for="<?php echo esc_attr($type_id); ?>"><?php echo esc_html($type->name); ?></label>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <div class="tour-sidebar-items border-none">
                                    <div class="widget-title">
                                        <h4><?php echo esc_html(Helper::get_option('tour_filter_reviews_title', 'By Reviews')); ?></h4>
                                    </div>
                                    <ul class="radio-filter">
                                        <li>
                                            <input class="form-check-input" value="5" type="checkbox" <?php echo (is_array($reviews_filter) && in_array('5', $reviews_filter)) ? 'checked' : ''; ?> name="reviews[]" id="review24">
                                            <label for="review24">
                                                <span class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" value="4" type="checkbox" <?php echo (is_array($reviews_filter) && in_array('4', $reviews_filter)) ? 'checked' : ''; ?> name="reviews[]" id="review25">
                                            <label for="review25">
                                                <span class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" value="3" type="checkbox" <?php echo (is_array($reviews_filter) && in_array('3', $reviews_filter)) ? 'checked' : ''; ?> name="reviews[]" id="review26">
                                            <label for="review26">
                                                <span class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" value="2" type="checkbox" <?php echo (is_array($reviews_filter) && in_array('2', $reviews_filter)) ? 'checked' : ''; ?> name="reviews[]" id="review27">
                                            <label for="review27">
                                                <span class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" value="1" type="checkbox" <?php echo (is_array($reviews_filter) && in_array('1', $reviews_filter)) ? 'checked' : ''; ?> name="reviews[]" id="review28">
                                            <label for="review28">
                                                <span class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <input type="hidden" name="filter" value="yes">
                        </form>
                        <?php
                        $sidebar_image = Helper::get_option('tour_sidebar_image', '');
                        $sidebar_tagline = Helper::get_option('tour_sidebar_tagline', 'Explore The World');
                        $sidebar_title = Helper::get_option('tour_sidebar_title', 'Best Tourist Place');
                        $sidebar_link = Helper::get_option('tour_sidebar_link', '#');
                        $sidebar_button_text = Helper::get_option('tour_sidebar_button_text', 'Explore Tours');
                        $sidebar_button_link = Helper::get_option('tour_sidebar_button_link', '#');
                        $sidebar_alt_text = Helper::get_option('tour_sidebar_alt_text', 'Tour Sidebar Image');

                        if (!empty($sidebar_image)) :
                        ?>
                            <div class="tour-sidebar-bg-image-items">
                                <img src="<?php echo esc_url($sidebar_image); ?>" alt="<?php echo esc_attr($sidebar_alt_text); ?>">
                                <div class="tour-bg-content">
                                    <?php if (!empty($sidebar_tagline)) : ?>
                                        <span><?php echo esc_html($sidebar_tagline); ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($sidebar_title)) : ?>
                                        <h3>
                                            <a href="<?php echo esc_url($sidebar_link); ?>"><?php echo esc_html($sidebar_title); ?></a>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($sidebar_button_text)) : ?>
                                        <a href="<?php echo esc_url($sidebar_button_link); ?>" class="theme-btn"><?php echo esc_html($sidebar_button_text); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-xl-2">
                    <div class="tour-right-content sticky-style">
                        <div class="tour-list-wrap">
                            <div class="list-wrap">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="#grid" data-bs-toggle="tab" class="nav-link active">
                                            <i class="fa-regular fa-grid-2"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#list" data-bs-toggle="tab" class="nav-link">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p><?php echo esc_html($properties); ?></p>
                            </div>
                            <div class="right-item">
                                <h6><?php echo esc_html(Helper::get_option('tour_sort_label', 'Sort By')); ?></h6>
                                <select class="sort short-select" name="sort" tabindex="null">
                                    <option value="date" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'date') ? 'selected' : ''; ?>>
                                        <?php esc_html_e('Publish date', 'roavio-toolkit'); ?>
                                    </option>
                                    <option value="price" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'price') ? 'selected' : ''; ?>>
                                        <?php esc_html_e('Price', 'roavio-toolkit'); ?>
                                    </option>
                                    <option value="rating" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'rating') ? 'selected' : ''; ?>>
                                        <?php esc_html_e('Ratings', 'roavio-toolkit'); ?>
                                    </option>
                                    <option value="title" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'title') ? 'selected' : ''; ?>>
                                        <?php esc_html_e('Title', 'roavio-toolkit'); ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="grid" class="tab-pane fade show active">
                                <div class="row">
                                    <?php
                                    // Check if there are properties to display
                                    if (!empty($paged_posts)) :
                                        foreach ($paged_posts as $filtered_item) :
                                            $post = $filtered_item['post'];
                                            $post_id = $post->ID;

                                            // Setup post data
                                            setup_postdata($post);

                                            // Get property data
                                            $ba_post_meta = BABE_Post_types::get_post($post_id);

                                            if (!isset($ba_post_meta['discount_price_from']) || !isset($ba_post_meta['price_from']) || !isset($ba_post_meta['discount_date_to']) || !isset($ba_post_meta['discount'])) {
                                                $prices = BABE_Post_types::get_post_price_from($post_id);
                                            } else {
                                                $prices = $ba_post_meta;
                                            }

                                            $discount = isset($ba_post_meta['discount']['discount']) && $ba_post_meta['discount']['discount'] ? $ba_post_meta['discount']['discount'] : false;
                                            $tour_meta = get_post_meta($post_id, 'roavio_tour_meta', true);
                                            $discount_price_from = isset($prices['discount_price_from']) ? $prices['discount_price_from'] : false;
                                            $price_from = isset($prices['price_from']) ? $prices['price_from'] : false;

                                            $discount_price_from = isset($prices['discount_price_from']) ? $prices['discount_price_from'] : false;
                                            $price_from = isset($prices['price_from']) ? $prices['price_from'] : false;
                                    ?>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="tour-place-item style-2">
                                                    <div class="tour-place-image">
                                                        <?php the_post_thumbnail('roavio_blog_300X200'); ?>
                                                        <span>10% Off</span>
                                                        <div class="icon">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tour-place-content">
                                                        <div class="rating-item">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                (4.8)
                                                            </div>
                                                            <h5>
                                                                <span>Price</span>
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
                                                        <h3>
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php the_title(); ?>
                                                            </a>
                                                        </h3>
                                                        <p class="sidebar-text">
                                                            Bali, Indonesia, often called the Island the Gods, is a paradise known for its....
                                                        </p>
                                                        <ul class="tour-list">
                                                            <li>
                                                                <i class="fa-regular fa-location-dot"></i>
                                                                Bali, Indonesia
                                                            </li>
                                                            <li>
                                                                <i class="fa-regular fa-clock"></i>
                                                                1 - 3 days
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        endforeach;
                                        wp_reset_postdata();
                                    else:
                                        ?>
                                        <div class="col-12">
                                            <div class="alert alert-info no-properties-found">
                                                <p><?php echo esc_html(Helper::get_option('tour_no_results_text', 'No properties found matching your criteria.')); ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <?php
                                // Check if there are properties to display
                                if (!empty($paged_posts)) :
                                    foreach ($paged_posts as $filtered_item) :
                                        $post = $filtered_item['post'];
                                        $post_id = $post->ID;

                                        // Setup post data
                                        setup_postdata($post);

                                        // Get property data
                                        $ba_post_meta = BABE_Post_types::get_post($post_id);

                                        if (!isset($ba_post_meta['discount_price_from']) || !isset($ba_post_meta['price_from']) || !isset($ba_post_meta['discount_date_to']) || !isset($ba_post_meta['discount'])) {
                                            $prices = BABE_Post_types::get_post_price_from($post_id);
                                        } else {
                                            $prices = $ba_post_meta;
                                        }

                                        $discount = isset($ba_post_meta['discount']['discount']) && $ba_post_meta['discount']['discount'] ? $ba_post_meta['discount']['discount'] : false;
                                        $tour_meta = get_post_meta($post_id, 'roavio_tour_meta', true);
                                        $discount_price_from = isset($prices['discount_price_from']) ? $prices['discount_price_from'] : false;
                                        $price_from = isset($prices['price_from']) ? $prices['price_from'] : false;
                                ?>
                                        <div class="tour-list-box-items">
                                            <div class="tour-image">
                                                <?php the_post_thumbnail('roavio_blog_300X200'); ?>
                                                <span>Featured</span>
                                                <div class="icon">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                            </div>
                                            <div class="tour-content">
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <ul>
                                                    <li>
                                                        <i class="fa-regular fa-location-dot"></i>
                                                        Santorini, Greece
                                                    </li>
                                                    <li>
                                                        <i class="fa-regular fa-timer"></i>
                                                        1 - 3 days
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-users"></i>
                                                        1 - 5
                                                    </li>
                                                </ul>
                                                <div class="bottom-list-items">
                                                    <div class="list-1">
                                                        <p>Start Price</p>
                                                        <h4>$49.00</h4>
                                                    </div>
                                                    <div class="list-2">
                                                        <p>Rating</p>
                                                        <span><i class="fa-solid fa-star-sharp"></i>4.8 (190k+)</span>
                                                    </div>
                                                    <a href="tour-details.html" class="theme-btn">View Tour</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endforeach;
                                    wp_reset_postdata();
                                else:
                                    ?>
                                    <div class="col-12">
                                        <div class="alert alert-info no-properties-found">
                                            <p><?php echo esc_html(Helper::get_option('tour_no_results_text', 'No properties found matching your criteria.')); ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($total_pages > 1) : ?>
                            <div class="page-nav-wrap">
                                <ul>
                                    <?php
                                    // Build query string with all current filters
                                    $query_args = array_filter(array(
                                        'post_type' => $post_type,
                                        's' => $search_query,
                                        'location' => isset($_GET['location']) ? $_GET['location'] : '',
                                        'guest' => $guests,
                                        'type' => isset($_GET['type']) ? $_GET['type'] : '',
                                        'min-price' => $min_price > 0 ? $min_price : '',
                                        'max-price' => $max_price < PHP_INT_MAX ? $max_price : '',
                                        'date' => $date_range,
                                        'reviews' => isset($_GET['reviews']) ? $_GET['reviews'] : '',
                                        'sort' => $sort,
                                        'order' => $order,
                                    ));

                                    // Previous page button
                                    if ($current_page > 1) :
                                        $prev_args = $query_args;
                                        $prev_args['paged'] = $current_page - 1;
                                        $prev_url = add_query_arg($prev_args, home_url('/'));
                                    ?>
                                        <li>
                                            <a class="page-numbers" href="<?php echo esc_url($prev_url); ?>">
                                                <i class="fa-solid fa-chevron-left"></i>
                                            </a>
                                        </li>
                                    <?php else : ?>
                                        <li>
                                            <span class="page-numbers disabled">
                                                <i class="fa-solid fa-chevron-left"></i>
                                            </span>
                                        </li>
                                    <?php endif; ?>

                                    <?php
                                    // Page numbers
                                    $range = 2; // Number of pages to show on each side of current page
                                    $start_page = max(1, $current_page - $range);
                                    $end_page = min($total_pages, $current_page + $range);

                                    // Show first page if not in range
                                    if ($start_page > 1) :
                                        $first_args = $query_args;
                                        $first_args['paged'] = 1;
                                        $first_url = add_query_arg($first_args, home_url('/'));
                                    ?>
                                        <li>
                                            <a class="page-numbers" href="<?php echo esc_url($first_url); ?>">1</a>
                                        </li>
                                        <?php if ($start_page > 2) : ?>
                                            <li><span class="page-numbers">...</span></li>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php
                                    // Show page numbers in range
                                    for ($i = $start_page; $i <= $end_page; $i++) :
                                        if ($i == $current_page) :
                                    ?>
                                            <li>
                                                <a class="page-numbers active" href="#"><?php echo esc_html($i); ?></a>
                                            </li>
                                        <?php else :
                                            $page_args = $query_args;
                                            $page_args['paged'] = $i;
                                            $page_url = add_query_arg($page_args, home_url('/'));
                                        ?>
                                            <li>
                                                <a class="page-numbers" href="<?php echo esc_url($page_url); ?>"><?php echo esc_html($i); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <?php
                                    // Show last page if not in range
                                    if ($end_page < $total_pages) :
                                        if ($end_page < $total_pages - 1) :
                                    ?>
                                            <li><span class="page-numbers">...</span></li>
                                        <?php endif;
                                        $last_args = $query_args;
                                        $last_args['paged'] = $total_pages;
                                        $last_url = add_query_arg($last_args, home_url('/'));
                                        ?>
                                        <li>
                                            <a class="page-numbers" href="<?php echo esc_url($last_url); ?>"><?php echo esc_html($total_pages); ?></a>
                                        </li>
                                    <?php endif; ?>

                                    <?php
                                    // Next page button
                                    if ($current_page < $total_pages) :
                                        $next_args = $query_args;
                                        $next_args['paged'] = $current_page + 1;
                                        $next_url = add_query_arg($next_args, home_url('/'));
                                    ?>
                                        <li>
                                            <a class="page-numbers style-2" href="<?php echo esc_url($next_url); ?>">
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    <?php else : ?>
                                        <li>
                                            <span class="page-numbers style-2 disabled">
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();


?>