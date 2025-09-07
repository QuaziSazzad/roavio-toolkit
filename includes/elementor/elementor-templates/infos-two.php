<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Counter Section Start -->
    <section class="counter-section section-padding fix bg-cover" style="background-image: url(assets/img/home-1/bg.png);">
        <div class="container">
            <div class="counter-wrapper">
                <?php if (!empty($settings['layout_two_title']) || !empty($settings['layout_two_sub_title'])) : ?>
                    <div class="section-title text-center mb-0">
                        <?php if (!empty($settings['layout_two_title'])) : ?>
                            <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($settings['layout_two_title']); ?></<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_two_sub_title'])) : ?>
                            <<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?> class="text-white wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html($settings['layout_two_sub_title']); ?></<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?>>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="counter-main-item">
                        <?php if (!empty($settings['layout_two_counter_items'])) : ?>
                            <?php foreach ($settings['layout_two_counter_items'] as $index => $item) : ?>
                                <div class="counter-item wow fadeInUp" data-wow-delay=".<?php echo ($index + 1) * 2 + 1; ?>s">
                                    <?php if (!empty($item['layout_two_item_icon']['value'])) : ?>
                                        <div class="icon">
                                            <i class="<?php echo esc_attr($item['layout_two_item_icon']['value']); ?>"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="content">
                                        <?php if (!empty($item['layout_two_item_number']) || !empty($item['layout_two_item_suffix'])) : ?>
                                            <h3>
                                                <?php if (!empty($item['layout_two_item_number'])) : ?>
                                                    <span class="count"><?php echo esc_html($item['layout_two_item_number']); ?></span>
                                                <?php endif; ?>
                                                <?php if (!empty($item['layout_two_item_suffix'])) : ?>
                                                    <?php echo esc_html($item['layout_two_item_suffix']); ?>
                                                <?php endif; ?>
                                            </h3>
                                        <?php endif; ?>
                                        <?php if (!empty($item['layout_two_item_title'])) : ?>
                                            <p><?php echo esc_html($item['layout_two_item_title']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>