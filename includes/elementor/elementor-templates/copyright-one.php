<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper">
                <?php if (!empty($settings['layout_one_brand_text'])) : ?>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s"><?php echo rt_kses_basic($settings['layout_one_brand_text']); ?></h2>
                <?php endif; ?>
                <div class="text-item wow fadeInUp" data-wow-delay=".5s">
                    <?php if (!empty($settings['layout_one_copyright'])) : ?>
                        <p><?php echo rt_kses_basic($settings['layout_one_copyright']); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_one_enable_back_to_top'])) : ?>
                        <a href="#" class="icon"><i class="fa-solid fa-chevron-up"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>