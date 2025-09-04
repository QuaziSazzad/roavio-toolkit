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
	'feature_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-idea',
			'library' => 'flaticon',
		],
	]
);

$repeater->add_control(
	'feature_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Customizable Solutions', 'roavio-toolkit'),
		'placeholder' => esc_html__('Feature Title', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'feature_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Providing highly customizable solutions tailored to each client\'s unique needs can set you apart. Clients are looking.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_feature_items',
	[
		'label' => esc_html__('Feature Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'feature_icon' => [
					'value' => 'flaticon-idea',
					'library' => 'flaticon',
				],
				'feature_title' => esc_html__('Customizable Solutions', 'roavio-toolkit'),
				'feature_description' => esc_html__('Providing highly customizable solutions tailored to each client\'s unique needs can set you apart. Clients are looking.', 'roavio-toolkit'),
			],
			[
				'feature_icon' => [
					'value' => 'flaticon-grow',
					'library' => 'flaticon',
				],
				'feature_title' => esc_html__('Scalability & Flexibility', 'roavio-toolkit'),
				'feature_description' => esc_html__('Scalable solutions allow companies to grow without needing to overhaul their software infrastructure architecture.', 'roavio-toolkit'),
			],
			[
				'feature_icon' => [
					'value' => 'flaticon-data-protection',
					'library' => 'flaticon',
				],
				'feature_title' => esc_html__('Security & Compliance', 'roavio-toolkit'),
				'feature_description' => esc_html__('Prioritizing security ensures protection and compliance with industry standards and regulations, safeguarding against.', 'roavio-toolkit'),
			],
			[
				'feature_icon' => [
					'value' => 'flaticon-graphic-design',
					'library' => 'flaticon',
				],
				'feature_title' => esc_html__('User-Friendly Interface', 'roavio-toolkit'),
				'feature_description' => esc_html__('Accessibility features, and thoughtful design help clients and their teams adapt quickly and use the solution effectively.', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ feature_title }}}',
	]
);

$this->end_controls_section();
