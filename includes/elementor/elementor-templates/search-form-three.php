<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <section class="hero-section hero-4 bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_three_background_image']['url']); ?>);">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <?php if (!empty($settings['layout_three_title'])) : ?>
                            <<?php echo esc_attr($settings['layout_three_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".3s">
                                <?php echo rt_kses_basic($settings['layout_three_title']); ?>
                            </<?php echo esc_attr($settings['layout_three_title_tag']); ?>>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_three_description'])) : ?>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                <?php echo rt_kses_basic($settings['layout_three_description']); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero-image">
                        <?php if (!empty($settings['layout_three_image']['url'])) : ?>
                            <img data-speed=".8" src="<?php echo esc_url($settings['layout_three_image']['url']); ?>" alt="<?php echo esc_attr($settings['layout_three_title']); ?>" class="wow img-custom-anim-right">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-11">
                    <div class="from-box wow fadeInUp" data-wow-delay=".3s">
                        <?php if (!empty($settings['layout_three_form_title'])) : ?>
                            <h5><?php echo rt_kses_basic($settings['layout_three_form_title']); ?></h5>
                        <?php endif; ?>
                        <div class="box-item-2">
                            <div class="date-input w-100">
                                <input type="date">
                            </div>

                            <div class="date-input w-100">
                                <input type="date">
                            </div>
                            <div class="form-clt">
                                <div class="form">
                                    <select class="single-select w-100">
                                        <option><?php echo esc_html($settings['layout_two_location_label']); ?></option>
                                        <?php
                                        $locations = get_terms('ba_location', array('hide_empty' => false));
                                        foreach ($locations as $location) {
                                        ?>
                                            <option value="<?php echo esc_attr($location->slug); ?>"><?php echo esc_html($location->name); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-clt">
                                <div class="form">
                                    <select class="single-select w-100">
                                        <option><?php echo esc_html($settings['layout_two_tour_label']); ?></option>
                                        <?php
                                        $types = get_terms('ba_type', array('hide_empty' => false));
                                        foreach ($types as $type) {
                                        ?>
                                            <option value="<?php echo esc_attr($type->slug); ?>"><?php echo esc_html($type->name); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-clt">
                                <button class="theme-btn" type="submit">
                                    <?php echo esc_html($settings['layout_three_button_text']); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>