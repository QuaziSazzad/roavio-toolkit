<?php if ('layout_one' == $settings['layout_type']) : ?>
    <?php
    $settings = $this->get_settings_for_display();
    $title = $settings['layout_one_title'];
    $title_tag = $settings['layout_one_title_tag'];
    $description = $settings['layout_one_description'];
    $tabs = $settings['layout_one_tabs'];
    $faq_items = $settings['layout_one_faq_items'];
    ?>
    <div class="faq-wrapper">
        <div class="faq-left-content">
            <div class=" mb-0">
                <?php printf('<%1$s class="sec-title">%2$s</%1$s>', esc_html($title_tag), esc_html($title)); ?>
            </div>
            <p class="text description">
                <?php echo esc_html($description); ?>
            </p>

            <!-- Tab Navigation -->
            <ul class="nav" role="tablist">
                <?php
                $tab_delay = 0.2;
                foreach ($tabs as $index => $tab) :
                    $is_active = $tab['is_active'] === 'yes' ? 'active' : '';
                    $tab_id = esc_attr($tab['tab_id']);
                ?>
                    <li class="nav-item <?php echo $index === 0 ? 'style-2' : ''; ?> wow fadeInUp" data-wow-delay="<?php echo esc_attr($tab_delay); ?>s">
                        <a href="#<?php echo $tab_id; ?>" data-bs-toggle="tab" class="nav-link <?php echo $is_active; ?>" aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>" role="tab">
                            <?php echo esc_html($tab['tab_title']); ?>
                        </a>
                    </li>
                <?php
                    $tab_delay += 0.2;
                endforeach;
                ?>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
                <?php foreach ($tabs as $tab) :
                    $tab_id = esc_attr($tab['tab_id']);
                    $is_active = $tab['is_active'] === 'yes' ? 'active show' : '';

                    // Filter FAQ items for this tab
                    $tab_faqs = array_filter($faq_items, function ($item) use ($tab_id) {
                        return $item['faq_tab_id'] === $tab_id;
                    });
                ?>
                    <div id="<?php echo $tab_id; ?>" class="tab-pane fade <?php echo $is_active; ?>" role="tabpanel">
                        <div class="faq-box-item">
                            <div class="faq-items-4">
                                <div class="accordion" id="accordion-<?php echo $tab_id; ?>">
                                    <?php
                                    $faq_counter = 1;
                                    foreach ($tab_faqs as $faq_index => $faq) :
                                        $unique_id = $tab_id . '-' . $faq_counter;
                                        $heading_id = 'heading-' . $unique_id;
                                        $collapse_id = 'collapse-' . $unique_id;
                                        $is_open = $faq['faq_is_open'] === 'yes';
                                        $collapsed_class = $is_open ? '' : 'collapsed';
                                        $show_class = $is_open ? 'show' : '';
                                        $expanded = $is_open ? 'true' : 'false';
                                    ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                                <button class="accordion-button <?php echo $collapsed_class; ?>"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                                                    aria-expanded="<?php echo esc_attr($expanded); ?>"
                                                    aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                                    <?php echo esc_html($faq_counter . '. ' . $faq['faq_question']); ?>
                                                </button>
                                            </h2>
                                            <div id="<?php echo esc_attr($collapse_id); ?>"
                                                class="accordion-collapse collapse <?php echo $show_class; ?>"
                                                aria-labelledby="<?php echo esc_attr($heading_id); ?>"
                                                data-bs-parent="#accordion-<?php echo $tab_id; ?>">
                                                <div class="accordion-body">
                                                    <p><?php echo wp_kses_post($faq['faq_answer']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        $faq_counter++;
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>