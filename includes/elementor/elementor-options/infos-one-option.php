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


$this->add_control(
	'layout_one_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('All-in-one travel assistance', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_title_tag',
	[
		'label' => esc_html__('Title Tag', 'roavio-toolkit'),
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
	'layout_one_sub_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Crafting journeys, creating memories plan smarter, travel better', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your Title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_sub_title_tag',
	[
		'label' => esc_html__('Sub Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'p',
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

$repeater = new \Elementor\Repeater();


$repeater->add_control(
	'layout_one_item_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Flight Booking & Reservation', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_item_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Take the stress to travel with our seamless flight booking and reservation services.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_item_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-traveling-1',
			'library' => 'flaticon',
		],
	]
);

$repeater->add_control(
	'layout_one_item_icon_style',
	[
		'label' => esc_html__('Icon Style', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => '',
		'options' => [
			'' => esc_html__('Default', 'roavio-toolkit'),
			'style-2' => esc_html__('Style 2', 'roavio-toolkit'),
		],
	]
);

$this->add_control(
	'layout_one_info_items',
	[
		'label' => esc_html__('Feature Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_item_icon' => 'flaticon-traveling-1',
				'layout_one_item_icon_style' => '',
				'layout_one_item_title' => esc_html__('Flight Booking & Reservation', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Take the stress to travel with our seamless flight booking and reservation services.', 'roavio-toolkit'),
			],
			[
				'layout_one_item_icon' => 'flaticon-hot-air-balloon',
				'layout_one_item_icon_style' => '',
				'layout_one_item_title' => esc_html__('Hotel & Resort Accommodation', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Enjoy a perfect stay with our carefully selected hotels and resorts.', 'roavio-toolkit'),
			],
			[
				'layout_one_item_icon' => 'flaticon-passport',
				'layout_one_item_icon_style' => 'style-2',
				'layout_one_item_title' => esc_html__('Visa & Travel Assistance', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Travel confidently with our comprehensive Visa & Travel Assistance services.', 'roavio-toolkit'),
			],
			[
				'layout_one_item_icon' => 'flaticon-tent',
				'layout_one_item_icon_style' => 'style-2',
				'layout_one_item_title' => esc_html__('Customized & Private Tours', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('We design itineraries that match your interests, schedule, and budget.', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_item_title }}}',
	]
);



$this->end_controls_section();
