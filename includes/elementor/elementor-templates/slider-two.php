<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <section class="hero-secton hero-3 fix">
        <div class="swiper heros-slider">
            <div class="swiper-wrapper">
                <?php foreach ($settings['layout_two_slides'] as $slide) : ?>
                    <div class="swiper-slide">
                        <div class="hero-image">
                            <?php rt_elementor_rendered_image($slide, 'layout_two_slide_image'); ?>
                            <div class="hero-content">
                                <?php if (!empty($slide['layout_two_slide_title'])) : ?>
                                    <<?php echo esc_attr($slide['layout_two_title_tag']); ?>><?php echo rt_kses_basic($slide['layout_two_slide_title']); ?></<?php echo esc_attr($slide['layout_two_title_tag']); ?>>
                                <?php endif; ?>

                                <?php if (!empty($slide['layout_two_slide_description'])) : ?>
                                    <p><?php echo rt_kses_basic($slide['layout_two_slide_description']); ?></p>
                                <?php endif; ?>

                                <?php if (!empty($slide['layout_two_slide_button_text'])) : ?>
                                    <a href="<?php echo esc_url($slide['layout_two_slide_button_url']['url']); ?>"
                                        class="theme-btn color"
                                        <?php echo ($slide['layout_two_slide_button_url']['is_external']) ? ' target="_blank"' : ''; ?>
                                        <?php echo ($slide['layout_two_slide_button_url']['nofollow']) ? ' rel="nofollow"' : ''; ?>>
                                        <?php echo esc_html($slide['layout_two_slide_button_text']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="hero-box bg-cover" style="background-image: url(<?php echo esc_url($slide['layout_two_box_background']['url']); ?>);">
                                <div class="top-item">
                                    <div class="cont">
                                        <?php if (!empty($slide['layout_two_tours_count'])) : ?>
                                            <h2><span class="count"><?php echo esc_html($slide['layout_two_tours_count']); ?></span>+</h2>
                                        <?php endif; ?>

                                        <?php if (!empty($slide['layout_two_tours_text'])) : ?>
                                            <p><?php echo esc_html($slide['layout_two_tours_text']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="small-image">
                                        <?php rt_elementor_rendered_image($slide, 'layout_two_small_image'); ?>
                                    </div>
                                </div>
                                <div class="bottom-item">
                                    <div class="box">
                                        <?php if (!empty($slide['layout_two_rating'])) : ?>
                                            <h2><?php echo esc_html($slide['layout_two_rating']); ?></h2>
                                        <?php endif; ?>
                                    </div>
                                    <div class="right-content">
                                        <?php rt_elementor_rendered_image($slide, 'layout_two_rating_icon'); ?>

                                        <?php if ('yes' === $slide['layout_two_show_stars']) : ?>
                                            <div class="star">
                                                <?php for ($i = 0; $i < intval($slide['layout_two_stars_count']); $i++) : ?>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php endfor; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>