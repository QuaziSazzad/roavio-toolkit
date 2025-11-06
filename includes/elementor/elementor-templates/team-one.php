<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Team Section-2 Start -->
    <div class="team-section section-padding fix">
        <div class="container">
            <?php if (!empty($settings['layout_one_section_title']) || !empty($settings['layout_one_section_subtitle'])): ?>
                <div class="section-title text-center">
                    <?php if (!empty($settings['layout_one_section_title'])): ?>
                        <<?php echo esc_attr($settings['layout_one_title_tag']); ?> class="text-anim sec-title">
                            <?php echo rt_kses_basic($settings['layout_one_section_title']); ?>
                        </<?php echo esc_attr($settings['layout_one_title_tag']); ?>>
                    <?php endif; ?>

                    <?php if (!empty($settings['layout_one_section_subtitle'])): ?>
                        <p class="wow fadeInUp sec-sub-title" data-wow-delay=".5s">
                            <?php echo rt_kses_basic($settings['layout_one_section_subtitle']); ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($settings['layout_one_team_members'])): ?>
                <div class="row">
                    <?php foreach ($settings['layout_one_team_members'] as $index => $member): ?>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="team-image-item">
                                <?php if (!empty($member['layout_one_team_image']['url'])): ?>
                                    <div class="team-image">
                                        <?php rt_elementor_rendered_image($member, 'layout_one_team_image'); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="team-content">
                                    <?php if (!empty($member['layout_one_team_name'])): ?>
                                        <h3>
                                            <?php if (!empty($member['layout_one_team_link']['url'])): ?>
                                                <a href="<?php echo esc_url($member['layout_one_team_link']['url']); ?>"
                                                    <?php echo $member['layout_one_team_link']['is_external'] ? 'target="_blank"' : ''; ?>
                                                    <?php echo $member['layout_one_team_link']['nofollow'] ? 'rel="nofollow"' : ''; ?>>
                                                    <?php echo esc_html($member['layout_one_team_name']); ?>
                                                </a>
                                            <?php else: ?>
                                                <?php echo esc_html($member['layout_one_team_name']); ?>
                                            <?php endif; ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (!empty($member['layout_one_team_designation'])): ?>
                                        <p><?php echo esc_html($member['layout_one_team_designation']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>