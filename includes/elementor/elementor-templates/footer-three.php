<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Footer Section Start -->
    <div class="footer-section-3 fix">
        <?php if (!empty($settings['layout_one_bg_text'])) :   ?>
            <h2 class="text"><?php echo esc_html($settings['layout_one_bg_text']); ?></h2>
        <?php endif; ?>
        <!-- Background Shapes -->
        <?php if (!empty($settings['layout_one_shape_one']['url'])) : ?>
            <div class="shape-1">
                <?php rt_elementor_rendered_image($settings, 'layout_one_shape_one'); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($settings['layout_one_shape_two']['url'])) : ?>
            <div class="shape-2">
                <?php rt_elementor_rendered_image($settings, 'layout_one_shape_two'); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($settings['layout_one_shape_three']['url'])) : ?>
            <div class="shape-3">
                <?php rt_elementor_rendered_image($settings, 'layout_one_shape_three'); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($settings['layout_one_shape_four']['url'])) : ?>
            <div class="shape-4">
                <?php rt_elementor_rendered_image($settings, 'layout_one_shape_four'); ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="footer-widget-wrapper-3">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="footer-left-item">
                            <div class="footer-item">
                                <div class="footer-content">
                                    <div class="wid-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <img src="<?php echo esc_url($settings['layout_one_logo']['url']); ?>" width="<?php echo esc_attr($settings['logo_size']['width']); ?>" height="<?php echo esc_attr($settings['logo_size']['height']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                        </a>
                                    </div>
                                    <?php if (!empty($settings['layout_one_summary_text'])) : ?>
                                        <p>
                                            <?php echo rt_kses_basic($settings['layout_one_summary_text']); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if (!empty($settings['layout_one_button_text'])) : ?>
                                        <a href="<?php echo esc_url($settings['layout_one_button_url']['url']); ?>"
                                            class="theme-btn color"
                                            <?php echo ($settings['layout_one_button_url']['is_external'] ? 'target="_blank"' : ''); ?>
                                            <?php echo ($settings['layout_one_button_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                                            <?php echo esc_html($settings['layout_one_button_text']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>

                                <!-- Services Section -->
                                <?php if (!empty($settings['layout_one_services_title']) || !empty($settings['layout_one_services'])) : ?>
                                    <div class="single-footer-widget">
                                        <?php if (!empty($settings['layout_one_services_title'])) : ?>
                                            <div class="wid-title">
                                                <h4><?php echo esc_html($settings['layout_one_services_title']); ?></h4>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($settings['layout_one_services'])) : ?>
                                            <ul class="list-area">
                                                <?php foreach ($settings['layout_one_services'] as $service) : ?>
                                                    <li>
                                                        <a href="<?php echo esc_url($service['service_url']['url']); ?>"
                                                            <?php echo ($service['service_url']['is_external'] ? 'target="_blank"' : ''); ?>
                                                            <?php echo ($service['service_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                            <?php echo esc_html($service['service_title']); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="footer-item pb-0 mb-0">
                                <?php if (!empty($settings['layout_one_contact_title']) || !empty($settings['layout_one_contact_items'])) : ?>
                                    <div class="single-footer-widget">
                                        <?php if (!empty($settings['layout_one_contact_title'])) : ?>
                                            <div class="wid-title">
                                                <h4><?php echo esc_html($settings['layout_one_contact_title']); ?></h4>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($settings['layout_one_contact_items'])) : ?>
                                            <?php foreach ($settings['layout_one_contact_items'] as $index => $contact_item) : ?>
                                                <?php
                                                $is_last_item = ($index === count($settings['layout_one_contact_items']) - 1);
                                                $item_class = $is_last_item ? 'contact-item mb-0' : 'contact-item';
                                                ?>
                                                <div class="<?php echo esc_attr($item_class); ?>">
                                                    <?php if (!empty($contact_item['contact_icon']['value'])) : ?>
                                                        <div class="icon">
                                                            <?php \Elementor\Icons_Manager::render_icon($contact_item['contact_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if (!empty($contact_item['contact_text'])) : ?>
                                                        <div class="content">
                                                            <h6>
                                                                <?php if (!empty($contact_item['contact_url']['url'])) : ?>
                                                                    <a href="<?php echo esc_url($contact_item['contact_url']['url']); ?>"
                                                                        <?php echo ($contact_item['contact_url']['is_external'] ? 'target="_blank"' : ''); ?>
                                                                        <?php echo ($contact_item['contact_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                                                                        <?php echo rt_kses_basic($contact_item['contact_text']); ?>
                                                                    </a>
                                                                <?php else : ?>
                                                                    <?php echo rt_kses_basic($contact_item['contact_text']); ?>
                                                                <?php endif; ?>
                                                            </h6>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Social Media Section -->
                                <?php if (!empty($settings['layout_one_social_title']) || !empty($settings['layout_one_social_icons'])) : ?>
                                    <div class="single-footer-widget style-3">
                                        <?php if (!empty($settings['layout_one_social_title'])) : ?>
                                            <div class="wid-title">
                                                <h4><?php echo esc_html($settings['layout_one_social_title']); ?></h4>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($settings['layout_one_social_icons'])) : ?>
                                            <ul class="social-list">
                                                <?php foreach ($settings['layout_one_social_icons'] as $social) : ?>
                                                    <li>
                                                        <a href="<?php echo esc_url($social['social_url']['url']); ?>"
                                                            <?php echo ($social['social_url']['is_external'] ? 'target="_blank"' : ''); ?>
                                                            <?php echo ($social['social_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                                                            <?php \Elementor\Icons_Manager::render_icon($social['social_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                            <?php echo esc_html($social['social_title']); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="footer-right-content">
                            <!-- Destinations Section -->
                            <?php if (!empty($settings['layout_one_destinations_title'])) : ?>
                                <h4><?php echo esc_html($settings['layout_one_destinations_title']); ?></h4>
                            <?php endif; ?>

                            <?php if (!empty($settings['layout_one_destinations'])) : ?>
                                <div class="area-list">
                                    <?php foreach ($settings['layout_one_destinations'] as $destination) : ?>
                                        <a href="<?php echo esc_url($destination['destination_url']['url']); ?>"
                                            <?php echo ($destination['destination_url']['is_external'] ? 'target="_blank"' : ''); ?>
                                            <?php echo ($destination['destination_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <?php echo esc_html($destination['destination_title']); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($settings['layout_one_explore_button_text'])) : ?>
                                <a href="<?php echo esc_url($settings['layout_one_explore_button_url']['url']); ?>"
                                    class="fotter-btn"
                                    <?php echo ($settings['layout_one_explore_button_url']['is_external'] ? 'target="_blank"' : ''); ?>
                                    <?php echo ($settings['layout_one_explore_button_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                                    <?php echo esc_html($settings['layout_one_explore_button_text']); ?>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            <?php endif; ?>

                            <!-- Map Section -->
                            <?php if (!empty($settings['layout_one_map_embed_code'])) : ?>
                                <div class="map-items">
                                    <div class="googpemap">
                                        <iframe src="<?php echo esc_url($settings['layout_one_map_embed_code']); ?>"
                                            style="border:0;"
                                            allowfullscreen=""
                                            loading="lazy">
                                        </iframe>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom-3">
            <div class="container">
                <div class="footer-wrapper-3">
                    <?php if (!empty($settings['layout_one_footer_links'])) : ?>
                        <ul class="left-list">
                            <?php foreach ($settings['layout_one_footer_links'] as $link) : ?>
                                <li>
                                    <a href="<?php echo esc_url($link['link_url']['url']); ?>"
                                        <?php echo ($link['link_url']['is_external'] ? 'target="_blank"' : ''); ?>
                                        <?php echo ($link['link_url']['nofollow'] ? 'rel="nofollow"' : ''); ?>>
                                        <?php echo esc_html($link['link_title']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if (!empty($settings['layout_one_copyright_text'])) : ?>
                        <p><?php echo rt_kses_basic($settings['layout_one_copyright_text']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>