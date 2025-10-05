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

// Handle sorting by reviews
$reviews_filter = isset($_GET['reviews']) ? sanitize_text_field($_GET['reviews']) : '';

// Prepare meta query for reviews filtering
$meta_query = array();

if (!empty($reviews_filter)) {
    switch ($reviews_filter) {
        case '5':
            $meta_query[] = array(
                'key' => '_babe_rating',
                'value' => 5,
                'compare' => '=',
                'type' => 'NUMERIC'
            );
            break;
        case '4':
            $meta_query[] = array(
                'key' => '_babe_rating',
                'value' => 4,
                'compare' => '=',
                'type' => 'NUMERIC'
            );
            break;
        case '3':
            $meta_query[] = array(
                'key' => '_babe_rating',
                'value' => 3,
                'compare' => '=',
                'type' => 'NUMERIC'
            );
            break;
        case '2':
            $meta_query[] = array(
                'key' => '_babe_rating',
                'value' => 2,
                'compare' => '=',
                'type' => 'NUMERIC'
            );
            break;
        case '1':
            $meta_query[] = array(
                'key' => '_babe_rating',
                'value' => 1,
                'compare' => '=',
                'type' => 'NUMERIC'
            );
            break;
        case 'any':
            $meta_query[] = array(
                'key' => '_babe_rating',
                'compare' => 'EXISTS',
            );
            break;
    }
}


// Build query arguments for searching posts
$args = array(
    'post_type' => $post_type,
    's' => $search_query,
);

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

// Handle price range filtering
if ($min_price > 0) {
    $args['meta_query'][] = array(
        'key' => 'roavio_general_price',
        'value' => $min_price,
        'compare' => '>=',
        'type' => 'NUMERIC',
    );
}

if ($max_price < PHP_INT_MAX) {
    $args['meta_query'][] = array(
        'key' => 'roavio_general_price',
        'value' => $max_price,
        'compare' => '<=',
        'type' => 'NUMERIC',
    );
}

// Handle sorting
$args['orderby'] = 'date'; // Default sorting by date
if ($sort === 'price') {
    $args['orderby'] = 'meta_value_num';
    $args['meta_key'] = 'roavio_general_price';
} elseif ($sort === 'rating') {
    $args['orderby'] = 'meta_value_num';
    $args['meta_key'] = '_rating';
} elseif ($sort === 'title') {
    $args['orderby'] = 'title';
}
$args['order'] = $order; // Sorting order (ASC or DESC)

// Pagination
$blog_post_one_query_paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args['paged'] = $blog_post_one_query_paged;
$args['posts_per_page'] = -1; // Show 6 items per page

// Execute the query
$custom_query = new WP_Query($args);

