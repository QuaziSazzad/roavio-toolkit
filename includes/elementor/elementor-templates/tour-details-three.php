<?php if ('layout_three' == $settings['layout_type']) : ?>
    <div class="tour-details-wrappers">
        <div class="tour-details-content">
            <div class="tour-left-content">
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>