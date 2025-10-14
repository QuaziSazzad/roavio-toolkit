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


$this->add_control(
	'layout_two_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Why Choose Our Agency', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_title_tag',
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

$this->add_control(
	'layout_two_section_subtitle',
	[
		'label' => esc_html__('Section Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Crafting Join over 100,000 satisfied travelers who have experienced', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Repeater for feature boxes
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_box_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-traveling',
			'library' => 'solid',
		],
	]
);

$repeater->add_control(
	'layout_two_box_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Locally Crafted Journeys', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_box_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Every journey we offer is thoughtfully curated by locals who know their destinations best.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_feature_boxes',
	[
		'label' => esc_html__('Feature Boxes', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_box_title' => esc_html__('Locally Crafted Journeys', 'roavio-toolkit'),
				'layout_two_box_description' => esc_html__('Every journey we offer is thoughtfully curated by locals who know their destinations best.', 'roavio-toolkit'),
			],
			[
				'layout_two_box_title' => esc_html__('Self guided flexibility', 'roavio-toolkit'),
				'layout_two_box_description' => esc_html__('Enjoy the freedom to explore at your own pace with our self-guided flexibility.', 'roavio-toolkit'),
			],
			[
				'layout_two_box_title' => esc_html__('No hidden charge included', 'roavio-toolkit'),
				'layout_two_box_description' => esc_html__('We believe in transparent pricing, so what you see is exactly what you pay.', 'roavio-toolkit'),
			],
			[
				'layout_two_box_title' => esc_html__('Custom tours package', 'roavio-toolkit'),
				'layout_two_box_description' => esc_html__('Design your dream trip with our custom tour packages, tailored to your preferences', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_two_box_title }}}',
	]
);

// Background Images
$this->add_control(
	'layout_two_left_shape_image',
	[
		'label' => esc_html__('Left Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_right_shape_image',
	[
		'label' => esc_html__('Right Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_two_bottom_shape_image',
	[
		'label' => esc_html__('Bottom Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);


$this->end_controls_section();
