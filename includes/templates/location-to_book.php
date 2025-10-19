<?php
get_header();

$location_id = get_queried_object_id();
$ba_location_page_id = get_term_meta($location_id, 'selected_page', true);

$ba_location_page_added = null;
if (!empty($ba_location_page_id)) {
    // Convert to integer and validate it's a valid page ID
    $page_id = absint($ba_location_page_id);
    if ($page_id > 0 && get_post_status($page_id) === 'publish' && get_post_type($page_id) === 'page') {
        $ba_location_page_added = $page_id;
    }
}

if (!empty($ba_location_page_added)) :
    echo do_shortcode(\Elementor\Plugin::$instance->frontend->get_builder_content($ba_location_page_added));
else :
    the_content();
endif;

get_footer();
