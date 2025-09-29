<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Video Section-2 Start -->
    <div class="video-section-2 fix bg-cover" <?php if (!empty($settings['layout_one_background_image']['url'])): ?>style="background-image: url(<?php echo esc_url($settings['layout_one_background_image']['url']); ?>);" <?php endif; ?>>
        <div class="container">
            <div class="video-content">
                <?php if (!empty($settings['layout_one_video_url']['url'])): ?>
                    <a href="<?php echo esc_url($settings['layout_one_video_url']['url']); ?>" class="video-btn video-popup">
                        <?php if (!empty($settings['layout_one_play_icon'])): ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_play_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                        <?php else: ?>
                            <i class="fa-duotone fa-play"></i>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>