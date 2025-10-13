<?php if ('layout_five' == $settings['layout_type']) : ?>
    <!-- Gallery Section-3 Start -->
    <section class="gallery-section-3 fix">
        <div class="container-fluid">
            <div class="gallery-wrapper-3">
                <div class="main-box">
                    <?php
                    if (!empty($settings['layout_five_gallery_items'])) :
                        foreach ($settings['layout_five_gallery_items'] as $index => $item) :

                            $active_class = '';
                            if ('yes' === $item['layout_five_active']) {
                                $active_class = ' active';
                            } else {
                                $active_class = ' bg-' . $index;
                            }

                            $link_key = 'gallery_link_' . $index;
                            $url = !empty($item['layout_five_link']['url']) ? $item['layout_five_link']['url'] : '#';
                            $target = !empty($item['layout_five_link']['is_external']) ? ' target="_blank"' : '';
                            $nofollow = !empty($item['layout_five_link']['nofollow']) ? ' rel="nofollow"' : '';

                            $title_tag = !empty($settings['layout_five_title_tag']) ? $settings['layout_five_title_tag'] : 'h4';
                    ?>

                            <div class="box-2<?php echo esc_attr($active_class); ?>" style="background-image: url(<?php echo esc_url($item['layout_five_background']['url']); ?>);">
                                <div class="project-content">
                                    <div class="text">
                                        <<?php echo esc_attr($title_tag); ?>>
                                            <a href="<?php echo esc_url($url); ?>" <?php echo $target . $nofollow; ?>>
                                                <?php echo esc_html($item['layout_five_title']); ?>
                                            </a>
                                        </<?php echo esc_attr($title_tag); ?>>
                                    </div>
                                    <a href="<?php echo esc_url($url); ?>" <?php echo $target . $nofollow; ?> class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_five_icon'], ['aria-hidden' => 'true']); ?>
                                    </a>
                                </div>
                            </div>

                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>