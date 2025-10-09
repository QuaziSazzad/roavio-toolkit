<?php

if ('layout_four' == $settings['layout_type']) :
    $post_id = get_the_ID();
?>
    <div class="tour-details-side">
        <div class="tour-details-sidebar sticky-style">
            <?php echo BABE_html::booking_form($post_id); ?>
        </div>
    </div>
<?php endif; ?>