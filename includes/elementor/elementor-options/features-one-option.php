<?php

//content
$this->start_controls_section(
	'layout_one_section',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one',
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
		'default' => esc_html__('Travel Made Easy With Us', 'roavio-toolkit'),
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
		'default' => esc_html__('We believe travel is more than just a trip—it\'s an experience that shapes your life. Our mission is to create unforgettable journeys', 'roavio-toolkit'),
	]
);

// Feature Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_box_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-cutlery',
			'library' => 'flaticon',
		],
	]
);

$repeater->add_control(
	'layout_one_box_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Organic Food and Restaurant', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_box_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'default' => esc_html__('Indulge in a culinary journey like no other with our handpicked restaurant selections.', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_box_link',
	[
		'label' => esc_html__('Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
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
				'layout_one_box_icon' => [
					'value' => 'flaticon-cutlery',
					'library' => 'flaticon',
				],
				'layout_one_box_title' => esc_html__('Organic Food and Restaurant', 'roavio-toolkit'),
				'layout_one_box_description' => esc_html__('Indulge in a culinary journey like no other with our handpicked restaurant selections.', 'roavio-toolkit'),
				'layout_one_box_link' => [
					'url' => '#',
				],
			],
			[
				'layout_one_box_icon' => [
					'value' => 'flaticon-swimming-pool',
					'library' => 'flaticon',
				],
				'layout_one_box_title' => esc_html__('Swimming pools and relaxation', 'roavio-toolkit'),
				'layout_one_box_description' => esc_html__('Dive into relaxation with our crystal-clear swimming pools designed for every mood', 'roavio-toolkit'),
				'layout_one_box_link' => [
					'url' => '#',
				],
			],
			[
				'layout_one_box_icon' => [
					'value' => 'flaticon-stationary-bike',
					'library' => 'flaticon',
				],
				'layout_one_box_title' => esc_html__('Yoga GYM and fitness center', 'roavio-toolkit'),
				'layout_one_box_description' => esc_html__('Stay active and energized during your travels with our state-of-the-art fitness center.', 'roavio-toolkit'),
				'layout_one_box_link' => [
					'url' => '#',
				],
			],
			[
				'layout_one_box_icon' => [
					'value' => 'flaticon-washing-machine',
					'library' => 'flaticon',
				],
				'layout_one_box_title' => esc_html__('Fresh & Clean Laundry Service', 'roavio-toolkit'),
				'layout_one_box_description' => esc_html__('Indulge in a culinary journey like no other with our handpicked restaurant selections.', 'roavio-toolkit'),
				'layout_one_box_link' => [
					'url' => '#',
				],
			],
		],
		'title_field' => '{{{ layout_one_box_title }}}',
	]
);


$this->end_controls_section();
