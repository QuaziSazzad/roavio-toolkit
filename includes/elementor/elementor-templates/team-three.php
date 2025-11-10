<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Team Section-4 Start -->
    <section class="team-section-4 section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_three_section_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_three_section_title_tag']); ?> class="text-anim sec-title">
                        <?php echo rt_kses_basic($settings['layout_three_section_title']); ?>
                    </<?php echo esc_attr($settings['layout_three_section_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_three_section_description'])) : ?>
                    <p class="wow fadeInUp sec-sub-title" data-wow-delay=".5s">
                        <?php echo rt_kses_basic($settings['layout_three_section_description']); ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="swiper team-slider-4">
                <div class="swiper-wrapper">
                    <?php
                    if (!empty($settings['layout_three_team_members'])) :
                        foreach ($settings['layout_three_team_members'] as $index => $item) :
                    ?>
                            <div class="swiper-slide">
                                <div class="team-card-items-4">
                                    <div class="team-image">
                                        <?php rt_elementor_rendered_image($item, 'layout_three_team_image'); ?>
                                    </div>
                                    <div class="team-content">
                                        <?php if (!empty($item['layout_three_team_name'])) : ?>
                                            <h3>
                                                <?php if (!empty($item['layout_three_team_link']['url'])) : ?>
                                                    <a href="<?php echo esc_url($item['layout_three_team_link']['url']); ?>"
                                                        <?php echo !empty($item['layout_three_team_link']['is_external']) ? 'target="_blank"' : ''; ?>
                                                        <?php echo !empty($item['layout_three_team_link']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                        <?php echo esc_html($item['layout_three_team_name']); ?>
                                                    </a>
                                                <?php else : ?>
                                                    <?php echo esc_html($item['layout_three_team_name']); ?>
                                                <?php endif; ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (!empty($item['layout_three_team_position'])) : ?>
                                            <p><?php echo esc_html($item['layout_three_team_position']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <?php if ('yes' === $settings['layout_three_show_navigation'] || 'yes' === $settings['layout_three_show_pagination']) : ?>
                <div class="team-bottom-item">
                    <?php if ('yes' === $settings['layout_three_show_navigation']) : ?>
                        <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <?php endif; ?>
                    <?php if ('yes' === $settings['layout_three_show_pagination']) : ?>
                        <div class="swiper-dot-7">
                            <div class="dot3"></div>
                        </div>
                    <?php endif; ?>
                    <?php if ('yes' === $settings['layout_three_show_navigation']) : ?>
                        <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>