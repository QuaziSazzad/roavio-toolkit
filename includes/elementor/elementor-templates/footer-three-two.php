<?php if ('layout_two' == $settings['layout_type']) : ?>
    <footer class="footer-section-4 fix">
        <div class="container">
            <div class="footer-widget-wrapper-4">
                <div class="row g-4">
                    <div class="col-xl-9 col-lg-8 col-md-8">
                        <div class="footer-left-content">
                            <div class="footer-item">
                                <?php if (!empty($settings['layout_two_logo']['url'])) : ?>
                                    <div class="logo">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <img src="<?php echo esc_url($settings['layout_two_logo']['url']); ?>" width="<?php echo esc_attr($settings['layout_two_logo_size']['width']); ?>" height="<?php echo esc_attr($settings['layout_two_logo_size']['height']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="content">
                                    <?php if (!empty($settings['layout_two_main_title'])) :
                                    ?>
                                        <<?php echo esc_attr($settings['layout_two_main_title_tag']); ?> class="text-anim main-title">
                                            <?php echo rt_kses_basic($settings['layout_two_main_title']); ?>
                                        </<?php echo esc_attr($settings['layout_two_main_title_tag']); ?>>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['layout_two_button_text'])) :
                                        $button_link = $settings['layout_two_button_link']['url'];
                                        $button_target = $settings['layout_two_button_link']['is_external'] ? ' target="_blank"' : '';
                                        $button_nofollow = $settings['layout_two_button_link']['nofollow'] ? ' rel="nofollow"' : '';
                                    ?>
                                        <a href="<?php echo esc_url($button_link); ?>" class="theme-btn mt-4" <?php echo ($button_target . $button_nofollow); ?>>
                                            <?php echo esc_html($settings['layout_two_button_text']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="footer-icon-item">
                                <?php if (!empty($settings['layout_two_address_title']) || !empty($settings['layout_two_address_text'])) : ?>
                                    <div class="icon-item">
                                        <?php if (!empty($settings['layout_two_address_icon']['value'])) : ?>
                                            <div class="icon">
                                                <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_address_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="cont">
                                            <?php if (!empty($settings['layout_two_address_title'])) : ?>
                                                <h5><?php echo esc_html($settings['layout_two_address_title']); ?></h5>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['layout_two_address_text'])) : ?>
                                                <h6>
                                                    <?php echo esc_html($settings['layout_two_address_text']); ?>
                                                </h6>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_two_email_title']) || !empty($settings['layout_two_email_text'])) : ?>
                                    <div class="icon-item">
                                        <?php if (!empty($settings['layout_two_email_icon']['value'])) : ?>
                                            <div class="icon">
                                                <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_email_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="cont">
                                            <?php if (!empty($settings['layout_two_email_title'])) : ?>
                                                <h5><?php echo esc_html($settings['layout_two_email_title']); ?></h5>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['layout_two_email_text'])) : ?>
                                                <h6>
                                                    <a href="mailto:<?php echo esc_attr($settings['layout_two_email_text']); ?>">
                                                        <?php echo esc_html($settings['layout_two_email_text']); ?>
                                                    </a>
                                                </h6>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_two_phone_title']) || !empty($settings['layout_two_phone_text'])) : ?>
                                    <div class="icon-item">
                                        <?php if (!empty($settings['layout_two_phone_icon']['value'])) : ?>
                                            <div class="icon">
                                                <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_phone_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="cont">
                                            <?php if (!empty($settings['layout_two_phone_title'])) : ?>
                                                <h5><?php echo esc_html($settings['layout_two_phone_title']); ?></h5>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['layout_two_phone_text'])) : ?>
                                                <h6>
                                                    <a href="tel:<?php echo esc_attr(str_replace(' ', '', $settings['layout_two_phone_text'])); ?>">
                                                        <?php echo esc_html($settings['layout_two_phone_text']); ?>
                                                    </a>
                                                </h6>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <?php if (!empty($settings['layout_two_gallery_title']) || !empty($settings['layout_two_gallery_images'])) : ?>
                            <div class="photo-gallery">
                                <?php if (!empty($settings['layout_two_gallery_title'])) : ?>
                                    <h5><?php echo esc_html($settings['layout_two_gallery_title']); ?></h5>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_two_gallery_images'])) :
                                    $gallery_images = $settings['layout_two_gallery_images'];
                                    $chunks = array_chunk($gallery_images, 3);
                                    foreach ($chunks as $chunk) : ?>
                                        <div class="gallery-item">
                                            <?php foreach ($chunk as $image) : ?>
                                                <div class="thumb">
                                                    <a href="<?php echo esc_url($image['url']); ?>" class="img-popup">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true)); ?>">
                                                        <div class="icon">
                                                            <i class="far fa-plus"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-3">
            <div class="container">
                <div class="footer-wrapper-3">
                    <?php if (!empty($settings['layout_two_footer_links'])) : ?>
                        <ul class="left-list">
                            <?php foreach ($settings['layout_two_footer_links'] as $link) : ?>
                                <li>
                                    <?php if (!empty($link['layout_two_link_url']['url'])) :
                                        $target = $link['layout_two_link_url']['is_external'] ? ' target="_blank"' : '';
                                        $nofollow = $link['layout_two_link_url']['nofollow'] ? ' rel="nofollow"' : '';
                                    ?>
                                        <a href="<?php echo esc_url($link['layout_two_link_url']['url']); ?>" <?php echo ($target . $nofollow); ?>>
                                            <?php echo esc_html($link['layout_two_link_text']); ?>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_two_copyright_text'])) : ?>
                        <p><?php echo rt_kses_basic($settings['layout_two_copyright_text']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>