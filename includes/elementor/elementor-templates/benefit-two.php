<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Tour-benefit Section-2 Start -->
    <section class="tour-benefit-section-2 section-padding fix header-bg">
        <div class="container custom-container-4">
            <div class="section-title text-center">
                <?php if (!empty($settings['layout_two_title'])) : ?>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($settings['layout_two_title']); ?></h2>
                <?php endif; ?>
                <?php if (!empty($settings['layout_two_sub_title'])) : ?>
                    <p class="text-white wow fadeInUp" data-wow-delay=".5s"><?php echo wp_kses_post($settings['layout_two_sub_title']); ?></p>
                <?php endif; ?>
            </div>
            <div class="tour-benefit-wrapper-2">
                <span class="right-border"></span>
                <div class="row g-4 justify-content-center">
                    <?php if (!empty($settings['layout_two_benefit_items'])) : ?>
                        <?php foreach ($settings['layout_two_benefit_items'] as $index => $benefit) : ?>
                            <?php if ($index % 2 == 0) : ?>
                                <div class="col-xl-2 col-md-6 col-lg-4">
                                    <div class="tour-benefit-item-2">
                                        <?php if (!empty($benefit['benefit_icon']['value'])) : ?>
                                            <div class="icon">
                                                <?php \Elementor\Icons_Manager::render_icon($benefit['benefit_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="content">
                                            <?php if (!empty($benefit['benefit_title'])) : ?>
                                                <h5>
                                                    <a href="<?php echo esc_url(!empty($benefit['benefit_url']['url']) ? $benefit['benefit_url']['url'] : '#'); ?>"><?php echo esc_html($benefit['benefit_title']); ?></a>
                                                </h5>
                                            <?php endif; ?>
                                            <?php if (!empty($benefit['benefit_description'])) : ?>
                                                <p>
                                                    <?php echo wp_kses_post($benefit['benefit_description']); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-xl-2 col-md-6 col-lg-4">
                                    <div class="tour-benefit-image">
                                        <?php rt_elementor_rendered_image($benefit, 'benefit_image'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>