<?php if ('layout_four' == $settings['layout_type']) : ?>
    <div class="container">
        <div class="row <?php echo esc_attr($settings['layout_four_gap']); ?>">
            <?php
            if (!empty($settings['layout_four_gallery_items'])) :
                foreach ($settings['layout_four_gallery_items'] as $item) :
                    $column_class = !empty($item['layout_four_column']) ? $item['layout_four_column'] : 'col-xl-3';
            ?>
                    <div class="<?php echo esc_attr($column_class); ?> col-lg-4 col-md-6">
                        <div class="details-image">
                            <?php rt_elementor_rendered_image($item, 'layout_four_image'); ?>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
<?php endif; ?>