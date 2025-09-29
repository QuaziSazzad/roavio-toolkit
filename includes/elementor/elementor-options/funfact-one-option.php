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

// Section Title
$this->add_control(
	'layout_one_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Unlimited travel experience', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter section title', 'roavio-toolkit'),
	]
);

// Section Title Tag
$this->add_control(
	'layout_one_title_tag',
	[
		'label' => esc_html__('Section Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h2',
		'options' => [
			'h1' => esc_html__('H1', 'roavio-toolkit'),
			'h2' => esc_html__('H2', 'roavio-toolkit'),
			'h3' => esc_html__('H3', 'roavio-toolkit'),
			'h4' => esc_html__('H4', 'roavio-toolkit'),
			'h5' => esc_html__('H5', 'roavio-toolkit'),
			'h6' => esc_html__('H6', 'roavio-toolkit'),
			'div' => esc_html__('div', 'roavio-toolkit'),
			'span' => esc_html__('span', 'roavio-toolkit'),
			'p' => esc_html__('p', 'roavio-toolkit'),
		],
	]
);

// Section Description
$this->add_control(
	'layout_one_section_description',
	[
		'label' => esc_html__('Section Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'default' => esc_html__('Crafting journeys, creating memories plan smarter, travel better', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter section description', 'roavio-toolkit'),
	]
);

// Counter Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_counter_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-costumer',
			'library' => 'solid',
		],
	]
);

$repeater->add_control(
	'layout_one_counter_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('30', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter counter number', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_counter_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('k+', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter suffix (e.g., k+, +, %)', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_counter_title',
	[
		'label' => esc_html__('Counter Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Total worldwide satisfied clients', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter counter title', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_counter_items',
	[
		'label' => esc_html__('Counter Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_counter_icon' => [
					'value' => 'flaticon-costumer',
					'library' => 'solid',
				],
				'layout_one_counter_number' => esc_html__('30', 'roavio-toolkit'),
				'layout_one_counter_suffix' => esc_html__('k+', 'roavio-toolkit'),
				'layout_one_counter_title' => esc_html__('Total worldwide satisfied clients', 'roavio-toolkit'),
			],
			[
				'layout_one_counter_icon' => [
					'value' => 'flaticon-suitcase',
					'library' => 'solid',
				],
				'layout_one_counter_number' => esc_html__('500', 'roavio-toolkit'),
				'layout_one_counter_suffix' => esc_html__('+', 'roavio-toolkit'),
				'layout_one_counter_title' => esc_html__('World tours available in toun', 'roavio-toolkit'),
			],
			[
				'layout_one_counter_icon' => [
					'value' => 'flaticon-excursion',
					'library' => 'solid',
				],
				'layout_one_counter_number' => esc_html__('20', 'roavio-toolkit'),
				'layout_one_counter_suffix' => esc_html__('+', 'roavio-toolkit'),
				'layout_one_counter_title' => esc_html__('Professional local tour guides', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_counter_title }}}',
	]
);


$this->end_controls_section();
