<?php if ('layout_six' == $settings['layout_type']) :
    $tour_meta = get_post_meta(get_the_ID(), 'roavio_booking_tour_meta', true);
?>
    <!-- Hero Section Start -->
    <div class="breadcrumb-wrapper fix">
        <div class="container">
            <div class="page-heading style-2">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo esc_html($settings['layout_six_home_text']); ?>
                        </a>
                    </li>
                    <li class="style-2 style-3">
                        <?php echo esc_html($settings['layout_six_destination_text']); ?>
                    </li>
                </ul>
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                        <?php if (!empty($settings['layout_six_tour_title'])) : ?>
                            <?php echo rt_kses_basic($settings['layout_six_tour_title']); ?>
                        <?php else : ?>
                            <?php the_title(); ?>
                        <?php endif; ?>
                    </h1>
                </div>
                <ul class="list">
                    <?php if (!empty($tour_meta['tour_address'])) : ?>
                        <li>
                            <i class="fa-regular fa-location-dot"></i>
                            <?php echo esc_html($tour_meta['tour_address']); ?>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($tour_meta['tour_duration'])) : ?>
                        <li>
                            <i class="fa-regular fa-clock"></i>
                            <?php echo esc_html($tour_meta['tour_duration']); ?>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($tour_meta['people_count'])) : ?>
                        <li>
                            <i class="fa-regular fa-users"></i>
                            <?php echo esc_html($tour_meta['people_count']); ?>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>