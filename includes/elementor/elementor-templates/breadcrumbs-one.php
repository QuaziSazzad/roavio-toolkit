<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Hero Section Start -->
    <div class="breadcrumb-wrapper-2 fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_one_background_image']['url']); ?>);">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <?php
                    $title_tag = $settings['layout_one_title_tag'];
                    printf(
                        '<%1$s class="wow fadeInUp" data-wow-delay=".3s">%2$s</%1$s>',
                        esc_attr($title_tag),
                        rt_kses_basic($settings['layout_one_title'])
                    );
                    ?>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="<?php echo esc_url($settings['layout_one_home_url']['url']); ?>">
                            <?php echo esc_html($settings['layout_one_home_text']); ?>
                        </a>
                    </li>
                    <li class="style-2">
                        <?php echo esc_html($settings['layout_one_current_page']); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>