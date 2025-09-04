<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Activities Section Start -->
    <section class="activities-section section-padding fix">
        <div class="container custom-container">
            <div class="activities-wrapper row g-4 g-xl-2 row-cols-xl-5 row-cols-lg-4 row-cols-md-2 row-cols-1">
                <?php foreach ($settings['layout_one_gallery'] as $index => $item) : ?>
                    <div class="col activities-card-item wow fadeInUp" <?php if ($index > 0) : ?>data-wow-delay=".<?php echo $index * 2; ?>s" <?php endif; ?>>
                        <div class="activities-image">
                            <?php echo rt_elementor_rendered_image($item, 'image'); ?>
                        </div>
                        <div class="activities-content">
                            <h4>
                                <a href="<?php echo esc_url($item['url']['url']); ?>" <?php if (!empty($item['url']['is_external'])) : ?> target="_blank" <?php endif; ?>><?php echo esc_html($item['title']); ?></a>
                            </h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>