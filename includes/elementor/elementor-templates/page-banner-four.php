<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!-- Breadcrumb-Wrapper Section Start -->
    <div class="breadcrumb-wrapper-4 fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_four_background_image']['url']); ?>);">
        <div class="container">
            <div class="breadcrumb-top-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            <?php echo rt_kses_basic($settings['layout_four_page_heading']); ?>
                        </h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <?php if (!empty($settings['layout_four_breadcrumb_items'])) : ?>
                            <?php foreach ($settings['layout_four_breadcrumb_items'] as $index => $item) : ?>
                                <li<?php echo ($index > 0) ? ' class="style-2 style-3"' : ''; ?>>
                                    <?php if (!empty($item['link']['url'])) : ?>
                                        <a href="<?php echo esc_url($item['link']['url']); ?>"
                                            <?php echo !empty($item['link']['is_external']) ? ' target="_blank"' : ''; ?>
                                            <?php echo !empty($item['link']['nofollow']) ? ' rel="nofollow"' : ''; ?>>
                                            <?php echo esc_html($item['title']); ?>
                                        </a>
                                    <?php else : ?>
                                        <?php echo esc_html($item['title']); ?>
                                    <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                    </ul>
                </div>
                <div class="content style-2">
                    <?php if (!empty($settings['layout_four_counters'])) : ?>
                        <?php foreach ($settings['layout_four_counters'] as $counter) : ?>
                            <div class="text">
                                <h2><span class="count"><?php echo esc_html($counter['count']); ?></span>+</h2>
                                <p><?php echo esc_html($counter['text']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>