<?php

//content
$this->start_controls_section(
	'layout_two_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_two'
		]
	]
);

$layout_two_sliding_text = new \Elementor\Repeater();

$layout_two_sliding_text->add_control(
	'text',
	[
		'label' => esc_html__('Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'rows' => '2',
		'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
		'default' => esc_html__('Get In Touch', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_two_sliding_text->add_control(
	'separator',
	[
		'label' => esc_html__('Separator', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'rows' => '2',
		'placeholder' => esc_html__('Add Separator', 'roavio-toolkit'),
		'default' => esc_html__('_', 'roavio-toolkit'),
		'label_block' => true
	]
);


$this->add_control(
	'layout_two_sliding_text',
	[
		'label' => esc_html__('Sliding Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_two_sliding_text->get_controls(),
		'prevent_empty' => false,
		'title_field' => '{{{ text }}}',
	]
);


$this->end_controls_section();
