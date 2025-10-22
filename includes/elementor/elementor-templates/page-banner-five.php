<?php if ('layout_five' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <div class="breadcrumb-wrapper fix">
        <div class="container">
            <div class="page-heading style-2">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo esc_html($settings['layout_five_home_text']); ?>
                        </a>
                    </li>
                    <li class="style-2 style-3">
                        <?php echo esc_html($settings['layout_five_destination_text']); ?>
                    </li>
                </ul>
                <?php if (is_tax('ba_location')) : ?>
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            <?php
                            $term = get_term_by('slug', get_query_var('term'), 'ba_location');
                            if ($term) {
                                echo esc_html($term->name);
                            }

                            $tour_meta = get_post_meta(get_the_ID(), 'roavio_booking_tour_meta', true);
                            if (!empty($tour_meta['tour_address'])) : ?>
                                <br>
                                <?php echo esc_html($tour_meta['tour_address']); ?>
                            <?php endif; ?>
                        </h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>