$total_post_count = $custom_query->found_posts;
$properties = sprintf(
    _n('%d Item', '%d Items', $total_post_count, 'roavio-toolkit'),
    $total_post_count
);
?>
<!-- Tour sidebar Section Start -->
<section class="tour-sidebar-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Uncover Unique Tours Places</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">One site <span class="count">30,500</span><b>+</b> most popular experience you’ll remember</p>
        </div>
        <div class="tour-sidebar-wrapper">
            <div class="row">
                <div class="col-lg-3 col-12 order-2 order-xl-1">
                    <div class="sticky-style">
                        <div class="tour-main-sideber">
                            <div class="tour-sidebar-items">
                                <div class="widget-title">
                                    <h4>Filter by Price</h4>
                                </div>
                                <div class="price-filter-wrap">
                                    <div class="price-slider-range"></div>
                                    <div class="price">
                                        <span>Price </span>
                                        <input type="text" id="price" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="tour-sidebar-items">
                                <div class="widget-title">
                                    <h4>Location</h4>
                                </div>
                                <ul class="radio-filter">
                                    <?php
                                    $locations = get_terms('ba_location', array('hide_empty' => false));
                                    foreach ($locations as $location) {
                                        $checked = in_array($location->slug, $selected_location) ? 'checked' : '';
                                    ?>
                                        <li>
                                            <input class="form-check-input" type="radio" <?php echo esc_attr($checked); ?> name="location" id="location" value="<?php echo esc_attr($location->slug); ?>">
                                            <label for="location"><?php echo esc_html($location->name); ?></label>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="tour-sidebar-items">
                                <div class="widget-title">
                                    <h4>Tour Types</h4>
                                </div>
                                <ul class="radio-filter">
                                    <?php
                                    $ba_types = get_terms('ba_type', array('hide_empty' => false));
                                    foreach ($ba_types as $type) {
                                        $checked = in_array($type->slug, $selected_types) ? 'checked' : '';
                                    ?>
                                        <li>
                                            <input class="form-check-input" type="radio" <?php echo esc_attr($checked); ?> name="type" id="type" value="<?php echo esc_attr($type->slug); ?>">
                                            <label for="type">Daily Tours</label>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="tour-sidebar-items border-none">
                                <div class="widget-title">
                                    <h4>By Reviews</h4>
                                </div>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" value="5" type="radio" <?php (isset($_GET['reviews']) && $_GET['reviews'] == '5') ? 'checked' : ''; ?> name="reviews" id="review24">
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
                                        <input class="form-check-input" value="4" type="radio" <?php (isset($_GET['reviews']) && $_GET['reviews'] == '4') ? 'checked' : ''; ?> name="reviews" id="review25">
                                        <label for="review25">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" value="3" <?php (isset($_GET['reviews']) && $_GET['reviews'] == '3') ? 'checked' : ''; ?> type="radio" name="reviews" id="review26">
                                        <label for="review26">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" value="2" <?php (isset($_GET['reviews']) && $_GET['reviews'] == '2') ? 'checked' : ''; ?> type="radio" name="reviews" id="review27">
                                        <label for="review27">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" value="1" <?php (isset($_GET['reviews']) && $_GET['reviews'] == '1') ? 'checked' : ''; ?> type="radio" name="reviews" id="review28">
                                        <label for="review28">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-sidebar-bg-image-items">
                            <img src="assets/img/inner-page/tour-sidebar/sidebar-image.jpg" alt="img">
                            <div class="tour-bg-content">
                                <span>xplore The World</span>
                                <h3>
                                    <a href="tour-details.html">Best Tourist Place</a>
                                </h3>
                                <a href="tour-details.html" class="theme-btn">Explore Tours</a>
                            </div>
                        </div>
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
                                <p>34 Tours found</p>
                            </div>
                            <div class="right-item">
                                <select class="selectpicker sort " name="sort" tabindex="null">
                                    <option value="date" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'date') ? 'selected' : ''; ?>>
                                        <?php esc_html_e('Sort by publish date', 'roavio-toolkit'); ?>
                                    </option>
                                    <option value="rating" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'rating') ? 'selected' : ''; ?>>
                                        <?php esc_html_e('Sort by ratings', 'roavio-toolkit'); ?>
                                    </option>
                                    <option value="title" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'title') ? 'selected' : ''; ?>>
                                        <?php esc_html_e('Sort by title', 'roavio-toolkit'); ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="grid" class="tab-pane fade show active">
                                <div class="row">
                                    <?php
                                    // Check if there are properties to display
                                    if ($custom_query->have_posts()) :
                                        while ($custom_query->have_posts()) : $custom_query->the_post();
                                            $post_id = get_the_ID();
                                            // Get property data
                                            $ba_post_meta = BABE_Post_types::get_post($post_id);

                                            if (!isset($ba_post_meta['discount_price_from']) || !isset($ba_post_meta['price_from']) || !isset($ba_post_meta['discount_date_to']) || !isset($ba_post_meta['discount'])) {
                                                $prices = BABE_Post_types::get_post_price_from($post_id);
                                            } else {
                                                $prices = $ba_post_meta;
                                            }

                                            $discount = isset($ba_post_meta['discount']['discount']) && $ba_post_meta['discount']['discount'] ? $ba_post_meta['discount']['discount'] : false;
                                            $tour_meta = get_post_meta(get_the_ID(), 'roavio_tour_meta', true);
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
                                                            <h5><span>Price</span>$49.00</h5>
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
                                        endwhile;
                                    else:
                                        ?>
                                        <div class="col-12">
                                            <div class="alert alert-info">
                                                <p><?php esc_html_e('No properties found matching your criteria.', 'roavio-toolkit'); ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <?php
                                // Check if there are properties to display
                                if ($custom_query->have_posts()) :
                                    while ($custom_query->have_posts()) : $custom_query->the_post();
                                        $post_id = get_the_ID();
                                        // Get property data
                                        $ba_post_meta = BABE_Post_types::get_post($post_id);

                                        if (!isset($ba_post_meta['discount_price_from']) || !isset($ba_post_meta['price_from']) || !isset($ba_post_meta['discount_date_to']) || !isset($ba_post_meta['discount'])) {
                                            $prices = BABE_Post_types::get_post_price_from($post_id);
                                        } else {
                                            $prices = $ba_post_meta;
                                        }

                                        $discount = isset($ba_post_meta['discount']['discount']) && $ba_post_meta['discount']['discount'] ? $ba_post_meta['discount']['discount'] : false;
                                        $tour_meta = get_post_meta(get_the_ID(), 'roavio_tour_meta', true);
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
                                    endwhile;
                                else:
                                    ?>
                                    <div class="col-12">
                                        <div class="alert alert-info">
                                            <p><?php esc_html_e('No properties found matching your criteria.', 'roavio-toolkit'); ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="page-nav-wrap">
                            <ul>
                                <li><a class="page-numbers active" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                                <li><a class="page-numbers" href="#">1</a></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers style-2" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();


?>