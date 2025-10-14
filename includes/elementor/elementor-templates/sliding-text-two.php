<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- Marquee Section Start -->
    <div class="marquee-section">
        <div class="mycustom-marque">
            <div class="scrolling-wrap">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="comm">
                        <div></div>
                        <?php
                        if (!empty($settings['layout_two_slides'])) :
                            foreach ($settings['layout_two_slides'] as $slide) :
                        ?>
                                <div class="cmn-textslide">
                                    <?php echo rt_kses_basic($slide['layout_two_slide_text']); ?>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
<?php endif; ?>