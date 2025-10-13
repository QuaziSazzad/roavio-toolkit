<?php

//content
$this->start_controls_section(
	'layout_one_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_slide_text',
	[
		'label' => esc_html__('Slide Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Sweden', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_sliding_texts',
	[
		'label' => esc_html__('Sliding Text Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_slide_text' => esc_html__('Sweden', 'roavio-toolkit'),
			],
			[
				'layout_one_slide_text' => esc_html__('Denmark', 'roavio-toolkit'),
			],
			[
				'layout_one_slide_text' => esc_html__('Netherlands', 'roavio-toolkit'),
			],
			[
				'layout_one_slide_text' => esc_html__('Australia', 'roavio-toolkit'),
			],
			[
				'layout_one_slide_text' => esc_html__('Indonesia', 'roavio-toolkit'),
			],
			[
				'layout_one_slide_text' => esc_html__('New York', 'roavio-toolkit'),
			],
			[
				'layout_one_slide_text' => esc_html__('France', 'roavio-toolkit'),
			],
			[
				'layout_one_slide_text' => esc_html__('Italy', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_slide_text }}}',
	]
);

$this->end_controls_section();
