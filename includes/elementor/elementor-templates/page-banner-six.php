<?php if ('layout_six' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <div class="breadcrumb-wrapper fix">
        <div class="container">
            <div class="page-heading style-2">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            Home
                        </a>
                    </li>
                    <li class="style-2 style-3">
                        Tour Details
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
                    <li>
                        <i class="fa-regular fa-location-dot"></i>
                        Bali, Indonesia
                    </li>
                    <li>
                        <i class="fa-regular fa-clock"></i>
                        1 - 3 days
                    </li>
                    <li>
                        <i class="fa-regular fa-users"></i>
                        3 persons
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>