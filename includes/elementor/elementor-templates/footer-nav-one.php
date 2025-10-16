<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="single-footer-widget">
        <?php if (!empty($settings['layout_one_title'])) : ?>
            <div class="wid-title">
                <h4><?php echo esc_html($settings['layout_one_title']); ?></h4>
            </div>
        <?php endif; ?>
        <?php if (is_array($settings['layout_one_nav_menu'])) :  ?>
            <ul class="list-area">
                <?php foreach ($settings['layout_one_nav_menu'] as $nav_menu) : ?>
                    <li>
                        <a href="<?php echo esc_url($nav_menu['url']['url']); ?>" <?php if (!empty($nav_menu['url']['is_external'])) : ?> target="_blank" <?php endif; ?>>
                            <?php \Elementor\Icons_Manager::render_icon($nav_menu['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                            <?php echo esc_html($nav_menu['title']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
<?php endif; ?>