<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Team-Detailsr Section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="team-details-image">
                            <?php rt_elementor_rendered_image($settings, 'layout_one_team_image'); ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="team-details-content">
                            <div class="details-info">
                                <?php if (!empty($settings['layout_one_team_name'])) : ?>
                                    <<?php echo esc_attr($settings['layout_one_team_name_tag']); ?>><?php echo rt_kses_basic($settings['layout_one_team_name']); ?></<?php echo esc_attr($settings['layout_one_team_name_tag']); ?>>
                                <?php endif; ?>
                                <?php if (!empty($settings['layout_one_team_designation'])) : ?>
                                    <span><?php echo rt_kses_basic($settings['layout_one_team_designation']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($settings['layout_one_team_description'])) : ?>
                                <p class="mt-3">
                                    <?php echo rt_kses_basic($settings['layout_one_team_description']); ?>
                                </p>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_one_skills'])) : ?>
                                <div class="progress-area mt-4">
                                    <div class="progress-wrap">
                                        <?php foreach ($settings['layout_one_skills'] as $skill) : ?>
                                            <div class="pro-items">
                                                <div class="pro-head">
                                                    <h6 class="title">
                                                        <?php echo rt_kses_basic($skill['layout_one_skill_title']); ?>
                                                    </h6>
                                                    <span class="point">
                                                        <?php echo esc_html($skill['layout_one_skill_percentage']['size']); ?>%
                                                    </span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" data-wow-duration=".9s" role="progressbar" style="width: <?php echo esc_attr($skill['layout_one_skill_percentage']['size']); ?>%;" aria-valuenow="<?php echo esc_attr($skill['layout_one_skill_percentage']['size']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_one_social_icons'])) : ?>
                                <div class="social-icon">
                                    <?php if (!empty($settings['layout_one_social_label'])) : ?>
                                        <span><?php echo rt_kses_basic($settings['layout_one_social_label']); ?></span>
                                    <?php endif; ?>
                                    <?php foreach ($settings['layout_one_social_icons'] as $social) : ?>
                                        <a href="<?php echo esc_url($social['layout_one_social_link']['url']); ?>" <?php echo ($social['layout_one_social_link']['is_external']) ? 'target="_blank"' : ''; ?> <?php echo ($social['layout_one_social_link']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                            <?php \Elementor\Icons_Manager::render_icon($social['layout_one_social_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if (!empty($settings['layout_one_education_items'])) : ?>
                    <div class="team-single-history pt-5">
                        <?php if (!empty($settings['layout_one_education_title'])) : ?>
                            <div class="title">
                                <<?php echo esc_attr($settings['layout_one_education_title_tag']); ?>><?php echo rt_kses_basic($settings['layout_one_education_title']); ?></<?php echo esc_attr($settings['layout_one_education_title_tag']); ?>>
                            </div>
                        <?php endif; ?>
                        <?php foreach ($settings['layout_one_education_items'] as $education) : ?>
                            <h5 class="pt-5">
                                <?php echo rt_kses_basic($education['layout_one_education_degree']); ?>
                                <?php if (!empty($education['layout_one_education_period'])) : ?>
                                    <span><?php echo rt_kses_basic($education['layout_one_education_period']); ?></span>
                                <?php endif; ?>
                            </h5>
                            <?php if (!empty($education['layout_one_education_description'])) : ?>
                                <p class="mt-3">
                                    <?php echo rt_kses_basic($education['layout_one_education_description']); ?>
                                </p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>