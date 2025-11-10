<?php

//content
$this->start_controls_section(
	'layout_three_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_three'
		]
	]
);

// First Counter Box (Left Column - Top)
$this->add_control(
	'layout_three_counter_one_heading',
	[
		'label' => esc_html__('First Counter Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_three_counter_one_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-costumer',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_three_counter_one_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '28000',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_counter_one_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_counter_one_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'We take pride in serving thousands of satisfied clients worldwide delivering exceptional',
		'label_block' => true,
	]
);

// Second Counter Box (Left Column - Bottom)
$this->add_control(
	'layout_three_counter_two_heading',
	[
		'label' => esc_html__('Second Counter Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_three_counter_two_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-excursion',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_three_counter_two_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '100',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_counter_two_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_counter_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Our professional local tour guides bring every destination to life with deep knowledge',
		'label_block' => true,
	]
);

// Center Image
$this->add_control(
	'layout_three_center_image_heading',
	[
		'label' => esc_html__('Center Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_three_center_image',
	[
		'label' => esc_html__('Choose Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

// Third Counter Box (Right Column - Top)
$this->add_control(
	'layout_three_counter_three_heading',
	[
		'label' => esc_html__('Third Counter Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_three_counter_three_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-suitcase',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_three_counter_three_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '3000',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_counter_three_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_counter_three_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Discover the magic of world tours available in town designed to bring you closer.',
		'label_block' => true,
	]
);

// Right Bottom Image
$this->add_control(
	'layout_three_right_image_heading',
	[
		'label' => esc_html__('Right Bottom Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_three_right_image',
	[
		'label' => esc_html__('Choose Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);


$this->end_controls_section();
