<?php

//content
$this->start_controls_section(
	'layout_eight_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_eight'
		]
	]
);


$this->add_control(
	'layout_eight_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('All-in-one travel assistance', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eight_title_tag',
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
	'layout_eight_subtitle',
	[
		'label' => esc_html__('Section Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Crafting journeys, creating memories plan smarter, travel better', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eight_sub_title_tag',
	[
		'label' => esc_html__('Section Sub Title Tag', 'roavio-toolkit'),
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

// Icon Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_eight_item_icon',
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
	'layout_eight_item_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Booking & Reservation', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_eight_item_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Take the stress to travel with seamless flight booking reservation services.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eight_items',
	[
		'label' => esc_html__('Travel Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_eight_item_icon' => [
					'value' => 'flaticon-traveling-1',
					'library' => 'flaticon',
				],
				'layout_eight_item_title' => esc_html__('Booking & Reservation', 'roavio-toolkit'),
				'layout_eight_item_description' => esc_html__('Take the stress to travel with seamless flight booking reservation services.', 'roavio-toolkit'),
			],
			[
				'layout_eight_item_icon' => [
					'value' => 'flaticon-hot-air-balloon',
					'library' => 'flaticon',
				],
				'layout_eight_item_title' => esc_html__('Hotel & Accommodation', 'roavio-toolkit'),
				'layout_eight_item_description' => esc_html__('Enjoy a perfect stay with our carefully selected hotels and resorts.', 'roavio-toolkit'),
			],
			[
				'layout_eight_item_icon' => [
					'value' => 'flaticon-passport',
					'library' => 'flaticon',
				],
				'layout_eight_item_title' => esc_html__('Visa & Travel Assistance', 'roavio-toolkit'),
				'layout_eight_item_description' => esc_html__('Travel confidently with comprehensive Visa & Travel Assistance services.', 'roavio-toolkit'),
			],
			[
				'layout_eight_item_icon' => [
					'value' => 'flaticon-tent',
					'library' => 'flaticon',
				],
				'layout_eight_item_title' => esc_html__('Customizable Tours', 'roavio-toolkit'),
				'layout_eight_item_description' => esc_html__('We design itineraries that match your interests, schedule, and budget.', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_eight_item_title }}}',
	]
);

// Right Side Image
$this->add_control(
	'layout_eight_image_heading',
	[
		'label' => esc_html__('Right Side Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_eight_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_eight_counter_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('150', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_eight_counter_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('+', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_eight_counter_description',
	[
		'label' => esc_html__('Counter Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('by over 2500+ global satisfied clients', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eight_rating_image',
	[
		'label' => esc_html__('Rating Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_eight_show_rating_stars',
	[
		'label' => esc_html__('Show Rating Stars', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'default' => 'yes',
	]
);

$this->add_control(
	'layout_eight_rating_stars',
	[
		'label' => esc_html__('Rating Stars', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => '5',
		'options' => [
			'1' => esc_html__('1 Star', 'roavio-toolkit'),
			'2' => esc_html__('2 Stars', 'roavio-toolkit'),
			'3' => esc_html__('3 Stars', 'roavio-toolkit'),
			'4' => esc_html__('4 Stars', 'roavio-toolkit'),
			'5' => esc_html__('5 Stars', 'roavio-toolkit'),
		],
		'condition' => [
			'layout_eight_show_rating_stars' => 'yes',
		],
	]
);



$this->end_controls_section();
