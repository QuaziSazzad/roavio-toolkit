<?php if ('layout_one' == $settings['layout_type']) : ?>
    <?php
    // Get the repeater field data
    $locations_items = $settings['locations_items'];

    if (!empty($locations_items)) : ?>
        <!-- Tour Section Start -->
        <section class="tour-section section-padding pt-0 fix">
            <div class="container custom-container">
                <div class="row g-1">
                    <!-- Left Column (5/12) -->
                    <div class="col-xl-5">
                        <div class="row g-1">
                            <!-- First item - Full width in left column -->
                            <?php if (isset($locations_items[0])) :
                                $item = $locations_items[0];
                                $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                                $image_alt = !empty($item['image']['alt']) ? $item['image']['alt'] : $item['location'];

                                $url = '#';
                                if (!empty($item['custom_url']['url'])) {
                                    $url = $item['custom_url']['url'];
                                } elseif (!empty($item['select_category'])) {
                                    $url = get_term_link($item['select_category']);
                                }
                            ?>
                                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="tour-card-item">
                                        <div class="tour-image">
                                            <?php if ($image_url) : ?>
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($item['listing_text'])) : ?>
                                                <span><?php echo esc_html($item['listing_text']); ?></span>
                                            <?php endif; ?>
                                            <div class="tour-content">
                                                <?php if (!empty($item['location'])) : ?>
                                                    <h3>
                                                        <a href="<?php //echo esc_url($url); 
                                                                    ?>"><?php echo esc_html($item['location']); ?></a>
                                                    </h3>
                                                <?php endif; ?>
                                                <p>Bol, Croatia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Second column in left side -->
                            <div class="col-xl-6 col-lg-6">
                                <!-- Second item -->
                                <?php if (isset($locations_items[1])) :
                                    $item = $locations_items[1];
                                    $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                                    $image_alt = !empty($item['image']['alt']) ? $item['image']['alt'] : $item['location'];

                                    $url = '#';
                                    if (!empty($item['custom_url']['url'])) {
                                        $url = $item['custom_url']['url'];
                                    } elseif (!empty($item['select_category'])) {
                                        $url = get_term_link($item['select_category']);
                                    }
                                ?>
                                    <div class="tour-card-item wow fadeInRight" data-wow-delay=".3s">
                                        <div class="tour-image style-3">
                                            <?php if ($image_url) : ?>
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($item['listing_text'])) : ?>
                                                <span><?php echo esc_html($item['listing_text']); ?></span>
                                            <?php endif; ?>
                                            <div class="tour-content">
                                                <?php if (!empty($item['location'])) : ?>
                                                    <h3>
                                                        <a href="<?php //echo esc_url($url); 
                                                                    ?>"><?php echo esc_html($item['location']); ?></a>
                                                    </h3>
                                                <?php endif; ?>
                                                <p>Bol, Croatia</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Third item -->
                                <?php if (isset($locations_items[2])) :
                                    $item = $locations_items[2];
                                    $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                                    $image_alt = !empty($item['image']['alt']) ? $item['image']['alt'] : $item['location'];

                                    $url = '#';
                                    if (!empty($item['custom_url']['url'])) {
                                        $url = $item['custom_url']['url'];
                                    } elseif (!empty($item['select_category'])) {
                                        $url = get_term_link($item['select_category']);
                                    }
                                ?>
                                    <div class="tour-card-item mt-1 wow fadeInRight" data-wow-delay=".5s">
                                        <div class="tour-image style-3">
                                            <?php if ($image_url) : ?>
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($item['listing_text'])) : ?>
                                                <span><?php echo esc_html($item['listing_text']); ?></span>
                                            <?php endif; ?>
                                            <div class="tour-content">
                                                <?php if (!empty($item['location'])) : ?>
                                                    <h3>
                                                        <a href="<?php //echo esc_url($url); 
                                                                    ?>"><?php echo esc_html($item['location']); ?></a>
                                                    </h3>
                                                <?php endif; ?>
                                                <p>Bol, Croatia</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (7/12) -->
                    <div class="col-xl-7">
                        <div class="row g-1">
                            <!-- Fourth item - Large item -->
                            <?php if (isset($locations_items[3])) :
                                $item = $locations_items[3];
                                $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                                $image_alt = !empty($item['image']['alt']) ? $item['image']['alt'] : $item['location'];

                                $url = '#';
                                if (!empty($item['custom_url']['url'])) {
                                    $url = $item['custom_url']['url'];
                                } elseif (!empty($item['select_category'])) {
                                    $url = get_term_link($item['select_category']);
                                }
                            ?>
                                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="tour-card-item">
                                        <div class="tour-image style-2">
                                            <?php if ($image_url) : ?>
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($item['listing_text'])) : ?>
                                                <span><?php echo esc_html($item['listing_text']); ?></span>
                                            <?php endif; ?>
                                            <div class="tour-content">
                                                <?php if (!empty($item['location'])) : ?>
                                                    <h3>
                                                        <a href="<?php //echo esc_url($url); 
                                                                    ?>"><?php echo esc_html($item['location']); ?></a>
                                                    </h3>
                                                <?php endif; ?>
                                                <p>Bol, Croatia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Right side small items -->
                            <div class="col-xl-4 col-lg-6">
                                <!-- Fifth item -->
                                <?php if (isset($locations_items[4])) :
                                    $item = $locations_items[4];
                                    $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                                    $image_alt = !empty($item['image']['alt']) ? $item['image']['alt'] : $item['location'];

                                    $url = '#';
                                    if (!empty($item['custom_url']['url'])) {
                                        $url = $item['custom_url']['url'];
                                    } elseif (!empty($item['select_category'])) {
                                        $url = get_term_link($item['select_category']);
                                    }
                                ?>
                                    <div class="tour-card-item wow fadeInRight" data-wow-delay=".3s">
                                        <div class="tour-image style-3">
                                            <?php if ($image_url) : ?>
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($item['listing_text'])) : ?>
                                                <span><?php echo esc_html($item['listing_text']); ?></span>
                                            <?php endif; ?>
                                            <div class="tour-content style-4">
                                                <?php if (!empty($item['location'])) : ?>
                                                    <h3>
                                                        <a href="<?php //echo esc_url($url); 
                                                                    ?>"><?php echo esc_html($item['location']); ?></a>
                                                    </h3>
                                                <?php endif; ?>
                                                <p>Bol, Croatia</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Sixth item -->
                                <?php if (isset($locations_items[5])) :
                                    $item = $locations_items[5];
                                    $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                                    $image_alt = !empty($item['image']['alt']) ? $item['image']['alt'] : $item['location'];

                                    $url = '#';
                                    if (!empty($item['custom_url']['url'])) {
                                        $url = $item['custom_url']['url'];
                                    } elseif (!empty($item['select_category'])) {
                                        $url = get_term_link($item['select_category']);
                                    }
                                ?>
                                    <div class="tour-card-item mt-1 wow fadeInRight" data-wow-delay=".5s">
                                        <div class="tour-image style-3">
                                            <?php if ($image_url) : ?>
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                            <?php endif; ?>
                                            <?php if (!empty($item['listing_text'])) : ?>
                                                <span><?php echo esc_html($item['listing_text']); ?></span>
                                            <?php endif; ?>
                                            <div class="tour-content style-5">
                                                <?php if (!empty($item['location'])) : ?>
                                                    <h3>
                                                        <a href="<?php //echo esc_url($url); 
                                                                    ?>"><?php echo esc_html($item['location']); ?></a>
                                                    </h3>
                                                <?php endif; ?>
                                                <p>Bol, Croatia</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tour Section End -->
    <?php endif; ?>
<?php endif; ?>