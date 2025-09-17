<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <section class="hero-section hero-2 fix bg-cover" style="background-image: url(assets/img/home-2/hero/hero-bg.jpg);">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="hero-content">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup wow fadeInUp" data-wow-delay=".3s">
                            <i class="fa-duotone fa-play"></i>
                        </a>
                        <?php if ($settings['layout_two_sub_title']) : ?>
                            <<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?> class="wow fadeInUp" data-wow-delay=".5s"><?php echo rt_kses_basic($settings['layout_two_sub_title']); ?></<?php echo esc_attr($settings['layout_two_sub_title_tag']); ?>>
                        <?php endif; ?>
                        <?php if ($settings['layout_two_title']) : ?>
                            <<?php echo esc_attr($settings['layout_two_title_tag']); ?> class="wow img-custom-anim-left"><?php echo rt_kses_basic($settings['layout_two_title']); ?></<?php echo esc_attr($settings['layout_two_title_tag']); ?>>
                        <?php endif; ?>
                        <div class="from-box wow fadeInUp" data-wow-delay=".3s">
                            <?php if (!empty($settings['layout_two_search_title'])) : ?>
                                <h3><?php echo rt_kses_basic($settings['layout_two_search_title']); ?></h3>
                            <?php endif; ?>
                            <div class="box-item-2">
                                <div class="form-clt">
                                    <div class="form">
                                        <select class="single-select w-100">
                                            <option>Where to go</option>
                                            <option>Travel destinations</option>
                                            <option>Local places</option>
                                            <option>Adventure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-clt">
                                    <div class="form">
                                        <select class="single-select w-100">
                                            <option>Where to go</option>
                                            <option>Travel destinations</option>
                                            <option>Local places</option>
                                            <option>Adventure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-clt">
                                    <div class="form">
                                        <select class="single-select w-100">
                                            <option>Travel type</option>
                                            <option>Travel destinations</option>
                                            <option>Local places</option>
                                            <option>Adventure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-clt">
                                    <button class="theme-btn" type="submit">
                                        Find Tours
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>