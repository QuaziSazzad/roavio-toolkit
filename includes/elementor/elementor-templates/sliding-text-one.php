<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Marquee Section Start -->
    <div class="marquee-section">
        <div class="mycustom-marque">
            <div class="scrolling-wrap style-2">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="comm">
                        <div></div>
                        <?php
                        if (!empty($settings['layout_one_sliding_texts'])) :
                            foreach ($settings['layout_one_sliding_texts'] as $item) :
                        ?>
                                <div class="cmn-textslide"><?php echo esc_html($item['layout_one_slide_text']); ?></div>
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