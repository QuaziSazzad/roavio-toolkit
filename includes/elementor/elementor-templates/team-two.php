<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Team Section Start -->
    <section class="team-single-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_two_section_title'])) : ?>
                    <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="text-anim sec-title">
                        <?php echo rt_kses_basic($settings['layout_two_section_title']); ?>
                    </<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                <?php endif; ?>

                <?php if (!empty($settings['layout_two_section_subtitle'])) : ?>
                    <<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?> class="wow fadeInUp sec-sub-title" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['layout_two_section_subtitle']); ?></<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?>>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php
                if (!empty($settings['layout_two_team_members'])) :
                    foreach ($settings['layout_two_team_members'] as $index => $item) :
                        $delay = ($index * 0.2) + 0.3;
                ?>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="team-single-item">
                                <div class="team-image">
                                    <?php if (!empty($item['layout_two_team_image']['url'])) : ?>
                                        <?php rt_elementor_rendered_image($item, 'layout_two_team_image'); ?>
                                    <?php endif; ?>
                                    <?php if (!empty($item['layout_two_team_icon'])) : ?>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($item['layout_two_team_icon'], ['aria-hidden' => 'true']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="team-content">
                                    <?php if (!empty($item['layout_two_team_name'])) : ?>
                                        <h3 class="name">
                                            <?php if (!empty($item['layout_two_member_link']['url'])) : ?>
                                                <a href="<?php echo esc_url($item['layout_two_member_link']['url']); ?>"
                                                    <?php echo !empty($item['layout_two_member_link']['is_external']) ? 'target="_blank"' : ''; ?>
                                                    <?php echo !empty($item['layout_two_member_link']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                                    <?php echo esc_html($item['layout_two_team_name']); ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo esc_html($item['layout_two_team_name']); ?>
                                            <?php endif; ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (!empty($item['layout_two_team_designation'])) : ?>
                                        <p><?php echo esc_html($item['layout_two_team_designation']); ?></p>
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
    </section>
<?php endif; ?>